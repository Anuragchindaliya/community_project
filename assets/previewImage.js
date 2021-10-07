function loadFile(event){
    var imgput = document.getElementById("imgput");
    imgput.style.display='block';
    imgput.src= URL.createObjectURL(event.target.files[0]);
    
    imgput.onload = function() {
      URL.revokeObjectURL(imgput.src) // free memory
    }
  }