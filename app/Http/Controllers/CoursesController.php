<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use Google\Cloud\Storage\StorageClient;
use Gloudemans\Shoppingcart\Facades\Cart;


class CoursesController extends Controller
{

    public $courses; 

    public function __construct(){
      $this->courses= new Courses();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetchCourses($id)
    {   
        $courses = $this->courses->getCategoryID($id);
        return $courses;
    }

    public function CoursesCategories($id){

        $cart = Cart::content();
        return view('pages.CourseCategories' , ['id'=>$id] , ['cart' => $cart] )->with(array('courses'=>$this->fetchCourses($id)));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showCourse($id)
    {
        $course = $this->courses->getCourse($id);
        return view('pages.courseDetails', ['course'=>$course]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editCourse($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCourse(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyCourse($id)
    {
        //
    }

    
}
