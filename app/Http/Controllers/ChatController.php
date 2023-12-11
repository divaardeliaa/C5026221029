<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function index()
    {
        // Ambil pesan dari database
        $pesan = DB::table('chat')->get();

        // convert text ke emoji
        $emoji = [
            ':))' => '1.png',
            ':3'  => '2.png',
            ':P'  => '3.png',
            ':C'  => '4.png',
            ';)'  => '5.png',
        ];


        foreach ($pesan as $message) {
            // Substring dengan explode
            $splitPesan = explode(' ', $message->pesan);

            // Ubah ke emoji jika ada key yang sesuai
            foreach ($splitPesan as &$s) {
                if (array_key_exists($s, $emoji)) {
                    $s = '<img src="' . asset('/Pictures/' . $emoji[$s]) . '" alt="' . $s . '" style="width:24px; height:24px;" />';
                }
            }

        //     // Kembalikan ke string
        //     $message->pesan = implode(' ', $splitPesan);
        // }

        // // Substring spasi dengan explode
        // $splitPesan = explode(' ', $pesan->pesan);

        // // menukar text dengan emoji jika key nya sesuai
        // foreach ($splitPesan as &$s) {
        //     if (array_key_exists($s, $emoji)) {
        //         $s = '<img src="' . asset('/Pictures/' . $emoji[$s]) . '" alt="' . $s . '" style="width:24px; height:24px;" />';
        //     }
        // }

        // Kembalikan ke bentuk string
            $pesanEmoji = implode(' ', $splitPesan);

            return view('indexchat', ['pesanEmoji' => $pesanEmoji]);
        }

    }
}

