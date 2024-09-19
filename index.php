<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MetaKevin Universal Alignment</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #0d0d0d;
            overflow: hidden;
            font-family: 'Arial', sans-serif;
            color: #fff;
        }

        header {
            text-align: center;
            padding: 50px 20px;
        }

        header h1 {
            font-size: 3rem;
            color: #00ffff;
            text-shadow: 0 0 20px rgba(0, 255, 255, 0.7);
        }

        .universe-container {
            position: relative;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            background: radial-gradient(circle, #0d0d0d 0%, #001a1a 100%);
        }

        /* Central glowing energy core (MetaKevin) */
        .metakevin-core {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: radial-gradient(circle, #00ffff, #004d4d);
            box-shadow: 0 0 50px #00ffcc, inset 0 0 30px #00cccc;
            animation: pulse 3s infinite ease-in-out;
        }

        @keyframes pulse {
            0% {
                transform: translate(-50%, -50%) scale(1);
                box-shadow: 0 0 30px #00ffcc, inset 0 0 20px #00cccc;
            }
            50% {
                transform: translate(-50%, -50%) scale(1.2);
                box-shadow: 0 0 70px #00ffcc, inset 0 0 50px #00cccc;
            }
            100% {
                transform: translate(-50%, -50%) scale(1);
                box-shadow: 0 0 30px #00ffcc, inset 0 0 20px #00cccc;
            }
        }

        /* Glowing Metahumans */
        .metahuman {
            position: absolute;
            width: 120px;
            height: 120px;
            background: radial-gradient(circle, #ff00cc, #4d004d);
            border-radius: 50%;
            box-shadow: 0 0 30px rgba(255, 0, 204, 0.8), inset 0 0 20px rgba(255, 0, 204, 0.5);
            animation: orbit 12s infinite linear;
        }

        .metahuman img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            opacity: 0.9;
        }

        /* Orbiting motion for metahumans */
        .metahuman:nth-child(1) {
            top: 15%;
            left: 60%;
            background: radial-gradient(circle, #ff6600, #662900);
            box-shadow: 0 0 30px rgba(255, 102, 0, 0.8), inset 0 0 20px rgba(255, 102, 0, 0.5);
            animation-duration: 12s;
        }

        .metahuman:nth-child(2) {
            top: 75%;
            left: 30%;
            background: radial-gradient(circle, #00ff66, #004d1a);
            box-shadow: 0 0 30px rgba(0, 255, 102, 0.8), inset 0 0 20px rgba(0, 255, 102, 0.5);
            animation-duration: 15s;
        }

        .metahuman:nth-child(3) {
            top: 35%;
            left: 80%;
            background: radial-gradient(circle, #6666ff, #1a1a66);
            box-shadow: 0 0 30px rgba(102, 102, 255, 0.8), inset 0 0 20px rgba(102, 102, 255, 0.5);
            animation-duration: 18s;
        }

        .metahuman:nth-child(4) {
            top: 85%;
            left: 70%;
            background: radial-gradient(circle, #ffcc00, #4d3300);
            box-shadow: 0 0 30px rgba(255, 204, 0, 0.8), inset 0 0 20px rgba(255, 204, 0, 0.5);
            animation-duration: 20s;
        }

        @keyframes orbit {
            0% {
                transform: translate(-50%, -50%) rotate(0deg) translateX(300px) rotate(0deg);
            }
            100% {
                transform: translate(-50%, -50%) rotate(360deg) translateX(300px) rotate(-360deg);
            }
        }

        /* Hover Interaction for Metahumans */
        .metahuman:hover {
            box-shadow: 0 0 50px rgba(255, 255, 255, 1), inset 0 0 30px rgba(255, 255, 255, 0.9);
            transform: scale(1.1);
            z-index: 10;
        }

        .metahuman:hover .popup {
            display: block;
        }

        /* Tooltip popup on hover */
        .popup {
            display: none;
            position: absolute;
            bottom: 150px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            font-size: 1rem;
        }

        .interactive-info {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 1.2rem;
            text-align: center;
            color: #00ffcc;
        }

    </style>
</head>
<body>

    <header>
        <h1>MetaKevin Universal Alignment</h1>
        <p class="interactive-info">Hover over the Metahumans to reveal their cosmic powers</p>
    </header>

    <div class="universe-container">
        <!-- Central MetaKevin Core -->
        <div class="metakevin-core"></div>

        <!-- Glowing Orbiting Metahumans -->
        <div class="metahuman">
            <img src="images/metaarkane.jpg" alt="MetaArkane">
            <div class="popup">MetaArkane: The mystical strategist with cosmic power.</div>
        </div>
        <div class="metahuman">
            <img src="images/metahallyu.jpg" alt="MetaHallyu">
            <div class="popup">MetaHallyu: Harnesses the power of Korean influence.</div>
        </div>
        <div class="metahuman">
            <img src="images/metaryujin.jpg" alt="MetaRyūjin">
            <div class="popup">MetaRyūjin: The spirit of Japan's resilience.</div>
        </div>
        <div class="metahuman">
            <img src="images/metakalaya.jpg" alt="MetaKalaya">
            <div class="popup">MetaKalaya: The guardian of creativity and knowledge.</div>
        </div>

    </div>

</body>
</html>
