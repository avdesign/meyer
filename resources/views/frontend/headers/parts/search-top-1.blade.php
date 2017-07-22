<div class="middle2 col-lg-6 col-md-5 col-sm-6 col-xs-4">
    <div class="search-header-w">
        <div class="icon-search hidden-lg hidden-md"><i class="fa fa-search"></i></div>
        <div id="sosearchpro" class="sosearchpro-wrapper so-search search-pro so-search">
            <div class="searchbox">
                <form method="GET" action="index.php">
                    <div id="search0" class="search input-group">
                        <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Pesquise aqui..." name="search">
                        <span class="input-group-btn">
                            <button type="submit" class="button-search btn btn-default btn-lg" name="submit_search">Busca</button>                
                         </span>
                    </div>
                    <input type="hidden" name="route" value="product/search" />
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    // Autocomplete */
    (function($) {
        $.fn.Soautocomplete = function(option) {
            return this.each(function() {
                this.timer = null;
                this.items = new Array();

                $.extend(this, option);

                $(this).attr('autocomplete', 'off');

                // Focus
                $(this).on('focus', function() {
                    this.request();
                });

                // Blur
                $(this).on('blur', function() {
                    setTimeout(function(object) {
                        object.hide();
                    }, 200, this);
                });

                // Keydown
                $(this).on('keydown', function(event) {
                    switch (event.keyCode) {
                        case 27: // escape
                            this.hide();
                            break;
                        default:
                            this.request();
                            break;
                    }
                });

                // Click
                this.click = function(event) {
                    event.preventDefault();

                    value = $(event.target).parent().attr('data-value');

                    if (value && this.items[value]) {
                        this.select(this.items[value]);
                    }
                }

                // Show
                this.show = function() {
                    var pos = $(this).position();

                    $(this).siblings('ul.dropdown-menu').css({
                        top: pos.top + $(this).outerHeight(),

                    });

                    $(this).siblings('ul.dropdown-menu').show();
                }

                // Hide
                this.hide = function() {
                    $(this).siblings('ul.dropdown-menu').hide();
                }

                // Request
                this.request = function() {
                    clearTimeout(this.timer);

                    this.timer = setTimeout(function(object) {
                        object.source($(object).val(), $.proxy(object.response, object));
                    }, 200, this);
                }

                // Response
                this.response = function(json) {
                    html = '';

                    if (json.length) {
                        for (i = 0; i < json.length; i++) {
                            this.items[json[i]['value']] = json[i];
                        }

                        for (i = 0; i < json.length; i++) {
                            if (!json[i]['category']) {
                                html += '<li class="media" data-value="' + json[i]['value'] + '" title="' + json[i]['label'] + '">';
                                if (json[i]['image'] && json[i]['show_image'] && json[i]['show_image'] == 1) {
                                    html += '   <a class="media-left" href="' + json[i]['link'] + '"><img class="pull-left" src="' + json[i]['image'] + '"></a>';
                                }

                                html += '<div class="media-body">';
                                html += '<a href="' + json[i]['link'] + '" title="' + json[i]['label'] + '"><span>' + json[i]['cate_name'] + json[i]['label'] + '</span></a>';
                                if (json[i]['price'] && json[i]['show_price'] && json[i]['show_price'] == 1) {
                                    html += '   <div class="price clearfix">';
                                    if (!json[i]['special']) {
                                        html += '<span class="price-new">' + json[i]['price'] + '</span>';;
                                    } else {
                                        html += '<span class="price-new">' + json[i]['special'] + '</span> <span class="price-old" style="text-decoration:line-through;">' + json[i]['price'] + '</span>';
                                    }
                                    if (json[i]['tax']) {
                                        html += '<span class="price-tax hidden">Tax : ' + json[i]['tax'] + '</span>';
                                    }
                                    html += '   </div>';
                                }
                                html += '</div></li>';
                                html += '<li class="clearfix"></li>';
                            }
                        }

                        // Get todas categorias
                        var category = new Array();

                        for (i = 0; i < json.length; i++) {
                            if (json[i]['category']) {
                                if (!category[json[i]['category']]) {
                                    category[json[i]['category']] = new Array();
                                    category[json[i]['category']]['name'] = json[i]['category'];
                                    category[json[i]['category']]['item'] = new Array();
                                }

                                category[json[i]['category']]['item'].push(json[i]);
                            }
                        }

                        for (i in category) {
                            html += '<li class="dropdown-header">' + category[i]['name'] + '</li>';

                            for (j = 0; j < category[i]['item'].length; j++) {
                                html += '<li data-value="' + category[i]['item'][j]['value'] + '"><a href="#">&nbsp;&nbsp;&nbsp;' + category[i]['item'][j]['label'] + '</a></li>';
                            }
                        }
                    }

                    if (html) {
                        this.show();
                    } else {
                        this.hide();
                    }

                    $(this).siblings('ul.dropdown-menu').html(html);
                }

                $(this).after('<ul class="dropdown-menu"></ul>');

            });
        }
    })(window.jQuery);

    $(document).ready(function() {
        var selector = '#search0';
        var total = 0;
        var showimage = 1;
        var showprice = 1;
        var character = 3;
        var height = 60;
        var width = 60;

        $(selector).find('input[name=\'search\']').Soautocomplete({
            delay: 500,
            source: function(request, response) {
                var category_id = $(".select_category select[name=\"category_id\"]").first().val();
                if (typeof(category_id) == 'undefined')
                    category_id = 0;
                var limit = 5;
                if (request.length >= character) {
                    $.ajax({
                        url: 'index.php?route=extension/module/so_searchpro/autocomplete&filter_category_id=' + category_id + '&limit=' + limit + '&width=' + width + '&height=' + height + '&filter_name=' + encodeURIComponent(request),
                        dataType: 'json',
                        success: function(json) {
                            response($.map(json, function(item) {
                                total = 0;
                                if (item.total) {
                                    total = item.total;
                                }

                                return {
                                    price: item.price,
                                    special: item.special,
                                    tax: item.tax,
                                    label: item.name,
                                    cate_name: (item.category_name) ? item.category_name + ' > ' : '',
                                    image: item.image,
                                    link: item.link,
                                    minimum: item.minimum,
                                    show_price: showprice,
                                    show_image: showimage,
                                    value: item.product_id,
                                }
                            }));
                        }
                    });
                }
            },
        });
    });
</script>
