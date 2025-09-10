<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Area Protegida') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">



                     <a href="{{ route('areaprotegida.create') }}"class=" bg-green-700 px-3 py-1 text-sm text-white rounded-lg hover:bg-green-600">CrearÁrea Protegida</a>
                    <div class="flex justify-center bg-red-500d">
                        <div class="cw-full max-w-4xl">
                            <h1 text-xl font-bold text-white>Lista de Áreas Protegidas</h1>
                           
                           

                            <table class="table table-bordered mt-4 border-2 rounded-full bg-green-200">
                                <thead class="bg-green-500">
                                    <tr class="text-white">
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">ID</th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">Nombre</th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">Descripción</th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">Ubicación</th>
                                         <th class="px-6 py-3 text-left text-sm font-semibold text-white"></th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    @foreach ($areaProtegida as $area)
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 text-sm text-gray-600">{{ $area->id }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-600">{{ $area->nombre }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-600">{{ $area->descripcion }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-600">{{ $area->ubicacion }}</td>

                                            <td class="px-6 py-4 text-center bg-white space-nowrap text-sm font-medium plaholder">
                                                <button
                                                    class="px-3 py-1 text-sm text-black bg-blue-700 rounded-lg hover:bg-blue-600">Editar</button>
                                                <button
                                                    class="px-3 py-1 text-sm text-black bg-red-500 rounded-lg hover:bg-red-600">Eliminar</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
