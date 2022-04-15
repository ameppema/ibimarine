@if ($errors->any())

    @foreach ($errors->all() as $error)
        @dump($error)
    @endforeach
    
@endif