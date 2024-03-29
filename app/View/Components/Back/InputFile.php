<?php

namespace App\View\Components\Back;

use Illuminate\View\Component;

class InputFile extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $label, public string $id, public string $name, public string $value = '', public int $sizeSm = 12, public int $sizeMd = 6, public int $sizeLg = 4, public $file = null, public ?string $filePreviewUrl = null)
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
        return view('components.back.input-file');
    }
}
