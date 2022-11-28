<x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        
                        <div class="container flex flex-col items-end" >
                            <a href="{{ route('nova_escola_add') }}">
                                <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                Nova Escola</button>
                            </a>
                        </div>

                        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-amber-300 dark:text-lime-600">
                                    <tr>
                                        <th scope="col" class="py-3 px-6">
                                            Id
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Status
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Inep
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Endereço
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Nome
                                        </th>
                                        <th scope="col" class="py-3 px-6 ">
                                            Ações
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($escola as $escolas)
                                        <tr class="bg-white text-center border-b dark:bg-white dark:border-gray-700 dark:text-lime-600">
                                            <td class="py-4 px-6">
                                                {{$escolas['id']}}
                                            </td>
                                            <td class="py-4 px-6">
                                                {{$escolas['status']}}
                                            </td>
                                            <td class="py-4 px-6">
                                                {{$escolas['inep']}}
                                            </td>
                                            <td class="py-4 px-6">
                                                {{$escolas['endereço']}}
                                            </td>
                                            <td class="py-4 px-6">
                                                {{$escolas['nome']}}
                                            </td>
                                            <td class="py-4 px-6">
                                                
                                                <a href="{{ route('edit_view', $escolas->id) }}" > 
                                                    <button type="submit" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">
                                                        Editar</button>
                                                </a>

                                                <a href="{{ route('delete_view', ['id' => $escolas->id]) }}">
                                                    <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                                        Excluir</button>  
                                                   </a>
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
</x-app-layout>
