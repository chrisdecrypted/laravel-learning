{{-- Credit: https://scrimba.com/learn/alpinejs --}}

<div x-data="{ isOpen: false }">
    {{-- x-data sets the default state of isOpen --}}
    <button class="bg-gray-300 p-3 rounded-md" @click=" isOpen = !isOpen">
        {{-- @click or x-on:click flips state from isOpen to !isOpen --}}
        Toggle
    </button>
    <h1 x-show="isOpen">
        This is some text.
    </h1>
    {{-- x-show sets the state of isOpen to true --}}
</div>