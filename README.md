# E-Commerce Laravel CRUD


## APP de laravel - Instrucciones para primer uso

Para instalar los node_modules ejecutar en la terminal el comando:
```
npm install
```
Para instalar las carpetas de dependencias vendor
```
composer install
```
Para tener el documento de configuraciones .env para copiar el example usar el comando:
```
cp .env.example .env
```
Una vez creado el `.env` se debera ejecutar este comando para crear una key de proyecto
```
php artisan key:generate
```
### Configuracion BD
- Para configurar la base de datos necesitas primero crear una con el nombre que desees
- Una vez creada la base de datos necesitas configurar el archivo .env en estos campos
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombreDB
DB_USERNAME=root
DB_PASSWORD=
```
**Una vez creada la base de datos**
- Realizar el comando en terminal:
```
php artisan migrate
```
### Para iniciar el proyecto una vez configurado debera hacer el comando
```
php artisan serve
```
Y para cargar los estilos y paquetes de Vite
```
npm run dev
```
