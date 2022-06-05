
const checkBox = document.querySelector('.check-box');

let isChecked = false;

checkBox.addEventListener('click', () => {
  if (!isChecked) {
    checkBox.classList.add('is-checked');
    checkBox.classList.remove('is-not-checked')
    isChecked = true
  } else {
    checkBox.classList.remove('is-checked');
    checkBox.classList.add('is-not-checked')
    isChecked = false;
  }
});

document.querySelector('.login-btn').addEventListener('click', (e) => {
  e.preventDefault()
});

