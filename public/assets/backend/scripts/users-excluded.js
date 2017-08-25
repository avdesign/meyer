 /**
 *     ___ _    __   ____            _
 *    /   | |  / /  / __ \___  _____(_)____ ____ 
 *   / /| | | / /  / / / / _ \/ ___/ / __ `/ __ \
 *  / ___ | |/ /  / /_/ /  __(__  ) / /_/ / / / /
 * /_/  |_|___/  /_____/\___/____/_/\__, /_/ /_/ 
 *                                 /____/        
 * ------------ By Anselmo Velame --------------- 
 */
;(function($, undefined)
{
    /**
     * List users excluded.
     * @return json
     */
    $.fn.loadUsersExcluded = function()
    {       
        var painel = Handlebars.compile($("#painel-"+avdTable.id).html()),
        table = $("#"+avdTable.id).DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: avdTable.url_excluded,
                type: "POST",
                dataType: "json",
                headers: {'X-CSRF-TOKEN': avdTable.token}
            },
            sScrollX: true,
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
         * Reactivate users excluded.
         * @return boolean true or false
         */
        reactivateExcluded = function(id, name)
        {
            $.modal.confirm(avdTable.confirmReactivate + name, function()
            {
                $.ajax({
                    type: 'POST',
                    headers: {'X-CSRF-TOKEN': avdTable.token},
                    dataType: "json",
                    data: {action:'reactivate', user:id},
                    url: avdTable.url_reactivate,
                    beforeSend: function() {
                        setBtn(4,'Aguarde',false,'loader','btn-reactivate',false,'silver');
                    },
                    success: function(data){
                        if(data.success == true){
                            table.ajax.reload(); 
                            msgNotifica(true, data.message, true, false);
                        } else {
                            setBtn(4,avdTable.txtReactivate,true,'icon-user','btn-reactivate',false,'blue');
                            msgNotifica(false, data.message, true, false);
                        }
                    },
                    error: function(xhr){
                        setBtn(4,avdTable.txtReactivate,true,'icon-user','btn-reactivate',false,'blue');
                        msgNotifica(false, avdTable.errorServer, true, false);
                    }
                });

            }, function()
            {
                $.modal.alert(avdTable.cancelReactivate);
            });
        };


    };

})(jQuery);