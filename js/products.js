const products = document.querySelectorAll(".productImg");
const benefit = document.querySelectorAll('#benefit ul');
const keyFeatures = document.querySelectorAll('#features ul');
const rating = document.querySelectorAll('#rating ul');
var previousProduct;

var mySwiper = new Swiper('.swiper-container', {

    effect: "coverflow",
    centeredSlides: true,
    loop: true,
    slidesPerView: "2",
    slideToClickedSlide: true,
    grabCursor: true,
    coverflowEffect: {
        rotate: 0,
        stretch: 5,
        depth: 100,
        modifier: 5,
        slideShadows: false
    },
    navigation: {
        prevEl: ".swiper-button-prev",
        nextEl: ".swiper-button-next"
    },
    /* pagination: {
        el: ".swiper-pagination",
        clickable: false
    } */

});

products.forEach(product => {

    product.addEventListener("click", () =>{

        /* benefit[0].classList.toggle("productDetailsList");
        keyFeatures[0].classList.toggle("productDetailsList");
        rating[0].classList.toggle("productDetailsList"); */

        if (previousProduct != null) {


            previousProduct.classList.toggle('activeProduct');

        }

        previousProduct = product;
        product.classList.toggle('activeProduct');

        benefit[0].style.animation = `none`;
        keyFeatures[0].style.animation = `none`;
        rating[0].style.animation = `none`;

        setTimeout(function () {
            benefit[0].style.animation = ``;
            keyFeatures[0].style.animation = ``;
            rating[0].style.animation = ``;
        }, 5);
        
        switch(product.id){
            case 'dental':
                benefit[0].innerHTML = `<li>290+ Procedure Codes</li>
                                    <li>30+ Categories of Service</li>
                                    <li>Rate Guarantees & Caps</li>
                                    <li>Adult Clear Aligners</li>
                                    <li>Vanishing and Lifetime Deductibles</li>
                                    <li>Implant Coverage</li>
                                    <li>Unlimited Maximum Plans</li>
                                    <li>Carryover Maximum</li>
                                    <li>Preventive Incentive</li>
                                    <li>Oral Cancer Screening</li>
                                    <li>Evidence Based Benefits</li>
                                    <li>Cosmetic Benefits</li>
                                    <li>etc.</li>`;
                keyFeatures[0].innerHTML = `<li>Unlimited Plan Design and Benefit Level Flexibility</li>
                                        <li>Network Stacking</li>
                                        <li>Indemnity Plans</li>
                                        <li>Passive, Active, and Exclusive PPO Plans</li>
                                        <li>Schedule Benefit Plans</li>
                                        <li>Hybrid Plans</li>
                                        <li>Improving Plans</li>
                                        <li>Dollar Based Plans</li>`;
                rating[0].innerHTML = `<li>DHMO/Capitated Plans</li>
                                    <li>Voluntary & Employer Paid</li>
                                    <li>Individual Plans</li>
                                    <li>Medicare Advantage Plans</li>
                                    <li>Senior Plans</li>
                                    <li>Nursing Home Plans</li>
                                    <li>Optionally, Conditionally, and Guaranteed Renewable Plans</li>`;
                break;
            case 'vision':
                benefit[0].innerHTML = `<li>Vision Exams</li>
                                        <li>Frames & Lenses</li>
                                        <li>Contact Lenses</li>
                                        <li>Lens Options</li>
                                        <li>Loss of Sight Benefits</li>
                                        <li>Refractive Surgery Benefits</li>
                                        <li>Low Vision Benefits</li>
                                        <li>Visual Display Terminal Benefit</li>
                                        <li>Safety Eyewear</li>
                                        <li>Diabetic Eyecare</li>`;
                keyFeatures[0].innerHTML = `<li>Unlimited Plan Design Flexibility</li>
                                            <li>12 & 24 Month Benefit Periods</li>
                                            <li>Multiple Co-payment Options</li>
                                            <li>Multi-year Rate Guarantees & Caps</li>`;
                rating[0].innerHTML = `<li>Voluntary & Employer Paid Group Plans</li>
                                        <li>Individual Plans</li>
                                        <li>Industry Classifications</li>
                                        <li>Optionally, Conditionally, and Guaranteed Renewable</li>`;
                break;
            case 'hearing':
                benefit[0].innerHTML = `<li>Hearing Exams</li>
                                        <li>Hearing Aids</li>`;
                keyFeatures[0].innerHTML = `<li>Add-on to Dental & Vision</li>
                                            <li>Rate Guarantees & Caps</li>
                                            <li>Various Benefit Periods</li>`;
                rating[0].innerHTML = `<li>Guarantee Issue</li>
                                        <li>Voluntary & Employer Paid Rates</li>
                                        <li>Adult & Child Rates</li>`;
                break;
            case 'illness':
                benefit[0].innerHTML = `<li>Heart Attack & Stroke</li>
                                        <li>Invasive Cancer & Carcinoma In Situ</li>
                                        <li>Coronary Heart Disease and By-pass Surgery</li>
                                        <li>Major Organ Failure and Transplant</li>
                                        <li>End Stage Renal Failure</li>
                                        <li>Alzheimer's Disease</li>
                                        <li>Occupational HIV and Hepatitis</li>
                                        <li>Muscular Dystrophy</li>
                                        <li>Multiple Sclerosis</li>
                                        <li>Blindness, Coma, Brain Tumor</li>
                                        <li>Permanent Paralysis</li>
                                        <li>etc.</li>`;
                keyFeatures[0].innerHTML = `<li>Unlimited Plan Design and Benefit Level Flexibility</li>
                                            <li>Multiple Occurrence Benefits</li>
                                            <li>Reoccurrence Benefits</li>
                                            <li>Category and Non-category Plans</li>
                                            <li>Maximum Payout</li>
                                            <li>Age Related Benefit Reductions</li>
                                            <li>Multiple Pre-x Limitation Options</li>
                                            <li>Multiple Waiting Period Options</li>`;
                rating[0].innerHTML = `<li>Guarantee Issue and Simplified Issue</li>
                                        <li>Voluntary & Employer Paid Rates</li>
                                        <li>Attained Age & Issue Age Rates</li>
                                        <li>Composite Rates</li>
                                        <li>Gender Distinct & Uni-sex Rates</li>
                                        <li>Tobacco Distinct Rates</li>
                                        <li>Optionally and Conditionally Renewable</li>`;
                break;
            case 'accident':
                benefit[0].innerHTML = `<li>Accidental Death Benefits</li>
                                        <li>Dismemberment Benefits</li>
                                        <li>Dislocation & Fracture Benefits</li>
                                        <li>Open & Closed Reduction</li>
                                        <li>Hospital & Medical Benefits</li>
                                        <li>Outpatient Benefits</li>
                                        <li>Burns & Lacerations</li>
                                        <li>Paralysis & Concussions</li>
                                        <li>Emergency Dental & Eye Injury</li>
                                        <li>Therapy</li>
                                        <li>Rehabilitation</li>
                                        <li>Chiropractor</li>
                                        <li>Ambulance</li>
                                        <li>etc.</li>`;
                keyFeatures[0].innerHTML = `<li>Unlimited Plan Design and Benefit Level Flexibility</li>
                                            <li>24 Hour & Off the Job Coverage</li>
                                            <li>Spouse & Child Benefits</li>
                                            <li>Age Related Benefit Reductions</li>
                                            <li>Accidental Disability Rider</li>
                                            <li>Portability</li>`;
                rating[0].innerHTML = `<li>Voluntary & Employer Paid Rates</li>
                                        <li>Attained Age & Issue Age Rates</li>
                                        <li>Composite Rates</li>
                                        <li>Gender Distinct and Uni-sex Rates</li>
                                        <li>Optionally, Conditionally, and Guaranteed Renewable</li>`;
                break;
            case 'limited':
                benefit[0].innerHTML = `<li>Inpatient Hospital Benefits</li>
                                        <li>Outpatient Benefits</li>
                                        <li>Physician Benefits</li>
                                        <li>Surgery</li>
                                        <li>Daily Confinement</li>
                                        <li>Emergency Room</li>
                                        <li>Anesthesia</li>
                                        <li>X-Rays</li>
                                        <li>Home Health Care</li>
                                        <li>Skilled Nursing</li>
                                        <li>Ambulance</li>
                                        <li>etc.</li>`;
                keyFeatures[0].innerHTML = `<li>Unlimited Plan Design and Benefit Level Flexibility</li>
                                            <li>Visits 7 days of Coverage Variability</li>
                                            <li>Indemnity Based Benefits</li>`;
                rating[0].innerHTML = `<li>Attained Age Rates</li>
                                        <li>Composite Rates</li>
                                        <li>Optionally and Conditionally Renewable</li>`;
                break;
            default:

        }
        setTimeout(function () {
            benefit[0].style.animation = `detailsFadeIn 0.5s ease-in-out forwards 0.2s`;
            keyFeatures[0].style.animation = `detailsFadeIn 0.5s ease-in-out forwards 0.3s`;
            rating[0].style.animation = `detailsFadeIn 0.5s ease-in-out forwards 0.4s`;
        }, 10);

    });
});
