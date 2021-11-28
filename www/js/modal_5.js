
  // Get the modal
  var modal05 = document.getElementById("myModal05");

  // Get the button that opens the modal
  var btn05 = document.getElementById("myBtn05");
 
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close-05")[0];
 
  // When the user clicks on the button, open the modal
  btn05.onclick = function () {
      modal05.style.display = "block";
  }
 
  // When the user clicks on <span> (x), close the modal
  span.onclick = function () {
      modal05.style.display = "none";
  }
 
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
      if (event.target == modal05) {
          modal05.style.display = "none";
      }
  }