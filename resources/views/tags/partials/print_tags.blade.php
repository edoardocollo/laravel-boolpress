<button class="btn btn-success" type="button" name="button">
<a href="{{route('tags.create')}}">aggiungi tag</a>
</button>
<table class="table table-striped">
<thead>
<tr>
  <th>tag</th>
  <th>descrizione</th>
  <th>id</th>
</tr>
</thead>
<tbody>
@foreach ($tags as $tag)

  <tr>
    <td>{{$tag->tag}}</td>
    <td>{{$tag->descrizione}}</td>
    <td>{{$tag->id}}</td>


    <td>
      <form action="{{route('tags.destroy', $tag->id)}}" method="post">
        @csrf
        @method('delete')
       <button type="submit" class="btn btn-success">delete</button>
      </form>
      <form action="{{route('tags.edit', $tag)}}" method="get">
        @csrf
       <button type="submit" class="btn btn-success">edit</button>
      </form>
      <form action="{{route('tags.show', $tag->id)}}" method="get">
        @csrf
       <button type="submit" class="btn btn-success">show</button>
      </form>
    </td>
  </tr>
@endforeach
</tbody>
