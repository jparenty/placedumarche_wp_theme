<?php get_header(); ?>

<div class="container">
    <h1 > <?php the_title(); ?></h1>
</div>

<div class="container intro-blob">
    <h3 class="subtitle">Any general inquiries</h3>
    <p>
        Feel free to contact us using the below form if you have any inquiries related to the project.
    </p>
    <p>
        We would be happy to discuss any insights, comments or partnerships about the service we provide.
    </p>
    <p>
        We will keep on improving our platform and its functionalities. Your comments will help us to do so.
    </p>
       
</div>

<div class="container gen-form">
    <hr><br>
    <form id="gen-inquiry" autocomplete="off" name="gen-inquiry" action="./inquiry-gen-data-handling.php" method="post">
        
        <!-- NAME -->
        <fieldset>
            <div>
                <label for="inq-gen-name"><p>Name</p></label>
                <div class="inq-gen-full-name">
                    <div>
                        <input class="medium-field" type="text" id="inq-gen-last-name" name="inq-gen-last-name" spellcheck="false" size="40" required><br>
                        <span style="font-family: Montserrat;">First Name</span>
                    </div>
                    <div>
                        <input class="medium-field" type="text" id="inq-gen-last-name" name="inq-gen-last-name" spellcheck="false" size="40" required><br>
                        <span style="font-family: Montserrat;">Last Name</span>
                    </div>
                </div>
            </div>
        </fieldset>
        
        <!-- INTERNAL CONTACT -->
        <fieldset>
            <label for="reg-gen-contact">
                <p>
                    Internal contact: Please provide your contact information (.e. phone, email):<br>
                </p>
            </label>
            <input class="full-field" type="text" id="inq-gen-contact" name="inq-gen-contact" spellcheck="false" size="86" required><br>
        </fieldset>
        
        <!-- SUBJECT -->
        <fieldset>
            <label for="inq-gen-subject"><p>Subject of Inquiry</p></label>
            <input class="medium-field" type="text" id="inq-gen-subject" name="inq-gen-subject" spellcheck="false" size="40" required><br>
        </fieldset>
        
        <!-- MESSAGE -->
        <fieldset>
            <label for="reg-message-desc"><p>Message: <br></p></label>
            <textarea class="full-field" id="reg-brief-desc" cols="86" rows ="8" name="inq-message-desc" spellcheck="true" required></textarea>
        </fieldset>
        
        <fieldset>
            <input type="submit" class="btn-submit">
        </fieldset>
        
    </form>
    
</div>

<?php get_footer(); ?>