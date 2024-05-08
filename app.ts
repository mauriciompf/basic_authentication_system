const btnRegister = document.querySelector(
  ".btn-register"
) as HTMLButtonElement;
const btnLogin = document.querySelector(".btn-login") as HTMLButtonElement;
const btnEnter = document.querySelector(".btn-enter") as HTMLButtonElement;

const wrapperFormLogin = document.querySelector(
  ".wrapper-form_login"
) as HTMLDivElement;
const wrapperFormRegister = document.querySelector(
  ".wrapper-form_register"
) as HTMLDivElement;

const mainPage = document.querySelector(".main-box") as HTMLDivElement;

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
