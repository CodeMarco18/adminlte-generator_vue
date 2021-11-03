<li class="nav-item">
<a href="{{ route('vuecliente.index') }}"
class="nav-link {{ Request::is('vuecliente*') ? 'active' : '' }}">
<p>Vue Cliente</p>
</a>


<li class="nav-item">
<a href="{{ route('personacliente.index') }}"
class="nav-link {{ Request::is('personacliente*') ? 'active' : '' }}">
<p>Vue Persona</p>
</a>

<li class="nav-item">
<a href="{{ route('consulta.index') }}"
class="nav-link {{ Request::is('consulta*') ? 'active' : '' }}">
<p>Consulta Cliente</p>
</a>








