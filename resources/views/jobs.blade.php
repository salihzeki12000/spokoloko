@extends('layouts.app')

@section('content')
    <div class="ui layout">
        <div class="promo-section" style="max-height: 600px;">

            <!-- content -->
            <div class="ui container grid centered">
                <div class="row">
                    <div class="ui twelve wide mobile ten wide tablet eight wide computer six wide large screen six wide widescreen column">
                        <div class="promo-content style-02" style="background-color: rgba(255,140,0,0.9); borderborder-radius: 30px;">
                            <h2>Dołącz do naszej ekipy
                            </h2>
                            <p>Jesteśmy prężnie rozwijającą się firmą ciągle poszukującą młode talenty.</p>

                            <a href="/b2b" class="button-sq see-through-sq"> Wyślij CV </a>

                        </div>

                    </div>
                </div>
            </div>

            <!-- picture -->
            <div class="image-wrapper">
                <div class="image-inner">
                    <img class="image-sq" src="new-assets/images/promo_section/promo_section_04.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="ui centered grid container" >


            <div class="row become-dashboard-description">
                <div class="ui twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">


                    <div class="become-dashboard-inner">
                        <h3 style="padding-bottom: 20px">Zwiększaj uznawalność</h3>
                        <p>Spokoloko to pierwszy portal w Polsce poswiecony organizatoram i organizacj eventów. Znajdując pokazujesz że jesteś czlonkiem naszej ekipy. </p>
                        <p>Średnio twoją ofertę zauwarzy 10.000 odbiorców miesięcznie. </p>
                        <p>Każda oferta w naszym serwisie uczestniczy w kompanii marketingowej SMM/SEO co pozytywnie wpływa na uznowalność brandu na rynkie </p>
                    </div>


                </div>

                <div class="ui twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">

                    <div class="image-full-height">
                        <div class="image-wrapper">
                            <div class="image-inner">
                                <img  src="new-assets/images/host/host_01.jpg" alt="" class="image-sq">
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <h3 style="padding-bottom: 20px;">Poszukujemy ludzi na następne stanowiska:</h3>

            <div class="ui three stackable cards" style="padding-bottom: 40px;">
                <div class="ui card">


                    <div class="content">
                        <a class="header">Junior iOS developer</a>
                        <div class="meta">
                            <span class="date">Do 23.05.2017</span>
                        </div>
                        <div class="description">
                            Swift, Linux, MacOS, Database
                        </div>
                    </div>
                    <div class="extra content">
                        <a>
                            <i class="user icon"></i>
                            do 12.000 zł brutto
                        </a>
                    </div>
                    <div class="ui bottom attached button" style="padding-bottom: 20px;">
                        <a href="" class="button-sq">Aplikuj</a>
                    </div>
                </div>

                <div class="ui card">


                    <div class="content">
                        <a class="header">Mid iOS developer</a>
                        <div class="meta">
                            <span class="date">Do 23.05.2017</span>
                        </div>
                        <div class="description">
                            Swift, Linux, MacOS, Database
                        </div>
                    </div>
                    <div class="extra content">
                        <a>
                            <i class="user icon"></i>
                            do 12.000 zł brutto
                        </a>
                    </div>
                    <div class="ui bottom attached button" style="padding-bottom: 20px;">
                        <a href="" class="button-sq">Aplikuj</a>
                    </div>
                </div>

                <div class="ui card">


                    <div class="content">
                        <a class="header">Senior iOS developer</a>
                        <div class="meta">
                            <span class="date">Do 23.05.2017</span>
                        </div>
                        <div class="description">
                            Swift, Linux, MacOS, Database
                        </div>
                    </div>
                    <div class="extra content">
                        <a>
                            <i class="user icon"></i>
                            do 12.000 zł brutto
                        </a>
                    </div>
                    <div class="ui bottom attached button" style="padding-bottom: 20px;">
                        <a href="" class="button-sq">Aplikuj</a>
                    </div>
                </div>


                <div class="become-dashboard-inner">
                    <h3 style="padding-bottom: 20px">Zwiększaj uznawalność</h3>
                    <p>Spokoloko to pierwszy portal w Polsce poswiecony organizatoram i organizacj eventów. Znajdując pokazujesz że jesteś czlonkiem naszej ekipy. </p>
                    <p>Średnio twoją ofertę zauwarzy 10.000 odbiorców miesięcznie. </p>
                    <p>Każda oferta w naszym serwisie uczestniczy w kompanii marketingowej SMM/SEO co pozytywnie wpływa na uznowalność brandu na rynkie </p>
                </div>




            </div>



        </div>
    </div>
    <div class="fb-customerchat"
         logged_in_greeting="Potrzebujesz pomocy? Napisz do nas!"
         logged_out_greeting="Potrzebujesz pomocy? Zaloguj się i napisz do nas!"
         theme_color="#f57C00" page_id="451368201896328">
    </div>
@endsection