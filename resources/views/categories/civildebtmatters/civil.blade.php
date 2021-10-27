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
                            <h2 class="title">Civil</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index.html">Home</a>
                            </span>
                            <span>Civil</span>
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
                    <div class="col-lg-4 widget-area sidebar-right ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-grey mt_100 pt-100 mb_100 pb-100 res-991-mt-0 res-991-pt-0 widget-area sidebar-left">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <aside class="widget tagcloud-widget with-title ttm-bgcolor-grey">
                            <h3 class="widget-title">Popular Tags</h3>
                            <div class="tagcloud">
                                <a href="{{ route('croporatelaw.bankingfinance') }}" class="tag-cloud-link"># Banking & Finance</a>
                                <a href="{{ route('civildebt.civil') }}" class="tag-cloud-link"># Civil</a>
                                <a href="{{ route('croporatelaw.gst') }}" class="tag-cloud-link"># GST</a>
                                <a href="{{ route('criminalproperty.cybercrime') }}" class="tag-cloud-link"># Cyber Crime</a>
                                <a href="{{ route('family.marriageregistration') }}" class="tag-cloud-link"># Marriage Registration</a>
                                <a href="{{ route('civillaw.propertyverification') }} class=" tag-cloud-link"># Property Verification</a>
                                <a href="{{ route('civildebt.recovery') }}" class="tag-cloud-link"># Money Recovery</a>
                                <a href="{{ route('family.marriagecounselling') }}" class="tag-cloud-link"># Marriage Counselling</a>

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
                                <h3>Civil</h3>
                                <div class="row mt-15 mb-30 px-4">
                                    <p>In civil case ordinary rule can be apply. Disputes between people or business over money or some injury to personal rights are called civil cases.</p>
                                    <h5>What is a civil case?</h5>
                                    <p>According to the Michigan Association of Townships, “If you decide to sue another person, an organization or a business, your case is a civil case. Private individuals, businesses or the government can sue other people and organizations. The person who is suing is called the plaintiff and the person who is being sued is called the defendant. Some examples of civil cases are:</p>
                                    <div class="col-sm-12">
                                        <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">A person who is hurt in a car accident sues the driver of the other car</div>

                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">A worker sues his employer after the worker hurts his back at work and can never work again</div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">A homeowner who has hired a builder to build a new kitchen sues the builder when the kitchen is badly built and has to be fixed</div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">A family sues their doctor when the doctor does not discover that the mother has cancer in time for the cancer to be treated.</div>
                                            </li>

                                        </ul>
                                    </div>
                                    <p>People usually sue for an amount of money to make up for the injury or loss they have suffered. Civil cases do not result in prison terms.</p>
                                    <i>Civil cases are handled in Livingston County Courts as follows:</i>
                                    <h6>District Court:</h6>
                                    <p>Cases where money damages are alleged to be below $25,000, except some case types that are assigned to Circuit Court</p>
                                    <ul>
                                        <li>All Small Claims cases</li>
                                        <li>All Landlord/Tenant cases</li>
                                    </ul>
                                    <h6>Circuit Court:</h6>
                                    <p>All cases where money damages are alleged to be $25,000 or above, plus some case types that are assigned to Circuit Court.Cases are filed with the appropriate Court. For District Court cases, more information is available here For Circuit Court cases, the case is filed with the Circuit Court Clerk.</p>
                                    <p>In most civil cases, parties have the right to a jury trial. A party must ask for a jury trial and pay a nominal fee. In circuit and district court the jury is comprised of six Livingston County residents. The decision of the jury does not have to be unanimous. Five of the six jurors must agree. Litigants do not have a right to a jury trial in every civil case. Statutes and case law have limited our right to a jury trial in certain civil cases. Judges are acutely aware of the emotional and financial impact on people involved in civil litigation. A judge’s responsibility is to ensure that cases are resolved efficiently and effectively. A variety of procedures to handle civil cases efficiently while ensuring the parties’ rights are protected are used. Two examples are case evaluation and mediation.</p>
                                    <p>District Court handles small claims cases. Small claims cases involve disputes of $6,000.00 or less. First, the parties appear before the magistrate who decides the case. If either party is dissatisfied with the decision of the magistrate, they may appeal to a district judge. The proceedings in small claims are informal.</p>





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