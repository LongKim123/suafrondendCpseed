@extends('mainlayout.category_layout.menu_layout')
@section('css_general')
@if($page_con=='nhan-su-chu-chot')
<link
      rel="stylesheet"
      href="{{asset('members/css/nscc.css')}}"
    />
@endif
@endsection
@section('page')
@if($page_con=='gioi-thieu-chung')
<div class="container position-relative mt-5">
      <div class="title-2 position-relative" style="margin-left: 110px">
        Lorem ipsum dolor sit:
      </div>
    </div>

    <div class="container-fluid position-relative mt-5 d-flex flex-row justify-content-center">
      <div class="d-flex flex-row bd-highlight mb-3 card-3">
        <div class="bd-highlight card-3__left p-2">
          <div class="card-3__left-img">
            <div class="bd-highlight card-3__number">
              <p>.01</p>
            </div>
            <img
              src="https://images.unsplash.com/photo-1597305877032-0668b3c6413a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"
              alt=""
              srcset=""
            />
            <div class="card-3__left-layer"></div>
          </div>
        </div>
        <div class="p-2 bd-highlight card-3__right">
          <div class="d-flex flex-row bd-highlight">
            <div class="p-2 bd-highlight">
              <div class="d-flex flex-column bd-highlight">
                <div class="p-2 bd-highlight card-3__right-title">
                  <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
                <div class="p-2 bd-highlight card-3__right-des">
                  <p class="hidden">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Consequatur sint, at deserunt nam quia fuga dolorem iste
                    vero veritatis eligendi impedit, ipsa excepturi labore
                    facere numquam. Doloremque debitis soluta facere. Sequi
                    blanditiis reiciendis facere consequuntur eveniet rerum,
                    ullam laudantium iusto ipsum soluta quas, odio corrupti ut
                    sint consectetur fugiat. Debitis.
                  </p>
                  <a class="show-more"
                    >Show more<svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"
                      /></svg
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div
      class="container-fluid position-relative mt-5 d-flex flex-row justify-content-center"
    >
      <div class="d-flex flex-row bd-highlight mb-3 card-3">
        <div
          class="p-2 bd-highlight card-3__right d-flex flex-column justify-content-center"
        >
          <div class="d-flex flex-row bd-highlight mb-3">
            <div class="p-2 bd-highlight">
              <div class="d-flex flex-column bd-highlight mb-3">
                <div class="p-2 bd-highlight card-3__right-title">
                  <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
                <div class="p-2 bd-highlight card-3__right-des">
                  <p class="hidden">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Consequatur sint, at deserunt nam quia fuga dolorem iste
                    vero veritatis eligendi impedit, ipsa excepturi labore
                    facere numquam. Doloremque debitis soluta facere. Sequi
                    blanditiis reiciendis facere consequuntur eveniet rerum,
                    ullam laudantium iusto ipsum soluta quas, odio corrupti ut
                    sint consectetur fugiat. Debitis.
                  </p>
                  <a class="show-more"
                    >Show more<svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"
                      /></svg
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bd-highlight card-3__left p-2">
          <div class="card-3__left-img">
            <div class="bd-highlight card-3__number">
              <p>.01</p>
            </div>
            <img
              src="https://images.unsplash.com/photo-1597305877032-0668b3c6413a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"
              alt=""
              srcset=""
            />
            <div class="card-3__left-layer"></div>
          </div>
        </div>
      </div>
    </div>
@elseif($page_con=='nhan-su-chu-chot')
 <div class="container mt-5">
      <ul
        class="nav nav-tabs my-nav-tabs d-flex flex-row justify-content-center"
        id="myTab"
        role="tablist"
      >
      @foreach($hr_category as $item)
       @php
          $a=$item->name;
          $tab=Str::of($a)->slug('-');
      @endphp
        
        <li class="nav-item my-nav-item" role="presentation">
          <button
            class="nav-link my-nav-link"
            id="{{$tab}}-tab"
            data-bs-toggle="tab"
            data-bs-target="#{{$tab}}"
            type="button"
            role="tab"
            aria-controls="{{$tab}}"
            aria-selected="true"
          >

         {{$item->name}}
          </button>
        </li>
        @endforeach
        
      </ul>


       

      <div class="tab-content" id="myTabContent">
      @foreach($hr_category as $item1)
        @php
          $a=$item1->name;
          $tab=Str::of($a)->slug('-');
      @endphp
     
        <div
          class="tab-pane fade "
          id="{{$tab}}"
          role="tabpanel"
          aria-labelledby="{{$tab}}-tab"
        >
          <div class="d-flex flex-row bd-highlight mb-3">
            <div class="p-2 bd-highlight">
              <div class="card card-6 mb-3 border-0">
                 @if($item1->hr->count())
                  @foreach($item1->hr as $hrItem)
                <div class="row g-0">
                  <div class="col-md-3 card-6-col-md-4">
                    <div class="card-6-crop">
                      <img
                        src="https://images.unsplash.com/photo-1554151228-14d9def656e4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=333&q=80"
                        alt="..."
                      />
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div class="card-body card-6-card-body">
                      <p class="card-6-card-body__1">
                         {{$hrItem->name}}
                      </p>
                      <p class="card-6-card-body__2">Lorem ipsum dolor sit.</p>
                      <p class="card-6-card-body__3 hidden">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Labore corporis ducimus quibusdam repellat itaque
                        provident nobis, officiis temporibus esse nam sed
                        deleniti iusto! Ad, velit qui. Sapiente blanditiis
                        quaerat recusandae? Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Labore corporis ducimus
                        quibusdam repellat itaque provident nobis, officiis
                        temporibus esse nam sed deleniti iusto! Ad, velit qui.
                        Sapiente blanditiis quaerat recusandae? Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Labore
                        corporis ducimus quibusdam repellat itaque provident
                        nobis, officiis temporibus esse nam sed deleniti iusto!
                        Ad, velit qui. Sapiente blanditiis quaerat recusandae?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Labore corporis ducimus quibusdam repellat itaque
                        provident nobis, officiis temporibus esse nam sed
                        deleniti iusto! Ad, velit qui. Sapiente blanditiis
                        quaerat recusandae?
                      </p>
                      <a class="show-more"
                        >Show more<svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="16"
                          height="16"
                          viewBox="0 0 24 24"
                        >
                          <path
                            d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"
                          /></svg
                      ></a>
                    </div>
                  </div>
                </div>
                 @endforeach
                 @endif
                
              </div>
            </div>
          </div>
        </div>
       
       
        @endforeach

      </div>
 




    </div>
@elseif($page_con=='tam-nhin-chien-luoc')
  <div>
    cua tam nhin chien luoc nha
    
  </div>
@endif
@endsection

