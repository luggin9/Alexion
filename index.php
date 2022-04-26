<?php
//Connection Configuration
require 'assets/data/config.php';

// We need to use sessions, so you should always start sessions using the below code.
//require 'assets/data/session.php';

// We don't have the password or email info stored in sessions so instead we can get the results from the database.
//require 'assets/data/query.php';

//Head

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Join our National Webinar Series for an in-depth review of ULTOMIRIS, the first and only long-acting C5 complement inhibitor. Our featured speakers include Tuan Vu, MD, Suraj Muley, MD, and Gil Wolfe, MD, FAAN. Please see Important Safety Information and full Prescribing Information, including Boxed WARNING.">
    <meta name="keywords" content="Ultomiris, Webinar, gMG, C5 complement inhibitor, neurology, Tuan Vu, Suraj Muley, Gil Wolfe, Alexion">
    <meta name="author" content="">

    
    <link rel="icon" href="/assets/images/favicon.ico" type="image/png">
    <link rel="shortcut icon" type="image/png" href="/assets/images/favicon.ico" />
    <link rel="icon" href="/assets/images/favicon-16x16.png" type="image/png">

    <!-- Bootstrap CSS & Font-Awesome CDNs -->
    <link rel="stylesheet" href="../styles/bootstrap@4.3.1.min.css">
    <link rel="stylesheet" href="../styles/all.min.css">
    <link rel="stylesheet" href="../styles/main.css">

    <title>ULTOMIRIS® (ravulizumab-cwvz) | gMG National Webinar Series</title>
  </head>
  <body>
  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-light navbar-expand bg-light py-0 justify-content-center">
        <div class="row navbar-nav" id="navbarSupportedContent">
            <!-- Links -->
            <a class="nav-link" href="#">FULL PRESCRIBING INFORMATION</a>
            <a class="nav-link" href="#">MEDICATION GUIDE</a>
            <a class="nav-link" href="#">ULTOMIRIS REMS</a>
            <!-- Links -->
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Cookie Modal -->
    <div class="modal" id="cookieModal" tabindex="-1" role="dialog" aria-labelledby="cookieModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content shadow">
            <div class="modal-body row">
                <div class="col-11 col-lg-7 col-xl-7" id="cookieBannerContent">This website uses cookies to improve user experience and to improve performance and analyze traffic on this webpage. By clicking “Accept All Cookies”, you agree to the storing of cookies on your device to enhance site navigation, analyze site usage, and assist in our marketing efforts.</div>
                <button type="button" class="close col-1" id="closeBtnSmall" data-dismiss="modal" aria-label="Close" onclick="closeModal('#cookieModal')">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="text-center col-12 col-lg-5 col-xl-5 row my-auto">
                    <a href="#" class="green col-12 col-lg-5 col-xl-5 h6" id="cookieSettingsLink"><u>Cookie Settings</u></a>
                    <button type="button" class="btn bg-green text-white col-12 col-lg-6 col-xl-6" id="acceptCookiesBtn" onclick="closeModal('#cookieModal')">Accept All Cookies</button>
                    <button type="button" class="close col-lg-1 col-xl-1" id="closeBtnLarge" data-dismiss="modal" aria-label="Close" onclick="closeModal('#cookieModal')">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Cookie Modal -->

    <!-- Background image -->
    <div class="text-left bg-image">
        <div class="mask p-5" style="background-color: rgba(13, 66, 16, 0.6); height: 100%">
            <div class="logo-container">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="131.221" height="78.844" viewBox="0 0 131.221 78.844">
                    <image id="ULTO_US_RM_RGB_FC_Grd_Pos" width="106.293" height="65.238" transform="translate(2.932)" xlink:href="../assets/images/logo.svg"/>
                </svg>
            </div>
              
        <div class="d-flex justify-content-left align-items-left h-100">
            <div class="text-white font-oswald col-12 col-lg-7 col-xl-7">
                <h1 class="mb-0 reduce-h1-for-phone">ULTOMIRIS<span class="rball h5">®</span> <span class="reduce-h2-for-phone h2">(ravulizumab-cwz)</span></h1>
                <h6 class="reduce-h6-for-phone col-12 col-xl-9 col-lg-11 my-3 px-0">
                    Indicated for the treatment of adult patients with generalized myasthenia gravis (gMG) who are anti-acetylcholine receptor (AChR) antibody-positive
                </h6>
                <h3 class="orange reduce-h1-for-phone mb-0 pt-2">National Webinar Series</h3>
            </div>
        </div>
        </div>
    </div>
    <!-- Background image -->
  </header>

  <!-- Webinar Info -->
  <div class="container-fluid text-center bg-grey">
      <div class="row col-12 col-lg-8 col-xl-8 py-3">
        <h5 class="col-12 col-lg-10 col-xl-10 offset-lg-1 offset-xl-1 text-center green font-oswald font-weight-bold">
            <!-- Webinar Name - Put in Webinar name here -->
            Join a gMG expert as they guide you through a 1-hour long presentation about ULTOMIRIS, the first and only long-acting C5 complement inhibitor
        </h5>
      </div>
      <div class="row col-12 col-lg-8 col-xl-8 webinar-card-wrapper pb-3">
        <!-- Webinar Card -->
        <div class="col-12 col-lg-4 col-xl-4 green my-auto py-3 webinar-card">
            <h6 class="my-0 font-weight-semibold">Thursday, May 5, 2022</h6>
            <h6 class="my-0 font-weight-semibold">7 PM EST / 4 PM PST</h6>
            <p class="my-0"><em>Tuan Vu, MD</em></p>
        </div>
        <!-- Webinar Card -->
        <!-- Webinar Card -->
        <div class="col-12 col-lg-4 col-xl-4 green my-auto py-3 webinar-card">
            <h6 class="my-0 font-weight-semibold">Monday, May 9, 2022 
                <p class="my-0">9 PM EST / 6 PM PST</p>
                &
            </h6>
            <h6 class="my-0 font-weight-semibold">
                Friday, June 10, 2022 
                <p class="my-0">3 PM EST / 12 PM PST</p>
            </h6>
            <p class="my-0"><em>Suraj Muley, MD, FAAN</em></p>
        </div>
        <!-- Webinar Card -->
        <!-- Webinar Card -->
        <div class="col-12 col-lg-4 col-xl-4 green my-auto py-3 webinar-card">
            <h6 class="my-0 font-weight-semibold">Thursday, May 19, 2022</h6>
            <h6 class="my-0 font-weight-semibold">6 PM EST / 3 PM PST</h6>
            <p class="my-0"><em>Gil Wolfe, MD, FAAN</em></p>
        </div>
        <!-- Webinar Card -->
    </div>
  </div>
  <!-- Webinar Info -->

  <!-- Registration Form -->
  <div class="card shadow registration-card">
    <div class="card-header text-white bg-light-purple text-center py-1">
        <h6 class="m-0">REGISTRATION OPEN</h6>
        <p class="m-0">April 28 - June 10, 2022</p>
    </div>
    <div class="card-body pt-1">
        <form action="dropmein.php" method="post">
            <div class="form-group my-0">
                <label for="firstname"></label>
                <input type="text" class="form-control form-control-sm" id="firstname" name="firstname" aria-describedby="firstname" placeholder="First Name*" required>
            </div>
            <div class="form-group my-0">
                <label for="lastname"></label>
                <input type="text" class="form-control form-control-sm" id="lastname" name="lastname" aria-describedby="lastname" placeholder="Last Name*" required>
            </div>
            <div class="form-group my-0">
                <label for="email"></label>
                <input type="email " class="form-control form-control-sm" id="email" name="email" aria-describedby="email" placeholder="Email*" required>
            </div>
            <div class="form-group my-0">
                <label for="designation"></label>
                <select required class="form-control form-control-sm" id="designation" name="designation" >
                  <option value="">Designation*</option>
                  <option value="MD">MD</option>
                  <option value="DO">DO</option>
                  <option value="PhD">PhD</option>
                  <option value="FRACP">FRACP</option>
                  <option value="MBBS">MBBS</option>
                  <option value="NP">NP</option>
                  <option value="RN">RN</option>
                  <option value="PA">PA</option>
                  <option value="PT">PT</option>
                  <option value="OT">OT</option>
                  <option value="PharmD">PharmD</option>
                  <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group my-0">
                <label for="specialty"></label>
                <select class="form-control form-control-sm" id="specialty" name="specialty" required>
                  <option value="">Specialty*</option>
                  <option value="Allergy">Allergy</option>
                  <option value="Anesthesiology">Anesthesiology</option>
                  <option value="Clinical Immunology">Clinical Immunology</option>
                  <option value="Critical Care Medicine">Critical Care Medicine</option>
                  <option value="Emergency Medicine">Emergency Medicine</option>
                  <option value="Endocrinology and Metabolism">Endocrinology and Metabolism</option>
                  <option value="Family Medicine">Family Medicine</option>
                  <option value="Gastroenterology">Gastroenterology</option>
                  <option value="General Internal Medicine">General Internal Medicine</option>
                  <option value="Geriatric Medicine">Geriatric Medicine</option>
                  <option value="Hematology">Hematology</option>
                  <option value="Industry">Industry</option>
                  <option value="Medical Biochemistry">Medical Biochemistry</option>
                  <option value="Medical Genetics">Medical Genetics</option>
                  <option value="Medical Microbiology and Infectious Diseases">Medical Microbiology and Infectious Diseases</option>
                  <option value="Nephrology">Nephrology</option>
                  <option value="Neurology">Neurology</option>
                  <option value="Neuromuscular Medicine">Neuromuscular Medicine</option>
                  <option value="Neurosurgery">Neurosurgery</option>
                  <option value="Obstetrics/Gynecology">Obstetrics/Gynecology</option>
                  <option value="Occupational Medicine">Occupational Medicine</option>
                  <option value="Ophthalmology">Ophthalmology</option>
                  <option value="Otolaryngology">Otolaryngology</option>
                  <option value="Physical Medicine and Rehabilitation">Physical Medicine and Rehabilitation</option>
                  <option value="Psychiatry">Psychiatry</option>
                  <option value="Public Health and Preventative Medicine">Public Health and Preventative Medicine</option>
                  <option value="Respirology">Respirology</option>
                  <option value="Rheumatology">Rheumatology</option>
                  <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group my-0">
                <label for="npi"></label>
                <input type="text" class="form-control form-control-sm" id="npi" name="npi" aria-describedby="npi" placeholder="NPI #">
            </div>
            <div class="form-group my-0">
                <label for="event"></label>
                <select class="form-control form-control-sm" id="event" name="event" required>
                  <option value="">Webinar Selection*</option>
                  <option value="Thursday, May 5">Thursday, May 5</option>
                  <option value="Monday, May 9">Monday, May 9</option>
                  <option value="Friday, June 10">Friday, June 10</option>
                  <option value="Thursday, May 19">Thursday, May 19</option>
                </select>
            </div>
            <div class="form-group my-0">
                <label for="phone"></label>
                <input type="tel" class="form-control form-control-sm" id="phone" name="phone" aria-describedby="phone" placeholder="Phone (optional)">
            </div>
            <p class="my-0"><em><small>*Mandatory Field</small></em></p>
            <div class="form-check py-0">
                <input type="checkbox" class="form-check-input" id="optin" name="optin" value="Yes">
                <label class="form-check-label consent-line-height" for="optin">
                    <small>By checking this box and submitting this form, 
                        I give Alexion permission to provide promotional 
                        information to me or otherwise contact me about 
                        Alexion products, services, programs, or other 
                        topics that Alexion thinks may interest me.</small>
                </label>
                <p class="mt-0 mb-2">
                    <u><small><a href="https://alexion.com/Legal#privacynotice" target="_blank" class="green">Privacy Policy</a></small></u>
                </p>
            </div>
            <button type="submit" class="btn bg-orange text-white col-12">REGISTER NOW</button>
            </form>
        </div>
    </div>
    <!-- Registration Form -->

  <!-- Speakers -->
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col green font-oswald font-weight-bold mt-5 mb-4">
                <h3>Featured Speakers</h3>
            </div>
        </div>
        <div class="row">
            <!-- Speaker Card -->
            <div class="col-12 col-xl-4 col-lg-4">
                <p class="h5 green font-oswald font-weight-semibold">May 5th</p>
                <img src="../assets/images/tuan_vu.png" alt="Speaker Image" class="img-thumbnail img-fluid mx-auto rounded-circle speaker-img">
                <p class="h6 mt-4 mb-0 font-weight-bold">Tuan Vu, MD</p>
                <p class="my-0">Professor of Neurology</p>
                <p class="my-0">Director, Neuromuscular Division & EMG Laboratories</p>
                <p class="my-0">University of South Florida Morsani College of Medicine</p>
            </div>
            <!-- Speaker Card -->
            <!-- Speaker Card -->
            <div class="col-12 col-xl-4 col-lg-4">
                <p class="h5 green font-oswald font-weight-semibold">May 9th & June 10th</p>
                <img src="../assets/images/suraj_muley.jpg" alt="Speaker Image" class="img-thumbnail img-fluid mx-auto rounded-circle speaker-img">
                <p class="h6 mt-4 mb-0 font-weight-bold">Suraj Muley, MD</p>
                <p class="my-0">Director, Neuromuscular Divisiony</p>
                <p class="my-0">Barrow Neurological Institute</p>
                <p class="my-0">Professor of Neurology</p>
                <p class="my-0">University of Arizona, College of Medicine</p>
            </div>
            <!-- Speaker Card -->
            <!-- Speaker Card -->
            <div class="col-12 col-xl-4 col-lg-4">
                <p class="h5 green font-oswald font-weight-semibold">May 19th</p>
                <img src="../assets/images/gil_wolfe.jpg" alt="Speaker Image" class="img-thumbnail img-fluid mx-auto rounded-circle speaker-img">
                <p class="h6 mt-4 mb-0 font-weight-bold">Gil Wolfe, MD, FAAN</p>
                <p class="my-0">Professor and Chairman; Irvin and Rosemary Smith Chair of Neurology</p>
                <p class="my-0">University at Buffalo Distinguished Professor</p>
                <p class="my-0">Chief of Service for Neurology</p>
                <p class="my-0">University at Buffalo Jacobs School of Medicine and Biomedical Sciences</p>
            </div>
            <!-- Speaker Card -->
        </div>
        <div class="row justify-content-center mt-5">
            <!-- Speakers Call To Action -->
            <div class="col-12 col-lg-9 col-xl-9">
                <blockquote class="blockquote">
                    <p>Join our speakers for an in-depth review of ULTOMIRIS, the first and only long-acting C5 complement inhibitor.</p>
                </blockquote>
            </div>
            <!-- Speakers Call To Action -->
        </div>
        <div class="row justify-content-center">
            <!-- Speaker Objectives -->
            <!-- <table class="table table-hover col-10 col-xl-3 col-lg-3">
                <tbody>
                  <tr>
                    <td>Objectives 1</td>
                  </tr>
                  <tr>
                    <td>Objectives 2</td>
                  </tr>
                  <tr>
                    <td>Objectives 3</td>
                  </tr>
                </tbody>
              </table> -->
            <!-- Speaker Objectives -->
        </div>
        <div class="row justify-content-center">
            <!-- Register Button -->
            <button type="button" class="btn bg-orange text-white mb-4 col-10 col-xl-3 col-lg-3">REGISTER NOW</button>
            <!-- Register Button -->
        </div>
        <!-- <div class="row justify-content-center mt-4 mb-5"> -->
            <!-- Sponsor Text -->
            <!-- <p class="col-10 my-0"><small><em>This program is sponsored by Alexion Pharmaceuticals. The speakers above are serving as paid Alexion speakers.</small></em></p> -->
            <!-- Sponsor Text -->
        <!-- </div> -->
    </div>
    <!-- Speakers -->

    <!-- Collapsible Card -->
    <div id="accordion">
        <div class="card">
            <div class="card-header bg-green text-white font-weight-bold py-1" id="headingOne">
                <h6 class="mb-0 float-left collapse-line-height py-1">IMPORTANT SAFETY INFORMATION INCLUDING BOXED WARNING</h5>
                <h6 class="mb-0">
                    <button class="btn float-right bg-green text-white py-0" id="showLessBtn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" onclick="toggleCaret()">
                    Show less <span id="showLessBtnCaret" class="clearfix fa fa-angle-down"></span>
                    </button>
                </h6>
            </div>
        
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <div class="container-fluid isi-container"> 
                        <div class="row justify-content-center">
                            <!-- Black Box -->
                            <div class="black-box-warning font-weight-bold col col-10 mb-4">
                                <p class="col-12 offset-md-2 col-md-8 offset-lg-2 col-lg-8 offset-xl-2 col-xl-8 my-2" id="fullPrescribingInformation">WARNING: SERIOUS MENINGOCOCCAL INFECTIONS</p>
                                <p><span>Life-threatening meningococcal infections/sepsis have occurred</span> in patients treated with ULTOMIRIS. Meningococcal infection may become rapidly life-threatening or fatal if not recognized and treated early.</p>
                                <ul>
                                    <li>Comply with the most current Advisory Committee on Immunization Practices (ACIP) recommendations for meningococcal vaccination in patients with complement deficiencies.</li>
                                    <li>Immunize patients with meningococcal vaccines at least 2 weeks prior to administering the first dose of ULTOMIRIS, unless the risks of delaying ULTOMIRIS therapy outweigh the risk of developing a meningococcal infection. See <em>Warnings and Precautions</em> for additional guidance on the management of the risk of meningococcal infection.</li>
                                    <li>Vaccination reduces, but does not eliminate, the risk of meningococcal infections. Monitor patients for early signs of meningococcal infections and evaluate immediately if infection is suspected.</li>
                                </ul>
                                <p>ULTOMIRIS is available only through a restricted program under a Risk Evaluation and Mitigation Strategy (REMS). Under the ULTOMIRIS REMS, prescribers must enroll in the program. Enrollment in the ULTOMIRIS REMS program and additional information are available by telephone:  1-888-765-4747 or at <a style="font-size:18px" class="internal-link" href="https://ultomirisrems.com/" target="_blank">www.ultomirisrems.com</a>.</p>
                            </div>
                            <!-- Black Box -->
                            <!-- Warning Text -->
                            <div class="col col-10">
                            <p class="m-0"><strong>CONTRAINDICATIONS</strong></p>
                            <ul id="contraindications">
                                <li>Patients with unresolved <em>Neisseria meningitidis</em> infection.</li>
                                <li>Patients who are not currently vaccinated against <em>Neisseria meningitidis</em>, unless the risks of delaying ULTOMIRIS treatment outweigh the risks of developing a meningococcal infection.</li>
                            </ul>
                            <p class="m-0">
                                <strong>WARNINGS AND PRECAUTIONS</strong><br />
                                <strong>Serious Meningococcal Infections</strong>
                            </p>
                            <p class="m-0"><u>Risk and Prevention</u></p>
                            <p>Life-threatening meningococcal infections have occurred in patients treated with ULTOMIRIS.  The use of ULTOMIRIS increases a patient’s susceptibility to serious meningococcal infections (septicemia and/or meningitis). Meningococcal disease due to any serogroup may occur.</p>
                            <p>
                                Vaccinate or revaccinate for meningococcal disease according to the most current ACIP recommendations for patients with complement deficiencies. Immunize patients without history of meningococcal vaccination at least 2 weeks prior to the first dose of ULTOMIRIS. If ULTOMIRIS must be initiated immediately in an unvaccinated patient, administer meningococcal vaccine(s) as soon as possible and provide 2 weeks of antibacterial drug prophylaxis. In clinical studies, 59 adult patients with PNH were treated with ULTOMIRIS less than 2 weeks after meningococcal vaccination. All of these patients received antibiotics for prophylaxis of meningococcal infection until at least 2 weeks after meningococcal vaccination. The benefits and risks of antibiotic prophylaxis for prevention of meningococcal infections in patients receiving ULTOMIRIS have not been established. In PNH clinical studies in adult patients, 3 out of 261 PNH patients developed serious meningococcal infections/sepsis while receiving treatment with ULTOMIRIS; all 3 had been vaccinated. These 3 patients recovered while continuing treatment with ULTOMIRIS. Consider discontinuation of ULTOMIRIS in patients who are undergoing treatment for serious meningococcal infection.
                            </p>
                            <p><u>REMS</u><br />
                                Under the ULTOMIRIS REMS, prescribers must enroll in the program due to the risk of meningococcal infections. Prescribers must counsel patients about the risk of meningococcal infection/sepsis, provide the patients with the REMS educational materials, and ensure patients are vaccinated with meningococcal vaccines.
                            </p>
                            <p>
                                <strong>Other Infections</strong><br />
                                Patients may have increased susceptibility to encapsulated bacteria infections, especially infections caused by <em>Neisseria meningitidis</em> but also <em>Streptococcus pneumoniae, Haemophilus influenzae</em>, and to a lesser extent, <em>Neisseria gonorrhoeae</em>. Children treated with ULTOMIRIS may be at increased risk of developing serious infections due to <em>Streptococcus pneumoniae</em> and <em>Haemophilus influenzae</em> type b (Hib). Administer vaccinations for the prevention of <em>Streptococcus pneumoniae</em> and <em>Haemophilus influenzae</em> type b (Hib) infections according to ACIP guidelines. If ULTOMIRIS is administered to patients with active systemic infections, monitor closely for worsening infection.
                            </p>
                            <p>
                                <strong>Monitoring Disease Manifestations after ULTOMIRIS Discontinuation</strong><br />
                                <u>Treatment Discontinuation for PNH</u><br />
                                After discontinuing treatment with ULTOMIRIS, closely  monitor for signs and symptoms of hemolysis, identified by elevated LDH along with  sudden decrease in PNH clone size or hemoglobin, or re-appearance of symptoms such as  fatigue, hemoglobinuria, abdominal pain, shortness of breath (dyspnea), major adverse  vascular event (including thrombosis), dysphagia, or erectile dysfunction. Monitor any patient who discontinues ULTOMIRIS for at least 16 weeks to detect hemolysis and other reactions. If signs and symptoms of hemolysis occur after discontinuation, including elevated LDH, consider restarting treatment with ULTOMIRIS.
                            </p>
                            <p>
                                <u>Treatment Discontinuation for aHUS</u><br />
                                ULTOMIRIS treatment of aHUS should be a minimum duration of 6 months. Due to heterogeneous nature of aHUS events and patient-specific risk factors, treatment duration beyond the initial 6 months should be individualized. There are no specific data on ULTOMIRIS discontinuation. After discontinuing treatment with ULTOMIRIS, patients should be monitored for clinical symptoms and laboratory signs of TMA complications for at least 12 months.
                            </p>
                            <p>
                                TMA complications post-discontinuation can be identified if any of the following is observed: Clinical symptoms of TMA include changes in mental status, seizures, angina, dyspnea, thrombosis or increasing blood pressure. In addition, at least two of the following laboratory signs observed concurrently and results should be confirmed by a second measurement 28 days apart with no interruption: a decrease in platelet count of 25% or more as compared to either baseline or to peak platelet count during ULTOMIRIS treatment; an increase in serum creatinine of 25% or more as compared to baseline or to nadir during ULTOMIRIS treatment; or, an increase in serum LDH of 25% or more as compared to baseline or to nadir during ULTOMIRIS treatment. If TMA complications occur after discontinuation, consider reinitiation of ULTOMIRIS treatment or appropriate organ-specific supportive measures.
                            </p>
                            <p>
                                <strong>Thromboembolic Event Management</strong><br />
                                The effect of withdrawal of anticoagulant therapy during treatment with ULTOMIRIS has not been established. Treatment should not alter anticoagulant management.
                            </p>
                            <p>
                                <strong>Infusion-Related Reactions</strong><br />
                                Administration of ULTOMIRIS may result in infusion-related reactions including anaphylaxis and hypersensitivity reactions. In clinical trials, 4 out of 309 patients treated with ULTOMIRIS experienced infusion-related reactions (lower back pain, drop in blood pressure, elevation in blood pressure and limb discomfort) during ULTOMIRIS administration which did not require discontinuation. Interrupt infusion and institute supportive measures if signs of cardiovascular instability or respiratory compromise occur.
                            </p><p>
                                <strong>ADVERSE REACTIONS</strong><br />
                                <u>Adverse Reactions for PNH</u><br />
                                Adverse reactions reported in 5% or more of patients treated with ULTOMIRIS vs. Eculizumab was Upper respiratory tract infection (39% vs. 39%), Headache (32% vs. 26%), Diarrhea (9% vs. 5%), Nausea (9% vs. 9%), Pyrexia (7% vs. 8%), Pain in extremity (6% vs. 5%), Abdominal pain (6% vs. 7%), Dizziness (5% vs. 6%), Arthralgia (5% vs. 5%). Serious adverse reactions were reported in 15 (6.8%) patients receiving ULTOMIRIS. The serious adverse reactions in patients treated with ULTOMIRIS included hyperthermia and pyrexia. No serious adverse reaction was reported in more than 1 patient treated with ULTOMIRIS. One fatal case of sepsis was identified in a patient treated with ULTOMIRIS. In clinical studies, clinically relevant adverse reactions in 1% of adult patients include infusion-related reactions.
                            </p>
                            <p>Adverse reactions reported in 10% or more of pediatric patients treated with ULTOMIRIS who were treatment-naïve vs. Eculizumab-experienced was Anemia (20% vs. 25%), Abdominal pain (0% vs. 38%), Constipation (0% vs. 25%), Pyrexia (20% vs. 13%), Upper respiratory tract infection (20% vs. 75%), Pain in extremity (0% vs. 25%), Headache (20% vs. 25%).</p>
                            <p>
                                <u>Adverse Reactions for aHUS</u><br />
                                Most common adverse reactions in patients with aHUS (incidence ≥20%) were upper respiratory tract infection, diarrhea, nausea, vomiting, headache, hypertension and pyrexia. Serious adverse reactions were reported in 42 (57%) patients with aHUS receiving ULTOMIRIS. The most frequent serious adverse reactions reported in more than 2 patients (2.7%) treated with ULTOMIRIS were hypertension, pneumonia and abdominal pain. In clinical studies, clinically relevant adverse reactions in &lt;10% of patients include viral tonsillitis in adults and viral infection in pediatric patients and in 3% of adult patients include infusion-related reactions.
                            </p>
                            <p>
                                <strong id="indications" class="highlights">INDICATIONS</strong>
                                <br />
                                <strong>Paroxysmal Nocturnal Hemoglobinuria (PNH)</strong><br />
                                ULTOMIRIS is indicated for the treatment of adult and pediatric patients one month of age and older with paroxysmal nocturnal hemoglobinuria (PNH).
                            </p>
                            <p>
                                <strong>Atypical Hemolytic Uremic Syndrome (aHUS)</strong><br />
                                ULTOMIRIS is indicated for the treatment of adult and pediatric patients one month of age and older with atypical hemolytic uremic syndrome (aHUS) to inhibit complement-mediated thrombotic microangiopathy (TMA).
                            </p>
                            <p>
                                <u>Limitation of Use:</u><br />
                                ULTOMIRIS is not indicated for the treatment of patients with Shiga toxin E. coli related hemolytic uremic syndrome (STEC-HUS).
                            </p>
                            <p><strong>Please see accompanying full <a class="internal-link" href="https://alexion.com/Documents/Ultomiris_USPI.pdf" target="_blank">Prescribing Information</a> for ULTOMIRIS, including Boxed WARNING regarding serious and life-threatening meningococcal infections/sepsis.</strong></p>
                            
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Collapsible Card -->
    <!-- Footer -->
    <footer class="text-center text-white bg-purple">
        <!-- Grid container -->
        <div class="container px-4 pt-4">
            <!-- Section: Links -->
            <section>
                <ul class="list-unstyled justify-content-center footer-links">
                    <!--Footer Links-->
                    <li>
                        <a href="https://alexion.com/contact-alexion" target="_blank" class="text-white"><small>Contact Us</small></a>
                    </li>
                    <li>
                        <a href="https://alexion.com/Legal#termsofuse" target="_blank" class="text-white"><small>Terms and Conditions</small></a>
                    </li>
                    <li>
                        <a href="https://alexion.com/Legal#privacynotice" target="_blank" class="text-white"><small>Privacy Notice</small></a>
                    </li>
                    <!--Footer Links-->
                </div>
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->
        <!-- Copyright -->
        <div class="text-center pb-3 m-0">
            <small>
                <p class="m-0">Alexion, ULTOMIRIS®, the ULTOMIRIS logo, and the OneSource logo are registered trademarks of Alexion Pharmaceuticals, Inc., and OneSourceTM is a trademark of Alexion Pharmaceuticals, Inc.</p>
                <p class="m-0">©2022, Alexion Pharmaceuticals, Inc. All rights reserved. 04/22</p>
                <p class="m-0">US/ULT-g/0143</p>
            </small>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </body>
  <script>
    // Point caret up/down when clicked and show/hide accordion content
    const toggleCaret = () => {
        const caret = document.querySelector('#showLessBtnCaret');
        caret.classList.toggle('fa-angle-down');
        caret.classList.toggle('fa-angle-up');

        const collapseArea = document.querySelector('#collapseOne');
        collapseArea.classList.toggle('hide');
        collapseArea.classList.toggle('show');
    };

    // Open modal by selector without JQuery
    const openModal = (modalSelector) => {
        document.querySelector(modalSelector).style.display = "block"
        document.querySelector(modalSelector).classList.add("show")
    }

    // Close modal by selector without JQuery
    const closeModal = (modalSelector) => {
        document.querySelector(modalSelector).style.display = "none"
        document.querySelector(modalSelector).classList.remove("show")
    }

    // Selector for the Cookie Banner modal
    const cookieModalSelector = '#cookieModal';

    // if the user's browser does not have the cookieSeen value set to true,
    // show the Cookie Banner modal and set cookieSeen = true
    if (localStorage.getItem('cookieSeen') !== 'true') {
        openModal(cookieModalSelector);
        localStorage.setItem('cookieSeen', 'true');
    };
  </script>
</html>