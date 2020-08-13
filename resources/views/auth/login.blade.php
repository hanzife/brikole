@extends('layouts.master')

@section('content')


<link rel="stylesheet" href="css/signupBrikoleur_1.css" />
        <title>Inscription Brikoleur</title>
        <!-- header -->
        <!-- ------ -->
        <div class="sb1-blank-51"></div>

        <div class="sb1-container">
            <div class="sb1-sub-container">
                <div><img src="images/logos/logo3.svg" alt="" /></div>
                <div class="sb1-title">S’identifier</div>
                <div class="sb1-form">

                    <form method="POST" action="checklogin">
                    @csrf

                    @if($errors->any())
                        <h4>{{$errors->first()}}</h4>
                    @endif


                        <label for="li-id">Identifiant</label><br />
                        <input type="text" id="li-id" name="email" required /><br />

                        <div id="li-id-error" class="sb1-error"></div>

                        <div class="sb1-blank-20"></div>

                        <label for="li-pass">Mot de passe</label><br />
                        <input
                            type="password"
                            id="li-pass"
                            name="mot_passe"
                            required
                        /><br />

                        <div id="li-pass-error" class="sb1-error"></div>

                        <div class="sb1-blank-20"></div>

                        <div class="sb1-submit">
                            <button class="sb1-cancel" name="" id="li-cancel">
                                Annuler
                            </button>
                            <button
                                class="sb1-continue"
                                type="submit"
                                value="Submit"
                                name=""
                                id="li-login"
                            >
                                Login
                            </button>
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

        <script></script>

@endsection
        