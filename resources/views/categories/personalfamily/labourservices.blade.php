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
                                <h2 class="title">Labour & Services</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html">Home</a>
                                </span>
                                <span>Labour & Services</span>
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
                                    <a href="{{ route('civillaw.propertyverification') }} class="   tag-cloud-link">#
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
                                    <h3>Labour and service</h3>
                                    <div class="mb-15">
                                        <p>In the early phases of development the scope of labour law is often limited to
                                            the most developed and important industries, to undertakings above a certain
                                            size, and to wage earners; as a general rule, these limitations are gradually
                                            eliminated and the scope of the law extended to include handicrafts, rural
                                            industries and agriculture, small undertakings, office workers, and, in some
                                            countries, public employees. Thus, a body of law originally intended for the
                                            protection of manual workers in industrial enterprises is gradually transformed
                                            into a broader body of legal principles and standards, which have basically two
                                            functions: the protection of the worker as the weaker party in the employment
                                            relationship, and the regulation of the relations between organized interest
                                            groups (industrial relations).</p>
                                    </div>
                                    <div class="mb-15">
                                        <p>Labour law which is also known as employment law and its services are</p>

                                        <div class="row mt-15 mb-30 px-4">
                                            <div class="col-sm-6">
                                                <ul
                                                    class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                    <li><i class="fa fa-arrow-circle-right"></i>
                                                        <div class="ttm-list-li-content">Administrative rulings </div>
                                                    </li>
                                                    <li><i class="fa fa-arrow-circle-right"></i>
                                                        <div class="ttm-list-li-content">Legal rights of the employees</div>
                                                    </li>
                                                    <li><i class="fa fa-arrow-circle-right"></i>
                                                        <div class="ttm-list-li-content">Certification of unions</div>
                                                    </li>
                                                    <li><i class="fa fa-arrow-circle-right"></i>
                                                        <div class="ttm-list-li-content">Labour and management relationship
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div>
                                                <h5>Trade unions and industrial relations</h5>
                                                <p>A number of complex legal relationships fall under the heading of
                                                    industrial relations, including the legal status, rights, and
                                                    obligations of trade unions and employers organizations, collective
                                                    unions organizations, bargaining and collective agreements, the
                                                    representation of employees at plant and enterprise level and the
                                                    prevention and settlement of various types of labour disputes in general
                                                    and of strikes and lockouts in particular. Regarding such matters as the
                                                    representative character and capacity of trade unions, their legal
                                                    status, the obligation to recognize and bargain with them, the
                                                    enforceability of collective agreements, the scope of activities
                                                    permitted to trade unions, and their obligations in contract and tort,
                                                    there are wide variations both in the extent to which they are subject
                                                    to legal rules and in the content of such rules.</p>
                                            </div>
                                            <p>The new labour laws limit the <strong>maximum basic pay to 50 per cent of
                                                    CTC</strong>, thus effectively increasing the Gratuity bonus to be paid
                                                to the employee. Under the new wages code, the gratuity amount will be
                                                calculated on a larger salary base, which will include basic pay plus
                                                allowances such as a special allowance on wages.</p>
                                            <h5>New Codes on labour Industrial relations:</h5>
                                            <p>The four new codes on industrial relations, wages, social security and
                                                occupational health safety (OSH), and working conditions will rationalise 44
                                                central labour laws, the government has said. According to reports, all the
                                                four codes will be implemented at one go.</p>
                                            <p>The existing provisions of the new rules will lead to an increase in working
                                                hours for employees from nine to 12 hours, while the in-hand salary will
                                                also see a change. Under the new wage code, allowances have been capped at
                                                50 per cent, which will lead to half of the monthly pay being calculated as
                                                basic wage. Provident fund (PF) contribution is calculated as a percentage
                                                of basic wage, which includes basic pay and dearness allowance. Increase in
                                                basic pay will result in an increase in the PF contribution, which will
                                                reduce the take-home pay for workers. The PF liability for employers will
                                                also increase in many cases.</p>
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
