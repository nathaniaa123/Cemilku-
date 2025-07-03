document.addEventListener('DOMContentLoaded', function() {
    const minusBtn = document.getElementById("minus");
    const plusBtn = document.getElementById("plus");
    const valueInput = document.getElementById("value");

    minusBtn.onclick = function () {
        let value = parseInt(valueInput.value) || 1;
        if (value > 1) value--;
        valueInput.value = value;
    };

    plusBtn.onclick = function () {
        let value = parseInt(valueInput.value) || 1;
        value++;
        valueInput.value = value;
    };

    // Tambahan: Validasi kalau user ketik angka < 1
    valueInput.addEventListener('change', function() {
        let value = parseInt(valueInput.value) || 1;
        if (value < 1) value = 1;
        valueInput.value = value;
    });
});
