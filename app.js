var btnRegister = document.querySelector(".btn-register");
var wrapperFormLogin = document.querySelector(".wrapper-form_login");
var wrapperFormRegister = document.querySelector(".wrapper-form_register");
btnRegister.addEventListener("click", function () {
    wrapperFormLogin.classList.toggle("active");
    wrapperFormRegister.classList.toggle("active");
});
