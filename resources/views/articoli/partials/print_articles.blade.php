<button class="btn btn-success" type="button" name="button">
<a href="{{route('articoli.create')}}">aggiungi aricolo</a>
</button>
<table class="table table-striped">
<thead>
<tr>
  <th>titolo</th>
  <th>contenuto</th>
  <th>autore</th>
  <th>id</th>
  <th>categoria</th>
  <th>action</th>
</tr>
</thead>
<tbody>
@foreach ($articles as $article)

  <tr>
    <td>{{$article->titolo}}</td>
    <td>{{$article->contenuto}}</td>
    <td>{{$article->autore}}</td>
    <td>{{$article->id}}</td>
    <td>{{$article->category->categoria}}</td>


    <td>
      <form action="{{route('articoli.destroy', $article->id)}}" method="post">
        @csrf
        @method('delete')
       <button type="submit" class="btn btn-success">delete</button>
      </form>
      <form action="{{route('articoli.edit', $article)}}" method="get">
        @csrf
       <button type="submit" class="btn btn-success">edit</button>
      </form>
      <form action="{{route('articoli.show', $article->id)}}" method="get">
        @csrf
       <button type="submit" class="btn btn-success">show</button>
    </td>
  </tr>
@endforeach
</tbody>
