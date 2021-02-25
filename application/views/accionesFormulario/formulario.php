
<body>
    <!-- BARRA DE NAVEGACION -->
    <div style="height: 30px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-lg p-3 mb-5 bg-white ">
                    <div class="card-header">Corregimientos</div>
                    <div class="card-body">
                        <form id="corregimientos" method="post" action="<?= base_url('formulario/store') ?>" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="nombrecorregimiento">Nombre del corregimiento</label>
                                    <input name="nombrecorregimiento" type="text" class="form-control" id="nombrecorregimiento">
                                    <!-- <?= form_error('nombrecorregimiento', '<p class="text-danger">', '</p>') ?>   -->
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="municipio">Municipio al que pertenece</label>
                                    <input name="municipio" type="text" class="form-control" id="municipio">
                                    <!-- <?= form_error('municipio', '<p class="text-danger">', '</p>') ?>   -->
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="veredas">Veredas que lo componen</label>
                                    <textarea name="veredas" type="text" class="form-control" id="veredas" placeholder="Por favor separa los nombres de las veredas con comas." style="resize: none;"></textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="pobladores">Número de pobladores aproximado</label>
                                    <input name="pobladores" type="number" class="form-control" id="pobladores">
                                    <!-- <?= form_error('pobladores', '<p class="text-danger">', '</p>') ?> -->
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="ubicacionlatitud">Ubicación aproximada latitud</label>
                                    <input name="ubicacionlatitud" type="text" class="form-control" id="ubicacionlatitud">
                                    <!-- <?= form_error('ubicacionlatitud', '<p class="text-danger">', '</p>') ?> -->
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="area">Area en km</label>
                                    <input name="area" type="number" class="form-control" id="longitud">
                                    <!-- <?= form_error('area', '<p class="text-danger">', '</p>') ?>   -->
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="longitud">Longitud (tomada con el celular)</label>
                                    <input name="longitud" type="file" class="form-control" id="longitud">
                                    <!-- <?= form_error('longitud', '<p class="text-danger">', '</p>') ?>   -->
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="nautoridadprincipal">Nombre autoridad principal</label>
                                    <input name="nautoridadprincipal" type="text" class="form-control" id="nautoridadprincipal">
                                    <!-- <?= form_error('nautoridadprincipal', '<p class="text-danger">', '</p>') ?> -->
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="nautoridadpolicial">Nombre autoridad de policia</label>
                                    <input name="nautoridadpolicial" type="text" class="form-control" id="nautoridadpolicial">
                                    <!-- <?= form_error('nautoridadpolicial', '<p class="text-danger">', '</p>') ?> -->
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="miembrosjal"> miembros JAl</label>
                                    <textarea name="miembrosjal" type="text" class="form-control" id="miembrosjal" placeholder="Por favor separa los nombres de los miembros con comas." style="resize: none;"></textarea>
                                    <!-- <?= form_error('miembrosjal', '<p class="text-danger">', '</p>') ?>  -->
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="jal"> JAL </label>
                                    <input name="jal" type="text" class="form-control" id="jal">
                                    <!-- <?= form_error('jal', '<p class="text-danger">', '</p>') ?>  -->
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="codigodane">Código Dane</label>
                                    <input name="codigodane" type="number" class="form-control" id="codigodane">
                                    <!-- <?= form_error('codigodane', '<p class="text-danger">', '</p>') ?>  -->
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="numeroadministrativo">Número acto administrativo que lo creó</label>
                                    <input name="numeroadministrativo" type="number" class="form-control" id="numeroadministrativo">
                                    <!-- <?= form_error('numeroadministrativo', '<p class="text-danger">', '</p>') ?>  -->
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Enviar</button>

                            <?php if ($dat = $this->session->flashdata('msg')) : ?>
                                <div class="alert alert-primary" role="alert">
                                    <?= $dat ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label=" <?= $this->session->sess_destroy(); ?>">
                                        <span aria-hidden="true">&times;</span>
                                    </button>           
                                </div>
                            <?php endif; ?>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>