<?php
    require_once('parts/head.php');
    require_once('parts/menu.php');
?>
    <div class="header-container">
        <h1 class="header__text">About Us</h1>
        <img src="images/headers/about-us-header.jpg" alt="about-us-header.jpg" class="header__background">
    </div>
    
    <div id="polychord-past-container">
        <div id="polychord-past__info-container">
            <h2 id="polychord-past__title">
                What is PolyChord?
            </h2>
            <p id="polychord-past__text">
                PolyChord Ltd is a spin-out from Cambridge University Astrophysics. Dr Will Handley originally designed the first PolyChord 
                algorithm along with Prof. Mike Hobson and Prof. Antony Lasenby to examine the 10-billion-year dataset collected by the 
                Planck satellite. Realising the underlying theory would have benefits across many different commercial sectors, they 
                sought to commercialise the tool under the direction of Mike Handley and formed PolyChord Ltd.
            </p>
        </div>
        <div id="polychord-past__picture-container">
            <img src="images/logos/logo-blue.png" alt="placeholder.png" id="polychord-past__image">
        </div>
    </div>

    <div id="polychord-present-container">
        <p id="polychord-present__text">
            After several stages of R&D with the initial algorithm, PolyChord Ltd is now a growing team of bright-minded scientists 
            creating exciting commercial software. Ranging from protein folding to predictive maintenance algorithms, PolyChord Ltd prides 
            itself in finding innovations in a multitude of fields. PolyChord Ltd has aspirations to build a bigger, stronger, 
            and more diverse team of data scientists to tackle more challenging projects, mainly focusing on predictive maintenance 
            technology and sensor-configuration optimisations.
        </p>
    </div>

    <h2 class="segment-title">Meet the Team</h2>

     <div id="employees-container">
        <div class="employee">
            <img src="images/headshot/mhandley-headshot.jpg" alt="mhandley-headshot.jpg" class="employee__image">
            <div class="employee__info-container">
                <h3 class="employee__name">Mike Handley</h3>
                <p class="employee__title">Chief Executive Officer</p>
                <p class="employee__text">
                    A Marketing and Advertising consultant with 40 years of experience working on branded goods and services, 
                    Mr.Handley manages commercial relationships in the company. Mike has successfully run The Handley Partnership 
                    for the last 20 years and brings commercial expertise to PolyChord Ltd.
                </p>
            </div>
        </div>
        <div class="employee">
            <img src="images/headshot/whandley-headshot.jpg" alt="whandley-headshot.jpg" class="employee__image">
            <div class="employee__info-container">
                <h3 class="employee__name">Dr. Will Handley</h3>
                <p class="employee__title">Chief Technology Officer</p>
                <p class="employee__text">
                    Dr.Handley is the core inventor of PolyChord's main engine. He has created fundamental technology for many of PolyChords 
                    projects. His work focuses on developing novel Bayesian algorithms for high-dimensional parameter estimation and model 
                    comparison using nested sampling. Dr.Handley is both a Royal Society University and Alan Turing Fellow.
                </p>
            </div>
        </div>
        <div class="employee">
            <img src="images/headshot/hobson-headshot.jpg" alt="hobson-headshot.jpg" class="employee__image">
            <div class="employee__info-container">
                <h3 class="employee__name">Professor Mike Hobson</h3>
                <p class="employee__title">Chief Science Officer</p>
                <p class="employee__text">
                    A professor in Astrophysics and Cosmology at Cambridge University and head of Trinity Hall College, Professor Hobson 
                    is a key inventor of PolyChord's cutting-edge Bayesian science technology. Mike has authored over 500 publications 
                    on machine learning and Bayesian statistics (including the acclaimed book "Bayesian Methods in Cosmology").
                </p>
            </div>
        </div>
        
        <div class="employee">
            <img src="images/headshot/watkinson-headshot.jpg" alt="watkinson-headshot.jpg" class="employee__image">
            <div class="employee__info-container">
                <h3 class="employee__name">Dr. Catherine Watkinson</h3>
                <p class="employee__title">Data Scientist</p>
                <p class="employee__text">
                    Dr.Watkinson has been the main driver in deploying parameter optimisations in digital simulations of complex industrial 
                    processes. She's worked for over 13 years as an astrophysicist at world-leading institutions such as Imperial College 
                    London and University College London. Dr.Watkinson joined PolyChord Ltd in January 2021 and has since led several 
                    successful projects and is now heavily involved in developing PolyChord's product and business strategies.
                </p>
            </div>
        </div>

        <div class="employee">
            <img src="images/headshot/peters-headshot.jpg" alt="peters-headshot.jpg" class="employee__image">
            <div class="employee__info-container">
                <h3 class="employee__name">Dr. Angus Peters</h3>
                <p class="employee__title">Data Scientist</p>
                <p class="employee__text">
                Dr. Peters is a structural engineer specializing in AI-enhanced structural health monitoring. Holding an MSc in
                Structural Engineering from Imperial College London and a PhD from the University of Cambridge, he has contributed
                to high-profile projects, including the Google Headquarters in London and various bridge structures. Dr. Peters brings
                advanced expertise and practical experience to the PolyChord Team, offering innovative solutions in structural health monitoring.
                   </p>
            </div>
        </div>
       
        <div class="employee">
            <img src="images/headshot/yallup-headshot-2.jpg" alt="yallup-headshot-2.jpg" class="employee__image">
            <div class="employee__info-container">
                <h3 class="employee__name">Dr. David Yallup</h3>
                <p class="employee__title">Data Scientist</p>
                <p class="employee__text">
                    Dr.Yallup has been making great contributions to PolyChord Ltd's PolyNet interpretable-AI project. He's been conducting 
                    research around novel approaches to machine learning problems powered by principled Bayesian statistics. He brings 
                    machine-learning expertise to the PolyChord Ltd team.
                </p>
            </div>
        </div>
    </div>

    <h2 class="segment-title">PolyChord Timeline</h2>
    <img src="images/timeline.png" alt="timeline.png" id="polychord-timeline">
    <!-- Mobile Timeline, https://codepen.io/alvarotrigo/pen/BawBzjM -->
    <div class="polychord-timeline-mobile-container">
        <div class="polychord-timeline-mobile__card-container">
            <div class="polychord-timeline-mobile__card">
                <div class="polychord-timeline-mobile__card__info">
                    <h3 class="polychord-timeline-mobile__card__info__title">2017</h3>
                    <p class="polychord-timeline-mobile__card__info__text">PolyChord was founded</p>
                </div>
            </div>
            <div class="polychord-timeline-mobile__card">
                <div class="polychord-timeline-mobile__card__info">
                    <h3 class="polychord-timeline-mobile__card__info__title">2018</h3>
                    <p class="polychord-timeline-mobile__card__info__text">STFC funds Postdocs for PolyNet</p>
                </div>
            </div>
            <div class="polychord-timeline-mobile__card">
                <div class="polychord-timeline-mobile__card__info">
                    <h3 class="polychord-timeline-mobile__card__info__title">2019</h3>
                    <p class="polychord-timeline-mobile__card__info__text">FoodScan is funded and begins development</p>
                </div>
            </div>
            <div class="polychord-timeline-mobile__card">
                <div class="polychord-timeline-mobile__card__info">
                    <h3 class="polychord-timeline-mobile__card__info__title">2020 Q2</h3>
                    <p class="polychord-timeline-mobile__card__info__text">PolyChord partners with WM5G and begin work on PolyTrack</p>
                </div>
            </div>
            <div class="polychord-timeline-mobile__card">
                <div class="polychord-timeline-mobile__card__info">
                    <h3 class="polychord-timeline-mobile__card__info__title">2020 Q4</h3>
                    <p class="polychord-timeline-mobile__card__info__text">STFC funds second phase development of PolyNet</p>
                </div>
            </div>
            <div class="polychord-timeline-mobile__card">
                <div class="polychord-timeline-mobile__card__info">
                    <h3 class="polychord-timeline-mobile__card__info__title">2021 Q2</h3>
                    <p class="polychord-timeline-mobile__card__info__text">The MIDAS project hits late development</p>
                    <p class="polychord-timeline-mobile__card__info__text">PolyChord achieves over £1,000,000 in total funding</p>
                </div>
            </div>
            <div class="polychord-timeline-mobile__card">
                <div class="polychord-timeline-mobile__card__info">
                    <h3 class="polychord-timeline-mobile__card__info__title">2021 Q3</h3>
                    <p class="polychord-timeline-mobile__card__info__text">PolyChord and AccuPredict begin development on PolyStructure</p>
                </div>
            </div>
            <div class="polychord-timeline-mobile__card">
                <div class="polychord-timeline-mobile__card__info">
                    <h3 class="polychord-timeline-mobile__card__info__title">2022 Q1</h3>
                    <p class="polychord-timeline-mobile__card__info__text">MIDAS, PolyTrack, PolyStructure, and FoodScan are ready for the public market</p>
                </div>
            </div>
            <div class="polychord-timeline-mobile__card">
                <div class="polychord-timeline-mobile__card__info">
                    <h3 class="polychord-timeline-mobile__card__info__title">2023 Q1</h3>
                    <p class="polychord-timeline-mobile__card__info__text">PolyChord expands PolyStructure's engine for windmills and building construction</p>
                </div>
            </div>
            <div class="polychord-timeline-mobile__card">
                <div class="polychord-timeline-mobile__card__info">
                    <h3 class="polychord-timeline-mobile__card__info__title">2023 Q2</h3>
                    <p class="polychord-timeline-mobile__card__info__text">Our team increases to further develop current and future projects</p>
                </div>
            </div>
            <div class="polychord-timeline-mobile__card">
                <div class="polychord-timeline-mobile__card__info">
                    <h3 class="polychord-timeline-mobile__card__info__title">2023 Q3</h3>
                    <p class="polychord-timeline-mobile__card__info__text">PolyChord expands its market share in predictive maintenance</p>
                </div>
            </div>
            <div class="polychord-timeline-mobile__card">
                <div class="polychord-timeline-mobile__card__info">
                    <h3 class="polychord-timeline-mobile__card__info__title">2024</h3>
                    <p class="polychord-timeline-mobile__card__info__text">PolyChord looks into the life science applications of its software</p>
                </div>
            </div>
        </div>
    </div>

<?php
    require_once('parts/footer.php');
?>