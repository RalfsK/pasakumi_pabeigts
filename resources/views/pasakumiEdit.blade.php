@extends('layouts.app')

@section('content')

    <h3>Pasākuma pieteikšana</h3>
    <div class="col-md-2">

        <label for="">Pasākuma nosaukums:</label>
        <input class="form-control"type="text" id="nosaukums" value="{{$get->nosaukums}}"/>

        <label for="">Datumns no:</label>
        <input class="form-control"type="date" id="DatumsNO" value="{{$get->DatumsNO}}"/>

        <label for="">Datumns līdz:</label>
        <input class="form-control"type="date" id="DatumsLIDZ" value="{{$get->DatumsLIDZ}}"/>

        <label for="">Plkst. no:</label>
        <input class="form-control"type="time" id="LaiksNO" value="{{$get->LaiksNO}}" />

        <label for="">Plkst. līdz:</label>
        <input class="form-control"type="time" id="LaiksLIDZ" value="{{$get->LaiksLIDZ}}"/>

        <label for="">Norises vieta:</label>
        <input class="form-control"type="text" id="Norises_vieta" value="{{$get->Norises_vieta}}"/>

        <label for="">Personu skaits</label>
        <input type="number" id="Personu_skaits" value="{{$get->Personu_skaits}}"/>

        <label for="">Atbildīgā persona</label>
        <input type="text" id="Atbildigais" value="{{$get->Atbildigais}}"/>

        <label for="">Kontaktinformācija</label>
        <input type="text" id="Kontaktinfo" placeholder="mob.nr. vai epasts" value="{{$get->Kontaktinfo}}"/>

        <label for="">Piezīmes</label>
        <input type="text" id="piezimes"value="{{$get->piezimes}}"/>


        <h3>IT nodrošinājums</h3>
        <h6>Zaļš - ir pieteikts, Sarkans - nav pieteikts</h6>
        <br>
        <div class="dropdown">
            @if ($get->projektors==1)
            <button class="btn btn-success dropdown-toggle" type="button" id="projektors" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @else
                    <button class="btn btn-danger dropdown-toggle" type="button" id="projektors" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @endif
                    Projektors
            </button>
            <div class="dropdown-menu" aria-labelledby="projektors">
                <li class="dropdown-item" id="projektors" value="1">Ir nepieciešams</li>
                <li class="dropdown-item" id="projektors" value="0">Nav nepieciešams</li>
            </div>
        </div>
        <br>
        <div class="dropdown">
            @if ($get->dators==1)
                    <button class="btn btn-success dropdown-toggle" type="button" id="dators" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @else
                    <button class="btn btn-danger dropdown-toggle" type="button" id="dators" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @endif
                    Dators
            </button>
            <div class="dropdown-menu" aria-labelledby="dators">
                <li class="dropdown-item" id="dators" value="1">Ir nepieciešams</li>
                <li class="dropdown-item" id="dators" value="0">Nav nepieciešams</li>
            </div>
        </div>
        <br>
        <div class="dropdown">
            @if ($get->mikrafons==1)
                <button class="btn btn-success dropdown-toggle" type="button" id="mikrafons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @else
                        <button class="btn btn-danger dropdown-toggle" type="button" id="mikrafons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @endif
{{--            <button class="btn btn-secondary dropdown-toggle" type="button" id="mikrafons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                Mikrafons
            </button>
            <div class="dropdown-menu" aria-labelledby="mikrafons">
                <li class="dropdown-item" id="mikrafons"value="1">Ir nepieciešams</li>
                <li class="dropdown-item" id="mikrafons"value="0">Nav nepieciešams</li>
            </div>
        </div>
        <br>
        <div class="dropdown">
            @if ($get->skana==1)
                <button class="btn btn-success dropdown-toggle" type="button" id="skana" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @else
                        <button class="btn btn-danger dropdown-toggle" type="button" id="skana" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @endif
                Skaņa
            </button>
            <div class="dropdown-menu" aria-labelledby="skana">
                <li class="dropdown-item" id="skana" value="1">Ir nepieciešams</li>
                <li class="dropdown-item" id="skana" value="0">Nav nepieciešams</li>
            </div>
        </div>
        <br>
        <div class="dropdown">
            @if ($get->TV==1)
                <button class="btn btn-success dropdown-toggle" type="button" id="TV" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @else
                        <button class="btn btn-danger dropdown-toggle" type="button" id="TV" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @endif
                TV
            </button>
            <div class="dropdown-menu" aria-labelledby="TV">
                <li class="dropdown-item" id="TV"value="1">Ir nepieciešams</li>
                <li class="dropdown-item" id="TV"value="0">Nav nepieciešams</li>
            </div>
        </div>
        <br>
        <div class="dropdown">
            @if ($get->tehnika==1)
                <button class="btn btn-success dropdown-toggle" type="button" id="tehnika" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @else
                        <button class="btn btn-danger dropdown-toggle" type="button" id="tehnika" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @endif
                Tiešraides tehnika
            </button>
            <div class="dropdown-menu" aria-labelledby="tehnika">
                <li class="dropdown-item" id="tehnika"value="1">Ir nepieciešams</li>
                <li class="dropdown-item" id="tehnika"value="0">Nav nepieciešams</li>
            </div>
        </div>
        <br>
        <div class="dropdown">
            @if ($get->prezenteris==1)
                <button class="btn btn-success dropdown-toggle" type="button" id="prezenteris" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @else
                        <button class="btn btn-danger dropdown-toggle" type="button" id="prezenteris" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @endif
                Prezenteris
            </button>
            <div class="dropdown-menu" aria-labelledby="prezenteris">
                <li class="dropdown-item" id="prezenteris"value="1">Ir nepieciešams</li>
                <li class="dropdown-item" id="prezenteris"value="0">Nav nepieciešams</li>
            </div>
        </div>
        <br>
        <div class="dropdown">
            @if ($get->ITspec==1)
                <button class="btn btn-success dropdown-toggle" type="button" id="ITspec" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @else
                        <button class="btn btn-danger dropdown-toggle" type="button" id="ITspec" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @endif
                IT speciālista klātbūtne
            </button>
            <div class="dropdown-menu" aria-labelledby="ITspec">
                <li class="dropdown-item" id="ITspec"value="1">Ir nepieciešams</li>
                <li class="dropdown-item" id="ITspec"value="0">Nav nepieciešams</li>
            </div>
        </div>

        {{--        <input type="checkbox" class="form-check-label"id="projektors"/><label class="form-check-label" for="projektors">Projektors </label><br>--}}
{{--        <input type="checkbox" class="form-check-label"id="dators"/><label class="form-check-label" for="dators">Dators </label><br>--}}
{{--        <input type="checkbox"class="form-check-label" id="mikrafons"/> <label class="form-check-label" for="mikrafons">Mikrafons </label><br>--}}
{{--        <input type="checkbox" class="form-check-label"id="skana"/><label class="form-check-label" for="skana">Skaņa </label><br>--}}
{{--        <input type="checkbox" class="form-check-label"id="TV"/><label class="form-check-label" for="TV">TV </label><br>--}}
{{--        <input type="checkbox" class="form-check-label"id="tehnika"/><label class="form-check-label" for="tehnika">Tiešraides tehnika </label><br>--}}
{{--        <input type="checkbox" class="form-check-label"id="caurlaide"/><label class="form-check-label" for="caurlaide">Caurlaide personām P.M.C. </label><br>--}}
{{--        <input type="checkbox" class="form-check-label"id="prezenteris"/><label class="form-check-label" for="prezenteris">Prezenteris </label><br>--}}
{{--        <input type="checkbox" class="form-check-label"id="ITspec"/><label class="form-check-label" for="ITspec">IT speciālista klātbūtne</label><br>--}}

        <h3>Saimnieciskie jautājumi</h3>


        <label for="">Kafijas pauzes un to skaits</label>
        <input type="text"class="form-control" id="pauzes" placeholder="Kafija paužu skiats un plānotie laiki" value="{{$get->pauzes}}"/>

        <label for="">Caurlaižu skaits stāvvietai</label>
        <input type="number" class="form-control"id="stavvietas" value="{{$get->stavvietas}}" />

        <label for="">Apsardze</label>
        <input type="number"class="form-control" id="apsardze" placeholder="Ievadiet vēlamo apsardzes darbinieku skaitu" value="{{$get->apsardze}}"/>

        <br>
        <div class="dropdown">
            @if ($get->uzkopsana==1)
                <button class="btn btn-success dropdown-toggle" type="button" id="uzkopsana" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @else
                        <button class="btn btn-danger dropdown-toggle" type="button" id="uzkopsana" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @endif
                Telpu uzkopšana
            </button>
            <div class="dropdown-menu" aria-labelledby="uzkopsana">
                <li class="dropdown-item" id="uzkopsana"value="1">Ir nepieciešams</li>
                <li class="dropdown-item" id="uzkopsana"value="0">Nav nepieciešams</li>
            </div>
        </div>
        <br>
        <div class="dropdown">
            @if ($get->PR==1)
                <button class="btn btn-success dropdown-toggle" type="button" id="PR" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @else
                        <button class="btn btn-danger dropdown-toggle" type="button" id="PR" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @endif
                Sabiedrisko attiecību speciālists
            </button>
            <div class="dropdown-menu" aria-labelledby="PR">
                <li class="dropdown-item" id="PR"value="1">Ir nepieciešams</li>
                <li class="dropdown-item" id="PR"value="0">Nav nepieciešams</li>
            </div>
        </div>
        <br>

        <br>
{{--        <input type="checkbox" class="form-check-label" id="uzkopsana" /><label class="form-check-label"for="uzkopsana">Telpu uzkopšana</label>--}}
{{--        <br>--}}
{{--        <input type="checkbox" class="form-check-label"id="PR" /><label class="form-check-label" for="PR">Sabiedrisko attiecību speciālists</label>--}}


        <div class="form_button">
            @csrf
            <button type="submit" class="btn btn-primary" id="pieteikt" >Pieteikt pasākumu</button>
        </div>
    </div>



    <script>


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function(){
            var dropdownObject = {projektors:{{$get->projektors}},dators:{{$get->dators}},mikrafons:{{$get->mikrafons}},skana:{{$get->skana}},TV:{{$get->TV}},tehnika:{{$get->tehnika}},prezenteris:{{$get->prezenteris}},ITspec:{{$get->ITspec}},uzkopsana:{{$get->uzkopsana}},PR:{{$get->PR}}}
            $(".dropdown-item").click(function(event){
                var column = event.target.id
                dropdownObject[column] = event.target.value;
                // alert(column);
                //  alert(JSON.stringify(dropdownObject));
            });


            $("#pieteikt").click(function(){
                //  alert($("#dators").prop("checked"));
                $.ajax({
                    type: "POST",
                    url: "/pasakumi/edit",
                    data: {
                        _token: "{{ csrf_token() }}",
                        id:{{$get->id}},
                        nosaukums:$('#nosaukums').val(),
                        DatumsNO:$('#DatumsNO').val(),
                        DatumsLIDZ:$('#DatumsLIDZ').val(),
                        LaiksNO:$('#LaiksNO').val(),
                        LaiksLIDZ:$('#LaiksLIDZ').val(),
                        Norises_vieta:$('#Norises_vieta').val(),
                        Personu_skaits:$('#Personu_skaits').val(),
                        Atbildigais:$('#Atbildigais').val(),
                        Kontaktinfo:$('#Kontaktinfo').val(),
                        piezimes:$('#piezimes').val(),
                        projektors:dropdownObject.projektors,
                        dators:dropdownObject.dators,
                        mikrafons:dropdownObject.mikrafons,
                        skana:dropdownObject.skana,
                        TV:dropdownObject.TV,
                        tehnika:dropdownObject.tehnika,
                        prezenteris:dropdownObject.prezenteris,
                        ITspec:dropdownObject.ITspec,
                        pauzes:$('#pauzes').val(),
                        stavvietas:$('#stavvietas').val(),
                        apsardze:$('#apsardze').val(),
                        uzkopsana:dropdownObject.uzkopsana,
                        PR:dropdownObject.PR,

                    },
                    success: function (result) {
                        alert("Veiksmīgi rediģēts");
                        window.location.href = "http://pasakumi.local/pasakumi";
                    },
                    error: function (response) {
                        var kautkas = JSON.stringify(response);
                        alert(kautkas);
                        alert('eror');

                    }
                });


            });

        });
    </script>





@stop
