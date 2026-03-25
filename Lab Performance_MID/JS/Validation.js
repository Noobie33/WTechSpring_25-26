const unitPrice = 1000;
const days = 30;

const quantityInput = document.getElementById("quantity");
const totalInput = document.getElementById("Tprice");

quantityInput.addEventListener("input", function(){

    let quantity = parseInt(quantityInput.value);

    if(quantity < 0){
        alert("Quantity cannot be negative!");
        quantity = 0;
        quantityInput.value = 0;
    }

    if(isNaN(quantity)){
        quantity = 0;
    }

    let Tprice = unitPrice * quantity * days;

    totalInput.value = Tprice;

    if(Tprice > 1000){
        alert("Congratulations! You are eligible for a gift coupon.");
    }

});