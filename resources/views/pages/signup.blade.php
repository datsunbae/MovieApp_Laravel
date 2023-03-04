@extends('layout')
<div class="sign section--bg" data-bg="img/section/section.jpg">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="sign__content">
               <!-- registration form -->
               <form action="#" class="sign__form">
                  <a href="index.html" class="sign__logo">
                  <img src="img/logo.svg" alt="">
                  </a>
                  <div class="sign__group">
                     <input type="text" class="sign__input" placeholder="Họ và tên">
                  </div>
                  <div class="sign__group">
                     <input type="text" class="sign__input" placeholder="Email">
                  </div>
                  <div class="sign__group">
                     <input type="password" class="sign__input" placeholder="Mật khẩu">
                  </div>
                  <button class="sign__btn" type="button">Đăng ký</button>
                  <span class="sign__text">Bạn đã có tài khoản? <a href="{{route('signin')}}">Đăng nhập!</a></span>
               </form>
               <!-- registration form -->
            </div>
         </div>
      </div>
   </div>
</div>