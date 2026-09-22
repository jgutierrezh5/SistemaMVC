<?php require 'vista/layout/header.php'; ?>

<div class="mb-4">
    <h2 class="fw-bold">Productos</h2>
    <p class="text-secondary">Registro y visualización de productos.</p>
</div>

<div class="row g-4">
    <div class="col-lg-4">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Nuevo producto</h5>
                <form method="POST" action="index.php?modulo=productos&accion=guardar">
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Precio</label>
                        <input type="number" step="0.01" min="0" name="precio" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Stock</label>
                        <input type="number" min="0" name="stock" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Marca</label>
                        <select name="marca_id" class="form-select" required>
                            <option value="">Seleccione una marca</option>
                            <?php foreach ($marcas as $marca): ?>
                                <option value="<?= $marca['id'] ?>">
                                    <?= htmlspecialchars($marca['nombre']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button class="btn btn-dark w-100">Guardar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Listado de productos</h5>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Producto</th>
                                <th>Precio</th>
                                <th>Stock</th>
                                <th>Marca</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($productos as $producto): ?>
                            <tr>
                                <td><?= $producto['id'] ?></td>
                                <td><?= htmlspecialchars($producto['nombre']) ?></td>
                                <td>Q <?= number_format($producto['precio'], 2) ?></td>
                                <td><?= $producto['stock'] ?></td>
                                <td><?= htmlspecialchars($producto['marca_nombre']) ?></td>
                                <td>
                                    <a class="btn btn-sm btn-outline-danger"
                                       href="index.php?modulo=productos&accion=eliminar&id=<?= $producto['id'] ?>"
                                       onclick="return confirm('¿Desea eliminar este producto?')">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'vista/layout/footer.php'; ?>