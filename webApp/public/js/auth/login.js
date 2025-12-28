const form = document.forms['login'];
const username = form['username'].value;
const password = form['password'].value;

// validate the input cannot be null
document.addEventListener('submit', () => {
    if (username == '' || password == '') return false;
    return true;
});