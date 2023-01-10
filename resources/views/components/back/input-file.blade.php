<div class="col-{{$sizeSm}} col-md-{{$sizeMd}} col-lg-{{$sizeLg}}">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label for="{{$id}}">{{$label}}</label>
                <input @class([
            "form-control",
            'is-valid' => ($errors->any() && !$errors->has($name)),
            'is-invalid' => $errors->has($name),
            ]) type="file" id="{{$id}}" name="{{$name}}" wire:model="{{$name}}" {{$attributes}} />
                @error($name)
                <small class="form-text text-muted" id="emailHelp">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="col-3">
            @if ($file)
                <div class="preview-image-wrapper">
                    <img src="{{ $file->temporaryUrl() }}">
                </div>
            @endif
        </div>
    </div>


</div>
