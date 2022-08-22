<!DOCTYPE html>
<html lang="en">

@include('frontend.partials.head')

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"><div class="icon"></div></div>

   @include('frontend.partials.header')

   @include('frontend.partials.search-pop')


   @yield('content')

  @include('frontend.partials.footer')

</div>
<!--End pagewrapper-->

@include('frontend.partials.footer-script')

</body>

<!-- Mirrored from t.commonsupport.xyz/zentec/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Sep 2020 10:33:50 GMT -->
</html>