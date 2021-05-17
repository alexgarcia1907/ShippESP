<label for="id" class="col-sm-4 col-form-label">Calle:</label>
<div class="col-sm-8 text-left">
@if($param == 'comunidaddest')
    <select name="calledest" id="calledest" class="custom-select w-75">
@else
    <select name="calle" id="calle" class="custom-select w-75">
@endif
        <option disabled selected value="">Selecciona...</option>
        @foreach($calles as $calle)
            <option value="{{$calle->ID}}">{{ $calle->NVIA }}</option>
        @endforeach
    </select>
</div>