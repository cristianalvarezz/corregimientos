<body>
    <!-- BARRA DE NAVEGACION -->
    <div style="height: 30px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-lg p-3 mb-5 bg-white ">
                    <div class="card-header">Corregimientos</div>
                    <div class="card-body">
                        <form id="corregimientos" method="post" action="<?= base_url('formulario/actualizar') ?>" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="nombrecorregimiento">Nombre del corregimiento</label>
                                    <input name="nombrecorregimiento" type="text" class="form-control" id="nombrecorregimiento"  maxlength="150"  placeholder=" Digita nombres que solo contengan caracteres alfabéticos y espacios." value="<?= set_value('nombrecorregimiento', isset($corregimientos["corregimientos"]['nombrecorregimiento']) ? $corregimientos["corregimientos"]['nombrecorregimiento']  : '') ?>">
                                    <input type="hidden" value="<?= set_value('id_corregimiento', isset($corregimientos["corregimientos"]['id_corregimiento']) ? $corregimientos["corregimientos"]['id_corregimiento'] : '') ?>" name="id_corregimiento">
                                    <?= form_error('nombrecorregimiento', '<p class="text-danger">', '</p>') ?>
                                </div>
                                <div class="col-md-6 mb-3">
                                <label for="municipio">Municipio al que pertenece</label>
                                <select class="form-control" name="municipio" >
                                    <option value="<?= set_value('municipio', isset($corregimientos['corregimientos']['municipio']) ? $corregimientos['corregimientos']['municipio']  : '') ?>"><?= set_value('municipio', isset($corregimientos["corregimientos"]['municipio']) ? $corregimientos["corregimientos"]['municipio'] : '') ?></option>
                                    <?php foreach ($municipios['municipios'] as $row) { ?>
                                        <option value="<?= $row; ?>"><?= $row; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="veredas">Veredas que lo componen</label>
                                    <textarea name="veredas" type="text" class="form-control" id="veredas" style="resize: none;"  placeholder=" Separa los nombres de las veredas con comas." style="resize: none;"><?= set_value('veredas', isset($corregimientos['corregimientos']['veredas']) ? $corregimientos['corregimientos']['veredas']  : '') ?></textarea>
                                    <?= form_error('veredas', '<p class="text-danger">', '</p>') ?>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="pobladores">Número de pobladores aproximado</label>
                                    <input name="pobladores" type="number" class="form-control" id="pobladores" min="1" pattern="^[0-9]+" value="<?= set_value('pobladores', isset($corregimientos['corregimientos']['pobladores']) ? $corregimientos['corregimientos']['pobladores']  : '') ?>" maxlength="52" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                    <?= form_error('pobladores', '<p class="text-danger">', '</p>') ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="ubicacionlatitud">Ubicación aproximada latitud</label>
                                    <input name="ubicacionlatitud" type="text" class="form-control" id="ubicacionlatitud" value="<?= set_value('ubicacionlatitud', isset($corregimientos['corregimientos']['ubicacionlatitud']) ? $corregimientos['corregimientos']['ubicacionlatitud']  : '') ?>" maxlength="52">
                                    <?= form_error('ubicacionlatitud', '<p class="text-danger">', '</p>') ?>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="area">Area en km</label>
                                    <input name="area" type="text" class="form-control"   placeholder=" Separa los decimales con punto"  value="<?= set_value('area', isset($corregimientos['corregimientos']['area']) ? $corregimientos['corregimientos']['area']  : '') ?>" maxlength="30">
                                    <?= form_error('area', '<p class="text-danger">', '</p>') ?>
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="longitud">Longitud (tomada con el celular)</label>
                                <input name="longitud" type="file" class="form-control"  accept="image/png,image/jpeg">
                                <p class="text-muted">Digita nombre de foto sin espacios.</p>
                            </div>
                        </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="nautoridadprincipal">Nombre autoridad principal</label>
                                    <input name="nautoridadprincipal" type="text" class="form-control" id="nautoridadprincipal" value="<?= set_value('nautoridadprincipal', isset($corregimientos['corregimientos']['nautoridadprincipal']) ? $corregimientos['corregimientos']['nautoridadprincipal']  : '') ?>" maxlength="150"  placeholder=" Digita nombres que solo contengan caracteres alfabéticos y espacios.">
                                    <?= form_error('nautoridadprincipal', '<p class="text-danger">', '</p>') ?>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="nautoridadpolicial">Nombre autoridad de policia</label>
                                    <input name="nautoridadpolicial" type="text" class="form-control" id="nautoridadpolicial" value="<?= set_value('nautoridadpolicial', isset($corregimientos['corregimientos']['nautoridadpolicial']) ? $corregimientos['corregimientos']['nautoridadpolicial']  : '') ?>" maxlength="150"  placeholder=" Digita nombres que solo contengan caracteres alfabéticos y espacios.">
                                    <?= form_error('nautoridadpolicial', '<p class="text-danger">', '</p>') ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="miembrosjal">Nombre de miembros de la JAl</label>
                                    <textarea name="miembrosjal" type="text" class="form-control" id="miembrosjal" placeholder=" Separa los nombres de los miembros con comas." style="resize: none;"><?= set_value('miembrosjal', isset($corregimientos['corregimientos']['miembrosjal']) ? $corregimientos['corregimientos']['miembrosjal']  : '') ?></textarea>
                                    <?= form_error('miembrosjal', '<p class="text-danger">', '</p>') ?>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="jal"> JAL </label>
                                    <input name="jal" type="text" class="form-control" id="jal" value="<?= set_value('jal', isset($corregimientos['corregimientos']['jal']) ? $corregimientos['corregimientos']['jal']  : '') ?>"  placeholder=" Digita nombres que solo contengan caracteres alfabéticos y espacios." maxlength="250">
                                    <?= form_error('jal', '<p class="text-danger">', '</p>') ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="codigodane">Código Dane</label>
                                    <input name="codigodane" type="number" class="form-control" id="codigodane" value="<?= set_value('codigodane', isset($corregimientos['corregimientos']['codigodane']) ? $corregimientos['corregimientos']['codigodane']  : '') ?>" maxlength="52" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                    <?= form_error('codigodane', '<p class="text-danger">', '</p>') ?>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="numeroadministrativo">Número acto administrativo que lo creó</label>
                                    <input name="numeroadministrativo" type="number" class="form-control" id="numeroadministrativo" value="<?= set_value('numeroadministrativo', isset($corregimientos['corregimientos']['numeroadministrativo']) ? $corregimientos['corregimientos']['numeroadministrativo']  : '') ?>" maxlength="52" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
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