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
 * Boas práticas em desenvolvimento 
 */

;(function($)
{   
    $.fn.loadTableUserModules = function()
    {
        var template = Handlebars.compile($("#"+avdTable2.id+"-template").html()),
            table2 = $('#'+avdTable2.id).DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: avdTable2.url,
                type: "POST",
                dataType: "json",
                headers: {'X-CSRF-TOKEN': avdTable2.token}
            },
            scrollX: true,
            sScrollXInner: "100%",
            sPaginationType: "full_numbers",
            iDisplayLength: avdTable2.limit,
            sDom: '<"dataTables_header"lfr>t<"dataTables_footer"ip>',
            fnDrawCallback: function( oSettings ){
                if (!avdTable2.tableStyled){
                    $("#"+avdTable2.id).closest(".dataTables_wrapper").find(".dataTables_length select").addClass("select "+avdTable2.color).styleSelect();
                    avdTable2.tableStyled = true;
                }
            },
            columns: [
                {data: 'order', className: 'align-center'},
                {data: 'name'},
                {data: 'label'},
                {
                    className: 'details-control-2',
                    orderable: false,
                    searchable: false,
                    data: null,
                    defaultContent: ''
                }
            ],
            order: [[0, 'asc']]
        });

        /**
         * Adicionar ouvinte de eventos para abrir e fechar detalhes.
         * @var avdTable2.id(id)td.details-control
        */
        $('#'+avdTable2.id).on('click', avdTable2.openDetails, function() {
            if (event.target !== this){
                return;
            }

            var tr = $(this).closest('tr'),
                row = table2.row(tr),
                divId = avdTable2.id+'-'+row.data().id;

                 row.child.hide();

            if (row.child.isShown()) {
                // Esta row já esta aberta - fechar
                //divId.hide();
                row.child.hide();
                tr.removeClass('shown');
                tr.children().removeClass(avdTable2.colorSel);
            } else {

                row.child.hide();
                // abre esta row
                row.child(template(row.data())).show();
                ajaxTable2(divId, row.data());
                tr.addClass('shown');
                tr.children().addClass(avdTable2.colorSel);
            }
        });

        /**
         * Carregar detalhes com ajax.
         * @param divId (id)
         * @param url (data.details_url)
        */
        ajaxTable2 = function(divId, url) 
        {
            $.ajax({
                url: url.permiss_url,
                type: "GET",
                dataType: "html",
                headers: {'X-CSRF-TOKEN': avdTable2.token},
                beforeSend: function() {
                },
                success: function(data){
                    $("#"+divId).html(data);
                },
                error: function(xhr){
                    ajaxFormError(xhr);
                }
            });
        }
    };

    $.fn.changePermission = function(id, url)
    {
        var ac,
            val = $("#check_"+id).val();
        if (val == 1) {
            $("#check_"+id).val(0); 
            ac = 'remove';
        } else {
            $("#check_"+id).val(1);
            ac = 'insert';
        }

        $.ajax({
            type: 'POST',
            headers: {'X-CSRF-TOKEN': avdTable2.token},
            data: { _method:'put', ac:ac, id:id },
            url: url,
            dataType: 'json',
            success: function( data ){
                if (data.success == true) {
                    msgNotifica(true, data.message, true, false);
                } else {
                    msgNotifica(false, data.message, true, false);
                }
            },
            error: function( data ){
                msgNotifica(false, 'Houve um erro no servidor', true, false);
            }
        });   
    };

})(jQuery);