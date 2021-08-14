
  // Get the modal
  var modal03 = document.getElementById("myModal03");

  // Get the button that opens the modal
  var btn03 = document.getElementById("myBtn03");
 
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close-03")[0];
 
  // When the user clicks on the button, open the modal
  btn03.onclick = function () {
      modal03.style.display = "block";
  }
 
  // When the user clicks on <span> (x), close the modal
  span.onclick = function () {
      modal03.style.display = "none";
  }
 
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
      if (event.target == modal03) {
          modal03.style.display = "none";
      }
  }