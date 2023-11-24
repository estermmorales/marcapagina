<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>readtrackr - leituras</title>
    <link rel="stylesheet" href="<?= base_url() ?>/css/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0" />
</head>

<body class="font-body absolute inset-0 h-full w-full bg-gray-50 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:16px_16px]">
    <header>
        <!-- <div>
            <span class="text-4xl font-semibold relative text-slate-50 p-1 underline decoration-indigo-500"><a href="/">readtrackr</a></span>
        </div> -->
        <div class=" my-4 mx-6">
            <a href="#"><img src="<?= base_url() ?>/assets/readtrackr.png" alt="" width="250"></a>
        </div>
    </header>
    <main class="flex justify-center py-3">
        <div class="relative overflow-x-auto shadow-md  border rounded w-950">
            <div class="flex justify-between bg-white py-3 px-6">
                <div class="bg-white py-3 px-3">
                    <h1 class="text-4xl font-semibold text-gray-700">LEITURAS</h1>
                </div>
                <div class="flex items-center gap-4">
                <form>   
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Pesquisa</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full p-2 ps-10 text-sm text-gray-900 border rounded bg-gray-50" placeholder="Pesquisar..." required>
                    </div>
                </form>
                <button class="inline-flex items-center px-4 py-2 bg-gray-50 hover:bg-gray-100 text-gray-800 text-sm font-medium rounded border">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" style="margin-right:4px; fill: #6b7280">
                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M3.9 54.9C10.5 40.9 24.5 32 40 32H472c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6V320.9L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z"/></svg>
                    Filtros
                </button>
                <button class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-gray-50 text-sm font-medium rounded border add-button">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" style="margin-right:4px; fill: #f9fafb">
                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                    Adicionar
                </button>
                </div>
            </div>
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
                <tbody class="bg-white border-b cursor-pointer text-gray-600 ">
                    <?php foreach ($livros as $livro): ?>
                    <tr class="hover:bg-gray-100 book" data-id="<?php echo $livro->ID; ?>">
                        <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap"><?php echo $livro->Titulo; ?></th>
                        <td class="px-6 py-4"><?php echo $livro->Autor; ?></td>
                        <td class="px-6 py-4"><?php echo $livro->Genero; ?></td>
                        <td class="px-6 py-4"><?php echo $livro->AnoPublicacao; ?></td>
                        <td class="px-6 py-4"><?php echo $livro->StatusLeitura; ?></td>
                        <?php if ($livro->PaginaAtual == $livro->TotalPaginas): ?>
                            <td class="px-6 py-4 text-center"> </td>
                        <?php else: ?>
                        <td class="px-6 py-4 text-center"><?php echo $livro->PaginaAtual; ?></td>
                        <?php endif ?>
                        <td class="px-6 py-4 text-right">
                            <!-- Circle -->
                            <div class="relative inline-flex items-center justify-center progress-container">
                                <!-- Building a Progress Ring: https://css-tricks.com/building-progress-ring-quickly/ -->
                                <svg class="w-20 h-20">
                                    <circle class="stroke-current text-gray-200" stroke-width="5" fill="transparent" r="30" cx="40" cy="40" />
                                    <circle class="stroke-current text-blue-600 progress-ring" stroke-width="5" stroke-linecap="round"
                                        :stroke="`blue-500`"
                                        :stroke-dasharray="`${Math.max(0, currentPercent)} ${Math.max(0, 100 - currentPercent)}`"
                                        :stroke-dashoffset="`${100 - currentPercent}`"
                                        fill="transparent" r="30" cx="40" cy="40" data-percent="<?php echo $livro->PorcentagemLeitura; ?>"></circle>
                                </svg>
                                <span class="absolute text-xl text-gray-600 percentDisplay">0%</span>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
    <div class="flex justify-center gap-x-1">
        <?= $pager->links('default', 'tailwind_pagination') ?>                    
    </div>
    <!-- modals -->
    <?php include('_add_modal.php'); ?>
    <?php include('_edit_modal.php'); ?>
    <script>
        const add_button = document.querySelector('.add-button');
        const add_modal = document.getElementById('add-modal');
        const close_modals = document.querySelectorAll('.close-modal');
        const books = document.querySelectorAll('.book');
        const edit_modal = document.getElementById('edit-modal');
        const edit_form = document.getElementById('edit-form');
        const confirm_button = document.querySelector('.confirm-button');
        const confirm_modal = document.getElementById('confirm-modal');
        const confirm_form = document.getElementById('confirm-form');

        add_button.addEventListener("click", () => {
            add_modal.classList.remove('hidden');
            add_modal.classList.add('flex');
        });

        close_modals.forEach(close => {
            close.addEventListener("click", () => {
                const modal_type = close.dataset.modalToggle;
                const modal =document.querySelector(`div#${modal_type}`);
                modal.classList.remove('flex');
                modal.classList.add('hidden');
        });
        })

        books.forEach(book => {
            book.addEventListener('click', () => {
                const id = book.dataset.id;
            get_book_by_id(id).then(bookDetails => {
                const fields = {
                    "#id": 'ID',
                    "#titulo": 'Titulo',
                    "#autor": "Autor",
                    "#genero": "Genero",
                    "#ano": "AnoPublicacao",
                    "#total_paginas": "TotalPaginas",
                    "#pagina_atual": "PaginaAtual",
                    "#status":"StatusLeitura"
                }
                for (const [key, value] of Object.entries(fields)) {
                    edit_form.querySelector(key).value = bookDetails[value];
                }
            });

            edit_modal.classList.remove('hidden');
            edit_modal.classList.add('flex');
            });
        })

        async function get_book_by_id(id) {
            return await fetch(`/get/${id}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error(`Erro ao obter detalhes do livro: ${response.status}`);
                }
                return response.json();
            });
        }

        confirm_button.addEventListener("click", () => {
            confirm_modal.classList.remove('hidden');
            confirm_modal.classList.add('flex');
            id =edit_form.querySelector("#id").value
            confirm_form.querySelector("#id").value = id
        });



        //progress ring
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.progress-container').forEach((container) => {
                let currentPercent = 0;
                const circle = container.querySelector('.progress-ring');
                const targetPercent = circle.dataset.percent;
                const percentDisplay = container.querySelector('.percentDisplay');

                function updateProgress() {
                    percentDisplay.innerText = `${currentPercent}%`;

                    if (currentPercent < targetPercent) {
                        const remainingPercent = targetPercent - currentPercent;
                        const increment = Math.min(remainingPercent, 1); 
                        currentPercent += increment;

                        circle.style.strokeDasharray = `${Math.max(0, currentPercent)} ${Math.max(0, 100 - currentPercent)}`;
                        circle.style.strokeDashoffset = `${100 - currentPercent}`;
                        setTimeout(updateProgress, 20); 
                    }
                }
                updateProgress();
            });
        });
    </script>
</body>

</html>