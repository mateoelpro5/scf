<?php
include ("../conexion.php");
include ("../encabezado.php");
?>
   <!-- Content Header (Page header) -->
   <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Registro de Usuarios</h1>
                    </div>
                </div><!-- /.row -->

                <div class="card">
                    <div class="card-header">
                        Llene la informacion correspondiente (los campos con asterisco con requeridos)
                    </div>
                    <div class="card-body">
                        <form action="controller_create.php" method="post">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Cedula:*</label>
                                        <input type="text" name="nombre" class="form-control" placeholder="Ingresar Cedula" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nombre:*</label>
                                        <input type="text" name="apellidos" class="form-control" placeholder="Ingresa Nombre" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Apellido:*</label>
                                        <input type="text" name="cedula" class="form-control" placeholder="Ingresar Apellido" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Edad:</label>
                                    <input type="number" name="edad" class="form-control" placeholder="Ingresar Edad">
                                </div>

                                <!-- CARGOS (ACTUALIZAR A FUTURO) -->
                                <div class="col-md-6">
                                    <label for="">Fecha de Nacimiento:*</label>
                                    <input type="date" name="fecha"  class="form-control">
                                </div>
                            </div>
                            
                                <div class="col-md-4">
                                    <label for="" >Direccion:*</label>
                                    <input type="text" name="direccion"  class="form-control" placeholder="Ingresar su Direccion." required>
                                </div>
                            </div>
                                <div class="row">
                                <div class="col-md-4">
                                    <label for="" >Correo:*</label>
                                    <input type="email" name="correo"  class="form-control" placeholder="Ingresar su Correo." required>
                                </div>
                                <div class="col-md-4">
                                    <label for="" >Numero Telefono:*</label>
                                    <input type="text" name="telefono"  class="form-control" placeholder="Ingresar su Telefono." required>
                                </div>
                                <div class="row">
                                <div class="col-md-4">
                                    <label for="">Usuario:*</label>
                                    <input type="text" name="usuario" class="form-control" placeholder="Ingresar Usuario" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Contraseña:*</label>
                                    <input type="text" name="password" class="form-control" placeholder="Ingresar Contraseña" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Verificar contraseña:*</label>
                                    <input type="text" name="verificar_pass" class="form-control" placeholder="Vuelva a ingresar la Contraseña" required>
                                </div>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <center>
                                        <a href="<?php echo $URL."/admin/usuarios"?>" class="btn btn-default btn-block">Cancelar</a>
                                    </center>
                                </div>
                                <div class="col-md-4">
                                    <center>
                                    <button type="submit" class="btn btn-primary btn-block" onclick="return confirm('Asegurese de que los datos fueron llenados correctamente')">Registrar Usuario</button>
                                    </center>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    </div>
    <!-- /.content-wrapper -->