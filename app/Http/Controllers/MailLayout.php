<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QrCode;

class MailLayout extends Controller
{
    //
    public function show($uuid) {
        $qrUidd = QrCode::select('uuid')->where('uuid','=',$uuid)->get();

        return view('livewire.pages.mail', compact('qrUidd'));
    }
}
