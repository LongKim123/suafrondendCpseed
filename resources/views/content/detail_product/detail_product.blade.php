@extends('mainlayout.category_layout.menu_layout')
@section('tittle')
<title>Detail_product</title>
@endsection
@section('css')
 <link
      rel="stylesheet"
      href="{{asset('swiper/thumbs-gallery/thumbs-gallery.css')}}"
    />
<link rel="stylesheet" href="{{asset('swiper/navigation-per-view.css')}}" />


@endsection
@section('page_con')
    <div
      class="container d-flex flex-row bd-highlight mb-3"
      style="margin-top: 100px"
    >
      <div class="p-2 bd-highlight" style="width: 50%; height: auto">
        <div class="container" style="height: 600px">
          <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
              @foreach($productImages as $image_item )
              <div class="swiper-slide">
                <img
                  src="http://localhost/CtyCPseed/{{$product->feature_image_path}}"
                  alt=""
                  srcset=""
                />
              </div>
              @endforeach
              @foreach($productImages as $image_item )
              <div class="swiper-slide">
                <img
                  src="http://localhost/CtyCPseed/{{$image_item->image_path}}"
                  alt=""
                  srcset=""
                />
              </div>
              @endforeach
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
          </div>






          <div class="swiper-container gallery-thumbs">
            <div class="swiper-wrapper">
               @foreach($productImages as $image_item )
              <div class="swiper-slide">
                <img
                  src="http://localhost/CtyCPseed/{{$product->feature_image_path}}"
                  alt=""
                  srcset=""
                />
              </div>
              @endforeach
               @foreach($productImages as $image_item )
              <div class="swiper-slide">
                <img
                  src="http://localhost/CtyCPseed/{{$image_item->image_path}}"
                  alt=""
                  srcset=""
                />
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="p-2 bd-highlight" style="width: 50%">
        <span class="badge rounded-pill bg-light detail-rounded-pill shadow-sm"
          >{{$category_detail->name}} 
        </span>
        <p class="title-4-2">
         {{$product->name}}
        </p>
        <p class="title-4-3">
          {!!$product->content!!}
        </p>
        <div class="d-flex flex-column bd-highlight mb-3">
          <div class="bd-highlight">
            <a
              data-autoplay="true"
              data-vbtype="video"
              href="https://www.youtube.com/watch?v=De5Lz3QzzWI"
              class="btn btn-success detail-btn-success venobox shadow-sm"
            >
              video hướng dẫn
            </a>
          </div>
          <div class="bd-highlight mt-2">
            <button
              type="button"
              class="btn btn-outline-success detail-btn-outline-success shadow-sm"
            >
              tài liệu hướng dẫn
            </button>
            <div
                        class="detail-tag d-flex flex-row justify-content-end align-items-center"
                    >
                        <span
                            ><svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    d="M10.605 0h-10.605v10.609l13.391 13.391 10.609-10.604-13.395-13.396zm-4.191 6.414c-.781.781-2.046.781-2.829.001-.781-.783-.781-2.048 0-2.829.782-.782 2.048-.781 2.829-.001.782.782.781 2.047 0 2.829z"
                                /></svg
                        ></span>
                        @foreach($product->tags as $tagItem)
                            <a href="#">{{$tagItem->name}}</a
                            >
                        @endforeach
                    </div>

          </div>
        </div>
      </div>
    </div>
 
    
    @include('content.detail_product.related_information')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0&appId=331179678180429&autoLogAppEvents=1" nonce="YmGX6Zmm"></script>

<div class="fb-comments" data-href="{{$url_pro}}" data-width="750" data-numposts="10"></div>
 


    
@endsection
@section('js')
 <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('swiper/thumbs-gallery/thumbs-gallery.js')}}"></script>
      <script>
      var galleryThumbs = new Swiper(".gallery-thumbs", {
        spaceBetween: 20,
        slidesPerView: 3,
        loop: true,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
      });
      var galleryTop = new Swiper(".gallery-top", {
        spaceBetween: 10,
        loop: true,
 
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: galleryThumbs,
        },
      });
    </script>
        <script>
      $(document).ready(function () {
        var test = $(".venobox").venobox();
 
        // close current item clicking on .closeme
        $(document).on("click", ".closeme", function (e) {
          test.VBclose();
        });
 
        // go to next item in gallery clicking on .next
        $(document).on("click", ".next", function (e) {
          test.VBnext();
        });
 
        // go to previous item in gallery clicking on .previous
        $(document).on("click", ".previous", function (e) {
          test.VBprev();
        });
      });
    </script>
 


 



@endsection