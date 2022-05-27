<x-app-layout>
    <div class="grid grid-cols-2">
        <div>
            <x-label for="email" :value="__('Email')"/>

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                     autofocus/>
        </div>

        <!-- Password -->
        <div class="ml-6">
            <x-label for="password" :value="__('Password')"/>

            <x-input id="password" class="block mt-1 w-full"
                     type="password"
                     name="password"
                     required autocomplete="current-password"/>
        </div>
    </div>
</x-app-layout>
