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
                            <h2 class="title">About Us</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index.html">Home</a>
                            </span>
                            <span>About Us</span>
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
                    <div class="col-lg-4 widget-area sidebar-right ttm-col-bgcolor-yes ttm-bg ttm-left-span mt_100 pt-100 mb_100 pb-100 res-991-mt-0 res-991-pt-0 widget-area sidebar-left">
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
                                <a href="{{ route('civillaw.propertyverification') }} class="tag-cloud-link"># Property Verification</a>
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
                                <h3>Divorce</h3>
                                <div class="mb-15">

                                    <div class="row mt-15 mb-30 px-4">
                                        <p>Legally terminating a marital union by a court and Legal dissolution of a marriage by a court</p>
                                        <h5>Why Couples Divorce ?</h5>
                                        <p class="d">In the first five years of marriage, 22 percent of couples experience some form of "marital disruption," which refers to separation, divorce or death. After 20 years of marriage, 53 percent of marriages have been disrupted.</p>
                                        <h5>There are 5 reasons couples blame to get divorce</h5>

                                        <div class="col-sm-12">
                                            <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">Cheating & Emotional Affairs:</div>
                                                    <p class='ml-4 category-list-p text-justify'>
                                                        <strong>Cheating</strong> is one of the main drivers of divorce. And in today's connected world, it's not just physical affairs that happen, but also <strong>emotional affairs.</strong> There are also countless affairs I hear about that occur because of social media.
                                                        Infidelity is of one of the biggest betrayals a marriage can face; for some couples the marriage will end because of a one-night stand, and for others, it can be multiple offenses. The destruction of trust in an already weak relationship can often be the death knell to the relationship.
                                                    </p>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">Money Problem:</div>
                                                    <p class="ml-4 category-list-p text-justify">Money in and of itself doesn't cause divorce. Living in poverty is incredibly stressful, and financial stressors can lead to fighting — which can result in divorce. Differences in how we spend or save money can also be incredibly difficult to navigate in a marriage, Another money-related issue with the rise of successful women is that they are out-earning their spouses in increasing numbers. This "modernizing" can be tough for even the most enlightened couples — and can cause a relationship to derail as well.</p>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">Addiction:</div>
                                                    <p class="ml-4 category-list-p text-justify">
                                                        <strong>Addictions</strong> are often cited as a reason for divorce. The addictions range from alcohol to sex . Addictions catch a partner's brain, and can become one's top priority. They can wreak havoc on entire families in a truly terrible fashion. When the "victimized" spouse says "enough is enough" and gathers the courage to leave, the relationship is probably lead a way to divorce.
                                                    </p>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">Extraordinary situations:</div>
                                                    <p class="ml-4 category-list-p text-justify">
                                                        Extraordinary stressors can bring even the strongest people to their knees, and test the relationship. The pain of loss or sickness becomes too great to bear, and the relationship can vaporize.
                                                    </p>
                                                    <p class="ml-4 category-list-p text-justify">You say tomato, I say tomah-to. When we are not aligned on the big things in life like religion, core values, where we want to live, how we want to live — friction is bound to happen. He wants to move to Foreign countries for his big job, but you want to stay in Native place because your roots are there — and you never discussed this before marriage.</p>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">Non Tolerable Differences:</div>
                                                    <p class="ml-4 category-list-p text-justify">Simply put: "We just can't work it out. There's no hope." There are too many differences, or too many problems that can't be worked out. The marriage has broken down. There may be grave fights, stonewalling, hostility, anger, you name it.
                                                        If you feel like you may be on a slippery slope towards divorce, but feel that there is hope to keep it alive, seek out individual and couples' counseling. It could save your marriage, and maybe even bring it to a better-than-ever level</p>
                                                </li>
                                            </ul>
                                        </div>
                                        {{--<div class="row">
                                        <div class="col-sm-4">
                                            <!-- ttm-fid -->
                                            <div class="ttm-fid inside content-align-before-border-style">
                                                <div class="ttm-fid-contents">
                                                    <h4 class="ttm-fid-inner">
                                                        <span data-appear-animation="animateDigits" data-from="0" data-to="25" data-interval="5" data-before="" data-before-style="sup" data-after="" data-after-style="sub" class="numinate">25</span>
                                                    </h4>
                                                    <h3 class="ttm-fid-title">Years Of Experience</h3>
                                                </div>
                                            </div><!-- ttm-fid end -->
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- ttm-fid -->
                                            <div class="ttm-fid inside content-align-before-border-style">
                                                <div class="ttm-fid-contents">
                                                    <h4 class="ttm-fid-inner">
                                                        <span data-appear-animation="animateDigits" data-from="0" data-to="7860" data-interval="15" data-before="" data-before-style="sup" data-after="" data-after-style="sub" class="numinate">7860</span>
                                                    </h4>
                                                    <h3 class="ttm-fid-title">Happy Customers</h3>
                                                </div>
                                            </div><!-- ttm-fid end -->
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- ttm-fid -->
                                            <div class="ttm-fid inside content-align-before-border-style">
                                                <div class="ttm-fid-contents">
                                                    <h4 class="ttm-fid-inner">
                                                        <span data-appear-animation="animateDigits" data-from="0" data-to="760" data-interval="15" data-before="" data-before-style="sup" data-after="" data-after-style="sub" class="numinate">760</span>
                                                    </h4>
                                                    <h3 class="ttm-fid-title">New Customers</h3>
                                                </div>
                                            </div><!-- ttm-fid end -->
                                        </div>
                                    </div>--}}
                                    </div>
                                    <!-- <div class="row">
                                    <div class="col-lg-12">
                                        <h3>Our Best Services Included</h3>
                                         
                                        <div class="row mt-15 mb-30">
                                            <div class="col-sm-6">
                                                <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                    <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">Gift Deed Drafting</div></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">Lease Agreement Drafting </div></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">Property Verification</div></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">Marriage Registration</div></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">Succession Certificate</div></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                    <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">Marriage Counselling</div></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">Para Legal</div></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">Divorce Notice</div></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">Property Registration</div></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">Court Marriage</div></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                    
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