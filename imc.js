document.addEventListener("DOMContentLoaded", function() {
    const imcForm = document.getElementById("imcForm");
    const result = document.getElementById("result");
    const imcValue = document.getElementById("imcValue");
    const imcCategory = document.getElementById("imcCategory");

    imcForm.addEventListener("submit", function(e) {
        e.preventDefault();
        const weight = parseFloat(document.getElementById("weight").value);
        const height = parseFloat(document.getElementById("height").value) / 100; // Convertir altura a metros
        const imc = weight / (height * height);
        imcValue.textContent = imc.toFixed(2);

        if (imc < 18.5) {
            imcCategory.textContent = "Peso insuficiente";
        } else if (imc < 24.9) {
            imcCategory.textContent = "Peso normal";
        } else if (imc < 29.9) {
            imcCategory.textContent = "Sobrepeso";
        } else {
            imcCategory.textContent = "Obesidad";
        }

        result.classList.remove("hidden");
    });
});

