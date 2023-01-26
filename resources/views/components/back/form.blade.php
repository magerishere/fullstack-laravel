<form wire:submit.prevent="{{$submit}}">
    @csrf
    <div class="row">
        {{$slot}}
    </div>
    <div class="col-12">
        <div class="tile-footer">
            {{$footer}}
        </div>
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
