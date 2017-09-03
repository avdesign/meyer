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
 * Products
 *
 */
;(function($, undefined)
{
    /**
     * Init table
     * @var array 
     */
    $.fn.loadTableProducts = function()
    {  
        var painel = Handlebars.compile($("#painel-"+tableProduct.id).html()),
        table = $("#"+tableProduct.id).DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: tableProduct.url,
                type: "POST",
                dataType: "json",
                headers: {'X-CSRF-TOKEN': tableProduct.token}
            },
            sScrollX: true,
            sScrollXInner: "100%",
            buttons: ['reset'],
            sPaginationType: "full_numbers",
            iDisplayLength: tableProduct.limit,
            sDom: 'CB<"clear"><"dataTables_header"lfr>t<"dataTables_footer"ip>',
            fnDrawCallback: function( oSettings ){
                if (!tableProduct.tableStyled){
                    $("#"+tableProduct.id).closest(".dataTables_wrapper").find(".dataTables_length select").addClass("select "+tableProduct.color+" glossy").styleSelect();
                    $("#btn-reset").addClass(tableProduct.color+" glossy");
                    tableProduct.tableStyled = true;
                }
            },
            columns:[
                { data: null, searchable:false, render: function ( data, type, row ) 
                    {
                        return data.image;
                    } 
                },
                {data: "visits.0", className:'align-center'},
                {data: 'offer.0', className:'align-center'},
                {data: 'active', className:'align-center'},
                {data: 'featured', className:'align-center'},
                {data: 'new', className:'align-center'},
                {data: 'trend', className:'align-center'},
                {data: 'black_friday', className:'align-center'},
                {data:null, className:'details-control', orderable:false, searchable:false, defaultContent: ''},
            ],
            order: [[0, 'desc']]

        });
        $('#'+tableProduct.id).on('click', tableProduct.openDetails, function() {
            if (event.target !== this){
                return;
            }
            var tr = $(this).closest('tr'),
            row = table.row(tr);
            if (row.child.isShown()) {
                // Esta row já está aberta - fechá-la
                row.child.hide();
                tr.removeClass('row-drop');
            } else {
                // Abrir esta row
                row.child(painel(row.data())).show();
                tr.addClass('row-drop');
            }
        });


 /*
        $('#'+tableProduct.id).on('click', tableProduct.openDetails, function() {
            if (event.target !== this){
                return;
            }
            var tr = $(this).closest('tr'),
            row = table.row(tr);
            if (row.child.isShown()) {
                // Esta row já está aberta - fechá-la
                row.child.hide();
                tr.removeClass('shown');
                tr.children().removeClass(tableProduct.colorSel);
            } else {
                // Abrir esta row
                row.child(painel(row.data())).show();
                tr.addClass('shown');
                tr.children().addClass(tableProduct.colorSel);
            }
        });
*/

        /**
         * Form dos fields dos produtos.
         * View: backend.products.modal.forms.product
         * @param string id - form
         * @param string ac - optional (criar ou editar).
         */
        formProduct = function(id, ac)
        {
            var form  = $('#form-'+id),
                url   = form.attr('action');
            $.ajax({
                beforeSend: function(){
                    setBtn(2,tableProduct.txtLoader,false,'loader','submit-product','btn-product');
                },                
                type: 'POST',
                dataType: "json",
                url: url,
                data: form.serialize(),
                success: function(data){
                    if(data.success == true){
                        setBtn(2,tableProduct.txtNext,true,'icon-forward','submit-product','btn-product');     
                        if (ac == 'create') {

                            $('input[name="prod[name]"]').val('');

                            var count_product = $("#count_product").html(),
                                total_product = parseFloat(count_product)+1;
                                $("#count_product").html(total_product);
                            var count_section = $("#count-section-"+data.product.section_id).html(),
                                total_section = parseFloat(count_section)+1;
                                $("#count-section-"+data.product.section_id).html(total_section);
                            var count_category = $("#count-category-"+data.product.category_id).html(),
                                total_category = parseFloat(count_category)+1;
                                $("#count-category-"+data.product.category_id).html(total_category);

                            $('input[name="img[order]"]').val('1');

                            // adiciona o field obrigatório no form-colors
                            $("#insert_product").html('<input name="img[product_id]" type="hidden" value="'+data.product.id+'">'+
                                                      '<input name="img[product_name]" type="hidden" value="'+data.product.name+'">'+
                                                      '<input name="img[brand]" type="hidden" value="'+data.product.brand+'">'+
                                                      '<input name="img[section]" type="hidden" value="'+data.product.section+'">'+
                                                      '<input name="img[category]" type="hidden" value="'+data.product.category+'">'+
                                                      '<input name="img[kit_name]" type="hidden" value="'+data.product.kit_name+'">');
                            // habilita a tab #tab-colors
                            nextTabs('new-product','show-colors', true);
                        } else {
                            if (data.refresh == true){
                                // faz o load dento da div 
                                $( "#info-product-"+data.id ).load( data.redirect, function() {
                                  fechaModal();
                                });                            
                            } else  {
                                if (data.change == true) {
                                    var count_section_current = $("#count-section-"+data.current.section_id).html(),
                                        total_section_current = parseFloat(count_section_current)-1;
                                        $("#count-section-"+data.current.section_id).html(total_section_current);
                                    var count_category_current = $("#count-category-"+data.current.category_id).html(),
                                        total_category_current = parseFloat(count_category_current)-1;
                                        $("#count-category-"+data.current.category_id).html(total_category_current);

                                    var count_section_update = $("#count-section-"+data.update.section_id).html(),
                                        total_section_update = parseFloat(count_section_update)+1;
                                        $("#count-section-"+data.update.section_id).html(total_section_update);
                                    var count_category_update = $("#count-category-"+data.update.category_id).html(),
                                        total_category_update = parseFloat(count_category_update)+1;
                                        $("#count-category-"+data.update.category_id).html(total_category_update);

                                };
                                // Se alterou a section ou category faz um reload na table
                                table.ajax.reload();
                                fechaModal();
                            }
                        }

                        msgNotifica(true, data.message, true, false);

                    } else {
                        setBtn(2,tableProduct.txtNext,true,'icon-forward','submit-product','btn-product');
                        msgNotifica(false, data.message, true, false);
                    }
                },
                error: function(xhr){
                    setBtn(2,tableProduct.txtNext,true,'icon-forward','submit-product','btn-product');
                    ajaxFormError(xhr);
                }          
            });

            return false;
        };

        /**
         * Update status fields.
         * @param string field 
         * @param int id - product.
         * @param is status - (1,0)
         * @param string token 
         */
        statusFields = function(field, id, url, sta, token)
        {
            var btn = $("#"+field+"-"+id),
                button = $(this),
                status;
            (sta == 1 ? status = 0 : status = 1);
            $.ajax({
                type: 'POST',
                headers: {'X-CSRF-TOKEN':token},
                dataType: "json",
                url: url,
                data: {_method:'put', field:field, status:status},
                beforeSend: function() {
                    btn.html('<span class="loader"></span>');
                },
                success: function(data){
                    if(data.success == true){
                        btn.html(data.click);
                        msgNotifica(true, data.message, true, false);
                    } else {
                        msgNotifica(false, data.message, true, false);
                    }
                },
                error: function(xhr){
                    ajaxFormError(xhr);
                }
            });
        }

        /**
         * Delete Product
         * @param string url, string name
        */
        deleteProduct = function(url, name)
        {
            $.modal.confirm(tableProduct.txtConfirm+' '+name+'?', function(){
                $.ajax({
                    type: 'DELETE',
                    dataType: "json",
                    headers: {'X-CSRF-TOKEN':tableProduct.token},
                    url: url,
                    success: function(data){
                        if(data.success == true){
                            var count_colors = $("#count_colors").html(),
                                total_colors = parseFloat(count_colors)-data.product.total_colors;
                                $("#count_colors").html(total_colors);
                            var count_product = $("#count_product").html(),
                                total_product = parseFloat(count_product)-1;
                                $("#count_product").html(total_product);
                            var count_section = $("#count-section-"+data.product.section_id).html(),
                                total_section = parseFloat(count_section)-1;
                                $("#count-section-"+data.product.section_id).html(total_section);
                            var count_category = $("#count-category-"+data.product.category_id).html(),
                                total_category = parseFloat(count_category)-1;
                                $("#count-category-"+data.product.category_id).html(total_category);

                            table.ajax.reload();                
                            msgNotifica(true, data.message, true, false);
                        } else {
                            msgNotifica(false, data.message, true, false);
                        }
                    },
                    error: function(data){
                        ajaxFormError(xhr);
                    }
                });

            }, function(){
                $.modal.alert(tableProduct.txtCancel);
            });
        };

        /**
         * Calculate Cash.
         * View: products.modal.forms.product
         * @param int id  config_prices
         * @param string opc - (price, offer)
         */
        calculateCash = function(id, opc) 
        {
            if (opc == 'price') {
                var percent    = $("input[name='price["+id+"][price_percent]']").val()/100;
                var price_card = $("input[name='price["+id+"][price_card]']").val();
                var descont    = percent*price_card;
                var price_cash = price_card-descont;
                var value      = new Number(price_cash);
                var total      = value.toFixed(2);
                $("input[name='price["+id+"][price_cash]']").val(total);
            };
            if (opc == 'offer') {
                var percent    = $("input[name='price["+id+"][offer_percent]']").val()/100;
                var price_card = $("input[name='price["+id+"][offer_card]']").val();
                var descont    = percent*price_card;
                var price_cash = price_card-descont;
                var value      = new Number(price_cash);
                var total      = value.toFixed(2);
                $("input[name='price["+id+"][offer_cash]']").val(total);
            };
        }
        

        /**
         * Habilitar os fields do frete do produto.
         * View: products.modal.forms.freight
         * @param int opc - (1 ou 0)
         */
        setFreight = function(opc)
        {
            if (opc == 1) {
                $("#fields_freight").show();
                $("#freight").val(1);
            } else {
                $("#freight").val(0);
                $("#fields_freight").hide();
            }
        };

        /**
         * Habilitar os fields do valor da oferta.
         * View: produtos.modal.forms.produto
         * @param int opc - (1 ou 0)
         */
        setOffer = function(opc)
        {
            if (opc == 1) {
                $("#values_offers").show();
            } 
            if (opc == 0) {
                $("#values_offers").hide();
            }
        }


        /**
         * Ability kit module new product.
         * @param int kit
         * @param int idcat
         * @param string url
         */
        setKit = function(kit, idcat, url)
        {
            if (kit == 1) {
               $("#kits").show(); 
            } else {
               $("#kits").hide(); 
            }
            $("#grid_kit").val(kit);
            
            $("#select_grid .select-value").text("Selecione Uma");
            $( "#box-grids-colors" ).html( '' );           
            var id,
            stock = $("input[name='prod[stock]']:checked").val();
            opc = $('#grid_colors option:selected').val();
            if (opc == 'brand') {
                id  = $( "#brand_id option:selected" ).val();
            } else if (opc == 'section') {
                id = $( 'input[name="prod[section_id]"]' ).val();
            } else if (opc == 'category') {
                id = $( 'input[name="prod[category_id]"]' ).val();
            }
            if (opc != '') {
                $.get( base+"/"+url+"/"+idcat+"/grids/"+opc+"/"+id+"/"+stock+"/"+kit, function( data ) {
                    $( "#box-grids-colors" ).html( data );
                }); 
            };
        }

        /**
         * Ability kit module color.
         * @param int kit
         * @param int idpro
         * @param string url
         * @param string ac
         */
        setKitColor = function(kit, idpro, url, ac)
        {
            $("#grid_kit").val(kit);

            stock = $("input[name='img[stock]']:checked").val();
            if (kit == 1) {
               $("#kits").show(); 
            } else {
               $("#kits").hide();
               $("input[name='img[kit_name]']").val('');
            }
            if (ac == 'create') {
                
                $("#select_grid .select-value").text("Selecione Uma");
                $( "#box-grids-colors" ).html('');           
                var id,
                opc = $('#grid_colors option:selected').val();
                if (opc == 'brand') {
                    id  = $("#bra_id").val();
                } else if (opc == 'section') {
                    id = $('#sec_id').val();
                } else if (opc == 'category') {
                    id = $('#cat_id').val();
                }
                if (opc != '') {
                    $.get( base+"/"+url+"/"+idpro+"/grids/"+opc+"/"+id+"/"+stock+"/"+kit, function( data ) {
                        $( "#box-grids-colors" ).html( data );
                    }); 
                };
            };

            if (ac == 'update') {
                var text;
                (kit == 1 ? text = tableProduct.txtKit : text = tableProduct.txtUnit);
                (stock == 1 ? textStock = tableProduct.txtUpdateGridsStock : textStock = tableProduct.txtUpdateGrids);
                $.modal.confirm(textStock+text, function(){
                    $.get( base+"/"+url+"/"+stock+"/"+kit, function( data ) {
                        $( "#update-grids" ).html( data );
                    });
                }, function(){
                    $.modal.alert(tableProduct.txtCancel);
                });
            }
        }

        /**
         * Ability stock module new product.
         * @param int stock
         * @param int idcat
         * @param string url
         */
        setStock = function(stock, idcat, url)
        {

            $("#grid_stock").val(stock);

            $("#select_grid .select-value").text("Selecione Uma");
            $( "#box-grids-colors" ).html( '' );           
            var id,
            kit = $("input[name='prod[kit]']:checked").val();
            opc = $('#grid_colors option:selected').val();
            if (opc == 'brand') {
                id  = $( "#brand_id option:selected" ).val();
            } else if (opc == 'section') {
                id = $( 'input[name="prod[section_id]"]' ).val();
            } else if (opc == 'category') {
                id = $( 'input[name="prod[category_id]"]' ).val();
            }
            if (opc != '') {
                $.get( base+"/"+url+"/"+idcat+"/grids/"+opc+"/"+id+"/"+stock+"/"+kit, function( data ) {
                    $( "#box-grids-colors" ).html( data );
                }); 
            };
        };

        /**
         * Ability stock module color.
         * @param int stock
         * @param int idpro
         * @param string url
         * @param string ac
         */
        setStockColor = function(stock, idpro, url, ac)
        {
            $("#grid_stock").val(stock);
            
            kit = $("input[name='img[kit]']:checked").val();

            if (ac == 'create') {
                $("#select_grid .select-value").text("Selecione Uma");
                $( "#box-grids-colors" ).html( '' );           
                var id,
                opc = $('#grid_colors option:selected').val();
                if (opc == 'brand') {
                    id = $("#bra_id").val();
                } else if (opc == 'section') {
                    id = $("#sec_id").val();
                } else if (opc == 'category') {
                    id = $("#cat_id").val();
                }
                if (opc != '') {
                    $.get( base+"/"+url+"/"+idpro+"/grids/"+opc+"/"+id+"/"+stock+"/"+kit, function( data ) {
                        $( "#box-grids-colors" ).html( data );
                    }); 
                };
            };

            if (ac == 'update') {
                if (stock == 0 && kit == 0) {
                    $.modal.confirm(tableProduct.txtUpdateStock, function(){
                        $.get( base+"/"+url+"/"+stock+"/"+kit, function( data ) {
                            $( "#update-grids" ).html( data );
                        });
                    }, function(){
                        $.modal.alert(tableProduct.txtCancel);
                    });                        
                } else {
                    $.get( base+"/"+url+"/"+stock+"/"+kit, function( data ) {
                        $( "#update-grids" ).html( data );
                    });
                }
            }
        };

        /**
         * Peview Image
         * @param int id
         * @param int width 
        */
        preview_image = function(arq,prev,width)
        {
            $('#'+prev).html("");
            var total_file=document.getElementById(arq).files.length;
            for(var i=0;i<total_file;i++)
            {
                $('#'+prev).append('<img src="'+URL.createObjectURL(event.target.files[i])+'" width="'+width+'">');
            }
        };


        /**
         * Add grid Image
         * @param int id
        */
        addGrid = function(id)
        {
            kit   = $("input[name='img[kit]']:checked").val();
            stock = $("input[name='img[stock]']:checked").val();
            //Number Random
            var num = Math.random(),
                html;
            if (stock == 1) {
                if (kit == 1) {
                    html = '<li class="new_grid">';
                        html += '<span class="input">';
                            html += '<input type="text" name="grids['+num+'][grid]" id="grid_'+id+'" placeholder="'+tableProduct.txtGrid+'" class="input-unstyled input-sep" value="" maxlength="4" style="width: 50px;">';
                            html += '<input type="text" name="grids['+num+'][entry]" id="entry_'+id+'" placeholder="'+tableProduct.txtEntry+'" class="input-unstyled input-sep" value="" maxlength="4" style="width: 50px;">';
                        html += '</span>';
                        html += '<div class="button-group absolute-right compact show-on-parent-hover">';
                            html += '<button onclick="removeThis(this,\'.new_grid\');" class="button icon-trash red-gradient with-tooltip" title="Excluir"></button>';
                        html += '</div>';
                    html += '</li>';
                } else {
                    html = '<li class="new_grid">';
                        html += '<span class="input">';
                            html += '<input type="text" name="grids['+num+'][grid]" id="grid_'+id+'" placeholder="'+tableProduct.txtGrid+'" class="input-unstyled input-sep" value="" maxlength="4" style="width: 50px;">';
                            html += '<input type="text" name="grids['+num+'][entry]" id="entry_'+id+'" placeholder="'+tableProduct.txtEntry+'" class="input-unstyled input-sep" value="" maxlength="4" style="width: 50px;">';
                            html += '<input type="text" name="grids['+num+'][low]" id="exit_'+id+'" placeholder="'+tableProduct.txtLow+'" class="input-unstyled input-sep" value="" style="width: 50px;">';
                        html += '</span>';
                        html += '<div class="button-group absolute-right compact show-on-parent-hover">';
                            html += '<button onclick="removeThis(this,\'.new_grid\');" class="button icon-trash red-gradient with-tooltip" title="Excluir"></button>';
                        html += '</div>';
                    html += '</li>';
                }
            } else {

                html = '<li class="new_grid">';
                    html += '<span class="input">';
                        html += '<input type="text" name="grids['+num+'][grid]" id="grid_'+id+'" placeholder="'+tableProduct.txtGrid+'" class="input-unstyled input-sep" value="" style="width: 50px;">';
                    html += '</span>';
                    html += '<div class="button-group absolute-right compact show-on-parent-hover">';
                        html += '<button onclick="removeThis(this,\'.new_grid\');" class="button icon-trash red-gradient with-tooltip" title="Excluir"></button>';
                    html += '</div>';
                html += '</li>';
            }   

            $("#grids-"+id).append(html);
        }


        /**
         * Remove this grid
         * @param object _this
         * @param int id
        */
        removeThis = function(_this, id)
        {
            $(_this).parents(id).remove();
        }


        /**
         * Update Status collor.
         *
         * @param int id
         * @param string url
         * @param int sta
         * @param int cover
         * @param string token
         */
        statusColor = function(id, url, sta, cover, token)
        {
            var status;
            (sta == 1 ? status = 0 : status = 1);            
            $.ajax({
                type: 'POST',
                headers: {'X-CSRF-TOKEN':token},
                dataType: "json",
                url: url,
                data: {_method:'put', 'active':status},
                success: function(data){
                    if(data.success == true){
                        if (cover == 1 && status == 0) {
                            $.modal.alert('<span class="red">'+data.alert+'</span>');
                        };
                        $("#btns-"+id).html(data.html);
                        msgNotifica(true, data.message, true, false);
                    } else {
                        msgNotifica(false, data.message, true, false);
                    }
                },
                error: function(xhr){
                    ajaxFormError(xhr);
                }
            });
        };

        /**
         * Remove image color.
         * @param int id
         * @param string url
         */

        deleteColor = function(id, url)
        {
            $.ajax({
                type: 'DELETE',
                dataType: "json",
                url: url,
                headers: {'X-CSRF-TOKEN':tableProduct.token},
                success: function(data){
                    if(data.success == true){
                        if (data.reload == true) {
                            table.ajax.reload();
                        } else {
                            $("#img-colors-"+id).remove(); 
                        }                                               
                        msgNotifica(true, data.message, true, false);
                    } else {
                        msgNotifica(false, data.message, true, false);
                    }
                },
                error: function(xhr){
                    ajaxFormError(xhr);
                }
            });
        };


        /**
         * Update status posição.
         * @param int id
         * @param int url
         * @param int status
         * @param string token
         */
        statusPosition = function(id, url, sta, token)
        {
            var status;
            (sta == 1 ? status = 0 : status = 1);         
            $.ajax({
                type: 'POST',
                headers: {'X-CSRF-TOKEN':token},
                dataType: "json",
                url: url,
                data: {_method:'put','active':status},
                success: function(data){
                    if(data.success == true){
                        $("#btns-"+id).html(data.html);
                        msgNotifica(true, data.message, true, false);
                    } else {
                        msgNotifica(false, data.message, true, false);
                    }
                },
                error: function(xhr){
                    ajaxFormError(xhr);
                }
            });
        };

        /**
         * Remove image position.
         * @param int id
         * @param string url
         */

        deletePosition = function(id, url)
        {
            $.ajax({
                type: 'DELETE',
                dataType: "json",
                url: url,
                headers: {'X-CSRF-TOKEN':tableProduct.token},
                success: function(data){
                    if(data.success == true){
                        $("#img-positions-"+id).hide();                        
                        msgNotifica(true, data.message, true, false);
                    } else {
                        msgNotifica(false, data.message, true, false);
                    }
                },
                error: function(xhr){
                    ajaxFormError(xhr);
                }
            });
        };


        $("body").on("click","#btn-colors",function(e){
            $(this).parents("#form-colors").ajaxForm(opc_colors);
        });
        var opc_colors = { 
            beforeSend: function() {
                setBtn(1,tableProduct.txtLoader,false,'loader disbeled','submit-colors','btn-colors');
            },
            success: function(data) {
                if (data.success == true) {
                    if (data.ac == 'create') {
                        $('input[name="img[code]"]').val('');
                        $('input[name="img[color]"]').val('');
                        $('input[name="img[html]"]').val('');
                        $('#barvadiv' ).attr('style', 'margin-top:2px;width:100px;height:100px;');
                        $("#uploadCanvas").val('');

                        // change radio cover
                        var idpro = $("#cover_id").val();
                        $("#load_cover_"+idpro).html('<label for="img_cover_'+idpro+'_1" class="button green-active">'+
                                                        '<input type="radio" name="img[cover]" id="img_cover_'+idpro+'_1" value="1">'+
                                                        'Sim'+
                                                     '</label>'+
                                                        '<label for="img_cover_'+idpro+'_2" class="button red-active active">'+
                                                        '<input type="radio" name="img[cover]" id="img_cover_'+idpro+'_2" value="0" checked>'+
                                                        'Não'+
                                                      '</label>');

                        // reset group clors
                        $(".color").removeAttr('data-selected');
                        $("#group-colors-"+idpro).html('<span class="groups"></span>'); 

                        var order = $('input[name="img[order]"]').val(),
                            sum_order = parseFloat(order)+1;
                        $('input[name="img[order]"]').val(sum_order);

                        $('input[name="pos[order]"]').val('1');

                        var count_colors = $("#count_colors").html(),
                        total_colors = parseFloat(count_colors)+1;
                        $("#count_colors").html(total_colors);

                        // ability tab #tab-positions
                        nextTabs('new-product','show-positions', true);
                        $("#insert_color").html('<input name="pos[image_color_id]" type="hidden" value="'+data.id+'">'+
                                                '<input name="pos[name]" type="hidden" value="'+data.name+'">'+
                                                '<input name="pos[color]" type="hidden" value="'+data.color+'">'+
                                                '<input name="pos[code]" type="hidden" value="'+data.code+'">');

                        setBtn(1,tableProduct.txtNext,true,'icon-forward','submit-colors','btn-colors');
                        table.ajax.reload();
                    };

                    if (data.ac == 'add') {
                        var count_colors = $("#count_colors").html(),
                        total_colors = parseFloat(count_colors)+1;
                        $("#count_colors").html(total_colors);
                        
                        $("#gallery-colors-"+data.product_id).prepend(data.html);
                        fechaModal();
                    }

                    if (data.ac == 'update') {
                           $("#img-colors-"+data.id).html(data.html);
                        fechaModal();
                    }

                    msgNotifica(true, data.message, true, false);
                } else {
                    msgNotifica(false, data.message, true, false);
                    setBtn(1,tableProduct.txtSave,true,'icon-tick','submit-colors','btn-colors');                    
                }
            },
            error: function(xhr)
            {
                ajaxFormError(xhr);
                setBtn(1,tableProduct.txtSave,true,'icon-tick','submit-colors','btn-colors');
            }
        };


        // Adiciona e alterar Posições
        $("body").on("click","#btn-position",function(e){
            $(this).parents("#form-positions").ajaxForm(opc_positions);
        });     
        var opc_positions = { 
            beforeSend: function() {
                setBtn(1,tableProduct.txtLoader,false,'loader','submit-position','btn-position');
            },
            success: function(data) {
                if (data.success == true) {
                    if (data.ac == 'add') {
                        $("#gallery-positions-"+data.color_id).prepend(data.html);
                        fechaModal();
                    }else if (data.ac == 'update') {
                        $("#img-positions-"+data.id).html(data.html);
                        fechaModal();
                    } else {
                        setBtn(1,tableProduct.txtNext,true,'icon-forward','submit-position','btn-position');
                        var order = $('input[name="pos[order]"]').val(),
                            sum_order = parseFloat(order)+1;
                        $('input[name="pos[order]"]').val(sum_order);
                        $( "#upload_position" ).val('');
                    }
                    msgNotifica(true, data.message, true, false);
                };
            },
            complete: function(data) {
                setBtn(1,tableProduct.txtNext,true,'icon-forward','submit-position','btn-position');

            },
            error: function(xhr)
            {
                ajaxFormError(xhr);
                setBtn(1,tableProduct.txtNext,true,'icon-forward','submit-position','btn-position');
            }
        }; 

    }

})(jQuery);