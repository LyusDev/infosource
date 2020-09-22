<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use QrCode;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function displayQR()
    {

        $strJsonFileContents = file_get_contents(base_path('resources/js/location.json'));
        $data = json_decode($strJsonFileContents, true);


        foreach ($data as $province_list) {
            foreach ($province_list['province_list'] as $row) {
                foreach ($row as $municipality_list) {
                    foreach ($municipality_list as $barangay_list) {
                        foreach ($barangay_list as $wek) {
                            foreach ($wek as $wok) {
                                echo $wok. "<br/>";
                            }
                        }
                    }
                }
            }
        }
    }

    public function userInfoView($id)
    {
        $userInfo = User::find($id);

        $qrcode = QrCode::size(250)->generate('http://127.0.0.1:8000/UserInfoView/' . $id);

        $strJsonFileContents = file_get_contents(base_path('resources/js/location.json'));
        $data = json_decode($strJsonFileContents, true);


        return view('UserFolder/UserInfoView', compact('userInfo', 'qrcode', 'data'));
    }

    public function UserInfo()
    {

        $id = Auth::user()->id;

        $userInfo = User::find($id);

        $qrcode = QrCode::size(250)->generate('http://127.0.0.1:8000/UserInfoView/' . $id);




        return view('UserFolder/UserInfoView', compact('userInfo', 'qrcode'));
    }
}
