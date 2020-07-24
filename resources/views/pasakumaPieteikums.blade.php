@extends('layouts.app')

@section('content')

    <h3>Pasākuma pieteikšana</h3>
    <div class="col-md-2">
    <label for="">Pasākuma nosaukums:</label>

    <input type="text" id="nosaukums" class="form-control"/>
        <label for="">Datumns no:</label>
        <input type="date" id="DatumsNO" class="form-control"/>

        <label for="">Datumns līdz:</label>
        <input type="date" id="DatumsLIDZ" class="form-control"/>


        <label for="">Plkst. no:</label>
        <input type="time" id="LaiksNO" class="form-control"/>


        <label for="">Plkst. līdz:</label>
        <input type="time" id="LaiksLIDZ" class="form-control"/>


    <label for="">Norises vieta:</label>

    <input type="text" id="Norises_vieta" class="form-control"/>

    <label for="">Personu skaits</label>

    <input type="number" id="Personu_skaits" class="form-control"/>

    <label for="">Atbildīgā persona</label>

    <input type="text" id="Atbildigais" class="form-control"/>

    <label for="">Kontaktinformācija</label>

    <input type="text" id="Kontaktinfo" placeholder="mob.nr. vai epasts"class="form-control"/>

    <label for="">Piezīmes</label>

    <input type="text" id="piezimes"class="form-control"/>

    <h3>IT nodrošinājums</h3>
        <br>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="projektors" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Projektors
            </button>
            <div class="dropdown-menu" aria-labelledby="projektors">
                <li class="dropdown-item" id="projektors" value="1">Ir nepieciešams</li>
                <li class="dropdown-item" id="projektors" value="0">Nav nepieciešams</li>
            </div>
        </div>
        <br>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dators" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dators
            </button>
            <div class="dropdown-menu" aria-labelledby="dators">
                <li class="dropdown-item" id="dators" value="1">Ir nepieciešams</li>
                <li class="dropdown-item" id="dators" value="0">Nav nepieciešams</li>
            </div>
        </div>
        <br>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="mikrafons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Mikrafons
            </button>
            <div class="dropdown-menu" aria-labelledby="mikrafons">
                <li class="dropdown-item" id="mikrafons"value="1">Ir nepieciešams</li>
                <li class="dropdown-item" id="mikrafons"value="0">Nav nepieciešams</li>
            </div>
        </div>
        <br>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="skana" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Skaņa
            </button>
            <div class="dropdown-menu" aria-labelledby="skana">
                <li class="dropdown-item" id="skana" value="1">Ir nepieciešams</li>
                <li class="dropdown-item" id="skana" value="0">Nav nepieciešams</li>
            </div>
        </div>
        <br>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="TV" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                TV
            </button>
            <div class="dropdown-menu" aria-labelledby="TV">
                <li class="dropdown-item" id="TV"value="1">Ir nepieciešams</li>
                <li class="dropdown-item" id="TV"value="0">Nav nepieciešams</li>
            </div>
        </div>
        <br>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="tehnika" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Tiešraides tehnika
            </button>
            <div class="dropdown-menu" aria-labelledby="tehnika">
                <li class="dropdown-item" id="tehnika"value="1">Ir nepieciešams</li>
                <li class="dropdown-item" id="tehnika"value="0">Nav nepieciešams</li>
            </div>
        </div>
        <br>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="prezenteris" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Prezenteris
            </button>
            <div class="dropdown-menu" aria-labelledby="prezenteris">
                <li class="dropdown-item" id="prezenteris"value="1">Ir nepieciešams</li>
                <li class="dropdown-item" id="prezenteris"value="0">Nav nepieciešams</li>
            </div>
        </div>
        <br>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="ITspec" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                IT speciālista klātbūtne
            </button>
            <div class="dropdown-menu" aria-labelledby="ITspec">
                <li class="dropdown-item" id="ITspec"value="1">Ir nepieciešams</li>
                <li class="dropdown-item" id="ITspec"value="0">Nav nepieciešams</li>
            </div>
        </div>

{{--    <input type="checkbox" class="form-check-label"id="projektors"/><label class="form-check-label" for="projektors">Projektors </label><br>--}}
{{--    <input type="checkbox" class="form-check-label"id="dators"/><label class="form-check-label" for="dators">Dators </label><br>--}}
{{--    <input type="checkbox"class="form-check-label" id="mikrafons"/> <label class="form-check-label" for="mikrafons">Mikrafons </label><br>--}}
{{--    <input type="checkbox" class="form-check-label"id="skana"/><label class="form-check-label" for="skana">Skaņa </label><br>--}}
{{--    <input type="checkbox" class="form-check-label"id="TV"/><label class="form-check-label" for="TV">TV </label><br>--}}
{{--    <input type="checkbox" class="form-check-label"id="tehnika"/><label class="form-check-label" for="tehnika">Tiešraides tehnika </label><br>--}}
{{--    <input type="checkbox" class="form-check-label"id="caurlaide"/><label class="form-check-label" for="caurlaide">Caurlaide personām P.M.C. </label><br>--}}
{{--    <input type="checkbox" class="form-check-label"id="prezenteris"/><label class="form-check-label" for="prezenteris">Prezenteris </label><br>--}}
{{--    <input type="checkbox" class="form-check-label"id="ITspec"/><label class="form-check-label" for="ITspec">IT speciālista klātbūtne</label><br>--}}

    <h3>Saimnieciskie jautājumi</h3>


    <label for="">Kafijas pauzes un to skaits</label>
    <input type="text"class="form-control" id="pauzes" placeholder="Kafija paužu skiats un plānotie laiki"/>

    <label for="">Caurlaižu skaits stāvvietai</label>
    <input type="number" class="form-control"id="stavvietas" />

    <label for="">Apsardze</label>
    <input type="number"class="form-control" id="apsardze" placeholder="Ievadiet vēlamo apsardzes darbinieku skaitu"/>

        <br>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="uzkopsana" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Telpu uzkopšana
            </button>
            <div class="dropdown-menu" aria-labelledby="uzkopsana">
                <li class="dropdown-item" id="uzkopsana"value="1">Ir nepieciešams</li>
                <li class="dropdown-item" id="uzkopsana"value="0">Nav nepieciešams</li>
            </div>
        </div>
        <br>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="PR" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sabiedrisko attiecību speciālists
            </button>
            <div class="dropdown-menu" aria-labelledby="PR">
                <li class="dropdown-item" id="PR"value="1">Ir nepieciešams</li>
                <li class="dropdown-item" id="PR"value="0">Nav nepieciešams</li>
            </div>
        </div>
        <br>
{{--    <input type="checkbox" class="form-check-label" id="uzkopsana" /><label class="form-check-label"for="uzkopsana">Telpu uzkopšana</label>--}}
{{--    <br>--}}
{{--    <input type="checkbox" class="form-check-label"id="PR" /><label class="form-check-label" for="PR">Sabiedrisko attiecību speciālists</label>--}}


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
                var dropdownObject = {projektors:0,dators:0,mikrafons:0,skana:0,TV:0,tehnika:0,prezenteris:0,ITspec:0,uzkopsana:0,PR:0}
                $(".dropdown-item").click(function(event){
                    var column = event.target.id
                    dropdownObject[column] = event.target.value;
                    // alert(column);
                    //    alert(JSON.stringify(event.target.value));
                });

                $("#pieteikt").click(function(){
                    //  alert($("#dators").prop("checked"));
                    $.ajax({
                        type: "POST",
                        url: "/pasakumi",
                        data: {
                            _token: "{{ csrf_token() }}",
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
                            alert("Pasākums gaida apsiprinājumu");
                            // alert(JSON.stringify(dropdownObject));
                            // alert(dropdownObject.projektors);

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
