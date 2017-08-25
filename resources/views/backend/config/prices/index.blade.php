<div class="block-title silver-gradient">
    <h3>
        <span class="icon-tag">
        <strong> {{$title}} </strong>
        </span>
    </h3>
    @can('config-price-ceate')
        <span class="button-group absolute-right with-tooltip">
            <button 
                onclick="abreModal('{{$title_create}}', '{{route('precos.create')}}', 'prices', 2, true, 380, 230)" 
                class="button icon-plus-round with-tooltip anthracite-gradient" 
                title="{{$title_create}}">Adicionar
            </button>
        </span>
    @endcan
</div>

<!-- DataTables -->
<link rel="stylesheet" href="{!! url('assets/backend/js/libs/DataTables/'.$confUser->table_color.'.css')!!}">

<table class="table responsive-table" id="prices">
	<thead>
		<tr>
            <th scope="col" width="10%" class="align-center">Ordem</th>
            <th scope="col" width="25%" class="align-center">Perfil</th>
			<th scope="col" width="25%" class="align-center">Porcentagem</th>
            <th scope="col" class="align-center">Status</th>
			<th scope="col" width="10%" class="align-center">Ações</th>
		</tr>
	</thead>

	<tfoot>
		<tr>
			<td colspan="5"></td>
		</tr>
	</tfoot>
</table>

<script src="{{url('assets/backend/scripts/settings/prices.js')}}?{{time()}}"></script>
<script>
    var avdTable = {!! json_encode([
        "id" => 'prices',
        "url" => route('prices.data'),
        "txtConfirm" => "Você confirma a exclusão",
        "txtCancel" => "A Exclusão foi Cancelada!",
        "txtError" => "Houve um erro no servidor!",
        "txtLoader" => "Aguarde",
        "txtSave" => "Salvar",
        "txtUpdate" => "Alterar",
        "token" => csrf_token(),
        "color" => $confUser->table_color,
        "limit" => $confUser->table_limit,
        "tableStyled" => false
    ]) !!};
</script>

<script>
$.fn.loadTablePrices();    
</script>
