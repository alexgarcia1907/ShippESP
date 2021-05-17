<label for="id" class="col-sm-4 col-form-label">Codi Postal:</label>
<div class="col-sm-8 text-left">
@if($param == 'comunidaddest')
    <select name="cpostaldest" id="cpostaldest" class="custom-select w-75">
@else
    <select name="cpostal" id="cpostal" class="custom-select w-75">
@endif
        <option disabled selected value="">Selecciona...</option>
        @foreach($cpostales as $cpostal)
            <option value="{{$cpostal->Id}}">{{ $cpostal->CP }}</option>
        @endforeach
    </select>
</div>