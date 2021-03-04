<!-- BARRA DE NAVEGACION -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5 bg-white ">
                <div class="card-header">Corregimientos</div>
                <div class="card-body">
                    <form id="corregimientos" method="post" action="<?= base_url('formulario/store') ?>" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-md-6 mb-6 sm-6">
                                <label for="nombrecorregimiento">Nombre del corregimiento*</label>
                                <input name="nombrecorregimiento" type="text" class="form-control" id="nombrecorregimiento" maxlength="150" value="<?= set_value('nombrecorregimiento') ?>"  placeholder=" Digita nombres que solo contengan caracteres alfabéticos y espacios.">
                                <?= form_error('nombrecorregimiento', '<p class="text-danger">', '</p>') ?>
                            </div>
                            <div class="col-md-6 mb-6">
                                <label for="municipio">Municipio al que pertenece*</label>
                                <select class="form-control" name="municipio" required>
                                    <option value="">Seleccione Municipio al que pertence</option>
                                    <?php foreach ($data as $row) { ?>
                                        <option value="<?= $row; ?>"><?= $row; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-row input-sm">
                            <div class="col-md-6 mb-6">
                                <label for="veredas">Veredas que lo componen*</label>
                                <textarea name="veredas" type="text" class="form-control" id="veredas"  placeholder=" Separa los nombres de las veredas con comas." style="resize: none;"><?= set_value('veredas') ?></textarea>
                                <?= form_error('veredas', '<p class="text-danger">', '</p>') ?>
                            </div>
                            <div class="col-md-6 mb-6">
                                <label for="pobladores">Número de pobladores aproximado*</label>
                                <input name="pobladores" type="number" class="form-control" id="pobladores" value="<?= set_value('pobladores') ?>" maxlength="52" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                <?= form_error('pobladores', '<p class="text-danger">', '</p>') ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-6">
                                <label for="ubicacionlatitud">Ubicación aproximada latitud*</label>
                                <input name="ubicacionlatitud" type="text" class="form-control" id="ubicacionlatitud" value="<?= set_value('ubicacionlatitud') ?>" maxlength="52">
                                <?= form_error('ubicacionlatitud', '<p class="text-danger">', '</p>') ?>
                            </div>
                            <div class="col-md-6 mb-6">
                                <label for="area">Area en km*</label>
                                <input name="area" type="text" class="form-control" id="area"  placeholder=" Separa los decimales con punto."  value="<?= set_value('area') ?>" maxlength="30">
                                <?= form_error('area', '<p class="text-danger">', '</p>') ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-6">
                                <label for="longitud">Longitud (tomada con el celular)*</label>
                                <input name="longitud" type="file" class="form-control" value="<?= set_value('longitud') ?>" required accept="image/png,image/jpeg">
                                        <p class="text-muted">Digita nombre de foto sin espacios.</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-6">
                                <label for="nautoridadprincipal">Nombre autoridad principal*</label>
                                <input name="nautoridadprincipal" type="text" class="form-control input-sm" id="nautoridadprincipal" value="<?= set_value('nautoridadprincipal') ?>" maxlength="150"  placeholder=" Digita nombres que solo contengan caracteres alfabéticos y espacios.">
                                <?= form_error('nautoridadprincipal', '<p class="text-danger">', '</p>') ?>
                            </div>
                            <div class="col-md-6 mb-6">
                                <label for="nautoridadpolicial">Nombre autoridad de policia*</label>
                                <input name="nautoridadpolicial" type="text" class="form-control input-sm" id="nautoridadpolicial" value="<?= set_value('nautoridadpolicial') ?>" maxlength="150"  placeholder=" Digita nombres que solo contengan caracteres alfabéticos y espacios.">
                                <?= form_error('nautoridadpolicial', '<p class="text-danger">', '</p>') ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-6">
                                <label for="miembrosjal">Nombre de miembros de la JAl*</label>
                                <textarea name="miembrosjal" type="text" class="form-control" id="miembrosjal"  placeholder=" Separa los nombres de los miembros con comas." style="resize: none;" value="<?= set_value('miembrosjal') ?>" maxlength="250"><?= set_value('miembrosjal') ?></textarea>
                                <?= form_error('miembrosjal', '<p class="text-danger">', '</p>') ?>
                            </div>
                            <div class="col-md-6 mb-6">
                                <label for="jal"> JAL *</label>
                                <input name="jal" type="text" class="form-control" id="jal" value="<?= set_value('jal') ?>"  placeholder=" Digita nombres que solo contengan caracteres alfabéticos y espacios." maxlength="250">
                                <?= form_error('jal', '<p class="text-danger">', '</p>') ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-6">
                                <label for="codigodane">Código Dane*</label>
                                <input name="codigodane" type="number" class="form-control" id="codigodane" value="<?= set_value('codigodane') ?>" maxlength="52" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                <?= form_error('codigodane', '<p class="text-danger">', '</p>') ?>
                            </div>
                            <div class="col-md-6 mb-6">
                                <label for="numeroadministrativo">Número acto administrativo que lo creó*</label>
                                <input name="numeroadministrativo" type="number" class="form-control" id="numeroadministrativo" value="<?= set_value('numeroadministrativo') ?>" maxlength="52" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                <?= form_error('numeroadministrativo', '<p class="text-danger">', '</p>') ?>
                            </div>
                        </div>
                        <div style="height: 5px;"></div>
                        <button class="btn btn-primary" type="submit">Enviar</button>
                        <div style="height: 30px;"></div>
                        <p class="text-dark">* Campo obligatorio</p>
                    </form>
                </div>
            </div>
           
        </div>
      
    </div>
</div>
</body>