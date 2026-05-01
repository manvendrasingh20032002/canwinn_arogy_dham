<?php include_once('../../includes/header.php'); ?>

<main>
    <!-- Hero Header -->
    <section class="page-header" style="background: linear-gradient(135deg, #2b6cb0 0%, #4c51bf 100%); padding: 80px 0;">
        <div class="container text-center text-white">
            <p class="text-uppercase fw-semibold letter-spacing-2 mb-3" data-aos="fade-down" data-aos-delay="100">Expert Care, Quick Booking</p>
            <h1 class="display-5 fw-bold mb-3" data-aos="fade-up" data-aos-delay="200">Book Your Doctor Appointment</h1>
            <p class="lead mb-4" data-aos="fade-up" data-aos-delay="300">Instant appointment booking with our top specialists across all CanWinn locations.</p>
            <div class="d-flex justify-content-center gap-3" data-aos="fade-up" data-aos-delay="400">
                <a href="#appointment-form" class="btn btn-light btn-lg rounded-pill px-4">Book Appointment</a>
                <a href="#appointment-benefits" class="btn btn-outline-light btn-lg rounded-pill px-4">Why Book With Us</a>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="appointment-benefits" class="py-5 bg-light">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-4 rounded shadow-sm bg-white h-100">
                        <i class="fas fa-user-md text-primary mb-3" style="font-size: 36px;"></i>
                        <h5>Trusted Specialists</h5>
                        <p class="text-muted">Book consultations with certified doctors and experienced medical professionals.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-4 rounded shadow-sm bg-white h-100">
                        <i class="fas fa-calendar-check text-primary mb-3" style="font-size: 36px;"></i>
                        <h5>Fast Scheduling</h5>
                        <p class="text-muted">Choose your preferred date and time, and get confirmed instantly.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-4 rounded shadow-sm bg-white h-100">
                        <i class="fas fa-headset text-primary mb-3" style="font-size: 36px;"></i>
                        <h5>24/7 Support</h5>
                        <p class="text-muted">Our care team is available round-the-clock for assistance and follow-up.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Appointment Form Section -->
    <section class="py-5">
        <div class="container">
            <div class="row gy-4 align-items-start">
                <div class="col-lg-8" data-aos="fade-right" id="appointment-form">
                    <div class="card border-0 shadow-lg overflow-hidden">
                        <div class="card-body p-5">
                            <div class="mb-4">
                                <span class="badge bg-primary rounded-pill py-2 px-4">Book Your Visit</span>
                                <h2 class="mt-3 fw-bold">Secure Your Appointment in Minutes</h2>
                                <p class="text-muted">Fill in your details and select a specialist, clinic, date and time.</p>
                            </div>
                            <form id="appointmentForm" action="<?php echo BASE_URL; ?>modules/appointment/submit.php" method="POST" novalidate>

                                <div class="row g-3 mb-4">
                                    <div class="col-md-6">
                                        <label for="patient_name" class="form-label">Full Name *</label>
                                        <input type="text" class="form-control form-control-lg" id="patient_name" name="patient_name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">Phone Number *</label>
                                        <input type="tel" class="form-control form-control-lg" id="phone" name="phone" required minlength="10" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '');" pattern="[0-9]{10}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control form-control-lg" id="email" name="email">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="age" class="form-label">Age *</label>
                                        <input type="number" class="form-control form-control-lg" id="age" name="age" min="1" max="120" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="gender" class="form-label">Gender *</label>
                                        <select class="form-select form-select-lg" id="gender" name="gender" required>
                                            <option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="blood_group" class="form-label">Blood Group</label>
                                        <select class="form-select form-select-lg" id="blood_group" name="blood_group">
                                            <option value="">Select Blood Group</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row g-3 mb-4">
                                    <div class="col-md-6">
                                        <label for="speciality" class="form-label">Medical Speciality *</label>
                                        <select class="form-select form-select-lg" id="speciality" name="speciality" required>
                                            <option value="">Select Speciality</option>
                                            <option value="General Medicine">General Medicine</option>
                                            <option value="Cardiology">Cardiology</option>
                                            <option value="Orthopedics">Orthopedics</option>
                                            <option value="Pediatrics">Pediatrics</option>
                                            <option value="Gynecology">Gynecology</option>
                                            <option value="Dermatology">Dermatology</option>
                                            <option value="ENT">ENT</option>
                                            <option value="Ophthalmology">Ophthalmology</option>
                                            <option value="Dentistry">Dentistry</option>
                                            <option value="Psychiatry">Psychiatry</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="doctor_name" class="form-label">Preferred Doctor</label>
                                        <select class="form-select form-select-lg" id="doctor_name" name="doctor_name">
                                            <option value="">Any Available Doctor</option>
                                            <option value="Dr. Rajesh Kumar">Dr. Rajesh Kumar (General Medicine)</option>
                                            <option value="Dr. Priya Singh">Dr. Priya Singh (Pediatrics)</option>
                                            <option value="Dr. Amit Verma">Dr. Amit Verma (Cardiology)</option>
                                            <option value="Dr. Meera Patel">Dr. Meera Patel (Pulmonology)</option>
                                            <option value="Dr. Anil Gupta">Dr. Anil Gupta (Cardiology)</option>
                                            <option value="Dr. Vikram Singh">Dr. Vikram Singh (Gastroenterology)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row g-3 mb-4">
                                    <div class="col-md-6">
                                        <label for="appointment_date" class="form-label">Preferred Date *</label>
                                        <input type="date" class="form-control form-control-lg" id="appointment_date" name="appointment_date" min="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d', strtotime('+30 days')); ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="appointment_time" class="form-label">Preferred Time *</label>
                                        <select class="form-select form-select-lg" id="appointment_time" name="appointment_time" required>
                                            <option value="">Select Time Slot</option>
                                            <option value="09:00">9:00 AM</option>
                                            <option value="09:30">9:30 AM</option>
                                            <option value="10:00">10:00 AM</option>
                                            <option value="10:30">10:30 AM</option>
                                            <option value="11:00">11:00 AM</option>
                                            <option value="11:30">11:30 AM</option>
                                            <option value="12:00">12:00 PM</option>
                                            <option value="14:00">2:00 PM</option>
                                            <option value="14:30">2:30 PM</option>
                                            <option value="15:00">3:00 PM</option>
                                            <option value="15:30">3:30 PM</option>
                                            <option value="16:00">4:00 PM</option>
                                            <option value="16:30">4:30 PM</option>
                                            <option value="17:00">5:00 PM</option>
                                            <option value="17:30">5:30 PM</option>
                                            <option value="18:00">6:00 PM</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="appointment_type" class="form-label">Appointment Type *</label>
                                        <select class="form-select form-select-lg" id="appointment_type" name="appointment_type" required>
                                            <option value="">Select Type</option>
                                            <option value="In-Person Consultation">In-Person Consultation</option>
                                            <option value="Video Consultation">Video Consultation</option>
                                            <option value="Tele-Consultation">Tele-Consultation</option>
                                            <option value="Follow-up Visit">Follow-up Visit</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="polyclinic" class="form-label">Preferred Polyclinic *</label>
                                        <select class="form-select form-select-lg" id="polyclinic" name="polyclinic" required>
                                            <option value="">Select Polyclinic</option>
                                            <option value="Geeta Bhawan Polyclinic">Geeta Bhawan Polyclinic</option>
                                            <option value="Ashok Vihar Polyclinic">Ashok Vihar Polyclinic</option>
                                            <option value="Sector 45 Polyclinic">Sector 45 Polyclinic</option>
                                            <option value="Rajendra Park Polyclinic">Rajendra Park Polyclinic</option>
                                            <option value="4/8 Marla Polyclinic">4/8 Marla Polyclinic</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="symptoms" class="form-label">Symptoms / Reason for Visit *</label>
                                    <textarea class="form-control form-control-lg" id="symptoms" name="symptoms" rows="3" placeholder="Describe your symptoms or appointment reason..." required></textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="medical_history" class="form-label">Medical History</label>
                                    <textarea class="form-control form-control-lg" id="medical_history" name="medical_history" rows="2" placeholder="Previous illnesses, medications, allergies..."></textarea>
                                </div>
                                <div class="row g-3 mb-4">
                                    <div class="col-md-6">
                                        <label for="emergency_contact" class="form-label">Emergency Contact Name</label>
                                        <input type="text" class="form-control form-control-lg" id="emergency_contact" name="emergency_contact">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="emergency_phone" class="form-label">Emergency Contact Phone</label>
                                        <input type="tel" class="form-control form-control-lg" id="emergency_phone" name="emergency_phone" minlength="10" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '');" pattern="[0-9]{10}">
                                    </div>
                                </div>
                                <div class="mb-4 form-check">
                                    <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                                    <label class="form-check-label" for="terms">I agree to the <a href="#" class="text-primary">Terms & Conditions</a> and <a href="#" class="text-primary">Privacy Policy</a>.</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg rounded-pill px-5">
                                        <i class="fas fa-calendar-check me-2"></i>Confirm Appointment
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-left" data-aos-delay="100">
                    <div class="sticky-top" style="top: 100px;">
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body p-4">
                                <h5 class="fw-bold">Why Choose CanWinn?</h5>
                                <ul class="list-unstyled mt-3">
                                    <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Trusted doctors across specialties</li>
                                    <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Fast confirmation within minutes</li>
                                    <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>24/7 support and emergency care</li>
                                    <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i>Trusted by thousands of patients</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card border-0 shadow-sm mb-4 bg-primary text-white">
                            <div class="card-body p-4 text-center">
                                <h5 class="fw-bold">Need urgent help?</h5>
                                <p class="mb-3">Call our emergency helpline any time.</p>
                                <a href="tel:+91108" class="btn btn-light btn-lg rounded-pill">+91-108</a>
                            </div>
                        </div>
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <h6 class="fw-bold">Instant Confirmation</h6>
                                <p class="text-muted small">You will receive confirmation via SMS and email once your appointment is booked.</p>
                                <div class="d-grid gap-2 mt-3">
                                    <a href="<?php echo BASE_URL; ?>pages/services.php" class="btn btn-outline-primary">View Services</a>
                                    <a href="<?php echo BASE_URL; ?>pages/about.php" class="btn btn-outline-secondary">About CanWinn</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Steps -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-primary rounded-pill py-2 px-3 mb-3">How it Works</span>
                <h2 class="fw-bold">3 Easy Steps to Book Your Appointment</h2>
            </div>
            <div class="row g-4 text-center">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-4 rounded shadow-sm h-100">
                        <div class="mb-3 text-primary" style="font-size: 40px;"><i class="fas fa-user-edit"></i></div>
                        <h5>1. Enter Details</h5>
                        <p class="text-muted">Provide your contact and health information on the form.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-4 rounded shadow-sm h-100">
                        <div class="mb-3 text-primary" style="font-size: 40px;"><i class="fas fa-calendar-check"></i></div>
                        <h5>2. Choose Slot</h5>
                        <p class="text-muted">Select a date, time, doctor and clinic that suits your schedule.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-4 rounded shadow-sm h-100">
                        <div class="mb-3 text-primary" style="font-size: 40px;"><i class="fas fa-smile-beam"></i></div>
                        <h5>3. Confirm Visit</h5>
                        <p class="text-muted">Receive a confirmation instantly and prepare for your visit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success/Error Messages -->
    <?php if(isset($_GET['status'])): ?>
    <section class="py-3">
        <div class="container">
            <?php if($_GET['status'] == 'success'): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert" data-aos="fade-down">
                    <i class="fas fa-check-circle me-2"></i>
                    <strong>Appointment Booked Successfully!</strong> Your appointment ID is <strong><?php echo htmlspecialchars($_GET['appointment_id'] ?? ''); ?></strong>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php elseif($_GET['status'] == 'error'): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert" data-aos="fade-down">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <strong>Booking Failed!</strong> <?php echo htmlspecialchars($_GET['message'] ?? 'Please try again.'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>
</main>

<script>
const appointmentForm = document.getElementById('appointmentForm');
appointmentForm.addEventListener('submit', function(e) {
    const dateInput = document.getElementById('appointment_date');
    const selectedDate = new Date(dateInput.value);
    const today = new Date();
    today.setHours(0,0,0,0);

    if (selectedDate < today) {
        e.preventDefault();
        alert('Please select a future date for your appointment.');
        return false;
    }

    const dayOfWeek = selectedDate.getDay();
    if (dayOfWeek === 0) {
        e.preventDefault();
        alert('Appointments are not available on Sundays. Please select another date.');
        return false;
    }
});

document.getElementById('speciality').addEventListener('change', function() {
    const speciality = this.value;
    const polyclinicSelect = document.getElementById('polyclinic');

    if (speciality === 'Cardiology') {
        polyclinicSelect.value = 'Rajendra Park Polyclinic';
    } else if (speciality === 'Pediatrics') {
        polyclinicSelect.value = 'Ashok Vihar Polyclinic';
    } else if (speciality === 'Gynecology' || speciality === 'Dentistry') {
        polyclinicSelect.value = 'Ashok Vihar Polyclinic';
    }
});
</script>

<?php include_once('../../includes/footer.php'); ?>
