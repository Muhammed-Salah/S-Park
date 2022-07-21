@extends('layouts.layout')
@section('title', 'Booking details')
@section('page-header', 'Bookings')

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
            <h2 class="card-title">Booking details</h2>
        </header>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <a href="{{route('park.create')}}" class="btn btn-primary">
                            Add
                            <i class="fas fa-plus"></i>
                        </a>

                    </div>
                </div>
            </div>
            <table class="table table-bordered table-striped mb-0" id="datatable-default">
                <thead>
                <tr>
                    <th>#</th>
                    @if(Auth::user()->id == 1)<th>User</th>@endif
                    <th>Place</th>
                    <th>Location</th>
                    <th>slot</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($slots as $data)
                    <tr data-item-id="{{$data->id}}">
                        <td> {{$i++}} </td>
                        @if(Auth::user()->id == 1)<td> {{$data->user_id->name}} </td>@endif
                        <td> {{$data->place_id->Place_name}} </td>
                        <td> {{$data->place_id->location}} </td>
                        <td> {{$data->slot_name}} </td>
                        <td class="actions">
                            <a href="#"
                               onclick="if(confirm('Are you sure you have returned?')){
                                                                event.preventDefault(); document.getElementById('delete-form-{{$data->id}}').submit();}">
                                <i class="far fa-trash-alt"></i>
                            </a>

                            <form method="POST" action="{{route('park.destroy',$data->id)}}" id="delete-form-{{$data->id}}" style="display: none">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection
