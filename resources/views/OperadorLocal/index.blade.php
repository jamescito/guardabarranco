<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('OPERADORES LOCALES') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">



                     <a href="{{ route('operadorlocal.create') }}"class=" bg-green-700 px-3 py-1 text-sm text-white rounded-lg hover:bg-green-600">Crear Operador</a>
                    <div class="flex justify-center bg-red-500d">
                        <div class="cw-full max-w-4xl">
                            <h1 text-xl font-bold text-white>Lista de Reserva Natural</h1>
                           
                           

                            <table class="table table-bordered mt-4 border-2 rounded-full bg-green-200">
                                <thead class="bg-green-500">
                                    <tr class="text-white">
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">ID</th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">CEDULA</th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">NOMBRE</th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">Apellido</th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">Telefono</th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">Direccion </th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">Edad</th>
                                         <th class="px-6 py-3 text-left text-sm font-semibold text-white"></th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 rounded-lg">
                                    @foreach ($operadorLocal as $operador)
                                        <tr class="hover:bg-gray-50 rounded-lg">
                                            <td class="px-6 py-4 text-sm text-gray-600">{{ $operador->id }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-600">{{ $operador->cedula }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-600">{{ $operador->nombre }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-600">{{ $operador->apellido }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-600">{{ $operador->telefono }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-600">{{ $operador->direccion }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-600">{{ $operador->edad }}</td>

                                            <td class="px-6 py-4 text-center bg-green-200 space-nowrap text-sm font-medium plaholder">
                                                <a href= "{{ route('operadorlocal.edit', $operador->id) }}"
                                                    class="px-3 py-1 text-sm text-black bg-blue-700 rounded-lg hover:bg-blue-600">Editar</a>
                                                <button onclick="confirmDelete({{ $operador->id }})" type="button"  
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


<script>
   function confirmDelete(id) {
    alertify.defaults.glossary.title = "Eliminar Operador Local";
    alertify.confirm("¿Está seguro que desea eliminar?",
        function () {
            let form = document.createElement('form');
            form.method = 'POST';
            form.action = '/operadorlocal/' + id;

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
        function () {
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
