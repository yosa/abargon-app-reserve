@if($errors->count())    
    <div class="modal errors bottom-sheet">
        <div class="modal-content">
            <h4>Ups, ocurrieron algunos errores!!</h4>
    @foreach ($errors->all() as $i=>$error)
        @if($i === 'message')
            <p>{{ $error }}</p>
        @endif
    @endforeach
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-large ">Ok</a>
        </div>
    </div>
@endif    
