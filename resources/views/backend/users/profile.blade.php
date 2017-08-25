<div class="block">
    <div class="with-padding">
        <div class="float-right">
            @if($data->deleted_at == '')
                <a id="btn-excluir" href="javascript:void(0);" onclick="deleteUser('{{ route('usuarios.destroy', $data->id) }}', '{{ $data->name }}');" class="button icon-trash with-tooltip" title="Excluir Usuário">Excluir</a>

                <a id="btn-editar" href="javascript:void(0);" onclick="abreModal('Alterar Usuário: {{ $data->name }}', 'usuarios/{{ $data->id }}/edit', 'dados-usuarios', 2, 'true', 400, 430);" class="button blue-gradient icon-pencil with-tooltip" title="Alterar Usuário">Editar</a>
            @else
                <a id="btn-reativar" href="javascript:void(0);" onclick="reativarExcluido('{{ $data->id }}', '{{ $data->data }}', '{{ csrf_token() }}');" class="button blue-gradient icon-data with-tooltip" title="Reativar Usuário" >Reativar</a>
                <span class="loader_{{$data->id}}" style="display:none;"></span>
            @endif
        </div>
        <h4 class="blue underline">{{$title}}</h4>
        <ul class="bullet-list">
            <li id="dname">Nome: <strong> {{ $data->name }} </strong></li>
            <li id="demail">Email: <strong> {{ $data->email }} </strong></li>
            <li id="dtelefone">Telefone: <strong> {{ $data->phone }} </strong></li>
            <li id="dnivel">Perfil: <strong> {{ $data->profile }} </strong></li>
            @if($data->status == 'Ativo')
                <li id="dstatus">Status: <small class="tag blue-bg">Ativo</small> </li>
            @else
                <li id="dstatus">Status: <small class="tag red-bg">Inativo</small> </li>
            @endif
            <li id="dporcento">Comissao: <strong> {{ $data->commission }}  {{ $data->percent }} %</strong></li>
        </ul>
    </div>
</div>
