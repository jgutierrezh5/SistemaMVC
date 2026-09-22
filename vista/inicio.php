<?php require 'vista/layout/header.php'; ?>

<div class="p-5 mb-4 bg-white rounded-3 shadow-sm">
    <div class="container-fluid py-4">
        <h1 class="display-6 fw-bold">Sistema de gestión</h1>
        <p class="col-md-8 fs-5 text-secondary">
            Aplicación web desarrollada aplicando el patrón Modelo-Vista-Controlador
            y componentes de Bootstrap.
        </p>
        <a href="index.php?modulo=marcas" class="btn btn-dark">Comenzar</a>
    </div>
</div>

<div class="row g-4">
    <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
            <div class="card-body">
                <h5 class="card-title">Marcas</h5>
                <p class="card-text text-secondary">Registro y consulta de marcas.</p>
                <a href="index.php?modulo=marcas" class="btn btn-outline-dark">Ver módulo</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
            <div class="card-body">
                <h5 class="card-title">Productos</h5>
                <p class="card-text text-secondary">Administración básica de productos.</p>
                <a href="index.php?modulo=productos" class="btn btn-outline-dark">Ver módulo</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
            <div class="card-body">
                <h5 class="card-title">Clientes</h5>
                <p class="card-text text-secondary">Registro y consulta de clientes.</p>
                <a href="index.php?modulo=clientes" class="btn btn-outline-dark">Ver módulo</a>
            </div>
        </div>
    </div>
</div>

<?php require 'vista/layout/footer.php'; ?>