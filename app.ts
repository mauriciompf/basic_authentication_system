const btnRegister = document.querySelector(
  ".btn-register"
) as HTMLButtonElement;

const wrapperFormLogin = document.querySelector(
  ".wrapper-form_login"
) as HTMLDivElement;
const wrapperFormRegister = document.querySelector(
  ".wrapper-form_register"
) as HTMLDivElement;

btnRegister.addEventListener("click", () => {
  wrapperFormLogin.classList.toggle("active");
  wrapperFormRegister.classList.toggle("active");
});
