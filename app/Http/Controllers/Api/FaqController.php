<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();

        return response()->json([
           'faqs' => $faqs,
           'link' => config('settings.speed_faq_video_link')
        ]);
    }
}
