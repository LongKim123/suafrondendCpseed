 @extends('mainlayout.category_layout.menu_layout')
@section('tittle')
<title>Sản phẩm theo loại</title>
@endsection
@section('css')

<link rel="stylesheet" href="{{asset('cart/css/shoppingcart_list.css')}}" />
@endsection
@section('page_con')
 <div class="container mt-4 mb-5">
      <div class="d-flex flex-row flex-wrap bd-highlight">
        @foreach($product as $productItem)
        <div class="p-2 bd-highlight">
          <!-- Button trigger modal -->
          <a data-bs-toggle="modal" data-bs-target="#exampleModal">
            <div class="d-flex flex-column bd-highlight card-2">
              <div class="bd-highlight card-2__wrapper-img">
                <img
                  src="http://localhost/CtyCPseed/{{$productItem->feature_image_path}}"
                  alt="logo"
                />
              </div>
              <div class="bd-highlight card-2__title">{{$productItem->name}}</div>
            </div>
          </a>

          <!-- Modal -->
          <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog partner-modal-dialog">
              <div class="modal-content partner-modal-content">
                <div class="modal-header partner-modal-header p-4">
                  <h5
                    class="modal-title partner-modal-title"
                    id="exampleModalLabel"
                  >
                    Lorem ipsum dolor sit amet consectetur adipisicing elit
                    Maiores aspernatur.
                  </h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body p-4">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut
                  dolores est praesentium tempora obcaecati labore consequatur!
                  Blanditiis saepe rem dolore, nihil cum iure dolorem voluptas
                  odio provident doloremque veniam autem natus commodi, eveniet
                  aliquam excepturi accusamus a reiciendis voluptatem. Impedit,
                  sapiente iure? Eius ad neque quasi obcaecati non, pariatur
                  molestias.
                </div>
              </div>
            </div>
          </div>
        </div>
          @endforeach

      </div>
    </div>
@endsection
@section('js')

@endsection