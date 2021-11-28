
  // Get the modal
  var modal06 = document.getElementById("myModal06");

  // Get the button that opens the modal
  var btn06 = document.getElementById("myBtn06");
 
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close-06")[0];
 
  // When the user clicks on the button, open the modal
  btn06.onclick = function () {
      modal06.style.display = "block";
  }
 
  // When the user clicks on <span> (x), close the modal
  span.onclick = function () {
      modal06.style.display = "none";
  }
 
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
      if (event.target == modal06) {
          modal06.style.display = "none";
      }
  }