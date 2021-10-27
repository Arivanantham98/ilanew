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
                            <h2 class="title">Documentation</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index.html">Home</a>
                            </span>
                            <span>Documentation</span>
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
                                <h3>Documentation</h3>
                                <div class="row mt-15 mb-30 px-4">
                                    <p>In Civil cases documentation has to be proved for recording of evidence. Original document be entitle substitute by a certified copy. </p>
                                    <h5>Filling Documentations</h5>
                                    <p>"Filing" typically means visiting a court clerk at a filing window; paying a filing fee by cash, check, or credit card; and submitting the document to be filed (usually the original and two copies). For each document filed, the court clerk inspects the document to ensure it complies with the court's rules on how legal documents should be formatted and verifies that the case number and caption are for a valid case. (If the document is the first filing in a case, the court clerk assigns a new case number and opens a new file for the case.)
                                        <br>Next, the court clerk stamps all copies with a large stamp that indicates the name of the court and the date the document was filed, then keeps one copy for the court's files and returns the remaining copies to the filer for the filer's records and for mailing, personal delivery, or some other form of delivery (as required by the governing rules) on the opposing party in the case. The clerk then adds the document to the docket for the case as well as any related deadlines or events.

                                        <br>Some courts now have electronic filing systems, which allow lawyers and sometimes self-represented parties to simply upload Portable Document Format ("pdf") electronic documents to a secure website maintained by the court or a private commercial service.
                                    </p>
                                    <h5>Tips For Filling Documents</h5>
                                    <div class="col-sm-12">
                                        <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Make sure you have the most current version of the form. If you are not sure you have the current version, ask the Self-Help Center staff or court clerk.</div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Make sure you read the entire form and any direction that came with it BEFORE you start filling out the form. This will give you a better understanding of what the form is intended to accomplish and what information you will need to provide.</div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Be sure your completed forms are clear and easy to read. Use only blue or black ink or type them. Many forms are available online, and you can fill them out online too if you have a computer.</div>

                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Always use your legal name, current address, daytime telephone number, and a valid e-mail address. If you want your home address to stay private, you can use another address where you receive mail. If your address changes, file a change of address form with the court. Until you change the address you provided, the judge and court will assume you have received whatever legal papers were sent to you.</div>

                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Most forms have a "caption" on the first page that you always need to fill out. The caption usually contains your name, address, phone number, and e-mail. The caption also lists the name of the plaintiff, the name of the defendant, the case number, and the department number.</div>

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