<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada Salva</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md max-w-2xl w-full">
        <?php
        function gerarTabuada($numero) {
            $resultado = "";
            for ($i = 1; $i <= 10; $i++) {
                $linha = "$i x $numero = " . ($i * $numero) . PHP_EOL;
                $resultado .= $linha;
            }
            $resultado .= str_repeat("-", 20) . PHP_EOL; // separador entre tabuadas
            return $resultado;
        }

        if (isset($_POST['numero'])) {
            $numero = $_POST['numero'];
            $arquivo = "tabuada.txt";

            $conteudo = gerarTabuada($numero);
            file_put_contents($arquivo, $conteudo, FILE_APPEND);

            echo "<h1 class='text-2xl font-bold mb-4'>Tabuada do $numero salva!</h1>";
            echo "<p class='mb-4'>Arquivo: <strong>$arquivo</strong></p>";
            echo "<div class='bg-gray-50 p-4 rounded mb-6'>";
            echo "<h3 class='font-semibold mb-2'>Conteúdo do arquivo:</h3>";
            echo "<pre class='text-sm'>" . file_get_contents($arquivo) . "</pre>";
            echo "</div>";
            
            echo "<div class='space-y-2'>";
            echo "<a href='tabuada.html' class='block bg-blue-500 text-white text-center py-2 px-4 rounded hover:bg-blue-600'>Gerar Outra Tabuada</a>";
            echo "<a href='../index.html' class='block bg-gray-500 text-white text-center py-2 px-4 rounded hover:bg-gray-600'>Menu</a>";
            echo "</div>";
        } else {
            echo "<h1 class='text-2xl font-bold mb-4 text-red-600'>Erro</h1>";
            echo "<p class='mb-4'>Nenhum número foi enviado.</p>";
            echo "<a href='tabuada.html' class='block bg-blue-500 text-white text-center py-2 px-4 rounded hover:bg-blue-600'>Voltar</a>";
        }
        ?>
    </div>
</body>
</html>
