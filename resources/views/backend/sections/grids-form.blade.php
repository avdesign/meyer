<div id="modal-section-grids">
@if(isset($data))
	<form id="form-section-grids" method="POST" action="{{route('grids-section.update', ['id' => $id, 'grid' => $data->id])}}" onsubmit="return false">
		<input name="_method" type="hidden" value="PUT">
@else
	<form id="form-section-grids" method="POST" action="{{route('grids-section.store', $id)}}" onsubmit="return false">
@endif	
	{{csrf_field()}}
		<fieldset class="fieldset">
			<legend class="legend">Grade: und(P,M,G) caixa(2/P,3/M,1/G)</legend>
			<p class="button-height inline-label">
				<label for="name" class="label"> Categoria <span class="red">*</span></label>
				<input type="text" name="name" class="input full-width" value="{{$data->name or old('name')}}">
			</p>
			<p class="button-height inline-label">
				<label for="label" class="label">Grade <span class="red">*</span></label>
				<textarea name="label" class="input full-width" cols="10" rows="2">{{$data->label or old('label')}}</textarea>
			</p>
			<p class="button-height align-right">
				<span class="button-group">
				@if(isset($data))
					@can('section-grids-update')
						<button id="btn-modal" onclick="formGridSection('update', 'section-grids', 'aguarde', 'Alterar')" class="button blue-gradient"> 
						<span class="icon-redo"></span> Alterar 
						</button>
					@endcan
				@else
					@can('section-grids-create')
						<button id="btn-modal" onclick="formGridSection('create', 'section-grids', 'aguarde', 'Salvar')" class="button blue-gradient">
							<span class="icon-publish"></span> Salvar 
						</button>
					@endcan
				@endif
				</span>
			</p>			

		</fieldset>
	</form>
</div>