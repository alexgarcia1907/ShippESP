<label for="id" class="col-sm-2 col-form-label">Calle:</label>
<div class="col-sm-10">
    <select name="calle" id="calle">
        <option disabled selected value=""></option>
        @foreach($calles as $calle)
            <option value="{{$calle->Id}}">{{ $calle->NVIA }}</option>
        @endforeach
    </select>
</div>