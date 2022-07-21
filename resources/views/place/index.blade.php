@extends('layouts.layout')
@section('title', 'Place details')
@section('page-header', 'Places')

@section('content')

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
    <section class="card">
        <header class="card-header">
            <h2 class="card-title">Place details</h2>
        </header>
        <div class="card-body">
            @if(Auth::user()->id == 1)
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <a href="{{route('place.create')}}" class="btn btn-primary">
                            Add
                            <i class="fas fa-plus"></i>
                        </a>

                    </div>
                </div>
            </div>
            @endif
            <table class="table table-bordered table-striped mb-0" id="datatable-default">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Place</th>
                    <th>Location</th>
                    <th>Available slot</th>
{{--                    <th>Action</th>--}}
                </tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($places as $data)
                    <tr data-item-id="{{$data->id}}">
                        <td> {{$i++}} </td>
                        <td> {{$data->Place_name}} </td>
                        <td> {{$data->location}} </td>
                        <td> {{$data->avai_slot}} </td>
{{--                        <td class="actions">--}}
{{--                            <a href="{{route('park.create')}}"><i class="far fa-eye"></i></a>--}}
{{--                        </td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection
