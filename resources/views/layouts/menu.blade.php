<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-box"></i>
<p>
Productos
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview" style="display: none;">
<li class="nav-item">
<a href="{{ url('productos') }}" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Lista de productos</p>
</a>
</li>

<li class="nav-item">
<a href="{{ url('productos/create') }}" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Agregar producto</p>
</a>
</li>



