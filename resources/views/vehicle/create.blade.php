@extends('layouts.layout')
@section('title', 'Add New Vehicle')
@section('page-header', 'Vehicle / New')

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
    <form id="form" method="POST" action="{{route('vehicle.store')}}" class="form-horizontal">
        @csrf
        <section class="card">
            <header class="card-header">
                <h2 class="card-title">Add new Vehicle</h2>
            </header>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-lg-4 col-md-3 control-label text-md-right pt-2">Title: <span class="required">*</span></label>
                    <div class="col-lg-4 col-md-7 col-sm-12">
                        <input id="title" type="text" name="title" class="form-control" placeholder="" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-md-3 control-label text-md-right pt-2">Vehicle No: <span class="required">*</span></label>
                    <div class="col-lg-4 col-md-7 col-sm-12">
                        <input id="car_no" type="text" name="car_no" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-md-3 control-label text-md-right pt-2">Vehicle type: <span class="required">*</span></label>
                    <div class="col-lg-4 col-md-7 col-sm-12">
                        <input id="vehicle_type" type="text" name="vehicle_type" class="form-control" placeholder="" required/>
                    </div>
                </div>
            </div>

            <footer class="card-footer">
                <div class="row justify-content-end">
                    <div class="mr-2">
                        <button id="submit_form" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </div>
                </div>
            </footer>
        </section>
    </form>

@endsection
