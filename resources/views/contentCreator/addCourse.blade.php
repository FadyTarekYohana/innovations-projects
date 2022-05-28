@extends('layouts.app')


@section('content')
<?php use App\Http\Controllers\FirestorageController;?>
<style>
    body {
     overflow-x: hidden;
    }
</style>
<div class="row g-4 justify-content-center">
    <a href="/contentCreator/courseBuilder" class="btn btn-info btn-lg" style="color: white;"><i class="fa fa-plus"></i> Request To Add A Course</a>


 
    @foreach($courses as $data)
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
                <img class="img-fluid" src="<?php echo FirestorageController::fetch('Courses/Picture/',$data->CoursePicture)?>" alt="{{$data->CourseName}} picture">
                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                </div>
            </div>
            <div class="text-center p-4 pb-0">
                <h3 class="mb-0">EGP {{$data->CoursePrice}}</h3>
                <div class="mb-3">
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small>(123)</small>
                </div>
                <a href="/course/{{$data->id}}"><h5 class="mb-4">{{$data->CourseName}}</h5></a>
            </div>
            <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>{{Auth::guard('contentCreator')->user()->name}}</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>{{$data->duration}}</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
            </div>
            @if($data->approved == 0)
            <div class="text-center p-1" style="font-weight: bold; color: red;">Pending Approval</div>
            @endif
        </div>
    </div>
    @endforeach
</div>
@endsection
