<?php
$arquivo_json = 'usuarios.json';

if (file_exists($arquivo_json)) {
    $conteudo = file_get_contents($arquivo_json);
    $usuarios = json_decode($conteudo, true);
} else {
    $usuarios = [];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-4">
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md">
        <div class="bg-blue-600 text-white p-6 rounded-t-lg">
            <h1 class="text-2xl font-bold">Usuários Cadastrados</h1>
            <p class="text-blue-100">Total: <?= count($usuarios) ?> usuários</p>
        </div>

        <div class="p-6">
            <?php if (isset($_GET['success']) && $_GET['success'] == '1'): ?>
                <div id="success-message" class="bg-green-100 text-green-700 p-3 rounded mb-4">
                    Usuário cadastrado com sucesso!
                </div>
                <script>
                    setTimeout(() => {
                        document.getElementById('success-message').style.display = 'none';
                    }, 3000);
                </script>
            <?php endif; ?>

            <?php if (empty($usuarios)): ?>
                <div class="text-center py-12">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Nenhum usuário cadastrado</h3>
                    <p class="text-gray-600 mb-6">Comece cadastrando o primeiro usuário.</p>
                    <a href="index.html" 
                       class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                        Cadastrar Usuário
                    </a>
                </div>
            <?php else: ?>
                <div class="space-y-3">
                    <?php foreach ($usuarios as $usuario): ?>
                        <div class="bg-gray-50 p-4 rounded border-l-4 border-blue-500">
                            <div class="flex flex-col sm:flex-row sm:items-center gap-4">

                                <div class="flex-1">
                                    <h3 class="text-lg font-semibold text-gray-900 mb-1"><?= htmlspecialchars($usuario['nome']) ?></h3>
                                    <p class="text-gray-600"><?= htmlspecialchars($usuario['email']) ?></p>
                                </div>
                                
                    
                                <div class="text-sm text-gray-500">
                                    ID: <?= $usuario['id'] ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <div class="text-center mt-6">
                <a href="index.html" 
                   class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                    Novo Cadastro
                </a>
            </div>
        </div>
    </div>
</body>
</html>
