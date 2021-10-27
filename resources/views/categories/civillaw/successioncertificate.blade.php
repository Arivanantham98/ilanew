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
                                <h2 class="title">Succession Certificate</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html">Home</a>
                                </span>
                                <span>Succession Certificate</span>
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
                                    <h3>Succession Certificate</h3>
                                    <h5>Why do we need succession certificate?</h5>
                                    <p>The certificate gives an heir the authority to realise the debts of the deceased.
                                        In the of a will, heirs are required to prove their claims to them. For a movable
                                        property like the provident fund, bank deposits, shares and loans the succession
                                        certificate is require

                                    <p> It is a certificate under the legal Act, It is a document that gives authority to
                                        the person who obtains it to represent the deceased for the purpose of collecting
                                        debts and securities due to him or payable on his name.</p>

                                    </p>

                                    <h5>What are the essential elements of succession certificate?</h5>
                                    <p>Generally a succession certificate includes details of the deceased, details of the
                                        legal heir so chosen, the relation between the deceased and the heir, list of debts
                                        and assets, grant of authority, the details of the death of the deceased and a
                                        declaration of an intestate death.</p>
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
                                                <div class="ttm-list-li-content">d) Applying for Legal Heir / Succession
                                                    certificate and handling the required paperwork.

                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="col-sm-12  mb-10 ">
                                        <h5>What will not be done </h5>
                                        <ul
                                            class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">a) Court fees and Stamp Duty as
                                                    applicable shall be payable extra.
                                                </div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">b) Any additional work by the advocate
                                                    after obtaining the legal heir certificate.
                                                </div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">c) Appearances beyond 3 court appearances,
                                                    if needed.
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
