<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Company;
use App\Models\Customer;
use App\Models\QrCode;
use Ramsey\Uuid\Uuid;
use App\Http\Controllers\TwilioController;

class SendCompany implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    public function generateQrCode($uuid) {

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $companies = Company::query()
        ->where('date_ini', now()->toDateString())
        ->where('is_active', true)
        ->get();

        $custumers = Customer::where('is_active', true)->get();
        
        foreach ($companies as $keyCompany => $company) {
            foreach ($custumers as $key => $value) {
                $timestamp = time();
                $uuid = Uuid::uuid1($timestamp);

                $uuid = sprintf(
                    '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
                    ($timestamp >> 32) & 0xFFFFFFFF,
                    ($timestamp >> 16) & 0xFFFF,
                    ($timestamp >> 0) & 0xFFFF,
                    rand(0, 0xFFFF),
                    rand(0, 0xFFFF),
                    rand(0, 0xFFFF),
                    $value->id,
                    $company->id,
                    rand(0, 0xFF),
                    rand(0, 0xFF)
                );

                $qr = new QrCode;
                $qr->uuid = $uuid;
                $qr->customer_id = $value->id;
                $qr->company_id = $company->id;
                $qr->used = false;
                $qr->save();

                $twillo = new TwilioController();
                $twillo->enviarEmailModel($value->email, $uuid, $value->phone_number);
            }
        }
        return;
    }
}
