<?php

namespace App\Traits;

use App\Enums\FormInputEnums;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

trait HasForm
{
    public bool $formOnceSubmit = false;

    public function updated($propertyName)
    {
        if ($propertyName === 'image') {
            $this->imageUrl = getFilePreviewUrl($this->image);
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
