var showbtnBo = document.querySelector(".user-btn-bo");
var lilnavBo = document.querySelector(".small-nav-bo");

showbtnBo.addEventListener("mouseover", function() {
    lilnavBo.style.display = "block";
});
lilnavBo.addEventListener("mouseover", function() {
    lilnavBo.style.display = "block";
});
lilnavBo.addEventListener("mouseout", function() {
    lilnavBo.style.display = "none";
});
showbtnBo.addEventListener("mouseout", function() {
    lilnavBo.style.display = "none";
});

$(document).ready(function() {
    $("#myDataTable").DataTable();
});
