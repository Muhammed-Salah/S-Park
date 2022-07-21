@extends('layouts.layout')
@section('title', 'Booking slot')
@section('page-header', 'Booking / New')

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
    <form id="form" method="POST" action="{{route('park.store')}}" class="form-horizontal">
        @csrf
        <section class="card">
            <header class="card-header">
                <h2 class="card-title">Booking</h2>
            </header>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-lg-4 col-md-3 control-label text-lg-right pt-2">Vehicle: <span class="required">*</span></label>
                    <div class="col-lg-4 col-md-7 col-sm-12">
                        <select name="vehicle_id" id="vehicle_id" data-plugin-selectTwo class="form-control populate" required>
                            @foreach($vehicle as $data)
                                <option value="{{$data->id}}">{{$data->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-md-3 control-label text-lg-right pt-2">Place: <span class="required">*</span></label>
                    <div class="col-lg-4 col-md-7 col-sm-12">
                        <select name="place_id" id="place_id" data-plugin-selectTwo class="form-control populate" required>
                            @foreach($place as $data)
                                <option value="{{$data->id}}">{{$data->Place_name}}</option>
                            @endforeach
                        </select>
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
