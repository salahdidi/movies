import { InertiaLink } from '@inertiajs/inertia-react';

function supportMain() {
    return (
        <div>
            <a href="https://test.datafirst-dz.com/" style={{ color: 'white' }}>
                <img src="redArrow.webp" height="50" width="50" style={{ borderRadius: '100px' }} />
                Retour
            </a>

            <h1 className="font-weight-bold text-center" style={{ color: 'white' }}>ESPACE SUPPORT</h1>

            <div className="socialmedia-buttons" style={{ marginTop: '30px' }}>
                <style>
                    {/* .btn {
                        color : black;
                    background-color: white;
                    border: 1px solid black;
                }
                    .btn:hover {
                        background - color: #da2f35;
                    color: white;
          } */}
                </style>
                <InertiaLink className="btn btn-outline-light btn-lg btn-block" style={{ fontWeight: '200px' }} href="/support/editVendeurOfMission" role="button">
                    Changer vendeur d'une mission
                </InertiaLink>
                <InertiaLink className="btn btn-outline-light btn-lg btn-block" style={{ fontWeight: '200px' }} href="/support/addMissionToExceptions" role="button">
                    Mission exception
                </InertiaLink>
                <InertiaLink className="btn btn-outline-light btn-lg btn-block" style={{ fontWeight: '200px' }} href="/support/exportChargementProduitParCamion" role="button">
                    Etat de chargement par camion
                </InertiaLink>
                <InertiaLink className="btn btn-outline-light btn-lg btn-block" style={{ fontWeight: '200px' }} href="/support/correctionPrixMissionVente" role="button">
                    Correction des prix d'une mission de vente
                </InertiaLink>
                <InertiaLink className="btn btn-outline-light btn-lg btn-block" style={{ fontWeight: '200px' }} href="/support/correctionBalanceVendeur" role="button">
                    Mise a jour de la Balance vendeur
                </InertiaLink>
                <InertiaLink className="btn btn-outline-light btn-lg btn-block" style={{ fontWeight: '200px' }} href="/support/editReglementEcartLivreur" role="button">
                    Changer le vendeur dans un reglement d'ecart
                </InertiaLink>
                <InertiaLink className="btn btn-outline-light btn-lg btn-block" style={{ fontWeight: '200px' }} href="/support/editVendeurOfEncaissement" role="button">
                    Changer le vendeur dans un encaissement
                </InertiaLink>
            </div>
        </div>
    );
}
