// Get the modal
var modal = document.getElementById("my-cookie-modal");
var span = document.getElementsByClassName("cookie-close")[0];
span.onclick = function () {
  modal.style.display = "none";
};
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};