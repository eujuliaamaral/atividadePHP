<?php
$arquivo_json = 'usuarios.json';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.html?error=1');
    exit;
}

$nome = trim($_POST['nome'] ?? '');
$email = trim($_POST['email'] ?? '');

if (empty($nome) || empty($email)) {
    header('Location: index.html?error=1');
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: index.html?error=1');
    exit;
}

$usuarios = [];
if (file_exists($arquivo_json)) {
    $conteudo = file_get_contents($arquivo_json);
    $usuarios = json_decode($conteudo, true);
    if (!is_array($usuarios)) {
        $usuarios = [];
    }
}

foreach ($usuarios as $usuario) {
    if (strtolower($usuario['email']) === strtolower($email)) {
        header('Location: index.html?error=2');
        exit;
    }
}

$novo_usuario = [
    'id' => count($usuarios) + 1,
    'nome' => htmlspecialchars($nome, ENT_QUOTES, 'UTF-8'),
    'email' => htmlspecialchars($email, ENT_QUOTES, 'UTF-8'),
    'data_cadastro' => date('Y-m-d H:i:s')
];

$usuarios[] = $novo_usuario;

if (file_put_contents($arquivo_json, json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE))) {
    header('Location: lista_usuarios.php?success=1');
} else {
    header('Location: index.html?error=1');
}
exit;
?>
