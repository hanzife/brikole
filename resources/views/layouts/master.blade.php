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
<link rel="stylesheet" href="{{asset('css/footer.css')}}" />
<link rel="stylesheet" href="{{asset('css/home.css')}}" />
<link rel="stylesheet" href="{{asset('css/searchResult.css')}}" />





<body class="container">
    
<!--  -->
<!-- your header here -->
<div>
    <nav class="nav d-flex align-items-center justify-content-between">
        <div>
          <img id="logo" src="images/logos/logo.svg" alt="brikoleLogo" />
        </div>
        <div class="main_menu d-flex align-items-center">
          <a class="menuItem text-decoration-none" href="{{url('/')}}">Accueil</a>
          <a class="menuItem text-decoration-none" href="#"
            >Comment ça marche</a
          >
          <a class="menuItem text-decoration-none" href="{{url('')}}">À propos de nous</a>
          <a class="menuItem text-decoration-none" href="{{url('')}}">S’identifier</a>
          <div class="separator"></div>
          <a class="signUpButton text-decoration-none" href="{{url('')}}">
            <input
              class="signUp border-0"
              type="submit"
              value="Inscrivez-vous"
            />
          </a>
          <svg
            class="menuIcon_sm"
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
      <div class="collapse" id="menu_sm">
        <div class="d-flex flex-column menu_sm fontFam">
          <a class="menuItem_sm text-decoration-none" href="#">Accueil</a>
          <a class="menuItem_sm text-decoration-none" href="#"
            >Comment ça marche</a
          >
          <a class="menuItem_sm text-decoration-none" href="#"
            >À propos de nous</a
          >
          <div class="separator_sm"></div>
          <a class="menuItem_sm text-decoration-none" href="#">S’identifier</a>
        </div>
      </div>
</div>
<!-- end header -->

<!-- your Division here -->
@yield('content')
<!-- end Division -->

<!-- your footer here -->
<div class="textColor fontSize fontWeight sm-size">
      <div class="space"></div>
      <div class="footerTop">
        <img id="logo" src="../images/logos/logo.svg" alt="brikoleLogo" />
        <p class="mtb-15">
          Brikole est une plate-forme qui permet aux manoeuvres de présenter
          leurs compétences et les clients à la recherche de quelqu'un à
          embaucher.
        </p>
        <div class="d-flex align-items-center centerSelectLng">
          <p class="mb-0 colorBlack">Langue :</p>
          <select name="" id="selectLanguage" class="fontFam BGColor">
            <option class="fontFam" value="">Francais</option>
            <option class="fontFam" value="">Anglais</option>
            <option class="fontFam" value="">Arabe</option>
          </select>
        </div>
      </div>
      <div class="footerSeparator"></div>
      <div
        class="footerBottom d-md-flex align-items-center justify-content-between"
      >
        <div class="mb-15-sm">
          <p class="mb-0">© 2020 Brikole. Tous droits réservés.</p>
        </div>
        <div class="mb-15-sm">
          <p class="mb-0">Crée avec 💜 par l’équipe Brikole</p>
        </div>
        <div>
          <svg
            class="mr-9"
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
          <svg
            class="mr-10"
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
          <svg
            class="mr-10"
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
          <svg
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
        </div>
      </div>
      <div class="space"></div>
    </div>
<!-- end footer -->

<!-- 
<!-- links for scripts -->
<!-- <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> -->
<!-- <script src="{{ asset('assets/js/jquery.min.js') }}"></script> -->
<!-- <script src="{{asset('js/navbar.js')}}"></script> -->
<!-- make this in a separate file -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
  <script src="{{asset('js/home.js')}}"></script>
  <script src="{{asset('js/navbar.js')}}"></script>
  <script src="{{asset('js/searchResult.js')}}"></script>


</body>
</html>