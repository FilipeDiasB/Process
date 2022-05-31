<x-app-layout>
    <x-auth-validation-errors/>
    <p class="mb-10 font-semibold text-xl ml-2">Cadastrar Usuário</p>
    <form method="POST" action="{{ route('usuario.store') }}">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 p-3 md:p-0">
            <div class="grid grid-cols-2">
                <!-- Permissão Usuário -->
                <div class="mt-8">
                    <x-label for="user_type" :value="__('Permissão do usuário')"/>
                    <x-inputRadio id="admin" name="user_type_id" value="2" labelFor="user_type" label="Administrador"/>
                    <x-inputRadio id="employee" name="user_type_id" value="3" labelFor="user_type" label="Funcionário"/>
                </div>
                <!-- Tipo Usuário -->
                <div class="mt-8">
                    <x-label for="document" :value="__('Tipo de usuário')"/>
                    <x-inputRadio id="cpf_radio" name="cpf_cnpj" value="0" labelFor="cpf" label="Pessoa física"/>
                    <x-inputRadio id="cnpj_radio" name="cpf_cnpj" value="1" labelFor="cpf" label="Pessoa jurídica"/>
                </div>
            </div>
            <!-- Nome -->
            <div class="mt-8 md:ml-6">
                <x-label for="name" :value="__('Nome')"/>
                <x-input id="name" class="block mt-1 w-full" type="name" name="name" :value="old('name')" required
                         autofocus/>
            </div>
            <!-- Email -->
            <div class="mt-8">
                <x-label for="email" :value="__('Email')"/>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                         autofocus/>
            </div>
            <!-- Password -->
            <div class="mt-8 md:ml-6">
                <x-label for="password" :value="__('Password')"/>
                <x-input id="password" class="block mt-1 w-full"
                         type="password" :value="old('password')"
                         name="password"
                         required autocomplete="current-password"/>
            </div>
            <!-- Cpj/Cnpj -->
            <div id="cpf_field" class="mt-8">
                <x-label for="cpf" :value="__('CPF')"/>
                <x-input id="cpf" class="block mt-1 w-full"
                         type="text" maxlength="14"
                         name="cpf"/>
            </div>
            <div id="cnpj_field" class="mt-8 hidden">
                <x-label for="cnpj" :value="__('CNPJ')"/>
                <x-input id="cnpj" class="block mt-1 w-full"
                         type="text" maxlength="19"
                         name="cpf"/>
            </div>
            <!-- RG -->
            <div class="mt-8 md:ml-6">
                <x-label for="rg" :value="__('RG')"/>
                <x-input id="rg" class="block mt-1 w-full" type="text" name="rg" :value="old('rg')"/>
            </div>
            <!-- Phone -->
            <div class="mt-8">
                <x-label for="phone" :value="__('Celular')"/>
                <x-input id="phone" class="block mt-1 w-full"
                         type="text" maxlength="15"
                         name="phone" :value="old('phone')"/>
            </div>
        </div>
        <x-button class="mt-10 ml-2 md:ml-0">Criar</x-button>
    </form>
    <script>

        const phone = document.querySelector('#phone');

        phone.addEventListener('keypress', () => {
            let length = phone.value.length
            if (length == 0) {
                phone.value += '('
            } else if (length == 3) {
                phone.value += ') '
            } else if (length == 10) {
                phone.value += '-'
            }
        });

        const cpf = document.querySelector('#cpf');

        cpf.addEventListener('keypress', () => {
            let length = cpf.value.length
            if (length === 3 || length === 7) {
                cpf.value += '.'
            } else if (length === 11) {
                cpf.value += '-'
            }
        });

        const cnpj = document.querySelector('#cnpj');

        cnpj.addEventListener('keypress', () => {
            let length = cnpj.value.length
            if (length === 2 || length === 6) {
                cnpj.value += '.'
            } else if (length === 11) {
                cnpj.value += '/'
            } else if (length === 16) {
                cnpj.value += '-'
            }
        })

        // const cpfRadio = document.querySelector('#cpf_radio');
        // const cnpjRadio = document.querySelector('#cnpj_radio');
        document.getElementById('cpf_radio').addEventListener('click', () => {
            if (document.getElementById('cpf_radio').checked == true) {
                document.getElementById('cnpj_field').classList.add('hidden')
                document.getElementById('cnpj').value = ""
                document.getElementById('cpf_field').classList.remove('hidden')
            }
        })


        document.getElementById('cnpj_radio').addEventListener('click', () => {
            if (document.getElementById('cnpj_radio').checked == true) {
                document.getElementById('cpf_field').classList.add('hidden')
                document.getElementById('cpf').value = ""
                document.getElementById('cnpj_field').classList.remove('hidden')
            }
        })


    </script>
</x-app-layout>

