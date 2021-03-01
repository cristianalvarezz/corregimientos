
    <!-- BARRA DE NAVEGACION -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-lg p-3 mb-5 bg-white ">
                    <div class="card-header">Corregimientos</div>
                    <div class="card-body">
                        <form id="corregimientos" method="post" action="<?= base_url('formulario/store') ?>" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="nombrecorregimiento">Nombre del corregimiento*</label>
                                    <input name="nombrecorregimiento" type="text" class="form-control" id="nombrecorregimiento" maxlength="150" value="<?= set_value('nombrecorregimiento') ?>" data-toggle="tooltip" title="Por favor digita nombres que solo contengan caracteres alfabéticos y espacios.">
                                    <?= form_error('nombrecorregimiento', '<p class="text-danger">', '</p>') ?>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="municipio">Municipio al que pertenece*</label>
                                    <input name="municipio" type="text" class="form-control" id="municipio" maxlength="150" value="<?= set_value('municipio') ?>"  data-toggle="tooltip" title="Por favor digita nombres que solo contengan caracteres alfabéticos y espacios.">
                                    <?= form_error('municipio', '<p class="text-danger">', '</p>') ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="veredas">Veredas que lo componen*</label>
                                    <textarea name="veredas" type="text" class="form-control" id="veredas" data-toggle="tooltip" title="Por favor separa los nombres de las veredas con comas."  style="resize: none;"><?= set_value('veredas') ?></textarea>
                                    <?= form_error('veredas', '<p class="text-danger">', '</p>') ?>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="pobladores">Número de pobladores aproximado*</label>
                                    <input name="pobladores" type="number" class="form-control" id="pobladores" value="<?= set_value('pobladores') ?>" maxlength="52" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" >
                                    <?= form_error('pobladores', '<p class="text-danger">', '</p>') ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="ubicacionlatitud">Ubicación aproximada latitud*</label>
                                    <input name="ubicacionlatitud" type="text" class="form-control" id="ubicacionlatitud" value="<?= set_value('ubicacionlatitud') ?>" maxlength="52">
                                    <?= form_error('ubicacionlatitud', '<p class="text-danger">', '</p>') ?>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="area">Area en km*</label>
                                    <input name="area" type="number" class="form-control" id="area" min="1" pattern="^[0-9]+" value="<?= set_value('area') ?>"  maxlength="52">
                                    <?= form_error('area', '<p class="text-danger">', '</p>') ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="longitud">Longitud (tomada con el celular)*</label>
                                    <input name="longitud" type="file" class="form-control" value="<?= set_value('longitud') ?>" required accept="image/png,image/jpeg" >
                                 
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="longitudnombre">Nombre Foto Longitud*</label>
                                    <input name="longitudnombre" type="text" class="form-control" id="longitudnombre" value="<?= set_value('longitudnombre') ?>"  maxlength="52" data-toggle="tooltip" title="Por favor digita nombres sin caracteres latinos o espacios.">
                                    <?= form_error('longitudnombre', '<p class="text-danger">', '</p>') ?>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="nautoridadprincipal">Nombre autoridad principal*</label>
                                    <input name="nautoridadprincipal" type="text" class="form-control" id="nautoridadprincipal" value="<?= set_value('nautoridadprincipal') ?>"  maxlength="150" data-toggle="tooltip" title="Por favor digita nombres que solo contengan caracteres alfabéticos y espacios.">
                                    <?= form_error('nautoridadprincipal', '<p class="text-danger">', '</p>') ?>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="nautoridadpolicial">Nombre autoridad de policia*</label>
                                    <input name="nautoridadpolicial" type="text" class="form-control" id="nautoridadpolicial" value="<?= set_value('nautoridadpolicial') ?>" maxlength="150"  data-toggle="tooltip" title="Por favor digita nombres que solo contengan caracteres alfabéticos y espacios.">
                                    <?= form_error('nautoridadpolicial', '<p class="text-danger">', '</p>') ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="miembrosjal">Nombre de miembros de la JAl*</label>
                                    <textarea name="miembrosjal" type="text" class="form-control" id="miembrosjal" data-toggle="tooltip" title="Por favor separa los nombres de los miembros con comas." style="resize: none;" value="<?= set_value('miembrosjal') ?>" maxlength="250"><?= set_value('miembrosjal') ?></textarea>
                                    <?= form_error('miembrosjal', '<p class="text-danger">', '</p>') ?>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="jal"> JAL *</label>
                                    <input name="jal" type="text" class="form-control" id="jal" value="<?= set_value('jal') ?>"  data-toggle="tooltip" title="Por favor digita nombres que solo contengan caracteres alfabéticos y espacios." maxlength="250">
                                    <?= form_error('jal', '<p class="text-danger">', '</p>') ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="codigodane">Código Dane*</label>
                                    <input name="codigodane" type="number" class="form-control" id="codigodane" value="<?= set_value('codigodane') ?>" maxlength="52" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                    <?= form_error('codigodane', '<p class="text-danger">', '</p>') ?>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="numeroadministrativo">Número acto administrativo que lo creó*</label>
                                    <input name="numeroadministrativo" type="number" class="form-control" id="numeroadministrativo" value="<?= set_value('numeroadministrativo') ?>" maxlength="52" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                    <?= form_error('numeroadministrativo', '<p class="text-danger">', '</p>') ?>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Enviar</button>
                            <div style="height: 30px;"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>