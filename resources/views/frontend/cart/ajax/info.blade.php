<div id="cart" class="btn-shopping-cart">
    <a data-loading-text="Carregando..." class="btn-group top_cart dropdown-toggle" data-toggle="dropdown">
        <div class="shopcart">
            <!-- <i class="fa fa-shopping-cart"></i> -->
            <div class="shopcart-inner">
                <p class="text-shopping-cart">Meu Carrinho</p>

                <span class="total-shopping-cart cart-total-full">
                    <i class="fa fa-check-circle"></i> 
                    <span class="items_cart">2 </span>
                    <span class="items_cart2">item(s)</span>
                    <span class="items_carts">R$ 150,00</span> 
                </span>
            </div>
            <!-- 
            <span class="text-shopping-cart-mobi hidden-lg hidden-md hidden-sm ">
                <i class="fa fa-cart-plus"></i>
            </span> 
            -->
        </div>
    </a>


    <ul class="dropdown-menu pull-right shoppingcart-box">

        <li style="text-align:center; background-color:#fe5722;">
            <span style="color:#fff;">Valor em Real (R$)</span>
        </li>

        <li class="content-item">
            <table class="table table-striped">
                <tr>
                    <td class="text-center size-img-cart">
                        <a href="#">
                            <img src="{{url('assets/frontend/images/products/100x100/produto8-cor1.jpg')}}" width="50" alt="Nome do Produto" title="Nome do Produto" class="preview" />
                        </a>
                    </td>
                    <td class="text-left">
                        <a class="cart_product_name" href="#">Produto</a>
                        <p>Cor: Azul mamamm amma</p>
                    </td>
                    <td class="text-center">1x</td>
                    <td class="text-center">40,00</td>
                    <td class="text-right">
                        <a onclick="cart.remove('540');" class="fa fa-trash-o" style="padding:3px;"></a>
                    </td>
                </tr>
            </table>
        </li>
        <li>
            <div class="checkout clearfix">
                <a href="#" class="btn btn-view-cart inverse">Ver Carrinho</a>
                <a href="#" class="btn btn-checkout pull-right">Checkout</a>
            </div>
        </li>
    </ul>