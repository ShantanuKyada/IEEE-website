<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IEEE_MBIT SB</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Css/style.css">
    <link rel="icon" type="image/x-icon" href="assets/ieee_logo.png">
    <title>Document</title>
</head>

<body>
    <div class="main-frame">

        <section class="header">
            <?php include 'header.php' ?>
        </section>
        <hr>

        <div class="home">
            <?php include 'home.php' ?>
        </div>

        <section class="header">
            <?php include 'social.php' ?>
        </section>

        <div class="S_name">
            <h1 class="Society_heading">Our Societies</h1>
        </div>

        <section>
            <div class="executive_committee">
                <div class="SB_img">
                <img src="assets/ieee_logo_portrait_final.png" alt="" style="height: 200px; width: 300px;">
                </div>
                <div class="SB_heading">
                    <h1>
                        Executive Committee
                    </h1>
                </div>
                <div class="SB_Msg">
                    IEEE BVM SB was established on 29th August 2016. The main motto of the Student Branch is to connect
                    engineers from various departments of the institute to come together, identify problem statements and act
                    accordingly to improvise and promote Technical Activities which can, in turn, be formed for "Advancing
                    Technology for Humanity". It aims to give students the cutting- edge skills, confidence, and intellect with
                    which they can easily face the competitive world and contribute to human welfare by organizing competitions,
                    workshops, expert talks, seminars, and symposiums on different technical topics.
                </div>
                <div>
                    <a href="Ex_Comm.php"><input type="button" class="exp_btn" value="Explore More!"></a>
                </div>
            </div>
        </section>

        <hr class="separator">

        <section>
            <div class="executive_committee">
                <div class="SB_img">
                    <a href=""><img src="assets/IEEEWIE_Gujarat.png" alt="" style="height: 200px; width: 300px;"></a>
                </div>
                <div class="SB_heading">
                    <h1>
                        WIE
                    </h1>
                </div>
                <div class="SB_Msg">
                    Join IEEE Women in Engineering (WIE) MBIT SB and connect with a diverse community dedicated to empowering women in STEM. Gain access to mentors, role models, and industry leaders who will guide your career journey. Enhance your skills through workshops, webinars, and conferences. Build meaningful connections and collaborate on innovative projects. Receive mentorship and contribute by becoming a mentor yourself. Develop essential leadership skills and engage in inspiring events. Showcase your achievements and be recognized. Join now to unlock opportunities for growth, networking, and empowerment. Discover the benefits of joining IEEE WIE MBIT SB and become part of a transformative community. Empower women in STEM today!
                </div>
                <div>
                <a href="WIE.php"><input type="button" class="exp_btn" value="Explore More!"></a>
                </div>
            </div>
        </section>

        <hr class="separator">

        <section>
            <div class="executive_committee">
                <div class="SB_img">
                    <a href=""><img src="assets/IEEE-CS_LogoTM-orange (1).png" alt="" style="height: 160px; width: 500px;"></a>
                </div>
                <div class="SB_heading">
                    <h1>
                        Computer Society
                    </h1>
                </div>
                <div class="SB_Msg">
                    The IEEE Computer Society is an invaluable resource for computing professionals. With a membership, you gain access to a wealth of benefits that can enhance your career and professional growth. Stay at the forefront of the field by accessing the latest research and technical information, ensuring you remain up-to-date with emerging trends and advancements. Networking opportunities abound, connecting you with like-minded professionals and experts from around the globe. Engage in standards development and contribute to shaping the future of computing. Enjoy discounted rates for conferences and events, enriching your knowledge and expanding your professional network. Take advantage of professional development opportunities to enhance your skills and stay competitive. Your achievements won't go unnoticed, as the IEEE CS recognizes and celebrates your accomplishments. If you're a computing professional, seize the opportunity to elevate your career by joining the IEEE CS today.
                </div>
                <div>
                <a href="cs_society.php"><input type="button" class="exp_btn" value="Explore More!"></a>
                </div>
            </div>
        </section>

        <hr class="separator">

        <section>
            <?php include 'benifits.php' ?>
        </section>

        <footer>
            <?php include 'footer.php' ?>
        </footer>
    </div>
</body>

</html>