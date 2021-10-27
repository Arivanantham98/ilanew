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
                            <h2 class="title">Medical Negligence</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index.html">Home</a>
                            </span>
                            <span>Medical Negligence</span>
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
                                <h3>Medical Negligence</h3>
                                <div class="row mt-15 mb-30 px-4">
                                    <p>Negligence is an offense under tort, IPC, Indian Contracts Act, Consumer Protection Act and many more. Medical Negligence basically is the misconduct by a medical practitioner or doctor by not providing enough care resulting in breach of their duties and harming the patients which are their consumers, It can be defined as the improper or unskilled treatment of a practitioner which leads to medical malpractice.</p>
                                   <p>According to blacks law dictionary, medical negligence is the failure to provide medical, dental or psychiatric care that is necessary to prevent or to treat serious physical or emotional injury or illness while medical malpractice is a doctors failure to exercise the degree of care and skill that a physician or surgeon of the same medical specialty would use under similar circumstance.</p>
                               <p>When a patient comes to a doctor for care and the doctor accepts the same, at that moment an implied duty of care arises. Medically speaking, negligence is the breach of duty owned by a doctor to his patient to exercise reasonable care and skills, resulting in some bodily, mental and in turn financial loss and disability.</p>
                             <h5>Is Medical malpractice case is criminal or civil ?</h5>
                             <p>Medical malpractice can severely injure victims or be fatal. Despite the serious consequences of medical malpractice, it is rarely tried as a criminal offense. Any legal action against doctors, nurses, and hospital staff in cases of medical malpractice is usually considered as a <strong>civil personal injury case.</strong></p>
                          <h5>When Medical Negligence Is Criminal</h5>
                          <p>The actions that result in a murder trial, if they’re committed by a healthcare provider, could be the basis of a wrongful death lawsuit. However, it’s not true that wrongful death cases are necessarily criminal or even that a risky action in the course of care is reckless enough to warrant charges.</p>
                        <p>The difference is in a concept called mens rea. This term refers to intent—what the person involved in the criminal act was thinking at the time. In most civil medical malpractice or wrongful death lawsuits, defendants may have been negligent and failed to live up to the standard of care that their patients deserved and required, but they weren’t necessarily intending to injure a patient. Criminal cases require that the defendant made a bad judgment call that went beyond negligence and put themselves in a position where they committed manslaughter or homicide.</p>   
                        </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->

    </div><!--site-main end-->

</div>
@endsection
