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
  const form = document.createElement("form");
  form.method = "POST";
  form.action = "/project/admin/delete";

  // Create a hidden input field for the ID
  const input = document.createElement("input");
  input.type = "hidden";
  input.name = "id";
  input.value = id;
  form.appendChild(input);

  document.body.appendChild(form);
  form.submit();
}
