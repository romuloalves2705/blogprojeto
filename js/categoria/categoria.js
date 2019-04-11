$(document).ready(function(){
   //Atualizar o select categoria
   updateSelectCategoria()

   $('#submit_categoria').on('click', function() {
      insertcategoria()
   })     
})

function insertCategorie() {
   var categoria = $('#new_categoria').val()
   $.ajax({
      type: 'POST',
      url: '../functions/categoria/insert.php',
      data: { 'categoria': categoria }
   })
   .done(function (result) {
      alert(result)
      updateSelectCategoria()
   })
   .fail(function () {
      alert('Houve um erro ao inserir uma nova categoria :( ')
   })
}

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

