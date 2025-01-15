 <style>
    /* Responsive Layout */
@media (max-width: 768px) {
    .section-6 .contacts h4 {
        font-size: 24px;
        text-align: center;
    }

    .section-6 .contacts p {
        font-size: 16px;
        text-align: center;
    }

    .section-6 .contacts ul.navbar-nav {
        padding: 0;
        text-align: center;
    }

    .section-6 .contacts ul.navbar-nav .nav-item {
        margin-bottom: 15px;
    }

    .section-6 .contacts ul.navbar-nav .nav-item .row {
        flex-direction: column;
        text-align: center;
    }

    .section-6 .contacts ul.navbar-nav .nav-item .row .col-md-1,
    .section-6 .contacts ul.navbar-nav .nav-item .row .col-md-11 m-center {
        width: 100%;
    }

    .section-6 .contacts ul.navbar-nav .nav-item .nav-link {
        display: inline-block;
    }

    .section-6 .contacts ul.navbar-nav .nav-item p {
        text-align: center;
        color: white;
    }

    .section-6 .contacts ul.navbar-nav .btn {
        display: block;
        margin: 0 auto;
    }

    .section-6 .intro h2 {
        font-size: 26px;
        text-align: center;
    }

    .section-6 .intro p {
        font-size: 16px;
        text-align: center;
        margin-bottom: 0px;
    }

    .intro{
        margin-bottom: 0px;
    }
    .section-6 form .form-group-margin .input-group {
        width: 100%;
        margin: 0 auto 10px;
    }

    .section-6 form .form-group-margin textarea {
        resize: vertical;
    }

    .section-6 form .btn.primary-button {
        display: block;
        width: 100%;
        text-align: center;
    }
    .m-center{
        justify-content: center;
    }
}
 </style>
 <!-- Contact -->
 <section id="contact" class="section-6 odd form contact">
     <div class="container">
         <div class="row">
             <div class="col-12 col-md-5 pt-4">
                 <div class="contacts">
                     <h4>Get In Touch</h4>
                     <p>We are here to help you with all your queries and concerns, Take five minutes to fill out our inquiry form so that we can get to know you and understand your needs.</p>
                     <!-- <p>Praesent diam lacus, dapibus sed imperdiet consectetur.</p> -->
                     <ul class="navbar-nav">
                         <li class="nav-item">
                             <div class="row">
                                 <div class="col-md-1 p-0">
                                     <a href="tel:+13033863536" class="nav-link">
                                         <i class="fas fa-phone-alt mr-2"></i>
                                     </a>
                                 </div>
                                 <div class="col-md-11 m-center d-flex align-items-center">
                                     <a href="tel:+13033863536" class="nav-link">
                                         +1 303 386 3536
                                     </a>
                                 </div>
                             </div>
                         </li>

                         <li class="nav-item">
                             <div class="row">
                                 <div class="col-md-1 p-0">
                                     <a href="mailto:support@vscoffshore.com" class="nav-link">
                                         <i class="fas fa-envelope mr-2"></i>
                                     </a>
                                 </div>
                                 <div class="col-md-11 m-center d-flex align-items-center">
                                     <a href="mailto:support@vscoffshore.com" class="nav-link">
                                         support@vscoffshore.com
                                     </a>
                                 </div>
                             </div>
                         </li>
                         <li class="nav-item">
                             <div class="row">
                                 <div class="col-md-1 p-0"> <a href="#" class="nav-link">
                                         <i class="fas fa-map-marker-alt mr-2"></i></a>
                                 </div>
                                 <div class="col-md-11 m-center  d-flex align-items-center">
                                     <p style="color: white;">
                                     8 The Green, Ste A, Diver County, Kent, DE - 19901


                                     </p>
                                 </div>
                             </div>

                         </li>
                         <li class="nav-item">
                             <a href="#" class="mt-2 btn outline-button" data-toggle="modal" data-target="#map">VIEW MAP</a>
                         </li>
                     </ul>
                 </div>
             </div>
             <div class="col-12 col-md-7 pt-4 pr-md-5 align-self-center text">
                 <div class="row intro">
                     <div class="col-12 p-0">
                         <!-- <span class="pre-title m-0">Drop Us a Line</span> -->
                         <h2> <span class="featured"><span>Drop </span></span> Us a Line</h2>
                         <p>We are here to help you with all your queries and concerns, just write to us using the below form and we will get back to you as soon as we can.</p>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-12 p-0">
                         <form action="php/form.php" id="nexgen-simple-form" class="nexgen-simple-form">
                             <input type="hidden" name="section" value="nexgen_form">

                             <input type="hidden" name="reCAPTCHA">
                             <!-- Remove this field if you want to disable recaptcha -->

                             <div class="row form-group-margin">
                                 <div class="col-12 col-md-6 m-0 p-2 input-group">
                                     <input type="text" name="name" class="form-control field-name" placeholder="Name">
                                 </div>
                                 <div class="col-12 col-md-6 m-0 p-2 input-group">
                                     <input type="email" name="email" class="form-control field-email" placeholder="Email">
                                 </div>
                                 <div class="col-12 col-md-6 m-0 p-2 input-group">
                                     <input type="text" name="phone" class="form-control field-phone" placeholder="Phone">
                                 </div>
                                 <div class="col-12 col-md-6 m-0 p-2 input-group">
                                     <input type="text" name="phone" class="form-control field-phone" placeholder="Website">
                                 </div>
                                 <!-- <div class="col-12 col-md-6 m-0 p-2 input-group">
                                     <i class="icon-arrow-down mr-3"></i>
                                     <select name="info" class="form-control field-info">
                                         <option value="" selected disabled>More Info</option>
                                         <option>Audit & Assurance</option>
                                         <option>Financial Advisory</option>
                                         <option>Analytics and M&A</option>
                                         <option>Middle Marketing</option>
                                         <option>Legal Consulting</option>
                                         <option>Regulatory Risk</option>
                                         <option>Other</option>
                                     </select>
                                 </div> -->
                                 <div class="col-12 m-0 p-2 input-group">
                                     <textarea name="message" class="form-control field-message" placeholder="Message"></textarea>
                                 </div>
                                 <div class="col-12 col-12 m-0 p-2 input-group">
                                     <span class="form-alert"></span>
                                 </div>
                                 <div class="col-12 input-group m-0 p-2">
                                     <a class="btn primary-button">SEND</a>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>

         </div>
     </div>
 </section>