function loadFile(event) {
  // imagePreview and check image extension
  var imgput = document.getElementById("imgput");
  if (event.target.files.length && event.target.files[0].name != "") {
    //get extension
    let ext = event.target.files[0].name.split(".").pop().toLowerCase();

    var validExt = ["jpg", "png", "jpeg"];

    if (validExt.includes(ext)) {
      // console.log(event.target.files[0].size+"bytes");
      if (event.target.files[0].size <= 1000000) {
        imgput.style.display = "block";
        imgput.src = URL.createObjectURL(event.target.files[0]);

        imgput.onload = function () {
          URL.revokeObjectURL(imgput.src); // free memory
        };
      } else {
        imgput.src = "";
        alert("Please upload less than 1 mb");
        document.getElementById("imageFile").value = "";
        return false;
      }
    } else {
      alert("jpg,png and jpeg image is allowed");
      document.getElementById("imageFile").value = "";
      imgput.src = "";
      return false;
    }
  } else {
    imgput.src = "";
  }
  return true;
}
