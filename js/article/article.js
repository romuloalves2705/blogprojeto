$(document).ready(function() {
   // carregar a tabela de artigos
   var path = $(location).attr('pathname')
   var pathfile = path.split('/')
   
   if (pathfile[3] === 'dashboard.php') {
      imprimir_tabla()
   }

   if (pathfile[3] === 'edit.php') {
      mostrar_valores_inputs($(location).attr('search'))
   }
   
})

function imprimir_tabla() {
   $.ajax({
      url: '../functions/article/select.php'
   })
      .done(function(result) {
         $('#articles').html(result)
         //listen_delete()
      })
      .fail(function() {
         alert('Houve um error ao carregar os artigos :( ')
      })
}

function mostrar_valores_inputs(search) {
   var search_array = search.split('=')
   var id_article = search_array[1]
   $.ajax({
      type: 'POST',
      url: '../functions/article/select_by_id.php',
      data: {'id': id_article}
   })
      .done(function (result) {
         //$('#articles').html(result)
         var obj = $.parseJSON(result)
         //alert(result.titulo)
         console.log(obj.titulo)
//         if (!result) return alert('Hubo un error al cargar la información :(')
//         var obj = $.parseJSON(result)
         $('#title').val(obj.titulo)
//         $('#content').val(obj.contenido)
//         updateSelectCategorie(obj.categoria_id)
//         $('#id_article').val(obj.articulo_id)
      })
      .fail(function () {
         alert('Houve um error ao carregar os artigos :( ')
      })
}

//function listen_delete() {
//   $('.delete').on('click', function () {
//      return confirm('¿Desea eliminar?')
//   })
//}