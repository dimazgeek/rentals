<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use BaseController;


class CarController extends Controller {
  //this controller for home menu  
  public function getIndex() {
    $cars = \App\Car::with('renter')->get();
    return view('car.index')->with('cars', $cars);
}
    //this controller to get list car with join table between cars and orders
    public function getAvalaible() {
    $avas = DB::select("SELECT * FROM `cars` inner join `orders` WHERE orders.provider = cars.renter_id and user = 0");
    return view('car.ava')->with('avas', $avas);
    
}
    //this controller to get data from table orders
    public function getPick() {
    $orders = \App\Order::all();
    return view('car.order')->with('orders', $orders);
    
}
    //this controller to get data from table orders with id related
    public function getEdit($id) {
        $order = \App\Order::all()->find($id);
        
        
        return view('car.editorder')->with('order',$order);
    }
    // this controller to update table order with new input renter_id
    public function postEdit(Request $request) {
       
        $messages = [
            'not_in' => 'You have to choose an author.',
        ];
       
        $this->validate($request,[
            'user' => 'required|min:1',
            
        ],$messages);
        
        $order = \App\Order::find($request->id);
        $order->user = $request->user;
        
        $order->save();
        \Session::flash('message','Your changes were saved.');
        return redirect('/member');
        
    }
    
    //this controller to create new data on table renter or i call it member
    public function postCreate(Request $request) {
        $messages = [
            'not_in' => 'You have to choose an author.',
        ];
        $this->validate($request,[
            'name' => 'required|min:3',
            'phone' => 'required|min:4',
            'address' => 'required|min:3',
            
        ],$messages);
        
        $renter = new \App\Renter();
        $renter->name = $request->name;
        $renter->phone = $request->phone;
        $renter->address = $request->address;
        
        $renter->save();
        
        
        return redirect('/member/member');
    }
    // controller to get view to add member
     public function getCreate() {
        return view('car.addmember');
    }
    
    // controller to get list of member
    public function getMember() {
        $renters = \App\Renter::all();
        return view('car.member')->with('renters', $renters);
    }
    //controller to get view add car
    public function getAddCar() {
        $cars = \App\Car::all();
        return view('car.addcar')->with('cars', $cars);
    }
    // controller to create table cars 
    public function postAddCar(Request $request) {
        $messages = [
            'not_in' => 'You have to choose an author.',
        ];
        $this->validate($request,[
            'name' => 'required|min:3',
            'type' => 'required|min:4',
            'brand' => 'required|min:3',
            'years' => 'required|min:3',
            'color' => 'required|min:3',
            'renter_id' => 'required|min:1',
            
            
        ],$messages);
        
        $cars = new \App\Car();
        $cars->name = $request->name;
        $cars->type = $request->type;
        $cars->brand = $request->brand;
        $cars->years = $request->years;
        $cars->color = $request->color;
        $cars->renter_id = $request->renter_id;
        
        $cars->save();
        
        
        return redirect('/');
    }
    //controller to delete list car 
    public function getDelete($id = null) {
        
        $car = \App\Car::find($id);
        if(is_null($car)) {
            
            return redirect('/');
        }
        
        
        $car->delete();
        
        
        return redirect('/');
    }
        
    
   

}