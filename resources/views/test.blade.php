@extends('layouts.master')

@section('content')

<h1>Some Content</h1>
    <div class="row">
        <div class="col-md-12">
            <h1>Control Structures</h1>
            @if(true)
                <p>This only displays if true</p>
            @else
                <p>This only displays if false</p>
            @endif
            <hr>
            @for($i = 0; $i < 5; $i++)
            <p>{{ $i + 1 }}. Itteration</p>
            @endfor
        </div>
    </div>

@endsection 