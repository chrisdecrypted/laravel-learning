@props([
    'type' => 'success',
    'colors' => [
        'success' => 'bg-green-400',
        'warning' => 'bg-orange-400',
        'error' => 'bg-red-400'
    ]  
])

<section {{ $attributes->merge(['class'=>"{$colors[$type]} border-b p-4"]) }}>
    <div class="flex justify-between">
        <p>
            {{ $slot }}
        </p>
        <button>&times;</button>

    </div>
</section>

<?php
/*
    This is the starting point for our flash message component.


<div>
    <section class="bg-green-400 p-4">
        <div class="flex justify-between">
        <p>
            You are now logged out!
        </p>

        <button>&times;</button>
    </div>
    </section>
</div>




Add a ternary operator to match a type 
<div>
    <section class="{{ $type === 'success' ? 'bg-green-400' : 'bg-red-400'}} p-4">
        <div class="flex justify-between">
        <p>
            {{ $slot }}
        </p>

        <button>&times;</button>
    </div>
    </section>
</div>



@props([
    'type' => 'success',
    'colors' => [
        'success' => 'bg-green-400',
        'warning' => 'bg-orange-400',
        'error' => 'bg-red-400'
    ]  
])

<section class="{{ $colors[$type] }} p-4">
    <div class="flex justify-between">
        <p>
            {{ $slot }}
        </p>
        <button>&times;</button>

    </div>
</section>

*/?>