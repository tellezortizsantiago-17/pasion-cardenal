# Pasión Cardenal 🦁🇮🇩

**Descripción:**  
Aplicación web informativa diseñada para los hinchas de Independiente Santa Fe, centralizando la historia del club y el calendario de próximos encuentros.

**Requisitos básicos:**  
- PHP 8.1 o superior.
- Composer.
- Servidor MySQL (XAMPP).

**Instalación y ejecución:**  
1. Clonar el repositorio.
2. Ejecutar `composer install`.
3. Copiar el archivo `.env.example` a `.env` y configurar la base de datos `pasion_cardenal`.
4. Generar la clave con `php artisan key:generate`.
5. Ejecutar la migración con `php artisan migrate`.
6. Iniciar el servidor con `php artisan serve`.