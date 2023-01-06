<?php

namespace App\Http\Livewire\Back;

use App\Models\User;
use Livewire\Component;

class UserCreateForm extends Component
{
    public string $mobile;
    public string $phone;
    public string $name;
    public string $email;
    public string $username;
    public string $password;
    public string $password_confirmation;
    public bool $formOnceSubmit = false;

    protected $rules = [
        'phone' => ['required', 'digits:11', 'unique:users,phone'],
        'mobile' => ['required', 'digits:11', 'unique:users,mobile'],
        'username' => ['required', 'string', 'unique:users,username'],
        'name' => ['required', 'min:3'],
        'email' => ['required', 'email', 'unique:users,email'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ];

    public function updated($propertyName)
    {
        if ($this->formOnceSubmit) {
            $this->validateOnly($propertyName);
        }
    }

    public function createUser()
    {
        $this->formOnceSubmit = true;
        $validatedData = $this->validate();

        User::create($validatedData);

        session()->flash('success_session', 'Successful Submitted');
    }

    public function render()
    {
        return view('livewire.back.user-create-form');
    }
}
