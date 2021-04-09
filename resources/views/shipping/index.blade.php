
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-red-500 leading-tight">
            {{ __('messages.Shipping') }}
        </h2>
    </x-slot>

    @livewire('shipping-companies-component', [], key(1))
</x-app-layout>
