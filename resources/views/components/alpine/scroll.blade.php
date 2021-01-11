{{-- Credit: https://scrimba.com/learn/alpinejs --}}

<div class="bg-gray-900" x-data="{ atTop: true}"> 
            {{-- add state to our parent --}}
 
 
            {{-- create a nav that is transparent until the user scrolls, then the style changes to a colored background --}}
            <nav class="p-4 w-full fixed" 
            :class="{ 'bg-gray-500 shadow-md p-16' : !atTop} "
            @scroll.window="atTop = (window.pageYOffset > 20) ? false : true"
            {{-- The class will change when the event condition is met. --}}
            >
                Top Nav goes here
            </nav>        
            <div class="container mx-auto h-32 w-48 p-4 pt-16">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. In maxime, enim omnis consequatur ratione odio voluptas pariatur nam recusandae, quidem ducimus placeat consectetur voluptate nostrum sit cupiditate animi atque, est fugiat ullam excepturi. Harum delectus voluptates fugit quibusdam aut magnam commodi autem cumque alias, rerum dolorum aperiam. Tempora explicabo sit rerum inventore et minima beatae assumenda vero ducimus eligendi. Doloremque nam, magnam, omnis natus vero debitis ducimus, laudantium mollitia possimus enim recusandae tempora cum amet. Mollitia eaque fuga maiores culpa in vero error quaerat ab, alias quam dicta eligendi magni voluptas dolorem consectetur perferendis praesentium modi, officiis quo distinctio facere ea! Vel, iste ratione veniam laudantium dolorum facere nulla laboriosam molestias vero quisquam eaque id necessitatibus omnis? Ducimus adipisci aperiam illo reiciendis molestias! Sequi placeat error in quasi temporibus quae non itaque ipsam, cupiditate eos, quas vel, velit veritatis labore, esse aut atque dolorum maxime perferendis enim ullam. Dolorum suscipit accusamus dignissimos eos odit consequuntur, corrupti ex dolore, inventore ab. Debitis deserunt, commodi enim! Nihil modi optio recusandae soluta incidunt enim placeat reprehenderit nam totam impedit qui minus, dolorum harum neque laudantium, facilis culpa omnis nesciunt eius mollitia! Vitae, modi deleniti porro fuga doloribus facilis voluptas eaque dicta unde molestias.
            </div>
        
        </div>