<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravar Frases - Aula 5</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md max-w-md w-full">
        <?php
        $arquivo = "frases.txt";

        $frases = [
            "Primeira frase gravada no arquivo.",
            "Segunda frase gravada no arquivo.",
            "Terceira frase gravada no arquivo."
        ];

        $handle = fopen($arquivo, "w");

        foreach ($frases as $frase) {
            fwrite($handle, $frase . PHP_EOL);
        }

        fclose($handle);

        echo "<h1 class='text-2xl font-bold mb-4'>Arquivo Gravado!</h1>";
        echo "<p class='mb-6'>As frases foram gravadas no arquivo <strong>$arquivo</strong> com sucesso!</p>";
        
        echo "<div class='mb-6'>";
        echo "<h3 class='font-semibold mb-2'>Frases gravadas:</h3>";
        foreach ($frases as $frase) {
            echo "<p class='text-sm text-gray-600'>• $frase</p>";
        }
        echo "</div>";

        echo "<div class='space-y-2'>";
        echo "<a href='ler.php' class='block bg-blue-500 text-white text-center py-2 px-4 rounded hover:bg-blue-600'>Ler Arquivo</a>";
        echo "<a href='index.html' class='block bg-gray-500 text-white text-center py-2 px-4 rounded hover:bg-gray-600'>Menu</a>";
        echo "</div>";
        ?>
    </div>
</body>
</html>
<!-- Atividade da aula 5, Manipulação de Arquivos (EXERCÍCIO 1) -->