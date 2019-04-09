$(document).ready(function(){
   //Atualizar o select categoria
   update_select_categoria()

   $('#submit_categoria').on('click', function() {
      var categoria = $('#new_categoria').val()
      $.ajax({
         type: 'POST',
         url: '../functions/categoriaInsert.php',
         data: {'categoria': categoria}
      })
      .done(function(result){
         alert(result)
         update_select_categoria()
      })
      .fail(function(){
         alert('Houve um erro ao adicionar uma nova categoria :( ')
      }) 
   })     
})

function update_select_categoria(){
   $.ajax({
         type: 'POST',
         url: '../functions/categoriaSelect.php'
      })
      .done(function(result){
         $('#categoria').html(result)
      })
      .fail(function(){
         alert('Houve um erro ao atualizar as categorias :( ')
      }) 
}

