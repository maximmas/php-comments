<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Footer extends Component
{

    private array $data;


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
            'address' => '1642 Pacocha Fords Mayer, MN 55360',
            'copyright' => '(c) 2020 - 2022 Future. All rights reserved.'

        ];
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render():mixed
    {
        return view('components.footer', ['data' => $this->data]);
    }
}
