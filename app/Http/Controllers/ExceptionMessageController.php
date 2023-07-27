<?php

namespace App\Http\Controllers;

use App\Models\exception_message;
use Illuminate\Http\Request;

class ExceptionMessageController extends Controller
{
    public static function save_error(\Throwable $th)
    {
        $data = [
            'line' => $th->getLine(),
            'code' => $th->getCode(),
            'file' => $th->getFile(),
            'message' => $th->getMessage()
        ];

        exception_message::create($data);
    }
}
