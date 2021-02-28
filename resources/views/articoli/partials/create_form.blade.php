@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

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
