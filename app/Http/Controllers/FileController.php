<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function show($filename)
    {
        try {
            //code...
            $path = 'public/uploads/' . $filename; // O caminho do arquivo deve corresponder ao caminho usado no armazenamento
    
            if (Storage::exists($path)) {
                return response(Storage::get($path))->header('Content-Type', Storage::mimeType($path));
            }
    
            abort(404); // Retorne um erro 404 se o arquivo não existir
        } catch (\Exception $e) {
            //throw $th;
            return ['err' => $e->getMessage()];
        }
    }
}
