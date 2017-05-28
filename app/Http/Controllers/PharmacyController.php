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
        $request->session()->put('forecastWeekPar', 5);
        $request->session()->put('forecastWeekNeu', 5);
        $request->session()->put('forecastWeekAnt', 5);
        $request->session()->put('forecastWeekBod', 5);
        $request->session()->put('forecastWeekKom', 5);
        return redirect('/avatar');
    }



    public function home(){
        $stocks     = Stock::where('id_player', '=', '1')->get();
        $medicine   = Medicine::all();
        $player     = Player::first();
        return view('homepage', compact('stocks', 'medicine', 'player'));
    }

    public function play(){
        return view('play-game');
    }


    // Get order
    public function getOrders(){
        $week = session('week');
        $stocks         = Stock::where('id_player', '=', '1')->get();
        $expired        = Medicine::all();
        $paracetamol    = Forecast::where('id_medicine', '=', '1')->get();
        $neuralgin      = Forecast::where('id_medicine', '=', '2')->get();
        $antalgin       = Forecast::where('id_medicine', '=', '3')->get();
        $bodrex         = Forecast::where('id_medicine', '=', '4')->get();
        $komix          = Forecast::where('id_medicine', '=', '5')->get();
        return view('orders', compact('expired', 'week', 'stocks', 'paracetamol', 'antalgin', 'bodrex', 'neuralgin', 'komix'));
    }

    // Set Order
    public function setOrder(Request $request){

        $medicineQty = [$request->paracetamol, $request->neuralgin, $request->antalgin, $request->bodrex, $request->komix];

        // Initialize object
        $outStock = false;
        $stock  = Stock::first();
        $player = Player::first();
        $prices  = Medicine::all();

        // Decrease stock
        $stock->paracetamol = ($stock->paracetamol - $medicineQty[0]);
        $stock->neuralgin = ($stock->neuralgin - $medicineQty[1]);
        $stock->antalgin = ($stock->antalgin - $medicineQty[2]);
        $stock->bodrex = ($stock->bodrex - $medicineQty[3]);
        $stock->komix = ($stock->komix - $medicineQty[4]);

        // Save stock
        $stock->save();

        // // Increase money
        $total =   (($medicineQty[0] * $prices[0]->price) +
                    ($medicineQty[1] * $prices[1]->price) +
                    ($medicineQty[2] * $prices[2]->price) +
                    ($medicineQty[3] * $prices[3]->price) +
                    ($medicineQty[4] * $prices[4]->price));
        $player->money = ($player->money + $total);
        $player->save();

        // Save medicine order
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

        // // Set week after 
        $nextWeek = session('week') + 1;
        $request->session()->put('week', $nextWeek);

        return redirect('/home');
    }

    // Get Forecast
    public function getForecast($id_medicine){
        $player     = Player::all();
        $forecasts  = Forecast::where('id_medicine', '=', $id_medicine)->get();
        $orders     = Order::where('id_medicine', '=', $id_medicine)->get();
        $stock      = Stock::where('id_player', '=', '1')->get();
        $idMedicine = $id_medicine;
        if ($id_medicine == 1) {
            $medicineStock = $stock[0]->paracetamol;
        } elseif ($id_medicine == 2){
            $medicineStock = $stock[0]->neuralgin;
        } elseif ($id_medicine == 3){
            $medicineStock = $stock[0]->antalgin;
        } elseif ($id_medicine == 4){
            $medicineStock = $stock[0]->bodrex;
        } else{
            $medicineStock = $stock[0]->komix;
        }
        $medicine   = Medicine::where('id_medicine', '=', $id_medicine)->get();
        return view('forecast', compact('idMedicine', 'medicineStock', 'forecasts', 'orders', 'stock', 'medicine', 'player'));
    }

    public function setForecast(Request $request, $id_medicine){
        $lastWeek = $request->last_week;
        $forecastWeek = [
            session('forecastWeekPar'),
            session('forecastWeekNeu'),
            session('forecastWeekAnt'),
            session('forecastWeekBod'),
            session('forecastWeekKom')
        ];

        if ($lastWeek == $forecastWeek[0] && $id_medicine == 1) {
            $getForecast = ceil((($request->mg1 * 3) + ($request->mg2 * 2) + ($request->mg3 * 1)) / 6);

            $forecast = new Forecast();
            $forecast->id_player    = 1;
            $forecast->week         = $forecastWeek[$id_medicine - 1];
            $forecast->id_medicine  = $id_medicine;
            $forecast->forecast     = $getForecast;
            $forecast->save();
            
            $nextForecastWeek = $forecastWeek[0] + 1;
            $request->session()->put('forecastWeekPar', $nextForecastWeek);
            
            return redirect('/forecast/'.$id_medicine);
        } elseif ($lastWeek == $forecastWeek[1] && $id_medicine == 2) {
            $getForecast = ceil((($request->mg1 * 3) + ($request->mg2 * 2) + ($request->mg3 * 1)) / 6);

            $forecast = new Forecast();
            $forecast->id_player    = 1;
            $forecast->week         = $forecastWeek[$id_medicine - 1];
            $forecast->id_medicine  = $id_medicine;
            $forecast->forecast     = $getForecast;
            $forecast->save();
            
            $nextForecastWeek = $forecastWeek[1] + 1;
            $request->session()->put('forecastWeekNeu', $nextForecastWeek);
            
            return redirect('/forecast/'.$id_medicine);
        } elseif ($lastWeek == $forecastWeek[2] && $id_medicine == 3) {
            $getForecast = ceil((($request->mg1 * 3) + ($request->mg2 * 2) + ($request->mg3 * 1)) / 6);

            $forecast = new Forecast();
            $forecast->id_player    = 1;
            $forecast->week         = $forecastWeek[$id_medicine - 1];
            $forecast->id_medicine  = $id_medicine;
            $forecast->forecast     = $getForecast;
            $forecast->save();
            
            $nextForecastWeek = $forecastWeek[2] + 1;
            $request->session()->put('forecastWeekAnt', $nextForecastWeek);
            
            return redirect('/forecast/'.$id_medicine);
        } elseif ($lastWeek == $forecastWeek[3] && $id_medicine == 4) {
            $getForecast = ceil((($request->mg1 * 3) + ($request->mg2 * 2) + ($request->mg3 * 1)) / 6);

            $forecast = new Forecast();
            $forecast->id_player    = 1;
            $forecast->week         = $forecastWeek[$id_medicine - 1];
            $forecast->id_medicine  = $id_medicine;
            $forecast->forecast     = $getForecast;
            $forecast->save();
            
            $nextForecastWeek = $forecastWeek[3] + 1;
            $request->session()->put('forecastWeekBod', $nextForecastWeek);
            
            return redirect('/forecast/'.$id_medicine);
        } elseif ($lastWeek == $forecastWeek[4] && $id_medicine == 5) {
            $getForecast = ceil((($request->mg1 * 3) + ($request->mg2 * 2) + ($request->mg3 * 1)) / 6);

            $forecast = new Forecast();
            $forecast->id_player    = 1;
            $forecast->week         = $forecastWeek[$id_medicine - 1];
            $forecast->id_medicine  = $id_medicine;
            $forecast->forecast     = $getForecast;
            $forecast->save();
            
            $nextForecastWeek = $forecastWeek[4] + 1;
            $request->session()->put('forecastWeekKom', $nextForecastWeek);
            
            return redirect('/forecast/'.$id_medicine);
        } else{
            $request->session()->flash('message', "Gagal. Anda harus melakukan penjualan terlebih dahulu");
            return redirect('/forecast/'.$id_medicine);
        }
    }

    // Input restock
    public function setRestock(Request $request, $id_medicine){
        $stocks         = Stock::first();
        $player         = Player::first();

        $stockArr       = [
                            $stocks->paracetamol,
                            $stocks->neuralgin,
                            $stocks->antalgin,
                            $stocks->bodrex,
                            $stocks->komix
                            ];

        $oldStock       = $stockArr[$id_medicine - 1];

        $restockQty     = $request->restock_qty;
        $newStock       = $oldStock + $restockQty;

        $playerMoney    = $request->money;
        $price          = $request->price;
        $total          = $restockQty * $price;

        
        if ($id_medicine == 1) {
            $stocks->paracetamol = $newStock;
        } elseif ($id_medicine == 2) {
            $stocks->neuralgin = $newStock;
        } elseif ($id_medicine == 3) {
            $stocks->antalgin = $newStock;
        } elseif ($id_medicine == 4) {
            $stocks->bodrex = $newStock;
        } else{
            $stocks->komix = $newStock;
        }

        // Increase money
        $player->money = $playerMoney - $total;
        
        // Save Data
        $stocks->save();
        $player->save();
        return redirect('/forecast/'.$id_medicine);
    }

    public function gameover(){
        return view('game-over');
    }

}