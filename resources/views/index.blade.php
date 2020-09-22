@extends('base')
@section('main')
    <div class="row">
        <div class="col-sm-12">
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>
        <h1 class="display-3">MemoriesOf</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>user id</td>
                <td>Posts id</td>
                <td>event</td>
                <td>Description</td>
                <td colspan = 2>Actions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($events as $event)
                <tr>
                    <td>{{$event->id}}</td>
                    <td>{{$event->user->id}}</td>
                    <td>{{$event->posts->Id}}</td>
                    <td>{{$event->event}}</td>
                    <td>{{$event->description}}</td>
                    <td>
                        <a href="{{ route('events.edit',$event->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('events.destroy', $contact->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
        </div>
@endsection
{{--@extends('events.layout')--}}

{{--@section('content')--}}
{{--    <div class="row">--}}
{{--        <div class="col-lg-12 margin-tb">--}}
{{--            <div class="pull-left">--}}
{{--                <h2>MemoriesOf</h2>--}}
{{--            </div>--}}
{{--            <div class="pull-right">--}}
{{--                <a class="btn btn-success" href="{{ route('events.create') }}"> Create New event</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    @if ($message = Session::get('success'))--}}
{{--        <div class="alert alert-success">--}}
{{--            <p>{{ $message }}</p>--}}
{{--        </div>--}}
{{--    @endif--}}

{{--    <table class="table table-bordered">--}}
{{--        <tr>--}}
{{--            <th>No</th>--}}
{{--            <th>Event</th>--}}
{{--            <th>Details</th>--}}
{{--        </tr>--}}
{{--        @foreach ($events as $event)--}}
{{--            <tr>--}}
{{--                <td>{{ ++$i }}</td>--}}
{{--                <td>{{ $event->name }}</td>--}}
{{--                <td>{{ $event->detail }}</td>--}}
{{--                <td>--}}
{{--                    <form action="{{ route('events.destroy',$event->id) }}" method="POST">--}}

{{--                        <a class="btn btn-info" href="{{ route('events.show',$event->id) }}">Show</a>--}}

{{--                        <a class="btn btn-primary" href="{{ route('events.edit',$event->id) }}">Edit</a>--}}

{{--                        @csrf--}}
{{--                        @method('DELETE')--}}

{{--                        <button type="submit" class="btn btn-danger">Delete</button>--}}
{{--                    </form>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--    </table>--}}

{{--    {!! $events->links() !!}--}}

{{--@endsection--}}
