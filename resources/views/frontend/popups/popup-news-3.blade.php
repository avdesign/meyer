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
                            <input type="checkbox" value="1" onchange="dontShowPopup();" name="hidden-popup">
                            <span class="inline">&nbsp;&nbsp;Não mostrar esta pop-up novamente</span>
                        </label>
                    </div>
                </div>
            </div> <!--/.modcontent-->
            <button title="Fechar" type="button" class="popup-close" onclick="dontShowPopup();">×</button>
        </div>
    </div>
</div>


<script type="text/javascript">
    //$('#container-module-newletter').modal();
    // Não aceito
</script>

<script>
    function dontShowPopup() {
        $.cookie('so_visited', 'yes', {
            expires: 1
        });
        $('body').removeClass('modal-open');
        $('#container-module-newletter').remove();
        $('.modal-backdrop').remove();

    }
    jQuery(document).ready(function($) {
        var so_visited = $.cookie('so_visited');
        if (so_visited == 'yes') {
            $('body').removeClass('modal-open');
            $('#container-module-newletter').remove();
            $('.modal-backdrop').remove();
            return false;
        } else {
            $('#container-module-newletter').modal();
        }
    });
</script>

<script type="text/javascript">
    //<![CDATA[
    window.onload = function() {
        if (listdeal.length > 0) {
            for (i = 0; i < listdeal.length; i++) {
                var arr = listdeal[i].split("&&||&&");
                var data = new Date(arr[1]);
                CountDown(data, arr[0]);
            }
        }

    };

    //]]>
</script>

<script type="text/javascript">
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
                                $('.send-mail').after('<span class="show-error" style="color: #003bb3;margin-left: 10px"> ' + json.message + '</span>');
                                setTimeout(function () {
                                    $('body').removeClass('modal-open');
                                    $('#container-module-newletter').remove();
                                    $('.modal-backdrop').remove();
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