<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Clasificador por Edad - Laravel 🧠👶🧓

Este es un sistema web desarrollado con Laravel y MySQL que permite clasificar a los usuarios según su edad antes de registrarse o autenticarse. Redirige automáticamente a distintas secciones del sitio según el grupo etario, mediante un middleware personalizado y seguro.

---

## 🚀 Requisitos Previos

- PHP >= 8.1
- Composer
- MySQL
- Node.js y npm

---

## 🛠️ Instalación Paso a Paso

### 1. Clonar el repositorio o descomprimir el proyecto
```bash
cd /ruta/del/proyecto
```

### 2. Instalar dependencias PHP y JS
```bash
composer install
npm install
```

### 3. Crear archivo `.env`
```bash
cp .env.example .env
```

Configura en `.env` tu conexión a MySQL:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=clasificador
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

### 4. Generar clave de aplicación
```bash
php artisan key:generate
```

### 5. Migrar la base de datos
```bash
php artisan migrate
```

Si da error con SQLite, asegúrate de que esté configurado correctamente el `.env` con MySQL como se indica arriba.

### 6. Ejecutar servidores
```bash
php artisan serve
npm run dev
```

Accede en tu navegador a: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 🧩 Estructura Clave

- `EdadMiddleware.php`: valida, guarda y redirige según edad
- `AgeRouterService.php`: centraliza las rutas por grupo etario
- Controladores: uno por grupo de edad (`BebesController`, `AdultosController`, etc.)
- Vistas personalizadas para cada grupo: `resources/views/grupos/*.blade.php`

---

## 📝 Notas

- Si ves errores de `{{ $mensaje }}`, asegúrate de que el archivo Blade no tenga slashes mal colocados ni conflictos con sintaxis PHP.
- Puedes acceder a `/admin/edades` si implementas la vista para visualizar los registros.
- Middleware seguro, modular y extensible con principios SOLID.

---

Desarrollado por el equipo de Software Seguro de la ESPE 💻🔒
