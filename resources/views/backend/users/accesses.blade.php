<div class="block">
    <div class="with-padding">
        @if(count($files) >= 2)
            @can('model-users-access-delete')
                <div class="float-right">
                    <button id="del-all-{{$data->id}}" onclick="filesAccessTxt('delete-all', '{{$id}}', '{{$data->name}}');" class="button icon-trash red-gradient compact" title="Excluir Todos">Excluir Todos</button>
                </div>
            @endcan
        @endif
        <h4 class="blue underline">Iformações dos Acessos</h4>
        <div id="return_{{$id}}"></div>
        <div id="info_{{$id}}">
            <ul class="bullet-list">
                <li>Total de Acessos : <strong> {{ $access->qty_visits }} </strong></li>
                <li>Última Data: <strong> {{ $access->updated_at }} </strong></li>
                <li>Última Página: <strong> #{{ $access->last_url }} </strong></li>
                <li>Último IP: <strong> {{ $access->last_ip }} </strong></li>
            </ul>
        </div>
    </div>
</div>

<ul id="files_{{$id}}" class="files-icons on-dark">
    
    @forelse($files as $file)
    <li id="{{ $file['date'] }}_{{$id}}">
        <span class="icon file-ini"></span>
        <div class="controls">
            <span class="button-group compact children-tooltip">
                @can('model-users-access-delete')
                    <a href="javascript:void(0)" onclick="filesAccessTxt('delete', '{{$id}}', '{{$data->name}}', '{{$file['path']}}', '{{$file['date']}}');" class="button icon-trash red-gradient" title="Excluir"></a>
                @endcan
                @can('model-users-access')
                    <a href="javascript:void(0)" onclick="filesAccessTxt('open', '{{$id}}', '{{$data->name}}', '{{$file['path']}}', '{{$file['date']}}');" class="button icon-gear blue-gradient" title="Ver Acessos"></a>
                @endcan
            </span>
        </div>
        <b>{{ $file['date'] }}</b>
    </li>
    @empty

        

    @endforelse
</ul>

<script>
    var avdAccess = {!! json_encode([
        "url" => route('user.access.actions', $id),
        "txtConfirmAll" => "Você confirma a exclusão de todos os arquivos de ",
        "txtConfirm" => "Você confirma a exclusão do arquivo:<br>",
        "txtCancel" => "A Exclusão foi Cancelada!",
        "txtAll" => "de todos",
        "txtError" => "Houve um erro no servidor!",
        "txtDelete" => "Excluir Todos",
        "txtLoader" => "Aguardando...",
        "token" => csrf_token()
    ]) !!};
</script>



