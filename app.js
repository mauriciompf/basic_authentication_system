const btnRegister = document.querySelector(".btn-register");
const btnLogin = document.querySelector(".btn-login");
const btnEnter = document.querySelector(".btn-enter");
const wrapperFormLogin = document.querySelector(".wrapper-form_login");
const wrapperFormRegister = document.querySelector(".wrapper-form_register");
const mainPage = document.querySelector(".main-box");
btnRegister.addEventListener("click", () => {
    wrapperFormLogin.classList.toggle("active");
    wrapperFormRegister.classList.toggle("active");
});
btnLogin.addEventListener("click", () => {
    wrapperFormLogin.classList.remove("active");
    wrapperFormRegister.classList.add("active");
});
btnEnter.addEventListener("click", () => {
    mainPage.classList.remove("active");
    wrapperFormRegister.classList.add("active");
    console.log("kwdsk");
});
//# sourceMappingURL=app.js.map