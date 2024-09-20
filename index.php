<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kevinverse - Completed with Tesseract Big Bangs</title>
    <style>
        body {
            margin: 0;
            background-color: #000;
            background: radial-gradient(circle, rgba(0,0,0,1) 0%, rgba(0,0,51,1) 60%, rgba(0,0,153,1) 100%);
            color: #fff;
            font-family: Arial, sans-serif;
            overflow: hidden;
        }

        .container {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        /* Central Core with shifting Metahuman images */
        .core {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: url('/mnt/data/logo.jpg') no-repeat center center; /* Placeholder for the first Metahuman image */
            background-size: cover;
            box-shadow: 0 0 30px white, 0 0 60px white, 0 0 100px white;
            position: relative;
            z-index: 2;
            animation: pulse 4s infinite;
        }

        /* Event Horizon effect */
        .event-horizon {
            width: 400px;
            height: 400px;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: radial-gradient(circle, rgba(0,0,255,0.2), rgba(255,255,255,0.1));
            box-shadow: 0 0 50px rgba(0,0,255,0.8), 0 0 100px rgba(0,0,153,0.8);
            animation: eventPulse 6s infinite;
            z-index: 1;
        }

        /* Metahumans circulating around the core */
        .metahuman {
            position: absolute;
            width: 60px;
            height: 60px;
            background-size: cover;
            border-radius: 50%;
            box-shadow: 0 0 20px rgba(0, 150, 255, 0.8);
            animation: rotateAround 10s infinite linear;
        }

        /* Positioning Metahumans in orbit */
        .metahuman:nth-child(1) { top: -150px; left: 0px; }
        .metahuman:nth-child(2) { top: 0px; left: -200px; }
        .metahuman:nth-child(3) { top: 150px; left: 0px; }
        .metahuman:nth-child(4) { top: 0px; left: 200px; }

        /* Tesseract Big Bang Neon Effect */
        .tesseract {
            position: absolute;
            width: 50px;
            height: 50px;
            border: 2px solid white;
            box-shadow: 0 0 30px white, 0 0 60px white;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15%;
            opacity: 0;
            animation: tesseractBigBang 10s infinite ease-in-out;
        }

        canvas {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 0;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.2); }
        }

        @keyframes eventPulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.5); }
        }

        @keyframes rotateAround {
            from { transform: rotate(0deg) translateX(200px) rotate(0deg); }
            to { transform: rotate(360deg) translateX(200px) rotate(-360deg); }
        }

        @keyframes tesseractBigBang {
            0% { transform: scale(0); opacity: 0; }
            25% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.5); opacity: 0.5; }
            100% { transform: scale(0); opacity: 0; }
        }

    </style>
</head>
<body>
    <div class="container">
        <!-- The core represents the central image or Metahuman -->
        <div class="core" id="core"></div> 
        <!-- Event horizon effect around the core -->
        <div class="event-horizon"></div> 

        <!-- Metahumans orbiting the core -->
        <div class="metahuman" style="background: url('/mnt/data/metahuman1.jpg') no-repeat center center;"></div>
        <div class="metahuman" style="background: url('/mnt/data/metahuman2.jpg') no-repeat center center;"></div>
        <div class="metahuman" style="background: url('/mnt/data/metahuman3.jpg') no-repeat center center;"></div>
        <div class="metahuman" style="background: url('/mnt/data/metahuman4.jpg') no-repeat center center;"></div>

        <!-- Tesseract Big Bang Neon Effects in the empty space -->
        <div class="tesseract" style="top: 10%; left: 30%;"></div>
        <div class="tesseract" style="top: 50%; left: 80%;"></div>
        <div class="tesseract" style="top: 80%; left: 40%;"></div>
        <div class="tesseract" style="top: 20%; left: 70%;"></div>
    </div>

    <canvas id="particleCanvas"></canvas>

    <script>
        const canvas = document.getElementById('particleCanvas');
        const ctx = canvas.getContext('2d');

        // Set canvas size
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        const particlesArray = [];
        const numberOfParticles = 5000;  // Adjust for performance
        const maxRadius = Math.min(canvas.width, canvas.height) / 2 - 100;
        const magneticPoints = [];
        const numberOfMagneticPoints = 5;

        // Graviton Spectrum Colors with blue shades
        const gravitonColors = [
            'rgba(0, 0, 255, 0.7)', 'rgba(0, 150, 255, 0.7)', 'rgba(50, 50, 255, 0.7)', 
            'rgba(100, 100, 255, 0.7)', 'rgba(150, 150, 255, 0.7)', 'rgba(200, 200, 255, 0.7)'
        ];

        class Particle {
            constructor() {
                this.radius = Math.random() * maxRadius;
                this.angle = Math.random() * Math.PI * 2;
                this.speed = Math.random() * 0.02 + 0.001;
                this.size = Math.random() * 2 + 1;
                this.color = gravitonColors[Math.floor(Math.random() * gravitonColors.length)];
            }

            update() {
                this.angle += this.speed;

                // Check if magnetic forces should apply
                magneticPoints.forEach(point => {
                    const dx = point.x - (canvas.width / 2 + this.radius * Math.cos(this.angle));
                    const dy = point.y - (canvas.height / 2 + this.radius * Math.sin(this.angle));
                    const distance = Math.sqrt(dx * dx + dy * dy);
                    const force = 100 / distance; // Magnetic force gets stronger as particles get closer

                    if (distance < 200) { // Attraction force
                        this.radius -= force; // Move toward the point
                    } else {
                        this.radius += force; // Repel particles further out
                    }
                });

                if (this.radius < maxRadius) {
                    this.radius += 0.05; // Evolve outward
                } else {
                    this.radius = Math.random() * maxRadius; // Reset to inner orbit
                }
            }

            draw() {
                const x = canvas.width / 2 + this.radius * Math.cos(this.angle);
                const y = canvas.height / 2 + this.radius * Math.sin(this.angle);

                ctx.fillStyle = this.color;
                ctx.beginPath();
                ctx.arc(x, y, this.size, 0, Math.PI * 2);
                ctx.closePath();
                ctx.fill();
            }
        }

        function init() {
            for (let i = 0; i < numberOfParticles; i++) {
                particlesArray.push(new Particle());
            }

            // Create magnetic points at random locations
            for (let i = 0; i < numberOfMagneticPoints; i++) {
                const point = {
                    x: Math.random() * canvas.width,
                    y: Math.random() * canvas.height
                };
                magneticPoints.push(point);
            }
        }

        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            // Update and draw particles
            particlesArray.forEach(particle => {
                particle.update();
                particle.draw();
            });

            requestAnimationFrame(animate);
        }

        init();
        animate();

        // Handle resizing of the canvas
        window.addEventListener('resize', () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            init();
        });

        // Move magnetic points randomly every few seconds
        setInterval(() => {
            magneticPoints.forEach(point => {
                point.x = Math.random() * canvas.width;
                point.y = Math.random() * canvas.height;
            });
        }, 3000); // Adjust time interval as needed

        // Cycle through metahuman images for the core (change core image periodically)
        const coreElement = document.getElementById('core');
        const metahumanImages = ['/mnt/data/metahuman1.jpg', '/mnt/data/metahuman2.jpg', '/mnt/data/metahuman3.jpg', '/mnt/data/metahuman4.jpg'];
        let currentIndex = 0;

        setInterval(() => {
            currentIndex = (currentIndex + 1) % metahumanImages.length;
            coreElement.style.backgroundImage = `url(${metahumanImages[currentIndex]})`;
        }, 5000); // Change image every 5 seconds

    </script>
</body>
</html>
