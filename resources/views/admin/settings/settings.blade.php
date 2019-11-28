@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')


    <div class="card">

        <div class="card-header">

            Settings

        </div>

        <div class="card-body">

            <form action="{{ route('settings.update') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">

                    <label for="site_name">Site name</label>

                    <input type="text" name="site_name" class="form-control"
                           value="{{ $settings->site_name }}">

                </div>

                <div class="form-group">

                    <label for="address">Address</label>

                    <input type="text" name="address" class="form-control"
                           value="{{ $settings->address }}">

                </div>

                <div class="form-group">

                    <label for="contact_phone">Contact phone</label>

                    <input type="text" name="contact_phone" class="form-control"
                           value="{{ $settings->contact_number }}">

                </div>

                <div class="form-group">

                    <label for="contact_email">Contact email</label>

                    <input type="text" name="contact_email" class="form-control"
                           value="{{ $settings->contact_email }}">

                </div>

                <div class="form-group text-center">

                    <button class="btn btn-success" type="submit">

                        Update

                    </button>

                </div>

            </form>

        </div>

    </div>
@stop