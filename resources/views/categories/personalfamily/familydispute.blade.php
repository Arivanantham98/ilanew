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
                            <h2 class="title">Family Dispute</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index.html">Home</a>
                            </span>
                            <span>Family Dispute</span>
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
                                <h3>Family dispute</h3>
                                <div class="mb-15">
                                    <p>Various matters or issues which lead to a dispute between a husband and wife in a family. Conflicts arose because of</p>
                                    <div class="row mt-15 mb-30 px-4">
                                        <div class="col-sm-6">
                                            <ul style="list-style-type:disc" class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                <li>Sibling rivalry </li>
                                                <li>Husband wife miscommunication </li>
                                                <li>In-laws rivalry </li>


                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul style="list-style-type:disc" class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                <li>Husband wife rivalry </li>
                                                <li>Parents children rivalry </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <h5>What causes of family conflict</h5>
                                    <p>It is well recognized that some of the stages a family goes through can cause conflict. These may include:</p>
                                    <div class="row mt-15 mb-20 ml-2">
                                        <div class="col-sm-6">
                                            <ul style="list-style-type:disc" class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                <li>Learning to live as a new couple</li>
                                                <li>Birth of a baby</li>
                                                <li>Birth of other children</li>

                                            </ul>
                                        </div>
                                        <div class="col-sm-6">

                                            <ul style="list-style-type:disc" class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                <li>A child going to school</li>
                                                <li>A child becoming a young person</li>
                                                <li> A young person becoming an adult.</li>
                                            </ul>
                                        </div>


                                    </div>
                                    <h5>Each of these stages can create new and different stresses and potential conflict.</h5>
                                    <p>Changes in the family situation can also take a toll on the family and contribute to conflict. This may include events such as:</p>
                                    <div class="row mt-15 mb-20 ml-2">
                                        <div class="col-sm-6">
                                            <ul style="list-style-type:disc" class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                <li>Separation or divorce</li>
                                                <li>Moving to a new house or country</li>
                                                <li>Travelling long distances to work</li>
                                                <li>Commuting interstate for work.</li>
                                                <li>Change in financial circumstances.</li>
                                            </ul>
                                        </div>

                                    </div>
                                   


                                    
                                   
                                    <h5>Other Suggestions to avoid family conflict :</h5>
                                    <div class="col-sm-12">
                                        <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Work out if the issue is worth fighting over.</div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Try to separate the problem from the person</div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Try to cool off first if you feel too angry to talk calmly.</div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Keep in mind that the idea is to resolve the conflict, not win the argument.</div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Remember that the other party isn’t obliged to always agree with you on everything.</div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Define the problem and stick to the topic.</div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Respect the other person’s point of view by paying attention and listening.</div>
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
        <!-- <div class="m-5">
<details open>
    <summary>Lorem ipsum dolor sit amet</summary>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora ea incidunt, nihil fuga libero quos hic vero eum esse inventore autem voluptatem sapiente cum ipsum at consequuntur eveniet. Consequatur, unde.</p>
</details>
</div> -->
    </div>
    @endsection