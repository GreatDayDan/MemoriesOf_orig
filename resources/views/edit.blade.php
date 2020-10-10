@extends('base')
@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Update a event</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('events.update', $event->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="id">id:</label>
                    <input type="text" class="form-control" name="id" value={{ $event->id }} />
                </div>
                <div class="form-group">
                    <label for="user->id">user id:</label>
                    <input type="text" class="form-control" name="user_id" value={{ $event->id }} />
                </div>
                <div class="form-group">
                    <label for="posts->id">posts id:</label>
                    <input type="text" class="form-control" name="posts->id" value={{ $event->posts->id }} />
                </div>
                <div class="form-group">
                    <label for="event">Event:</label>
                    <input type="text" class="form-control" name="event" value={{ $event->event }} />
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" name="country" value={{ $event->description }} />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
