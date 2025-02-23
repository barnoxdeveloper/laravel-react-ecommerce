Laravel Ecommerce Project with react

1. Install laravel breeze with react, typescript, ssr, and with PEST

-   composer require laravel/breeze --dev
-   php artisan breeze:install

2. Install DaisyUi

-   npm install daisyui

3. Uninstall Tailwindcss Forms

-   npm uninstall @tailwindcss/forms

4. Install spatie laravel permission

-   composer require spatie/laravel-permission
-   php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"

5. Install Filament

-   composer require filament/filament
-   php artisan filament:install --panels

6. Install Filament Spatie Media Library

-   composer require filament/spatie-laravel-media-library-plugin
-   php artisan migrate
-   php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="medialibrary-config"
