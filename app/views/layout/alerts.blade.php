

<?php
$b = $errors->all(); ?>


@if((!empty($b)) )

    <div class="alert alert-warning" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>



    </div>

@endif

@if(Session::has('message'))
    <div class="alert alert-warning" role="alert">
        {{ Session::get('message') }}
    </div>
@endif