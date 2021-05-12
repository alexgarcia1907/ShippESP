<label for="id" class="col-sm-2 col-form-label">Província:</label>
<div class="col-sm-10">
    <select name="provincia" id="provincia">
        <option disabled selected value=""></option>
        @foreach($provincias as $provincia)
            <option value="{{$provincia->CPRO}}">{{ $provincia->PRO }}</option>
        @endforeach
    </select>
</div>