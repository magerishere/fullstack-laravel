<?php

namespace App\View\Components\Back;

use Illuminate\View\Component;

class Form extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $submit)
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
        return view('components.back.form');
    }
}
