<template>
   
    <div>
        <a href="https://test.datafirst-dz.com/" style="color: white">
            <img src="redArrow.webp" height="50" width="50" style="border-radius: 100px" />
            Retour
        </a>
        <h1 class="font-weight-bold text-center" style="color: white">
            ESPACE SUPPORT
        </h1>
        <div class="options-buttons" style="margin-top: 30px ;display :block ;margin-left: 30%;margin-right: 30%;">
            <button class="btn" style="font-weight: 200px"
                @click="changeVendeurMission">
                Changer vendeur d'une mission
            </button>
            <button class="btn" style="font-weight: 200px"
                @click="addMissionException">
                Mission exception
            </button>
            <button class="btn" style="font-weight: 200px"
                @click="exportChargementProduit">
                Etat de chargement par camion
            </button>
            <button class="btn" style="font-weight: 200px"
                @click="correctPrixMissionVente">
                Correction des prix d'une mission de vente
            </button>
            <button class="btn" style="font-weight: 200px"
                @click="updateBalanceVendeur">
                Mise a jour de la Balance vendeur
            </button>
            <button class="btn" style="font-weight: 200px"
                @click="changeReglementEcartLivreur">
                Changer le vendeur dans un reglement d'ecart
            </button>
            <button class="btn" style="font-weight: 200px"
                @click="changeVendeurEncaissement">
                Changer le vendeur dans un encaissement
            </button>
        </div>
    </div>
</template>
<style>
body {
        --tw-bg-opacity : 1;
       background-color: rgb(15 23 42/var(--tw-bg-opacity));
    }
    .options-buttons{
        display: block;
        
       background-color: rgb(145, 241, 241);
    }

    .btn{
        display: block;
        align-content: center;
        margin : 5px;
        color: #291515;
        transition: all 0.5s;
        position: relative; 
        line-height: 50px;
        height: 50px;
        white-space: nowrap;
        width: 350px;
        cursor: pointer;
        
        
    }  
    
    .btn-two::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  transition: all 0.5s;
  border: 1px solid rgba(255,255,255,0.2);
  background-color: rgba(255,255,255,0.1);
}
.btn::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  transition: all 0.5s;
  border: 1px solid rgba(255,255,255,0.2);
  background-color: rgba(255,255,255,0.1);
}
.btn:hover::before {
  transform: rotate(-45deg);
  background-color: rgba(255,255,255,0);
}
.btn:hover::after {
  transform: rotate(45deg);
  background-color: rgba(255,255,255,0);
}
</style>

<script>
    export default {
        methods: {
            changeVendeurMission() {
                window.location.href =
                    "https://test.datafirst-dz.com/support/editVendeurOfMission.blade.php";
            },
            addMissionException() {
                window.location.href =
                    "https://test.datafirst-dz.com/support/addMissionToExceptions.blade.php";
            },
            exportChargementProduit() {
                window.location.href =
                    "https://test.datafirst-dz.com/support/exportChargementProduitParCamion.php";
            },
            correctPrixMissionVente() {
                window.location.href =
                    "https://test.datafirst-dz.com/support/correctionPrixMissionVente.blade.php";
            },
            updateBalanceVendeur() {
                window.location.href =
                    "https://test.datafirst-dz.com/support/correctionBalanceVendeur.blade.php";
            },
            changeReglementEcartLivreur() {
                window.location.href =
                    "https://test.datafirst-dz.com/support/editReglementEcartLivreur.blade.php";
            },
            changeVendeurEncaissement() {
                window.location.href =
                    "https://test.datafirst-dz.com/support/editVendeurOfEncaissement.blade.php";
            },
        },
    };

</script>


