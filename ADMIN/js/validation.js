let email = document.querySelector('.email');

let password1 = document.querySelector('.password1');
let password2 = document.querySelector('.password2');
let password3 = document.querySelector('.password3');

let username = document.querySelector('.username');




function ValidateEmail(mail) 
{
 if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(mail) || mail == "")
  {
    return false;
  }
    return true;
}



let submit = document.querySelector('.submit');

submit.addEventListener('click', function(e) {
  if(password2.value !== password3.value) {
    e.preventDefault();
    alert('password didnt match');
  }
  if(ValidateEmail(email.value)) {
    e.preventDefault();
    alert('wrong email');
  }


});

