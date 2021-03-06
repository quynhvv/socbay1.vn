<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 12/27/2017
 * Time: 9:24 AM
 */


use frontend\assets\AdsAsset;
use yii\helpers\Url;

/* @var $this yii\web\View */
?>
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
