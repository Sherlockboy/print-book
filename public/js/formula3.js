$('#page_count').on('keyup', (e) => {
    e.preventDefault();
    $.ajax({
        url: '/render/formula3',
        type: 'get',
        data: {
            page_count: $('#page_count').val()
        },
        async: true,
    }).done(function(data) {
        $('#formula3-content').html(data);
    })
});