<?php $currentpage = 'index'; ?>
<?php include('header.html'); ?>
    <!-- Carousel -->
    <div class="clearfix"></div>
    <div id="inicio"></div>
    <div class="container-fluid">
        <div class="row">
            <!-- SLIDE -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="img/banner/1.jpg" class="img-responsive" alt="">
                      <div class="container">
                          <div class="carousel-caption">
                              <h1>Para que PODAMOS ganar más...</h1>
                              <h2>PODEMOS bien los nogales.</h2>
                          </div>
                      </div>
                    </div>
                   <div class="item">
                      <img src="img/banner/2.jpg" class="img-responsive" alt="">
                      <div class="container">
                          <div class="carousel-caption">
                              <h1>MEJORA LA CALIDAD</h1>
                              <h2>DE TUS AGUACATES</h2>
                          </div>
                      </div>
                    </div>
                    <div class="item">
                      <img src="img/banner/3.jpg" class="img-responsive" alt="">
                      <div class="container">
                          <div class="carousel-caption">
                              <h1>AUMENTA LA ILUMINACIÓN</h1>
                              <h2>DE TU HUERTO</h2>
                          </div>
                      </div>
                    </div>
                    <div class="item">
                      <img src="img/banner/4.jpg" class="img-responsive" alt="">
                      <div class="container">
                          <div class="carousel-caption">
                              <h1>CUIDA TUS ÁRBOLES</h1>
                              <h2>CON LAS MEJORES MÁQUINAS</h2>
                          </div>
                      </div>
                    </div>
                 </div>
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
       <!-- END SLIDE -->
        </div>
    </div>
        
        <!-- Conocenos -->
        <div id="conocenos">
            <div class="jumbotron bg-white">
               <div class="container">
                   <h1>¿QUIÉNES SOMOS?</h1>
                   <p>Nueces Dolores necesitaba de una tecnología más rápida y eficiente para la poda del nogal. En el año 2002 un emprendedor, como productor líder y con mucha visión, logró darse cuenta que era el momento de adquirir una máquina podadora de calidad mundial.</p>
                   <p>Es así como nace en Chihuahua, El Sol Sale Para Todos. Empresa que actualmente es líder en el servicio de poda mecánica.</p>
               </div>                
            </div>
        </div>
        
        <!-- Servicios -->
        <div id="servicios">
            <div class="parallax-container">
                <div class="parallax">
                    <img src="img/parallax/2.jpg" alt="Vegetación">
                </div>
                <div class="container beneficios">
                    <h1>BENEFICIOS QUE TE PROPORCIONAMOS</h1>
                    <div class="row" >
                       <!--Empty div to get the 12n columns -->
                        <div class="col-sm-3 col-md-2 col-lg-1"></div>
                        
                        <div class="col-sm-6 col-md-4 col-lg-2" data-toggle="modal" data-target="#formacion-modal">
                            <img src="img/beneficios/1-hojas.png" alt="Hojas" />
                            <p>Adaptar la formación</p>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2" data-toggle="modal" data-target="#aireacion-modal">
                            <img src="img/beneficios/2-viento.png" alt="Viento" />
                            <p>Mejorar la aireación</p>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2" data-toggle="modal" data-target="#iluminacion-modal">
                            <img src="img/beneficios/3-sol.png" alt="Sol" />
                            <p>Mejorar la iluminación</p>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2" data-toggle="modal" data-target="#floracion-modal">
                            <img src="img/beneficios/4-flor.png" alt="Flor" />
                            <p>Favorecer la floración</p>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2" data-toggle="modal" data-target="#fructificacion-modal">
                            <img src="img/beneficios/5-aguacate.png" alt="Aguacate" />
                            <p>Favorecer la fructificación</p>
                        </div>
                        <!--Empty div to get the 12n columns -->
                        <div class="col-sm-3 col-md-2 col-lg-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="rightbeneficio" data-toggle="modal" data-target="#nuez-modal">
                                <img src="img/beneficios/6-nuez.png" alt="Nuez" />
                                <p>Obtener nuez de calidad</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="leftbeneficio" data-toggle="modal" data-target="#rendimiento-modal">
                                <img src="img/beneficios/7-grafica.png" alt="Gráfica" />
                                <p>Aumentar el rendimiento</p>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
            
        </div>
        
        <!-- Puntos importantes -->
        <div id="puntosimportantes">
            <div class="jumbotron bg-white">
               <div class="container">
                   <h1>PUNTOS IMPORTANTES PARA NOSOTROS</h1>
                   <div class="row">
                       <div class="col-sm-12 col-md-6">
                           <img src="img/cutter.png" alt="Cutter" />
                           <h2>LA PODA MECÁNICA</h2>
                           <p>De los principales efectos en la aplicación de podar con nosotros  se encuentra una mejora en la calidad de la nuez al incrementar su tamaño y la relación almendra/nuez, lo cual favorece el ingreso del producto al mercado.</p> 
                       </div>
                       <div class="col-sm-12 col-md-6">
                           <img src="img/sol.png" alt="Sol" /> 
                           <h2>LA LUZ</h2>
                           <p>La luz representa la fuente de energía más importante para todo tipo de árbol por tal razón esta juega un papel muy importante a la hora de la cosecha.</p>
                           <p>La mejor manera de garantizar una buena iluminación en tu huerta es la poda mecánica con El Sol Sale Para Todos, ya que contamos con el equipo más moderno que hay en la actualidad además de contar con operadores altamente capacitados.</p>
                       </div>
                   </div>
               </div>                
            </div>
        </div>
        
        <!-- Tipos de Poda
        <div id="tiposdepoda">
            <div class="container">
                <h1>TIPOS DE PODA QUE MANEJAMOS</h1>
                <p>Las ramas que caen en la poda se pueden convertir en materia orgánica o incluso en una fuente de energía, transformando su biomasa.</p>
                <div class="col-sm-12 col-md-6">
                    <div class="cuadro">
                        <img src="img/planta.png" alt="Planta">
                        <h3>FORMACIÓN</h3>
                        <p>La de formación se da en la fase de esarrollo, desde su planeanción hasta enta entrar en la fase productiva.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="cuadro">
                        <img src="img/arbol.png" alt="Árbol">
                        <h3>MANTENIMIENTO</h3>
                        <p>Se proporciona a los árboles adultos, ya sea para mantener la relación entre el crecimiento vegetativo o para evitar que se cierren los árboles y no haya penetración de luz.</p>
                    </div>
                </div>
            </div>
        </div>
        -->
        
        <!-- Tipos de Poda-Parallax -->
        <div id="tiposdepoda">
            <div class="parallax-container">
                <div class="parallax">
                    <img src="img/parallax/1.jpg" alt="">
                </div>
                <div class="container">
                    <h1>TIPOS DE PODA QUE MANEJAMOS</h1>
                    <p>Las ramas que caen en la poda se pueden convertir en materia orgánica o incluso en una fuente de energía, transformando su biomasa.</p>
                    <div class="col-sm-12 col-md-6">
                        <div class="cuadro">
                            <img src="img/planta.png" alt="Planta">
                            <h3>FORMACIÓN</h3>
                            <p>La de formación se da en la fase de desarrollo, desde su planeación hasta entrar en la fase productiva.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="cuadro">
                            <img src="img/arbol.png" alt="Árbol">
                            <h3>MANTENIMIENTO</h3>
                            <p>Se proporciona a los árboles adultos, ya sea para mantener la relación entre el crecimiento vegetativo o para evitar que se cierren los árboles y no haya penetración de luz.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Maquinaria -->
        <div id="maquinaria">
            <div class="jumbotron bg-white">
                <div class="container">
                    <h1>MAQUINARIA</h1>
                    <p>La empresa El Sol Sale Para Todos realiza la poda mecánica con tres máquinas Th-2000. La primera es del año 2000, la siguiente es modelo 2015 y la última es 2016, contando ésta con cero horas trabajadas.</p>
                    <a class="btn btn-maquinaria" href="maquinaria.php" role="button">Conócela</a>
                </div>
            </div>
        </div>
    
<?php include('circular-modals.html'); ?>        
<?php include('footer.html'); ?>