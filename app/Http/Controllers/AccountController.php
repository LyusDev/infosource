<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use QrCode;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function displayQR(){
      
        $strJsonFileContents = file_get_contents(base_path('resources/js/location.json'));
        $data = json_decode($strJsonFileContents, true);
        dd($data);     
    }

    public function userInfoView($id){
        $userInfo = User::find($id);
        
        $qrcode = QrCode::size(250)->generate('http://127.0.0.1:8000/UserInfoView/'.$id);

        $strJsonFileContents = file_get_contents(base_path('resources/js/location.json'));
        $data = json_decode($strJsonFileContents, true);

       
        return view('UserFolder/UserInfoView',compact('userInfo','qrcode','data'));
    }

    public function UserInfo(){

        $id = Auth::user()->id;

        $userInfo = User::find($id);

        $qrcode = QrCode::size(250)->generate('http://127.0.0.1:8000/UserInfoView/'.$id);

        $strJsonFileContents = file_get_contents(base_path('resources/js/location.json'));
        $data = json_decode($strJsonFileContents, true);

       
        return view('UserFolder/UserInfoView',compact('userInfo','qrcode','data'));
    }
}
