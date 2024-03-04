document.addEventListener("DOMContentLoaded", function () {
  if (window.innerWidth < 1024) {
    mobileMenu();
  }

  if (document.getElementById("zodynas")) {
    scrollToHash();
  }

  const products = document.getElementById("products");
  if (products) {
    productsToggle(products);
  }

  const accordions = document.getElementsByClassName("accordion");
  for (let i = 0; i < accordions.length; i++) {
    accordions[i].addEventListener("click", function () {
      this.classList.toggle("active");
      const panel = this.getElementsByClassName("text")[0];
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  }
});

function mobileMenu() {
  const burger = document.getElementById("hamburger");
  const menu = document.getElementById("mobileMenu");

  if (burger && menu) {
    burger.addEventListener("click", function () {
      this.classList.toggle("is-active");
      menu.classList.toggle("is-active");
    });

    menu.addEventListener("click", function (e) {
      // Check if the clicked element is a link inside the menu
      if (e.target.matches(".menu-item > a")) {
        const submenu = e.target.nextElementSibling;

        // Check if the submenu exists and is an actual submenu
        if (submenu && submenu.classList.contains("sub-menu")) {
          e.preventDefault(); // Prevent default if it's a submenu
          submenu.classList.toggle("is-active");
          e.target.classList.toggle("is-active");
        }
        // If there's no submenu, the link behaves normally
      }
    });
  }
}
function productsToggle() {
  const options = products.getElementsByClassName("options")[0].children;
  const results = products.getElementsByClassName("results")[0].children;

  for (let i = 0; i < options.length; i++) {
    options[i].addEventListener("click", function () {
      options[i].to;
      for (let j = 0; j < results.length; j++) {
        if (j === i) {
          results[j].style.display = "block";
          options[j].classList.add("active");
        } else {
          results[j].style.display = "none";
          options[j].classList.remove("active");
        }
      }
    });
  }
}
function scrollToHash() {
  const hash = window.location.hash;
  if (hash) {
    const id = hash.substring(1);
    const element = document.getElementById(id);
    if (element) {
      const offsetTop =
        element.getBoundingClientRect().top + window.scrollY - 100;

      window.scrollTo({ top: offsetTop, behavior: "smooth" });
      element.classList.add("focus-text");
    }
  }
}
