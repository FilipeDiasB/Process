<x-app-layout>
    <x-title>Usuários ativos</x-title>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-400 border-x">
                <thead class="text-xs uppercase text-black bg-gray-200">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Funcionários
                        </th>
                        <th scope="col" class="px-6 py-3">
                            E-mail
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Documento
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Criado em
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Editar</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr class="bg-white border-b bg-gray-50 border-gray-300 font-medium text-black whitespace-nowrap">
                        <th scope="row" class="px-6 py-4">
                            <a href="{{ route('usuario.show', $user->id) }}">{{ $user->name }}</a>
                        </th>
                        <td class="px-6 py-4">
                            {{ $user->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->document }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->created_at }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-2">{{ $users->links() }}</div>
        </div>
</x-app-layout>