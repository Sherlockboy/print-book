function copyToClipboard(val) {
    var temp = $("<input type='text'>");
    $("body").append(temp);
    temp.val(val).select();
    document.execCommand("copy");
    temp.remove();
}