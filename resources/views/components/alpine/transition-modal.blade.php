{{-- Credit: https://scrimba.com/learn/alpinejs --}}

    <body class="bg-gray-400">
        <div class="container mx-auto px-4 xl:px-64 mt-12 mb-12">
            <h2 class="text-2xl font-bold">Modal</h2>

            <div x-data="{ isOpen: false }">
                <button
                    class="bg-blue-700 text-white px-4 py-3 mt-4 text-sm rounded"    
                    @click="isOpen = true
                    $nextTick(() => $refs.modalCloseButton.focus())
                    "               
                >
                    Open Modal
                </button>

                <div
                    style="background-color: rgba(0, 0, 0, .7)" 
                    class="mx-auto absolute top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"   
                    x-show="isOpen"       
                    x-transition:enter="transition ease-out duration-1000"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-out duration-1000"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"    
                >
                    <div class="container mx-auto rounded p-4 mt-2 overflow-y-auto">
                        <div class="bg-white rounded px-8 py-8">
                            <h1 class="font-bold text-2xl mb-3">Modal Title</h1>
                            <div class="modal-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro amet repellat recusandae.</p>      
                            </div>
                            <div class="mt-4">
                                <button 
                                    class="bg-blue-700 text-white px-4 py-3 mt-4 text-sm rounded"
                                    @click="isOpen = false"
                                    x-ref="modalCloseButton"
                                >
                                    Close Modal
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
