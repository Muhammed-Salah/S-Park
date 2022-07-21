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
                        <a href="{{route('vehicle.create')}}" class="btn btn-primary">
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
                    <th>Vehicle Name</th>
                    <th>Vehicle No</th>
                    <th>Vehicle type</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($vehicle as $data)
                    <tr data-item-id="{{$data->id}}">
                        <td> {{$i++}} </td>
                        <td> {{$data->title}} </td>
                        <td> {{$data->car_no}} </td>
                        <td> {{$data->vehicle_type}} </td>
                        <td class="actions">
                            <a href="#"
                               onclick="if(confirm('Are you sure you have returned?')){
                                        event.preventDefault(); document.getElementById('delete-form-{{$data->id}}').submit();}">
                                <i class="far fa-trash-alt"></i>
                            </a>

                            <form method="POST" action="{{route('vehicle.destroy',$data->id)}}" id="delete-form-{{$data->id}}" style="display: none">
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
