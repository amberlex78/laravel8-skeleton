try {
    window.$ = window.jQuery = require('jquery');
    window.bootstrap = require('bootstrap');
    require('startbootstrap-sb-admin/src/js/scripts');
} catch (e) {}

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

})
