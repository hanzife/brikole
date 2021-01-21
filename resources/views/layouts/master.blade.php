<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" /> -->
<!-- <link ref="stylesheet" href="{{asset('css/bootstrap.min.css') }}"> -->
<link rel="stylesheet" href="{{asset('css/navbar.css')}}" />
<link rel="stylesheet" href="{{asset('css/navbar-b.css')}}" />
<link rel="stylesheet" href="{{asset('css/footer.css')}}" />
<link rel="stylesheet" href="{{asset('css/home.css')}}" />
<link rel="stylesheet" href="{{asset('css/searchResult.css')}}" />

<body>
<!--  -->
<!-- your header here -->
<div class="container-custom nv-links">
    @guest
    <!-- If Client Logged -->
    @if(session()->has('id') == true)
        <!-- Client Header here -->
        <nav class="nv-b-nav">
            <a href="/" class="nv-b-logo">
                <picture>
                    <source media="(max-width:767px)" srcset="{{asset('images/logos/logo2.svg')}}" />
                    <img src="{{asset('images/logos/logo.svg')}}" alt="brikoleLogo" />
                </picture>
            </a>
            <div class="nv-b-main_menu">
                <a class="nv-b-menuItem" href="{{url('/')}}">Accueil</a>
                <a class="nv-b-menuItem" href="howTo">Comment ça marche</a>
                <div class="nv-b-separator"></div>
                <div class="nv-b-profile" id="nv-b-profile" data-visible="false">
                    <img class="nv-b-profile-pic" src="{{asset('images/steve-johnson-e5LdlAMpkEw-unsplash.jpg')}}"
                        alt="Image de profile" />
                    <svg class="nv-b-profile-chevron" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.29279 7.29259C5.48031 7.10512 5.73462 6.99981 5.99979 6.99981C6.26495 6.99981 6.51926 7.10512 6.70679 7.29259L9.99979 10.5856L13.2928 7.29259C13.385 7.19708 13.4954 7.1209 13.6174 7.06849C13.7394 7.01608 13.8706 6.9885 14.0034 6.98734C14.1362 6.98619 14.2678 7.01149 14.3907 7.06177C14.5136 7.11205 14.6253 7.18631 14.7192 7.2802C14.8131 7.37409 14.8873 7.48574 14.9376 7.60864C14.9879 7.73154 15.0132 7.86321 15.012 7.99599C15.0109 8.12877 14.9833 8.25999 14.9309 8.382C14.8785 8.504 14.8023 8.61435 14.7068 8.70659L10.7068 12.7066C10.5193 12.8941 10.265 12.9994 9.99979 12.9994C9.73462 12.9994 9.48031 12.8941 9.29279 12.7066L5.29279 8.70659C5.10532 8.51907 5 8.26476 5 7.99959C5 7.73443 5.10532 7.48012 5.29279 7.29259Z"
                            fill="#676878" />
                    </svg>
                    <!-- MENU -->
                    <div class="nv-b-profile-menu" id="nv-b-profile-menu" style="display: none;">
    

                        <a href="/clientFavoris">Favoris</a>
                        <a href="/Historique">Historique</a>
                        <a href="/clientComments">Commentaires</a>
                        <div class="nv-b-profile-menu-sep"></div>
                        <a href="/brikoleur-settings">Paramètres du compte</a>
                        <a class="nv-b-profile-menu-exit" href="{{ route('forgetClient') }}">
                            <span>Déconnecter</span>
                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M1 0C1.26522 0 1.51957 0.105357 1.70711 0.292893C1.89464 0.48043 2 0.734784 2 1V13C2 13.2652 1.89464 13.5196 1.70711 13.7071C1.51957 13.8946 1.26522 14 1 14C0.734784 14 0.48043 13.8946 0.292893 13.7071C0.105357 13.5196 0 13.2652 0 13V1C0 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0ZM8.707 3.293C8.89447 3.48053 8.99979 3.73484 8.99979 4C8.99979 4.26516 8.89447 4.51947 8.707 4.707L7.414 6H15C15.2652 6 15.5196 6.10536 15.7071 6.29289C15.8946 6.48043 16 6.73478 16 7C16 7.26522 15.8946 7.51957 15.7071 7.70711C15.5196 7.89464 15.2652 8 15 8H7.414L8.707 9.293C8.88916 9.4816 8.98995 9.7342 8.98767 9.9964C8.9854 10.2586 8.88023 10.5094 8.69482 10.6948C8.50941 10.8802 8.2586 10.9854 7.9964 10.9877C7.7342 10.99 7.4816 10.8892 7.293 10.707L4.293 7.707C4.10553 7.51947 4.00021 7.26516 4.00021 7C4.00021 6.73484 4.10553 6.48053 4.293 6.293L7.293 3.293C7.48053 3.10553 7.73484 3.00021 8 3.00021C8.26516 3.00021 8.51947 3.10553 8.707 3.293Z"
                                    fill="#FF6868" />
                            </svg>
                        </a>
                    </div>
                </div>
                <svg class="nv-b-menuIcon_xs" data-toggle="collapse" href="#menu_sm" role="button" aria-expanded="false"
                    aria-controls="menu_sm" width="18" height="16" viewBox="0 0 18 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0 1.33333C0 0.979711 0.135459 0.640573 0.376577 0.390525C0.617695 0.140476 0.944722 0 1.28571 0H16.7143C17.0553 0 17.3823 0.140476 17.6234 0.390525C17.8645 0.640573 18 0.979711 18 1.33333C18 1.68696 17.8645 2.02609 17.6234 2.27614C17.3823 2.52619 17.0553 2.66667 16.7143 2.66667H1.28571C0.944722 2.66667 0.617695 2.52619 0.376577 2.27614C0.135459 2.02609 0 1.68696 0 1.33333ZM0 8C0 7.64638 0.135459 7.30724 0.376577 7.05719C0.617695 6.80714 0.944722 6.66667 1.28571 6.66667H16.7143C17.0553 6.66667 17.3823 6.80714 17.6234 7.05719C17.8645 7.30724 18 7.64638 18 8C18 8.35362 17.8645 8.69276 17.6234 8.94281C17.3823 9.19286 17.0553 9.33333 16.7143 9.33333H1.28571C0.944722 9.33333 0.617695 9.19286 0.376577 8.94281C0.135459 8.69276 0 8.35362 0 8ZM0 14.6667C0 14.313 0.135459 13.9739 0.376577 13.7239C0.617695 13.4738 0.944722 13.3333 1.28571 13.3333H16.7143C17.0553 13.3333 17.3823 13.4738 17.6234 13.7239C17.8645 13.9739 18 14.313 18 14.6667C18 15.0203 17.8645 15.3594 17.6234 15.6095C17.3823 15.8595 17.0553 16 16.7143 16H1.28571C0.944722 16 0.617695 15.8595 0.376577 15.6095C0.135459 15.3594 0 15.0203 0 14.6667Z"
                        fill="#585863" />
                </svg>
            </div>
        </nav>
    <!-- If Brikoleur Logged and CLient Not Logged -->
    @elseif (Route::has('register') && session()->has('id') == false )
        <!-- Brikoleur Header here -->
        <nav class="nv-nav">
            <div>
                <picture>
                    <source
                        media="(max-width:767px)"
                        srcset="{{asset('images/logos/logo2.svg')}}"
                    />
                    <img src="{{asset('images/logos/logo.svg')}}" alt="brikoleLogo" />
                </picture>
            </div>
            <div class="nv-main_menu">
                <a class="nv-menuItem" href="{{url('/')}}">Accueil</a>
                <a class="nv-menuItem" href="howTo">Comment ça marche</a>
                <a class="nv-menuItem" href="{{ route('login') }}">S’identifier</a>
                <div class="nv-separator"></div>
                <a class="nv-signUpButton" href="{{ route('register') }}">
                    <input
                        class="nv-signUp"
                        type="submit"
                        value="Inscrivez-vous"
                    />
                </a>
                <svg
                    class="nv-menuIcon_xs"
                    data-toggle="collapse"
                    href="#menu_sm"
                    role="button"
                    aria-expanded="false"
                    aria-controls="menu_sm"
                    width="18"
                    height="16"
                    viewBox="0 0 18 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M0 1.33333C0 0.979711 0.135459 0.640573 0.376577 0.390525C0.617695 0.140476 0.944722 0 1.28571 0H16.7143C17.0553 0 17.3823 0.140476 17.6234 0.390525C17.8645 0.640573 18 0.979711 18 1.33333C18 1.68696 17.8645 2.02609 17.6234 2.27614C17.3823 2.52619 17.0553 2.66667 16.7143 2.66667H1.28571C0.944722 2.66667 0.617695 2.52619 0.376577 2.27614C0.135459 2.02609 0 1.68696 0 1.33333ZM0 8C0 7.64638 0.135459 7.30724 0.376577 7.05719C0.617695 6.80714 0.944722 6.66667 1.28571 6.66667H16.7143C17.0553 6.66667 17.3823 6.80714 17.6234 7.05719C17.8645 7.30724 18 7.64638 18 8C18 8.35362 17.8645 8.69276 17.6234 8.94281C17.3823 9.19286 17.0553 9.33333 16.7143 9.33333H1.28571C0.944722 9.33333 0.617695 9.19286 0.376577 8.94281C0.135459 8.69276 0 8.35362 0 8ZM0 14.6667C0 14.313 0.135459 13.9739 0.376577 13.7239C0.617695 13.4738 0.944722 13.3333 1.28571 13.3333H16.7143C17.0553 13.3333 17.3823 13.4738 17.6234 13.7239C17.8645 13.9739 18 14.313 18 14.6667C18 15.0203 17.8645 15.3594 17.6234 15.6095C17.3823 15.8595 17.0553 16 16.7143 16H1.28571C0.944722 16 0.617695 15.8595 0.376577 15.6095C0.135459 15.3594 0 15.0203 0 14.6667Z"
                        fill="#585863"
                    />
                </svg>
            </div>
        </nav>
            <div class="nv-menu-xs" id="menu_sm">
            
                <div class="nv-menu-sub-xs">
                    <a class="nv-menuItem-xs" href="{{url('/')}}">Accueil</a>
                    <a class="nv-menuItem-xs" href="howTo">Comment ça marche</a>
                    <div class="nv-separator-xs"></div>
                    <a class="nv-menuItem-xs" href="#">S’identifier</a>
                </div>
    @endif
     
    
    @else
            <nav class="nv-b-nav">
                <a href="/" class="nv-b-logo">
                    <picture>
                        <source media="(max-width:767px)"srcset="{{asset('images/logos/logo2.svg')}}" />
                        <img src="{{asset('images/logos/logo.svg')}}" alt="brikoleLogo" />
                    </picture>
                 </a>
                <div class="nv-b-main_menu">
                <a class="nv-b-menuItem" href="{{url('/')}}">Accueil</a>
                <a class="nv-b-menuItem" href="howTo">Comment ça marche</a>
                <div class="nv-b-separator"></div>
                <div class="nv-b-profile" id="nv-b-profile" data-visible="false">
                @foreach($ProfileBrikoleur ?? '' as $rowImage)
                    <img class="nv-b-profile-pic"
                    src="/images/Uploads/Profile/{{$rowImage->reference}}"
                    alt="Image de profile" />
                        @endforeach
                    <svg class="nv-b-profile-chevron" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.29279 7.29259C5.48031 7.10512 5.73462 6.99981 5.99979 6.99981C6.26495 6.99981 6.51926 7.10512 6.70679 7.29259L9.99979 10.5856L13.2928 7.29259C13.385 7.19708 13.4954 7.1209 13.6174 7.06849C13.7394 7.01608 13.8706 6.9885 14.0034 6.98734C14.1362 6.98619 14.2678 7.01149 14.3907 7.06177C14.5136 7.11205 14.6253 7.18631 14.7192 7.2802C14.8131 7.37409 14.8873 7.48574 14.9376 7.60864C14.9879 7.73154 15.0132 7.86321 15.012 7.99599C15.0109 8.12877 14.9833 8.25999 14.9309 8.382C14.8785 8.504 14.8023 8.61435 14.7068 8.70659L10.7068 12.7066C10.5193 12.8941 10.265 12.9994 9.99979 12.9994C9.73462 12.9994 9.48031 12.8941 9.29279 12.7066L5.29279 8.70659C5.10532 8.51907 5 8.26476 5 7.99959C5 7.73443 5.10532 7.48012 5.29279 7.29259Z"
                            fill="#676878" />
                    </svg>
                    <!-- MENU -->                   
                    <div class="nv-b-profile-menu" id="nv-b-profile-menu" style="display: none;">
                        <a href="/myportfolio">Profil</a>
                        <a href="#">Magasin</a>
                        <div class="nv-b-profile-menu-sep"></div>
                        <div class="nv-b-profile-menu-points-cont">
                            <span>Points</span>
                            <div>
                                <span>20</span>
                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 2C0 1.46957 0.210714 0.960859 0.585786 0.585786C0.960859 0.210714 1.46957 0 2 0H14C14.5304 0 15.0391 0.210714 15.4142 0.585786C15.7893 0.960859 16 1.46957 16 2V4C15.4696 4 14.9609 4.21071 14.5858 4.58579C14.2107 4.96086 14 5.46957 14 6C14 6.53043 14.2107 7.03914 14.5858 7.41421C14.9609 7.78929 15.4696 8 16 8V10C16 10.5304 15.7893 11.0391 15.4142 11.4142C15.0391 11.7893 14.5304 12 14 12H2C1.46957 12 0.960859 11.7893 0.585786 11.4142C0.210714 11.0391 0 10.5304 0 10V8C0.530433 8 1.03914 7.78929 1.41421 7.41421C1.78929 7.03914 2 6.53043 2 6C2 5.46957 1.78929 4.96086 1.41421 4.58579C1.03914 4.21071 0.530433 4 0 4V2Z"
                                        fill="#FFC000" />
                                </svg>
                            </div>
                        </div>
                        <div class="nv-b-profile-menu-sep"></div>
                        <a href="/brikoleur-settings">Paramètres du compte</a>
                        <a class="nv-b-profile-menu-exit" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                                >
                            <span>Déconnecter</span>
                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M1 0C1.26522 0 1.51957 0.105357 1.70711 0.292893C1.89464 0.48043 2 0.734784 2 1V13C2 13.2652 1.89464 13.5196 1.70711 13.7071C1.51957 13.8946 1.26522 14 1 14C0.734784 14 0.48043 13.8946 0.292893 13.7071C0.105357 13.5196 0 13.2652 0 13V1C0 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0ZM8.707 3.293C8.89447 3.48053 8.99979 3.73484 8.99979 4C8.99979 4.26516 8.89447 4.51947 8.707 4.707L7.414 6H15C15.2652 6 15.5196 6.10536 15.7071 6.29289C15.8946 6.48043 16 6.73478 16 7C16 7.26522 15.8946 7.51957 15.7071 7.70711C15.5196 7.89464 15.2652 8 15 8H7.414L8.707 9.293C8.88916 9.4816 8.98995 9.7342 8.98767 9.9964C8.9854 10.2586 8.88023 10.5094 8.69482 10.6948C8.50941 10.8802 8.2586 10.9854 7.9964 10.9877C7.7342 10.99 7.4816 10.8892 7.293 10.707L4.293 7.707C4.10553 7.51947 4.00021 7.26516 4.00021 7C4.00021 6.73484 4.10553 6.48053 4.293 6.293L7.293 3.293C7.48053 3.10553 7.73484 3.00021 8 3.00021C8.26516 3.00021 8.51947 3.10553 8.707 3.293Z"
                                    fill="#FF6868" />
                            </svg>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </a>

                       
                      
                   


                    </div>
                </div>
                <svg class="nv-b-menuIcon_xs" data-toggle="collapse" href="#menu_sm" role="button" aria-expanded="false"
                    aria-controls="menu_sm" width="18" height="16" viewBox="0 0 18 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0 1.33333C0 0.979711 0.135459 0.640573 0.376577 0.390525C0.617695 0.140476 0.944722 0 1.28571 0H16.7143C17.0553 0 17.3823 0.140476 17.6234 0.390525C17.8645 0.640573 18 0.979711 18 1.33333C18 1.68696 17.8645 2.02609 17.6234 2.27614C17.3823 2.52619 17.0553 2.66667 16.7143 2.66667H1.28571C0.944722 2.66667 0.617695 2.52619 0.376577 2.27614C0.135459 2.02609 0 1.68696 0 1.33333ZM0 8C0 7.64638 0.135459 7.30724 0.376577 7.05719C0.617695 6.80714 0.944722 6.66667 1.28571 6.66667H16.7143C17.0553 6.66667 17.3823 6.80714 17.6234 7.05719C17.8645 7.30724 18 7.64638 18 8C18 8.35362 17.8645 8.69276 17.6234 8.94281C17.3823 9.19286 17.0553 9.33333 16.7143 9.33333H1.28571C0.944722 9.33333 0.617695 9.19286 0.376577 8.94281C0.135459 8.69276 0 8.35362 0 8ZM0 14.6667C0 14.313 0.135459 13.9739 0.376577 13.7239C0.617695 13.4738 0.944722 13.3333 1.28571 13.3333H16.7143C17.0553 13.3333 17.3823 13.4738 17.6234 13.7239C17.8645 13.9739 18 14.313 18 14.6667C18 15.0203 17.8645 15.3594 17.6234 15.6095C17.3823 15.8595 17.0553 16 16.7143 16H1.28571C0.944722 16 0.617695 15.8595 0.376577 15.6095C0.135459 15.3594 0 15.0203 0 14.6667Z"
                        fill="#585863" />
                </svg>
             </div>
            </nav>
            
        <div class="nv-b-menu-xs" id="menu_sm">
            <div class="nv-b-menu-sub-xs">
                <a class="nv-b-menuItem-xs" href="{{url('/')}}">Accueil</a>
                <a class="nv-b-menuItem-xs" href="howTo">Comment ça marche</a>
                <div class="nv-b-separator-xs"></div>
                <div class="nv-b-menuItem-profile">
                    <div class="nv-b-menuItem-profile-data">
                        <img class="nv-b-profile-pic"
                            src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/96373109_2940098229362306_8759984751380354264_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=102&_nc_ohc=EXhgyJqbY4MAX_IL7lT&oh=86b703238bc1cf71f7e7b89de3728666&oe=5F3442E6"
                            alt="Image de profile" />
                        <span>Nom prenom Brikoleur</span>
                    </div>
                    <a class="nv-b-menuItem-xs" href="#">Profil</a>
                    <a class="nv-b-menuItem-xs" href="#">Magasin</a>
                    <div class="nv-b-separator-xs"></div>
                    <div class="nv-b-profile-menu-points-cont nv-b-menuItem-xs">
                        <span>Points</span>
                        <div>
                            <span>20</span>
                            <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 2C0 1.46957 0.210714 0.960859 0.585786 0.585786C0.960859 0.210714 1.46957 0 2 0H14C14.5304 0 15.0391 0.210714 15.4142 0.585786C15.7893 0.960859 16 1.46957 16 2V4C15.4696 4 14.9609 4.21071 14.5858 4.58579C14.2107 4.96086 14 5.46957 14 6C14 6.53043 14.2107 7.03914 14.5858 7.41421C14.9609 7.78929 15.4696 8 16 8V10C16 10.5304 15.7893 11.0391 15.4142 11.4142C15.0391 11.7893 14.5304 12 14 12H2C1.46957 12 0.960859 11.7893 0.585786 11.4142C0.210714 11.0391 0 10.5304 0 10V8C0.530433 8 1.03914 7.78929 1.41421 7.41421C1.78929 7.03914 2 6.53043 2 6C2 5.46957 1.78929 4.96086 1.41421 4.58579C1.03914 4.21071 0.530433 4 0 4V2Z"
                                    fill="#FFC000" />
                            </svg>
                        </div>
                    </div>
                    <div class="nv-b-separator-xs"></div>
                    <a class="nv-b-menuItem-xs" href="/brikoleur-settings">Paramètres du compte</a>
                    <a class="nv-b-profile-menu-exit nv-b-menuItem-xs" href="#">
                        <span>Déconnecter</span>
                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M1 0C1.26522 0 1.51957 0.105357 1.70711 0.292893C1.89464 0.48043 2 0.734784 2 1V13C2 13.2652 1.89464 13.5196 1.70711 13.7071C1.51957 13.8946 1.26522 14 1 14C0.734784 14 0.48043 13.8946 0.292893 13.7071C0.105357 13.5196 0 13.2652 0 13V1C0 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0ZM8.707 3.293C8.89447 3.48053 8.99979 3.73484 8.99979 4C8.99979 4.26516 8.89447 4.51947 8.707 4.707L7.414 6H15C15.2652 6 15.5196 6.10536 15.7071 6.29289C15.8946 6.48043 16 6.73478 16 7C16 7.26522 15.8946 7.51957 15.7071 7.70711C15.5196 7.89464 15.2652 8 15 8H7.414L8.707 9.293C8.88916 9.4816 8.98995 9.7342 8.98767 9.9964C8.9854 10.2586 8.88023 10.5094 8.69482 10.6948C8.50941 10.8802 8.2586 10.9854 7.9964 10.9877C7.7342 10.99 7.4816 10.8892 7.293 10.707L4.293 7.707C4.10553 7.51947 4.00021 7.26516 4.00021 7C4.00021 6.73484 4.10553 6.48053 4.293 6.293L7.293 3.293C7.48053 3.10553 7.73484 3.00021 8 3.00021C8.26516 3.00021 8.51947 3.10553 8.707 3.293Z"
                                fill="#FF6868" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

              
        </div>
        
            </div>
        
          
                            @endguest
           
        </div>
<!-- end header -->

<!-- your Division here -->
@yield('content')
<!-- end Division -->

<!-- your footer here -->
<div class="ft-container-all">
            <div class="container-custom">
                <div class="blank-30"></div>
                <div class="ft-footerTop">
                <img src="{{asset('images/logos/logo.svg')}}" alt="brikoleLogo" />
                    <div class="ft-desc">
                        Brikole est une plate-forme qui permet aux manoeuvres de
                        présenter leurs compétences et les clients à la
                        recherche de quelqu'un à embaucher.
                    </div>
                    <div class="ft-select">
                        <div class="">Langue :</div>
                        <select name="" class="ft-selectLanguage">
                            <option value="">Francais</option>
                            <option value="">Anglais</option>
                            <option value="">Arabe</option>
                        </select>
                    </div>
                </div>
                <div class="ft-footerSeparator-cntr">
                    <div class="ft-footerSeparator"></div>
                </div>

                <div class="ft-footerBottom">
                    <div class="ft-mb">
                        © 2020 Brikole. Tous droits réservés.
                    </div>

                    <div class="ft-mb">Crée avec 💜 par l’équipe Brikole</div>

                    <div class="ft-socialMed">
                        <a href=""
                            ><svg
                                class="ft-svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M3.9196 8.99373C4.1726 9.17226 4.93522 9.70249 6.20752 10.5841C7.47985 11.4658 8.45455 12.1447 9.13164 12.6207C9.20603 12.6729 9.36408 12.7864 9.60585 12.9612C9.84767 13.1362 10.0486 13.2776 10.2085 13.3854C10.3685 13.4933 10.5619 13.6142 10.7889 13.7481C11.0159 13.8819 11.2298 13.9825 11.4307 14.0491C11.6317 14.1162 11.8177 14.1495 11.9888 14.1495H12H12.0112C12.1823 14.1495 12.3684 14.1162 12.5693 14.0491C12.7702 13.9825 12.9843 13.8817 13.2111 13.7481C13.4379 13.614 13.6314 13.4932 13.7914 13.3854C13.9514 13.2776 14.1521 13.1362 14.394 12.9612C14.6358 12.7862 14.794 12.6729 14.8684 12.6207C15.5528 12.1447 17.294 10.9355 20.0915 8.99349C20.6347 8.61419 21.0884 8.15651 21.453 7.62077C21.8178 7.08527 22 6.52349 22 5.93576C22 5.44462 21.8232 5.02419 21.4697 4.67452C21.1163 4.32478 20.6977 4.15 20.2142 4.15H3.78564C3.21276 4.15 2.77189 4.34342 2.46311 4.73027C2.15437 5.11719 2 5.60082 2 6.18113C2 6.64987 2.20468 7.15782 2.61385 7.70466C3.02297 8.25155 3.45837 8.68127 3.9196 8.99373Z"
                                    fill="#585863"
                                />
                                <path
                                    d="M20.8838 10.1878C18.4435 11.8395 16.5906 13.123 15.3259 14.0383C14.9018 14.3507 14.5578 14.5945 14.2936 14.7693C14.0293 14.9441 13.678 15.1227 13.2389 15.3049C12.8 15.4874 12.3909 15.5784 12.0114 15.5784H12H11.9888C11.6093 15.5784 11.2001 15.4874 10.7611 15.3049C10.3222 15.1227 9.97061 14.9441 9.70647 14.7693C9.44241 14.5945 9.09826 14.3507 8.6742 14.0383C7.66968 13.3018 5.82075 12.0181 3.12734 10.1878C2.70313 9.90527 2.32739 9.5814 2 9.21688V18.0782C2 18.5696 2.17478 18.9898 2.52452 19.3395C2.87419 19.6893 3.29465 19.8642 3.78575 19.8642H20.2144C20.7053 19.8642 21.1258 19.6893 21.4755 19.3395C21.8253 18.9897 22 18.5696 22 18.0782V9.21688C21.68 9.57386 21.3081 9.89773 20.8838 10.1878Z"
                                    fill="#585863"
                                />
                            </svg>
                        </a>
                        <a href=""
                            ><svg
                                class="ft-svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M17.5628 1.00458L14.7856 1C11.6654 1 9.64903 3.12509 9.64903 6.41423V8.91055H6.85662C6.61532 8.91055 6.41992 9.1115 6.41992 9.35937V12.9763C6.41992 13.2241 6.61554 13.4249 6.85662 13.4249H9.64903V22.5514C9.64903 22.7993 9.84443 23 10.0857 23H13.729C13.9703 23 14.1657 22.799 14.1657 22.5514V13.4249H17.4307C17.672 13.4249 17.8674 13.2241 17.8674 12.9763L17.8688 9.35937C17.8688 9.24036 17.8226 9.12638 17.7409 9.04215C17.6591 8.95793 17.5477 8.91055 17.4318 8.91055H14.1657V6.79439C14.1657 5.77727 14.4017 5.26094 15.6915 5.26094L17.5624 5.26025C17.8035 5.26025 17.9989 5.0593 17.9989 4.81166V1.45317C17.9989 1.20576 17.8037 1.00504 17.5628 1.00458Z"
                                    fill="#585863"
                                />
                            </svg>
                        </a>
                        <a href="">
                            <svg
                                class="ft-svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M22.5 5.77249C21.7271 6.10042 20.8978 6.32282 20.0264 6.42212C20.9161 5.91196 21.5972 5.10278 21.92 4.14155C21.0854 4.61398 20.1642 4.95703 19.1826 5.143C18.3966 4.3401 17.2785 3.84 16.0384 3.84C13.6593 3.84 11.7303 5.68706 11.7303 7.96385C11.7303 8.28676 11.7683 8.60214 11.8418 8.90373C8.26201 8.73156 5.08768 7.08932 2.96314 4.59388C2.59176 5.20204 2.38049 5.91068 2.38049 6.66712C2.38049 8.0983 3.14161 9.36108 4.2964 10.0999C3.5904 10.0773 2.92639 9.89131 2.34508 9.5822V9.63372C2.34508 11.6316 3.83056 13.2989 5.80024 13.6784C5.43936 13.7714 5.05882 13.8229 4.66514 13.8229C4.38696 13.8229 4.11794 13.7965 3.85417 13.7463C4.40267 15.386 5.99315 16.5784 7.87756 16.6111C6.40388 17.7169 4.54573 18.374 2.52749 18.374C2.17976 18.374 1.83724 18.3539 1.5 18.3175C3.40671 19.4898 5.67036 20.1733 8.10327 20.1733C16.028 20.1733 20.3597 13.8883 20.3597 8.43757L20.3453 7.90356C21.1917 7.32552 21.9239 6.59927 22.5 5.77249Z"
                                    fill="#585863"
                                />
                            </svg>
                        </a>
                        <a href=""
                            ><svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M21.3903 4.11397C22.4182 4.39083 23.2288 5.20125 23.5055 6.22938C24.0197 8.1073 23.9999 12.0217 23.9999 12.0217C23.9999 12.0217 23.9999 15.9162 23.5057 17.7943C23.2288 18.8222 22.4184 19.6328 21.3903 19.9095C19.5122 20.4039 12 20.4039 12 20.4039C12 20.4039 4.50731 20.4039 2.60961 19.8899C1.58148 19.613 0.771054 18.8024 0.4942 17.7745C0 15.9162 0 12.0019 0 12.0019C0 12.0019 0 8.1073 0.4942 6.22938C0.770871 5.20143 1.60125 4.37105 2.60943 4.09438C4.48753 3.6 11.9998 3.6 11.9998 3.6C11.9998 3.6 19.5122 3.6 21.3903 4.11397ZM15.8549 12.002L9.60788 15.6V8.40394L15.8549 12.002Z"
                                    fill="#585863"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="blank-34"></div>
            </div>
        </div>
        <!-- ------- -->
        <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"
        ></script>
         <!-- ------- -->
    
<!-- end footer -->

<!-- 
<!-- links for scripts -->
<!-- <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> -->
<!-- <script src="{{ asset('assets/js/jquery.min.js') }}"></script> -->
<!-- <script src="{{asset('js/navbar.js')}}"></script> -->
<!-- make this in a separate file -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script> -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script> -->
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script> -->
  <script src="{{asset('js/home.js')}}"></script>
  <script src="{{asset('js/navbar.js')}}"></script>
  <script src="{{asset('js/searchResult.js')}}"></script>
  <script src="{{asset('js/navbar-b.js')}}"></script>
  



</body>
</html>