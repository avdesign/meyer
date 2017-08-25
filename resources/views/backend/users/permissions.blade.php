@foreach($checks as $key => $ck)
	@can('model-users-permissions-update')

		@if(substr($ck['name'], 0, 9) == 'reservado' && 
		Auth::user()->profile != 'Master')

		@else

			<div class="silver-gradient">
				<h4 class="blue underline with-small-padding">
						<input id="check_{{$ck['id']}}" onchange="javascript:$.fn.changePermission('{{$ck['id']}}', '{{route('user.permission.update', $id)}}')"  type="checkbox" value="{{$ck['value']}}" class="checkbox mid-margin-left"{{$ck['checked']}}>
					<span>&nbsp;</span>
					{{$ck['label']}}
				</h4>
			</div>
		@endif

	@endcan

@endforeach




	
