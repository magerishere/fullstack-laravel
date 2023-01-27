<?php

namespace App\Http\Livewire\Back;

use App\Models\User;
use App\Services\Media\MediaService;
use App\Services\User\UserService;
use App\Traits\HasForm;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserEditForm extends Component
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
        'image'
    ];

    public User $user;
    public string $mobile;
    public string $phone;
    public string $name;
    public string $email;
    public string $username;
    public string $password;
    public string $password_confirmation;
    public $image;
    public string $imageUrl;

    protected function rules()
    {
        $userId = $this->user->id;
        return [
            'phone' => ['required', 'digits:11', "unique:users,phone,$userId"],
            'mobile' => ['required', 'digits:11', "unique:users,mobile,$userId"],
            'username' => ['required', 'string', "unique:users,username,$userId"],
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', "unique:users,email,$userId"],
//            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'image' => ['nullable', 'image', 'max:1024'],
        ];
    }

    public function mount(User $user)
    {
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->username = $user->username;
        $this->phone = $user->phone;
        $this->mobile = $user->mobile;
        $this->imageUrl = $user->getFirstMediaUrl();
    }

    public function updateUser()
    {
        $this->formOnceSubmit = true;

        $validatedData = $this->validate();

        $userServices = new UserService();

        $user = $userServices->updateUser($this->user, $validatedData);

        if ($this->image) {
            $mediaService = new MediaService();

            $mediaService->createUserMedia($user, $this->image);
        }

        $this->emitSelf('createUser', ['notification_message' => __('back/form.success_created', ['title' => $user->name])]);
    }

    public function render()
    {
        return view('livewire.back.user-edit-form');
    }
}
