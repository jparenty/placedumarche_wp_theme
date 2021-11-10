<?php get_header(); ?>

<div class="container">
    <h1 > <?php the_title(); ?></h1>
</div>

<div class="container intro-blob">
    <h3 class="subtitle">For organization registered on Place du Marché</h3>
    <p>
        Feel free to contact us using the below form if you wish to provide changes to your organization's page on our website.
    </p>
    <p>
        The changes could include the following:
        <ul class="inquiries-content-list">
            <li>Correcting any information you may find unaccurate about your organization</li>
            <li>Updating the organization's services provided</li>
            <li>Updating the open volunteering positions</li>
            <li>Any other related inquiries...</li>
        </ul>
    </p>
</div>

<div class="container inq-form">
    <hr><br>
    <form id="org-inquiry" autocomplete="off" name="org-inquiry" action="./inquiry-org-data-handling.php" method="post">
        
        <!-- NAME -->
        <fieldset>
            <label for="inq-org-name"><p>Name of organization*</p></label>
            <input class="medium-field" type="text" id="inq-org-name" name="inq-org-name" spellcheck="false" size="40" required><br>
        </fieldset>
        
        <!-- INTERNAL CONTACT -->
        <fieldset>
            <label for="reg-org-contact">
                <p>
                    Internal contact: Please provide your contact information (.e. phone, email):<br>
                </p>
            </label>
            <input class="full-field" type="text" id="inq-org-contact" name="inq-org-contact" spellcheck="false" size="86" required><br>
        </fieldset>
        
        <!-- SUBJECT -->
        <fieldset>
            <label for="inq-org-subject"><p>Subject of Inquiry</p></label>
            <input class="medium-field" type="text" id="inq-org-subject" name="inq-org-subject" spellcheck="false" size="40" required><br>
        </fieldset>
        
        <!-- MESSAGE -->
        <fieldset>
            <label for="reg-message-desc"><p>Message: Please describe the changes you would like to make to your organization or express any other inquiry here:<br></p></label>
            <textarea class="full-field" id="reg-brief-desc" cols="86" rows ="8" name="inq-message-desc" spellcheck="true" required></textarea>
        </fieldset>
        
        <fieldset>
            <input type="submit" class="btn-submit">
        </fieldset>
        
    </form>
    
</div>

<?php get_footer(); ?>