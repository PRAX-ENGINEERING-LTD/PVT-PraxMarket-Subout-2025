<!-- <button class="back-to-top" id="backToTop" aria-label="Back to top">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <polyline points="18 15 12 9 6 15"></polyline>
    </svg>
</button> -->
<div  class="back-to-top" id="backToTop" aria-label="Back to top">
            <img src="<?php echo e(asset('newAssets/img/home/arrow-up.png')); ?>" style="width: 26px;" alt="Facebook">
        </div>

<style>
    .back-to-top {
        position: fixed;
        bottom: 30px;
        right: 30px;
        background-color: #7366ff !important;
   
            border: 1px solid #7366ff !important;
        color: white;
        width: 50px;
        height: 50px;
         border-radius:0px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transition: all 0.5s ease;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        z-index: 9999; /* Higher z-index to ensure it's above videos/animations */
        /* border: none; */
        outline: none;
        transform: translateY(20px); /* Start slightly below final position */
    }

    .back-to-top.visible {
        opacity: 1;
        visibility: visible;
        transform: translateY(0); /* Smooth appearance from below */
    }

    .back-to-top:hover {
       
      
        transform: translateY(-3px); /* Slight upward hover effect */
    }
    
    /* Add smooth transition when hovering */
    .back-to-top:hover svg {
        transform: translateY(-2px);
    }
    
    .back-to-top svg {
        transition: transform 0.3s ease;
    }
    
    /* Support for dark-themed pages */
    @media (prefers-color-scheme: dark) {
        .back-to-top {
            background-color: rgba(41, 128, 185, 0.8);
        }
        
        .back-to-top:hover {
            background-color: rgba(52, 152, 219, 0.9);
        }
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .back-to-top {
            width: 45px;
            height: 45px;
            bottom: 20px;
            right: 20px;
        }
    }
</style>

<script>
    $(document).ready(function() {
        const backToTopButton = $('#backToTop');
        let isScrolling = false;
        let lastScrollTop = 0;
        const scrollThreshold = 400; // Show button after scrolling this many pixels
        
        // Throttle function to limit how often the scroll handler runs
        function throttle(callback, limit) {
            let wait = false;
            return function() {
                if (!wait) {
                    callback.call();
                    wait = true;
                    setTimeout(function() {
                        wait = false;
                    }, limit);
                }
            };
        }
        
        // Handle scroll events with throttling to improve performance
        $(window).scroll(throttle(function() {
            const scrollTop = $(window).scrollTop();
            
            // Track scroll direction
            const scrollingDown = scrollTop > lastScrollTop;
            lastScrollTop = scrollTop;
            
            if (scrollTop > scrollThreshold) {
                if (!backToTopButton.hasClass('visible')) {
                    backToTopButton.addClass('visible');
                }
            } else {
                if (backToTopButton.hasClass('visible')) {
                    backToTopButton.removeClass('visible');
                }
            }
        }, 100)); // Throttle to max once every 100ms
        
        // Smooth scroll to top with performance optimizations
        backToTopButton.click(function(e) {
            e.preventDefault();
            
            // Prevent multiple scrolls if button is clicked repeatedly
            if (isScrolling) return false;
            isScrolling = true;
            
            // Pause video elements to improve scroll performance (optional)
            // $('video').each(function() {
            //     if (!this.paused) {
            //         $(this).data('was-playing', true);
            //         this.pause();
            //     }
            // });
            
            // Use requestAnimationFrame for smoother scrolling
            const duration = 1200; // 1.2 seconds
            const start = performance.now();
            const startPos = window.pageYOffset;
            
            function scrollStep(timestamp) {
                const elapsed = timestamp - start;
                const progress = Math.min(elapsed / duration, 1);
                
                // Easing function: easeInOutCubic
                const easing = progress < 0.5
                    ? 4 * progress * progress * progress
                    : 1 - Math.pow(-2 * progress + 2, 3) / 2;
                
                window.scrollTo(0, startPos * (1 - easing));
                
                if (progress < 1) {
                    window.requestAnimationFrame(scrollStep);
                } else {
                    isScrolling = false;
                    
                    // Resume videos that were playing (if you implemented the pause above)
                    // $('video').each(function() {
                    //     if ($(this).data('was-playing')) {
                    //         this.play();
                    //         $(this).removeData('was-playing');
                    //     }
                    // });
                }
            }
            
            window.requestAnimationFrame(scrollStep);
            return false;
        });
        
        // Check scroll position on page load
        if ($(window).scrollTop() > scrollThreshold) {
            backToTopButton.addClass('visible');
        }
    });
</script><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/staticPages/components/back-to-top.blade.php ENDPATH**/ ?>