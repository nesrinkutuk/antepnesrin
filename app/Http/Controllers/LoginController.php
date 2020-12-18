<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function  forgotPassword()
    {
        return view('login.forgotPassword');
    }
    public function smsPassword(Request $request)
    {
      $phone=$request->phone;
      $password=mt_rand(100000,999999);
      $new_password=Hash::make($password);
      if(User::where('telefon','=',$phone)->count()>0)
      {
          $basic  = new \Vonage\Client\Credentials\Basic('9caf5fcb', 'qRDa3BoiMfJqhRGd');
          $client = new \Vonage\Client($basic);

          $message = $client->message()->send([
              'to' => '9'.$phone,//905054441122
              'from' => 'Nesrin',
              'text' => 'Sifreniz Degistirilmistir Yeni Sifreniz :'.$password.' Giris Yaptıktan Sonra Sifrenizi Degistiriniz...'
          ]);
          if ($message->getStatus() == 0) {
              echo "Mesaj başarıyla gönderildi.";
              User::where('telefon',$phone)
                  ->update(['password'=>$new_password]);

          }
            
          else {
              echo "Mesaj gönderilemedi: " . $message->getStatus() . "";
          }




      }
      else{
          echo "hata";
      }


    }
}
