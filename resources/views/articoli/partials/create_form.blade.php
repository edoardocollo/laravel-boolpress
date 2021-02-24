<form action="{{route('articoli.store')}}" method="post">
  @csrf
 <div class="form-group">
   <label for="titolo">titolo:</label>
   <input type="text" class="form-control" id="titolo" name="titolo">
 </div>
 <div class="form-group">
   <label for="contenuto">contenuto:</label>
   <input type="text" class="form-control" id="contenuto" name="contenuto">
 </div>
 <div class="form-group">
   <label for="autore">autore:</label>
   <input type="text" class="form-control" id="autore" name="autore">
 </div>

 <button type="submit" class="btn btn-success">Submit</button>
</form>
