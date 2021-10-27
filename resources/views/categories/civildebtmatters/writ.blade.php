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
                                <h2 class="title">Writ Petition</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html">Home</a>
                                </span>
                                <span>Writ Petition</span>
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
                                    <a href="{{ route('croporatelaw.bankingfinance') }}" class="tag-cloud-link"># Banking
                                        & Finance</a>
                                    <a href="{{ route('civildebt.civil') }}" class="tag-cloud-link"># Civil</a>
                                    <a href="{{ route('croporatelaw.gst') }}" class="tag-cloud-link"># GST</a>
                                    <a href="{{ route('criminalproperty.cybercrime') }}" class="tag-cloud-link"># Cyber
                                        Crime</a>
                                    <a href="{{ route('family.marriageregistration') }}" class="tag-cloud-link"># Marriage
                                        Registration</a>
                                    <a href="{{ route('civillaw.propertyverification') }} class="  tag-cloud-link">#
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
                                    <h3>Writ Petition</h3>
                                    <div class="row mt-15 mb-30 px-4">
                                        <p>In Civil cases documentation has to be proved for recording of evidence. Original
                                            document be entitle substitute by a certified copy. </p>

                                    </div>
                                    <div class="row mt-15 mb-30 px-4">
                                        <h5>What is writ petition in India?</h5>
                                        <p>Writ Petition is an order by a higher court to a lower court or courts directing
                                            them to act or stop them from doing an activity. ... In the Indian legal system,
                                            you can file or draft a writ petition under Article 226 in the High Court and
                                            under Article 32 of the Indian Constitution in the Supreme Court.</p>
                                    </div>

                                    <div class="row mt-15 mb-30 px-4">
                                        <h5>What is difference between writ and petition?</h5>
                                        <p>The major difference between these two is that under the Writ Act 226 there is a constitutional remedy for all people. It is raised by a legal authority. But a petition is a form of writ raised by the people in the form of a request for a legal authority that seeks to take action regarding a particular cause.</p>
                                    </div>
                                    <div class="row mt-15 mb-30 px-4">
                                        <h5>Is writ petition original jurisdiction?</h5>
                                        <p>Article 226 of the Constitution of India reserves original jurisdiction to the High Court to issue writs. The first thought which is to be pondered is as to whether the writ petition can be barred or whether there are any circumstances in which jurisdiction of High Court to entertain a writ petition is barred.</p>
                                    </div>
                                    <div class="row mt-15 mb-30 px-4">
                                        <h5>Who can file a writ petition?</h5>
                                        <p>A writ petition can be filed by any person whose Fundamental Rights have been infringed by the State. Under a Public Interest Litigation, any public-spirited person may file a writ petition in the interest of the general public even if his own Fundamental Right has not been infringed.</p>
                                    </div>
                                    <div class="row mt-15 mb-30 px-4">
                                        <h5>What are the 5 types of writs?</h5>
                                        <p>There are five types of Writs which are Habeas Corpus, Mandamus, Certiorari, Quo Warranto and Prohibition and all these writs are an effective method of enforcing the rights of the people and to compel the authorities to fulfil the duties which are bound to perform under the law.</p>
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
