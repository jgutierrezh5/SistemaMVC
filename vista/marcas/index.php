<?php require 'vista/layout/header.php'; ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold">Marcas</h2>
        <p class="text-secondary mb-0">Registro y visualización de marcas.</p>
    </div>
</div>

<div class="row g-4">
    <div class="col-lg-4">
        <div class="card shadow-sm border-0">
            <div class="card-body">
<?php if (isset($_GET['mensaje'])): ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?= htmlspecialchars($_GET['mensaje']) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>
                <h5 class="card-title mb-3">Nueva marca</h5>
                <form method="POST" action="index.php?modulo=marcas&accion=guardar">
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">País</label>
                        <input type="text" name="pais" class="form-control" required>
                    </div>
                    <button class="btn btn-dark w-100">Guardar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Listado de marcas</h5>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>País</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($marcas as $marca): ?>
                            <tr>
                                <td><?= $marca['id'] ?></td>
                                <td><?= htmlspecialchars($marca['nombre']) ?></td>
                                <td><?= htmlspecialchars($marca['pais']) ?></td>
                                <td>
                                    <a class="btn btn-sm btn-outline-danger"
                                       href="index.php?modulo=marcas&accion=eliminar&id=<?= $marca['id'] ?>"
                                       onclick="return confirm('¿Desea eliminar esta marca?')">Eliminar</a>
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
