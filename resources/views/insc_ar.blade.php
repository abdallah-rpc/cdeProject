@extends('layouts.app')
@section('title')
    {{'تسجيل'}}
@endsection
@section('body_tag')
     <body style="background-image: url({{asset('assets/images/background.png')}});font-family:Droid Arabic Kufi;">
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
@include('inc.header_ar')
@section('content')
<section style="direction:rtl;text-align: right;" id="home" class="hero-area">
      
              
  <h1 style="color: white;text-align: center;">التسجيل في المنصة</h1>
    

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
          <button class="multisteps-form__progress-btn1 js-active1" type="button" title="User Info">معلومات المستخدم</button>
          <button class="multisteps-form__progress-btn1" type="button" title="Address">Label</button>
          <button class="multisteps-form__progress-btn1" type="button" title="Order Info">Questionnaire</button>
          <button class="multisteps-form__progress-btn1" type="button" title="Comments">Confiramtion        </button>
        </div>
      </div>
    </div>
    <br><br>
    <!--form panels-->
    <div style="direction: rtl;text-align: right;" class="row">
      <div class="col-12 col-lg-8 m-auto">
        <form class="multisteps-form__form1">
          <!--single form panel-->
          <div class="multisteps-form__panel1 shadow p-4 rounded bg-white js-active1" data-animation="scaleIn">
            <h3 class="multisteps-form__title1">معلومات المستخدم</h3>
            <div class="multisteps-form__content1">

              <div class="form-row mt-4">
                <div class="col-12 col-sm-6">
                  <input class="multisteps-form__input1 form-control" type="text"  placeholder="الاسم الأول"/>
                </div>
                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                  <input class="multisteps-form__input1 form-control" type="text" placeholder="اسم العائلة"/>
                </div>
              </div>

              <div class="form-row mt-4">
                <div class="col-12 col-sm-12">
                  <input class="multisteps-form__input1 form-control" type="text" placeholder="بريد إلكتروني"/>
                </div>
              </div>
              <div class="form-row mt-4">
                  <div class="col-12 col-sm-12">
                    <select class="multisteps-form__input1 form-control" name="nationality">
<option value="">-- اختر جنسية --</option>
<option value="afghan">أفغاني</option>
<option value="albanian">ألباني</option>
<option value="algerian">جزائري</option>
<option value="american">أمريكي</option>
<option value="andorran">أندوري</option>
<option value="angolan">أنغولي</option>
<option value="antiguans">أنتيغوي</option>
<option value="argentinean">أرجنتيني</option>
<option value="armenian">أرميني</option>
<option value="australian">أسترالي</option>
<option value="austrian">نمساوي</option>
<option value="azerbaijani">أذربيجاني</option>
<option value="bahamian">باهامي</option>
<option value="bahraini">بحريني</option>
<option value="bangladeshi">بنغلاديشي</option>
<option value="barbadian">برباديان</option>
<option value="barbudans">بربودان</option>
<option value="batswana">بتسواني</option>
<option value="belarusian">بيلاروسي</option>
<option value="belgian">بلجيكي</option>
<option value="belizean">بليزي</option>
<option value="beninese">بنيني</option>
<option value="bhutanese">بوتاني</option>
<option value="bolivian">بوليفي</option>
<option value="bosnian">بوسني</option>
<option value="brazilian">برازيلي</option>
<option value="british">بريطاني</option>
<option value="bruneian">بروناي</option>
<option value="bulgarian">بلغاري</option>
<option value="burkinabe">بوركيني</option>
<option value="burmese">بورمي</option>
<option value="burundian">بوروندي</option>
<option value="cambodian">كمبودي</option>
<option value="cameroonian">كاميروني</option>
<option value="canadian">كندي</option>
<option value="cape verdean">رأس الأفعى</option>
<option value="central african">وسط أفريقي</option>
<option value="chadian">تشادي</option>
<option value="chilean">تشيلياني</option>
<option value="chinese">صيني</option>
<option value="colombian">كولومبي</option>
<option value="comoran">قمري</option>
<option value="congolese">كونغولي</option>
<option value="costa rican">كوستاريكي</option>
<option value="croatian">كرواتي</option>
<option value="cuban">كوبي</option>
<option value="cypriot">قبرصي</option>
<option value="czech">تشيكي</option>
<option value="danish">دنماركي</option>
<option value="djibouti">جيبوتي</option>
<option value="dominican">دومينيكاني</option>
<option value="dutch">هولندي</option>
<option value="east timorese">تيموري شرقي</option>
<option value="ecuadorean">إكوادوري</option>
<option value="egyptian">مصري</option>
<option value="emirian">إماراتي</option>
<option value="equatorial guinean">غينيا الاستوائية</option>
<option value="eritrean">إريتري</option>
<option value="estonian">إستوني</option>
<option value="ethiopian">إثيوبي</option>
<option value="fijian">فيجي</option>
<option value="filipino">فلبيني</option>
<option value="finnish">فنلندي</option>
<option value="french">فرنسي</option>
<option value="gabonese">غابوني</option>
<option value="gambian">غامبياني</option>
<option value="georgian">جورجي</option>
<option value="german">ألماني</option>
<option value="ghanaian">غاني</option>
<option value="greek">يوناني</option>
<option value="grenadian">غرينادي</option>
<option value="guatemalan">غواتيمالي</option>
<option value="guinea-bissauan">غيني بيساوي</option>
<option value="guinean">غيني</option>
<option value="guyanese">غياني</option>
<option value="haitian">هايتي</option>
<option value="herzegovinian">هرسكي</option>
<option value="honduran">هندوراسي</option>
<option value="hungarian">هنغاري</option>
<option value="icelander">آيسلندي</option>
<option value="indian">هندي</option>
<option value="indonesian">إندونيسي</option>
<option value="iranian">إيراني</option>
<option value="iraqi">عراقي</option>
<option value="irish">إيرلندي</option>
<option value="israeli">إسرائيلي</option>
<option value="italian">إيطالي</option>
<option value="ivorian">إيفواري</option>
<option value="jamaican">جامايكي</option>
<option value="japanese">ياباني</option>
<option value="jordanian">أردني</option>
<option value="kazakhstani">كازاخستاني</option>
<option value="kenyan">كيني</option>
<option value="kittian and nevisian">كيتيان ونيفيسيان</option>
<option value="kuwaiti">كويتي</option>
<option value="kyrgyz">قيرغيزي</option>
<option value="laotian">لاوسي</option>
<option value="latvian">لاتفي</option>
<option value="lebanese">لبناني</option>
<option value="liberian">ليبيري</option>
<option value="libyan">ليبي</option>
<option value="liechtensteiner">ليختنشتايني</option>
<option value="lithuanian">ليتواني</option>
<option value="luxembourger">لوكسمبورجي</option>
<option value="macedonian">مقدوني</option>
<option value="malagasy">مدغشقري</option>
<option value="malawian">ملاوي</option>
<option value="malaysian">ماليزي</option>
<option value="maldivan">مالديفي</option>
<option value="malian">مالي</option>
<option value="maltese">مالطي</option>
<option value="marshallese">جزر مارشال</option>
<option value="mauritanian">موريتاني</option>
<option value="mauritian">موريشيان</option>
<option value="mexican">مكسيكي</option>
<option value="micronesian">ميكرونيزي</option>
<option value="moldovan">مولدوفي</option>
<option value="monacan">موناكو</option>
<option value="mongolian">منغولي</option>
<option value="moroccan">مغربي</option>
<option value="mosotho">موسوثو</option>
<option value="motswana">موتسواني</option>
<option value="mozambican">موزمبيقي</option>
<option value="namibian">ناميبي</option>
<option value="nauruan">ناورو</option>
<option value="nepalese">نيبالي</option>
<option value="new zealander">نيوزيلندي</option>
<option value="ni-vanuatu">نيفانواتي</option>
<option value="nicaraguan">نيكاراغواني</option>
<option value="nigerien">نيجيري</option>
<option value="north korean">كوري شمالي</option>
<option value="northern irish">إيرلندي شمالي</option>
<option value="norwegian">نرويجي</option>
<option value="omani">عماني</option>
<option value="pakistani">باكستاني</option>
<option value="palauan">بالاوي</option>
<option value="panamanian">بنمي</option>
<option value="papua new guinean">بابوا نيو غيني</option>
<option value="paraguayan">باراغوياني</option>
<option value="peruvian">بيروفي</option>
<option value="polish">بولندي</option>
<option value="portuguese">برتغالي</option>
<option value="qatari">قطري</option>
<option value="romanian">روماني</option>
<option value="russian">روسي</option>
<option value="rwandan">رواندي</option>
<option value="saint lucian">سانت لوسيان</option>
<option value="salvadoran">سلفادوري</option>
<option value="samoan">سامواي</option>
<option value="san marinese">سان مارينيز</option>
<option value="sao tomean">ساو تومي وبرينسيبي</option>
<option value="saudi">سعودي</option>
<option value="scottish">اسكتلندي</option>
<option value="senegalese">سنغالي</option>
<option value="serbian">صربي</option>
<option value="seychellois">سيشلوازي</option>
<option value="sierra leonean">سيراليوني</option>
<option value="singaporean">سنغافوري</option>
<option value="slovakian">سلوفاكي</option>
<option value="slovenian">سلوفيني</option>
<option value="solomon islander">جزر سليمان</option>
<option value="somali">صومالي</option>
<option value="south african">جنوب أفريقي</option>
<option value="south korean">كوري جنوبي</option>
<option value="spanish">إسباني</option>
<option value="sri lankan">سريلانكي</option>
<option value="sudanese">سوداني</option>
<option value="surinamer">سورينامي</option>
<option value="swazi">سوازيلاندي</option>
<option value="swedish">سويدي</option>
<option value="swiss">سويسري</option>
<option value="syrian">سوري</option>
<option value="taiwanese">تايواني</option>
<option value="tajik">طاجيكي</option>
<option value="tanzanian">تنزاني</option>
<option value="thai">تايلاندي</option>
<option value="togolese">توجولي</option>
<option value="tongan">تونغاني</option>
<option value="trinidadian or tobagonian">ترينيدادي وتوباغوني</option>
<option value="tunisian">تونسي</option>
<option value="turkish">تركي</option>
<option value="tuvaluan">توفالوي</option>
<option value="ugandan">أوغندي</option>
<option value="ukrainian">أوكراني</option>
<option value="uruguayan">أوروغوياني</option>
<option value="uzbekistani">أوزبكي</option>
<option value="venezuelan">فنزويلي</option>
<option value="vietnamese">فيتنامي</option>
<option value="welsh">ويلزي</option>
<option value="yemenite">يمني</option>
<option value="zambian">زامبياني</option>
<option value="zimbabwean">زيمبابوي</option>
</select>

                  </div>
                </div>
              <div class="form-row mt-4">
                <div class="col-12 col-sm-6">
                  <input class="multisteps-form__input1 form-control" type="password" placeholder="كلمة المرور"/>
                </div>
                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                  <input class="multisteps-form__input1 form-control" type="password" placeholder="اعد كلمة المرور"/>
                </div>
              </div>
              <div class="button-row d-flex mt-4">
                <button style="background-color: #102e4d;border-color: transparent;"  class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">التالي</button>
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

  