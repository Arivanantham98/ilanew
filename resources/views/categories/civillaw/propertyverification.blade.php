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
                                <h2 class="title">Property Verification</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html">Home</a>
                                </span>
                                <span>Property Verification</span>
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
                                    <a href="{{ route('civillaw.propertyverification') }}" class="tag-cloud-link">#
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
                                    <h3>Property Verification</h3>
                                    <p>It ensures that the property involved in business and purchase is free from disputes.
                                    </p>
                                    <h5>What is Property Verification?</h5>
                                    <p>A verification of property (VOP) condition is used to absolve a real estate agent
                                        from liability after the final walk-through, as well as prove that the buyer had an
                                        opportunity to look at the property one more time.
                                        How do I check if my property is genuine?
                                    </p>
                                    <div class="col-sm-12  mb-10 ">
                                        <h5>How to Check If Your Property Is Legally Verified? </h5>
                                        <ul
                                            class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">1. Check for the title papers. A property
                                                    should have a clear title, without any dispute.
                                                </div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content"> 2. Ask for bank approvals.
                                                </div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">3. Encumbrance certificate.
                                                </div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">4. Tally the approved plan with actual
                                                    site.
                                                </div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">5. Check out property tax slips.
                                                </div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">6. Project has a registered society.
                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="col-sm-12  mb-10 ">
                                        <h5>What will be done </h5>
                                        <ul
                                            class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">a) Generating Title Search Report of the
                                                    last 15 to 30 years & Certified Copy from the Registrar / sub registrar
                                                    office.
                                                </div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content"> b) Verification of previous ownership
                                                    documents for checking the title and rights of the seller.
                                                </div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">c) Verification of Sales Deed for checking
                                                    the title and rights of the seller.
                                                </div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">d) Verification of Agreement to sell for
                                                    checking the title and rights of the seller.
                                                </div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">e) Verification of Conveyance deed and Will
                                                    for checking the title and rights of the seller.
                                                </div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">f) Verification of Perpetual lease deed for
                                                    checking the title and rights of the seller.
                                                </div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">g) Verify and check that the documents have
                                                    been registered and appropriate stamp duty has been paid.
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-12  mb-10 ">
                                        <h5>What will not be done </h5>
                                        <ul
                                            class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">a) Title search report for more than 15 to
                                                    30 years.
                                                </div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">b) Final list of deliverables may vary
                                                    depending on available documents and property type.

                                                </div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">c) Verification of certain type of
                                                    properties like large land parcels, agricultural land, large commercial
                                                    buildings and complexes, etc.
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
            <!-- sidebar end -->

        </div>
        <!--site-main end-->


    </div>
@endsection
