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
            <h1 class="details__title">John Wick 3</h1>
         </div>
         <!-- end title -->
         <!-- content -->
         <div class="col-12 col-xl-6">
            <div class="card card--details">
               <div class="row">
                  <!-- card cover -->
                  <div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-5">
                     <div class="card__cover">
                        <img src="uploads/movie/johnwick36286.jpeg">
                     </div>
                  </div>
                  <!-- end card cover -->
                  <!-- card content -->
                  <div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-7">
                     <div class="card__content">
                        <div class="card__wrap">
                           <ul class="card__list">
                              <li>HD</li>
                              <li>18+</li>
                           </ul>
                        </div>
                        <ul class="card__meta">
                           <li><span>Thể loại:</span> <a href="#">Hành động</a>
                           </li>
                        </ul>
                        <div class="card__description card__description--details">
                           Sát thủ John Wick: Phần 3 – Chuẩn bị chiến tranh là một bộ phim hành động tội phạm Mỹ năm 2019, với sự tham gia diễn xuất của Keanu Reeves trong vai nhân vật chính trong phần ba của loạt phim Sát thủ John Wick, sau Sát thủ John Wick và Sát thủ John Wick: Phần 2.
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