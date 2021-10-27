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
                            <h2 class="title">Landlord & Tenant</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index.html">Home</a>
                            </span>
                            <span>Landlord & Tenant</span>
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
                                <h3>Landlord & Tenant</h3>
                                <div class="row mt-15 mb-30 px-4">
                                    <p>The terms land lord refers to a person who owns its property and allows another person to use it for a fee,and The person who is using the property is called tenant.</p>
                                    <h5>
                                        Rights of a Tenant
                                    </h5>
                                    <p>The Rent Control Act is established not only to protect the landlord and their property but also to protect the tenant. Under the Act, the few important rights that are given to the tenant are:</p>
                                    <h6>Right Against Unfair Eviction:</h6>
                                    <p>Under the Act, the landlord cannot evict the tenant without sufficient reason or cause. The rules of eviction are slightly different from state to state. In some states for the landlord to evict a tenant, he/she must approach the court and obtain a court order for the same. In some states, the tenant cannot be evicted if he/she is willing to accept any changes to the rent.</p>
                                    <h6>Fair Rent: </h6>
                                    <p>The landlord when letting out a house cannot charge extraordinary amounts in rent. The valuation of a property for rent is to be dependent on the value of the property. If the tenant feels that the amount of rent that is being asked is too much compared to the value of the property, he/she may approach the court to seek redressal. Usually, the rent is to be between 8% and 10% of the value of the property, including all costs incurred via construction and fixtures on the property.</p>
                                    <h6>Essential Services: </h6>
                                    <p>It is the basic right of the tenant to enjoy essential services such as water supply, electricity etc. A landlord doesn’t have the right to withdraw these services even if the tenant has failed to pay rent with regards to the same property or a different one.</p>
                                    <h5>Rights of a Landlord</h5>
                                    <p>The point of interest in a rental agreement is always the property, and the property has to be protected from unfair exploitation. The Rent Control Act entitles the landlord with the following rights:</p>
                                    <h6>Right to Evict</h6>
                                    <p>The right to evict a tenant is also different from state to state. Meaning in some states, the landlord may evict a tenant for personal and bona fide reasons such as wanting to live there themselves. Such a reason is not an acceptable cause for eviction in Karnataka. The landlord, in most cases, must approach the court to evict the tenant. It is also needed by law for the landlord to send sufficient notice to the tenant before approaching the court.</p>
                                    <h6>Charge Rent: </h6>
                                    <p>Being the owner of the property, the landlord has the right to charge rent upon the tenant. Since there is no actual legislation providing for an upper limit on the rent, the landlord may keep increasing the rent charges according to his wishes. Therefore, the prudent thing to do in such cases is to stipulate the amount of increase and the condition of increase in the rental agreement itself. Usually, the rent is increased periodically every year by 5% to 8%.</p>
                                    <h6>Temporary Repossession of Property: </h6>
                                    <p>The landlord may temporarily repossess the property to improve the condition of the property, alter the property in any way or make changes to the property. But such changes to the property must not bring any loss to the tenant or materially affect his tenancy.</p>
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