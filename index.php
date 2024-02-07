<?php
 include("header.php");
?>

<style>
.table-wrapper {
    /* overflow: hidden; */
    /* box-shadow: 0 0 0 3px cyan; Add this line to simulate the border */
    border-radius: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    overflow: hidden;
    /* Ensure overflow is hidden to make border-radius visible */
}

th,
td {
    padding: 25px;
    text-align: left;
}

table {
    width: 100%;
    border-collapse: collapse;
    border-radius: 20px;
    /* Add this line to set the border-radius */
}

table,
th,
td {
    border: 1px solid cyan;
    border-radius: 20px;
    /* Add this line to set the border-radius */
}

th,
td {
    padding: 25px;
    text-align: left;
    font-size: 20px;
    /* font-weight: 600; */
}

/* .body_section {
    background: linear-gradient(180deg, #E2F6FC 14.25%, rgba(255, 255, 255, 0.00) 100%);
} */

.table_data {
    border-radius: 18px;
    border: 0.3px solid #02B9AD;
    background: #F4FEFF;
    color: #0BB7D3;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
}

.fixed_side_bar {
    position: fixed;
    top: 300px;
    /* Adjust the top position as needed */
    z-index: 9999;
    right: 0;
    /* width: 110px;
      padding: 20px; */
    box-sizing: border-box;
    /* display: flex; */
    /* flex-direction: column; */
    /* align-items: center; */
    /* justify-content: space-around; */
    /* border-radius: 12px;
      background: #b0e5d9;
      color: white; */
}


.custom-tooltip-title {
    /* background-color: #ff69b4; Pink background color */
    color: #fff;
    /* White text color */
    /* border: 3px solid red; Pink border color */
    padding: 8px;
    border-radius: 8px;
    /* Border radius 8px */

}
</style>
<!-- tooltip js code -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl, {
            customClass: function(tooltip) {
                return 'custom-tooltip-title';
            }
        });
    });
});
</script>
<!-- end of js -->
<!-- <section class="body_section"> -->
<!-- part_one -->
<section class="part_one">
    <div class="container mt-sm-5">
        <div class="row">
            <div class="col-12 col-mb-6 col-sm-7 col-lg-8 desk_view">
                <img src="img/banner_fat3.webp" alt="" width="100%">
            </div>
            <div class="col-12 col-mb-6 col-sm-7 col-lg-8 mob_view">
                <img src="img/fat_banner_mob.webp" alt="" width="100%">
            </div>


            <!-- <div class="col-sm-1"></div> -->
            <div class="col-12 col-mb-6 col-sm-5 col-lg-4">
                <div class="form_data">

                    <form class="form">
                        <p class="title"> Get An Appointment </p>
                        <label>
                            <input class="input" type="email" placeholder="" required="" id="form_data">
                            <span>Full Name *</span>
                        </label>
                        <label>
                            <input class="input" type="email" placeholder="" required="">
                            <span>Email</span>
                        </label>
                        <label>
                            <input class="input" type="email" placeholder="" required="">
                            <span>Phone Number *</span>
                        </label>
                        <div class="flex">
                            <label>
                                <input class="input" type="text" placeholder="" required="">
                                <span>Height in ft</span>
                            </label>

                            <label>
                                <input class="input" type="text" placeholder="" required="">
                                <span>Height in inches</span>
                            </label>
                        </div>

                        <label>
                            <input class="input" type="email" placeholder="" required="">
                            <span>Weight kg</span>
                        </label>

                        <label>
                            <input class="input" type="password" placeholder="" required="">
                            <span>Message</span>
                        </label>

                        <button class="submit">Book Appointment</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fixed nav bar for side -->

<section class="fix_bar ">
    <div class="fixed_side_bar">
        <div class="appoinment mb-5">
            <a href="#BMI_cal" data-bs-toggle="tooltip" data-bs-placement="left"
                data-bs-class="custom-tooltip-title-blue" title="BMI Calculater">
                <img src="img/digital.webp" alt="" style="width:60px" class="all_images" /> 
            </a>
        </div>
        <div class="appoinment">
            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-class="custom-tooltip-title-blue"
                title="Book An Appointment">
                <img src="img/deadline.webp" alt="" style="width:60px" class="all_images" />
            </a>
        </div>

        <div class="appoinment_whats mt-4">
            <a href="https://api.whatsapp.com/send/?phone=%2B917702727697&text&type=phone_number&app_absent=0"
                data-bs-toggle="tooltip" data-bs-placement="left" data-bs-class="custom-tooltip-title-green"
                title="Chat on Whatsapp">
                <img src="img/whatsapp (5).webp" alt="" style="width:60px" class="all_images">
            </a>
        </div>

        <div class="appoinment mt-4">
            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-class="custom-tooltip-title-orange"
                title="International Patients Assistance">
                <img src="img/worldwide.webp" alt="" style="width:60px" class="all_images">
                <!-- <script src="https://cdn.lordicon.com/lordicon.js"></script>
                <lord-icon src="https://cdn.lordicon.com/xahuqqcs.json" trigger="hover"
                    style="width:70px;height:60px"  class="all_images">
                </lord-icon> -->
            </a>
        </div>
    </div>
</section>
<!-- <section class="fix_bar mob_view fixed-top">
    <div class="fixed_side_mob">
        <div class="container">
        <div class="row" style="width:100%" >
             <div class="col-3">
             <div class="appoinment_two">
             <a href="#" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-class="custom-tooltip-title-blue"
                title="BMI Calculater">
                <img src="img/digital.webp" alt="" style="width:60px" class="all_images" />
            </a>
            </div>
             </div>
            <div class="col-3 col-sm-3">
                <div class="appoinment_two">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-class="custom-tooltip-title-blue"
                title="Book An Appointment">
                <img src="img/calendar.webp" alt="" style="width:60px;padding:5px" class="all_images" />
            </a>
                </div>
            </div>
            <div class="col-3 col-sm-3">
                <div class="appoinment_two mt-1">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-class="custom-tooltip-title-green"
                title="Chat on Whatsapp">
                <img src="img/whatsapp (5).webp" alt="" style="width:60px;padding:5px">
            </a>
                </div>
            </div>
            <div class="col-3 col-sm-3">
                <div class="appoinment_two mt-1">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-class="custom-tooltip-title-orange"
                title="International Patients Assistance">
                <img src="img/worldwide.webp" alt="" style="width:60px;padding:5px">
            </a>
                </div>
            </div>

        </div>
        </div>
    </div>
</section>
<section class="fix_bar tab_view">
    <div class="fixed_side_bar">
        <div class="appoinment">
            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-class="custom-tooltip-title-blue"
                title="Book An Appointment">
                <img src="img/deadline.png" alt="" style="width:60px" class="all_images" />
            </a>
        </div>

        <div class="appoinment_whats mt-3">
            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-class="custom-tooltip-title-green"
                title="Chat on Whatsapp">
                <img src="img/whatsapp (5).webp" alt="" style="width:60px">
            </a>
        </div>

        <div class="appoinment mt-3">
            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-class="custom-tooltip-title-orange"
                title="International Patients Assistance">
                <img src="img/worldwide.png" alt="" style="width:60px">
            </a>
        </div>
    </div>
</section> -->
<!-- end of 1 -->
<!-- part-2 -->
<section class="part_two mt-3 mt-sm-3 mt-lg-5 p-3 gap-3">
    <div class="container">
        <div class="row">
            <div class="cpl-12 col-sm-12 col-md-6 col-lg-6 animate mb-3">
                <img src="img/bar_sur.webp" alt="">
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">

                <h2 class="why_data">Why Bariatric Procedure For Weight Loss and Diabetes Treatment ?</h2>
                <p class="Why_Bariatric_font">
                    Bariatric surgery is a revolutionary and effective solution for those looking to overcome chronic
                    weight challenges. It’s not just a routine, it’s a pathway to a healthy, active lifestyle. Bariatric
                    surgery greatly contributes to consistent weight loss, making it an excellent option for individuals
                    who have not yet succeeded with traditional diet and exercise programs in addition to the
                    significant benefits it provides in the case of diabetes two addressing and improving it, generally
                    reducing the use of medications. Designed to meet your unique health needs, weight loss treatment
                    begins a healthy new chapter in your life.
                    Our hospital, the Digestive Health Institute by Dr. Muffi, has been a pioneer in this field. In
                    2009, we became the first bariatric center in India to be recognized as a Center of Excellence in
                    Bariatric Surgery, an honor recognized by the Surgical Review Corp Presented by USA. This
                    distinction underscores our commitment to providing the highest quality of care in bariatric
                    surgery, reflecting our dedication to patient safety and outstanding clinical outcomes.

                </p>
            </div>
        </div>
    </div>
</section>
<!-- end the part2 -->
<!-- part-3 -->
<section class="part3">
    <div class="table_pasrt">
        <div class="container">
            <div class="table-wrapper">
                <table class="table_data mt-sm-5">
                    <!-- Your table content goes here -->
                    <thead>
                        <tr>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Procedure Name</td>
                            <td>Bariatric Surgery</td>
                        </tr>
                        <tr>
                            <td>Alternative Name</td>
                            <td>
                                Metabolic Surgery, Weight loss Surgery
                            </td>
                        </tr>
                        <tr>
                            <td>Conditions Treated</td>
                            <td>Obesity</td>
                        </tr>
                        <tr>
                            <td>Benefits of Surgery</td>
                            <td>Minimally Invasive, Improve patient’s overall mood and psychological health,
                                Increase in energy</td>
                        </tr>
                        <tr>
                            <td>Treated By</td>
                            <td>Bariatric Surgeon</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


<!-- end of 3 -->
<!-- part-4 -->
<section class="part4">
    <div class="container mt-sm-5">
        <center>
            <h2 class="why_data">Types of Bariatric Surgeries</h2>
            <!-- <p class="combin_da mt-4" style=" font-family: inter,sans-serif;font-size: 23px;">Combining the best
                specialists and equipment to provide you nothing <br> short of
                the
                best in healthcare.
            </p> -->
        </center>
        <a href="#Treatment_and_Procedures" style="text-decoration:none">
            <div class="row mt-4">

                <div class="col-12 col-mb-12 col-sm-6 col-lg-4 mb-3 " isActive=true>
                    <div class="card p-2 card_data_two Surgeries" id="Surgeries1">
                        <div class="d-flex align-items-center">

                            <div>
                                <img src="https://www.thedigestive.in/images//ads/roux.png" alt="" style="width: auto;"
                                    class="laparoscopic_imgs">
                            </div>
                            <div class="ms-3">

                                <p class="demo_data  all_fonts">Laparoscopic Roux En Y |<br>Gastric Bypass</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-mb-12 col-sm-6 col-lg-4 mb-3 " isActive=false>
                    <div class="card p-2 card_data_two Surgeries" id="Surgeries2">
                        <div class="d-flex align-items-center">

                            <div>
                                <img src="https://www.thedigestive.in/images//ads/sleeve.png" alt=""
                                    style="width: auto;" class="laparoscopic_imgs">
                            </div>
                            <div class="ms-3">

                                <p class="demo_data all_fonts">Laparoscopic Sleeve <br> Gastrectomy</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-mb-12 col-sm-6 col-lg-4 mb-3 " isActive=false>
                    <div class="card card_data_two Surgeries" id="Surgeries3" style="padding: 9px;">
                        <div class="d-flex align-items-center">

                            <div>
                                <img src="https://www.thedigestive.in/images//ads/6.png" alt="" style="width: auto;"
                                    class="laparoscopic_imgs">
                            </div>
                            <div class="ms-3">

                                <p class="demo_data all_fonts">Endoscopic Gastric Balloon</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-mb-12 col-sm-6 col-lg-4 mb-3 " isActive=false>
                    <div class="card p-2 card_data_two Surgeries" id="Surgeries4">
                        <div class="d-flex align-items-center">

                            <div>
                                <img src="https://www.thedigestive.in/images//ads/4.png" alt="" style="width: auto;"
                                    class="laparoscopic_imgs">
                            </div>
                            <div class="ms-3">

                                <p class="demo_data all_fonts">Laparoscopic Single <br> Anastomosis Duodeno-Ileal <br>
                                    Bypass
                                    (SADI)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-mb-12 col-sm-6 col-lg-4 mb-3 " isActive=false>
                    <div class="card p-2 card_data_two Surgeries" id="Surgeries5">
                        <div class="d-flex align-items-center">

                            <div>
                                <img src="https://www.thedigestive.in/images//ads/gastro.png" alt=""
                                    style="width: auto;" class="laparoscopic_imgs">
                            </div>
                            <div class="ms-3">

                                <p class="demo_data all_fonts">Laparoscopic One Anastomosis Gastric Bypass(OAGB)/Mini
                                    Gastric Bypass</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-mb-12 col-sm-6 col-lg-4 mb-3 " isActive=false>
                    <div class="card  card_data_two Surgeries " id="Surgeries6" style="padding: 9px;">
                        <div class="d-flex align-items-center">

                            <div>
                                <img src="https://www.thedigestive.in/images//ads/7.png" alt="" style="width: auto;"
                                    class="laparoscopic_imgs">
                            </div>
                            <div class="ms-3">

                                <p class="demo_data all_fonts">Laparoscopic Revisional</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </a>

    </div>
</section>
<!-- part-5 -->
<section class="part5">
    <div class="container mt-sm-5 pt-5 pb-4">
        <center>
            <h2 class="why_data text-white">Why Choose Digestive Health Institute?</h2>
            <p class="we_provide mt-4" style="color:white">
                We provide to you the best choiches for you. Adjust it to your health needs and make sure your
                undergo treatment with our highly qualified doctors you can consult with us which type of service
                is
                suitable for your health
            </p>
        </center>
        <div class="row mt-4" style="display:flex;justify-content: center;">
            <!-- <div class="col-1"></div> -->
            <div class="col-12 col-mb-12 col-sm-6 col-lg-3 mb-3">
                <div class="card p-3 card_data_three" style="width: auto;">
                    <div class="align-items-center">

                        <div class="all_img_center">
                            <img src="https://www.thedigestive.in/images//ads/why_img2.webp" alt=""
                                class="why_img_data">
                        </div>
                        <div class="mt-3 pb-3">

                            <div class="why_choose_psg all_font"
                                style="font-family: 'Montserrat', sans-serif !important;">A multidisciplinary team
                                to guide you step-by-step and help you find the right
                                long-term solution for
                                weight loss</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-mb-12 col-sm-6 col-lg-3 mb-3">
                <div class="card p-3 card_data_three">
                    <div class="align-items-center ">

                        <div class="all_img_center">
                            <img src="https://www.thedigestive.in/images//ads/why_img4.webp" alt=""
                                class="why_img_data">
                        </div>
                        <div class="mt-3 pb-4">

                            <p class="why_choose_psg all_font">Post-operative support groups to help you stay committed
                                to your
                                weight-loss goals</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-mb-12 col-sm-6 col-lg-3 mb-3">
                <div class="card p-3 card_data_three">
                    <div class="align-items-center ">

                        <div class="all_img_center">
                            <img src="https://www.thedigestive.in/images//ads/why_img1.webp" alt=""
                                class="why_img_data">
                        </div>
                        <div class="mt-3 pb-4">

                            <p class="why_choose_psg all_font">Surgical expertise using only the most advanced and
                                current
                                laparoscopic methods</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row" style="display: flex;justify-content: center;">
            <!-- <div class="col-1"></div> -->
            <div class="col-12 col-mb-12 col-sm-6 col-lg-3 mb-3">
                <div class="card p-3 card_data_new" class="hover_effect">
                    <div class="align-items-center">

                        <div class="all_img_center">
                            <img src="https://www.thedigestive.in/images//ads/why_img3.webp" alt=""
                                class="why_img_data">
                        </div>
                        <div class="mt-3 pb-4">

                            <p class="why_choose_psg all_font">
                                Pre & post-operative nutritional counselling</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-mb-12 col-sm-6 col-lg-3 mb-3">
                <div class="card p-3 card_data_new" class="hover_effect">
                    <div class="align-items-center">

                        <div class="all_img_center">
                            <img src="https://www.thedigestive.in/images//ads/why_img5.webp" alt=""
                                class="why_img_data">
                        </div>
                        <div class="mt-3 pb-4">

                            <p class="why_choose_psg all_font">Ability to handle complex cases with your weight</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-mb-12 col-sm-6 col-lg-3 mb-3">
                <div class="card p-3 card_data_new" class="hover_effect">
                    <div class="align-items-center">

                        <div class="all_img_center">
                            <img src="https://www.thedigestive.in/images//ads/why_img5.webp" alt=""
                                class="why_img_data">
                        </div>
                        <div class="mt-3">

                            <p class="why_choose_psg all_font">
                                OPD and IPD at Sir H.N. Reliance Foundation Hospital, a COVID-free hospita</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</section>
</section>
<!-- end of 5 -->
<!-- part-6 -->
<section class="part6 mt-sm-5 bg-white">
    <h2 class="why_data text-center">Treatment and Procedures</h2>
    <div class="container mt-5" id="surgery_data">
        <a href="#Treatment_and_Procedures" style="text-decoration:none;color:black">
            <div class="row cards_data3">
                <div class="col-12 col-mb-12 col-sm-4 col-lg-2 ">
                    <div class="img_data">
                        <img src="https://www.thedigestive.in/images//ads/roux.png" alt="" class="SurgeriesN"
                            Sid="Surgeries1" style="border-radius: 18px;">
                    </div>
                    <div class="contant mt-2">
                        <p>Laparoscopic Roux En <br> Y Gastric Bypassz</p>
                    </div>
                </div>
                <div class="col-12 col-mb-12 col-sm-4 col-lg-2 ">
                    <div class="img_data">
                        <img src="https://www.thedigestive.in/images//ads/sleeve.png" alt="" class="SurgeriesN"
                            Sid="Surgeries2" style="border-radius: 18px;">
                    </div>
                    <div class="contant mt-2">
                        <p>Laparoscopic Sleeve <br> Gastrectomy</p>
                    </div>
                </div>
                <div class="col-12 col-mb-12 col-sm-4 col-lg-2 ">
                    <div class="img_data">
                        <img src="https://www.thedigestive.in/images//ads/6.png" alt="" class="SurgeriesN"
                            Sid="Surgeries3" style="border-radius: 18px;">
                    </div>
                    <div class="contant mt-2">
                        <p>Endoscopic Gastric Balloon </p>
                    </div>
                </div>
                <div class="col-12 col-mb-12 col-sm-4 col-lg-2 ">
                    <div class="img_data">
                        <img src="https://www.thedigestive.in/images//ads/4.png" alt="" class="SurgeriesN"
                            Sid="Surgeries4" style="border-radius: 18px;">
                    </div>
                    <div class="contant mt-2">
                        <p class="demo_data_two">Laparoscopic Single <br> Anastomosis Duodeno-Ileal <br> Bypass
                            (SADI)</p>
                    </div>
                </div>
                <div class="col-12 col-mb-12 col-sm-4 col-lg-2 ">
                    <div class="img_data">
                        <img src="https://www.thedigestive.in/images//ads/gastro.png" alt="" class="SurgeriesN"
                            Sid="Surgeries5" style="border-radius: 18px;">
                    </div>
                    <div class="contant mt-2">
                        <p class="demo_data_two">Laparoscopic One Anastomosis Gastric Bypass(OAGB)/Mini
                            Gastric Bypass</p>
                    </div>
                </div>
                <div class="col-12 col-mb-12 col-sm-4 col-lg-2 ">
                    <div class="img_data">
                        <img src="https://www.thedigestive.in/images//ads/7.png" alt="" class="SurgeriesN"
                            Sid="Surgeries6" style="border-radius: 18px;">
                    </div>
                    <div class="contant mt-2">
                        <p class="demo_data_two">Laparoscopic Revisional</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
</section>
<div class="container bg-white " id="Treatment_and_Procedures">
    <div class="banner_two" id="SurgeryBody">
        <div class="img_data desk_view_treat">
            <img src="img/Gastric Bypass Surgery.webp" alt="" width="100%">
        </div>
        <div class="img_data mob_view_treat">
            <img src="img/Gastric_Bypass_Surgery_m.webp" alt="" width="100%">
        </div>
        <div class="content2 mt-4">
            <h3 class="type3 mb-3" style="color: #0bb7d3;">Laparoscopic Roux En Y |Gastric Bypass</h3>
            <p class="all_fonts_treat">Laparoscopic Roux-en-Y gastric bypass is a
                highly effective and advanced surgical procedure designed to promote significant weight loss. This
                minimally invasive technique involves making a small pouch from the stomach and attaching it directly to
                the small intestine. Leaving a large portion of the stomach and intestines not only allows the stomach
                to hold food, but also changes the digestive system of the body. This dual approach effectively aids in
                achieving normal and sustainable weight loss, and improve obesity-related health conditions
                For those seeking gastric surgery in mumbai our hospital offers state-of-the-art care in Laparoscopic
                Roux-en-Y Gastric Bypass. Our experienced surgeons and physicians are dedicated to providing quality
                care, ensuring that each patient receives a treatment plan tailored to their unique needs. With a focus
                on safety and state-of-the-art surgical techniques, our practice is committed to helping you achieve
                your weight loss goals and improve your overall health and wellness through this transformative
                procedure.
            </p>
            <button class="butn_data5 mt-3">Book an Appointment </button>
        </div>
    </div>

</div>
<!-- end of 6 -->
<!-- part-7  -->
<section class="part7 bg-white">
    <div class="look_data">
        <div class="container pt-5 mt-sm-5 pb-5">
            <div class="card p-sm-5 card_dataLook">
                <center>

                    <h2 class="text-white why_data">Looking For ?</h2>
                    <p class="text-white all_fonts">Just Make An Appointment & You're Done!</p>
                </center>
                <div class="row mt-2">
                    <div class="col-12 col-mb-12 col-sm-12 col-lg-4 mb-3">
                        <a href="tel:7702727697"><button class="consult_btn">Consult Now</button></a>
                    </div>
                    <div class="col-12 col-mb-12 col-sm-12 col-lg-4 mb-3">
                        <a href="#form_data"><button class="online_btn">Online follow-ups and Group
                                Sessions</button></a>
                    </div>
                    <div class="col-12 col-mb-12 col-sm-12 col-lg-4 mb-3">
                        <a href="#form_data"><button class="online_btn">Online Bariatric support group meet</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of 7 -->
<!-- part-8 -->
<section class="part8">
    <div class="container mt-sm-5">

        <h2 class="why_data text-center">Our Facilities</h2>
        <!-- <p class="text-center mt-3 fs-5 all_fonts">
        Recognized as one of India's and Asia's best centre for <br> Laparoscopic GI surgeries.
    </p> -->
        <div class="row all_data_center mt-sm-3 mt-lg-4">
            <div class="col-sm-2 corner_con">
                <div class="round">
                    <div class="stand">
                        <img src="img/laparoscopy_01.webp" alt="">
                    </div>
                </div>

                <div class="mt-2">
                    <p class="opd_data">Laparoscopic <br>Surgery</p>
                </div>

            </div>
            <div class="col-sm-2 corner_con">
                <div class="round">
                    <div class="stand">
                        <img src="img/no-scars.webp" alt="">
                    </div>
                </div>
                <div class="mt-2">
                    <p class="opd_data">Scarless <br> surgery</p>
                </div>
            </div>
            <div class="col-sm-2 corner_con">
                <div class="round">
                    <div class="stand">
                        <img src="img/insurance-policy.webp" alt="">
                    </div>
                </div>
                <div class="mt-2">
                    <p class="opd_data">Insurance <br> paperwork</p>
                </div>
            </div>
            <div class="col-sm-2 corner_con">
                <div class="round">
                    <div class="stand">
                        <img src="img/hospital.webp" alt="">
                    </div>
                </div>
                <div class="mt-2">
                    <p class="opd_data">Award winning <br> hospital</p>
                </div>
            </div>
            <div class="col-sm-2 corner_con">
                <div class="round">
                    <div class="stand">
                        <img src="img/stand.png" alt="">
                    </div>
                </div>
                <div class="mt-2">
                    <p class="opd_data">Post surgery <br> care</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of 8 -->
<!-- part-9 -->
<section class="part9 mt-sm-2 mt-lg-5 pt-4 pb-5"
    style="background-image: linear-gradient(to right, #2486db , #29cbd5);">
    <div class="weight_loss">
        <div class="container">
            <center>
                <h3 class="text-center text-white">BEFORE & AFTER</h3>
                <h3 class="text-center text-white">Weight Loss Success Stories</h3>
                <p class="text-center text-white all_fonts">There are a variety of revisional bariatric procedures that
                    can be
                    performed, <br>
                    depending on the specific needs of the patient. Some common procedures include</p>
            </center>
            <div class="row">
                <div class="col-12 col-mb-12 col-sm-8 col-lg-6">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <center>
                                    <img src="img/Inner_Image_01.webp" class="inner_img" alt="...">
                                </center>
                                <div class="text-white wait_loss">
                                    <br>
                                    <h4>HON. VICE-PRESIDENT OF INDIA, MR. VENKAIAH NAIDU</h4>
                                    <p class="wait_lo">Delhi India</p>
                                    <b style="font-size:20px">Surgery Type-</b>Laparoscopic Gastric Bypass(LGB)
                                    <br>
                                    <b style="font-size: 20px;">Surgery Date-</b>July 9th, 2012
                                    <p class="surgery all_fonts">
                                        Sugar levels are well controlled with only oral medications.No insulin
                                        needed.
                                        Antihypertensive medication reduced to half. Acidity has been resolved and
                                        joint
                                        pain negligible.

                                        Confesses to feeling younger, lighter and spright lier is now able to keep
                                        up with
                                        hectic schedule. Is more energetic, walks daily and indulges in a game of
                                        badminton
                                        regularly.
                                    </p>
                                </div>

                            </div>
                            <div class="carousel-item">
                                <center>
                                    <img src="img/Inner_Image_03.webp" class="inner_img" alt="...">
                                </center>
                                <div class="text-white wait_loss">
                                    <br>
                                    <h4>Bernice D'Lima</h4>
                                    <p> Mumbai, India</p>
                                    <b style="font-size:20px">Surgery Type-</b>Laparoscopic Gastric Sleeve(LGB)
                                    <br>
                                    <b style="font-size: 20px;">Surgery Date-</b>July 07, 2013
                                    <p class="surgery all_fonts">
                                        My weight was a burden! Not only was I unable to take care of myself, I was also
                                        unable to help my aged mother. This surgery has given me a new lease on life and
                                        I'm able to do house work more efficiently now.

                                        Bernice is a professional singer and her weight was a constant obstacle in her
                                        work life. Now she's able to work and sing with freedom!
                                    </p>
                                </div>

                            </div>
                            <div class="carousel-item">
                                <center>
                                    <img src="img/Inner_Image_02.webp" class="inner_img" alt="...">
                                </center>
                                <div class="text-white wait_loss">
                                    <br>
                                    <h4>Aban Dastur</h4>
                                    <p>Mumbai, India</p>

                                    <b style="font-size:20px">Surgery Type-</b>Laparoscopic Mini Gastric Bypass
                                    <br>
                                    <b style="font-size: 20px;">Surgery Date-</b>July 07, 2016
                                    <p class="surgery all_fonts">
                                        I am fitting into clothes that I used to wear 40 years ago. I go out more
                                        regularly and I look forward to attending functions!

                                        Due to her weight, Aban was unable to find any clothes that would fit and had to
                                        take tailor-make all her clothes. She is now at a healthy weight, able to buy
                                        readymade clothes from various shops.
                                    </p>
                                </div>

                            </div>
                            <div class="carousel-item">
                                <center>
                                    <img src="img/Inner_Image_04.webp" class="inner_img" alt="...">
                                </center>
                                <div class="text-white wait_loss">
                                    <br>
                                    <h4>Bhavana Sarwal</h4>
                                    <p>Mumbai, india</p>

                                    <b style="font-size:20px">Surgery Type-</b>Laparoscopic Sleeve Gastrectomy
                                    <br>
                                    <b style="font-size: 20px;">Surgery Date-</b>nov 06, 2013
                                    <p class="surgery all_fonts">
                                        The issue with being overweight, other than your clothes not fitting, is how you
                                        constantly feel unhealthy. Everything around you is just slow and that
                                        eventually has a direct effect on how you think and behave. It affects your
                                        entire life.

                                        I can’t thank DHI and the entire team there enough for helping me reduce over
                                        30* kgs in just a few months. Truly. Thank you so so so much!
                                    </p>
                                </div>

                            </div>
                            <div class="carousel-item">
                                <center>
                                    <img src="img/Inner_Image_05.webp" class="inner_img" alt="...">
                                </center>
                                <div class="text-white wait_loss">
                                    <br>
                                    <h4>Chetna Gala</h4>
                                    <p>Mumbai, india</p>

                                    <b style="font-size:20px">Surgery Type-</b>Laparoscopic Gastric Bypass
                                    <br>
                                    <b style="font-size: 20px;">Surgery Date-</b>January 06, 2009
                                    <p class="surgery all_fonts">
                                        I used to feel extremely lethargic earlier and would procrastinate in doing
                                        chores at home. Now I am very active and love cooking for the family!

                                        Chetna Gala enjoys life post-surgery as she is able to socialize with friends,
                                        wear comfortable clothing and also spend time with her family and pets.
                                    </p>
                                </div>

                            </div>
                            <div class="carousel-item">
                                <center>
                                    <img src="img/Inner_Image_06.webp" class="inner_img" alt="...">
                                </center>
                                <div class="text-white wait_loss">
                                    <br>
                                    <h4>Daulatram Jogawat</h4>
                                    <p>Mumbai, india</p>

                                    <b style="font-size:20px">Surgery Type-</b>Laparoscopic Banded roux – en – y Gastric
                                    Bypass
                                    <br>
                                    <b style="font-size: 20px;">Surgery Date-</b>March 02, 2017
                                    <p class="surgery all_fonts">
                                        Earlier, I was unable to walk & had difficulty in breathing. After losing 55kgs,
                                        I am feeling fit, I can breathe easily & walk. I am following the instructions
                                        for diet & 1-hour walk, given by the doctors. My overall health has improved.

                                        The entire Jogawat family and I would like to thank Dr. Muffi and his team for
                                        helping me live a healthier life
                                    </p>
                                </div>

                            </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-12 col-mb-12 col-sm-4 col-lg-6 mt-3" id="BMI_cal">
                    <div class="all_input pb-5 pt-5">
                        <form action="">
                            <h3 class="text-white">Find out your</h3>
                            <h2 style="color:#0A8FA5;font-weight:600">Body Mass Index (BMI)</h2>
                            <p class="text-white all_fonts">Your appointment with the best bariatric <br>
                                surgeon in Bangaloreis just a click away!</p>
                            <input type="text" name="" id="name" class="inpu_data mb-4" placeholder="Your Name">
                            <input type="text" name="" id="height" class="inpu_data mb-4" placeholder="Height in Inches">
                            <br>
                            <input type="text" name="" id="phone" class="inpu_data mb-4" placeholder="Phone">
                            <input type="text" name="" id="weight" class="inpu_data mb-4" placeholder="Your Weight">
                            <br>
                            <input type="text" name="" id="age" class="inpu_data mb-4" placeholder="Age">
                            <select name="" id="gender" class="inp_data2 mb-4">
                                <option value="">Gender</option>
                                <option value="">Male</option>
                                <option value="">Female</option>
                            </select>

                            <br>
                            <button class="bmi_cal">Calculate BMI</button>
                            <!-- <div class="result">
                                <p>Your BMI is</p>
                                <div id="result">00.00</div>
                                <p class="comment"></p>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of 9 -->
<!-- part-10 -->
<section class="part9">
    <div class="container mt-sm-5">
        <h2 class="why_data text-center">Meet Dr. Muffi</h2>
        <div class="row mt-4">
            <div class="col-sm-8">
                <p class="consult_doc">Dr Muffazal Lakdawala popularly known as Dr Muffi is India’s best-known
                    laparoscopic
                    surgeon; specializing in bariatric & Gastro-intestinal surgeries. He is the Co-founder and Chief
                    Surgeon at Digestive Health Institute and Director of Surgery, Department of General and Minimal
                    Access Surgical Sciences at Sir H.N. Reliance Foundation Hospital and Research Centre, Mumbai
                    Over the last 2 decades, he has helped thousands of people get rid of obesity and obesity-related
                    issues like diabetes, etc. He has given a new lease of life to countless patients - where many of
                    them found it difficult to even walk, they now run marathons, travel the world and pursue their
                    passions. Dr. Muffi isthe Honorary Surgeon to the Vice-President of India, Mr Venkaiah Naidu and he
                    also counts as his patients several eminent celebrities spanning all fields. In his 20+ years of
                    practice, he has won numerous awards like the Best Surgeon in the World Award by The American
                    Society for Metabolic & Bariatric Surgery (ASMBS) in 2019 and The World Master Educator Award by
                    IFSO (International Federation for the Surgery of Obesity) in 2019; and has performed more than
                    50000+ life-saving surgeries in India and Internationally.
                </p>
            </div>
            <div class="col-sm-4">
                <img src="img/DrMimg.jpeg" alt="" style="width: -webkit-fill-available;" class="doctrs_img">
            </div>
        </div>
    </div>
</section>
<!-- end of 9 -->
<!-- part-10 -->
<section class="part10 mt-sm-5">
    <h2 class="why_data text-center">FAQ’s</h2>
    <div class="container mt-4">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        What is bariatric surgery, and how does it promote weight loss?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                        Bariatric surgery is a medical procedure designed to promote weight loss by altering
                        the digestive system. Common types include gastric bypass, gastric sleeve, and
                        gastric banding.

                    </div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapseOne">
                        What is the cost of bariatric surgery?
                    </button>
                </h2>
                <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                        The cost of bariatric surgery can vary based on several factors, including the type of
                        procedure, facility charges, pre-operative evaluations, post-operative care, and any additional
                        services required.

                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapseOne">
                        Is bariatric surgery covered by insurance?
                    </button>
                </h2>
                <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                        Bariatric surgery is a medical procedure designed to promote weight loss by altering
                        the digestive system. Common types include gastric bypass, gastric sleeve, and
                        gastric banding.

                    </div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapseOne">
                        What are the different types of bariatric procedures available?
                    </button>
                </h2>
                <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                        Providing an overview of common bariatric surgeries such as gastric bypass, gastric
                        sleeve, gastric banding.


                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapseOne">
                        What are the long-term health benefits of bariatric surgery?
                    </button>
                </h2>
                <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                        Bariatric surgery offers a range of long-term health benefits beyond weight loss.
                        Many patients experience significant improvements in obesity-related conditions
                        such as type 2 diabetes, high blood pressure, and sleep apnoea.


                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapseOne">
                        How long does it take to see results after weight loss surgery?
                    </button>
                </h2>
                <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        The timeline for seeing results after bariatric surgery varies among individuals. Our
                        medical team will closely monitor your progress, providing guidance and support
                        throughout your transformative journey.



                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapseOne">
                        How long does a typical bariatric surgery procedure take?
                    </button>
                </h2>
                <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Bariatric surgery durations vary by type. Gastric bypass may take 2-4 hours, Gastric
                        sleeve 1-3 hours and Laparoscopic techniques contribute to efficiency.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapseOne">
                        What can I expect in life after bariatric surgery?
                    </button>
                </h2>
                <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">


                        It involves transformative changes, expects significant weight loss, improved health,
                        and enhanced quality of life and adopting a balanced diet, incorporating regular
                        physical activity, attending medical follow-ups.


                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapseOne">
                        How much weight can I expect to lose after bariatric surgery?
                    </button>
                </h2>
                <div id="flush-collapse10" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                        The amount of weight loss after bariatric surgery varies from person to person. It
                        achieves a weight loss of 50% or more of their excess by body weight.



                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collapseOne">
                        What are the benefits of weight loss surgery?
                    </button>
                </h2>
                <div id="flush-collapse11" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">


                        It achieves sustainable weight loss, Improves Mobility, Reduces heart diseases,
                        Enhances quality of life and healthier life by reducing obesity-related health risks.
                        .



                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end of 10 -->
<?php 
include("footer.php");
?>


<script>
var selectedId = "";

var b1 = '<div class="banner_two">' +
    '<div class="img_data desk_view_treat">' +
    '<img src="img/Gastric Bypass Surgery.webp" alt="" width="100%">' +
    '</div>' +
    '<div class="img_data mob_view_treat">' +
    '<img src="img/Gastric_Bypass_Surgery_m.webp" alt="" width="100%">' +
    '</div>' +
    '<div class="content2 mt-4">' +
    '<h3 class="type3 mb-3" style="color: #0bb7d3;">Laparoscopic Roux En Y Gastric Bypass</h3>' +
    '<p class="all_fonts_treat">Laparoscopic Roux-en-Y gastric bypass is a highly effective and advanced' +
    'surgical procedure designed to promote significant weight loss. This minimally invasive technique involves making a small pouch from the' +
    'stomach and attaching it directly to the small intestine. Leaving a large portion of the stomach and intestines not only allows the' +
    'stomach to hold food, but also changes the digestive system of the body. This dual approach effectively aids in achieving normal and ' +
    'sustainable weight loss, and improve obesity-related health conditions' +
    'For those seeking gastric surgery in mumbai our hospital offers state-of-the-art care in Laparoscopic Roux-en-Y Gastric Bypass. Our' +
    'experienced surgeons and physicians are dedicated to providing quality care, ensuring that each patient receives a treatment plan' +
    'tailored to their unique needs. With a focus on safety and state-of-the-art surgical techniques, our practice is committed to helping' +
    'you achieve your weight loss goals and improve your overall health and wellness  through this transformative procedure.' +
    '</p>' +
    '<button class="butn_data5 mt-3">Book an Appointment </button>' +
    '</div>' +
    '</div>'
var b2 = '<div class="banner_two">' +
    '<div class="img_data desk_view_treat">' +
    '<img src="img/Lap_Sleeve_Gastrectomy_new.webp" alt="" width="100%">' +
    '</div>' +
    '<div class="img_data mob_view_treat">' +
    '<img src="img/Lap_new_M.webp" alt="" width="100%">' +
    '</div>' +
    '<div class="content2 mt-4">' +
    '<h3 class="type3 mb-3" style="color: #0bb7d3;">Laparoscopic Sleeve Gastrectomy</h3>' +
    '<p  class="all_fonts_treat">' +
    'Laparoscopic sleeve gastrectomy, commonly referred to as gastric sleeve surgery, is a highly  ' +
    'effective method for weight loss. This surgery involves removing a significant portion of ' +
    'the stomach, leaving a narrow, thumb-shaped abdomen. This reduction in stomach size not ' +
    'only limits food intake but also reduces the production of appetite hormones, reducing ' +
    'appetite The procedure is performed laparoscopically, ie. smaller incisions are not made,  ' +
    'which generally results in faster recovery and less discomfort after surgery ' +
    'Choosing abdominal sleeve surgery is an important decision in anyone’s weight loss ' +
    'journey. Our hospital specializes in this procedure, offering a comprehensive approach that  ' +
    'includes pre-surgery consultation, a detailed operative plan, and post-operative support.  ' +
    'We ensure every patient receives personalized care, tailored to their specific health and   ' +
    'weight loss goals. Our expert team, Equipped with the latest technology and techniques.   ' +
    'We are committed to helping patients achieve permanent weight loss and quality of life   ' +
    'through abdominal sleeve surgery</p>' +
    '<button class="butn_data5 mt-3">Book an Appointment </button>' +
    '</div>' +
    '</div>'
var b3 = '<div class="banner_two">' +
    '<div class="img_data desk_view_treat">' +
    '<img src="img/Gastric Balloon.webp" alt="" width="100%">' +
    '</div>' +
    '<div class="img_data mob_view_treat">' +
    '<img src="img/Gastric_Balloon_m.webp" alt="" width="100%">' +
    '</div>' +
    '<div class="content2 mt-4">' +
    '<h3 class="type3 mb-3" style="color: #0bb7d3;">Endoscopic Gastric Balloon</h3>' +
    '<p  class="all_fonts_treat">' +
    'Endoscopic gastric balloon is a non-surgical procedure, used for short-term weight loss,' +
    'and is gaining popularity due to its effectiveness and minimal invasiveness. In this ' +
    'procedure, a flexible silicone balloon is used enter the stomach by endoscopy. Once ' +
    'placed, the balloon fills with saline and occupies a large portion of the stomach’s volume.  ' +
    'This helps reduce the amount of food consumed and makes you feel full sooner and longer  ' +
    'after a meal. The procedure is usually quick, general anesthesia is not required, and  ' +
    'patients are often able to return home the same day. ' +
    'The cost of a stomach balloon is a major factor in Mumbai for people considering this  ' +
    'procedure. Our hospital offers competitive pricing and ensures the highest level of care and  ' +
    'safety. We understand that affordability is as important as quality, and we strive to deliver  ' +
    'transparent value without compromising our excellent services. The cost includes ' +
    'comprehensive support throughout the duration of balloon placement, including dietary  ' +
    'and lifestyle advice to maximize the effectiveness of the procedure. Our dedicated team is ' +
    'committed to guiding you through every step of your weight loss journey with the  ' +
    'Endoscopic Gastric Balloon.</p>' +
    '<button class="butn_data5 mt-3">Book an Appointment </button>' +
    '</div>' +
    '</div>'
var b4 = '<div class="banner_two">' +
    '<div class="img_data desk_view_treat">' +
    '<img src="img/sadi.webp" alt="" width="100%">' +
    '</div>' +
    '<div class="img_data mob_view_treat">' +
    '<img src="img/sadi_mob.webp" alt="" width="100%">' +
    '</div>' +
    '<div class="content2 mt-4">' +
    '<h3 class="type3 mb-3" style="color: #0bb7d3;">Laparoscopic Single Anastomosis Duodeno-llealBypass' +
    '(SADI)</h3>' +
    '<p  class="all_fonts_treat">' +
    'The Laparoscopic Single Anastomosis Duodeno-Ileal Bypass (SADI) is an innovative ' +
    'surgical procedure in the field of bariatric surgery, offering an effective solution for ' +
    'significant weight loss and the improvement of type 2 diabetes. This procedure involves a ' +
    'partial gastrectomy where a portion of the stomach is removed to limit food intake. Then, a  ' +
    'loop of the small intestine is rerouted and connected to the duodenum. This alteration not  ' +
    'only reduces the stomach capacity, leading to less food consumption, but also induces ' +
    'hormonal changes that enhance metabolic control, particularly beneficial for patients with  ' +
    'diabetes. ' +
    'SADI is particularly notable for its dual approach – restricting food intake while  ' +
    'simultaneously improving the bodys ability to manage blood sugar levels. The procedure is ' +
    'performed laparoscopically, which means smaller incisions, less post-operative pain, and a  ' +
    'quicker recovery time compared to traditional open surgery. Our expert surgical team, ' +
    ', equipped with the latest technology and extensive experience in minimally invasive  ' +
    'techniques, ensures that patients receive the best possible care. This procedure is an  ' +
    'excellent option for those who seek a significant and sustainable weight loss solution, with ' +
    'the added benefit of improved diabetic control.</p>' +
    '<button class="butn_data5 mt-3">Book an Appointment </button>' +
    '</div>' +
    '</div>'
var b5 = '<div class="banner_two">' +
    '<div class="img_data desk_view_treat">' +
    '<img src="img/mini_gastric.webp" alt="" width="100%">' +
    '</div>' +
    '<div class="img_data mob_view_treat">' +
    '<img src="img/mini_gastric_m.webp" alt="" width="100%">' +
    '</div>' +
    '<div class="content2 mt-4">' +
    '<h3 class="type3 mb-3" style="color: #0bb7d3;">Laparoscopic One Anastomosis Gastric Bypass(OAGB)/Mini Gastric Bypass</h3>' +
    '<p  class="all_fonts_treat">' +
    'Laparoscopic One Anastomosis Gastric Bypass (OAGB), also known as mini gastric ' +
    'bypass, is a modern bariatric procedure that is gaining attention for its efficacy and ' +
    'effectiveness. In this procedure, the stomach is divided into a small sitting pouch as a trap, ' +
    'then attached to the intestine of the small. This pattern allows for more unhealthy calorie ' +
    'absorption and limits food intake. Small abdominal bypasses are less invasive than ' +
    'traditional gastric bypass and are known for shorter operative times and may reduce the  ' +
    'risk of complications ' +
    'One important factor for many when considering minor gastrointestinal approaches is the  ' +
    'cost of mini  gastric bypass surgery. Our hospital offers transparent and competitive pricing  ' +
    'for this procedure, ensuring that patients are aware of financial issues with no hidden costs.  ' +
    'It includes not only surgery but also comprehensive post-operative support, which is  ' +
    'crucial for the success of the operation. Our team of surgeons and medical team are ' +
    'committed to providing the highest quality of care, using the latest surgical techniques to  ' +
    'ensure the best possible outcomes for our patients. With a mini gastric bypass, individuals  ' +
    'can expect significant improvements in weight and overall health.</p>' +
    '<button class="butn_data5 mt-3">Book an Appointment </button>' +
    '</div>' +
    '</div>'
var b6 = '<div class="banner_two">' +
    '<div class="img_data desk_view_treat">' +
    '<img src="img/Revisional.webp" alt="" width="100%">' +
    '</div>' +
    '<div class="img_data mob_view_treat">' +
    '<img src="img/Revisional_m.webp" alt="" width="100%">' +
    '</div>' +
    '<div class="content2 mt-4">' +
    '<h3 class="type3 mb-3" style="color: #0bb7d3;">Laparoscopic Revisional</h3>' +
    '<p  class="all_fonts_treat">' +
    'Laparoscopic revisional surgery is a specialized procedure designed for individuals who  ' +
    'have had previous weight loss surgery but failed to achieve the desired results or  ' +
    'experienced complications. This procedure is called revisional weight loss surgery. This  ' +
    'includes modifying the original operation for better performance or correcting any issues  ' +
    'that may arise. The assessment process is highly individualized, taking into account the  ' +
    'specific needs and health of the patient. It requires a high level of expertise, as it is often   ' +
    'more complicated than initial surgery due to anatomical changes and possible scarring ' +
    'Our hospital specializes in revisional weight loss surgery, ensuring that each patient’s   ' +
    'unique circumstances and health goals are thoroughly evaluated and addressed. We use  ' +
    'advanced laparoscopic techniques, which require minimal incisions to speed recovery and  ' +
    'minimize postoperative discomfort. Our experienced team of surgeons are experienced in  ' +
    'adaptive procedures, providing solutions for patients with weight loss, weight regain, or  ' +
    'complications from their first surgery. We are committed to helping our patients achieve   ' +
    'long-term weight loss and health goals by providing comprehensive care and support  ' +
    'throughout their journey.h.</p>' +
    '<button class="butn_data5 mt-3">Book an Appointment </button>' +
    '</div>' +
    '</div>'





$(document).ready(function() {

    $(".Surgeries").click(function() {
        // to iterate each surgeries and remove border
        $(".Surgeries").each(function() {
            $(this).css("border", "None")
        })
        // to iterate each surgeriesN and remove border
        $(".SurgeriesN").each(function() {
            $(this).css("border", "None")
        })
        selectedId = $(this).attr("id");
        //Highlight the selected  surgery in both top and bottom
        $("#" + selectedId).css("border", "3px solid rgb(2 119 138)");
        $("[Sid='" + selectedId + "']").css("border", "4px solid rgb(2 119 138)");
        // to change sugery body accoding to selected surgery
        $("#SurgeryBody").empty()
        switch (selectedId) {

            case "Surgeries1":
                $("#SurgeryBody").append(b1);
                break;
            case "Surgeries2":
                $("#SurgeryBody").append(b2);
                break;
            case "Surgeries3":
                $("#SurgeryBody").append(b3);
                break;
            case "Surgeries4":
                $("#SurgeryBody").append(b4);
                break;
            case "Surgeries5":
                $("#SurgeryBody").append(b5);
                break;
            case "Surgeries6":
                $("#SurgeryBody").append(b6);
                break;
        }

    })
    $(".SurgeriesN").click(function() {
        // to iterate each surgeries and remove border
        $(".Surgeries").each(function() {
            $(this).css("border", "None")
        })
        // to iterate each surgeriesN and remove border
        $(".SurgeriesN").each(function() {
            $(this).css("border", "None")
        })
        selectedId = $(this).attr("Sid");
        //Highlight the selected  surgery in both top and bottom
        $("#" + selectedId).css("border", "3px solid rgb(2 119 138)");
        $("[Sid='" + selectedId + "']").css("border", "4px solid rgb(2 119 138)");
        // to change sugery body accoding to selected surgery
        $("#SurgeryBody").empty()
        switch (selectedId) {

            case "Surgeries1":
                $("#SurgeryBody").append(b1);
                break;
            case "Surgeries2":
                $("#SurgeryBody").append(b2);
                break;
            case "Surgeries3":
                $("#SurgeryBody").append(b3);
                break;
            case "Surgeries4":
                $("#SurgeryBody").append(b4);
                break;
            case "Surgeries5":
                $("#SurgeryBody").append(b5);
                break;
            case "Surgeries6":
                $("#SurgeryBody").append(b6);
                break;
        }

    })

    // mouse hover code 

    // end of the code
})

//   var age=document.getElementById("gender");
//   var height=document.getElementById("height");
//   var weight=document.getElementById("weight");

//   function calculate(){
//     if(age.value==''||height.value==''||weight.value==''){
//         alert("fill all the details properly");
//     }
//     else{
//         countBmi();
//     }
//   }

//   function countBmi(){
//      var p=[age.value,height.value,weight.value]

//      var bmi=Number(p[2])/(Number(p[1])/100*Number(p[1])/100)
//      var result='';
//      if(bmi<18.5){
//         result='Underweight';
//      }
//      else if(18.5<=bmi&&bmi<=24.9){
//         result='Healthy';
//      }
//      else if(25<=bmi&&bmi<=29.9){
//         result='Overweight';
//      }
//      else if(30<=bmi&&bmi<=34.9){
//         result='Obese';
//      }
//      else if(35<=bmi){
//         result='Extremely obese';
//      }

//      document.querySelector(".comment").innerHTML='You are <span id="comment">result</span>'
//   }

</script>