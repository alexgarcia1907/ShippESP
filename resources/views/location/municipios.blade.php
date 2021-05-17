<label for="id" class="col-sm-4 col-form-label">Municipio:</label>
<div class="col-sm-8 text-left">
@if($param == 'comunidaddest')
    <select name="municipiodest" id="municipiodest" class="custom-select w-75">
@else
    <select name="municipio" id="municipio" class="custom-select w-75">
@endif
        <option disabled selected value="">Selecciona...</option>
        @foreach($municipios as $municipio)
            <option value="{{$municipio->CMUM}}">{{ $municipio->DMUN50 }}</option>
        @endforeach
    </select>
</div>