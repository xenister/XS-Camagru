// let form = document.getElementById('register-form');
// let XHR = new XMLHttpRequest();
//
// function validateEmail(email) {
//     var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//     return re.test(email);
// }
//
// function formErrorAdd (msg){
//     let errors_box = document.getElementById('form-error');
//     let error_msg  = document.getElementById("error-span");
//
//     errors_box.setAttribute("class", "alert alert-warning");
//     errors_box.setAttribute("role", "alert");
//     error_msg.innerHTML = msg;
//
//     // errors_box.appendChild(error_msg);
// }
//
// function formInfoAdd (msg){
//     let errors_box = document.getElementById('form-error');
//     let error_msg  = document.getElementById("error-span");
//
//     errors_box.setAttribute("class", "alert alert-primary");
//     errors_box.setAttribute("role", "alert");
//     error_msg.innerHTML = msg;
//
//     // errors_box.appendChild(error_msg);
// }
//
// function checkForm (FD) {
//     login = FD.getAll('userlogin');
//     password = FD.getAll('password');
//     confirmpassword = FD.getAll('confirm_password');
//     mail = FD.getAll('usermail');
//
//     for (var pair of FD.entries()) {
//         console.log(pair[0] + ', ' + pair[1]);
//     }
//
//         if (login[0].length > 25 | login[0].length < 5) {
//         formErrorAdd('Login must be between 5 to 25 character !');
//         return false;
//     } if (password[0].length < 8 | password[0].length > 25) {
//         formErrorAdd('Password must be between 8 to 25 caracters');
//         return false;
//     } if (confirmpassword[0] !== password[0]) {
//         formErrorAdd('Password confirmation must match your password');
//         return false;
//     } if (!validateEmail(mail[0])) {
//         formErrorAdd('Invalid email');
//         return false;
//     }
//     return true;
// }
//
// form.addEventListener('submit', function (e){
//
//     //e.preventDefault();
//     let FD = new FormData(form);
//
//     console.log("LOLOLO");
//
//
//     if (checkForm(FD)) {
//
//         console.log("LALALALA");
//
//         XHR.onreadystatechange = function() {
//             if (this.readyState == 4 && this.status == 200) {
//
//                 console.log("LAYLAYYYY");
//
//                 if (this.responseText == "1") {
//                     formErrorAdd("User name already exist");
//                 }
//                 else if (this.responseText == "2") {
//                     formErrorAdd("User mail already exist");
//                 }
//                 else
//                     location.assign('?page=landing');
//
//             }
//         };
//
//
//
//         console.log("aaaaaa");
//
//         XHR.open('POST', 'controller/register.php');
//
//         for (var pair of FD.entries()) {
//             console.log(pair[0] + ', ' + pair[1]);
//         }
//
//         console.log("bbbbbbb");
//
//         XHR.send(FD);
//
//         console.log("cccccc");
//
//     }
// }, true);
//
// console.log("js end file");





// function validateEmail(email) {
//     var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//     return re.test(email);
// }
//
// function checkForm (formData) {
//     login = formData.getAll('userlogin');
//     password = formData.getAll('password');
//     mail = formData.getAll('usermail');
//     if (login[0].length > 25 | login[0].length < 5) {
//         alert('Login must be between 5 to 25 character !');
//         return false;
//     } else if (password[0].length < 8 | password[0].length > 25) {
//         alert('Password must must be between 8 to 25 caracters');
//         return false;
//     } else if (!validateEmail(mail[0])) {
//         alert('Invalid email');
//         return false;
//     } else {
//         XHR.open('POST', 'controller/register.php');
//         XHR.send(formData);
//         return true;
//     }
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
