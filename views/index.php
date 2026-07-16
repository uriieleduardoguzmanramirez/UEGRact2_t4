<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Menú - Cafetería</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome para los íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light">
    <div class="container-fluid mt-4 px-4">
        
        <!-- Título Profesional -->
        <div class="text-center mb-4">
            <h2 class="text-uppercase fw-bold text-secondary">Panel de Administración - Cafetería</h2>
        </div>
        
        <div class="row">
            <!-- COLUMNA IZQUIERDA: Formulario de Registro -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="text-secondary text-center mb-4">Registro de Producto</h5>
                        
                        <form action="index.php?action=crear" method="POST">
                            <div class="mb-3">
                                <label class="form-label text-muted small">Nombre del producto</label>
                                <input type="text" name="nombre_producto" class="form-control form-control-sm" required>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label text-muted small">Categoría</label>
                                <select name="categoria" class="form-select form-select-sm" required>
                                    <option value="">Seleccione...</option>
                                    <option value="Bebidas Calientes">Bebidas Calientes</option>
                                    <option value="Bebidas Frías">Bebidas Frías</option>
                                    <option value="Postres">Postres</option>
                                    <option value="Snacks">Snacks</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label text-muted small">Precio ($)</label>
                                <input type="number" step="0.01" name="precio" class="form-control form-control-sm" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label text-muted small">Stock</label>
                                <input type="number" name="stock" class="form-control form-control-sm" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-sm">Registrar Producto</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- COLUMNA DERECHA: Tabla de Datos -->
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="text-white" style="background-color: #00bbf0;">
                                    <tr>
                                        <th class="py-3 px-3">ID</th>
                                        <th class="py-3">PRODUCTO</th>
                                        <th class="py-3">CATEGORÍA</th>
                                        <th class="py-3">PRECIO</th>
                                        <th class="py-3">STOCK</th>
                                        <!-- Agregamos la cabecera de la Fecha -->
                                        <th class="py-3">FECHA</th>
                                        <th class="py-3 text-center">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($row = $productos->fetch(PDO::FETCH_ASSOC)): ?>
                                    <tr>
                                        <td class="px-3"><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['nombre_producto']; ?></td>
                                        <td><?php echo $row['categoria']; ?></td>
                                        <td>$<?php echo number_format($row['precio'], 2); ?></td>
                                        <td><?php echo $row['stock']; ?></td>
                                        <!-- Mostramos la fecha formateada automáticamente -->
                                        <td><?php echo date('d/m/Y', strtotime($row['fecha_registro'])); ?></td>
                                        <td class="text-center">
                                            <a href="index.php?action=editar&id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm text-white" title="Editar">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="index.php?action=eliminar&id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este producto?');" title="Eliminar">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>