<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header('Location: inicioSesion.php');
    exit();
}

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'serviciosemergencia');

try {
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
    $db = new PDO($dsn, DB_USER, DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die('Error de conexión: ' . $e->getMessage());
}

$mensaje = '';
$tipo_mensaje = '';

// Obtener información actual del usuario
$stmt = $db->prepare("SELECT * FROM Usuarios WHERE id = ? AND Email != 'admin@sistema.com'");
$stmt->execute([$_SESSION['usuario_id']]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$usuario) {
    header('Location: inicioSesion.php');
    exit();
}

// Inicializar campos que podrían ser nulos
$usuario['direccion'] = $usuario['direccion'] ?? '';
$usuario['pais'] = $usuario['pais'] ?? '';
$usuario['ciudad'] = $usuario['ciudad'] ?? '';
$usuario['municipio'] = $usuario['municipio'] ?? '';
$usuario['foto_perfil'] = $usuario['foto_perfil'] ?? '';

// Procesar actualización de perfil
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        if (isset($_POST['actualizar_perfil'])) {
            $nombre = trim($_POST['nombre']);
            $email = trim($_POST['email']);
            $direccion = trim($_POST['direccion'] ?? '');
            $pais = trim($_POST['pais'] ?? '');
            $ciudad = trim($_POST['ciudad'] ?? '');
            $municipio = trim($_POST['municipio'] ?? '');
            
            // Verificar email duplicado
            if ($email !== $usuario['Email']) {
                $stmt = $db->prepare("SELECT id FROM Usuarios WHERE Email = ? AND id != ?");
                $stmt->execute([$email, $_SESSION['usuario_id']]);
                if ($stmt->fetch()) {
                    throw new Exception('El correo electrónico ya está en uso.');
                }
            }
            
            // Procesar foto
            $foto_path = $usuario['foto_perfil'];
            if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
                $allowed = ['jpg', 'jpeg', 'png', 'gif'];
                $filename = $_FILES['foto']['name'];
                $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
                
                if (!in_array($ext, $allowed)) {
                    throw new Exception('Formato de imagen no permitido. Use: jpg, jpeg, png o gif');
                }
                
                $nuevo_nombre = uniqid() . "." . $ext;
                $upload_dir = "uploads/profiles/";
                
                if (!is_dir($upload_dir)) {
                    mkdir($upload_dir, 0777, true);
                }
                
                $destino = $upload_dir . $nuevo_nombre;
                
                if (move_uploaded_file($_FILES['foto']['tmp_name'], $destino)) {
                    if ($foto_path && file_exists($foto_path)) {
                        unlink($foto_path);
                    }
                    $foto_path = $destino;
                }
            }
            
            // Actualizar usuario
            $stmt = $db->prepare("
                UPDATE Usuarios 
                SET Nombre = ?, 
                    Email = ?, 
                    foto_perfil = ?,
                    direccion = ?,
                    pais = ?,
                    ciudad = ?,
                    municipio = ?
                WHERE id = ?");
            $stmt->execute([
                $nombre, 
                $email, 
                $foto_path,
                $direccion,
                $pais,
                $ciudad,
                $municipio, 
                $_SESSION['usuario_id']
            ]);
            
            $mensaje = 'Perfil actualizado correctamente.';
            $tipo_mensaje = 'success';
            
        } elseif (isset($_POST['cambiar_password'])) {
            $password_actual = $_POST['password_actual'];
            $password_nuevo = $_POST['password_nuevo'];
            $password_confirmar = $_POST['password_confirmar'];
            
            if (!password_verify($password_actual, $usuario['Contraseña'])) {
                throw new Exception('La contraseña actual es incorrecta.');
            }
            
            if (strlen($password_nuevo) < 8) {
                throw new Exception('La nueva contraseña debe tener al menos 8 caracteres.');
            }
            
            if ($password_nuevo !== $password_confirmar) {
                throw new Exception('Las nuevas contraseñas no coinciden.');
            }
            
            $password_hash = password_hash($password_nuevo, PASSWORD_DEFAULT);
            $stmt = $db->prepare("UPDATE Usuarios SET Contraseña = ? WHERE id = ?");
            $stmt->execute([$password_hash, $_SESSION['usuario_id']]);
            
            $mensaje = 'Contraseña actualizada correctamente.';
            $tipo_mensaje = 'success';
        }
    } catch (Exception $e) {
        $mensaje = $e->getMessage();
        $tipo_mensaje = 'error';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dashboard.css">
    <title>Mi Perfil</title>
    <link rel="icon" href="../Imagenes/Posible4.jpg" type="image/png">
</head>
<body>
    <div class="container">
        <header>
            <h1>Mi cuenta</h1>
            <a href="logout.php" class="logout-btn">Cerrar Sesión</a>
        </header>

        <?php if ($mensaje): ?>
            <div class="alert <?php echo $tipo_mensaje; ?>">
                <?php echo htmlspecialchars($mensaje); ?>
            </div>
        <?php endif; ?>

        <div class="profile-section">
            <div class="profile-header">
                <div class="profile-image">
                    <img src="<?php echo $usuario['foto_perfil'] ? htmlspecialchars($usuario['foto_perfil']) : 'default-profile.png'; ?>" 
                         alt="Foto de perfil">
                </div>
                <div class="profile-info">
                    <h2><?php echo htmlspecialchars($usuario['Nombre']); ?></h2>
                    <p><?php echo htmlspecialchars($usuario['Email']); ?></p>
                </div>
            </div>

            <div class="tabs">
                <button class="tab-button active" data-tab="perfil">Información Personal</button>
                <button class="tab-button" data-tab="password">Cambiar Contraseña</button>
            </div>

            <div id="perfil" class="tab-content active">
                <form action="" method="POST" enctype="multipart/form-data" class="form-grid">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" 
                               value="<?php echo htmlspecialchars($usuario['Nombre']); ?>" 
                               required>
                    </div>

                    <div class="form-group">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" 
                               value="<?php echo htmlspecialchars($usuario['Email']); ?>" 
                               required>
                    </div>

                    <div class="form-group">
                        <label for="direccion">Dirección:</label>
                        <input type="text" id="direccion" name="direccion" 
                               value="<?php echo htmlspecialchars($usuario['direccion']); ?>" 
                               required>
                    </div>

                    <div class="form-group">
                        <label for="pais">País:</label>
                        <input type="text" id="pais" name="pais" 
                               value="<?php echo htmlspecialchars($usuario['pais']); ?>" 
                               required>
                    </div>

                    <div class="form-group">
                        <label for="ciudad">Ciudad:</label>
                        <input type="text" id="ciudad" name="ciudad" 
                               value="<?php echo htmlspecialchars($usuario['ciudad']); ?>" 
                               required>
                    </div>

                    <div class="form-group">
                        <label for="municipio">Municipio:</label>
                        <input type="text" id="municipio" name="municipio" 
                               value="<?php echo htmlspecialchars($usuario['municipio']); ?>" 
                               required>
                    </div>

                    <div class="form-group">
                        <label for="foto">Foto de Perfil:</label>
                        <input type="file" id="foto" name="foto" accept="image/*">
                        <small class="form-text">Formatos permitidos: JPG, JPEG, PNG, GIF</small>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="actualizar_perfil" class="btn-primary">
                            Actualizar Perfil
                        </button>
                    </div>
                </form>
            </div>

            <div id="password" class="tab-content">
                <form action="" method="POST" class="form-grid">
                    <div class="form-group">
                        <label for="password_actual">Contraseña Actual:</label>
                        <input type="password" id="password_actual" name="password_actual" required>
                    </div>

                    <div class="form-group">
                        <label for="password_nuevo">Nueva Contraseña:</label>
                        <input type="password" id="password_nuevo" name="password_nuevo" 
                               required minlength="8">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmar">Confirmar Nueva Contraseña:</label>
                        <input type="password" id="password_confirmar" name="password_confirmar" 
                               required minlength="8">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="cambiar_password" class="btn-primary">
                            Cambiar Contraseña
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.tab-button').forEach(button => {
            button.addEventListener('click', () => {
                document.querySelectorAll('.tab-button').forEach(b => b.classList.remove('active'));
                document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
                
                button.classList.add('active');
                document.getElementById(button.dataset.tab).classList.add('active');
            });
        });

        document.getElementById('foto').addEventListener('change', function(e) {
            if (e.target.files && e.target.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.querySelector('.profile-image img').src = e.target.result;
                }
                reader.readAsDataURL(e.target.files[0]);
            }
        });
    </script>
</body>
</html>