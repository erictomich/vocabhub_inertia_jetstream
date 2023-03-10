<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Text;
use App\Models\Subject;

class ContentController extends Controller
{
    public function show($slug) {
      
        $subject = Subject::where('slug', $slug)->first();

  
        $subjectChilds = Subject::where('parent_subject_id', $subject->id)->get();

        $textChilds = Text::where('subject_id', $subject->id)->get();

        return Inertia::render('Explore/Subject', ['slug' => $slug, 'textChilds' => $textChilds, 'subjectChilds' => $subjectChilds, 'title' => $subject->subject]);
    }
}
