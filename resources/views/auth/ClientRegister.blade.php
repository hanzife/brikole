@if (session()->has('id'))
<script>window.location = "/";</script>
@endif
@auth
<script>window.location = "/";</script>
@endauth
<!-- Master Header/Footer -->

@extends('layouts.master')

@section('content')
       <link rel="stylesheet" href="css/signupBrikoleur_1.css" />
        <title>Inscription Client</title>

        <!-- header -->
        <!-- ------ -->
        <div class="sb1-blank-51"></div>

        <div class="sb1-container">
            <div class="sb1-sub-container">
                <div><img src="images/logos/logo3.svg" alt="" /></div>
                <div class="sb1-title">Rejoignez-nous dès maintenant !</div>

                <!-- ACCOUNT TYPE -->
                <div class="sb1-accountType">
                    <a href="">
                        <div class="sb1-accountType-item">
                            <svg
                                width="45"
                                height="45"
                                viewBox="0 0 45 45"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <circle
                                    cx="22.5"
                                    cy="22.5"
                                    r="22.5"
                                    fill="#F7F7F8"
                                />
                                <path
                                    d="M32.5625 23.9167C32.5625 20.3639 30.3487 17.3239 27.2083 16.0533L25.375 19.6667V14.7083C25.375 14.5205 25.2993 14.3403 25.1645 14.2075C25.0297 14.0746 24.8469 14 24.6562 14H20.3438C20.1531 14 19.9703 14.0746 19.8355 14.2075C19.7007 14.3403 19.625 14.5205 19.625 14.7083V19.6667L17.7917 16.0533C14.6512 17.3239 12.4375 20.3639 12.4375 23.9167V26.75H32.5625V23.9167ZM33.2812 28.1667H11.7188C11.5281 28.1667 11.3453 28.2413 11.2105 28.3741C11.0757 28.507 11 28.6871 11 28.875V30.2917C11 30.4795 11.0757 30.6597 11.2105 30.7925C11.3453 30.9254 11.5281 31 11.7188 31H33.2812C33.4719 31 33.6547 30.9254 33.7895 30.7925C33.9243 30.6597 34 30.4795 34 30.2917V28.875C34 28.6871 33.9243 28.507 33.7895 28.3741C33.6547 28.2413 33.4719 28.1667 33.2812 28.1667Z"
                                    fill="#676878"
                                />
                            </svg>
                            <div>Brikoleur</div>
                        </div>
                    </a>
                    <div class="sb1-blank-53"></div>
                    <a href="">
                        <div
                            class="sb1-accountType-item sb1-accountType-item-active"
                        >
                            <svg
                                width="45"
                                height="45"
                                viewBox="0 0 45 45"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <circle
                                    cx="22.5"
                                    cy="22.5"
                                    r="22.5"
                                    fill="#F7F7F8"
                                />
                                <path
                                    d="M18.5 18.0263C18.5 20.2462 20.2947 22.0526 22.5 22.0526C24.7053 22.0526 26.5 20.2462 26.5 18.0263C26.5 15.8065 24.7053 14 22.5 14C20.2947 14 18.5 15.8065 18.5 18.0263ZM29.6111 31H30.5V30.1053C30.5 26.6525 27.708 23.8421 24.2778 23.8421H20.7222C17.2911 23.8421 14.5 26.6525 14.5 30.1053V31H29.6111Z"
                                    fill="#676878"
                                />
                            </svg>
                            <div>Particulier</div>
                        </div>
                    </a>
                    <div class="sb1-blank-53"></div>
                    <a href="">
                        <div class="sb1-accountType-item">
                            <svg
                                width="45"
                                height="45"
                                viewBox="0 0 46 45"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <circle
                                    cx="23"
                                    cy="22.5"
                                    r="22.5"
                                    fill="#F7F7F8"
                                />
                                <path
                                    d="M23 14C24.083 14 25.1216 14.4323 25.8874 15.2019C26.6531 15.9714 27.0833 17.0151 27.0833 18.1034C27.0833 19.1918 26.6531 20.2355 25.8874 21.005C25.1216 21.7746 24.083 22.2069 23 22.2069C21.917 22.2069 20.8784 21.7746 20.1126 21.005C19.3469 20.2355 18.9167 19.1918 18.9167 18.1034C18.9167 17.0151 19.3469 15.9714 20.1126 15.2019C20.8784 14.4323 21.917 14 23 14ZM14.8333 16.931C15.4867 16.931 16.0933 17.1069 16.6183 17.4234C16.4433 19.1 16.9333 20.7648 17.9367 22.0662C17.3533 23.1917 16.1867 23.9655 14.8333 23.9655C13.9051 23.9655 13.0148 23.595 12.3585 22.9353C11.7021 22.2757 11.3333 21.3811 11.3333 20.4483C11.3333 19.5154 11.7021 18.6208 12.3585 17.9612C13.0148 17.3016 13.9051 16.931 14.8333 16.931ZM31.1667 16.931C32.0949 16.931 32.9852 17.3016 33.6415 17.9612C34.2979 18.6208 34.6667 19.5154 34.6667 20.4483C34.6667 21.3811 34.2979 22.2757 33.6415 22.9353C32.9852 23.595 32.0949 23.9655 31.1667 23.9655C29.8133 23.9655 28.6467 23.1917 28.0633 22.0662C29.0805 20.7466 29.5527 19.0838 29.3817 17.4234C29.9067 17.1069 30.5133 16.931 31.1667 16.931ZM15.4167 28.9483C15.4167 26.5214 18.8117 24.5517 23 24.5517C27.1883 24.5517 30.5833 26.5214 30.5833 28.9483V31H15.4167V28.9483ZM9 31V29.2414C9 27.6117 11.205 26.24 14.1917 25.8414C13.5033 26.6386 13.0833 27.7407 13.0833 28.9483V31H9ZM37 31H32.9167V28.9483C32.9167 27.7407 32.4967 26.6386 31.8083 25.8414C34.795 26.24 37 27.6117 37 29.2414V31Z"
                                    fill="#676878"
                                />
                            </svg>
                            <div>Agence des Services</div>
                        </div>
                    </a>
                    <div class="sb1-blank-53"></div>
                    <a href="">
                        <div class="sb1-accountType-item">
                            <svg
                                width="46"
                                height="45"
                                viewBox="0 0 46 45"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <circle
                                    cx="23"
                                    cy="22.5"
                                    r="22.5"
                                    fill="#F7F7F8"
                                />
                                <path
                                    d="M31.1 17.5789H27.3V15.7895C27.3 14.7963 26.4545 14 25.4 14H21.6C20.5455 14 19.7 14.7963 19.7 15.7895V17.5789H15.9C14.8455 17.5789 14.0095 18.3753 14.0095 19.3684L14 29.2105C14 30.2037 14.8455 31 15.9 31H31.1C32.1545 31 33 30.2037 33 29.2105V19.3684C33 18.3753 32.1545 17.5789 31.1 17.5789ZM25.4 17.5789H21.6V15.7895H25.4V17.5789Z"
                                    fill="#676878"
                                />
                            </svg>
                            <div>Entreprise</div>
                        </div>
                    </a>
                </div>
                <!-- END ACCOUNT TYPE -->

                <div class="sb1-blank-51"></div>
                <div class="sb1-form">
                    <form id="form_clientsignup" method="POST" action="{{ route('registerclient') }}">
                        @csrf
                        <label for="sc-surname">Nom</label><br />
                        <input
                            type="text"
                            id="sc-surname"
                            name="nom"
                            required
                        /><br />

                        <div id="sc-surname-error" class="sb1-error"></div>
                        
                        <label for="">Prenom</label><br />
                        <input
                            type="text"
                            id=""
                            name="prenom"
                            required
                        /><br />

                        <div class="sb1-blank-20"></div>

                        <label for="sc-city">Ville</label><br />
                        <input
                            type="text"
                            id="sc-city"
                            name="lieu"
                            required
                        /><br />

                        <div class="sc-cities-list">
                            <div class="sc-city-select" tabindex="0">
                                Safi
                            </div>
                            <div class="sc-city-select" tabindex="0">
                                Marrakech
                            </div>
                            <div class="sc-city-select" tabindex="0">
                                CasaBlanca
                            </div>
                        </div>

                        <div id="sc-city-error" class="sb1-error"></div>

                        <div class="sb1-blank-20"></div>

                        <label for="sc-email">Email</label><br />
                        <input
                            type="text"
                            id="sc-email"
                            name="email"
                            required
                        /><br />

                        <div id="sc-email-error" class="sb1-error"></div>

                        <div class="sb1-blank-20"></div>


                        <label for="">Telephone</label><br />
                        <input
                            type="text"
                            id="sc-email"
                            name="telephone"
                            required
                        /><br />

                        <div class="sb1-blank-20"></div>

                        <label for="sc-pass">Mot de passe</label><br />
                        <input
                            type="password"
                            id="sc-pass"
                            name="mot_passe"
                            required
                        /><br />

                        <div id="sc-pass-error" class="sb1-error"></div>

                        <div class="sb1-blank-20"></div>

                        <label for="sc-confirm-pass">
                            Confirmation de mot de passe</label
                        ><br />
                        <input
                            type="password"
                            id="sc-confirm-pass"
                            name=""
                            required
                        /><br />

                        <div id="sc-confirm-error" class="sb1-error"></div>

                        <div class="sb1-blank-20"></div>

                        <div class="sb1-submit">
                            <button class="sb1-cancel" name="" id="sc-cancel">
                                Annuler
                            </button>
                            <div class="sb1-continue" name="" id="btn_clientsignup">
                                S'inscrire
                                <svg
                                    width="7"
                                    height="11"
                                    viewBox="0 0 7 11"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M0.341609 10.6775C0.122877 10.471 0 10.1909 0 9.89886C0 9.60681 0.122877 9.32672 0.341609 9.12018L4.18372 5.49335L0.341609 1.86652C0.129076 1.65879 0.0114735 1.38058 0.0141318 1.09181C0.0167902 0.803029 0.139496 0.52679 0.355821 0.322586C0.572146 0.118382 0.864782 0.00255103 1.1707 4.16348e-05C1.47662 -0.00246776 1.77134 0.108545 1.99139 0.30917L6.65839 4.71468C6.87712 4.92122 7 5.2013 7 5.49335C7 5.7854 6.87712 6.06549 6.65839 6.27202L1.99139 10.6775C1.77259 10.884 1.47588 11 1.1665 11C0.85712 11 0.560407 10.884 0.341609 10.6775Z"
                                        fill="white"
                                    />
                                </svg>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="sp1-fancySeperator"></div>
                <div class="sp1-cpmtExist">
                    Avez vous déjà un compte ? <a href="">S’identifier</a>
                </div>
            </div>
        </div>

        <div class="sb1-blank-50"></div>
        <!-- footer -->
        <!-- ------ -->

        <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"
        ></script>
        <script src="js/signup_1.js"></script>
    
@endsection
