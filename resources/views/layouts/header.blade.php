{{--Menu top--}}
<div class="fixed w-full w-full bg-teal-700 h-20">
    <div class="flex absolute bottom-0 right-20 mb-3">
        <div class="dropdown h-14 w-14 bg-indigo-400 rounded-full overflow-hidden border-2 border-indigo-200 focus:outline-none focus:border-white">
            <svg class="text-indigo-800 -left-1" fill="currentColor" viewBox="0 0 20 20"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                      clip-rule="evenodd"></path>
            </svg>
        </div>
        <div class="hidden absolute w-48 mt-16 bg-white rounded-lg shadow-lg border border-gray-200 overflow-hidden">
            <ul>
                <li>
                    <a href="{{ route('logout') }}"
                       class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Sair
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">
                        Configurações do usuário
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <div class="text-white underline font-semibold ml-3 mt-2">Bem vindo, {{ auth()->user()->name }}</div>
        </div>
    </div>
</div>
{{--Menu lateral header--}}
<div class="w-full md:w-3/12 lg:w-1/12 fixed md:left-0 h-28 md:h-screen bg-gray-900 absolute">
    <div class="lg:float-right lg:px-6">
        {{--Colunas header--}}
        <ul class="flex md:flex-col">
            {{--User--}}
            <div class="flex md:flex-col md:mt-20 ml-6">
                {{--Dashboard--}}
                <li class="ml-6 mt-5 md:mb-8 lg:mb-10">
                    <a href="{{ route('dashboard') }}" class="flex dropdown hover:text-indigo-500 border-b-2 border-gray-900 hover:border-indigo-500">
                        <div class="text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"/>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"/>
                            </svg>
                        </div>
                        <div>
                            <button class="text-gray-200 ml-1">
                                <span class="text-xs md:text-base text-gray-400">Dashboard</span>
                            </button>
                        </div>
                    </a>
                </li>
                {{--Empresas--}}
                <li class="ml-6 mt-5 md:mb-8 lg:mb-10">
                    <div class="flex dropdown hover:text-indigo-500 border-b-2 border-gray-900 hover:border-indigo-500">
                        <div class="text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <button class="text-gray-200 ml-1">
                                <span class="text-xs md:text-base text-gray-400">Empresas</span>
                            </button>
                        </div>
                    </div>
                    <div class="hidden absolute md:ml-28 w-48 bg-white rounded-lg shadow-lg border border-gray-200 overflow-hidden">
                        <ul>
                            <li>
                                <a href=""
                                   class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Criar funcionário
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                   class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">
                                    Funcionários ativos
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{--Processos--}}
                <li class="ml-6 mt-5 md:mb-8 lg:mb-10">
                    <div class="flex dropdown hover:text-indigo-500 border-b-2 border-gray-900 hover:border-indigo-500">
                        <div class="text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                                <path fill-rule="evenodd"
                                      d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <button class="text-gray-200 ml-1">
                                <span class="text-xs md:text-base text-gray-400">Processos</span>
                            </button>
                        </div>
                    </div>
                    <div class="hidden absolute md:ml-28 w-48 bg-white rounded-lg shadow-lg border border-gray-200 overflow-hidden">
                        <ul>
                            <li>
                                <a href=""
                                   class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">proce
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                   class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">
                                    proce
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{--Usuários--}}
                <li class="ml-6 mt-5 md:mb-8 lg:mb-10">
                    <div class="flex dropdown hover:text-indigo-500 border-b-2 border-gray-900 hover:border-indigo-500">
                        <div class="text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
                            </svg>
                        </div>
                        <div>
                            <button class="text-gray-200 ml-1">
                                <span class="text-xs md:text-base text-gray-400">Usuários</span>
                            </button>
                        </div>
                    </div>
                    <div class="hidden absolute md:ml-28 w-48 bg-white rounded-lg shadow-lg border border-gray-200 overflow-hidden">
                        <ul>
                            <li>
                                <a href="{{ route('usuario.create') }}"
                                   class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Criar funcionário
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                   class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">
                                    Funcionários ativos
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </div>
        </ul>
    </div>
</div>
<script>
    const dropdownMenu = document.querySelectorAll('.dropdown');
    dropdownMenu.forEach(item => item.onclick = () => item.nextElementSibling.classList.toggle('hidden'))
</script>
