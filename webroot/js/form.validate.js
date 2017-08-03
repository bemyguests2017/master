$(document).ready(function () {
    $("#booking_form_advanced").validate({
        rules: {
            name: "required",
            country_id: "required",
            state_id: {
                required: true,
                //minlength: 2
            },
            city_id: {
                required: true,
                //minlength: 5
            },
            pincode: {
                required: true,
                //minlength: 5,
                //equalTo: "#password"
            }
        },
        messages: {
            name: "Please enter your firstname",
            country_id: "Please enter your lastname",
            state_id: {
                required: "Please enter a username",
                //minlength: "Your username must consist of at least 2 characters"
            },
            city_id: {
                required: "Please provide a password",
                //minlength: "Your password must be at least 5 characters long"
            },
            pincode: {
                required: "Please provide a password",
                //minlength: "Your password must be at least 5 characters long",
                //equalTo: "Please enter the same password as above"
            }
        },
        errorElement: "em",
        errorPlacement: function (error, element) {
            // Add the `help-block` class to the error element
            error.addClass("help-block");

            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.parent("label"));
            } else {
                error.insertAfter(element);
            }
        },
        highlight: function (element, errorClass, validClass) {
            $(element).parents(".col-sm-5").addClass("has-error").removeClass("has-success");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents(".col-sm-5").addClass("has-success").removeClass("has-error");
        }
    });
});

$('#modal-open-members').on('click', function(){
    $('#myModalMembers').modal('show');    
        
});
$('#modal-open-features').on('click', function(){
    $('#myModalFeatures').modal('show');    
        
});
$('#modal-open-amenities').on('click', function(){
    $('#myModalAmenities').modal('show');    
        
});
$('#modal-open-location').on('click', function(){
    $('#myModalLocation').modal('show');    
        
});
$('#modal-open-cuisines').on('click', function(){
    $('#myModalCuisines').modal('show');    
        
});


