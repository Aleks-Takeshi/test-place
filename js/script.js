jQuery('document').ready(function () {

    jQuery('#button').on('click', function () {
        var value1, value2, value3, value4;
        value1 = jQuery('#val1').val();
        value2 = jQuery('#val2').val();
        value3 = Number.parseInt(value1) + Number.parseInt(value2);

        alert(value3);
    });

});