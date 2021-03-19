
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger text-center">
                <li> {{ $error }} </li>
            </div>
        @endforeach
    </ul>
@endif

