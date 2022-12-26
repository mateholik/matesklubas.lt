import Vue from "vue";
import VueScrollTo from "vue-scrollto";

// scroll to specific word in zodynas
if (document.getElementById("zodynas")) {
  Vue.use(VueScrollTo);
  new Vue({
    el: "#zodynas",
    mounted() {
      var hash = window.location.hash;
      if (hash) {
        var focusedWord = document.querySelector(hash);
        focusedWord.classList.add("focus-text");
        VueScrollTo.scrollTo(hash, { offset: -10 });
      }
    },
  });
}

//quiz
if (document.getElementById("quiz")) {
  new Vue({
    el: "#quiz",
    data: {
      stepsData: [
        {
          id: 1,
          question: "Kaip dažnai geriate matę?",
          answers: [
            { string: "Gersiu pirmą kartą", value: 0 },
            { string: "Retkarčiais", value: 1 },
            { string: "Kiekvieną dieną", value: 2 },
          ],
        },
        {
          id: 2,
          question: "Kokią arbatą labiausiai mėgstate?",
          answers: [
            { string: "Vaisinę", value: 0 },
            { string: "Juodą", value: 1 },
            { string: "Žalią", value: 2 },
          ],
        },
        {
          id: 3,
          question: "Ar toleruojate kartumą?",
          answers: [
            { string: "Ne, geriu tik silpną arbatą, nemėgstu kavos", value: 0 },
            { string: "Nelabai, stengiuosi jo vengti", value: 1 },
            { string: "Taip, mėgstu stiprią kavą ar arbatą", value: 2 },
          ],
        },
        {
          id: 4,
          question: "Kuris teiginys Jūs apibūdina tiksliausiai?",
          answers: [
            {
              string:
                "Esu praktiškas žmogus, stengiuosi viską daryti kuo paprasčiau, be jokių ceremonijų",
              value: 0,
            },
            {
              string:
                "Mėgstu išbandyti naujus dalykus, norėčiau geriau pažinti matės kultūrą",
              value: 1,
            },
            {
              string:
                "Matės gurkšnojimas yra nepakeičiama mano kasdienybės dalis",
              value: 2,
            },
          ],
        },
        {
          id: 5,
          question: "Kodėl geriate matę arba norite ją išbandyti?",
          answers: [
            {
              string:
                "Ieškau alternatyvos kavai, gėrimo, kuris suteiktų energijos",
              value: 0,
            },
            { string: "Labiausiai vertinu gydomąsias matės savybes", value: 1 },
            {
              string:
                "Reguliariai geriu matę, labiausiai vertinu jos skonį ir kokybę",
              value: 2,
            },
          ],
        },
        {
          id: 6,
          question: "Kokie Jūsų lūkesčiai šiuo metu?",
          answers: [
            {
              string:
                "Noriu tik išbandyti matę. Bijau, kad ji man gali nepatikti",
              value: 0,
            },
            { string: "Ieškau geriausio kainos ir kokybės santykio", value: 1 },
            {
              string:
                "Labiausiai vertinu kokybę, nebijau investuoti į gerą produktą",
              value: 2,
            },
          ],
        },
      ],
      step: 1,
      percentage: 0,
      percentDone: 0,
      points: 0,
      showOffer: "",
      loaded: false,
    },
    computed: {
      percent() {
        return this.percentage.toFixed();
      },
    },
    watch: {
      step(newVal) {
        if (newVal === 7) {
          this.showAnswer();
        }
      },
    },
    mounted() {
      this.loaded = true;
      this.correctImg();
    },
    methods: {
      correctImg() {
        let img = this.$refs.thinkingIcon;
        // var isOperaMini = (navigator.userAgent.indexOf('Opera Mini') > -1);
        var isSafari = /^((?!chrome|android).)*safari/i.test(
          navigator.userAgent
        );
        if (isSafari) {
          img.src = img.getAttribute("data-gif");
        } else {
          img.src = img.getAttribute("data-webp");
        }
      },
      showAnswer() {
        setTimeout(() => {
          this.step++;
          if (this.points < 4) {
            this.showOffer = "noob";
          } else if (this.points >= 4 && this.points < 8) {
            this.showOffer = "medium";
          } else {
            this.showOffer = "pro";
          }
        }, 5000);
      },
      nextStep(value) {
        this.step++;
        this.percentDone += 100 / this.stepsData.length;
        this.progressBar();
        this.points += value;
      },
      progressBar() {
        var intval = setInterval(() => {
          if (this.percentage < this.percentDone) this.percentage += 0.1;
          else clearInterval(intval);
        }, 10);
      },
    },
  });
}

document.addEventListener("DOMContentLoaded", function () {
  mobileMenu();
  const products = document.getElementById("products");
  if (products) {
    productsToggle(products);
  }
});

function mobileMenu() {
  const burger = document.getElementById("hamburger");
  const menu = document.getElementById("mobileMenu");
  burger.addEventListener("click", function () {
    this.classList.toggle("is-active");
    menu.classList.toggle("is-active");

    setClicks(menu);
  });
  function setClicks(block) {
    console.log("handle click");
    const items = block.querySelectorAll(":scope > ul > li");
    if (!items) return;
    Array.from(items).forEach((item) => {
      const submenu = item.querySelector(":scope > .sub-menu");
      const itemLink = item.querySelector(":scope > a");
      if (!submenu) return;
      itemLink.addEventListener("click", function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        submenu.classList.toggle("is-active");
        itemLink.classList.toggle("is-active");
        setClicks(item);
      });
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
