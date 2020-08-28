@extends('moevents.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>MemoriesOf</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('moevents.create') }}"> Create New moevent</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>moevent</th>
            <th>Details</th>
        </tr>
        @foreach ($moevents as $moevent)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $moevent->name }}</td>
                <td>{{ $moevent->detail }}</td>
                <td>
                    <form action="{{ route('moevents.destroy',$moevent->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('moevents.show',$moevent->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('moevents.edit',$moevent->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $moevents->links() !!}

@endsection
