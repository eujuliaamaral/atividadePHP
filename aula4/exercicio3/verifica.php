<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Verificar Nome</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-50 to-emerald-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-2xl mx-4">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <?php
            function verificarNome($nomeProcurado) {
                $lista = ["Maria", "João", "Ana", "Carlos", "Pedro"];

                $nomeProcuradoLower = strtolower($nomeProcurado);
                $listaMinuscula = array_map('strtolower', $lista);

                if (in_array($nomeProcuradoLower, $listaMinuscula)) {
                    $indice = array_search($nomeProcuradoLower, $listaMinuscula);
                    $nomeOriginal = $lista[$indice];

                    echo "<div class='text-center'>";
                    echo "<div class='inline-flex items-center justify-center w-16 h-16 bg-green-100 rounded-full mb-4'>";
                    echo "<svg class='w-8 h-8 text-green-600' fill='none' stroke='currentColor' viewBox='0 0 24 24'>";
                    echo "<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 13l4 4L19 7'></path>";
                    echo "</svg>";
                    echo "</div>";
                    echo "<h2 class='text-2xl font-bold text-green-800 mb-4'>Nome Encontrado!</h2>";
                    echo "<p class='text-lg text-gray-700 mb-6'>O nome <span class='font-bold text-green-600'>$nomeOriginal</span> foi encontrado na lista.</p>";
                    echo "</div>";
                } else {
                    echo "<div class='text-center'>";
                    echo "<div class='inline-flex items-center justify-center w-16 h-16 bg-red-100 rounded-full mb-4'>";
                    echo "<svg class='w-8 h-8 text-red-600' fill='none' stroke='currentColor' viewBox='0 0 24 24'>";
                    echo "<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M6 18L18 6M6 6l12 12'></path>";
                    echo "</svg>";
                    echo "</div>";
                    echo "<h2 class='text-2xl font-bold text-red-800 mb-4'>Nome Não Encontrado</h2>";
                    echo "<p class='text-lg text-gray-700 mb-6'>O nome <span class='font-bold text-red-600'>$nomeProcurado</span> não consta na lista.</p>";
                    echo "</div>";
                }
            }

            if (isset($_POST['nome'])) {
                $nome = $_POST['nome'];
                verificarNome($nome);
                
                echo "<div class='mt-8 p-4 bg-gray-50 rounded-lg'>";
                echo "<h3 class='text-sm font-semibold text-gray-600 mb-2'>Nomes disponíveis na lista:</h3>";
                echo "<div class='flex flex-wrap gap-2'>";
                $lista = ["Maria", "João", "Ana", "Carlos", "Pedro"];
                foreach ($lista as $nomeLista) {
                    echo "<span class='px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full'>$nomeLista</span>";
                }
                echo "</div>";
                echo "</div>";
                
                echo "<div class='mt-6 text-center'>";
                echo "<a href='verifica.html' class='inline-block bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 transform hover:scale-105'>";
                echo " Verificar Outro Nome";
                echo "</a>";
                echo "</div>";
            } else {
                echo "<div class='text-center'>";
                echo "<div class='inline-flex items-center justify-center w-16 h-16 bg-yellow-100 rounded-full mb-4'>";
                echo "<svg class='w-8 h-8 text-yellow-600' fill='none' stroke='currentColor' viewBox='0 0 24 24'>";
                echo "<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z'></path>";
                echo "</svg>";
                echo "</div>";
                echo "<h2 class='text-2xl font-bold text-yellow-800 mb-4'>Erro</h2>";
                echo "<p class='text-lg text-gray-700 mb-6'>Nenhum nome foi enviado.</p>";
                echo "<a href='verifica.html' class='inline-block bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 transform hover:scale-105'>";
                echo " Voltar ao Verificador";
                echo "</a>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>
