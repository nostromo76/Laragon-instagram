@extends('layouts.app')

@section('content')
<div class="container">
    <div cass="row">

        <div class="col-lg-6 p-5">
            <img src="https://instagram.fbeg2-1.fna.fbcdn.net/vp/4940775617f2fe7eed8b1067d3ca99cd/5D8CE438/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.fbeg2-1.fna.fbcdn.net" class="rounded-circle">

        </div>

                <div class="col-lg-6">
                    <div class="d-flex">

                        <h1>{{$user->username}}</h1>
                        <a href="#">Add New Post</a>
                    
                    </div>

                    <div class="d-flex">
                            <div class="pr-5"><strong>23k </strong>Followers</div>
                            <div class="pr-5"><strong>212 </strong>Following</div>
                             <div class="pr-5"><strong>153k </strong>Posts</div>
                    
                    </div>
                    <div cass="pt-4"><p>{{$user->profile->title}}</p></div>
                    <div><p> {{$user->profile->description}} </p></div>
                    <div><a href="#">{{$user->profile->url}}</a></div>    
                </div>
</div> 

  </div>
        <div cass="row pl-30">
                <div class="col-sm-4">
                    <img src="http://s2.linkimage.com/images/060/60357/normal_71585.jpg" class="w-100">
                </div>
                <div class="col-sm-4">
                    <img src="https://images.freeimages.com/images/large-previews/bf1/cables-1638147.jpg" class="w-100">
                </div>
                <div class="col-sm-4">
                    <img src="https://images.freeimages.com/images/premium/thumbs/1358/13581208-phone-and-keyboard.jpg" cass="w-100">
                </div>
       </div>
</div>
@endsection
