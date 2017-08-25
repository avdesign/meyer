 /**
 *     ___ _    __   ____            _
 *    /   | |  / /  / __ \___  _____(_)____ ____ 
 *   / /| | | / /  / / / / _ \/ ___/ / __ `/ __ \
 *  / ___ | |/ /  / /_/ /  __(__  ) / /_/ / / / /
 * /_/  |_|___/  /_____/\___/____/_/\__, /_/ /_/ 
 *                                 /____/        
 * ------------ By Anselmo Velame --------------- 
 *
 * Sistma Administrativo
 * Users
 *
 */
;(function($, undefined)
{
    /**
     * Ativar table dos usuários
     * @var array 
     */
    $.fn.loadTableUsers = function()
    {  
        var painel = Handlebars.compile($("#painel-"+avdTable.id).html()),
        table = $("#"+avdTable.id).DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: avdTable.url_users,
                type: "POST",
                dataType: "json",
                headers: {'X-CSRF-TOKEN': avdTable.token}
            },
            sScrollX: true,
            sScrollXInner: "100%",
            buttons: ['reset'],
            sPaginationType: "full_numbers",
            iDisplayLength: avdTable.limit,
            sDom: 'CB<"clear"><"dataTables_header"lfr>t<"dataTables_footer"ip>',
            fnDrawCallback: function( oSettings ){
                if (!avdTable.tableStyled){
                    $("#"+avdTable.id).closest(".dataTables_wrapper").find(".dataTables_length select").addClass("select "+avdTable.color+" glossy").styleSelect();
                    $("#btn-reset").addClass(avdTable.color+" glossy");
                    avdTable.tableStyled = true;
                }
            },
            columns:[
                {data: 'name', className:'align-left'},
                {data: 'profile', className:'align-right'},
                {data: 'status', className:'align-center'},
                {data: 'phone', className:'align-right'},
                {data:null, className:'details-control', orderable:false, searchable:false, defaultContent: ''}
            ],
            order: [[0, 'asc']]

        });
        $('#'+avdTable.id).on('click', avdTable.openDetails, function() {
            if (event.target !== this){
                return;
            }
            var tr = $(this).closest('tr'),
            row = table.row(tr);
            if (row.child.isShown()) {
                // Esta row já está aberta - fechá-la
                row.child.hide();
                tr.removeClass('shown');
                tr.children().removeClass(avdTable.colorSel);
            } else {
                // Abrir esta row
                row.child(painel(row.data())).show();
                tr.addClass('shown');
                tr.children().addClass(avdTable.colorSel);
            }
        });

        /**
         * create  e update
         * @param ac (opcional)
        */
        formUser = function(ac)
        {
            var form = $('#form-'+avdTable.id),
                url  = form.attr('action'),
                txt;
            (ac == 'create' ? txt = avdTable.txtSave : txt = avdTable.txtUpdate);
            $.ajax({
                type: 'POST',
                dataType: "json",
                url: url,
                data: form.serialize(),
                beforeSend: function() {
                    setBtn(4,'Aguarde',false,'loader','btn-modal',false,'silver');
                },
                success: function(data){
                    if(data.success == true){
                        setBtn(4,txt,true,'icon-publish','btn-modal',false,'blue');
                        table.ajax.reload();
                        msgNotifica(true, data.message, true, false);
                        fechaModal();
                    } else {
                        setBtn(4,txt,true,'icon-publish','btn-modal',false,'blue');
                        msgNotifica(false, data.message, true, false);
                    }
                },
                error: function(xhr){
                    setBtn(4,txt,true,'icon-publish','btn-modal',false,'blue');
                    ajaxFormError(xhr);
                }
            });
        };

        /**
         * Delete User
         * @param string url, string name
        */
        deleteUser = function(url, name)
        {
            $.modal.confirm(avdTable.txtConfirm+' '+name+'?', function(){
                $.ajax({
                    type: 'DELETE',
                    dataType: "json",
                    headers: {'X-CSRF-TOKEN':avdTable.token},
                    url: url,
                    success: function(data){
                        if(data.success == true){
                            table.ajax.reload();                
                            msgNotifica(true, data.message, true, false);
                        } else {
                            msgNotifica(false, data.message, true, false);
                        }
                    },
                    error: function(data){
                        msgNotifica(false, avdTable.txtError, true, false);
                    }
                });

            }, function(){
                $.modal.alert(avdTable.txtCancel);
            });
        };

        /**
         * Arquivos de acessos dos usuários (txt)
         * @param string ac
         * @param int id user
         * @param string name
         * @param string path
         * @param string date
        */
        filesAccessTxt = function(ac, id, name, path, date)
        {
            if (ac == 'delete-all' || ac == 'delete') {
                if (ac == 'delete-all') {
                    var content = avdAccess.txtConfirmAll+name;
                    setBtn(4,avdAccess.txtLoader,false,'loader','del-all-'+id,false,'silver');
                } 
                else {
                 var content = avdAccess.txtConfirm+date+' de '+name;
                }
                $.modal.confirm(content, function(){
                    $.ajax({
                        type: 'POST',
                        dataType: 'json',
                        data: { ac:ac, user:name, path:path, _token:avdAccess.token },
                        url: avdAccess.url,
                        success: function( data ){
                            if (data.success == true) {
                                if (ac == 'delete') {
                                    $("#"+date+"_"+id).hide();                                   
                                    $("#return_"+id).html('');
                                    $("#info_"+id).show();
                                } else {
                                    $("#del-all-"+id).hide();
                                    $("#return_"+id).hide();
                                    $("#files_"+id).hide();              
                                }
                            } else {

                                if (ac == 'delete-all') {
                                    setBtn(4,avdAccess.txtDelete,true,'icon-trash ','del-all-'+id,false,'red');
                                };                            
                            }

                            msgNotifica(data.success, data.message, true, false);
                        },
                        error: function( response ){
                            msgNotifica(false, avdAccess.txtError, true, false);
                            if (ac == 'delete-all') {
                                setBtn(4,avdAccess.txtDelete,true,'icon-trash ','btn-modal',false,'red');
                            };
                        }
                    });

                }, function()
                {
                    $.modal.alert(avdAccess.txtCancel);
                    setBtn(4,avdAccess.txtDelete,true,'icon-trash ','del-all-'+id,false,'red');
                });
            }
            else {
                $.ajax({
                    type: 'POST',
                    dataType: 'html',
                    data: { ac:ac, user:name, path:path, _token:avdAccess.token },
                    url: avdAccess.url,
                    success: function(data){
                        $("#return_"+id).html(data);
                        $("#info_"+id).hide();
                    },
                    error: function(xhr){
                        ajaxFormError(xhr);
                    }
                });
            }
        };


        recoverPassword = function(id, loader, txt)
        {
            var form = $('#form-'+id),
                url  = form.attr('action'),
                txt;
            $.ajax({
                type: 'POST',
                dataType: "json",
                url: url,
                data: form.serialize(),
                beforeSend: function() {
                    setBtn(4,loader,false,'loader','btn-modal',false,'silver');
                },
                success: function(data){                    
                    if(data.success == true){
                        msgNotifica(true, data.message, true, false);
                        fechaModal();
                    } else {
                        setBtn(4,txt,true,'icon-publish','btn-modal',false,'blue');
                        msgNotifica(false, data.message, true, false);
                    }
                },
                error: function(xhr){
                    setBtn(4,txt,true,'icon-publish','btn-modal',false,'blue');
                    ajaxFormError(xhr);
                }
            });
        }



    };

    $.fn.loadTableExcluidos = function(corb)
    {
        var idtab2 = "excluidos",
        tableStyled = false,
        painel2 = Handlebars.compile($("#painel-"+idtab2).html()),
        table2 = $("#"+idtab2).DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: avdTable.url_excluded,
                type: "POST",
                dataType: "json",
                headers: {'X-CSRF-TOKEN': avdTable.token}
            },
            sScrollX: true,
            sScrollXInner: "100%",
            order: [[0, 'asc']],
            buttons: ['reset'],
            sPaginationType: "full_numbers",
            iDisplayLength: 10,
            sDom: 'CB<"clear"><"dataTables_header"lfr>t<"dataTables_footer"ip>',
            fnDrawCallback: function( oSettings ){
                if (!avdTable.tableStyled){
                    $("#"+avdTable.id).closest(".dataTables_wrapper").find(".dataTables_length select").addClass("select "+avdTable.color+" glossy").styleSelect();
                    avdTable.tableStyled = true;
                }
            },
            columns:[
                {data: 'nome'},
                {data: 'nivel'},
                {data: 'status', className:'align-center hide-on-mobile-portrait'},
                {data: 'telefone', className:'hide-on-mobile-portrait'},
                {data:null, className:'details-control-2', orderable:false, searchable:false, defaultContent: ''}
            ]
        });
        $('#'+idtab2).on('click', 'td.details-control-2', function() {
            var tr = $(this).closest('tr'),
            row = table2.row(tr);
            if (row.child.isShown()) {
                // Esta row já está aberta - fechá-la
                row.child.hide();
                tr.removeClass('shown');
                tr.children().removeClass('anthracite-gradient');
            } else {
                // Abrir esta row
                row.child(painel2(row.data())).show();
                tr.addClass('shown');
                tr.children().addClass('anthracite-gradient');
            }
        });

        // Reativar usuário,
        // se ok, faz um reload na idtab2
        reativarExcluido = function(id, nome)
        {
            $.modal.confirm('Você deseja reativar o usuário: '+nome+'?', function()
            {
                $("#btn-reativar").hide();
                $(".loader_"+id).show();
                $.ajax({
                    type: 'POST',
                    headers: {'X-CSRF-TOKEN':token},
                    dataType: "json",
                    data: {'id':id, 'nome':nome},
                    url: base+"/usuarios/reativar",
                    success: function(response){
                        if(response.success == true){
                            table2.ajax.reload(); 
                            msgNotifica(true, response.message, true, false);
                        } else {
                            $(".loader_"+id).hide();
                            $("#btn-reativar").show();
                            msgNotifica(false, response.message, true, false);
                        }
                    },
                    error: function(response){
                        $(".loader_"+id).hide();
                        $("#btn-reativar").show();
                        msgNotifica(false, 'Houve um erro no servidor', true, false);
                    }
                });

            }, function()
            {
                $.modal.alert('A Reativação de '+nome+' foi Cancelada!');
            });
        };

    };

})(jQuery);