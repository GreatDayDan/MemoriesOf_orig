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
            <form method="post" action="{{ route('moevents.update', $moevents->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="id">id:</label>
                    <input type="text" class="form-control" name="id" value={{ $moevents->id }} />
                </div>
                <div class="form-group">
                    <label for="user->id">user id:</label>
                    <input type="text" class="form-control" name="user_id" value={{ $moevents->id }} />
                </div>
                <div class="form-group">
                    <label for="posts->id">posts id:</label>
                    <input type="text" class="form-control" name="posts->id" value={{ $moevents->posts->id }} />
                </div>
                <div class="form-group">
                    <label for="event">Event:</label>
                    <input type="text" class="form-control" name="event_name" value={{ $moevents->event_name }} />
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" name="country" value={{ $moevents->description }} />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
