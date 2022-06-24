<div id=top-menu class="fixed bottom-0 md:top-0 w-full bg-teal-700 h-20 shadow-md">
    <div id="menu-icon" class="h-5 w-5 md:ml-52 ml-4 mt-7">
        <svg class="text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
            <path d="M1,6H23a1,1,0,0,0,0-2H1A1,1,0,0,0,1,6Z"/>
            <path d="M23,9H1a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z"/>
            <path d="M23,19H1a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z"/>
            <path d="M23,14H1a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z"/>
        </svg>
    </div>
    <div class="flex absolute bottom-0 right-20 mb-3">
        <div class="dropdown h-14 w-14 bg-white rounded-full overflow-hidden focus:outline-none focus:border-white">
            <svg class="text-blue-600 ml-2 mt-2" fill="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                      clip-rule="evenodd"></path>
            </svg>
        </div>
        <div class="drop-menu hidden absolute w-48 bottom-14 right-3 mb-1 md:-bottom-28 md:mb-0 bg-white rounded-lg shadow-lg border border-gray-200 overflow-hidden">
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
            <div class="text-white underline underline-offset-2 decoration-white/50 font-semibold ml-3 mt-2">Bem vindo, {{ auth()->user()->name }}</div>
        </div>
    </div>
</div>
<div id="sidebar-menu" class="fixed top-0 w-full md:w-3/12 lg:w-1/12 h-28 md:h-full lg:h-full bg-gray-900 shadow-2xl">
    <div class="flex flex-wrap md:flex-col md:mt-20">
        <div class="ml-5 mt-5 md:mb-8 lg:mb-10">
            <a href="{{ route('dashboard') }}" class="flex">
                <div class="text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
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
        </div>
        <div class="ml-5 mt-5 md:mb-8 lg:mb-10">
            <div class="flex dropdown">
                <div class="text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
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
            <div class="drop-menu hidden absolute md:ml-28 w-48 bg-white rounded-lg shadow-lg border border-gray-200 overflow-hidden">
                <ul>
                    <li>
                        <a href="{{ route('empresa.create') }}"
                           class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Criar empresas
                        </a>
                    </li>
                    <li>
                        <a href=""
                           class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">
                            Empresas ativas
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="ml-5 mt-5 md:mb-8 lg:mb-10">
            <div class="flex dropdown">
                <div class="text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-5 w-5 mr-1">
                        <path d="M21,12a9.143,9.143,0,0,0-.15-1.645L23.893,8.6l-3-5.2L17.849,5.159A9,9,0,0,0,15,3.513V0H9V3.513A9,9,0,0,0,6.151,5.159L3.107,3.4l-3,5.2L3.15,10.355a9.1,9.1,0,0,0,0,3.29L.107,15.4l3,5.2,3.044-1.758A9,9,0,0,0,9,20.487V24h6V20.487a9,9,0,0,0,2.849-1.646L20.893,20.6l3-5.2L20.85,13.645A9.143,9.143,0,0,0,21,12Zm-6,0a3,3,0,1,1-3-3A3,3,0,0,1,15,12Z"/>
                    </svg>
                </div>
                <div>
                    <button class="text-gray-200 ml-1">
                        <span class="text-xs md:text-base text-gray-400">Setores</span>
                    </button>
                </div>
            </div>
            <div class="drop-menu hidden absolute md:ml-28 w-48 bg-white rounded-lg shadow-lg border border-gray-200 overflow-hidden">
                <ul>
                    <li>
                        <a href="{{ route('setor.cadastrar') }}"
                           class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Criar/atribuir setor
                        </a>
                    </li>
                    <li>
                        <a href="#"
                           class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">
                            Setores ativos
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="ml-5 mt-5 md:mb-8 lg:mb-10">
            <div class="flex dropdown">
                <div class="text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
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
            <div class="drop-menu hidden absolute md:ml-28 w-48 bg-white rounded-lg shadow-lg border border-gray-200 overflow-hidden">
                <ul>
                    @if(!in_array(auth()->user()->user_permission_id, [3]))
                        <li>
                            <a href=""
                               class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Processos
                            </a>
                        </li>
                    @endif
                    <li>
                        <a href="#"
                           class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">
                            Meus processos
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        @if(!in_array(auth()->user()->user_permission_id, [3]))
            <div class="ml-5 mt-5 md:mb-8 lg:mb-10">
                <div class="flex dropdown">
                    <div class="text-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20"
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
                <div class="drop-menu hidden absolute md:ml-28 w-48 bg-white rounded-lg shadow-lg border border-gray-200 overflow-hidden">
                    <ul>
                        <li>
                            <a href="{{ route('usuario.create') }}"
                               class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Criar funcionário
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('usuario.listagem') }}"
                               class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">
                                Funcionários ativos
                            </a>
                        </li>
                    </ul>
                    @endif
                </div>
            </div>
    </div>
</div>
    <script>
        const dropdownMenu = document.querySelectorAll('.dropdown');
        dropdownMenu.forEach(item => item.onclick = () => item.nextElementSibling.classList.toggle('hidden'));

        document.querySelector('#app').onclick = () => document.querySelectorAll('.drop-menu').forEach(item => item.classList.add('hidden'));


        const menuIcon = document.querySelector('#menu-icon');
        const content = document.querySelector('#content');

        menuIcon.onclick = () => {
            document.querySelector('#sidebar-menu').classList.toggle('hidden');
            content.classList.toggle('md:ml-56');
            content.classList.toggle('md:ml-24');
            content.classList.toggle('mt-36');
            content.classList.toggle('mt-10');
        }
    </script>
