@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Video') }}</div>

                <div class="card-body">
                    @foreach ($data as $dt)
                        <h3>{{ $dt->video_name }}</h3>
                        <p>
                            {{ $dt->video_description }}<br>
                            <a href="{{ $dt->video_url }}">{{ $dt->video_url }}</a>
                        </p>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
