<!-- Form: Product -->
@if(isset($data))
    <form id="form-products" method="post" action="{{route('catalogo.update', ['cat' => $data->category_id,'id' => $data->id])}}" onsubmit="return false">
        <input name="_method" type="hidden" value="PUT">
        <input name="prod[brand]" type="hidden" value="{{$data->brand}}">
        <input name="prod[section]" type="hidden" value="{{$data->section}}">
        <input name="prod[category]" type="hidden" value="{{$data->category}}">

        <div align="center">
            <select id="select-brands" name="prod[brand_id]" class="select blue-gradient glossy">
                @foreach($brands as $keybra => $valbra)
                    <option value="{{$keybra}}" 
                    @if(isset($data) && $data->brand_id == $keybra) selected @endif> {{$valbra}} </option>
                @endforeach
            </select>
            <select id="select-sections" name="prod[section_id]" class="select red-gradient">
                @foreach($sections as $keysec => $valsec)
                    <option value="{{$keysec}}" 
                    @if(isset($data) && $data->section_id == $keysec) selected @endif> {{$valsec}} </option>
                @endforeach
            </select>
            <span class="loader" id="load-select" style="display:none"></span>
            <span id="combo-categories">
                <select id="select-categories" name="prod[category_id]" class="select anthracite-gradient">
                    @foreach($categories as $valcat)
                        <option value="{{$valcat->id}}" 
                        @if(isset($data) && $data->category_id == $valcat->id) selected @endif> {{$valcat->name}} </option>
                    @endforeach
                </select>
            </span>
        </div>
@else
    <form id="form-products" method="post" action="{{route('catalogo.store', $category->id)}}" onsubmit="return false">
        <input id="category_id" name="prod[category_id]" type="hidden" value="{{$category->id}}">
        <input id="section_id" name="prod[section_id]" type="hidden" value="{{$category->section_id}}">
        <input name="prod[category]" type="hidden" value="{{$category->name}}">
        <input name="prod[section]" type="hidden" value="{{$category->section}}">
@endif
    {{csrf_field()}}

        <div class="columns">
            <div class="twelve-columns">
                <fieldset class="fieldset">
                    <legend class="legend">Informações do produto</legend>
                    <p class="button-height inline-label">
                        <label for="name" class="label">Nome<span class="red">*</span></label>
                        <input type="text" name="prod[name]" id="name" value="{{$data->name or old('name')}}" autocomplete="off" class="input full-width">
                    </p>
                    <p class="button-height inline-label">
                        <label for="tags" class="label">Tags</label>
                        <input type="text" name="prod[tags]" id="tags" value="{{$data->tags or old('tags')}}" autocomplete="off" class="input full-width">
                    </p>
                    <p class="button-height inline-label">
                        <label for="description" class="label">Descrição</label>
                        <textarea name="prod[description]" id="description" class="input full-width" cols="10" rows="2">{{$data->description or old('description')}}</textarea>
                    </p>
                    @if($configProduct->video == 1)
                        <p class="button-height inline-label">
                            <label for="video" class="label">Video(link)</label>
                            <input type="text" name="prod[video]" id="video" value="{{$data->video or old('video')}}" autocomplete="off" class="input full-width">
                        </p>
                    @endif
                </fieldset>
            </div>
            <div class="new-row five-columns twelve-columns-tablet">
                <fieldset class="fieldset">
                    <legend class="legend">Status do produto</legend>
                    <p class="button-height inline-label">
                        <label for="active" class="label">Status</label>
                        <span class="button-group">
                            @if(isset($data))
                                <label for="active_1" class="button green-active">
                                    <input type="radio" name="prod[active]" id="active_1" value="1" @if($data->active == 1) checked @endif>
                                    Ativo
                                </label>
                                <label for="active_2" class="button red-active" >
                                    <input type="radio" name="prod[active]" id="active_2" value="0" @if($data->active == 0) checked @endif>
                                    Inativo
                                </label>
                            @else
                                <label for="active_1" class="button green-active">
                                    <input type="radio" name="prod[active]" id="active_1" value="1"  checked >
                                    Ativo
                                </label>
                                <label for="active_2" class="button red-active" >
                                    <input type="radio" name="prod[active]" id="active_2" value="0" >
                                    Inativo
                                </label>
                            @endif
                        </span>
                    </p>
                    <p class="button-height inline-label">
                        <label for="new" class="label">Novo</label>
                        <span class="button-group">
                            @if(isset($data))
                                <label for="new_1" class="button green-active">
                                    <input type="radio" name="prod[new]" id="new_1" value="1" @if($data->new == 1) checked @endif>
                                    Ativo
                                </label>
                                <label for="new_2" class="button red-active" >
                                    <input type="radio" name="prod[new]" id="new_2" value="0" @if($data->new == 0) checked @endif>
                                    Inativo
                                </label>
                            @else
                                <label for="new_1" class="button green-active">
                                    <input type="radio" name="prod[new]" id="new_1" value="1"  checked >
                                    Ativo
                                </label>
                                <label for="new_2" class="button red-active" >
                                    <input type="radio" name="prod[new]" id="new_2" value="0" >
                                    Inativo
                                </label>
                            @endif
                        </span>
                    </p>
                    <p class="button-height inline-label">
                        <label for="featured" class="label">Destaque</label>
                        <span class="button-group">
                            @if(isset($data))
                                <label for="featured_1" class="button green-active">
                                    <input type="radio" name="prod[featured]" id="featured_1" value="1" @if($data->featured == 1) checked @endif>
                                    Ativo
                                </label>
                                <label for="featured_2" class="button red-active" >
                                    <input type="radio" name="prod[featured]" id="featured_2" value="0" @if($data->featured == 0) checked @endif>
                                    Inativo
                                </label>
                            @else
                                <label for="featured_1" class="button green-active">
                                    <input type="radio" name="prod[featured]" id="featured_1" value="1">
                                    Ativo
                                </label>
                                <label for="featured_2" class="button red-active" >
                                    <input type="radio" name="prod[featured]" id="featured_2" value="0" checked>
                                    Inativo
                                </label>
                            @endif
                        </span>
                    </p>
                    <p class="button-height inline-label">
                        <label for="trend" class="label">Tendência</label>
                        <span class="button-group">
                            @if(isset($data))
                                <label for="trend_1" class="button green-active">
                                    <input type="radio" name="prod[trend]" id="trend_1" value="1" @if($data->trend == 1) checked @endif>
                                    Ativo
                                </label>
                                <label for="trend_2" class="button red-active" >
                                    <input type="radio" name="prod[trend]" id="trend_2" value="0" @if($data->trend == 0) checked @endif>
                                    Inativo
                                </label>
                            @else
                                <label for="trend_1" class="button green-active">
                                    <input type="radio" name="prod[trend]" id="trend_1" value="1">
                                    Ativo
                                </label>
                                <label for="trend_2" class="button red-active" >
                                    <input type="radio" name="prod[trend]" id="trend_2" value="0" checked>
                                    Inativo
                                </label>
                            @endif
                        </span>
                    </p>
                    <p class="button-height inline-label">
                        <label for="black_friday" class="label">Black Friday</label>
                        <span class="button-group">
                            @if(isset($data))
                                <label for="black_friday_1" class="button green-active">
                                    <input type="radio" name="prod[black_friday]" id="black_friday_1" value="1" @if($data->black_friday == 1) checked @endif>
                                    Ativo
                                </label>
                                <label for="black_friday_2" class="button red-active" >
                                    <input type="radio" name="prod[black_friday]" id="black_friday_2" value="0" @if($data->black_friday == 0) checked @endif>
                                    Inativo
                                </label>
                            @else
                                <label for="black_friday_1" class="button green-active">
                                    <input type="radio" name="prod[black_friday]" id="black_friday_1" value="1">
                                    Ativo
                                </label>
                                <label for="black_friday_2" class="button red-active" >
                                    <input type="radio" name="prod[black_friday]" id="black_friday_2" value="0" checked>
                                    Inativo
                                </label>
                            @endif
                        </span>
                    </p>

                    @if($configProduct->kit == 1)
                        <p class="button-height inline-label">
                            <label for="kit" class="label">Venda Caixa</label>
                            <span class="button-group">
                                @if(isset($data))
                                    <label for="kit_1" class="button green-active">
                                        <input type="radio" name="prod[kit]" id="kit_1" value="1" @if($data->kit == 1) checked @endif>
                                        Ativo
                                    </label>
                                    <label for="kit_2" class="button red-active">
                                        <input type="radio" name="prod[kit]" id="kit_2" value="0" @if($data->kit == 0) checked @endif>
                                        Inativo
                                    </label>
                                @else
                                    <label for="kit_1" class="button green-active">
                                        <input type="radio" name="prod[kit]"  id="kit_1" onclick="setKit('1','{{$idpro}}','painel/produto')" value="1" checked >
                                        Ativo
                                    </label>
                                    <label for="kit_2" class="button red-active">
                                        <input type="radio" name="prod[kit]" id="kit_2" onclick="setKit('0','{{$idpro}}','painel/produto')" value="0" >
                                        Inativo
                                    </label>
                                @endif
                            </span>
                        </p>
                    @endif

                    @if($configProduct->stock == 1)
                        <p class="button-height inline-label">
                            <label for="stock" class="label">Estoque</label>
                            <span class="button-group">
                                @if(isset($data))
                                    <label for="stock_1" class="button green-active">
                                        <input type="radio" name="prod[stock]" id="stock_1" value="1" @if($data->stock == 1) checked @endif>
                                        Ativo
                                    </label>
                                    <label for="stock_2" class="button red-active">
                                        <input type="radio" name="prod[stock]" id="stock_2" value="0" @if($data->stock == 0) checked @endif>
                                        Inativo
                                    </label>
                                @else
                                    <label for="stock_1" class="button green-active">
                                        <input type="radio" name="prod[stock]"  id="stock_1" onclick="setStock('1','{{$idpro}}','painel/produto')" value="1" checked >
                                        Ativo
                                    </label>
                                    <label for="stock_2" class="button red-active">
                                        <input type="radio" name="prod[stock]" id="stock_2" onclick="setStock('0','{{$idpro}}','painel/produto')" value="0" >
                                        Inativo
                                    </label>
                                @endif
                            </span>
                        </p>
                    @endif

                    @if($configProduct->freight == 1)
                        @include('backend.products.modal.forms.freight')
                    @endif

                </fieldset>
            </div>
            <div class="seven-columns twelve-columns-tablet">
                <fieldset class="fieldset">
                    <legend class="legend">Valores do produto</legend>
                        <p class="button-height inline-small-label">
                            <span class="label"><b>Und.</b><span class="red">*</span></span>
                            <select id="unit_measure" name="prod[unit_measure]" class="select">
                                @foreach($unit_measure as $key => $val)
                                	<option value="{{$key}}|{{$val}}"
                                    @if(isset($data) && $data->unit == $key) selected @endif>{{$key}} {{$val}}</option>
                                @endforeach    
                            </select>
                            @if($configProduct->kit == 1)
                                <span id="kits">
                                    <select name="prod[kit_name]" class="select">
                                        @foreach($kits as $key => $val)
                                            <option value="{{$val}}"
                                            @if(isset($data) && $data->kit_name == $val) selected @endif>{{$val}}</option>
                                        @endforeach    
                                    </select>
                                </span>
                            @endif
                        </p>

                    @if($configProduct->cost == 1)
                        <p class="button-height inline-small-label">
                            <label for="cost" class="label"><b>Custo</b><span class="red">*</span></label>
                            <input type="text" name="prod[cost]" id="cost" value="{{$data->cost or old('cost')}}" class="input" onKeyDown="javascript: return maskValor(this,event,8,2);" maxlength="8">
                        </p>
                    @endif

                    <p class="button-height block-label">
                        <label for="info-calculate" class="label"><small>À Vista (clique em calcular)</small></label>
                    </p>

                    @if(isset($data))
                        @foreach($configPrice as $price)
                            <p class="button-height">                                                            
                                <span class="input">
                                    <label for="profile-{{$price->id}}" class="button blue-gradient">{{$price->profile}}</label>
                                    <span class="number input margin-right">
                                        <button type="button" class="button number-down">-</button>
                                        <input type="text" name="price[{{$price->id}}][price_percent]"  value="{{$price->price_percent}}" size="4" class="input-unstyled" data-number-options='{"min":1,"max":50,"increment":0.5,"shiftIncrement":5,"precision":0.25}'>
                                        <button type="button" class="button number-up">+</button>
                                    </span>
                                    <input type="text" name="price[{{$price->id}}][price_card]" id="price_card_{{$price->id}}" class="input-unstyled input-sep" placeholder="À Prazo" value="{{$price->price_card}}" onKeyDown="javascript: return maskValor(this,event,8,2);" maxlength="8" style="width: 50px;">
                                    <input type="text" name="price[{{$price->id}}][price_cash]" id="price_cash_{{$price->id}}" class="input-unstyled" placeholder="À Vista" value="{{$price->price_cash}}" style="width: 80px;">
                                    <a href="javascript:calculateCash('{{$price->id}}', 'price')" class="button compact">Calcular</a>
                                </span>
                                <input type="hidden" name="price[{{$price->id}}][config_price_id]" value="{{$price->config_price_id}}">
                                <input type="hidden" name="price[{{$price->id}}][profile]" value="{{$price->profile}}">
                                <input type="hidden" name="price[{{$price->id}}][product_id]" value="{{$data->id}}">
                                <input type="hidden" name="price[{{$price->id}}][id]" value="{{$price->id}}">
                            </p>
                        @endforeach
                    @else
                        @foreach($configPrice as $price)
                            <p class="button-height">                                                            
                                <span class="input">
                                    <label for="profile-{{$price->id}}" class="button blue-gradient">{{$price->profile}}</label>
                                    <span class="number input margin-right">
                                        <button type="button" class="button number-down">-</button>
                                        <input type="text" name="price[{{$price->id}}][price_percent]"  value="{{$price->percent}}" size="4" class="input-unstyled" data-number-options='{"min":1,"max":50,"increment":0.5,"shiftIncrement":5,"precision":0.25}'>
                                        <button type="button" class="button number-up">+</button>
                                    </span>
                                    <input type="text" name="price[{{$price->id}}][price_card]" id="price_card_{{$price->id}}" class="input-unstyled input-sep" placeholder="À Prazo" value="" onKeyDown="javascript: return maskValor(this,event,8,2);" maxlength="8" style="width: 50px;">
                                    <input type="text" name="price[{{$price->id}}][price_cash]" id="price_cash_{{$price->id}}" class="input-unstyled" placeholder="À Vista" value="" style="width: 80px;">
                                    <a href="javascript:calculateCash('{{$price->id}}', 'price')" class="button compact">Calcular</a>
                                </span>
                                <input type="hidden" name="price[{{$price->id}}][config_price_id]" value="{{$price->id}}">
                                <input type="hidden" name="price[{{$price->id}}][profile]" value="{{$price->profile}}">
                            </p>
                        @endforeach
                    @endif
                       
                    <p class="button-height inline-label">
                        <label for="offer" class="label">Em Oferta?</label>
                        <span class="button-group">
                            @if(isset($data))
                                <label for="offer_1" class="button green-active">
                                    <input type="radio" onclick="setOffer(1)" name="prod[offer]" id="offer_1" value="1" @if($data->offer == 1) checked @endif>
                                    Sim
                                </label>
                                <label for="offer_2" class="button red-active" >
                                    <input type="radio" onclick="setOffer(0)" name="prod[offer]" id="offer_2" value="0" @if($data->offer == 0) checked @endif>
                                    Não
                                </label>
                            @else
                                <label for="offer_1" class="button green-active">
                                    <input type="radio" onclick="setOffer(1)" name="prod[offer]" id="offer_1" value="1">
                                    Sim
                                </label>
                                <label for="offer_2" class="button red-active" >
                                    <input type="radio" onclick="setOffer(0)" name="prod[offer]" id="offer_2" value="0" checked>
                                    Não
                                </label>
                            @endif
                        </span>
                    </p>
                    @if(isset($data))
                        <div id="values_offers" style="display:@if($data->offer == 1 ) block @else none @endif">
                        @foreach($configPrice as $offer)
                            <p class="button-height">                                                            
                                <span class="input">
                                    <label for="profile-{{$offer->id}}" class="button green-gradient">{{$offer->profile}}</label>
                                    <span class="number input margin-right">
                                        <button type="button" class="button number-down">-</button>
                                        <input type="text" name="price[{{$offer->id}}][offer_percent]"  value="{{$offer->offer_percent}}" size="4" class="input-unstyled" data-number-options='{"min":1,"max":50,"increment":0.5,"shiftIncrement":5,"precision":0.25}'>
                                        <button type="button" class="button number-up">+</button>
                                    </span>
                                    <input type="text" name="price[{{$offer->id}}][offer_card]" id="offer_card_{{$offer->id}}" class="input-unstyled input-sep" placeholder="À Prazo" value="{{$offer->offer_card}}" onKeyDown="javascript: return maskValor(this,event,8,2);" maxlength="8" style="width: 50px;">
                                    <input type="text" name="price[{{$offer->id}}][offer_cash]" id="offer_cash_{{$offer->id}}" class="input-unstyled" placeholder="À Vista" value="{{$offer->offer_cash}}" style="width: 80px;">
                                    <a href="javascript:calculateCash('{{$offer->id}}', 'offer')" class="button compact">Calcular</a>
                                </span>                    
                            </p>
                        @endforeach
                    @else
                        <div id="values_offers" style="display:none">
                        @foreach($configPrice as $offer)
                            <p class="button-height">                                                            
                                <span class="input">
                                    <label for="profile-{{$offer->id}}" class="button green-gradient">{{$offer->profile}}</label>
                                    <span class="number input margin-right">
                                        <button type="button" class="button number-down">-</button>
                                        <input type="text" name="price[{{$offer->id}}][offer_percent]"  value="{{$offer->percent}}" size="4" class="input-unstyled" data-number-options='{"min":1,"max":50,"increment":0.5,"shiftIncrement":5,"precision":0.25}'>
                                        <button type="button" class="button number-up">+</button>
                                    </span>
                                    <input type="text" name="price[{{$offer->id}}][offer_card]" id="offer_card_{{$offer->id}}" class="input-unstyled input-sep" placeholder="À Prazo" value="" onKeyDown="javascript: return maskValor(this,event,8,2);" maxlength="8" style="width: 50px;">
                                    <input type="text" name="price[{{$offer->id}}][offer_cash]" id="offer_cash_{{$offer->id}}" class="input-unstyled" placeholder="À Vista" value="" style="width: 80px;">
                                    <a href="javascript:calculateCash('{{$offer->id}}', 'offer')" class="button compact">Calcular</a>
                                </span>                    
                            </p>
                        @endforeach
                    @endif
                    </div>
                </fieldset>

                @if(isset($data))
                    <div align="center">
                        <button id="submit-produto" type="submit" class="button glossy" onclick="formProduct('products','update')">
                            Alterar
                            <span  id="btn-produto" class="button-icon right-side"><span class="icon-forward"></span></span>
                        </button>
                    </div>
                @else
                    <fieldset class="fieldset">
                       <p class="button-height inline-label">
                       <label for="brand" class="label">Fabricante<span class="red">*</span></label>
                        <select id="brand_id" name="prod[brand_id]" class="select  blue-gradient glossy">
                            <option value="">Selecione um</option>
                            @foreach($brands as $key => $val)
                                <option value="{{$key}}">{{$val}}</option>
                            @endforeach
                        </select>
                        </p>
                    </fieldset>
                    <div class="align-right">
                        <button id="submit-product" type="button" class="button glossy" onclick="formProduct('products','create')">
                            Proximo
                            <span  id="btn-product" class="button-icon right-side"><span class="icon-forward"></span></span>
                        </button>
                    </div>                         
                @endif

            </div>
        </div>

    </form>


<script>
$("#select-sections").change(function(){
    $("#load-select").show();
    $("#combo-categories").hide();
    var idsec = $(this).val();

    $.get(base+"/painel/produto/"+idsec+"/combo", function(data){
        $("#load-select").hide();
        $("#combo-categories").show();
        $("#combo-categories").html(data);
    });
});
</script>