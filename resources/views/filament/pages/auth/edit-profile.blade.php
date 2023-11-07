    {{-- <x-slot name="subheading">
        {{ $this->backAction }}
    </x-slot> --}}

    <div>
        <header class="fi-simple-header py-8">
            <h1 class="fi-header-herading text-2xl font-bold trackin-tight text-gray-950 dark:text-white sm:text-3xl">
                Meu perfil
            </h1>
            <p class="fi-simple-header-subheading mt-2 text-left text-sm text-gray-500 dark:text-gray-400">
                Gerencie seu perfil de usuário aqui
            </p>
        </header>


        <x-filament-panels::form wire:submit="save">
            {{ $this->form }}
    
            <x-filament-panels::form.actions
                :actions="$this->getCachedFormActions()"
                :full-width="$this->hasFullWidthFormActions()"
                alignment="right"
            />
        </x-filament-panels::form>
    </div>
