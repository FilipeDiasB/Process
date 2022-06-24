<x-app-layout>
    <x-title>Cadastro empresa</x-title>
    <x-auth-validation-errors/>
    <p class="mb-10 font-semibold text-xl ml-2">Cadastrar Empresa</p>
    <form method="POST" action="{{ route('empresa.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 p-3 md:p-0">
            <!-- Razão social -->
            <div class="mt-8">
                <x-label for="name">Razão social</x-label>
                <x-input id="company_name" class="block mt-1 w-full" type="name" name="name" :value="old('name')" required
                         autofocus/>
            </div>
            <!-- Nome fantasia -->
            <div class="mt-8 md:ml-6">
                <x-label for="trading_name">Nome fantasia</x-label>
                <x-input id="trading_name" class="block mt-1 w-full" type="text" name="trading_name" :value="old('trading_name')" required
                         autofocus/>
            </div>
            <!-- CNPJ -->
            <div class="mt-8">
                <x-label for="document">CNPJ</x-label>
                <x-input id="document" class="block mt-1 w-full"
                         type="text" maxlength="18"
                         name="document" onkeypress="mask(this,cnpj)"/>
            </div>
            <!-- Phone -->
            <div class="mt-8 md:ml-6">
                <x-label for="phone">Telefone de contato</x-label>
                <x-input id="phone" class="block mt-1 w-full"
                         type="text" onkeydown="mask(this, telefone)" maxlength="15"
                         name="phone" :value="old('phone')"/>
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
            tel = tel.replace(/\D/g, "");
            tel = tel.replace(/^(\d{2})(\d)/g, "($1) $2");
            tel = tel.replace(/(\d)(\d{4})$/, "$1-$2");
            return tel;
        }

        function cnpj(v) {
            //CNPJ
            v = v.replace(/\D/g, "")
            //Coloca ponto entre o segundo e o terceiro dígitos
            v = v.replace(/(\d{2})(\d)/, "$1.$2")

            //Coloca ponto entre o bloco terceiro e quarto dígitos
            v = v.replace(/(\d{3})(\d)/, "$1.$2")

            // Coloca uma barra entre o bloco terceiro e quarto dígitos
            v = v.replace(/(\d{3})(\d)/, "$1/$2")

            // Coloca um hífen depois do bloco de quatro dígitos
            v = v.replace(/(\d{4})(\d)/, "$1-$2")

            return v
        }
    </script>
</x-app-layout>

