<div class="col-xs-12">
    <div class="producttab ">
        <div class="tabsslider  horizontal-tabs col-xs-12">
            <ul class="nav nav-tabs font-sn">
                <li class="active"><a data-toggle="tab" href="#tab-1">Descrição</a></li>
                <li class="item_nonactive"><a data-toggle="tab" href="#tab-4">TAGS</a></li>
                <li class="item_nonactive"><a data-toggle="tab" href="#tab-review">Comentário (1)</a></li>
            </ul>

            <div class="tab-content  col-xs-12">
                <div id="tab-1" class="tab-pane fade active in">
                    <p>Mussum Ipsum, cacilds vidis litro abertis. Casamentiss faiz malandris se pirulitá. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. Aenean aliquam molestie leo, vitae iaculis nisl. Quem manda na minha terra sou euzis!</p>
                    <p>Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis! Aenean aliquam molestie leo, vitae iaculis nisl.</p>
                    <p><strong>Nemo enim ipsam voluptatem</strong></p>
                    <ul>
                        <li>Característica 1</li>
                        <li>Característica 2</li>
                        <li>Característica 3</li>
                    </ul>
                    <p>Mé faiz elementum girarzis, nisi eros vermeio. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Delegadis gente finis, bibendum egestas augue arcu ut est. Quem manda na minha terra sou euzis!</p>
                </div>


                <div id="tab-review" class="tab-pane fade">
                    <form>
                        <div id="review"></div>

                        <h4 id="review-title">Comente sobre este produto</h4>


                        <p> Caso não esteja logado </p>
                        Faça o <a href="{{route('login')}}">login</a> ou <a href="{{route('register')}}">cadastre-se </a> para fazer um comentário. 


                        <p> Caso esteja logado o formuário fica disponível</p>
                        <div class="contacts-form">
                            <div class="form-group">
                                <span class="icon icon-user"></span>
                                <input type="text" name="name" class="form-control" value="Seu Nome" onblur="if (this.value == '') {this.value = 'Seu Nome';}" onfocus="if(this.value == 'Seu Nome') {this.value = '';}" vk_19a06="subscribed">
                            </div>
                            <div class="form-group">
                                <span class="icon icon-bubbles-2"></span>
                                <textarea class="form-control" name="text" onblur="if (this.value == '') {this.value = 'Seu Comentário';}" onfocus="if(this.value == 'Seu Comentário') {this.value = '';}">Seu Comentário</textarea>
                            </div>
                            <div class="form-group has-error">
                                <span style="font-size: 11px;"><span class="text-danger">Obs:</span> Todos os campos são obrigatórios</span>
                                <br>
                                <br>
                                <b>Avaliação deste produto: </b> <span>Ruim</span>&nbsp;
                                <input type="radio" name="rating" value="1"> &nbsp;
                                <input type="radio" name="rating" value="2"> &nbsp;
                                <input type="radio" name="rating" value="3"> &nbsp;
                                <input type="radio" name="rating" value="4"> &nbsp;
                                <input type="radio" name="rating" value="5"> &nbsp;
                                <span>Bom</span><br>
                            </div>
                            <div class="buttons clearfix" style="visibility: hidden; display: block;">
                                <a id="button-review" class="btn btn-info">Continue</a>
                            </div>

                        </div>
                    </form>

                </div>

                <div id="tab-4" class="tab-pane fade">
                    <a class="btn btn-primary btn-sm" href="#">Tags do Produto</a>
                </div>


            </div>
        </div>
    </div>


</div>