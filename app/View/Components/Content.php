<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;

class Content extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        // $comments = Comment::all();
        $query = 'SELECT `name`, `text`, `created_at` FROM `comments`';

        $comments = DB::select($query);

        return view('components.content', ['comments' => $comments]);
    }
}
