function calculateTotal(id, value) {
    let tempPrice;
    if (document.getElementById(id).checked) {
        tempPrice = parseFloat(document.getElementById('total').value) + parseFloat(value);
        document.getElementById('total').value = tempPrice.toFixed(2);
    }
    else {
        tempPrice = parseFloat(document.getElementById('total').value) - parseFloat(value);
        document.getElementById('total').value = tempPrice.toFixed(2);
    }
}

function validatePhoneNumber() {
    let checkInput = new RegExp("^[0-9]{3}-[0-9]{3}-[0-9]{4}$")
    let textInput = document.getElementsByClassName('inputField');

    if (!checkInput.test(textInput[1].value)) {
        textInput[1].style.color = 'red';
        return false;
    }
    else {
        textInput[1].style.color = 'black';
        return true;
    }
}

function checkboxReadOnly() {
    return false;
}

function changeToUpperCase(id) {
    let tempElement = document.getElementById(id);
    tempElement.value = tempElement.value.toUpperCase();
}

function focusFirstElement() {
    document.getElementById('first_name').focus();
}

function toOrderCatalog() {
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "orderCatalog.php", true);
    xhttp.send();
}

function toCart() {
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "viewCart.php", true);
    xhttp.send();
}

function refreshCart() {
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "viewCart.php", true);
    xhttp.send();
}

function toCheckout() {
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "checkoutPage.php", true);
    xhttp.send();
}

function submitConfirmation() {
    let formList = document.getElementsByClassName('inputField');

    for (let i = 0; i < formList.length; i++) {
        if (formList[i].value == "" || !validatePhoneNumber()) {
            formList[i].focus();
            return false;
        }
    }

    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "confirmationPage.php", true);
    xhttp.send();
}