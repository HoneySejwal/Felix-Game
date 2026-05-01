@extends('frontend.layouts.master')
@section('main-content')
<style>
.about-flash {
    position: relative;
}
    .vertical-text-right {
    /*position: absolute;*/
    right: auto;
    left: 100%;
    margin-left: -34px;
    top: 0;
    transform: rotate(90deg);
    transform-origin: top left;
    white-space: nowrap;
    text-align: left;
}
    .about-flash .vertical-text-right {
    right: auto;
    left: 0;
    margin-left: 35px;
    margin-top: 1.66666667vmin;
    color: #ffffff;
    font-weight: bold;
    font-size: 1.125rem;
}
    .h1-flash {
    margin-bottom: 7.40740741vmin;
    background: linear-gradient(to bottom, #ff7c00, #ff0000);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 9.25925926vmin;
    line-height: 1;
}
</style>
<main style="margin-top:128px;">
    <!--video start -->
     <div class="promo-video-container full-height">


          <div class="circular-container">
            <div class="circular-wrapper">
              <ul class="circular-names">
                <li class="circular-name is-init" data-portrait-index="1">
                  <span class="name-wrapper">Boral travel</span><span class="name-wrapper name-wrapper-date">2018</span>
                </li>
                <li class="circular-name is-init" data-portrait-index="2">
                  <span class="name-wrapper">Noke Store</span><span class="name-wrapper name-wrapper-date">2018</span>
                </li>
                <li class="circular-name is-init" data-portrait-index="3">
                  <span class="name-wrapper">ABA Surf</span><span class="name-wrapper name-wrapper-date">2017</span>
                </li>
                <li class="circular-name is-init" data-portrait-index="4">
                  <span class="name-wrapper">Dogoby</span><span class="name-wrapper name-wrapper-date">2017</span>
                </li>
                <li class="circular-name is-init" data-portrait-index="5">
                  <span class="name-wrapper">Sayder 918</span><span class="name-wrapper name-wrapper-date">2016</span>
                </li>
              </ul>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 862 862" style="enable-background:new 0 0 862 862;" xml:space="preserve">
                <g class="circle-path circle-path--background">
                  <defs>
                    <path id="SVGID_1_" d="M862,0H0v862h862V0z M550.5,31c0-4.7,3.8-8.5,8.5-8.5s8.5,3.8,8.5,8.5s-3.8,8.5-8.5,8.5
                    S550.5,35.7,550.5,31z M80.5,184c0-4.7,3.8-8.5,8.5-8.5s8.5,3.8,8.5,8.5s-3.8,8.5-8.5,8.5S80.5,188.7,80.5,184z M842.5,431
                    c0-4.7,3.8-8.5,8.5-8.5s8.5,3.8,8.5,8.5s-3.8,8.5-8.5,8.5S842.5,435.7,842.5,431z M80.5,678c0-4.7,3.8-8.5,8.5-8.5
                    s8.5,3.8,8.5,8.5s-3.8,8.5-8.5,8.5S80.5,682.7,80.5,678z M550.5,833c0-4.7,3.8-8.5,8.5-8.5s8.5,3.8,8.5,8.5s-3.8,8.5-8.5,8.5
                    S550.5,837.7,550.5,833z" />
                  </defs>
                  <clipPath id="SVGID_2_">
                    <use xlink:href="#SVGID_1_" style="overflow:visible;" />
                  </clipPath>
                  <circle class="st0" cx="430" cy="432" r="421" clip-path="url(#SVGID_2_)" fill="none" stroke="#000" stroke-width="3" stroke-miterlimit="10" />
                </g>
                <g class="circle-path circle-path--fill">
                  <defs>
                    <path id="SVGID_3_" d="M862,0H0v862h862V0z M550.5,31c0-4.7,3.8-8.5,8.5-8.5s8.5,3.8,8.5,8.5s-3.8,8.5-8.5,8.5
                    S550.5,35.7,550.5,31z M80.5,184c0-4.7,3.8-8.5,8.5-8.5s8.5,3.8,8.5,8.5s-3.8,8.5-8.5,8.5S80.5,188.7,80.5,184z M842.5,431
                    c0-4.7,3.8-8.5,8.5-8.5s8.5,3.8,8.5,8.5s-3.8,8.5-8.5,8.5S842.5,435.7,842.5,431z M80.5,678c0-4.7,3.8-8.5,8.5-8.5
                    s8.5,3.8,8.5,8.5s-3.8,8.5-8.5,8.5S80.5,682.7,80.5,678z M550.5,833c0-4.7,3.8-8.5,8.5-8.5s8.5,3.8,8.5,8.5s-3.8,8.5-8.5,8.5
                    S550.5,837.7,550.5,833z" />
                  </defs>
                  <clipPath id="SVGID_4_">
                    <use xlink:href="#SVGID_3_" style="overflow:visible;"/>
                  </clipPath>
                  <circle class="st1" cx="430" cy="432" r="421" clip-path="url(#SVGID_4_)" fill="none" stroke="#000" stroke-width="3" stroke-miterlimit="10" style="stroke-dashoffset: 2644px;" />
                </g>
                <g class="circle-dot" data-portrait-index="1">
                  <circle class="circle-outside" cx="559" cy="833" r="7.5" />
                  <circle class="circle-center" cx="559" cy="833" r="4" />
                </g>
                <g class="circle-dot" data-portrait-index="2">
                  <circle class="circle-outside" cx="89" cy="678" r="7.5" />
                  <circle class="circle-center" cx="89" cy="678" r="4" />
                </g>
                <g class="circle-dot" data-portrait-index="3">
                  <circle class="circle-outside" cx="89" cy="184" r="7.5" />
                  <circle class="circle-center" cx="89" cy="184" r="4" />
                </g>
                <g class="circle-dot" data-portrait-index="4">
                  <circle class="circle-outside" cx="559" cy="31" r="7.5" />
                  <circle class="circle-center" cx="559" cy="31" r="4" />
                </g>
                <g class="circle-dot" data-portrait-index="5">
                  <circle class="circle-outside" cx="851" cy="431" r="7.5" />
                  <circle class="circle-center" cx="851" cy="431" r="4" />
                </g>
              </svg>
            </div>
          </div>


          <div class="video-container">
            <div class="video-item" data-portrait-index="0" data-vimeo="299739458" style="background-image: url(img/bg-video-1.jpg);" data-vimeo-start="0s" data-vimeo-width="640" data-vimeo-height="272">
              <iframe src="https://player.vimeo.com/video/299739458?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1&amp;autopause=0&amp;muted=1&amp;background=1" allowfullscreen></iframe>
              <div class="iframe-css"></div>
            </div>
            <div class="video-item" data-portrait-index="1" data-vimeo="230427450" style="background-image: url(img/bg-video-travel-lg.jpg);" data-vimeo-start="18s" data-vimeo-width="640" data-vimeo-height="360">
              <div class="iframe-css"></div>
            </div>
            <div class="video-item" data-portrait-index="2" data-vimeo="21587493" style="background-image: url(img/bg-video-noke-lg.jpg);" data-vimeo-start="0s" data-vimeo-width="640" data-vimeo-height="360">
              <div class="iframe-css"></div>
            </div>
            <div class="video-item" data-portrait-index="3" data-vimeo="158130244" style="background-image: url(img/bg-video-surf-lg.jpg);" data-vimeo-start="2m19s" data-vimeo-width="640" data-vimeo-height="360">
              <div class="iframe-css"></div>
            </div>
            <div class="video-item" data-portrait-index="4" data-vimeo="37412416" style="background-image: url(img/bg-video-dogoby-lg.jpg);" data-vimeo-start="19s" data-vimeo-width="640" data-vimeo-height="360">
              <div class="iframe-css"></div>
            </div>
            <div class="video-item" data-portrait-index="5" data-vimeo="14161753" style="background-image: url(img/bg-video-sayder-lg.jpg);" data-vimeo-start="1m50s" data-vimeo-width="640" data-vimeo-height="360">
              <div class="iframe-css"></div>
            </div>
          </div>

          <div class="video-text-container">
            <div class="video-text-item" data-portrait-index="0">
              <div class="inside">
                <div class="video-item-title-sub">featured projects</div>
                <h1 class="video-item-title">Let’s Start !</h1>
                <div class="video-item-descr d-none d-md-block">Select a circle project’s name to hear<br /> how Lewis Studio to help our clients get successful<br /> and increase value of business</div>
                <div class="video-item-descr d-md-none">Swipe right to see all projects</div>
                <div class="video-item-more d-none d-md-block">click on a circle</div>
              </div>
            </div>
            <div class="video-text-item" data-portrait-index="1">
              <div class="inside">
                <h2 class="video-item-title"><a href="single-project-web-design.html">Boral Travel</a></h2>
                <div class="video-item-title-sub">Website</div>
                <div class="video-item-descr">Graphic Designer with a focus on interactive design,<br /> helping clients communicate and solve problems through<br /> creative visual solutions.</div>
                <div class="video-item-more"><a href="single-project-web-design.html">View Project<i class="icon ion-ios-play"></i></a></div>
              </div>
              <div class="mobile-video-bg" style="background-image: url(img/bg-video-travel.jpg);"></div>
            </div>
            <div class="video-text-item" data-portrait-index="2">
              <div class="inside">
                <h2 class="video-item-title"><a href="single-project-branding.html">Noke Store</a></h2>
                <div class="video-item-title-sub">Website, branding</div>
                <div class="video-item-descr">The other two boys joined him,<br /> excavating the sand rapidly with their hands till<br /> there lay three skeletons exposed</div>
                <div class="video-item-more"><a href="single-project-branding.html">View Project<i class="icon ion-ios-play"></i></a></div>
              </div>
              <div class="mobile-video-bg" style="background-image: url(img/bg-video-noke.jpg);"></div>
            </div>
            <div class="video-text-item" data-portrait-index="3">
              <div class="inside">
                <h2 class="video-item-title"><a href="single-project-web-design.html">ABA Surf</a></h2>
                <div class="video-item-title-sub">Website</div>
                <div class="video-item-descr">The other two boys joined him,<br /> excavating the sand rapidly with their hands till<br /> there lay three skeletons exposed</div>
                <div class="video-item-more"><a href="single-project-web-design.html">View Project<i class="icon ion-ios-play"></i></a></div>
              </div>
              <div class="mobile-video-bg" style="background-image: url(img/bg-video-surf.jpg);"></div>
            </div>
            <div class="video-text-item" data-portrait-index="4">
              <div class="inside">
                <h2 class="video-item-title"><a href="single-project-photography.html">Dogoby</a></h2>
                <div class="video-item-title-sub">Motion video</div>
                <div class="video-item-descr">Take full control of the power Dogoby has to offer with our new exciting page builder. You’ll be grinning in delight when you see just how easy it is to create stunning.</div>
                <div class="video-item-more"><a href="single-project-photography.html">View Project<i class="icon ion-ios-play"></i></a></div>
              </div>
              <div class="mobile-video-bg" style="background-image: url(img/bg-video-dogoby.jpg);"></div>
            </div>
            <div class="video-text-item" data-portrait-index="5">
              <div class="inside">
                <h2 class="video-item-title"><a href="single-project-web-design.html">Sayder 918</a></h2>
                <div class="video-item-title-sub">Website, Motion Video</div>
                <div class="video-item-descr">Take full control of the power Dogoby has to offer<br /> with our new exciting page builder. You’ll be grinning in delight<br /> when you see just how easy it is to create stunning.</div>
                <div class="video-item-more"><a href="single-project-web-design.html">View Project<i class="icon ion-ios-play"></i></a></div>
              </div>
              <div class="mobile-video-bg" style="background-image: url(img/bg-video-sayder.jpg);"></div>
            </div>
          </div>
        </div>
<!--video start  end -->
     <div class="banner__slider overflow-hidden" style="margin-top: 128px;">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="banner" style="background-image: url(assets/images/home-banner.webp);">
                    <div class="container">
                        <div class="row g-0">
                            <div class="col-lg-12 col-12">
                                <div class="banner__content text-center">
                                    <h1>{{ __('common.hero_title') }}</h1>
                                    <h2>{{ __('common.hero_heading_line_1') }}</h2>
                                    <p>{{ __('common.hero_description') }}</p>
                                    <a href="{{ route('register.form') }}" class="default-button"> {{ __('common.hero_cta_explore_services') }} <i class="icofont-play-alt-1"></i> </a>
                            </div>
                        </div>                       
                    </div>
                </div>

            </div>
        </div>
            <div class="swiper-slide">
                <div class="banner" style="background-image: url(assets/images/home-banner.webp);">
                    <div class="container">
                        <div class="row g-0">
                            <div class="col-lg-12 col-12">
                                <div class="banner__content text-center">
                                    <h1>{{ __('common.hero_title') }}</h1>
                                    <h2>{{ __('common.hero_heading_line_1') }}</h2>
                                    <p>{{ __('common.hero_description') }}</p>
                                    <a href="{{ route('register.form') }}" class="default-button"> {{ __('common.hero_cta_explore_services') }} <i class="icofont-play-alt-1"></i> </a>
                            </div>
                        </div>                       
                    </div>
                </div>

            </div>
        </div>
    </div>
   
<section class="categ-section pt-5 pb-5 position-relative" style="
    background: #fff;">       
<div class="section-header text-center">
<!--<p>{{ __('common.collection_subheader') }}</p>-->
<h2>{{ __('common.collection_title') }}</h2>
</div>
<div class=" container section-wrapper">

<div class="row mb-4">
@php
                        $category_lists = Helper::productCategoryList('all')->sortBy('id')->take(10);
                    @endphp
                    @foreach($category_lists as $category)
<div class="col-lg-6 col-sm-6 col-12">
 <div class="effect effect-two">
  <a href="<?=url('product-cat'.'/'.$category->slug)?>" class="categ-wlnk">  
   <img src="{{ env('WEBSITE_URL') . $category->photo }}" class="img-fluid" alt="{{ __('common.game_category_alt') }}"> 
   <div class="tab-qtext">   
     <h2>{{ $category->title }}</h2>
    <!--<p class="description"> {{ $category->summary }} </p>-->
    <!-- <a href="<?=url('product-cat'.'/'.$category->slug)?>" class="default-button"> 
         {{__('common.view_more')}} 
    </a>-->
   </div>
 </a>    
</div>
</div>
@endforeach
</div>
</div>
</section>
    <section class="popin-up pt-5 pb-5">
        <div class="container">
              <div class="section-header">
                <h2>{{ __('common.points_topup_title') }} </h2>
               </div>           
                <div class="poph-cntnt">      
                  <h4 class="mb-4 mt-4">{{ __('common.ux_points_heading') }}</h4>
                  <p>{{ __('common.ux_points_text_primary') }}</p>
                  <p>{{ __('common.ux_points_text_secondary') }}</p>
            <h4 class="mb-4"> {{ __('common.ux_points_bonus_title') }} </h4>
              <div class="bonus-wtier">
                <table class="w-100">
                    <tr>
                        <th>{{ __('common.bonus_table_range') }} ({{ Helper::getCurrencySymbol(session('currency'))}}) </th>
                        <th>{{ __('common.bonus_table_multiplier') }} </th>
                        <th>{{ __('common.bonus_table_benefit') }} </th>                        

                  </tr>
                  <tr>
        <td>{{session('currency')=='JPY' ? '¥1 – ¥100,000' : '$1 - $600'}}</td>
                   
                    <td> 1× {{ __('common.label_points') }} </td>
                    <td> {{ __('common.bonus_standard') }} </td>
</tr>  
 <tr>
      <td>{{session('currency')=='JPY' ? '¥100,001 – ¥300,000' : '$601 - $2,000'}}</td>              
     
                    <td> 1.5× {{ __('common.label_points') }}  </td>
                    <td> {{ __('common.bonus_50_extra') }}  </td>
</tr>
<tr>
                     <td>{{session('currency')=='JPY' ? '¥300,001 – ¥500,000' : '$2,001 - $3,200'}}</td>   
    
                    <td> 2× {{ __('common.label_points') }}  </td>
                        <td> {{ __('common.bonus_100_extra') }}  </td>
    </tr> 
<tr>
                    <td>{{session('currency')=='JPY' ? '¥500,001 - ¥1,000,000' : __('common.3201_and_above')}}   </td>
                    <td> 5× {{ __('common.label_points') }}  </td>
                    <td> {{ __('common.bonus_400_extra') }}  </td>
</tr> 
</table>
   <strong class="d-block pt-4">{{ __('common.bonus_note') }}</strong> 
</div>
<div class="lst-xinfo mt-5 mb-4">
    <h4>{{ __('common.how_it_works_title') }}</h4>
 <ul class="table-steps">   
    <li> <span> 1 </span> {{ __('common.how_step_1') }} </li>
    <li>  <i class="icofont-swoosh-right"></i> </li>
     <li>  <span> 2 </span> {{ __('common.how_step_2') }}</li>
      <li> <i class="icofont-swoosh-right"></i> </li>
       <li> <span> 3 </span> {{ __('common.how_step_3') }}</li>
       <li> <i class="icofont-swoosh-right"></i> </li>
       <li> <span> 4  </span>{{ __('common.how_step_4') }}</li>
</ul>
</div>
</div>
</div>
<div class="point-winfo mt-5 mb-4">
    <div class="row">
   <div class="col-xl-5 col-lg-5 offset-xl-6 offset-lg-6">     
    <div class="mb-2 rcharge-nw">   
<h2>{{ __('common.start_recharge_title') }}</h2>
<p>{{ __('common.start_recharge_text') }}</p>
<div class="clearfix"></div>
<a href="javascript:void(0)" class="clck-winfo"><strong> {{ __('common.start_recharge_button') }} </strong></a>
    </div>

<form action="{{route('points-add-to-cart')}}" method="POST">
					                  @csrf    
<div class="row justify-content-center m-0 mb-3">

       <div class="col-xl-1 col-lg-1 col-md-2 col-sm-12 pe-0">
           <p class="curency_xicn mb-0"> {{ Helper::getCurrencySymbol(session('currency'))}} </p>
           </div>

        <div class="col-xl-11 col-lg-11 col-md-10 col-sm-12">
            <label class="form-label">{{ __('common.label_amount') }}</label>
            <input type="hidden" name="quant[1]" value="1" id="quantity">
                               <input type="hidden" name="slug" value="points">
              <input type="number" class="form-control" placeholder="{{ __('common.placeholder_amount', ['currency' => Helper::getCurrencySymbol(session('currency'))]) }}" min="1" name="price" id="price" required>
       </div>
</div>
 <div class="row justify-content-center m-0">      
   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 p-0">
      <label class="form-label">{{ __('common.label_points') }}</label>
       
     <input type="number" class="form-control pnter-text" placeholder="{{ __('common.placeholder_points') }}" min="1" name="points" id="points" required readonly>
</div> 
</div> 
<!-- end row section -->
     <div class="text-center mt-4">
        <button class="default-button mt-0" type="submit"> {{ __('common.add_cart') }} </button>
      </div>
</div>
     </form>    
</div>
</div>
</section> 
   <!-- Features In start -->
   <section id="features-section" class="ux-features-wrap py-5">
    <div class="container">
        <!-- Section Header -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <span class="ux-features-badge">
                    {{ __('common.features_title') }}
                </span>
                <h2 class="ux-features-title mt-3">
                    {{ __('common.features_subtitle') }}
                </h2>
            </div>
        </div>

        <!-- Features Grid -->
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="ux-feature-card">
                    <div class="ux-feature-icon ux-gradient-primary">
                        <i class="fa-solid fa-bolt"></i>
                    </div>
                    <h5 class="ux-feature-heading">
                        {{ __('common.feature_instant_bonus_title') }}
                    </h5>
                    <p class="ux-feature-text">
                        {{ __('common.feature_instant_bonus_text') }}
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="ux-feature-card">
                    <div class="ux-feature-icon ux-gradient-success">
                        <i class="fa-solid fa-arrow-trend-up"></i>
                    </div>
                    <h5 class="ux-feature-heading">
                        {{ __('common.feature_higher_topup_title') }}
                    </h5>
                    <p class="ux-feature-text">
                        {{ __('common.feature_higher_topup_text') }}
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="ux-feature-card">
                    <div class="ux-feature-icon ux-gradient-info">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="white">
        <path d="M12 2L4 5v6c0 5.55 3.84 10.74 8 12 4.16-1.26 8-6.45 8-12V5l-8-3z"/>
        <path d="M10.5 12.5l-2-2 1.4-1.4 0.6 0.6 3-3 1.4 1.4z"/>
    </svg>
                    </div>
                    <h5 class="ux-feature-heading">
                        {{ __('common.feature_transparent_title') }}
                    </h5>
                    <p class="ux-feature-text">
                        {{ __('common.feature_transparent_text') }}
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="ux-feature-card">
                    <div class="ux-feature-icon ux-gradient-warning">
                        <i class="fa-solid fa-tags"></i>
                    </div>
                    <h5 class="ux-feature-heading">
                        {{ __('common.feature_better_value_title') }}
                    </h5>
                    <p class="ux-feature-text">
                        {{ __('common.feature_better_value_text') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

   

</main>
@endsection
        @push('scripts')
        <script>
        $(document).ready(function () {
           var currency = "{{ session('currency') }}";
            //alert('ddd');
           function calpoints(truepoints){
                truepoints = parseFloat(truepoints);
                if (currency === "HKD") {
               truepoints = truepoints/ 8;
              } else if (currency === "JPY") {
    //truepoints = truepoints / 160;
                    switch (true) {
    case (truepoints >1 && truepoints < 100001):        
        truepoints=truepoints;
        break;

    case (truepoints > 100000 && truepoints < 300001):
        truepoints = Math.floor(truepoints * 1.5);console.log(truepoints);
        break;

    case (truepoints > 300000 && truepoints < 500001):       
        truepoints = Math.floor(truepoints * 2);
        break;
    case (truepoints > 500000):  
        truepoints = Math.floor(truepoints * 5);
        break;
               
        default:      
        truepoints=truepoints;
        break;
}
                  truepoints = truepoints / 160
                 }
           else if (currency === "USD") {
              switch (true) {
    case (truepoints >1 && truepoints < 601):        
        truepoints=truepoints;
        break;

    case (truepoints > 600 && truepoints < 2001):
        truepoints = Math.floor(truepoints * 1.5);
        break;

    case (truepoints > 2000 && truepoints < 3201):       
        truepoints = Math.floor(truepoints * 2);
        break;
    case (truepoints > 3200):  
        truepoints = Math.floor(truepoints * 5);
        break;
               
        default:      
        truepoints=truepoints;
        break;
} 
           }     
              
                return Math.floor(truepoints);
            }
        $('#price').on('keyup', function () {
    let value = $(this).val();         
    $('#points').val(calpoints(value));
});
            
});
            </script>
        @endpush('scripts')
