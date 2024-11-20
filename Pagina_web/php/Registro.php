<?php
session_start();

// Configuración de la base de datos
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'serviciosemergencia');
define('DB_PORT', 3306);

// Función para conectar a la base de datos
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

// Función para validar el correo electrónico
function validarEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Función para validar la contraseña
function validarPassword($password) {
    // Mínimo 8 caracteres, al menos una letra y un número
    return strlen($password) >= 8 && 
           preg_match('/[A-Za-z]/', $password) && 
           preg_match('/[0-9]/', $password);
}

// Función para verificar si el email ya existe
function emailExiste($conn, $email) {
    $stmt = $conn->prepare("SELECT COUNT(*) FROM Usuarios WHERE Email = ?");
    $stmt->execute([$email]);
    return $stmt->fetchColumn() > 0;
}

// Procesar el registro
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = ['success' => false, 'message' => ''];
    
    try {
        // Obtener y limpiar datos
        $nombre = trim($_POST['nombre'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['contraseña'] ?? '';
        $repassword = $_POST['repass'] ?? '';
        
        // Validaciones
        if (empty($nombre) || empty($email) || empty($password) || empty($repassword)) {
            throw new Exception('Todos los campos son obligatorios');
        }
        
        if (!validarEmail($email)) {
            throw new Exception('El correo electrónico no es válido');
        }
        
        if (!validarPassword($password)) {
            throw new Exception('La contraseña debe tener al menos 8 caracteres, una letra y un número');
        }
        
        if ($password !== $repassword) {
            throw new Exception('Las contraseñas no coinciden');
        }
        
        // Conectar a la base de datos
        $conn = conectarDB();
        
        // Verificar si el email ya existe
        if (emailExiste($conn, $email)) {
            throw new Exception('El correo electrónico ya está registrado');
        }
        
        // Preparar y ejecutar la consulta
        $stmt = $conn->prepare("INSERT INTO Usuarios (Nombre, Email, Contraseña) VALUES (?, ?, ?)");
        
        // Hash de la contraseña
        $passwordHash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
        
        // Ejecutar la consulta
        $stmt->execute([$nombre, $email, $passwordHash]);
        
        // Registro exitoso
        $response['success'] = true;
        $response['message'] = 'Usuario registrado correctamente';
        
        // Iniciar sesión automáticamente
        $_SESSION['usuario_id'] = $conn->lastInsertId();
        $_SESSION['usuario_nombre'] = $nombre;
        $_SESSION['usuario_email'] = $email;
        
    } catch (Exception $e) {
        $response['message'] = $e->getMessage();
    }
    
    // Enviar respuesta
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}
?>