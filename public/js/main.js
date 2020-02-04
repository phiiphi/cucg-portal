$('#edit').on('show.bs.model', function (event) {
    var button = $(event.relatedTarget)
    var week = button.data('myweek')

    var modal = $(this)
    modal.find('.modal-body select').val(week)

});
