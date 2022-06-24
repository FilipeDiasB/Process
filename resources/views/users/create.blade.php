<x-app-layout>
    <x-title>Cadastro</x-title>
    <x-auth-validation-errors/>
    <p class="mb-10 font-semibold text-xl ml-2">Cadastrar Usuário</p>
    <form method="POST" action="{{ route('usuario.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 p-3 md:p-0">
            <div class="grid grid-cols-2">
                <!-- User permission -->
                <div class="mt-8">
                    <x-label for="user_permission">Permissão do usuário</x-label>
                    <x-inputRadio id="admin" name="user_permission_id" value="2" labelFor="user_permission" label="Administrador"/>
                    <x-inputRadio id="employee" name="user_permission_id" value="3" labelFor="user_permission" label="Funcionário"/>
                </div>
                <!-- User type -->
                <div class="mt-8">
                    <x-label for="document_radio">Tipo de usuário</x-label>
                    <x-inputRadio id="cpf_radio" name="user_type" value="0" label="Pessoa física"/>
                    <x-inputRadio id="cnpj_radio" name="user_type" value="1" label="Pessoa jurídica"/>
                </div>
            </div>
            <!-- Nome -->
            <div class="mt-8 md:ml-6">
                <x-label for="name">Nome</x-label>
                <x-input id="name" class="block mt-1 w-full" type="name" name="name" :value="old('name')" required
                         autofocus/>
            </div>
            <!-- Email -->
            <div class="mt-8">
                <x-label for="email">Email</x-label>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                         autofocus/>
            </div>
            <!-- Password -->
            <div class="mt-8 md:ml-6">
                <x-label for="password">Senha</x-label>
                <x-input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required autocomplete="current-password"/>
            </div>
            <!-- Cpj/Cnpj -->
            <div class="mt-8">
                <x-label for="document">CPF</x-label>
                <x-input id="document" class="block mt-1 w-full"
                         type="text" maxlength="17"
                         name="document" onkeypress="mask(this,cpfCnpj)"/>
            </div>
            <!-- RG -->
            <div class="mt-8 md:ml-6">
                <x-label for="rg">RG</x-label>
                <x-input id="rg" class="block mt-1 w-full" type="text" name="rg" :value="old('rg')"/>
            </div>
            <!-- Phone -->
            <div class="mt-8">
                <x-label for="phone">Celular</x-label>
                <x-input id="phone" class="block mt-1 w-full"
                         type="text" onkeydown="mask(this, telefone)" maxlength="15"
                         name="phone" :value="old('phone')"/>
            </div>
            <!-- Identification -->
            <div class="mt-8 md:ml-6">
                <x-label for="file">Identificação</x-label>
                <input id="file" type="file" name="file" class="rounded-lg bg-gray-900 text-white py-1 px-2 mt-1"/>
            </div>
        </div>
        <x-button class="mt-10 ml-2 md:ml-0">Criar</x-button>
    </form>
    <script>
        function mask(objeto, mascara) {
            obj = objeto
            masc = mascara
            setTimeout("maskEx()", 1)
        }

        function maskEx() {
            obj.value = masc(obj.value)
        }

        function telefone(tel) {
            tel=tel.replace(/\D/g,"");
            tel=tel.replace(/^(\d{2})(\d)/g,"($1) $2");
            tel=tel.replace(/(\d)(\d{4})$/,"$1-$2");
            return tel;
        }

            function cpfCnpj(v) {
                //Remove tudo o que não é dígito
                v = v.replace(/\D/g, "")
                if (v.length <= 13) { //CPF
                    //Coloca um ponto entre o terceiro e o quarto dígitos
                    v = v.replace(/(\d{3})(\d)/, "$1.$2")

                    //Coloca um ponto entre o terceiro e o quarto dígitos
                    //de novo (para o segundo bloco de números)
                    v = v.replace(/(\d{3})(\d)/, "$1.$2")

                    //Coloca um hífen entre o terceiro e o quarto dígitos
                    v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2")
                } else { //CNPJ
                    //Coloca ponto entre o segundo e o terceiro dígitos
                    v = v.replace(/(\d{2})(\d)/, "$1.$2")

                    //Coloca ponto entre o bloco terceiro e quarto dígitos
                    v = v.replace(/(\d{3})(\d)/, "$1.$2")

                    // Coloca uma barra entre o bloco terceiro e quarto dígitos
                    v = v.replace(/(\d{3})(\d)/, "$1/$2")

                    // Coloca um hífen depois do bloco de quatro dígitos
                    v = v.replace(/(\d{4})(\d)/, "$1-$2")
                }
                return v
            }

            const cpfRadio = document.querySelector('#cpf_radio');
            const cnpjRadio = document.querySelector('#cnpj_radio');

            cpfRadio.addEventListener('click', () => {
                if (cpfRadio.checked == true) {
                    document.querySelector('label[for="document"]').innerHTML = 'CPF'
                }
            })
            cnpjRadio.addEventListener('click', () => {
                if (cnpjRadio.checked == true) {
                    document.querySelector('label[for="document"]').innerHTML = 'CNPJ'
                }
            })
    </script>
</x-app-layout>

