$(document).ready(function() {
    var prodType = $('#product_prodType');

    $('#product').on('change','#product_prodName', function() {
        var valid = true;
        prodType.parent().show();
        prodType.empty(); 
        var newOptions = {};

        var prodName = this.value;
        if (prodName == 'REFRIGERATOR') {
            newOptions = {
                'Vertical Type' : 'VERTICAL TYPE',
                'Horizontal Type' : 'HORIZONTAL TYPE',
                'Multipurpose Refrigerator' : 'MULTIPURPOSE REFRIGERATOR',
                'Multipurpose Freezer' : 'MULTIPURPOSE FREEZER',
                'Table Type' : 'TABLE TYPE',
                'Side Refrigerator' : 'SIDE REFRIGERATOR',
                'Water Storage Refrigerator' : 'WATER STORAGE REFRIGERATOR'
            };

        } else if (prodName == 'GAS STOVE, FYER, BURNER') {
            newOptions = {
                'Commercial Gas' : 'COMMERCIAL GAS',
                'Grill/Griddle/Over' : 'GRILL, GRIDDLE, OVER',
                'Fryer' : 'FRYER',
                'Gas Neutralization' : 'GAS NEUTRALIZATION'
            };

        } else if (prodName == 'SINK, COUNTER') {
            newOptions = {
                'Sink' : 'SINK',
                'Counter' : 'COUNTER',
                'Shelf' : 'SHELF'

            };

        } else if (prodName == 'SERVING CART, MOVING CART') {
            newOptions = {
                'Plastic' : 'PLASTIC',
                'Wood' : 'WOOD',
                'Stainless' : 'STAINLESS'
            };

        } else if (prodName == 'OFFICE') {
            prodType.parent().hide();

        } else if (prodName == 'SECURITY') {
            prodType.parent().hide();

        } else if (prodName == 'VAULT') {
            newOptions = {
                'Overflow safe deposit box' : 'OVERFLOW SAFE DEPOSIT BOX'
            };

        } else if (prodName == 'CONSTRUCTION MATERIAL') {
            prodType.parent().hide();

        } else {
            valid = false;

        }

        if (valid) {
            $.each(newOptions, function(key,value) {
                prodType.append($("<option></option>")
                .attr("value", value).text(key));
            });
        } else {
            alert("Something Went Wrong\nThe page will reload");
            location.reload();
        }

    });
});