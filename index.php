<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metahuman Showcase with Branded Black Hole</title>
    <style>
        body {
            margin: 0;
            background-color: #000;
            background: radial-gradient(circle, rgba(0,0,0,1) 0%, rgba(0,0,51,1) 60%, rgba(0,0,153,1) 100%);
            color: #fff;
            font-family: Arial, sans-serif;
            overflow: hidden;
        }

        h1 {
            text-align: center;
            font-size: 3em;
            margin-top: 20px;
        }

        .main-container {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            perspective: 1500px;
        }

        /* Black Hole with The White House Logo */
        .black-hole {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: url('/path-to-logo/white-house-logo.png') no-repeat center center;
            background-size: cover;
            box-shadow: 0 0 50px black, 0 0 200px rgba(0,0,0,0.9), 0 0 300px rgba(0,0,0,0.5);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(1);
            animation: blackholePulse 10s infinite ease-in-out;
            z-index: 2;
        }

        /* Event Horizon effect */
        .event-horizon {
            width: 600px;
            height: 600px;
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

        .container {
            display: flex;
            gap: 20px;
            z-index: 10; /* Ensuring Metahumans stay above the background */
            position: relative;
        }

        /* Metahuman Frame with Personal Branding */
        .metahuman-frame {
            position: relative;
            width: 250px;
            height: 350px;
            overflow: hidden;
            background-color: #111;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.6);
            transition: transform 0.3s;
            flex-shrink: 0;
        }

        .metahuman-frame:hover {
            transform: scale(1.05);
        }

        .metahuman-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        /* Metahuman personal brand logo overlay */
        .personal-brand {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 50px;
            height: 50px;
            background-size: cover;
            border-radius: 50%;
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.6);
        }

        .metahuman-details {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 51, 0.9);
            color: white;
            padding: 15px;
            opacity: 0;
            transition: opacity 0.3s;
            text-align: center;
        }

        .metahuman-frame:hover .metahuman-details {
            opacity: 1;
        }

        .metahuman-details p {
            margin: 10px 0;
            font-size: 14px;
        }

        .register-button {
            margin-top: 20px;
            padding: 15px 30px;
            background-color: #00ccff;
            border: none;
            color: white;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .register-button:hover {
            background-color: #0088cc;
        }

        /* Particle effect */
        canvas {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 0;
        }

        /* Keyframe Animations */
        @keyframes blackholePulse {
            0%, 100% { transform: translate(-50%, -50%) scale(1); }
            50% { transform: translate(-50%, -50%) scale(1.1); }
        }

        @keyframes eventPulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.5); }
        }

    </style>
</head>
<body>

    <h1>Metahuman Showcase with Black Hole Core</h1>
    
    <div class="main-container">
        <!-- Black Hole at the Center with The White House Logo -->
        <div class="black-hole"></div>

        <!-- Event horizon for central core -->
        <div class="event-horizon"></div>

        <!-- Metahuman Showcase -->
        <div class="container">
            <!-- Metahuman 1 with personal brand -->
            <div class="metahuman-frame">
                <img src="/path-to-image/metahuman1.png" alt="Metahuman 1">
                <div class="personal-brand" style="background-image: url('/path-to-brand-logo/metahuman1-brand.png');"></div>
                <div class="metahuman-details">
                    <h2>Metahuman 1</h2>
                    <p>Skills: Teleportation, Energy Manipulation</p>
                    <p>Metahuman 1 controls energy forces to shift between dimensions and manipulate objects at will.</p>
                </div>
            </div>

            <!-- Metahuman 2 with personal brand -->
            <div class="metahuman-frame">
                <img src="/path-to-image/metahuman2.png" alt="Metahuman 2">
                <div class="personal-brand" style="background-image: url('/path-to-brand-logo/metahuman2-brand.png');"></div>
                <div class="metahuman-details">
                    <h2>Metahuman 2</h2>
                    <p>Skills: Mind Control, Telekinesis</p>
                    <p>Metahuman 2 has powerful psychic abilities, able to influence minds and move objects effortlessly.</p>
                </div>
            </div>

            <!-- Metahuman 3 with personal brand -->
            <div class="metahuman-frame">
                <img src="/path-to-image/metahuman3.png" alt="Metahuman 3">
                <div class="personal-brand" style="background-image: url('/path-to-brand-logo/metahuman3-brand.png');"></div>
                <div class="metahuman-details">
                    <h2>Metahuman 3</h2>
                    <p>Skills: Super Strength, Invulnerability</p>
                    <p>Metahuman 3 possesses incredible strength and is virtually indestructible in battle.</p>
                </div>
            </div>

            <!-- Metahuman 4 with personal brand -->
            <div class="metahuman-frame">
                <img src="/path-to-image/metahuman4.png" alt="Metahuman 4">
                <div class="personal-brand" style="background-image: url('/path-to-brand-logo/metahuman4-brand.png');"></div>
                <div class="metahuman-details">
                    <h2>Metahuman 4</h2>
                    <p>Skills: Flight, Speed</p>
                    <p>Metahuman 4 can fly at supersonic speeds and evade any physical attack with ease.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Metahuman Button -->
    <div style="text-align: center;">
        <button class="register-button" onclick="registerMetahuman()">Register Metahuman</button>
    </div>

    <!-- Canvas for particle effect -->
    <canvas id="particleCanvas"></canvas>

    <script>
        function registerMetahuman() {
            alert("Register Metahuman feature coming soon!");
        }

        // Particle effect script
        const canvas = document.getElementById('particleCanvas');
        const ctx = canvas.getContext('2d');
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        const particlesArray = [];
        const numberOfParticles = 10000;  // Millions of particles, adjust for performance

        // Particle class with random RGB color changes every .001 seconds
        class Particle {
            constructor() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.size = Math.random() * 2 + 1;
                this.speedX = Math.random() * 3 - 1.5;
                this.speedY = Math.random() * 3 - 1.5;
                this.color = `rgb(${Math.random() * 255}, ${Math.random() * 255}, ${Math.random() * 255})`;
            }

            update() {
                this.x += this.speedX;
                this.y += this.speedY;

                // Keep particles within canvas
                if (this.x < 0 || this.x > canvas.width) this.speedX = -this.speedX;
                if (this.y < 0 || this.y > canvas.height) this.speedY = -this.speedY;

                // Update color frequently
                this.color = `rgb(${Math.random() * 255}, ${Math.random() * 255}, ${Math.random() * 255})`;
            }

            draw() {
                ctx.fillStyle = this.color;
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.closePath();
                ctx.fill();
            }
        }

        function initParticles() {
            for (let i = 0; i < numberOfParticles; i++) {
                particlesArray.push(new Particle());
            }
        }

        function animateParticles() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            particlesArray.forEach(particle => {
                particle.update();
                particle.draw();
            });
            requestAnimationFrame(animateParticles);
        }

        initParticles();
        animateParticles();

        // Adjust canvas on window resize
        window.addEventListener('resize', () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            initParticles();
        });
    </script>

</body>
</html>
