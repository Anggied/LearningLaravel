@extends('layouts.master')

@section('content')

<div class="row mt-5 justify-content-center">
    <div class="col-md-4">
        <div class="card shadow-lg">
            <div class="card-body">
                <h3 class="text-center mb-4">Login</h3>

                @if($errors->any())
                    @foreach ($errors->all() as $error )
                        <div class="alert alert-danger ">{{ $error }}</div>
                    @endforeach
                @endif

                <form action="{{ route('login.submit') }}" method="POST" >
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">User Name</label>
                        <input type="text" name="name" class="form-control" required>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">User Email</label>
                        <input type="text" name="email" class="form-control" required>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
       </div>
</div>

@endsection
