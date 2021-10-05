<!doctype html>
<html>
    <head>
        <title>Usuario nuevo</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="miscss/estilo.css" rel="stylesheet"/>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div id="div1" class="container">
            <br>
            <div id="div2">
                <?php 
                    session_start();
                    if(!empty($_SESSION['Tipo_usuario'])) {?>
                        <img src="IMAGENES/banner3.png">
                <?php } ?>
                <div id="div3" >
                    </div>
                    <?php
                        if($_SESSION['Tipo_usuario']=='ADMINISTRADOR') { ?>
                            <form id="formulario" role="form" method="post" action="guardar_usuario.php">
                                <div class="col-md-12">
                                    <strong class="lgris">Ingrese datos del usuario</strong>
                                    <br>
                                    <label class="lgris">Nombre usuario:</label>
                                    <input class="form-control" style="text-transform: uppercase;" type="text" name="nombres" value="" placeholder="Nombre usuario" required/>
                                    <label class="lgris">Email:</label>
                                    <input class="form-control" style="text-transform: uppercase;" type="text" name="apellidos" value="" placeholder="Email" required/>
                                    <label class="lgris">Teléfono:</label>
                                    <input class="form-control" type="number" name="telefono" min="9999" max="9999999999999" value="" placeholder="TELÉFONO" required/>

                                    <div class="form-row">
                                        <div class="form-group col-xs-2">
                                            <select class="form-control" name="tipoid">
                                                <option value="1" selected>Administrador</option>
                                                <option value="2">Vendedor virtual</option>
                                                <option value="3">Mensajero</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-control input-lg" type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACIÓN" required/>
                                        </div>
                                    </div>

                                    <label class="lgris">RolUsuario:</label>
                                    <input class="form-control" type="number" name="ficha" min="9999" max="9999999999999" value="" placeholder="Roll usuario" required/>
                                    <br>
                                    <input class="btn btn-primary" type="submit" value="Guardar" >
                                </div>
                            </form>
                                <?php } else { echo "No tiene permisos para realizar esta acción"; } ?>
                                <br>
                            </div>
                        </div>
                    </div>
                </body>
                </html>