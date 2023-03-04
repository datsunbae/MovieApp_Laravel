@extends('layout')
<div class="sign section--bg" data-bg="img/section/section.jpg">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="sign__content">
               <!-- authorization form -->
               <form action="#" class="sign__form">
                  <a href="index.html" class="sign__logo">
                  <img src="img/logo.svg" alt="">
                  </a>
                  <div class="sign__group">
                     <input type="text" class="sign__input" placeholder="Email">
                  </div>
                  <div class="sign__group">
                     <input type="password" class="sign__input" placeholder="Mật khẩu">
                  </div>
                  <div class="sign__group sign__group--checkbox">
                     <input id="remember" name="remember" type="checkbox" checked="checked">
                     <label for="remember">Nhớ tài khoản</label>
                  </div>
                  <button class="sign__btn" type="button">Đăng nhập</button>
                  <span class="sign__text">Bạn chưa có tài khoản? <a href="{{route('signup')}}">Đăng ký ngay!</a></span>
                  <span class="sign__text"><a href="{{route('forgotpassword')}}">Quên mật khẩu?</a></span>
               </form>
               <!-- end authorization form -->
            </div>
         </div>
      </div>
   </div>
</div>