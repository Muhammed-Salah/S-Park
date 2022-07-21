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
            <table class="table table-bordered table-striped mb-0" id="datatable-default">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Place</th>
                    <th>Location</th>
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
{{--                        <td class="actions">--}}
{{--                            <a href="{{route('report.show',$data->id)}}"><i class="far fa-eye"></i></a>--}}
{{--                            @if(Auth::user()->privilege_id == 1 || Auth::user()->privilege_id == 2)--}}
{{--                                <a href="#modalForm-{{$data->id}}" class="modal-with-zoom-anim ws-normal"><i class="fas fa-user-plus"></i></a>--}}
{{--                                <a href="{{route('camp.edit',$data->id)}}"><i class="fas fa-pencil-alt"></i></a>--}}
{{--                            @endif--}}
{{--                            @if(Auth::user()->privilege_id == 1)--}}
{{--                                <a href="#"--}}
{{--                                   onclick="if(confirm('Are you sure you want to delete this Camp?')){--}}
{{--                                            event.preventDefault(); document.getElementById('delete-form-{{$data->id}}').submit();}">--}}
{{--                                    <i class="far fa-trash-alt"></i>--}}
{{--                                </a>--}}
{{--                            @endif--}}

{{--                            <form method="POST" action="{{route('camp.destroy',$data->id)}}" id="delete-form-{{$data->id}}" style="display: none">--}}
{{--                                @csrf--}}
{{--                                @method('DELETE')--}}
{{--                            </form>--}}

{{--                            <div id="modalForm-{{$data->id}}" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">--}}
{{--                                <section class="card">--}}
{{--                                    <header class="card-header">--}}
{{--                                        <h2 class="card-title">Add Associate(s)</h2>--}}
{{--                                    </header>--}}
{{--                                    <form method="POST" action="{{route('CampsHasAssociates')}}" id="associate-of-{{$data->id}}">--}}
{{--                                        @csrf--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="form-group row">--}}
{{--                                                <label class="col-lg-4 control-label text-lg-right pt-2">Associates</label>--}}
{{--                                                <div class="col-lg-6">--}}
{{--                                                    <select name="associate_id[]" multiple data-plugin-selectTwo class="form-control populate">--}}
{{--                                                        @foreach($associate as $ass)--}}
{{--                                                            @foreach($data->associates as $cha)--}}
{{--                                                                <option value="{{$ass->id}}" @if($ass->name == $cha->name) selected @endif> {{$ass->name}} </option>--}}
{{--                                                            @endforeach--}}
{{--                                                        @endforeach--}}
{{--                                                    </select>--}}
{{--                                                    <input type="hidden" value="{{$data->id}}" name="camp_id"/>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                    <footer class="card-footer">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-12 text-right">--}}
{{--                                                <a href="{{route('associate.create')}}" class="btn btn-success pl-3 pr-3">New</a>--}}
{{--                                                <button onclick="event.preventDefault(); document.getElementById('associate-of-{{$data->id}}').submit();" class="btn btn-primary">Submit</button>--}}
{{--                                                <button class="btn btn-default modal-dismiss">Cancel</button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </footer>--}}
{{--                                </section>--}}
{{--                            </div>--}}
{{--                        </td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection
