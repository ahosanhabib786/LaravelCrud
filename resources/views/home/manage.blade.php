@extends('master')
@section('title')
    manage
@endsection
@section('body')
    <section class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">manage</div>
                    <div class=" card-body">
                        <table class="table-hover table table-bordered">
                            <thead>

                            <tr>
                                <th>SL No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datas as $data)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>
                                    <img src="{{asset($data->image)}}" alt="" style="height: 50px; width: 50px;">
                                </td>
                                <td>
                                   <div class="d-flex">
                                       <a href="{{route('edit',['id'=>$data->id])}}" class="btn btn-primary me-2">Edit</a>
                                       <form action="{{route('delete',['id'=>$data->id])}}" class="d-flex">
                                           @csrf
                                           <input type="hidden" name="data_id" value="{{$data->id}}">
                                           <input type="submit" value="delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete this.')">
                                       </form>
                                   </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
