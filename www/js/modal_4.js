
  // Get the modal
  var modal04 = document.getElementById("myModal04");

  // Get the button that opens the modal
  var btn04 = document.getElementById("myBtn04");
 
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close-04")[0];
 
  // When the user clicks on the button, open the modal
  btn04.onclick = function () {
      modal04.style.display = "block";
  }
 
  // When the user clicks on <span> (x), close the modal
  span.onclick = function () {
      modal04.style.display = "none";
  }
 
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
      if (event.target == modal04) {
          modal04.style.display = "none";
      }
  }