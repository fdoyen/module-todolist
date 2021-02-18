@if(isset($todo))

<form style="display: inline-block;" method="POST" action="/todo/update/{{$todo->id}}">
    @method('put')
    @csrf
    <input type="text" name="user_id" value="{{$todo->user_id}}" />
    <input type="text" name="name" value="{{$todo->name}}" />
    <input type="text" name="description" value="{{$todo->description}}" />
    <button type="submit">Update</button>
</form>

@else

<form style="display: inline-block;" method="POST" action="/todo/create">
    <input type="text" name="user_id" />
    <input type="text" name="name" />
    <input type="text" name="description" />
    @csrf
    <button type="submit">Create</button>
</form>

@endif