<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Pasakums;
use App\User;
use App\Role;
use Gate;
use Log;
use DB;
use Illuminate\Http\Request;

class pasakumuController{
//    public function __construct(){
//        $this->middleware('auth');
//    }
    public function create(){
        return view('pasakumaPieteikums');
    }

    public function store(Request $request){
        $nosaukums = $request->nosaukums;
        $DatumsNO = $request->DatumsNO;
        $DatumsLIDZ = $request->DatumsLIDZ;
        $LaiksNO = $request->LaiksNO;
        $LaiksLIDZ = $request->LaiksLIDZ;
        $Norises_vieta = $request->Norises_vieta;
        $Personu_skaits = $request->Personu_skaits;
        $Atbildigais = $request->Atbildigais;
        $Kontaktinfo = $request->Kontaktinfo;
        $piezimes = $request->piezimes;
        $projektors = $request->projektors;
        $dators = $request->dators;
        $mikrafons = $request->mikrafons;
        $skana = $request->skana;
        $TV = $request->TV;
        $tehnika = $request->tehnika;
        $prezenteris = $request->prezenteris;
        $ITspec = $request->ITspec;
        $pauzes = $request->pauzes;
        $stavvietas = $request->stavvietas;
        $apsardze	 = $request->apsardze;
        $uzkopsana = $request->uzkopsana;
        $PR = $request->PR;


        $data=array("nosaukums"=>$nosaukums,"DatumsNO"=>$DatumsNO,"DatumsLIDZ"=>$DatumsLIDZ,"LaiksNO"=>$LaiksNO,"LaiksLIDZ"=>$LaiksLIDZ,"Norises_vieta"=>$Norises_vieta,"Personu_skaits"=>$Personu_skaits,"Atbildigais"=>$Atbildigais,"Kontaktinfo"=>$Kontaktinfo,"piezimes"=>$piezimes,"projektors"=>$projektors,"dators"=>$dators,"mikrafons"=>$mikrafons,"skana"=>$skana,"TV"=>$TV,"tehnika"=>$tehnika,"prezenteris"=>$prezenteris,"ITspec"=>$ITspec,"pauzes"=>$pauzes,"stavvietas"=>$stavvietas,"apsardze"=>$apsardze,"uzkopsana"=>$uzkopsana,"PR"=>$PR);


//        $data=array("nosaukums"=>$nosaukums,"DatumsNO"=>$DatumsNO,"DatumsLIDZ"=>$DatumsLIDZ,"LaiksNO"=>$LaiksNO,"LaiksLIDZ"=>$LaiksLIDZ,"Norises_vieta"=>$Norises_vieta,"Personu_skaits"=>$Personu_skaits,"Atbildigais"=>$Atbildigais,"Kontaktinfo"=>$Kontaktinfo,"piezimes"=>$piezimes,"projektors"=>+$projektors,"dators"=>+$dators,"mikrafons"=>+$mikrafons,"skana"=>+$skana,"TV"=>+$TV,"tehnika"=>+$tehnika,"prezenteris"=>+$prezenteris,"ITspec"=>+$ITspec,"pauzes"=>$pauzes,"stavvietas"=>$stavvietas,"apsardze"=>$apsardze,"uzkopsana"=>+$uzkopsana,"PR"=>+$PR);
        Pasakums::insert($data);
        return response()->json($nosaukums);
    }



    public  function index(){
        if(Gate::denies('see-events')){
            return redirect(route('admin.users.index'));
        }
        $posts = Pasakums::all();

        return view('pasakumi')->with('posts',$posts);
    }




    public function update(Request $request){
        if(Gate::denies('edit-users')){
            return redirect(route('admin.users.index'));
        }
        $nosaukums = $request->nosaukums;
        $DatumsNO = $request->DatumsNO;
        $DatumsLIDZ = $request->DatumsLIDZ;
        $LaiksNO = $request->LaiksNO;
        $LaiksLIDZ = $request->LaiksLIDZ;
        $Norises_vieta = $request->Norises_vieta;
        $Personu_skaits = $request->Personu_skaits;
        $Atbildigais = $request->Atbildigais;
        $Kontaktinfo = $request->Kontaktinfo;
        $piezimes = $request->piezimes;
        $projektors = $request->projektors;
        $dators = $request->dators;
        $mikrafons = $request->mikrafons;
        $skana = $request->skana;
        $TV = $request->TV;
        $tehnika = $request->tehnika;
        $prezenteris = $request->prezenteris;
        $ITspec = $request->ITspec;
        $pauzes = $request->pauzes;
        $stavvietas = $request->stavvietas;
        $apsardze	 = $request->apsardze;
        $uzkopsana = $request->uzkopsana;
        $PR = $request->PR;
        $apstiprinatsDir = $request->apstiprinatsDir;
        $apstiprinatsDMV = $request->apstiprinatsDMV;
        $apstiprinatsAudz = $request->apstiprinatsAudz;

        $data=array("nosaukums"=>$nosaukums,"DatumsNO"=>$DatumsNO,"DatumsLIDZ"=>$DatumsLIDZ,"LaiksNO"=>$LaiksNO,"LaiksLIDZ"=>$LaiksLIDZ,"Norises_vieta"=>$Norises_vieta,"Personu_skaits"=>$Personu_skaits,"Atbildigais"=>$Atbildigais,"Kontaktinfo"=>$Kontaktinfo,"piezimes"=>$piezimes,"projektors"=>$projektors,"dators"=>$dators,"mikrafons"=>$mikrafons,"skana"=>$skana,"TV"=>$TV,"tehnika"=>$tehnika,"prezenteris"=>$prezenteris,"ITspec"=>$ITspec,"pauzes"=>$pauzes,"stavvietas"=>$stavvietas,"apsardze"=>$apsardze,"uzkopsana"=>$uzkopsana,"PR"=>$PR,"apstiprinatsDir"=>$apstiprinatsDir,"apstiprinatsDMV"=>$apstiprinatsDMV,"apstiprinatsAudz"=>$apstiprinatsAudz);


//        $data=array("nosaukums"=>$nosaukums,"DatumsNO"=>$DatumsNO,"DatumsLIDZ"=>$DatumsLIDZ,"LaiksNO"=>$LaiksNO,"LaiksLIDZ"=>$LaiksLIDZ,"Norises_vieta"=>$Norises_vieta,"Personu_skaits"=>$Personu_skaits,"Atbildigais"=>$Atbildigais,"Kontaktinfo"=>$Kontaktinfo,"piezimes"=>$piezimes,"projektors"=>+$projektors,"dators"=>+$dators,"mikrafons"=>+$mikrafons,"skana"=>+$skana,"TV"=>+$TV,"tehnika"=>+$tehnika,"prezenteris"=>+$prezenteris,"ITspec"=>+$ITspec,"pauzes"=>$pauzes,"stavvietas"=>$stavvietas,"apsardze"=>$apsardze,"uzkopsana"=>+$uzkopsana,"PR"=>+$PR);
        Log::info($request->id);
        Pasakums::insert($data);
        DB::table('pasakumi')->where('id',$request->id)->delete();

        return redirect()->route('pasakumi.index');
    }

    public function destroy(Request $request, $var){
        if(Gate::denies('edit-users')){
            return redirect(route('admin.users.index'));
        }

        DB::table('pasakumi')->where('id',$var)->delete();

        return redirect()->route('pasakumi.index');
    }

    public function edit($var){
        if(Gate::denies('edit-users')){
            return redirect(route('admin.users.index'));
        }
        $get = DB::table('pasakumi')->where('id',$var)->first();
        return view('pasakumiEdit')->with('get',$get);

    }
    public function apstiprinat(Request $request){
//        Log::info($request);
        DB::table('pasakumi')->where('id',$request->id)->update([$request->who=>1]);

        return redirect()->route('pasakumi.index');
    }

}
