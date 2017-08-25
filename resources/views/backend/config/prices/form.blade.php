<div id="modal-prices">
	@if(isset($data))
		<form id="form-prices" method="POST" action="{{route('precos.update', $data->id)}}" onsubmit="return false">
			<input name="_method" type="hidden" value="PUT">
	@else
		<form id="form-prices" method="POST" action="{{route('precos.store')}}" onsubmit="return false">
	@endif	
		{{csrf_field()}}

		<fieldset class="fieldset">
			<p class="button-height inline-label">
				<label for="profile" class="label"> Perfil <span class="red">*</span></label>
				<input type="text" name="profile" class="input full-width" value="{{$data->profile or old('profile')}}">
			</p>

			<p class="button-height inline-label">
				<label for="porcento" class="label"> Porcento<span class="red">*</span></label>
				<span class="number input">
					<button type="button" class="button number-down">-</button>
						<input type="text" id="percent" name="percent" value="{{$data->percent or old('percent')}}" size="4" class="input-unstyled" data-number-options='{"min":0,"max":100,"increment":0.5,"shiftIncrement":5,"precision":0.25}'>
					<button type="button" class="button number-up">+</button>
				</span>
				<label for="percent" class="button blue-gradient">
					<i class="fa fa-percent" aria-hidden="true"></i>
				</label>
			</p>
			<p class="button-height inline-label">
				<label for="order" class="label">Ordem / Status</label>
				<span class="number input margin-right">
					<button type="button" class="button number-down">-</button>
					<input type="text" name="order" value="{{$data->order or old('order')}}" class="input-unstyled" size="3">
					<button type="button" class="button number-up">+</button>
				</span>
				<span class="button-group">
					<label for="status-1" class="button blue-active">
					@if(isset($data))
						<input type="radio" name="status" id="status-1" value="Ativo" {{{ $data->status == 'Ativo' ? 'checked' : '' }}}>
					@else
						<input type="radio" name="status" id="status-1" value="Ativo" checked>
					@endif
						Ativo
					</label>
					<label for="status-0" class="button red-active">
					@if(isset($data))
						<input type="radio" name="status" id="status-0" value="Inativo" {{{ $data->status == 'Inativo' ? 'checked' : '' }}}>
						Inativo
					@else
						<input type="radio" name="status" id="status-0" value="Inativo">
						Inativo
					@endif	
					</label>
				</span>
			</p>
			<p class="button-height align-center">
				<span class="button-group">
				<button onclick="fechaModal()" class="button"> Cancelar </button>
				@if(isset($data))
					@can('config-price-update')
						<button id="btn-modal" onclick="formPrice('update')" class="button icon-	outbox blue-gradient"> 
						<span class="icon-publish"></span> Alterar 
						</button>
					@endcan
				@else
					@can('config-price-create')
						<button id="btn-modal" onclick="formPrice('create')" class="button blue-gradient">
							<span class="icon-publish"></span> Salvar 
						</button>
					@endcan
				@endif
				</span>
			</p>
		</fieldset>
	</form>
</div>
