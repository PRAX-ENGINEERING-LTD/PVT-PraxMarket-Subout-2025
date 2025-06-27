<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prax Market Features</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #3a2b73;
            background-image: linear-gradient(#3a2b73, #2c1a5a);
            height: 100vh;
            overflow: hidden;
            position: relative;
        }
        
        .grid-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(rgba(255,255,255,0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.05) 1px, transparent 1px);
            background-size: 20px 20px;
            z-index: 0;
        }
        
        .stars {
            position: absolute;
            width: 100%;
            height: 100%;
        }
        
        .star {
            position: absolute;
            background-color: white;
            width: 2px;
            height: 2px;
            border-radius: 50%;
            opacity: 0.4;
        }
        
        .feature-box {
            background-color: #7e55ff;
            border-radius: 10px;
            color: white;
            padding: 15px 20px;
            font-weight: 600;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            z-index: 10;
            position: relative;
            width: 100%;
            max-width: 220px;
        }
        
        .center-box {
            background-color: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
            position: relative;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 350px;
        }
        
        .prax-logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .prax-cubes {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 2px;
            width: 50px;
        }
        
        .cube {
            width: 15px;
            height: 15px;
            background-color: #ccc;
            border: 1px solid #999;
        }
        
        .cube:nth-child(3) {
            background-color: #4c9c73;
        }
        
        .prax-text {
            font-size: 2rem;
            font-weight: bold;
            color: #1c8655;
        }
        
        .connection-container {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 5;
            pointer-events: none;
        }
        
        @media (max-width: 768px) {
            .features-container {
                flex-direction: column;
                gap: 15px;
            }
            
            .center-box-container {
                margin-top: 30px;
            }
        }
    </style>
</head>
<body>
    <div class="grid-overlay"></div>
    <div class="stars" id="stars"></div>
    
    <div class="container d-flex flex-column justify-content-center align-items-center h-100">
        <div class="row w-100 justify-content-center mb-5">
            <div class="col-md-3 col-sm-6 d-flex justify-content-center mb-3">
                <div class="feature-box" id="feature1">Business Growth &<br>Visibility</div>
            </div>
            <div class="col-md-3 col-sm-6 d-flex justify-content-center mb-3">
                <div class="feature-box" id="feature2">Trusted Supplier<br>Network</div>
            </div>
            <div class="col-md-3 col-sm-6 d-flex justify-content-center mb-3">
                <div class="feature-box" id="feature3">Support for R&D<br>Companies</div>
            </div>
            <div class="col-md-3 col-sm-6 d-flex justify-content-center mb-3">
                <div class="feature-box" id="feature4">Effortless Order &<br>Delivery</div>
            </div>
        </div>
        
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 text-center">
                <div class="center-box">
                    <div class="prax-logo">
                        <div class="prax-cubes">
                            <div class="cube"></div>
                            <div class="cube"></div>
                            <div class="cube"></div>
                            <div class="cube"></div>
                            <div class="cube"></div>
                            <div class="cube"></div>
                        </div>
                        <div class="prax-text">Prax Market</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <canvas id="connectionCanvas" class="connection-container"></canvas>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Create stars
        function createStars() {
            const starsContainer = document.getElementById('stars');
            const starCount = 100;
            
            for (let i = 0; i < starCount; i++) {
                const star = document.createElement('div');
                star.classList.add('star');
                star.style.left = `${Math.random() * 100}%`;
                star.style.top = `${Math.random() * 100}%`;
                star.style.opacity = Math.random() * 0.7 + 0.3;
                starsContainer.appendChild(star);
            }
        }
        
        // Draw connection lines
        function drawConnections() {
            const canvas = document.getElementById('connectionCanvas');
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            const ctx = canvas.getContext('2d');
            
            const centerBox = document.querySelector('.center-box');
            const centerRect = centerBox.getBoundingClientRect();
            const centerX = centerRect.left + centerRect.width / 2;
            const centerY = centerRect.top + centerRect.height / 2;
            
            const features = [
                document.getElementById('feature1'),
                document.getElementById('feature2'),
                document.getElementById('feature3'),
                document.getElementById('feature4')
            ];
            
            // Clear canvas
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            
            // Draw curved lines for each feature
            features.forEach((feature, index) => {
                const featureRect = feature.getBoundingClientRect();
                const featureX = featureRect.left + featureRect.width / 2;
                const featureY = featureRect.bottom;
                
                const startX = featureX;
                const startY = featureY;
                
                // Control points for curves
                const midY = (startY + centerY) / 2;
                
                ctx.beginPath();
                ctx.moveTo(startX, startY);
                
                // Define curve based on position
                const controlX1 = startX;
                const controlY1 = midY;
                const controlX2 = centerX + (index === 0 || index === 3 ? 50 : -50) * (index < 2 ? -1 : 1);
                const controlY2 = centerY - 50;
                
                ctx.bezierCurveTo(controlX1, controlY1, controlX2, controlY2, centerX, centerY);
                
                // Line color based on index
                if (index === 2 || index === 3) {
                    // Gold lines for features 3 and 4
                    ctx.strokeStyle = '#ffc107';
                } else {
                    // Purple lines for features 1 and 2
                    ctx.strokeStyle = '#7e55ff';
                }
                
                ctx.lineWidth = 2;
                ctx.stroke();
            });
        }
        
        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            createStars();
            drawConnections();
            
            // Redraw connections on window resize
            window.addEventListener('resize', function() {
                drawConnections();
            });
        });
    </script>
</body>
</html><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/htmlcodes/let.blade.php ENDPATH**/ ?>