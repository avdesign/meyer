<div class="block">
    <div class="with-padding">
        <h4 class="blue underline">Perfil do Produto</h4>
        <ul class="bullet-list">
            <li>Nome: <strong> {{$data->name}} </strong></li>
            <li>Descrição: <strong> {{$data->description}} </strong></li>
            <li>Tags: <strong> {{$data->tags}} </strong></li>
            @if($configProduct->cost == 1)
                <li>Custo: <strong> {{setReal($data->cost)}} </strong></li>
            @endif
            @if($configProduct->stock == 1)
                <li>Estoque: <strong> {{$stock}} </strong></li>
            @endif
            <li>Unidade Medida: <strong> {{$data->measure}} {{$data->unit}}</strong></li>
            <li>
                À vista: <strong> {{setReal($data->price_cash)}}  </strong>&nbsp;&nbsp;&nbsp;&nbsp;
                Em oferta: <strong> {{setReal($data->offer_cash)}} </strong>
            </li>
            <li>
                À prazo: <strong> {{setReal($data->price_card)}}  </strong>&nbsp;&nbsp;&nbsp;&nbsp;
                Em oferta: <strong> {{setReal($data->offer_card)}} </strong>
            </li>
            <li>Desconto: <strong> {{$data->percent}}%</strong></li>
            @if($configProduct->freight == 1)
                @if($configFreight->weight == 1)
                    <li>Peso: <strong> {{$data->weight}} Kg</strong></li>
                @endif
                @if($configFreight->height == 1)
                    <li>Altura: <strong> {{$data->height}} cm</strong></li>
                @endif
                @if($configFreight->width == 1)
                    <li>Largura: <strong> {{$data->width}} cm</strong></li>
                @endif
                @if($configFreight->length == 1)
                    <li>Comprimento: <strong> {{$data->length}} cm</strong></li>
                @endif
            @endif
            @if($configProduct->video == 1)
                <li>Video: <strong> {{$data->video}} </strong></li>
            @endif
        </ul>
    </div>
</div>