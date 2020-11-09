<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Towary;
use App\Models\Klienci;
use App\Models\Zamowienia;
use App\Models\Wydarzenia;
use DB;
use App\Http\Controllers\Auth;


class SitesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function pokazkontakt()
    {
        return view('sites.kontakt');
    }
    public function pokazdodawanie()
    {
        $danetu = DB::table('towaries')->get();
        return view('sites.Dodawanie_towarow',['danetu' =>$danetu]);
    }
    public function pokazzamowienia()
    {
       
        $danek = DB::table('kliencis')->get();
        $danet = DB::table('towaries')->get(); 
        return view('sites.Zamawianie_towarow',['danek' => $danek,'danet'=> $danet]);
    }
    public function pokazgaleria()
    {
        return view('sites.Galeria');
    }
    public function pokazklienta()
    {
        return view('sites.Dodawanie_klienta');
    }
    public function Wydarzenia()
    {
        $eventsdata = DB::table('wydarzenias')->get();
        $eventsdata = $eventsdata->toJson();        
        return view('sites.Wydarzenia',['eventsdata' => $eventsdata]);
    }
    public function savet(Request $request)
    {
        if(!empty($_POST['nazwa_towaru']) && !empty($_POST['liczba_towaru']) && !empty($_POST['cena_towaru']))
        {
        $towary = new Towary();
        $towary->nazwa_towaru = $request->input('nazwa_towaru');
        $towary->liczba_towaru = $request->input('liczba_towaru');
        $towary->cena_towaru = $request->input('cena_towaru');
        $towary->save();
        }
                     
        header("Location: http://127.0.0.1:8000/dodawanie");
        die();
        
    }
    

    public function savetu(Request $request)
    {
        if(!empty($_POST['nazwa_towaru']) && !empty($_POST['liczba_towaru']) && !empty($_POST['cena_towaru']))
        {
        
        DB::table('towaries')
              ->where('id', $request->input('nazwa_towaru'))
              ->update(['liczba_towaru' => $request->input('liczba_towaru'),
              'cena_towaru' => $request->input('cena_towaru')]);
        }
                     
        header("Location: http://127.0.0.1:8000/dodawanie");
        die();
        
    }

    
    public function savetd(Request $request)
    {
        if(!empty($_POST['nazwa_towaru']) && $_POST['potwierdz'] === "Zgadzam się")
        {
                  
            DB::table('towaries')->where('id',$request->input('nazwa_towaru'))->delete();
        }
                     
        header("Location: http://127.0.0.1:8000/dodawanie");
        die();
        
    }

    public function savek(Request $request)
    {
        if(!empty($_POST['imie']) && !empty($_POST['nazwisko']))
        {
        $klienci = new Klienci();
        $klienci->imie = $request->input('imie');
        $klienci->nazwisko = $request->input('nazwisko');
        $klienci->liczba_zamowien = 0;
        $klienci->save();
        }
                     
        header("Location: http://127.0.0.1:8000/klient");
        die();
        
    }

    public function savez(Request $request)
    {     
        $danez = DB::table('towaries')->where('id',$request->input('id_towaru'))->first();
        if(!empty($_POST['id_towaru']) && !empty($_POST['id_klienta']) && !empty($_POST['priorytet']) &&  $danez->liczba_towaru >= ($request->input('ilosc')))
        {
        $zamowienia = new Zamowienia();
        $zamowienia->id_towaru = $request->input('id_towaru');
        $zamowienia->id_klienta = $request->input('id_klienta');
        $zamowienia->priorytet = $request->input('priorytet');  
        $zamowienia->ilosc = $request->input('ilosc');
        $zamowienia->save();
        DB::table('towaries')->where('id',$request->input('id_towaru'))->update(['liczba_towaru' => ($danez->liczba_towaru - $request->input('ilosc')) ]);   
        DB::table('kliencis')->where('id',$request->input('id_klienta'))->increment('liczba_zamowien');
       
        }
        
                     
       header("Location: http://127.0.0.1:8000/zamowienia");
       die();
        
    }
    public function savew(Request $request)
    {
        if(!empty($_POST['title_wydarzenia']) && !empty($_POST['description_wydarzenia']) && !empty($_POST['date_wydarzenia']))
        {
        $wydarzenia = new Wydarzenia();
        $wydarzenia->title = $request->input('title_wydarzenia');
        $wydarzenia->description = $request->input('description_wydarzenia');
        $wydarzenia->dateevent = $request->input('date_wydarzenia');
        $wydarzenia->save();       
        }
        
                     
       header("Location: http://127.0.0.1:8000/wydarzenia");
       die();
        
    }
    
   

   
      
}

