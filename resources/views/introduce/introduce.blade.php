<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Slider</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- swiper -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


  <!-- venobox -->
  <link rel="stylesheet" href="{{asset('venobox/venobox.min.css')}}" type="text/css" media="screen" />
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="{{asset('introduce/css/slider.css')}}" />
</head>

<body>
  <div class="container-fluid intro-slider">
    <!-- Swiper -->
    <div class="swiper-container intro-swiper shadow">
      <div class="swiper-wrapper intro-swiper-wrapper">

        <div class="swiper-slide intro-swiper-slide">
          <div class="container-fluid introduce">
            <div class="introduce__1">
              <div class="d-flex flex-column bd-highlight mb-3 introduce__3 align-items-center">
                <a class="btn btn-primary btn-home shadow " href="{{URL::to('trang-chu')}}">
                  <span>
                    <svg height="30" fill="#fff" viewBox="0 -107 512 511" width="30" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="m255 .5c-7.089844 6.980469-17.34375 18.109375-27.464844 32.742188-8.722656 12.609374-15.832031 25.507812-21.332031 38.640624 19.625 13.980469 36.410156 30.628907 49.792969 49.472657 13.265625-18.675781 29.875-35.199219 49.277344-49.097657-5.753907-13.425781-13.203126-26.582031-22.347657-39.410156-10.328125-14.484375-20.742187-25.46875-27.925781-32.347656zm0 0" />
                      <path
                        d="m260.324219 296.066406c9.097656-1.484375 23.320312-4.597656 39.359375-11 36.109375-14.414062 64.078125-37.917968 83.128906-69.863281 36.15625-60.632813 24.257812-126.785156 17.144531-153.277344-9.679687 2.296875-24.222656 6.5-40.460937 13.769531-38.035156 17.019532-67.054688 41.976563-86.253906 74.167969-19.046876 31.945313-26.433594 67.722657-21.953126 106.347657 1.992188 17.144531 6.011719 31.136718 9.035157 39.855468zm0 0" />
                      <path
                        d="m42.199219 139.199219c-17.753907 1.175781-32.570313 4.261719-42.199219 6.757812 2.210938 9.691407 6.292969 24.269531 13.421875 40.570313 16.695313 38.179687 41.398437 67.410156 73.425781 86.882812 25.121094 15.273438 52.992188 23.285156 82.867188 23.871094-27.425782-16.699219-50.015625-39.320312-66.335938-66.691406-16.128906-27.046875-25.714844-58.035156-28.355468-91.132813-10.617188-.898437-21.5625-1-32.824219-.257812zm0 0" />
                      <path
                        d="m112.042969 61.925781c-2.582031 9.609375-5.792969 24.398438-7.117188 42.140625-3.101562 41.550782 5.058594 78.941406 24.257813 111.136719 19.050781 31.941406 47.019531 55.449219 83.128906 69.863281 5.199219 2.074219 10.1875 3.785156 14.890625 5.226563-2.191406-8.375-4.261719-18.296875-5.613281-29.402344-4.738282-38.941406 1.273437-76.824219 17.402344-110.617187-.082032-.136719-.160157-.273438-.242188-.410157-19.199219-32.195312-48.214844-57.148437-86.25-74.167969-16.238281-7.265624-30.777344-11.472656-40.457031-13.769531zm0 0" />
                      <path
                        d="m512 145.957031c-9.625-2.496093-24.449219-5.582031-42.207031-6.757812-11.261719-.742188-22.207031-.648438-32.824219.253906-2.640625 33.09375-12.222656 64.089844-28.355469 91.136719-16.320312 27.367187-38.914062 49.992187-66.335937 66.691406 29.878906-.585938 57.753906-8.601562 82.867187-23.871094 60.324219-36.675781 80.75-100.710937 86.855469-127.453125zm0 0" />
                    </svg>
                  </span>
                </a>
                <div class="bd-highlight introduce__3-logo">
                  <svg height="512pt" fill="#fff" viewBox="0 -107 512 511" width="512pt"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="m255 .5c-7.089844 6.980469-17.34375 18.109375-27.464844 32.742188-8.722656 12.609374-15.832031 25.507812-21.332031 38.640624 19.625 13.980469 36.410156 30.628907 49.792969 49.472657 13.265625-18.675781 29.875-35.199219 49.277344-49.097657-5.753907-13.425781-13.203126-26.582031-22.347657-39.410156-10.328125-14.484375-20.742187-25.46875-27.925781-32.347656zm0 0" />
                    <path
                      d="m260.324219 296.066406c9.097656-1.484375 23.320312-4.597656 39.359375-11 36.109375-14.414062 64.078125-37.917968 83.128906-69.863281 36.15625-60.632813 24.257812-126.785156 17.144531-153.277344-9.679687 2.296875-24.222656 6.5-40.460937 13.769531-38.035156 17.019532-67.054688 41.976563-86.253906 74.167969-19.046876 31.945313-26.433594 67.722657-21.953126 106.347657 1.992188 17.144531 6.011719 31.136718 9.035157 39.855468zm0 0" />
                    <path
                      d="m42.199219 139.199219c-17.753907 1.175781-32.570313 4.261719-42.199219 6.757812 2.210938 9.691407 6.292969 24.269531 13.421875 40.570313 16.695313 38.179687 41.398437 67.410156 73.425781 86.882812 25.121094 15.273438 52.992188 23.285156 82.867188 23.871094-27.425782-16.699219-50.015625-39.320312-66.335938-66.691406-16.128906-27.046875-25.714844-58.035156-28.355468-91.132813-10.617188-.898437-21.5625-1-32.824219-.257812zm0 0" />
                    <path
                      d="m112.042969 61.925781c-2.582031 9.609375-5.792969 24.398438-7.117188 42.140625-3.101562 41.550782 5.058594 78.941406 24.257813 111.136719 19.050781 31.941406 47.019531 55.449219 83.128906 69.863281 5.199219 2.074219 10.1875 3.785156 14.890625 5.226563-2.191406-8.375-4.261719-18.296875-5.613281-29.402344-4.738282-38.941406 1.273437-76.824219 17.402344-110.617187-.082032-.136719-.160157-.273438-.242188-.410157-19.199219-32.195312-48.214844-57.148437-86.25-74.167969-16.238281-7.265624-30.777344-11.472656-40.457031-13.769531zm0 0" />
                    <path
                      d="m512 145.957031c-9.625-2.496093-24.449219-5.582031-42.207031-6.757812-11.261719-.742188-22.207031-.648438-32.824219.253906-2.640625 33.09375-12.222656 64.089844-28.355469 91.136719-16.320312 27.367187-38.914062 49.992187-66.335937 66.691406 29.878906-.585938 57.753906-8.601562 82.867187-23.871094 60.324219-36.675781 80.75-100.710937 86.855469-127.453125zm0 0" />
                  </svg>
                </div>
                <div class="bd-highlight introduce__3-title">
                  <p>cp seed co.</p>
                </div>
                <div class="bd-highlight introduce__3-des">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </p>
                </div>
                <div class="bd-highlight introduce__3-divider"  data-delay="0.8s"></div>
                <div class="bd-highlight introduce__3-video d-flex flex-row align-items-center">
                  <div class="p-2 bd-highlight">
                    <p class="mb-0 mt-3 introduce__3-video-1">watch</p>
                    <p class="introduce__3-video-2">video</p>
                  </div>
                  <div class="p-2 bd-highlight introduce__3-video-3"data-delay="0.8s">
                    <a href="https://www.youtube.com/watch?v=hMQmuXnZCCg" data-autoplay="true" data-vbtype="video"
                      class="btn btn-primary btn-watch venobox"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24">
                        <path d="M3 22v-20l18 10-18 10z" />
                      </svg></a>
                  </div>
                  <div class="p-2 bd-highlight introduce__3-video-4">
                    <p class="mt-3">here</p>
                  </div>
                </div>
              </div>
              <div class="d-flex flex-column bd-highlight introduce__2">
                <div class="bd-highlight introduce__2-img">
                  <img
                    src="https://images.unsplash.com/photo-1491147334573-44cbb4602074?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1534&q=80"
                    alt="" srcset="" />
                </div>
                <div class="bd-highlight introduce__2-layer"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <a class="btn btn-primary btn-home shadow " href="{{URL::to('trang-chu')}}">
            <span>
              <svg height="30" fill="#fff" viewBox="0 -107 512 511" width="30" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="m255 .5c-7.089844 6.980469-17.34375 18.109375-27.464844 32.742188-8.722656 12.609374-15.832031 25.507812-21.332031 38.640624 19.625 13.980469 36.410156 30.628907 49.792969 49.472657 13.265625-18.675781 29.875-35.199219 49.277344-49.097657-5.753907-13.425781-13.203126-26.582031-22.347657-39.410156-10.328125-14.484375-20.742187-25.46875-27.925781-32.347656zm0 0" />
                <path
                  d="m260.324219 296.066406c9.097656-1.484375 23.320312-4.597656 39.359375-11 36.109375-14.414062 64.078125-37.917968 83.128906-69.863281 36.15625-60.632813 24.257812-126.785156 17.144531-153.277344-9.679687 2.296875-24.222656 6.5-40.460937 13.769531-38.035156 17.019532-67.054688 41.976563-86.253906 74.167969-19.046876 31.945313-26.433594 67.722657-21.953126 106.347657 1.992188 17.144531 6.011719 31.136718 9.035157 39.855468zm0 0" />
                <path
                  d="m42.199219 139.199219c-17.753907 1.175781-32.570313 4.261719-42.199219 6.757812 2.210938 9.691407 6.292969 24.269531 13.421875 40.570313 16.695313 38.179687 41.398437 67.410156 73.425781 86.882812 25.121094 15.273438 52.992188 23.285156 82.867188 23.871094-27.425782-16.699219-50.015625-39.320312-66.335938-66.691406-16.128906-27.046875-25.714844-58.035156-28.355468-91.132813-10.617188-.898437-21.5625-1-32.824219-.257812zm0 0" />
                <path
                  d="m112.042969 61.925781c-2.582031 9.609375-5.792969 24.398438-7.117188 42.140625-3.101562 41.550782 5.058594 78.941406 24.257813 111.136719 19.050781 31.941406 47.019531 55.449219 83.128906 69.863281 5.199219 2.074219 10.1875 3.785156 14.890625 5.226563-2.191406-8.375-4.261719-18.296875-5.613281-29.402344-4.738282-38.941406 1.273437-76.824219 17.402344-110.617187-.082032-.136719-.160157-.273438-.242188-.410157-19.199219-32.195312-48.214844-57.148437-86.25-74.167969-16.238281-7.265624-30.777344-11.472656-40.457031-13.769531zm0 0" />
                <path
                  d="m512 145.957031c-9.625-2.496093-24.449219-5.582031-42.207031-6.757812-11.261719-.742188-22.207031-.648438-32.824219.253906-2.640625 33.09375-12.222656 64.089844-28.355469 91.136719-16.320312 27.367187-38.914062 49.992187-66.335937 66.691406 29.878906-.585938 57.753906-8.601562 82.867187-23.871094 60.324219-36.675781 80.75-100.710937 86.855469-127.453125zm0 0" />
              </svg>
            </span>
          </a>
          <!-- Swiper -->
          <div class="swiper-container banner-swiper-container">
            <div class="swiper-wrapper banner-swiper-wrapper">
              <div class="swiper-slide banner-swiper-slide">
                <div class="container-fluid banner">
                  <div class="d-flex flex-row bd-highlight mb-3 w-100 h-100">
                    <div class="p-2 bd-highlight banner-left">
                      <div class="d-flex flex-column justify-content-center align-items-center bd-highlight mb-3">
                        <div class="p-2 bd-highlight banner-left__1"></div>
                        <div class="p-2 bd-highlight banner-left__img shadow" >
                          <img
                            src="https://images.unsplash.com/photo-1612363228106-c94b0754e2c1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"
                            alt="" srcset="" />
                        </div>
                      </div>
                    </div>
                    <div class="p-2 bd-highlight banner-right">
                      <div class="d-flex flex-column bd-highlight">
                        <div class="bd-highlight banner-right__1 shadow-sm"></div>
                      </div>
                      <p class="banner-right__title text-start">
                        Lorem Ipsum
                      </p>
                      <p class="banner-right__des text-start">
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Phasellus quis neque luctus, vulputate arcu sed,
                        fermentum dolor. Nulla sagittis scelerisque diam.
                      </p>
                      <button type="button" class="btn btn-outline-primary banner-right__btn shadow-sm float-start"
                        style="margin-right: 30px">
                        Lorem Ipsum
                      </button>
                      <button type="button" class="btn btn-outline-primary banner-right__btn shadow-sm float-start">
                        Lorem Ipsum
                      </button>
                    </div>
                  </div>
                  <a class="btn btn-primary btn-home shadow" href="#">
                    <span>
                      <svg height="30" fill="#fff" viewBox="0 -107 512 511" width="30"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="m255 .5c-7.089844 6.980469-17.34375 18.109375-27.464844 32.742188-8.722656 12.609374-15.832031 25.507812-21.332031 38.640624 19.625 13.980469 36.410156 30.628907 49.792969 49.472657 13.265625-18.675781 29.875-35.199219 49.277344-49.097657-5.753907-13.425781-13.203126-26.582031-22.347657-39.410156-10.328125-14.484375-20.742187-25.46875-27.925781-32.347656zm0 0" />
                        <path
                          d="m260.324219 296.066406c9.097656-1.484375 23.320312-4.597656 39.359375-11 36.109375-14.414062 64.078125-37.917968 83.128906-69.863281 36.15625-60.632813 24.257812-126.785156 17.144531-153.277344-9.679687 2.296875-24.222656 6.5-40.460937 13.769531-38.035156 17.019532-67.054688 41.976563-86.253906 74.167969-19.046876 31.945313-26.433594 67.722657-21.953126 106.347657 1.992188 17.144531 6.011719 31.136718 9.035157 39.855468zm0 0" />
                        <path
                          d="m42.199219 139.199219c-17.753907 1.175781-32.570313 4.261719-42.199219 6.757812 2.210938 9.691407 6.292969 24.269531 13.421875 40.570313 16.695313 38.179687 41.398437 67.410156 73.425781 86.882812 25.121094 15.273438 52.992188 23.285156 82.867188 23.871094-27.425782-16.699219-50.015625-39.320312-66.335938-66.691406-16.128906-27.046875-25.714844-58.035156-28.355468-91.132813-10.617188-.898437-21.5625-1-32.824219-.257812zm0 0" />
                        <path
                          d="m112.042969 61.925781c-2.582031 9.609375-5.792969 24.398438-7.117188 42.140625-3.101562 41.550782 5.058594 78.941406 24.257813 111.136719 19.050781 31.941406 47.019531 55.449219 83.128906 69.863281 5.199219 2.074219 10.1875 3.785156 14.890625 5.226563-2.191406-8.375-4.261719-18.296875-5.613281-29.402344-4.738282-38.941406 1.273437-76.824219 17.402344-110.617187-.082032-.136719-.160157-.273438-.242188-.410157-19.199219-32.195312-48.214844-57.148437-86.25-74.167969-16.238281-7.265624-30.777344-11.472656-40.457031-13.769531zm0 0" />
                        <path
                          d="m512 145.957031c-9.625-2.496093-24.449219-5.582031-42.207031-6.757812-11.261719-.742188-22.207031-.648438-32.824219.253906-2.640625 33.09375-12.222656 64.089844-28.355469 91.136719-16.320312 27.367187-38.914062 49.992187-66.335937 66.691406 29.878906-.585938 57.753906-8.601562 82.867187-23.871094 60.324219-36.675781 80.75-100.710937 86.855469-127.453125zm0 0" />
                      </svg>
                    </span>
                  </a>
                </div>
              </div>
              <div class="swiper-slide banner-swiper-slide">Slide 2</div>
              <div class="swiper-slide banner-swiper-slide">Slide 3</div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination banner-swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next banner-swiper-button-next"></div>
            <div class="swiper-button-prev banner-swiper-button-prev"></div>
          </div>
        </div>

        <div class="swiper-slide">
          <a class="btn btn-primary btn-home shadow " href="{{URL::to('trang-chu')}}">
            <span>
              <svg height="30" fill="#fff" viewBox="0 -107 512 511" width="30" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="m255 .5c-7.089844 6.980469-17.34375 18.109375-27.464844 32.742188-8.722656 12.609374-15.832031 25.507812-21.332031 38.640624 19.625 13.980469 36.410156 30.628907 49.792969 49.472657 13.265625-18.675781 29.875-35.199219 49.277344-49.097657-5.753907-13.425781-13.203126-26.582031-22.347657-39.410156-10.328125-14.484375-20.742187-25.46875-27.925781-32.347656zm0 0" />
                <path
                  d="m260.324219 296.066406c9.097656-1.484375 23.320312-4.597656 39.359375-11 36.109375-14.414062 64.078125-37.917968 83.128906-69.863281 36.15625-60.632813 24.257812-126.785156 17.144531-153.277344-9.679687 2.296875-24.222656 6.5-40.460937 13.769531-38.035156 17.019532-67.054688 41.976563-86.253906 74.167969-19.046876 31.945313-26.433594 67.722657-21.953126 106.347657 1.992188 17.144531 6.011719 31.136718 9.035157 39.855468zm0 0" />
                <path
                  d="m42.199219 139.199219c-17.753907 1.175781-32.570313 4.261719-42.199219 6.757812 2.210938 9.691407 6.292969 24.269531 13.421875 40.570313 16.695313 38.179687 41.398437 67.410156 73.425781 86.882812 25.121094 15.273438 52.992188 23.285156 82.867188 23.871094-27.425782-16.699219-50.015625-39.320312-66.335938-66.691406-16.128906-27.046875-25.714844-58.035156-28.355468-91.132813-10.617188-.898437-21.5625-1-32.824219-.257812zm0 0" />
                <path
                  d="m112.042969 61.925781c-2.582031 9.609375-5.792969 24.398438-7.117188 42.140625-3.101562 41.550782 5.058594 78.941406 24.257813 111.136719 19.050781 31.941406 47.019531 55.449219 83.128906 69.863281 5.199219 2.074219 10.1875 3.785156 14.890625 5.226563-2.191406-8.375-4.261719-18.296875-5.613281-29.402344-4.738282-38.941406 1.273437-76.824219 17.402344-110.617187-.082032-.136719-.160157-.273438-.242188-.410157-19.199219-32.195312-48.214844-57.148437-86.25-74.167969-16.238281-7.265624-30.777344-11.472656-40.457031-13.769531zm0 0" />
                <path
                  d="m512 145.957031c-9.625-2.496093-24.449219-5.582031-42.207031-6.757812-11.261719-.742188-22.207031-.648438-32.824219.253906-2.640625 33.09375-12.222656 64.089844-28.355469 91.136719-16.320312 27.367187-38.914062 49.992187-66.335937 66.691406 29.878906-.585938 57.753906-8.601562 82.867187-23.871094 60.324219-36.675781 80.75-100.710937 86.855469-127.453125zm0 0" />
              </svg>
            </span>
          </a>
          <div class="container-fluid">
            <div class="d-flex flex-row bd-highlight vision">
              <div class="bd-highlight w-50 position-relative vision-left">
                <div class="vision-left__1 shadow">
                  <p>T???m nh??n - S??? m???nh</p>
                  <img src="../../photos/lotus.svg" alt="" />
                </div>
                <div class="vision-left__2 shadow ">
                  <img
                    src="https://images.unsplash.com/photo-1593123668378-1e418c9af2aa?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=375&q=80"
                    alt="" srcset="" />
                </div>
              </div>

              <div class="bd-highlight w-50">
                <div class="d-flex flex-column bd-highlight vision-right mt-3">
                  <div class="p-2 bd-highlight mt-5">
                    <h3 class="text-start">1. T???M NH??N</h3>
                    <p class="text-start">
                      Vinaseed ph???n ?????u tr??? th??nh T???p ??o??n cung c???p c??c gi???i ph??p ph??t
                      tri???n n??ng nghi???p b???n v???ng h??ng ?????u Vi???t Nam, th???c hi???n gi???c m??
                      c???i thi???n thu nh???p v?? ??i???u ki???n s???ng c???a n??ng d??n Vi???t Nam.
                    </p>
                  </div>
                  <div class="p-2 bd-highlight mt-2">
                    <h3 class="text-start">2. S??? M???NH</h3>
                    <p class="text-start">
                      B???ng t???t c??? t??nh c???m v?? tr??ch nhi???m c???a m??nh v???i cu???c s???ng con
                      ng?????i v?? x?? h???i, Vinaseed cam k???t mang ?????n c??c gi???i ph??p ph??t
                      tri???n n??ng nghi???p b???n v???ng, nh???m th???c hi???n gi???c m?? c???i thi???n thu
                      nh???p v?? ??i???u ki???n s???ng c???a n??ng d??n Vi???t Nam.
                    </p>
                  </div>
                  <div class="p-2 bd-highlight mt-2">
                    <h3 class="text-start">3. GI?? TR??? C???T L??I</h3>
                    <p class="text-start">N??ng ?????ng ??? S??ng t???o ??? Chuy??n nghi???p</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <a class="btn btn-primary btn-home shadow " href="{{URL::to('trang-chu')}}">
            <span>
              <svg height="30" fill="#fff" viewBox="0 -107 512 511" width="30" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="m255 .5c-7.089844 6.980469-17.34375 18.109375-27.464844 32.742188-8.722656 12.609374-15.832031 25.507812-21.332031 38.640624 19.625 13.980469 36.410156 30.628907 49.792969 49.472657 13.265625-18.675781 29.875-35.199219 49.277344-49.097657-5.753907-13.425781-13.203126-26.582031-22.347657-39.410156-10.328125-14.484375-20.742187-25.46875-27.925781-32.347656zm0 0" />
                <path
                  d="m260.324219 296.066406c9.097656-1.484375 23.320312-4.597656 39.359375-11 36.109375-14.414062 64.078125-37.917968 83.128906-69.863281 36.15625-60.632813 24.257812-126.785156 17.144531-153.277344-9.679687 2.296875-24.222656 6.5-40.460937 13.769531-38.035156 17.019532-67.054688 41.976563-86.253906 74.167969-19.046876 31.945313-26.433594 67.722657-21.953126 106.347657 1.992188 17.144531 6.011719 31.136718 9.035157 39.855468zm0 0" />
                <path
                  d="m42.199219 139.199219c-17.753907 1.175781-32.570313 4.261719-42.199219 6.757812 2.210938 9.691407 6.292969 24.269531 13.421875 40.570313 16.695313 38.179687 41.398437 67.410156 73.425781 86.882812 25.121094 15.273438 52.992188 23.285156 82.867188 23.871094-27.425782-16.699219-50.015625-39.320312-66.335938-66.691406-16.128906-27.046875-25.714844-58.035156-28.355468-91.132813-10.617188-.898437-21.5625-1-32.824219-.257812zm0 0" />
                <path
                  d="m112.042969 61.925781c-2.582031 9.609375-5.792969 24.398438-7.117188 42.140625-3.101562 41.550782 5.058594 78.941406 24.257813 111.136719 19.050781 31.941406 47.019531 55.449219 83.128906 69.863281 5.199219 2.074219 10.1875 3.785156 14.890625 5.226563-2.191406-8.375-4.261719-18.296875-5.613281-29.402344-4.738282-38.941406 1.273437-76.824219 17.402344-110.617187-.082032-.136719-.160157-.273438-.242188-.410157-19.199219-32.195312-48.214844-57.148437-86.25-74.167969-16.238281-7.265624-30.777344-11.472656-40.457031-13.769531zm0 0" />
                <path
                  d="m512 145.957031c-9.625-2.496093-24.449219-5.582031-42.207031-6.757812-11.261719-.742188-22.207031-.648438-32.824219.253906-2.640625 33.09375-12.222656 64.089844-28.355469 91.136719-16.320312 27.367187-38.914062 49.992187-66.335937 66.691406 29.878906-.585938 57.753906-8.601562 82.867187-23.871094 60.324219-36.675781 80.75-100.710937 86.855469-127.453125zm0 0" />
              </svg>
            </span>
          </a>
          <div class="container-fluid services">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item my-tab-link-1__li-1" role="presentation">
                <button class="nav-link active my-tab-link-1__btn-1" id="home-tab" data-bs-toggle="tab"
                  data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">

                </button>
                <div class="my-tab-link-1__svg-1">

                </div>
              </li>
              <li class="nav-item my-tab-link-1__li-2" role="presentation">
                <button class="nav-link my-tab-link-1__btn-2" id="profile-tab" data-bs-toggle="tab"
                  data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">

                </button>
                <div class="my-tab-link-1__svg-2">

                </div>
              </li>
              <li class="nav-item my-tab-link-1__li-3" role="presentation">
                <button class="nav-link my-tab-link-1__btn-3" id="contact-tab" data-bs-toggle="tab"
                  data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">

                </button>
                <div class="my-tab-link-1__svg-3">

                </div>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="container-fluid services">
                  <div class="services d-flex flex-row w-100">
                    <div class="services-left d-flex flex-row w-50">
                      <div class="services-left__wrap-img-1 shadow d-flex flex-row">
                        <div class="services-left__wrap-img-2 shadow">
                          <img class="shadow"
                            src="https://images.unsplash.com/photo-1467043198406-dc953a3defa0?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=370&q=80"
                            alt="" srcset="" />
                        </div>
                        <p>Cp Seed</p>
                      </div>
                    </div>
                    <div class="services-right w-50">
                      <p class="title-1 text-start text-uppercase">C??NG NGH??? N???I B???T</p>
                      <a class="title-2 text-start" href="#">C??NG NGH??? CH???N T???O GI???NG C??Y TR???NG</a>
                      <p class="title-3 text-start">
                        Vinaseed l?? doanh nghi???p KHCN ?????u ti??n trong ng??nh gi???ng c??y
                        tr???ng Vi???t Nam, ti??n phong trong ho???t ?????ng nghi??n c???u, ???ng
                        d???ng v?? chuy???n giao c??ng ngh??? v???i c??c gi???i ph??p ?????t ph??, ??i
                        tr?????c v?? ?????nh h?????ng th??? tr?????ng. H??? th???ng c?? s??? h??? t???ng ph???c v???
                        nghi??n c???u hi???n ?????i, ?????i ng?? chuy??n gia h??ng h???u, nh??n s??? tr??n
                        1000 lao ?????ng v???i 80% c?? tr??nh ????? ?????i h???c v?? tr??n ?????i h???c ho??n
                        to??n l??m ch??? c??ng ngh??? ch???n t???o gi???ng ti??n ti???n tr??n th??? gi???i,
                        c??ng ngh??? s???n xu???t h???t lai, c??ng ngh??? s???n xu???t n??ng nghi???p
                        4.0.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container-fluid">
                  <div class="services d-flex flex-row w-100">
                    <div class="services-left d-flex flex-row w-50">
                      <div class="services-left__wrap-img-1 shadow d-flex flex-row">
                        <div class="services-left__wrap-img-2 shadow">
                          <img class="shadow"
                            src="https://images.unsplash.com/photo-1512428813834-c702c7702b78?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80"
                            alt="" srcset="" />
                        </div>
                        <p>Cp Seed</p>
                      </div>
                    </div>
                    <div class="services-right w-50">
                      <p class="title-1 text-uppercase">C??NG NGH??? N???I B???T</p>
                      <a class="title-2" href="#">C??NG NGH??? CH???N T???O GI???NG C??Y TR???NG</a>
                      <p class="title-3">
                        Vinaseed l?? doanh nghi???p KHCN ?????u ti??n trong ng??nh gi???ng c??y
                        tr???ng Vi???t Nam, ti??n phong trong ho???t ?????ng nghi??n c???u, ???ng
                        d???ng v?? chuy???n giao c??ng ngh??? v???i c??c gi???i ph??p ?????t ph??, ??i
                        tr?????c v?? ?????nh h?????ng th??? tr?????ng. H??? th???ng c?? s??? h??? t???ng ph???c v???
                        nghi??n c???u hi???n ?????i, ?????i ng?? chuy??n gia h??ng h???u, nh??n s??? tr??n
                        1000 lao ?????ng v???i 80% c?? tr??nh ????? ?????i h???c v?? tr??n ?????i h???c ho??n
                        to??n l??m ch??? c??ng ngh??? ch???n t???o gi???ng ti??n ti???n tr??n th??? gi???i,
                        c??ng ngh??? s???n xu???t h???t lai, c??ng ngh??? s???n xu???t n??ng nghi???p
                        4.0.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="container-fluid">
                  <div class="services d-flex flex-row w-100">
                    <div class="services-left d-flex flex-row w-50">
                      <div class="services-left__wrap-img-1 shadow d-flex flex-row">
                        <div class="services-left__wrap-img-2 shadow">
                          <img class="shadow"
                            src="https://images.unsplash.com/photo-1510172951991-856a654063f9?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=334&q=80"
                            alt="" srcset="" />
                        </div>
                        <p>Cp Seed</p>
                      </div>
                    </div>
                    <div class="services-right w-50">
                      <p class="title-1 text-uppercase">C??NG NGH??? N???I B???T</p>
                      <a class="title-2" href="#">C??NG NGH??? CH???N T???O GI???NG C??Y TR???NG</a>
                      <p class="title-3">
                        Vinaseed l?? doanh nghi???p KHCN ?????u ti??n trong ng??nh gi???ng c??y
                        tr???ng Vi???t Nam, ti??n phong trong ho???t ?????ng nghi??n c???u, ???ng
                        d???ng v?? chuy???n giao c??ng ngh??? v???i c??c gi???i ph??p ?????t ph??, ??i
                        tr?????c v?? ?????nh h?????ng th??? tr?????ng. H??? th???ng c?? s??? h??? t???ng ph???c v???
                        nghi??n c???u hi???n ?????i, ?????i ng?? chuy??n gia h??ng h???u, nh??n s??? tr??n
                        1000 lao ?????ng v???i 80% c?? tr??nh ????? ?????i h???c v?? tr??n ?????i h???c ho??n
                        to??n l??m ch??? c??ng ngh??? ch???n t???o gi???ng ti??n ti???n tr??n th??? gi???i,
                        c??ng ngh??? s???n xu???t h???t lai, c??ng ngh??? s???n xu???t n??ng nghi???p
                        4.0.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
        <a class="btn btn-primary btn-home-1 shadow " href="{{URL::to('trang-chu')}}">
            <span>
              <svg height="30" fill="#fff" viewBox="0 -107 512 511" width="30" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="m255 .5c-7.089844 6.980469-17.34375 18.109375-27.464844 32.742188-8.722656 12.609374-15.832031 25.507812-21.332031 38.640624 19.625 13.980469 36.410156 30.628907 49.792969 49.472657 13.265625-18.675781 29.875-35.199219 49.277344-49.097657-5.753907-13.425781-13.203126-26.582031-22.347657-39.410156-10.328125-14.484375-20.742187-25.46875-27.925781-32.347656zm0 0" />
                <path
                  d="m260.324219 296.066406c9.097656-1.484375 23.320312-4.597656 39.359375-11 36.109375-14.414062 64.078125-37.917968 83.128906-69.863281 36.15625-60.632813 24.257812-126.785156 17.144531-153.277344-9.679687 2.296875-24.222656 6.5-40.460937 13.769531-38.035156 17.019532-67.054688 41.976563-86.253906 74.167969-19.046876 31.945313-26.433594 67.722657-21.953126 106.347657 1.992188 17.144531 6.011719 31.136718 9.035157 39.855468zm0 0" />
                <path
                  d="m42.199219 139.199219c-17.753907 1.175781-32.570313 4.261719-42.199219 6.757812 2.210938 9.691407 6.292969 24.269531 13.421875 40.570313 16.695313 38.179687 41.398437 67.410156 73.425781 86.882812 25.121094 15.273438 52.992188 23.285156 82.867188 23.871094-27.425782-16.699219-50.015625-39.320312-66.335938-66.691406-16.128906-27.046875-25.714844-58.035156-28.355468-91.132813-10.617188-.898437-21.5625-1-32.824219-.257812zm0 0" />
                <path
                  d="m112.042969 61.925781c-2.582031 9.609375-5.792969 24.398438-7.117188 42.140625-3.101562 41.550782 5.058594 78.941406 24.257813 111.136719 19.050781 31.941406 47.019531 55.449219 83.128906 69.863281 5.199219 2.074219 10.1875 3.785156 14.890625 5.226563-2.191406-8.375-4.261719-18.296875-5.613281-29.402344-4.738282-38.941406 1.273437-76.824219 17.402344-110.617187-.082032-.136719-.160157-.273438-.242188-.410157-19.199219-32.195312-48.214844-57.148437-86.25-74.167969-16.238281-7.265624-30.777344-11.472656-40.457031-13.769531zm0 0" />
                <path
                  d="m512 145.957031c-9.625-2.496093-24.449219-5.582031-42.207031-6.757812-11.261719-.742188-22.207031-.648438-32.824219.253906-2.640625 33.09375-12.222656 64.089844-28.355469 91.136719-16.320312 27.367187-38.914062 49.992187-66.335937 66.691406 29.878906-.585938 57.753906-8.601562 82.867187-23.871094 60.324219-36.675781 80.75-100.710937 86.855469-127.453125zm0 0" />
              </svg>
            </span>
          </a>

          <div class="container-fluid services">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item my-tab-link-2__li-1" role="presentation">
                <button class="nav-link active my-tab-link-2__btn-1" id="home-tab-1" data-bs-toggle="tab"
                  data-bs-target="#home1" role="tab" aria-controls="home" aria-selected="true">
                </button>
                <div class="my-tab-link-2__svg-1">

                </div>
              </li>
              <li class="nav-item my-tab-link-2__li-2" role="presentation">
                <button class="nav-link my-tab-link-2__btn-2" id="profile-tab-1" data-bs-toggle="tab"
                  data-bs-target="#profile1" type="button" role="tab" aria-controls="profile" aria-selected="false">

                </button>
                <div class="my-tab-link-2__svg-2">

                </div>
              </li>
              <li class="nav-item my-tab-link-2__li-3" role="presentation">
                <button class="nav-link my-tab-link-2__btn-3" id="contact-tab-1" data-bs-toggle="tab"
                  data-bs-target="#contact1" type="button" role="tab" aria-controls="contact" aria-selected="false">

                </button>
                <div class="my-tab-link-2__svg-3">

                </div>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab-1">
                <div class="container-fluid services">
                  <div class="services d-flex flex-row w-100">
                    <div class="services-right w-50">
                      <p class="title-1 text-start text-uppercase">l??nh v???c kinh doanh</p>
                      <a class="title-2 text-start" href="#">C??NG NGH??? CH???N T???O GI???NG C??Y TR???NG</a>
                      <p class="title-3 text-start">
                        Vinaseed l?? doanh nghi???p KHCN ?????u ti??n trong ng??nh gi???ng c??y
                        tr???ng Vi???t Nam, ti??n phong trong ho???t ?????ng nghi??n c???u, ???ng
                        d???ng v?? chuy???n giao c??ng ngh??? v???i c??c gi???i ph??p ?????t ph??, ??i
                        tr?????c v?? ?????nh h?????ng th??? tr?????ng. H??? th???ng c?? s??? h??? t???ng ph???c v???
                        nghi??n c???u hi???n ?????i, ?????i ng?? chuy??n gia h??ng h???u, nh??n s??? tr??n
                        1000 lao ?????ng v???i 80% c?? tr??nh ????? ?????i h???c v?? tr??n ?????i h???c ho??n
                        to??n l??m ch??? c??ng ngh??? ch???n t???o gi???ng ti??n ti???n tr??n th??? gi???i,
                        c??ng ngh??? s???n xu???t h???t lai, c??ng ngh??? s???n xu???t n??ng nghi???p
                        4.0.
                      </p>
                    </div>
                    <div class="services-left d-flex flex-row w-50">
                      <div class="services-left__wrap-img-1 shadow d-flex flex-row">
                        <div class="services-left__wrap-img-2 shadow">
                          <img class="shadow"
                            src="https://images.unsplash.com/photo-1467043198406-dc953a3defa0?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=370&q=80"
                            alt="" srcset="" />
                        </div>
                        <p>Cp Seed</p>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container-fluid">
                  <div class="services d-flex flex-row w-100">
                    <div class="services-right w-50">
                      <p class="title-1 text-uppercase">C??NG NGH??? N???I B???T</p>
                      <a class="title-2" href="#">C??NG NGH??? CH???N T???O GI???NG C??Y TR???NG</a>
                      <p class="title-3">
                        Vinaseed l?? doanh nghi???p KHCN ?????u ti??n trong ng??nh gi???ng c??y
                        tr???ng Vi???t Nam, ti??n phong trong ho???t ?????ng nghi??n c???u, ???ng
                        d???ng v?? chuy???n giao c??ng ngh??? v???i c??c gi???i ph??p ?????t ph??, ??i
                        tr?????c v?? ?????nh h?????ng th??? tr?????ng. H??? th???ng c?? s??? h??? t???ng ph???c v???
                        nghi??n c???u hi???n ?????i, ?????i ng?? chuy??n gia h??ng h???u, nh??n s??? tr??n
                        1000 lao ?????ng v???i 80% c?? tr??nh ????? ?????i h???c v?? tr??n ?????i h???c ho??n
                        to??n l??m ch??? c??ng ngh??? ch???n t???o gi???ng ti??n ti???n tr??n th??? gi???i,
                        c??ng ngh??? s???n xu???t h???t lai, c??ng ngh??? s???n xu???t n??ng nghi???p
                        4.0.
                      </p>
                    </div>
                    <div class="services-left d-flex flex-row w-50">
                      <div class="services-left__wrap-img-1 shadow d-flex flex-row">
                        <div class="services-left__wrap-img-2 shadow">
                          <img class="shadow"
                            src="https://images.unsplash.com/photo-1512428813834-c702c7702b78?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80"
                            alt="" srcset="" />
                        </div>
                        <p>Cp Seed</p>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab">
                <div class="container-fluid">
                  <div class="services d-flex flex-row w-100">
                    <div class="services-right w-50">
                      <p class="title-1 text-uppercase">C??NG NGH??? N???I B???T</p>
                      <a class="title-2" href="#">C??NG NGH??? CH???N T???O GI???NG C??Y TR???NG</a>
                      <p class="title-3">
                        Vinaseed l?? doanh nghi???p KHCN ?????u ti??n trong ng??nh gi???ng c??y
                        tr???ng Vi???t Nam, ti??n phong trong ho???t ?????ng nghi??n c???u, ???ng
                        d???ng v?? chuy???n giao c??ng ngh??? v???i c??c gi???i ph??p ?????t ph??, ??i
                        tr?????c v?? ?????nh h?????ng th??? tr?????ng. H??? th???ng c?? s??? h??? t???ng ph???c v???
                        nghi??n c???u hi???n ?????i, ?????i ng?? chuy??n gia h??ng h???u, nh??n s??? tr??n
                        1000 lao ?????ng v???i 80% c?? tr??nh ????? ?????i h???c v?? tr??n ?????i h???c ho??n
                        to??n l??m ch??? c??ng ngh??? ch???n t???o gi???ng ti??n ti???n tr??n th??? gi???i,
                        c??ng ngh??? s???n xu???t h???t lai, c??ng ngh??? s???n xu???t n??ng nghi???p
                        4.0.
                      </p>
                    </div>
                    <div class="services-left d-flex flex-row w-50">
                      <div class="services-left__wrap-img-1 shadow d-flex flex-row">
                        <div class="services-left__wrap-img-2 shadow">
                          <img class="shadow"
                            src="https://images.unsplash.com/photo-1510172951991-856a654063f9?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=334&q=80"
                            alt="" srcset="" />
                        </div>
                        <p>Cp Seed</p>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">

          <div class="container-fluid news">
            <a class="btn btn-primary btn-home shadow " href="{{URL::to('trang-chu')}}">
              <span>
                <svg height="30" fill="#fff" viewBox="0 -107 512 511" width="30" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="m255 .5c-7.089844 6.980469-17.34375 18.109375-27.464844 32.742188-8.722656 12.609374-15.832031 25.507812-21.332031 38.640624 19.625 13.980469 36.410156 30.628907 49.792969 49.472657 13.265625-18.675781 29.875-35.199219 49.277344-49.097657-5.753907-13.425781-13.203126-26.582031-22.347657-39.410156-10.328125-14.484375-20.742187-25.46875-27.925781-32.347656zm0 0" />
                  <path
                    d="m260.324219 296.066406c9.097656-1.484375 23.320312-4.597656 39.359375-11 36.109375-14.414062 64.078125-37.917968 83.128906-69.863281 36.15625-60.632813 24.257812-126.785156 17.144531-153.277344-9.679687 2.296875-24.222656 6.5-40.460937 13.769531-38.035156 17.019532-67.054688 41.976563-86.253906 74.167969-19.046876 31.945313-26.433594 67.722657-21.953126 106.347657 1.992188 17.144531 6.011719 31.136718 9.035157 39.855468zm0 0" />
                  <path
                    d="m42.199219 139.199219c-17.753907 1.175781-32.570313 4.261719-42.199219 6.757812 2.210938 9.691407 6.292969 24.269531 13.421875 40.570313 16.695313 38.179687 41.398437 67.410156 73.425781 86.882812 25.121094 15.273438 52.992188 23.285156 82.867188 23.871094-27.425782-16.699219-50.015625-39.320312-66.335938-66.691406-16.128906-27.046875-25.714844-58.035156-28.355468-91.132813-10.617188-.898437-21.5625-1-32.824219-.257812zm0 0" />
                  <path
                    d="m112.042969 61.925781c-2.582031 9.609375-5.792969 24.398438-7.117188 42.140625-3.101562 41.550782 5.058594 78.941406 24.257813 111.136719 19.050781 31.941406 47.019531 55.449219 83.128906 69.863281 5.199219 2.074219 10.1875 3.785156 14.890625 5.226563-2.191406-8.375-4.261719-18.296875-5.613281-29.402344-4.738282-38.941406 1.273437-76.824219 17.402344-110.617187-.082032-.136719-.160157-.273438-.242188-.410157-19.199219-32.195312-48.214844-57.148437-86.25-74.167969-16.238281-7.265624-30.777344-11.472656-40.457031-13.769531zm0 0" />
                  <path
                    d="m512 145.957031c-9.625-2.496093-24.449219-5.582031-42.207031-6.757812-11.261719-.742188-22.207031-.648438-32.824219.253906-2.640625 33.09375-12.222656 64.089844-28.355469 91.136719-16.320312 27.367187-38.914062 49.992187-66.335937 66.691406 29.878906-.585938 57.753906-8.601562 82.867187-23.871094 60.324219-36.675781 80.75-100.710937 86.855469-127.453125zm0 0" />
                </svg>
              </span>
            </a>
            <div class="d-flex flex-row bd-highlight w-100">
              <div class="bd-highlight w-60 news-left">
                <div class="d-flex flex-column bd-highlight">
                  <div class="bd-highlight news-left__img">
                    <img
                      src="https://images.unsplash.com/photo-1487700160041-babef9c3cb55?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=735&q=80"
                      alt="" srcset="" />
                  </div>
                  <div class="bd-highlight news-left__title">
                    <a href="#">
                      <p>
                        Watch: SF9???s Rowoon And Won Jin Ah Enjoy A Cozy Camping Date
                        Behind The Scenes Of ???She Would Never Know???
                      </p>
                    </a>
                  </div>
                  <div class="bd-highlight">
                    <div class="d-flex flex-row bd-highlight">
                      <div class="bd-highlight news-left__tag">
                        <span class="badge bg-secondary mt-3">Marketing</span>
                      </div>
                      <div class="bd-highlight news-left__time">
                        <span class="text-muted mt-3"> 44 mins ago </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bd-highlight w-40 news-right">
                <div class="d-flex flex-column bd-highlight">
                  <div class="bd-highlight mt-3 news-right__link">
                    <a href="#">
                      <p class="mb-0 text-uppercase">Tin t???c</p>
                    </a>
                  </div>
                  <div class="bd-highlight news-right__card">
                    <div class="card mb-4 border-0">
                      <div class="row g-0">
                        <div class="col-md-4 news-right__img">
                          <img
                            src="https://images.unsplash.com/photo-1487700160041-babef9c3cb55?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=735&q=80"
                            alt="..." />
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <p class="m-0">
                              <span class="badge bg-secondary news-right__tag">Marketing</span>
                              <span class="text-muted news-right__time">
                                44 mins ago.
                              </span>
                            </p>
                            <a class="news-right__title" href="#">
                              <p>???The Penthouse 2??? Ratings Soar Past 20 Percent For 2nd
                                Episode; ???Vincenzo??? Achieves 3rd-Highest Premiere Of Any
                                Weekend Drama In tvN History</p>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="bd-highlight news-right__card">
                    <div class="card mb-4 border-0">
                      <div class="row g-0">
                        <div class="col-md-4 news-right__img">
                          <img
                            src="https://images.unsplash.com/photo-1487700160041-babef9c3cb55?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=735&q=80"
                            alt="..." />
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <p class="m-0">
                              <span class="badge bg-secondary news-right__tag">Marketing</span>
                              <span class="text-muted news-right__time">
                                44 mins ago.
                              </span>
                            </p>
                            <a class="news-right__title" href="#">
                              <p>???The Penthouse 2??? Ratings Soar Past 20 Percent For 2nd
                                Episode; ???Vincenzo??? Achieves 3rd-Highest Premiere Of Any
                                Weekend Drama In tvN History</p>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="bd-highlight news-right__card">
                    <div class="card mb-4 border-0">
                      <div class="row g-0">
                        <div class="col-md-4 news-right__img">
                          <img
                            src="https://images.unsplash.com/photo-1487700160041-babef9c3cb55?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=735&q=80"
                            alt="..." />
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <p class="m-0">
                              <span class="badge bg-secondary news-right__tag">Marketing</span>
                              <span class="text-muted news-right__time">
                                44 mins ago.
                              </span>
                            </p>
                            <a class="news-right__title" href="#">
                              <p>???The Penthouse 2??? Ratings Soar Past 20 Percent For 2nd
                                Episode; ???Vincenzo??? Achieves 3rd-Highest Premiere Of Any
                                Weekend Drama In tvN History</p>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- //////////////////////////////////////////////////////////////////////////////////// -->
      <!-- Add Pagination -->
      <div class="swiper-pagination intro-swiper-pagination"></div>
    </div>
</div>

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".intro-swiper", {
        direction: "vertical",
        slidesPerView: 1,
        spaceBetween: 30,

        mousewheel: true,
        pagination: {
          el: ".intro-swiper-pagination",
          clickable: true,
        },
      });

      var swiper1 = new Swiper(".banner-swiper-container", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 5500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".banner-swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".banner-swiper-button-next",
          prevEl: ".banner-swiper-button-prev",
        },
      });
    </script>

    <script type="text/javascript" src="{{asset('venobox/venobox.js')}}"></script>
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
</body>

</html>