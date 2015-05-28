//estado del menú
var menuCollapsed = false;

// Inicializar elementos
$(document).ready(function(){
    $('body').scrollspy({offset: 150});
    $('.parallax').parallax();
    setMenuStyles();
});

//
$(window).resize(function(){
    setMenuStyles();
});

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