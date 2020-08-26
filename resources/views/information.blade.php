@extends('main')
@section('sidebar')
<div style="position: relative">
     <div class="container" style="margin-top: 150px">

         <div class="row">
             <div class="col-lg-7 col-sm-7" >
                 <img id="banner" class="mySlides"  src="https://i.doanhnhansaigon.vn/2016/12/26/boxshop-doanhnhansaigon-1508449374_750x0.jpg">
                 <img id="banner"class="mySlides" src="https://9mobi.vn/cf/images/2015/03/nkk/hinh-dep-1.jpg">
                 <img id="banner"class="mySlides" src="https://sites.google.com/site/hinhanhdep24h/_/rsrc/1436687439788/home/hinh%20anh%20thien%20nhien%20dep%202015%20%281%29.jpeg">
                 <div class="borderBack" style="text-align: center" onclick="plusDivs(-1)"><a href="#" ><i class="fa fa-chevron-left" style="margin-top: 17px; color: white"></i></a></div>
                 <div  class="borderNext" style="text-align: center"  onclick="plusDivs(+1)"><a href="#"><i class="fa fa-chevron-right" style="margin-top: 17px; color: white"></i></a></div>
             </div>
             <div class="col-lg-5 col-sm-5">
                     <ul class="navbar-nav">
                         <li>
                             <div class="borderTop">
                                 <div class="border3">
                                     <span class="centerTitle2">Bài viết hữu ích</span>
                                 </div>
                                 <div class="border4" ></div>
                             </div>
                         </li>
                         <li class="line2">
                             <a href="#">
                                 <div class="top">
                                     <div class="row">
                                         <div class="col-3">
                                             <div class="imgleft">
                                                 <img  class="imgleft2" src="https://hinhanhdephd.com/wp-content/uploads/2015/12/hinh-anh-dep-girl-xinh-hinh-nen-dep-gai-xinh.jpg">
                                             </div>
                                         </div>

                                         <div class="col-9">
                                             <div class="text-left">
                                                 <div> <h5>Làm theo 4 điều này, bạn sẽ cai được thuốc lá ngay hôm nay</h5></div>
                                                 <div style="font-size:10px;">28/09/2018</div>
                                                 <div><h5>Tin tức</h5></div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </a>
                         </li>
                         <li class="line2">
                             <a href="#">
                                 <div class="top">
                                     <div class="row">
                                         <div class="col-3">
                                             <div class="imgleft">
                                                 <img  class="imgleft2" src="https://hinhanhdephd.com/wp-content/uploads/2015/12/hinh-anh-dep-girl-xinh-hinh-nen-dep-gai-xinh.jpg">
                                             </div>
                                         </div>

                                         <div class="col-9">
                                             <div class="text-left">
                                                 <div> <h5>Làm theo 4 điều này, bạn sẽ cai được thuốc lá ngay hôm nay</h5></div>
                                                 <div style="font-size:10px;">28/09/2018</div>
                                                 <div><h5>Tin tức</h5></div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </a>
                         </li>
                         <li class="line2">
                             <a href="#">
                                 <div class="top">
                                     <div class="row">
                                         <div class="col-3">
                                             <div class="imgleft">
                                                 <img  class="imgleft2" src="https://hinhanhdephd.com/wp-content/uploads/2015/12/hinh-anh-dep-girl-xinh-hinh-nen-dep-gai-xinh.jpg">
                                             </div>
                                         </div>

                                         <div class="col-9">
                                             <div class="text-left">
                                                 <div> <h5>Làm theo 4 điều này, bạn sẽ cai được thuốc lá ngay hôm nay</h5></div>
                                                 <div style="font-size:10px;">28/09/2018</div>
                                                 <div><h5>Tin tức</h5></div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </a>
                         </li>
                         <li class="line2">
                             <a href="#">
                                 <div class="top">
                                     <div class="row">
                                         <div class="col-3">
                                             <div class="imgleft">
                                                 <img  class="imgleft2" src="https://hinhanhdephd.com/wp-content/uploads/2015/12/hinh-anh-dep-girl-xinh-hinh-nen-dep-gai-xinh.jpg">
                                             </div>
                                         </div>

                                         <div class="col-9">
                                             <div class="text-left">
                                                 <div> <h5>Làm theo 4 điều này, bạn sẽ cai được thuốc lá ngay hôm nay</h5></div>
                                                 <div style="font-size:10px;">28/09/2018</div>
                                                 <div><h5>Tin tức</h5></div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </a>
                         </li>
                     </ul>
             </div>
         </div>
     </div>
     <div style="background-color: white; padding-top: 30px;">
         <div class="container" >
             <div class="row borderTop">
                 <div class="border3">
                     <span class="centerTitle2">MÁY LỌC VÀ TIỆT TRÙNG</span>
                 </div>
                 <div class="border4" ></div>
                 <a class="centerTitle" href="#">xem tất cả</a>
             </div>
                 @csrf
                 <div id ="table_data">
                        @include('listProduct')
                 </div>
         </div>
     </div>
     <div style="background-color: #dcdcdc; padding-top: 30px;">
         <div class="container" >
             <div class="row borderTop">
                 <div class="border3">
                     <span class="centerTitle2">MÁY LỌC VÀ TIỆT TRÙNG</span>
                 </div>
                 <div class="border4" ></div>
                 <a class="centerTitle" href="#">xem tất cả</a>
             </div>
             @csrf
             <div id ="table_data3">
                 @include('listproduct2')
             </div>

         </div>
     </div>
    <div class="center_menu">  @include('components\menu_fix')</div>

    <script>
        $(document).ready(function () {
            $(document).on('click','.page-link',function (event) {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetch_data(page);
            })
        });
        function fetch_data(page) {
            console.log(page);
            var _token = $("input[name=_token]").val();
            $.ajax({
                url:"{{route('pagination.fetch')}}",
                method:"POST",
                cache: false,
                 data:{_token:_token,page:page},
                success:function (data) {
                    $('#table_data').html(data)
                    $('#table_data2').html(data)
                },
               /* error: function() {
                    alert('fuck');
                },
                complete: thisComplete();*/
            });
        }
/*
        function thisComplete() {
            alert('fuck you');
        }*/
    </script>

    <script>
        let slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }
        function auto() {
            showDivs(slideIndex += +1);
        }

        function showDivs(n) {
            let i;
            let x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex-1].style.display = "block";
            setTimeout(auto,5000)
        }
    </script>
 </div>
@endsection

