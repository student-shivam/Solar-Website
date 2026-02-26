<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About Us | SolarIndi</title>
  <meta name="description" content="Learn about SolarIndi, our mission, vision, values, and why businesses trust our solar energy solutions.">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/about.css">
  <link rel="stylesheet" href="css/footer.css">
</head>
<body>
  <?php include 'sections/navbar.php'; ?>

  <main class="about-page">
    <section class="about-hero">
      <div class="container">
        <div class="about-hero-content">
          <span class="section-kicker">About SolarIndi</span>
          <h1>Empowering Growth Through Smart Solar Energy</h1>
          <p>
            SolarIndi partners with homeowners, enterprises, and institutions to design and deploy dependable solar
            systems that reduce energy costs and accelerate sustainability goals.
          </p>
          <a href="contact.php" class="about-btn">Talk to Our Experts</a>
        </div>
      </div>
    </section>

    <section class="section-space">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-6">
            <article class="info-card">
              <div class="info-icon">M</div>
              <h2>Our Mission</h2>
              <p>
                To make clean energy accessible, affordable, and reliable by delivering high-quality solar solutions
                with strong technical execution and long-term customer support.
              </p>
            </article>
          </div>
          <div class="col-lg-6">
            <article class="info-card">
              <div class="info-icon">V</div>
              <h2>Our Vision</h2>
              <p>
                To be a trusted leader in renewable energy transformation by helping communities and businesses
                transition to a low-carbon future with confidence.
              </p>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="section-space values-section">
      <div class="container">
        <div class="section-head">
          <h2>Our Values</h2>
          <p>Principles that guide every project and every client relationship.</p>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-3">
            <article class="value-card">
              <h3>Integrity</h3>
              <p>Transparent communication, ethical business practices, and clear project accountability.</p>
            </article>
          </div>
          <div class="col-md-6 col-lg-3">
            <article class="value-card">
              <h3>Quality</h3>
              <p>Reliable materials, certified processes, and engineering standards that ensure performance.</p>
            </article>
          </div>
          <div class="col-md-6 col-lg-3">
            <article class="value-card">
              <h3>Innovation</h3>
              <p>Modern technologies and smart energy strategies tailored to each site and requirement.</p>
            </article>
          </div>
          <div class="col-md-6 col-lg-3">
            <article class="value-card">
              <h3>Customer Focus</h3>
              <p>Responsive service and long-term support built around real operational and financial goals.</p>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="section-space">
      <div class="container">
        <div class="row align-items-center g-4 g-lg-5">
          <div class="col-lg-6">
            <img src="images/hero2.png" alt="Large scale solar facility" class="about-feature-image">
          </div>
          <div class="col-lg-6">
            <div class="section-head left">
              <h2>Why Choose Us</h2>
            </div>
            <ul class="why-list">
              <li>End-to-end service from planning and design to commissioning and support</li>
              <li>Experienced team for residential, commercial, and industrial solar projects</li>
              <li>Performance-focused engineering with strict quality and safety standards</li>
              <li>Fast project delivery with clear timelines and proactive communication</li>
              <li>Dedicated after-sales support and system optimization guidance</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="section-space team-section">
      <div class="container">
        <div class="section-head">
          <h2>Our Leadership Team</h2>
          <p>Professionals committed to innovation, execution, and customer success.</p>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-3">
            <article class="team-card">
              <img src="images/about1.png" alt="Team member profile">
              <h3>Rahul Mehta</h3>
              <p>Director - Operations</p>
            </article>
          </div>
          <div class="col-md-6 col-lg-3">
            <article class="team-card">
              <img src="images/hero1.png" alt="Team member profile">
              <h3>Nisha Verma</h3>
              <p>Head - Project Delivery</p>
            </article>
          </div>
          <div class="col-md-6 col-lg-3">
            <article class="team-card">
              <img src="images/hero2.png" alt="Team member profile">
              <h3>Arjun Sinha</h3>
              <p>Head - Engineering</p>
            </article>
          </div>
          <div class="col-md-6 col-lg-3">
            <article class="team-card">
              <img src="images/hero3.png" alt="Team member profile">
              <h3>Priya Kapoor</h3>
              <p>Manager - Client Success</p>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="cta-strip">
      <div class="container">
        <div class="cta-strip-inner">
          <div>
            <h2>Ready to Switch to Solar?</h2>
            <p>Get a customized proposal and start reducing your energy costs today.</p>
          </div>
          <a href="contact.php" class="about-btn">Get Free Consultation</a>
        </div>
      </div>
    </section>
  </main>

  <?php include 'sections/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
