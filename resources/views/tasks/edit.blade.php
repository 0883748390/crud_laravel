@extends('layout.mainlayout')

@section('content')
    <div class="container">
        <div class="starter-template">
            <h1 class="mt-5 pt-5">แก้ไขข้อมูล</h1>
            <hr>
            <form action="{{ url('/tasks/update',[$task->id]) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="username">ชื่อผู้ใช้งาน</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{$task->username}}">
                </div>
                <div class="form-group">
                    <label for="password">รหัสผ่าน</label>
                    <input type="text" class="form-control" id="password" name="password" value="{{$task->password}}" >
                </div>
                <div class="form-group">
                    <label for="name">ชื่อนามสกุล</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$task->name}}">
                </div>
                <div class="form-group">
                    <label for="email">อีเมล</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{$task->email}}">
                </div>
                <div class="form-group">
                    <label for="birth_date">วันเกิด</label>
                    <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{$task->birth_date}}">
                </div>
                <div class="form-group">
                    <label for="age">อายุ</label>
                    <input type="text" class="form-control" id="age" name="age" value="{{$task->age}}">
                </div>
                <div class="form-group">
                    <label for="picture">รูป</label>
                    <input type="file" class="form-control" id="picture" name="picture" value="{{$task->picture}}">
                </div>
                {{-- <div class="form-group">
                    <label for="created_by">รหัสผู้บันทึก</label>
                    <input type="text" class="form-control" id="created_by" name="created_by">
                    <label for="created_at">วันที่สร้างรายการ</label>
                    <input type="text" class="form-control" id="created_at" name="created_at">
                    <label for="updated_by">รหัสผู้ปรับปรุงรายการ</label>
                    <input type="text" class="form-control" id="updated_by" name="updated_by">
                    <label for="updated_at">วันที่ปรับปรุงรายการ</label>
                    <input type="text" class="form-control" id="updated_at" name="updated_at">
                    <label for="deleted_at">วันที่ยกเลิกรายการ</label>
                    <input type="text" class="form-control" id="deleted_at" name="deleted_at">
                </div> --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <br>
                <button type="submit" class="btn btn-primary">บันทึก</button>
            </form>
        </div>
    </div>
@endsection
