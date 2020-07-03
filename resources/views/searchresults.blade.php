<title>Search Result</title>
<!-- Master Header/Footer -->
@extends('layouts.master')

@section('content')
<div class="container-custom">
            <!-- header -->
        </div>
        <!-- main -->
        <div class="blank-50"></div>

        <!-- search -->

        <!-- ------ -->

        <div class="blank-50"></div>
        <div class="container-custom">
            <div class="sr-ProfessionVille sr-ProfessionVille-resp1">
            {{$profession}}, {{$ville}}
            </div>
            <div class="sr-all">
                <section>
                    <!-- found results -->
                    <div class="sr-foundResNum">
                        <div class="sr-Resultatstrouves">
                            <b>34</b> Résultats trouvés
                        </div>
                        <div class="sr-seperator"></div>
                        <div class="sr-dFlex">
                            <div class="sr-cb-wrapper">
                                <input
                                    type="checkbox"
                                    id="sr-BrikoleurCheck"
                                    name="sr-BrikoleurCheck"
                                    value="sr-BrikoleurCheck"
                                    checked="checked"
                                    hidden
                                />
                                <label
                                    for="sr-BrikoleurCheck"
                                    class="sr-checkmark sr-checkmark-resp"
                                >
                                    <svg
                                        width="10"
                                        height="8"
                                        viewBox="0 0 10 8"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M9.01351 2.19661L9.01353 2.19658C9.16621 2.03636 9.25 1.82153 9.25 1.5999C9.25 1.37826 9.16621 1.16344 9.01353 1.00322L9.01348 1.00316C8.86037 0.842579 8.6501 0.75 8.42818 0.75C8.20626 0.75 7.996 0.84258 7.84289 1.00316L7.84286 1.00319L3.85267 5.18933L2.15023 3.40329L2.15026 3.40327L2.14721 3.40017C1.99309 3.24401 1.78412 3.15538 1.56469 3.15738C1.34528 3.15938 1.13793 3.25179 0.986556 3.4106C0.835553 3.56902 0.751846 3.78092 0.75003 4.00009C0.748215 4.21925 0.828392 4.43253 0.976624 4.59354L0.976597 4.59357L0.979589 4.59671L3.26735 6.99681L3.26737 6.99684C3.42048 7.15742 3.63075 7.25 3.85267 7.25C4.07459 7.25 4.28485 7.15742 4.43796 6.99684L4.43799 6.99681L9.01351 2.19661Z"
                                            fill="white"
                                            stroke="white"
                                            stroke-width="0.5"
                                        />
                                    </svg>
                                </label>
                                <span>Brikoleur</span>
                            </div>
                            <div class="sr-cb-wrapper">
                                <input
                                    type="checkbox"
                                    id="sr-AgenceCheck"
                                    name="sr-AgenceCheck"
                                    value="sr-AgenceCheck"
                                    checked="checked"
                                    hidden
                                />
                                <label
                                    for="sr-AgenceCheck"
                                    class="sr-checkmark"
                                >
                                    <svg
                                        width="10"
                                        height="8"
                                        viewBox="0 0 10 8"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M9.01351 2.19661L9.01353 2.19658C9.16621 2.03636 9.25 1.82153 9.25 1.5999C9.25 1.37826 9.16621 1.16344 9.01353 1.00322L9.01348 1.00316C8.86037 0.842579 8.6501 0.75 8.42818 0.75C8.20626 0.75 7.996 0.84258 7.84289 1.00316L7.84286 1.00319L3.85267 5.18933L2.15023 3.40329L2.15026 3.40327L2.14721 3.40017C1.99309 3.24401 1.78412 3.15538 1.56469 3.15738C1.34528 3.15938 1.13793 3.25179 0.986556 3.4106C0.835553 3.56902 0.751846 3.78092 0.75003 4.00009C0.748215 4.21925 0.828392 4.43253 0.976624 4.59354L0.976597 4.59357L0.979589 4.59671L3.26735 6.99681L3.26737 6.99684C3.42048 7.15742 3.63075 7.25 3.85267 7.25C4.07459 7.25 4.28485 7.15742 4.43796 6.99684L4.43799 6.99681L9.01351 2.19661Z"
                                            fill="white"
                                            stroke="white"
                                            stroke-width="0.5"
                                        />
                                    </svg>
                                </label>
                                <span>Agence de service</span>
                            </div>
                        </div>
                    </div>
                    <!-- ------------- -->
                    <div class="blank-15"></div>
                    <!-- ------------- -->

                    <!-- Biokoleur profile -->
                    @foreach($results as $resultsrow)
                    <div class="sr-profile">
                        <div class="sr-portfolio">
                            <div class="sr-portfolio-img">
                                <a href=""
                                    ><img src="images/testimg2.jpg" alt=""
                                /></a>
                                <a href=""
                                    ><img src="images/bkX.png" alt=""
                                /></a>
                                <a href=""
                                    ><img src="images/testimg.jpg" alt=""
                                /></a>
                            </div>
                            <div class="sr-arrows-container">
                                <div class="sr-arrows">
                                    <svg
                                        class="sr-arrowLeft"
                                        width="32"
                                        height="26"
                                        viewBox="0 0 32 26"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <rect
                                            x="0.5"
                                            y="0.5"
                                            width="31"
                                            height="25"
                                            rx="4.5"
                                            fill="white"
                                        />
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M18.707 8.29303C18.8945 8.48056 18.9998 8.73487 18.9998 9.00003C18.9998 9.26519 18.8945 9.5195 18.707 9.70703L15.414 13L18.707 16.293C18.8892 16.4816 18.99 16.7342 18.9877 16.9964C18.9854 17.2586 18.8803 17.5094 18.6948 17.6948C18.5094 17.8803 18.2586 17.9854 17.9964 17.9877C17.7342 17.99 17.4816 17.8892 17.293 17.707L13.293 13.707C13.1056 13.5195 13.0002 13.2652 13.0002 13C13.0002 12.7349 13.1056 12.4806 13.293 12.293L17.293 8.29303C17.4806 8.10556 17.7349 8.00024 18 8.00024C18.2652 8.00024 18.5195 8.10556 18.707 8.29303Z"
                                            fill="#0D0C22"
                                        />
                                        <rect
                                            x="0.5"
                                            y="0.5"
                                            width="31"
                                            height="25"
                                            rx="4.5"
                                            stroke="#D2D6DB"
                                        />
                                    </svg>
                                    <svg
                                        class="sr-arrowRight"
                                        width="32"
                                        height="26"
                                        viewBox="0 0 32 26"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <rect
                                            x="0.5"
                                            y="0.5"
                                            width="31"
                                            height="25"
                                            rx="4.5"
                                            fill="white"
                                        />
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M13.293 17.7069C13.1056 17.5194 13.0002 17.2651 13.0002 16.9999C13.0002 16.7348 13.1056 16.4804 13.293 16.2929L16.586 12.9999L13.293 9.70692C13.1109 9.51832 13.0101 9.26571 13.0124 9.00352C13.0146 8.74132 13.1198 8.49051 13.3052 8.3051C13.4906 8.11969 13.7414 8.01452 14.0036 8.01224C14.2658 8.00997 14.5184 8.11076 14.707 8.29292L18.707 12.2929C18.8945 12.4804 18.9998 12.7348 18.9998 12.9999C18.9998 13.2651 18.8945 13.5194 18.707 13.7069L14.707 17.7069C14.5195 17.8944 14.2652 17.9997 14 17.9997C13.7349 17.9997 13.4806 17.8944 13.293 17.7069Z"
                                            fill="#0D0C22"
                                        />
                                        <rect
                                            x="0.5"
                                            y="0.5"
                                            width="31"
                                            height="25"
                                            rx="4.5"
                                            stroke="#D2D6DB"
                                        />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- Prifile Infos --> 
                        
                        <div class="sr-infos">
                           
                            <div class="sr-infos-sub">
                                <div class="sr-imgName">
                                    <div class="sr-profilePhoto">
                                        <img src="/images/Uploads/Profile/{{$resultsrow->reference}}"
                                        alt="Profile de {{$resultsrow->prenom}} {{$resultsrow->nom}}"/>
                                    </div>
                                    <div class="sr-profileInfo">
                                        <div class="sr-NomPRENOM">
                                            <a href="">{{$resultsrow->prenom}} {{$resultsrow->nom}}</a
                                            >
                                        </div>
                                        <div class="sr-SousProf-all">
                                            <div class="sr-SousProf">
                                                Sousprofession
                                            </div>
                                            <div class="sr-SousProf">
                                                Sousprofession
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="sr-SousProf-all sr-SousProf-all-resp"
                                >
                                    <div class="sr-SousProf">
                                        Sousprofession
                                    </div>
                                    <div class="sr-SousProf">
                                        Sousprofession
                                    </div>
                                </div>
                                <div class="sr-description">
                                    <div class="sr-desc">
                                    {{$resultsrow->description}}
                                    </div>
                                    <div class="sr-address">
                                        <span class="fw-500">Adresse : </span>
                                        <span>
                                        {{$resultsrow->lieu}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="blank-15"></div>
                    @endforeach
                    <div class="blank-15"></div>

                    <!-- ads -->
                    <div class="sr-ad1"></div>
                    <!-- --- -->

                    <!-- ------------- -->
                    <div class="blank-15"></div>
                    <!-- ------------- -->

                    <!-- Biokoleur profile -->
                    <div class="sr-profile">
                        <div class="sr-portfolio">
                            <div class="sr-portfolio-img">
                                <!-- <img src="images/testimg2.jpg" alt="" /> -->
                                <img src="/images/bkX.png" alt="" />
                                <img src="images/testimg.jpg" alt="" />
                            </div>
                            <div class="sr-arrows-container">
                                <div class="sr-arrows">
                                    <svg
                                        class="sr-arrowLeft"
                                        width="32"
                                        height="26"
                                        viewBox="0 0 32 26"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <rect
                                            x="0.5"
                                            y="0.5"
                                            width="31"
                                            height="25"
                                            rx="4.5"
                                            fill="white"
                                        />
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M18.707 8.29303C18.8945 8.48056 18.9998 8.73487 18.9998 9.00003C18.9998 9.26519 18.8945 9.5195 18.707 9.70703L15.414 13L18.707 16.293C18.8892 16.4816 18.99 16.7342 18.9877 16.9964C18.9854 17.2586 18.8803 17.5094 18.6948 17.6948C18.5094 17.8803 18.2586 17.9854 17.9964 17.9877C17.7342 17.99 17.4816 17.8892 17.293 17.707L13.293 13.707C13.1056 13.5195 13.0002 13.2652 13.0002 13C13.0002 12.7349 13.1056 12.4806 13.293 12.293L17.293 8.29303C17.4806 8.10556 17.7349 8.00024 18 8.00024C18.2652 8.00024 18.5195 8.10556 18.707 8.29303Z"
                                            fill="#0D0C22"
                                        />
                                        <rect
                                            x="0.5"
                                            y="0.5"
                                            width="31"
                                            height="25"
                                            rx="4.5"
                                            stroke="#D2D6DB"
                                        />
                                    </svg>
                                    <svg
                                        class="sr-arrowRight"
                                        width="32"
                                        height="26"
                                        viewBox="0 0 32 26"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <rect
                                            x="0.5"
                                            y="0.5"
                                            width="31"
                                            height="25"
                                            rx="4.5"
                                            fill="white"
                                        />
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M13.293 17.7069C13.1056 17.5194 13.0002 17.2651 13.0002 16.9999C13.0002 16.7348 13.1056 16.4804 13.293 16.2929L16.586 12.9999L13.293 9.70692C13.1109 9.51832 13.0101 9.26571 13.0124 9.00352C13.0146 8.74132 13.1198 8.49051 13.3052 8.3051C13.4906 8.11969 13.7414 8.01452 14.0036 8.01224C14.2658 8.00997 14.5184 8.11076 14.707 8.29292L18.707 12.2929C18.8945 12.4804 18.9998 12.7348 18.9998 12.9999C18.9998 13.2651 18.8945 13.5194 18.707 13.7069L14.707 17.7069C14.5195 17.8944 14.2652 17.9997 14 17.9997C13.7349 17.9997 13.4806 17.8944 13.293 17.7069Z"
                                            fill="#0D0C22"
                                        />
                                        <rect
                                            x="0.5"
                                            y="0.5"
                                            width="31"
                                            height="25"
                                            rx="4.5"
                                            stroke="#D2D6DB"
                                        />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="sr-infos">
                            <div class="sr-infos-sub">
                                <div class="sr-imgName">
                                    <div class="sr-profilePhoto">
                                        <img src="images/bk1.png" alt="" />
                                    </div>
                                    <div class="sr-profileInfo">
                                        <div class="sr-NomPRENOM">
                                            Nom PRENOM Nom PRENOM Nom PRENOM
                                        </div>
                                        <div class="sr-SousProf-all">
                                            <div class="sr-SousProf">
                                                Sousprofession
                                            </div>
                                            <div class="sr-SousProf">
                                                Sousprofession
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="sr-SousProf-all sr-SousProf-all-resp"
                                >
                                    <div class="sr-SousProf">
                                        Sousprofession
                                    </div>
                                    <div class="sr-SousProf">
                                        Sousprofession
                                    </div>
                                </div>
                                <div class="sr-description">
                                    <div class="sr-desc">
                                        Description Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Sed in quam
                                        lacinia est, placerat pretium aliquam
                                        sem. Mi a vitae cursus in in arcu.
                                    </div>
                                    <div class="sr-address">
                                        <span class="fw-500">Adresse : </span>
                                        <span>
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit.
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blank-15"></div>
                    <div class="sr-profile">
                        <div class="sr-portfolio">
                            <div class="sr-portfolio-img">
                                <!-- <img src="images/testimg2.jpg" alt="" /> -->
                                <img src="images/bkX.png" alt="" />
                                <img src="images/testimg.jpg" alt="" />
                            </div>
                            <div class="sr-arrows-container">
                                <div class="sr-arrows">
                                    <svg
                                        class="sr-arrowLeft"
                                        width="32"
                                        height="26"
                                        viewBox="0 0 32 26"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <rect
                                            x="0.5"
                                            y="0.5"
                                            width="31"
                                            height="25"
                                            rx="4.5"
                                            fill="white"
                                        />
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M18.707 8.29303C18.8945 8.48056 18.9998 8.73487 18.9998 9.00003C18.9998 9.26519 18.8945 9.5195 18.707 9.70703L15.414 13L18.707 16.293C18.8892 16.4816 18.99 16.7342 18.9877 16.9964C18.9854 17.2586 18.8803 17.5094 18.6948 17.6948C18.5094 17.8803 18.2586 17.9854 17.9964 17.9877C17.7342 17.99 17.4816 17.8892 17.293 17.707L13.293 13.707C13.1056 13.5195 13.0002 13.2652 13.0002 13C13.0002 12.7349 13.1056 12.4806 13.293 12.293L17.293 8.29303C17.4806 8.10556 17.7349 8.00024 18 8.00024C18.2652 8.00024 18.5195 8.10556 18.707 8.29303Z"
                                            fill="#0D0C22"
                                        />
                                        <rect
                                            x="0.5"
                                            y="0.5"
                                            width="31"
                                            height="25"
                                            rx="4.5"
                                            stroke="#D2D6DB"
                                        />
                                    </svg>
                                    <svg
                                        class="sr-arrowRight"
                                        width="32"
                                        height="26"
                                        viewBox="0 0 32 26"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <rect
                                            x="0.5"
                                            y="0.5"
                                            width="31"
                                            height="25"
                                            rx="4.5"
                                            fill="white"
                                        />
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M13.293 17.7069C13.1056 17.5194 13.0002 17.2651 13.0002 16.9999C13.0002 16.7348 13.1056 16.4804 13.293 16.2929L16.586 12.9999L13.293 9.70692C13.1109 9.51832 13.0101 9.26571 13.0124 9.00352C13.0146 8.74132 13.1198 8.49051 13.3052 8.3051C13.4906 8.11969 13.7414 8.01452 14.0036 8.01224C14.2658 8.00997 14.5184 8.11076 14.707 8.29292L18.707 12.2929C18.8945 12.4804 18.9998 12.7348 18.9998 12.9999C18.9998 13.2651 18.8945 13.5194 18.707 13.7069L14.707 17.7069C14.5195 17.8944 14.2652 17.9997 14 17.9997C13.7349 17.9997 13.4806 17.8944 13.293 17.7069Z"
                                            fill="#0D0C22"
                                        />
                                        <rect
                                            x="0.5"
                                            y="0.5"
                                            width="31"
                                            height="25"
                                            rx="4.5"
                                            stroke="#D2D6DB"
                                        />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="sr-infos">
                            <div class="sr-infos-sub">
                                <div class="sr-imgName">
                                    <div class="sr-profilePhoto">
                                        <img src="images/bk1.png" alt="" />
                                    </div>
                                    <div class="sr-profileInfo">
                                        <div class="sr-NomPRENOM">
                                            Nom PRENOM Nom PRENOM Nom PRENOM
                                        </div>
                                        <div class="sr-SousProf-all">
                                            <div class="sr-SousProf">
                                                Sousprofession
                                            </div>
                                            <div class="sr-SousProf">
                                                Sousprofession
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="sr-SousProf-all sr-SousProf-all-resp"
                                >
                                    <div class="sr-SousProf">
                                        Sousprofession
                                    </div>
                                    <div class="sr-SousProf">
                                        Sousprofession
                                    </div>
                                </div>
                                <div class="sr-description">
                                    <div class="sr-desc">
                                        Description Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Sed in quam
                                        lacinia est, placerat pretium aliquam
                                        sem. Mi a vitae cursus in in arcu.
                                    </div>
                                    <div class="sr-address">
                                        <span class="fw-500">Adresse : </span>
                                        <span>
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit.
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blank-15"></div>
                    <div class="sr-profile">
                        <div class="sr-portfolio">
                            <div class="sr-portfolio-img">
                                <!-- <img src="images/testimg2.jpg" alt="" /> -->
                                <img src="images/bkX.png" alt="" />
                                <img src="images/testimg.jpg" alt="" />
                            </div>
                            <div class="sr-arrows-container">
                                <div class="sr-arrows">
                                    <svg
                                        class="sr-arrowLeft"
                                        width="32"
                                        height="26"
                                        viewBox="0 0 32 26"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <rect
                                            x="0.5"
                                            y="0.5"
                                            width="31"
                                            height="25"
                                            rx="4.5"
                                            fill="white"
                                        />
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M18.707 8.29303C18.8945 8.48056 18.9998 8.73487 18.9998 9.00003C18.9998 9.26519 18.8945 9.5195 18.707 9.70703L15.414 13L18.707 16.293C18.8892 16.4816 18.99 16.7342 18.9877 16.9964C18.9854 17.2586 18.8803 17.5094 18.6948 17.6948C18.5094 17.8803 18.2586 17.9854 17.9964 17.9877C17.7342 17.99 17.4816 17.8892 17.293 17.707L13.293 13.707C13.1056 13.5195 13.0002 13.2652 13.0002 13C13.0002 12.7349 13.1056 12.4806 13.293 12.293L17.293 8.29303C17.4806 8.10556 17.7349 8.00024 18 8.00024C18.2652 8.00024 18.5195 8.10556 18.707 8.29303Z"
                                            fill="#0D0C22"
                                        />
                                        <rect
                                            x="0.5"
                                            y="0.5"
                                            width="31"
                                            height="25"
                                            rx="4.5"
                                            stroke="#D2D6DB"
                                        />
                                    </svg>
                                    <svg
                                        class="sr-arrowRight"
                                        width="32"
                                        height="26"
                                        viewBox="0 0 32 26"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <rect
                                            x="0.5"
                                            y="0.5"
                                            width="31"
                                            height="25"
                                            rx="4.5"
                                            fill="white"
                                        />
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M13.293 17.7069C13.1056 17.5194 13.0002 17.2651 13.0002 16.9999C13.0002 16.7348 13.1056 16.4804 13.293 16.2929L16.586 12.9999L13.293 9.70692C13.1109 9.51832 13.0101 9.26571 13.0124 9.00352C13.0146 8.74132 13.1198 8.49051 13.3052 8.3051C13.4906 8.11969 13.7414 8.01452 14.0036 8.01224C14.2658 8.00997 14.5184 8.11076 14.707 8.29292L18.707 12.2929C18.8945 12.4804 18.9998 12.7348 18.9998 12.9999C18.9998 13.2651 18.8945 13.5194 18.707 13.7069L14.707 17.7069C14.5195 17.8944 14.2652 17.9997 14 17.9997C13.7349 17.9997 13.4806 17.8944 13.293 17.7069Z"
                                            fill="#0D0C22"
                                        />
                                        <rect
                                            x="0.5"
                                            y="0.5"
                                            width="31"
                                            height="25"
                                            rx="4.5"
                                            stroke="#D2D6DB"
                                        />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="sr-infos">
                            <div class="sr-infos-sub">
                                <div class="sr-imgName">
                                    <div class="sr-profilePhoto">
                                        <img src="images/bk1.png" alt="" />
                                    </div>
                                    <div class="sr-profileInfo">
                                        <div class="sr-NomPRENOM">
                                            Nom PRENOM Nom PRENOM Nom PRENOM
                                        </div>
                                        <div class="sr-SousProf-all">
                                            <div class="sr-SousProf">
                                                Sousprofession
                                            </div>
                                            <div class="sr-SousProf">
                                                Sousprofession
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="sr-SousProf-all sr-SousProf-all-resp"
                                >
                                    <div class="sr-SousProf">
                                        Sousprofession
                                    </div>
                                    <div class="sr-SousProf">
                                        Sousprofession
                                    </div>
                                </div>
                                <div class="sr-description">
                                    <div class="sr-desc">
                                        Description Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Sed in quam
                                        lacinia est, placerat pretium aliquam
                                        sem. Mi a vitae cursus in in arcu.
                                    </div>
                                    <div class="sr-address">
                                        <span class="fw-500">Adresse : </span>
                                        <span>
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit.
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blank-15"></div>

                    <!-- ads -->
                    <div class="sr-ad1"></div>
                    <!-- --- -->

                    <!-- ------------- -->
                    <div class="blank-15"></div>
                    <!-- ------------- -->

                    <!-- Afficher plus -->
                    <div class="sr-showMore">
                        <button class="sr-showMoreBtn">
                            <svg
                                width="15"
                                height="14"
                                viewBox="0 0 15 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M7.5 0C7.76522 0 8.01957 0.105357 8.20711 0.292893C8.39464 0.48043 8.5 0.734784 8.5 1V6H13.5C13.7652 6 14.0196 6.10536 14.2071 6.29289C14.3946 6.48043 14.5 6.73478 14.5 7C14.5 7.26522 14.3946 7.51957 14.2071 7.70711C14.0196 7.89464 13.7652 8 13.5 8H8.5V13C8.5 13.2652 8.39464 13.5196 8.20711 13.7071C8.01957 13.8946 7.76522 14 7.5 14C7.23478 14 6.98043 13.8946 6.79289 13.7071C6.60536 13.5196 6.5 13.2652 6.5 13V8H1.5C1.23478 8 0.98043 7.89464 0.792893 7.70711C0.605357 7.51957 0.5 7.26522 0.5 7C0.5 6.73478 0.605357 6.48043 0.792893 6.29289C0.98043 6.10536 1.23478 6 1.5 6H6.5V1C6.5 0.734784 6.60536 0.48043 6.79289 0.292893C6.98043 0.105357 7.23478 0 7.5 0Z"
                                    fill="#585863"
                                />
                            </svg>
                            Afficher plus
                        </button>
                    </div>
                    <!-- ------------ -->
                    <div class="blank-50"></div>
                </section>
                <section>
                    <div class="sr-servicePremium">
                        <div class="sr-SP-text">Service Premium</div>
                        <div class="sr-yellBorder"></div>
                    </div>
                    <!-- ------------- -->
                    <div class="blank-15"></div>
                    <!-- ------------- -->
                    <div class="sr-agencies">
                        <div class="sr-Agency">
                            <a href="">
                                <img
                                    class="sr-AgencyImgBg"
                                    src="images/testimg.jpg"
                                    alt="Agency name"
                                />
                            </a>
                            <div class="sr-AgencyDetails">
                                <img
                                    class="sr-AgencyImgSm"
                                    src="images/testimg2.jpg"
                                    alt=""
                                />
                                <div class="sr-AgencyDetailsSub">
                                    <div class="sr-AgencyDetailsName">
                                        <a href=""
                                            >Agency Numbah 1 Agency Numbah 1</a
                                        >
                                    </div>
                                    <div class="sr-AgencyDetailsSpeciality">
                                        spécialité spécialité spécialité
                                        spécialité
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blank-15 sr-blank-15-rp"></div>
                        <div class="sr-Agency">
                            <img
                                class="sr-AgencyImgBg"
                                src="images/testimg.jpg"
                                alt="Agency name"
                            />
                            <div class="sr-AgencyDetails">
                                <img
                                    class="sr-AgencyImgSm"
                                    src="images/testimg2.jpg"
                                    alt=""
                                />
                                <div class="sr-AgencyDetailsSub">
                                    <div class="sr-AgencyDetailsName">
                                        Agency Numbah 1
                                    </div>
                                    <div class="sr-AgencyDetailsSpeciality">
                                        spécialité
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blank-15 sr-blank-15-rp"></div>
                        <div class="sr-Agency">
                            <img
                                class="sr-AgencyImgBg"
                                src="images/testimg.jpg"
                                alt="Agency name"
                            />
                            <div class="sr-AgencyDetails">
                                <img
                                    class="sr-AgencyImgSm"
                                    src="images/testimg2.jpg"
                                    alt=""
                                />
                                <div class="sr-AgencyDetailsSub">
                                    <div class="sr-AgencyDetailsName">
                                        Agency Numbah 1
                                    </div>
                                    <div class="sr-AgencyDetailsSpeciality">
                                        spécialité
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blank-15 sr-blank-15-rp"></div>
                        <div class="sr-Agency">
                            <img
                                class="sr-AgencyImgBg"
                                src="images/testimg.jpg"
                                alt="Agency name"
                            />
                            <div class="sr-AgencyDetails">
                                <img
                                    class="sr-AgencyImgSm"
                                    src="images/testimg2.jpg"
                                    alt=""
                                />
                                <div class="sr-AgencyDetailsSub">
                                    <div class="sr-AgencyDetailsName">
                                        Agency Numbah 1
                                    </div>
                                    <div class="sr-AgencyDetailsSpeciality">
                                        spécialité
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- --responsive-- -->
                    <div class="blank-31"></div>
                    <div class="sr-ProfessionVille sr-ProfessionVille-resp2">
                        Profession, Ville
                    </div>
                    <!-- ------------- -->
                    <div class="blank-15"></div>
                    <!-- ------------- -->
                    <!-- ads -->
                    <div class="sr-ad2"></div>
                    <!-- --- -->
                </section>
            </div>
        </div>



@endsection