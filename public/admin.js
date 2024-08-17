function showPopup(id) {
  document.getElementById("popup").style.display = "block";
  document.getElementById("overlay").style.display = "block";
  document.getElementById("confirmDeleteButton").setAttribute("data-id", id);
}

function hidePopup() {
  document.getElementById("popup").style.display = "none";
  document.getElementById("overlay").style.display = "none";
}

function confirmDelete() {
  const id = document
    .getElementById("confirmDeleteButton")
    .getAttribute("data-id");
  console.log(id);
  window.location.href = "admin/delete?id=" + id;
}
