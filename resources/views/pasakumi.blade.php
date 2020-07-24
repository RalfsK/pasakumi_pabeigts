@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Pasākumi</div>

                    <div class="card-body">
     <div class = "table-responsive">
    <table id="table"class="table table-bordered table-sm">
        <thead>
         <tr>
            <th scope="col">Nosaukums</th>
            <th scope="col">DatumsNO</th>
            <th scope="col">DatumsLIDZ</th>
            <th scope="col">LaiksNO</th>
            <th scope="col">LaiksLIDZ</th>
            <th scope="col">Norises_vieta</th>
            <th scope="col">Personu_skaits</th>
            <th scope="col">Atbildigais</th>
            <th scope="col">Kontaktinfo</th>
            <th scope="col">piezimes</th>
            <th scope="col">projektors</th>
            <th scope="col">dators</th>
            <th scope="col">mikrafons</th>
            <th scope="col">skana</th>
            <th scope="col">TV</th>
            <th scope="col">tehnika</th>
            <th scope="col">prezenteris</th>
            <th scope="col">ITspec</th>
            <th scope="col">pauzes</th>
            <th scope="col">stavvietas</th>
            <th scope="col">apsardze	</th>
            <th scope="col">uzkopsana</th>
            <th scope="col">PR</th>
            <th scope="col">Direktores apstiprinājums</th>
             <th scope="col">Datorikas nodaļas vaditaja apstiprinājums</th>
             <th scope="col">Audzinātājas apstiprinājums</th>

         @can('edit-pasakumi')
             <th>Darbības</th>
             @endcan


         </tr>
        </thead>
        <tbody>

            @foreach($posts as $post)
                <tr>
                     <td>{{$post->nosaukums  }}</td>
                     <td>{{$post->DatumsNO  }}</td>
                     <td>{{$post->DatumsLIDZ	  }}</td>
                     <td>{{$post->LaiksNO  }}</td>
                     <td>{{$post->LaiksLIDZ  }}</td>
                     <td>{{$post->Norises_vieta  }}</td>
                     <td>{{$post->Personu_skaits  }}</td>
                     <td>{{$post->Atbildigais  }}</td>
                     <td>{{$post->Kontaktinfo  }}</td>
                     <td>{{$post->piezimes  }}</td>

                    @if($post->projektors==1)
                     <td>Ir </td>
                    @else
                        <td>Nav </td>
                    @endif
                    @if($post->dators==1)
                        <td>Ir </td>
                    @else
                        <td>Nav </td>
                    @endif
                    @if($post->mikrafons==1)
                        <td>Ir </td>
                    @else
                        <td>Nav </td>
                    @endif
                    @if($post->skana==1)
                        <td>Ir </td>
                    @else
                        <td>Nav </td>
                    @endif
                    @if($post->TV==1)
                        <td>Ir </td>
                    @else
                        <td>Nav </td>
                    @endif
                    @if($post->tehnika==1)
                        <td>Ir </td>
                    @else
                        <td>Nav </td>
                    @endif
                    @if($post->prezenteris==1)
                        <td>Ir </td>
                    @else
                        <td>Nav </td>
                    @endif
                    @if($post->ITspec==1)
                        <td>Ir </td>
                    @else
                        <td>Nav </td>
                    @endif

                     <td>{{$post->pauzes  }}</td>
                     <td>{{$post->stavvietas  }}</td>
                     <td>{{$post->apsardze  }}</td>

                    @if($post->uzkopsana==1)
                        <td>Ir </td>
                    @else
                        <td>Nav </td>
                    @endif
                    @if($post->PR==1)
                        <td>Ir </td>
                    @else
                        <td>Nav </td>
                    @endif

                    @if($post->apstiprinatsDir==1)
                        <td>Ir </td>
                    @else
                        <td>Nav
                        @can('direktors')
                                <?php
                                $attach = ["id"=>$post->id, "who"=>"apstiprinatsDir"];
                                ?>
                                <form action="{{route('pasakumi.apstiprinat',$attach)}}" method="POST" class="float-left">
                                @csrf
                                <button type="submit" class="btn btn-success">Apstiprināt</button>
                            </form>
                        @endcan
                        </td>
                    @endif
                    @if($post->apstiprinatsDNV==1)
                        <td>Ir </td>
                    @else
                        <td>Nav
                        @can('DNV')
                                <?php
                                $attach = ["id"=>($post->id), "who"=>"apstiprinatsDNV"];
                                ?>
                                <form action="{{route('pasakumi.apstiprinat',$attach)}}" method="POST" class="float-left">
                                @csrf
                                <button type="submit" class="btn btn-success">Apstiprināt</button>
                            </form>
                        @endcan
                        </td>
                    @endif
                    @if($post->apstiprinatsAudz==1)
                        <td>Ir </td>
                    @else
                        <td>Nav
                        @can('audzinataja')
                            <?php
                                $attach = ["id"=>($post->id), "who"=>"apstiprinatsAudz"];
                            ?>
                            <form action="{{route('pasakumi.apstiprinat',$attach)}}" method="POST" class="float-left">
                                @csrf
                                <button type="submit" class="btn btn-success">Apstiprināt</button>
                            </form>
                        @endcan
                        </td>
                    @endif


{{--                    @can('edit-pasakumi',$post->id)--}}
                        @can('edit-pasakumi')

                        <td>
                            <a href="{{route('pasakumi.edit',$post->id)}}" ><button type="button" class="btn btn-warning"class="float-left">Rediģēt</button></a>
                            <form action="{{route('pasakumi.destroy',$post)}}" method="POST" class="float-left">
                                @csrf
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger">Dzēst</button>
                            </form>
                        </td>
                    @endcan

                </tr>
            @endforeach

        </tbody>
    </table>
     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        {{--var masiivsIN = ("{{$post}}".replace(/&quot/g,"\"").replace(/;/g,""));--}}
        {{--var masiivs = jQuery.parseJSON(masiivsIN);--}}
        {{--//alert(masiivsIN);--}}

        {{--function JanaNumurs(item){--}}
        {{--    document.getElementById("tabula").innerHTML+=--}}
        {{--        "<tr>"--}}
        {{--        +"<td>"+ item.nosaukums + "</td>"--}}
        {{--        +"<td>"+ item.DatumsNO + "</td>"--}}
        {{--        +"<td>"+ item.DatumsLIDZ	 + "</td>"--}}
        {{--        +"<td>"+ item.LaiksNO + "</td>"--}}
        {{--        +"<td>"+ item.LaiksLIDZ + "</td>"--}}
        {{--        +"<td>"+ item.Norises_vieta + "</td>"--}}
        {{--        +"<td>"+ item.Personu_skaits + "</td>"--}}
        {{--        +"<td>"+ item.Atbildigais + "</td>"--}}
        {{--        +"<td>"+ item.Kontaktinfo + "</td>"--}}
        {{--        +"<td>"+ item.piezimes + "</td>"--}}
        {{--        +"<td>"+ item.projektors	 + "</td>"--}}
        {{--        +"<td>"+ item.dators + "</td>"--}}
        {{--        +"<td>"+ item.mikrafons + "</td>"--}}
        {{--        +"<td>"+ item.skana + "</td>"--}}
        {{--        +"<td>"+ item.TV + "</td>"--}}
        {{--        +"<td>"+ item.tehnika + "</td>"--}}
        {{--        +"<td>"+ item.prezenteris + "</td>"--}}
        {{--        +"<td>"+ item.ITspec + "</td>"--}}
        {{--        +"<td>"+ item.pauzes + "</td>"--}}
        {{--        +"<td>"+ item.stavvietas + "</td>"--}}
        {{--        +"<td>"+ item.apsardze + "</td>"--}}
        {{--        +"<td>"+ item.uzkopsana + "</td>"--}}
        {{--        +"<td>"+ item.PR + "</td>"--}}

        {{--        +"<td>"+ item.apstiprinats + "</td>"--}}

        {{--        +"<td>"+ "<a href=\"http://projekts.local/admin/edit/" + item.nosaukums + "\"><button>Rediģēt</button></a>" + "</td>"--}}
        {{--        +"<td>"+"<button class=\"dzest\" id=\"" + item.nosaukums + "\">Dzēst</button>" + "</td>"--}}

        {{--        @can('edit-users')--}}
        {{--        +"<td>"+"<button class=\"apstiprinat\" id=\"" + item.nosaukums + "\">Apstiprināt</button>" + "</td>"--}}

        {{--        "<td><a href=\"{{route('pasakumi.edit',$user->id)}}\" ><button type=\"button\" class=\"btn btn-warning\"class=\"float-left\">Rediģēt</button></a></td>"--}}
        {{--        <td><form action="{{route('pasakumi.destroy',$user)}}" method="POST" class="float-left">--}}
        {{--        @csrf--}}
        {{--        {{method_field('DELETE')}}--}}
        {{--        <button type="submit" class="btn btn-danger">Dzēst</button>--}}
        {{--        </form>--}}
        {{--        </td>--}}
        {{--        @endcan--}}

        {{--        + "</tr>";--}}
        {{--}--}}
        {{--var array = {{$post}};--}}
        {{--masiivs.forEach(JanaNumurs, 1);--}}
        {{--$.ajaxSetup({--}}
        {{--    headers: {--}}
        {{--        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
        {{--    }--}}
        {{--});--}}

        {{--$(".apstiprinat").click(function(){--}}
        {{--    //alert(this.id);--}}

        {{--    $.ajax({--}}
        {{--        type: "POST",--}}
        {{--        url: "http://projekts.local/admin/confirm",--}}
        {{--        data: {--}}
        {{--            nosaukums:this.id--}}
        {{--        },--}}
        {{--        success: function (result) {--}}
        {{--            alert("Pasākums apstiprināts");--}}
        {{--        },--}}
        {{--        error: function (response) {--}}
        {{--            var kautkas = JSON.stringify(response);--}}
        {{--            alert(kautkas);--}}
        {{--            alert('eror');--}}

        {{--        }--}}
        {{--    });--}}
        {{--});--}}

        {{--$(".dzest").click(function(){--}}
        {{--    //alert(this.id);--}}

        {{--    $.ajax({--}}
        {{--        type: "POST",--}}
        {{--        url: "http://projekts.local/admin/dzest",--}}
        {{--        data: {--}}
        {{--            nosaukums:this.id--}}
        {{--        },--}}
        {{--        success: function (result) {--}}
        {{--            alert("Pasākums dzēsts");--}}
        {{--        },--}}
        {{--        error: function (response) {--}}
        {{--            var kautkas = JSON.stringify(response);--}}
        {{--            alert(kautkas);--}}
        {{--            alert('eror');--}}

        {{--        }--}}
        {{--    });--}}
        {{--});--}}





    </script>



@stop
