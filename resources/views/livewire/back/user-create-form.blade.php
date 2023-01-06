<x-back.form wire:submit.prevent="createUser">
    <x-back.input-text id="name" name="name" label="Name" wire:model="name"/>
    <x-back.input-text id="username" name="username" label="Username" wire:model="username"/>
    <x-back.input-text id="email" name="email" label="Email" wire:model="email"/>
    <x-back.input-text id="phone" name="phone" label="Phone" wire:model="phone"/>
    <x-back.input-text id="mobile" name="mobile" label="Mobile" wire:model="mobile"/>
    <x-back.input-text id="password" name="password" label="Password" wire:model="password"/>
    <x-back.input-text id="password_confirmation" name="password_confirmation" label="Password Confirmation"
                       wire:model="password_confirmation"/>

    <x-back.button>
        Submit
    </x-back.button>
</x-back.form>
