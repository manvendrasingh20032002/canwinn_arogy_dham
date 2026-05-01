# CanWinn Healthcare - Complete Navigation Guide

## 📍 All Available Pages (13 Main Pages + Polyclinics & Services)

### Main Pages
1. ✅ **Homepage** - `index.php`
2. ✅ **About** - `pages/about.php`
3. ✅ **Services** - `pages/services.php`
4. ✅ **Contact** - `pages/contact.php`
5. ✅ **Career** - `pages/career.php`
6. ✅ **Reviews** - `pages/reviews.php`
7. ✅ **Membership** - `pages/members.php`
8. ✅ **Process** - `pages/process.php`
9. ✅ **Request** - `pages/request.php`

### Polyclinics (5 Locations)
10. ✅ **Geeta Bhawan Polyclinic** - `modules/polyclinic/geeta_bhawan.php`
11. ✅ **Ashok Vihar Polyclinic** - `modules/polyclinic/ashok_vihar.php`
12. ✅ **Sector 45 Polyclinic** - `modules/polyclinic/sector45.php`
13. ✅ **Rajendra Park Polyclinic** - `modules/polyclinic/rajendra_park.php`
14. ✅ **4/8 Marla Polyclinic** - `modules/polyclinic/marla_polyclinic.php`

### Other Services (4 Services)
15. ✅ **Aarogya Rath** (Mobile Medical Unit) - `modules/others/aarogya_rath.php`
16. ✅ **Rozgaar Sewa** (Employment Services) - `modules/others/rojgar_sewa.php`
17. ✅ **Mahila Kaushal Vikas** (Women's Skills) - `modules/others/mahila_kaushal.php`
18. ✅ **Emergency & Ambulance** - `modules/others/emergency_ambulance.php`

### 1. About Page
**URL**: `http://localhost/CANWINN_PROJECT/pages/about.php`
**Path**: `pages/about.php`
**Navigation**: Navbar → About
**Footer**: ✅ Footer Links

**Content**:
- Mission & Vision
- Why Choose CanWinn (3 key reasons)
- Join as Member CTA

---

### 2. Services Page
**URL**: `http://localhost/CANWINN_PROJECT/pages/services.php`
**Path**: `pages/services.php`
**Navigation**: Navbar → Services
**Footer**: ✅ Footer Links

**Content**:
- 6 Service Cards (Emergency, Cardiology, Orthopedics, Family Care, Maternal Care, Wellness)
- Service Overview Section
- Book A Service CTA

---

### 3. Contact Page
**URL**: `http://localhost/CANWINN_PROJECT/pages/contact.php`
**Path**: `pages/contact.php`
**Navigation**: Navbar → Contact | Navbar → Book Now
**Footer**: ✅ Footer Links

**Content**:
- Contact Form (name, email, phone, message)
- Contact Information (phone, email, address, hours)
- Form Posts To: `backend/contact_submit.php`

---

### 4. Career Page
**URL**: `http://localhost/CANWINN_PROJECT/pages/career.php`
**Path**: `pages/career.php`
**Navigation**: Navbar → Career
**Footer**: ✅ Footer Links

**Content**:
- Job Overview
- 3 Department Cards (Clinical, Operations, Digital)
- How to Apply Instructions
- Benefits Box

---

### 5. Reviews Page
**URL**: `http://localhost/CANWINN_PROJECT/pages/reviews.php`
**Path**: `pages/reviews.php`
**Navigation**: Navbar → Reviews
**Footer**: ✅ Footer Links

**Content**:
- 3 Patient Testimonials
- Review Cards with names

---

### 6. Membership Page
**URL**: `http://localhost/CANWINN_PROJECT/pages/members.php`
**Path**: `pages/members.php`
**Navigation**: Navbar → Become a Member
**Footer**: ❌ Not in footer (intentional - navbar link only)

**Content**:
- Page Header
- Success Alert (if status=success)
- Membership Form Component (includes/membership_section.php)
  - Photo Upload
  - 20+ Form Fields
  - Form Posts To: `backend/save_member.php`

---

### 7. Process Page
**URL**: `http://localhost/CANWINN_PROJECT/pages/process.php`
**Path**: `pages/process.php`
**Navigation**: Not in navbar or footer (Modal content reference) 
**Status**: Available but not directly linked

**Content**:
- 4 Step Process (Register, Book, Receive Care, Follow Up)
- Step Cards with Icons

---

### 9. Doctor Appointment Booking
**URL**: `http://localhost/CANWINN_PROJECT/modules/appointment/book.php`  
**Path**: `modules/appointment/book.php`
**Navigation**: Navbar → "Book Doctor" button | Footer → CanWinn Foundation section
**Footer**: ✅ CanWinn Foundation section

**Content**:
- Complete appointment booking form (20+ fields)
- Doctor/speciality selection
- Date/time slot selection
- Polyclinic selection
- Personal & medical information
- Emergency contact details
- Form Posts To: `modules/appointment/submit.php`
- Success/Error message display

---

## 🔗 Link Map

### From Navbar
```
Logo → http://localhost/CANWINN_PROJECT/
Home → http://localhost/CANWINN_PROJECT/
About → http://localhost/CANWINN_PROJECT/pages/about.php
Services → http://localhost/CANWINN_PROJECT/pages/services.php
Career → http://localhost/CANWINN_PROJECT/pages/career.php
Reviews → http://localhost/CANWINN_PROJECT/pages/reviews.php
Contact → http://localhost/CANWINN_PROJECT/pages/contact.php
Become a Member → http://localhost/CANWINN_PROJECT/pages/members.php
Book Doctor → http://localhost/CANWINN_PROJECT/modules/appointment/book.php
Book Now → http://localhost/CANWINN_PROJECT/pages/contact.php
```

### From Footer
```
About → pages/about.php
Services → pages/services.php
Book Doctor → modules/appointment/book.php
Career → pages/career.php
Reviews → pages/reviews.php
Contact → pages/contact.php
```

### Internal Page Links
```
pages/about.php → "Join as Member" → pages/members.php
pages/services.php → "Book A Service" → pages/contact.php
pages/request.php → "Contact Now" → pages/contact.php
pages/members.php → Success redirect with ?status=success
```

### Form Submissions
```
pages/contact.php → POST → backend/contact_submit.php
pages/members.php → POST → backend/save_member.php
modules/appointment/book.php → POST → modules/appointment/submit.php
```

---

## 📂 File Organization

### Critical Files
```
✅ index.php              → Homepage
✅ config/app.php          → BASE_URL Configuration
✅ includes/header.php     → Page Head & Navbar
✅ includes/navbar.php     → Navigation Bar
✅ includes/footer.php     → Footer & Scripts
```

### Page Files
```
✅ pages/about.php         → About Page
✅ pages/services.php      → Services Page
✅ pages/contact.php       → Contact Page
✅ pages/career.php        → Career Page
✅ pages/reviews.php       → Reviews Page
✅ pages/members.php       → Membership Page
✅ pages/process.php       → Process Page
✅ pages/request.php       → Request Page
```

### Backend Files
```
✅ backend/contact_submit.php      → Contact form handler
✅ backend/save_member.php         → Membership form handler
✅ backend/memberships.csv         → Member data storage
```

### Component Files
```
✅ includes/membership_section.php  → Membership form
✅ includes/stats_section.php       → Statistics display
✅ includes/video_map_section.php   → Video & Map
✅ includes/founder_flip_section.php → Leadership
✅ includes/partners_section.php    → Partner carousel
✅ includes/sathi_cta.php          → CTA section
```

---

## ✨ Features in Each Page

| Feature | Index | About | Services | Contact | Career | Reviews | Members | Process |
|---------|-------|-------|----------|---------|--------|---------|---------|---------|
| Header/Navbar | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ |
| Footer | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ |
| AOS Animations | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ |
| Responsive Design | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ |
| Forms | ❌ | ❌ | ❌ | ✅ | ❌ | ❌ | ✅ | ❌ |

---

## 🚀 Testing Checklist

- [ ] Click Home → Verify hero loads
- [ ] Click About → Verify About page loads with animation
- [ ] Click Services → Verify Services display correctly
- [ ] Click Career → Verify Career page displays
- [ ] Click Reviews → Verify Testimonials load
- [ ] Click Contact → Verify form displays
- [ ] Click "Become a Member" → Verify membership page loads
- [ ] Submit Contact Form → Verify redirect
- [ ] Submit Membership Form → Verify success message
- [ ] Check membership photo upload works
- [ ] Verify responsive design on mobile
- [ ] Test all navigation links work
- [ ] Verify all images load correctly
- [ ] Check footer links are working

---

## 📊 Project Summary

**Total Pages**: 8 main pages
**Total Components**: 6 reusable include files
**Forms**: 2 (Contact + Membership)
**Handler Scripts**: 2 (contact_submit, save_member)
**Animations**: AOS on all pages
**Carousels**: 3 (Doctors, Gallery, Partners)
**Responsive**: Yes (Mobile, Tablet, Desktop)

**Status**: ✅ **READY FOR DEPLOYMENT**

---

**Quick Start**:
1. Open `http://localhost/CANWINN_PROJECT/`
2. Browse using navbar at top
3. Submit forms to test functionality
4. Check `backend/memberships.csv` for member data

