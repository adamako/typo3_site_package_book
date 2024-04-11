console.log('WE LOVE TYPO3');
$(document).ready(function() {
    $('.tx-felogin-pi1 form fieldset div').each(function(id) {
        $(this).addClass('form-group');
    })
    $('.tx-felogin-pi1 form fieldset div input').each(function(id) {
        var type = $(this).attr('type');
        if (type == 'text' || type == 'password') {
            $(this).addClass('form-control');
        }
        if (type == 'submit') {
            $(this).addClass('btn btn-primary');
        }
    });
});
