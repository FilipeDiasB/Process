<div
    class="w-full md:w-1/12 bg-gray-900 md:bg-gray-900 px-2 text-center fixed bottom-0 md:pt-8 md:top-0 md:left-0 h-16 md:h-screen md:border-r-4 md:border-gray-600">
    <div class="md:relative lg:float-right lg:px-6">
        <ul class="flex md:flex-col">
            <div class="flex md:ml-10 ml-2">
                <li class="flex-1 mt-1">
                    <div class="relative">
                        <button id="dropdownDefault" onclick="dropDown()"
                                class="h-14 w-14 bg-indigo-400 rounded-full overflow-hidden border-2 border-indigo-200 focus:outline-none focus:border-white">
                            <svg class="text-indigo-800 -left-1" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div id="dropdown"
                             class="hidden absolute mt-1 ml-12 w-48 bg-white rounded-lg shadow-lg border border-gray-200">
                            <ul>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Sair</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">
                                        Configurações do usuário</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </div>
            <div class="flex md:flex-col items-center md:mt-20 ml-6">
                <li class="flex-1 md:mt-7 ml-6">
                    <a href="#"
                       class="block py-1 md:py-3 pl-1 align-middle text-gray-200 no-underline hover:text-indigo-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"/>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"/>
                        </svg>
                        <span
                            class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Dashboard</span>
                    </a>
                </li>
                <li class="flex-1 md:mt-6 ml-6">
                    <a href="#"
                       class="block py-1 md:py-3 pl-1 align-middle text-gray-200 no-underline hover:text-indigo-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <span
                            class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Empresas</span>
                    </a>
                </li>
                <li class="flex-1 md:mt-6 ml-6">
                    <a href="#"
                       class="block py-1 md:py-3 pl-1 align-middle text-gray-200 no-underline hover:text-indigo-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                            <path fill-rule="evenodd"
                                  d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <span
                            class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Processos</span>
                    </a>
                </li>
                <li class="flex-1 md:mt-6 ml-6">
                    <div class="relative">
                        <button id="dropdown" onclick="dropDownUsuario()"
                                class="block py-1 md:py-3 pl-1 align-middle text-gray-200 no-underline hover:text-indigo-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path
                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
                            </svg>
                            <span
                                class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Usuários</span>
                        </button>
                        <div id="dropdownUsuario"
                             class="hidden absolute mt-1 ml-12 w-48 bg-white rounded-lg shadow-lg border border-gray-200">
                            <ul>
                                <li>
                                    <a href="{{ route('users.create') }}"
                                       class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Criar
                                        funcionário</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">
                                        Funcionários ativos</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </div>
        </ul>
    </div>
</div>

<script>

    function dropDown() {
        let dropdownMenu = document.getElementById("dropdown");

        dropdownMenu.classList.toggle('hidden');
    }

    function dropDownUsuario() {
        let dropdownMenu = document.getElementById("dropdownUsuario");

        dropdownMenu.classList.toggle('hidden');
    }
</script>
