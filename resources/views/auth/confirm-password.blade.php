<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div>
            <x-input-label for="password" :value="__('Password')" />

            <div class="flex items-center mt-1">
                <input
                    id="password"
                    class="block w-full border-gray-300 rounded-md shadow-sm"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                >

                <button
                    type="button"
                    id="togglePassword"
                    class="ml-2 px-3 py-2 text-gray-600"
                >
                    👁️
                </button>
            </div>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            const password = document.getElementById('password');

            if (password.type === 'password') {
                password.type = 'text';
            } else {
                password.type = 'password';
            }
        });
    </script>
</x-guest-layout>
