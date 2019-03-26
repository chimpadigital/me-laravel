<div class="widget">
    <h4 class="mb-30">Categorías</h4>
    <ul>
    	@php
    		
    		$categories=App::call('App\Http\Controllers\PageController@categories');


    	@endphp
        
        @forelse($categories as $category)
			<li>
	            <a href="{{ route('blog') }}?category={{ $category->id }}">
	                <p>{{ $category->name }}</p>
	            </a>
	        </li>
        @empty

        @endforelse
        
    </ul>
</div> 