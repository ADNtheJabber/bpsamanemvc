let typeCompte = document.getElementById('typeCompte');
typeCompte.addEventListener("click", afficherInfo());

let numeroCompte = document.getElementsById('numeroCompte');

let fraisOuverture = document.getElementsById('fraisOuverture');

let depotInitial = document.getElementsById('depotInitial');

let remuneration = document.getElementsById('remuneration');

let agios = document.getElementsById('agios');

let dateOuverture = document.getElementsById('dateOuverture');

let dateDeblocage = document.getElementsById('dateDeblocage');

let inputP = document.getElementsById('searchPhysique');
let inputM = document.getElementsById('searchEntreprise');

function afficherInfo(e){
    e.preventDefault();
   if (typeCompte == 0) {
       alert('Donner le type du compte');
   } 
   else if(typeCompte == 1){
       
   }
   else if (typeCompte == 2){

   }
}

    $(document).ready(function () {
          $('#searchEntreprise').onkeyup(function(){
              var inputM = $(this).val();
              if (inputM != '') {
                $('#result').html('');
                $.ajax({
                    url:"/opt/lampp/htdocs/bpsamanemvc/src/controller/CompteController.class.php",
                    method:"post",
                    data:{search:inputM},
                    dataType:"text",
                    success:function(data) {
                      $('#result').html('data');

                    }
                });
              }
              else {
                  $('#result').html('');
                  $.ajax({
                      url:"/opt/lampp/htdocs/bpsamanemvc/src/controller/CompteController.class.php",
                      method:"post",
                      data:{search:inputP},
                      dataType:"text",
                      success:function(data) {
                        $('#result').html('data');

                      }
                  });
              }
          })
      });
      $(document).ready(function () {
        $('#searchPhysique').keyup(function(){
            var inputP = $(this).val();
            if (inputP != '') {
              $('#result').html('');
              $.ajax({
                  url:"/opt/lampp/htdocs/bpsamanemvc/src/controller/CompteController.class.php",
                  method:"post",
                  data:{search:inputP},
                  dataType:"text",
                  success:function(data) {
                    $('#result').html('data');

                  }
              });
            }
            else {
                $('#result').html('');
                $.ajax({
                    url:"/opt/lampp/htdocs/bpsamanemvc/src/controller/CompteController.class.php",
                    method:"post",
                    data:{search:inputP},
                    dataType:"text",
                    success:function(data) {
                      $('#result').html('data');

                    }
                });
            }
        })
    })