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
                                <h2 class="title">Cheque Bounce</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html">Home</a>
                                </span>
                                <span>Cheque Bounce</span>
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
                                    <h3>Cheque Bounce</h3>
                                    <div class="row mt-15 mb-30 px-4">

                                        <p>A Cheque bounce is an offence punishable with a fine which can extend to twice
                                            the amount of the cheque or imprisonment for a term not more than 2 years or
                                            both.</p>
                                        <h5>Consequences </h5>
                                        <p>A cheque bounce is an offence under Section 138 of the Negotiable Instruments
                                            Act, 1881 (“Act”) punishable with a fine which can extend to twice the amount of
                                            the cheque or imprisonment for a term not more than two years or both. When the
                                            payee presents a cheque to the bank for payment, and the cheque is returned
                                            unpaid by the bank with a memo of insufficient funds, then the cheque is said to
                                            have bounced.</p>
                                        <p>A cheque bounce can occur due to several reasons, but if a cheque bounces due to
                                            insufficient funds in the drawer’s account, it amounts to an offence under the
                                            Act. The bank must reject the cheque presented for payment with a return memo
                                            stating the reason as insufficient funds. In such a case, the payee of the
                                            cheque can issue a cheque bounce notice to the drawer demanding to pay the
                                            cheque amount.</p>
                                        <h5>Circumstances of Cheque Bounce</h5>
                                        <p>The various situations that result in cheque bounce are as follows:</p>
                                        <div class="col-sm-12">
                                            <ul
                                                class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">Insufficient account balance: </div>
                                                    <p class='ml-4 category-list-p text-justify'>
                                                        If there is not enough balance in the drawer’s account to make the
                                                        payment of the cheque, the bank will reject and return the cheque to
                                                        the payee with a memo stating insufficient funds to pay the cheque
                                                        amount.
                                                    </p>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">Expired validity of cheque:</div>
                                                    <p class="ml-4 category-list-p text-justify">Once the drawer issues the
                                                        cheque, it must be presented for payment within three months. If it
                                                        is not presented to the bank within three months, the cheque
                                                        expires. If the expired cheque is presented to the bank, it bounces.
                                                    </p>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">Overwriting:</div>
                                                    <p class="ml-4 category-list-p text-justify">
                                                        If the signature of the drawer or cheque amount or any other
                                                        statement has been overwritten on the cheque, then the cheque
                                                        bounces for overwriting. </p>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">Damaged cheque:</div>
                                                    <p class="ml-4 category-list-p text-justify">
                                                        If a cheque is damaged or disfigured and the details are not visible
                                                        or have marks or stains, the cheque will bounce.</p>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">Signature mismatch:</div>
                                                    <p class="ml-4 category-list-p text-justify">
                                                        If the drawer’s signature is unclear or absent or does not match the
                                                        one in the bank’s data, then the cheque will bounce.</p>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">Mismatch of amounts or digits:</div>
                                                    <p class="ml-4 category-list-p text-justify">
                                                        If the cheque amount mentioned in words and figures does not match,
                                                        then the cheque will bounce.</p>
                                                </li>

                                            </ul>
                                        </div>
                                        <h5>Remedies Against Cheque Bounce</h5>
                                        <p>When the cheque bounces due to overwriting, mismatch of signature, mismatch of
                                            the figures and words of the cheque amount or damaged cheque, the payee can ask
                                            the drawer to submit another cheque rectifying the mistake. If the drawer does
                                            not agree to submit another cheque, then the payee can initiate civil action
                                            against the drawer to pay the cheque amount due to him and not for cheque
                                            bounce.</p>
                                        <h5>Cheque Bounce Notice under Section 138 of the Negotiable Instruments Act</h5>
                                        <p>A cheque bounce notice is issued under Section 138 of the Negotiable Instruments
                                            Act when a cheque bounces due to insufficient funds in the drawers’ account for
                                            making the payment of the cheque amount. If the cheque bounces for any other
                                            reason other than insufficient funds, the cheque bounce notice cannot be issued,
                                            and the payee can demand resubmission of the cheque. </p>
                                        <h6>Recovery of Money :</h6>
                                        <p> It is a method in legal system employed to recover the proceeds,
                                            Ex: Civil recovery to recover the value of the property.
                                        </p>
                                        <h5>Civil remedy</h5>
                                        <p>A Suit for recovery of money is a civil remedy and acts as an effective tool to
                                            recover money from the defaulter. The suit can be established under Order IV of
                                            the Code of Civil Procedure 1908 (CPC). It is generally like a summary suit
                                            (Order 37, Code of Civil Procedure) which offers expeditious disposal of the
                                            suit as here the defendant is not entitled to defend as a matter of right but
                                            only after applying for leave of the court, he can defend.</p>
                                        <h5>Jurisdiction </h5>
                                        According to Order IV of the Code of Civil Procedure 1908 (CPC), a suit can be filed
                                        at any place where the Defendant resides; or any place where the defendant carries
                                        on business or personally works for gain; or the cause of action wholly or partly
                                        arises.
                                        <br>
                                        Pecuniary jurisdiction is determined after considering the territorial jurisdiction.
                                        Based on the pecuniary value of the suit, it is decided whether the suit will be
                                        filed either in the district court or in the high court.
                                        <h5>Competent parties</h5>
                                        <p>Companies, partnership firms, proprietorship firms, and traders, etc., are
                                            competent to file a suit for recovery of their unpaid bills or Business
                                            outstanding amount or payment where there is any written contract/agreement
                                            between the parties.</p>
                                        <h5>Limitation period</h5>
                                        <p>not be taken into consideration. If the suit is instituted after the expiry of
                                            the limitation period, the grounds for claiming the exemption must be stated.
                                        </p>
                                        <h5>Documents required</h5>
                                        <p>Any document verifying the grant of money from a person to the defaulter is
                                            enough to prove the debt. To file a suit to recover a debt or request a
                                            liquidator of the funds paid to the defendant, with or without interest, arising
                                            from a written contract, or In the case of enactment, if the amount to be
                                            recovered is a fixed amount of money or like the debt other than the penalty, or
                                            on a guarantee, if the claim against the Director relates only to a debt or a
                                            liquidator’s request.</p>
                                        <h5>If the contract or agreement is not in writing, a simple civil action will be
                                            filed based on the truths and circumstances of the cases.</h5>
                                        <p>Bank account transactions, promissory notes, a contract or other payments so made
                                            serve as legal evidence of the lending of such money. Also, Any document,
                                            contract, message, telephonic conversation, mail, or post can serve as proper
                                            evidence in the Court of law to prove your debt.</p>
                                        <h5>Institution of suits under order IV of CPC</h5>
                                        <p>Every suit is instituted by way of a plaint. A plaint is the description of facts
                                            of the case and the exact amount being claimed along with interest if any. In
                                            every such plaint, the facts are to be proved by an affidavit.</p>
                                        <h5>A suit is instituted when the plaint is presented, and not when the suit is
                                            registered.</h5>
                                        <p>A plaint must contain the following particulars:</p>
                                        <ul style="list-style-type: disc;">
                                            <li>Name of the court</li>
                                            <li>Name, description, and place of residence of the plaintiff</li>
                                            <li>Name, description, and place of residence of the defendant</li>
                                            <li>Facts constituting the cause of action, when it arose</li>
                                            <li>Facts showing that the court has jurisdiction</li>
                                            <li>The relief the plaintiff claims; the plaintiff’s costs (Prayer clause)</li>
                                            <li>Any set-off or relinquishment of his claim by the plaintiff</li>
                                            <li>Value of the subject matter of the suit for the purposes of jurisdiction and
                                                court fees</li>
                                            <li>Signature and verification</li>
                                        </ul><br>
                                        <h6><i>Recovery of money is a specific case, and in such cases, the exact or
                                                approximate amount claimed must be mentioned in the suit.</i></h6>
                                        <h5>Proceedings after institution</h5>
                                        <div class="col-sm-12">
                                            <ul
                                                class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">Issuance of summons: </div>
                                                    <p class='ml-4 category-list-p text-justify'>
                                                        A summon is a document issued from the office of a court, calling
                                                        upon the person to whom it is directed to attend the court before a
                                                        judge or an officer of the court for a certain purpose. The Court
                                                        after examining the plaint and its admissibility shall issue a
                                                        summon which is required to be duly sent to the Defendant within 30
                                                        days of the institution of the suit.
                                                    </p>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">Written Statement: </div>
                                                    <p class="ml-4 category-list-p text-justify">A written statement is a
                                                        reply to the plaint filed by the plaintiff. The Defendant must at or
                                                        before the first hearing or not more than 30 days from the date of
                                                        summoning present a written statement of its defense. In the written
                                                        statement, the defendant is required to state new facts in its favor
                                                        or take legal actions against the plaintiff’s claim. </p>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">Framing of Issues, Trial and Arguments:
                                                    </div>
                                                    <p class="ml-4 category-list-p text-justify">
                                                        After framing of issues involved in the suit, the next stage is the
                                                        settlement of issues, and finally, the trial shall commence. After
                                                        consideration of all the evidence, the final arguments would be
                                                        heard and the suit will be decreed.</p>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">Damaged cheque:</div>
                                                    <p class="ml-4 category-list-p text-justify">
                                                        If a cheque is damaged or disfigured and the details are not visible
                                                        or have marks or stains, the cheque will bounce.</p>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">Signature mismatch:</div>
                                                    <p class="ml-4 category-list-p text-justify">
                                                        If the drawer’s signature is unclear or absent or does not match the
                                                        one in the bank’s data, then the cheque will bounce.</p>
                                                </li>
                                                <li><i class="fa fa-arrow-circle-right"></i>
                                                    <div class="ttm-list-li-content">Mismatch of amounts or digits:</div>
                                                    <p class="ml-4 category-list-p text-justify">
                                                        If the cheque amount mentioned in words and figures does not match,
                                                        then the cheque will bounce.</p>
                                                </li>

                                            </ul>
                                        </div>
                                        <h6><i>Once the suit is registered and summon is issued, the defendant has 10 days
                                                to make an appearance, failing which the court assumes the plaintiff’s
                                                allegations to be true and, accordingly, awards the plaintiff.</i></h6>

                                        <h5>Court fees</h5>
                                        <p>As per the schedule, the court fee is required to be paid by the Plaintiff. A
                                            suit shall not be accepted in case the same is not filed along with the court
                                            fee.</p>

                                        <h5>Execution of a Decree</h5>
                                        <p>The next step when a person obtains a decree from a court of law against another
                                            person, he is to get the decree satisfied. Execution proceedings are the
                                            processes by which a person moves to the court for the satisfaction of the
                                            decree. Execution is the enforcement of an order or giving effect to the
                                            judgment of the court. The execution comes to an end when the judgment-creditor
                                            or decree-holder gets cash or other thing granted to him by judgment, decree, or
                                            order.</p>


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
    @include('partials.footer')
@endsection
