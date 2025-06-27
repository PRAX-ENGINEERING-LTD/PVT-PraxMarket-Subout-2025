<!DOCTYPE html> 
<html lang="en">  
<head>     
    <meta charset="UTF-8">     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('new-assets/img/favicon.ico')); ?>" />     
    <link rel="stylesheet" href="<?php echo e(url('css/app.css')); ?>">     
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>      
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    
    <title>About Us</title>     
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        
        /* Hide footer by default */
        #footer-section {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            visibility: hidden;
            opacity: 0;
            /* transition: opacity 0.5s, visibility 0.5s; */
            z-index: 999;
        }
        
        /* Show footer when class is added */
        #footer-section.visible {
            visibility: visible;
            opacity: 1;
        }
        
        /* Add padding to ensure content isn't hidden behind footer */
        main {
            padding-bottom: 50px;
            background-color: #fff;
            position: relative;
            z-index: 2;
        }
    </style> 
</head>  

<body>     
    <?php echo $__env->make('header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>      
    
    <main id="main-content">         
        <?php echo $__env->make('aboutpage', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>     
    </main>      
    
    <div id="footer-section">
        <?php echo $__env->make('footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
    
    <script>
        $(document).ready(function() {
            // Get reference to footer element
            var footer = $('#footer-section');
            
            // Function to check scroll position
            function checkScrollPosition() {
                // Calculate how far we've scrolled from the top
                var scrollPosition = $(window).scrollTop();
                
                // Calculate the total height of the page
                var totalHeight = $(document).height();
                
                // Calculate the height of the viewport (browser window)
                var viewportHeight = $(window).height();
                
                // If we're close to the bottom (within 100px)
                if (scrollPosition + viewportHeight >= totalHeight - 100) {
                    // Show the footer
                    footer.addClass('visible');
                } else {
                    // Hide the footer
                    footer.removeClass('visible');
                }
            }
            
            // Check scroll position when page loads
            checkScrollPosition();
            
            // Check scroll position whenever user scrolls
            $(window).scroll(function() {
                checkScrollPosition();
            });
            
            // Also check when window is resized
            $(window).resize(function() {
                checkScrollPosition();
            });
            
            // Initialize particles.js if needed
            if (typeof particlesJS !== 'undefined' && $('#particles-footer').length > 0) {
                particlesJS('particles-footer', {
                    "particles": {
                        "number": {
                            "value": 100,
                            "density": {
                                "enable": true,
                                "value_area": 800
                            }
                        },
                        "color": {
                            "value": "#8B5CF6"
                        },
                        "shape": {
                            "type": "circle"
                        },
                        "opacity": {
                            "value": 1
                        },
                        "size": {
                            "value": 2
                        },
                        "move": {
                            "enable": true,
                            "speed": 1,
                            "direction": "none",
                            "random": false,
                            "out_mode": "out"
                        },
                        "line_linked": {
                            "enable": false
                        }
                    }
                });
            }
        });
    </script>
</body>  
</html><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/htmlcodes/footerrevel.blade.php ENDPATH**/ ?>