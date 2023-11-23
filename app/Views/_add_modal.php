<div id="add-modal" tabindex="-1" aria-hidden="true" class="modal hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="fixed inset-0 bg-black opacity-50"></div>
        <div class="relative p-4 w-full max-w-2xl max-h-md md:max-h-screen">
            <!-- Modal content -->
            <div class="relative bg-white rounded-sm shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-3 border-b rounded-t ">
                    <h3 class="text-lg font-semibold text-gray-700">
                        Novo livro
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-600 rounded text-sm w-8 h-8 ms-auto inline-flex justify-center items-center close-modal" data-modal-toggle="add-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="<?= base_url('/add'); ?>" method="post" class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="titulo" class="block mb-2 text-sm font-medium text-gray-600 ">Título</label>
                            <input type="text" name="titulo" id="titulo" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded block w-full p-2.5 "  required>
                        </div>
                        <div class="col-span-2">
                            <label for="autor" class="block mb-2 text-sm font-medium text-gray-600 ">Autor</label>
                            <input type="text" name="autor" id="autor" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded block w-full p-2.5 "  required>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="genero" class="block mb-2 text-sm font-medium text-gray-600">Gênero</label>
                            <input type="text" name="genero" id="genero" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded block w-full p-2.5 " >
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="ano" class="block mb-2 text-sm font-medium text-gray-600">Ano de publicação</label>
                            <input type="number" name="ano" id="ano" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded block w-full p-2.5 " >
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="total_paginas" class="block mb-2 text-sm font-medium text-gray-600">Número de páginas</label>
                            <input type="number" name="total_paginas" id="total_paginas" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded block w-full p-2.5 " >
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="pagina_atual" class="block mb-2 text-sm font-medium text-gray-600">Página atual</label>
                            <input type="number" name="pagina_atual" id="pagina_atual" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded block w-full p-2.5 " >
                        </div>
                        <div class="col-span-2">
                            <label for="status" class="block mb-2 text-sm font-medium text-gray-600">Status de leitura</label>
                            <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded block w-full p-2.5 ">
                                <option value="Em andamento" selected>Em andamento</option>
                                <option value="Finalizada">Finalizada</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm px-5 py-2.5 text-center mt-3">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                        Adicionar novo livro
                    </button>
                </form>
            </div>
        </div>
</div>