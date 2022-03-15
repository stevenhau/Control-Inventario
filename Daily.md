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
 
 #Step 7 - Guardar en memoria local el proyecto creado<br>
 $~ git add .
 
 #Step 8 - Hacer un commit para indicar cando se inicio el proyecto<br>
 $~ git commit -am "init"
 
 #Step 9 - Subirlo al repositorio creado en github<br>
 $~ git push origin master
 
 #Step 9 - Crear una rama llamada Office y Home para trabajar en la oficina y en casa y separar lo realizado<br>
 $~ git branch Office <br>
 $~ git branch Home <br>
 
 #Step 10 - movernos a la rama Office<br>
 $~ git checkout Office
 
 #Step 11 - Corroborar si la rama es correcta<br>
 $~ git branch <br>
 " Deberia aparecer asì primero la master seguido con un asterisco la rama Office" <br>
 master<br>
 *Office
 
 #Step 12 - Recuperamos los archivos que tenemos en master<br>
 $~ git pull origin master
 
 -----------------  Date: 16 March 2022 ----------------------------------
 
 -----------------  Date: 17 March 2022 ----------------------------------
 
 -----------------  Date: 18 March 2022 ----------------------------------
 
 -----------------  Date: 19 March 2022 ----------------------------------
  
