<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\passenger;
use App\Models\Routeshedule;
use DB;
use App\Models\Seat;
use App\Mail\DemoMail;
use Mail;

class PassengerInfoController extends Controller
{
    public function booking(Request $request)
     { 
        
        

        $passenger = new passenger;
       
        $passenger->Passenger_Name = $request->pname;
        $passenger->Mobile_Number = $request->phone;
        $passenger->Email = $request->mail;
        $passenger->NIC = $request->nic;
        $passenger->Seats = $request->book;
        $passenger->Num_Seat = $request->count;
        $passenger->Totle_price = $request->totle;
        $passenger->save();
        $seatId=$request->seatid;
        $route= Routeshedule::find($request->seatid);

        $pdetails  = DB::table('passengers')->where('NIC', '=', $request->nic)->first();
        $seatno=json_decode($pdetails->Seats);
        $emptyArray = array();
        
       foreach($seatno as $no){
        switch($no) {
            case('1_4'):
                $msg = '1';
                break;
            case('1_5'):
                $msg = '2';
                break;
                case('2_1'):
                    $msg = '3';
                    break;
                    case('2_2'):
                        $msg = '4';
                        break;
                        case('2_4'):
                            $msg = '5';
                            break;
                            case('2_5'):
                                $msg = '6';
                                break;
                                case('3_1'):
                                    $msg = '7';
                                    break;
                                    case('3_2'):
                                        $msg = '8';
                                        break;
                                        case('3_4'):
                                            $msg = '9';
                                            break;
                                            case('3_5'):
                                                $msg = '10';
                                                break;
                                                case('4_1'):
                                                    $msg = '11';
                                                    break;
                                                    case('4_2'):
                                                        $msg = '12';
                                                        break;
                                                        case('4_4'):
                                                            $msg = '13';
                                                            break;
                                                            case('4_5'):
                                                                $msg = '14';
                                                                break;
                                                                case('5_1'):
                                                                    $msg = '15';
                                                                    break;
                                                                    case('5_2'):
                                                                        $msg = '16';
                                                                        break;
                                                                        case('5_4'):
                                                                            $msg = '17';
                                                                            break;
                                                                            case('5_5'):
                                                                                $msg = '18';
                                                                                break;
                                                                                case('6_1'):
                                                                                    $msg = '19';
                                                                                    break;
                                                                                    case('6_2'):
                                                                                        $msg = '20';
                                                                                        break;
                                                                                        case('6_4'):
                                                                                            $msg = '21';
                                                                                            break;
                                                                                            case('6_5'):
                                                                                                $msg = '22';
                                                                                                break;
                                                                                                case('7_1'):
                                                                                                    $msg = '23';
                                                                                                    break;
                                                                                                    case('7_2'):
                                                                                                        $msg = '24';
                                                                                                        break;
                                                                                                        case('7_4'):
                                                                                                            $msg = '25';
                                                                                                            break;
                                                                                                            case('7_5'):
                                                                                                                $msg = '26';
                                                                                                                break;
                                                                                                                case('8_1'):
                                                                                                                    $msg = '27';
                                                                                                                    break;
                                                                                                                    case('8_2'):
                                                                                                                        $msg = '28';
                                                                                                                        break;
                                                                                                                        case('8_4'):
                                                                                                                            $msg = '29';
                                                                                                                            break;
                                                                                                                            case('8_5'):
                                                                                                                                $msg = '30';
                                                                                                                                break;
                                                                                                                                case('9_1'):
                                                                                                                                    $msg = '31';
                                                                                                                                    break;
                                                                                                                                    case('9_2'):
                                                                                                                                        $msg = '32';
                                                                                                                                        break;
                                                                                                                                        case('9_4'):
                                                                                                                                            $msg = '33';
                                                                                                                                            break;
                                                                                                                                            case('9_5'):
                                                                                                                                                $msg = '34';
                                                                                                                                                break;
                                                                                                                                                case('10_1'):
                                                                                                                                                    $msg = '35';
                                                                                                                                                    break;
                                                                                                                                                    case('10_2'):
                                                                                                                                                        $msg = '36';
                                                                                                                                                        break;
                                                                                                                                                        case('10_4'):
                                                                                                                                                            $msg = '37';
                                                                                                                                                            break;
                                                                                                                                                            case('10_5'):
                                                                                                                                                                $msg = '38';
                                                                                                                                                                break;
                                                                                                                                                                case('11_1'):
                                                                                                                                                                    $msg = '39';
                                                                                                                                                                    break;
                                                                                                                                                                    case('11_2'):
                                                                                                                                                                        $msg = '40';
                                                                                                                                                                        break;
                                                                                                                                                                        case('11_4'):
                                                                                                                                                                            $msg = '41';
                                                                                                                                                                            break;
                                                                                                                                                                            case('11_5'):
                                                                                                                                                                                $msg = '42';
                                                                                                                                                                                break;
                                                                                                                                                                                case('12_1'):
                                                                                                                                                                                    $msg = '43';
                                                                                                                                                                                    break;
                                                                                                                                                                                    case('12_2'):
                                                                                                                                                                                        $msg = '44';
                                                                                                                                                                                        break;
                                                                                                                                                                                        case('12_4'):
                                                                                                                                                                                            $msg = '45';
                                                                                                                                                                                            break;
                                                                                                                                                                                            case('12_5'):
                                                                                                                                                                                                $msg = '46';
                                                                                                                                                                                                break;
                                                                                                                                                                                                case('13_1'):
                                                                                                                                                                                                    $msg = '47';
                                                                                                                                                                                                    break;
                                                                                                                                                                                                    case('13_2'):
                                                                                                                                                                                                        $msg = '48';
                                                                                                                                                                                                        break;
                                                                                                                                                                                                        case('13_4'):
                                                                                                                                                                                                            $msg = '49';
                                                                                                                                                                                                            break;
                                                                                                                                                                                                            case('13_5'):
                                                                                                                                                                                                                $msg = '50';
                                                                                                                                                                                                                break;
                                                                                                                                                                                                                case('14_1'):
                                                                                                                                                                                                                    $msg = '51';
                                                                                                                                                                                                                    break;
                                                                                                                                                                                                                    case('14_2'):
                                                                                                                                                                                                                        $msg = '52';
                                                                                                                                                                                                                        break;
            
                                                                                                                                                                                                                        case('14_3'):
                                                                                                                                                                                                                            $msg = '53';
                                                                                                                                                                                                                            break;
            
                                                                                                                                                                                                                            case('14_4'):
                                                                                                                                                                                                                                $msg = '54';
                                                                                                                                                                                                                                break;
            
                                                                                                                                                                                                                                case('14_5'):
                                                                                                                                                                                                                                    $msg = '55';
                                                                                                                                                                                                                                    break;
                            
            
            default:
                $msg = '0';
        }
        array_push($emptyArray, " $msg ",);

       }

        return view('HomePage.payment',compact('route','pdetails','seatId','emptyArray'));
       /* $seat1  = DB::table('seats')->where('shedul_id', '=', $request->seatid)->first();
        $my=json_decode($request->book);
       $numbers= json_decode($seat1->seat,true); //json decode numbers ar
 
   foreach( $my as $s){
    if (($key = array_search($s, $numbers)) !== false) {
        unset($numbers[$key]);
        $numbers = array_values($numbers);
    }
}
    $numbers_final = json_encode($numbers);
    
  
    
    $seat3 = Seat::find($seat1 ->id);
  
    $seat3->seat = $numbers_final;
    $seat3->save();*/
  

    }  

    public function ticketview(Request $request)
    { 
        $mail=$request->mail;
        $price= $request->price;
        
        $seatid= $request->seatid;
        $route= Routeshedule::find($request->seatid);
        $busname= DB::table('buses')->where('bus_no', '=', $route->Bus_no)->first('Owner_name');
        $mailData = [
        'title' => 'Mail from sleb.com',
        'body' => 'This is the your bus ticket with booking details.'
        ];
        $seat1=$request->seats;
        $seat=json_decode($request->seats);
        $emptyArray = array();
        
        foreach($seat as $no){
        switch($no) {
            case('1_4'):
                $msg = '1';
                break;
            case('1_5'):
                $msg = '2';
                break;
                case('2_1'):
                    $msg = '3';
                    break;
                    case('2_2'):
                        $msg = '4';
                        break;
                        case('2_4'):
                            $msg = '5';
                            break;
                            case('2_5'):
                                $msg = '6';
                                break;
                                case('3_1'):
                                    $msg = '7';
                                    break;
                                    case('3_2'):
                                        $msg = '8';
                                        break;
                                        case('3_4'):
                                            $msg = '9';
                                            break;
                                            case('3_5'):
                                                $msg = '10';
                                                break;
                                                case('4_1'):
                                                    $msg = '11';
                                                    break;
                                                    case('4_2'):
                                                        $msg = '12';
                                                        break;
                                                        case('4_4'):
                                                            $msg = '13';
                                                            break;
                                                            case('4_5'):
                                                                $msg = '14';
                                                                break;
                                                                case('5_1'):
                                                                    $msg = '15';
                                                                    break;
                                                                    case('5_2'):
                                                                        $msg = '16';
                                                                        break;
                                                                        case('5_4'):
                                                                            $msg = '17';
                                                                            break;
                                                                            case('5_5'):
                                                                                $msg = '18';
                                                                                break;
                                                                                case('6_1'):
                                                                                    $msg = '19';
                                                                                    break;
                                                                                    case('6_2'):
                                                                                        $msg = '20';
                                                                                        break;
                                                                                        case('6_4'):
                                                                                            $msg = '21';
                                                                                            break;
                                                                                            case('6_5'):
                                                                                                $msg = '22';
                                                                                                break;
                                                                                                case('7_1'):
                                                                                                    $msg = '23';
                                                                                                    break;
                                                                                                    case('7_2'):
                                                                                                        $msg = '24';
                                                                                                        break;
                                                                                                        case('7_4'):
                                                                                                            $msg = '25';
                                                                                                            break;
                                                                                                            case('7_5'):
                                                                                                                $msg = '26';
                                                                                                                break;
                                                                                                                case('8_1'):
                                                                                                                    $msg = '27';
                                                                                                                    break;
                                                                                                                    case('8_2'):
                                                                                                                        $msg = '28';
                                                                                                                        break;
                                                                                                                        case('8_4'):
                                                                                                                            $msg = '29';
                                                                                                                            break;
                                                                                                                            case('8_5'):
                                                                                                                                $msg = '30';
                                                                                                                                break;
                                                                                                                                case('9_1'):
                                                                                                                                    $msg = '31';
                                                                                                                                    break;
                                                                                                                                    case('9_2'):
                                                                                                                                        $msg = '32';
                                                                                                                                        break;
                                                                                                                                        case('9_4'):
                                                                                                                                            $msg = '33';
                                                                                                                                            break;
                                                                                                                                            case('9_5'):
                                                                                                                                                $msg = '34';
                                                                                                                                                break;
                                                                                                                                                case('10_1'):
                                                                                                                                                    $msg = '35';
                                                                                                                                                    break;
                                                                                                                                                    case('10_2'):
                                                                                                                                                        $msg = '36';
                                                                                                                                                        break;
                                                                                                                                                        case('10_4'):
                                                                                                                                                            $msg = '37';
                                                                                                                                                            break;
                                                                                                                                                            case('10_5'):
                                                                                                                                                                $msg = '38';
                                                                                                                                                                break;
                                                                                                                                                                case('11_1'):
                                                                                                                                                                    $msg = '39';
                                                                                                                                                                    break;
                                                                                                                                                                    case('11_2'):
                                                                                                                                                                        $msg = '40';
                                                                                                                                                                        break;
                                                                                                                                                                        case('11_4'):
                                                                                                                                                                            $msg = '41';
                                                                                                                                                                            break;
                                                                                                                                                                            case('11_5'):
                                                                                                                                                                                $msg = '42';
                                                                                                                                                                                break;
                                                                                                                                                                                case('12_1'):
                                                                                                                                                                                    $msg = '43';
                                                                                                                                                                                    break;
                                                                                                                                                                                    case('12_2'):
                                                                                                                                                                                        $msg = '44';
                                                                                                                                                                                        break;
                                                                                                                                                                                        case('12_4'):
                                                                                                                                                                                            $msg = '45';
                                                                                                                                                                                            break;
                                                                                                                                                                                            case('12_5'):
                                                                                                                                                                                                $msg = '46';
                                                                                                                                                                                                break;
                                                                                                                                                                                                case('13_1'):
                                                                                                                                                                                                    $msg = '47';
                                                                                                                                                                                                    break;
                                                                                                                                                                                                    case('13_2'):
                                                                                                                                                                                                        $msg = '48';
                                                                                                                                                                                                        break;
                                                                                                                                                                                                        case('13_4'):
                                                                                                                                                                                                            $msg = '49';
                                                                                                                                                                                                            break;
                                                                                                                                                                                                            case('13_5'):
                                                                                                                                                                                                                $msg = '50';
                                                                                                                                                                                                                break;
                                                                                                                                                                                                                case('14_1'):
                                                                                                                                                                                                                    $msg = '51';
                                                                                                                                                                                                                    break;
                                                                                                                                                                                                                    case('14_2'):
                                                                                                                                                                                                                        $msg = '52';
                                                                                                                                                                                                                        break;
            
                                                                                                                                                                                                                        case('14_3'):
                                                                                                                                                                                                                            $msg = '53';
                                                                                                                                                                                                                            break;
            
                                                                                                                                                                                                                            case('14_4'):
                                                                                                                                                                                                                                $msg = '54';
                                                                                                                                                                                                                                break;
            
                                                                                                                                                                                                                                case('14_5'):
                                                                                                                                                                                                                                    $msg = '55';
                                                                                                                                                                                                                                    break;
                            
            
            default:
                $msg = '0';
        }
        array_push($emptyArray, " $msg ",);

       }

        Mail::to($mail)->send(new DemoMail($mailData,$price, $emptyArray,$route,$busname));
        return view('HomePage.viewTicket',compact('route','emptyArray','price','busname','seat1','seatid'));
      
       
    }

   
}
