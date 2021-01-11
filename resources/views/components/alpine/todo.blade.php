{{-- Credit: https://scrimba.com/learn/alpinejs --}}

{{-- Starting point  --}}
{{-- <body class="bg-gray-400 text-gray-800">
    <div class="container mx-auto max-w-sm px-4 my-4">
            <div class="bg-white shadow-md rounded px-6 py-4">
                <h2 class="text-2xl font-bold">Todo App</h2>
                
                <div class="mt-4 mb-6">
                    <input type="text" class="shadow w-full px-2 py-2">
                </div>
                
                <ul class="mb-6">
                    <li class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input type="checkbox">
                            <div class="ml-3">Finish Alpine Screencast</div>
                        </div>
                        <button class="text-xl ml-2">&times;</button>
                    </li>
                    <li class="flex items-center justify-between mt-4">
                        <div class="flex items-center">
                            <input type="checkbox">
                            <div class="ml-3 line-through">Learn on Scrimba</div>
                        </div>
                        <button class="text-xl ml-2">&times;</button>
                    </li>
                    <li class="flex items-center justify-between mt-4">
                        <div class="flex items-center">
                            <input type="checkbox">
                            <div class="ml-3">Take over world</div>
                        </div>
                        <button class="text-xl ml-2">&times;</button>
                    </li>
                  
                </ul>
                    
            </div>
        </div> --}}

<body class="bg-gray-400 text-gray-800">
    <div class="container mx-auto max-w-sm px-4 my-4" x-data="todos()">
        <div class="bg-white shadow-md rounded px-6 py-4">
            <h2 class="text-2xl font-bold">Todo App</h2>
            
            <div class="mt-4 mb-6">
                <input 
                    type="text" 
                    class="shadow w-full px-2 py-2" 
                    x-model="todoTitle"
                    @keydown.enter="addTodo()"
                >
            </div>
            
            <ul class="mb-6">
                <template x-for="todo in todos" :key="todo.id">
                    <li class="flex items-center justify-between mt-3">
                        <div class="flex items-center" :class="{ 'line-through' : todo.isComplete }">
                            <input type="checkbox" x-model="todo.isComplete">
                            <div class="ml-3" x-text="todo.title"></div>
                        </div>
                        <button class="text-xl ml-2" @click="deleteTodo(todo.id)">&times;</button>
                    </li>     
                </template>                                
            </ul>
                
        </div>
    </div>
    <script>
        function todos() {
            return {
                todos: [{
                    id: 1,
                    title: 'Finish Alpine Screencast',
                    isComplete: false,
                }],
                todoTitle: '',
                todoId: 2,
                addTodo() {
                    if (this.todoTitle.trim() === '') {
                        return;
                    }
                    
                    this.todos.push({
                        id: this.todoId,
                        title: this.todoTitle,
                        isComplete: false,
                    })
                    
                    this.todoId++;
                    this.todoTitle = '';
                },
                deleteTodo(id) {
                    this.todos = this.todos.filter(todo => id !== todo.id);
                }
            }
        }
    </script>
</body>
