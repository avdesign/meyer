@foreach($configPrice as $price)

    <p class="button-height">                                                            
        <span class="input">
            <label for="profile-{{$price->id}}" class="button blue-gradient">{{$price->profile}}</label>
            
            <span class="number input margin-right">
                <button type="button" class="button number-down">-</button>
                <input type="text" name="price[{{$price->id}}][price_card_percent]"  value="{{$price->percent_card}}" size="2" class="input-unstyled" data-number-options='{"min":1,"max":50,"increment":0.5,"shiftIncrement":5,"precision":0.25}'>
                <button type="button" class="button number-up">+</button>
            </span>

            <input type="text" name="price[{{$price->id}}][price_card]" id="price_card_{{$price->id}}" class="input-unstyled input-sep" placeholder="À Prazo" value="" onKeyDown="javascript: return maskValor(this,event,8,2);" maxlength="8" style="width: 50px;">

            <span class="number input margin-right">
                <button type="button" class="button number-down">-</button>
                <input type="text" name="price[{{$price->id}}][price_cash_percent]"  value="{{$price->percent_cash}}" size="2" class="input-unstyled" data-number-options='{"min":1,"max":50,"increment":0.5,"shiftIncrement":5,"precision":0.25}'>
                <button type="button" class="button number-up">+</button>
            </span>

            <input type="text" name="price[{{$price->id}}][price_cash]" id="price_cash_{{$price->id}}" class="input-unstyled" placeholder="À Vista" value="" style="width: 50px;">

        </span>
        <input type="hidden" name="price[{{$price->id}}][config_price_id]" value="{{$price->id}}">
        <input type="hidden" name="price[{{$price->id}}][profile]" value="{{$price->profile}}">
    </p>
@endforeach
