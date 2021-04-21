{{--
@extends("masterdash")

@section("content")
@livewire('cart-component', [], key(1))
@endsection --}}


<x-guestuser-layout>
    @livewire('cart-component', [], key(1))
</x-guestuser-layout>
