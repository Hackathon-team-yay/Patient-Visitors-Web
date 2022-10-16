let createBtn = document.getElementById("submit");

function createAccount() {
    var password = document.getElementById("password").value;
    var email = document.getElementById("email").value;
    var firstName = document.getElementById("firstname").value;
    var lastName = document.getElementById("lastname").value;
    var address = document.getElementById("address").value;
    var city = document.getElementById("city").value;
    var state = document.getElementById("state").value;
    var zip = document.getElementById("zip").value;
    var phone = document.getElementById("phone").value;
    var dataString = '&password=' + password + '&email=' + email + '&firstname=' + firstName + '&lastname=' + lastName + '&address=' + address + '&phone=' + phone;
    if ( password == '' || email == '' || firstName == '' || lastName == '' || address == '' || phone == '') {
        alert("Please Fill All Fields");
    }
    else {
        $.post('/php/createAccount.php',{
            firstName: firstName,
            lastName: lastName,
                email: email,
                password: password,
                phone: phone,
                address: address,
                city: city,
                state: state,
                zip: zip
        });
    }
    return false;
}

createBtn.addEventListener('click', event => {
    createAccount();
});