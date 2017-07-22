<div id="so-slideshow" class="module sohomepage-slider ">
    <div class="modcontent">
        <div id="sohomepage-slider1">
            <div class="so-homeslider sohomeslider-inner-1">
                <div class="item">
                    <a href="#" title="Banner 1" target="_self">
                        <img class="responsive" src="{{url('assets/frontend/images/sections/870x229/section1.jpg')}}"  alt="Banner 1" />
                    </a>
                    <div class="sohomeslider-description"></div>
                </div>
                <div class="item">
                    <a href="#" title="Banner 2" target="_self">
                        <img class="responsive" src="{{url('assets/frontend/images/sections/870x229/section2.jpg')}}"  alt="Banner 2" />
                    </a>
                    <div class="sohomeslider-description"></div>
                </div>
               <div class="item">
                    <a href="#" title="Banner 3" target="_self">
                        <img class="responsive" src="{{url('assets/frontend/images/sections/870x229/section3.jpg')}}"  alt="Banner 3" />
                    </a>
                    <div class="sohomeslider-description"></div>
                </div>

            </div>
            <script type="text/javascript">
                var owl = $(".sohomeslider-inner-1");
                var total_item = 3;

                function customCenter() {
                    $(".owl2-item.active .item .sohomeslider-description .image ").addClass("img-active");
                    $(".owl2-item.active .item .sohomeslider-description .text .tilte ").addClass("title-active");
                    $(".owl2-item.active .item .sohomeslider-description .text h4 ").addClass("h4-active");
                    $(".owl2-item.active .item .sohomeslider-description .text .des").addClass("des-active");
                }

                function customPager() {
                    $(".owl2-item.active .item .sohomeslider-description .image ").addClass("img-active");
                    $(".owl2-item.active .item .sohomeslider-description .text .tilte ").addClass("title-active");
                    $(".owl2-item.active .item .sohomeslider-description .text h4 ").addClass("h4-active");
                    $(".owl2-item.active .item .sohomeslider-description .text .des").addClass("des-active");
                }
                $(".sohomeslider-inner-1").owlCarousel2({
                    animateOut: 'none',
                    animateIn: 'none',
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplaySpeed: 1000,
                    smartSpeed: 500,
                    autoplayHoverPause: true,
                    startPosition: 0,
                    mouseDrag: true,
                    touchDrag: true,
                    dots: true,
                    autoWidth: false,
                    dotClass: "owl2-dot",
                    dotsClass: "owl2-dots",
                    loop: true,
                    navText: ["Next", "Prev"],
                    navClass: ["owl2-prev", "owl2-next"],
                    responsive: {
                        0: {
                            items: 1,
                            nav: total_item <= 1 ? false : ((false) ? true : false),
                        },
                        480: {
                            items: 1,
                            nav: total_item <= 1 ? false : ((false) ? true : false),
                        },
                        768: {
                            items: 1,
                            nav: total_item <= 1 ? false : ((false) ? true : false),
                        },
                        992: {
                            items: 1,
                            nav: total_item <= 1 ? false : ((false) ? true : false),
                        },
                        1200: {
                            items: 1,
                            nav: total_item <= 1 ? false : ((false) ? true : false),
                        }
                    },
                    onInitialized: customPager,
                    onTranslated: customCenter,
                });
            </script>
        </div>
    </div>
    <!--/.modcontent-->

    <div class="loader-mod-box"></div>
</div>
