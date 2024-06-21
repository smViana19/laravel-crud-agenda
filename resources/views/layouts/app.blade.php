
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Project Planner</title>
</head>

<body>
    <header>
        <h1>Planner Project</h1>
        <nav class="navbar">
            <ul>
                <li class="item-select__nav" onclick="filterTasks('all')">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                        <path fill="#000000"
                            d="M64 256V160H224v96H64zm0 64H224v96H64V320zm224 96V320H448v96H288zM448 256H288V160H448v96zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                    </svg>
                    All
                </li>
                <li class="item-select__nav" onclick="filterTasks('To Do')">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                        <path fill="#000000"
                            d="M64 256V160H224v96H64zm0 64H224v96H64V320zm224 96V320H448v96H288zM448 256H288V160H448v96zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                    </svg>
                    To Do
                </li>
                <li class="item__nav" onclick="filterTasks('Doing')">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                        <path fill="#000000"
                            d="M64 256V160H224v96H64zm0 64H224v96H64V320zm224 96V320H448v96H288zM448 256H288V160H448v96zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                    </svg>
                    Doing
                </li>
                <li class="item__nav" onclick="filterTasks('Done')">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                        <path fill="#000000"
                            d="M64 256V160H224v96H64zm0 64H224v96H64V320zm224 96V320H448v96H288zM448 256H288V160H448v96zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                    </svg>
                    Done
                </li>
            </ul>

            <div class='container__btn-nav'>
                <div class="search">
                    <input placeholder="Search..." type="text" id="searchInput">
                    <button type="submit">Go</button>
                </div>

                <form id="deleteForm" action="/delete" method="POST">
                    @csrf
                    @method('DELETE')
                        <input type="hidden" name="ids" id="idsInput">
                        <button id="btnDelete" class='btn__new-task'>Delete
                            <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" viewBox="0 0 512 512">
                                <path fill="#ffffff" d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                            </svg>
                        </button>
                </form>

                <button id="btnNewTask" class='btn__new-task'>New
                    <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" viewBox="0 0 512 512">
                        <path fill="#ffffff"
                            d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                    </svg>
                </button>
            </div>
        </nav>
        <form action="/store" method="post">
            @csrf
            <div id="myModal" class="modal">
                <div class="modal-content">

                    <div class="div-no-flex">
                        <label for="">Nome da Tarefa</label>
                        <input class="input-modal" type="text" id="tarefa" name="tarefa" src="" alt="">
                    </div>

                    <div class="div-flex">
                        <div>
                            <label for="">Urgência</label>
                            <div>
                                <select name="urgencia" id="urgencia">
                                    <option selected disabled value="">Selecionar</option>
                                    <option value="urgente">Urgente</option>
                                    <option value="moderado">Moderado</option>
                                    <option value="sempressa">Sem Pressa</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="">Categoria</label>
                            <input class="input-modal" type="text" id="categoria" name="categoria" src="" alt="">
                        </div>
                    </div>


                    <div class="div-no-flex">
                        <label for="">Nome do Desenvolvedor</label>
                        <input class="input-modal" type="text" id="desenvolvedor" name="desenvolvedor">
                    </div>
                    <div class='div-flex'>
                        <div class="div-no-flex">
                            <label for="">Data De Entrega</label>
                            <input class="input-modal" type="date" id="entrega" name="entrega">
                        </div>
                        <div>
                            <label for="">Status</label>
                            <div>
                                <select name="status" id="status">
                                    <option selected disabled value="">Selecionar</option>
                                    <option value="To Do">To-Do</option>
                                    <option value="Doing">Doing</option>
                                    <option value="Done">Done</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <p>
                        <button class="submit-modal" type="submit" id="submit">Salvar</button>
                    </p>
                    <span id="errorSubmit"></span>

                </div>

            </div>
        </form>
    </header>

    <main style="overflow-x:auto;">
        @yield('content')
    </main>

    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>