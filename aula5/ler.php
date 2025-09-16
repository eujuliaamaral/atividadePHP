<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ler Arquivo - Aula 5</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md max-w-md w-full">
        <?php
        $arquivo = "frases.txt";

        if (file_exists($arquivo)) {
            $conteudo = file_get_contents($arquivo);
            
            echo "<h1 class='text-2xl font-bold mb-4'>Conteúdo do Arquivo</h1>";
            echo "<p class='mb-4'>Arquivo: <strong>$arquivo</strong></p>";
            echo "<div class='mb-6 p-4 bg-gray-50 rounded'>";
            echo "<h3 class='font-semibold mb-2'>Conteúdo:</h3>";
            echo nl2br($conteudo);
            echo "</div>";

        } else {
            echo "<h1 class='text-2xl font-bold mb-4 text-red-600'>Arquivo Não Encontrado</h1>";
            echo "<p class='mb-4'>O arquivo <strong>$arquivo</strong> não existe.</p>";
            echo "<p class='text-sm text-gray-600 mb-6'>Execute primeiro o grava.php para criar o arquivo.</p>";
        }

        echo "<div class='space-y-2'>";
        echo "<a href='grava.php' class='block bg-green-500 text-white text-center py-2 px-4 rounded hover:bg-green-600'>Gravar Arquivo</a>";
        echo "<a href='index.html' class='block bg-gray-500 text-white text-center py-2 px-4 rounded hover:bg-gray-600'>Menu</a>";
        echo "</div>";
        ?>
    </div>
</body>
</html>
