@extends('layouts.app') @section('content')
    <h1>New Task</h1>

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/tasks">
        @csrf
        <div class="form-group">
            <label for="description">Task description</label>
            <input type="text" class="form-control" name="description" />
        </div>

        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">Create Task</button>
        </div>
    </form>
@endsection
