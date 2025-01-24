<?php

namespace App\Trait;

trait ApiResponder
{
    public function success($data, $message = null, $code = null)
    {
        return response()->json([
            'message' => $message,
            'data' => $data
        ], $code);
    }
    public function error($message = null, $code = null, $data = null)
    {
        return response()->json([
            'message' => $message,
            'data' => $data
        ], $code);
    }
}
