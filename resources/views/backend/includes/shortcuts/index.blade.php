<!-- Side tabs shortcuts -->
<ul id="shortcuts" role="complementary" class="children-tooltip tooltip-right">
	<li class="current"><a href="home" class="shortcut-dashboard" title="Dashboard">Dashboard</a></li>
	<li><a href="usuarios/cadastrados" class="shortcut-messages" title="Messages">Messages</a></li>
	<li><a href="agenda.html" class="shortcut-agenda" title="Agenda">Agenda</a></li>
	<li><a href="tables.html" class="shortcut-contacts" title="Contacts">Contacts</a></li>
	<li><a href="explorer.html" class="shortcut-medias" title="Medias">Medias</a></li>
	<li><a href="sliders.html" class="shortcut-stats" title="Stats">Stats</a></li>
	@can('model-users-view')
		<li><a href="usuarios" class="shortcut-users" title="Usuários">Usuários</a></li>
	@endcan
	@can('config-view')
		<li><a href="config/sistema" class="shortcut-settings" title="Configurações">Configurações</a></li>
	@endcan
</ul>

