<?php

namespace App\View\Components\Back;

use Illuminate\View\Component;

class InputPassword extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $label, public string $id, public string $name, public string $value = '', public int $sizeSm = 12, public int $sizeMd = 6, public int $sizeLg = 4)
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
        return view('components.back.input-password');
    }
}
