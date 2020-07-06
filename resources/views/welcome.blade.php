<title>welcome</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

<!-- Master Header/Footer -->
@extends('layouts.master')

@section('content')
<div class="container">
<div class="blank-51"></div>
    <!-- top section -->
    <div class="d-flex justify-content-center topSection-ctnr">
      <div class="fix-width">
        <div class="searchSection">
          <h1 class="font-weight-bold color-black">
            Un BriKoleur En Un Click !
          </h1>
          <!-- fix savoir border later -->
          <div>
            <span class="fs-36 border-accent color-grey-dark fs-34-r fs-22-r"
              >Savoir</span
            ><span class="fs-36 color-accent fs-34-r fs-22-r">
              Plus
              <svg
                width="12"
                height="20"
                viewBox="0 0 12 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M0.585615 19.4137C0.210646 19.0382 0 18.5289 0 17.9979C0 17.4669 0.210646 16.9577 0.585615 16.5822L7.17208 9.98791L0.585615 3.39367C0.221273 3.01599 0.0196688 2.51015 0.024226 1.9851C0.0287832 1.46005 0.239137 0.957801 0.609979 0.58652C0.980822 0.21524 1.48248 0.00463824 2.00691 7.56996e-05C2.53134 -0.00448684 3.03658 0.197355 3.41382 0.562127L11.4144 8.57214C11.7894 8.94767 12 9.45692 12 9.98791C12 10.5189 11.7894 11.0282 11.4144 11.4037L3.41382 19.4137C3.03873 19.7891 2.53008 20 1.99972 20C1.46935 20 0.960697 19.7891 0.585615 19.4137Z"
                  fill="#FFC000"
                />
              </svg>
            </span>
          </div>
          <div>
            <div class="blank-55"></div>
            <h2 class="fs-28 color-black textCenter fs-20-r">
              Trouver vos Brikoleurs maintenant :
            </h2>
            <!-- search (put this in different folder) -->
            <div class="text-center">
              <!-- Bring me All Professions -->
              <select name="" id="Select_profession" class="selectSearch mr-10">
                <option class="placeHolder" value="" disabled selected hidden
                  >Profession...</option
                >
                <!-- Call Professions -->
                @foreach($dataprofession as $row)                
                <option name="profession" value="{{$row->libelle_P}}">{{$row->libelle_P}}</option>
                <!-- call for sub professions -->
                <!-- @foreach($suprofession as $res)
                @if($row->id_profession == $res->id_profession)
                <option name="sousprofession" value="{{$res->libelle_SP}}">{{$res->libelle_SP}}</option>
                @endif
                @endforeach -->
                @endforeach
              </select>
              <!-- Bring me All Cities -->
              <select name="" id="Select_Ville" class="selectSearch mr-10">
                <option value="" disabled selected hidden>Ville...</option>
                @foreach($datacity as $row)
                <option value="{{$row->lieu}}">{{$row->lieu}}</option>
                @endforeach
              </select>
              <!-- Search Button -->
              <input
                type="submit"
                value="Trouver"
                class="findBtn fs-24 font-weight-bold"
                id="btn_searchBrikoluer"
              />
            </div>
            <!-- end search -->

            <!-- Les plus cherchées aujourd'hui -->
            <div class="d-flex flex-wrap mt-15 popularS-parent">
              <div class="color-grey-dark fs-16 fw-500 mr-10 fs-14-r">
                Les plus cherchées aujourd'hui :
              </div>
              <div class="popularS fs-14 font-italic">Peintre</div>
              <div class="popularS fs-14 font-italic">Forgeron</div>
              <div class="popularS fs-14 font-italic">Maçon</div>
              <div class="popularS fs-14 font-italic">Plombier</div>
            </div>
            <!-- end Les plus cherchées aujourd'hui -->
          </div>
        </div>
        <div class="blank-55"></div>
        <!-- ---------- -->
        <div>
          <div class="ad4 show-on-xs"></div>
        </div>
        <div class="blank-55 show-on-xs"></div>

        <!-- Brikoleurs premium P2 -->
        <div class="flex-wrap fix-width Brikoleurs_premium2">

          @foreach($data as $row)
        <div class="sm-container sm-container-200 mr-10 ml-10 mb-20 mr-10-r ml-10-r mb-20-r">
          <img
            class="img-s180 mb-10 img-s152-r"
            src="images/Uploads/Profile/{{$row->reference}}"
            alt="Image de {{$row->prenom}} {{$row->nom}}"
          />
          <div class="fs-17 color-black fw-500 fs-17-r">{{$row->prenom}} {{$row->nom}}</div>
          <div class="fs-17 color-grey-dark fw-500 fs-17-r">{{$row->libelle_P}}</div>
        </div>
        @endforeach
          
        </div>
        <!-- end Brikoleurs premium p2 -->
        <!-- ---------- -->
        <!-- Pourquoi BriKole -->
        <div class="whyBrikole1">
          <h3 class="fs-24 color-black">Pourquoi BriKole ?</h3>
          <div class="d-flex mt-7">
            <div class="d-flex align-items-center mr-20">
              <div class="d-flex align-items-center stats fw-500 mr-10">
                <div class="dot rounded-circle"></div>
                <div>12849</div>
              </div>
              <div class="fs-20 color-grey-dark fw-500">Visites par jour</div>
            </div>
            <div class="d-flex align-items-center mr-20">
              <div class="d-flex align-items-center stats fw-500 mr-10">
                <div class="dot rounded-circle"></div>
                <div>5384</div>
              </div>
              <div class="fs-20 color-grey-dark fw-500">Brikoleurs</div>
            </div>
          </div>
        </div>
        <!-- end Pourquoi BriKole -->
        <div class="blank-55"></div>
        <!-- ad2-r -->
        <div>
          <div class="ad3 blank-55-hide hide-on-xs"></div>
        </div>
        <!-- end ad2-r -->
        <div class="blank-55 blank-55-hide hide-on-xs"></div>
        <!-- Explorer -->
        <div class="explorer-grandparent">
          <div class="explorer-parent">
            <h3 class="fs-24 color-black textCenter">Explorer</h3>
            <div class="d-flex fs-14 explorer">
              <div class="d-flex sm-container sm-container-320 mr-10">
                <img class="img-s110 mr-10" src="images/testimg.jpg" alt="" />
                <div class="explorer-text">
                  <div class="color-grey-dark font-weight-bold mb-5-c">
                    Programmation robotique :
                  </div>
                  <div class="fw-500 color-grey-500 h-80 overflow-hidden">
                    Une activité qui consiste à développer des programmes
                    transmise à un robot pour lui faire réaliser une tâche.
                  </div>
                </div>
              </div>
              <div class="d-flex sm-container sm-container-320 mr-10">
                <img class="img-s110 mr-10" src="images/testimg.jpg" alt="" />
                <div class="explorer-text">
                  <div class="color-grey-dark font-weight-bold mb-5-c">
                    Sculpture sur bois :
                  </div>
                  <div class="fw-500 color-grey-500 h-80 overflow-hidden">
                    La sculpture est une œuvre qu'on obtient en retirant de la
                    matière. Le bois est sans doute le premier matériau.
                  </div>
                </div>
              </div>
              <div class="d-flex sm-container sm-container-320 mr-10">
                <img class="img-s110 mr-10" src="images/testimg.jpg" alt="" />
                <div class="explorer-text">
                  <div class="color-grey-dark font-weight-bold mb-5-c">
                    Programmation robotique :
                  </div>
                  <div class="fw-500 color-grey-500 h-80 overflow-hidden">
                    Une activité qui consiste à développer des programmes
                    transmise à un robot pour lui faire réaliser une tâche.
                  </div>
                </div>
              </div>
              <div class="d-flex sm-container sm-container-320 mr-10">
                <img class="img-s110 mr-10" src="images/testimg.jpg" alt="" />
                <div class="explorer-text">
                  <div class="color-grey-dark font-weight-bold mb-5-c">
                    Programmation robotique :
                  </div>
                  <div class="fw-500 color-grey-500 h-80 overflow-hidden">
                    Une activité qui consiste à développer des programmes
                    transmise à un robot pour lui faire réaliser une tâche.
                  </div>
                </div>
              </div>
              <div class="d-flex sm-container sm-container-320 mr-10">
                <img class="img-s110 mr-10" src="images/testimg.jpg" alt="" />
                <div class="explorer-text">
                  <div class="color-grey-dark font-weight-bold mb-5-c">
                    Programmation robotique :
                  </div>
                  <div class="fw-500 color-grey-500 h-80 overflow-hidden">
                    Une activité qui consiste à développer des programmes
                    transmise à un robot pour lui faire réaliser une tâche.
                  </div>
                </div>
              </div>
              <div class="d-flex sm-container sm-container-320 mr-10">
                <img class="img-s110 mr-10" src="images/testimg.jpg" alt="" />
                <div class="explorer-text">
                  <div class="color-grey-dark font-weight-bold mb-5-c">
                    Programmation robotique :
                  </div>
                  <div class="fw-500 color-grey-500 h-80 overflow-hidden">
                    Une activité qui consiste à développer des programmes
                    transmise à un robot pour lui faire réaliser une tâche.
                  </div>
                </div>
              </div>
            </div>
            <div
              class="float-right d-flex justify-content-between slideIndicator-ctnr mt-7"
            ></div>
          </div>
        </div>

        <!-- end Explorer -->
      </div>

      <div class="blank-30"></div>
      <!-- Brikoleurs premium P1 -->
      <div class="flex-wrap fix-width Brikoleurs_premium1">
      <!-- get data from HomeController.php -->
      <!-- SELECT 'images.reference','brikoleurs.nom','brikoleurs.prenom','professions.libelle_P' -->
      <!-- randomly -->
        @foreach($data as $row)
        <div class="sm-container sm-container-200 ml-20 mb-20">
          <img
            class="img-s180 mb-10"
             src="images/Uploads/Profile/{{$row->reference}}"
            alt="name of bk1"
          />
          <div class="fs-17 color-black fw-500">{{$row->prenom}} {{$row->nom}}</div>
          <div class="fs-17 color-grey-dark fw-500">{{$row->libelle_P}}</div>
        </div>
        @endforeach

        <!-- <div class="sm-container sm-container-200 ml-20 mb-20">
          <img
            class="img-s180 mb-10"
            src="images/testimg.jpg"
            alt="name of bk1"
          />
          <div class="fs-17 color-black fw-500">Hicham BOUNOIR</div>
          <div class="fs-17 color-grey-dark fw-500">Plâtrier</div>
        </div>
        <div class="sm-container sm-container-200 ml-20 mb-20">
          <img
            class="img-s180 mb-10"
            src="images/testimg.jpg"
            alt="name of bk1"
          />
          <div class="fs-17 color-black fw-500">Hicham BOUNOIR</div>
          <div class="fs-17 color-grey-dark fw-500">Plâtrier</div>
        </div>
        <div class="sm-container sm-container-200 ml-20 mb-20">
          <img
            class="img-s180 mb-10"
            src="images/testimg.jpg"
            alt="name of bk1"
          />
          <div class="fs-17 color-black fw-500">Hicham BOUNOIR</div>
          <div class="fs-17 color-grey-dark fw-500">Plâtrier</div>
        </div>
        <div class="sm-container sm-container-200 ml-20 mb-20">
          <img
            class="img-s180 mb-10"
            src="images/testimg.jpg"
            alt="name of bk1"
          />
          <div class="fs-17 color-black fw-500">Hicham BOUNOIR</div>
          <div class="fs-17 color-grey-dark fw-500">Plâtrier</div>
        </div>
        <div class="sm-container sm-container-200 ml-20 mb-20">
          <img
            class="img-s180 mb-10"
            src="images/testimg.jpg"
            alt="name of bk1"
          />
          <div class="fs-17 color-black fw-500">Hicham BOUNOIR</div>
          <div class="fs-17 color-grey-dark fw-500">Plâtrier</div>
        </div> -->
      </div>
      <!-- end Brikoleurs premium p1 -->
    </div>
    <div class="blank-73"></div>
    <!-- Pourquoi BriKole -->
    <div class="whyBrikole2 flex-column align-items-center">
      <h3 class="fs-24 color-black">Pourquoi BriKole ?</h3>
      <div class="d-flex flex-wrap justify-content-center whyBrikole-ctnr">
        <div
          class="d-flex flex-column align-items-center sm-container whyBrikole-item"
        >
          <div
            class="rounded-circle d-flex justify-content-center align-items-center font-weight-bold fs-20 color-accent-dark whyBrikole-circule"
          >
            12849
          </div>
          <div class="color-black fw-500 fs-20">Visites par jour</div>
        </div>
        <div
          class="d-flex flex-column align-items-center sm-container whyBrikole-item"
        >
          <div
            class="rounded-circle d-flex justify-content-center align-items-center font-weight-bold fs-20 color-accent-dark whyBrikole-circule"
          >
            5384
          </div>
          <div class="color-black fw-500 fs-20">Brikoleurs</div>
        </div>
      </div>
    </div>
    <!-- end Pourquoi BriKole -->
    <!-- end top section -->

    <div class="blank-51 hide-on-sm"></div>
    <!-- ad1 -->
    <div>
      <div class="ad1"></div>
    </div>
    <!-- end ad1 -->
    <div class="blank-80 hide-on-sm"></div>
    <!-- bottom section -->
    <!-- Recherches récentes -->
    <div class="recRechSlide-parent">
      <h3 class="fs-24 color-black textCenter">Recherches récentes</h3>
      <div class="d-flex justify-content-between recRechSlide">
        <div class="sm-container2">
          <img class="img-s215" src="images/bk1.png" alt="" />
          <div class="d-flex align-items-center">
            <img
              class="rounded-circle img-s50"
              src="images/testimg.jpg"
              alt=""
            />
            <div>
              <div class="fs-14 color-black fw-500">Mahmoud SOCADYA</div>
              <div class="fs-14 color-grey-dark fw-500">Paintre</div>
            </div>
          </div>
        </div>
        <div class="sm-container2">
          <img class="img-s215" src="images/bk2.png" alt="" />
          <div class="d-flex align-items-center">
            <img
              class="rounded-circle img-s50"
              src="images/testimg.jpg"
              alt=""
            />
            <div>
              <div class="fs-14 color-black fw-500">Mahmoud SOCADYA</div>
              <div class="fs-14 color-grey-dark fw-500">Paintre</div>
            </div>
          </div>
        </div>
        <div class="sm-container2">
          <img class="img-s215" src="images/bk3.png" alt="" />
          <div class="d-flex align-items-center">
            <img
              class="rounded-circle img-s50"
              src="images/testimg.jpg"
              alt=""
            />
            <div>
              <div class="fs-14 color-black fw-500">Mahmoud SOCADYA</div>
              <div class="fs-14 color-grey-dark fw-500">Paintre</div>
            </div>
          </div>
        </div>
        <div class="sm-container2">
          <img class="img-s215" src="images/bk4.png" alt="" />
          <div class="d-flex align-items-center">
            <img
              class="rounded-circle img-s50"
              src="images/testimg.jpg"
              alt=""
            />
            <div>
              <div class="fs-14 color-black fw-500">Mahmoud SOCADYA</div>
              <div class="fs-14 color-grey-dark fw-500">Paintre</div>
            </div>
          </div>
        </div>
        <div class="sm-container2">
          <img class="img-s215" src="images/bk5.png" alt="" />
          <div class="d-flex align-items-center">
            <img
              class="rounded-circle img-s50"
              src="images/testimg.jpg"
              alt=""
            />
            <div>
              <div class="fs-14 color-black fw-500">Mahmoud SOCADYA</div>
              <div class="fs-14 color-grey-dark fw-500">Paintre</div>
            </div>
          </div>
        </div>
      </div>
      <div class="progress float-right progress-cstm">
        <div
          class="progress-bar progress-bar-cstm"
          role="progressbar"
          style="width: 25%;"
          aria-valuenow="25"
          aria-valuemin="0"
          aria-valuemax="100"
        ></div>
      </div>
    </div>
    <!-- end Recherches récentes -->
    <div class="blank-80"></div>
    <!-- ad -->
    <div>
      <div class="ad3 blank-55-hide hide-on-xs"></div>
    </div>
    <div>
      <div class="ad4 show-on-xs"></div>
    </div>
    <div class="blank-55 blank-55-hide"></div>
    <!-- Pourquoi BriKole -->
    <div class="whyBrikole3 flex-column align-items-center">
      <h3 class="fs-24 color-black">Pourquoi BriKole ?</h3>
      <div class="d-flex justify-content-center whyBrikole-ctnr">
        <div
          class="d-flex flex-column align-items-center sm-container whyBrikole-item"
        >
          <div
            class="rounded-circle d-flex justify-content-center align-items-center font-weight-bold fs-20 color-accent-dark whyBrikole-circule"
          >
            12849
          </div>
          <div class="color-black fw-500 fs-20">Visites par jour</div>
        </div>
        <div
          class="d-flex flex-column align-items-center sm-container whyBrikole-item"
        >
          <div
            class="rounded-circle d-flex justify-content-center align-items-center font-weight-bold fs-20 color-accent-dark whyBrikole-circule"
          >
            5384
          </div>
          <div class="color-black fw-500 fs-20">Brikoleurs</div>
        </div>
      </div>
    </div>
    <!-- end Pourquoi BriKole -->
    <div class="blank-55 blank-55-hide"></div>
    <!-- Qui nous fait confiance -->
    <div class="text-center">
      <h3 class="fs-24 color-black">Qui nous fait confiance</h3>
      <div class="d-flex justify-content-center flex-wrap">
        <div class="confiance m-15">
          <img class="img-s225" src="images/company-card1.png" alt="" />
        </div>
        <div class="confiance m-15">
          <img class="img-s225" src="images/company-card1.png" alt="" />
        </div>
        <div class="confiance m-15">
          <img class="img-s225" src="images/company-card1.png" alt="" />
        </div>
        <div class="confiance m-15">
          <img class="img-s225" src="images/company-card1.png" alt="" />
        </div>
      </div>
    </div>
    <!-- end Qui nous fait confiance -->
    <div class="blank-80 hide-on-sm"></div>
    <!-- ad2 -->
    <div>
      <div class="ad2 hide-on-sm"></div>
    </div>
    <!-- end ad2 -->
    <!-- end bottom section -->
    <div class="blank-51"></div>

</div>
@endsection
