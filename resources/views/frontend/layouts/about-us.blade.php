@extends('frontend.layouts.master')

@section('title','About Us')

@section('main-content')
<section class="pageheader-section" style="background-image: url('{{ asset('assets/images/pageheader/bg.jpg') }}');">
		<div class="container">
            <div class="section-wrapper text-center text-uppercase">
                <h2 class="pageheader-title">{{ __('common.about') }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('common.home') }} <span class="ficon"> /  </span> </a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{ __('common.about') }}</li>
                    </ol>
                </nav>
            </div>
		</div>
	</section>

<section class="ux-about-section py-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-9 text-center">
                <p class="ux-about-intro">
                    {{ __('common.about_text') }}
                </p>
            </div>
        </div>

        <div class="row g-4">
            <!-- Feature 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="ux-about-card">
                    <div class="ux-about-icon ux-icon-primary">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h5 class="ux-about-title">
                        {{ __('common.feature_1_title') }}
                    </h5>
                    <p class="ux-about-text">
                        {{ __('common.feature_1_text') }}
                    </p>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="ux-about-card">
                    <div class="ux-about-icon ux-icon-success">
                        <i class="fa-solid fa-thumbs-up"></i>
                    </div>
                    <h5 class="ux-about-title">
                        {{ __('common.feature_2_title') }}
                    </h5>
                    <p class="ux-about-text">
                        {{ __('common.feature_2_text') }}
                    </p>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="ux-about-card">
                    <div class="ux-about-icon ux-icon-info">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <h5 class="ux-about-title">
                        {{ __('common.feature_3_title') }}
                    </h5>
                    <p class="ux-about-text">
                        {{ __('common.feature_3_text') }}
                    </p>
                </div>
            </div>
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
                   {{ __('common.recharge_benefit_instant_text') }}
                </div>
            </li>

            <li class="ux-card" style="--accent-color:#28c76f">
                <div class="icon">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                </div>
                <div class="title">
                   {{ __('common.recharge_benefit_tier_title') }}
                </div>
                <div class="content">
                   {{ __('common.recharge_benefit_tier_text') }}
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
                  {{ __('common.recharge_benefit_checkout_title') }}
                </div>
                <div class="content">
                   {{ __('common.recharge_benefit_checkout_text') }}
                </div>
            </li>

            <li class="ux-card" style="--accent-color:#ff9f43">
                <div class="icon">
                    <i class="fa-solid fa-tags"></i>
                </div>
                <div class="title">
                  {{ __('common.recharge_benefit_pricing_title') }}
                </div>
                <div class="content">
                   {{ __('common.recharge_benefit_pricing_text') }}
                </div>
            </li>
        </ul>

    </div>
</section>
	<!-- ===========About Section Ends Here========== -->

      <!-- Features In start -->
    <!-- <section id="features-section" class="ux-features-wrap py-5">
    <div class="container"> -->
        <!-- Section Header -->
        <!-- <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <span class="ux-features-badge">
                    {{ __('common.features_title') }}
                </span>
                <h2 class="ux-features-title mt-3">
                    {{ __('common.features_subtitle') }}
                </h2>
            </div>
        </div> -->

        <!-- Features Grid -->
        <!-- <div class="row g-4">
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
            </div> -->
<!-- 
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
            </div> -->

            <!-- <div class="col-lg-3 col-md-6">
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
</section> -->

    <!-- Features In end -->
@endsection
