<div x-data="{
    name : @entangle('name').live,
}">

<div class="flex space-x-5">
    <button wire:click="decrement">
        -
    </button>

    <h1> {{ $count }}</h1>

    <button wire:click="increment">
        +
    </button>
    {{-- The best athlete wants his opponent at his best. --}}
</div>

<input type="text" x-model="name">


</div>

