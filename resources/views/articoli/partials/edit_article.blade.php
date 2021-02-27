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
 <div class="form-group">
    <label for="categoria">categoria:</label>
   <select class="" name="categoria">

    @foreach ($categories as $category)
     <option value="{{$category->id}}">{{$category->categoria}}</option>
    @endforeach
   </select>
 </div>

 <div class="form-group">
   <label for="tag">tag:</label>
   <select class="" name="tags[]" multiple>

    @foreach ($tags as $tag)
     <option value="{{$tag->id}}">{{$tag->tag}}</option>
    @endforeach
   </select>
 </div>


 <button type="submit" class="btn btn-success">Submit</button>
</form>
