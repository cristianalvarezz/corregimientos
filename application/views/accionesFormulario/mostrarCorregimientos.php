<body>
    <!-- BARRA DE NAVEGACION -->
    <div style="height: 30px;"></div>
    <div class="container">
        <div class="row">
            <div class="card shadow-bg p-12 mb-12 bg-b">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Buscar por</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nombre del Corregimiento</th>
                                <th scope="col">Municipio</th>
                                <th scope="col">Veredas que lo componen</th>
                                <th scope="col">Número de pobladores aproximado</th>
                                <th scope="col">Ubicación aproximada latitud</th>
                                <th scope="col">Area</th>
                                <th scope="col">Longitud</th>
                                <th scope="col">Nombre autoridad principal</th>
                                <th scope="col">Nombre autoridad de policía </th>
                                <th scope="col">miembros JAL</th>
                                <th scope="col">JAL </th>
                                <th scope="col">Código Dane</th>
                                <th scope="col">Número acto administrativo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php foreach ($data['corregimientos'] as $item) : ?>
                            <tr>
                                <th scope="row"><?= $item->id_corregimiento ?></th>
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

                            </tr>
                        <?php endforeach; ?>
                        </tr>
                        </tbody>
                    </table>

                </div>
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
</body>