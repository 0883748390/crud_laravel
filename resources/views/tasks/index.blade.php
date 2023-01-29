@extends('layout.mainlayout')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="starter-template">
            <h1>ยินดีต้อนรับ CA</h1>

            @if(Session::has('massage'))
                <div class="alert alert-info">{{Session::get('massage')}}</div>
            @endif

         
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ลำดับ</th>
                        <th scope="col">ชื่อนามสกุล</th>
                        <th scope="col">อีเมล</th>
                        <th scope="col">อายุ</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td scope="row">{{$task->id}}</td>
                            <td scope="row">{{$task->name}}</td>
                            <td scope="row">{{$task->email}}</td>
                            <td scope="row">{{$task->age}}</td>
                            <td scope="row">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{URL::to('index/edit/'.$task->id)}}">
                                        <button type="button" class="btn btn-warning">Edit</button>
                                    </a>
                                    <form action="{{url('tasks/destroy', [$task->id])}}" method="POST">
                                        <input type="hidden" name="_method" value="delete">
                                        <input type="hidden" name="_token" id="" value="{{ csrf_token()}}">
                                        <input type="submit" class="btn btn-danger" value="delete" name=""
                                            id="">
                                    </form>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
