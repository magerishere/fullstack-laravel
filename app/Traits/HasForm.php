<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasForm
{
    public bool $formOnceSubmit = false;

    public function updated($propertyName)
    {
        if ($this->formOnceSubmit) {
            if (Str::contains($propertyName, '_confirmation')) {
                $propertyName = Str::replace('_confirmation', '', $propertyName);
            }
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
