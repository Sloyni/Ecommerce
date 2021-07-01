<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <script src="https://unpkg.com/vue/dist/vue.js"></script>
        <script src="https://unpkg.com/vue-i18n/dist/vue-i18n.js"></script>
    </head>
    <body style="background:#F5F6F8;">
        <div id="app">
            <div id="top-banner" style="height:80px;background-image:url('https://ae01.alicdn.com/kf/H9b3c2f9a07ef40c0ad91b40d6242e301Y.png_.webp');background-position:center center;">
            </div>
            <div id="top-navbar" class="bg-black text-white">
                <div class="container">
                    <div class="d-flex px-lg-4 py-2">
                        <div class="p-0 py-2">
                            <a class="top-nav-brand" href="/">
                                <img src="{{ asset('img/logo.png') }}" style="height:30px;">
                            </a>
                        </div>
                        <div class="flex-grow-1 py-1 px-lg-5 px-3 d-none d-sm-block">
                            <div class="input-group search-group">
                                <input type="text" class="form-control" placeholder="Qu'est-ce qui vous ferait plaisir?">
                                <button class="btn btn-success"><i class="material-icons">search</i></button>
                            </div>
                        </div>
                        <div class="text-right top-nav-items pt-2 d-md-block d-none">
                            <div data-nav-dropdown="myaccount" class="nav-dropdown d-inline-block">
                                <a href="#" class="nav-dropdown-btn text-left d-inline-block top-nav-link pr-3">
                                    <span class="d-block">@{{ $t('navbar.myaccount') }}
                                        <span class="material-icons">
                                        keyboard_arrow_down
                                        </span>
                                    </span>
                                    <span>Identifiez-vous</span>
                                </a>
                                <div class="nav-dropdown-body text-center p-3 centered bottom-card" style="right:-100px;left:-100px;">
                                    <h6 class="py-1">Bienvenue sur Ecommerce !</h6>
                                    <div class="divider mb-3"></div>
                                    <div class="row">
                                        <div class="col pl-4 pr-1">
                                            <a href="#" class="btn btn-danger w-100">Commencer</a>
                                        </div>
                                        <div class="col pl-1 pr-4">
                                            <a href="#" class="btn btn-soft-danger w-100">Se connecter</a>
                                        </div>
                                    </div>
                                    <p class="mt-3" style="font-size:13px;opacity:0.6;">
                                        Créez un compte pour recevoir nos dernières nouveautés !
                                    </p>
                                </div>
                            </div>
                            <div data-nav-dropdown="langueandcurrency" class="nav-dropdown d-inline-block">
                                <a href="#" class="nav-dropdown-btn text-left d-inline-block top-nav-link">
                                    <span class="d-block">Français
                                        <span class="material-icons">
                                        keyboard_arrow_down
                                        </span>
                                    </span>
                                    <span>Dhs <span class="mx-2">/</span> <img src="{{ asset('img/flag-ma.svg') }}" width="15px"> </span>
                                </a>
                                <div class="nav-dropdown-body text-center p-3 centered bottom-card" style="right:-100px;left:-100px;">
                                    <h6>Langue et monnaie</h6>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="text-left d-md-inline-block top-nav-link pt-2 mx-3 d-none wish" data-wish="0">
                            <span>
                                <svg version="1.1" style="width:100%px;height:30px;" fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M472.208,201.712c9.271-9.037,12.544-22.3,8.544-34.613c-4.001-12.313-14.445-21.118-27.257-22.979l-112.03-16.279
                                                c-2.199-0.319-4.1-1.7-5.084-3.694L286.28,22.632c-5.729-11.61-17.331-18.822-30.278-18.822c-12.947,0-24.549,7.212-30.278,18.822
                                                l-50.101,101.516c-0.985,1.993-2.885,3.374-5.085,3.694L58.51,144.12c-12.812,1.861-23.255,10.666-27.257,22.979
                                                c-4.002,12.313-0.728,25.576,8.544,34.613l81.065,79.019c1.591,1.552,2.318,3.787,1.942,5.978l-19.137,111.576
                                                c-2.188,12.761,2.958,25.414,13.432,33.024c10.474,7.612,24.102,8.595,35.56,2.572l100.201-52.679
                                                c1.968-1.035,4.317-1.035,6.286,0l100.202,52.679c4.984,2.62,10.377,3.915,15.744,3.914c6.97,0,13.896-2.184,19.813-6.487
                                                c10.474-7.611,15.621-20.265,13.432-33.024l-19.137-111.576c-0.375-2.191,0.351-4.426,1.942-5.978L472.208,201.712z
                                                M362.579,291.276l19.137,111.578c0.64,3.734-1.665,5.863-2.686,6.604c-1.022,0.74-3.76,2.277-7.112,0.513l-100.202-52.679
                                                c-4.919-2.585-10.315-3.879-15.712-3.879c-5.397,0-10.794,1.294-15.712,3.878l-100.201,52.678
                                                c-3.354,1.763-6.091,0.228-7.112-0.513c-1.021-0.741-3.327-2.87-2.686-6.604l19.137-111.576
                                                c1.879-10.955-1.75-22.127-9.711-29.886l-81.065-79.019c-2.713-2.646-2.099-5.723-1.708-6.923
                                                c0.389-1.201,1.702-4.052,5.451-4.596l112.027-16.279c10.999-1.598,20.504-8.502,25.424-18.471l50.101-101.516
                                                c1.677-3.397,4.793-3.764,6.056-3.764c1.261,0,4.377,0.366,6.055,3.764v0.001l50.101,101.516
                                                c4.919,9.969,14.423,16.873,25.422,18.471l112.029,16.279c3.749,0.544,5.061,3.395,5.451,4.596
                                                c0.39,1.201,1.005,4.279-1.709,6.923l-81.065,79.019C364.329,269.149,360.7,280.321,362.579,291.276z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M413.783,22.625c-6.036-4.384-14.481-3.046-18.865,2.988l-14.337,19.732c-4.384,6.034-3.047,14.481,2.988,18.865
                                                c2.399,1.741,5.176,2.58,7.928,2.58c4.177,0,8.295-1.931,10.937-5.567l14.337-19.732
                                                C421.155,35.456,419.818,27.009,413.783,22.625z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M131.36,45.265l-14.337-19.732c-4.383-6.032-12.829-7.37-18.865-2.988c-6.034,4.384-7.372,12.831-2.988,18.865
                                                l14.337,19.732c2.643,3.639,6.761,5.569,10.939,5.569c2.753,0,5.531-0.839,7.927-2.581C134.407,59.747,135.745,51.3,131.36,45.265
                                                z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M49.552,306.829c-2.305-7.093-9.924-10.976-17.019-8.671l-23.197,7.538c-7.095,2.305-10.976,9.926-8.671,17.019
                                                c1.854,5.709,7.149,9.337,12.842,9.337c1.383,0,2.79-0.215,4.177-0.666l23.197-7.538
                                                C47.975,321.543,51.857,313.924,49.552,306.829z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M256.005,456.786c-7.459,0-13.506,6.047-13.506,13.506v24.392c0,7.459,6.047,13.506,13.506,13.506
                                                c7.459,0,13.506-6.047,13.506-13.506v-24.392C269.511,462.832,263.465,456.786,256.005,456.786z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M502.664,305.715l-23.197-7.538c-7.092-2.303-14.714,1.577-17.019,8.672c-2.305,7.095,1.576,14.714,8.671,17.019
                                                l23.197,7.538c1.387,0.45,2.793,0.664,4.176,0.664c5.694,0,10.989-3.629,12.843-9.337
                                                C513.64,315.639,509.758,308.02,502.664,305.715z"/>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                        </a>
                        <a href="#" class="text-left d-md-inline-block top-nav-link pt-2 d-none shopping-cart" data-shopping-cart="0">
                            <span>
                                <svg version="1.1" style="width:100%px;height:30px;" fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M143.022,347.67h16.287h277.692c6.71,0,12.622-4.408,14.538-10.839l59.829-200.888c1.367-4.59,0.485-9.556-2.377-13.396
                                                    c-2.863-3.84-7.371-6.102-12.16-6.102H110.789l-20.412-68.54c-1.915-6.43-7.828-10.838-14.538-10.838H15.169
                                                    C6.792,37.066,0,43.857,0,52.235c0,8.377,6.792,15.169,15.169,15.169H64.53l20.315,68.211c0.062,0.225,0.127,0.448,0.199,0.668
                                                    l53.966,181.202c-30.804,2.072-55.237,27.778-55.237,59.098c0,32.67,26.579,59.249,59.248,59.249h15.059
                                                    c6.581,22.563,27.437,39.102,52.097,39.102c24.659,0,45.516-16.538,52.097-39.102h80.482
                                                    c6.581,22.563,27.437,39.102,52.097,39.102c24.659,0,45.516-16.538,52.097-39.102h19.543c8.377,0,15.169-6.792,15.169-15.169
                                                    c0-8.377-6.792-15.169-15.169-15.169h-19.543c-6.581-22.564-27.437-39.102-52.097-39.102c-24.66,0-45.517,16.538-52.097,39.102
                                                    h-80.482c-6.581-22.564-27.437-39.102-52.097-39.102c-24.66,0-45.517,16.538-52.097,39.102h-15.059
                                                    c-15.942,0-28.911-12.97-28.911-28.912C114.11,360.64,127.08,347.67,143.022,347.67z M365.546,146.781h110.941l-20.88,70.107
                                                    h-90.061V146.781z M365.545,247.226h81.026l-20.879,70.107h-60.147V247.226z M253.304,146.781h81.905v70.107h-81.905V146.781z
                                                        M253.303,247.226h81.905v70.107h-81.905V247.226z M222.968,317.333L222.968,317.333h-52.349l-20.879-70.107h73.228V317.333z
                                                        M119.826,146.781h103.141v70.107h-82.262L119.826,146.781z M394.854,396.729c13.197,0,23.933,10.736,23.933,23.933
                                                    s-10.736,23.933-23.933,23.933s-23.933-10.736-23.933-23.933S381.657,396.729,394.854,396.729z M210.178,396.729
                                                    c13.197,0,23.933,10.736,23.933,23.933s-10.736,23.933-23.933,23.933s-23.933-10.736-23.933-23.933
                                                    S196.981,396.729,210.178,396.729z"/>
                                            </g>
                                        </g>
                                </svg>
                            </span>
                        </a>
                        <div class="text-right d-md-none d-block mobile-btn ml-auto">
                            <a class="d-inline-block pt-2" href="#">
                                <span class="material-icons">
                                    menu
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <line-loader :loading="this.loading"></line-loader>
            </div>
            <div id="fake-top-navbar">
            </div>
            <div id="second-nav" class="bg-dark text-white">
                <div class="container">
                    <div class="row">
                        <div class="col-25 pl-0">
                            <a class="categories-btn" href="#">
                                Catégories
                                <span class="material-icons correct-icon-align float-right">
                                    keyboard_arrow_right
                                </span>
                            </a>
                        </div>
                        <div class="col p-2 pr-0">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href=""><span class="material-icons correct-icon-align">security</span> Protection de l'acheteur</a>
                                    <a href=""><span class="material-icons correct-icon-align">card_giftcard</span> Bon d'achat</a>
                                </div>
                                <div>
                                    <a href=""><span class="material-icons correct-icon-align">apps</span> Application Mobile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="home-face">
                <div style="background-color:#B59D74;">
                    <div class="container">
                        <div class="row pb-5 d-none d-lg-flex">
                            <div class="col-25 px-0">
                                <div class="home-card bg-white h-100">
                                    <h4 class="px-3 pt-3 font-weight-bold pb-1">Catégories</h4>
                                    <div class="category-section">
                                        <a class="category-item" href="#">
                                            <span class="material-icons">
                                            checkroom
                                            </span>
                                            Vetements
                                            <span class="material-icons float-right">
                                                keyboard_arrow_right
                                            </span>
                                        </a>
                                        <div class="category-contain p-3">
                                            <div class="row">
                                                <div class="col-4">
                                                    <h5 class="px-3 pt-3 font-weight-bold pb-1">Vetements</h5>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <h5 class="px-3 pt-3 font-weight-bold pb-1">Vetements</h5>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                </div>
                                                <div class="col-4">
                                                    <h5 class="px-3 pt-3 font-weight-bold pb-1">Vetements</h5>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <h5 class="px-3 pt-3 font-weight-bold pb-1">Vetements</h5>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                </div>
                                                <div class="col-4">
                                                    <h5 class="px-3 pt-3 font-weight-bold pb-1">Vetements</h5>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <h5 class="px-3 pt-3 font-weight-bold pb-1">Vetements</h5>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="category-section">
                                        <a class="category-item" href="#">
                                            <span class="material-icons">
                                            checkroom
                                            </span>
                                            Vetements
                                            <span class="material-icons float-right">
                                                keyboard_arrow_right
                                            </span>
                                        </a>
                                        <div class="category-contain p-3">
                                            <div class="row">
                                                <div class="col-4">
                                                    <h5 class="px-3 pt-3 font-weight-bold pb-1">Vetements2</h5>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <h5 class="px-3 pt-3 font-weight-bold pb-1">Vetements2</h5>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                </div>
                                                <div class="col-4">
                                                    <h5 class="px-3 pt-3 font-weight-bold pb-1">Vetements2</h5>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <h5 class="px-3 pt-3 font-weight-bold pb-1">Vetements2</h5>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                </div>
                                                <div class="col-4">
                                                    <h5 class="px-3 pt-3 font-weight-bold pb-1">Vetements2</h5>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <h5 class="px-3 pt-3 font-weight-bold pb-1">Vetements2</h5>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                    <a class="d-block px-3" href="">Test</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="category-item" href="#">
                                        <span class="material-icons">
                                        checkroom
                                        </span>
                                        Nourriture
                                        <span class="material-icons float-right">
                                            keyboard_arrow_right
                                        </span>
                                    </a>
                                    <a class="category-item" href="#">
                                        <span class="material-icons">
                                            construction
                                        </span>
                                        Vetements
                                        <span class="material-icons float-right">
                                            keyboard_arrow_right
                                        </span>
                                    </a>
                                    <a class="category-item" href="#">
                                        <span class="material-icons">
                                        checkroom
                                        </span>
                                        Vetements
                                        <span class="material-icons float-right">
                                            keyboard_arrow_right
                                        </span>
                                    </a>
                                    <a class="category-item" href="#">
                                        <span class="material-icons">
                                            construction
                                        </span>
                                        Vetements
                                        <span class="material-icons float-right">
                                            keyboard_arrow_right
                                        </span>
                                    </a>
                                    <a class="category-item" href="#">
                                        <span class="material-icons">
                                        checkroom
                                        </span>
                                        Vetements
                                        <span class="material-icons float-right">
                                            keyboard_arrow_right
                                        </span>
                                    </a>
                                    <a class="category-item" href="#">
                                        <span class="material-icons">
                                            construction
                                        </span>
                                        Vetements
                                        <span class="material-icons float-right">
                                            keyboard_arrow_right
                                        </span>
                                    </a>
                                    <a class="category-item" href="#">
                                        <span class="material-icons">
                                        checkroom
                                        </span>
                                        Autres
                                        <span class="material-icons float-right">
                                            keyboard_arrow_right
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col pt-3 px-3 pr-0">
                                <div class="home-slider-section">
                                    <div class="home-slider-relative">
                                        <div id="home-slider" class="container swiper-container">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide" icon="checkroom" theme="light">
                                                    <a href="/">
                                                        <img src="https://imgaz.staticbg.com/banggood/os/202101/20210105220237_821.jpg.webp" class="slide-background" alt="">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide" icon="construction" theme="dark">
                                                    <a href="/">
                                                        <img src="https://via.placeholder.com/784x432/GF0000/FFFFFF?Text=ecommerce" class="slide-background" alt="">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide" icon="business_center" theme="light">
                                                    <a href="/">
                                                        <img src="https://via.placeholder.com/784x432/GF0000/FFFFFF?Text=ecommerce" class="slide-background" alt="">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide" icon="local_florist" theme="dark">
                                                    <a href="/">
                                                        <img src="https://via.placeholder.com/784x432/GF0000/FFFFFF?Text=ecommerce" class="slide-background" alt="">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide" icon="fastfood" theme="dark">
                                                    <a href="/">
                                                        <img src="https://via.placeholder.com/784x432/MF0000/FFFFFF?Text=ecommerce" class="slide-background" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="home-slider-pagination" class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 pt-3 px-0">
                                <div class="home-card bg-white h-100">
                                    <h4 class="px-3 pt-3 font-weight-bold pb-1">Inf</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.BgSwitcher/0.4.3/jquery.bgswitcher.min.js" integrity="sha512-cwDh42ooq48+o2kkbsn72Kwd9/Ghc34d48DFlNfOCRFJ1dM6EeIFs9d7PIBa4SSv6enwQAYmxsLZGgKOV0yE1A==" crossorigin="anonymous"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    </body>
</html>
