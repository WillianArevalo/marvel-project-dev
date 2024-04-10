document.addEventListener("DOMContentLoaded", function () {
  const url = "http://localhost/marvel-project";
  const pagination = document.getElementById("pagination");
  const buttonsPagination = document.querySelectorAll(".pagination button");

  buttonsPagination.forEach((button) => {
    button.addEventListener("click", function () {
      const page = this.getAttribute("data-page");
      buttonsPagination.forEach((btn) => {
        btn.classList.remove("active");
      });
      this.classList.add("active");
      loadCharacters(page);
    });
  });

  function loadCharacters(page) {
    $.ajax({
      url: url + "/characters/loadCharacters",
      type: "POST",
      data: {
        page: page,
      },
      success: function (response) {
        var objData = JSON.parse(response);
        $("#cards").html(objData.html);
        const targetSection = document.getElementById("cards-body");
        targetSection.scrollIntoView({ behavior: "smooth" });
      },
      error: function (error) {
        console.log(error);
      },
    });
  }
});
