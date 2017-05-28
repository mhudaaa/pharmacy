<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Forecast;
use App\Model\Medicine;
use App\Model\Order;
use App\Model\Player;
use App\Model\Stock;

class PharmacyController extends Controller{


    public function setName(Request $request){
        $name = $request->name;
        $request->session()->put('name', $name);
        $request->session()->put('week', 5);
        $request->session()->put('forecastWeek', 5);
        return redirect('/avatar');
    }



    public function home(){
        $stocks = Stock::where('id_player', '=', '1')->get();
        $medicine = Medicine::all();
        return view('homepage', compact('stocks', 'medicine'));
    }

    public function play(){
        return view('play-game');
    }


    // Get order
    public function getOrders(){
        $week = session('week');
        $paracetamol    = Forecast::where('id_medicine', '=', '1')->get();
        $neuralgin      = Forecast::where('id_medicine', '=', '2')->get();
        $antalgin       = Forecast::where('id_medicine', '=', '3')->get();
        $bodrex         = Forecast::where('id_medicine', '=', '4')->get();
        $komix          = Forecast::where('id_medicine', '=', '5')->get();
        return view('orders', compact('week', 'paracetamol', 'antalgin', 'bodrex', 'neuralgin', 'komix'));
    }

    // Set Order
    public function setOrder(Request $request){
        $medicineQty = [$request->paracetamol, $request->neuralgin, $request->antalgin, $request->bodrex, $request->komix];

        $i=0;
        While ($i<= 4){
            $order = new Order();
            $order->id_player   = $request->id_player;
            $order->week        = session('week');
            $order->id_medicine = $i + 1;
            $order->quantity    = $medicineQty[$i];
            $order->save();
            $i++;
        }

        $nextWeek = session('week') + 1;
        $request->session()->put('week', $nextWeek);
        return redirect('/home');
    }

    // Get Forecast
    public function getForecast(){
        $forecasts  = Forecast::where('id_medicine', '=', '1')->get();
        $orders     = Order::where('id_medicine', '=', '1')->get();
        $stock      = Stock::where('id_player', '=', '1')->get();
        $medicine   = Medicine::where('id_medicine', '=', '1')->get();
        return view('forecast', compact('forecasts', 'orders', 'stock', 'medicine'));
    }

    public function setForecast(Request $request){
        $lastWeek = $request->last_week;
        $forecastWeek = session('forecastWeek');
        if ($lastWeek == $forecastWeek) {
            $getForecast = ceil((($request->mg1 * 3) + ($request->mg2 * 2) + ($request->mg3 * 1)) / 6);

            $forecast = new Forecast();
            $forecast->id_player    = 1;
            $forecast->week         = $forecastWeek;
            $forecast->id_medicine  = $request->id_medicine;
            $forecast->forecast     = $getForecast;
            $forecast->save();
            
            $nextForecastWeek = session('forecastWeek') + 1;
            $request->session()->put('forecastWeek', $nextForecastWeek);
            
            return redirect('/forecast');
            // echo "ini baru bisa";
        } else{
            echo "kurang";
        }
    }

    public function gameover(){
        return view('game-over');
    }
    
    // public function start(){
    //     $metodeAwal = rand(1, 3);

    //     $paracetamol    = Permintaan::where('id_medicine', '=', '1')->get();
    //     $antalgin       = Permintaan::where('id_medicine', '=', '2')->get();
    //     $bodrex         = Permintaan::where('id_medicine', '=', '3')->get();
    //     $diapet         = Permintaan::where('id_medicine', '=', '4')->get();
    //     $komix          = Permintaan::where('id_medicine', '=', '5')->get();
        
    //     return view('orders', compact('metodeAwal', 'paracetamol', 'antalgin', 'bodrex', 'diapet', 'komix'));
    // }
    
    // public function insert(Request $request){

    //     $jmlObat = [$request->pr, $request->ag, $request->bd, $request->dp, $request->kx];


    //     $i=0;
    //     While ($i<= 4){
    //         $permintaan = new Permintaan();
    //         $permintaan->id_medicine = $i+1;
    //         $permintaan->jumlah = $jmlObat[$i];
    //         $permintaan->save();
    //         $i++;
    //     }
    //     return redirect('/play');
    // }

}