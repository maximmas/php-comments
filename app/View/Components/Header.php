<?php

namespace App\View\Components;

use Illuminate\View\Component;


class Header extends Component
{

    public array $data;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {

        // get this data from DB
        $this->data = [
            'phone' => '(123) 123-45-67',
            'email' => 'info@feature-group.com',
            'title' => 'Comments',
        ];

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render():mixed
    {
        return view('components.header', ['data' => $this->data]);
    }
}
