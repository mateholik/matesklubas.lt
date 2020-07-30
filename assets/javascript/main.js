import Vue from 'vue'
import VueScrollTo from 'vue-scrollto'

//nav
new Vue({
  el: '#header',
  data: {
    mobMenu: false
  }
});

// scroll to specific word in zodynas
if(document.getElementById('zodynas')) {
  Vue.use(VueScrollTo)
  new Vue({
    el: '#zodynas',
    mounted() {
      var hash = window.location.hash;
      if(hash) {
        var focusedWord = document.querySelector(hash)
        focusedWord.classList.add('focus-text');
        VueScrollTo.scrollTo(hash, { offset: -10 })
      }
    }
  });
}

//quiz
if(document.getElementById('quiz')) {
  new Vue({
    el: '#quiz',
    data: {
      stepsData: [
        {
          id: 1,
          question: 'Kaip dažnai geriate matę?',
          answers: [
            {string: 'Gersiu pirmą kartą', value: 0},
            {string: 'Retkarčiais', value: 1},
            {string: 'Kiekvieną dieną', value: 2},
          ]
        },
        {
          id: 2,
          question: 'Kokią arbatą labiausiai mėgstate?',
          answers: [
            {string: 'Vaisinę', value: 0},
            {string: 'Juodą', value: 1},
            {string: 'Žalią', value: 2},
          ]
        },
        {
          id: 3,
          question: 'Ar toleruojate kartumą?',
          answers: [
            {string: 'Ne, geriu tik silpną arbatą, nemėgstu kavos', value: 0},
            {string: 'Nelabai, stengiuosi jo vengti', value: 1},
            {string: 'Taip, mėgstu stiprią kavą ar arbatą', value: 2}
          ]
        },
        {
          id: 4,
          question: 'Kuris teiginys Jūs apibūdina tiksliausiai?',
          answers: [
            {string: 'Esu praktiškas žmogus, stengiuosi viską daryti kuo paprasčiau, be jokių ceremonijų', value: 0},
            {string: 'Mėgstu išbandyti naujus dalykus, norėčiau geriau pažinti matės kultūrą', value: 1},
            {string: 'Matės gurkšnojimas yra nepakeičiama mano kasdienybės dalis', value: 2}
          ]
        },
        {
          id: 5,
          question: 'Kodėl geriate matę arba norite ją išbandyti?',
          answers: [
            {string: 'Ieškau alternatyvos kavai, gėrimo, kuris suteiktų energijos', value: 0},
            {string: 'Labiausiai vertinu gydomąsias matės savybes', value: 1},
            {string: 'Reguliariai geriu matę, labiausiai vertinu jos skonį ir kokybę', value: 2}
          ]
        },
        {
          id: 6,
          question: 'Kokie Jūsų lūkesčiai šiuo metu?',
          answers: [
            {string: 'Noriu tik išbandyti matę. Bijau, kad ji man gali nepatikti', value: 0},
            {string: 'Ieškau geriausio kainos ir kokybės santykio', value: 1},
            {string: 'Labiausiai vertinu kokybę, nebijau investuoti į gerą produktą', value: 2}
          ]
        }
      ],
      step: 1,
      percentage: 0,
      percentDone: 0,
      points: 0,
      showOffer: '',
      loaded: false
    },
    computed: {
      percent() {
        return this.percentage.toFixed();
      }
    },
    watch: {
      step (newVal) {
        if(newVal === 7) {
          this.showAnswer()
        }
      }
    },
    mounted() {
      this.loaded = true
      this.correctImg()
    },
    methods: {
      correctImg() {
        let img = this.$refs.thinkingIcon
        // var isOperaMini = (navigator.userAgent.indexOf('Opera Mini') > -1);
        var isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);
        if(isSafari){
          img.src = img.getAttribute('data-gif');
        }else{
          img.src = img.getAttribute('data-webp');
        }
      },
      showAnswer() {
        setTimeout(() => {
          this.step++
          if(this.points < 4){
            this.showOffer = 'noob'
          } else if (this.points >= 4 && this.points < 8) {
            this.showOffer = 'medium'
          } else {
            this.showOffer = 'pro'
          }
        }, 5000);
      },
      nextStep(value) {
        this.step++
        this.percentDone += 100/this.stepsData.length
        this.progressBar()
        this.points +=value
      },
      progressBar() {
        var intval = setInterval(() => {
          if(this.percentage < this.percentDone)
            this.percentage += .1;
          else
            clearInterval(intval);
        }, 10);
      }
    }
  });
}

//homepage recent_products
if(document.getElementById('homepage-products')) {
  Vue.use(VueScrollTo)
  new Vue({
    el: '#homepage-products',
	data: {
		show: 0
	}
  });
}
