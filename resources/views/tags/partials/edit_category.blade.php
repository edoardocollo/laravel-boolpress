<form action="{{route('categorie.update', $categorytarget->id)}}" method="post">
  @csrf
  @method('patch')
 <div class="form-group">
   <label for="categoria">categoria:</label>
   <input type="text" class="form-control" id="categoria" value="{{$categorytarget->categoria}}" name="categoria">
 </div>
 <div class="form-group">
   <label for="descrizione">descrizione:</label>
   <input type="text" class="form-control" id="descrizione" value="{{$categorytarget->descrizione}}" name="descrizione">
 </div>
 <button type="submit" class="btn btn-success">Submit</button>
</form>
