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

    if (!checkInput.test(textInput[3].value)) {
        textInput[3].style.color = 'red';
        return false;
    }
    else {
        textInput[3].style.color = 'black';
        return true;
    }
}

/*
function validateCardNumber() {
    let checkInput = new RegExp("^[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}$")
    if (document.getElementById('amex_card').checked == true) {
        checkInput = /^[0-9]{4}-[0-9]{6}-[0-9]{5}$/
    }
    else {
        checkInput = /^[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}$/
    }

    let textInput = document.getElementsByClassName('inputField');

    if (!checkInput.test(textInput[10].value)) {
        textInput[10].style.color = 'red';
        return false;
    }
    else {
        textInput[10].style.color = 'black';
        return true;
    }
}

function validateCardExpiry() {
    let checkInput = new RegExp("^(0[0-9]|1[0-2])/([2-9][0-9][1-9][8-9]|[2-9][0-9][2-9][0-9])$")
    let textInput = document.getElementsByClassName('inputField');

    if (!checkInput.test(textInput[11].value)) {
        textInput[11].style.color = 'red';
        return false;
    }
    else {
        textInput[11].style.color = 'black';
        return true;
    }
}
*/

function changeToUpperCase(id) {
    let tempElement = document.getElementById(id);
    tempElement.value = tempElement.value.toUpperCase();
}

function focusFirstElement() {
    document.getElementById('first_name').focus();
}

function submitOrder() {


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
 /*   let formList = document.getElementsByClassName('inputField');

    for (let i = 0; i < formList.length; i++) {
        if (formList[i].value == "" || !validatePhoneNumber() || !validateCardNumber() || !validateCardExpiry()) {
            formList[i].focus();
            return false;
        }
    }
*/
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "confirmationPage.php", true);
    xhttp.send();
}