<!-- Sidebar/drop-down menu -->
<section id="menu" role="complementary">

	<!-- This wrapper is used by several responsive layouts -->
	<div id="menu-content">

		<header>
			{{ Auth::user()->profile }}
		</header>


		<div id="profile">
			<img src="{{url('assets/backend/img/user.png')}}" width="64" height="64" alt="User name" class="user-icon">
			Olá
			<span class="name"><b>{{ Auth::user()->login }}</b></span>
		</div>

		<!-- By default, this section is made for 4 icons, see the doc to learn how to change this, in "basic markup explained" -->
		<ul id="access" class="children-tooltip">
			<li><a href="inbox.html" title="Mensagens"><span class="icon-mail"></span><span class="count">2</span></a></li>
			<li><a href="calendars.html" title="Calendar"><span class="icon-calendar"></span></a></li>
			<li>
				<a href="javascript:void(0)" onclick="abreModal('Meu Perfil', '{{route('usuarios.show', numLetter(Auth::user()->id, 'letter'))}}', 'myprofile', 2, 'true', 400, 470);" title="Meu Perfil">
					<span class="icon-user"></span>
				</a>
			</li>
			<li><a href="javascript:void(0)" onclick="logoutSistema('{{route('admin.logout')}}');" title="Sair"><span class="icon-logout"></span></a></li>
		</ul>

		<section class="navigable" id="doc-menu">
			<ul class="big-menu">
				<li class="with-right-arrow">
					<span id="catalog" data-navigable-url="catalog" class="navigable-ajax">
						<span id="count_product" class="list-count">{{$sidebar['total_products']}}</span>Catalogo
					</span>
				</li>

				<li>
					<a href="marcas" title="Fabricantes">Fabricantes 
						<span><span id="count_brand" class="list-count">{{$sidebar['total_brands']}}</span></span>
					</a>					
				</li>
				<li>
					<a href="secoes" title="Seções">Seções 
						<span><span id="count_section" class="list-count">{{$sidebar['total_sections']}}</span></span>
					</a>					
				</li>
				<li>
					<a href="categorias" title="Categorias">Categorias 
						<span><span id="count_category" class="list-count">{{$sidebar['total_categories']}}</span></span>
					</a>					
				</li>
				<li>
					<a href="produtos/cores" title="Produtos">Produtos 
						<span><span id="count_colors" class="list-count">{{$sidebar['total_colors']}}</span></span>
					</a>					
				</li>

			</ul>
		</section>

		<ul class="unstyled-list">
			<li class="title-menu">Today's event</li>
			<li>
				<ul class="calendar-menu">
					<li>
						<a href="javascript:void(0)" title="See event">
							<time datetime="2011-02-24"><b>24</b> Feb</time>
							<small class="green">10:30</small>
							Event's description
						</a>
					</li>
				</ul>
			</li>
			<li class="title-menu">New messages</li>
			<li>
				<ul class="message-menu">
					<li>
						<span class="message-status">
							<a href="javascript:void(0)" class="starred" title="Starred">Starred</a>
							<a href="javascript:void(0)" class="new-message" title="Mark as read">New</a>
						</span>
						<span class="message-info">
							<span class="blue">17:12</span>
							<a href="javascript:void(0)" class="attach" title="Download attachment">Attachment</a>
						</span>
						<a href="javascript:void(0)" title="Read message">
							<strong class="blue">John Doe</strong><br>
							<strong>Mail subject</strong>
						</a>
					</li>
					<li>
						<a href="javascript:void(0)" title="Read message">
							<span class="message-status">
								<span class="unstarred">Not starred</span>
								<span class="new-message">New</span>
							</span>
							<span class="message-info">
								<span class="blue">15:47</span>
							</span>
							<strong class="blue">May Starck</strong><br>
							<strong>Mail subject a bit longer</strong>
						</a>
					</li>
					<li>
						<span class="message-status">
							<span class="unstarred">Not starred</span>
						</span>
						<span class="message-info">
							<span class="blue">15:12</span>
						</span>
						<strong class="blue">May Starck</strong><br>
						Read message
					</li>
				</ul>
			</li>
		</ul>

	</div>
	<!-- End content wrapper -->

	<!-- This is optional -->
	<!-- Inverter Atalhos -->
	<footer id="menu-footer">
		<p class="button-height">
			<input type="checkbox" name="reversed-layout" id="reversed-layout" class="switch float-right" onchange="$(document.body)[this.checked ? 'addClass' : 'removeClass']('reversed');">
			<label for="reversed-layout">Inverter</label>               
		</p>
	</footer>
</section>