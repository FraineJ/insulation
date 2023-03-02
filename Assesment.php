<?php

include('include/header.php')
?>
<!-- Start body content -->
<div class="main_wrap">
    <!-- Start hero Banner -->
        <section class="home_banner" style="background-image: url(&#39;https://koalainsulation.com/corp_images/assesment_banner.jpg&#39;);">
            <img class="d-none page_banner_mobile" src="./Assesment_files/assesment_banner.jpg">
            <div class="container hero_caption">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="banner_caption_content ">
                            <h1>See What Insulation Is Right For You</h1>
                            <form action="https://koalainsulation.com/find_zip_code" class="find_nearest_form mt-4" data-gtm-form-interact-id="0">
                                <input type="hidden" name="_token" value="WCgq94KpsSJu5p1pt1SRN9q93WRTABc82cQlMjuD">                                <input type="text" name="zip_code" maxlength="6" class="form-control" placeholder="Enter Your ZIP Code" data-gtm-form-interact-field-id="0">
                                <button type="button" class="custom_btn_orange fynl_btn">FIND YOUR NEAREST LOCATION</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End hero Banner -->


        <section class="assesment_content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="wizard">
                            <div class="wizard-inner d-none">
                                <div class="connecting-line"></div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="https://koalainsulation.com/see_what_insulation_is_right_for_you#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i>Step 1</i></a>
                                    </li>
                                    <li role="presentation" class="disabled">
                                        <a href="https://koalainsulation.com/see_what_insulation_is_right_for_you#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span> <i>Step 2</i></a>
                                    </li>
                                    <li role="presentation" class="disabled">
                                        <a href="https://koalainsulation.com/see_what_insulation_is_right_for_you#step3" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab">3</span> <i>Step 3</i></a>
                                    </li>
                                    <li role="presentation" class="disabled">
                                        <a href="https://koalainsulation.com/see_what_insulation_is_right_for_you#step4" data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab">4</span> <i>Step 4</i></a>
                                    </li>
                                    <li role="presentation" class="disabled">
                                        <a href="https://koalainsulation.com/see_what_insulation_is_right_for_you#step5" data-toggle="tab" aria-controls="step5" role="tab"><span class="round-tab">5</span> <i>Step 5</i></a>
                                    </li>
                                    <li role="presentation" class="disabled">
                                        <a href="https://koalainsulation.com/see_what_insulation_is_right_for_you#step6" data-toggle="tab" aria-controls="step6" role="tab"><span class="round-tab">6</span> <i>Step 6</i></a>
                                    </li>
                                    <li role="presentation" class="disabled">
                                        <a href="https://koalainsulation.com/see_what_insulation_is_right_for_you#step7" data-toggle="tab" aria-controls="step7" role="tab"><span class="round-tab">7</span> <i>Step 7</i></a>
                                    </li>
                                </ul>
                            </div>

                            <form role="form" action="https://koalainsulation.com/store_assessment" id="assessment_form" class="assesment_form" novalidate="novalidate">
                                <input type="hidden" name="_token" value="WCgq94KpsSJu5p1pt1SRN9q93WRTABc82cQlMjuD">                                <div class="tab-content">
                                    <div class="tab-pane active" role="tabpanel" id="step1">
                                        <h2 class="text-center mb-4">Let's find out which insulation is right for you.</h2>
                                        <ul class="text-center mt-3">
                                            <li>
                                                <button type="button" class="custom_btn_orange next-step">START ASSESSMENT</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="step2">
                                        <h2 class="text-center">What is your location's climate?</h2>
                                        <div class="row steps_option">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="custm_radio_chkbox">
                                                        <input type="radio" name="location_climate" value="Cold">
                                                        <span class="checkmark"></span> Cold
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="custm_radio_chkbox">
                                                        <input type="radio" name="location_climate" value="Very Seasonal">
                                                        <span class="checkmark"></span>Very Seasonal
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="custm_radio_chkbox">
                                                        <input type="radio" name="location_climate" value="Hot &amp; Dry">
                                                        <span class="checkmark"></span>Hot &amp; Dry
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="custm_radio_chkbox">
                                                        <input type="radio" name="location_climate" value="Hot &amp; Humid">
                                                        <span class="checkmark"></span>Hot &amp; Humid
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="text-center">
                                            <li><button type="button" class="custom_btn_orange next-step">Next Question</button></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="step3">
                                        <h2 class="text-center ">What's most important to you?</h2>
                                        <div class="row steps_option">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="custm_radio_chkbox">
                                                        <input type="radio" name="what_most_important_you" value="Noise Reduction">
                                                        <span class="checkmark"></span>Noise Reduction
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="custm_radio_chkbox">
                                                        <input type="radio" name="what_most_important_you" value="Energy Efficiency">
                                                        <span class="checkmark"></span>Energy Efficiency
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="custm_radio_chkbox">
                                                        <input type="radio" name="what_most_important_you" value="Fire Resistance">
                                                        <span class="checkmark"></span>Fire Resistance
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="text-center ">
                                            <li><button type="button" class="custom_btn_orange next-step">Next Question</button></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="step4">
                                        <h2 class="text-center ">Are you on a tight budget for your project?</h2>
                                        <div class="row steps_option">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="custm_radio_chkbox">
                                                        <input type="radio" name="tight_budget" value="Yes">
                                                        <span class="checkmark"></span>Yes
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="custm_radio_chkbox">
                                                        <input type="radio" name="tight_budget" value="Yes">
                                                        <span class="checkmark"></span>No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="text-center ">
                                            <li><button type="button" class="custom_btn_orange next-step">Next Question</button></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="step5">
                                        <h2 class="text-center ">Choose which is more important to you?</h2>
                                        <div class="row steps_option">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="custm_radio_chkbox">
                                                        <input type="radio" name="which_more_important_you" value="A Longer Lifespan">
                                                        <span class="checkmark"></span>A Longer Lifespan
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="custm_radio_chkbox">
                                                        <input type="radio" name="which_more_important_you" value="Using Recycled Materials">
                                                        <span class="checkmark"></span>Using Recycled Materials
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="text-center ">
                                            <li><button type="button" class="custom_btn_orange next-step">Next Question</button></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="step6">
                                        <h2 class="text-center ">Do you prefer insulation that adds to your home's structural integrity?</h2>
                                        <div class="row steps_option">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="custm_radio_chkbox">
                                                        <input type="radio" name="prefer_insulation_home" value="Yes">
                                                        <span class="checkmark"></span>Yes
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="custm_radio_chkbox">
                                                        <input type="radio" name="prefer_insulation_home" value="No">
                                                        <span class="checkmark"></span>No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="custm_radio_chkbox">
                                                        <input type="radio" name="prefer_insulation_home" value="No Preference">
                                                        <span class="checkmark"></span>No Preference
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="text-center">
                                            <li><button type="button" class="custom_btn_orange next-step">Show me the right insulation for my home</button></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="step7">
                                        <h2 class="text-center">Your recommended insulation is</h2>
                                        <div class="row align-items-center recommended_insulation_step_box">
                                            <div class="col-md-6">
                                                <div class="recommended_insulation_step_box_img">
                                                    <img src="https://koalainsulation.com/see_what_insulation_is_right_for_you">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="recommended_insulation_step_box_description">
                                                    <h3></h3>
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="text-center mt-3">
                                            <li><a href="https://koalainsulation.com/see_what_insulation_is_right_for_you" class="custom_btn_orange"></a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start Get A Free Quote -->
        <section class="get_quote blue_dark_bg pt-80 pb-80">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Get A Free Quote Today</h2>
                        <p class="lead_txt">Find your nearest Koala location to get a free quote:</p>
                        <form action="https://koalainsulation.com/find_zip_code" class="find_nearest_form mt-4">
                            <input type="hidden" name="_token" value="WCgq94KpsSJu5p1pt1SRN9q93WRTABc82cQlMjuD">                            <input type="text" name="zip_code" maxlength="6" class="form-control" placeholder="Enter Your ZIP Code">
                            <button type="button" class="custom_btn_orange fynl_btn">FIND YOUR NEAREST LOCATION</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Get A Free Quote -->



</div>
<!-- End body content -->
<?php

include('include/footer.php')

?>