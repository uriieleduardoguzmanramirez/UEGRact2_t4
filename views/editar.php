<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-warning text-dark">
                <h4>Editar Producto</h4>
            </div>
            <div class="card-body">
                <form action="index.php?action=editar" method="POST">
                    <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Nombre del Producto</label>
                            <input type="text" name="nombre_producto" class="form-control" value="<?php echo $producto['nombre_producto']; ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Categoría</label>
                            <input type="text" name="categoria" class="form-control" value="<?php echo $producto['categoria']; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Precio ($)</label>
                            <input type="number" step="0.01" name="precio" class="form-control" value="<?php echo $producto['precio']; ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Stock (Cantidad)</label>
                            <input type="number" name="stock" class="form-control" value="<?php echo $producto['stock']; ?>" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end gap-2">
                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-warning text-dark">Actualizar Producto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>