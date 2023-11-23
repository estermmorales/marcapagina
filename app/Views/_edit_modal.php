<div id="edit-modal" tabindex="-1" aria-hidden="true" class="modal hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="fixed inset-0 bg-black opacity-50"></div>
        <div class="relative p-4 w-full max-w-2xl max-h-md md:max-h-screen">
            <!-- Modal content -->
            <div class="relative bg-white rounded-sm shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-3 border-b rounded-t ">
                    <h3 class="text-lg font-semibold text-gray-700">
                        Editar livro
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-600 rounded text-sm w-8 h-8 ms-auto inline-flex justify-center items-center close-modal" data-modal-toggle="edit-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="<?= base_url('/edit'); ?>" method="post" class="p-4 md:p-5" id="edit-form">
                    <input type="hidden" name="id" id="id" required>
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
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" style="margin-right:4px; fill: #f9fafb">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                        Atualizar
                    </button>
                    <button type="button" class="inline-flex items-center px-5 py-2.5 text-center mt-3 bg-gray-50 hover:bg-gray-100 text-gray-800 text-sm font-medium rounded border confirm-button">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" style="margin-right:4px; fill: #6b7280"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                        Excluir
                    </button>
                </form>
            </div>
        </div>
</div>
<div id="confirm-modal" tabindex="-1" aria-hidden="true" class="modal hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="fixed inset-0 bg-black opacity-50"></div>
        <div class="relative p-4  max-w-2xl max-h-md md:max-h-screen">
            <!-- Modal content -->
            <div class="relative bg-white rounded-sm shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-3 border-b rounded-t ">
                    <h3 class="text-lg font-semibold text-gray-700">
                        Excluir livro
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-600 rounded text-sm w-8 h-8 ms-auto inline-flex justify-center items-center close-modal" data-modal-toggle="confirm-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="<?= base_url('/delete'); ?>" method="post" class="p-4 md:p-5" id="confirm-form">
                    <input type="hidden" name="id" id="id" required>
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <h1>Deseja mesma excluir esse livro?</h1>
                        </div>
                    </div>
                    <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm px-5 py-2.5 text-center mt-3">
                        Sim
                    </button>
                    <button type="button" class="inline-flex items-center px-5 py-2.5 text-center mt-3 bg-gray-50 hover:bg-gray-100 text-gray-800 text-sm font-medium rounded border">

                        Não
                    </button>
                </form>
            </div>
        </div>
</div>