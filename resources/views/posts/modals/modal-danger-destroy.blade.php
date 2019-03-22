<div id="modal_destroy_{{$post->id}}" class="modal fade show" tabindex="-1" style="display: none;">
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header bg-danger">
			<h6 class="modal-title">¡Atencion!</h6>
			<button type="button" class="close" data-dismiss="modal">×</button>
		</div>

		<div class="modal-body">
			<h6 class="font-weight-semibold">¿Estas seguro de querer eliminar permanentemente el post de {{$post->name}}?</h6>
		</div>

		<div class="modal-footer">
			<button type="button" class="btn btn-link legitRipple" data-dismiss="modal">Cancelar<div class="legitRipple-ripple" style="left: 40.8537%; top: 53.6314%; transform: translate3d(-50%, -50%, 0px); width: 221.632%; opacity: 0;"></div></button>
			<button type="button" class="btn bg-danger legitRipple" onclick="event.preventDefault(); document.getElementById('form-delete-{{$post->id}}').submit();">Si, eliminar</button>
		</div>

		<form id="form-delete-{{$post->id}}" action="{{ route('admin.post.destroy',$post->id) }}" method="POST">
			
			@csrf
			@method('DELETE')

		</form>
	</div>
</div>
</div>