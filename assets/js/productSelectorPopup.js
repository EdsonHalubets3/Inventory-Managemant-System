var modal = $('#myModal');
var btn = $('#btn');

$(document).ready(function() {
    btn.on('click',function() {
        modal.show();
    });
});

$('body').bind('click', function(e) {
    if ($(e.target).hasClass("modal")) {
        modal.fadeOut();
    }
});

function item(id) {
    alert(id);
    modal.fadeOut();
    /*
    $.ajax({
        type:       "POST",
        url:        "../src/addInvoiceItem.php",
        data:       {item: 'id'},
        success:    function(data) {
            alert;
            modal.fadeOut();
        }
    });
    */
}