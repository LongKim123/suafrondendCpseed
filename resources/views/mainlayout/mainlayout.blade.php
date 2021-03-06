<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Giới thiệu chung</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
     <link rel="stylesheet" href="{{asset('cart/css/sweetalert.css')}}" />

    <!-- venobox -->
    <link
      rel="stylesheet"
      href="{{asset('venobox/venobox.min.css')}}"
      type="text/css"
      media="screen"
    />
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- my css -->
    <link
      href="{{asset('superfish/css/superfish.css')}}"
      rel="stylesheet"
      media="screen"
    />
    <!-- Link Swiper's CSS -->
    @yield('css_main')
    <link rel="stylesheet" href="{{asset('css-1/style.css')}}" />
    
  </head>

  <body>

    @include('partial.menu')

    @include('partial.slider')

    @yield('category_page')
    @yield('page_con')
    

    <!-- /////////////////////////////////////////////////////////// -->
    <!-- footer -->
    @include('partial.map')
    @include('partial.footer')

  
    
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  
      <script type="text/javascript" >
           $(document).ready(function(){
       
            $('.add-to-cart').click(function(){
                var id=$(this).data('id');
                var cart_product_id=$('.cart_product_id_'+id).val();
                var cart_product_name=$('.cart_product_name_'+id).val();
                var cart_product_price=$('.cart_product_price_'+id).val();
                var cart_product_image=$('.cart_product_image_'+id).val();
                var cart_product_qty=$('.cart_product_qty_'+id).val();
                var _token=$('input[name="_token"]').val();
                
                $.ajax({
                    url:'{{URL('/add-to-cart')}}',
                    
                    
                    method:'POST',
                    data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
                    success:function(){
                        swal({
                            title:"Bạn đã thêm sản phẩm thành công",
                            text:"bạn có thể tiếp tục mua hàng hoặc tới giỏ hàng thanh toán",
                            showCancelButton:true,
                            cancelButtonText:"Xem tiếp",
                            confirmButtonClass:"btn-success",
                            confirmButtonText:"Đi đến giỏ hàng",
                            closeOnConfirm:false
                        },
                        function(){
                            window.location.href="{{URL::to('gio-hang')}}";
                        });
                        
                    }
                });
                // $.ajax({
                    
                //     url:'{{URL('/ajaxweb')}}',
                    
                //     method:'POST',
                //     data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
                //     success:function(){
                //         swal({
                //             title:"Bạn đã thêm sản phẩm thành công",
                //             text:"bạn có thể tiếp tục mua hàng hoặc tới giỏ hàng thanh toán",
                //             showCancelButton:true,
                //             cancelButtonText:"Xem tiếp",
                //             confirmButtonClass:"btn-success",
                //             confirmButtonText:"Đi đến giỏ hàng",
                //             closeOnConfirm:false
                //         },
                //         function(){
                //             window.location.href="{{URL::to('/gio-hang')}}";
                //         });
                        
                //     }
                // });
                
            });
    });
  </script>

  <script>
   
    function actionDelete(event){
  event.preventDefault();
  let urlRequest=$(this).data('url');
  let that =$(this);
  Swal.fire({
     title: 'Bạn có chắc?',
    text: "Muốn Xóa Sản Phẩm!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type:'GET',
        url:urlRequest,
        success: function(data){
          if(data.code == 200){
            that.parent().parent().parent().parent().remove();
            Swal.fire(
              'Xóa Sản Phẩm Thành Công!',
              
            )
          }
        },
        err: function(){
        }
      })
      
    }
  })
}
$(function(){
  $(document).on('click','.action_delete',actionDelete);
});
  </script>
  <script src="{{asset('cart/js/sweetalert.min.js')}}"></script>
    <!-- wow -->
    <script src="../../WOW/dist/wow.js"></script>
    <script>
      new WOW().init();
    </script>

    <script>
      jQuery(document).ready(function () {
        jQuery("ul.sf-menu").superfish();
      });
    </script>

    <!-- collpase -->
    <script>
      $(".panel-heading")
        .parent(".panel")
        .hover(
          function () {
            $(this).children(".collapse").collapse("show");
          },
          function () {
            $(this).children(".collapse").collapse("hide");
          }
        );
    </script>

    <!-- show-more -->
    <script>
      $(document).ready(function () {
        $(".show-more").on("click", function () {
          var showless =
            'Show less<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 16.67l2.829 2.83 9.175-9.339 9.167 9.339 2.829-2.83-11.996-12.17z"/></svg>';
          var showmore =
            'Show more<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg>';

          if ($(this).text().trim() === "Show more") {
            $(this).prev().removeClass();
            $(this).prev().addClass("open");
            $(this).empty();
            $(this).append(showless);
          } else {
            $(this).prev().removeClass();
            $(this).prev().addClass("hidden");
            $(this).empty();
            $(this).append(showmore);
          }
        });
      });
    </script>
    @yield('js_main')

    <!-- show-more-1 -->
    <script>
      $(document).ready(function () {
        if ($(".panel").length > 3) {
          $(".panel:gt(2)").hide();
          $(".show-more").show();
        }
        $(".show-more-1").on("click", function () {
          $(".panel:gt(2)").toggle();

          var showless =
            'Show less<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 16.67l2.829 2.83 9.175-9.339 9.167 9.339 2.829-2.83-11.996-12.17z"/></svg>';
          var showmore =
            'Show more<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg>';

          if ($(this).text().trim() === "Show more") {
            $(this).prev().removeClass();
            $(this).prev().addClass("open");
            $(this).empty();
            $(this).append(showless);
          } else {
            $(this).prev().removeClass();
            $(this).prev().addClass("hidden");
            $(this).empty();
            $(this).append(showmore);
          }
        });
      });
    </script>
  </body>
</html>
