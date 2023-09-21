<ul>
@foreach($posts as $post)

<li><a href ="{{ route('tags.show', $tag->id) }}">{{ $tag->title }}</a></li>

@endforeach
</ul>