@extends('layout')
@section('content')
<!-- page title -->
<section class="section section--first section--bg" data-bg="img/section/section.jpg">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="section__wrap">
               <!-- section title -->
               <h2 class="section__title">Danh mục</h2>
               <!-- end section title -->
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end page title -->
<!-- filter -->
<div class="filter">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="filter__content">
               <div class="filter__items">
                  <!-- filter item -->
                  <div class="filter__item" id="filter__country">
                     <span class="filter__item-label">LOẠI:</span>
                     <div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-genre" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <input type="button" value="Phim Lẻ">
                        <span></span>
                     </div>
                     <ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-genre">
                        <li>Phim LẺ</li>
                        <li>Phim Bộ</li>
                        <li>Phim Chiếu Rạp</li>
                     </ul>
                  </div>
                  <!-- end filter item -->
                  <!-- filter item -->
                  <div class="filter__item" id="filter__genre">
                     <span class="filter__item-label">THỂ LOẠI:</span>
                     <div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-genre" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <input type="button" value="Action/Adventure">
                        <span></span>
                     </div>
                     <ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-genre">
                        <li>Action/Adventure</li>
                        <li>Animals</li>
                        <li>Animation</li>
                     </ul>
                  </div>
                  <!-- end filter item -->
                  <!-- filter item -->
                  <div class="filter__item" id="filter__country">
                     <span class="filter__item-label">QUÔC GIA:</span>
                     <div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-genre" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <input type="button" value="Mỹ">
                        <span></span>
                     </div>
                     <ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-genre">
                        <li>Mỹ</li>
                        <li>Hàn</li>
                        <li>Việt Nam</li>
                     </ul>
                  </div>
                  <!-- end filter item -->
                  <!-- filter item -->
                  <div class="filter__item" id="filter__quality">
                     <span class="filter__item-label">CHẤT LƯỢNG:</span>
                     <div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-quality" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <input type="button" value="HD 1080">
                        <span></span>
                     </div>
                     <ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-quality">
                        <li>HD 1080</li>
                        <li>4K</li>
                     </ul>
                  </div>
                  <!-- end filter item -->
                  <!-- filter item -->
                  <div class="filter__item" id="filter__year">
                     <span class="filter__item-label">NĂM XUẤT BẢN:</span>
                     <div class="filter__item-btn dropdown-toggle" role="button" id="filter-year" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="filter__range">
                           <div id="filter__years-start"></div>
                           <div id="filter__years-end"></div>
                        </div>
                        <span></span>
                     </div>
                     <div class="filter__item-menu filter__item-menu--range dropdown-menu" aria-labelledby="filter-year">
                        <div id="filter__years"></div>
                     </div>
                  </div>
                  <!-- end filter item -->
               </div>
               <!-- filter btn -->
               <button class="filter__btn" type="button">ÁP DỤNG</button>
               <!-- end filter btn -->
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end filter -->
<!-- catalog -->
<div class="catalog">
   <div class="container">
      <div class="row">
         <!-- card -->
         <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
            <div class="card">
               <div class="card__cover">
                  <img src="img/covers/cover.jpg" alt="">
                  <a href="#" class="card__play">
                  <i class="icon ion-ios-play"></i>
                  </a>
               </div>
               <div class="card__content">
                  <h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
                  <span class="card__category">
                  <a href="#">Action</a>
                  <a href="#">Triler</a>
                  </span>
                  <span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
               </div>
            </div>
         </div>
         <!-- end card -->
         <!-- paginator -->
         <div class="col-12">
            <ul class="paginator">
               <li class="paginator__item paginator__item--prev">
                  <a href="#"><i class="icon ion-ios-arrow-back"></i></a>
               </li>
               <li class="paginator__item"><a href="#">1</a></li>
               <li class="paginator__item paginator__item--active"><a href="#">2</a></li>
               <li class="paginator__item"><a href="#">3</a></li>
               <li class="paginator__item"><a href="#">4</a></li>
               <li class="paginator__item paginator__item--next">
                  <a href="#"><i class="icon ion-ios-arrow-forward"></i></a>
               </li>
            </ul>
         </div>
         <!-- end paginator -->
      </div>
   </div>
</div>
<!-- end catalog -->
@endsection