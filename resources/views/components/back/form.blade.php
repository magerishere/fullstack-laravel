<form {{$attributes}}>
    @csrf
    <div class="row">
        @if($success_session = session()->get('success_session'))
            <p>{{$success_session}}</p>
        @endif
        <div class="col-12">

        </div>
        {{$slot}}
    </div>


</form>
