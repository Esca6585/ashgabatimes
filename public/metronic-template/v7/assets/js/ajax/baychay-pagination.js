$(document).on('click', '.page-numbers', function (event) {
    event.preventDefault();

    var page = $(this).attr('href').split('page=')[1];

    getMainMoreData(page);
});

function getMainMoreData(page) {
    var data = 'page=' + page;

    $.ajax({
        type: "GET",
        url: window.location.href,
        data: data,
        success: function (data) {
            $('#products').html(data);
        }
    });
}