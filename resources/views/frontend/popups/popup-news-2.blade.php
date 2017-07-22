<div id="container-module-newletter" class="hidden-md hidden-sm hidden-xs">
    <div class="so_newletter_custom_popup_bg popup_bg"></div>
    <div class="module main-newsleter-popup so_newletter_custom_popup so_newletter_oca_popup" id="so_newletter_custom_popup">
        <div class="so-custom-popup so-custom-oca-popup" style="width: 800px; background: url('{{url('assets/frontend/images/poppups/bg-popup.jpg')}}') no-repeat white;  ">
                            
            <div class="modcontent">
                <div class="oca_popup" id="test-popup">
                    <div class="popup-content">
                        <p class="newsletter_promo">PROMOÇÃO DIÁRIA</p>
                        <div class="popup-title">ASSINE O BOLETIM</div>
                        
                        <form method="post" name="signup" class="form-group signup">
                            <div class="input-control">
                                <div class="email">
                                    <input type="email" placeholder="Seu email..." value="" class="form-control" id="txtemail{{time()}}" name="txtemail">
                                </div>
                                <button class="btn btn-default send-mail" type="submit" onclick="return subscribe_newsletter_popup();" name="submit">Se inscrever</button>
                            </div>
                        </form>
                        <label class="hidden-popup">
                            <input type="checkbox" value="1" name="hidden-popup">
                            <span class="inline">&nbsp;&nbsp;Não mostrar esta pop-up novamente</span>
                        </label>
                    </div>
                </div>
            </div> <!--/.modcontent-->
            <button title="Fechar" type="button" class="popup-close">×</button>
        </div>

    </div>

    <script type="text/javascript">
        (function($) {
            $(window).load(function () {
                $('.common-home').addClass('hidden-scorll');
                $('.so_newletter_custom_popup_bg').addClass('popup_bg');
                $('input[name=\'hidden-popup\']').on('change', function(){
                    if ($(this).is(':checked')) {
                        checkCookie();
                    } else {
                        unsetCookie("so_newletter_custom_popup");
                    }
                });
                function unsetCookie( name ) {
                    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                }
                $('.popup-close').click(function(){
                    var this_close = $('.popup-close');
                    this_close.parents().find('.common-home').removeClass('hidden-scorll');
                    this_close.parents().find('#container-module-newletter').remove();
                });
            });
        })(jQuery);
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            console.log(d.getTime());
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires="+d.toUTCString();
            document.cookie = cname + "=" + cvalue + "; " + expires;
        }
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i=0; i<ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1);
                if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
            }
            return "";
        }
        function checkCookie() {
            var check_cookie = getCookie("so_newletter_custom_popup");
            if(check_cookie == ""){
                setCookie("so_newletter_custom_popup", "{{config('app.name')}}}} Newletter Popup", 1 );
            }
        }
        function subscribe_newsletter_popup()
        {
            //alert(email);
            var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var email = $('#txtemail{{time()}}').val();
            
            var d = new Date();
            var createdate = d.getFullYear() + '-' + (d.getMonth()+1) + '-' + d.getDate() + ' ' + d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds();
            var status   = 1;
            var dataString = '_token={{csrf_token()}}&email='+email+'&createdate='+createdate+'&status='+status;
            
            if(email != "")
            {
                if(!emailpattern.test(email))
                {
                    $('.show-error').remove();
                    $('.send-mail').after('<span class="show-error" style="color: red;margin-left: 10px"> Email Invalído </span>')
                    return false;
                }
                else
                {
                    $.ajax({
                        url: "{{url('newsletter')}}",
                        type: 'post',
                        data: dataString,
                        dataType: 'json',
                        success: function(json) {                            
                            if(json.success == true) {
                                $('.show-error').remove();
                                checkCookie();
                                $('.send-mail').after('<span class="show-error" style="color: #003bb3;margin-left: 10px"> ' + json.message + '</span>');
                                setTimeout(function () {
                                    var this_close = $('.popup-close');
                                    this_close.parent().css('display', 'none');
                                    this_close.parents().find('#container-module-newletter').remove();
                                }, 3000);

                            }else{
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
            }
            else
            {
                $('.send-mail').after('<span class="show-error" style="color: red;margin-left: 10px"> O email é obrigatório! </span>')
                $(email).focus();
                return false;
            }
        }
    </script>
</div>