@php
    $latestPosts=App::call('App\Http\Controllers\PageController@latestPosts');
@endphp
@forelse($latestPosts as $latestPost)
<li>
	<a href="{{ route('notes',$latestPost->id) }}">
	    <div class="thumb-img float-left mr-4">
	        <img src="{{ Storage::disk('public')->url($latestPost->cover_image) }}" alt="">
	    </div>
	    <a href="{{ route('notes',$latestPost->id) }}">
			<h6>{{ $latestPost->name }}</h6>
	    </a>
	    
	    <p>{{ date('d/m/Y',strtotime($latestPost->created_at)) }}</p>
	</a>
</li>
@empty

@endforelse