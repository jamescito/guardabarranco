<x-app-layout>
    <x-slot name="header">
        <h2 class="font-sans text-xl text-black leading-tight">
            {{ __('Area Protegida') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">



                    <a
                        href="{{ route('areaprotegida.create') }}"class=" font-sans bg-green-700 px-3 py-1 text-sm text-white rounded-lg hover:bg-green-600">Agregar</a>
                    <div class="flex justify-center ">
                        <div class="w-full max-w-4xl">


                            <div class=" overflow-x-auto">
                                <table class=" font-sans table-bordered mt-4 border-2 rounded-full text-black ">
                                <thead class="bg-green-700 font-sans rounded-lg">
                                    <tr class="text-white">
                                        <th class="px-6 py-3 text-left text-sm font-sans text-white">ID</th>
                                        <th class="px-6 py-3 text-left text-sm font-sans text-white">Nombre</th>
                                        <th class="px-6 py-3 text-left text-sm font-sans text-white">Descripción
                                        </th>
                                        <th class="px-6 py-3 text-left text-sm font-sans text-white">Ubicación</th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-white"></th>
                                    </tr>
                                </thead>
                                <tbody class=" font-sans divide-y divide-gray-200 rounded-lg">
                                    @foreach ($areaProtegida as $area)
                                        <tr class="odd:bg-white even:bg-green-50 text-gray-800">
                                            <td class="px-6 py-4 text-sm text-gray-600">{{ $area->id }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-600">{{ $area->nombre }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-600">{{ $area->descripcion }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-600">{{ $area->ubicacion }}</td>

                                            <td class="px-6 py-4 text-center space-nowrap text-sm font-sans">
                                                <div class="flex flex-col space-y-2 w-20">
                                                    <a href= "{{ route('areaprotegida.edit', $area->id) }}"
                                                        class="bg-blue-600 hover:bg-blue-700 text-white rounded-lg px-3 py-1">
                                                        Editar </a>
                                                    <button onclick="confirmDelete({{ $area->id }})" type="button"
                                                        class="bg-red-600 hover:bg-red-700 text-white rounded-lg px-3 py-1">Eliminar</button>
                                                </div>

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
    </div>







</x-app-layout>


<script>
    function confirmDelete(id) {
        alertify.defaults.glossary.title = "Eliminar área protegida";
        alertify.confirm("¿Está seguro que desea eliminar?",
            function() {
                let form = document.createElement('form');
                form.method = 'POST';
                form.action = '/areaprotegida/' + id;

                // CSRF token
                let csrf = document.createElement('input');
                csrf.type = 'hidden';
                csrf.name = '_token';
                csrf.value = '{{ csrf_token() }}'; // Esto sí se procesa por Blade
                form.appendChild(csrf);

                // Method spoofing for DELETE
                let method = document.createElement('input');
                method.type = 'hidden';
                method.name = '_method';
                method.value = 'DELETE';
                form.appendChild(method);

                document.body.appendChild(form);
                form.submit();

                alertify.success('Eliminada correctamente');
            },
            function() {
                alertify.error('Cancelada');
            }
        );
    }
</script>


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
