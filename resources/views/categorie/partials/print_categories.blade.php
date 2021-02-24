<button class="btn btn-success" type="button" name="button">
<a href="{{route('articoli.create')}}">aggiungi aricolo</a>
</button>
<table class="table table-striped">
<thead>
<tr>
  <th>categoria</th>
  <th>descrizione</th>
  <th>id</th>
</tr>
</thead>
<tbody>
@foreach ($categories as $category)

  <tr>
    <td>{{$category->categoria}}</td>
    <td>{{$category->descrizione}}</td>
    <td>{{$category->id}}</td>


    <td>
      <form action="{{route('categorie.destroy', $category->id)}}" method="post">
        @csrf
        @method('delete')
       <button type="submit" class="btn btn-success">delete</button>
      </form>
      <form action="{{route('categorie.edit', $category)}}" method="get">
        @csrf
       <button type="submit" class="btn btn-success">edit</button>
      </form>
      <form action="{{route('categorie.show', $category->id)}}" method="get">
        @csrf
       <button type="submit" class="btn btn-success">show</button>
      </form>
    </td>
  </tr>
@endforeach
</tbody>
