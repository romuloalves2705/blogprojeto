$(document).ready(function() {
   // carregar a tabela de artigos
   var path = $(location).attr('pathname')
   var pathfile = path.split('/')
   
   if (pathfile[3] === 'dashboard.php') {
      imprimir_tabela()
   }

   if (pathfile[3] === 'edit.php') {
      mostrar_valores_inputs($(location).attr('search'))
   }
   
})

function imprimir_tabela() {
   $.ajax({
      url: '../functions/artigo/select.php'
      })
      .done(function(result) {
         $('#artigos').html(result)
         lista_delete()
      })
      .fail(function() {
         alert('Houve um error ao imprimir as artigos :( ')
      })
}

function mostrar_valores_inputs(search) {
   var search_array = search.split('=')
   var id_artigo = search_array[1]
   $.ajax({
      type: 'POST',
      url: '../functions/artigo/select_by_id.php',
      data: {'id': id_artigo}
      })
      .done(function(result) {  
//       if (!result) return alert('Hubo un error al cargar la información :(')
         var obj = $.parseJSON(result)
         $('#titulo').val(obj.titulo)
         $('#conteudo').val(obj.conteudo)
         update_select_categoria(obj.categoria_id)
         $('#id_artigo').val(obj.artigo_id)
      })
      .fail(function() {
         alert('Houve um error ao carregar os artigos :( ')
      })
}

function lista_delete() {
   $('.delete').on('click', function () {
      return confirm('Deseja mesmo excluir?')
   })
}