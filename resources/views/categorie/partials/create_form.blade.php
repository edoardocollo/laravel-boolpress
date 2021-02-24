<form action="{{route('categorie.store')}}" method="post">
  @csrf
 <div class="form-group">
   <label for="categoria">categoria:</label>
   <input type="text" class="form-control" id="categoria" name="categoria">
 </div>
 <div class="form-group">
   <label for="descrizione">descrizione:</label>
   <input type="text" class="form-control" id="descrizione" name="descrizione">
 </div>

 <button type="submit" class="btn btn-success">Submit</button>
</form>
