$(document).ready(function(){
   //Atualizar o select #categorias
   update_select_categorie()
   
   $('#submit_categorie').on('click', function() {
      var categorie = $('#new_categorie').val()
      $.ajax({
         type: 'POST',
         url: '../functions/categorieInsert.php',
         data: {'categorie': categorie}
      })
      .done(function(result){
         alert(result)
         update_select_categorie()
      })
      .fail(function(){
         alert('Hubo un error al insertar la nueva categoria :( ')
      }) 
   })     
})

function update_select_categorie(){
   $.ajax({
         type: 'POST',
         url: '../functions/categorieSelect.php'
      })
      .done(function(result){
         $('#categorie').html(result)
      })
      .fail(function(){
         alert('Houve um erro ao atualizar as categorias :( ')
      }) 
}
