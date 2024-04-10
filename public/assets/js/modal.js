document.addEventListener("DOMContentLoaded", function () {
  var mainImagen = document.getElementById("image-character");
  var modal = document.getElementById("modal-image");
  var imagenModal = document.getElementById("image-modal");
  const body = document.getElementById("body");

  if (mainImagen) {
    mainImagen.addEventListener("click", function () {
      modal.style.display = "block";
      body.classList.add("active");
      imagenModal.src = this.src;
    });
  }

  // Cerrar el modal cuando se haga clic en el botón de cerrar
  var close = document.getElementById("close-modal");
  if (close) {
    close.addEventListener("click", function () {
      body.classList.remove("active");
      modal.style.display = "none";
    });
  }
});
