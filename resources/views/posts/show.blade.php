@extends('layouts.app')

@section('content')
<div class="container" style="padding-top:3%;">
    <div class="row">
<div class="col">


    <img src="/storage/{{ $post->image }}" class="w-100"  style="max-width:800px;" alt="">

</div>
<div class="col">

    <div>
        <div class="d-flex align-items-center">
            <div>
                <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle  w-100" style="max-width:60px;" alt="">
            </div>
            <div><a href="/profile/{{ $post->user->id }}" style="text-decoration: none; margin-left:20px;"> <span  style="font-weight: bold;">{{ $post->user->username }}</span></a> <a href="#"  style="text-color:ligthblue;  margin-left:5px;font-weight:bold; text-decoration:none;">Follow</a></div>
        </div>

    </div>
    <hr>
    <p><a href="/profile/{{ $post->user->id }}" style="text-decoration: none;"><span  style="font-weight: bold; text-decoration: none;">{{ $post->user->username }}    </span></a>{{ $post->caption }}</p> 
      
    </div>
    
</div>
</div>


  


 






@endsection
 