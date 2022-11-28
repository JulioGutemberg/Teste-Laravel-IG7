<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="container flex flex-col items-end" >
                        <a href="{{route('exibir_escolas')}}">
                            <button type="button" class="focus:outline-none text-white bg-cyan-600 hover:bg-cyan-400 focus:ring-4 focus:bg-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-cyan-600 dark:hover:bg-cyan-800 dark:focus:bg-cyan-800">
                            Voltar</button>
                        </a>
                    </div>

                    <form action="{{ route('excluir_escola', ['id' => $escolas->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="-mx-3 flex flex-wrap">
                          <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                              <label class="mb-3 block text-base font-medium text-lime-600"> Tem certeza que deseja EXCLUIR essa escola? </label>
                              <input type="text" name="nome" value="{{ $escolas->nome }}" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                            </div>
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                  <label for="fName" class="mb-3 block text-base font-medium text-lime-600"> Com inep: </label><input type="text" value="{{ $escolas->inep }}" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                                </div>
                            </div>
                        </div>
                  
                        <div>
                            <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                Excluir</button>
                        </div>
                      </form>
                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>