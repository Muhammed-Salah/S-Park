@extends('layouts.layout')
@section('title', 'Add New Place')
@section('page-header', 'Place / New')

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
    <form id="form" method="POST" action="{{route('place.store')}}" class="form-horizontal">
        @csrf
        <section class="card">
            <header class="card-header">
                <h2 class="card-title">Add new Place</h2>
            </header>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-lg-4 col-md-3 control-label text-md-right pt-2">Place Name: <span class="required">*</span></label>
                    <div class="col-lg-4 col-md-7 col-sm-12">
                        <input id="Place_name" type="text" name="Place_name" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-md-3 control-label text-md-right pt-2">Location: <span class="required">*</span></label>
                    <div class="col-lg-4 col-md-7 col-sm-12">
                        <input id="location" type="text" name="location" class="form-control" placeholder="" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-md-3 control-label text-md-right pt-2">Total parking slot: <span class="required">*</span></label>
                    <div class="col-lg-4 col-md-7 col-sm-12">
                        <input id="total_slot" type=text" name="total_slot" class="form-control" required/>
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
