@extends('mainlayout.category_layout.menu_layout')

@section('css')

@endsection
@section('page')

@foreach($categoryparent as $category_item)
    @php $x=0; @endphp
   @if($category_item->categoryChildrent->count())
      @foreach($category_item->categoryChildrent as $categorychild_item)
             @php $x++; @endphp
                 
                    <div class="container mt-5">
                      <div
                        class="d-flex flex-row bd-highlight mb-3 justify-content-lg-between border-2 border-bottom"
                      >
                        <div class="bd-highlight">
                           @if($x==1)
                          <p class="title-3">{{$category_item->name}}</p>
                           <p>{{$category_item->des}} </p>
                          @else
                          <p></p>

                        @endif
                         
                        
                            <p>{{$categorychild_item->name}}</p>
                           
                        </div>
                         @if($x==1)
                          <div class="bd-highlight mt-2">
                            <a class="link-3" href="{{URL::to("$url",['slug'=>$category_item->slug ])}}"> Xem tất cả </a>
                          </div>
                          
                        @endif
                      </div>
                    </div>
                    
            @if($categorychild_item->categoryChildrent->count())
              @php $x=0; @endphp
             @foreach($categorychild_item->categoryChildrent as $categorychild_item2)
                  @php $x++; @endphp
                        @if($x==1)
                     @if($categorychild_item2->product1->count())
                      
                                    
                      <div class="container position-relative">
                        <div class="swiper-container swiper-container-3">
                          <div class="swiper-wrapper swiper-wrapper-2">
                             @foreach($categorychild_item2->product as $productItem)
                                <form>
                                          @csrf
                                <div class="swiper-slide swiper-silde-2">
                                   
                                    
                                          <input type="hidden" name="" value="{{$productItem->id}}" class="cart_product_id_{{$productItem->id}}">

                                          <input type="hidden" name="" value="{{$productItem->name}}" class="cart_product_name_{{$productItem->id}}">

                                          <input type="hidden" name="" value="{{$productItem->feature_image_path}}" class="cart_product_image_{{$productItem->id}}">

                                          <input type="hidden" name="" value="{{$productItem->price}}" class="cart_product_price_{{$productItem->id}}">

                                          <input type="hidden" name="" value="1" class="cart_product_qty_{{$productItem->id}}">
                                                                            
                                                                        
                                          
                                      
                                   
                                      <div class="d-flex flex-column bd-highlight mb-3 card-2">
                                    <div class="bd-highlight card-2__wrapper-img">
                                      <a href="{{URL::to('chi-tiet-san-pham',['name'=>$productItem->slug,'id'=>$productItem->id])}}">
                                      <img
                                        src="http://localhost/CtyCPseed/{{$productItem->feature_image_path}}"
                                        alt="logo"
                                      />
                                     </a>
                                    </div>

                                    <div class="bd-highlight card-2__title">Lorem ipsum dolor</div>
                                     <button type="button" data-id="{{$productItem->id}}" class="btn btn-default add-to-cart" name="add-to-cart">Thêm giỏ hàng</button> 
                                  </div>
                                   
                                
                                  
                                </div>

                              </form>
                                @endforeach
                            
                          </div>
                        </div>

                        <div class="swiper-button-next swiper-button-next-2 shadow-sm"></div>
                        <div class="swiper-button-prev swiper-button-prev-2 shadow-sm"></div>
                      </div>
                    @endif @break
                      @endif

              @endforeach

    <!-- Small Card -->
    @elseif($categorychild_item->product->count())
   
    <div class="container position-relative">
      <div class="swiper-container swiper-container-3">
        <div class="swiper-wrapper swiper-wrapper-2">
          @foreach($categorychild_item->product as $productItem)
          <form>
                    @csrf
          <div class="swiper-slide swiper-silde-2">
             
              
                    <input type="hidden" name="" value="{{$productItem->id}}" class="cart_product_id_{{$productItem->id}}">

                    <input type="hidden" name="" value="{{$productItem->name}}" class="cart_product_name_{{$productItem->id}}">

                    <input type="hidden" name="" value="{{$productItem->feature_image_path}}" class="cart_product_image_{{$productItem->id}}">

                    <input type="hidden" name="" value="{{$productItem->price}}" class="cart_product_price_{{$productItem->id}}">

                    <input type="hidden" name="" value="1" class="cart_product_qty_{{$productItem->id}}">
                                                      
                                                  
                    
                
             
                <div class="d-flex flex-column bd-highlight mb-3 card-2">
              <div class="bd-highlight card-2__wrapper-img">
                <a href="{{URL::to('chi-tiet-san-pham',['name'=>$productItem->slug,'id'=>$productItem->id])}}">
                <img
                  src="http://localhost/CtyCPseed/{{$productItem->feature_image_path}}"
                  alt="logo"
                />
               </a>
              </div>

              <div class="bd-highlight card-2__title">Lorem ipsum dolor</div>
               <button type="button" data-id="{{$productItem->id}}" class="btn btn-default add-to-cart" name="add-to-cart">Thêm giỏ hàng</button> 
            </div>
             
          
            
          </div>

        </form>
          @endforeach
          
          
        </div>
      </div>

      <div class="swiper-button-next swiper-button-next-2 shadow-sm"></div>
      <div class="swiper-button-prev swiper-button-prev-2 shadow-sm"></div>
    </div>
  
    @endif
    @endforeach
   @endif
    

@endforeach
    <!-- Small Card -->
   
@endsection
@section('js')
   <script>
      var swiper2 = new Swiper(".swiper-container-2", {
        slidesPerView: 4,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next-2",
          prevEl: ".swiper-button-prev-2",
        },
      });
    </script>
@endsection