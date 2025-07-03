document.addEventListener('DOMContentLoaded', function() {
    const minusBtn = document.getElementById("minus");
    const plusBtn = document.getElementById("plus");
    const valueInput = document.getElementById("value");
    const stock = parseInt(document.getElementById("stock").value);

    minusBtn.onclick = function () {
        let value = parseInt(valueInput.value) || 1;
        if (value > 1) value--;
        valueInput.value = value;
    };

    plusBtn.onclick = function () {
        let value = parseInt(valueInput.value) || 1;
        if (value < stock) {
            value++;
            valueInput.value = value;
        } else {
            alert('Quantity melebihi stok yang tersedia!');
            // Langsung set ke maksimal stock
            valueInput.value = stock;
        }
    };

    // Validasi manual input
    valueInput.addEventListener('change', function() {
        let value = parseInt(valueInput.value) || 1;

        if (value < 1) {
            value = 1;
        } else if (value > stock) {
            alert('Quantity melebihi stok yang tersedia!');
            value = stock; // Langsung set ke maksimal stock
        }

        valueInput.value = value;
    });

});
