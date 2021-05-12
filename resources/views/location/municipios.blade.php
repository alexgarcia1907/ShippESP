<label for="id" class="col-sm-2 col-form-label">Municipio:</label>
<div class="col-sm-10">
    <select name="municipio" id="municipio">
        <option disabled selected value=""></option>
        @foreach($municipios as $municipio)
            <option value="{{$municipio->CMUM}}">{{ $municipio->DMUN50 }}</option>
        @endforeach
    </select>
</div>