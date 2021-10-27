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
                                <h2 class="title">Banking & Finance</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html">Home</a>
                                </span>
                                <span>Banking & Finance</span>
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
                                    <h3>Banking & Finance</h3>
                                    <div class="row mt-15 mb-30 px-4">
                                        <p>Banking explores dynamic, fast-paced world of money, shares credits and
                                            investments. Where as Finance intermediate such as like banking sector. </p>
                                        <h5> “Why Investment Banking?” </h5>
                                        <p>You’re almost guaranteed to be asked this question in an investment banking
                                            interview. Of all the jobs you could have out of university, why investment
                                            banking?</p>
                                        <p>The key is to quickly demonstrate that you’re smart, that you understand what the
                                            job entails, and, having a full view of what’s required, you still really want
                                            to do it!</p>
                                        <h6>At the end of the day, investment banks want Analysts/Associates who are –</h6>
                                        <div class="col-sm-12">
                                            <ul
                                                class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">Smart enough to do good work;</div>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">Can handle the hours;</div>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">And won’t quit.</div>

                                                </li>

                                            </ul>
                                        </div>
                                        <h5>Investment Banking vs. Corporate Finance: </h5>
                                        <h6>An Overview</h6>
                                        <p>A generally-accepted distinction between corporate finance roles and investment
                                            banking roles is that a corporate finance professional deals with day-to-day
                                            financial operations and handles short- and long-term business goals, while an
                                            investment banker focuses on raising capital in the public markets. An
                                            investment banker also runs private placements of equity and debt capital and
                                            conducts merger and acquisitions (M&A) deals.

                                            <br> It could also be said that investment banking roles are tasked with growing
                                            a company from a capital perspective, while the corporate finance industry is
                                            employed in order to manage a company's capital and strategic finance-related
                                            decisions.
                                        </p>
                                        <h5>KEY TAKEAWAYS</h5>
                                        <div class="col-sm-12">
                                            <ul
                                                class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">Investment banking grows a company,
                                                        while corporate finance manages a company.</div>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">A corporate finance professional deals
                                                        with day-to-day financial operations and handles short- and
                                                        long-term business goals, while an investment banker focuses on
                                                        raising capital.</div>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">The academic and experience credentials
                                                        necessary to become an investment banker are higher than for most
                                                        corporate finance positions.</div>

                                                </li>

                                            </ul>
                                        </div>
                                        <h5>Investment Banking</h5>

                                        <p><strong>Investment banks </strong> raise capital for other companies through
                                            securities operations in the debt and equity markets. Investment banks also help
                                            coordinate and execute mergers and acquisitions (M&A). They offer advisory
                                            services to big clients and perform complex financial analyses.</p>
                                        <p>Investment banking is considered one of the premier fields in the financial
                                            industry. There are two standard paths into an investment banking career: attend
                                            a noted undergraduate university and enter on the ground level as an analyst, or
                                            go to business school, earn a Master of Business Administration (MBA) graduate
                                            degree, and break through as an associate.
                                        </p>
                                        <p>In their undergraduate studies, those individuals interested in becoming
                                            investment bankers should focus on degrees in finance, economics, banking, or
                                            investment analysis. Most people either accept internships or take low-level
                                            positions at large banks to gain experience, and many work as analysts before
                                            receiving their MBA.
                                        </p>
                                        <p>Major investment banks, especially in New York and London, focus their recruiting
                                            efforts on the best-performing prospects from Ivy League schools—although it's
                                            not unheard of for exceptionally analytical prospects with degrees in
                                            challenging subjects such as biopharmaceuticals or other medical fields to make
                                            their way into the industry.<br>
                                            Even junior investment banking analysts can expect compensation of $70,000 to
                                            $150,000 a year when signing bonuses and performance-based bonuses are factored
                                            in, according to data from Wall Street Oasis.
                                        </p>
                                        <h5>Corporate Finance</h5>
                                        <p>Corporate finance is a catch-all designation for any business division that
                                            handles financial activities for a firm. In some instances, it can be difficult
                                            to differentiate corporate finance roles from investment banking roles because.
                                            For example, an investment banking firm might have a corporate finance division.
                                        </p>
                                        <p>Many different viable career paths can be found in corporate finance because
                                            there are so many different kinds of jobs in the field. Individuals can find
                                            their niches as accountants, advisors, account managers, analysts, treasurers,
                                            business analysts, or any number of other jobs. There are a few necessary
                                            skills, such as an understanding of corporate finance and effective
                                            communication skills.
                                        </p>
                                        <p>A financial analyst, technically involved in investment banking, could expect a
                                            median salary of $85,660 in 2018, according to the Bureau of Labor Statistics
                                            (BLS).2 Meanwhile, a chief financial officer and other top professionals in the
                                            corporate finance field enjoyed a median salary of $184,460 in 2019, according
                                            to the BLS.3
                                        </p>
                                        <p>According to the BLS, both financial analyst positions and corporate finance
                                            executive positions are expected to grow at a rate of 6% between 2018 and 2028.
                                        </p>
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
