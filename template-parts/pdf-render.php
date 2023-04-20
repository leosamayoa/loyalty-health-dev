<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <link href="https://fonts.cdnfonts.com/css/cabin-3" rel="stylesheet">
        <style>
            @import url(https://fonts.cdnfonts.com/css/cabin-3);
            @import url(https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&family=Josefin+Sans:wght@400;500;600;700&display=swap);

            html {
                font-family: Cabin, Helvetica, sans-serif
            }

            .container{
                width:700px;
                margin: 0 auto;
            }

            .header{
                background-color: #08a5f6;
                padding: 30px;
                text-align:center;
            }

            .header h1{
                font-family:Raleway,Helvetica,sans-serif;
                /* -webkit-text-stroke:5px #fff;
                -webkit-text-fill-color:transparent; */
                font-size: 48px;
                line-height: 50px;
                color: transparent;
                margin-bottom:20px;
            }

            .header h2{
                font-family:Cabin,Helvetica,sans-serif;
                font-size:30px;
                color:#fff;
            }

            #gform_fields_4 input[type="text"],
            #gform_fields_4 input[type="email"],
            .main-sec input[type="text"],
            .main-sec input[type="email"]{
                font-family:Cabin,Helvetica,sans-serif;
                border:2px solid #d1d9e4;
                /* margin-bottom:10px!important; */
                color:#a0aec3;
                font-size:15px;
                width:100%;
            }

            label{
                font-family:Cabin,Helvetica,sans-serif;
                position: relative;
                left: 20px;
                top: 10px;
                background: #fff !important;
                padding: 0 10px !important;
                font-weight:700;
            }

            *, body {
                margin: 0;
                padding: 0
            }

            input[type="text"],
            input[type="email"]{
                padding-top:25px;
                padding-bottom:25px;
                padding-left:20px;
                border: 2px solid #D1D9E4;
            }

            .m-auto{
                margin:auto;
            }
            
            .table{
                display:table;
            }
            
            .table-row{
                display:table-row;
            }

            .table-cell{
                display:table-cell;
                width:308px;
                padding-right:35px;
            }

            .table-cell-full-width{
                display:table-cell;
                width:650px;
                padding-right:35px;
            }

            h2 {
                font-size: 24px;
                display: flex;
                font-family: Cabin, Helvetica, sans-serif;
                text-transform: uppercase;
                justify-content: center;
                margin-bottom: 20px
            }

            .green-bg{
                height:60px;
                background:#e8fff2;
                margin-bottom:10px;
                padding:20px;
                font-family:Cabin,Helvetica,sans-serif;
            }

            .green{
                color:#00b050;
            }

            .blue-bg{
                height:60px;
                background:#e4f6ff;
                margin-bottom:10px;
                padding:20px;
                font-family:Cabin,Helvetica,sans-serif;
            }

            .blue{
                color:#08a5f6;
            }

            .blue-bg span,
            .green-bg span{
                /* margin-right:20px; */
            }

            h3 {
                font-family: Cabin, Helvetica, sans-serif;
                line-height:50px;
            }
            
        </style>
    </head>
    <body>
        <div class="header">
            <div class="container">
                <h1>Quick Start Form</h1>
                <h2>Geofencing & all services set-up within 72 hours!</h2>
            </div>
        </div>
        <div class="container">
            <div id="gform_fields_4">
                <h2>Your Company Business Information</h2>
                <div id="top-form">
                    <div class="table">
                        <div class="table-row">
                            <div class="table-cell-full-width">
                                <label>Company Name</label>
                                <input type="text" value="My Company" placeholder="Enter Your company name" aria-invalid="false">
                                <div>
                                    <label>Full Contact Name</label>
                                    <input type="text" value="" class="large" placeholder="Enter Your Full Name" aria-invalid="false">
                                </div>
                                <div>
                                    <label>Business Address</label>
                                    <input type="text" aria-invalid="false">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="table">
                        <div class="table-row">
                            <div class="table-cell">
                                <label>City</label>
                                <input id="input_4_5" type="text" value="">
                            </div>
                            <div class="table-cell">
                                <label>State</label>
                                <input type="text" value="">
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell">
                                <label>Phone Number</label>
                                <input type="text" value="">
                            </div>
                            <div class="table-cell">
                                <label>Zip</label>
                                <input type="text" value="">
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell">
                                <label>Website</label>
                                <input type="text" value="">
                            </div>
                            <div class="table-cell">
                                <label>Email Address</label>
                                <input type="text" value="">
                            </div>
                        </div>
                    </div><!-- .table -->
                </div><!-- #top-form -->

                <div style="page-break-before:always"></div>

                <h2>Benefits</h2>
                <div class="table">
                    <div class="table-row">
                        <div class="table-cell">
                            <div class="green-bg"><span class="green">24/7/365</span> Monitoring and performance testing of your account</div>
                            <div class="blue-bg"><span class="blue">DEDICATED</span> Client Success Manager for you and your business</div>
                            <div class="green-bg"><span class="green">GOOGLE</span> Local Service Ads (LSA) Mgmt (Ad spend separate)</div>
                            <div class="blue-bg"><span class="blue">GOOGLE</span> Business Profile GBP/GMB plus Maps Management</div>
                            <div class="green-bg"><span class="green">CUSTOM</span> QR Codes that generate business like magic</div>
                            <div class="blue-bg"><span class="blue">AUTOMATED</span> Unlimited 5-Star Review Software</div>
                            <div class="green-bg"><span class="green">AUTOMATED</span> Review responses to all your customers reviews</div>
                            <div class="blue-bg"><span class="blue">AUTOMATED</span> Unlimited Friends & Family Referrals Software</div>
                        </div>
                        <div class="table-cell">
                            <div class="green-bg"><span class="green">AUTOMATED</span> 50+ Online directories synchronized to your GBP</div>
                            <div class="blue-bg"><span class="blue">AUTOMATED</span> Voice search set-up (Siri, Alexa, Bixby, Cortana, etc.)</div>
                            <div class="green-bg"><span class="green">AUTOMATED</span> Website analysis and customer experience monitoring</div>
                            <div class="blue-bg"><span class="blue">AUTOMATED</span> Analysis of your TOP-3 competitors in your area</div>
                            <div class="green-bg"><span class="green">AUTOMATED</span> Invisible Geofencing to dominate your competition</div>
                            <div class="blue-bg"><span class="blue">INCLUDES</span> 40,000 Custom Geofencing display ads promoting you</div>
                            <div class="green-bg"><span class="green">ZERO FEE</span> Credit/Debit card processing + FREE card terminal</div>
                            <div class="blue-bg"><span class="blue">AUTOMATED</span> Unlimited Upsell Surveys/feedback from your customers</div>
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell m-auto">
                            <div class="green-bg"><span class="green">PLUS</span> So much more ALL included!</div>  
                        </div>
                    </div>
                </div>

                <div style="page-break-before:always"></div>

                <div id="managed-services-section">
                    <div>
                        <h3 style="margin-bottom:0!important;color:#08a5f6!important;text-align:center;font-weight:600;font-size:1.5"><span style="color:#000;font-size:2rem"><span style="color:#00b050">UNLIMITED&nbsp;&nbsp;</span>Exclusive New Customers</span></h3>
                        <h3 style="margin-bottom:0!important;text-align:center;font-weight:600;font-size:1.5rem"> <span style="color:#00b050">UNLIMITED&nbsp;&nbsp;</span>5-Star Reviews +<span style="color:#00b050">UNLIMITED&nbsp;&nbsp;</span>Friends & Family Referrals</h3>
                        <h3 style="text-align:center;font-weight:600;font-size:1.5rem"><span style="color:#00b050;text-align:center;font-weight:600;font-size:1.5rem">ZERO  &nbsp;&nbsp;</span>Fee Customer Credit Card Processing</h3>
                        <h3 style="line-height:30px;font-weight:600;font-size:1.5rem;color:#08a5f6!important;text-align:center"> OUR 24/7 FULLY MANAGED SERVICES… ONLY $1997/PER MONTH</h3>
                        <h3 style="text-align:center;font-weight:600;font-size:1.5rem">100% Risk Free / Month to Month / Cancel Anytime</h3>
                    </div>

                    <div style="page-break-before:always"></div>

                    <div style="margin-top:20px">
                        <h2>Cardholder Information</h2>
                        <p>Cardholder authorizes Loyalty Health for charges to credit/debit card for agreed upon purchases and services</p>
                    </div>

                    <div class="table">
                        <div class="table-row">
                            <div class="table-cell">
                                <div>
                                    <label>Cardholder Name</label>
                                    <input name="input_13" id="input_4_13" type="text" value="Card Holder" class="large" placeholder="Enter Cardholder Name" aria-required="true" aria-invalid="false">
                                </div>
                                <div>
                                    <label class="" for="input_4_15">Card Number</label>
                                    <input name="input_15" id="input_4_15" type="text" value="" class="large" placeholder="Card Number" aria-required="true" aria-invalid="false">
                                </div>
                                <div>
                                    <fieldset style="margin-top:20px;border:0">
                                        <legend>Electronic Signature</legend>
                                        <div style="margin-top:20px">
                                            <div>
                                                <input type="checkbox" value="By clicking this box, I accept this as my electronic signature" id="choice_4_21_1">
                                                <label for="choice_4_21_1" id="label_4_21_1">By clicking this box, I accept this as my electronic signature</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="two-sec table-cell">
                                <div style="margin-top:20px" id="field_4_25">
                                    <label>Expiration Date</label>
                                    <input name="input_25" id="input_4_25" type="text" value="" class="large" aria-required="true" aria-invalid="false">
                                </div>
                                <div>
                                    <label>CVV Security Code</label>
                                    <input name="input_16" id="input_4_16" type="text" value="" class="large" placeholder="CVV Security Code" aria-required="true" aria-invalid="false">
                                </div>
                                <div>
                                    <label>Your Electronic Signature</label>
                                    <input name="input_22" id="input_4_22" type="text" value="" class="large" placeholder="Your Electronic Signature" aria-required="true" aria-invalid="false">
                                </div>
                            </div>
                        </div>
                    </div><!-- .table -->
                </div><!-- #managed-services-section -->
            </div><!-- #gform_fields_4 -->
        </div><!-- .container -->
    </body>
</html>