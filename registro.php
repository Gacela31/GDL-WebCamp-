<?php include_once 'includes/templates/header.php'; ?>  

  <section class="contenedor">
            <h2 class="seccion">Registro de Usuarios</h2>
            <form id="registro" class="registro" action="index.html">
                <div id="datos_usuario" class="registro caja">
                    <div class="campo">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" placeholder="Tu Nombre">
                    </div>
                    <div class="campo">
                        <label for="apellido">Apellido:</label>
                        <input type="text" id="apellido" placeholder="Tu Apellido">
                    </div>
                    <div class="campo">
                        <label for="email">Email:</label>
                        <input type="email" id="email" placeholder="Tu Email">
                    </div>
                    
                    <div id="error"></div>
                </div>
                           
                <div id="paquete" class="seccion paquete">
                    <h3>Elije el número de boletos</h3>
                    <section class="precios seccion">
                        <ul class="lista-precios">
                            <li>
                            <div class="precio">
                                <h3>pase por dia (viernes)</h3>
                                <p class="numero">$30</p>
                                <ul>
                                    <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
                                    <li><i class="fas fa-check"></i>Todas las Conferencias</li>
                                    <li><i class="fas fa-check"></i>Todos los Talleres</li>
                                </ul>
                                <div class="orden">
                                    <label for="Pase_dia">Boletos deseados: </label>
                                    <input type="number" min="0" id="pase_dia" size="3" placeholder="0">
                                </div>
                            </div>
                            </li>

                            <li>
                            <div class="precio">
                                <h3>todos los dias</h3>
                                <p class="numero">$50</p>
                                <ul>
                                    <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
                                    <li><i class="fas fa-check"></i>Todas las Conferencias</li>
                                    <li><i class="fas fa-check"></i>Todos los Talleres</li>
                                </ul>
                                <div class="orden">
                                    <label for="Pase_completo">Boletos deseados: </label>
                                    <input type="number" min="0" id="pase_completo" size="3" placeholder="0">
                                </div>
                            </div>
                            </li>

                            <li>
                            <div class="precio">
                                <h3>pase por 2 dias (viernes y sabados)</h3>
                                <p class="numero">$45</p>
                                <ul>
                                    <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
                                    <li><i class="fas fa-check"></i>Todas las Conferencias</li>
                                    <li><i class="fas fa-check"></i>Todos los Talleres</li>
                                </ul>
                                <div class="orden">
                                    <label for="Pase_dosdias">Boletos deseados: </label>
                                    <input type="number" min="0" id="pase_dosdias" size="3" placeholder="0">
                                </div>
                            </div>
                            </li>
                        </ul>
                    </section> <!--precios & seccion-->
                </div> <!--paquete-->
            
                <div id="eventos" class="seccion eventos">
                    <h3>Elije tus Talleres</h3>
                    <div class="caja">
                        
                        <div id="viernes">
                          <h4>viernes</h4>
                          <div class="contenido-dia">
                            <div>
                                <p>Talleres: </p>
                                <label><input type="checkbox" name="registro" id="Taller_01" value="Taller_01"> <time>10:00</time> Responsive Web Design </label>
                                <label><input type="checkbox" name="registro" id="Taller_02" value="Taller_02"> <time>12:00</time> Flexbox </label>
                                <label><input type="checkbox" name="registro" id="Taller_03" value="Taller_03"> <time>14:00</time> HTML5 CSS3 </label>
                                <label><input type="checkbox" name="registro" id="Taller_04" value="Taller_04"> <time>17:00</time> Drupla </label>
                                <label><input type="checkbox" name="registro" id="Taller_05" value="Taller_05"> <time>19:00</time> WordPress </label>
                            </div>
                            <div>
                                <p>Conferencias: </p>
                                <label><input type="checkbox" name="registro" id="Conf_01" value="Conf_01"> <time>10:00</time> Como ser Freelancer </label>
                                <label><input type="checkbox" name="registro" id="Conf_02" value="Conf_02"> <time>17:00</time> Tecnologías del Futuro </label>
                                <label><input type="checkbox" name="registro" id="Conf_03" value="Conf_03"> <time>19:00</time> Seguridad en la web </label>
                            </div>
                            <div>
                                <p>Seminarios: </p>
                                <label><input type="checkbox" name="registro" id="Sem_01" value="Sem_01"> <time>10:00</time> Diseño UI y UX para móviles </label>
                            </div>
                          </div><!--contenido-dia-->
                        </div> <!--viernes-->

                        <div id="sabado">
                          <h4>sabado</h4>
                          <div class="contenido-dia">
                            <div>
                                <p>Talleres: </p>
                                <label><input type="checkbox" name="registro" id="Taller_06" value="Taller_06"> <time>10:00</time> AngularJS </label>
                                <label><input type="checkbox" name="registro" id="Taller_07" value="Taller_07"> <time>12:00</time> PHP y MySQL </label>
                                <label><input type="checkbox" name="registro" id="Taller_08" value="Taller_08"> <time>14:00</time> JavaScript Avanzados </label>
                                <label><input type="checkbox" name="registro" id="Taller_09" value="Taller_09"> <time>17:00</time> SEO en Google </label>
                                <label><input type="checkbox" name="registro" id="Taller_10" value="Taller_10"> <time>19:00</time> De PhotoShop a HTML5 y CSS3 </label>
                                <label><input type="checkbox" name="registro" id="Taller_11" value="Taller_11"> <time>21:00</time> PHP Medio y Avanzado </label>
                            </div>
                            <div>
                                <p>Conferencias: </p>
                                <label><input type="checkbox" name="registro" id="Conf_04" value="Conf_04"> <time>10:00</time> Como crear una tienda onlina</label>
                                <label><input type="checkbox" name="registro" id="Conf_05" value="Conf_05"> <time>17:00</time> Los mejores lugares para encontrar trabajo </label>
                                <label><input type="checkbox" name="registro" id="Conf_06" value="Conf_06"> <time>19:00</time> Pasos para crear un negocio rentable </label>
                            </div>
                            <div>
                                <p>Seminarios: </p>
                                <label><input type="checkbox" name="registro" id="Sem_02" value="Sem_02"> <time>10:00</time> Aprende a programar en una mañana </label>
                                <label><input type="checkbox" name="registro" id="Sem_03" value="Sem_03"> <time>17:00</time> Diseño UI y UX para móviles </label>
                            </div>
                          </div><!--contenido-dia-->
                        </div> <!--sabado-->

                        <div id="domingo">
                          <h4>domingo</h4>
                          <div class="contenido-dia">
                            <div>
                                <p>Talleres: </p>
                                <label><input type="checkbox" name="registro" id="Taller_12" value="Taller_12"> <time>10:00</time> AngularJS </label>
                                <label><input type="checkbox" name="registro" id="Taller_13" value="Taller_13"> <time>12:00</time> PHP y MySQL </label>
                                <label><input type="checkbox" name="registro" id="Taller_14" value="Taller_14"> <time>14:00</time> JavaScript Avanzados </label>
                                <label><input type="checkbox" name="registro" id="Taller_15" value="Taller_15"> <time>17:00</time> SEO en Google </label>
                                <label><input type="checkbox" name="registro" id="Taller_16" value="Taller_16"> <time>19:00</time> De PhotoShop a HTML5 y CSS3 </label>
                            </div>
                            <div>
                                <p>Conferencias: </p>
                                <label><input type="checkbox" name="registro" id="Conf_07" value="Conf_07"> <time>10:00</time> Como crear una tienda onlina</label>
                                <label><input type="checkbox" name="registro" id="Conf_08" value="Conf_08"> <time>17:00</time> Los mejores lugares para encontrar trabajo </label>
                                <label><input type="checkbox" name="registro" id="Conf_09" value="Conf_09"> <time>19:00</time> Pasos para crear un negocio rentable </label>
                            </div>
                            <div>
                                <p>Seminarios: </p>
                                <label><input type="checkbox" name="registro" id="Sem_04" value="Sem_04"> <time>10:00</time> Aprende a programar en una mañana </label>
                                <label><input type="checkbox" name="registro" id="Sem_05" value="Sem_05"> <time>17:00</time> Diseño UI y UX para móviles </label>
                            </div>
                          </div> <!--contenido-dia-->
                        </div> <!--domingo-->
                    </div> <!--caja-->
                </div> <!--eventos-->
                
                
                <div id="resumen" class="resumen">
                    <h3>Pagos y Extras</h3>   
                    <div class="caja">
                        <div class="extras">
                            <div class="orden">
                                <label for="camisa_evento">Camisa del Evento $10 <small>(promocion 7% de descuento)</small> </label>
                                <input type="number" min="0" id="camisa_evento" size="3" placeholder="0">
                            </div> <!--orden-->
                            <div class="orden">
                                <label for="etiqueta">Paquete de 10 etiquetas $2 <small>(CSS3, HTML5, JavaScript, PHP)</small> </label>
                                <input type="number" min="0" id="etiqueta" size="3" placeholder="0">
                            </div> <!--orden-->
                            <div class="orden">
                                <label for="regalo">Seleccione un regalo</label>
                                <select id="regalo" required>
                                    <option value="">-Seleccione un regalo--</option>
                                    <option value="ETI">Etiquetas</option>
                                    <option value="PUL">Pulcera</option>
                                    <option value="LAP">Lapicera</option>
                                </select>
                            </div><!--orden-->

                            <input type="button" id="calcular" class="boton" value="Calcular">
                        </div> <!--extras-->
                       
                        <div class="total">
                            <p>Resumen: </p>
                            <div id="lista-productos">

                            </div>
                            <p>Total</p>
                            <div id="suma-total">

                            </div>
                            <input id="btnRegistro" type="submit" class="boton" value="Pagar">
                        </div><!--Total-->
                    </div> <!--caja-->
                </div>
        </form>
    </section>
<?php include_once 'includes/templates/footer.php'; ?>