<?php
    $page_title = "Ferrari - F8 Tributo";
    require "header.php";
    include "page_transition.php";
?>
<div id="content">
    <link rel="stylesheet" href="ferrari_f8_tributo.css">
    <section class="hero">
        <div class="hero-text">
            <h1>Ferrari F8 Tributo</h1>
            <p>The ultimate V8 supercar. Elegance and power in every curve.</p>
            <a href="#features" class="cta-button learn-more">Learn More</a>
        </div>
    </section>
    
    <section id="features" class="features">
        <h2>Key Features</h2>
        <div class="feature-list">
            <div class="feature">
                <h3>Engine</h3>
                <p>3.9L V8 twin-turbocharged engine, producing 720 hp and 770 Nm of torque.</p>
            </div>
            <div class="feature">
                <h3>0-100 km/h</h3>
                <p>2.9 seconds — accelerate from 0 to 100 km/h in just under 3 seconds.</p>
            </div>
            <div class="feature">
                <h3>Top Speed</h3>
                <p>340 km/h — reach the pinnacle of speed with unmatched stability.</p>
            </div>
            <div class="feature">
                <h3>Handling</h3>
                <p>Precision-tuned suspension and lightweight design for track-ready handling.</p>
            </div>
        </div>
    </section>

    <section class="order-video">
        <div class="video-container">
            <video autoplay muted loop disablepictureinpicture>
                <source src="video/ferrari_f8_tributo.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <a href="#order" class="cta-button order-now">Order Now</a>
    </section>

    <section class="performance">
        <h2>Unleash Performance</h2>
        <div class="performance-info">
            <p>The F8 Tributo delivers exceptional performance, honed to perfection. With cutting-edge technology, you can feel the pulse of the track with every drive.</p>
            <ul>
                <li>Turbocharged V8 engine for extreme acceleration</li>
                <li>Dynamic drive systems for a responsive experience</li>
                <li>Active aerodynamics for optimal stability at high speeds</li>
            </ul>
        </div>
    </section>

    <section class="design">
        <h2>Design That Commands Attention</h2>
        <div class="design-images">
            <img src="images/f8-interior.jpg" alt="Interior of Ferrari F8 Tributo">
            <img src="images/f8-exterior.jpg" alt="Exterior of Ferrari F8 Tributo">
        </div>
        <p>The Ferrari F8 Tributo is a symbol of speed and beauty. Every curve, every line is designed to make a statement, whether on the track or on the road.</p>
    </section>

    <section class="configurator">
        <h2>Configurator</h2>
        <p>Design your Ferrari F8 Tributo with custom options to match your style, and create a supercar that’s uniquely yours.</p>
        <a href="https://carconfigurator.ferrari.com/en_EN" class="cta-button">Go to Configurator</a>
    </section>

</div>
<script>
    document.querySelector('video').addEventListener('contextmenu', function(event) {
        event.preventDefault();
    });
</script>
<?php require "footer.php"; ?>