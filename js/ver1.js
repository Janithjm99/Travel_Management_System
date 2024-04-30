//First Name
let firstNameInput = document.getElementById("first-name-input");
let firstNameError = document.getElementById("first-name-error");
let emptyFirstNameError = document.getElementById("empty-first-name");

//Email
let emailInput = document.getElementById("email");
let emailError = document.getElementById("email-error");
let emptyEmailError = document.getElementById("empty-email");


//Submit
let submitButton = document.getElementById("submit-button");

//Valid
let validClasses = document.getElementsByClassName("valid");
let invalidClasses = document.getElementsByClassName("error");


//Text verification (if input contains only text)
const textVerify = (text) => {
  const regex = /^[a-zA-Z]{3,}$/;
  return regex.test(text);
};

//Email verification
const emailVerify = (input) => {
  const regex = /^[a-z0-9_]+@[a-z]{3,}\.[a-z\.]{3,}$/;
  return regex.test(input);
};

//For empty input - accepts(input,empty error for that input and other errors)
const emptyUpdate = (
  inputReference,
  emptyErrorReference,
  otherErrorReference
) => {
  if (!inputReference.value) {
    //input is null/empty
    emptyErrorReference.classList.remove("hide");
    otherErrorReference.classList.add("hide");
    inputReference.classList.add("error");
  } else {
    //input has some content
    emptyErrorReference.classList.add("hide");
  }
};

//For error styling and displaying error message
const errorUpdate = (inputReference, errorReference) => {
  errorReference.classList.remove("hide");
  inputReference.classList.remove("valid");
  inputReference.classList.add("error");
};

//For no errors
const validInput = (inputReference) => {
  inputReference.classList.remove("error");
  inputReference.classList.add("valid");
};

//First name
firstNameInput.addEventListener("input", () => {
  if (textVerify(firstNameInput.value)) {
    //If verification returns true
    firstNameError.classList.add("hide");
    validInput(firstNameInput);
  } else {
    //for false
    errorUpdate(firstNameInput, firstNameError);
    //empty checker
    emptyUpdate(firstNameInput, emptyFirstNameError, firstNameError);
  }
});

//Email
emailInput.addEventListener("input", () => {
  if (emailVerify(emailInput.value)) {
    emailError.classList.add("hide");
    validInput(emailInput);
  } else {
    errorUpdate(emailInput, emailError);
    emptyUpdate(emailInput, emptyEmailError, emailError);
  }
});

//Submit button
submitButton.addEventListener("click", () => {
  if (validClasses.length == 2 && invalidClasses.length == 0) {
    alert("Success");
  } else {
    alert("Error");
  }
});


function changeType() {
  var toggle = document.form.checkbox;
  var password = document.getElementById("password");

  if(toggle.checked) {
    password.setAttribute("type", "text");
  }
  else {
    password.setAttribute("type", "password");
  }
}

function password_validation() {
  var form = document.getElementById("form");
  var password = document.getElementById("password").value;
  var msg = document.getElementById("msg");

  var patternLowercase = /[a-z]/;
  var patternUppercase = /[A-Z]/;
  var patternNumbers = /[\d]/;
  var patternSymbols = /[!-/:-@[-`{-~]/;

  var length = document.getElementsByClassName("length");
  var lowercase = document.getElementsByClassName("lowercase");
  var uppercase = document.getElementsByClassName("uppercase");
  var numbers = document.getElementsByClassName("numbers");
  var symbols = document.getElementsByClassName("symbols");

  if(password.length >= 12) {
    length[0].classList.add("active");
  }
  else {
    length[0].classList.remove("active");
  }

  if(patternLowercase.test(password)) {
    lowercase[0].classList.add("active");
  }
  else {
    lowercase[0].classList.remove("active");
  }

  if(patternUppercase.test(password)) {
    uppercase[0].classList.add("active");
  }
  else {
    uppercase[0].classList.remove("active");
  }

  if(patternNumbers.test(password)) {
    numbers[0].classList.add("active");
  }
  else {
    numbers[0].classList.remove("active");
  }

  if(patternSymbols.test(password)) {
    symbols[0].classList.add("active");
  }
  else {
    symbols[0].classList.remove("active");
  }

  var active = document.getElementsByClassName("active");
  var percentage = document.getElementsByClassName("percentage");
  percentage[0].setAttribute("style", "width: " + active.length/5*100 + "%");

  if(active.length <= 1) {
    msg.innerHTML = "Poor";
  }
  else if(active.length == 2) {
    msg.innerHTML = "Weak";
  }
  else if(active.length == 3) {
    msg.innerHTML = "Midium";
  }
  else if(active.length == 4) {
    msg.innerHTML = "Good";
  }
  else {
    msg.innerHTML = "<b>Strong</b>";
  }
}