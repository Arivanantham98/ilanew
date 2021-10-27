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
                                <h2 class="title">MOU</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html">Home</a>
                                </span>
                                <span>MOU</span>
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
                                    <a href="{{ route('civillaw.propertyverification') }} class="        tag-cloud-link">#
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
                                    <h3>MOU</h3>
                                    <div class="row mt-15 mb-30 px-4">
                                        <p>A memorandum of understanding is a formal agreement between 2 or more parties.
                                        </p>
                                        <h5>
                                            What is MOU in law?
                                        </h5>
                                        <p>A Memorandum of Understanding ('MOU') is generally a preliminary understanding
                                            between the parties to a contract, prior to the execution of a formal agreement.
                                            It is a document highlighting the intention of the contracting parties and might
                                            also be known as a Letter of Intent ('LoI').</p>

                                        <h5>Do you need a lawyer for an MOU?</h5>
                                        <p>When signing a memorandum of understanding, it is important to create a clear
                                            document that all parties can agree to and understand. That's why it's so
                                            important to work with an experienced lawyer who can make sure that your MOU
                                            clearly states your goals, intentions, and expectations.</p>

                                        <h5>What is difference between MOU and agreement?</h5>
                                        <p>An agreement is a legal document that is formed after finalising the deal and it
                                            is binding document. Memorandum of Understanding (MoU) is actually just a means
                                            for two parties to reach a decision.MoU becomes binding on all parties if
                                            it has been drafted for a monetary exchange.</p>

                                        <h5>What are the types of MOU?</h5>
                                        <p>A memorandum of understanding (MOU) is defined as an agreement between parties
                                            and can be bilateral (two) or multilateral (more than two parties).</p>

                                        <div class="col-sm-12  mb-10 ">
                                            <h5>What will be done </h5>

                                            <ul
                                                class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content"> a) Client and Lawyer interaction to
                                                        know about how you will work together.
                                                    </div>

                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content"> b) Checklist of documents required
                                                        will be shared.
                                                    </div>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content"> c) Verification of your documents.
                                                    </div>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content"> d) Drafting of the Memorandum of
                                                        Understanding (MOU) and handling the required paperwork.
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-12  mb-10 ">
                                            <h5>What will be done </h5>

                                            <ul
                                                class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">a) Any additional work from the client side will not be done by the advocate after the completion of the agreement
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
