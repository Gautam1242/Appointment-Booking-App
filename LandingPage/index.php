<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Indian Multispecialty Hospital</title>
    <link rel="stylesheet" href="../StyleSheets/index.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="container-fluid">
      <!-- Navbar -->
      <nav class="navbar">
        <div class="logo">
          <img
            src="../images/healthcare.png"
            alt=""
            width="70px"
            height="70px"
            style="margin-top: 10px"
          />
        </div>
        <ul id="sidemenu">
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#doctors">Doctors</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><button class="btn btn-primary"><a href="../LogSign/login.php" class="text-light">Login / Sign Up</a></button></li>
          <i class="fa-solid fa-xmark" onclick="closeMenu()"></i>
        </ul>
        <i class="fa-solid fa-bars" id="first-nav" onclick="openMenu()"></i>
      </nav>

      <!-- Welcome Section -->
      <section class="welcome-section">
        <div class="welcome-content">
          <h2>Comprehensive Healthcare for You</h2>
          <p>
            Our hospital offers a wide range of healthcare services, from
            preventive care to complex surgeries. We are dedicated to ensuring
            you and your loved ones receive the best medical care.
          </p>
          <button class="appointment-btn">Book an Appointment</button>
        </div>
      </section>

      <!-- About Section -->
      <div id="about">
        <div class="container">
          <div class="row">
            <div class="about-col-1">
              <img src="../images/about-section-bg.png" alt="Hospital Image" />
            </div>
            <div class="about-col-2">
              <h2>About Our Hospital</h2>
              <p>
                Our hospital has been at the forefront of healthcare in India,
                offering personalized treatment for over 25 years. With
                state-of-the-art facilities, we treat everything from minor
                ailments to life-threatening diseases. Our dedicated team of
                doctors, nurses, and support staff are committed to providing
                the highest quality care in a compassionate and professional
                manner. We continuously strive to incorporate the latest medical
                advancements and technologies to ensure that our patients
                receive the best possible outcomes. Whether you're seeking
                routine care or specialized treatment, you can trust us to be
                your partner in health and well-being.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Services Section -->
      <section id="services" class="services-section">
        <h2>Our Services</h2>
        <div class="service-container">
          <div class="service-box">
            <div class="service-symbol">
              <i class="fas fa-stethoscope"></i>
            </div>
            <div class="service-content">
              <h3>General Consultation</h3>
              <p>
                We offer consultations across all specialties, from general
                medicine to specialized care, ensuring your health is our top
                priority.
              </p>
            </div>
          </div>
          <div class="service-box">
            <div class="service-symbol">
              <i class="fas fa-heart"></i>
            </div>
            <div class="service-content">
              <h3>Cardiology</h3>
              <p>
                Our expert cardiologists provide comprehensive heart care, from
                diagnostics to advanced treatments.
              </p>
            </div>
          </div>
          <div class="service-box">
            <div class="service-symbol">
              <i class="fas fa-brain"></i>
            </div>
            <div class="service-content">
              <h3>Neurology</h3>
              <p>
                Our neurology department specializes in treating brain and nerve
                disorders with advanced therapeutic options.
              </p>
            </div>
          </div>
          <div class="service-box">
            <div class="service-symbol">
              <i class="fas fa-bone"></i>
            </div>
            <div class="service-content">
              <h3>Orthopedics</h3>
              <p>
                We provide world-class orthopedic services including joint
                replacement surgeries and sports injury care.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Doctors Section -->
      <section id="doctors" class="staff-section">
        <h2>Meet Our Doctors</h2>
        <div class="doctor-profile">
          <img src="../images/doctor-avatar.png" alt="Doctor Image" />
          <h3>Dr. Amit Kumar Singh</h3>
          <p>Specialist in Cardiology</p>
        </div>
        <div class="doctor-profile">
          <img src="../images/doctor-avatar2.png" alt="Doctor Image" />
          <h3>Dr. Rahul Sharma</h3>
          <p>Specialist in Neurology</p>
        </div>
        <div class="doctor-profile">
          <img src="../images/doctor-avatar3.png" alt="Doctor Image" />
          <h3>Dr. Rajeev Singh</h3>
          <p>Orthopedic Surgeon</p>
        </div>
      </section>

      <!-- Contact Section -->
      <section id="contact" class="contact-section">
        <div class="contact-box">
          <h2>Contact Us for Medical Assistance</h2>
          <p>
            We are here to assist you with all your healthcare needs. Please
            reach out to schedule an appointment or for any inquiries.
          </p>
          <form>
            <div class="form-group">
              <input type="text" name="name" placeholder="Your Name" required />
            </div>
            <div class="form-group">
              <input
                type="email"
                name="email"
                placeholder="Your Email"
                required
              />
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
          </form>
        </div>
      </section>

      <footer class="w-full">
        <div>
          <p>Copyright <i class="fa-regular fa-copyright"></i> 2024 Gautam Shah .
            All rights reserved .</p>

          <div class="social-icons">
            <a href="https://www.facebook.com/" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://x.com/?lang=en" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.linkedin.com/" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </footer>
    </div>

    <script
      src="https://kit.fontawesome.com/eb93dfa716.js"
      crossorigin="anonymous"
    ></script>

    <script>
      var sidemenu = document.getElementById("sidemenu");

      function openMenu() {
        sidemenu.style.right = "0";
      }
      function closeMenu() {
        sidemenu.style.right = "-200px";
      }
    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
