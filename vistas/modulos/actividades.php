<div class="content-wrapper">

    <section class="content-header">

        <h1>

            Banco de actividades

            <small>Crea tus propias actividades</small>

        </h1>

        <ol class="breadcrumb">

            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

            <li class="active">Actividades</li>

        </ol>

    </section>

    <section class="content">

        <div class="box">

            <div class="box-header with-border">

                <button class="btn btn-primary" data-toggle="modal" data-target="#modalActividad">

                    Crear nuevas actividades

                </button>

            </div>

            <div class="box-body">

                <table class="table table-bordered table-striped dt-responsive tablas">

                    <thead>

                        <tr>

                            <th style="width:10px">#</th>
                            <th>Escuela</th>
                            <th>Clave escuela</th>
                            <th>Grado</th>
                            <th>Fecha a realizar</th>
                            <th>Nivel Educativo</th>
                            <th>Aprendizajes Esperados</th>
                            <th>Componente Pedagógico - Didáctico</th>
                            <th>Acciones</th>

                        </tr>

                    </thead>

                </table>

            </div>

        </div>

    </section>

</div>
<!-- /.content-wrapper -->



<!--=====================================
MODAL AGREGAR ACTIVIDAD SOLA
======================================-->
<div id="modalActividad" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-header" style="background:#001F3F; color:white">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Crear actividad</h4>

            </div>

            <div class="modal-body">

                <div class="box-body">

                    <div class="form-group">

                        <div class="input-group">

                            <span class="input-group-addon"><i class="fa fa-university"></i></span>

                            <textarea class="form-control" rows="3" placeholder="Ingresar las actividades a desarrollar"
                                required></textarea>

                        </div>

                    </div>

                    <div class="form-group">

                        <div class="input-group">

                            <span class="input-group-addon"><i class="fa fa-key"></i></span>

                            <input type="text" class="form-control input-lg" name="nuevoClaveEscuela"
                                placeholder="Nombre de la actividad" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <div class="input-group">

                            <span class="input-group-addon"><i class="fa fa-th-large"></i></span>

                            <textarea class="form-control" rows="3" placeholder="Ingresar propósito"
                                required></textarea>
                        </div>

                    </div>

                    <div class="form-group">

                        <div class="input-group">

                            <span class="input-group-addon"><i class="fa fa-th-large"></i></span>

                            <textarea class="form-control" rows="3" placeholder="Ingresar descripción"
                                required></textarea>

                        </div>

                    </div>

                    <div class="form-group">

                        <div class="input-group">

                            <span class="input-group-addon"><i class="fa fa-th-large"></i></span>

                            <textarea class="form-control" rows="3" placeholder="Ingresar Variaciones"
                                required></textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Sube una imagen de la actividad</label>
                                <input type="file" id="exampleInputFile">

                                <p class="help-block">No mayor a 200 MB.</p>
                            </div>
                        </div>

                    </div>


                </div>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Cerrar</button>

                <button type="submit" class="btn btn-primary">Guardar actividad</button>

            </div>

        </div>

    </div>

</div>