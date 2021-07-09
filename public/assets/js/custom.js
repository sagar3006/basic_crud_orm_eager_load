$(document).ready(function() {
	// INITIALIZE DATATABLE
    $('#example').DataTable();

	// INITIALIZE TOOLTIP
    initialize_tooltip();

    // MANAGE ALERTS
	manage_alert();
});

// INITIALIZE TOOLTIP
function initialize_tooltip() {
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
		return new bootstrap.Tooltip(tooltipTriggerEl);
	});
}

// AUTOMATICALLY HIDE ALERTS AFTER DELAY
function hide_alert() {
	$(".alert").delay(10000).slideUp(400, function() {
      	$(this).alert('close');
  	});
}

// MANAGE ALERTS
function manage_alert() {
	//$('.alert').hide();
	$('.alert').slideDown(400);
	hide_alert();
}

// VERIFY USER'S PHONE FOR DUPLICATES
function check_phone_validity(phone, id, url) {
	if(phone.length == 11) {
        $.ajax({
            url 	: url,
            type 	: 'get',
            data 	: {
                phone 	: phone,
                id		: id
            },
            success : function (response) {
                $('#phone_check').html(response);
            }
        });
    } else if(phone.length > 11) {
    	$('#phone_check').html('<p style="color: red;">Provide a 11 digit phone number!</p>');
    } else {
    	$('#phone_check').html('');
    }
}