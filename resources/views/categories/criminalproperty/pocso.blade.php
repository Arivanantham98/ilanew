@extends('layouts.master')
@section('title', 'Custom Central Excercise ')
@section('content')
    <div class="page">
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-title-heading">
                                <h2 class="title">POCSO – Protection of Children from Sexual Offences 2012</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html">Home</a>
                                </span>
                                <span>POCSO</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- page-title end-->

        <!--site-main start-->
        <div class="site-main">

            <!-- sidebar -->
            <div class="ttm-row sidebar ttm-sidebar-left ttm-bgcolor-white clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div
                            class="col-lg-4 widget-area sidebar-right ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-grey mt_100 pt-100 mb_100 pb-100 res-991-mt-0 res-991-pt-0 widget-area sidebar-left">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <aside class="widget tagcloud-widget with-title ttm-bgcolor-grey">
                                <h3 class="widget-title">Popular Tags</h3>
                                <div class="tagcloud">
                                    <a href="{{ route('croporatelaw.bankingfinance') }}" class="tag-cloud-link"># Banking
                                        & Finance</a>
                                    <a href="{{ route('civildebt.civil') }}" class="tag-cloud-link"># Civil</a>
                                    <a href="{{ route('croporatelaw.gst') }}" class="tag-cloud-link"># GST</a>
                                    <a href="{{ route('criminalproperty.cybercrime') }}" class="tag-cloud-link"># Cyber
                                        Crime</a>
                                    <a href="{{ route('family.marriageregistration') }}" class="tag-cloud-link"># Marriage
                                        Registration</a>
                                    <a href="{{ route('civillaw.propertyverification') }} class="  tag-cloud-link">#
                                        Property Verification</a>
                                    <a href="{{ route('civildebt.recovery') }}" class="tag-cloud-link"># Money
                                        Recovery</a>
                                    <a href="{{ route('family.marriagecounselling') }}" class="tag-cloud-link"># Marriage
                                        Counselling</a>

                                </div>
                            </aside>
                        </div>
                        <div class="col-lg-8 content-area">
                            <div class="ttm-service-single-content-area">
                                <div class="post-featured-wrapper mb-45 res-991-mb-20">
                                    <div class="post-featured">
                                        <img class="img-fluid" src="images/portfolio/post-two-1200x800.jpg" alt="">
                                    </div>
                                </div>
                                <div class="ttm-service-description">
                                    <h3>What is POCSO?</h3>
                                    <div class="row mt-15 mb-30 px-4">
                                        <p>The POCSO Act, 2012 is a comprehensive law to provide for the protection of
                                            children from the offences of sexual assault, sexual harassment and pornography
                                            while safeguarding the interests of the child at every stage of the judicial
                                            process by incorporating child-friendly mechanisms for reporting, recording of
                                            evidence . The Protection of Children from Sexual Offences (POCSO) Act has been
                                            in the news recently, after Bombay High Court Justice Pushpa Ganediwala’s
                                            controversial judgments in child sexual abuse cases. Back in 2019, the POCSO Act
                                            garnered interest when an amendment was made to it when minimum punishment for
                                            aggravated as well as penetrative sexual assault on children below 16 years was
                                            increased from 10 to 20 years, extendable to life imprisonment or death..</p>
                                    </div>
                                    <div class="row mt-15 mb-30 px-4">
                                        <h5>
                                            What is the punishment for Posco?
                                        </h5>
                                        <p>The POCSO Bill seeks to award strong punishment in cases of drugs being administered to children to bring about early sexual maturity. Speaking on the Bill, Irani said the legislation introduced a minimum jail term of 20 years or for the entire life and death penalty in rare cases according to the courts' discretion. </p>
                                    </div>
                                    <div class="row mt-15 mb-30 px-4">
                                        <h5>
                                            What is the maximum punishment under Pocso act?
                                        </h5>
                                        <p>People who traffick children for sexual purposes are also punishable under the Act. POCSO prescribes stringent punishment graded as per the gravity of the offence, with a maximum term of rigorous imprisonment for life, and fine </p>
                                    </div>
                                    <div class="row mt-15 mb-30 px-4">
                                        <h5>
                                            What section of Pocso is punishment?
                                        </h5>
                                        <p>The POCSO Act also specifically lays down stringent punishment for exposing children to, or using them to create child sexual abuse material (CSAM, also referred to as child pornography) under sections 13, 14, and 15.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- row end -->
                </div>
            </div>
            <!-- sidebar end -->

        </div>
        <!--site-main end-->


    </div>
@endsection
