<div class="row">
    <div class="col l12">
        <h2>Reservación</h2>
    </div>
</div>
@if( $event->finalized)
<div class="row">
    <div class="col l8">
        <p class="empty">
            <i class="icon fa fa-frown-o" aria-hidden="true"></i><br>
            Lo sentimos, se han agotado los lugares
        </p>
    </div>
</div>
@else
<div class="row">
    <form method="POST" class="col l8" action="{{ route('reservation') }}">
        <div class="row">
            <div class="input-field col l12">
                <input placeholder="" id="name" name="name" type="text" class="validate" required value="{{ old('name') }}">
                <label for="name" data-error="{{ $errors->first('name') }}">Nombre(s)</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col l12">
                <input placeholder="" id="lastname" name="lastname" type="text" class="validate" required value="{{ old('lastname') }}">
                <label for="lastname" data-error="{{ $errors->first('lastname') }}">Apellidos</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col l12">
                <input placeholder="" id="email" name="email" type="email" class="validate" required value="{{ old('email') }}">
                <label for="email" data-error="{{ $errors->first('email') }}">Correo electrónico</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col l12">
                <input placeholder="" id="numberPeople" name="numberPeople" type="number" value="1" class="validate" required>
                <label for="email" data-error="{{ $errors->first('numberPeople') }}">Número de personas</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col l12">
                <button class="waves-effect waves-light btn-large" type="submit">Reservar</button>
            </div>
        </div>
        <input type="hidden" name="idEvent" value="{{ $event->id }}" />
        {{ csrf_field() }}
    </form>
</div>
@endif