<x-back.form submit="createUser">
    <x-back.input-text id="name" name="name" label="{{__('back/global.full_name')}}"/>
    <x-back.input-text id="username" name="username" label="{{__('back/global.username')}}"/>
    <x-back.input-file id="image" name="image" label="{{__('back/global.image')}}" :file="$image"/>
    <x-back.input-text id="email" name="email" label="{{__('back/global.email')}}"/>
    <x-back.input-text id="phone" name="phone" label="{{__('back/global.phone')}}"/>
    <x-back.input-text id="mobile" name="mobile" label="{{__('back/global.mobile')}}"/>
    <x-back.input-password id="password" name="password" label="{{__('back/global.password')}}"/>
    <x-back.input-password id="password_confirmation" name="password_confirmation"
                           label="{{__('back/global.password_confirmation')}}"
    />

    <x-back.button>
        {{__('back/form.submit')}}
    </x-back.button>
</x-back.form>
