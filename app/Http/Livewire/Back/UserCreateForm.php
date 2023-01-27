<?php

namespace App\Http\Livewire\Back;

use App\Enums\FormInputEnums;
use App\Enums\UserRoleEnums;
use App\Models\User;
use App\Services\Media\MediaService;
use App\Services\User\UserService;
use App\Traits\HasForm;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserCreateForm extends Component
{
    use WithFileUploads;
    use HasForm;

    protected array $formInputs = [
        'mobile',
        'phone',
        'name',
        'username',
        'email',
        'password',
        'password_confirmation',
        'image',
    ];


    public string $mobile;
    public string $phone;
    public string $name;
    public string $email;
    public string $username;
    public string $password;
    public string $password_confirmation;
    public $image;

    protected function rules()
    {
        return [
            'phone' => ['required', 'digits:11', 'unique:users,phone'],
            'mobile' => ['required', 'digits:11', 'unique:users,mobile'],
            'username' => ['required', 'string', 'unique:users,username'],
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'image' => ['nullable', 'image', 'max:1024'],
        ];
    }

    public function createUser()
    {
        $this->formOnceSubmit = true;

        $validatedData = $this->validate();

        $userServices = new UserService();

        $user = $userServices->createUser($validatedData);

        $userServices->assignRole($user, UserRoleEnums::MEMBER);

        if ($this->image) {
            $mediaService = new MediaService();

            $mediaService->createUserMedia($user, $this->image);
        }

        $this->emitSelf('createUser', ['notification_message' => __('back/form.success_updated', ['title' => $user->name])]);

        $this->resetForm();
    }

    public function render()
    {
        return view('livewire.back.user-create-form');
    }
}
