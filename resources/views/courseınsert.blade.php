@extends('layouth.app')
@section('title','Course Page Form')
@section('content')
    <div class="container mt-4">
        <h1>Course Page</h1>
        <hr>
        @if(session()->has('status'))
        <div style="background-color: #2d3748;box-shadow: #1a202c;color: white; width: fit-content ;padding: 10px;border-radius: 10px" class="" >
            {{session('status')}}</div>
            <h2>Kurs Ekle </h2>@endif
                        @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
            {{--            <p>{{$errors->first()}}</p>--}}
            {{--            <p>{{$errors->first('course_content')}}</p>--}}
{{--            <p>--}}
{{--                @if($errors->has('course_title'))--}}
{{--                    <b>Title Boş ...: </b> {{$errors->first('course_title')}}--}}
{{--                @endif--}}
{{--            </p>--}}
        <button class="btn btn-info"><a style="text-decoration: none;color: white" href="{{route('course')}} ">Geri</a></button>
            <form action="{{route('courseInsert')}}" method="POST" enctype="multipart/form-data">
                @CSRF
                <div class="form-group my-3">
                    <input class="form-control" type="text" name="course_must">
                </div>

                <div class="form-group my-3">
                    <input class="form-control" value="{{old('course_title')}}" type="text" name="course_title"
                           placeholder="Title">
                </div>

                <div class="form-group my-3">
                    <input class="form-control" value="{{old('course_content')}}" type="text" name="course_content"
                           placeholder="Title">
                </div>
                <div>
                <input class="form-control" type="submit" value="Kurs Ekle">

                </div>
            </form>
        </div>
    </div>
@endsection


