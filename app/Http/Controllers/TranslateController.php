<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TranslateController extends Controller
{
    public function translate(Request $request)
    {
        // Get input text and language
        $text = $request->input('text');
        $lang = $request->input('lang');

        // Validate input
        if (!$text || !$lang) {
            return response()->json([
                'error' => 'Text or language missing'
            ], 400);
        }

        try {
            // Call Google Translate API
            $response = Http::post(
                'https://translation.googleapis.com/language/translate/v2?key=YOUR_API_KEY',
                [
                    'q' => $text,
                    'target' => $lang
                ]
            );

            // Extract translated text
            $translated = $response['data']['translations'][0]['translatedText'];

            return response()->json([
                'translated_text' => $translated
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Translation failed',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}