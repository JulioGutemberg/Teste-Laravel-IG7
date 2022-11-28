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

                    <form action="{{ route('nova_escola_add') }}" method="POST">
                        @csrf
                        <div class="-mx-3 flex flex-wrap">
                          <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                              <label for="" class="mb-3 block text-base font-medium text-lime-600"> Status </label>
                              <input type="text" name="status" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                            </div>
                          </div>
                          <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                              <label for="" class="mb-3 block text-base font-medium text-lime-600"> Inep </label>
                              <input type="text" name="inep" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                            </div>
                          </div>
                        </div>
                  
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                  <label for="" class="mb-3 block text-base font-medium text-lime-600"> Endereço </label>
                                  <input type="text" name="endereço" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                  <label for="" class="mb-3 block text-base font-medium text-lime-600"> Nome </label>
                                  <input type="text" name="nome" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                                </div>
                            </div>
                        </div>
                  
                        <div>
                            <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                    Salvar</button>
                        </div>
                      </form>
                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>