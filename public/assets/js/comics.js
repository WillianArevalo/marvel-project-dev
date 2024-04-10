document.addEventListener("DOMContentLoaded", function () {
  const url = "http://localhost/marvel-project-dev";
  const buttonsPaginationComics = document.querySelectorAll(
    ".pagination-button-comics button"
  );

  buttonsPaginationComics.forEach((button) => {
    button.addEventListener("click", function () {
      const page = this.getAttribute("data-page-comic");

      buttonsPaginationComics.forEach((btn) => {
        btn.classList.remove("active");
      });
      this.classList.add("active");
      loadComics(page);
    });
  });

  function loadComics(page) {
    $.ajax({
      url: url + "/comics/loadComics",
      type: "POST",
      data: {
        page: page,
      },
      success: function (response) {
        var objData = JSON.parse(response);
        $("#cards-comics").html(objData.html);
        const targetSection = document.getElementById("cards-comics");
        targetSection.scrollIntoView({ behavior: "smooth" });
      },
      error: function (error) {
        console.log(error);
      },
    });
  }
});
