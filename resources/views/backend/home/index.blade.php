@extends('backend.layouts.painel')

@section('content')
<hgroup id="main-title" class="thin">
	<h1>Dashboard</h1>
	<h2>nov <strong>10</strong></h2>
</hgroup>

<div class="with-padding"><div id="intro"></div></div>


<div class="dashboard">

	<div class="columns">

		<div class="nine-columns twelve-columns-mobile" id="demo-chart">
			<!-- This div will hold the chart generated in the footer -->
		</div>

		<div class="three-columns twelve-columns-mobile new-row-mobile">
			<ul class="stats split-on-mobile">
				<li><a href="javascript:void(0)">
					<strong>21</strong> novos <br>clientes
				</a></li>
				<li><a href="javascript:void(0)">
					<strong>15</strong> novos<br>produtos
				</a></li>
				<li>
					<strong>15</strong> novos  <br>items
				</li>
				<li>
					<strong>235</strong> novos <br>pedidos
				</li>
			</ul>
		</div>

	</div>

</div>

<div class="with-padding">

	<div class="columns">

		<div class="four-columns six-columns-tablet twelve-columns-mobile">

			<h2 class="relative thin">
				New users
				<span class="info-spot">
					<span class="icon-info-round"></span>
					<span class="info-bubble">
						This is an information bubble to help the user.
					</span>
				</span>
				<span class="button-group absolute-right">
					<a href="javascript:openModal()" title="Add user" class="button icon-plus-round">Add</a>
					<a href="javascript:openLoadingModal()" title="Reload list" class="button icon-redo"></a>
				</span>
			</h2>

			<ul class="list spaced">

				<li>
					<a href="javascript:void(0)" class="list-link icon-user" title="Click to edit">
						<span class="meter orange-gradient"></span>
						<span class="meter orange-gradient"></span>
						<span class="meter"></span>
						<span class="meter"></span>

						<strong>John</strong> Doe
					</a>
					<div class="button-group absolute-right compact show-on-parent-hover">
						<a href="javascript:void(0)" class="button icon-pencil">Edit</a>
						<a href="javascript:void(0)" class="button icon-gear with-tooltip" title="Other actions"></a>
						<a href="javascript:void(0)" class="button icon-trash with-tooltip confirm" title="Delete"></a>
					</div>
				</li>

				<li>
					<a href="javascript:void(0)" class="list-link icon-user" title="Click to edit">
						<span class="meter red-gradient"></span>
						<span class="meter"></span>
						<span class="meter"></span>
						<span class="meter"></span>

						<strong>John</strong> Krazinski
					</a>
					<div class="button-group absolute-right compact show-on-parent-hover">
						<a href="javascript:void(0)" class="button icon-pencil">Edit</a>
						<a href="javascript:void(0)" class="button icon-gear with-tooltip" title="Other actions"></a>
						<a href="javascript:void(0)" class="button icon-trash with-tooltip confirm" title="Delete"></a>
					</div>
				</li>

				<li>
					<a href="javascript:void(0)" class="list-link icon-user" title="Click to edit">
						<span class="meter blue-gradient"></span>
						<span class="meter blue-gradient"></span>
						<span class="meter blue-gradient"></span>
						<span class="meter"></span>

						<strong>John</strong>athan Bell
					</a>
					<div class="button-group absolute-right compact show-on-parent-hover">
						<a href="javascript:void(0)" class="button icon-pencil">Edit</a>
						<a href="javascript:void(0)" class="button icon-gear with-tooltip" title="Other actions"></a>
						<a href="javascript:void(0)" class="button icon-trash with-tooltip confirm" title="Delete"></a>
					</div>
				</li>

				<li>
					<a href="javascript:void(0)" class="list-link icon-user" title="Click to edit">
						<span class="meter blue-gradient"></span>
						<span class="meter blue-gradient"></span>
						<span class="meter blue-gradient"></span>
						<span class="meter"></span>

						<strong>John</strong> Debogorsky
					</a>
					<div class="button-group absolute-right compact show-on-parent-hover">
						<a href="javascript:void(0)" class="button icon-pencil">Edit</a>
						<a href="javascript:void(0)" class="button icon-gear with-tooltip" title="Other actions"></a>
						<a href="javascript:void(0)" class="button icon-trash with-tooltip confirm" title="Delete"></a>
					</div>
				</li>

				<li>
					<a href="javascript:void(0)" class="list-link icon-user" title="Click to edit">
						<span class="meter orange-gradient"></span>
						<span class="meter orange-gradient"></span>
						<span class="meter"></span>
						<span class="meter"></span>

						<strong>John</strong>ny Halliday
					</a>
					<div class="button-group absolute-right compact show-on-parent-hover">
						<a href="javascript:void(0)" class="button icon-pencil">Edit</a>
						<a href="javascript:void(0)" class="button icon-gear with-tooltip" title="Other actions"></a>
						<a href="javascript:void(0)" class="button icon-trash with-tooltip confirm" title="Delete"></a>
					</div>
				</li>

				<li>
					<a href="javascript:void(0)" class="list-link icon-user" title="Click to edit">
						<span class="meter green-gradient"></span>
						<span class="meter green-gradient"></span>
						<span class="meter green-gradient"></span>
						<span class="meter green-gradient"></span>

						<strong>John</strong> Hutter
					</a>
					<div class="button-group absolute-right compact show-on-parent-hover">
						<a href="javascript:void(0)" class="button icon-pencil">Edit</a>
						<a href="javascript:void(0)" class="button icon-gear with-tooltip" title="Other actions"></a>
						<a href="javascript:void(0)" class="button icon-trash with-tooltip confirm" title="Delete"></a>
					</div>
				</li>

				<li>
					<a href="javascript:void(0)" class="list-link icon-user" title="Click to edit">
						<span class="meter red-gradient"></span>
						<span class="meter"></span>
						<span class="meter"></span>
						<span class="meter"></span>

						<strong>John</strong> Zert
					</a>
					<div class="button-group absolute-right compact show-on-parent-hover">
						<a href="javascript:void(0)" class="button icon-pencil">Edit</a>
						<a href="javascript:void(0)" class="button icon-gear with-tooltip" title="Other actions"></a>
						<a href="javascript:void(0)" class="button icon-trash with-tooltip confirm" title="Delete"></a>
					</div>
				</li>

			</ul>

		</div>

		<div class="new-row-mobile four-columns six-columns-tablet twelve-columns-mobile">

			<div class="block large-margin-bottom">

				<div class="block-title">
					<h3>Next events</h3>
					<span class="ribbon"><span class="ribbon-inner">3 new</span></span>
				</div>

				<ul class="events">

					<li>
						<span class="event-date orange">8</span>
						<a href="javascript:void(0)" class="event-description">
							<h4>Event title</h4>
							<p>Event description text</p>
						</a>
					</li>

					<li>
						<span class="event-date">15</span>
						<span class="event-description">
							<h4>Another event</h4>
							<p>Other event description text, other event description text</p>
						</span>
						<span class="ribbon tiny"><span class="ribbon-inner red-gradient">High</span></span>
					</li>

					<li>
						<span class="event-date with-month">
							8 <span class="event-month">April</span>
						</span>
						<h4>Next month event</h4>
						<p>Another description text</p>
					</li>

				</ul>

			</div>

			<div class="facts clearfix">

				<div class="fact">
					<span class="fact-value">
						50 <span class="fact-unit">Min</span>
					</span>
					Average time per session<br>
					<span class="fact-progress red">-5% ▼</span>
				</div>

				<div class="fact">
					<span class="fact-value">
						25 <span class="fact-unit">%</span>
					</span>
					Traffic growth over 30 days<br>
					<span class="fact-progress green">+7.1% ▲</span>
				</div>

			</div>

			<div class="button-height wrapped align-right">
				<span class="float-left mid-margin-left">Want some modals?</span>
				<span class="button-group">
					<a href="javascript:openAlert();" class="button">Alert</a>
					<a href="javascript:openPrompt();" class="button">Prompt</a>
					<a href="javascript:openConfirm();" class="button">Confirm</a>
				</span>
			</div>

		</div>

		<div class="new-row-tablet four-columns twelve-columns-tablet">

			<div class="block">

				<div class="block-title">
					<h3 id="agenda-day">Tuesday</h3>
					<div class="button-group absolute-right compact">
						<a href="javascript:void(0)" class="button" id="agenda-previous"><span class="icon-left-fat"></span></a>
						<a href="javascript:void(0)" class="button" id="agenda-today">Today</a>
						<a href="javascript:void(0)" class="button" id="agenda-next"><span class="icon-right-fat"></span></a>
					</div>
				</div>

				<div class="agenda" id="agenda">

					<!-- Time markers -->
					<ul class="agenda-time">
						<li class="from-7 to-8"><span>7 AM</span></li>
						<li class="from-8 to-9"><span>8 AM</span></li>
						<li class="from-9 to-10"><span>9 AM</span></li>
						<li class="from-10 to-11"><span>10 AM</span></li>
						<li class="from-11 to-12"><span>11 AM</span></li>
						<li class="from-12 to-13 blue"><span>NOON</span></li>
						<li class="from-13 to-14"><span>1 PM</span></li>
						<li class="from-14 to-15"><span>2 PM</span></li>
						<li class="from-15 to-16"><span>3 PM</span></li>
						<li class="from-16 to-17"><span>4 PM</span></li>
						<li class="from-17 to-18"><span>5 PM</span></li>
						<li class="from-18 to-19"><span>6 PM</span></li>
						<li class="from-19 to-20"><span>7 PM</span></li>
						<li class="at-20"><span>8 PM</span></li>
					</ul>

					<!-- Columns wrapper -->
					<div class="agenda-wrapper">

						<!-- Events list -->
						<div class="agenda-events agenda-day1">

							<span class="agenda-event anthracite-gradient from-16 to-17-30">
								<time>4 PM - 5:30 PM</time>
								Event description
							</span>

						</div>

						<!-- Events list -->
						<div class="agenda-events agenda-day2">

							<div class="dark-stripes from-12 to-14"></div>

							<a href="javascript:void(0)" class="agenda-event from-8 to-11">
								<time>8 AM - 11 AM</time>
								Event description
							</a>

							<span class="agenda-event from-16-30 to-17-30">
								<time>4:30 PM - 5:30 PM</time>
								Event description
							</span>

						</div>

						<!-- Events list -->
						<div class="agenda-events agenda-day3">

							<div class="dark-stripes from-12 to-18"></div>

							<a href="javascript:void(0)" class="agenda-event from-7 to-9">
								<time>7 AM - 9 AM</time>
								Event description
								<span class="ribbon tiny"><span class="ribbon-inner orange-gradient">Priv</span></span>
							</a>

							<span class="agenda-event from-10 to-11-30 event-1-on-2">
								<time>10 AM - 11:30 AM</time>
								Event description
							</span>

							<span class="agenda-event from-11 to-13 event-2-on-2 anthracite-gradient">
								<time>11 AM - 1 PM</time>
								Event description
							</span>

							<div class="agenda-now" style="top:63.75%"><span>03:23</span></div>

						</div>

						<!-- Events list -->
						<div class="agenda-events agenda-day4">

							<div class="dark-stripes from-12 to-14"></div>

							<a href="javascript:void(0)" class="agenda-event from-9 to-10">
								<time>9 AM - 10 AM</time>
								Event description
							</a>

							<span class="agenda-event from-16 to-17-30 event-1-on-2">
								<time>4 PM - 5:30 PM</time>
								Event description
							</span>

							<span class="agenda-event from-17 to-19-30 event-2-on-2 blue-gradient">
								<time>5 PM - 7:30 PM</time>
								Event description
							</span>

						</div>

						<!-- Events list -->
						<div class="agenda-events agenda-day5">

							<div class="dark-stripes from-12 to-14"></div>

							<a href="javascript:void(0)" class="agenda-event from-8 to-9">
								<time>8 AM - 9 AM</time>
								Event description
							</a>

							<span class="agenda-event from-11 to-13 anthracite-gradient">
								<time>11 AM - 1 PM</time>
								Event description
							</span>

							<span class="agenda-event from-17 to-19-30 blue-gradient">
								<time>5 PM - 7:30 PM</time>
								Event description
							</span>

						</div>

						<!-- Events list -->
						<div class="agenda-events agenda-day6">

							<div class="dark-stripes from-12 to-14"></div>

							<span class="agenda-event from-10 to-13 anthracite-gradient">
								<time>10 AM - 1 PM</time>
								Event description
							</span>

							<span class="agenda-event from-16 to-18-30">
								<time>4 PM - 6:30 PM</time>
								Event description
							</span>

						</div>

						<!-- Events list -->
						<div class="agenda-events agenda-day7"></div>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>
<!-- Charts library - Load the AJAX API-->
<script src="http://www.google.com/jsapi"></script>
@endsection


@push('javascript')

<script>
/*
 * Handling of 'other actions' menu
 */

var otherActions = $('#otherActions'),
	current = false;

// Other actions
$('.list .button-group a:nth-child(2)').menuTooltip('Carregando...', {

	classes: ['with-mid-padding'],
	ajax: 'ajax-demo/tooltip-content.html',

	onShow: function(target)
	{
		// Remove auto-hide class
		target.parent().removeClass('show-on-parent-hover');
	},

	onRemove: function(target)
	{
		// Restore auto-hide class
		target.parent().addClass('show-on-parent-hover');
	}
});

// Delete button
$('.list .button-group a:last-child').data('confirm-options', {

	onShow: function()
	{
		// Remove auto-hide class
		$(this).parent().removeClass('show-on-parent-hover');
	},

	onConfirm: function()
	{
		// Remove element
		$(this).closest('li').fadeAndRemove();

		// Prevent default link behavior
		return false;
	},

	onRemove: function()
	{
		// Restore auto-hide class
		$(this).parent().addClass('show-on-parent-hover');
	}

});

// Demo modal
function openModal()
{
	$.modal({
		content: '<p>This is an example of modal window. You can open several at the same time (click links below!), move them and resize them.</p>'+
				  '<p>The plugin provides several other functions to control them, try below:</p>'+
				  '<ul class="simple-list with-icon">'+
				  '    <li><a href="javascript:void(0)" onclick="openModal()">Open new blocking modal</a></li>'+
				  '    <li><a href="javascript:void(0)" onclick="$.modal.alert(\'This is a non-blocking modal, you can switch between me and the other modal\', { blocker: false })">Open non-blocking modal</a></li>'+
				  '    <li><a href="javascript:void(0)" onclick="$(this).getModalWindow().setModalTitle(\'\')">Remove title</a></li>'+
				  '    <li><a href="javascript:void(0)" onclick="$(this).getModalWindow().setModalTitle(\'New title\')">Change title</a></li>'+
				  '    <li><a href="javascript:void(0)" onclick="$(this).getModalWindow().loadModalContent(\'ajax-demo/auto-setup.html\')">Load Ajax content</a></li>'+
				  '</ul>',
		title: 'Example modal window',
		width: 300,
		scrolling: false,
		actions: {
			'Close' : {
				color: 'red',
				click: function(win) { win.closeModal(); }
			},
			'Center' : {
				color: 'green',
				click: function(win) { win.centerModal(true); }
			},
			'Refresh' : {
				color: 'blue',
				click: function(win) { win.closeModal(); }
			},
			'Abort' : {
				color: 'orange',
				click: function(win) { win.closeModal(); }
			}
		},
		buttons: {
			'Close': {
				classes:	'huge blue-gradient glossy full-width',
				click:		function(win) { win.closeModal(); }
			}
		},
		buttonsLowPadding: true
	});
};

// Demo alert
function openAlert()
{
	$.modal.alert('This is an alert message', {
		buttons: {
			'Thanks, captain obvious': {
				classes:	'huge blue-gradient glossy full-width',
				click:		function(win) { win.closeModal(); }
			}
		}
	});
};

// Demo prompt
function openPrompt()
{
	var cancelled = false;

	$.modal.prompt('Please enter a value between 5 and 10:', function(value)
	{
		value = parseInt(value);
		if (isNaN(value) || value < 5 || value > 10)
		{
			$(this).getModalContentBlock().message('Please enter a correct value', { append: false, classes: ['red-gradient'] });
			return false;
		}

		$.modal.alert('Value: <strong>'+value+'</strong>');

	}, function()
	{
		if (!cancelled)
		{
			$.modal.alert('Oh, come on....');
			cancelled = true;
			return false;
		}
	});
};

// Demo confirm
function openConfirm()
{
	$.modal.confirm('Challenge accepted?', function()
	{
		$.modal.alert('Me gusta!');

	}, function()
	{
		$.modal.alert('Meh.');
	});
};

/*
 * Navegação da agenda
 * Este exemplo mostra como controlar remotamente uma agenda. Na maioria das vezes, os controles embutidos
 * Usar cabeçalho funciona bem
 */

	// Dias da semana
var daysName = ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado', 'Domingo'],

	// Nome display
	agendaDay = $('#agenda-day'),

	// Agenda scrolling
	agenda = $('#agenda').scrollAgenda({
		first: 2,
		onRangeChange: function(start, end)
		{
			if (start != end)
			{
				agendaDay.text(daysName[start].substr(0, 3)+' - '+daysName[end].substr(0, 3));
			}
			else
			{
				agendaDay.text(daysName[start]);
			}
		}
	});

// Remote controls
$('#agenda-previous').click(function(event)
{
	event.preventDefault();
	agenda.scrollAgendaToPrevious();
});
$('#agenda-today').click(function(event)
{
	event.preventDefault();
	agenda.scrollAgendaFirstColumn(2);
});
$('#agenda-next').click(function(event)
{
	event.preventDefault();
	agenda.scrollAgendaToNext();
});

// Demo loading modal
function openLoadingModal()
{
	var timeout;

	$.modal({
		contentAlign: 'center',
		width: 240,
		title: 'Loading',
		content: '<div style="line-height: 25px; padding: 0 0 10px"><span id="modal-status">Contacting server...</span><br><span id="modal-progress">0%</span></div>',
		buttons: {},
		scrolling: false,
		actions: {
			'Cancel': {
				color:	'red',
				click:	function(win) { win.closeModal(); }
			}
		},
		onOpen: function()
		{
				// Progress bar
			var progress = $('#modal-progress').progress(100, {
					size: 200,
					style: 'large',
					barClasses: ['anthracite-gradient', 'glossy'],
					stripes: true,
					darkStripes: false,
					showValue: false
				}),

				// Loading state
				loaded = 0,

				// Window
				win = $(this),

				// Status text
				status = $('#modal-status'),

				// Function to simulate loading
				simulateLoading = function()
				{
					++loaded;
					progress.setProgressValue(loaded+'%', true);
					if (loaded === 100)
					{
						progress.hideProgressStripes().changeProgressBarColor('green-gradient');
						status.text('Done!');
						/*win.getModalContentBlock().message('Content loaded!', {
							classes: ['green-gradient', 'align-center'],
							arrow: 'bottom'
						});*/
						setTimeout(function() { win.closeModal(); }, 1500);
					}
					else
					{
						if (loaded === 1)
						{
							status.text('Loading data...');
							progress.changeProgressBarColor('blue-gradient');
						}
						else if (loaded === 25)
						{
							status.text('Loading assets (1/3)...');
						}
						else if (loaded === 45)
						{
							status.text('Loading assets (2/3)...');
						}
						else if (loaded === 85)
						{
							status.text('Loading assets (3/3)...');
						}
						else if (loaded === 92)
						{
							status.text('Initializing...');
						}
						timeout = setTimeout(simulateLoading, 50);
					}
				};

			// Start
			timeout = setTimeout(simulateLoading, 2000);
		},
		onClose: function()
		{
			// Stop simulated loading if needed
			clearTimeout(timeout);
		}
	});
};



/*
 * Google Charts
 * This script is dedicated to building and refreshing the demo chart
 * Remove if not needed
 */


var chartInit = false,
	drawVisitorsChart = function()
	{
		// Create our data table.
		var data = new google.visualization.DataTable();
		var raw_data = [['Produtos', 50, 73, 104, 129, 146, 176, 139, 149, 218, 194, 96, 53],
						['Cadastros', 82, 77, 98, 94, 105, 81, 104, 104, 92, 83, 107, 91],
						['Contatos', 50, 39, 39, 41, 47, 49, 59, 59, 52, 64, 59, 51],
						['Pedidos', 45, 35, 35, 39, 53, 76, 56, 59, 48, 40, 48, 21]];

		var months = ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'];

		data.addColumn('string', 'Month');
		for (var i = 0; i < raw_data.length; ++i)
		{
			data.addColumn('number', raw_data[i][0]);
		}

		data.addRows(months.length);

		for (var j = 0; j < months.length; ++j)
		{
			data.setValue(j, 0, months[j]);
		}
		for (var i = 0; i < raw_data.length; ++i)
		{
			for (var j = 1; j < raw_data[i].length; ++j)
			{
				data.setValue(j-1, i+1, raw_data[i][j]);
			}
		}

		// Crie e desenhe a visualização.
		// Saiba mais sobre a configuração do LineChart: http://code.google.com/apis/chart/interactive/docs/gallery/linechart.html
		var div = $('#demo-chart'),
			divWidth = div.width();
		new google.visualization.LineChart(div.get(0)).draw(data, {
			title: 'Número de visitantes únicos',
			width: divWidth,
			height: $.template.mediaQuery.is('mobile') ? 180 : 265,
			legend: 'right',
			yAxis: {title: '(thousands)'},
			backgroundColor: ($.template.ie7 || $.template.ie8) ? '#494C50' : 'transparent',	// IE8 E menor não suportam transparência
			legendTextStyle: { color: 'white' },
			titleTextStyle: { color: 'white' },
			hAxis: {
				textStyle: { color: 'white' }
			},
			vAxis: {
				textStyle: { color: 'white' },
				baselineColor: '#666666'
			},
			chartArea: {
				top: 35,
				left: 30,
				width: divWidth-40
			},
			legend: 'bottom'
		});

		// Mensagem somente quando redimensionar
		if (chartInit)
		{
			notify('Gráfico redimensionado', 'O evento de mudança de largura foi acionado.', {
				icon: "{{url('assets/backend/img/demo/icon.png')}}"
			});
		}

		// Ready
		chartInit = true;
	};

// Load the Visualization API and the piechart package.
google.load('visualization', '1', {
	'packages': ['corechart']
});

// Set a callback to run when the Google Visualization API is loaded.
google.setOnLoadCallback(drawVisitorsChart);

// Watch for block resizing
$('#demo-chart').widthchange(drawVisitorsChart);

// Respond.js hook (media query polyfill)
$(document).on('respond-ready', drawVisitorsChart);

	
</script>
@endpush

