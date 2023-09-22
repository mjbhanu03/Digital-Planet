function openModal(image) {
  var modal = document.getElementById("myModal");
  var modalImage = document.getElementById("modalImage");

  modal.style.display = "block";
  modalImage.src = image.src;
}

function closeModal() {
  var modal = document.getElementById("myModal");
  modal.style.display = "none";
}
