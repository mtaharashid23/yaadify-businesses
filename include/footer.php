<footer class="footer-mbl show--mbl">
    <ul class="footer-mbl__list">
        <li>
            <a href="" class="">
                <i class="fa-regular fa-house"></i>
            </a>
        </li>
        <li>
            <a href="" class="">
                <i class="fa-regular fa-calendar"></i>
            </a>
        </li>
        <li>
            <a href="" class="">
                <i class="fa-regular fa-heart"></i>
            </a>
        </li>
        <li>
            <a href="" class="">
                <i class="fa-regular fa-circle-user"></i>
            </a>
        </li>
    </ul>
</footer>

<!-- Footer Start -->
<footer class="footer hide--mbl">
    <div class="container">
        <div class="footer-links footer--head">
            <a href="" class="footer-links__logo">
                <img src="images/logo-white.png" alt="image" class="img-fluid">
            </a>
            <div class="footer-links__contact">
                <h3>Yaadgaar Technologies LLC</h3>
                <a href="mailto:info@yaadify.com">Email: info@yaadify.com</a>
                <a href="tel:+1 507 280 1281">Phone: +1 507 280 1281</a>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-4 col-6">
                <div class="footer-links">
                    <h3>KSA:</h3>
                    <ul>
                        <li>
                            <a href="">
                                Office 905, 5th Floor, <br>
                                Verdun Tower, 7775 King Fahd Rd, <br>
                                Al Olaya, <br>
                                Riyadh 12212, Saudi Arabia
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="footer-links">
                    <h3>UAE:</h3>
                    <ul>
                        <li>
                            <a href="">
                                1Suite 402, Dusseldorf Business, <br> Point 1, Al Barsha Rd, Al-Barsha, <br>
                                Dubai, <br> United Arab Emirate
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="footer-links">
                    <h3>USA:</h3>
                    <ul>
                        <li>
                            <a href="">
                                16192 Costal Highway, <br> Lewes, Delaware 19958 <br> United State of America
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-download">
            <div class="footer-download__app">
                <div>
                    <h3>Download our apps!</h3>
                    <p>Created for convenience and ease to make travel memorable.</p>
                </div>
                <img src="images/app2.png" alt="image" class="img-fluid">
            </div>
            <div class="footer-download__payment">
                <h3>Payment & Security</h3>
                <figure>
                    <img src="images/payment1.png" alt="image" class="img-fluid">
                    <img src="images/payment2.png" alt="image" class="img-fluid">
                    <img src="images/payment3.png" alt="image" class="img-fluid">
                    <img src="images/payment4.png" alt="image" class="img-fluid">
                    <img src="images/payment5.png" alt="image" class="img-fluid">
                    <img src="images/payment6.png" alt="image" class="img-fluid">
                </figure>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
<a href="" class="whatsappBtn">
    <i class="fa-brands fa-whatsapp"></i>
    WhatsApp Us
</a>

<a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="emailBtn">
    <i class="fa-regular fa-envelope"></i>
</a>

<!-- Popup Start -->
<div class="popupForm modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tell us about your requirements</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row inputFields">
                        <div class="col-md-6">
                            <div class="inputField">
                                <label for="first-name">First Name <span>*</span></label>
                                <input type="text" placeholder="First Name" id="first-name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputField">
                                <label for="last-name">Last Name <span>*</span></label>
                                <input type="text" placeholder="Last Name" id="last-name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputField">
                                <label for="email">Email <span>*</span></label>
                                <input type="email" placeholder="Email" id="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputField">
                                <label for="phone">Phone Number <span>*</span></label>
                                <input type="tel" placeholder="Phone Number" id="phone">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="inputField">
                                <label for="message">Your Message <span>*</span></label>
                                <textarea placeholder="Your Message" rows="4" id="message"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="themeBtn mx-auto">Send Email</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Popup End -->
<?php include 'include/js.php'; ?>

</body>

</html>