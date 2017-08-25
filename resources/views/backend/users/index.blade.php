<div class="block-title">
    <h3><span class="icon-users"> </span><strong> Usuários do Sistema </strong></h3>
    <div class="button-group absolute-right">
            @can('model-users-excluded')                        
                <a href="usuarios/excluidos" class="button icon-users margin-left red-gradient glossy ">Exluidos</a>
            @endcan
            
            @can('model-users-create')                        
                <a href="javascript:void(0)" onclick="abreModal('Adicionar Usuário', '{{route('usuarios.create')}}', 'users', 2, 'true', 400, 470);" class="button margin-right with-tooltip" data-tooltip-options='{"classes":["anthracite-gradient"],"position":"bottom"}' title="Adicionar Usuários">Adicionar       <span class="button-icon right-side"><span class="icon-plus-round"></span></span></a>
            @endcan

    </div>
</div>
<!-- DataTables -->
<link rel="stylesheet" href="{!! url('assets/backend/js/libs/DataTables/'.$confUser->table_color.'.css?'.time()) !!}">

<table class="table responsive-table" id="users">
    <thead>
        <tr>
            <th width="15%">Nome</th>
            <th width="15%" class="align-center hide-on-mobile">Nível</th>
            <th width="15%" class="align-center hide-on-mobile">Status</th>
            <th width="15%" class="align-center hide-on-mobile-portrait">Telefone</th>
            <th width="2%"></th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td colspan="5"></td>
        </tr>
    </tfoot>
</table>

<script src="{!! url('assets/backend/scripts/users.js?'.time()) !!}"></script>
<script>
    var avdTable = {!! json_encode([
        "id" => 'users',
        "url_users" => route('users.data'),
        "url_excluded" => route('users.excluded.data'),
        "txtConfirm" => "Você confirma a exclusão",
        "txtCancel" => "A Exclusão foi Cancelada!",
        "txtError" => "Houve um erro no servidor!",
        "txtSave" => "Salvar",
        "txtUpdate" => "Alterar",
        "token" => csrf_token(),
        "color" => $confUser->table_color,
        "colorSel" => $confUser->table_color_sel." glossy",
        "openDetails" => $confUser->table_open_details,
        "limit" => $confUser->table_limit,
        "tableStyled" => false
    ]) !!};
</script>

<script id="painel-users" type="text/x-handlebars-template">
<div id="painel_@{{{id}}}" class="content-panel margin-bottom">
    <div class="panel-navigation silver-gradient">
        <div class="panel-control">
            @can('model-users-password-update')
                <a href="javascript:void(0);" onclick="abreModal('Redefinir Senha', 'admin/recuperar/@{{{id}}}/senha', 'dados-usuarios', 2, 'true', 400, 180);" class="button blue-gradient icon-pencil with-tooltip" title="Alterar senha e login">Senha/Login</a>
            @endcan
        </div>
        <div class="panel-load-target scrollable" style="height:490px">
            <div class="navigable">
                <ul class="files-list mini open-on-panel-content">
                    @can('model-users-view')
                        <li>
                            <a href="usuario/@{{{id}}}/perfil" class="file-link">
                                <span class="icon folder-pen"></span>
                                Perfil do Usuário
                            </a>
                        </li>
                    @endcan
                    @can('model-users-access')
                        <li>
                            <a href="usuario/@{{{id}}}/acessos" class="file-link">
                                <span class="icon folder-docs"></span>
                                Acessos do Usuário
                            </a>
                        </li>
                    @endcan
                    @can('model-users-permissions-view')
                        <li>
                            <a href="usuario/@{{{id}}}/A/modulos/" class="file-link">
                                <span class="icon folder-program"></span>
                                Permissões de Acessos
                            </a>
                        </li>
                    @endcan
                    @can('model-users-permissions-view')
                        <li>
                            <a href="usuario/@{{{id}}}/C/modulos/" class="file-link">
                                <span class="icon folder-program"></span>
                                Permissões de Configurações
                            </a>
                        </li>
                    @endcan

                    @can('model-users-historic')
                    <li>
                        <a href="usuarios/@{{{ id }}}/historico" class="file-link">
                            <span class="icon folder-docs"></span>
                            Histórico dos Pedidos
                        </a>
                    </li>
                    @endcan
                </ul>
            </div>
        </div>
    </div>
    <div class="panel-content linen navigable">

        <div class="panel-control align-right">
            <div class="open-on-panel-content">
                <!-- add btn -->
            </div>   
        </div>

        <div class="panel-load-target scrollable with-padding" style="height:450px">
            <div class="block">
                <div class="with-padding">
                    <div class="float-right">
                        @can('model-users-delete')
                            <button id="btn-excluir" onclick="deleteUser('usuarios/@{{{id}}}', '@{{{name}}}');" class="button icon-trash with-tooltip" title="Excluir Usuário">Excluir
                            </button>
                        @endcan
                        @can('model-users-update')
                            <button id="btn-editar" onclick="abreModal('Alterar Usuário: @{{{name}}}', 'usuarios/@{{{id}}}/edit', 'dados-usuarios', 2, 'true', 400, 350);" class="button blue-gradient icon-pencil with-tooltip" title="Alterar Usuário">Editar
                            </button>
                        @endcan
                    </div>
                    <h4 class="blue underline">Perfil do Usuário</h4>
                    <ul class="bullet-list">
                        <li>Nome: <strong> @{{{name}}} </strong></li>
                        <li>Email: <strong> @{{{email}}} </strong></li>
                        <li>Telefone: <strong> @{{{phone}}} </strong></li>
                        <li>Perfil: <strong> @{{{profile}}} </strong></li>
                        <li>Status: <strong> @{{{txt_status}}} </strong></li>
                        <li>Comissao: <strong> @{{{commission}}}  @{{{percent}}} %</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</script>

<script>
$.fn.loadTableUsers();
</script>

