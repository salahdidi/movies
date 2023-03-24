<template>
   
    <div class="main">
      <form @submit.prevent="submitForm">
        <div class="form-group">
          <label for="ods_num">Numéro ODS:</label>
          <input type="text" class="form-control" id="ods_num" v-model="ods_num" name="ods_num">
        </div>
        <div class="form-group">
          <label for="vendeur_id">Identifiant du Vendeur:</label>
          <input type="text" class="form-control" id="vendeur_id" v-model="vendeur_id" name="vendeur_id">
        </div>
        <div class="form-group">
          <label for="date_mission">Date de la mission:</label>
          <input type="date" class="form-control" id="date_mission" v-model="date_mission" name="date_mission">
        </div>
        <button type="submit" class="btn btn-primary">Soumettre</button>
      </form>
  </div>

  </template>
  
  <script>
  import axios from 'axios';
  import MissionVendeur from '@/Pages/Support/MissionVendeur.vue';
  export default {
    name: 'MissionVendeur',
   
    data() {
      return {
        ods_num: '',
        vendeur_id: '',
        date_mission: '',
      }
    },
    methods: {
      submitForm() {
        axios.post('https://test.datafirst-dz.com/ws/public/support/editVendeurOfMission', {
          ods_num: this.ods_num,
          vendeur_id: this.vendeur_id,
          date_mission: this.date_mission
        })
        .then(response => {
          window.location.href = 'https://test.datafirst-dz.com/support';
        })
        .catch(error => {
          console.log(error);
        });
      }
    }
  }
  </script>
  
  <style scoped>
  .main {
    height: 100%;
    width: 100%;
    }
  </style>
  