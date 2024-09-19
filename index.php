<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kevinverse - Metahumans</title>
    <style>
        body {
            background-color: #0a0a0a;
            font-family: 'Arial', sans-serif;
            color: white;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            padding: 20px;
            font-size: 3rem;
            color: #00ffaa;
        }
        .universe-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding: 50px;
            background: radial-gradient(circle, #111 20%, #001f3f);
        }
        .core {
            background-color: #00ccff;
            border-radius: 50%;
            width: 150px;
            height: 150px;
            position: relative;
            box-shadow: 0 0 40px rgba(0, 255, 255, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            animation: pulse 3s infinite ease-in-out;
        }
        @keyframes pulse {
            0% {
                transform: scale(1);
                box-shadow: 0 0 40px rgba(0, 255, 255, 0.3);
            }
            50% {
                transform: scale(1.1);
                box-shadow: 0 0 80px rgba(0, 255, 255, 0.7);
            }
            100% {
                transform: scale(1);
                box-shadow: 0 0 40px rgba(0, 255, 255, 0.3);
            }
        }
        .core h2 {
            color: #0a0a0a;
        }
        .metahuman {
            margin: 20px;
            background-color: #1a1a1a;
            border-radius: 20px;
            width: 250px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .metahuman img {
            width: 100%;
            border-radius: 10px;
        }
        .metahuman h2 {
            color: #00ffcc;
        }
        .metahuman:hover {
            transform: scale(1.1);
            box-shadow: 0 0 25px rgba(255, 255, 255, 0.5);
        }
        .description {
            padding: 10px;
            background-color: #333;
            border-radius: 10px;
            color: #ddd;
            font-size: 1rem;
        }
        .energy-line {
            background-color: #00ff99;
            height: 3px;
            width: 100px;
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            margin: auto;
        }
    </style>
</head>
<body>

    <h1>The Kevinverse - Metahumans and the Central Core</h1>

    <div class="universe-container">
        <!-- Central Kevinverse Core -->
        <div class="core">
            <h2>Core</h2>
        </div>

        <!-- Energy Lines Flowing from Core to Metahumans -->
        <div class="energy-line"></div>

        <!-- MetaArkane -->
        <div class="metahuman">
            <img src="images/metaarkane.jpg" alt="MetaArkane">
            <h2>MetaArkane</h2>
            <div class="description">
                <p>The mystical strategist, guiding the flow of cosmic energies and intellect through the Kevinverse. He symbolizes the interconnected wisdom flowing from the core to the Metahumans.</p>
            </div>
        </div>

        <!-- MetaHallyu -->
        <div class="metahuman">
            <img src="images/metahallyu.jpg" alt="MetaHallyu">
            <h2>MetaHallyu</h2>
            <div class="description">
                <p>The cultural wave, shaping influence through art and creativity. MetaHallyu draws cultural power from the Kevinverse core, spreading creativity globally.</p>
            </div>
        </div>

        <!-- MetaRyūjin -->
        <div class="metahuman">
            <img src="images/metaryujin.jpg" alt="MetaRyūjin">
            <h2>MetaRyūjin</h2>
            <div class="description">
                <p>Embodied as the dragon spirit, symbolizing resilience and strength. MetaRyūjin channels power through the Kevinverse’s core, representing honor and determination.</p>
            </div>
        </div>

        <!-- MetaKalaya -->
        <div class="metahuman">
            <img src="images/metakalaya.jpg" alt="MetaKalaya">
            <h2>MetaKalaya</h2>
            <div class="description">
                <p>The guardian of knowledge and creativity, guiding wisdom and innovation from the core, radiating cosmic energy that balances creativity and intellectual pursuit.</p>
            </div>
        </div>
    </div>

</body>
</html>
