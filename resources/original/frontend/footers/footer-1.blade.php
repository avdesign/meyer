<footer class="footer-container typefooter-3">
<div class="footer-main">

    <div class="container page-builder-ltr">
        <div class="row row_6gcj footer-top ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_0sm7 col-style"></div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 col_7sa1 col-style">
                <div class="box-information box-footer">
                    <div class="module clearfix">
                        <h3 class="modtitle">Informações</h3>
                        <div class="modcontent">
                            <ul class="menu">
                                <li><a href="#">Quem Somos</a></li>
                                <li><a href="#">Política de Privacidade</a></li>
                                <li><a href="#">Termos e Condições</a></li>
                                <li><a href="#">Forma de Pagamento</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 col_lawi col-style">
                <div class="box-account box-footer">
                    <div class="module clearfix">
                        <h3 class="modtitle">Minha Conta</h3>
                        <div class="modcontent">
                            <ul class="menu">
                                <li><a href="#">Meu Perfil</a></li>
                                <li><a href="#">Meus Pedidos</a></li>
                                <li><a href="#">Histórico dos Pedidos</a></li>
                                <li><a href="#">Endereço de Entrega</a></li>
                                <li><a href="#">Avisos Importantes</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col_b8wk col-style">
                <div class="box-contact box-footer">
                    <div class="module clearfix">
                        <h3 class="modtitle">Informação para Contato</h3>
                        <div class="modcontent">
                            <ul class="infos">
                                <li><i class="fa fa-map-marker"></i> Rua Cavalheiro, 320 </li>
                                <li><i class="fa fa-map-marker"></i> Brás - São Paulo - CEP: 03050-010</li>
                                <li><i class="fa fa-phone"></i> (11) 2081-4650 / 2081-4174</li>
                                <li><b><i class="fa fa-whatsapp"></i> WhatsApp</b> (11) 99999-9999</li>
                            </ul>
                            <div class="socials-wrap">
                                <ul>
                                    <li class="facebook">
                                        <a class="_blank" href="https://www.facebook.com" title="FaceBook" target="_blank"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="whatsapp">
                                        <a class="_blank" href="https://www.facebook.com" title="WhatsApp" target="_blank"><i class="fa fa-whatsapp"></i></a>
                                    </li>
                                    <li class="instragram">
                                        <a class="_blank" href="https://www.facebook.com" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col_363k col-style">
                <div class="row row_zebx row-style ">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_fsmd col-style">

                        <div class="module newsletter-footer2">
                            <div class="newsletter">

                                <div class="title-block">
                                    <div class="page-heading font-title">
                                        Newsletter </div>
                                    <div class="promotext">
                                        Obtenha todas as melhores ofertas, da melhor distribuidora de compras on-line do estado de São Paulo. Inscreva-se agora ! </div>
                                    <div class="pre-text"></div>
                                </div>
                                <div class="block_content">
                                    <form method="post" name="signup" id="signup" class="btn-group form-inline signup">
                                        <div class="form-group required send-mail">
                                            <div class="input-box">
                                                <!-- <i class="fa fa-envelope"></i> -->
                                                <input type="email" placeholder="Seu endereço de email..." value="" class="form-control" id="txtemail" name="txtemail" size="55">
                                            </div>
                                            <div class="subcribe">
                                                <button class="btn btn-default btn-lg font-title" type="submit" onclick="return subscribe_newsletter();" name="submit">Enviar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--/.modcontent-->
                            </div>
                            <script type="text/javascript">
                                function subscribe_newsletter() {
                                    var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                                    var email = $('#txtemail').val();
                                    var d = new Date();
                                    var createdate = d.getFullYear() + '-' + (d.getMonth() + 1) + '-' + d.getDate() + ' ' + d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds();
                                    var status = 0;
                                    var dataString = 'email=' + email + '&createdate=' + createdate + '&status=' + status;
                                    if (email != "") {
                                        if (!emailpattern.test(email)) {
                                            $('.show-error').remove();
                                            $('.send-mail').after('<span class="show-error" style="color: red;margin-left: 10px"> Email inválido </span>')
                                            return false;
                                        } else {
                                            $.ajax({
                                                url: 'index.php?route=extension/module/so_newletter_custom_popup/newsletter',
                                                type: 'post',
                                                data: dataString,
                                                dataType: 'json',
                                                success: function(json) {
                                                    $('.show-error').remove();
                                                    if (json.message == "Assinatura bem sucedida") {
                                                        $('.send-mail').after('<span class="show-error" style="color: #003bb3;margin-left: 10px"> ' + json.message + '</span>');
                                                        setTimeout(function() {
                                                            var this_close = $('.popup-close');
                                                            this_close.parent().css('display', 'none');
                                                            this_close.parents().find('.so_newletter_custom_popup_bg').removeClass('popup_bg');
                                                        }, 3000);

                                                    } else {
                                                        $('.send-mail').after('<span class="show-error" style="color: red;margin-left: 10px"> ' + json.message + '</span>');
                                                    }
                                                    //document.getElementById('signup').reset();
                                                    var x = document.getElementsByClassName('signup');

                                                    for (i = 0; i < x.length; i++) {
                                                        x[i].reset();
                                                    }
                                                }
                                            });
                                            return false;
                                        }
                                    } else {
                                        $('.send-mail').after('<span class="show-error" style="color: red;margin-left: 10px"> O email é obrigatório! </span>');
                                        $(email).focus();
                                        return false;
                                    }
                                }
                            </script>
                        </div>

                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_yxko col-style">
                        <ul class="apps">
                            <li>
                                <a href="#">
                                    <img src="{{url('assets/frontend/theme/meyer-calcados/images/logo/logo6.png')}}" alt="image">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container page-builder-ltr">
        <div class="row row_p3p4 row-style ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_xio5 col-style">
                <div class="footer-middle">
                    <div class="security"><a href="#"><img src="{{url('assets/frontend/theme/meyer-calcados/images/security.jpg')}}" alt="image"></a></div>
                    <ul class="footer-links font-title">
                        <li><a href="#">Quem Somos</a></li>
                        <li><a href="#">Cadastro</a></li>
                        <li><a href="#">Política de Privacidade</a></li>
                        <li><a href="#">Mapa do Site</a></li>
                        <li><a href="#">Marcas</a></li>
                        <li><a href="#">Fale Conosco</a></li>
                    </ul>
                    <p>MEYER COMERCIO DE CALÇADOS, BOLSAS E ARTIGOS ESPORTIVOS LTDA-EPP CNPJ: 12.217.211/0001-60 - INSCRIÇÃO ESTADUAL 147.312.932.113</p>
                </div>
            </div>

        </div>
    </div>
    
</div>


    <!-- FOOTER BOTTOM -->
    <div class="footer-bottom ">
        <div class="container">
            <div class="col-lg-12 col-xs-12 payment-w">
                <img src="{{url('assets/frontend/theme/meyer-calcados/images/payment.png')}}" alt="imgpayment">
            </div>
        </div>
        <div class="copyright-w">
            <div class="container">
                <div class="col-lg-12 col-xs-12 copyright">
                    {{config('app.name')}} © 2017 AV Design. Todos os direitos reservados <a href="http://www.anselmovelame.com.br" target="_blank">AV Design</a> </div>
            </div>
        </div>
    </div>
</footer>