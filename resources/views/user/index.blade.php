<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-red-500 text-uppercase leading-tight">
            {{ __('messages.Users') }}
        </h2>
    </x-slot>

    @livewire('user-component', [], key(1))
</x-app-layout>
