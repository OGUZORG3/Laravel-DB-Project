@extends('layouth.app')
@section('title','Course Page Form')
@section('content')
    <div class="container mt-4">
        <h1>Course Page</h1>
        <hr>
        @if(session()->has('status'))
        <div   class="badge bg-secondary">
            {{session('status')}}</div>@endif
            <h2>Kurs Düzenle </h2>
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
            <form action="{{route('courseUpdatePost',['id'=>$course->id])}}" method="POST" enctype="multipart/form-data">
                @CSRF
                <div class="form-group my-3">
                    <input class="form-control" type="text" value="{{$course->course_must}}" name="course_must">
                </div>

                <div class="form-group my-3">
                    <input class="form-control" value="{{$course->course_title}}" type="text" name="course_title"
                           placeholder="Title">
                </div>

                <div class="form-group my-3">
                    <input class="form-control" value="{{$course->course_content}}" type="text" name="course_content"
                           placeholder="Title">
                </div>
                <div>
                <input class="form-control" type="submit" value="Kurs Düzenle">

                </div>
            </form>
        </div>
    </div>
@endsection


