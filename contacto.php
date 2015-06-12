<?php $currentpage = 'contacto'; ?>
<?php include('header.html'); ?>
<div id="inicio"></div>
<div id="contacto">
    <div class="parallax-container">
        <div class="parallax">
            <img src="img/parallax/3.jpg" alt="">
        </div>
        <div class="container">
            <h1>CONTACTO</h1>
        </div>
    </div>
    <div class="jumbotron bg-white">
    
       <div class="container">
           <div class="row">
                <div class="col-xs-0 col-md-1"></div>
               <div class="col-xs-12 col-md-4">
                    <h2>CONTÁCTANOS</h2>
                    <br>
                    <p>Para cualquier duda o situación estamos a la orden.</p>
                    <p>Teléfono Celular:</p>
                    <p>01(614)285.7326</p>
                    <p>Email:</p>
                    <p>rentas@elsolsaleparatodos.mx</p>
               </div>
               <div class="col-xs-0 col-md-1">
                    <img src="img/content/vert-sep.png" alt="Separador" class="separador">
                </div>
               <div class="col-xs-12 col-md-5">
                    <h2>FORMULARIO DE CONTACTO</h2>
                        <form id="ajax-contact" class="form-horizontal" method="post" action="mailer.php">
                            <label for="nombreContacto">Nombre</label>
                            <input type="text" class="form-control form-contact form-input" id="nombreContacto" name="nombreContacto" maxlength="30" required>
                            <label for="telContacto">Teléfono</label>   
                            <input type="text" class="form-control form-contact form-input" id="telContacto" name="telContacto" maxlength="10">
                            <label for="emailContacto">Email</label>
                            <input type="email" class="form-control form-contact form-input" id="emailContacto" name="emailContacto" required>
                            <label for="asuntoContacto">Asunto</label>
                            <input type="text" class="form-control form-contact form-input" id="asuntoContacto" name="asuntoContacto" maxlength="30">
                            <label for="comentariosContacto">Mensaje</label>
                            <textarea id="comentariosContacto" name="comentariosContacto" cols="30" rows="7" class="form-control form-contact form-textarea" required></textarea>
                            <div class="pull-left">
                                <button type="submit" id="sendBttn" class="contacto-enviar">Enviar</button>
                            </div>
                        </form>
                        <div id="form-messages" role="alert"></div>
                    </div>
               </div>
               <div class="col-xs-0 col-md-1"></div>
           </div>
       </div>
                     
    </div>  
</div>

<?php include('footer.html'); ?>