//close modal
window.addEventListener('close-modal', event => {

    $('#add').modal('hide');
    $('#edit').modal('hide');
    $('#delete').modal('hide');
})


//dropdown
function myFunction() {
    var dropdown = document.getElementById("myDropdown");
    if (dropdown.style.display === "block") {
        dropdown.style.display = "none";
    } else {
        dropdown.style.display = "block";
    }
}

// Close the dropdown when clicking outside the button
document.addEventListener("click", function (event) {
    var dropdown = document.getElementById("myDropdown");
    var button = document.querySelector(".dropbtn");
    if (event.target !== button && !button.contains(event.target)) {
        dropdown.style.display = "none";
    }
});