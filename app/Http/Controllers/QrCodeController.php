<?php

namespace App\Http\Controllers;

use App\Models\QrCode;
use App\Models\QrCodeValidation;
use App\Models\Company;
use Illuminate\Http\Request;

class QrCodeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }


    public function isCurrentDateInRange($date_ini, $date_end) {
        $date_ini = new \DateTime($date_ini);
        $date_end = new \DateTime($date_end);
        
        $currentDate = new \DateTime();
        
        $date_ini->setTime(0, 0, 0);
        $date_end->setTime(0, 0, 0);
        $currentDate->setTime(0, 0, 0);
        
        return ($currentDate >= $date_ini && $currentDate <= $date_end);
    }
    

    public function __invoke(Request $request, string $qr_code_uuid)
    {
        $living = $request->user();

        /** @var QrCode $qr_code */
        $qr_code = QrCode::query()
            ->where('uuid', $qr_code_uuid)
            ->first();
        
        $qr_perfect_range = Company::query()->where('id', $qr_code->company_id)->orderBy('id', 'DESC')->first();
        
        if (!$qr_code) {
            return response()->json([
                'message' => 'QR Code não encontrado!',
                'status' => 404
            ], 404);
        }

        if ($qr_code->qrCodeValidations()->count() > 0) {
            return response()->json([
                'message' => 'QR Code já foi validado!',
                'status' => 400
            ], 400);
        }

        if (!$this->isCurrentDateInRange($qr_perfect_range->date_ini, $qr_perfect_range->date_end)) {
            return response()->json([
                'message' => "QR Code fora do periodo permitido!",
                'status' => 400
            ], 400);
        }

        QrCodeValidation::query()->create([
            'living_id'  => $living->id,
            'qr_code_id' => $qr_code->id,
            'success'    => true
        ]);

        return response()->json([
            'message' => 'QR Code validado com sucesso!',
            'status' => 200
        ], 200);
    }
}
