<body>

    <!-- BARRA DE NAVEGACION -->
    <div style="height: 30px;"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="card shadow-lg p-3 mb-5 bg-white" id="datos">
            <form id="corregimientos" method="post" action="<?= base_url('formulario/mostrarCorregimientos') ?>">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="bi bi-search"></i></div>
                    </div>
                    <input type="text" class="form-control " id="inlineFormInputGroup" name="busqueda">
                    <select name="corregimiento" class="custom-select">
                        <option value="nombrecorregimiento" >Nombre del Corregimiento</option>
                        <option value="municipio">Municipio</option>
                        <option value="veredas">Veredas que lo componen</option>
                        <option value="pobladores">Número de pobladores aproximado</option>
                        <option value="ubicacionlatitud">Ubicación aproximada latitud</option>
                        <option value="area">Area</option>
                        <option value="longitud">Longitud</option>
                        <option value="nautoridadprincipal">Nombre autoridad principal</option>
                        <option value="nautoridadpolicial">Nombre autoridad de policía</option>
                        <option value="miembrosjal">miembros JAL</option>
                        <option value="jal">JAL </option>
                        <option value="codigodane">Código Dane</option>
                        <option value="numeroadministrativo">Número acto administrativo</option>
                    </select>
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
            </form>



                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre del Corregimiento</th>
                                <th scope="col">Municipio</th>
                                <th scope="col">Veredas que lo componen</th>
                                <th scope="col">Número de pobladores aproximado</th>
                                <th scope="col">Ubicación aproximada latitud</th>
                                <th scope="col">Area</th>
                                <th scope="col">Longitud</th>
                                <th scope="col">Nombre autoridad principal</th>
                                <th scope="col">Nombre autoridad de policía </th>
                                <th scope="col">Miembros JAL</th>
                                <th scope="col">JAL </th>
                                <th scope="col">Código Dane</th>
                                <th scope="col">Número acto administrativo</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php foreach ($data['corregimientos'] as $item) : ?>
                            <tr>
                                <td scope="row"><?= $item->id_corregimiento ?></td>
                                <td><?= $item->nombrecorregimiento ?></td>
                                <td><?= $item->municipio ?></td>
                                <td><?= $item->veredas ?></td>
                                <td><?= $item->pobladores ?></td>
                                <td><?= $item->ubicacionlatitud ?></td>
                                <td><?= $item->area ?></td>
                                <td><?= $item->longitud ?></td>
                                <td><?= $item->nautoridadprincipal ?></td>
                                <td><?= $item->nautoridadpolicial ?></td>
                                <td><?= $item->miembrosjal ?></td>
                                <td><?= $item->jal ?></td>
                                <td><?= $item->codigodane ?></td>
                                <td><?= $item->numeroadministrativo ?></td>
                                <td><a class="btn btn-outline-success" href="<?= base_url('formulario/editar/' . $item->id_corregimiento) ?>" role="button">Editar</a> </td>
                                <td><a class="btn btn-outline-danger" href="#" data-id="<?= $item->id_corregimiento ?>" id="delete" role="button">Eliminar</a></td>

                            </tr>
                        <?php endforeach; ?>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php
                        $prev = $data["current"] - 1;
                        $next = $data["current"] + 1;
                        if ($prev <= 0) {
                            $prev = 1;
                        }
                        if ($next > $data["last_pag"]) {
                            $next = $data["last_pag"];
                        }
                        ?>
                        <li class="page-item"><a class="page-link" href="<?php echo base_url('formulario/mostrarCorregimientos/') .  $prev; ?>">Anterior</a></li>
                        <?php for ($i = 1; $i <= $data["last_pag"]; $i++) { ?>
                            <li class="page-item"><a class="page-link" href="<?php echo base_url('formulario/mostrarCorregimientos/') . $i; ?>"><?php echo $i; ?></a></li>
                        <?php } ?>
                        <li class="page-item"><a class="page-link" href="<?php echo base_url('formulario/mostrarCorregimientos/') . $next; ?>">Siguiente</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</body>