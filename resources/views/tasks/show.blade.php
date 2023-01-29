@extends('layout.mainlayout')

@section('content')
    <main role="main" class="container">
        <div class="starter-template">
            <h1>ยินดีต้อนรับ [ {{ $task->name }} ]</h1>

            <div class="jumbotron text-center">
                <p>
                    <strong>ชื่อนามสกุล :</strong> {{ $task->name }} <br>
                    <strong>อีเมล :</strong> {{ $task->email }} <br>
                    <strong>อายุ :</strong> {{ $task->age }} 
                </p>
            </div>

        </div>
    </main>
@endsection
