<form wire:submit.prevent="{{$submit}}">
    @csrf
    @if($success_session = session()->get('success_session'))
        <p>Yes Successful</p>
    @endif
    <div class="row">
        {{$slot}}
    </div>


</form>


{{--https://laravel-livewire.com/docs/2.x/inline-scripts--}}
@push('scripts')
    <script>
        document.addEventListener('livewire:load', function () {
            // Run a callback when an event ("foo") is emitted from this component
            @this.
            on("{{$submit}}", (response) => {
                $.notify({
                    message: response.notification_message,
                    icon: 'fa fa-check'
                }, {
                    type: "info"
                });
            });
        });
    </script>
@endpush
