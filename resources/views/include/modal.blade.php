
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
            <li class="list-group-item">{{$ser->servico}} -> {{$ser->valor}}<button type="button" onclick="CarregaDataHora()" class="btn btn-primary" style="float: right;">Marcar</button></li>
          @endforeach
        </ul>
        <div id="Data" style="overflow:hidden;">
            <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <div id="datetimepicker13"></div>
                </div>
                
                
              </div>
              <button type="button" class="btn btn-primary" style="float: right"></button>
                            
            </div>
          </div>
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



        
      