<h2>formulario para crear productos</h2>
<form action="{{ url('/productos') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('productos.form')
</form>