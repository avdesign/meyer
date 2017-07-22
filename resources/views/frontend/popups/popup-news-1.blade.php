<div id="popup-countdown"></div>

<script type="text/javascript">
    //<![CDATA[
    data = new Date(2013, 10, 26, 12, 00, 00);
    var listdeal = [];

    function CountDown(date, id) {
        dateNow = new Date();
        amount = date.getTime() - dateNow.getTime();
        delete dateNow;
        if (amount < 0) {
            document.getElementById(id).innerHTML = "Now!";
        } else {
            days = 0;
            hours = 0;
            mins = 0;
            secs = 0;
            out = "";
            amount = Math.floor(amount / 1000);
            days = Math.floor(amount / 86400);
            amount = amount % 86400;
            hours = Math.floor(amount / 3600);
            amount = amount % 3600;
            mins = Math.floor(amount / 60);
            amount = amount % 60;
            secs = Math.floor(amount);
            if (days != 0) {
                out += "<div class='time-item time-day'>" + "<div class='num-time'>" + days + "</div>" + " <div class='name-time'>" + ((days == 1) ? "Day" : "Days") + "</div>" + "</div> ";
            }
            if (hours != 0) {
                out += "<div class='time-item time-hour'>" + "<div class='num-time'>" + hours + "</div>" + " <div class='name-time'>" + ((hours == 1) ? "Hour" : "Hours") + "</div>" + "</div> ";
            }
            out += "<div class='time-item time-min'>" + "<div class='num-time'>" + mins + "</div>" + " <div class='name-time'>" + ((mins == 1) ? "Min" : "Mins") + "</div>" + "</div> ";
            out += "<div class='time-item time-sec'>" + "<div class='num-time'>" + secs + "</div>" + " <div class='name-time'>" + ((secs == 1) ? "Sec" : "Secs") + "</div>" + "</div> ";
            out = out.substr(0, out.length - 2);
            document.getElementById(id).innerHTML = out;
            setTimeout(function() {
                CountDown(date, id)
            }, 1000);
        }
    }
    //]]>
</script>

<div id="so_popup_countdown" class="modal fade" tabindex="-1" role="dialog" style="opacity: 1">
    <div class="modal-dialog" style="width: 770px; height: auto;">
        <div class="modal-header">
            <h2>Escolha rapidamente a categoria</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="dontShowPopup();">&times;</button>
        </div>
        <div class="modal-content">
            <div class="list-cates">
                <ul>
                    <li><a href="{{url('categoria/4')}}"><span class="icon icon1"></span>Feminino</a></li>
                    <li><a href="{{url('categoria/3')}}"><span class="icon icon2"></span>Masculino</a></li>
                    <li><a href="{{url('categoria/2')}}"><span class="icon icon3"></span>Infantil</a></li>
                    <li><a href="{{url('categoria/3')}}"><span class="icon icon4"></span>Bebê</a></li>
                    <li><a href="{{url('categoria/3')}}"><span class="icon icon5"></span>Juvenil</a></li>
                    <li class="item6"><a href="{{url('categoria/4')}}"><span class="icon icon6"></span>Oferta Especial</a></li>
                    <li class="item7"><a href="{{url('categoria/3')}}"><span class="icon icon7"></span>Black Friday</a></li>
                </ul>
                <div class="customer">
                    Você tem conta ? <a href="{{route('login')}}">Faça o login</a> ou <a href="{route('register')}}"> Cadastre-se</a>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="{{url('/')}}" target="_blank">
                        <img src="{{url('assets/frontend/images/poppups/banner-countdown.png')}}" alt="Promoção Limitada" style="max-width: 770px" />
                    </a>
            <div id="so_countdown_timer"></div>
            <script type="text/javascript">
                //<![CDATA[
                listdeal.push('so_countdown_timer&&||&&2017/11/30');
                //]]>
            </script>
        </div>
    </div>
</div>
<script type="text/javascript">
    //$('#so_popup_countdown').modal();
</script>

<script>
    function dontShowPopup() {
        $.cookie('so_visited', 'yes', {
            expires: 1
        });
    }
    jQuery(document).ready(function($) {
        var so_visited = $.cookie('so_visited');
        if (so_visited == 'yes') {
            return false;
        } else {
            $('#so_popup_countdown').modal();
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