
	<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Serviços</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				<ul id="Servicos" class="list-group">
					@foreach ($servicos as $ser)       
					<li class="list-group-item"><button id="btn_servicos" type="button" onclick="CarregaDataHora();" class="btn btn-primary" style="float: right;" value="{{$ser->id}}"> {{$ser->servico}} -> {{$ser->valor}} Marcar</li></button>
					@endforeach
				</ul>
				<span id="Data">
				<div class="form-group">
					<div class="input-group date" id="datetimepicker4" data-target-input="nearest">
						<input id="val_data" type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4"/>
						<div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
							<div class="input-group-text"><i class="fa fa-calendar"></i></div>
						</div>
					</div>
				</div>
				<table style="aligth: center">
				<tr>
					<th id="10"><li class="list-group-item list-group-item-action">10:00</li></th>
					<th id="11"><li  class="list-group-item list-group-item-action">11:00</li></th>
					<th id="12"><li class="list-group-item list-group-item-action">12:00</li></th>
				</tr>
					<th id="13"><li class="list-group-item list-group-item-action">13:00</li></th>
					<th id="14"><li class="list-group-item list-group-item-action">14:00</li></th>
					<th id="15"><li class="list-group-item list-group-item-action">15:00</li></th>
				<tr>
				<th> <li id="16" class="list-group-item list-group-item-action">16:00</li></th>
					<th><li id="17" class="list-group-item list-group-item-action">17:00</li></th>
					<th><li id="18" class="list-group-item list-group-item-action">18:00</li></th>
				</tr>
				</table>
				<a id="btn_confirma" type="button" style="float: right;" class="btn btn-success"  onclick="Alert()" >Confirmar</a>
				</span>
				<!-- <div id="Date">
					<div id="datepicker" data-date="12/03/2012"></div>
							<input type="hidden" id="my_hidden_input">
					</div> -->    
				</div>
				<div class="modal-footer">
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Serviços</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div style="overflow:hidden;">
						<div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<div id="datetimepicker13"></div>
								</div>
							</div>
						</div>
					</div> 
				</div>
				<div class="modal-footer">
				</div>
			</div>
		</div>
	</div>



				
			