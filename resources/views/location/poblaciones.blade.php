<label for="id" class="col-sm-2 col-form-label">Población:</label>
<div class="col-sm-10">
    <select name="poblacion" id="poblacion">
        <option disabled selected value=""></option>
        @foreach($poblaciones as $poblacion)
            <option value="{{$poblacion->CPOB}}">{{ $poblacion->NENTSI50 }}</option>
        @endforeach
    </select>
</div>