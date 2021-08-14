
  // Get the modal
  var modal02 = document.getElementById("myModal02");

  // Get the button that opens the modal
  var btn02 = document.getElementById("myBtn02");
 
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close-02")[0];
 
  // When the user clicks on the button, open the modal
  btn02.onclick = function () {
      modal02.style.display = "block";
  }
 
  // When the user clicks on <span> (x), close the modal
  span.onclick = function () {
      modal02.style.display = "none";
  }
 
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
      if (event.target == modal02) {
          modal02.style.display = "none";
      }
  }