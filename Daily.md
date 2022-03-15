-----------------  Date: 15 March 2022 ----------------------------------

#Step 1 - instalaciòn de laravel V8 mediante conposer: <br>
  $~ composer create-project laravel/laravel:^8.0 Control-Inventario
  
#Step 2 - Generar la Key para el archivo .env<br>
  $~ php artisan key:generate

#Step 3 - Limpiar el cache de la configuracion<br>
  $~ php artisan config:cache
 
 #Step 4 - Instalar las dependencias para la UI nativa de laravel<br>
 $~ composer require laravel/ui
 
 #Step 5 - Agregarle bootstrapp a las plantillas de register y login<br>
 $~ php artisan ui bootstrap --auth
 
 #Step 6 - Con las dependencias intalarlo y correrlo con npm<br>
 $~ npm install && npm run dev
 
 -----------------  Date: 16 March 2022 ----------------------------------
 
 -----------------  Date: 17 March 2022 ----------------------------------
 
 -----------------  Date: 18 March 2022 ----------------------------------
 
 -----------------  Date: 19 March 2022 ----------------------------------
  
