<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\kirimMail;
use Illuminate\Support\Facades\Mail;
class KirimEmailController extends Controller
{
    public function index()
    {
        $randomNumber = random_int(100000, 999999);

        // dd($randomNumber);
        $emailnya = "hsyahril0@gmail.com";
        $pesan = "<p><h1>Pin Code</h1></p>";
        $pesan .= $randomNumber;
        $pesan .= "<p>
        <img src='https://cdns.diadona.id/diadona.id/resources/news/2021/06/15/44101/664xauto-anonymous-adalah-kelompok-hacker-handal-internasional-ini-fakta-dan-jasa-mereka-melawan-kejahatan-210615v.jpg' width='200'>
        </p>";
        $data_email = [
            'subject'       => 'Interbox Forget Password',
            'sender_name'   => 'noreply@gmail.com',
            'isi'           => $pesan,
        ];
        Mail::to($emailnya)->send(new kirimMail($data_email));
        return '<h1>Sukses Kirim Email</h1>';
    }
}
