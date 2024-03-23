<div x-data="{ open: false }" class="flex flex-col">
    <div
        class="relative overflow-hidden rounded-2xl bg-white pb-56 pt-12 shadow-lg lg:absolute lg:bottom-8 lg:left-8 lg:right-8 lg:top-8 lg:pb-12">
        <div class="absolute left-4 top-4">
            <a href="https://instagram.com/magdalenasthings" target="_blank" class="text-secondary">
                <x-fab-instagram class="size-8" />
            </a>
        </div>

        <div class="relative z-10 px-4 sm:px-0">
            <div class="flex justify-center py-6">
                <img class="size-14 rounded-full object-cover" src="/logo.jpg" alt="Logo" />
            </div>

            <div class="flex justify-center py-4">
                <h1 class="text-center text-4xl font-bold tracking-tight text-secondary">
                    Dein neuer Pflanzenshop entsteht hier
                </h1>
            </div>

            <div class="flex flex-col items-center py-6 text-lg">
                <p class="mb-4 max-w-lg text-center">
                    Verwandle auch dein zu Hause in einen Dschungel. In unserem handverlesenen Sortiment findet
                    jeder
                    seine neue Lieblingspflanze.
                </p>
                <p class="max-w-lg text-center">
                    Registriere dich jetzt um als Erster informiert zu werden wenn unser
                    Online-Shop für Zimmerpflanzen eröffnet.
                </p>
            </div>

            <div class="flex justify-center py-4">
                <button type=button @click="open = true"
                    class="inline-flex transform rounded-full bg-primary px-6 py-2 font-semibold text-white transition duration-150 ease-in-out sm:px-8 sm:py-4 sm:hover:-translate-y-1 sm:hover:scale-110 sm:active:translate-y-0">
                    Jetzt registrieren
                </button>
            </div>
        </div>


        <img src="/element-monstera.png" alt="background" class="absolute bottom-0 z-0 w-1/3 md:w-56 lg:w-96">
    </div>

    <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-50 flex items-center justify-center overflow-auto bg-primary bg-opacity-50"
        @click.away="open = false" x-cloak>

        <div x-show="open" x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            class="mx-3 w-full max-w-md transform overflow-hidden rounded-xl bg-white shadow-xl transition-all md:max-w-2xl"
            @click.away="open = false" x-cloak>

            <div class="flex flex-col bg-white md:flex-row">
                <div class="md:size-72 h-72 w-full overflow-hidden">
                    <img src="/modal.webp" alt="Modal Image" class="object-none object-center" loading="lazy">
                </div>

                <div class="flex-1 px-6 py-8">
                    <div class="mb-2">
                        <h3 class="mb-2 text-2xl font-semibold text-primary">
                            Registriere dich
                        </h3>
                        <p>
                            Und erhalte direkt eine E-Mail, sobald unser Shop online geht.
                        </p>
                    </div>


                    @if (session('success'))
                        <div
                            class="[&>svg]:text-foreground relative w-full rounded-lg border border-transparent bg-green-50 p-4 text-green-600 [&:has(svg)]:pl-11 [&>svg+div]:translate-y-[-3px] [&>svg]:absolute [&>svg]:left-4 [&>svg]:top-4">
                            <svg class="h-5 w-5 -translate-y-0.5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                            <h5 class="mb-1 font-medium leading-none tracking-tight">
                                Erfolgreich angemeldet 🎉
                            </h5>

                            <div class="text-sm opacity-80">
                                Du erhältst als Erster eine E-Mail, sobald unser Shop online geht.
                            </div>
                        </div>
                    @else
                        <form wire:submit="save">
                            <div class="py-4">
                                <input type="text" id="email" name="email" wire:model="email"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                    placeholder="deine@email.ch" required />

                                @error('email')
                                    <span class="text-red-400">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex justify-end">
                                <button type="submit"
                                    class="focus:shadow-outline inline-flex items-center justify-center rounded-full bg-neutral-950 px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 hover:bg-neutral-900 focus:outline-none focus:ring-2 focus:ring-neutral-900 focus:ring-offset-2">
                                    Jetzt registrieren
                                </button>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
