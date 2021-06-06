$(document).on('click', '.copy-btn', function (e) {
    e.preventDefault();
    let val = $(this).parent().parent().find('textarea').val();
    copyToClipboard(val);
});

function copyToClipboard(val) {
    var temp = $("<input type='text'>");
    $("body").append(temp);
    temp.val(val).select();
    document.execCommand("copy");
    temp.remove();
}
