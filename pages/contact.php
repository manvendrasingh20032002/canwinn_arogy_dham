<?php include_once('../includes/header.php'); ?>

<section class="py-5 bg-light" data-aos="fade-up">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-5">
                <h1 class="display-5 fw-bold">Contact <span class="text-primary">CanWinn</span></h1>
                <p class="lead text-muted mt-3">Koi bhi sawal ho, appointment chahiye, ya membership request hai — hum aapke liye available hain.</p>
                <div class="mt-4">
                    <p class="mb-2"><strong>Address:</strong> Gurgaon, Haryana, India</p>
                    <p class="mb-2"><strong>Phone:</strong> +91 98765 43210</p>
                    <p class="mb-2"><strong>Email:</strong> info@canwinn.com</p>
                    <p class="mb-0"><strong>Timing:</strong> Mon-Sat 9:00 AM - 8:00 PM</p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card border-0 shadow-sm rounded-4 p-4">
                    <form action="<?php echo BASE_URL; ?>backend/contact_submit.php" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control form-control-lg" placeholder="Full Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="Email Address" required>
                            </div>
                            <div class="col-md-6">
                                <input type="tel" name="phone" class="form-control form-control-lg" placeholder="Phone Number" required minlength="10" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '');" pattern="[0-9]{10}">
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control form-control-lg" rows="5" placeholder="Your Message" required></textarea>
                            </div>
                            <div class="col-12 text-end">
                                <button type="submit" name="submit_contact" class="btn btn-primary btn-lg rounded-pill px-5">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once('../includes/footer.php'); ?>