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
                            <form action="{{route('create')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3" >NAME:</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3" >Email:</label>
                                    <div class="col-md-9">
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3" >Photo:</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3" ></label>
                                    <div class="col-md-9">
                                        <input type="submit"  name="btn" value="submit" class="btn btn-success">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3" ></label>
                                    <div class="col-md-9">
                                        <a href="" class="btn btn-primary">
                                            <i class="fab fa-facebook-f fa-fw">Login With Facebook </i>
                                        </a>
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
