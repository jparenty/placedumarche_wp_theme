<!DOCTYPE html>

<head>
    <title>Place du Marche: Homepage</title>
</head>

<?php get_header(); ?>

<body class="home">
    <!-- welcome --> 
        <div class="image-container">
            
            <div class="fill">
                <!--<img src="/test/wp-content/themes/placedumarche/media/images/vegetablesyoudonteat1.jpg" alt="fresh produce background" id="produce-img">-->
                <div class="title-text-container">
                <div class="medium-title" id="welcome-text-medium">
                    Welcome,
                    <div class="big-title" id="welcome-text-big">
                        We match volunteers to local food organizations.
                        <div class="small-title" id="welcome-text-small">
                            Find your ideal organization
                        </div>
                    </div>
                </div>
            </div>
            </div>
            
            
            
        </div>
    
    
    <!-- blue box -->
    <div class="hyperlink-container container hideme blue-container-adjust-tablets fade">
        <!-- Using location.svg as placeholder until final icons are found. -s -->
        <div class="hyperlink-item" id="explore-orgs">
            <a href="https://myplacedumarche.com/test/organization-directory/" class="home-hyperlink" >
                <img src="/test/wp-content/themes/placedumarche/media/icons/ic-actions-search.svg" alt="magnifying glass icon" class="home-icons">
                <div class="home-hyperlink-text small-title">
                    Explore organizations 
                </div>
                <img class="btn-arrow-right home" src="https://myplacedumarche.com/test/wp-content/themes/placedumarche/media/icons/ic-arrows-right.svg">
            </a>
        </div>
        
        <div class="hyperlink-item" id="find-match">
            <a href="https://myplacedumarche.com/test/find-your-ideal-organization/" class="home-hyperlink">
                <img src="/test/wp-content/themes/placedumarche/media/icons/ic-actions-success.svg" alt="location icon" class="home-icons find">
                <div class="home-hyperlink-text small-title">
                    Enter your preferences and find a match
                </div>
                <img class="btn-arrow-right home" src="https://myplacedumarche.com/test/wp-content/themes/placedumarche/media/icons/ic-arrows-right.svg">
            </a>
        </div>
        
        
        <div class="hyperlink-item" id="sign-up-org">
            <a href="https://myplacedumarche.com/test/register-your-organization/" class="home-hyperlink">
                <img src="/test/wp-content/themes/placedumarche/media/icons/ic-actions-pen.svg" alt="writing icon" class="home-icons">
                <div class="home-hyperlink-text small-title">
                    Sign your organization up
                </div>
                <img class="btn-arrow-right home" src="https://myplacedumarche.com/test/wp-content/themes/placedumarche/media/icons/ic-arrows-right.svg">
            </a>
        </div>
      
        
    </div>
    
    <!-- world map mission text -->
    <div class="mission-container container">
        
            <img src="/test/wp-content/themes/placedumarche/media/images/worldmap.svg" alt="world map" id="world-map">
            <div class="mission-text">
                
                <div id="big-text-overlay"> <!-- CONSIDER SHORTENING THIS SENTENCE... IT IS SORT OF A MOUTHFUL -->
                    Our mission is to connect volunteers who wish to get involved within the food community, while providing exposure to the main services and activities of local food security organizations.
                    <div id="small-text-overlay">
                        In 2017-2018, there was an estimated 4.4 million people in Canada, with over <span class="highlight">25% of children</span> from the estimate that were living in households of <span class="highlight">food insecurity</span>. 
                        <br>Ontario, Quebec, Alberta, or British Columbia, accounted for <span class="highlight">84%</span> of the cases, with Quebec making up <span class="highlight">11%</span> of total cases.
                        
                        <div id="source-text">
                            Source: PROOF, Food Insecurity Policy Research, 2017 - 2018
                        </div>
                    </div>
                </div>
                
            </div>
            
        
        
    </div>
    
    <hr class="line-break">
    
    <!-- food insecurity map -->
    <div class="container" id="food-insecurity">
        
        <div class="medium-title" style="text-align: center;">
            Food Insecurity in Montréal
        </div>
        
        <img src="/test/wp-content/themes/placedumarche/media/images/mtlmap.png" alt="map of montreal" id="mtl-map">
        
    </div>
    
    <div style="color: #011D30; font-family: Montserrat; text-align: center; margin-bottom: 15px;">
        In 2019, it was estimated that<br>
    </div>
    
    <div class="stats-container container stat-box-fix home-hyperlink-text blue-container-adjust-tablets" id="counter">
        <div class="stats-item">
            <div class="stat-number medium-title" data-target="1">
                0
            </div>
            <hr class="line-break-stat">
            <div class="stat-description">
                in 10 Montrealers are affected by food insecurity
            </div>
        </div>
        <div class="stats-item">
            <div class="stat-number medium-title" id="stat2" data-target="250000">
                0
            </div>
            <hr class="line-break-stat">
            <div class="stat-description">
                do not have enough nutritious food to put on the kitchen table on a daily basis
            </div>
        </div>
        <div class="stats-item">
            <div class="stat-number medium-title" data-target="500000">
                0
            </div>
            <hr class="line-break-stat">
            <div class="stat-description">
                are at risk for severe food insecurity
            </div>
        </div>
        <div class="stats-item">
            <div class="stat-number medium-title"  data-target="13">
                0
            </div>
            <hr class="line-break-stat">
            <div class="stat-description">
                percent is without reliable access to affordable, nutritious food
            </div>
        </div>
        
    </div>
    
    <div class="btns-home container">
        <a href="https://myplacedumarche.com/test/find-your-ideal-organization/" class="btn-home">
            <div class="btn-readmore-text">
                Find Your Ideal Organization
            </div>
            <img class="btn-arrow-right" src="https://myplacedumarche.com/test/wp-content/themes/placedumarche/media/icons/ic-arrows-right.svg">
        </a>
        <a href="https://myplacedumarche.com/test/organization-directory/" class="btn-home">
            <div class="btn-readmore-text">
                Explore Other Organizations
            </div>
            <img class="btn-arrow-right" src="https://myplacedumarche.com/test/wp-content/themes/placedumarche/media/icons/ic-arrows-right.svg">
        </a>
    </div>
    
    <div class="container donation-box">
        <div id="donation-question">
            Want to support our initiative?<br>
        </div>
        <div id="donation-encouragement">
            See how you can also help us make a difference!
        </div>
        <div class="btn-donation">
            <a href="https://www.buymeacoffee.com/" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: #011d30;">
                Buy us a coffee
            </a>
        </div>
    </div>
    
    <div class="container">
        <!-- return to top button -->
        <div class="return-to-top-home" onclick="topFunction()">
            <img src="https://myplacedumarche.com/test/wp-content/themes/placedumarche/media/icons/ic-arrows-top.svg" style="position: relative; display: block; filter: invert(71%) sepia(1%) saturate(0%) hue-rotate(353deg) brightness(93%) contrast(95%);">
        </div>
    </div>
    
</body>

<script>
            
            // const counters = document.querySelectorAll('.stat-number');
            // //speed: lower -> faster
            // var speed = 500;
            
            // counters.forEach(counter => {
            //     const updateCount = () => {
            //         const target = +counter.getAttribute('data-target');
            //         console.log(target)
            //         const count = +counter.innerText;
            //         if (target == 13) {
            //              speed = 12;
            //         } else {
            //             speed = 500;
            //         }
            //         const inc = target / speed;
            //         if (target == 1) {
            //             setTimeout(() => {counter.innerText = target;}, 1000);
            //         }
                    
            //         if (count < target) {
            //             counter.innerText = parseInt(count + inc);
            //             console.log(count)
            //             console.log(inc)
            //             //wait 1ms before recursively calling the function
            //             setTimeout(updateCount, 1)
            //         } else {
            //             counter.innerText = target;
            //         }
            //     }
            //     updateCount();
            // });
</script>

<script>
var $=jQuery.noConflict();

// import { CountUp } from "./js/countUp.js";

//Back to top button
topButton = document.getElementById("myBtn");

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

// fade in animations courtesy of mrfunkyside: https://stackoverflow.com/questions/26694385/fade-in-on-scroll-down-fade-out-on-scroll-up-based-on-element-position-in-win

var laptopWidth = 1001;

var oldPageYOffset = 0;
$(window).scroll(function() {
    if (window.pageYOffset != oldPageYOffset) {
        oldPageYOffset = window.pageYOffset;
        w = document.documentElement.clientWidth || document.body.clientWidth || window.innerWidth;
        if (w >= laptopWidth) {
            $(".fade").each(function() {
                if ($(this).css("opacity")==0) {
                    $(this).fadeTo(750, 1);
                }
            });
        }
    }
    
}).scroll();


//- stat counter numbers

</script>



<?php get_footer(); ?>