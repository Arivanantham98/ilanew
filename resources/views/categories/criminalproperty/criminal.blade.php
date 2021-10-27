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
                            <h2 class="title">Criminal</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index.html">Home</a>
                            </span>
                            <span>Criminal</span>
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
                                <h3>Criminal</h3>
                                <div class="row mt-15 mb-30 px-4">

                                    <div class="col-sm-12">
                                        <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Assault and battery.</div>

                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Arson</div>

                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Child abuse</div>

                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Domestic abuse</div>

                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Kidnapping</div>

                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Rape and statutory rape</div>

                                            </li>

                                        </ul>
                                    </div>

                                    <h5>Crimes Against Property</h5>
                                    <p>Crimes against property typically involve interference with the property of another party. Although they may involve physical or mental harm to another, they primarily result in the deprivation of the use or enjoyment of property. Many property crimes are <strong>theft crimes</strong>, <strong>including burglary, larceny, robbery, auto theft,</strong> and <strong>shoplifting.</strong></p>
                                    <h5>Inchoate Crimes</h5>
                                    <p>person simply intending or hoping to commit a crime. Rather, the individual must take a “substantial step” towards the completion of the crime in order to be found guilty. Inchoate crimes include <strong>aiding and abetting, attempt,</strong> and <strong>conspiracy</strong>. In some cases, inchoate crimes can be punished to the same degree that the underlying crime would be punished, while in other cases, the punishment might be less severe.</p>
                                    <h5>Statutory Crimes</h5>
                                    Statutory crimes include those crimes, in addition to the crimes discussed above, which are proscribed by statute. Three significant types of statutory crimes are <strong>alcohol related crimes, drug crimes, traffic offenses, and financial/white collar crimes</strong>. These crimes are specifically prohibited by statute because society hopes to deter individuals from engaging in them. Alcohol-related crimes include a variety of offenses regarding how and where alcohol can be consumed, such as:
                                    <h5>Overlap</h5><br>
                                    <p>Statutory crimes may overlap with other types of crimes.</p>
                                    <div class="col-sm-12">
                                        <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Driving Under the Influence (DUI/OWI/DWI)</div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Open Container Violations</div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Minor in Possession of Alcohol</div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Public Intoxication</div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Underage DUI</div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Boating DUI</div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Selling and Supplying Alcohol to Minors</div>
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Refusing to Perform a Field Sobriety Test
                                            <li><i class="fa fa-arrow-circle-right"></i>
                                                <div class="ttm-list-li-content">Refusing to Perform a Breathalyzer or Provide a Blood Sample</div>
                                            </li>

                                        </ul>
                                    </div>
                                    <p>Drug crimes concern any involvement in the creation or distribution of drugs, including <strong>drug possession, drug manufacturing,</strong> and <strong>drug trafficking.</strong> One area of criminal law that is currently receiving a great deal of attention is the regulation and prosecution of drug crimes related to <strong>medical marijuana.</strong> Due to state trends toward the legalization of medical marijuana, this is an area of criminal law that is in flux.</p>
                                    <p>Traffic offenses include crimes that may arise while an individual is driving a vehicle on public roadways. Because a <strong>DUI/OWI/DWI</strong> involves both alcohol and the use of a vehicle, it is considered both an alcohol related crime and a traffic offense. Additional traffic offenses include <strong>driving on a suspended or revoked license, driving without a license, hit-and-run accidents, reckless driving,</strong> and <strong>vehicular assault.</strong> Where a traffic offense results in death, it can be charged as a far more serious crime, such as a form of homicide.</p>
                                    <h6>Financial and Other Crimes</h6>
                                    <p>Finally, financial crimes often involve deception or fraud for financial gain. Although white-collar crimes derive their name from the corporate officers who historically perpetrated them, anyone in any industry can commit a white-collar crime. These crimes include many types of <strong>fraud</strong> and <strong>blackmail, embezzlement</strong> and <strong>money laundering, tax evasion,</strong> and <strong>cybercrime.</strong></p>
                                    <h6>Recovery of Property</h6>
                                    <p> A thing or belonging (ie) a possession belongs to someone.<br>Recovery of possession of Immovable property<br>
                                        Section 5 and 6 of the Specific Relief Act, 1963 provide methods for recovery of possession of the certain specific immovable property. Section 5 of Specific Relief Act, 1963 provides that a person entitled to the possession of any specific immovable property can recover it in the manner prescribed by the Code of Civil Procedure, 1908 (5 of 1908).<br>
                                        Section 5 provides the manner for recovery of specific immovable property. It reads as, “A person entitled to the possession of the specific immovable property can recover it in the manner provided by the Code of Civil Procedure, 1908”.<br>
                                        The essence of this section is ‘title,’ i.e. the person who has better title is a person entitled to the possession. The title may be of ownership or possession. Thus, if ‘A’ enters into peaceful possession of land claiming his own although he might have no title, still he has the right to sue another who has ousted him forcibly from possession because he might have no legal title but at least has a possessory title.<br>
                                        It is a principle of law that a person, who has been in a long continuous possession of the immovable property, can protect the same by seeking an injunction against any person in the world other than the true owner. It is also a settled principle of law that owner of the property can get back his possession only by resorting to due process of law. It states that a suit for possession must be filed having regard to the provision of the Code of Civil Procedure.<br>
                                        Section 6 of the Specific Relief Act deals with the provision related to suit by person dispossessed of immovable property. It reads as,

                                    </p>
                                    <p>(1) If any person is dispossessed without his consent of immovable property otherwise than in due course of law, he or any person claiming through him, may by suit recover possession thereof.</p>
                                    <p>(2) No suit under this section shall be brought-
                                    <ul class="my-2 ml-5">
                                        <li>After the expiry of six months from the date of dispossession.</li>
                                        <li>Against the Government.</li>
                                    </ul>
                                    <p>(3) No appeal shall lie from any order or decree passed in any suit instituted under this section, nor shall any review of the decree under this section is allowed.</p>
                                    <p>(4) Nothing in this section shall bar any person from suit to establish his title to such property and to recover possession thereof.”</p>
                                    <p>Section 6 is only applicable if the plaintiff proves:</p>
                                    <ol class="my-2 ml-5">
                                        <li>That he is in juridical possession of the immovable property in dispute.</li>
                                        <li>2. That he had been dispossessed of without his consent and without due process of law.</li>
                                        <li>That dispossession took place within six months from the date of suit.</li>
                                    </ol>
                                    </p>
                                    <p>Section 5 and 6 both give alternative remedies and are mutually exclusive. Under section 5, a person dispossessed can get possession on the basis of title, whereas in section 6, a person dispossessed may recover possession by proving previous possession and further wrongful dispossession.</p>
                                    <p>Possession in the context of section 6 means legal possession which may exist with or without actual possession and with or without rightful origin. The plaintiff in a suit under section 6 need not establish title.</p>
                                    <p>Long-standing peaceful possession of is enough to prove actual possession. In K.K. Verma v Union of India(1) it was held that after the expiry of the tenancy agreement, the tenant continues to hold juridical possession and cannot be dispossessed unless the owner gets a decree of eviction against him.</p>
                                    <p>The objects of section 6 are as follows.</p>
                                    <ul class="my-2 ml-5">
                                        <li>To discourage people from taking the law into their hands (however good their title may be).</li>
                                        <li>To provide a cheap and useful remedy to a person dispossessed of immovable property in due course of law.</li>
                                    </ul>
                                    <p>Further, it should be noted that where the grant of possession is purely gratuitous, the owner has the right to reclaim possession even without the knowledge of a person in possession. The only prayer in a suit under section 6 can be a prayer for recovery of possession. Consequently, a claim for damages cannot be combined with that for possession. Section 14 of the Limitation Act, 1963 applies to the proceedings against dispossession.</p>
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