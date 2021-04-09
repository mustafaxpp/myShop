
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-red-500 leading-tight">
            {{ __('messages.Payment') }}
        </h2>
    </x-slot>

    @livewire('payment-method-component', [], key(1))
</x-app-layout>
