<label for="id" class="col-sm-4 col-form-label">Población:</label>
<div class="col-sm-8 text-left">
@if($param == 'comunidaddest')
    <select name="poblaciondest" id="poblaciondest" class="custom-select w-75">
@else
    <select name="poblacion" id="poblacion" class="custom-select w-75">
@endif
        <option disabled selected value="">Selecciona...</option>
        @foreach($poblaciones as $poblacion)
            <option value="{{$poblacion->CPOB}}">{{ $poblacion->NENTSI50 }}</option>
        @endforeach
    </select>
</div>