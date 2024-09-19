<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metahumans</title>
    <style>
        body {
            background-color: #0d0d0d;
            font-family: 'Arial', sans-serif;
            color: white;
            text-align: center;
        }
        .metahuman-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding: 20px;
        }
        .metahuman {
            margin: 20px;
            background-color: #1a1a1a;
            border-radius: 10px;
            width: 300px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
            transition: transform 0.3s;
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
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
        }
        .description {
            padding: 10px;
            background-color: #333;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <h1>Meet the Metahumans</h1>
    
    <div class="metahuman-container">
        <!-- MetaArkane -->
        <div class="metahuman">
            <img src="images/metaarkane.jpg" alt="MetaArkane">
            <h2>MetaArkane</h2>
            <div class="description">
                <p>The mystical strategist, adorned with ethereal energy and ancient wisdom. His power flows through cosmic forces and Thai temple colors, symbolizing intellect and strategy.</p>
            </div>
        </div>

        <!-- MetaHallyu -->
        <div class="metahuman">
            <img src="images/metahallyu.jpg" alt="MetaHallyu">
            <h2>MetaHallyu</h2>
            <div class="description">
                <p>The embodiment of the Korean wave, harnessing influence through culture, art, and tradition. Cosmic energy blends with Thai and Korean aesthetics.</p>
            </div>
        </div>

        <!-- MetaRyūjin -->
        <div class="metahuman">
            <img src="images/metaryujin.jpg" alt="MetaRyūjin">
            <h2>MetaRyūjin</h2>
            <div class="description">
                <p>The spirit of Japan’s resilience, forged by strength and honor. His cosmic presence is fierce, with dragon-like energy and elements of both Japanese and Thai traditions.</p>
            </div>
        </div>

        <!-- MetaKalaya -->
        <div class="metahuman">
            <img src="images/metakalaya.jpg" alt="MetaKalaya">
            <h2>MetaKalaya</h2>
            <div class="description">
                <p>The guardian of knowledge and creativity, radiating wisdom through the flow of Thai temple colors. Her presence is serene and full of cosmic light.</p>
            </div>
        </div>
    </div>

</body>
</html>
