@extends('master')
@section('title')
    add
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Home page</div>
                        <h1 class="text-success text-center">{{Session::get('message')}}</h1>
                        <div class=" card-body">
                            <form action="{{route('update',['id'=>$crud->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3" >NAME:</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" value="{{$crud->name}}" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3" >Email:</label>
                                    <div class="col-md-9">
                                        <input type="text" name="email" value="{{$crud->email}}" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3" >Photo:</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control">
                                        <img src="{{asset($crud->image)}}" alt="" style="height: 100px; width: 120px;">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3" ></label>
                                    <div class="col-md-9">
                                        <div class="d-flex">
                                             <input type="submit"  value="update" class="btn btn-warning">
{{--                                            <form action="{{route('delete',['id'=>$crud->id])}}" class="d-flex">--}}
{{--                                                    @csrf--}}
{{--                                                    <input type="hidden" name="data_id" value="{{$crud->id}}">--}}
{{--                                                    <input type="submit" value="delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete this.')">--}}
{{--                                                </form>--}}
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

