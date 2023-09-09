<!DOCTYPE html>
<html class="dark:bg-gray-900 dark:text-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <title>Calculadora de IMC</title>
</head>
<body class="bg-cover bg-center bg-opacity-50" style="background-image: url('night.avif');">
<div class="min-h-screen flex items-center justify-center animate__animated animate__fadeIn">
    <div class="bg-white bg-opacity-90 p-8 rounded-lg shadow-lg w-96 animate__animated animate__zoomIn">
            <h1 class="text-3xl font-semibold mb-4">Calculadora de IMC</h1>
            <form id="imcForm">
                <div class="mb-4">
                    <label for="weight" class="block font-medium">Peso (kg):</label>
                    <input type="number" id="weight" name="weight" class="w-full p-2 border rounded">
                </div>
                <div class="mb-4">
                    <label for="height" class="block font-medium">Altura (cm):</label>
                    <input type="number" id="height" name="height" class="w-full p-2 border rounded">
                </div>
                <div class="mb-4">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                        Calcular
                    </button>
                </div>
            </form>
            <div id="result" class="hidden">
                <h2 class="text-xl font-semibold mb-2">Resultado:</h2>
                <p id="imcValue" class="font-bold text-2xl mb-2"></p>
                <p id="imcCategory" class="text-gray-700"></p>
            </div>
 
        </div>
    </div>
    <script src="imc.js"></script>
</body>
</html>
