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
                            <h2 class="title">Child Custody</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index.html">Home</a>
                            </span>
                            <span>Child Custody</span>
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
                                <h3>Child custody</h3>
                                <div class="row mt-15 mb-30 px-4">
                                    <p> The custody of the child awarded or granted by the court to the father or mother legally.</p>
                                    <p>When a couple seeks divorce for various reasons, if the child or children are minors, the legal right to keep and look after the child/ children is called Child Custody. Generally, it pertains to the right given to a child's mother or father but under special circumstances like death of the parent/s it maybe even be granted to the grandparents or a third party relative to become the legal guardian of the child till the child attains majority</p>

                                    <h5>Various Types of Child Custody</h5>
                                    <p>Overview of the various types of child custody, including physical custody; legal custody; sole custody; joint custody; and information about joint custody agreements.</p>

                                    <div class="col-sm-12">
                                        <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Legal Custody:</div>
                                                <p class='ml-4 category-list-p text-left'>
                                                Legal custody, which is different than physical custody in that it allows a parent to make long-term decisions about the child’s upbringing and well-being.
                                                </p>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Physical Custody:</div>
                                                <p class="ml-4 category-list-p text-left">Physical custody, which differs from legal custody in that it involves the determination of where a child lives on a day-to-day basis.</p>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Sole Custody:</div>
                                                <p class="ml-4 category-list-p text-left">
                                                Sole custody, an arrangement whereby only one parent has full custody of their child, often awarded in cases where the other parent is abusive or absent.
                                                </p>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Joint Custody:</div>
                                                <p class="ml-4 category-list-p text-left">
                                                Joint custody, a relatively common arrangement for divorced or unmarried parents in which the child splits his or her time between the two parents’ living quarters.
                                                </p>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">•	Grandparent Visitation and Custody:</div>
                                                <p class="ml-4 category-list-p text-left">Basics of what a court considers when grandparents seek visitation or custody of a child, a determination that is primarily based on the child’s needs and best interests.</p>
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