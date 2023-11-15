<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marcapágina.</title>
    <link rel="stylesheet" href="<?= base_url() ?>/css/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0" />
</head>

<body class="font-body mx-6 my-3">
    <header class="p-5">
        <div
            class="before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-blue-700 before:rounded-sm relative inline-block shadow-xl ">
            <span class="text-3xl font-semibold relative text-slate-100 p-1"><a href="/">marcapágina.</a></span>
        </div>
    </header>
    <main class="flex justify-center py-3">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg border">
            <table class="table-auto border-collapse rounded-xl">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">título</th>
                        <th scope="col" class="px-6 py-3">autor</th>
                        <th scope="col" class="px-6 py-3">gênero</th>
                        <th scope="col" class="px-6 py-3">ano</th>
                        <th scope="col" class="px-6 py-3">status de leitura</th>
                        <th scope="col" class="px-6 py-3">página onde parou</th>
                        <th scope="col" class="px-6 py-3"></th>
                    </tr>
                </thead>
                <tbody class="bg-white border-b  hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-50 text-gray-600">
                    <?php foreach ($livros as $livro): ?>
                    <tr>
                        <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap"><?php echo $livro->Titulo; ?></th>
                        <td class="px-6 py-4"><?php echo $livro->Autor; ?></td>
                        <td class="px-6 py-4"><?php echo $livro->Genero; ?></td>
                        <td class="px-6 py-4"><?php echo $livro->AnoPublicacao; ?></td>
                        <td class="px-6 py-4"><?php echo $livro->StatusLeitura; ?></td>
                        <td class="px-6 py-4 text-center"><?php echo $livro->PaginaAtual; ?></td>
                        <td class="px-6 py-4 text-right">
                            <!-- Circle -->
                            <div class="relative inline-flex items-center justify-center">
                                <!-- Building a Progress Ring: https://css-tricks.com/building-progress-ring-quickly/ -->
                                <svg class="w-20 h-20">
                                    <circle class="stroke-current text-gray-300" stroke-width="5" fill="transparent" r="30" cx="40" cy="40" />
                                    <circle class="stroke-current text-blue-600 progress-ring" stroke-width="5" stroke-linecap="round"
                                        :stroke="`blue-500`"
                                        :stroke-dasharray="`${Math.max(0, currentPercent)} ${Math.max(0, 100 - currentPercent)}`"
                                        :stroke-dashoffset="`${100 - currentPercent}`"
                                        fill="transparent" r="30" cx="40" cy="40" data-percent="<?php echo $livro->PorcentagemLeitura; ?>"></circle>
                                </svg>
                                <span class="absolute text-xl text-gray-600" id="percentDisplay">0%</span>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
    <div class="flex justify-center gap-x-1">
            <!-- Previous Button -->
            <a href="#" class="flex items-center justify-center px-3 h-8 me-3 text-sm text-gray-600 bg-white  rounded-lg hover:bg-gray-100 hover:text-gray-700 ">
                <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                </svg>
                Página anterior
            </a>
            <a href="#" class="flex items-center justify-center px-3 h-8 text-sm text-gray-600 bg-white  rounded-lg hover:bg-gray-100 hover:text-gray-700 ">
                Próxima página
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    <aside>
        <div>
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 rounded-full fixed bottom-10 right-10 
     shadow-xl add-button"><span
                    class="material-symbols-outlined align-middle text-5xl p-2 font-bold"
                    style="font-size: 32px;">add</span></button>
        </div>
    </aside>
    <!-- modal -->
    <div id="add-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="fixed inset-0 bg-black opacity-50"></div>
        <div class="relative p-4 w-full max-w-2xl max-h-md md:max-h-screen">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-3 border-b rounded-t ">
                    <h3 class="text-lg font-semibold text-gray-700">
                        Novo livro
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-600 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center close-modal" data-modal-toggle="add-modal">
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
                            <input type="text" name="titulo" id="titulo" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg block w-full p-2.5 "  required>
                        </div>
                        <div class="col-span-2">
                            <label for="autor" class="block mb-2 text-sm font-medium text-gray-600 ">Autor</label>
                            <input type="text" name="autor" id="autor" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg block w-full p-2.5 "  required>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="genero" class="block mb-2 text-sm font-medium text-gray-600">Gênero</label>
                            <input type="text" name="genero" id="genero" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg block w-full p-2.5 " >
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="ano" class="block mb-2 text-sm font-medium text-gray-600">Ano de publicação</label>
                            <input type="number" name="ano" id="ano" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg block w-full p-2.5 " >
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="total_paginas" class="block mb-2 text-sm font-medium text-gray-600">Número de páginas</label>
                            <input type="number" name="total_paginas" id="total_paginas" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg block w-full p-2.5 " >
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="pagina_atual" class="block mb-2 text-sm font-medium text-gray-600">Página atual</label>
                            <input type="number" name="pagina_atual" id="pagina_atual" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg block w-full p-2.5 " >
                        </div>
                        <div class="col-span-2">
                            <label for="status" class="block mb-2 text-sm font-medium text-gray-600">Status de leitura</label>
                            <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg block w-full p-2.5 ">
                                <option value="Em andamento" selected>Em andamento</option>
                                <option value="Finalizada">Finalizada</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-3">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                        Adicionar novo livro
                    </button>
                </form>
            </div>
        </div>
    </div> 
    <script>
        const add_button = document.querySelector('.add-button');
        console.log(add_button);
        const add_modal = document.getElementById('add-modal');
        console.log(add_modal);
        const close_modal = document.querySelector('.close-modal');

        add_button.addEventListener("click", () => {
            add_modal.classList.remove('hidden');
            add_modal.classList.add('flex');
        });

        close_modal.addEventListener("click", () => {
            add_modal.classList.remove('flex');
            add_modal.classList.add('hidden');
        });
        
        
        let currentPercent = 0;

        const circle = document.querySelector('.progress-ring');
        const targetPercent = circle.dataset.percent; 
        console.log(targetPercent)
        const percentDisplay = document.getElementById('percentDisplay');

        function updateProgress() {
            percentDisplay.innerText = `${currentPercent}%`;

            if (currentPercent < targetPercent) {
                const remainingPercent = targetPercent - currentPercent;
                const increment = Math.min(remainingPercent, 1); // Ajuste o incremento conforme necessário
                currentPercent += increment;

                circle.style.strokeDasharray = `${Math.max(0, currentPercent)} ${Math.max(0, 100 - currentPercent)}`;
                circle.style.strokeDashoffset = `${100 - currentPercent}`;
                setTimeout(updateProgress, 20); // Ajuste o tempo de espera conforme necessário
            }
        }
        updateProgress(); // Inicia a animação
    </script>
</body>

</html>