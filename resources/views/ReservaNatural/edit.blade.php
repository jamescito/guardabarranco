<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actualizar datos Reserva Natural') }}
        </h2>
    </x-slot>


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-12 bg-green-200 p-6 rounded-lg">
        <div class="overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 bg-white-200 rpounded-lg">

                <form class="max-w-sm mx-auto bg-green-300 focus:border-collapse " method="POST" action="{{ route('reservanatural.update', $reservaNatural->id) }}">
                    @csrf
                    @method('PUT')

                    <div class=" mb-5">
                        <input type="text" 
                            type="text" name="id"   value="{{ old('id', $reservaNatural->id )}}"
                            class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    
                    <div class=" mb-5">
                        <input type="text" 
                            type="text" name="nombre" placeholder="Agregar area protegida"  value="{{ old('nombre', $reservaNatural->nombre )}}"
                            class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class=" mb-5">
                        <input type="text" name="estado" placeholder=""  value="{{ old('estado', $reservaNatural->estado )}}"
                            class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class=" mb-5">
                        <input type="text" name="descripcion" placeholder="descripcion" value="{{ old('descripcion', $reservaNatural->descripcion )}}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    </div>

                       <div class=" mb-5">
                        <input type="text" name="area_protegida_id" placeholder="descripcion" value="{{ old('area_protegida_id', $reservaNatural->area_protegida_id )}}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    </div>

                       <div class=" mb-5">
                    <button type="submit" 
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar</button>
                    <a href="{{ route('reservanatural.index') }}"
                       class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800"
                        type="submit">Cancelar</a>

                            </div>
                </form>



            </div>
        </div>
    </div>














</x-app-layout>

 <div class="bg-green-800 border-t border-smoke px-8 py-4 bg-gray text-white ">
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