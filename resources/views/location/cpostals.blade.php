<label for="id" class="col-sm-2 col-form-label">Codi Postal:</label>
<div class="col-sm-10">
    <select name="cpostal" id="cpostal">
        <option disabled selected value=""></option>
        @foreach($cpostales as $cpostal)
            <option value="{{$cpostal->Id}}">{{ $cpostal->CP }}</option>
        @endforeach
    </select>
</div>