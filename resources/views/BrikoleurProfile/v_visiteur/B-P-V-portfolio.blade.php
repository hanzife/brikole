<title>Search Result</title>

<!-- Master Header/Footer -->
@extends('layouts.master')
@section('content')
    
    <title>Profile Brikoleur</title>
    <link rel="stylesheet" href="{{asset('css/brikoleur-main.css')}}">
    <link rel="stylesheet" href="{{asset('css/brikoleur-portfolio.css')}}">
    <div>
        <!-- header -->
    </div>
    <!-- main -->
    <div class="b-m-rootBlank"></div>
    <!-- Content -->
    @foreach($DataBrikoleur as $row)

    <div class="container-custom">

        <div class="b-m-top">
            <div class="b-m-top-profile">
            <img class="b-m-top-profile-img"
                    src="/images/Uploads/Profile/{{$row->reference}}"
                    alt="Image Brikoleur" />
                    
            </div>
            <!--  -->
            <div class="b-m-top-infos">
                <div class="b-m-top-infos-main">
                    <div class="b-m-top-infos-main-name">
                        <span>{{$row->nom}} {{$row->prenom}}</span>
                        <!-- Unverfied -->
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.33367 1.81861C6.13776 1.75441 6.90109 1.43814 7.51496 0.914841C8.2083 0.324319 9.08927 0 10 0C10.9107 0 11.7917 0.324319 12.485 0.914841C13.0989 1.43814 13.8622 1.75441 14.6663 1.81861C15.5744 1.89118 16.4269 2.28482 17.071 2.92896C17.7152 3.5731 18.1088 4.42561 18.1814 5.33367C18.2451 6.13743 18.5614 6.9012 19.0852 7.51496C19.6757 8.2083 20 9.08927 20 10C20 10.9107 19.6757 11.7917 19.0852 12.485C18.5619 13.0989 18.2456 13.8622 18.1814 14.6663C18.1088 15.5744 17.7152 16.4269 17.071 17.071C16.4269 17.7152 15.5744 18.1088 14.6663 18.1814C13.8622 18.2456 13.0989 18.5619 12.485 19.0852C11.7917 19.6757 10.9107 20 10 20C9.08927 20 8.2083 19.6757 7.51496 19.0852C6.90109 18.5619 6.13776 18.2456 5.33367 18.1814C4.42561 18.1088 3.5731 17.7152 2.92896 17.071C2.28482 16.4269 1.89118 15.5744 1.81861 14.6663C1.75441 13.8622 1.43814 13.0989 0.914841 12.485C0.324319 11.7917 0 10.9107 0 10C0 9.08927 0.324319 8.2083 0.914841 7.51496C1.43814 6.90109 1.75441 6.13776 1.81861 5.33367C1.89118 4.42561 2.28482 3.5731 2.92896 2.92896C3.5731 2.28482 4.42561 1.89118 5.33367 1.81861ZM14.6338 8.38372C14.8615 8.14796 14.9875 7.83221 14.9847 7.50446C14.9818 7.1767 14.8504 6.86318 14.6186 6.63142C14.3868 6.39965 14.0733 6.26819 13.7456 6.26534C13.4178 6.26249 13.1021 6.38849 12.8663 6.61619L8.74998 10.7325L7.1337 9.11623C6.89794 8.88853 6.58218 8.76254 6.25443 8.76539C5.92668 8.76823 5.61316 8.8997 5.3814 9.13146C5.14963 9.36323 5.01817 9.67675 5.01532 10.0045C5.01247 10.3323 5.13847 10.648 5.36617 10.8838L7.86621 13.3838C8.10063 13.6182 8.41852 13.7498 8.74998 13.7498C9.08144 13.7498 9.39933 13.6182 9.63374 13.3838L14.6338 8.38372Z"
                                fill="#D2D6DB" />
                        </svg>
                        <!-- Verified -->
                        <!-- <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.33367 1.81861C6.13776 1.75441 6.90109 1.43814 7.51496 0.914841C8.2083 0.324319 9.08927 0 10 0C10.9107 0 11.7917 0.324319 12.485 0.914841C13.0989 1.43814 13.8622 1.75441 14.6663 1.81861C15.5744 1.89118 16.4269 2.28482 17.071 2.92896C17.7152 3.5731 18.1088 4.42561 18.1814 5.33367C18.2451 6.13743 18.5614 6.9012 19.0852 7.51496C19.6757 8.2083 20 9.08927 20 10C20 10.9107 19.6757 11.7917 19.0852 12.485C18.5619 13.0989 18.2456 13.8622 18.1814 14.6663C18.1088 15.5744 17.7152 16.4269 17.071 17.071C16.4269 17.7152 15.5744 18.1088 14.6663 18.1814C13.8622 18.2456 13.0989 18.5619 12.485 19.0852C11.7917 19.6757 10.9107 20 10 20C9.08927 20 8.2083 19.6757 7.51496 19.0852C6.90109 18.5619 6.13776 18.2456 5.33367 18.1814C4.42561 18.1088 3.5731 17.7152 2.92896 17.071C2.28482 16.4269 1.89118 15.5744 1.81861 14.6663C1.75441 13.8622 1.43814 13.0989 0.914841 12.485C0.324319 11.7917 0 10.9107 0 10C0 9.08927 0.324319 8.2083 0.914841 7.51496C1.43814 6.90109 1.75441 6.13776 1.81861 5.33367C1.89118 4.42561 2.28482 3.5731 2.92896 2.92896C3.5731 2.28482 4.42561 1.89118 5.33367 1.81861ZM14.6338 8.38372C14.8615 8.14796 14.9875 7.83221 14.9847 7.50446C14.9818 7.1767 14.8504 6.86318 14.6186 6.63142C14.3868 6.39965 14.0733 6.26819 13.7456 6.26534C13.4178 6.26249 13.1021 6.38849 12.8663 6.61619L8.74998 10.7325L7.1337 9.11623C6.89794 8.88853 6.58218 8.76254 6.25443 8.76539C5.92668 8.76823 5.61316 8.8997 5.3814 9.13146C5.14963 9.36323 5.01817 9.67675 5.01532 10.0045C5.01247 10.3323 5.13847 10.648 5.36617 10.8838L7.86621 13.3838C8.10063 13.6182 8.41852 13.7498 8.74998 13.7498C9.08144 13.7498 9.39933 13.6182 9.63374 13.3838L14.6338 8.38372Z"
                                fill="#ffc000" />
                        </svg> -->
                    </div>
                    <!-- In the future in case of multiple Professions, just insert the below in  a div  -->
                    <span class="b-m-top-infos-main-prs">{{$row->libelle_P}}</span>
                </div>
                <!--  -->
                <div class="b-m-top-infos-sps">
                @foreach($libelle_SP as $rowLibelle_SP)
                    <span class="b-m-top-infos-sps-sp">{{$rowLibelle_SP->libelle_SP}}</span>
                    @endforeach
                </div>
                <!--  -->
                <div class="b-m-top-infos-desc">
                    <span class="b-m-top-infos-desc-text">
                        {{$row->description}} 
                    </span>
                </div>
                <!--  -->
                <div class="b-m-top-infos-adress">
                    <span class="b-top-infos-adress-label">
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.05002 4.55036C6.36284 3.23754 8.14341 2.5 10 2.5C11.8566 2.5 13.6372 3.23754 14.95 4.55036C16.2628 5.86318 17.0004 7.64375 17.0004 9.50036C17.0004 11.357 16.2628 13.1375 14.95 14.4504L10 19.4004L5.05002 14.4504C4.39993 13.8003 3.88425 13.0286 3.53242 12.1793C3.1806 11.33 2.99951 10.4197 2.99951 9.50036C2.99951 8.58104 3.1806 7.67073 3.53242 6.82141C3.88425 5.97208 4.39993 5.20038 5.05002 4.55036ZM10 11.5004C10.5304 11.5004 11.0392 11.2896 11.4142 10.9146C11.7893 10.5395 12 10.0308 12 9.50036C12 8.96992 11.7893 8.46122 11.4142 8.08614C11.0392 7.71107 10.5304 7.50036 10 7.50036C9.46958 7.50036 8.96088 7.71107 8.5858 8.08614C8.21073 8.46122 8.00002 8.96992 8.00002 9.50036C8.00002 10.0308 8.21073 10.5395 8.5858 10.9146C8.96088 11.2896 9.46958 11.5004 10 11.5004Z"
                                fill="#585863" />
                        </svg>
                        <span>
                            Adresse :
                        </span>
                    </span>
                    <span class="b-top-infos-adress-text">
                    {{$row->adresse}}, {{$row->ville}} 
                    </span>
                </div>
                <!--  -->
                <button class="b-m-top-infos-phone b-m-top-infos-phone-disabled" id="b-m-top-showNb">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2 3C2 2.73478 2.10536 2.48043 2.29289 2.29289C2.48043 2.10536 2.73478 2 3 2H5.153C5.38971 2.00011 5.6187 2.08418 5.79924 2.23726C5.97979 2.39034 6.10018 2.6025 6.139 2.836L6.879 7.271C6.91436 7.48222 6.88097 7.69921 6.78376 7.89003C6.68655 8.08085 6.53065 8.23543 6.339 8.331L4.791 9.104C5.34611 10.4797 6.17283 11.7293 7.22178 12.7782C8.27072 13.8272 9.52035 14.6539 10.896 15.209L11.67 13.661C11.7655 13.4695 11.9199 13.3138 12.1106 13.2166C12.3012 13.1194 12.5179 13.0859 12.729 13.121L17.164 13.861C17.3975 13.8998 17.6097 14.0202 17.7627 14.2008C17.9158 14.3813 17.9999 14.6103 18 14.847V17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18H15C7.82 18 2 12.18 2 5V3Z"
                            fill="#676878" />
                    </svg>
                    <span>Afficher numéro de contact</span>
                </button>
            </div>
            <!--  -->
        </div>
        <div class="b-m-bot">
            <div class="b-m-bot-header">
                <span class="b-m-bot-header-text b-m-bot-header-text-active">Portfolio</span>
                <a class="b-m-bot-header-text b-m-bot-header-text-inactive"
                    href="./B-P-V-comments.html">Commentaires</a>
            </div>
            <!--  -->
            <div class="b-m-bot-portfolio">
                <div class="b-m-bot-portfolio-cont">
                    <div class="b-m-bot-portfolio-preview">
                        <div class="b-m-bot-portfolio-preview-imgs" id="b-m-bot-portfolio-preview-imgs-cont">
                        @foreach($DataImages as $rowIamges)
                            <img class="b-m-bot-portfolio-preview-img" data-pos=""
                            src="/images/Uploads/Portfolio/{{$rowIamges->reference}}"
                                alt="Image de portfolio Brikoleur">                     
                        @endforeach
                            <!-- <img class="b-m-bot-portfolio-preview-img" data-pos="1"
                                src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/92570115_3873721969334579_7643778429369016452_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=111&_nc_ohc=pw4ixdhzu1EAX_JAE_t&oh=5874495a33a6c787f1b295faf2fae1df&oe=5F36E5FB"
                                alt="Image de portfolio Brikoleur">
                            <img class="b-m-bot-portfolio-preview-img" data-pos="2"
                                src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/92570115_3873721969334579_7643778429369016452_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=111&_nc_ohc=pw4ixdhzu1EAX_JAE_t&oh=5874495a33a6c787f1b295faf2fae1df&oe=5F36E5FB"
                                alt="Image de portfolio Brikoleur">
                            <img class="b-m-bot-portfolio-preview-img" data-pos="3"
                                src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/92570115_3873721969334579_7643778429369016452_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=111&_nc_ohc=pw4ixdhzu1EAX_JAE_t&oh=5874495a33a6c787f1b295faf2fae1df&oe=5F36E5FB"
                                alt="Image de portfolio Brikoleur">
                            <img class="b-m-bot-portfolio-preview-img" data-pos="4"
                                src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/92570115_3873721969334579_7643778429369016452_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=111&_nc_ohc=pw4ixdhzu1EAX_JAE_t&oh=5874495a33a6c787f1b295faf2fae1df&oe=5F36E5FB"
                                alt="Image de portfolio Brikoleur">
                            <img class="b-m-bot-portfolio-preview-img" data-pos="5"
                                src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/92570115_3873721969334579_7643778429369016452_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=111&_nc_ohc=pw4ixdhzu1EAX_JAE_t&oh=5874495a33a6c787f1b295faf2fae1df&oe=5F36E5FB"
                                alt="Image de portfolio Brikoleur">
                            <img class="b-m-bot-portfolio-preview-img" data-pos="6"
                                src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/92570115_3873721969334579_7643778429369016452_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=111&_nc_ohc=pw4ixdhzu1EAX_JAE_t&oh=5874495a33a6c787f1b295faf2fae1df&oe=5F36E5FB"
                                alt="Image de portfolio Brikoleur"> -->
                        </div>
                        <div class="b-m-bot-portfolio-preview-nav">
                            <button class="b-m-bot-portfolio-preview-nav-btn"
                                id="b-m-bot-portfolio-preview-nav-btn-left">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.9995 19.001L7.99951 12.001L14.9995 5.00098" stroke="white"
                                        stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button class="b-m-bot-portfolio-preview-nav-btn"
                                id="b-m-bot-portfolio-preview-nav-btn-right">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 5L16 12L9 19" stroke="white" stroke-width="2.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div id="b-m-bot-portfolio-preview-nav-progress">
                        </div>
                    </div>
                    <div class="b-m-bot-portfolio-catalogue">
                        @foreach($DataImages as $rowIamges)
                        <div class="b-m-bot-portfolio-catalogue-img b-m-bot-portfolio-catalogue-img-active"
                            data-id='{{$rowIamges->id_image}}'>
                            <img src="/images/Uploads/Portfolio/{{$rowIamges->reference}}"
                            alt="Image Portfolio Brikoleur">
                        </div>
                        @endforeach
                        
                        
                        <!-- <div class="b-m-bot-portfolio-catalogue-img b-m-bot-portfolio-catalogue-img-inactive"
                            data-id='id dyal limage_2'>
                            <img src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/101687040_606243696648946_3058382731987508433_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=110&_nc_ohc=2bTK9tMwvpEAX8WP8Au&oh=bd29421ba4f1ccb89cc4f804d6589182&oe=5F3671D8"
                                alt="Image Portfolio Brikoleur">
                        </div>
                        <div class="b-m-bot-portfolio-catalogue-img b-m-bot-portfolio-catalogue-img-inactive"
                            data-id='id dyal limage_3'>
                            <img src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/101687040_606243696648946_3058382731987508433_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=110&_nc_ohc=2bTK9tMwvpEAX8WP8Au&oh=bd29421ba4f1ccb89cc4f804d6589182&oe=5F3671D8"
                                alt="Image Portfolio Brikoleur">
                        </div>
                        <div class="b-m-bot-portfolio-catalogue-img b-m-bot-portfolio-catalogue-img-inactive"
                            data-id='id dyal limage_4'>
                            <img src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/101687040_606243696648946_3058382731987508433_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=110&_nc_ohc=2bTK9tMwvpEAX8WP8Au&oh=bd29421ba4f1ccb89cc4f804d6589182&oe=5F3671D8"
                                alt="Image Portfolio Brikoleur">
                        </div>
                        <div class="b-m-bot-portfolio-catalogue-img b-m-bot-portfolio-catalogue-img-inactive"
                            data-id='id dyal limage_5'>
                            <img src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/101687040_606243696648946_3058382731987508433_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=110&_nc_ohc=2bTK9tMwvpEAX8WP8Au&oh=bd29421ba4f1ccb89cc4f804d6589182&oe=5F3671D8"
                                alt="Image Portfolio Brikoleur">
                        </div>
                        <div class="b-m-bot-portfolio-catalogue-img b-m-bot-portfolio-catalogue-img-inactive"
                            data-id='id dyal limage_6'>
                            <img src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/101687040_606243696648946_3058382731987508433_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=110&_nc_ohc=2bTK9tMwvpEAX8WP8Au&oh=bd29421ba4f1ccb89cc4f804d6589182&oe=5F3671D8"
                                alt="Image Portfolio Brikoleur">
                        </div>
                        <div class="b-m-bot-portfolio-catalogue-img b-m-bot-portfolio-catalogue-img-inactive"
                            data-id='id dyal limage_7'>
                            <img src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/101687040_606243696648946_3058382731987508433_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=110&_nc_ohc=2bTK9tMwvpEAX8WP8Au&oh=bd29421ba4f1ccb89cc4f804d6589182&oe=5F3671D8"
                                alt="Image Portfolio Brikoleur">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    @endforeach
    
    <!--  -->
    <div class="b-m-rootBlank"></div>
    <!--  -->
    <script src="../../js/brikoleur-preview-nav.js"></script>
    <!--  -->
    <script src="../../js/brikoleur-main-shared.js"></script>
@endsection