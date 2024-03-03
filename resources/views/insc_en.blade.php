@extends('layouts.app')
@section('title')
    {{'Inscription'}}
@endsection
@section('body_tag')
      <body style="background-image: url({{asset('assets/images/background.png')}});">
@endsection
  
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    
@include('inc.header_en')
    <!-- End Header Area -->

@section('content')
<section style="direction:rtl;text-align: right;" id="home" class="hero-area">    
  <h1 style="color: white;text-align: center;">Registration on the platform</h1>
</section>
<section id="features" style="background-color: rgba(255, 255, 255, 0.7);backdrop-filter: blur(10px);" class="features section">
  <div class="content1">
    <!--content inner-->
    <div class="content__inner1">
      
      <div class="container overflow-hidden1">
        <!--multisteps-form-->
        <div class="multisteps-form1">
          <!--progress bar-->
          <br><br><br>
          <div class="row">
            <div class="col-15 col-lg-8 m-auto">
              <div class="multisteps-form__progress1">
                <button class="multisteps-form__progress-btn1 js-active1" type="button" title="User Info">User Info</button>
                <button class="multisteps-form__progress-btn1" type="button" title="Address">Label</button>
                <button class="multisteps-form__progress-btn1" type="button" title="Order Info">Questionnaire</button>
                <button class="multisteps-form__progress-btn1" type="button" title="Comments">Confiramtion        </button>
              </div>
            </div>
          </div>
          <br><br>
          

          <!--form panels-->
          <div class="row">
            <div class="col-12 col-lg-8 m-auto">
              <form class="multisteps-form__form1">
                <!--single form panel-->
                <div class="multisteps-form__panel1 shadow p-4 rounded bg-white js-active1" data-animation="scaleIn">
                  <h3 class="multisteps-form__title1">Your user Infomation</h3>
                  <div class="multisteps-form__content1">

                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
                        <input class="multisteps-form__input1 form-control" type="text" placeholder="First Name"/>
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                        <input class="multisteps-form__input1 form-control" type="text" placeholder="Last Name"/>
                      </div>
                    </div>
                    

                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-12">
                        <input class="multisteps-form__input1 form-control" type="text" placeholder="Email"/>
                      </div>
                    </div>
                    <div class="form-row mt-4">
                        <div class="col-12 col-sm-12">
                          <select class="multisteps-form__input1 form-control" name="nationality" >
<option value="">-- select nationality --</option>
<option value="afghan">Afghan</option>
<option value="albanian">Albanian</option>
<option value="algerian">Algerian</option>
<option value="american">American</option>
<option value="andorran">Andorran</option>
<option value="angolan">Angolan</option>
<option value="antiguans">Antiguans</option>
<option value="argentinean">Argentinean</option>
<option value="armenian">Armenian</option>
<option value="australian">Australian</option>
<option value="austrian">Austrian</option>
<option value="azerbaijani">Azerbaijani</option>
<option value="bahamian">Bahamian</option>
<option value="bahraini">Bahraini</option>
<option value="bangladeshi">Bangladeshi</option>
<option value="barbadian">Barbadian</option>
<option value="barbudans">Barbudans</option>
<option value="batswana">Batswana</option>
<option value="belarusian">Belarusian</option>
<option value="belgian">Belgian</option>
<option value="belizean">Belizean</option>
<option value="beninese">Beninese</option>
<option value="bhutanese">Bhutanese</option>
<option value="bolivian">Bolivian</option>
<option value="bosnian">Bosnian</option>
<option value="brazilian">Brazilian</option>
<option value="british">British</option>
<option value="bruneian">Bruneian</option>
<option value="bulgarian">Bulgarian</option>
<option value="burkinabe">Burkinabe</option>
<option value="burmese">Burmese</option>
<option value="burundian">Burundian</option>
<option value="cambodian">Cambodian</option>
<option value="cameroonian">Cameroonian</option>
<option value="canadian">Canadian</option>
<option value="cape verdean">Cape Verdean</option>
<option value="central african">Central African</option>
<option value="chadian">Chadian</option>
<option value="chilean">Chilean</option>
<option value="chinese">Chinese</option>
<option value="colombian">Colombian</option>
<option value="comoran">Comoran</option>
<option value="congolese">Congolese</option>
<option value="costa rican">Costa Rican</option>
<option value="croatian">Croatian</option>
<option value="cuban">Cuban</option>
<option value="cypriot">Cypriot</option>
<option value="czech">Czech</option>
<option value="danish">Danish</option>
<option value="djibouti">Djibouti</option>
<option value="dominican">Dominican</option>
<option value="dutch">Dutch</option>
<option value="east timorese">East Timorese</option>
<option value="ecuadorean">Ecuadorean</option>
<option value="egyptian">Egyptian</option>
<option value="emirian">Emirian</option>
<option value="equatorial guinean">Equatorial Guinean</option>
<option value="eritrean">Eritrean</option>
<option value="estonian">Estonian</option>
<option value="ethiopian">Ethiopian</option>
<option value="fijian">Fijian</option>
<option value="filipino">Filipino</option>
<option value="finnish">Finnish</option>
<option value="french">French</option>
<option value="gabonese">Gabonese</option>
<option value="gambian">Gambian</option>
<option value="georgian">Georgian</option>
<option value="german">German</option>
<option value="ghanaian">Ghanaian</option>
<option value="greek">Greek</option>
<option value="grenadian">Grenadian</option>
<option value="guatemalan">Guatemalan</option>
<option value="guinea-bissauan">Guinea-Bissauan</option>
<option value="guinean">Guinean</option>
<option value="guyanese">Guyanese</option>
<option value="haitian">Haitian</option>
<option value="herzegovinian">Herzegovinian</option>
<option value="honduran">Honduran</option>
<option value="hungarian">Hungarian</option>
<option value="icelander">Icelander</option>
<option value="indian">Indian</option>
<option value="indonesian">Indonesian</option>
<option value="iranian">Iranian</option>
<option value="iraqi">Iraqi</option>
<option value="irish">Irish</option>
<option value="israeli">Israeli</option>
<option value="italian">Italian</option>
<option value="ivorian">Ivorian</option>
<option value="jamaican">Jamaican</option>
<option value="japanese">Japanese</option>
<option value="jordanian">Jordanian</option>
<option value="kazakhstani">Kazakhstani</option>
<option value="kenyan">Kenyan</option>
<option value="kittian and nevisian">Kittian and Nevisian</option>
<option value="kuwaiti">Kuwaiti</option>
<option value="kyrgyz">Kyrgyz</option>
<option value="laotian">Laotian</option>
<option value="latvian">Latvian</option>
<option value="lebanese">Lebanese</option>
<option value="liberian">Liberian</option>
<option value="libyan">Libyan</option>
<option value="liechtensteiner">Liechtensteiner</option>
<option value="lithuanian">Lithuanian</option>
<option value="luxembourger">Luxembourger</option>
<option value="macedonian">Macedonian</option>
<option value="malagasy">Malagasy</option>
<option value="malawian">Malawian</option>
<option value="malaysian">Malaysian</option>
<option value="maldivan">Maldivan</option>
<option value="malian">Malian</option>
<option value="maltese">Maltese</option>
<option value="marshallese">Marshallese</option>
<option value="mauritanian">Mauritanian</option>
<option value="mauritian">Mauritian</option>
<option value="mexican">Mexican</option>
<option value="micronesian">Micronesian</option>
<option value="moldovan">Moldovan</option>
<option value="monacan">Monacan</option>
<option value="mongolian">Mongolian</option>
<option value="moroccan">Moroccan</option>
<option value="mosotho">Mosotho</option>
<option value="motswana">Motswana</option>
<option value="mozambican">Mozambican</option>
<option value="namibian">Namibian</option>
<option value="nauruan">Nauruan</option>
<option value="nepalese">Nepalese</option>
<option value="new zealander">New Zealander</option>
<option value="ni-vanuatu">Ni-Vanuatu</option>
<option value="nicaraguan">Nicaraguan</option>
<option value="nigerien">Nigerien</option>
<option value="north korean">North Korean</option>
<option value="northern irish">Northern Irish</option>
<option value="norwegian">Norwegian</option>
<option value="omani">Omani</option>
<option value="pakistani">Pakistani</option>
<option value="palauan">Palauan</option>
<option value="panamanian">Panamanian</option>
<option value="papua new guinean">Papua New Guinean</option>
<option value="paraguayan">Paraguayan</option>
<option value="peruvian">Peruvian</option>
<option value="polish">Polish</option>
<option value="portuguese">Portuguese</option>
<option value="qatari">Qatari</option>
<option value="romanian">Romanian</option>
<option value="russian">Russian</option>
<option value="rwandan">Rwandan</option>
<option value="saint lucian">Saint Lucian</option>
<option value="salvadoran">Salvadoran</option>
<option value="samoan">Samoan</option>
<option value="san marinese">San Marinese</option>
<option value="sao tomean">Sao Tomean</option>
<option value="saudi">Saudi</option>
<option value="scottish">Scottish</option>
<option value="senegalese">Senegalese</option>
<option value="serbian">Serbian</option>
<option value="seychellois">Seychellois</option>
<option value="sierra leonean">Sierra Leonean</option>
<option value="singaporean">Singaporean</option>
<option value="slovakian">Slovakian</option>
<option value="slovenian">Slovenian</option>
<option value="solomon islander">Solomon Islander</option>
<option value="somali">Somali</option>
<option value="south african">South African</option>
<option value="south korean">South Korean</option>
<option value="spanish">Spanish</option>
<option value="sri lankan">Sri Lankan</option>
<option value="sudanese">Sudanese</option>
<option value="surinamer">Surinamer</option>
<option value="swazi">Swazi</option>
<option value="swedish">Swedish</option>
<option value="swiss">Swiss</option>
<option value="syrian">Syrian</option>
<option value="taiwanese">Taiwanese</option>
<option value="tajik">Tajik</option>
<option value="tanzanian">Tanzanian</option>
<option value="thai">Thai</option>
<option value="togolese">Togolese</option>
<option value="tongan">Tongan</option>
<option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
<option value="tunisian">Tunisian</option>
<option value="turkish">Turkish</option>
<option value="tuvaluan">Tuvaluan</option>
<option value="ugandan">Ugandan</option>
<option value="ukrainian">Ukrainian</option>
<option value="uruguayan">Uruguayan</option>
<option value="uzbekistani">Uzbekistani</option>
<option value="venezuelan">Venezuelan</option>
<option value="vietnamese">Vietnamese</option>
<option value="welsh">Welsh</option>
<option value="yemenite">Yemenite</option>
<option value="zambian">Zambian</option>
<option value="zimbabwean">Zimbabwean</option>
</select>
                        </div>
                      </div>
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
                        <input class="multisteps-form__input1 form-control" type="password" placeholder="Password"/>
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                        <input class="multisteps-form__input1 form-control" type="password" placeholder="Repeat Password"/>
                      </div>
                    </div>
                    <div class="button-row d-flex mt-4">
                      <button style="background-color: #102e4d;border-color: transparent;" class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                    </div>
                  </div>
                </div>
                <!--single form panel-->
                <div class="multisteps-form__panel1 shadow p-4 rounded bg-white" data-animation="scaleIn">
                  <h3 class="multisteps-form__title1">Your Label</h3>
                  <div class="multisteps-form__content1">

                    <div class="form-row mt-4">
                        <div class="col">
                          <label for="">Do you have Label  ? (if Yes , enter the title of the label)</label>
                          
                            <div class="col-12 col-sm-6">
                                <input type="checkbox" placeholder=""/> Yes
                            </div>
                            <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                <input type="checkbox" placeholder=""/> No
                            </div>
                          
                          
                        </div>
                    </div>

                    <div class="form-row mt-4">
                      <div class="col">
                        <input class="multisteps-form__input1 form-control" type="text" placeholder="Title of Label"/>
                      </div>
                    </div>
                    
                    

                    <div class="button-row d-flex mt-4">
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
                      <button style="background-color: #102e4d;border-color: transparent;color:white" class="btn btn-primary1 ml-auto js-btn-next" type="button" title="Next">Next</button>
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                        <button class="btn js-btn-prev" type="button" title="Prev">Prev</button>
                      </div>
                    </div>
                      
                      
                    </div>
                  </div>
                </div>
                <!--single form panel-->
                <div class="multisteps-form__panel1 shadow p-4 rounded bg-white" data-animation="scaleIn">
                  <h3 class="multisteps-form__title1">Your Order Info</h3>
                  <div class="multisteps-form__content1">
                    <div class="row">
                      <div class="col-12 col-md-6 mt-4">
                        <div class="card shadow-sm">
                          <div class="card-body">
                            <h5 class="card-title">Item Title</h5>
                            <p class="card-text">Small and nice item description</p><a class="btn btn-primary" href="#" title="Item Link">Item Link</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 mt-4">
                        <div class="card shadow-sm">
                          <div class="card-body">
                            <h5 class="card-title">Item Title</h5>
                            <p class="card-text">Small and nice item description</p><a class="btn btn-primary" href="#" title="Item Link">Item Link</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="button-row d-flex mt-4 col-12">
                      <div class="button-row d-flex mt-4">
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <button style="background-color: #102e4d;border-color: transparent;color:white" class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                        </div>
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <button class="btn js-btn-prev" type="button" title="Prev">Prev</button>
                        </div>
                      </div>  
                      </div>    
                      </div>
                    </div>
                  </div>
                </div>
                <!--single form panel-->
                <div class="multisteps-form__panel1 shadow p-4 rounded bg-white" data-animation="scaleIn">
                  <h3 class="multisteps-form__title1">Additional Comments</h3>
                  <div class="multisteps-form__content1">
                    <div class="form-row mt-4">
                      <textarea class="multisteps-form__textarea1 form-control" placeholder="Additional Comments and Requirements"></textarea>
                    </div>
                    <div class="button-row d-flex mt-4 col-12">
                      <div class="button-row d-flex mt-4">
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <button style="background-color: #16e7c4;border-color: transparent;color:white" class="btn btn-success ml-auto" type="button" title="Send">Send</button>
                        </div>
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <button class="btn js-btn-prev" type="button" title="Prev">Prev</button>
                        </div>
                      </div>  
                      </div>    
                    </div>
                    
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
    

@section('script')
<script>
  //DOM elements
const DOMstrings = {
  stepsBtnClass: 'multisteps-form__progress-btn1',
  stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn1`),
  stepsBar: document.querySelector('.multisteps-form__progress1'),
  stepsForm: document.querySelector('.multisteps-form__form1'),
  stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea1'),
  stepFormPanelClass: 'multisteps-form__panel1',
  stepFormPanels: document.querySelectorAll('.multisteps-form__panel1'),
  stepPrevBtnClass: 'js-btn-prev',
  stepNextBtnClass: 'js-btn-next'
};

//remove class from a set of items
const removeClasses = (elemSet, className) => {
  
  elemSet.forEach(elem => {
    
    elem.classList.remove(className);
    
  });
  
};

//return exect parent node of the element
const findParent = (elem, parentClass) => {
  
  let currentNode = elem;

  while(! (currentNode.classList.contains(parentClass))) {
    currentNode = currentNode.parentNode;
  }
  
  return currentNode;
  
};

//get active button step number
const getActiveStep = elem => {
  return Array.from(DOMstrings.stepsBtns).indexOf(elem);
};

//set all steps before clicked (and clicked too) to active
const setActiveStep = (activeStepNum) => {
  
  //remove active state from all the state
  removeClasses(DOMstrings.stepsBtns, 'js-active1');
  
  //set picked items to active
  DOMstrings.stepsBtns.forEach((elem, index) => {
    
    if(index <= (activeStepNum) ) {
      elem.classList.add('js-active1');
    }
    
  });
};

//get active panel
const getActivePanel = () => {
  
  let activePanel;
  
  DOMstrings.stepFormPanels.forEach(elem => {
    
    if(elem.classList.contains('js-active1')) {
      
      activePanel = elem;
      
    }
    
  });
  
  return activePanel;
                                    
};

//open active panel (and close unactive panels)
const setActivePanel = activePanelNum => {
  
  //remove active class from all the panels
  removeClasses(DOMstrings.stepFormPanels, 'js-active1');
  
  //show active panel
  DOMstrings.stepFormPanels.forEach((elem, index) => {
    if(index === (activePanelNum)) {
      
      elem.classList.add('js-active1');
   
      setFormHeight(elem);
      
    }
  })
  
};

//set form height equal to current panel height
const formHeight = (activePanel) => {
  
  const activePanelHeight = activePanel.offsetHeight;
  
  DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;
  
};

const setFormHeight = () => {
  const activePanel = getActivePanel();

  formHeight(activePanel);
}

//STEPS BAR CLICK FUNCTION
DOMstrings.stepsBar.addEventListener('click', e => {
  
  //check if click target is a step button
  const eventTarget = e.target;
  
  if(!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
    return;
  }
  
  //get active button step number
  const activeStep = getActiveStep(eventTarget);
  
  //set all steps before clicked (and clicked too) to active
  setActiveStep(activeStep);
  
  //open active panel
  setActivePanel(activeStep);
});

//PREV/NEXT BTNS CLICK
DOMstrings.stepsForm.addEventListener('click', e => {
  
  const eventTarget = e.target;
  
  //check if we clicked on `PREV` or NEXT` buttons
  if(! ( (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) || (eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`)) ) ) 
  {
    return;
  }
  
  //find active panel
  const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);
  
  let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);
  
  //set active step and active panel onclick
  if(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
    activePanelNum--;
  
  } else {
    
    activePanelNum++;
  
  }
  
  setActiveStep(activePanelNum);
  setActivePanel(activePanelNum);
  
});

//SETTING PROPER FORM HEIGHT ONLOAD
window.addEventListener('load', setFormHeight, false);

//SETTING PROPER FORM HEIGHT ONRESIZE
window.addEventListener('resize', setFormHeight, false);

//changing animation via animation select !!!YOU DON'T NEED THIS CODE (if you want to change animation type, just change form panels data-attr)

const setAnimationType = (newType) => {
  DOMstrings.stepFormPanels.forEach(elem => {
    elem.dataset.animation = newType;
  })
};

//selector onchange - changing animation
const animationSelect = document.querySelector('.pick-animation__select1');

animationSelect.addEventListener('change', () => {
  const newAnimationType = animationSelect.value;
  
  setAnimationType(newAnimationType);
});
</script>

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>

<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
-->

@endsection

  