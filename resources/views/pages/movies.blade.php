@extends('layout')
@section('content')
<!-- details -->
<section class="section details">
   <!-- details background -->
   <div class="details__bg" data-bg="img/home/home__bg.jpg"></div>
   <!-- end details background -->
   <!-- details content -->
   <div class="container">
      <div class="row">
         <!-- title -->
         <div class="col-12">
            <h1 class="details__title">{{$movie->title}}</h1>
         </div>
         <!-- end title -->
         <!-- content -->
         <div class="col-12 col-xl-6">
            <div class="card card--details">
               <div class="row">
                  <!-- card cover -->
                  <div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-5">
                     <div class="card__cover">
                        <img src="{{asset('uploads/movie/' .$movie->image)}}">
                     </div>
                  </div>
                  <!-- end card cover -->
                  <!-- card content -->
                  <div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-7">
                     <div class="card__content">
                        <div class="card__wrap">
                           <ul class="card__meta">
                              <li><span>Danh mục:</span> <a href="#">{{$movie->category->title}}</a></li>
                              <li><span>Quốc gia:</span> <a href="#">{{$movie->country->title}}</a></li>
                              <li><span>Thể loại:</span> <a href="#">{{$movie->genre->title}}</a></li>
                           </ul>
                        </div>
                        <div class="card__description card__description--details">
                           {{$movie->description}}
                        </div>
                     </div>
                  </div>
                  <!-- end card content -->
               </div>
            </div>
         </div>
         <!-- end content -->
         <!-- player -->
         <div class="col-12 col-xl-6">
            <video controls crossorigin playsinline poster="../../../cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="player">
               <!-- Video files -->
               <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" size="576">
               <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720">
               <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080">
               <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1440p.mp4" type="video/mp4" size="1440">
               <!-- Caption files -->
               <track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt"
                  default>
               <track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">
               <!-- Fallback for browsers that don't support the <video> element -->
               <a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" download>Download</a>
            </video>
         </div>
         <!-- end player -->
      </div>
   </div>
   <!-- end details content -->
</section>
<!-- end details -->
@endsection