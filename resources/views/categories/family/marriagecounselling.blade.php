@extends('layouts.master')
@section('title', 'Divorce ')
@section('content')
    <div class="page">
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-title-heading">
                                <h2 class="title">Marriage Counselling</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html">Home</a>
                                </span>
                                <span>Marriage Counselling</span>
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
                                    <a href="{{ route('civillaw.propertyverification') }} class="   tag-cloud-link">#
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
                                <div class="ttm-service-description px-4">
                                    <h3>Marriage Counselling</h3>
                                    <div class="mb-15">
                                        <p>It is a type of psychotheraphy for a married couple tries to resolve the problems
                                            between the spouses.</p>

                                    </div>
                                    <div class="row  mb-15 px-4">
                                        <h5>What does marriage Counseling do?</h5>
                                        <p class="d">Marriage counseling, sometimes known as couples therapy,
                                            helps couples (whether married or not) to understand and resolve their conflicts
                                            and improve their relationship with each other.</p>

                                    </div>
                                    <div class="row  mb-15 px-4">
                                        <h5>When should you seek marriage counseling?</h5>
                                        <p class="d">If you or your spouse have gotten to a point in your
                                            relationship where you no longer care enough to fight or argue, couple
                                            counseling might be necessary. This includes: Not caring when your spouse is
                                            upset. Rolling over on issues instead of expressing your beliefs.</p>

                                    </div>
                                    <div class="row  mb-15 px-4">
                                        <h5>Is marriage counseling worth it?</h5>
                                        <p class="d">Marriage counseling can be worthwhile for any couple who
                                            wants to find ways to make their partnership better. It can be helpful at
                                            various points in a relationship and can address a wide variety of issues that
                                            might exist in a marriage. Couples who want to work on changing themselves can
                                            also benefit.
                                        </p>

                                    </div>
                                    <h5>What are the 3 most important things in a marriage?</h5>
                                    <div class="col-sm-12">
                                        <ul
                                            class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Commitment: Commitment is more than just
                                                    wanting to stay together for a long time.
                                                </div>

                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Love: While most couples start out their
                                                    relationships being in love, sustaining that feeling for each other
                                                    takes effort, sacrifice, and generosity.
                                                </div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Respect: Expressing love, no matter how
                                                    heartfelt, doesn’t mean much if marriage partners don’t respect each
                                                    other.
                                                </div>

                                            </li>

                                        </ul>
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
