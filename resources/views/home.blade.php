@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php $user = Auth::user(); ?>
            @if (Auth::check())
            <div class="card">
                <div class="card-header">ダッシュボード</div>
                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->
                    <p>id:{{ $user->id }}</p>
                    <p>{{ $user->name }}</p>
                </div>
            </div>
                @if (count($items) > 0)
                    <ul class="media-list">
                    @foreach ($items as $item)
                        <li class="media">
                            <div class="media-body">
                                <div>
                                    <p>{!! $item->title !!}</p>
                                    <p>{!! $item->tag1 !!}</p>
                                    <p>{!! $item->tag2 !!}</p>
                                    <p>{!! $item->tag3 !!}</p>
                                    <p>{!! $item->status !!}</p>
                                    <p>{!! $item->price !!}</p>
                                    <p>{!! $item->description !!}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                @endif
            @else
                ログインしてください
            @endif
        </div>
    </div>
</div>
@endsection
