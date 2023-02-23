@extends('layouts.app')

@section('content')

<div class="container">
 <div class="row">
<div class="col-3 p-5">
<img src="{{ $user->profile->profileImage() }}" style="min-width: 20px; min-height:30%; max-width: 100%;
height: auto;" alt="gorra">

    </div>
    <div class="col-9 pt-5" style="padding-left: 5%;">
    <div class="d-flex justify-content-between align-items-baseline">
        <div class="d-flex align-items-center pb-3">
            <div class="h3" style="white-space: nowrap;
            ">
                {{ $user->username }}
            </div>
         
              <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
              @can ('update',$user->profile)
              <a href="/profile/{{ $user->id }}/edit"><img src="/storage/profile/ujR1cUzojqxsHpRvRvR5GB2HHvfEJZhYJ1DcNNtC.png" style="height: 10%; width:7%; margin-left:5%;color:white;"></a>
           @endcan
          </div>
     
        @can ('update',$user->profile)
    <a href="/p/create">Add New Post </a>
    @endcan
    
    </div>
  

    <div class="d-flex">
    <div style="padding-right: 5%;"><strong>{{  $postCount }}</strong> post</div>
    <div style="padding-right: 5%;"><strong>{{ $followersCount }}</strong> followers</div>
    <div style="padding-right: 5%;"><strong>{{ $followingCount }}</strong> following</div>
</div>  
<div class="pt-4 font-weight-bold"> {{ $user->profile->title }}</div>
   <div> {{ $user->profile->description }}  </div>
   <div><a style="font:bold;" href="#">{{ $user->profile->url ?? 'N/A' }}</a></div>
</div>
 </div>
<div class="row" style="margin-top: 10%;">
    @foreach($user->posts as $post)
    <div class="col-4 pb-4">
        <a href="/p/{{ $post->id }}">  <img src="/storage/{{ $post->image }}" alt="ale1" class="w-100"> </a>
        
       
    
    </div>



    @endforeach
</div>







</div>
@endsection
 