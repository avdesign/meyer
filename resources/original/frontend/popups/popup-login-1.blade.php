 <!-- LOGIN REDE SOSIAL -->
 <div class="sociallogin"></div>

<div class="modal fade in" id="so_sociallogin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog block-popup-login">
        <a href="javascript:void(0)" title="Close" class="close close-login fa fa-times-circle" data-dismiss="modal"></a>
        <div class="tt_popup_login"><strong>Entrar ou Cadastrar</strong></div>
        <div class="block-content">
            <div class=" col-reg registered-account">
                <div class="block-content">
                    <form class="form form-login" action="{{ route('login') }}" method="post" id="login-form">
                        <fieldset class="fieldset login" data-hasrequired="* Required Fields">
                            <div class="field email required email-input">
                                <div class="control">
                                    <input name="email" value="" autocomplete="off" id="email" type="email" class="input-text" title="Email" placeholder="Seu Email" />
                                </div>
                            </div>
                            <div class="field password required pass-input">
                                <div class="control">
                                    <input name="password" type="password" autocomplete="off" class="input-text" id="pass" title="Senha" placeholder="Senha" />
                                </div>
                            </div>
                            <div class=" form-group">
                                <label class="control-label">Faça login com sua conta social</label>
                                <div>
                                    <a href="#" class="btn btn-social-icon btn-sm btn-google-plus"><i class="fa fa-google fa-fw" aria-hidden="true"></i></a>

                                    <a href="#" class="btn btn-social-icon btn-sm btn-facebook"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a>

                                    <a href="#" class="btn btn-social-icon btn-sm btn-twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a>

                                    <a href="#" class="btn btn-social-icon btn-sm btn-linkdin"><i class="fa fa-linkedin fa-fw" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="secondary ft-link-p">
                                <a class="action remind" href="{{ route('password.request') }}"><span>Esqueceu sua senha?</span></a>
                            </div>
                            <div class="actions-toolbar">
                                <div class="primary">
                                    <button type="submit" class="action login primary" name="send" id="send2"><span>Login</span></button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>


            <div class="col-reg login-customer">
                <h2>NOVO AQUI?</h2>
                <p class="note-reg">O cadastro é gratuito e fácil!</p>
                <ul class="list-log">
                    <li>Saida mais rapida</li>
                    <li>Cadastrar  endereço de entrega</li>
                    <li>Ver e rastrear pedidos e pagamentos</li>
                </ul> <a class="btn-reg-popup" title="Cadastrar" href="{{ route('register') }}">Fazer um Cadastro</a>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        var $window = $(window);

        function checkWidth() {
            var windowsize = $window.width();
            if (windowsize > 767) {
                $('a[href*="login"]').click(function(e) {
                    e.preventDefault();
                    $("#so_sociallogin").modal('show');
                });
            }
        }
        checkWidth();
        $(window).resize(checkWidth);
    });
</script>
