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
                            <h2 class="title">Consumer Court</h2>
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
                                <h3>Small cause cases</h3>
                                <div class="row mt-15 mb-30 px-4">
                                    <p>Consumer court is a special purpose court in India, It primarily deals with consumer related disputes maintaining fair practices in contracts of sellers and protect consumer rights.</p>
                                    <h5>Grounds for Filing a Complaint are:</h5>
                                    <ul style="list-style-type:disc">
                                        <li>Adoption of unfair trade practice or a restrictive trade practice by the service provider;
                                        </li>
                                        <li>Defective goods, whether already bought or agreed to be bought by the complainant;
                                        </li>
                                        <li>Defective goods, whether already bought or agreed to be bought by the complainant;
                                        </li>
                                        <li>Overcharging of goods or services in excess of the price that may have been fixed by law or displayed on the packaging of goods or the price list exhibited or so agreed between the parties;
                                        </li>
                                        <li>Selling or offering to sell hazardous goods or services which pose a threat to life and safety when used or availed provided the trader could know that the goods or services are hazardous by due diligence.
                                        </li>
                                    </ul>
                                </div>
                                <h5>What are the different Consumer Disputes Redressal Agencies responsible for consumer protection?</h5>
                                <p>Once the grounds are established, the next step is to estimate the pecuniary limit for the complaint. Under the Consumer Protection Act there exists a three-tier redressal forum. complaints are filed in these forums in accordance with the pecuniary limit as fixed by the law.</p>
                                <div class="col-sm-12">
                                    <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                        <li><i class="fa fa-arrow-circle-right"></i>
                                            <div class="ttm-list-li-content">District Consumer Disputes Redressal Forum (DCDRF): </div>
                                            <p class='ml-4 category-list-p text-justify'>
                                                Established in each district, it comprises of 3 members each. If the value of the claim is up to 20 lakhs then, an appeal may be filed from the order of DCDRF in State Consumer Disputes Redressal Commission.
                                            </p>
                                        </li>
                                        <li><i class="fa fa-arrow-circle-right"></i>
                                            <div class="ttm-list-li-content">State Consumer Disputes Redressal Commission (SCDRC):</div>
                                            <p class="ml-4 category-list-p text-justify">Established in every State, the SCDRC can entertain original as well as appellate complaints. If the value of the claim is between 20 lakhs to 1 Crore, an appeal may be filed from the order of SCDRC to the National Consumer Disputes Redressal Commission.</p>
                                        </li>
                                        <li><i class="fa fa-arrow-circle-right"></i>
                                            <div class="ttm-list-li-content">National Consumer Disputes Redressal Commission (NCDRC):</div>
                                            <p class="ml-4 category-list-p text-justify">
                                                Located in New Delhi, it is the highest forum in the three-tier Redressal System under the Consumer Protection Act. The pecuniary jurisdiction lies if the value of the claim exceeds 1 crore. It is also authorized to hear appeals from SCDRC. Further, an appeal from the order of NCDRC lies to the Supreme Court. </p>
                                        </li>

                                    </ul>
                                </div>
                                <p>It is pertinent to note that an Amendment has been passed and published in the Gazette in 2019 which enhances the pecuniary limit of jurisdiction for the forums. However, the Act is still not in force. The amendment has increased the Pecuniary Jurisdiction of District Forum to 1 crore, the SCDRC to 10 Crores and that of NCDRC to 100 Crores. </p>
                                <p><strong>"With the boost in economy and the various services being offered on both online and offline platforms, there was a dire need to regulate consumer-service provider relationships and to address the grievances for maintenance of a harmonious relationship. That is where Consumer Courts play a major role and provide for a grievance redressal platform," adds Advocate Akshay Agarwal.</strong></p>
                                <h5>What is the procedure to file a complaint in the Consumer Court?</h5>
                                <h6>STEP 1: Intimation via Notice: </h6>
                                <p>A notice to be sent by the aggrieved party to the service provider who provided the goods or the services. The notice communicates the intention of the complainer to resort to litigation and informs him about the defects in the goods or the deficiency in the service or any unfair practice. The notice is also an attempt to settle the complaint without approaching the Forum i.e. if the service provider is willing to offer compensation or any other remedy. </p>
                                <h6>STEP 2: Get the Consumer Complaint Drafted: </h6>
                                <p>New Delhi, it is the highest forum in the three-tier Redressal System under the Consumer Protection Act. The pecuniary jurisdiction lies if the value of the claim exceeds 1 crore. It is also authorized to hear appeals from SCDRC. Further, an appeal from the order of NCDRC lies to the Supreme Court.
                                    It is pertinent to note that an Amendment has been passed and published in the Gazette in 2019 which enhances the pecuniary limit of jurisdiction for the forums. However, the Act is still not in force. The amendment has increased the Pecuniary Jurisdiction of District Forum to 1 crore, the SCDRC to 10 Crores and that of NCDRC to 100 Crores.
                                    "With the boost in economy and the various services being offered on both online and offline platforms, there was a dire need to regulate consumer-service provider relationships and to address the grievances for maintenance of a harmonious relationship. That is where Consumer Courts play a major role and provide for a grievance redressal platform," adds Advocate Akshay Agarwal.
                                    What is the procedure to file a complaint in the Consumer Court?
                                    STEP 1: Intimation via Notice:
                                    A notice to be sent by the aggrieved party to the service provider who provided the goods or the services. The notice communicates the intention of the complainer to resort to litigation and informs him about the defects in the goods or the deficiency in the service or any unfair practice. The notice is also an attempt to settle the complaint without approaching the Forum i.e. if the service provider is willing to offer compensation or any other remedy.
                                    STEP 2: Get the Consumer Complaint Drafted:
                                    If the service provider is not willing to offer compensation or any other remedy, the next step is to file a formal complaint under the Consumer Protection Act, 1986. The filing of the Complaint does not necessarily require a lawyer. The complaint can be filed by the aggrieved person. The following details must be specified in the complaint:
                                </p>
                                <div class="col-sm-12">
                                    <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                        <li><i class="fa fa-arrow-circle-right"></i>
                                            <div class="ttm-list-li-content">Name, description and the address of the complainant(s) and the Opposite Party or parties.</div>
                                        </li>
                                        <li><i class="fa fa-arrow-circle-right"></i>
                                            <div class="ttm-list-li-content">Cause of Action, the approximate date, time and venue.</div>
                                        </li>
                                        <li><i class="fa fa-arrow-circle-right"></i>
                                            <div class="ttm-list-li-content">Relevant facts relating to the cause of action.</div>
                                        </li>
                                        <li><i class="fa fa-arrow-circle-right"></i>
                                            <div class="ttm-list-li-content">The Relief or Remedy claimed by the complainant in accordance with the facts of the case. </div>
                                        </li>
                                        <li><i class="fa fa-arrow-circle-right"></i>
                                            <div class="ttm-list-li-content">Signature and Verification by the complainant or his authorized agent.</div>
                                        </li>

                                    </ul>
                                </div>
                                <h6>STEP 3: Attach Relevant Documents: </h6>
                                <p>Copies of material evidence and relevant documents that support your case in Consumer Court are important. These documents include:</p>
                                <div class="col-sm-12">
                                    <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                        <li><i class="fa fa-arrow-circle-right"></i>
                                            <div class="ttm-list-li-content">A copy of the bill, receipt of delivery, packaging of a product, a record of online booking of the goods bought</div>
                                        </li>
                                        <li><i class="fa fa-arrow-circle-right"></i>
                                            <div class="ttm-list-li-content">Warranty/Guarantee certificates</div>
                                        </li>
                                        <li><i class="fa fa-arrow-circle-right"></i>
                                            <div class="ttm-list-li-content">A copy of the written complaint and notice sent to the manufacturer/seller</div>
                                        </li>
                                    </ul>
                                </div>
                                <h6>STEP 4: Appropriate Forum: </h6>
                                <p>Choose the appropriate forum for filing the complaint in accordance with the pecuniary jurisdiction which is estimated in reference to the total value of goods and services bought or availed and the amount of compensation sought.</p>
                                <h6>STEP 5: Pay Requisite Court Fees: </h6>
                                <p>A prescribed fee is required to be paid along with the complaint filed depending on the forum. The court fee depends upon the value of goods bought and the amount of compensation sought.</p>
                                <h6>STEP 6: Submit an Affidavit:</h6>
                                <p>The person who wants to file a case in the Consumer Court is also required to submit an affidavit in the court. The affidavit must state that the facts presented and statements made by the consumer are true to their knowledge.</p>
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