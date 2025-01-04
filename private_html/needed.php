<?php include 'config.php'; ?>
<?php include 'header.php'; ?>

   

     <!-- About us container starts -->
      <section id="about-container">
        <div class="about-img">
            <img src="images/about3.jpg" alt="">
        </div>
        <div class="about-text">
            <h2>Who we are !!!</h2>
            <p>We are a forward-thinking IT startup providing innovative software development, robust cybersecurity, and advanced cloud solutions. Our mission is to empower businesses through cutting-edge technology and exceptional customer service. </p>
            <h2>What do we do !!!</h2>
            <p>We excel your idea into digital reality using innovative technology solutions, including software development, cybersecurity, and cloud services, tailored to enhance efficiency, security, and scalability for businesses of all sizes. </p>
        </div>

      </section>
     <!-- About us container ends -->



     <!-- Aweseome Feature starts -->
     <section id="features">
         <h1>Awesome Features</h1>
         <p></p>
         <div class="feat-base">
             <div class="feat-box">
                 <i class="fa-solid fa-headset"></i>
                <h3>Easy To Contact</h3>
                <p>Have a project in mind or just need a tech consultation? Reach out to us, and let's innovate together! </p>
            </div>
            <div class="feat-box">
                <i class="fa-solid fa-mobile-screen-button"></i>
                <h3>Mobile Friendly</h3>
                <p>We create our servicves easily visible through mobile devices.  </p>
            </div>
            <div class="feat-box">
                <i class="fa-solid fa-blog"></i>
                <h3>Blogs</h3>
                <p>They are our experiences and knowledge gained through learning and working </p>
            </div>
        </div>
        
    </section>

<section class="contact" id="Contact">

<h1 class="heading">Get in touch</h1>

<div class="row">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.3767545505507!2d85.33404187541294!3d27.70565152556637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199e2b0109e5%3A0x9e318e137cc1bc2e!2sNew%20Basanta%20Nursery!5e0!3m2!1sen!2snp!4v1724510062080!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <form action="">

        <div class="inputBox">
            <input type="text" required>
            <label>name</label>
        </div>
        <div class="inputBox">
            <input type="email" required>
            <label>email</label>
        </div>
        <div class="inputBox">
            <input type="number" required>
            <label>number</label>
        </div>
        <div class="inputBox">
            <textarea required name="" id="" cols="30" rows="10"></textarea>
            <label>message</label>
        </div>

        <input type="submit" value="send message" class="btn">

    </form>

</div>

    <!-- Experts profile starts -->
     <section id="experts">
        <h1>Organization Experts</h1>
        <div class="expert-box">

            <div class="profile">
                <img src="images/" alt="">
                <h6>Darwin Rawal</h6>
                <p>Creative Head</p>
                <div class="prof-links">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
            <div class="profile">
                <img src="images/pro2.webp" alt="">
                <h6>Shiv</h6>
                <p>Data AnalysisExpert</p>
                <div class="prof-links">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
            <div class="profile">
                <img src="images/pro3.webp" alt="">
                <h6>Prem</h6>
                <p>Full Stack Expert</p>
                <div class="prof-links">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
            <div class="profile">
                <img src="images/pro4.webp" alt="">
                <h6>Nisha</h6>
                <p>Design Expert</p>
                <div class="prof-links">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>

        </div>
     </section>
    <?php
//    include footer file
    include "footer.php";
?>
