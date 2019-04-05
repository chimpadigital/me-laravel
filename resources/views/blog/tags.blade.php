<!-- ----------------------------WIDGET ETIQUETAS-------------------------------- -->
                    
                    @php
                    	$tags = array_filter(explode(',', $post->tags), "strlen");

                    		
                    @endphp

                    <div class="widget">
                        <h4 class="mb-30">Etiquetas</h4>
                        <div class="mt-4">
                        	@forelse($tags as $tag)

                            	<p class="etiqueta float-left mr-2 mb-2">{{$tag}}</p>
                            
                            @empty

                            @endforelse
                        </div>
                    </div>

<!-- ----------------------------WIDGET ETIQUETAS-------------------------------- -->
