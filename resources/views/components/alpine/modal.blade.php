<html>
    <head>
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.9.8/dist/alpine.js" defer></script>
    </head>
    <body class="bg-gray-400">
        <div class="container mx-auto px-4 xl:px-64 mt-12 mb-12">
            <h2 class="text-2xl font-bold">Modal</h2>

            <div x-data="{ isOpen: false }">
                <button
                    @click="isOpen = true
                    $nextTick(() => $refs.modalCloseButton.focus())"  

                    class="bg-blue-700 text-white px-4 py-3 mt-4 text-sm rounded"  
              
                >
                    Open Modal
                </button>

                <div
                    x-show = "isOpen"
                    style="background-color: rgba(0, 0, 0, .5)" 
                    class="mx-auto absolute top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"          
                >
                    <div class="container mx-auto rounded p-4 mt-2 overflow-y-auto">
                        <div class="bg-white rounded px-8 py-8">
                            <h1 class="font-bold text-2xl mb-3">Modal Title</h1>
                            <div class="modal-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro amet repellat recusandae.</p>      
                            </div>
                            <div class="mt-4">
                                <button 
                                @click="isOpen = false"
                                {{-- x-ref enables us to make a reference to a dom node --}}
                                {{-- we will call it above in a nextTick() function --}}
                                x-ref="modalCloseButton" 
                                class="bg-blue-700 text-white px-4 py-3 mt-4 text-sm rounded">Close Modal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>