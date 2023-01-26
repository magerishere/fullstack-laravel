<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

trait HasForm
{
    public bool $formOnceSubmit = false;

    public function updated($propertyName)
    {
        $formInputs = collect($this->formInputs);
        $formInputs->each(function ($formInput, $key) use ($formInputs) {
            if (is_int($key)) {
                $formInputs[$formInput] = [];
                unset($formInputs[$key]);
            }
            return $formInput;
        });

        $formInput = $formInputs[$propertyName] ?? null;
        if (is_null($formInput)) {
            throw new \Error("$formInput does not exists in formInputs property");
        }
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
