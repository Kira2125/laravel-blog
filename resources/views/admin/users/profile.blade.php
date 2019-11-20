@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')


    <div class="card">

        <div class="card-header">

            Profile

        </div>

        <div class="card-body">

            <form action="{{ route('user.profile.update') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">

                    <label for="name">User</label>

                    <input type="text" name="name" value="{{ $user->name }}" class="form-control">

                </div>

                <div class="form-group">

                    <label for="email">Email</label>

                    <input type="text" name="email" value="{{ $user->email }}" class="form-control">

                </div>

                <div class="form-group">

                    <label for="password">New password</label>

                    <input type="password" name="password" class="form-control">

                </div>

                <div class="form-group">

                    <label for="avatar">Avatar</label>

                    <input type="file" name="avatar" class="form-control">

                </div>

                <div class="form-group">

                    <label for="facebook">Facebook</label>

                    <input type="text" name="facebook" value="{{ $user->profile->facebook }}" class="form-control">

                </div>

                <div class="form-group">

                    <label for="youtube">Youtube</label>

                    <input type="text" name="youtube" value="{{ $user->profile->youtube }}" class="form-control">

                </div>

                <div class="form-group">

                    <label for="about">Short information about yourself</label>

                    <textarea cols="6" id="about" rows="10"
                              name="about" class="form-control">{{ $user->profile->about }}</textarea>

                </div>

                <div class="form-group text-center">

                    <button class="btn btn-success" type="submit">

                        Apply

                    </button>

                </div>

            </form>

        </div>

    </div>
@stop
