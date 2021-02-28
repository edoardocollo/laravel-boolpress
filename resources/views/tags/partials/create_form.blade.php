@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('tags.store')}}" method="post">
  @csrf
 <div class="form-group">
   <label for="tag">tag:</label>
   <input type="text" class="form-control" id="tag" name="tag">
 </div>
 <div class="form-group">
   <label for="descrizione">descrizione:</label>
   <input type="text" class="form-control" id="descrizione" name="descrizione">
 </div>

 <button type="submit" class="btn btn-success">Submit</button>
</form>
