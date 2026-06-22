<?php
$exercises = [
    [
        "name" => "Jumping Jacks",
        "emoji" => "⭐",
        "color" => "#FF6B9D",
        "bg" => "#FFF0F6",
        "reps" => "20 times",
        "desc" => "Jump with arms wide open like a starfish! Great for your heart.",
        "tip" => "Try counting out loud!"
    ],
    [
        "name" => "Frog Jumps",
        "emoji" => "🐸",
        "color" => "#4CAF50",
        "bg" => "#F0FFF0",
        "reps" => "10 jumps",
        "desc" => "Squat low like a frog, then leap as far as you can!",
        "tip" => "Can you croak like a frog too?"
    ],
    [
        "name" => "Bear Crawl",
        "emoji" => "🐻",
        "color" => "#FF9800",
        "bg" => "#FFF8F0",
        "reps" => "Crawl 5 steps",
        "desc" => "Get on all fours and crawl forward like a big strong bear!",
        "tip" => "Keep your knees off the floor!"
    ],
    [
        "name" => "Superhero Pose",
        "emoji" => "🦸",
        "color" => "#7C4DFF",
        "bg" => "#F5F0FF",
        "reps" => "Hold 10 seconds",
        "desc" => "Stand tall, hands on hips, chest out. You ARE the hero!",
        "tip" => "Pick your favourite superhero name!"
    ],
    [
        "name" => "Bunny Hops",
        "emoji" => "🐰",
        "color" => "#E91E8C",
        "bg" => "#FFF0FA",
        "reps" => "15 hops",
        "desc" => "Put your feet together and hop hop hop like a fluffy bunny!",
        "tip" => "Try hopping backwards too!"
    ],
    [
        "name" => "Mountain Climber",
        "emoji" => "🏔️",
        "color" => "#00BCD4",
        "bg" => "#F0FBFF",
        "reps" => "20 seconds",
        "desc" => "In a plank position, bring knees to chest one at a time, fast!",
        "tip" => "Pretend you're climbing a huge mountain!"
    ],
];

$tips = [
    "💧 Drink water before, during, and after exercise!",
    "😴 Sleep 9–11 hours every night to help your muscles grow!",
    "🍎 Eat fruits and veggies to fuel your body like a rocket!",
    "🧘 Always stretch before you start — it keeps you safe!",
    "😄 Exercise is more fun with a friend or family member!",
];

$random_tip = $tips[array_rand($tips)];

$day = date('l');
$daily_challenge = match(true) {
    in_array($day, ['Monday', 'Thursday']) => ["Do 3 rounds of jumping jacks!", "⚡"],
    in_array($day, ['Tuesday', 'Friday']) => ["Try the bear crawl across the room!", "🐻"],
    in_array($day, ['Wednesday', 'Saturday']) => ["Hold the superhero pose for 30 seconds!", "🦸"],
    default => ["Stretch for 5 minutes and relax!", "🧘"],
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitKids — Move, Play, Grow!</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Nunito', sans-serif;
            background: #FFFBF2;
            color: #2D2D2D;
            overflow-x: hidden;
        }

        /* HEADER */
        header {
            background: linear-gradient(135deg, #FF6B9D 0%, #FF9A3C 100%);
            padding: 2rem 1.5rem 3.5rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        header::before {
            content: '';
            position: absolute;
            bottom: -2px; left: 0; right: 0;
            height: 50px;
            background: #FFFBF2;
            clip-path: ellipse(55% 100% at 50% 100%);
        }
        .header-badge {
            display: inline-block;
            background: rgba(255,255,255,0.25);
            color: #fff;
            font-size: 0.8rem;
            font-weight: 800;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            padding: 0.35rem 1rem;
            border-radius: 99px;
            margin-bottom: 1rem;
        }
        header h1 {
            font-size: clamp(2.4rem, 7vw, 4rem);
            font-weight: 900;
            color: #fff;
            line-height: 1.1;
            text-shadow: 0 3px 10px rgba(0,0,0,0.12);
        }
        header h1 span { color: #FFF3A0; }
        header p {
            color: rgba(255,255,255,0.92);
            font-size: 1.15rem;
            font-weight: 600;
            margin-top: 0.75rem;
        }
        .header-icons {
            margin-top: 1.2rem;
            font-size: 2rem;
            letter-spacing: 0.4rem;
        }

        /* MAIN LAYOUT */
        main {
            max-width: 960px;
            margin: 0 auto;
            padding: 2rem 1.25rem 4rem;
        }

        /* SECTION HEADINGS */
        .section-title {
            font-size: 1.5rem;
            font-weight: 900;
            color: #2D2D2D;
            margin-bottom: 1.25rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        /* DAILY CHALLENGE BANNER */
        .challenge-banner {
            background: linear-gradient(135deg, #7C4DFF, #E040FB);
            border-radius: 20px;
            padding: 1.5rem 1.75rem;
            color: #fff;
            display: flex;
            align-items: center;
            gap: 1.25rem;
            margin-bottom: 2.5rem;
        }
        .challenge-emoji {
            font-size: 3rem;
            flex-shrink: 0;
        }
        .challenge-label {
            font-size: 0.75rem;
            font-weight: 800;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            opacity: 0.8;
            margin-bottom: 0.25rem;
        }
        .challenge-text {
            font-size: 1.2rem;
            font-weight: 800;
        }
        .challenge-day {
            font-size: 0.9rem;
            opacity: 0.75;
            margin-top: 0.2rem;
        }

        /* TIP CARD */
        .tip-card {
            background: #FFF8DC;
            border: 2px dashed #FFD700;
            border-radius: 16px;
            padding: 1rem 1.5rem;
            font-size: 1rem;
            font-weight: 700;
            color: #5A4200;
            margin-bottom: 2.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        .tip-label {
            background: #FFD700;
            color: #5A4200;
            font-size: 0.7rem;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            padding: 0.2rem 0.6rem;
            border-radius: 99px;
            white-space: nowrap;
        }

        /* EXERCISE CARDS GRID */
        .exercise-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(270px, 1fr));
            gap: 1.25rem;
            margin-bottom: 3rem;
        }
        .exercise-card {
            border-radius: 20px;
            padding: 1.5rem;
            border: 2.5px solid transparent;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            cursor: default;
            position: relative;
            overflow: hidden;
        }
        .exercise-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 28px rgba(0,0,0,0.1);
        }
        .card-emoji {
            font-size: 2.8rem;
            margin-bottom: 0.75rem;
            display: block;
        }
        .card-name {
            font-size: 1.2rem;
            font-weight: 900;
            margin-bottom: 0.3rem;
        }
        .card-reps {
            display: inline-block;
            font-size: 0.75rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            padding: 0.2rem 0.7rem;
            border-radius: 99px;
            margin-bottom: 0.6rem;
        }
        .card-desc {
            font-size: 0.9rem;
            font-weight: 600;
            line-height: 1.5;
            color: #444;
            margin-bottom: 0.6rem;
        }
        .card-tip {
            font-size: 0.8rem;
            font-weight: 700;
            opacity: 0.7;
            font-style: italic;
        }

        /* WHY EXERCISE SECTION */
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 1rem;
            margin-bottom: 3rem;
        }
        .benefit-card {
            background: #fff;
            border-radius: 16px;
            padding: 1.25rem 1rem;
            text-align: center;
            border: 2px solid #F0EDE8;
            transition: border-color 0.2s;
        }
        .benefit-card:hover { border-color: #FF6B9D; }
        .benefit-icon { font-size: 2.2rem; margin-bottom: 0.5rem; }
        .benefit-title {
            font-size: 0.95rem;
            font-weight: 800;
            color: #2D2D2D;
            margin-bottom: 0.3rem;
        }
        .benefit-desc {
            font-size: 0.8rem;
            font-weight: 600;
            color: #777;
            line-height: 1.4;
        }

        /* SAFETY RULES */
        .safety-box {
            background: #F0FFF8;
            border-left: 5px solid #4CAF50;
            border-radius: 0 16px 16px 0;
            padding: 1.5rem 1.75rem;
            margin-bottom: 2.5rem;
        }
        .safety-box h2 {
            font-size: 1.2rem;
            font-weight: 900;
            color: #1B5E20;
            margin-bottom: 1rem;
        }
        .safety-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 0.6rem;
        }
        .safety-list li {
            font-size: 0.95rem;
            font-weight: 700;
            color: #2E7D32;
            display: flex;
            align-items: flex-start;
            gap: 0.6rem;
        }
        .safety-list li span { flex-shrink: 0; }

        /* FOOTER */
        footer {
            background: #2D2D2D;
            color: rgba(255,255,255,0.7);
            text-align: center;
            padding: 1.75rem 1.25rem;
            font-size: 0.85rem;
            font-weight: 600;
        }
        footer strong { color: #FF6B9D; }
    </style>
</head>
<body>

<header>
    <div class="header-badge">🏃 Kids Fitness Zone</div>
    <h1>Move. Play. <span>Grow!</span></h1>
    <p>Fun exercises for kids aged 5–12 🎉</p>
    <div class="header-icons">💪 🏃 🤸 ⚽ 🎽</div>
</header>

<main>

    <!-- DAILY CHALLENGE (PHP-generated) -->
    <div class="challenge-banner">
        <div class="challenge-emoji"><?= $daily_challenge[1] ?></div>
        <div>
            <div class="challenge-label">⚡ Today's Challenge — <?= $day ?></div>
            <div class="challenge-text"><?= htmlspecialchars($daily_challenge[0]) ?></div>
            <div class="challenge-day">Can you do it before dinner tonight?</div>
        </div>
    </div>

    <!-- DAILY TIP (PHP-generated randomly) -->
    <div class="tip-card">
        <span class="tip-label">Tip of the Day</span>
        <?= htmlspecialchars($random_tip) ?>
    </div>

    <!-- EXERCISE CARDS (PHP loop) -->
    <div class="section-title">🏋️ Today's Exercises</div>
    <div class="exercise-grid">
        <?php foreach ($exercises as $ex): ?>
        <div class="exercise-card" style="background: <?= $ex['bg'] ?>; border-color: <?= $ex['color'] ?>30;">
            <span class="card-emoji"><?= $ex['emoji'] ?></span>
            <div class="card-name" style="color: <?= $ex['color'] ?>"><?= htmlspecialchars($ex['name']) ?></div>
            <span class="card-reps" style="background: <?= $ex['color'] ?>20; color: <?= $ex['color'] ?>"><?= htmlspecialchars($ex['reps']) ?></span>
            <p class="card-desc"><?= htmlspecialchars($ex['desc']) ?></p>
            <p class="card-tip">💡 <?= htmlspecialchars($ex['tip']) ?></p>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- WHY EXERCISE -->
    <div class="section-title">🌟 Why Exercise is Amazing!</div>
    <div class="benefits-grid">
        <div class="benefit-card">
            <div class="benefit-icon">🧠</div>
            <div class="benefit-title">Boosts Your Brain</div>
            <div class="benefit-desc">Exercise helps you focus better in school!</div>
        </div>
        <div class="benefit-card">
            <div class="benefit-icon">😄</div>
            <div class="benefit-title">Makes You Happy</div>
            <div class="benefit-desc">Moving your body releases happy chemicals!</div>
        </div>
        <div class="benefit-card">
            <div class="benefit-icon">💪</div>
            <div class="benefit-title">Builds Muscles</div>
            <div class="benefit-desc">Strong muscles protect your bones and joints!</div>
        </div>
        <div class="benefit-card">
            <div class="benefit-icon">❤️</div>
            <div class="benefit-title">Healthy Heart</div>
            <div class="benefit-desc">Your heart is a muscle — keep it strong!</div>
        </div>
        <div class="benefit-card">
            <div class="benefit-icon">😴</div>
            <div class="benefit-title">Better Sleep</div>
            <div class="benefit-desc">Exercise helps you sleep like a champion!</div>
        </div>
    </div>

    <!-- SAFETY RULES -->
    <div class="safety-box">
        <h2>🛡️ Safety Rules — Always Follow These!</h2>
        <ul class="safety-list">
            <li><span>✅</span> Always warm up with light stretching for 2–3 minutes first.</li>
            <li><span>✅</span> Drink water — before, during, and after your workout.</li>
            <li><span>✅</span> If something hurts, stop and tell a grown-up right away.</li>
            <li><span>✅</span> Wear comfortable shoes and clothes you can move in freely.</li>
            <li><span>✅</span> Make sure you have enough space around you before starting.</li>
            <li><span>✅</span> Exercise with a friend or family member whenever you can!</li>
        </ul>
    </div>

</main>

<footer>
    <p>Made with ❤️ for young athletes everywhere &nbsp;|&nbsp; <strong>FitKids</strong> &nbsp;|&nbsp; Stay active, stay awesome!</p>
    <p style="margin-top: 0.4rem; font-size: 0.78rem; opacity: 0.5;">
        PHP-powered · Daily challenge updates every day · Tip refreshes on every page load
    </p>
</footer>

</body>
</html>
