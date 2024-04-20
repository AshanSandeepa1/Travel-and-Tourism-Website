$(document).ready(function(){

    $('#cost').on('input', function() {
        var cost = $(this).val();
        $('#cost-value').text("Below Rs. " + cost); 
        filterHotels(); 
    });


    $('#province, #rating').on('change', function() {
        filterHotels(); 
    });


    function filterHotels() {
        var cost = parseInt($('#cost').val());
        var province = $('#province').val();
        var rating = parseFloat($('#rating').val());

        $('.card').each(function() {
            var hotelCost = parseInt($(this).data('cost'));
            var hotelProvince = $(this).data('province');
            var hotelRating = parseFloat($(this).data('rating'));

            if ((cost === 0 || hotelCost <= cost) &&
                (province === "" || hotelProvince === province) &&
                (isNaN(rating) || hotelRating >= rating)) {
                $(this).show(); 
            } else {
                $(this).hide();
            }
        });
    }

    // Reset filters when the 'Reset Filters' button is clicked
    $('#reset-filters').on('click', function() {
        $('#cost').val(0);
        $('#cost-value').text("Not Filtered"); 
        $('#province').val("");
        $('#rating').val("");
        filterHotels();
    });
});
