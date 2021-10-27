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
                                <h2 class="title">Will Drafting</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html">Home</a>
                                </span>
                                <span>Will Drafting</span>
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
                                <div class="ttm-service-description row mt-15 px-4">
                                    <h3>Will drafting</h3>
                                    <div class="mb-15">
                                        <p>A will drafting is a legal document expresses their wishes as how their property
                                            is to be distributed. If the person dies without writing a will those wishes may
                                            not be carried out.</p>
                                    </div>

                                </div>
                               
                                <div class="row  mb-30 px-4">
                                    <h5>What is Will?</h5>
                                    <p class="d">Format of will Deed Pdf – DEFINITION OF WILL – Section 2(h) of the Indian Succession Act, 1925 deals with the term “will”. A will means a legal declaration of intent of a testator in relation to his property, which he wishes to enforce after his death.</h5>
                                    </p>
                                </div>
                                <div class="row  mb-30 px-4">
                                    <h5>What is a legal will?</h5>
                                    <p class="d">A will is a legal document that spells out your wishes regarding the care of your children, as well as the distribution of your assets after your death. Failure to prepare a will typically leaves decisions about your estate in the hands of judges or state officials and may also cause family strife.</h5>
                                    </p>
                                </div>
                                <div class="row  mb-30 px-4">
                                    <h5>What happens if a will is not notarized?</h5>
                                    <p class="d">When a person dies leaving behind a will that is not notarized, the law requires that its validity be ascertained by a notary or by a court. Similarly, any non-notarized modification made to a will must be probated, whether the will is notarized or not.</h5>
                                    </p>
                                </div>
                                    <div class="col-sm-12">
                                        <h5>
                                            What you should never put in your will?</h5>
                                        <h5>Types of Property You Can't Include When Making a Will</h5>

                                        <ul
                                            class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Property in a living trust. One of the ways to avoid probate is to set up a living trust.</div>

                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Retirement plan proceeds, including money from a pension, IRA, or 401(k) .</div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Stocks and bonds held in beneficiary.</div>

                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Proceeds from a payable-on-death bank account</div>

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
