<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/vue-agile/dist/VueAgile.css">


        <!-- Styles -->
        <style>
             /* #Mega Menu Styles
            –––––––––––––––––––––––––––––––––––––––––––––––––– */
            .mega-menu {
                display: none;
                left: 0;
                position: absolute;
                text-align: left;
                width: 100%;
                z-index: 20;
            }



            /* #hoverable Class Styles
            –––––––––––––––––––––––––––––––––––––––––––––––––– */
            .hoverable {
                position: static;
            }

            .hoverable > a:after {
                content: "\25BC";
                font-size: 10px;
                padding-left: 6px;
                position: relative;
                top: -1px;
            }

            .hoverable:hover .mega-menu {
                display: block;
            }


            /* #toggle Class Styles
            –––––––––––––––––––––––––––––––––––––––––––––––––– */

            .toggleable > label:after {
                content: "\25BC";
                font-size: 10px;
                padding-left: 6px;
                position: relative;
                top: -1px;
            }

            .toggle-input {
                display: none;
            }
            .toggle-input:not(checked) ~ .mega-menu {
                display: none;
            }

            .toggle-input:checked ~ .mega-menu {
                display: block;
            }

            .toggle-input:checked + label {
                color: white;
                background: #2c5282; /*@apply bg-green-800 */
            }

            .toggle-input:checked ~ label:after {
                content: "\25B2";
                font-size: 10px;
                padding-left: 6px;
                position: relative;
                top: -1px;
            }


.carousel {
    position: relative;
    box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64);
}

.carousel-inner {
    position: relative;
    overflow: hidden;
    width: 100%;
}

.carousel-open:checked + .carousel-item {
    position: static;
    opacity: 100;
}

.carousel-item {
    position: absolute;
    opacity: 0;
    -webkit-transition: opacity 0.6s ease-out;
    transition: opacity 0.6s ease-out;
}

.carousel-item img {
    display: block;
    max-width: 100%;
    height: 500px;
    width: 100%;
    object-fit: cover;
}

.carousel-control {
    background: rgba(0, 0, 0, 0.28);
    border-radius: 50%;
    color: #fff;
    cursor: pointer;
    display: none;
    font-size: 40px;
    height: 40px;
    line-height: 35px;
    position: absolute;
    top: 50%;
    -webkit-transform: translate(0, -50%);
    cursor: pointer;
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%);
    text-align: center;
    width: 40px;
    z-index: 10;
}

.carousel-control.prev {
    left: 2%;
}

.carousel-control.next {
    right: 2%;
}

.carousel-control:hover {
    background: rgba(0, 0, 0, 0.8);
    color: #aaaaaa;
}

#carousel-1:checked ~ .control-1,
#carousel-2:checked ~ .control-2,
#carousel-3:checked ~ .control-3 {
    display: block;
}

.carousel-indicators {
    list-style: none;
    margin: 0;
    padding: 0;
    position: absolute;
    bottom: 2%;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 10;
}

.carousel-indicators li {
    display: inline-block;
    margin: 0 5px;
}

.carousel-bullet {
    color: #fff;
    cursor: pointer;
    display: block;
    font-size: 35px;
}

.carousel-bullet:hover {
    color: #aaaaaa;
}

#carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
#carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
#carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
    color: #428bca;
}

#title {
    width: 100%;
    position: absolute;
    padding: 0px;
    margin: 0px auto;
    text-align: center;
    font-size: 27px;
    color: rgba(255, 255, 255, 1);
    font-family: 'Open Sans', sans-serif;
    z-index: 9999;
    text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.33), -1px 0px 2px rgba(255, 255, 255, 0);
}

        </style>
    </head>
    <body>
        <nav class="relative bg-white border-b-2 border-gray-300 text-gray-900">
            <div class="container mx-auto flex justify-between">
              <div class="relative block p-4 lg:p-6 text-xl text-green-600 font-bold">City of Borongan</div>
              <ul class="flex">

                <!--Regular Link-->
                <li class="hover:bg-green-800 hover:text-white">
                  <a href="#" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">Home</a>
                </li>

                    <!--Hoverable Link-->
                    <li class="hoverable hover:bg-green-800 hover:text-white">
                      <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold hover:bg-green-800 hover:text-white">City Profile</a>
                      <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-green-800">
                        <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                            <div class="flex items-center py-3">
                              <svg class="h-6 pr-3 fill-current text-green-300"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                              </svg>
                              <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">History</a>
                            </div>
                            <div class="flex items-center py-3">
                                <svg class="h-6 pr-3 fill-current text-green-300"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                </svg>
                                <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Mission and Vision</a>
                            </div>
                            <div class="flex items-center py-3">
                                <svg class="h-6 pr-3 fill-current text-green-300"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                </svg>
                                <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Hymn</a>
                            </div>
                            <div class="flex items-center py-3">
                                <svg class="h-6 pr-3 fill-current text-green-300"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                </svg>
                                <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Visit Borongan City</a>
                            </div>
                          </ul>
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                            <div class="flex items-center py-3">
                              <svg class="h-6 pr-3 fill-current text-green-300"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                              </svg>
                              <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                            </div>
                            <div class="flex items-center py-3">
                              <svg class="h-6 pr-3 fill-current text-green-300"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                              </svg>
                              <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                            </div>
                            <div class="flex items-center py-3">
                              <svg class="h-6 pr-3 fill-current text-green-300"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                              </svg>
                              <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                            </div>
                          </ul>
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                            <div class="flex items-center py-3">
                              <svg class="h-6 pr-3 fill-current text-green-300"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                              </svg>
                              <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                            </div>
                            <div class="flex items-center py-3">
                              <svg class="h-6 pr-3 fill-current text-green-300"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                              </svg>
                              <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                            </div>
                            <div class="flex items-center py-3">
                              <svg class="h-6 pr-3 fill-current text-green-300"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                              </svg>
                              <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                            </div>
                          </ul>
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 pb-6 pt-6 lg:pt-3">
                            <div class="flex items-center py-3">
                              <svg class="h-6 pr-3 fill-current text-green-300"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                              </svg>
                              <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                            </div>
                            <div class="flex items-center py-3">
                              <svg class="h-6 pr-3 fill-current text-green-300"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                              </svg>
                              <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                            </div>
                            <div class="flex items-center py-3">
                              <svg class="h-6 pr-3 fill-current text-green-300"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                              </svg>
                              <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                            </div>
                          </ul>
                        </div>
                      </div>
                    </li>


                    <!--Hoverable Link-->
                    <li class="hoverable hover:bg-green-800 hover:text-white">
                        <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold hover:bg-green-800 hover:text-white">City Officials</a>
                        <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-green-800">
                            <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-green-300"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">City Mayor Jose Dayan Agda</a>
                                </div>
                                <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-green-300"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">City Vice-mayor Emman Tiusonco</a>
                                </div>
                                <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-green-300"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">City Councilor Councilor 1</a>
                                </div>
                                <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-green-300"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">City Councilor Councilor 2</a>
                                </div>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center py-3">
                                <svg class="h-6 pr-3 fill-current text-green-300"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                </svg>
                                <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">City Councilor Councilor 3</a>
                                </div>
                                <div class="flex items-center py-3">
                                <svg class="h-6 pr-3 fill-current text-green-300"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                </svg>
                                <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">City Councilor Councilor 4</a>
                                </div>
                                <div class="flex items-center py-3">
                                <svg class="h-6 pr-3 fill-current text-green-300"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                </svg>
                                <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">City Councilor Councilor 5</a>
                                </div>
                                <div class="flex items-center py-3">
                                <svg class="h-6 pr-3 fill-current text-green-300"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                </svg>
                                <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">City Councilor Councilor 6</a>
                                </div>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center py-3">
                                <svg class="h-6 pr-3 fill-current text-green-300"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                </svg>
                                <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                                </div>
                                <div class="flex items-center py-3">
                                <svg class="h-6 pr-3 fill-current text-green-300"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                </svg>
                                <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                                </div>
                                <div class="flex items-center py-3">
                                <svg class="h-6 pr-3 fill-current text-green-300"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                </svg>
                                <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                                </div>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center py-3">
                                <svg class="h-6 pr-3 fill-current text-green-300"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                </svg>
                                <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                                </div>
                                <div class="flex items-center py-3">
                                <svg class="h-6 pr-3 fill-current text-green-300"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                </svg>
                                <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                                </div>
                                <div class="flex items-center py-3">
                                <svg class="h-6 pr-3 fill-current text-green-300"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                </svg>
                                <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                                </div>
                            </ul>
                            </div>
                        </div>
                    </li>


                    <li class="hover:bg-green-800 hover:text-white">
                        <a href="#" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">Barangays</a>
                    </li>

                    <li class="hover:bg-green-800 hover:text-white">
                        <a href="#" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">Tourism</a>
                    </li>

                    <li class="hover:bg-green-800 hover:text-white">
                        <a href="#" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">Jobs</a>
                    </li>

                    <li class="hoverable hover:bg-green-800 hover:text-white">
                            <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold hover:bg-green-800 hover:text-white">Another Dropdown</a>
                            <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-green-800">
                                <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                                <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                    <div class="flex items-center py-3">
                                        <svg class="h-6 pr-3 fill-current text-green-300"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                        </svg>
                                        <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                                    </div>
                                    <div class="flex items-center py-3">
                                        <svg class="h-6 pr-3 fill-current text-green-300"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                        </svg>
                                        <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                                    </div>
                                    <div class="flex items-center py-3">
                                        <svg class="h-6 pr-3 fill-current text-green-300"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                        </svg>
                                        <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                                    </div>
                                    <div class="flex items-center py-3">
                                        <svg class="h-6 pr-3 fill-current text-green-300"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                        </svg>
                                        <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                                    </div>
                                </ul>
                                <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                    <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-green-300"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                                    </div>
                                    <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-green-300"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                                    </div>
                                    <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-green-300"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                                    </div>
                                    <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-green-300"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                                    </div>
                                </ul>
                                <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                                    <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-green-300"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                                    </div>
                                    <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-green-300"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                                    </div>
                                    <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-green-300"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                                    </div>
                                </ul>
                                <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 pb-6 pt-6 lg:pt-3">
                                    <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-green-300"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                                    </div>
                                    <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-green-300"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                                    </div>
                                    <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-green-300"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-green-300 hover:text-green-300">Another Link</a>
                                    </div>
                                </ul>
                                </div>
                            </div>
                        </li>
                    <!-- ## Hoverable Link Template ##

                    <li class="hoverable hover:bg-green-800 hover:text-white"><a href="#" class="relative block">x</a><div class="mega-menu">
                      Add your mega menu content
                      </div></li>

                    -->
                  </ul>
                </div>
              </nav>

              {{-- Carousel --}}
                <div class="carousel">
                    <div class="carousel-inner">
                        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1506260408121-e353d10b87c7?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&w=1600&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ">
                        </div>
                        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1523712999610-f77fbcfc3843?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&w=1600&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ">
                        </div>
                        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1524260855046-f743b3cdad07?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&w=1600&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ">
                        </div>
                        <label for="carousel-3" class="carousel-control prev control-1">‹</label>
                        <label for="carousel-2" class="carousel-control next control-1">›</label>
                        <label for="carousel-1" class="carousel-control prev control-2">‹</label>
                        <label for="carousel-3" class="carousel-control next control-2">›</label>
                        <label for="carousel-2" class="carousel-control prev control-3">‹</label>
                        <label for="carousel-1" class="carousel-control next control-3">›</label>
                        <ol class="carousel-indicators">
                            <li>
                                <label for="carousel-1" class="carousel-bullet">•</label>
                            </li>
                            <li>
                                <label for="carousel-2" class="carousel-bullet">•</label>
                            </li>
                            <li>
                                <label for="carousel-3" class="carousel-bullet">•</label>
                            </li>
                        </ol>
                    </div>
                </div>


            {{-- News --}}

            <section class="bg-white py-8">
                <div class="w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
                    <div class="row">
                        <h3 class="text-xl text-green-800 font-bold leading-none ml-5">Borongan News</h3>
                    </div>
                    <!--Posts Container-->
                    <div class="flex flex-wrap justify-between -mx-auto">
                        <!--1/3 col -->
                        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                    <img src="https://source.unsplash.com/collection/225/800x600" class="h-64 w-full rounded-t pb-6">
                                    <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                                    <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
                                    <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                                    </p>
                                </a>
                            </div>
                            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                <div class="flex items-center justify-between">
                                    <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author" tabindex="0">
                                    <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
                                </div>
                            </div>
                        </div>


                        <!--1/3 col -->
                        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                    <img src="https://source.unsplash.com/collection/3106804/800x600" class="h-64 w-full rounded-t pb-6">
                                    <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                                    <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
                                    <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ip Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                                    </p>
                                </a>
                                </div>
                            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                <div class="flex items-center justify-between">
                                    <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author" tabindex="0">
                                    <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
                                </div>
                            </div>
                        </div>

                        <!--1/3 col -->
                        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                    <img src="https://source.unsplash.com/collection/539527/800x600" class="h-64 w-full rounded-t pb-6">
                                    <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                                    <div class="w-full  font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
                                    <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                        Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                                    </p>
                                </a>
                            </div>
                            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                <div class="flex items-center justify-between">
                                    <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author" tabindex="0">
                                    <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--/ Post Content-->

                </div>
            </section>


            {{-- Weather --}}
            <section class="bg-white py-8">
                <div class="w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
                    <!--Posts Container-->
                    <div class="flex flex-wrap justify-between -mx-auto">
                        <!--1/3 col -->
                        <div class="w-full md:w-1/5 p-6 flex flex-col flex-grow flex-shrink">
                            <h3 class="text-xl text-green-800 font-bold leading-none mb-3">Weather Update</h3>
                            <div class="flex-1 bg-white rounded-t text-center rounded-b-none overflow-hidden shadow-lg">
                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FPAGASA.DOST.GOV.PH&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="500" style="border:none;overflow:hidden;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                            </div>
                        </div>


                        <!--1/3 col -->
                        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                            <h3 class="text-xl text-green-800 font-bold leading-none mb-3">Announcements</h3>
                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                    <img src="https://source.unsplash.com/collection/3106804/800x600" class="h-64 w-full rounded-t pb-6">
                                    <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                                    <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
                                    <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ip Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                                    </p>
                                </a>
                                </div>
                            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                <div class="flex float-right">
                                    <a href="#" class="text-gray-600 text-xs md:text-sm">View all</a href="#">
                                </div>
                            </div>
                        </div>

                        <!--1/3 col -->
                        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                            <h3 class="text-xl text-green-800 font-bold leading-none mb-3">Invitation to Bid</h3>
                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                    <img src="https://source.unsplash.com/collection/539527/800x600" class="h-64 w-full rounded-t pb-6">
                                    <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                                    <div class="w-full  font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
                                    <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                        Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                                    </p>
                                </a>
                            </div>
                            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                <div class="flex float-right">
                                    <a href="#" class="text-gray-600 text-xs md:text-sm">View all</a href="#">
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--/ Post Content-->

                </div>
            </section>

            {{-- Message of the City Mayor --}}

            <!-- Change the colour #f8fafc to match the previous section colour -->
            <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
                        <g class="wave" fill="#48a269">
                            <path d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"></path>
                        </g>
                        <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
                            <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                                <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                                <path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
                                <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>

            <section class="container mx-auto py-6 mb-12">
                    <div class="md:flex">
                            <div class="md:flex-shrink-0">
                              <img class="rounded-lg" src="https://scontent.fceb1-1.fna.fbcdn.net/v/t1.15752-9/74677149_460517944568230_2603329392075603968_n.png?_nc_cat=107&_nc_oc=AQnhFGPnU4D5PqgwgMQaQNN5Zl5wmfF9WNCaP7-cW6uC6b6zki9HQl2KK_OBdiRBfu0&_nc_ht=scontent.fceb1-1.fna&oh=ec0773aa29b3c07ac86dddd334e659c1&oe=5E602FFC" alt="#" style="height: 250px;">
                            </div>
                            <div class="mt-4 md:mt-0 md:ml-6">
                              <div class="uppercase tracking-wide text-green-600 font-bold">Message of the City Mayor</div>
                              <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam hic, debitis suscipit ex blanditiis minima veritatis nesciunt ut ad sunt quaerat ratione consectetur quidem quasi placeat odit architecto dolorem incidunt?</p>
                              <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam hic, debitis suscipit ex blanditiis minima veritatis nesciunt ut ad sunt quaerat ratione consectetur quidem quasi placeat odit architecto dolorem incidunt? <a class="text-green-500 underline" href="#">Continue Reading </a></p> <span class="text-gray-600 text-xs md:text-sm">1 MIN READ</span>
                            </div>
                          </div>
            </section>

            <!--Footer-->
            <footer class="bg-white">
                <div class="container mx-auto  px-8">

                    <div class="w-full flex flex-col md:flex-row py-6">

                        <div class="flex-1 mb-6">
                            <a class="text-green-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"  href="#">City of Borongan</a>
                        </div>


                        <div class="flex-1">
                            <p class="uppercase text-gray-500 md:mb-6">Links</p>
                            <ul class="list-reset mb-6">
                                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                    <a href="#" class="no-underline hover:underline text-gray-800 hover:text-green-500">FAQ</a>
                                </li>
                                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                    <a href="#" class="no-underline hover:underline text-gray-800 hover:text-green-500">Help</a>
                                </li>
                                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                    <a href="#" class="no-underline hover:underline text-gray-800 hover:text-green-500">Support</a>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-1">
                            <p class="uppercase text-gray-500 md:mb-6">Legal</p>
                            <ul class="list-reset mb-6">
                                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                    <a href="#" class="no-underline hover:underline text-gray-800 hover:text-green-500">Terms</a>
                                </li>
                                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                    <a href="#" class="no-underline hover:underline text-gray-800 hover:text-green-500">Privacy</a>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-1">
                            <p class="uppercase text-gray-500 md:mb-6">Social</p>
                            <ul class="list-reset mb-6">
                                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                    <a href="#" class="no-underline hover:underline text-gray-800 hover:text-green-500">Facebook</a>
                                </li>
                                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                    <a href="#" class="no-underline hover:underline text-gray-800 hover:text-green-500">Linkedin</a>
                                </li>
                                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                    <a href="#" class="no-underline hover:underline text-gray-800 hover:text-green-500">Twitter</a>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-1">
                            <p class="uppercase text-gray-500 md:mb-6">City of Borongan</p>
                            <ul class="list-reset mb-6">
                                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                    <a href="#" class="no-underline hover:underline text-gray-800 hover:text-green-500">Official Blog</a>
                                </li>
                                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                    <a href="#" class="no-underline hover:underline text-gray-800 hover:text-green-500">About Us</a>
                                </li>
                                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                    <a href="#" class="no-underline hover:underline text-gray-800 hover:text-green-500">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>

            <script src="{{ url('js/app.js') }}"></script>
            <script src="https://unpkg.com/vue-agile@1.0.5"></script>
            {{-- <script src="https://unpkg.com/vue-agile"></script> --}}

    </body>
</html>
