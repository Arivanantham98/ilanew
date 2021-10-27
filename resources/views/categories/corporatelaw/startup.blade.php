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
                            <h2 class="title">Startup</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index.html">Home</a>
                            </span>
                            <span>Startup</span>
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
                                <h3>Startup</h3>
                                <div class="row mt-15 mb-30 px-4">
                                    <p>Startup focussed on building unique solution that deliver customer delight. It should have a good understanding about the rules and laws applicable for smooth running of the business. </p>
                                    <h5>Registering your startup</h5>
                                    <p>Before commencing operations, it is important for you to register your startup as a legitimate business. Depending on the kind of business you are setting up, you must follow the required registration procedure like obtaining a certificate of incorporation or partnership registration, as the case may be.</p>
                                    <h5>Registering with ‘Startup India’</h5>
                                    <p>The Government of India launched a scheme called ‘Startup India’ for the promotion of innovation and a robust startup ecosystem in the country. Registering with this initiative allows you to claim many benefits like tax exemptions that could help you boost your business in its initial stages.</p>
                                    <h5>Your startup would be eligible to register with this government initiative if:</h5>
                                    <div class="col-sm-12">
                                        <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">It is either incorporated as a private limited company, registered as a partnership firm or a limited liability partnership in India.</div>

                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Its incorporation or registration was less than ten years ago.</div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Its turnover for any of the financial years since incorporation or registration has not exceeded Rs 100 crore.</div>

                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">It is working towards innovation, development or improvement of products or processes or services, or if it is a scalable business model with a high potential of employment generation or wealth creation.</div>

                                            </li>
                                        </ul>
                                    </div>
                                    <h5>Founding agreements and employee contracts</h5>
                                    <p>If you are starting a business with other partners, it is advisable to make a founding agreement that has details of the roles and responsibilities of each founder, along with other operational details such as compensation, non-compete, contingency plans in cases of disagreements, etc. Such agreements help companies have clarity in management, allowing you to scale your business.</p>
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