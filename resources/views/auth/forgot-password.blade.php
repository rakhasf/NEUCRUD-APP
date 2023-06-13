@extends('layouts.app')
@section('main')

<div class="mt-5 mx-auto" style="width: 380px">

    <div class="card">
        <div class="card-body">
            <form action="{{ route('password.email') }}" method="POST">
                @csrf

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Send Reset Password</button>
            </form>
        </div>
    </div>
</div>
@endsection