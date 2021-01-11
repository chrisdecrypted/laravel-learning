{{-- Credit: https://codewithhugo.com/alpinejs-x-for-with-objects/ --}}

<div>
    <h1>Raw JSON:</h1> 
    <br>
    <code>todos: {
        <br> 1: { id: 1, text: 'todo-1' },
        <br>  2: { id: 2, text: 'todo-2' }
        <br>  }</code>
</div>
<br><br>
{{-- Iterate through id's  --}}
<div
  x-data="{
    todos: {
      1: { id: 1, text: 'todo-1' },
      2: { id: 2, text: 'todo-2' }
    }
  }"
>
  <h3>Only need the keys/ids - use <code>Object.keys</code></h3>
  <ul>
    <template x-for="id in Object.keys(todos)" :key="id">
      <li>id: <span x-text="id"></span></li>
    </template>
  </ul>

</div>
<br><br>

{{-- Iterate through text  --}}

<div
  x-data="{
    todos: {
      1: { id: 1, text: 'todo-1' },
      2: { id: 2, text: 'todo-2' }
    }
  }"
>
  <h3>Need keys/ids and values - use <code>Object.entries</code></h3>
    <template
      x-for="[id, value] in Object.entries(todos)"
      :key="id"
    >
    <ul>
        <li :value="id" x-text="value.text"></li>
    </ul>
    </template>
</div>
