@extends('layouts.app')

@section('content')
<div class="container" style="padding-top:3%; text-align:center;">
    

@foreach($posts as $post)

<div class="row" style="color:white;">
    <div class="col-6 offset-3" style="margin-left:25%;">
        <div class="d-flex" style="margin-bottom: 2%">
            <div>
                <a href="/profile/{{ $post->user->id }}"> <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle  w-100" style="max-width:60px;" alt=""></a>
               
            </div>
            <div style="padding-top:1%;"><a href="/profile/{{ $post->user->id }}" style="text-decoration: none; margin-left:20px;"> <span  style=" color :white; font-weight: bold;">{{ $post->user->username }}</span></a></div>
        </div>
    
       
    
    </div>
</div>
<div class="row">
    <div class="col-6 offset-3">
    
    
  <a href="/p/{{ $post->id }}">      <img src="/storage/{{ $post->image }}" class="w-100"  style="max-width:600px;" alt=""></a>
    
    </div>
</div>
<div class="row">


    <div class="col-6 offset-3" style=" margin-left: 8%;">
    
        <p style="margin-bottom: 5%; margin-top:2%;"><a href="/profile/{{ $post->user->id }}" style="text-decoration: none;"><span style=" color:white; font-weight: bold; text-decoration: none;">{{ $post->user->username }}     </span></a>{{ $post->caption }}</p> 
          
        </div>
        
    </div>
    @endforeach

<div class="row">
    <div class="col-12 d-flex justify-content-center">


        {{ $posts->links('pagination::bootstrap-4') }}
    </div>
</div>


</div>


  


 






@endsection
 