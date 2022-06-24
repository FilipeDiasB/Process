<x-app-layout>
    <x-title>Perfil</x-title>
    <div class="w-2/3 flex flex-col bg-white shadow rounded-lg overflow-hidden">
        <div class="flex justify-between items-center bg-gray-200 text-gray-700 text-lg px-6 py-4">
            <div class="text-sm font-semibold">Usuário criado em: {{ $user->created_at }}</div>
        </div>

        <div class="px-6 py-4 border-t border-gray-200">
            <div class="border rounded-lg p-4 bg-gray-200 font-semibold">
                Empresas:
                <br>
                Setores:
            </div>
        </div>

        <div class="bg-gray-200 px-6 py-4">
            <div class="uppercase text-xs text-gray-600 font-bold">Funcionário</div>

            <div class="flex items-center pt-3">
                <div id=iniciais class="hidden bg-blue-700 w-12 h-12 flex justify-center items-center rounded-full uppercase font-bold text-white">{{ $user->name }}</div>
                <div id=iniciais2 class="bg-blue-700 w-12 h-12 flex justify-center items-center rounded-full uppercase font-bold text-white"></div>
                <div class="ml-4">
                    <p class="font-bold">{{ $user->name }}</p>
                </div>
            </div>
        </div>
        <div class="px-4 py-4">
            <a href="{{ route('usuario.download', $user) }}" class="bg-gray-600 text-white font-semibold px-2 py-1 rounded-lg shadow">Identificação</a>
        </div>
    </div>
</x-app-layout>
<script>

    const str = document.querySelector('#iniciais').innerHTML;
    document.querySelector('#iniciais2').innerHTML = str.charAt(0);
</script>