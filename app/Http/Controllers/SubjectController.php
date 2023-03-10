<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

use Inertia\Inertia;

class SubjectController extends Controller
{
    public function index() {
        $subjects = Subject::all();

        return Inertia::render('Explore', ['subjects' => $subjects]);
    }
}
