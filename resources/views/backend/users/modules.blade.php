<div class="block-title">
    <h3><span class="icon-lock"> </span><strong> {{$title}} </strong></h3>
</div>
<div class="blue-gradient">
    <table class="table responsive-table" id="user-modules">
        <thead>
            <tr>
                <th scope="col" width="3%" class="align-center">Ordem</th>
                <th scope="col" width="25%">Modulo</th>
                <th scope="col">Descrição</th>
                <th scope="col" class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="" style="width: 12px;"></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="4"></td>
            </tr>
        </tfoot>
    </table>
</div>

<script src="{{url('assets/backend/scripts/users-permissions.js')}}?{{time()}}"></script>

<script>
    var avdTable2 = {!! json_encode([
        "id" => 'user-modules',
        "divId" => numLetter($data->id, 'letter'),
        "url" => route('user.modules.data', [
            "id" => numLetter($data->id, 'letter'), 
            "type" => $type
        ]),
        "color" => $confUser->table_color." glossy",
        "colorSel" => $confUser->table_color_sel." glossy",
        "limit" => $confUser->table_limit,
        "openDetails" => "td.details-control-2", 
        "txtConfirm" => "Você confirma a exclusão",
        "txtCancel" => "A Exclusão foi Cancelada!",
        "txtError" => "Houve um erro no servidor!",
        "txtSave" => "Salvar",
        "txtUpdate" => "Alterar",
        "token" => csrf_token(),
        "tableStyled" => false
    ]) !!};
</script>

<script id="user-modules-template" type="text/x-handlebars-template">
    <div id="user-modules-@{{{id}}}"></div>
</script>


<script>
$.fn.loadTableUserModules();    
</script>