<div id="modal-users">
@if(isset($data))
	<form id="form-users" method="POST" action="{{route('usuarios.update', $data->id)}}" onsubmit="return false">
		<input name="_method" type="hidden" value="PUT">
		<input name="has" type="hidden" value="{{$code}}">
@else
	<form id="form-users" method="POST" action="{{route('usuarios.store')}}" onsubmit="return false">
@endif	
	{{csrf_field()}}
		<fieldset class="fieldset">
			<p class="button-height inline-label">
				<label for="profile" class="label"> Perfil <span class="red">*</span></label>
	            <select id="select-profile" name="profile_id" class="select">
	            	<option value="">Selecione um</option>
	                @foreach($options as $key => $val)
	                	@if($val != 'Master')
		                    <option value="{{$key}}" 
		                    @if(isset($data) && $data->profile == $val) selected @endif> {{$val}} </option>
		                @endif
	                @endforeach
	            </select>
	        </p>
			<p class="button-height inline-label">
				<label for="name" class="label"> Nome <span class="red">*</span></label>
				<input type="text" name="name" class="input full-width" value="{{$data->name or old('name')}}">
			</p>
			<p class="button-height inline-label">
				<label for="email" class="label"> Email <span class="red">*</span></label>
				<input type="email" name="email" class="input full-width" value="{{$data->email or old('email')}}">
			</p>
			<p class="button-height inline-label">
				<label for="phone" class="label"> Telefone <span class="red">*</span></label>
				<input type="text" id="phone" name="phone" class="input full-width" value="{{$data->phone or old('phone')}}">
			</p>
			@if(!isset($data))
				<p class="button-height inline-label">
					<label for="login" class="label"> Login <span class="red">*</span></label>
					<input type="text" name="login" maxlength="10" class="input full-width" value="{{$data->login or old('login')}}">
				</p>
				<p class="button-height inline-label">
					<label for="password" class="label"> Senha <span class="red">*</span></label>
					<input type="password" name="password" maxlength="10" class="input full-width" >
				</p>
				<p class="button-height inline-label">
					<label for="password" class="label">Confirme Senha<span class="red">*</span></label>
					<input type="password" name="password_confirmation" maxlength="10" class="input full-width" >
				</p>
			@endif			
			<p class="button-height inline-label">
				<label for="commission" class="label"> Comissão<span class="red">*</span></label>
				<span class="input">
					<select id="commission" name="commission" class="select compact">
						<option value="Sim" @if(isset($data) && $data->commission == 'Sim') selected @endif>SIM</option>
						<option value="Não" @if(isset($data) && $data->commission == 'Não') selected @endif>NÃO</option>
					</select>
					<span class="number input">
						@if(!isset($data))
							<button type="button" class="button number-down">-</button>
								<input type="text" id="percent" name="percent" value="0" size="2" class="input-unstyled" data-number-options='{"min":0,"max":30,"increment":0.5,"shiftIncrement":5,"precision":0.25}'>
							<button type="button" class="button number-up">+</button>
						@else
							<button type="button" class="button number-down">-</button>
								<input type="text" id="percent" name="percent" value="{{ $data->percent}}" size="2" class="input-unstyled" data-number-options='{"min":0,"max":30,"increment":0.5,"shiftIncrement":5,"precision":0.25}'>
							<button type="button" class="button number-up">+</button>
						@endif
					</span>
					<label for="percent" class="button blue-gradient">
						<i class="fa fa-percent" aria-hidden="true"></i>
					</label>
				</span>
			</p>
			@if(isset($data))
				<p class="button-height inline-label">
					<label for="status" class="label">Status <span class="red">*</span></label>
					<span class="button-group">
						<label for="status-1" class="button blue-active">
						@if(isset($data))
							<input type="radio" name="status" id="status-1" value="Ativo" {{{ $data->status == 'Ativo' ? 'checked' : '' }}}>
						@else
							<input type="radio" name="status" id="status-1" value="Ativo">
						@endif
							Ativo
						</label>
						<label for="status-0" class="button red-active">
						@if(isset($data))
							<input type="radio" name="status" id="status-0" value="Inativo" {{{ $data->status == 'Inativo' ? 'checked' : '' }}}>
						@else
							<input type="radio" name="status" id="status-0" value="Inativo">
						@endif	
							Inativo
						</label>
					</span>
				</p>
			@else
				<p class="button-height inline-label">
					<label for="status" class="label">Status <span class="red">*</span></label>
					<span class="button-group">
						<label for="status-1" class="button blue-active">
							<input type="radio" name="status" id="status-1" value="Ativo" checked>
							Ativo
						</label>
						<label for="status-0" class="button red-active">
							<input type="radio" name="status" id="status-0" value="Inativo">
							Inativo
						</label>
					</span>
				</p>
			@endif
			<p class="button-height align-center">
				<span class="button-group">
				<button onclick="fechaModal()" class="button"> Cancelar </button>
				@if(isset($data))
					@can('model-users-update')
						<button id="btn-modal" onclick="formUser('update')" class="button icon-publish blue-gradient"> Alterar </button>
					@endcan
				@else
					@can('model-users-create')
						<button id="btn-modal" onclick="formUser('create')" class="button icon-publish blue-gradient"> Salvar </button>
					@endcan
				@endif
				</span>
			</p>
		</fieldset>
	</form>
</div>
<!-- Mask -->
<script src="{{url('assets/backend/js/libs/Mask/jquery.maskedinput.js')}}"></script>

<script>
$( document ).ready(function() {
    $("#phone").mask("(99) 9999-9999?9"); 
});
</script>