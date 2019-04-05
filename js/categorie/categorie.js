$(document).ready(function(){

   $('#submit_categorie').on('click', function() {
      var categorie = $('#new_categorie').val()
      $.ajax({
         type: 'POST',
         url: '../functions/categorieInsert.php',
         data: {'categorie': categorie}
      })
      .done(function(result){
         alert(result)
      })
      .fail(function(){
         alert('Houve um erro ao adicionar uma nova categoria :( ')
      }) 
   })     
})

