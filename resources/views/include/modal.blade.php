
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
      <ul class="list-group">
        @foreach ($servicos as $ser)       
        <li class="list-group-item">{{$ser->servico}} {{$ser->valor}}<button type="button" class="btn btn-primary" style="float: right;">Marcar</button></li>
        @endforeach
        <!--<li class="list-group-item">Cabelo<button type="button" class="btn btn-primary" style="float: right;">Reservar</button></li>
        <li class="list-group-item">Barba + Cabelo<button type="button" class="btn btn-primary" style="float: right;">Reservar</button></li>
        <li class="list-group-item">Platinar<button type="button" class="btn btn-primary" style="float: right;">Reservar</button></li>-->
      </ul>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>