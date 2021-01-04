<html>
    <head>
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.9.8/dist/alpine.js" defer></script>
    </head>
    <body class="bg-gray-400">
        <div class="container mx-auto px-4 mt-4" x-data="{ image: 'image1' }">
            <div>
                <img src="/mac-pro.jpg" alt="mac pro" x-show="image === 'image1'">
                <img src="/pro-display-xdr.jpg" alt="pro display xdr" x-show="image === 'image2'">
                <img src="/macbook-pro.jpg" alt="macbook pro" x-show="image === 'image3'">
            </div>
            <div class="flex items-center mt-4">
                <a href="#" class="border border-transparent hover:border-blue-500" 
                {{-- create active style for selected tab --}}
                :class="{ 'border-blue-500' : image === 'image1'}"
                @click.prevent="image = 'image1'"><img src="/mac-pro.jpg" alt="mac pro" class="w-12"></a>

                <a href="#" class="border border-transparent hover:border-blue-500 ml-2" 
                :class="{ 'border-blue-500' : image === 'image2'}"
                @click.prevent="image = 'image2'"><img src="/pro-display-xdr.jpg" alt="pro display xdr" class="w-12"></a>

                <a href="#" class="border border-transparent hover:border-blue-500 ml-2" 
                :class="{ 'border-blue-500' : image === 'image3'}"
                @click.prevent="image = 'image3'"><img src="/macbook-pro.jpg" alt="macbook pro" class="w-12"></a>
            </div>
        </div>
    </body>
</html>