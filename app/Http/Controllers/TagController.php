<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index(Tag $tag) {

        return view('result', [
            'jobs' => $tag->jobs->load(['employer', 'tags'])
        ]);

    }
}
