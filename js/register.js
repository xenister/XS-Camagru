let form = document.getElementById('register-form');
let XHR = new XMLHttpRequest();

console.log("tatatatatat");





// function validateEmail(email) {
//     var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//     return re.test(email);
// }
//
// function checkForm (formData) {
//     login = formData.getAll('userlogin');
//     password = formData.getAll('password');
//     mail = formData.getAll('usermail');
//     if (login[0].length > 15 | login[0].length < 5) {
//         alert('Login must be between 5 to 15 character !');
//         return false;
//     } else if (password[0].length < 5) {
//         alert('Password must be 5 character at least');
//         return false;
//     } else if (!validateEmail(mail[0])) {
//         alert('Invalid email');
//         return false;
//     } else {
//         XHR.open('POST', 'controller/register.php');
//         XHR.send(formData);
//         return true;
//     }
//
// }
//
// form.addEventListener('submit', function (e){
//
//     console.log(this.responseText);
//
//     e.preventDefault();
//     let formData = new FormData(form);
//
//     XHR.onreadystatechange = function() {
//         if (this.readyState == 4 && this.status == 200) {
//             if (this.responseText == "User or email already exists") {
//             }
//             //console.log(this.responseText);
//         }
//     };
//
//     console.log(XHR);
//
//     XHR.addEventListener('load', function (event) {
//     });
//
//     XHR.addEventListener('error', function (event) {
//         alert(this.responseText);
//     });
//
//     if (checkForm(formData)) {
//         //location.assign('?page=login_form');
//     }
// }, true);
