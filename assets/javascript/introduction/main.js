import Vue from 'vue'
import introduction from './Main.vue';

if(document.getElementById('introduction')) {
    new Vue({
      el: '#introduction',
      components: { introduction },
      mounted() {
        console.log(1);
      }
    });
  }