<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-house-user"></i>
        <p>Inicio</p>
    </a>
</li>
<!-- 
<li class="nav-item">
    <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-tie"></i>
        <p>Usuarios</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('rols.index') }}" class="nav-link {{ Request::is('rols*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Roles</p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('photos.index') }}" class="nav-link {{ Request::is('photos*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-camera"></i>
        <p>Equipos</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('photoDetails.index') }}" class="nav-link {{ Request::is('photoDetails*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-info"></i>
        <p>Detalles de equipos</p>
    </a>
</li> -->

<!-- <li class="nav-item">
    <a href="{{ route('qrcodes.index') }}" class="nav-link {{ Request::is('qrcodes*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Qrcodes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('transactions.index') }}" class="nav-link {{ Request::is('transactions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Transactions</p>
    </a>
</li> -->

<li class="nav-item">
    <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-tie"></i>
        <p>Users</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Roles</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('devices.index') }}" class="nav-link {{ Request::is('devices*') ? 'active' : '' }}">
        <i class="fas fa-laptop"></i>
        <p>Devices</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('deviceDetails.index') }}" class="nav-link {{ Request::is('deviceDetails*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-info"></i>
        <p>Device Details</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('rols.index') }}" class="nav-link {{ Request::is('rols*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Rols</p>
    </a>
</li>
