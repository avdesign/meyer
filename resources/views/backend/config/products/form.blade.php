<div class="block-title silver-gradient">
	<h3>
		<i class="fa fa-cog" aria-hidden="true"></i>
		<strong> {{$title}}</strong>
	</h3>
</div>
<div class="silver-gradient">
	<div class="with-padding">
		<form id="form-config-products" method="POST" action="{{route('config.products.update', $data->id)}}" onsubmit="return false">
			<div class="columns">
				<div class="six-columns twelve-columns-tablet">
					<fieldset class="fieldset">
						<input name="_method" type="hidden" value="PUT">
						{{csrf_field()}}
					    <legend class="legend">Padrão dos produtos</legend>
						<p class="button-height inline-label">
							<label for="cost" class="label">Valor Custo</label>
							<span class="button-group">
								<label for="radio-0" class="button green-active">
									<input type="radio" name="cost" id="radio-0" value="1" {{{ $data->cost == 1 ? 'checked' : '' }}}>
									Sim
								</label>
								<label for="radio-1" class="button red-active" >
									<input type="radio" name="cost" id="radio-1" value="0" {{{ $data->cost == 0 ? 'checked' : '' }}}>
									Não
								</label>
							</span>
						</p>

						<p class="button-height inline-label">
							<label for="stock" class="label">Estoque</label>
							<span class="button-group">
								<label for="radio-2" class="button green-active">
									<input type="radio" name="stock" id="radio-2" value="1" {{{ $data->stock == 1 ? 'checked' : '' }}}>
									Sim
								</label>
								<label for="radio-3" class="button red-active" >
									<input type="radio" name="stock" id="radio-3" value="0" {{{ $data->stock == 0 ? 'checked' : '' }}}>
									Não
								</label>
							</span>
						</p>

						<p class="button-height inline-label">
							<label for="freight" class="label">Frete</label>
							<span class="button-group">
								<label for="radio-4" class="button green-active">
									<input type="radio" name="freight" id="radio-4" value="1" {{{ $data->freight == 1 ? 'checked' : '' }}}>
									Sim
								</label>
								<label for="radio-5" class="button red-active" >
									<input type="radio" name="freight" id="radio-5" value="0" {{{ $data->freight == 0 ? 'checked' : '' }}}>
									Não
								</label>
							</span>
						</p>

						<p class="button-height inline-label">
							<label for="kit" class="label">Vender Kits</label>
							<span class="button-group">
								<label for="radio-6" class="button green-active">
									<input type="radio" name="kit" id="radio-6" value="1" {{{ $data->kit == 1 ? 'checked' : '' }}}>
									Sim
								</label>
								<label for="radio-7" class="button red-active" >
									<input type="radio" name="kit" id="radio-7" value="0" {{{ $data->kit == 0 ? 'checked' : '' }}}>
									Não
								</label>
							</span>
						</p>

						<p class="button-height inline-label">
							<label for="grids" class="label">Grades</label>
							<span class="button-group">
								<label for="radio-8" class="button green-active">
									<input type="radio" name="grids" id="radio-8" value="1" {{{ $data->grids == 1 ? 'checked' : '' }}}>
									Sim
								</label>
								<label for="radio-9" class="button red-active" >
									<input type="radio" name="grids" id="radio-9" value="0" {{{ $data->grids == 0 ? 'checked' : '' }}}>
									Não
								</label>
							</span>
						</p>

						<p class="button-height inline-label">
							<label for="colors" class="label">Fotos: Cores</label>
							<span class="button-group">
								<label for="radio-10" class="button green-active">
									<input type="radio" name="colors" id="radio-10" value="1" {{{ $data->colors == 1 ? 'checked' : '' }}}>
									Sim
								</label>
								<label for="radio-11" class="button red-active" >
									<input type="radio" name="colors" id="radio-11" value="0" {{{ $data->colors == 0 ? 'checked' : '' }}}>
									Não
								</label>
							</span>
						</p>

						<p class="button-height inline-label">
							<label for="positions" class="label">Fotos: Posições</label>
							<span class="button-group">
								<label for="radio-12" class="button green-active">
									<input type="radio" name="positions" id="radio-12" value="1" {{{ $data->positions == 1 ? 'checked' : '' }}}>
									Sim
								</label>
								<label for="radio-13" class="button red-active" >
									<input type="radio" name="positions" id="radio-13" value="0" {{{ $data->positions == 0 ? 'checked' : '' }}}>
									Não
								</label>
							</span>
						</p>

						<p class="button-height inline-label">
							<label for="group_colors" class="label">Grupo de Cores</label>
							<span class="button-group">
								<label for="radio-14" class="button green-active">
									<input type="radio" name="group_colors" id="radio-14" value="1" {{{ $data->group_colors == 1 ? 'checked' : '' }}}>
									Sim
								</label>
								<label for="radio-15" class="button red-active" >
									<input type="radio" name="group_colors" id="radio-15" value="0" {{{ $data->group_colors == 0 ? 'checked' : '' }}}>
									Não
								</label>
							</span>
						</p>

						<p class="button-height inline-label">
							<label for="video" class="label">Video</label>
							<span class="button-group">
								<label for="radio-16" class="button green-active">
									<input type="radio" name="video" id="radio-16" value="1" {{{ $data->video == 1 ? 'checked' : '' }}}>
									Sim
								</label>
								<label for="radio-17" class="button red-active" >
									<input type="radio" name="video" id="radio-17" value="0" {{{ $data->video == 0 ? 'checked' : '' }}}>
									Não
								</label>
							</span>
						</p>

						<p class="button-height inline-label">
							<label for="mini_colors" class="label">Miniaturas</label>
							<select name="mini_colors" class="select check-list">
								<option value="crop" {{{ $data->mini_colors == 'crop' ? 'selected="selected"' : '' }}}>Cortar Local</option>
								<option value="hexa" {{{ $data->mini_colors == 'hexa' ? 'selected="selected"' : '' }}}>Código da cor</option>
								<option value="thumbs" {{{ $data->mini_colors == 'thumbs' ? 'selected="selected"' : '' }}}>Miniatura da Foto</option>
							</select>
						</p>
						@can('config-product-update')
							<p class="button-height inline-label">
								<button onclick="postFormJson($(this.form).attr('id'));" class="button icon-publish blue-gradient"> Salvar</button>
							</p>
						@endcan
					</fieldset>

				</div>
				<div class="six-columns twelve-columns-tablet">
					<h4 class="green underline">Observações</h4>
					<ol>
						<li>Custo : Habilita  o campo para informar o custo do produto.</li>
						<li>Estoque: Habilita  o modulo de controle de estoque.</li>
						<li>Frete:  Habilita  o modulo de frete.</li>
						<li>Vender Kits:  Habilita  o modulo de vendas por kits (caixa,kit,pacote etc.)</li>
						<li>Grades: Habilita  o modulo das grades dos produtos.</li>
						<li>Fotos das Cores: Habilita  inserir cores dos produtos.</li>
						<li>Fotos das Posições: Habilita  inserir fotos de posições.</li>
						<li>Grupo de Cores: Habilita  o modulo de grupo de cores.</li>
						<li>Video: Habilita  o campo para informar o link do video.</li>
						<li>Miniaturas: Opção do tipo das imagens em miniaturas.</li>
					</ol>
				</div>
			</div>
		</form>
	</div>
</div>