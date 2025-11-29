<x-layouts.auth>
    <div class="flex flex-col gap-6">
        <x-auth-header
            :title="__('Log in to your account')"
            :description="__('Enter your email and password below to log in')"
        />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        {{-- INICIO DE SESIÓN CON REDES SOCIALES --}}
        <div class="space-y-3">
            <p class="text-[11px] uppercase tracking-[0.18em] text-zinc-500 dark:text-zinc-400 text-center">
                {{ __('O INICIA SESIÓN CON ') }}
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-2">
                {{-- Google --}}
                <a
                    href="#" {{-- ajusta esta ruta --}}
                    class="inline-flex items-center justify-center gap-2 rounded-full border border-zinc-200 dark:border-zinc-700
                           bg-white/80 dark:bg-zinc-900/80 px-4 py-2 text-xs font-medium
                           text-zinc-800 dark:text-zinc-100 hover:border-indigo-400 hover:bg-zinc-50
                           dark:hover:bg-zinc-800 transition-colors"
                >
                    <span class="inline-flex h-5 w-5 items-center justify-center rounded-full bg-white">
                        <span class="text-[11px] font-semibold text-zinc-700">G</span>
                    </span>
                    <span>Google</span>
                </a>

                {{-- Facebook --}}
                <a
                    href="#" {{-- ajusta esta ruta --}}
                    class="inline-flex items-center justify-center gap-2 rounded-full border border-zinc-200 dark:border-zinc-700
                           bg-white/80 dark:bg-zinc-900/80 px-4 py-2 text-xs font-medium
                           text-zinc-800 dark:text-zinc-100 hover:border-indigo-400 hover:bg-zinc-50
                           dark:hover:bg-zinc-800 transition-colors"
                >
                    <span class="inline-flex h-5 w-5 items-center justify-center rounded-full bg-[#1877F2]">
                        <span class="text-[11px] font-semibold text-white">f</span>
                    </span>
                    <span>Facebook</span>
                </a>

                {{-- Microsoft (opcional) --}}
                <a
                    href="#" {{-- opcional --}}
                    class="inline-flex items-center justify-center gap-2 rounded-full border border-zinc-200 dark:border-zinc-700
                           bg-white/80 dark:bg-zinc-900/80 px-4 py-2 text-xs font-medium
                           text-zinc-800 dark:text-zinc-100 hover:border-indigo-400 hover:bg-zinc-50
                           dark:hover:bg-zinc-800 transition-colors"
                >
                    <span class="inline-flex h-5 w-5 items-center justify-center rounded-[4px] bg-white border border-zinc-200">
                        <span class="text-[9px] font-semibold text-zinc-700">■</span>
                    </span>
                    <span>Microsoft</span>
                </a>
            </div>
        </div>

        {{-- FORMULARIO CLÁSICO --}}
        <form method="POST" action="{{ route('login.store') }}" class="flex flex-col gap-6">
            @csrf

            <!-- Email Address -->
            <flux:input
                name="email"
                :label="__('Email address')"
                :value="old('email')"
                type="email"
                required
                autofocus
                autocomplete="email"
                placeholder="email@example.com"
            />

            <!-- Password -->
            <div class="relative">
                <flux:input
                    name="password"
                    :label="__('Password')"
                    type="password"
                    required
                    autocomplete="current-password"
                    :placeholder="__('Password')"
                    viewable
                />

                @if (Route::has('password.request'))
                    <flux:link class="absolute top-0 text-sm end-0" :href="route('password.request')" wire:navigate>
                        {{ __('Forgot your password?') }}
                    </flux:link>
                @endif
            </div>

            <!-- Remember Me -->
            <flux:checkbox name="remember" :label="__('Remember me')" :checked="old('remember')" />

            <div class="flex items-center justify-end">
                <flux:button variant="primary" type="submit" class="w-full" data-test="login-button">
                    {{ __('Log in') }}
                </flux:button>
            </div>
        </form>

        @if (Route::has('register'))
            <div class="space-x-1 text-sm text-center rtl:space-x-reverse text-zinc-600 dark:text-zinc-400">
                <span>{{ __('Don\'t have an account?') }}</span>
                <flux:link :href="route('register')" wire:navigate>{{ __('Sign up') }}</flux:link>
            </div>
        @endif
    </div>
</x-layouts.auth>
