// Select dom items
        const menuBtn =
            document.querySelector(".menu-btn");
        
        const menu =
            document.querySelector(".menu");
            
        const navItems =
        document.querySelectorAll(".menu-item");

 
        // Set the initial state of the menu
        let showMenu = false;
 
        menuBtn.addEventListener("click", toggleMenu);
 
        function toggleMenu() {
            
            var x = document.getElementById("myTopnav");
            
            if (!showMenu) {
                
                x.className += " responsive";
                
                menuBtn.classList.add("close");
                navItems.forEach((item) =>
                    item.classList.add("show"));
                
                // Reset the menu state
                showMenu = true;
            } else {
                
                navItems.forEach((item) =>
                    item.classList.remove("show"));
                menuBtn.classList.remove("close");
                
                setTimeout(
                    function() 
                    {
                        x.className = "container";
                    }, 100);
                    
                // Reset the menu state
                showMenu = false;
            }
        }