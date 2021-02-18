
<div>
    [{{$todo->id}}]<strong>{{$todo->name}}</strong> - {{ $todo->description }}
    <form style="display: inline-block;" method="GET" action="/todo/form/{{$todo->id}}">
        <button type="submit">Update</button>
        @method('put')
        @csrf
    </form>
    <form style="display: inline-block;" method="POST" action="/todo/delete/{{$todo->id}}">
        <button type="submit">Delete</button>
        @method('delete')
        @csrf
    </form>

</div>