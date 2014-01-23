$(function() {
   $('#milestone').on('change', function() {
      location.href = '/?milestone=' + $(this).val();
   });


    $('#myModal').on('show.bs.modal', function (e) {
        var modal = $('#myModal .modal-body');
        modal.load('/?action=comment&ticket=' + $(e.relatedTarget).data('ticket'));
    });
});