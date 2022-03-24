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
 
 -----------------  Date: 16 March 2022 ---------------------------------- <br>
 #Step 13 - Crear la nueva migraciòn de la tabla productos con sus campos <br>
 $~ php artisan make:migration productos
 
 #Step 13 - Creamos el modelo junto con el controlados y los recursos (-mcr)
 $~ php artisan make:model Productos -mcr
 
 -----------------  Date: 20 March 2022 ---------------------------------- <br>
 #Step 14 - Se creo una carpeta llamada productos con archivos blade para las vistas (crear, editar e index) <br>
 $~ cd resources/views/ <br>
 $~ mkdir productos <br>
 $~ touch create.blade.php, edit.blade.php, index.blade.php <br>
 
 #Step 15 - Se creo un formulario html en la vista para recepcion de datos <br>
 
 #Step 16 - se agregaron las rutas para acceder a los metodos de la clase controlador (dentro del archivo /routes/web.php) <br>
 Route::resource('productos',ProductosController::class); <br>

#Step 17 - se verificaron las rutas desde la terminal - (con este comando se ven las rutas y los metodos a utilizar) <br>
$~ php artisan route:list

#Step 18 - Se utilizo el metodo "store" dentro del controlador de productos para recepcion de datos <br>

      $datosProductos = request()->except('_token');
              if($request->hasFile('imagen')){
                  $datosProductos['imagen']=$request->file('imagen')->store('uploads','public');
              }
              Productos::insert($datosProductos);
              return response()->json($datosProductos);
<br>
#Step 19 - Dentro del metodo "index" se pasaron los datos traidos desde el modelo Productos, utilizando las funciones predeterminadas de laravel 
para poder listarlas dentro de la vista index con una paginacion de 5. <br>

        $productos['productos']=Productos::paginate(5);
        return view('productos.index',$productos);
        
#Step 20 - Se agrego la función borrar dentro del controlador de productos
       
        Productos::destroy($id);
        return redirect('productos');
        
 #Step 21 - Se agrego la funcion de editar dentro del controlador de productos pasando por parametro el id para buscarlo
 
        $productos = Productos::findOrFail($id);
        return view('productos.edit', compact('productos'));
        
-----------------  Date: 23 March 2022 ---------------------------------- <br>

 #Step 22 - Se agrega el html para mostrar la imagen <br>
            
            <td>
                <img src="{{ asset('storage').'/'.$producto->imagen}}" alt="img_{{ $producto->nombre }}" width="100px">
            </td>
 
 #Step 23 - Ahora para que laravel pueda mostrar la imagen correctamente escribimos la siguiente instruccion<br>
  $~ php artisan storage:link
  
  #Step 24 - Para usar el formulario tanto en el edit como en el create en el value ponemos un condicional para ver si esta vacio o no.
      
      <input type="text" name="nombre" value="{{ isset($productos->nombre)?$productos->nombre:'' }}" id="nombre">

-----------------  Date: 24 March 2022 ---------------------------------- <br>
#Step 25 - Para borrar la imagen del servidor es necesario hacer un condicional en el metodo destroy:
   
    public function destroy($id)
        {
            //Busca el producto por el id
            $productos = Productos::findOrFail($id);
            //Condicional para eleiminar la imagen de la carpeta del servidor
            if(Storage::delete('public/'.$productos->imagen)){
                Productos::destroy($id);
            }
            //Retorna un redireccionamiento hacia listado productos
            return redirect('productos');
        }

#Step 26 - Agregar mensajes cuando se cree, se actualize o se borre un producto, primero dentro del index escribimos un condicional con estilo blade:

    @if(Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif

