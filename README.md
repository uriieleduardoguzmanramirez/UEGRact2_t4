# Panel de Administración - Cafetería (CRUD)

**Autor:** Uriel Eduardo Guzmán Ramírez  
**Institución:** Instituto Tecnológico de Oaxaca  
**Actividad:** Actividad 2 - Tema 4  

## Descripción del Proyecto
Este proyecto es un sistema web para la gestión del inventario de una cafetería. Permite a los administradores llevar un control exacto de los productos disponibles en el menú a través de un panel de control intuitivo tipo "Single Page Application" (SPA) visual. 

El sistema implementa un CRUD completo (Create, Read, Update, Delete) conectado a una base de datos relacional.

## Tecnologías Utilizadas
* **Backend:** PHP 8.3
* **Base de Datos:** MySQL
* **Frontend:** HTML5, CSS3, Bootstrap 5
* **Arquitectura:** Patrón MVC (Modelo-Vista-Controlador).
* **Despliegue:** Servidor VPS en Hostinger 

## Conceptos y Explicación 
Para la construcción de este sistema se aplicaron los siguientes conceptos de ingeniería de software:

1. **Patrón MVC:** Se separó la lógica en tres capas:
   * **Modelo (`ProductoModel.php`):** Se encarga exclusivamente de las consultas SQL (INSERT, SELECT, UPDATE, DELETE) mediante sentencias preparadas para evitar inyecciones SQL.
   * **Vista (`index.php`):** La interfaz gráfica con la que interactúa el usuario, renderizada con Bootstrap.
   * **Controlador (`ProductoController.php`):** El "cerebro" que procesa las peticiones del usuario y coordina la comunicación entre la vista y el modelo.
2. **Conexión Segura (PDO):** Se utilizó *PHP Data Objects* (PDO) en el archivo `conexion.php` para establecer la comunicación con MySQL, garantizando seguridad y un manejo de errores mediante bloques `try-catch`.
3. **Despliegue en Producción:** El proyecto fue versionado en GitHub y clonado directamente en el directorio público (`/var/www/html/`) de un servidor VPS, configurando los permisos y credenciales correspondientes en el entorno de producción.
2. **Aplicación de Bootstrap 5:** 
   Para cumplir con el diseño profesional, se integró el framework Bootstrap. Se utilizó su sistema de cuadrícula (Grid System con `col-md-4` y `col-md-8`) para fusionar el formulario y la tabla en una sola pantalla tipo *Dashboard*. Además, se usaron clases como `table-hover`, `btn`, y `card` para estilizar los elementos visuales y asegurar que la interfaz sea 100% responsiva (adaptable a celulares y PCs).