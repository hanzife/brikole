@extends('layouts.master')
@section('content') 
        <link rel="stylesheet" href="css/howTo.css" />
        <title>Comment ça marche</title>
        <!-- ------------------------- -->
        <!-- header -->
        <!-- ------------------------- -->

        <!-- ------------------------- -->
        <!-- content -->

        <div class="ht-blank-50"></div>
        <div class="container-custom2 ht-container">
            <section class="ht-left">
                <div class="ht-intro">
                    <div class="ht-intro-title">Comment ça marche ?</div>
                    <div class="ht-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Blandit nunc id nunc viverra leo, pretium. Maecenas diam
                        lacus amet lobortis ligula consectetur porta.
                    </div>
                </div>
                <div class="ht-blank-125"></div>
                <!-- ----------------section 1---------------- -->
                <div class="ht-section-nmbr">
                    <div>1</div>
                    <div class="ht-line"></div>
                </div>
                <div class="ht-blank-25"></div>
                <div class="ht-titles">Inscrivez-vous en quelques secondes</div>
                <div class="ht-blank-25"></div>
                <div class="ht-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vitae a est venenatis risus nunc elementum duis dui,
                    tincidunt.
                </div>
                <div class="ht-blank-25"></div>
                <!-- ----------------end section 1---------------- -->
                <a href="{{ route('register') }}">
                    <div class="ht-signup">Inscrivez-vous dès maintenant</div>
                </a>
                <div class="ht-blank-125"></div>
                <!-- ----------------section 2---------------- -->
                <div class="ht-section-nmbr">
                    <div>2</div>
                    <div class="ht-line"></div>
                </div>
                <div class="ht-blank-25"></div>
                <div class="ht-titles">Personnalisez votre portfolio</div>
                <div class="ht-blank-25"></div>
                <div class="ht-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vitae a est venenatis risus nunc elementum duis dui,
                    tincidunt.
                </div>
                <div class="ht-blank-25"></div>
                <div class="ht-titles2">Conseils</div>
                <div class="ht-d-f">
                    <div class="ht-desc-nmbr">1-</div>
                    <div class="ht-desc">
                        venenatis risus nunc elementum duis.
                    </div>
                </div>
                <div class="ht-d-f">
                    <div class="ht-desc-nmbr">2-</div>
                    <div class="ht-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing.
                        Vitae a est venenatis risus nunc elementum duis dui,
                        tincidunt.
                    </div>
                </div>
                <!-- ----------------end section 2---------------- -->
                <div class="ht-blank-125"></div>
                <!-- ----------------section 3---------------- -->
                <div class="ht-section-nmbr">
                    <div>3</div>
                    <div class="ht-line"></div>
                </div>
                <div class="ht-blank-25"></div>
                <div class="ht-titles">All set</div>
                <div class="ht-blank-25"></div>
                <div class="ht-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vitae a est venenatis risus nunc elementum duis dui,
                    tincidunt.
                </div>
                <div class="ht-blank-25"></div>
                <!-- ----------------end section 3---------------- -->
            </section>
            <!-- ------------------------ -->
            <section class="ht-right-img">
                <picture>
                    <source
                        media="(max-width:1199px)"
                        srcset="images/howToImgLG.png"
                    />
                    <img src="images/howToImgXL.png" alt="comment ça marche" />
                </picture>
            </section>
        </div>
        <div class="ht-blank-50"></div>
        <!-- ------------------------- -->

        <!-- ------------------------- -->
        <!-- footer -->
        <!-- ------------------------- -->
        @endsection
