@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-3 p-5">
           <img src="/svm/freecode.jpg" style="max-width: 100%; height: auto;" alt="image" class="rounded-circle">

      </div>
       <div class="col-9 pt-5">
          <div class="d-flex justify-content-between align-items-baseline">
          <h1>{{ $user->username }}</h1>
          <a href="#">Add new post</a>
        
        </div>
          
          <div class="d-flex">
             <div class="pr-5"><strong>153</strong>Posts</div>
            <div class="pr-5"><strong>23k</strong>Followers</div>
            <div class="pr-5"><strong>212</strong>Following</div>
          </div>
          <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
          <div>{{$user->profile->description}} </div>
          <div><a href="#">{{$user->profile->url }}</a></div>
    </div>
    </div>
  <div class="row pt-4">
     <div class="col-4">
    <img src="/svm/image1.jpg" alt="" class="w-100">
    </div>
    <div class="col-4">
    <img src="/svm/image1.jpg" alt=""class="w-100">
    </div>
    <div class="col-4">
    <img src="/svm/image1.jpg" alt="" class="w-100">
    </div>
    
    </div>
</div>

@endsection
