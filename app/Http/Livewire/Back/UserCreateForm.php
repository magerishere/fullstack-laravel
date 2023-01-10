<?php

namespace App\Http\Livewire\Back;

use App\Models\User;
use App\Services\User\UserServices;
use App\Traits\HasForm;
use Livewire\Component;

class UserCreateForm extends Component
{
    use HasForm;

    public array $formInputs = [
        'mobile',
        'phone',
        'name',
        'username',
        'email',
        'password',
        'password_confirmation',
    ];


    public string $mobile;
    public string $phone;
    public string $name;
    public string $email;
    public string $username;
    public string $password;
    public string $password_confirmation;

    protected $rules = [
        'phone' => ['required', 'digits:11', 'unique:users,phone'],
        'mobile' => ['required', 'digits:11', 'unique:users,mobile'],
        'username' => ['required', 'string', 'unique:users,username'],
        'name' => ['required', 'min:3'],
        'email' => ['required', 'email', 'unique:users,email'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ];



    public function createUser()
    {
        $this->formOnceSubmit = true;

        $validatedData = $this->validate();

        $userServices = new UserServices();

        $user = $userServices->createUser($validatedData);

        $this->emitSelf('createUser', ['notification_message' => __('back/form.success_created', ['title' => $user->name])]);

        $this->resetForm();
    }

    public function render()
    {
        return view('livewire.back.user-create-form');
    }
}
