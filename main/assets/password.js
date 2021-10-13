var check = function () {
  if (
    document.getElementById("password1").value ==
    document.getElementById("confirmPasswords").value
  ) {
    document.getElementById("message").style.color = "green";
    document.getElementById("message").innerHTML =
      "Confirm Posswordis Is Matching";
    // var addMember = document.getElementById('addMember')
    document.getElementById("addMember").removeAttribute("disabled");
  } else {
    document.getElementById("message").style.color = "red";
    document.getElementById("message").innerHTML =
      " Confirm Posswordis Is Not Matching";
    document.getElementById("addMember").setAttribute("disabled", "true");
  }
  document.getElementById("password1").setAttribute("oninput", "check()");
};
function req() {
  document.getElementById("req").innerHTML = `<div style="color:rgba(0,0,0,.5);
font-weight:800"><p>Must be between 8 and 12 characters. have at least:one lowercase, uppercase, a digit and a symbol</p></div>`;
}
function eyeToggle(e) {
  const Eyeicon = document.querySelector(".eye");
  const Eye = document.querySelector("#password1");
  // console.log(Eye);
  if (Eye.type === "password") {
    Eye.type = "text";
    Eyeicon.innerHTML = '<i class="fas fa-eye" ></i>';
    // console.log(Eyeicon);
  } else {
    Eye.type = "password";
    Eyeicon.innerHTML = '<i class="fas fa-eye-slash"></i>';
  }
}
