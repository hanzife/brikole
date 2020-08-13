@extends('layouts.master')
@section('content')
        <link rel="stylesheet" href="css/clientFavoris.css" />
        <title>Historique</title>
   
        <div class="cf-blank-21"></div>
        <div class="container-custom cf-container-custom">
            <!-- reusable -->
            <section class="cf-choice-container">
                <!-- add links !!!!! -->
                <div class="cf-choice">
                    <svg
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M2.81862 4.81872L2.81852 4.81882C1.9749 5.6627 1.50098 6.80709 1.50098 8.00032C1.50098 9.19356 1.9749 10.338 2.81852 11.1818L2.81854 11.1819L9.64654 18.0109L10.0001 18.3645L10.3537 18.0109L17.1787 11.1848C17.607 10.7704 17.9487 10.2749 18.1839 9.72729C18.4198 9.17827 18.5439 8.58778 18.5491 7.99027C18.5543 7.39277 18.4404 6.80021 18.2142 6.24718C17.9879 5.69414 17.6538 5.19171 17.2313 4.76919C16.8087 4.34667 16.3063 4.01254 15.7533 3.78627C15.2002 3.56001 14.6077 3.44615 14.0102 3.45134C13.4127 3.45653 12.8222 3.58067 12.2732 3.81651C11.7255 4.05175 11.2301 4.39342 10.8157 4.82167L10.0001 5.63652L9.18162 4.81872C9.18159 4.81869 9.18156 4.81865 9.18152 4.81862C8.33766 3.97506 7.19332 3.50118 6.00012 3.50118C4.80688 3.50118 3.6625 3.9751 2.81862 4.81872Z"
                            fill="white"
                            stroke="#676878"
                        />
                    </svg>

                    <div>Favoris</div>
                </div>
                <div class="cf-choice cf-choice-active">
                    <svg
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M10 18C12.1217 18 14.1566 17.1571 15.6569 15.6569C17.1571 14.1566 18 12.1217 18 10C18 7.87827 17.1571 5.84344 15.6569 4.34315C14.1566 2.84285 12.1217 2 10 2C7.87827 2 5.84344 2.84285 4.34315 4.34315C2.84285 5.84344 2 7.87827 2 10C2 12.1217 2.84285 14.1566 4.34315 15.6569C5.84344 17.1571 7.87827 18 10 18ZM11 6C11 5.73478 10.8946 5.48043 10.7071 5.29289C10.5196 5.10536 10.2652 5 10 5C9.73478 5 9.48043 5.10536 9.29289 5.29289C9.10536 5.48043 9 5.73478 9 6V10C9.00006 10.2652 9.10545 10.5195 9.293 10.707L12.121 13.536C12.2139 13.6289 12.3242 13.7026 12.4456 13.7529C12.567 13.8032 12.6971 13.8291 12.8285 13.8291C12.9599 13.8291 13.09 13.8032 13.2114 13.7529C13.3328 13.7026 13.4431 13.6289 13.536 13.536C13.6289 13.4431 13.7026 13.3328 13.7529 13.2114C13.8032 13.09 13.8291 12.9599 13.8291 12.8285C13.8291 12.6971 13.8032 12.567 13.7529 12.4456C13.7026 12.3242 13.6289 12.2139 13.536 12.121L11 9.586V6Z"
                            fill="#0D0C22"
                        />
                    </svg>

                    <div>Historique</div>
                </div>
                <div class="cf-choice">
                    <svg
                        width="20"
                        height="20"
                        viewBox="0 0 21 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M10.1464 18.3536L10.5 18.7071L10.8536 18.3536L13.7071 15.5H16.5C17.163 15.5 17.7989 15.2366 18.2678 14.7678C18.7366 14.2989 19 13.663 19 13V5C19 4.33696 18.7366 3.70107 18.2678 3.23223C17.7989 2.76339 17.163 2.5 16.5 2.5H4.5C3.83696 2.5 3.20107 2.76339 2.73223 3.23223C2.26339 3.70107 2 4.33696 2 5V13C2 13.663 2.26339 14.2989 2.73223 14.7678C3.20107 15.2366 3.83696 15.5 4.5 15.5H7.29289L10.1464 18.3536ZM6 7C6 6.86739 6.05268 6.74022 6.14645 6.64645C6.24022 6.55268 6.36739 6.5 6.5 6.5H14.5C14.6326 6.5 14.7598 6.55268 14.8536 6.64645C14.9473 6.74022 15 6.86739 15 7C15 7.13261 14.9473 7.25978 14.8536 7.35355C14.7598 7.44732 14.6326 7.5 14.5 7.5H6.5C6.36739 7.5 6.24022 7.44732 6.14645 7.35355C6.05268 7.25979 6 7.13261 6 7ZM6.14645 10.6464C6.24022 10.5527 6.36739 10.5 6.5 10.5H9.5C9.63261 10.5 9.75978 10.5527 9.85355 10.6464C9.94732 10.7402 10 10.8674 10 11C10 11.1326 9.94732 11.2598 9.85355 11.3536C9.75978 11.4473 9.63261 11.5 9.5 11.5H6.5C6.36739 11.5 6.24022 11.4473 6.14645 11.3536C6.05268 11.2598 6 11.1326 6 11C6 10.8674 6.05268 10.7402 6.14645 10.6464Z"
                            stroke="#676878"
                        />
                    </svg>
                    <div>Commentaires</div>
                </div>
            </section>

            <div class="cf-blank-10"></div>

            <!-- reusable -->
            <section class="cf-filter-section">
                <div class="cf-filter-1">
                    <div class="cf-filter-1-nbr">{{ $countHistorique }}</div>
                    <div class="cf-filter-1-profil">Profils</div>
                </div>
                <div>
                    <div class="cf-filter-2">
                        <div class="cf-filter-2-1">
                            <svg
                                width="8"
                                height="14"
                                viewBox="0 0 8 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M3.99979 0C4.26498 5.66374e-05 4.51929 0.105451 4.70679 0.293L7.70679 3.293C7.88894 3.4816 7.98974 3.7342 7.98746 3.9964C7.98518 4.2586 7.88001 4.50941 7.6946 4.69482C7.5092 4.88023 7.25838 4.9854 6.99619 4.98767C6.73399 4.98995 6.48139 4.88916 6.29279 4.707L3.99979 2.414L1.70679 4.707C1.51818 4.88916 1.26558 4.98995 1.00339 4.98767C0.741188 4.9854 0.490376 4.88023 0.304968 4.69482C0.11956 4.50941 0.0143906 4.2586 0.0121121 3.9964C0.00983372 3.7342 0.110629 3.4816 0.292787 3.293L3.29279 0.293C3.48028 0.105451 3.73459 5.66374e-05 3.99979 0ZM0.292787 9.293C0.480314 9.10553 0.734622 9.00021 0.999786 9.00021C1.26495 9.00021 1.51926 9.10553 1.70679 9.293L3.99979 11.586L6.29279 9.293C6.48139 9.11084 6.73399 9.01005 6.99619 9.01233C7.25838 9.0146 7.5092 9.11977 7.6946 9.30518C7.88001 9.49059 7.98518 9.7414 7.98746 10.0036C7.98974 10.2658 7.88894 10.5184 7.70679 10.707L4.70679 13.707C4.51926 13.8945 4.26495 13.9998 3.99979 13.9998C3.73462 13.9998 3.48031 13.8945 3.29279 13.707L0.292787 10.707C0.105316 10.5195 0 10.2652 0 10C0 9.73484 0.105316 9.48053 0.292787 9.293Z"
                                    fill="#585863"
                                />
                            </svg>
                            <div id="cf-filter-selected">Date</div>
                        </div>
                        <div class="cf-filter-2-2">
                            <svg
                                width="17"
                                height="14"
                                viewBox="0 0 17 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M1.98755 0C1.72233 0 1.46798 0.105357 1.28044 0.292893C1.09291 0.48043 0.987549 0.734784 0.987549 1C0.987549 1.26522 1.09291 1.51957 1.28044 1.70711C1.46798 1.89464 1.72233 2 1.98755 2H12.9875C13.2528 2 13.5071 1.89464 13.6947 1.70711C13.8822 1.51957 13.9875 1.26522 13.9875 1C13.9875 0.734784 13.8822 0.48043 13.6947 0.292893C13.5071 0.105357 13.2528 0 12.9875 0H1.98755ZM1.98755 4C1.72233 4 1.46798 4.10536 1.28044 4.29289C1.09291 4.48043 0.987549 4.73478 0.987549 5C0.987549 5.26522 1.09291 5.51957 1.28044 5.70711C1.46798 5.89464 1.72233 6 1.98755 6H6.98755C7.25277 6 7.50712 5.89464 7.69466 5.70711C7.88219 5.51957 7.98755 5.26522 7.98755 5C7.98755 4.73478 7.88219 4.48043 7.69466 4.29289C7.50712 4.10536 7.25277 4 6.98755 4H1.98755ZM1.98755 8C1.72233 8 1.46798 8.10536 1.28044 8.29289C1.09291 8.48043 0.987549 8.73478 0.987549 9C0.987549 9.26522 1.09291 9.51957 1.28044 9.70711C1.46798 9.89464 1.72233 10 1.98755 10H5.98755C6.25277 10 6.50712 9.89464 6.69466 9.70711C6.88219 9.51957 6.98755 9.26522 6.98755 9C6.98755 8.73478 6.88219 8.48043 6.69466 8.29289C6.50712 8.10536 6.25277 8 5.98755 8H1.98755ZM11.9875 13C11.9875 13.2652 12.0929 13.5196 12.2804 13.7071C12.468 13.8946 12.7223 14 12.9875 14C13.2528 14 13.5071 13.8946 13.6947 13.7071C13.8822 13.5196 13.9875 13.2652 13.9875 13V7.414L15.2805 8.707C15.4692 8.88916 15.7218 8.98995 15.9839 8.98767C16.2461 8.9854 16.497 8.88023 16.6824 8.69482C16.8678 8.50941 16.9729 8.2586 16.9752 7.9964C16.9775 7.7342 16.8767 7.4816 16.6945 7.293L13.6945 4.293C13.507 4.10553 13.2527 4.00021 12.9875 4.00021C12.7224 4.00021 12.4681 4.10553 12.2805 4.293L9.28055 7.293C9.18504 7.38525 9.10886 7.49559 9.05645 7.6176C9.00404 7.7396 8.97645 7.87082 8.9753 8.0036C8.97414 8.13638 8.99945 8.26806 9.04973 8.39095C9.10001 8.51385 9.17426 8.6255 9.26815 8.71939C9.36205 8.81329 9.4737 8.88754 9.59659 8.93782C9.71949 8.9881 9.85117 9.0134 9.98395 9.01225C10.1167 9.0111 10.2479 8.98351 10.37 8.9311C10.492 8.87869 10.6023 8.80251 10.6945 8.707L11.9875 7.414V13Z"
                                    fill="#585863"
                                />
                            </svg>
                        </div>
                    </div>
                    <div class="cf-filter-dd" tabindex="0">
                        <div
                            class="cf-filter-dd_opt cf-filter-dd_opt-selected"
                            tabindex="0"
                        >
                            Date
                        </div>
                        <div class="cf-filter-dd_opt" tabindex="0">Nom</div>
                        <div class="cf-filter-dd_opt" tabindex="0">
                            Profession
                        </div>
                        <div class="cf-filter-dd_opt" tabindex="0">Ville</div>
                    </div>
                </div>
            </section>

            <div class="cf-blank-10"></div>

            <!-- HISTORY LIST ------------------------------------------------------ -->
            @if($countHistorique)
            <section class="cf-results-section">
                <!-- LOOP START HERE -->

                <!-- each cf-results-profil has cf-blank-10 underneath -->
                @foreach($Datahistorique as $rowHistory)
                <div class="cf-results-profil" idHistory="{{$rowHistory->id_history}}">
                    <div class="cf-results-top">
                        <div class="cf-results-top-left">
                            <div class="cf-results-top-img">
                                <a href=""
                                    ><img
                                        src="/images/Uploads/Profile/{{$rowHistory->reference}}"
                                        alt="profilImg"
                                /></a>
                            </div>
                            <div class="cf-results-top-info">
                                <a href="/search/{{$rowHistory->id}}">
                                    <div class="cf-results-top-info-name">
                                        {{$rowHistory->nom}} {{ $rowHistory->prenom }}
                                    </div>
                                </a>
                                <div class="cf-results-top-info-prof">
                                    @foreach($libelle_SP as $rawLibelleSP)
                                    @if($rawLibelleSP->id_brikoleur == $rowHistory->id)
                                    <div>{{$rawLibelleSP->libelle_SP}}</div>
                                    @endif()
                                    @endforeach

                                    <!-- do not delete this -->
                                    <!-- <div class="cf-results-top-info-prof-dots">
                                        ...
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="cf-results-top-right ch-X-btn">
                            <svg
                                width="40"
                                height="40"
                                viewBox="0 0 40 40"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M0 20C0 8.95431 8.95431 0 20 0C31.0457 0 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.95431 40 0 31.0457 0 20Z"
                                    fill="#F7F7F8"
                                />
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M13.1516 13.1515C13.3767 12.9265 13.6818 12.8002 14 12.8002C14.3182 12.8002 14.6234 12.9265 14.8484 13.1515L20 18.3031L25.1516 13.1515C25.2623 13.0369 25.3947 12.9455 25.5412 12.8826C25.6876 12.8197 25.845 12.7866 26.0044 12.7852C26.1637 12.7838 26.3217 12.8142 26.4692 12.8745C26.6167 12.9349 26.7506 13.024 26.8633 13.1366C26.976 13.2493 27.0651 13.3833 27.1254 13.5308C27.1858 13.6782 27.2161 13.8362 27.2147 13.9956C27.2134 14.1549 27.1802 14.3124 27.1174 14.4588C27.0545 14.6052 26.963 14.7376 26.8484 14.8483L21.6968 19.9999L26.8484 25.1515C27.067 25.3778 27.188 25.6809 27.1852 25.9956C27.1825 26.3102 27.0563 26.6112 26.8338 26.8337C26.6113 27.0562 26.3104 27.1824 25.9957 27.1851C25.6811 27.1878 25.378 27.0669 25.1516 26.8483L20 21.6967L14.8484 26.8483C14.6221 27.0669 14.319 27.1878 14.0044 27.1851C13.6897 27.1824 13.3887 27.0562 13.1663 26.8337C12.9438 26.6112 12.8176 26.3102 12.8148 25.9956C12.8121 25.6809 12.933 25.3778 13.1516 25.1515L18.3032 19.9999L13.1516 14.8483C12.9267 14.6233 12.8003 14.3181 12.8003 13.9999C12.8003 13.6817 12.9267 13.3765 13.1516 13.1515Z"
                                    fill="#676878"
                                />
                            </svg>
                        </div>
                    </div>

                    <div class="cf-blank-10"></div>

                    <!-- description (if no description is entered by user, use a default one) -->
                    <div class="cf-results-desc">
                       {{$rowHistory->description}}
                    </div>

                    <div class="cf-blank-10"></div>

                    <!-- date -->
                    <div class="ch-results-date">
                        @foreach($historique as $rawhist)
                        @if($rawhist->id_brikoleur == $rowHistory->id)
                        <div>{{$rawhist->created_at}}</div>
                        @endif
                        @endforeach
                        <div>
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M6.82325 7.17664L6.82337 7.17676L8.9443 9.29845C8.96756 9.3217 8.99516 9.34015 9.02555 9.35273C9.05592 9.36531 9.08849 9.37179 9.12138 9.37179C9.15426 9.37179 9.18682 9.36532 9.2172 9.35273L6.82325 7.17664ZM6.82325 7.17664C6.77639 7.12979 6.75004 7.06626 6.75 7C6.75 6.99996 6.75 6.99993 6.75 6.99989V4C6.75 3.9337 6.77634 3.87011 6.82322 3.82322C6.87011 3.77634 6.9337 3.75 7 3.75C7.0663 3.75 7.12989 3.77634 7.17678 3.82322C7.22366 3.87011 7.25 3.9337 7.25 4V6.6895V6.89667M6.82325 7.17664L7.25 6.89667M7.25 6.89667L7.39652 7.04312M7.25 6.89667L7.39652 7.04312M7.39652 7.04312L9.29845 8.9443C9.3217 8.96756 9.34015 8.99516 9.35273 9.02554C9.36531 9.05592 9.37179 9.08849 9.37179 9.12138C9.37179 9.15426 9.36532 9.18682 9.35273 9.2172L7.39652 7.04312ZM7 13.5C8.72391 13.5 10.3772 12.8152 11.5962 11.5962C12.8152 10.3772 13.5 8.72391 13.5 7C13.5 5.27609 12.8152 3.62279 11.5962 2.40381C10.3772 1.18482 8.72391 0.5 7 0.5C5.27609 0.5 3.62279 1.18482 2.40381 2.40381C1.18482 3.62279 0.5 5.27609 0.5 7C0.5 8.72391 1.18482 10.3772 2.40381 11.5962C3.62279 12.8152 5.27609 13.5 7 13.5ZM9.29845 9.29844C9.2752 9.3217 9.24759 9.34014 9.21721 9.35273L9.35273 9.21721C9.34014 9.24759 9.3217 9.2752 9.29845 9.29844Z"
                                    stroke="#676878"
                                />
                            </svg>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="cf-blank-10"></div>

                <!-- LOOP END HERE -->

                <!-- show more -->
                <!-- only if there is more to show -->
                <div class="cf-loadingMore-cntr">
                    <div class="cf-loadingMore">
                        <div class="cf-loadingMore-charement">
                            Chargement
                        </div>
                        <div class="cf-loadingMore-dot">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- END HISTORY LIST ------------------------------------------------------ -->

            <!-- page not found -->
            @else
            <div class="cf-notFoundPage">
                <div>
                    <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M9.172 16.172C9.92211 15.4221 10.9393 15.0009 12 15.0009C13.0607 15.0009 14.0779 15.4221 14.828 16.172M9 10H9.01M15 10H15.01M21 12C21 13.1819 20.7672 14.3522 20.3149 15.4442C19.8626 16.5361 19.1997 17.5282 18.364 18.364C17.5282 19.1997 16.5361 19.8626 15.4442 20.3149C14.3522 20.7672 13.1819 21 12 21C10.8181 21 9.64778 20.7672 8.55585 20.3149C7.46392 19.8626 6.47177 19.1997 5.63604 18.364C4.80031 17.5282 4.13738 16.5361 3.68508 15.4442C3.23279 14.3522 3 13.1819 3 12C3 9.61305 3.94821 7.32387 5.63604 5.63604C7.32387 3.94821 9.61305 3 12 3C14.3869 3 16.6761 3.94821 18.364 5.63604C20.0518 7.32387 21 9.61305 21 12Z"
                            stroke="#0D0C22"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </div>
                <div>Aucun contenu trouvé</div>
            </div>
            @endif
        </div>
        <div class="cf-blank-10"></div>

        <!-- script -->
        <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"
        ></script>
        <script src="js/clientFavoris.js"></script>
@endsection
