# GiseNails

## ¿Qué hace el sistema?

GiseNails es una aplicación desarrollada en Laravel que permite la gestión integral de un centro de uñas. El sistema facilita la administración de citas, clientes, servicios, empleados y reportes, optimizando los procesos internos y mejorando la experiencia tanto para el personal como para los clientes.

## ¿Cómo instalarlo?

1. **Clonar el repositorio:**
   ```bash
   git clone https://github.com/tu-usuario/Laravel-GiseNails.git
   cd Laravel-GiseNails
   ```

2. **Instalar dependencias de PHP y Composer:**
   ```bash
   composer install
   ```

3. **Instalar dependencias de JavaScript:**
   ```bash
   npm install
   ```

4. **Copiar y configurar el archivo de entorno:**
   ```bash
   cp .env.example .env
   ```
   Edita el archivo `.env` con tus credenciales de base de datos y otras variables necesarias.

5. **Generar la clave de la aplicación:**
   ```bash
   php artisan key:generate
   ```

6. **Ejecutar migraciones y seeders:**
   ```bash
   php artisan migrate --seed
   ```

7. **Iniciar el servidor de desarrollo:**
   ```bash
   php artisan serve
   ```

8. **Compilar los assets:**
   ```bash
   npm run dev
   ```

## Estructura del proyecto

- `app/` - Lógica principal de la aplicación (modelos, controladores, etc.)
- `database/` - Migraciones, seeders y factories para la base de datos
- `resources/views/` - Vistas Blade (frontend)
- `routes/` - Definición de rutas web y API
- `public/` - Archivos públicos (imágenes, CSS, JS compilado)
- `config/` - Archivos de configuración
- `tests/` - Pruebas automatizadas

## Tecnologías utilizadas

- **Backend:** Laravel (PHP)
- **Frontend:** Blade, HTML, CSS, JavaScript
- **Base de datos:** MySQL
- **Gestión de dependencias:** Composer, NPM
- **Control de versiones:** Git

## Participantes del equipo

- Luis Eduardo
- Santiago Paccini
- Juan Arcila

## Experiencia de trabajo colaborativo

El desarrollo de GiseNails fue una experiencia enriquecedora de trabajo en equipo. Utilizamos GitHub para la gestión de versiones y la colaboración, permitiendo que cada integrante contribuyera en diferentes módulos del sistema. La comunicación constante y la división de tareas nos ayudaron a resolver desafíos técnicos y a mejorar nuestras habilidades tanto en Laravel como en metodologías ágiles. El feedback entre compañeros fue clave para lograr un producto robusto