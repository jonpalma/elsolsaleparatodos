//estado del menú
var menuCollapsed = false;

// Inicializar elementos
$(document).ready(function(){
    $('body').scrollspy({offset: 150});
    $('.parallax').parallax();
    setMenuStyles();    
    centerModals();

});

//
$(window).resize(function(){
    setMenuStyles();

});

$(window).load(function(){    $('.bigimg1').height($('.referencediv.1').height() - 10); $('.bigimg.2').height($('.referencediv2').height() - 10); })

//Para regular el comportamiento colapsible del menú en móviles
function setMenuStyles(){
    var menuItems = $('ul.navbar-nav a').toArray();
    
    //Add the clases to the menu items.
    if((menuCollapsed == false) && ($( window ).width() < 768)){
        for(var i = 0; i < menuItems.length; i++){
            $(menuItems[i]).attr("data-toggle", "collapse");
            $(menuItems[i]).attr("data-target", "#navbar-collapse-sol");
        }
        menuCollapsed = true;    
    } else if((menuCollapsed == true) && ($( window ).width() >= 768)) {
            //Remove them if resized
            for(var i = 0; i < menuItems.length; i++){                
                $(menuItems[i]).attr("data-toggle", "");
                $(menuItems[i]).attr("data-target", "");
            }
            menuCollapsed = false;
        }
           
}

//Modal Center by Cory LaViska from http://www.abeautifulsite.net/vertically-centering-bootstrap-modals/
function centerModals(){
    $(function() {
        function reposition() {
                var modal = $(this),
                    dialog = modal.find('.modal-dialog');
                modal.css('display', 'block');

                // Dividing by two centers the modal exactly, but dividing by three 
                // or four works better for larger screens.
                dialog.css("margin-top", Math.max(0, ($(window).height() - dialog.height()) / 3));
            }
            // Reposition when a modal is shown
            $('.modal').on('show.bs.modal', reposition);
            // Reposition when the window is resized
            $(window).on('resize', function() {
                $('.modal:visible').each(reposition);
        });
    });
}


//Ajax contact form from VTS
//Why do codes never work when copy-pasted?
//Woah, this one worked.

$(function() {

	// Get the form.
	var form = $('#ajax-contact');

	// Get the messages div.
	var formMessages = $('#form-messages');

	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();
        $("#sendBttn").text("Enviando...");

		// Serialize the form data.
		var formData = $(form).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function(response) {
			// Make sure that the formMessages div has the 'success' class.
			$(formMessages).removeClass('alert alert-danger');
			$(formMessages).addClass('alert alert-success');

			// Set the message text.
			$(formMessages).text(response);

			// Clear the form.
			$('#nombreContacto').val('');
            $('#telContacto').val('');
			$('#emailContacto').val('');
			$('#asuntoContacto').val('');
			$('#comentariosContacto').val('');
            $("#sendBttn").text("ENVIAR");
		})
		.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('alert alert-success');
			$(formMessages).addClass('alert alert-danger');

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
                $("#sendBttn").text("Enviar");
			} else {
				$(formMessages).text('Oops! Ocurrió un error no se pudo enviar la forma.');
                $("#sendBttn").text("Enviar");
			}
		});

	});

});
