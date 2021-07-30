@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-3 p-5">
           <img src="/svm/freecode.jpg" style="max-width: 100%; height: auto;" alt="image" class="rounded-circle">

      </div>
       <div class="col-9 pt-5">
          <div><h1>{{ $user->username }}</h1></div>
          <div class="d-flex">
             <div class="pr-5"><strong>153</strong>Posts</div>
            <div class="pr-5"><strong>23k</strong>Followers</div>
            <div class="pr-5"><strong>212</strong>Following</div>
          </div>
          <div class="pt-4 font-weight-bold">freecodecamp.org</div>
          <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
          <div><a href="#">www.freecodecamp.org</a></div>
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
