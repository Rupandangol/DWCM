$(function () {
    $('#update-modal').on('click', function () {
        var id = $("#stock-id").html();
        var base_url = window.location.origin;
        $.ajax({
            url: base_url + "/api/updateStock",
            data: {'stock_id': id},
            cache: false,
            success: function (data) {
                $('#stock-name').val(data.stockName);
                $('#stock-details').val(data.stockDetails);
                $('#stock-category').val(data.stockCategory);
                console.log(data);
            }
        });
        console.log(id);
    });

});