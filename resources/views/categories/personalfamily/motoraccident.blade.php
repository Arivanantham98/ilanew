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
                            <h2 class="title">Motor Accident</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index.html">Home</a>
                            </span>
                            <span>Motor Accident</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- page-title end-->
    <div class="site-main">

        <!-- sidebar -->
        <div class="ttm-row sidebar ttm-sidebar-left ttm-bgcolor-white clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-4 widget-area sidebar-right ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-grey mt_100 pt-100 mb_100 pb-100 res-991-mt-0 res-991-pt-0 widget-area sidebar-left">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <!-- <aside class="widget widget-nav-menu">
                            <ul class="widget-menu">
                                <li><a href="business-law.html">Business Law</a></li>
                                <li class="active"><a href="criminal-law.html">Criminal Law</a></li>
                                <li><a href="divorce-law.html">Divorce Law</a></li>
                                <li><a href="education-law.html">Education Law</a></li>
                                <li><a href="family-law.html">Family Law</a></li>
                                <li><a href="industrial-law.html">Industrial Law</a></li>
                            </ul>
                        </aside>
                        <aside class="widget widget-download">
                            <ul class="download">
                                <li><i class="fa fa-file-pdf-o"></i><a href="#">Download.pdf</a></li>
                                <li><i class="fa fa-file-pdf-o"></i><a href="#">Download.txt</a></li>
                            </ul>
                        </aside>
                        <aside class="widget widget_media_image">
                            <a href="#"><img class="img-fluid" src="images/widget-banner.jpg" alt="widget-banner"></a>
                        </aside> -->
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
                                <h3>Motor Accident</h3>
                                <div class="row mt-15 mb-30 px-4">
                                    <p>In case of death or permanent disability due to the accident the owner of the vehicle will be liable to pay compensation to the accident victim. </p>
                                    <div class="col-sm-12">
                                        <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Police will file a criminal case under the section 304</div>

                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Road accident is most unwanted thing to happen to a road user, though they happen quite often. The most unfortunate thing is that we don't learn from our mistakes on road. Most of the road users are quite well aware of the general rules and safety measures while using roads but it is only the laxity on part of road users, which cause accidents and crashes. Main cause of accidents and crashes are due to human errors. We are elaborating some of the common behaviour of humans which results in accident.</div>
                                            </li>
                                          
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Reasons:</div>
                                                    <ul class="ml-5" style="list-style-type: disc;">
                                                        <li>Over Speeding</li>
                                                        <li>Drunken Driving</li>
                                                        <li>Distractions to Driver</li>
                                                        <li>Red Light Jumping</li>
                                                        <li>Avoiding Safety Gears like Seat belts and Helmets</li>
                                                        <li>Non-adherence to lane driving and overtaking in a wrong manner</li>
                                                    </ul>
                                                

                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Various national and international researches have found these as most common behavior of Road drivers, which leads to accidents.</div>

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