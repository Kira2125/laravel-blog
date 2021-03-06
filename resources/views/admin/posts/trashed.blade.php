@extends('layouts.app')


@section('content')

    <div class="card">

        <div class="card-body">

            <table class="table table-hover">

                <thead>

                <th>

                    Category name

                </th>

                <th>

                    Editing

                </th>

                <th>

                    Restore

                </th>

                <th>

                    Deleting

                </th>


                </thead>

                <tbody>

                @foreach($posts as $post)

                    <tr>

                        <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="80px" height="50px"/></td>

                        <td>{{ $post->title }}</td>

                        <td>Edit</td>

                        <td>

                            <a href="{{ route('post.restore', ['id'=>$post->id]) }}" class="btn btn-success">

                                Restore

                            </a>

                        </td>

                        <td>

                            <a href="{{ route('post.kill', ['id'=>$post->id]) }}" class="btn btn-danger">

                                Delete

                            </a>

                        </td>

                    </tr>

                @endforeach

                </tbody>

            </table>

        </div>

    </div>
@stop
