{{-- Credit: https://scrimba.com/learn/alpinejs --}}


{{-- This example expands upon other examples --}}
{{-- We will need to manage state for each tab and the current tab should have an active state --}}
{{-- We have to set an event listener for each of the tabs --}}

<div class="container mx-auto p-4 mb-4" x-data="{ tab: 'tab1' }">
            <h2 class="text-2xl font-bold">Tabs</h2>
            <ul class="flex border-b mt-6" >
                <li class="-mb-px mr-1">
                    <a
                        class="inline-block rounded-t py-2 px-4 font-semibold hover:text-blue-800 bg-white"
                        {{-- conditional class rendering for active tabs --}}
                        :class="{ 'text-blue-700 border-l border-t border-r' : tab === 'tab1' }"  
                        href="#"   
                        @click.prevent=" tab ='tab1' "                      
                    >Tab 1</a>
                </li>
                <li class="-mb-px mr-1">
                    <a
                        class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold"
                        :class="{ 'text-blue-700 border-l border-t border-r' : tab === 'tab2' }"  
                        href="#"
                        @click.prevent=" tab ='tab2' "                      

                    >Tab 2</a
                    >
                </li>
                <li class="-mb-px mr-1">
                    <a
                        class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold"
                        :class="{ 'text-blue-700 border-l border-t border-r' : tab === 'tab3' }"  

                    href="#" 
                    @click.prevent=" tab ='tab3' "                      
                    >Tab 3</a
                    >
                </li>
            </ul>
            <div class="content bg-white px-4 py-4 border-l border-r border-b pt-4">
                <div x-show="tab === 'tab1'">
                    Tab1 content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sunt, consectetur eos quod perferendis mollitia consequuntur natus, porro molestiae qui iusto deserunt rerum tempore voluptatum itaque. Ad, nisi esse cum quidem consequuntur ullam obcaecati.
                </div>
               
                <div x-show="tab === 'tab2'">
                    Tab2 content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sunt, consectetur eos quod perferendis mollitia consequuntur natus, porro molestiae qui iusto deserunt rerum tempore voluptatum itaque. Ad, nisi esse cum quidem consequuntur ullam obcaecati.
                </div>

                <div x-show="tab === 'tab3'">
                    Tab3 content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sunt, consectetur eos quod perferendis mollitia consequuntur natus, porro molestiae qui iusto deserunt rerum tempore voluptatum itaque. Ad, nisi esse cum quidem consequuntur ullam obcaecati.
                </div>
            </div>
        </div>
        