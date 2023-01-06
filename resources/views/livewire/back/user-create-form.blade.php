<x-back.form wire:submit.prevent="createUser">
    <x-back.input-text id="name" name="name" label="{{__('back/global.full_name')}}" wire:model="name"/>
    <x-back.input-text id="username" name="username" label="{{__('back/global.username')}}" wire:model="username"/>
    <x-back.input-text id="email" name="email" label="{{__('back/global.email')}}" wire:model="email"/>
    <x-back.input-text id="phone" name="phone" label="{{__('back/global.phone')}}" wire:model="phone"/>
    <x-back.input-text id="mobile" name="mobile" label="{{__('back/global.mobile')}}" wire:model="mobile"/>
    <x-back.input-text id="password" name="password" label="{{__('back/global.password')}}" wire:model="password"/>
    <x-back.input-text id="password_confirmation" name="password_confirmation"
                       label="{{__('back/global.password_confirmation')}}"
                       wire:model="password_confirmation"/>

    <x-back.button>
        {{__('back/form.submit')}}
    </x-back.button>
</x-back.form>
