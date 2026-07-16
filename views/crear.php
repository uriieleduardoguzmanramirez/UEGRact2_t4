<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4>Agregar Nuevo Producto al Menú</h4>
            </div>
            <div class="card-body">
                <form action="index.php?action=crear" method="POST">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Nombre del Producto</label>
                            <input type="text" name="nombre_producto" class="form-control" required placeholder="Ej. Frappé de Moka">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Categoría</label>
                            <select name="categoria" class="form-select" required>
                                <option value="">Selecciona una opción...</option>
                                <option value="Bebidas Calientes">Bebidas Calientes</option>
                                <option value="Bebidas Frías">Bebidas Frías</option>
                                <option value="Postres">Postres</option>
                                <option value="Snacks">Snacks</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Precio ($)</label>
                            <!-- El step="0.01" permite usar decimales -->
                            <input type="number" step="0.01" name="precio" class="form-control" required placeholder="Ej. 65.50">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Stock (Cantidad en inventario)</label>
                            <input type="number" name="stock" class="form-control" required placeholder="Ej. 20">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end gap-2">
                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-success">Guardar Producto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>