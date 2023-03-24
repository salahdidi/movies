<template>
   
    <div v-if="showParent" >
    
        <a href="${currentUrl}" style="color: white">
            <img src="redArrow.webp" height="50" width="50" style="border-radius: 100px" />
            Retour
        </a>
        <h1 class="font-weight-bold text-center" style="color: white">
            ESPACE SUPPORT
        </h1>
        <div class="options-buttons" >
            <button class="btn" 
                @click="changeVendeurMission">
                Changer vendeur d'une mission
            </button>
            <button class="btn" 
                @click="addMissionException">
                Mission exception
            </button>
            <button class="btn" 
                @click="exportChargementProduit">
                Etat de chargement par camion
            </button>
            <button class="btn" 
                @click="correctPrixMissionVente">
                Correction des prix d'une mission de vente
            </button>
            <button class="btn" 
                @click="updateBalanceVendeur">
                Mise a jour de la Balance vendeur
            </button>
            <button class="btn" 
                @click="changeReglementEcartLivreur">
                Changer le vendeur dans un reglement d'ecart
            </button>
            <button class="btn" 
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
        
        display: flex;
        flex-direction: column;
        width: 500px;
        align-items: center;
        /* position: absolute; */
        /* left: 30%; */
        /* right: 30%; */
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);     
    }

    .btn{
        display: block;
        align-content: center;
        margin: 5px;
        color: #f3f4f6;
        transition: all 0.5s;
        position: relative;
        line-height: 50px;
        height: 50px;
        white-space: nowrap;
        width: 350px;
        cursor: pointer;
        font-weight: 200px;
        
        
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
        
        data() {
            return {
            showParent: true
            }
        },
  
        methods: {
            changeVendeurMission() {
                //this.showParent = false;
                
                window.location.href =route('page1');
               // this.$router.go('/page1');
                
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


