<?php
// Iniciar sesión si no está iniciada
session_start();

// Verificar si el usuario ya está logueado
if (isset($_SESSION['usuario_id'])) {
    header('Location: dashboard.php');
    exit;
}

// Configuración de la base de datos
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'serviciosemergencia');
define('DB_PORT', 3306);

// Función para conectar a la base de datos usando PDO
function conectarDB() {
    try {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT;
        $opciones = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        return new PDO($dsn, DB_USER, DB_PASS, $opciones);
    } catch (PDOException $e) {
        die('Error de conexión: ' . $e->getMessage());
    }
}

// Procesar el inicio de sesión
$mensaje = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['contraseña'] ?? '';
        
        if (empty($email) || empty($password)) {
            throw new Exception('Por favor, complete todos los campos.');
        }

        $conn = conectarDB();
        
        // Buscar usuario
        $stmt = $conn->prepare("SELECT id, Nombre, Email, Contraseña FROM Usuarios WHERE Email = ?");
        $stmt->execute([$email]);
        $usuario = $stmt->fetch();

        if ($usuario && password_verify($password, $usuario['Contraseña'])) {
            // Iniciar sesión
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nombre'] = $usuario['Nombre'];
            $_SESSION['usuario_email'] = $usuario['Email'];

            // Establecer cookie si se marcó "recordar"
            if (isset($_POST['recordar'])) {
                $token = bin2hex(random_bytes(32));
                setcookie(
                    'recordar_token',
                    $token,
                    [
                        'expires' => time() + (30 * 24 * 60 * 60),
                        'path' => '/',
                        'secure' => true,
                        'httponly' => true,
                        'samesite' => 'Strict'
                    ]
                );

                // Guardar token en la base de datos
                $stmt = $conn->prepare("UPDATE Usuarios SET remember_token = ? WHERE id = ?");
                $stmt->execute([$token, $usuario['id']]);
            }

            header('Location: dashboard.php');
            exit;
        } else {
            throw new Exception('Credenciales incorrectas.');
        }
    } catch (Exception $e) {
        $mensaje = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Metadatos para SEO -->
    <meta name="description" content="Sistema de inicio de sesión para servicios de emergencia">
    <meta name="keywords" content="login, registro, emergencias, servicios">
    
    <!-- Preconexiones para mejorar el rendimiento -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Fuentes y estilos -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../css/InisioSesion.css">
    
    <title>Sistema de Emergencias - Inicio de Sesión</title>
    <link rel="icon" href="../Imagenes/Posible4.jpg" type="image/png">
</head>

<body>
    <div class="container">
        <div class="login-container">
            <!-- Sección de Registro -->
            <div class="register">
                <h2>Registrarse</h2>
                <form id="registerForm" action="registro.php" method="POST">
                    <input type="text" placeholder="Nombre" name="nombre" required 
                           minlength="2" maxlength="100" pattern="[A-Za-zÀ-ÿ\s]{2,100}">
                    
                    <input type="email" placeholder="Email" name="email" required>
                    
                    <input type="password" placeholder="Contraseña" name="contraseña" required 
                           minlength="8" id="password">
                           
                    <input type="password" placeholder="Confirma contraseña" name="repass" required 
                           minlength="8" id="repassword">
                           
                    <input type="submit" class="submit" value="REGISTRARSE">
                </form>
                <p><a href="index.php" class="back-link">Volver al Inicio</a></p>
            </div>

            <!-- Sección de Login -->
            <div class="login">
                <h2>Iniciar Sesión</h2>
                <?php if (!empty($mensaje)): ?>
                    <div class="alert alert-danger"><?php echo htmlspecialchars($mensaje); ?></div>
                <?php endif; ?>
                
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" id="email" name="email" 
                               placeholder="Ingresa tu correo electrónico"
                               value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>"
                               required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" id="loginPassword" name="contraseña"
                               placeholder="Ingresa tu contraseña"
                               required>
                    </div>
                    
                    <div class="remember-forgot">
                        <div class="checkbox-container">
                            <input type="checkbox" id="remember" name="recordar">
                            <label for="remember">Mantener sesión iniciada</label>
                        </div>
                        <a href="recuperar-password.php" class="forgot-password">¿Olvidaste tu contraseña?</a>
                    </div>
                    
                    <button type="submit" class="submit">INICIAR SESIÓN</button>
                </form>
                
                <div class="divider">
                    <h2>Continúa con</h2>
                </div>
                
                <div class="social-login">
                    <button type="button" class="social-button facebook" onclick="loginWithFacebook()">
                        <i class="fab fa-facebook-f"></i>
                        Facebook
                    </button>
                    <button type="button" class="social-button twitter" onclick="loginWithTwitter()">
                        <i class="fab fa-twitter"></i>
                        Twitter
                    </button>
                    <button type="button" class="social-button google" onclick="loginWithGoogle()">
                        <i class="fab fa-google"></i>
                        Google
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Validación del formulario de registro
        const registerForm = document.getElementById('registerForm');
        const password = document.getElementById('password');
        const repassword = document.getElementById('repassword');

        registerForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Validar que las contraseñas coincidan
            if (password.value !== repassword.value) {
                alert('Las contraseñas no coinciden');
                return;
            }

            // Enviar formulario de manera asíncrona
            fetch('registro.php', {
                method: 'POST',
                body: new FormData(this)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.message);
                    window.location.href = 'dashboard.php';
                } else {
                    alert(data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error al procesar el registro');
            });
        });

        // Funciones para login social (placeholders)
        window.loginWithFacebook = function() {
            alert('Función de login con Facebook en desarrollo');
        };

        window.loginWithTwitter = function() {
            alert('Función de login con Twitter en desarrollo');
        };

        window.loginWithGoogle = function() {
            alert('Función de login con Google en desarrollo');
        };
    });
    </script>
</body>
</html>