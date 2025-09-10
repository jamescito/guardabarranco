<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Area Protegida') }}
        </h2>
    </x-slot>



<form method="POST" action="{{ route('areaprotegida.store') }}">
    @csrf
    <input type="text" name="nombre" placeholder="Nombre del producto">
    <input type="text"  name="ubicacion" placeholder="ubicacion">
    <input type="text" name="descripcion" placeholder="descripcion">
    <button type="submit">Guardar</button>
</form>
















</x-app-layout>