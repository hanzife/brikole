<link rel="stylesheet" href="{{ asset('css/signupBrikoleur_2.css')}}" href="" />
    <title>Inscription Brikoleur</title>
<!-- Master Header/Footer -->
@extends('layouts.master')

@section('content')
        <!-- header -->
        <!-- ------ -->
        <div class="sb2-blank-51"></div>

        <div class="sb2-container">
            <div class="sb2-sub-container">
                <div><img src="images/logos/logo3.svg" alt="" /></div>
                <div class="sb2-blank-40"></div>
                <div class="sb2-section2">
                    <div class="sb2-section2-text">
                        <div class="sb2-section2-text1">Inscription</div>
                        <div class="sb2-section2-text2">
                            Choisir vos sous professions
                        </div>
                    </div>
                    <div class="sb2-section2-search">
                        <input
                            id="sb3-search"
                            type="search"
                            placeholder="Search..."
                            name=""
                        />
                    </div>
                </div>
                <div class="sb2-seperator"></div>
                <div class="sb3-professions">
                    <!-- <div class="sb2-profession-cards-container"></div>
                    <div class="sb2-profession-cards-container"></div> -->
                </div>
                <!-- submit -->
                <div class="sb2-submit">
                    <button class="sb2-cancel">Plus-tard</button>
                    <button class="sb2-continue" type="submit" value="Submit">
                        Continuer
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
                    </button>
                </div>
            </div>
        </div>
        <div class="sb2-blank-51"></div>

        <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"
        ></script>
        <script src="{{ asset('js/signupBrikoleur_2.js')}}"></script>
        <!-- <script src="{{ asset('js/signuoBrikoleur_Step3.js')}}"></script> -->
        
        @endsection
