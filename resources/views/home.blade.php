@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (Auth::check())
                <?php $user = Auth::user(); ?>
                <div class="card">
                    <div class="card-header">ダッシュボード</div>

                    <div class="card-body">
                        <!-- @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif -->

                        ログインおめ！<br />
                        あなたは{{ $user->name }}ですね？
                    </div>
                </div>
            @else
                ログインおね
            @endif
        </div>
    </div>
</div>
@endsection
