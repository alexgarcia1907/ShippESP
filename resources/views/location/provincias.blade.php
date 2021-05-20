<label for="id" class="col-sm-4 col-form-label">Província:</label>
<div class="col-sm-8 text-left">
@if($param == 'comunidaddest')
    <select name="provinciadest" id="provinciadest" class="custom-select w-75">
@else
    <select name="provincia" id="provincia" class="custom-select w-75">
@endif
<option disabled selected value="">Selecciona...</option>
        @foreach($provincias as $provincia)
            <option value="{{$provincia->CPRO}}">{{ $provincia->PRO }}</option>

            @endforeach
    </select>
</div>