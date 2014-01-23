$(function() {
   $('#milestone').on('change', function() {
      location.href = '/?milestone=' + $(this).val();
   });


    $('#myModal').on('show.bs.modal', function (e) {
        $('#myModal .modal-body').load('/?action=comment&ticket=' + $(e.relatedTarget).data('ticket'));
    });
});