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
                                <tbody class="divide-y divide-gray-200 rounded-lg">
                                    @foreach ($areaProtegida as $area)
                                        <tr class="hover:bg-gray-50 rounded-lg">
                                            <td class="px-6 py-4 text-sm text-gray-600">{{ $area->id }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-600">{{ $area->nombre }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-600">{{ $area->descripcion }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-600">{{ $area->ubicacion }}</td>

                                            <td class="px-6 py-4 text-center bg-green-200 space-nowrap text-sm font-medium plaholder">
                                                <a href= "{{ route('areaprotegida.edit', $area->id) }}"
                                                    class="px-3 py-1 text-sm text-black bg-blue-700 rounded-lg hover:bg-blue-600">Editar</a>
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







 <div class="bg-green-800 border-t border-smoke px-8 py-4  text-white ">
  <div class="flex justify-center text-grey">
            Todos los derechos reservado
  </div>
   <div class="flex justify-center text-grey">
           ING. James Alberth Reyes Calderon
  </div>
  <div class="flex justify-center text-grey">
            jr76407900@gmail.com
  </div>
  <div class="flex justify-center text-grey">
         <a href="https://www.linkedin.com/in/james-reyes-calderon-46534a225/" class="">Linkedin</a>
  </div>

</div>




















</x-app-layout>
