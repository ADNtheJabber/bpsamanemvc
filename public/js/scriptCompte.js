/* -------COMPTES------- */

let valider = document.getElementById('valider');
valider.addEventListener("click", check_entrees_compte());


let choixCompte = document.getElementById('typeCompte');
choixCourant.addEventListener("click", afficherInfoCourant());

let numCompte = document.getElementById('noCompte');
let numCompte_m = document.getElementById('numCompte_error');

let fraisOuv = document.getElementById('fraisOuv');
let fraisOuv_m = document.getElementById('fraisOuv_error');

let remunAnnuelle = document.getElementById('remunAnnuelle');
let remun_m = document.getElementById('remun_error');

let agiosCC = document.getElementById('agiosCC');
let agios_m = document.getElementById('agios_error');

let depotInitCC = document.getElementById('depotInitialCC');
let depotInit_m = document.getElementById('depotInit_error');

let date = document.getElementById('dateDeblocage');
let date_m = document.getElementById('date_error');

/* -------COMPTES------- */
let compte = document.getElementById('formCompte');
let type = document.getElementById('typeCompte');
type.addEventListener("click", afficherChamps());

function afficherInfoCourant(e){
    e.preventDefault();
    agiosCC.style.display = 'block';
    depotInitCC.style.display = 'block'
    fraisOuv.style.display = 'none';
    remunAnnuelle.style.display = 'none';
    date.style.display = 'none';
}

function afficherInfoBloque(){
    e.preventDefault();
    fraisOuv.style.display = 'block';
    remunAnnuelle.style.display = 'block';
    date.style.display = 'block';
    agiosCC.style.display = 'none';
    depotInitCC.style.display = 'none'
}

function afficherInfoEpargne(){
    e.preventDefault();
    fraisOuv.style.display = 'block';
    remunAnnuelle.style.display = 'block';
    date.style.display = 'none';
    agiosCC.style.display = 'none';
    depotInitCC.style.display = 'none'
}


function check_entrees_compte(e){

    if(!fraisOuv.value || fraisOuv.value > 10000){
        e.preventDefault();
        fraisOuv_m.textContent = 'les frais ne depassent pas 10 000f';
        fraisOuv_m.style.color = 'red'; 
    }

    else if(!remunAnnuelle.value || remunAnnuelle.value < 5000){
        e.preventDefault();
        remun_m.textContent = 'minimum 5000f';
        remun_m.style.color = 'red'; 
    }

    else if (!agiosCC.value){
        e.preventDefault();
        agios_m.textContent = 'renseignez le champs';
        agios_m.style.color = 'red';
    }

    else if (!depotInitCC.value || depotInitCC < 15000){
        e.preventDefault();
        depotInit_m.textContent = 'minimum 15000f en depot initial';
        depotInit_m.style.color = 'red';
    }
}

    function refresh(e) {
        e.preventDefault();
        location.reload();
    }
    (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      