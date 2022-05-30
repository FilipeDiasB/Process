<x-app-layout>
    <x-auth-validation-errors/>
    <p class="mb-10 font-semibold text-xl ml-2">Cadastrar Usuário</p>
    <form method="POST" action="{{ route('usuario.store') }}">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 p-3 md:p-0">
            <!-- Nome -->
            <div class="mt-8">
                <x-label for="name" :value="__('Nome')"/>
                <x-input id="name" class="block mt-1 w-full" type="name" name="name" :value="old('name')" required
                         autofocus/>
            </div>
            <!-- Email -->
            <div class="mt-8 md:ml-6">
                <x-label for="email" :value="__('Email')"/>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                         autofocus/>
            </div>
            <!-- Password -->
            <div class="mt-8">
                <x-label for="password" :value="__('Password')"/>
                <x-input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required autocomplete="current-password"/>
            </div>
            <!-- Tipo Usuário -->
            <div class="mt-8 md:ml-6">
                <x-label for="user_type" :value="__('Tipo de usuário')"/>
                <x-inputRadio id="admin" name="user_type" value="2" labelFor="user_type" label="Administrador"/>
                <x-inputRadio id="employee" name="user_type" value="3" labelFor="user_type" label="Funcionário"/>
            </div>
            <!-- Cpj/Cnpj -->
            <div class="mt-8">
                <x-label for="phone" :value="__('Celular')"/>
                <x-input id="phone" class="block mt-1 w-full"
                         type="integer"
                         name="phone"/>
            </div>
            <!-- Phone -->
            <div class="mt-8">
                <x-label for="phone" :value="__('Celular')"/>
                <x-input id="phone" class="block mt-1 w-full"
                         type="integer"
                         name="phone"/>
            </div>
        </div>
        <x-button class="mt-10 ml-2">Criar</x-button>
    </form>
</x-app-layout>
