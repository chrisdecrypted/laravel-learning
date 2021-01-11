{{-- Credit: https://scrimba.com/learn/alpinejs --}}

{{--
    starting point
    
    
    <div class="container mx-auto px-4">
    <div class="flex items-center text-center justify-center h-screen text-2xl italic">
            Quote goes here
        </div>            
    </div> 

--}}

<div x-data="{ quote:'' }" 
        x-init="
            fetch('https://api.kanye.rest')
            .then(response => response.json())
            .then(data => quote = data.quote)" 
        class="container mx-auto px-4">

    <div class="flex items-center text-center justify-center h-screen text-2xl italic" x-text="`&quot;${quote}&quot; - Kanye West`"></div>            

</div> 