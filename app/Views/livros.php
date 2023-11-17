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
                <tbody class="bg-white border-b cursor-pointer text-gray-600">
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
                                    <circle class="stroke-current text-gray-300" stroke-width="5" fill="transparent" r="30" cx="40" cy="40" />
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