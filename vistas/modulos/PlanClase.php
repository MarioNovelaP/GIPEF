<div class="content-wrapper">

    <section class="content-header">

        <h1>

            Plan de clase de Educación Física

            <small>Crea tus propias actividades</small>

        </h1>

        <ol class="breadcrumb">

            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

            <li class="active">Clase de E.F</li>

        </ol>

    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box">

            <div class="box-header with-border">

                <button class="btn btn-primary" data-toggle="modal" data-target="#modalClaseFisica">

                    Hacer planeación

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


<!--=====================================
MODAL AGREGAR CLASE DE FISICA
======================================-->
<div id="modalClaseFisica" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <form role="form" method="post" enctype="multipart/form-data">


            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-header" style="background:#001F3F; color:white">

                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">Crear clase de Educación Física</h4>

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

                        <div class="form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-th-large"></i></span>

                                <input type="text" class="form-control input-lg" name="nuevoGrado"
                                    placeholder="Ingresar grado" required>

                            </div>

                        </div>


                        <div class="row">

                            <div class="col-xs-4">

                                <div class="form-group">

                                    <div class="input-group">

                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></i></span>

                                        <input type="text" class="form-control" name="nuevaFecha"
                                            placeholder="Fecha a realizar" data-inputmask="'alias': 'yyyy/mm/dd'"
                                            data-mask require>

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

                        
                            
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">--Componente Pedagógico
                                            - Didáctico--</option>
                                        <option value="componente">Desarrollo de la
                                            motricidad</option>
                                        <option value="componente">Integración de la
                                            Corporeidad</option>
                                        <option value="componente">Creatividad en la
                                            acción motriz</option>
                                    </select>
                                </div>
                            

                            

                                
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="">--Aprendizajes Esperados--</option>
                                            <option value="aprendizaje">adsax</option>
                                            <option value="aprendizaje">dsdsx</option>
                                            <option value="aprendizaje">asdsad*</option>
                                        </select>
                                    </div>
                                

                           

                        </div>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Cerrar</button>

                        <button type="submit" class="btn btn-primary">Crear clase</button>

                    </div>
        </form>
    </div>

</div>

</div>