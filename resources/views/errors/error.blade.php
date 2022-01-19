@include('flash::message')
@if($errors->any())
    <div class="alert alert-danger" style="padding: 1rem;">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @break
        @endforeach
    </div>
@endif
