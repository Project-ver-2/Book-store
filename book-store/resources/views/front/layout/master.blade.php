<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{asset('/')}}">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.0.1/dist/tailwind.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Readex+Pro:wght@500&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.rawgit.com/mfd/09b70eb47474836f25a21660282ce0fd/raw/e06a670afcb2b861ed2ac4a1ef752d062ef6b46b/Gilroy.css">
    <link rel="stylesheet" href="./front/css/fontawesome-pro-6.1.0-web/css/all.css">
    <link rel="stylesheet" href="./front/css/style.css">
    <link rel="stylesheet" href="./front/css/address.css">
    <link rel="stylesheet" href="./front/css/new-address.css">
    <link rel="stylesheet" href="./front/css/keyframe.css">
    <link rel="stylesheet" href="./front/css/responsives.css">
    <title>@yield('title')</title>
    <!-- Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>


</head>
<body>


<header class="header">
    <div class="container">
        <div class="header-content">
            <div class="menu-wrap">
                <div class="menu-content">
                    <div class="menu-content-layout">
                        <form method="get" id="form-search" action="./shop">
                            @csrf
                            <input type="text" id="search-box" class="hide-input" name="search">
                            <label for="search-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21.111" height="21.623" viewBox="0 0 21.111 21.623">
                                    <g id="Icon_feather-search" data-name="Icon feather-search" transform="translate(0.625 0.625)">
                                        <path id="Path_8" data-name="Path 8" d="M18.47,10.173a8.3,8.3,0,1,1-8.3-8.3A8.3,8.3,0,0,1,18.47,10.173Z" transform="translate(-1.875 -1.875)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25"/>
                                        <path id="Path_9" data-name="Path 9" d="M14.884,15.4l-4.477-4.989" transform="translate(4.72 4.72)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25"/>
                                    </g>
                                </svg>
                            </label>
                            <input type="submit" id="search-submit">
                        </form>
                        <div class="product-search">
                            <p>Tìm kiếm sản phẩm</p>
                            <div class="keys-search">
                                <a class="search-keyword" href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13.523" height="13.662" viewBox="0 0 13.523 13.662">
                                        <g id="Icon_feather-search" data-name="Icon feather-search" transform="translate(0.5 0.5)">
                                            <path id="Path_8" data-name="Path 8" d="M11.875,6.875a5.062,5.062,0,0,1-3.384,4.733,4.72,4.72,0,0,1-1.616.267,5,5,0,1,1,5-5Z" transform="translate(-1.875 -1.875)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                            <path id="Path_9" data-name="Path 9" d="M13.6,13.735l-3.189-3.328" transform="translate(-1.28 -1.28)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                        </g>
                                    </svg>
                                    Đắc nhân tâm
                                </a>
                                <a class="search-keyword" href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13.523" height="13.662" viewBox="0 0 13.523 13.662">
                                        <g id="Icon_feather-search" data-name="Icon feather-search" transform="translate(0.5 0.5)">
                                            <path id="Path_8" data-name="Path 8" d="M11.875,6.875a5.062,5.062,0,0,1-3.384,4.733,4.72,4.72,0,0,1-1.616.267,5,5,0,1,1,5-5Z" transform="translate(-1.875 -1.875)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                            <path id="Path_9" data-name="Path 9" d="M13.6,13.735l-3.189-3.328" transform="translate(-1.28 -1.28)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                        </g>
                                    </svg>
                                    Cha giàu cha nghèo
                                </a>
                                <a class="search-keyword" href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13.523" height="13.662" viewBox="0 0 13.523 13.662">
                                        <g id="Icon_feather-search" data-name="Icon feather-search" transform="translate(0.5 0.5)">
                                            <path id="Path_8" data-name="Path 8" d="M11.875,6.875a5.062,5.062,0,0,1-3.384,4.733,4.72,4.72,0,0,1-1.616.267,5,5,0,1,1,5-5Z" transform="translate(-1.875 -1.875)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                            <path id="Path_9" data-name="Path 9" d="M13.6,13.735l-3.189-3.328" transform="translate(-1.28 -1.28)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                        </g>
                                    </svg>
                                    Ngôn tình
                                </a>

                            </div>
                            <div class="product-list">
                                <a href="#" class="product-item">
                                    <div class="product-item-img">
                                        <img src="./front/imgs/dacnhantam.jpg" alt="">
                                    </div>
                                    <p class="product-item-name">Đắc nhân tâm</p>
                                </a>

                                <a href="#" class="product-item">
                                    <div class="product-item-img">
                                        <img src="./front/imgs/dacnhantam.jpg" alt="">
                                    </div>
                                    <p class="product-item-name">Đắc nhân tâm</p>
                                </a>

                                <a href="#" class="product-item">
                                    <div class="product-item-img">
                                        <img src="./front/imgs/dacnhantam.jpg" alt="">
                                    </div>
                                    <p class="product-item-name">Đắc nhân tâm</p>
                                </a>

                                <a href="#" class="product-item">
                                    <div class="product-item-img">
                                        <img src="./front/imgs/dacnhantam.jpg" alt="">
                                    </div>
                                    <p class="product-item-name">Đắc nhân tâm</p>
                                </a>

                                <a href="#" class="product-item">
                                    <div class="product-item-img">
                                        <img src="./front/imgs/dacnhantam.jpg" alt="">
                                    </div>
                                    <p class="product-item-name">Đắc nhân tâm</p>
                                </a>

                                <a href="#" class="product-item">
                                    <div class="product-item-img">
                                        <img src="./front/imgs/dacnhantam.jpg" alt="">
                                    </div>
                                    <p class="product-item-name">Đắc nhân tâm</p>
                                </a>

                                <a href="#" class="product-item">
                                    <div class="product-item-img">
                                        <img src="./front/imgs/dacnhantam.jpg" alt="">
                                    </div>
                                    <p class="product-item-name">Đắc nhân tâm</p>
                                </a>

                                <a href="#" class="product-item">
                                    <div class="product-item-img">
                                        <img src="./front/imgs/dacnhantam.jpg" alt="">
                                    </div>
                                    <p class="product-item-name">Đắc nhân tâm</p>
                                </a>
                                <a href="#" class="product-item">
                                    <div class="product-item-img">
                                        <img src="./front/imgs/dacnhantam.jpg" alt="">
                                    </div>
                                    <p class="product-item-name">Đắc nhân tâm</p>
                                </a>
                                <a href="#" class="product-item">
                                    <div class="product-item-img">
                                        <img src="./front/imgs/dacnhantam.jpg" alt="">
                                    </div>
                                    <p class="product-item-name">Đắc nhân tâm</p>
                                </a>
                                <a href="#" class="product-item">
                                    <div class="product-item-img">
                                        <img src="./front/imgs/dacnhantam.jpg" alt="">
                                    </div>
                                    <p class="product-item-name">Đắc nhân tâm</p>
                                </a>
                                <a href="#" class="product-item">
                                    <div class="product-item-img">
                                        <img src="./front/imgs/dacnhantam.jpg" alt="">
                                    </div>
                                    <p class="product-item-name">Đắc nhân tâm</p>
                                </a>
                                <a href="#" class="product-item">
                                    <div class="product-item-img">
                                        <img src="./front/imgs/dacnhantam.jpg" alt="">
                                    </div>
                                    <p class="product-item-name">Đắc nhân tâm</p>
                                </a>


                            </div>
                            <hr>
                        </div>
                        <div class="menu-options">
                            <div class="toggle-link">
                                <div class="menu-link">
                                    Catalog
                                    <span class="icon-rotate">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14.739" height="7.885" viewBox="0 0 14.739 7.885">
                                                <path id="Icon_metro-chevron-thin-down" data-name="Icon metro-chevron-thin-down" d="M16.354,6.092a.6.6,0,0,1,.839,0,.583.583,0,0,1,0,.83l-6.776,6.71a.6.6,0,0,1-.839,0L2.8,6.922a.583.583,0,0,1,0-.83.6.6,0,0,1,.839,0L10,12.211Z" transform="translate(-2.627 -5.919)"/>
                                            </svg>
                                        </span>
                                </div>
                                <div class="menu-toggle-sub">
                                    <a class="menu-link">
                                        All Product
                                    </a>
                                    @foreach($categories as $category)
                                        <a href="./shop/?p={{$category->name}}" class="menu-link">
                                            {{$category->name}}
                                        </a>
                                    @endforeach
                                </div>
                            </div>


                            <a class="menu-link">
                                About Us
                            </a>
                            <a class="menu-link">
                                Blog
                            </a>
                            <div class="toggle-link">
                                <div class="menu-link">
                                    Others
                                    <span class="icon-rotate">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14.739" height="7.885" viewBox="0 0 14.739 7.885">
                                                <path id="Icon_metro-chevron-thin-down" data-name="Icon metro-chevron-thin-down" d="M16.354,6.092a.6.6,0,0,1,.839,0,.583.583,0,0,1,0,.83l-6.776,6.71a.6.6,0,0,1-.839,0L2.8,6.922a.583.583,0,0,1,0-.83.6.6,0,0,1,.839,0L10,12.211Z" transform="translate(-2.627 -5.919)"/>
                                            </svg>
                                        </span>
                                </div>
                                <div class="menu-toggle-sub">
                                    <a class="menu-link">
                                        CD/DVD
                                    </a>
                                    <a class="menu-link">
                                        Stationery
                                    </a>
                                    <a class="menu-link">
                                        Toy
                                    </a>
                                    <a class="menu-link">
                                        E-reader
                                    </a>
                                </div>
                            </div>
                            <div class="menu-footer">
                                <a href="#" class="menu-footer-link">
                                    History
                                    <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="32" viewBox="0 0 26 32">
                                                <g id="Icon_feather-file-text" data-name="Icon feather-file-text" transform="translate(-5 -2)">
                                                  <path id="Path_29" data-name="Path 29" d="M21,3H9A3,3,0,0,0,6,6V30a3,3,0,0,0,3,3H27a3,3,0,0,0,3-3V12Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                  <path id="Path_30" data-name="Path 30" d="M21,3v9h9" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                  <path id="Path_31" data-name="Path 31" d="M24,19.5H12" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                  <path id="Path_32" data-name="Path 32" d="M24,25.5H12" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                  <path id="Path_33" data-name="Path 33" d="M15,13.5H12" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                </g>
                                              </svg>
                                        </span>
                                </a>
                                <a href="#" class="menu-footer-link">
                                    Addresses
                                    <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="35" viewBox="0 0 29 35">
                                                <g id="Icon_feather-map-pin" data-name="Icon feather-map-pin" transform="translate(-3.5 -0.5)">
                                                  <path id="Path_34" data-name="Path 34" d="M31.5,15C31.5,25.5,18,34.5,18,34.5S4.5,25.5,4.5,15a13.5,13.5,0,1,1,27,0Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                  <path id="Path_35" data-name="Path 35" d="M22.5,15A4.5,4.5,0,1,1,18,10.5,4.5,4.5,0,0,1,22.5,15Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                </g>
                                            </svg>
                                        </span>
                                </a>
                                <a href="#" class="menu-footer-link">
                                    Coupons
                                    <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26.992" height="30.489" viewBox="0 0 26.992 30.489">
                                                <path id="Icon_metro-gift" data-name="Icon metro-gift" d="M25.813,11.568a12.1,12.1,0,0,0,1.55-1.3,6.649,6.649,0,0,0,1.9-3.486,3.874,3.874,0,0,0-.953-3.467,3.626,3.626,0,0,0-2.632-1.027,6.284,6.284,0,0,0-4.322,1.969,17.013,17.013,0,0,0-3.8,6.74A13.758,13.758,0,0,0,14.36,4.536,4.828,4.828,0,0,0,10.99,3.073,3.537,3.537,0,0,0,8.452,4.082c-1.506,1.506-1.3,4.151.454,5.908a9.709,9.709,0,0,0,2.13,1.579H4.5V19.28H6.427v13.5H29.563V19.28h1.928V11.568ZM22.885,5.791a4.18,4.18,0,0,1,2.788-1.334,1.538,1.538,0,0,1,1.1.392c.784.784.344,2.6-.942,3.886a13.582,13.582,0,0,1-4.652,2.834H19.65a14.776,14.776,0,0,1,3.235-5.778ZM9.618,6.775a1.479,1.479,0,0,1,.367-1.16,1.4,1.4,0,0,1,1-.373,2.661,2.661,0,0,1,1.836.828,10.716,10.716,0,0,1,2.43,4.7l.045.165-.165-.045a10.716,10.716,0,0,1-4.7-2.43,2.744,2.744,0,0,1-.822-1.681Zm6.449,24.074H8.355V18.316h7.712V30.849Zm0-13.5H6.427V13.5h9.64v3.856Zm11.568,13.5H19.923V18.316h7.712Zm1.928-13.5h-9.64V13.5h9.64v3.856Z" transform="translate(-4.499 -2.288)" fill="#fff"/>
                                            </svg>
                                        </span>
                                </a>
                                <a href="#" class="menu-footer-link">
                                    Log out
                                    <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="29.243" height="24.75" viewBox="0 0 29.243 24.75">
                                                <g id="Icon_ionic-ios-log-out" data-name="Icon ionic-ios-log-out" transform="translate(-3.375 -5.625)">
                                                  <path id="Path_505" data-name="Path 505" d="M21.938,26.156a.987.987,0,0,0-.984.984,1.269,1.269,0,0,1-1.266,1.266H6.609a1.269,1.269,0,0,1-1.266-1.266V8.859A1.269,1.269,0,0,1,6.609,7.594H19.688a1.269,1.269,0,0,1,1.266,1.266.984.984,0,0,0,1.969,0,3.235,3.235,0,0,0-3.234-3.234H6.609A3.235,3.235,0,0,0,3.375,8.859V27.141a3.235,3.235,0,0,0,3.234,3.234H19.688a3.235,3.235,0,0,0,3.234-3.234A.987.987,0,0,0,21.938,26.156Z" fill="#fff"/>
                                                  <path id="Path_506" data-name="Path 506" d="M26.22,11.116a.978.978,0,0,0-.7-.288.961.961,0,0,0-.7.288.98.98,0,0,0,0,1.392l4.584,4.514H11.391a.984.984,0,0,0,0,1.969H29.433L24.961,23.5a.993.993,0,0,0,0,1.392l.007.007a1.017,1.017,0,0,0,.689.274.95.95,0,0,0,.7-.288l5.808-5.794a1.381,1.381,0,0,0,0-2.053Z" fill="#fff"/>
                                                </g>
                                            </svg>

                                        </span>
                                </a>
                            </div>

                        </div>

                    </div>


                </div>
            </div>
            <div class="header-left">
                <button class="toggle-sidebar">
                    <div class="menu-btn"></div>
                </button>
            </div>
            <a href="#" class="header-logo">
                <img src="./front/imgs/shradha.svg" alt="">
            </a>
            <div class="header-right">
                <div class="header-user">
                        <a href="#" class="header-user-signin">
                            Login
                        </a>
                </div>
                <div class="header-select">
                    <button class="header-select-search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21.111" height="21.623" viewBox="0 0 21.111 21.623">
                            <g id="Icon_feather-search" data-name="Icon feather-search" transform="translate(0.625 0.625)">
                                <path id="Path_8" data-name="Path 8" d="M18.47,10.173a8.3,8.3,0,1,1-8.3-8.3A8.3,8.3,0,0,1,18.47,10.173Z" transform="translate(-1.875 -1.875)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25"/>
                                <path id="Path_9" data-name="Path 9" d="M14.884,15.4l-4.477-4.989" transform="translate(4.72 4.72)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25"/>
                            </g>
                        </svg>
                    </button>
                    <a class="header-select-showcart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21.588" height="20.663" viewBox="0 0 21.588 20.663">
                            <g id="Icon_feather-shopping-cart" data-name="Icon feather-shopping-cart" transform="translate(0.625 0.625)">
                                <path id="Path_5" data-name="Path 5" d="M6.25,13.125a.625.625,0,1,1-.625-.625A.625.625,0,0,1,6.25,13.125Z" transform="translate(1.681 5.663)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25"/>
                                <path id="Path_6" data-name="Path 6" d="M13.125,13.125A.625.625,0,1,1,12.5,12.5.625.625,0,0,1,13.125,13.125Z" transform="translate(5.963 5.663)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25"/>
                                <path id="Path_7" data-name="Path 7" d="M.625.625h3.7L6.8,14.607a1.916,1.916,0,0,0,1.849,1.681h8.986a1.916,1.916,0,0,0,1.849-1.681l1.479-8.761H5.247" transform="translate(-0.625 -0.625)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25"/>
                            </g>
                        </svg>
                        <div class="animate-price d-none d-md-block">
                            <span class="price-old">148.5$</span>
                            <span class="price-new">165.5$</span>
                        </div>

                    </a>
                </div>
            </div>
        </div>



    </div>
</header>
<div class="container">
    <nav class="header-navbar">
        <ul class="list-link">
            <li>
                <a href="./">Home</a>
            </li>
            <li>
                <a href="./shop">All Product</a>
            </li>
            @for($i=0;$i<8;$i++)
                <li>
                    <a href="./shop?p={{$categories[$i]->name}}">{{$categories[$i]->name}}</a>
                </li>
            @endfor

        </ul>
    </nav>
</div>


@yield('body')



<div class="co-operate container">
    <div class="row">
        <div class="co-operate-img col-4 col-md-2">
            <img src="./front/imgs/home-2-client-1.png" alt="">
        </div>
        <div class="co-operate-img col-4 col-md-2">
            <img src="./front/imgs/home-2-client-2.png" alt="">
        </div>
        <div class="co-operate-img col-4 col-md-2">
            <img src="./front/imgs/home-2-client-3.png" alt="">
        </div>
        <div class="co-operate-img col-4 col-md-2">
            <img src="./front/imgs/home-2-client-4.png" alt="">
        </div>
        <div class="co-operate-img col-4 col-md-2">
            <img src="./front/imgs/home-2-client-5.png" alt="">
        </div>
        <div class="co-operate-img col-4 col-md-2">
            <img src="./front/imgs/home-2-client-6.png" alt="">
        </div>
    </div>

</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-3">
                <div class="col-item-footer">
                    <h5>Publishers</h5>
                    <a class="link-footer" href="#">Bestsellers</a>
                    <a class="link-footer" href="#">Interviews</a>
                    <a class="link-footer" href="#">Authors Story</a>
                    <a class="link-footer" href="#">Book Fairs</a>
                    <a class="link-footer" href="#">Help (FAQ)</a>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="col-item-footer">
                    <h5>Contact</h5>
                    <a class="link-footer" href="#"><i class="fa-light fa-envelope"></i>bookstore@gmail.com</a>
                    <a class="link-footer" href="#"><i class="fa-light fa-phone"></i> +84326459773</a>
                    <p class="contact-footer">Follow us on social media and learn about new promotions.</p>
                    <a href="#" class="link-icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="link-icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="link-icon"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="link-icon"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-3 mt-5 mt-md-0">
                <div class="col-item-footer">
                    <h5>News & Update</h5>
                    <p class="contact-footer">We’d love it if you subscribed to our newsletter! You’ll love it too.</p>
                    <form action="" class="footer-form">
                        <input type="text" name="" id="" placeholder="Email">
                        <button><i class="fa-sharp fa-solid fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-3 mt-5 mt-md-0">
                <div class="col-item-footer">
                    <h5>Social media</h5>
                    <div class="row gy-2 gx-2">
                        <div class="col-4">
                            <div  class="social-media-item">
                                <div class="social-media-img">
                                    <img src="./front/imgs/img-1.jpg" alt="">
                                </div>
                                <a href="#">INSTAGRAM</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div  class="social-media-item">
                                <div class="social-media-img">
                                    <img src="./front/imgs/img-1.jpg" alt="">
                                </div>
                                <a href="#">INSTAGRAM</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div  class="social-media-item">
                                <div class="social-media-img">
                                    <img src="./front/imgs/img-1.jpg" alt="">
                                </div>
                                <a href="#">INSTAGRAM</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div  class="social-media-item">
                                <div class="social-media-img">
                                    <img src="./front/imgs/img-1.jpg" alt="">
                                </div>
                                <a href="#">INSTAGRAM</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div  class="social-media-item">
                                <div class="social-media-img">
                                    <img src="./front/imgs/img-1.jpg" alt="">
                                </div>
                                <a href="#">INSTAGRAM</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div  class="social-media-item">
                                <div class="social-media-img">
                                    <img src="./front/imgs/img-1.jpg" alt="">
                                </div>
                                <a href="#">INSTAGRAM</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="loading">
    <div class="bookshelf_wrapper">
        <ul class="books_list">
            <li class="book_item first"></li>
            <li class="book_item second"></li>
            <li class="book_item third"></li>
            <li class="book_item fourth"></li>
            <li class="book_item fifth"></li>
            <li class="book_item sixth"></li>
        </ul>
        <div class="shelf"></div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="./front/js/animate.js"></script>
<script src="./front/js/lib/turn.js"></script>
<script src="./front/js/reviewBook.js"></script>
<script src="./front/js/fill-address.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        cssMode: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
        },
        mousewheel: true,
        keyboard: true,
    });
</script>
</body>
</html>
