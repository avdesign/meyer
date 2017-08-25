<div id="modal-brand-grids">
@if(isset($data))
	<form id="form-brand-grids" method="POST" action="{{route('grids-brand.update', ['id' => $id, 'grid' => $data->id])}}" onsubmit="return false">
		<input name="_method" type="hidden" value="PUT">
@else
	<form id="form-brand-grids" method="POST" action="{{route('grids-brand.store', $id)}}" onsubmit="return false">
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
					@can('brand-grids-update')
						<button id="btn-modal" onclick="formGridBrand('update', 'brand-grids', 'aguarde', 'Alterar')" class="button blue-gradient"> 
						<span class="icon-redo"></span> Alterar 
						</button>
					@endcan
				@else
					@can('brand-grids-create')
						<button id="btn-modal" onclick="formGridBrand('create', 'brand-grids', 'aguarde', 'Salvar')" class="button blue-gradient">
							<span class="icon-publish"></span> Salvar 
						</button>
					@endcan
				@endif
				</span>
			</p>			

		</fieldset>
	</form>
</div>