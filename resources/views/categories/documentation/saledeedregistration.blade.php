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
                                <h2 class="title">Sale Deed Registration</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html">Home</a>
                                </span>
                                <span>Sale Deed Registration</span>
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
                                    <h3>Sale deed registration</h3>
                                    <div class="row mt-15 mb-30 px-4">
                                        <p>A Scale deed registration is an authentic instrument and also establish a clear
                                            title over the property It is a registrable document as per Sec 17 (1) of
                                            Registration Act 1908.
                                        </p>
                                        <h5>
                                            Is sale deed same as registration?
                                        </h5>
                                        <p>Sale agreement and Sale deed are two such important documents. The distinction
                                            between these two documents is not widely known and both are regarded as
                                            synonymous.
                                        <h5>
                                            Is deed of sale proof of ownership?
                                        </h5>
                                        <p>The sale deed document is a valid proof of ownership of the immovable property
                                            with all relevant information about the buyer. The sale deed is drafted on a
                                            non-judicial stamp paper of value as set by the state government in which the
                                            property transaction is taking place.</p>

                                        <div class="col-sm-12  mb-10 ">
                                            <h5>What will be done </h5>





                                            <ul
                                                class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">(a) Client and Lawyer interaction to
                                                        know about how you will work together.

                                                    </div>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content"> b) Checklist of documents required
                                                        will be shared.

                                                    </div>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">c) Verification of your documents.

                                                    </div>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">d) Drafting of the Sale Deed and
                                                        Handling the required paperwork.

                                                    </div>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content"> e) Registration of Sale Deed at the
                                                        Registrar/Sub-registrar’s office.
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-12  mb-10 ">
                                            <h5>What will not be done </h5>
                                            <ul
                                                class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">a) Court fees/Stamp Duty.
                                                    </div>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">b) Inclusion of any other document
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
            </div>
            <!-- sidebar end -->

        </div>
        <!--site-main end-->


    </div>
@endsection
