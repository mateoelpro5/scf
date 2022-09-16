<?php
include ("../conexion.php");
include ("../plantilla/encabezado2.php");
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Listado de Usuarios <a href="insertar_usuario.php" class="btn btn-danger btn-sm">Nuevo Usuario <i class="fas fa-trash"></i></a> <a href="generar_excel.php" class="btn btn-success btn-sm">Generar Excel <i class="fas fa-pen"></i></a></h1>
                    <?php
                    if(isset($_SESSION['msj'])){
                        $respuesta = $_SESSION['msj']; ?>
                        <script>
                            Swal.fire(
                                'Exito!',
                                '<?php echo $respuesta; ?>',
                                'success'
                            )
                        </script>

                    <?php
                        unset($_SESSION['msj']);
                    }
                    ?>
                </div>
            </div><!-- /.row -->
            <div class="card card-blue">
                <div class="card-header">
                    Usuarios.
                </div>
                <div class="card-body">

                    <script>
                        $(document).ready(function() {
                            $('#tabla-1').DataTable( {
                                "pageLength": 5,
                                "language": {
                                    "emptyTable": "No hay información",
                                    "info": "Mostrando START a END de TOTAL Usuarios",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
                                    "infoFiltered": "(Filtrado de MAX total Usuarios)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Mostrar _MENU_ Usuarios",
                                    "loadingRecords": "Cargando...",
                                    "processing": "Procesando...",
                                    "search": "Buscar:",
                                    "zeroRecords": "Sin resultados encontrados",
                                    "paginate": {
                                        "first": "Primero",
                                        "last": "Ultimo",
                                        "next": "Siguiente",
                                        "previous": "Anterior"
                                    }
                                }
                            });
                        } );
                    </script>


                    <table id="tabla-1" class="table table-striped table-hover table-bordered">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">USUARIO</th>
                            <th scope="col">CEDULA</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">APELLIDO</th>
                            <th scope="col">EDAD</th>
                            <th scope="col">DIRECCION</th>
                            <th scope="col">CORREO</th>
                            <th scope="col">ACCIONES</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        $contador = 0;
                        
                        $querry = $pdo->prepare('SELECT * FROM usuarios 
                        INNER JOIN empleados ON usuarios.ID_EMP=empleados.ID_EMP');

                        $querry->execute();
                        $usuarios = $querry->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($usuarios as $usuario){
                            //$id = $usuario['ID_USU'];
                            $usus = $usuario['USUARIO'];
                            $cedulas = $usuario['CEDULA'];
                            $nombres = $usuario['NOMBRE'];
                            $apellidos = $usuario['APELLIDO'];
                            $edades = $usuario['EDAD'];
                            $direcciones = $usuario['DIRECCION'];
                            $correos= $usuario['CORREO'];
                            $contador = $contador +1;
                            ?>
                            <tr>
                                <th scope="row"><?php echo $contador?></th>
                                <td><?php echo $usus?></td>
                                <td><?php echo $cedulas?></td>
                                <td><?php echo $nombres?></td>
                                <td><?php echo $apellidos?></td>
                                <td><?php echo $edades?></td>
                                <td><?php echo $direcciones?></td>
                                <td><?php echo $correos?></td>
                                <td>
                                    <center>
                                    <a href="editar.php?id=<?php echo $id;?>" class="btn btn-success btn-sm">Editar <i class="fas fa-pen"></i></a>
                                    <a href="eliminar.php?id=<?php echo $id;?>" class="btn btn-danger btn-sm">Eliminar <i class="fas fa-trash"></i></a>
                                    </center>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                    </table>


                </div>
            </div>
        </div><!-- /.container-fluid -->


    </div>
    <!-- /.content-header -->



</div>
<!-- /.content-wrapper -->
