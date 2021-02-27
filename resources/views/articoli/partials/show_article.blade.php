<h2>titolo: {{$articletarget->titolo}}</h2>
<h3>autore: {{$articletarget->autore}}</h3>
<p>contenuto: {{$articletarget->contenuto}}</p>
<h4>categoria:{{$articletarget->category->categoria}}</h4>
<h4>tags:
  @foreach($articletarget->tags as $tag)
    <span>{{$tag->tag}}</span>
  @endforeach
</h4>
