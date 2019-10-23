$(document).ready(function () {
    $('.btn-click').on('click', function () {
        var currency = $('.form-inline input').val();
        $.ajax({
            type: 'POST',
            url: '/set',
            async: true,
            cache: false,
            data: {
                currency: currency
            },
            success: function (data) {
                if (data ==0) {
                    $('.message').html('<p>You must type count of EUR</p>');
                }

                if (data !=0) {
                    $('.message').html('<p>' + currency + 'EUR = ' + data + 'UAH</p>');
                }

            }
        });

    });

});

