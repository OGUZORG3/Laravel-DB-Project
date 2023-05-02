<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;
use mysql_xdevapi\TableInsert;

class CourseController extends Controller
{
    public function index ()
    {
        $course=DB::table('course')->get()->where('course_must','>',2)->sortByDesc('course_must');
        return view('course')->with('course',$course);


    }
    public function courseınsert ()
    {
        return view('courseınsert');
    }
    public function courseInsert(Request $request)
    {
        $request->validate([
            'course_title'=>'required',
            'course_content'=>'required',
            'course_must'=>'required'
        ]);
      $course= DB::table('course')->insert([
           'course_title'=>$request->course_title,
           'course_content'=>$request->course_content,
           'course_must'=>$request->course_must,
       ]);

       return back()->with('status','Kayıt Başarılı');

    }
    public function courseUpdate($id)
    {
       $course = DB::table('course')->where('id',$id)->first();
        return view('courseUpdate',compact('course'));
    }
    public function courseUpdatePost(Request $request,$id)
    {
        $request->validate([
            'course_title'=>'required',
            'course_content'=>'required',
            'course_must'=>'required'
        ]);

        $course= DB::table('course')->where('id',$id)->update([
            'course_title'=>$request->course_title,
            'course_content'=>$request->course_content,
            'course_must'=>$request->course_must,
        ]);



    }
    public function courseDelete($id)
    {
        $course = DB::table('course')->where('id',$id)->delete();
        if ($course) {
            return back()->with('status', 'güncelleme Başarılı');
            echo "<script>alert('kayıt silindi');</script>";
        } else {
            echo "<script>alert('kayıt yok');</script>";

        }

    }
}

