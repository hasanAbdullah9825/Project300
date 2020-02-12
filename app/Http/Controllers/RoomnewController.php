<?php

namespace App\Http\Controllers;
use App\client;
use App\room;
use Illuminate\Http\Request;

class RoomnewController extends Controller
{
    public function abailRoom($customerId){
        
       $rooms=room::where('bookingState','0')->get();
        return view('book_room',['roomsNo'=>$rooms,'customerId'=>$customerId]);
        

    }

    public function bookRoom ($roomId,$customerId){
       $room=room::findOrFail($roomId);
       $room->bookingState=1;
       $room->save();

       client::where('id', $customerId)
            ->update(['roomNo' => $roomId]);
       return redirect()->route('home');
      
  
       
    }

    public function AllReservedCustomer(){
        $customer=client::all();
        return view('all_reservation',['customers'=>$customer]);

        

    }

    public function destroyClient ($roomId,$clientId){
      $room=room::findOrFail($roomId);
       $room->bookingState=0;
       $room->save();

         $client=client::findOrFail($clientId);
         $d=date('Y-m-d');
         $client->ldate=$d;
         $client->recentCondition=1;
         $client->save();
       
        return redirect()->route('client.index');
     
    }
    


}
