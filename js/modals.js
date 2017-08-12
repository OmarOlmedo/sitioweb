//script para borrar el formulario del modal login
$("#modal-login").on('hidden.bs.modal', function () {
  $('#login')[0].reset();
});

//script para borrar el formulario del modal bolsa
$("#modal-contact-form").on('hidden.bs.modal', function () {
  $('#formulario')[0].reset();
});

$('#modal-contact-form').on('show.bs.modal', function(e) {
     var id = $(e.relatedTarget).data().id;
      $(e.currentTarget).find('#id_bolsa').val(id);
  });

//script para birrar formulario de modal curos

$("#modal-curso-form").on('hidden.bs.modal', function () {
  $('#formulario')[0].reset();
});


$('#modal-curso-form').on('show.bs.modal', function(e) {
     var id = $(e.relatedTarget).data().id;
     $(e.currentTarget).find('#id_curso').val(id);
  });
