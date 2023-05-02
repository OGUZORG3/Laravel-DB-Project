@extends('layouth.app')
@section('title','Course Page Form')
@section('content')

    <div class="container mt-4">
        <h1>Course Page</h1>
        <hr>


        <a href="{{route('courseınsert')}}"><button class="btn btn-dark " style="float: right">Yeni ekle </button></a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">kurs adı</th>
                <th scope="col">kurs iceriği</th>
                <th scope="col">kurs sıra</th>


            </tr>
            </thead>
            <tbody>

            @foreach ($course as $key)

                <tr>
                <th scope="row">1</th>
                <td>{{ $key->course_title }}</td>
                <td>{{ $key->course_content }}</td>
                <td>{{ $key->course_must }}</td>
                <td><a href="{{route('courseUpdate',['id'=>$key->id])}}"><button class="btn btn-primary">Düzenle</button></a></td>
                <td><button class="btn btn-danger"><a style="text-decoration: none;color: white" href="{{route('courseDelete',['id'=>$key->id])}}">Sil</a></button></td>
            </tr>
            @endforeach

            </tbody>
        </table>

            <h1>Welcome to my Laravel app!</h1>
            <button class="btn btn-primary">Click me!</button>
        </div>
@endsection


