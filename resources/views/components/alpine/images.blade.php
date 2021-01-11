{{-- Credit: https://scrimba.com/learn/alpinejs --}}

<html>
    <head>
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.9.8/dist/alpine.js" defer></script>
    </head>
    <body class="bg-gray-400">
        <div class="container mx-auto px-4 mt-4" x-data="{ image: 'image1' }">
            <div>
                <img class="h-72" src="https://www.digitalartsonline.co.uk/cmsdata/features/3697652/mac-pro-back.jpg" alt="mac pro" x-show="image === 'image1'">
                <img class="h-72" src="https://www.bhphotovideo.com/images/images2500x2500/apple_32_pro_display_xdr_1527824.jpg" alt="pro display xdr" x-show="image === 'image2'">
                <img class="h-72" src="https://cdn.slashgear.com/wp-content/uploads/2020/05/apple-macbook-pro-16-inch-01-1280x720.jpg" alt="macbook pro" x-show="image === 'image3'">
            </div>
            <div class="flex items-center mt-4">
                <a href="#" class="border border-transparent hover:border-blue-500" 
                {{-- create active style for selected tab --}}
                :class="{ 'border-blue-500' : image === 'image1'}"
                @click.prevent="image = 'image1'"><img src="https://www.digitalartsonline.co.uk/cmsdata/features/3697652/mac-pro-back.jpg" alt="mac pro" class="w-12"></a>

                <a href="#" class="border border-transparent hover:border-blue-500 ml-2" 
                :class="{ 'border-blue-500' : image === 'image2'}"
                @click.prevent="image = 'image2'"><img src="https://www.bhphotovideo.com/images/images2500x2500/apple_32_pro_display_xdr_1527824.jpg" alt="pro display xdr" class="w-12"></a>

                <a href="#" class="border border-transparent hover:border-blue-500 ml-2" 
                :class="{ 'border-blue-500' : image === 'image3'}"
                @click.prevent="image = 'image3'"><img src="https://cdn.slashgear.com/wp-content/uploads/2020/05/apple-macbook-pro-16-inch-01-1280x720.jpg" alt="macbook pro" class="w-12"></a>
            </div>
        </div>
    </body>
</html>