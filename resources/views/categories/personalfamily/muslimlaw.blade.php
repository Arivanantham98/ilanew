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
                            <h2 class="title">Muslim Law</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index.html">Home</a>
                            </span>
                            <span>Muslim Law</span>
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
                                <h3>Muslim Law</h3>
                                <div class="row mt-15 mb-30 px-4">

                                    <p>As per Muslim law a Muslim woman or a Muslim man can get divorce by themselves or by court.(There is not a specific act for Muslims . Dissolution of Muslim marriage act, 1939 only helps the women to fought for their rights and to get decree).</p>

                                    <h5>What is the Triple Talaq law?</h5>
                                    <p>The Triple Talaq law, enforced by the National Democratic Alliance (NDA) government on August 1, 2019, classified giving ‘instant divorce’ by Muslim men to their wives as a criminal offence.</p>
                                    <p>The law prescribes a three-year jail term for a man divorcing his wife through triple talaq. Arrests can be made without a warrant, and bail is given only at the discretion of a magistrate.</p>
                                    <p><strong>Triple talaq</strong>, or talqa-e-biddah as its known among Muslim communities, is a practice which gives a man the right to divorce his wife by uttering ‘talaq’ three times in one sitting, in any form including email or text message, without his wife’s consent.</p>

                                    <h5>How was the law passed?</h5>
                                    <p>The Supreme Court of India struck down the practice of instant triple talaq in August 2017, following a petition filed by Shayara Bano, who was divorced through the instant triple talaq. The Union of India and the women rights organizations like Bebaak Collective and Bhartiya Muslim Mahila Andolan (BMMA) supported Bano’s plea that these practices are unconstitutional.
                                        “The judgement has come, but no action on triple talaq has been taken. That is why we have brought this law, because the law is a deterrence," he said.
                                        The bill was first tabled in 2017 but stalled in the upper house of parliament, where some MPs called it unfair.

                                    </p>
                                    <h5>Essentials of Khula:</h5>
                                    <p>There must be an offer from the wife and the offer must be accepted with the consideration for the release by the husband</p>
                                    <h5>Legal Consequences of Khula</h5>
                                    <p>The legal effects of a valid Khula are the same as that of a divorce by any other method, i.e., iddat, maintenance during the period of iddat and after completion of Khula or Mubarat, the marriage dissolves and cohabitation becomes unlawful.</p>
                                    <h5>Legal case related to Muslim law</h5>
                                    Yousuf v. Swaramma, Justice Krishna Iyer pointed out:<br>
                                    The view that the Muslim husband enjoys an arbitrary unilateral power to inflict instant divorce does not accord with Islamic injunctions. It is a popular fallacy that a Muslim male enjoys under the Quranic law unbridled authority to liquidate the marriage. The whole Quran expressly forbids a man to seek pretexts for divorcing his wife, so long as she remains faithful and obedient to him.

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