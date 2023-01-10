<?php

namespace App\Traits;

trait HasForm
{
    public bool $formOnceSubmit = false;

    public function updated($propertyName)
    {
        if ($this->formOnceSubmit) {
            $this->validateOnly($propertyName);
        }
    }

    public function resetForm()
    {
        foreach ($this->formInputs as $formInput) {
            $this->$formInput = '';
        }
    }
}
