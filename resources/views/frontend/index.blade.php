@extends('frontend.layouts.master')
@section('main-content')
<div id="preloader">
<div class="loader">
<span class="loading-text">LOADING</span>
<div class="spinner"></div>
</div>
</div>
<style>
  /* ===== PRELOADER FULLSCREEN ===== */

#preloader {

  position: fixed;

  inset: 0;

  background: #0b0b0b;

  display: flex;

  align-items: center;

  justify-content: center;

  z-index:  2147483647;

}
 
/* ===== LOADER CONTAINER ===== */

.loader {

  display: flex;

  flex-direction: column;

  align-items: center;

  justify-content: center;

}
 
/* ===== LOADING TEXT ===== */

.loading-text {

  color: #00ffcc;

  font-family: 'Orbitron', sans-serif;

  font-size: 18px;

  letter-spacing: 4px;

  line-height: 1;

  margin-bottom: 16px;

  text-align: center;
 
  /* Optical centering fix */

  transform: translateX(2px);
 
  /* Neon glow */

  text-shadow:

    0 0 5px rgba(0, 255, 204, 0.7),

    0 0 10px rgba(0, 255, 204, 0.5),

    0 0 20px rgba(0, 255, 204, 0.3);

}
 
/* ===== SPINNER ===== */

.spinner {

  width: 64px;

  height: 64px;

  border-radius: 50%;

  border: 4px solid rgba(0, 255, 204, 0.2);

  border-top-color: #00ffcc;

  animation: spin 1s linear infinite;
 
  /* Glow */

  box-shadow:

    0 0 10px rgba(0, 255, 204, 0.6),

    0 0 25px rgba(0, 255, 204, 0.4);

}
#preloader.fade-out {
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.6s ease, visibility 0.6s ease;
}
 
/* ===== SPIN ANIMATION ===== */

@keyframes spin {

  to {

    transform: rotate(360deg);

  }

}

 
  </style>
<section id = 'hero-banner'>
<div id = 'video-box'>
<video autoplay muted loop style>
<source src="https://www.fenix-quest.com/assets/game.mp4" type="video/mp4">
</video>
</div>

<!-- <div id = 'hero-content'>
<h1>{{ __('common.brand_hero_title') }}</h1>
<hr>
<p style="font-size: 22px;">{{ __('common.brand_hero_description') }}</p>
<div id = 'hero-button-container'>
<a href="{{ route('register.form') }}"><button>{{ __('common.sign_up') }}</button></a>
<a href="{{ route('pages', 'about-us') }}"><button>{{ __('common.about')}}</button></a>
</div> -->
</div>
</section>

 <div class='particle-network-animation'>  
<section class="categ-section pt-5 pb-5 position-relative" style="
   background-color:#fff;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  ">
           
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
</div>
<style>
   /* ===== SECTION HEADER ===== */
.ux-section-header {
  text-align: center;
  margin-bottom: 60px;
}

.ux-section-header h1 {
  font-size: 42px;
  font-weight: 800;
  margin-bottom: 12px;
}

.ux-section-header p {
  color: #b8c6ff;
  font-size: 16px;
  max-width: 600px;
  margin: auto;
}

/* ===== MAIN LAYOUT ===== */
.ux-bonus-layout {
  display: grid;
  grid-template-columns: 1.1fr 1.0fr;
  gap: 60px;
  align-items: start;
  margin-bottom: 70px;
}

/* ===== BONUS TIERS GRID ===== */
.ux-tiers-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 30px;
}

.ux-tier-card {
  background: linear-gradient(180deg, #162a6c, #0d1a44);
  border-radius: 18px;
  padding: 30px;
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.ux-tier-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 40px rgba(0,0,0,0.5);
}

.ux-tier-card h3 {
  font-size: 20px;
  margin-bottom: 10px;
}

.ux-tier-range {
  color: #fff;
  font-size: 18px;
  margin-bottom: 20px;
}

.ux-tier-bonus {
  font-size: 36px;
  font-weight: 800;
  margin-bottom: 8px;
}

.ux-tier-desc {
  font-size: 14px;
  color: #c7d2ff;
}

/* ===== GOLD HIGHLIGHT ===== */
.ux-tier-gold {
  outline: 2px solid #ffcc66;
  box-shadow: 0 0 40px rgba(255, 204, 102, 0.35);
  position: relative;
}

.ux-tier-gold::before {
  content: "MOST POPULAR";
  position: absolute;
  top: -12px;
  left: 50%;
  transform: translateX(-50%);
  background: #ffcc66;
  color: #000;
  font-size: 11px;
  font-weight: 700;
  padding: 4px 10px;
  border-radius: 20px;
}

/* ===== CALCULATOR ===== */
.ux-calculator-box {
  background: linear-gradient(180deg, #1a2f7a, #0f1e52);
  border-radius: 20px;
  padding: 40px;
}

/* ===== TRUST ROW ===== */
.ux-trust {
  display: flex;
  justify-content: center;
  gap: 48px;
  margin: 40px 0;
  font-size: 13px;
  color: #cbd6ff;
  flex-wrap: wrap;
}
.trust span {
    font-size: 13px;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 992px) {
  .ux-bonus-layout {
    grid-template-columns: 1fr;
  }

  .ux-tiers-grid {
    grid-template-columns: 1fr;
  }
}

    </style>

<section class="container ux-bonus-section">

  <div class="ux-section-header">
    <h1>{{ __('common.recharge_ui_main_title') }}</h1>
    <p>{{ __('common.recharge_ui_main_subtitle') }}</p>
 
          
  </div>

  <!-- LAYOUT WRAPPER -->
  <div class="ux-bonus-layout">

    <!-- LEFT: BONUS TIERS -->
    <div class="ux-tiers-grid">

      <div class="ux-tier-card">
        <h3>{{ __('common.recharge_ui_tier_bronze') }}</h3>
        <div class="ux-tier-range">{{session('currency')=='JPY' ? '¥1 – ¥100,000' : '$1 - $600'}}</div>
        <div class="ux-tier-bonus">1× {{ __('common.label_points') }}</div>
        <div class="ux-tier-desc">{{ __('common.bonus_standard') }}</div>
      </div>

      <div class="ux-tier-card">
        <h3>{{ __('common.recharge_ui_tier_silver') }}</h3>
        <div class="ux-tier-range">{{session('currency')=='JPY' ? '¥100,001 – ¥300,000' : '$601 - $2,000'}}</div>
        <div class="ux-tier-bonus">1.5× {{ __('common.label_points') }}</div>
        <div class="ux-tier-desc">{{ __('common.bonus_50_extra') }}</div>
      </div>

      <div class="ux-tier-card ux-tier-gold">
        <h3>{{ __('common.recharge_ui_tier_gold') }}</h3>
        <div class="ux-tier-range">{{session('currency')=='JPY' ? '¥300,001 – ¥500,000' : '$2,001 - $3,200'}}</div>
        <div class="ux-tier-bonus">2× {{ __('common.label_points') }}</div>
        <div class="ux-tier-desc">{{ __('common.bonus_100_extra') }}</div>
      </div>

      <div class="ux-tier-card">
        <h3>{{ __('common.recharge_ui_tier_platinum') }}</h3>
        <div class="ux-tier-range">{{session('currency')=='JPY' ? '¥500,001  '.__('common.and_above') : __('common.3201_and_above')}}</div>
        <div class="ux-tier-bonus">5× {{ __('common.label_points') }}</div>
        <div class="ux-tier-desc">{{ __('common.bonus_400_extra') }}</div>
      </div>

    </div>

    <!-- RIGHT: CALCULATOR -->
    <div class="ux-calculator-box">
     <!-- CALCULATOR -->
<div class="calculator">
  <p style="color:#fff;">{{ __('common.disclaimer_note') }} </p>
<h2>{{ __('common.recharge_ui_calculator_title') }}</h2>
<p>{{ __('common.recharge_ui_calculator_hint') }}</p>

    <form action="{{route('points-add-to-cart')}}" method="POST">
					                  @csrf    
<div class="row justify-content-center m-0 mb-3">

       <div class="col-xl-1 col-lg-1 col-md-2 col-sm-12 pe-0">
           <!-- <p class="curency_xicn mb-0"> {{ Helper::getCurrencySymbol(session('currency'))}} </p> -->
           </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 p-0">
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
 

 
      <div class="trust">
<span>✓ {{ __('common.recharge_ui_trust_secure') }}</span>
<span>✓ {{ __('common.recharge_ui_trust_instant') }}</span>
<span>✓ {{ __('common.recharge_ui_trust_no_share') }}</span>
<span>✓ {{ __('common.recharge_ui_trust_gamers') }}</span>
    </div>

  </div>

</section>
 
  
 
  
<section id="features-section" class="ux-features-wrap py-5">
    <div class="container">

        <!-- Section Header (unchanged) -->
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

        <!-- Feature Cards -->
        <ul class="ux-feature-cards">
            <li class="ux-card" style="--accent-color:#f5b700">
                <div class="icon">
                    <i class="fa-solid fa-bolt"></i>
                </div>
                <div class="title">
                    {{ __('common.feature_instant_bonus_title') }}
                </div>
                <div class="content">
                    {{ __('common.feature_instant_bonus_text') }}
                </div>
            </li>

            <li class="ux-card" style="--accent-color:#28c76f">
                <div class="icon">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                </div>
                <div class="title">
                    {{ __('common.feature_higher_topup_title') }}
                </div>
                <div class="content">
                    {{ __('common.feature_higher_topup_text') }}
                </div>
            </li>

            <li class="ux-card" style="--accent-color:#00cfe8">
                <div class="icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2L4 5v6c0 5.55 3.84 10.74 8 12 4.16-1.26 8-6.45 8-12V5l-8-3z"/>
                        <path d="M10.5 12.5l-2-2 1.4-1.4 0.6 0.6 3-3 1.4 1.4z"/>
                    </svg>
                </div>
                <div class="title">
                    {{ __('common.feature_transparent_title') }}
                </div>
                <div class="content">
                    {{ __('common.feature_transparent_text') }}
                </div>
            </li>

            <li class="ux-card" style="--accent-color:#ff9f43">
                <div class="icon">
                    <i class="fa-solid fa-tags"></i>
                </div>
                <div class="title">
                    {{ __('common.feature_better_value_title') }}
                </div>
                <div class="content">
                    {{ __('common.feature_better_value_text') }}
                </div>
            </li>
        </ul>

    </div>
</section>

   

</main>
@endsection
        @push('scripts')
      <script src="https://gasinforest.com/html/lewis/demo/js/script.js"></script>
      <script>
    // Show loader on link click
    document.addEventListener('DOMContentLoaded', function () {

        const preloader = document.getElementById('preloader');

        // Show on any internal link click
        document.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', function (e) {

                const href = this.getAttribute('href');

                // Ignore empty, hash, external links
                if (!href || href.startsWith('#') || this.target === '_blank') return;

                preloader.style.display = 'flex';
                preloader.classList.remove('fade-out');
            });
        });
    });

    // Hide when page fully loads
    window.addEventListener('load', function () {
        const preloader = document.getElementById('preloader');
        preloader.classList.add('fade-out');

        setTimeout(() => {
            preloader.style.display = 'none';
        }, 600);
    });
</script>

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
