@extends('templates.default')

@section('content')
<div class="content">
<div class="container-fluid">
	<div class="page-title-box">
		<div class="row align-items-center">
			<div class="col-sm-6">
				<h4 class="page-title">Calendar Event</h4>
			</div>
			<div class="col-sm-6">
				<div class="float-right d-none d-md-block">
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-settings mr-2"></i> Settings</button>
						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Separated link</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end row -->
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div id="calendar" class="fc fc-unthemed fc-ltr">
						<div class="fc-toolbar">
							<div class="fc-left">
								<h2>April 2019</h2>
							</div>
							<div class="fc-right">
								<div class="fc-button-group">
									<button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right"><span class="fc-icon fc-icon-right-single-arrow"></span></button>
								</div>
								<button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">today</button>
							</div>
							<div class="fc-center">
								<div class="fc-button-group">
									<button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-left">day</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-right fc-state-active">month</button>
								</div>
							</div>
							<div class="fc-clear"></div>
						</div>
						<div class="fc-view-container" style="">
							<div class="fc-view fc-month-view fc-basic-view" style="">
								<table>
								<thead class="fc-head">
								<tr>
									<td class="fc-head-container fc-widget-header">
										<div class="fc-row fc-widget-header" style="border-right-width: 1px; margin-right: 16px;">
											<table>
											<thead>
											<tr>
												<th class="fc-day-header fc-widget-header fc-mon">Mon</th>
												<th class="fc-day-header fc-widget-header fc-tue">Tue</th>
												<th class="fc-day-header fc-widget-header fc-wed">Wed</th>
												<th class="fc-day-header fc-widget-header fc-thu">Thu</th>
												<th class="fc-day-header fc-widget-header fc-fri">Fri</th>
												<th class="fc-day-header fc-widget-header fc-sat">Sat</th>
												<th class="fc-day-header fc-widget-header fc-sun">Sun</th>
											</tr>
											</thead>
											</table>
										</div>
									</td>
								</tr>
								</thead>
								<tbody class="fc-body">
								<tr>
									<td class="fc-widget-content">
										<div class="fc-scroller fc-day-grid-container" style="overflow: hidden scroll; height: 384px;">
											<div class="fc-day-grid fc-unselectable">
												<div class="fc-row fc-week fc-widget-content" style="">
													<div class="fc-bg">
														<table>
														<tbody>
														<tr>
															<td class="fc-day fc-widget-content fc-mon fc-past" data-date="2019-04-01"></td>
															<td class="fc-day fc-widget-content fc-tue fc-past" data-date="2019-04-02"></td>
															<td class="fc-day fc-widget-content fc-wed fc-past" data-date="2019-04-03"></td>
															<td class="fc-day fc-widget-content fc-thu fc-today fc-state-highlight" data-date="2019-04-04"></td>
															<td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-04-05"></td>
															<td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-04-06"></td>
															<td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-04-07"></td>
														</tr>
														</tbody>
														</table>
													</div>
													<div class="fc-content-skeleton">
														<table>
														<thead>
														<tr>
															<td class="fc-day-number fc-mon fc-past" data-date="2019-04-01">1</td>
															<td class="fc-day-number fc-tue fc-past" data-date="2019-04-02">2</td>
															<td class="fc-day-number fc-wed fc-past" data-date="2019-04-03">3</td>
															<td class="fc-day-number fc-thu fc-today fc-state-highlight" data-date="2019-04-04">4</td>
															<td class="fc-day-number fc-fri fc-future" data-date="2019-04-05">5</td>
															<td class="fc-day-number fc-sat fc-future" data-date="2019-04-06">6</td>
															<td class="fc-day-number fc-sun fc-future" data-date="2019-04-07">7</td>
														</tr>
														</thead>
														<tbody>
														<tr>
															<td class="fc-event-container">
																<a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable">
																<div class="fc-content">
																	<span class="fc-time">12a</span><span class="fc-title">All Day Event</span>
																</div>
																</a>
															</td>
															<td rowspan="2"></td>
															<td rowspan="2"></td>
															<td class="fc-event-container">
																<a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-danger fc-draggable">
																<div class="fc-content">
																	<span class="fc-time">10:30a</span><span class="fc-title">Meeting</span>
																</div>
																</a>
															</td>
															<td class="fc-event-container" rowspan="2">
																<a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-brown fc-draggable">
																<div class="fc-content">
																	<span class="fc-time">7p</span><span class="fc-title">Birthday Party</span>
																</div>
																</a>
															</td>
															<td rowspan="2"></td>
															<td rowspan="2"></td>
														</tr>
														<tr>
															<td class="fc-event-container">
																<a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-purple fc-draggable">
																<div class="fc-content">
																	<span class="fc-time">4p</span><span class="fc-title">Meeting</span>
																</div>
																</a>
															</td>
															<td class="fc-event-container">
																<a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-success fc-draggable">
																<div class="fc-content">
																	<span class="fc-time">12p</span><span class="fc-title">Lunch</span>
																</div>
																</a>
															</td>
														</tr>
														</tbody>
														</table>
													</div>
												</div>
												<div class="fc-row fc-week fc-widget-content" style="">
													<div class="fc-bg">
														<table>
														<tbody>
														<tr>
															<td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-04-08"></td>
															<td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-04-09"></td>
															<td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-04-10"></td>
															<td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-04-11"></td>
															<td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-04-12"></td>
															<td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-04-13"></td>
															<td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-04-14"></td>
														</tr>
														</tbody>
														</table>
													</div>
													<div class="fc-content-skeleton">
														<table>
														<thead>
														<tr>
															<td class="fc-day-number fc-mon fc-future" data-date="2019-04-08">8</td>
															<td class="fc-day-number fc-tue fc-future" data-date="2019-04-09">9</td>
															<td class="fc-day-number fc-wed fc-future" data-date="2019-04-10">10</td>
															<td class="fc-day-number fc-thu fc-future" data-date="2019-04-11">11</td>
															<td class="fc-day-number fc-fri fc-future" data-date="2019-04-12">12</td>
															<td class="fc-day-number fc-sat fc-future" data-date="2019-04-13">13</td>
															<td class="fc-day-number fc-sun fc-future" data-date="2019-04-14">14</td>
														</tr>
														</thead>
														<tbody>
														<tr>
															<td class="fc-event-container">
																<a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-warning fc-draggable">
																<div class="fc-content">
																	<span class="fc-time">4p</span><span class="fc-title">Meeting</span>
																</div>
																</a>
															</td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														</tbody>
														</table>
													</div>
												</div>
												<div class="fc-row fc-week fc-widget-content" style="">
													<div class="fc-bg">
														<table>
														<tbody>
														<tr>
															<td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-04-15"></td>
															<td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-04-16"></td>
															<td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-04-17"></td>
															<td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-04-18"></td>
															<td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-04-19"></td>
															<td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-04-20"></td>
															<td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-04-21"></td>
														</tr>
														</tbody>
														</table>
													</div>
													<div class="fc-content-skeleton">
														<table>
														<thead>
														<tr>
															<td class="fc-day-number fc-mon fc-future" data-date="2019-04-15">15</td>
															<td class="fc-day-number fc-tue fc-future" data-date="2019-04-16">16</td>
															<td class="fc-day-number fc-wed fc-future" data-date="2019-04-17">17</td>
															<td class="fc-day-number fc-thu fc-future" data-date="2019-04-18">18</td>
															<td class="fc-day-number fc-fri fc-future" data-date="2019-04-19">19</td>
															<td class="fc-day-number fc-sat fc-future" data-date="2019-04-20">20</td>
															<td class="fc-day-number fc-sun fc-future" data-date="2019-04-21">21</td>
														</tr>
														</thead>
														<tbody>
														<tr>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														</tbody>
														</table>
													</div>
												</div>
												<div class="fc-row fc-week fc-widget-content" style="">
													<div class="fc-bg">
														<table>
														<tbody>
														<tr>
															<td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-04-22"></td>
															<td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-04-23"></td>
															<td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-04-24"></td>
															<td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-04-25"></td>
															<td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-04-26"></td>
															<td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-04-27"></td>
															<td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-04-28"></td>
														</tr>
														</tbody>
														</table>
													</div>
													<div class="fc-content-skeleton">
														<table>
														<thead>
														<tr>
															<td class="fc-day-number fc-mon fc-future" data-date="2019-04-22">22</td>
															<td class="fc-day-number fc-tue fc-future" data-date="2019-04-23">23</td>
															<td class="fc-day-number fc-wed fc-future" data-date="2019-04-24">24</td>
															<td class="fc-day-number fc-thu fc-future" data-date="2019-04-25">25</td>
															<td class="fc-day-number fc-fri fc-future" data-date="2019-04-26">26</td>
															<td class="fc-day-number fc-sat fc-future" data-date="2019-04-27">27</td>
															<td class="fc-day-number fc-sun fc-future" data-date="2019-04-28">28</td>
														</tr>
														</thead>
														<tbody>
														<tr>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td class="fc-event-container">
																<a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-pink fc-draggable" href="http://google.com/">
																<div class="fc-content">
																	<span class="fc-time">12a</span><span class="fc-title">Click for Google</span>
																</div>
																</a>
															</td>
														</tr>
														</tbody>
														</table>
													</div>
												</div>
												<div class="fc-row fc-week fc-widget-content" style="">
													<div class="fc-bg">
														<table>
														<tbody>
														<tr>
															<td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-04-29"></td>
															<td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-04-30"></td>
															<td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2019-05-01"></td>
															<td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2019-05-02"></td>
															<td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2019-05-03"></td>
															<td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2019-05-04"></td>
															<td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2019-05-05"></td>
														</tr>
														</tbody>
														</table>
													</div>
													<div class="fc-content-skeleton">
														<table>
														<thead>
														<tr>
															<td class="fc-day-number fc-mon fc-future" data-date="2019-04-29">29</td>
															<td class="fc-day-number fc-tue fc-future" data-date="2019-04-30">30</td>
															<td class="fc-day-number fc-wed fc-other-month fc-future" data-date="2019-05-01">1</td>
															<td class="fc-day-number fc-thu fc-other-month fc-future" data-date="2019-05-02">2</td>
															<td class="fc-day-number fc-fri fc-other-month fc-future" data-date="2019-05-03">3</td>
															<td class="fc-day-number fc-sat fc-other-month fc-future" data-date="2019-05-04">4</td>
															<td class="fc-day-number fc-sun fc-other-month fc-future" data-date="2019-05-05">5</td>
														</tr>
														</thead>
														<tbody>
														<tr>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														</tbody>
														</table>
													</div>
												</div>
												<div class="fc-row fc-week fc-widget-content" style="">
													<div class="fc-bg">
														<table>
														<tbody>
														<tr>
															<td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2019-05-06"></td>
															<td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2019-05-07"></td>
															<td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2019-05-08"></td>
															<td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2019-05-09"></td>
															<td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2019-05-10"></td>
															<td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2019-05-11"></td>
															<td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2019-05-12"></td>
														</tr>
														</tbody>
														</table>
													</div>
													<div class="fc-content-skeleton">
														<table>
														<thead>
														<tr>
															<td class="fc-day-number fc-mon fc-other-month fc-future" data-date="2019-05-06">6</td>
															<td class="fc-day-number fc-tue fc-other-month fc-future" data-date="2019-05-07">7</td>
															<td class="fc-day-number fc-wed fc-other-month fc-future" data-date="2019-05-08">8</td>
															<td class="fc-day-number fc-thu fc-other-month fc-future" data-date="2019-05-09">9</td>
															<td class="fc-day-number fc-fri fc-other-month fc-future" data-date="2019-05-10">10</td>
															<td class="fc-day-number fc-sat fc-other-month fc-future" data-date="2019-05-11">11</td>
															<td class="fc-day-number fc-sun fc-other-month fc-future" data-date="2019-05-12">12</td>
														</tr>
														</thead>
														<tbody>
														<tr>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</td>
								</tr>
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<div style="clear:both"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- end row --></div>
</div>

@endsection