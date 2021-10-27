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
                                <h2 class="title">Divorce Notice</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html">Home</a>
                                </span>
                                <span>Divorce Notice</span>
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
                                    <a href="{{ route('civillaw.propertyverification') }} class="       tag-cloud-link">#
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
                                    <h3>Divorce Notice</h3>
                                    <div class="mb-15">
                                        <p>Spouse sends a legal notice to convey the parties intention to dissolve the
                                            marriage.</p>
                                    </div>

                                </div>

                                <div class="row  mb-10 px-4">
                                    <h5>What is Divorce Notice? </h5>
                                    <p class="d">When the couple is not happy in the marriage and they decide
                                        to dissolve the marriage and take divorce, it requires to send a legal notice for
                                        informing the other partner about the decision of the divorce</h5>
                                    </p>
                                </div>

                                <div class="col-sm-12  mb-10 ">
                                    <h5>How Divorce notice prepared</h5>

                                    <ul
                                        class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                        <li><i class="fa fa-arrow-circle-right"></i>
                                            <div class="ttm-list-li-content">a) Meeting of client (specific person) and
                                                advocate to know about specific facts of
                                                your situation.</div>

                                        </li>
                                        <li><i class="fa fa-arrow-circle-right"></i>
                                            <div class="ttm-list-li-content"> b) Legal Notice Drafting. The advocate will
                                                prepare and draft the legal notice for
                                                your approval.</div>
                                        </li>
                                        <li><i class="fa fa-arrow-circle-right"></i>
                                            <div class="ttm-list-li-content">c) Legal Notice Dispatch Procedure. If the
                                                notice is finalized after your approval
                                                the advocate will dispatch the legal notice through registered post and
                                                share the
                                                tracking number.</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-12  mb-10 ">
                                    <h5>

                                        What is not done</h5>

                                    <ul
                                        class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                        <li><i class="fa fa-arrow-circle-right"></i>
                                            <div class="ttm-list-li-content">a) Except Legal notice filing of any case is
                                                not included in this service.</div>

                                        </li>
                                        <li><i class="fa fa-arrow-circle-right"></i>
                                            <div class="ttm-list-li-content">b) Preparation of any settlement deed will not
                                                be included in this service.</div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="row  mb-10 px-4">
                                    <h5>What happens after the expiry of the divorce notice?</h5>
                                    <p class="d">After expiry of the timeline/notice period mentioned in
                                        notice, the party can proceed to file the Divorce Petition. It is pertinent to
                                        mention here that such legal notice must be drafted by a competent legal
                                        practitioner and should cover all the relevant aspects/contents</h5>
                                    </p>
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
