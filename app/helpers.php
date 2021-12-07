<?php

use Illuminate\Support\Facades\Log;

if (!function_exists('emitError')) {
    function emitError(string $errorMessage, array $errors)
    {
        Log::error($errorMessage, ['info' => $errors]);

        return response()->json([
            'success' => false,
            'reason'  => $errorMessage
        ])->setStatusCode(500);
    }
}

if (!function_exists('generateSuccessResponse')) {
    function generateSuccessResponse(array $data)
    {
        return response()->json([
            'success' => true,
            'data'    => $data
        ])->setStatusCode(200);
    }
}
