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
                                <h2 class="title">Marriage Registration</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html">Home</a>
                                </span>
                                <span>Marriage Registration</span>
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
                                    <a href="{{ route('civillaw.propertyverification') }} class=" tag-cloud-link">#
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

                                <div class="ttm-service-description row px-4">
                                    <h3>Marriage Registration</h3>
                                    <div class="mb-15 ">
                                        <p>It is legal certificate procedure issued by the Government when two people are
                                            married together.</p>
                                    </div>
                                </div>

                                <div class="row mt-15 px-4">
                                    <h5>What is Marriage Registration Certificate ?</h5>
                                    <p class="d">Marriage Registration Certificate is issued to both Husband
                                        and Wife whose marriage has already been solemnised. The Registration is done under
                                        Hindu Marriage Act, 1955 or under the Special Marriage Act, 1954</p>
                                </div>
                                <div class="row  mb-30 px-4">

                                    <h5>What are the documents required for registration ?</h5>

                                    <div class="col-sm-12">
                                        <ul
                                            class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">a) Photocopies of National Identity of the
                                                    couple residence card, and Aadhaar Card.
                                                </div>

                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">b) Certificate of residence.
                                                </div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">c) Certificate of nationality.
                                                </div>

                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">d) Certificate of singleness and marital
                                                    status affidavit.
                                                </div>

                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">e) Updated birth certificate issued by the
                                                    Civil Registry of the place of birth.
                                                </div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">f) Signature of two witnesses.
                                                </div>
                                            </li>
                                        </ul>
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
