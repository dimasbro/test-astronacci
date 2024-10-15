@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Artikel') }}</div>

                <div class="card-body">
                    @foreach ($data as $dt)
                        <h3>{{ $dt->article_name }}</h3>
                        <p>{{ $dt->article_description }}</p>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
