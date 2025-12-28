const btn = document.getElementById("showPass");
const input = document.getElementById("password");
const closeEye = document.getElementById("eye-closed");
const openEye = document.getElementById("eye-open");
const classChange = 'invisible';

// change the behaviour of password field (show password)
btn.addEventListener("click", () => {
    if (!closeEye.classList.contains(classChange)){
        closeEye.classList.add(classChange);
        openEye.classList.remove(classChange);
        input.type = 'text';
    } else {
        closeEye.classList.remove(classChange);
        openEye.classList.add(classChange);
        input.type = 'password';
    }
});