<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Text;
use Inertia\Inertia;

class TextController extends Controller
{
    
    public function textsFromSubject($subject_id = 0
    ) {
       // $texts = Text::where('subject_id', $subject_id);
        $texts = Text::where('subject_id', $subject_id)->get();
        
        if(count($texts) > 0) {
            die(var_dump(count($texts)));
        } else {
            die('não encontrou');
        }

        

    }

    public function show($slug) {
        
        $text = Text::where('slug', $slug)->first();

        return Inertia::render('Text', ['text' => $text]);
    }
}
