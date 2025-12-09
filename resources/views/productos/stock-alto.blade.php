<h1>Productos con Stock > 5</h1>

@foreach($productos as $p)
    <p>{{ $p->nombre }} - Stock: {{ $p->stock }}</p>
@endforeach

<a href="/productos">Volver</a>
