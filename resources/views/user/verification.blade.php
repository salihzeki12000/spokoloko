@extends('user.layouts.user')

@section('user_content')
    <div class="typo-header-sq">
        <div class="ui grid">
            <div class="row">
                {{--@if (session('status'))
                    <div class="ui positive message transition hidden">
                        <i class="close icon"></i>

                        <p>{{ session('status') }}</p>
                    </div>

                @endif--}}


                <div class="ui twelve wide computer column">
                    <h2>{{ __('Mój Profil') }}</h2>
                </div>

                <div class="ui twelve wide tablet eight wide computer eight wide widescreen eight wide large screen column">
                    <ul class="inline-menu-sq list-default-sq list-style-inline-sq">
                        <li class="">
                            <a href="{{ route('profile') }}">{{ __('Edytuj profil') }}</a>
                        </li>
                        <li class="active">
                            <a href="">{{ __('Weryfikacja') }}</a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </div>

    <form method="POST" id="formUpdate" action="{{ route('profile.update') }}">
        @csrf
    </form>

        <div class="ui grid">
            <div class="row">



                <div class="ui twelve wide tablet twelve wide computer twelve wide widescreen twelve wide large screen column">
                    <hr>
                </div>

                <div class="ui twelve wide tablet six wide computer six wide widescreen six wide large screen column">
                    <br>
                    <strong>Change E-mail adress</strong>
                    <p>You can renew the e-mail account adress.</p>

                    <a href="" class="button-sq small-sq see-through-sq modal-ui-trigger" data-trigger-for="login">Change Email</a>

                </div>

                <div class="ui twelve wide tablet six wide computer six wide widescreen six wide large screen column">
                    <br>
                    <strong>Change Password</strong>
                    <p>You can renew the password account adress.</p>

                    <a href="" class="button-sq small-sq see-through-sq modal-ui-trigger" data-trigger-for="login">Change Password</a>

                </div>

                <div class="ui twelve wide tablet twelve wide computer twelve wide widescreen twelve wide large screen column">
                    <br>
                    <hr class="margin-null-sq">
                    <br>
                </div>

                <div class="ui twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">
                    <div class="div-c">
                        <div class="divided-column">
                            <label>{{ __('Adres') }}</label>
                            <input type="text" name="address" class="{{ $errors->has('address') ? 'has-error' : '' }}" placeholder="{{ __('Wpisz adres') }}" value="{{ Auth::user()->address }}">
                            @if ($errors->has('address'))
                                <small class="small-display-has-error">{{ $errors->first('address') }}</small>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="ui twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">
                    <div class="div-c">
                        <div class="divided-column">
                            <label>{{ __('Telefon') }}</label>
                            <input type="text" placeholder="" value="{{ Auth::user()->phone }}"
                                   style="background-color: #d4d4d4" disabled>
                            <small style="font-size: 12px;">{{ __('W celu zmiany telefonu przejdź do rożdziału Weryfikacja') }}</small>
                        </div>
                    </div>
                </div>

                <div class="ui twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">
                    <div class="div-c">
                        <label>{{ __('Data urodzenia') }}</label>
                        <div class="divided-column">
                            <div id="mycalendar" class="calendar-sq">
                                <input type="text" name="birthday" class="{{ $errors->has('birthday') ? 'has-error' : '' }}" value="{{ Auth::user()->birthday }}" placeholder="Wybierz datę">
                                @if ($errors->has('birthday'))
                                    <small class="small-display-has-error">{{ $errors->first('birthday') }}</small>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ui twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">
                    <div class="div-c">
                        <div class="divided-column">
                            <label>{{ __('Płeć') }}</label>
                            <select name="sex" class="dropdown {{ $errors->has('sex') ? ' has-error' : '' }}">
                                <option value="">{{ __('Wybierz z listy') }}</option>
                                <option value="Male" {{ (Auth::user()->sex == 'Male') ? ' selected="selected"' : '' }}>{{ __('Mężczyzna') }}</option>
                                <option value="Female" {{ (Auth::user()->sex == 'Female') ? ' selected="selected"' : '' }}>{{ __('Kobieta') }}</option>
                            </select>
                            @if ($errors->has('sex'))
                                <small class="small-display-has-error">{{ $errors->first('sex') }}</small>
                            @endif
                        </div>

                    </div>
                </div>

                <div class="ui twelve wide tablet twelve wide computer twelve wide widescreen twelve wide large screen column">
                    <div class="div-c">
                        <div class="divided-column">
                            <label>{{ __('O mnie') }}</label>
                            <textarea name="about" class="{{ $errors->has('about') ? 'has-error' : '' }}" cols="30" rows="5" placeholder="{{ __('Wpisz informację o sobie...') }}">{{ Auth::user()->about }}</textarea>
                            @if ($errors->has('about'))
                                <small class="small-display-has-error">{{ $errors->first('about') }}</small>
                            @endif
                            <small style="font-size: 12px; line-height: 0;">
                                Pomóż organizatorom wydarzeń poznać Ciebie.<br>
                                Powiedz im o rzeczach, które lubisz: Jakie są Twoje hobby? Czy pasjonujesz się
                                wydarzeniami i hostingiem? Udostępnij swoją ulubioną muzykę, jedzenie, książki, artystów
                                itp.
                            </small>
                        </div>

                    </div>
                </div>


                <div class="ui twelve wide tablet twelve wide computer twelve wide widescreen twelve wide large screen column">
                    <br>
                    <hr>
                    <br>
                </div>

                <div class="ui twelve wide tablet twelve wide computer twelve wide widescreen twelve wide large screen column">
                    <strong>{{ __('Praca') }}</strong>
                    <br>
                    <br>

                    <div class="div-c">
                        <div class="divided-column">
                            <label>{{ __('Firma') }}</label>
                            <input type="text" name="company" class="{{ $errors->has('company') ? 'has-error' : '' }}" placeholder="{{ __('Wpisz firmę w której pracujesz') }}" value="{{ Auth::user()->company }}">
                            @if ($errors->has('company'))
                                <small class="small-display-has-error">{{ $errors->first('company') }}</small>
                            @endif
                        </div>
                    </div>

                    <div class="div-c">
                        <div class="divided-column">
                            <label>{{ __('Stanowisko') }}</label>
                            <input type="text" name="job_title" class="{{ $errors->has('job_title') ? 'has-error' : '' }}" placeholder="{{ __('Wpisz stanowisko na którym pracujesz') }}"
                                   value="{{ Auth::user()->job_title }}">
                            @if ($errors->has('job_title'))
                                <small class="small-display-has-error">{{ $errors->first('job_title') }}</small>
                            @endif
                        </div>
                    </div>
                    <br>
                    <button type="submit">{{ __('Zapisz') }}</button>

                    <br>
                    <br>
                    <br>
                    <br>


                </div>


            </div>
        </div>












@endsection