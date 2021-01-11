{{-- Credit: https://scrimba.com/learn/alpinejs --}}

{{-- 
    starting point
    
    <body class="text-gray-800">
    <div class="container mx-auto px-2 py-2">
        <h2 class="text-2xl font-bold">FAQs</h2>
        <div class="leading-loose text-lg mt-6">
            <div>
                <button                        
                    class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4"
                >
                    <div>Question 1 goes here</div>
                    <svg class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                    <svg class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                </button>
                
                <div
                    class="text-gray-700 text-sm mt-2"                        
                >
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro amet repellat recusandae, dolorem, vitae minima eveniet, molestias quia praesentium.
                </div>
            </div>
            <div>
                <button                        
                    class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4"
                >
                    <div>Question 2 goes here</div>
                    <svg class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                    <svg class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                </button>
                
                <div
                    class="text-gray-700 text-sm mt-2"                        
                >
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro amet repellat recusandae, dolorem, vitae minima eveniet, molestias quia praesentium.
            </div>
            <div>
                <button                        
                    class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4"
                >
                    <div>Question 3 goes here</div>
                    <svg class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                    <svg class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                </button>
                
                <div
                    class="text-gray-700 text-sm mt-2"                        
                >
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro amet repellat recusandae, dolorem, vitae minima eveniet, molestias quia praesentium.
                </div>
            </div>
        </div>
    </div> 
    
    --}}
  


        <div class="container mx-auto px-2 py-2" x-data="{
            faqs: [
                {
                    question: 'Why do I need Alpine JS?',
                    answer: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores iure quas laudantium dicta impedit, est id delectus molestiae deleniti enim nobis rem et nihil.', 
                    isOpen: true,
                },
                {
                    question: 'Why am I so awesome?',
                    answer: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi cumque, nulla harum aspernatur veniam ullam provident neque temporibus autem itaque odit.',
                    isOpen: true,
                },
                {
                    question: 'Why learn on Scrimba?',
                    answer: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi cumque, nulla harum aspernatur veniam ullam provident neque temporibus autem itaque odit.',
                    isOpen: true,
                },
                {
                    question: 'Terms and Conditions',
                    answer: 'By reading this, you agree that coding is fun.',
                    isOpen: false,
                },
            ]
        }">
            <h2 class="text-2xl font-bold">FAQs</h2>
            <div class="leading-loose text-lg mt-6">
                <template x-for="faq in faqs" :key="faq.question">
                    <div>
                        <button                        
                            class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4"
                            @click="faq.isOpen = !faq.isOpen"
                        >
                            <div x-text="faq.question"></div>
                            <svg x-show="!faq.isOpen" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                            <svg x-show="faq.isOpen" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                        </button>
                        
                        <div
                            class="text-gray-700 text-sm mt-2"                        
                            x-text="faq.answer"
                            x-show="faq.isOpen"
                        ></div>
                    </div>
                </template>
                
            </div>
        </div>
