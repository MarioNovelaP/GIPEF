<div class="content-wrapper">

    <section class="content-header">

        <h1>

            Plan de actividades de fortalecimiento curricular

            <small>Crea tus propias actividades</small>

        </h1>

        <ol class="breadcrumb">

            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

            <li class="active">Actividades de Fortalecimiento Curricular</li>

        </ol>

    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box">

            <div class="box-header with-border">

                <button class="btn btn-primary" data-toggle="modal" data-target="#modalFortalecimiento">

                    Planear actividades

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
MODAL AGREGAR ACTIVIDADES FORTALECIMIENTO
======================================-->
<div id="modalFortalecimiento" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-header" style="background:#001F3F; color:white">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Planear actividades de Fortalecimiento</h4>

            </div>

            <div class="modal-body">

                <div class="box-body">

                    <div class="form-group">

                        <div class="input-group">

                            <span class="input-group-addon"><i class="fa fa-university"></i></span>

                            <input type="text" class="form-control input-lg" name="nuevoEscuela"
                                placeholder="Ingresar nombre de la escuela" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <div class="input-group">

                            <span class="input-group-addon"><i class="fa fa-key"></i></span>

                            <input type="text" class="form-control input-lg" name="nuevoClaveEscuela"
                                placeholder="Ingresar clave de la escuela" required>

                        </div>

                    </div>



                    <div class="row">

                        <div class="col-xs-4">

                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-th-large"></i></span>

                                    <input type="text" class="form-control input-default" name="nuevoGrado"
                                        placeholder="Ingresar grado" required>

                                </div>

                            </div>

                        </div>

                        <div class="col-xs-4">

                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></i></span>

                                    <input type="text" class="form-control" name="nuevaFecha"
                                        placeholder="Fecha a realizar" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask
                                        require>

                                </div>

                            </div>

                        </div>

                        <div class="col-xs-4">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>--Nivel Educativo--</option>
                                    <option>Preescolar</option>
                                    <option>Primaria</option>
                                    <option>Secundaria general</option>
                                    <option>Secundaria técnica</option>
                                    <option>Telesecundaria</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-xs-4">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>--Aprendizajes Esperados--</option>
                                    <option>333</option>
                                    <option>22</option>
                                    <option>S111</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-7">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>--Componente Pedagógico
                                        - Didáctico--</option>
                                    <option>Desarrollo de la
                                        motricidad</option>
                                    <option>Integración de la
                                        Corporeidad</option>
                                    <option>Creatividad en la
                                        acción motriz</option>
                                </select>
                            </div>
                        </div>

                    </div>


                </div>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Cerrar</button>

                <button type="submit" class="btn btn-primary">Guardar actividades de Fortalecimiento</button>

            </div>

        </div>

    </div>

</div>