@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')


    <div class="card">

        <div class="card-header">

            Create a new tag

        </div>

        <div class="card-body">

            <form action="{{ route('tags.store') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">

                    <label for="tag">Tag</label>

                    <input type="text" name="tag" class="form-control">

                </div>

                <div class="form-group text-center">

                    <button class="btn btn-success" type="submit">

                        Store tag

                    </button>

                </div>

            </form>

        </div>

    </div>
@stop
