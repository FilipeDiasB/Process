<x-app-layout>
    <x-title>Cadastro setor</x-title>
    <x-auth-validation-errors/>
    <p class="mb-10 font-semibold text-xl ml-2">Cadastrar Setor</p>
    <form method="POST" action="{{ route('setor.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 p-3 md:p-0">
            <!-- Possui setor -->
            <div class="mt-8 ml-6 flex">
                <x-label>Já possui setor?</x-label>
                <input type="hidden" value="0" name="checkDepartment" />
                <x-input type="checkbox" id="checkDepartment" name="checkDepartment" value="1" class="ml-4 mt-1 h-4 w-4"/>
            </div>
            <!-- Nome setor -->
            <div id="name" class="mt-8 w-80">
                <x-label for="name">Nome</x-label>
                <x-input id="department_name" class="block mt-1 w-full" type="name" name="name" :value="old('name')"/>
            </div>
            <div class="flex">
                <!-- Setores -->
                <div id=departments class="mt-8 md:ml-6 hidden">
                    <x-label>Setores</x-label>
                    <select name="department[]" class="mt-1" multiple>
                        @foreach($departments as $department)
                            <option value="{{ $department->id }}" class="block px-12 py-2 text-gray-800">{{ $department->name }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- Empresas -->
                <div class="mt-8 ml-2 md:ml-6">
                    <x-label>Empresas</x-label>
                    <select name="company" class="mt-1">
                        @foreach($companies as $company)
                            <option value="{{ $company->id }}" class="block px-12 py-2 text-gray-800">{{ $company->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <x-button class="mt-10 ml-2 md:ml-0">Criar</x-button>
    </form>
    <script>
        document.querySelector('#checkDepartment').addEventListener('click', function () {
                document.querySelector('#name').classList.toggle('hidden')
                document.querySelector('#departments').classList.toggle('hidden')
        });
    </script>
</x-app-layout>

