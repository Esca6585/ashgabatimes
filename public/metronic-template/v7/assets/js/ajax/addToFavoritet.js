function addToFavorite(id){
    const path = window.location.origin  + '/addToFavorite/' + id;

    $.ajax({
        url: path,
        type: 'GET',
        success: function(res) {
            console.log(res);
            location.reload();
        }
    });
}
