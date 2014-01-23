$(function() {
   $('#navsearch select').on('change', function() {
      location.href = '/?' + $('#navsearch').serialize();
   });


    $('#myModal').on('show.bs.modal', function (e) {
        var modal = $('#myModal .modal-body');
        modal.load('/?action=comment&ticket=' + $(e.relatedTarget).data('ticket'));
    });
});