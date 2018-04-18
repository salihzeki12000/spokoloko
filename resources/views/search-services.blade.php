@extends('layouts.app')

@section('title', 'Wyszukiwanie usług')

@section('content')
    <header class="header-section mhs header-sticky header-isnt-tablet header-isnt-mobile">
        <div class="header-content">
            <div class="ui container grid">
                <div class="header-item header-left">
                </div>

                <div class="header-item header-center ">
                </div>

                <div class="header-item header-right flex-align-left flex-grow-true">

                    <!-- Mega Menu-->
                    <div class="item menu-default burger-mobile-modal burger-tablet-modal dropdown-fullwidth flex-grow-true"
                         data-burger="menu02">

                        <a href="" class="modal-trigger close-sq hamburger hamburger-spin item"
                           data-trigger-for="menu02">
                            <span class="hamburger-box">
                              <span class="hamburger-inner"></span>
                            </span>
                        </a>

                        <ul class="main-menu">

                            <li>
                                <div class="fltp item">
                                    <i class="icon icon-pickup-location"></i>
                                    <input type="text" value="" required>
                                    <label class="placeholder" data-big-placeholder="Pickup Location"
                                           data-little-placeholder="Pickup Location"></label>
                                </div>
                            </li>

                            <li>
                                <div class="fltp item">
                                    <i class="icon icon-return-location"></i>
                                    <input type="text" value="" required>
                                    <label class="placeholder" data-big-placeholder="Return Location"
                                           data-little-placeholder="Return Location"></label>
                                </div>
                            </li>

                            <li>

                                <div class="fltp item" id="rangestart">
                                    <input type="text" class="filter" value="" required placeholder="Enter Date">
                                    <label class="placeholder" data-big-placeholder="Check In Date"
                                           data-little-placeholder="Check In"></label>
                                </div>

                                <i class="icon icon-little-arrow item hidden-mobile hidden-tablet"></i>

                                <div class="fltp item" id="rangeend">
                                    <input type="text" class="filter" value="" required placeholder="Enter Date">
                                    <label class="placeholder" data-big-placeholder="Check Out Date"
                                           data-little-placeholder="Check Out"></label>
                                </div>

                            </li>

                            <li class="has-submenu has-megamenu open-inside-modal filters-dropdown overlay-dropdown">

                                <a href="#" class="item hidden-tablet hidden-mobile">
                                    <i class="icon icon-filter"></i>
                                    <span class="hidden-tablet">Filters</span>
                                </a>

                                <ul class="submenu megamenu">
                                    <li class="item">
                                        <div class="content">


                                            <div class="price-range-slider mobile-big">
                                                <a href="#" class="price-range-trigger" id="price-range-trigger"></a>

                                                <span class="price-range-placeholder hidden-desktop hidden-large-desktop">
												   <span>Price </span><span>Range</span>
											   </span>

                                                <div id="price-range-slider" class="price-range-slider-base"></div>
                                            </div>

                                            <div class="div-c inline-2">
                                                <div class="divided-column">
                                                    <label>Doors</label>
                                                    <select name="dropdown" class="dropdown item">
                                                        <option value="0">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select>
                                                </div>

                                                <div class="divided-column">
                                                    <label>Fuel</label>
                                                    <select name="dropdown" class="dropdown item">
                                                        <option value="0">Diesel</option>
                                                        <option value="1">Gas</option>
                                                        <option value="1">GPL</option>
                                                    </select>
                                                </div>


                                            </div>

                                            <hr>

                                            <div class="div-c inline-3">

                                                <div class="divided-column">
                                                    <label>Instant Booking</label>
                                                    <input type="checkbox" id="extra01">
                                                    <label for="extra01">Instant Booking</label>
                                                </div>
                                                <div class="divided-column">
                                                    <label>Super Host</label>
                                                    <input type="checkbox" id="extra02">
                                                    <label for="extra02">Super Host</label>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="div-c inline-3 one-label">
                                                <label>Car's features</label>
                                                <div class="divided-column">
                                                    <input type="checkbox" id="checkbox1">
                                                    <label for="checkbox1">A/C</label>
                                                </div>

                                                <div class="divided-column">
                                                    <input type="checkbox" id="checkbox2">
                                                    <label for="checkbox2">Bluetooth</label>
                                                </div>

                                                <div class="divided-column">
                                                    <input type="checkbox" id="checkbox3">
                                                    <label for="checkbox3">Heated Seats</label>
                                                </div>

                                                <div class="divided-column">
                                                    <input type="checkbox" id="checkbox4">
                                                    <label for="checkbox4">Automatic gearbox</label>
                                                </div>

                                                <div class="divided-column">
                                                    <input type="checkbox" id="checkbox5">
                                                    <label for="checkbox5">4 x 4</label>
                                                </div>


                                            </div>

                                            <hr>

                                            <div class="ui accordion more-sq">
                                                <div class="title">
                                                    <a class="accordion-trigger more-trigger" data-more="More"
                                                       data-less="Less">
                                                        <i class="icon icon-arrow-down-122"></i>
                                                    </a>

                                                    <div class="div-c inline-3 one-label">
                                                        <label>Host Language</label>
                                                        <div class="divided-column">
                                                            <input type="checkbox" id="lang1">
                                                            <label for="lang1">Afrikanns</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="lang2">
                                                            <label for="lang2">Albanian</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="lang3">
                                                            <label for="lang3">Arabic</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="lang4">
                                                            <label for="lang4">Armenian</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="lang5">
                                                            <label for="lang5">Basque</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="lang6">
                                                            <label for="lang6">Bengali</label>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="content">
                                                    <div class="div-c inline-3">
                                                        <div class="divided-column">
                                                            <input type="checkbox" id="lang7">
                                                            <label for="lang7">Bulgarian</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="lang8">
                                                            <label for="lang8">Catalan</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="lang9">
                                                            <label for="lang9">Cambodian</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="lang10">
                                                            <label for="lang10">Chinese (Mandarin)</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="lang11">
                                                            <label for="lang11">Croation</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="lang12">
                                                            <label for="lang12">Czech</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="div-c inline-3 one-label">
                                                <label>Car Rules</label>
                                                <div class="divided-column">
                                                    <input type="checkbox" id="rules01">
                                                    <label for="rules01">Pets allowed</label>
                                                </div>
                                                <div class="divided-column">
                                                    <input type="checkbox" id="rules02">
                                                    <label for="rules02">Smoking allowed</label>
                                                </div>
                                                <div class="divided-column">
                                                    <input type="checkbox" id="rules03">
                                                    <label for="rules03">Suitable for trips</label>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="footer">
                                            <div class="div-c inline-2">
                                                <div class="divided-column">
                                                    <div class="applied-filters">
                                                        <div class="filters-icon-container">
                                                            <i class="icon icon-filter"></i>
                                                        </div>
                                                        <a class="remove-all">
                                                            Remove All<i class="icon icon-close"></i>
                                                        </a>
                                                        <a class="">
                                                            Applied Filter<i class="icon icon-close"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="divided-column">
                                                    <a href=""
                                                       class="float-right-sq button-sq modal-button font-weight-bold-sq">Apply</a>

                                                    <a class="float-right-sq button-sq cancel-sq hidden-tablet hidden-mobile"
                                                       href="">Cancel</a>

                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                </ul>


                            </li>

                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </header>

    <div class="ui layout">
        <!-- grid -->
        <div class="ui grid container centered">


            <div class="switch-view-controller hidden-desktop hidden-large-desktop">

                <a href="" class="modal-trigger item hidden-desktop hidden-large-desktop" data-trigger-for="menu02">
                    <i class="icon icon-filter"></i>
                    <span>Filters</span>
                </a>
            </div>

            @for($i=0; $i<9; $i++)
                <div class="ui twelve wide mobile six wide tablet four wide computer column">
                    <div class="property-item caption-sq shadow-sq small-sq">
                        <div class="property-item-inner">

                            <div class="price-tag-sq">16 &euro; <span>/ hour</span></div>
                            <a class="add-wishlist modal-ui-trigger" href="" data-trigger-for="wishlist">
                                <i class="icon icon-add-wishlist"></i>
                            </a>

                            <a class="image-sq" href="{{ url('service') }}" target="_blank">
                                <div class="image-wrapper">
									<span class="image-inner">
										<img src="{{ asset('/images/venues/after-beng-club-3.jpg') }}" alt="" class="">
									</span>
                                </div>
                            </a>

                            <div class="main-details">
                                <div class="title-row">
                                    <a href="{{ url('service') }}" class="title-sq" target="_blank">VW Golf 7 1.6 TDI - DSG</a>
                                </div>

                                <div class="icons-row">
                                    <div class="icons-column">
                                        <i class="icon icon-heart"></i> 8.7
                                    </div>
                                    <div class="icons-column">
                                        <i class="icon icon-ac"></i> A/C
                                    </div>
                                    <div class="icons-column">
                                        <i class="icon icon-gearbox"></i> A
                                    </div>
                                    <div class="icons-column">
                                        <i class="icon icon-user-circle"></i> x 4
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endfor

        </div>
        <!--end ui container-->

    </div>
@endsection