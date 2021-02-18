@isset($message)
    {{$message}}
@endisset

coucou, voici la liste des todo :

<form style="display: inline-block;" method="GET" action="/todo/form">
        <button type="submit">New</button>
        @csrf
</form>
@foreach($todo as $t)
    @include('todo::components.todo', ['todo' => $t])
@endforeach