<?php

use yii\helpers\Url;
use yii\helpers\Html;

/* @var $this yii\web\View */
?>

<div class="search-row-wrapper">
    <div class="container ">
        <form action="#" method="GET">
            <div class="row">


                <div class="col-md-3">
                    <input class="form-control keyword" type="text" placeholder="e.g. Mobile Sale">
                </div>
                <div class="col-md-3">
                    <select class="form-control selecter" name="category" id="search-category">
                        <option selected="selected" value="">All Categories</option>
                        <option value="Vehicles" style="background-color:#E9E9E9;font-weight:bold;"
                                disabled="disabled">- Vehicles -
                        </option>
                        <option value="Cars">Cars</option>
                        <option value="Commercial vehicles">Commercial vehicles</option>
                        <option value="Motorcycles">Motorcycles</option>
                        <option value="Motorcycle Equipment">Car &amp; Motorcycle Equipment</option>
                        <option value="Boats">Boats</option>
                        <option value="Vehicles">Other Vehicles</option>
                        <option value="House" style="background-color:#E9E9E9;font-weight:bold;"
                                disabled="disabled">- House and Children -
                        </option>
                        <option value="Appliances">Appliances</option>
                        <option value="Inside">Inside</option>
                        <option value="Games">Games and Clothing</option>
                        <option value="Garden">Garden</option>
                        <option value="Multimedia" style="background-color:#E9E9E9;font-weight:bold;"
                                disabled="disabled">- Multimedia -
                        </option>
                        <option value="Telephony">Telephony</option>
                        <option value="Image">Image and sound</option>
                        <option value="Computers">Computers and Accessories</option>
                        <option value="Video">Video games and consoles</option>
                        <option value="Real" style="background-color:#E9E9E9;font-weight:bold;"
                                disabled="disabled">- Real Estate -
                        </option>
                        <option value="Apartment">Apartment</option>
                        <option value="Home">Home</option>
                        <option value="Vacation">Vacation Rentals</option>
                        <option value="Commercial">Commercial offices and local</option>
                        <option value="Grounds">Grounds</option>
                        <option value="Houseshares">Houseshares</option>
                        <option value="Other real estate">Other real estate</option>
                        <option value="Services" style="background-color:#E9E9E9;font-weight:bold;"
                                disabled="disabled">- Services -
                        </option>
                        <option value="Jobs">Jobs</option>
                        <option value="Job application">Job application</option>
                        <option value="Services">Services</option>
                        <option value="Price">Price</option>
                        <option value="Business">Business and goodwill</option>
                        <option value="Professional">Professional equipment</option>
                        <option value="dropoff" style="background-color:#E9E9E9;font-weight:bold;"
                                disabled="disabled">- Extra -
                        </option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-control selecter" name="location" id="id-location">
                        <option selected="selected" value="">All Locations</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">Hà Nội</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                        <option value="Other-Locations">Other Locations</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-block btn-primary  "><i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /.search-row -->
<div class="main-container">
    <div class="container">
        <div class="row">
            <!-- this (.mobile-filter-sidebar) part will be position fixed in mobile version -->
            <div class="col-md-3 page-sidebar mobile-filter-sidebar">
                <aside>
                    <div class="inner-box">
                        <div class="categories-list  list-filter">
                            <h5 class="list-title"><strong><a href="<?php echo Url::to(['/ads/index']) ?>"><i
                                                class="fa fa-angle-left"></i>
                                        All Categories</a></strong></h5>
                            <ul class=" list-unstyled">
                                <li><a href="#"><span class="title"><strong>Electronics</strong></span><span
                                                class="count">&nbsp;86626</span></a>
                                    <ul class=" list-unstyled long-list">
                                        <li><a href="#">Air Condition <span class="count">(143)</span></a></li>
                                        <li><a href="#">Cameras <span class="count">(182)</span></a></li>
                                        <li><a href="#">Computers &amp; Telecoms <span
                                                        class="count">(532)</span></a></li>
                                        <li><a href="#">Music &amp; Audio<span class="count"> (347)</span></a></li>
                                        <li><a href="#">Office Electronics <span class="count">(168)</span></a></li>
                                        <li><a href="#">Home Appliances <span class="count">(342)</span></a></li>
                                        <li><a href="#">IPS, UPS, Batteries &amp; Generators <span
                                                        class="count">(2)</span></a></li>
                                        <li><a href="#"> Security &amp; Surveillance Systems <span
                                                        class="count">(30) </span></a>
                                        </li>
                                        <li><a href="#">Satellite &amp; Equipments <span
                                                        class="count">(27)</span></a></li>
                                        <li><a href="#">TVs &amp; Players <span class="count">(6716)</span></a></li>
                                        <li><a href="#">GPS Devices <span class="count">(123)</span></a></li>
                                        <li><a href="#">Video Games & Consoles <span class="count"> (321)</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.categories-list-->

                        <div class="locations-list  list-filter">
                            <h5 class="list-title"><strong><a href="#">Location</a></strong></h5>
                            <ul class="browse-list list-unstyled">
                                <li><a href="#"><strong>Hà Nội</strong> </a>
                                    <ul class="long-list">
                                        <?php echo $this->render('partical/_left_location', []) ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.locations-list-->

                        <div class="locations-list  list-filter">
                            <h5 class="list-title"><strong><a href="#">Price range</a></strong></h5>

                            <form role="form" class="form-inline ">
                                <div class="form-group col-lg-4 col-md-12 no-padding">
                                    <input type="text" placeholder="$ 2000 " id="minPrice" class="form-control">
                                </div>
                                <div class="form-group col-lg-1 col-md-12 no-padding text-center hidden-md"> -</div>
                                <div class="form-group col-lg-4 col-md-12 no-padding">
                                    <input type="text" placeholder="$ 3000 " id="maxPrice" class="form-control">
                                </div>
                                <div class="form-group col-lg-3 col-md-12 no-padding">
                                    <button class="btn btn-default pull-right btn-block-md" type="submit">GO
                                    </button>
                                </div>
                            </form>
                            <div style="clear:both"></div>
                        </div>
                        <!--/.list-filter-->
                        <div class="locations-list  list-filter">
                            <h5 class="list-title"><strong><a href="#">Seller</a></strong></h5>
                            <ul class="browse-list list-unstyled long-list">
                                <li><a href=""><strong>All Ads</strong> <span
                                                class="count">228,705</span></a></li>
                                <li><a href="">Business <span
                                                class="count">28,705</span></a></li>
                                <li><a href="">Personal <span
                                                class="count">18,705</span></a></li>
                            </ul>
                        </div>
                        <!--/.list-filter-->
                        <div class="locations-list  list-filter">
                            <h5 class="list-title"><strong><a href="#">Condition</a></strong></h5>
                            <ul class="browse-list list-unstyled long-list">
                                <li><a href="">New <span class="count">228,705</span></a>
                                </li>
                                <li><a href="">Used <span class="count">28,705</span></a>
                                </li>
                                <li><a href="">None </a></li>
                            </ul>
                        </div>
                        <!--/.list-filter-->
                        <div style="clear:both"></div>
                    </div>

                    <!--/.categories-list-->
                </aside>
            </div>
            <!--/.page-side-bar-->
            <div class="col-md-9 page-content col-thin-left">

                <div class="category-list">

                    <div class="tab-box ">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs add-tabs" role="tablist">
                            <li class="active nav-item"><a href="#allAds" role="tab" data-toggle="tab" class="nav-link">All
                                    Ads <span class="badge badge-pill badge-secondary">228,705</span></a>
                            </li>
                        </ul>
                        <div class="tab-filter">
                            <select title="sort by" class="selectpicker select-sort-by" data-style="btn-select"
                                    data-width="auto">
                                <option>Sort by</option>
                                <option>Price: Low to High</option>
                                <option>Price: High to Low</option>
                            </select>
                        </div>

                    </div>
                    <!--/.tab-box-->
                    <div class="listing-filter">
                        <div class="pull-left col-xs-6">
                            <div class="breadcrumb-list"><a href="#" class="current"> <span>All ads</span></a> in
                                <!-- cityName will replace with selected location/area from location modal -->
                                <span class="cityName"> Hà Nội </span> <a href="#selectRegion" id="dropdownMenu1"
                                                                          data-toggle="modal"> <span
                                            class="caret"></span> </a></div>
                        </div>
                        <div class="pull-right col-xs-6 text-right listing-view-action"><span
                                    class="list-view active"><i class="  icon-th"></i></span> <span
                                    class="compact-view"><i class=" icon-th-list  "></i></span> <span
                                    class="grid-view "><i class=" icon-th-large "></i></span></div>
                        <div style="clear:both"></div>
                    </div>
                    <!--/.listing-filter-->

                    <!-- Mobile Filter bar-->
                    <div class="mobile-filter-bar col-xl-12  ">
                        <ul class="list-unstyled list-inline no-margin no-padding">
                            <li class="filter-toggle">
                                <a class="">
                                    <i class="  icon-th-list"></i>
                                    Filters
                                </a>
                            </li>
                            <li>


                                <div class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle"> Short

                                        by </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item"><a href="" rel="nofollow">Relevance</a>
                                        </li>
                                        <li class="dropdown-item"><a href="" rel="nofollow">Date</a>
                                        </li>
                                        <li class="dropdown-item"><a href="" rel="nofollow">Company</a>
                                        </li>
                                    </ul>
                                </div>

                            </li>
                        </ul>
                    </div>
                    <div class="menu-overly-mask"></div>
                    <!-- Mobile Filter bar End-->

                    <div class="adds-wrapper">
                        <div class="item-list">
                            <div class="row">
                                <div class="col-md-2 no-padding photobox">
                                    <div class="add-image"><span class="photo-count"><i
                                                    class="fa fa-camera"></i> 2 </span> <a href="ads-details.html"><img
                                                    class="thumbnail no-margin" src="images/item/tp/Image00015.jpg"
                                                    alt="img"></a>
                                    </div>
                                </div>
                                <!--/.photobox-->
                                <div class="col-md-7 add-desc-box">
                                    <div class="ads-details">
                                        <h5 class="add-title"><a href="ads-details.html">

                                                Brand New Samsung Phones </a></h5>
                                        <span class="info-row"> <span class="add-type business-ads tooltipHere"
                                                                      data-toggle="tooltip" data-placement="right"
                                                                      title="Business Ads">B </span>
                                    <span
                                            class="date"><i class=" icon-clock"> </i> Today 1:21 pm</span>- <span
                                                    class="category">Electronics </span>-
                                        <span
                                                class="item-location"><i class="fa fa-map-marker"></i> Hà Nội</span>
                                            </span>
                                    </div>
                                </div>
                                <!--/.add-desc-box-->
                                <div class="col-md-3 text-right  price-box">
                                    <h2 class="item-price"> $ 320 </h2>
                                    <a class="btn btn-danger  btn-sm make-favorite"> <i class="fa fa-certificate"></i>

                                        <span>Top Ads</span> </a>
                                    <a
                                            class="btn btn-secondary  btn-sm make-favorite"> <i class="fa fa-heart"></i>
                                        <span>Save</span>
                                    </a>
                                </div>
                                <!--/.add-desc-box-->
                            </div>

                        </div>
                        <!--/.item-list-->

                        <div class="item-list">
                            <div class="cornerRibbons featuredAds">
                                <a href="#"> Featured Ads</a>
                            </div>

                            <div class="row">


                                <div class="col-md-2 no-padding photobox">
                                    <div class="add-image"><span class="photo-count"><i
                                                    class="fa fa-camera"></i> 2 </span> <a href="ads-details.html"><img
                                                    class="thumbnail no-margin" src="images/item/tp/Image00008.jpg"
                                                    alt="img"></a></div>
                                </div>
                                <!--/.photobox-->
                                <div class="col-sm-7 add-desc-box">
                                    <div class="ads-details">
                                        <h5 class="add-title"><a href="ads-details.html">
                                                Sony Xperia dual sim 100% brand new </a></h5>
                                        <span class="info-row"> <span class="add-type business-ads tooltipHere"
                                                                      data-toggle="tooltip" data-placement="right"
                                                                      title="Business Ads">B </span> <span class="date"><i
                                                        class=" icon-clock"> </i> Today 1:21 pm </span> - <span
                                                    class="category">Electronics </span>- <span class="item-location"><i
                                                        class="fa fa-map-marker"></i> Hà Nội </span> </span></div>
                                </div>
                                <!--/.add-desc-box-->
                                <div class="col-md-3 text-right  price-box">
                                    <h2 class="item-price"> $ 250 </h2>
                                    <a class="btn btn-danger  btn-sm make-favorite"> <i class="fa fa-certificate"></i>
                                        <span>Featured Ads</span> </a> <a class="btn btn-default  btn-sm make-favorite">
                                        <i class="fa fa-heart"></i> <span>Save</span> </a></div>
                                <!--/.add-desc-box-->
                            </div>
                        </div>

                        <div class="item-list">
                            <div class="cornerRibbons urgentAds">
                                <a href="#"> Urgent</a>
                            </div>
                            <div class="row">
                                <div class="col-md-2 no-padding photobox">
                                    <div class="add-image"><span class="photo-count"><i
                                                    class="fa fa-camera"></i> 2 </span> <a href="ads-details.html"><img
                                                    class="thumbnail no-margin"
                                                    src="images/item/FreeGreatPicture.com-46404-google-drops-nexus-4-by-100-offers-15-day-price-protection-refund.jpg"
                                                    alt="img"></a></div>
                                </div>
                                <!--/.photobox-->
                                <div class="col-sm-7 add-desc-box">
                                    <div class="ads-details">
                                        <h5 class="add-title"><a href="ads-details.html"> Google drops Nexus 4 </a></h5>
                                        <span class="info-row"> <span class="add-type business-ads tooltipHere"
                                                                      data-toggle="tooltip" data-placement="right"
                                                                      title="Business Ads">B </span> <span class="date"><i
                                                        class=" icon-clock"> </i> Today 1:21 pm </span> - <span
                                                    class="category">Electronics </span>- <span class="item-location"><i
                                                        class="fa fa-map-marker"></i> Hà Nội </span> </span></div>
                                </div>
                                <!--/.add-desc-box-->
                                <div class="col-md-3 text-right  price-box">
                                    <h2 class="item-price"> $ 150 </h2>
                                    <a class="btn btn-danger  btn-sm make-favorite"> <i class="fa fa-certificate"></i>
                                        <span>Urgent</span> </a>
                                    <a class="btn btn-default  btn-sm make-favorite"> <i class="fa fa-heart"></i> <span>Save</span>
                                    </a></div>
                                <!--/.add-desc-box-->
                            </div>
                        </div>
                        <!--/.item-list-->

                        <!--/.item-list-->
                        <div class="item-list">
                            <div class="row">
                                <div class="col-md-2 no-padding photobox">
                                    <div class="add-image"><span class="photo-count"><i
                                                    class="fa fa-camera"></i> 2 </span> <a href="ads-details.html"><img
                                                    class="thumbnail no-margin" src="images/item/tp/Image00014.jpg"
                                                    alt="img"></a></div>
                                </div>
                                <!--/.photobox-->
                                <div class="col-sm-7 add-desc-box">
                                    <div class="ads-details">
                                        <h5 class="add-title"><a href="ads-details.html"> Samsung Galaxy S Dous (Brand
                                                New/ Intact Box) With 1year Warranty </a></h5>
                                        <span class="info-row"> <span class="add-type business-ads tooltipHere"
                                                                      data-toggle="tooltip" data-placement="right"
                                                                      title="Business Ads">B </span> <span class="date"><i
                                                        class=" icon-clock"> </i> Today 1:21 pm </span> - <span
                                                    class="category">Electronics </span>- <span class="item-location"><i
                                                        class="fa fa-map-marker"></i> Hà Nội </span> </span></div>
                                </div>
                                <!--/.add-desc-box-->
                                <div class="col-md-3 text-right  price-box">
                                    <h2 class="item-price"> $ 230</h2>
                                    <a class="btn btn-default  btn-sm make-favorite"> <i class="fa fa-heart"></i> <span>Save</span>
                                    </a></div>
                                <!--/.add-desc-box-->
                            </div>
                        </div>
                        <!--/.item-list-->
                        <div class="item-list">
                            <div class="row">
                                <div class="col-md-2 no-padding photobox">
                                    <div class="add-image"><span class="photo-count"><i
                                                    class="fa fa-camera"></i> 2 </span> <a href="ads-details.html"><img
                                                    class="thumbnail no-margin" src="images/item/tp/Image00003.jpg"
                                                    alt="img"></a></div>
                                </div>
                                <!--/.photobox-->
                                <div class="col-sm-7 add-desc-box">
                                    <div class="ads-details">
                                        <h5 class="add-title"><a href="ads-details.html"> MSI GE70 Apache Pro-061 17.3"
                                                Core i5-4200H/8GB DDR3/NV GTX860M Gaming Laptop </a></h5>
                                        <span class="info-row"> <span class="add-type business-ads tooltipHere"
                                                                      data-toggle="tooltip" data-placement="right"
                                                                      title="Business Ads">B </span> <span class="date"><i
                                                        class=" icon-clock"> </i> Today 1:21 pm </span> - <span
                                                    class="category">Electronics </span>- <span class="item-location"><i
                                                        class="fa fa-map-marker"></i> Hà Nội </span> </span></div>
                                </div>
                                <!--/.add-desc-box-->
                                <div class="col-md-3 text-right  price-box">
                                    <h2 class="item-price"> $ 400 </h2>
                                    <a class="btn btn-default  btn-sm make-favorite"> <i class="fa fa-heart"></i> <span>Save</span>
                                    </a></div>
                                <!--/.add-desc-box-->
                            </div>
                        </div>
                        <!--/.item-list-->
                        <div class="item-list">
                            <div class="row">
                                <div class="col-md-2 no-padding photobox">
                                    <div class="add-image"><span class="photo-count"><i
                                                    class="fa fa-camera"></i> 2 </span> <a href="ads-details.html"><img
                                                    class="thumbnail no-margin" src="images/item/tp/Image00022.jpg"
                                                    alt="img"></a></div>
                                </div>
                                <!--/.photobox-->
                                <div class="col-sm-7 add-desc-box">
                                    <div class="ads-details">
                                        <h5 class="add-title"><a href="ads-details.html"> Apple iPod touch 16 GB 3rd
                                                Generation </a></h5>
                                        <span class="info-row"> <span class="add-type business-ads tooltipHere"
                                                                      data-toggle="tooltip" data-placement="right"
                                                                      title="Business Ads">B </span> <span class="date"><i
                                                        class=" icon-clock"> </i> Today 1:21 pm </span> - <span
                                                    class="category">Electronics </span>- <span class="item-location"><i
                                                        class="fa fa-map-marker"></i> Hà Nội </span> </span></div>
                                </div>
                                <!--/.add-desc-box-->
                                <div class="col-md-3 text-right  price-box">
                                    <h2 class="item-price"> $ 150 </h2>
                                    <a class="btn btn-default  btn-sm make-favorite"> <i class="fa fa-heart"></i> <span>Save</span>
                                    </a></div>
                                <!--/.add-desc-box-->
                            </div>
                        </div>
                        <!--/.item-list-->
                        <div class="item-list">
                            <div class="row">
                                <div class="col-md-2 no-padding photobox">
                                    <div class="add-image"><span class="photo-count"><i
                                                    class="fa fa-camera"></i> 2 </span> <a href="ads-details.html"><img
                                                    class="thumbnail no-margin"
                                                    src="images/item/FreeGreatPicture.com-46405-google-drops-price-of-nexus-4-smartphone.jpg"
                                                    alt="img"></a></div>
                                </div>
                                <!--/.photobox-->
                                <div class="col-sm-7 add-desc-box">
                                    <div class="ads-details">
                                        <h5 class="add-title"><a href="ads-details.html"> Google drops Nexus 4 by $100,
                                                offers 15 day price protection refund </a></h5>
                                        <span class="info-row"> <span class="add-type business-ads tooltipHere"
                                                                      data-toggle="tooltip" data-placement="right"
                                                                      title="Business Ads">B </span> <span class="date"><i
                                                        class=" icon-clock"> </i> Today 1:21 pm </span> - <span
                                                    class="category">Electronics </span>- <span class="item-location"><i
                                                        class="fa fa-map-marker"></i> Hà Nội </span> </span></div>
                                </div>
                                <!--/.add-desc-box-->
                                <div class="col-md-3 text-right  price-box">
                                    <h2 class="item-price"> $ 150 </h2>
                                    <a class="btn btn-default  btn-sm make-favorite"> <i class="fa fa-heart"></i> <span>Save</span>
                                    </a></div>
                                <!--/.add-desc-box-->
                            </div>
                        </div>
                        <!--/.item-list-->


                    </div>
                    <!--/.adds-wrapper-->


                    <div class="tab-box  save-search-bar text-center"><a href=""> <i class=" icon-star-empty"></i>
                            Save Search </a></div>
                </div>

                <div class="pagination-bar text-center">
                    <nav aria-label="Page navigation " class="d-inline-b">
                        <ul class="pagination">

                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!--/.pagination-bar -->

                <div class="post-promo text-center">
                    <h2> Do you get anything for sell ? </h2>
                    <h5>Sell your products online FOR FREE. It's easier than you think !</h5>
                    <a href="post-ads.html" class="btn btn-lg btn-border btn-post btn-danger">Post a Free Ad </a>
                </div>
                <!--/.post-promo-->

            </div>
            <!--/.page-content-->


        </div>
    </div>
</div>
<!-- /.main-container -->

