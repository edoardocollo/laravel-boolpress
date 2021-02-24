<form action="{{route('articoli.update', $articletarget->id)}}" method="post">
  @csrf
  @method('patch')
 <div class="form-group">
   <label for="titolo">titolo:</label>
   <input type="text" class="form-control" id="titolo" value="{{$articletarget->titolo}}" name="titolo">
 </div>
 <div class="form-group">
   <label for="contenuto">contenuto:</label>
   <input type="text" class="form-control" id="contenuto" value="{{$articletarget->contenuto}}" name="contenuto">
 </div>
 <div class="form-group">
   <label for="autore">autore:</label>
   <input type="text" class="form-control" id="autore" value="{{$articletarget->autore}}" name="autore">
 </div>
 <button type="submit" class="btn btn-success">Submit</button>
</form>
