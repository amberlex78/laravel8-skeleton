$(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    // Change status entity in the list
    $('.js-checkbox-status').on('click', function () {
        $.ajax({
            method: 'PATCH',
            url: this.dataset.url,
            data: this.dataset
        })
    })

    // Delete entity from the list
    let modalConfirmDelete = $('#modalConfirmDelete');
    modalConfirmDelete.on('show.bs.modal', function (e) {
        $('.js-btn-delete-entity', this).data('entityId', $(e.relatedTarget).data('entityId'));
    })
    modalConfirmDelete.on('click', '.js-btn-delete-entity', function () {
        $('#form' + $(this).data('entityId')).submit();
    })

})
