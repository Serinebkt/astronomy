<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width,initial-scale=1.0">
        <title>Site web d'Astronomie</title>
        <link rel="stylesheet"href="a.css">
    </head>
    <body>
    <div class="header">
    <li><a href="#accueil">Accueil</a></li>
        <li><a href="#about u">À propos</a></li>
        <li><a href="#contact">Contact</a></li>
</div>
    
        <header>
            <h1>Astronomy</h1>
            <nav class="right">
               
            </nav>
        </header>
        <section class="detailed-section">
    <h2></h2>
    <div class="contact-form">
        <form action="process_contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
</section>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Envoi de l'email
    $to = 'votre@email.com';
    $subject = 'Nouveau message de ' . $name;
    $body = "From: $name\n\nEmail: $email\n\nMessage:\n$message";
    
    if (mail($to, $subject, $body)) {
        echo 'Message envoyé avec succès.';
    } else {
        echo 'Erreur lors de l\'envoi du message.';
    }
}
?>
        <section class="center_word">
        <h2 class="cosmic-journey-title">Cosmic Journey</h2>
            <img src="nasa.jpg"alt="vaisseau spacial">
        </section>
        <section class="topic-container">
        <?php
        $topics = array(
            "Exploration Spatiale" => "astronaut-1849401-scaled-1440x0-c-default.webp",
            "Planètes et Corps Célestes" => "representation-systeme-solaire.jpg",
            "Phénomènes Astronomiques" => "fenomenos-astronomicos.jpg.webp"
        );
        foreach ($topics as $topic => $image) {
            echo "<div class='topic'>";
            echo "<h2>$topic</h2>";
            echo "<img src='$image' alt='$topic'>";
            echo "</div>";
        }
        ?>
        </section>
        <section class="introduction">
            <p> welcome to our website dedicated to the exploration of the infinite universe.Dive into the celestial mysteries and uncover the wonders of astronomy.From the dance of the stars in the depths of space to the captivating secrets of distant planets, we invite you in a cosmic journey through time ans space.Prepare to be awestrucks by the grandeur of the univers and to discover the latest scientific breakthroughouts that continually push the boundaries of our understanding.Welcome to the captivating world of Astronomy, where stars are our guids and galaxies are our frontiers.
            </p>
        </section>
          </body>
          <section id="exploration" class="detailed-section">
    <h2>Exploration Spatiale</h2>
    

    
    Exploration Spatiale
Introduction
Space exploration is the ongoing discovery and exploration of celestial structures in outer space by means of continuously evolving and growing space technology. It encompasses both manned and unmanned missions, which have been conducted by various space agencies, including NASA, ESA, Roscosmos, and others. The exploration of space has been one of the most significant endeavors of humanity, leading to groundbreaking discoveries and pushing the boundaries of our understanding of the universe.

Manned Missions
Manned space missions involve sending astronauts into space to explore, conduct experiments, and perform maintenance on space stations and spacecraft. Notable examples include the Apollo missions to the Moon, the Space Shuttle program, and the International Space Station (ISS). These missions have provided invaluable data on the effects of space travel on the human body and have paved the way for future long-duration space exploration.

Unmanned Missions
Unmanned missions, also known as robotic or automated missions, involve sending spacecraft and probes to explore distant planets, moons, asteroids, and other celestial bodies. These missions are often equipped with scientific instruments and cameras to gather data and images for analysis. Examples of successful unmanned missions include the Mars rovers (such as Curiosity and Perseverance), the Voyager probes, and the Hubble Space Telescope.

Current and Future Endeavors
Currently, space agencies around the world are working on ambitious projects to further explore and expand our presence in space. These include plans for crewed missions to Mars, the development of new spacecraft and launch systems, and the establishment of lunar bases and habitats. Additionally, private companies like SpaceX and Blue Origin are pioneering efforts to make space travel more accessible and affordable for commercial purposes.

Scientific Discoveries and Benefits
Space exploration has led to numerous scientific discoveries and technological advancements that have benefited society in countless ways. From the development of satellite communication and GPS navigation to medical research conducted in microgravity environments, the impact of space exploration on our daily lives is far-reaching. Furthermore, studying other planets and celestial bodies provides valuable insights into the origins and evolution of our own planet Earth.

Conclusion
The exploration of space is a testament to human curiosity, ingenuity, and ambition. It has opened up new frontiers of knowledge and inspired generations of scientists, engineers, and dreamers to push the boundaries of what is possible. As we continue to explore and discover the mysteries of the cosmos, the journey into space remains one of humanity's greatest adventures.

Feel free to customize and expand upon this content to fit the specific focus and tone of your website!
<img src ="pkk.jpg" alt="Exploration Spatiale">
    <img src="pkkk.jpeg" alt="Exploration Spatiale" id="pkk">
</section>








    <section id="Planet" class="detailed-section">
    <h2>Planets and Celestial Bodies</h2>
    <div class="content-container">
    <div class="text">
    The study of planets and celestial bodies stands as one of the most captivating branches of astronomy. From the rocky surface of Mars to the majestic rings of Saturn, each celestial body offers unique insights into the formation and evolution of our solar system and beyond.

Planets of the Solar System
Our solar system comprises eight planets, each with its own distinct characteristics. From the searing heat of Mercury to the icy plains of Neptune, these planets vary in size, composition, and atmosphere, providing a diverse range of environments for scientific exploration and understanding.

Inner Planets
The inner planets, including Mercury, Venus, Earth, and Mars, are characterized by their rocky surfaces and relatively thin atmospheres. Earth, the third planet from the Sun, stands as a beacon of life, with its diverse ecosystems and abundant water.

Gas Giants
Beyond the inner planets lie the gas giants: Jupiter and Saturn. These colossal planets are predominantly composed of hydrogen and helium, with thick atmospheres and swirling storms that create mesmerizing patterns across their surfaces.

Ice Giants
Uranus and Neptune, known as the ice giants, reside in the outer reaches of the solar system. Their icy compositions and unique axial tilts set them apart, offering clues to the dynamics of planetary formation in the distant reaches of space.

Dwarf Planets and Minor Bodies
In addition to the eight planets, our solar system is home to numerous dwarf planets, such as Pluto and Eris, as well as a multitude of minor bodies like asteroids, comets, and meteoroids. These smaller celestial objects play crucial roles in shaping the evolution of our solar system and understanding its broader cosmic context.

Beyond the Solar System
Beyond our solar system lie countless exoplanets orbiting distant stars, each with its own potential for harboring life or offering insights into the vast diversity of planetary systems in the cosmos. The study of these exoplanets expands our understanding of planetary formation and the conditions necessary for life to thrive.

Conclusion
Exploring planets and celestial bodies, both within our solar system and beyond, unlocks the mysteries of the cosmos and deepens our appreciation for the intricate dance of celestial objects across the vast expanse of space. From the smallest asteroid to the grandest gas giant, each celestial body holds clues to our cosmic origins and our place in the universe.
</div>
<div class="image">
<img src ="Picture1.jpg" alt="Planets and Celestial Bodies">
<img src="st.webp" alt="Planets and Celestial Bodies">
</div>
</div>
The solar system, our cosmic neighborhood, is a fascinating and diverse collection of celestial bodies orbiting around the Sun. From the scorching inferno of the innermost planets to the icy depths of the outer reaches, each member of the solar system offers a unique window into the workings of the universe.

The Sun: Our Star
At the heart of the solar system lies the Sun, a vast ball of hot plasma that provides light, heat, and energy to all the planets and objects within its gravitational embrace. The Sun's immense size and energy output make it the dominant force in our celestial neighborhood, shaping the orbits and compositions of the planets and influencing the conditions for life.

Inner Planets: The Terrestrial Worlds
Closest to the Sun are the terrestrial planets: Mercury, Venus, Earth, and Mars. These rocky worlds have solid surfaces and relatively thin atmospheres, making them distinct from the gas giants further out. Earth, the third planet from the Sun, is particularly special, harboring a rich tapestry of life and diverse ecosystems.

Gas Giants: The Giant Worlds
Beyond the asteroid belt lie the gas giants: Jupiter, Saturn, Uranus, and Neptune. These massive planets are predominantly composed of hydrogen and helium, with thick atmospheres and dynamic weather systems. Jupiter, the largest of the planets, boasts a mesmerizing array of storms, including the iconic Great Red Spot.

Dwarf Planets and Small Bodies
In addition to the major planets, the solar system is home to a variety of dwarf planets, such as Pluto and Eris, as well as countless asteroids, comets, and meteoroids. These small bodies populate the space between the planets, offering insights into the early history of the solar system and the processes of planetary formation.

Moons: Worlds in Their Own Right
Many of the planets in the solar system are accompanied by moons, or natural satellites, which orbit around them. These moons come in a variety of shapes and sizes, from the massive Ganymede, larger than the planet Mercury, to tiny, irregularly shaped bodies like Phobos and Deimos orbiting Mars.

Beyond the Solar System: Exoplanets and Interstellar Space
Beyond the boundaries of the solar system lie vast regions of interstellar space, populated by stars, nebulae, and other cosmic phenomena. Recent discoveries of exoplanets, planets orbiting distant stars, have expanded our understanding of planetary systems and raised intriguing questions about the potential for life beyond our solar neighborhood.


<section id="Phenomena" class="detailed-section">
    <h2>Phenomena Astronomical</h2>
    <div class="content-container">
        <div class="text">
        <p>Eclipses, celestial ballets of light and shadow, cast a spellbinding spectacle upon the Earth and sky. Solar eclipses, when the Moon's shadow traverses the Earth's surface, evoke a sense of wonder as day turns to night and the Sun's corona shines forth in ethereal splendor. Lunar eclipses, bathed in the subtle hues of Earth's atmosphere, offer a glimpse into the cosmic dance between our planet, its satellite, and the Sun.</p>
        <div class="phenomenon">
                    <h2>Eclipses</h2>
                    <img src="first.webp" alt="Eclipse" id="image1">
                </div>

<h2>Meteors and Meteor Showers</h2>
<p>Meteors, cosmic messengers streaking through the heavens, ignite our imaginations with their fleeting brilliance. From the debris of ancient comets to the remnants of distant asteroids, these celestial wanderers captivate observers with their luminous trails. Meteor showers, annual celestial extravaganzas, paint the night sky with a flurry of shooting stars, each one a testament to the cosmic ballet playing out above.</p>
<div class="phenomenon">
                    <img src="scnd.jpg" alt="Meteor" id="image2">
                </div>

<h2>Polar Auroras</h2>
<p>Polar auroras, the shimmering curtains of light that dance across the polar regions, are nature's own light show. Born from the interplay of solar winds and Earth's magnetic field, these ephemeral displays mesmerize with their ever-changing hues and patterns. From the emerald greens of aurora borealis to the rosy reds of aurora australis, each aurora is a testament to the beauty and power of our planet's magnetic shield.</p>
<div class="phenomenon">
                    <img src="quatr.jpg" alt="Meteor" id="image3">
                </div>

<h2>Cosmic Events</h2>
<p>Cosmic events, the grand symphonies of the universe, shape the very fabric of space and time. Supernovae, the explosive deaths of massive stars, seed the cosmos with the elements essential for life and mark the birth of new stellar nurseries. Gamma-ray bursts, the most energetic explosions in the universe, illuminate the distant reaches of space with their fleeting brilliance, revealing the secrets of the most extreme cosmic phenomena.</p>
<div class="phenomenon">
                    <img src="cing.jpg" alt="Meteor" id="image4">
                </div>

<h2>Exoplanet Discoveries</h2>
<p>Exoplanet discoveries, the ongoing quest to find other worlds beyond our solar system, open new horizons in our search for life beyond Earth. From hot Jupiters to rocky super-Earths, each new discovery brings us closer to understanding the diversity of planetary systems in the universe. With each new exoplanet detected, we gain insight into the conditions necessary for life to exist elsewhere in the cosmos.</p>
<div class="phenomenon">
                    <img src="sis.webp" alt="Meteor" id="image5">
                </div>

<h2>Gravitational Waves</h2>
<p>Gravitational waves, ripples in the fabric of spacetime, offer a new window into the universe and the phenomena that shape it. Produced by cataclysmic events such as black hole mergers and neutron star collisions, these elusive waves provide astronomers with a unique tool for studying the most extreme objects in the cosmos. From the detection of the first gravitational wave in 2015 to ongoing efforts to map the gravitational wave sky, this burgeoning field promises to revolutionize our understanding of the universe.</p>
<div class="phenomenon">
                    <img src="set.webp" alt="Meteor" id="image6">
                </div>
                <section id="contact" class="detailed-section">
    
</section>

</html>