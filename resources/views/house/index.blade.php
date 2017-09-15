@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Sweet Homes
                        <a class="btn btn-primary btn-xs pull-right" href="{{ route('house.create') }}"> Create House </a>
                    </div>

                    {{--<div class="panel-body">--}}
                    <ul class="list-group">
                        @foreach($houses as $house)
                            <li class="list-group-item">
                                {{ HTML::linkRoute('house.show', $house->title, $house->id, array('class' => '')) }}
                                <div class="btn-group btn-group-xs pull-right" role="group" aria-label="Extra-small button group">
                                    {{ HTML::linkRoute('house.show', 'Show', $house->id, array('class' => 'btn btn-default')) }}
                                    {{--<a class="btn btn-default">Edit</a>--}}
                                    {{ HTML::linkRoute('house.edit', 'Edit', $house->id, array('class' => 'btn btn-default')) }}
                                    {!! Form::open(['method' => 'DELETE','route' => ['house.destroy', $house->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-default btn-xs']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </li>
                        @endforeach
                    </ul>

                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
