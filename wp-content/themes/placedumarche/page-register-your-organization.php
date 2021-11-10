<?php get_header(); ?>
<!-- todo reminders: 
3. INPUT VALIDATION - this needs attention
- make sure inputs are "required" in the right manner
- valid and invalid response highlighting
- when unsuccessfully submitted, highlight form fields that are invalid
- when successfully submitted, refresh the page, with cleared form and display a little notification pop up above at the top of the page
4. CAPTCHA FOR SPAM PROTECTION
- hCaptcha for spam protection
5. SUBMITTING PROCESS
- FIGURE OUT HOW TO SECURELY POST DATA
6. PREVENT SQL INJECTIONS

-->
<div class="container pt-5 pb-5">
    <h1 > <?php the_title(); ?></h1>
</div> <!-- add yellow writing icon after title! -->

<div class="container intro-blob">
    <p>Thank you for expressing interest in having your organization posted to our platform, where we hope to provide a home for the growing community of food security organizations in Montreal.<br>
    Please fill out the following information so that your organization can be showcased on our website. By being featured on our site, we hope to provide an easier way for volunteers
    to find your organization based on mutual fit and suitability.</p>
    <p>By filling out this form, you agree to disclose the following information with us and consent to the information being shared on our website. Please note that it is possible that
    you may be contacted by a representative to verify specific details before your organization is posted to our website.</p><br>
</div>



<div class="container reg-form">
    <hr><br>
    <form id="org-register" autocomplete="off" name="org-register" action="./register-org-data-handling.php" method="post">
        
        <!-- NAME -->
        <fieldset>
            <label for="reg-org-name"><p>Name of organization*</p></label>
            <input class="medium-field" type="text" id="reg-org-name" name="reg-org-name" spellcheck="false" size="40" required><br>
        </fieldset>
        
        
        <!-- ADDRESS todo: add google maps autocomplete of address field. need API key from jean. -->
        <fieldset>
            <ul>
                <li>
                    <label>
                        <p>Street address*</p>
                        <input class="short-field" type="text" id="ship-address" name="reg-ship-address" required autocomplete="off">
                    </label>
                </li>
                <li>
                    <label>
                        <p>Apartment, unit, suite, or floor #</p>
                        <input class="short-field" type="text" id="address2" name="reg-address2">
                    </label>
                </li>
                <li>
                    <label>
                        <p>City*</p>
                        <input class="short-field" type="text" id="locality" name="reg-locality" required>
                    </label>
                </li>
                <li>
                    <label>
                        <p>Postal code*</p>
                        <input class="short-field" type="text" id="postcode" name="reg-postcode" required>
                    </label>
                </li>
            </ul>
            
        </fieldset>
        
        <!-- SIZE -->
        <fieldset>
            <p>Organization size: How many staff and volunteers work at your organization on a regular basis?*<br></p>
            
            <ul>
                <li>
                    <input type="radio" id="reg-org-size-1" name="reg-org-size" value="20" required>
                    <label class="reg-form-options" for="reg-org-size-1">0-20</label>
                </li>
                
                <li>
                    <input type="radio" id="reg-org-size-2" name="reg-org-size" value="40">
                    <label class="reg-form-options" for="reg-org-size-2">21-40</label>
                </li>
                
                <li>
                    <input type="radio" id="reg-org-size-3" name="reg-org-size" value="60">
                    <label class="reg-form-options" for="reg-org-size-3">41-60</label>
                </li>
                
                <li>
                    <input type="radio" id="reg-org-size-4" name="reg-org-size" value="80">
                    <label class="reg-form-options" for="reg-org-size-4">61-80</label>
                </li>
                
                <li>
                    <input type="radio" id="reg-org-size-5" name="reg-org-size" value="100">
                    <label class="reg-form-options" for="reg-org-size-5">81-100</label>
                </li>
                
                <li>
                    <input type="radio" id="reg-org-size-6" name="reg-org-size" value="101">
                    <label class="reg-form-options" for="reg-org-size-6">101+</label>
                </li>
            </ul>
            
        </fieldset>
        
        <!-- SERVICE SIZE -->
        <fieldset>
            <p>Service size: How many people does your organization serve on a daily basis?*<br>
            <span style="font-family: Montserrat;">Service may include any type of community assistance, including, but not limited to, food services.</span></p>
            
            <ul>
                <li>
                    <input type="radio" id="reg-serv-size-1" name="reg-serv-size" value="25" required>
                    <label class="reg-form-options" for="reg-serv-size-1">0-25</label>
                </li>
                
                <li>
                    <input type="radio" id="reg-serv-size-2" name="reg-serv-size" value="50">
                    <label class="reg-form-options" for="reg-serv-size-2">26-50</label>
                </li>
                
                <li>
                    <input type="radio" id="reg-serv-size-3" name="reg-serv-size" value="75">
                    <label class="reg-form-options" for="reg-serv-size-3">51-75</label>
                </li>
                
                <li>
                    <input type="radio" id="reg-serv-size-4" name="reg-serv-size" value="100">
                    <label class="reg-form-options" for="reg-serv-size-4">76-100</label>
                </li>
                
                <li>
                    <input type="radio" id="reg-serv-size-5" name="reg-serv-size" value="125">
                    <label class="reg-form-options" for="reg-serv-size-5">101-125</label>
                </li>
                
                <li>
                    <input type="radio" id="reg-serv-size-6" name="reg-serv-size" value="150">
                    <label class="reg-form-options" for="reg-serv-size-6">126-150</label>
                </li>
                
                <li>
                    <input type="radio" id="reg-serv-size-7" name="reg-serv-size" value="175">
                    <label class="reg-form-options" for="reg-serv-size-7">151-175</label>
                </li>
                
                <li>
                    <input type="radio" id="reg-serv-size-8" name="reg-serv-size" value="200">
                    <label class="reg-form-options" for="reg-serv-size-8">176-200</label>
                </li>
                
                <li>
                    <input type="radio" id="reg-serv-size-9" name="reg-serv-size" value="201">
                    <label class="reg-form-options" for="reg-serv-size-9">201+</label>
                </li>
            </ul>
            
        </fieldset>
        
        
        <!-- TARGET DEMOGRAPHICS -->
        <fieldset>
            <p>Target demographic: What group(s) of people do you primarily serve?*</p>
            
            <ul class="demographics">
                <li>
                    <input type="checkbox" id="reg-tar-demo-1" name="reg-tar-demo" value="Women" required>
                    <label class="reg-form-options" for="reg-tar-demo-1">Women</label>
                </li>
                
                <li>
                    <input type="checkbox" id="reg-tar-demo-2" name="reg-tar-demo" value="Men">
                    <label class="reg-form-options" for="reg-tar-demo-2">Men</label>
                </li>
                
                <li>
                    <input type="checkbox" id="reg-tar-demo-3" name="reg-tar-demo" value="Children">
                    <label class="reg-form-options" for="reg-tar-demo-3">Children</label>
                </li>
                
                <li>
                    <input type="checkbox" id="reg-tar-demo-4" name="reg-tar-demo" value="Seniors">
                    <label class="reg-form-options" for="reg-tar-demo-4">Seniors</label>
                </li>
                
                <li>
                    <input type="checkbox" id="reg-tar-demo-5" name="reg-tar-demo" value="People with disabilities">
                    <label class="reg-form-options" for="reg-tar-demo-5">People with disabilities</label>
                </li>
                
                <li>
                    <input type="checkbox" id="reg-tar-demo-6" name="reg-tar-demo" value="Unhoused peoples">
                    <label class="reg-form-options" for="reg-tar-demo-6">Unhoused peoples</label>
                </li>
                
                <li>
                    <input type="checkbox" id="reg-tar-demo-7" name="reg-tar-demo" value="All"> <!-- maybe some clarification on this option is needed - all of the above, or all peoples? -->
                    <label class="reg-form-options" for="reg-tar-demo-7">All</label>
                </li>
            </ul>
            
            
        </fieldset>
        
        <!-- PROVIDED SERVICES -->
        <fieldset>
            <p>Services provided: What type of services do you provide?*</p>
            
            <ul class="services">
                <li>
                    <input type="checkbox" id="reg-pro-serv-1" name="reg-pro-serv" value="Meals" required>
                    <label class="reg-form-options" for="reg-pro-serv-1">Meals</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-pro-serv-2" name="reg-pro-serv" value="Shelter">
                    <label class="reg-form-options" for="reg-pro-serv-2">Shelter</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-pro-serv-3" name="reg-pro-serv" value="Clothes">
                    <label class="reg-form-options" for="reg-pro-serv-3">Clothes</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-pro-serv-4" name="reg-pro-serv" value="Cafeteria">
                    <label class="reg-form-options" for="reg-pro-serv-4">Cafeteria</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-pro-serv-5" name="reg-pro-serv" value="Sports & recreation">
                    <label class="reg-form-options" for="reg-pro-serv-5">Sports & recreation</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-pro-serv-6" name="reg-pro-serv" value="Food/resource baskets">
                    <label class="reg-form-options" for="reg-pro-serv-6">Food/resource baskets</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-pro-serv-7" name="reg-pro-serv" value="Food/resource delivery">
                    <label class="reg-form-options" for="reg-pro-serv-7">Food/resource delivery</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-pro-serv-8" name="reg-pro-serv" value="Financial assistance">
                    <label class="reg-form-options" for="reg-pro-serv-8">Financial assistance</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-pro-serv-9" name="reg-pro-serv" value="Individual support">
                    <label class="reg-form-options" for="reg-pro-serv-9">Individual support</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-pro-serv-10" name="reg-pro-serv" value="Family support">
                    <label class="reg-form-options" for="reg-pro-serv-10">Family support</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-pro-serv-11" name="reg-pro-serv" value="Group support">
                    <label class="reg-form-options" for="reg-pro-serv-11">Group support</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-pro-serv-12" name="reg-pro-serv" value="Material assistance">
                    <label class="reg-form-options" for="reg-pro-serv-12">Material assistance</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-pro-serv-13" name="reg-pro-serv" value="Home visits">
                    <label class="reg-form-options" for="reg-pro-serv-13">Home visits</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-pro-serv-14" name="reg-pro-serv" value="Educational programs/workshops">
                    <label class="reg-form-options" for="reg-pro-serv-14">Educational programs/workshops</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-pro-serv-15" name="reg-pro-serv" value="Social programs/workshops">
                    <label class="reg-form-options" for="reg-pro-serv-15">Social programs/workshops</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-pro-serv-16" name="reg-pro-serv" value="Emergency resources">
                    <label class="reg-form-options" for="reg-pro-serv-16">Emergency resources</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-pro-serv-17" name="reg-pro-serv" value="Professional/skills development">
                    <label class="reg-form-options" for="reg-pro-serv-17">Professional/skills development</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-pro-serv-18" name="reg-pro-serv" value="Childcare">
                    <label class="reg-form-options" for="reg-pro-serv-18">Childcare</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-pro-serv-19" name="reg-pro-serv" value="Interest groups">
                    <label class="reg-form-options" for="reg-pro-serv-19">Interest groups</label>
                </li>
            </ul>
        </fieldset>
        
        <!-- AVAILABLE ROLES -->
        <fieldset>
            <p>Available roles: What volunteering opportunities do you offer (both regularly or intermittently)?*</p>
            
            <ul class="roles">
                <li>
                    <input type="checkbox" id="reg-avail-roles-1" name="reg-avail-roles" value="Cleaning" required>
                    <label class="reg-form-options" for="reg-avail-roles-1">Cleaning</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-avail-roles-2" name="reg-avail-roles" value="Cooking">
                    <label class="reg-form-options" for="reg-avail-roles-2">Cooking</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-avail-roles-3" name="reg-avail-roles" value="Delivery">
                    <label class="reg-form-options" for="reg-avail-roles-3">Delivery</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-avail-roles-4" name="reg-avail-roles" value="Education">
                    <label class="reg-form-options" for="reg-avail-roles-4">Education</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-avail-roles-5" name="reg-avail-roles" value="Food preparation">
                    <label class="reg-form-options" for="reg-avail-roles-5">Food preparation</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-avail-roles-6" name="reg-avail-roles" value="Food serving">
                    <label class="reg-form-options" for="reg-avail-roles-6">Food serving</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-avail-roles-7" name="reg-avail-roles" value="Gardening/harvesting">
                    <label class="reg-form-options" for="reg-avail-roles-7">Gardening/harvesting</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-avail-roles-8" name="reg-avail-roles" value="Kitchen & cafeteria">
                    <label class="reg-form-options" for="reg-avail-roles-8">Kitchen & cafeteria</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-avail-roles-9" name="reg-avail-roles" value="Administration">
                    <label class="reg-form-options" for="reg-avail-roles-9">Administration</label>
                <li>
                </li>
                    <input type="checkbox" id="reg-avail-roles-10" name="reg-avail-roles" value="Activities supervisor">
                    <label class="reg-form-options" for="reg-avail-roles-10">Activities supervisor</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-avail-roles-11" name="reg-avail-roles" value="Packing & sorting">
                    <label class="reg-form-options" for="reg-avail-roles-11">Packing & sorting</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-avail-roles-12" name="reg-avail-roles" value="Warehouse">
                    <label class="reg-form-options" for="reg-avail-roles-12">Warehouse</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-avail-roles-13" name="reg-avail-roles" value="Daycare">
                    <label class="reg-form-options" for="reg-avail-roles-13">Daycare</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-avail-roles-14" name="reg-avail-roles" value="Professional/skills development">
                    <label class="reg-form-options" for="reg-avail-roles-14">Professional/skills development</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-avail-roles-15" name="reg-avail-roles" value="Home visits">
                    <label class="reg-form-options" for="reg-avail-roles-15">Home visits</label>
                </li>
                <li>
                    <input type="checkbox" id="reg-avail-roles-16" name="reg-avail-roles" value="Cashier">
                    <label class="reg-form-options" for="reg-avail-roles-16">Cashier</label>
                </li>
                
            </ul>
        </fieldset>
        
        <!-- BRIEF DESCRIPTION -->
        <fieldset>
            <label for="reg-brief-desc"><p>Brief description: Please include a brief description of your organization. This can include your mission statement and any other relevant information.* (Max 900 characters)<br></p></label>
            <textarea class="full-field" id="reg-brief-desc" cols="86" rows ="8" name="reg-brief-desc" spellcheck="true" maxlength="900" required></textarea>
        </fieldset>
        
        <!-- ORGANIZATION WEBSITE -->
        <fieldset>
            <label for="reg-org-link"><p>Link to organization website*</p></label>
            <input class="full-field" type="text" id="reg-org-link" name="reg-org-link" spellcheck="false" size="86" required><br>
        </fieldset>
        
        <!-- INTERNAL CONTACT -->
        <fieldset>
            
            <label for="reg-org-contact"><p>Internal contact: please provide a way for us to contact you if needed (i.e. phone, email)*<br>
            <span style="font-family: Montserrat;">This information will not be shared externally.</span></p></label>
            <input class="full-field" type="text" id="reg-org-contact" name="reg-org-contact" spellcheck="false" size="86" required><br>
        </fieldset>
        
        <!-- CONSENT -->
        <fieldset>
            <p>Once approved, do you consent to this information being shared on our page?*</p>
            <ul>
                <li>
                    <input type="radio" id="reg-consent-yes" name="reg-consent" value="yes" required>
                    <label class="reg-form-options" for="reg-consent-yes">Yes</label>
                </li>
                <!--<li>-->
                <!--    <input type="radio" id="reg-consent-no" name="reg-consent" value="no">-->
                <!--    <label class="reg-form-options" for="reg-consent-no">No</label>-->
                <!--</li>-->
            </ul>
        </fieldset>
        
        <fieldset>
            <input type="submit" class="btn-submit">
        </fieldset>
        
    </form>
    
</div>


<?php get_footer(); ?>
