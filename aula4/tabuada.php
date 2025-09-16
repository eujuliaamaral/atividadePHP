<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Tabuada de 10</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-2xl mx-4">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <?php
            function tabuadaDe10($numero) {
                echo "<h2 class='text-2xl font-bold text-center text-gray-800 mb-6'>Tabuada de 10 até o número $numero:</h2>";
                echo "<div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4'>";
                for ($i = 1; $i <= $numero; $i++) {
                    $resultado = $i * 10;
                    echo "<div class='bg-blue-50 border border-blue-200 rounded-lg p-4 text-center hover:bg-blue-100 transition duration-200'>";
                    echo "<span class='text-lg font-semibold text-blue-800'>$i × 10 = $resultado</span>";
                    echo "</div>";
                }
                echo "</div>";
            }

            if (isset($_POST['numero'])) {
                $num = $_POST['numero'];
                tabuadaDe10($num);
                echo "<div class='mt-8 text-center'>";
                echo "<a href='tabuada.html' class='inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 transform hover:scale-105'>";
                echo "Voltar ao Gerador";
                echo "</a>";
                echo "</div>";
            } else {
                echo "<div class='text-center'>";
                echo "<h2 class='text-2xl font-bold text-red-600 mb-4'>Erro</h2>";
                echo "<p class='text-gray-600 mb-6'>Nenhum número foi enviado.</p>";
                echo "<a href='tabuada.html' class='inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 transform hover:scale-105'>";
                echo "Voltar ao Gerador";
                echo "</a>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>

