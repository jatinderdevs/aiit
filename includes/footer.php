<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="foottab text-center">
                        <h4 class="m-0">AUSTRALIAN INTERNATIONAL INSTITUTE OF TECHNOLOGY</h4>
                        <span class="">
                            <a href="https://training.gov.au/Organisation/Details/45485" target="_blank">RTO - 45485 </a>
                            <br>
                            <a href="https://cricos.education.gov.au/Institution/InstitutionDetails.aspx?ProviderCode=03754M" target="_blank"> CRICOS - 03754M</a><br>
                            <a href="https://abr.business.gov.au/ABN/View?id=24622575679" target="_blank">ABN - 24 622 575 679</a>
                        </span>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="foottab">
                        <h4>quick links</h4>
                        <ul>
                            <li><a href="https://www.asqa.gov.au/" target="_blank">national Regulator - ASQA</a></li>
                            <li><a href="https://www.education.gov.au/esos-framework" target="_blank">ESOS Legislative
                                    Framework</a></li>
                            <li><a href="https://www.yourcareer.gov.au/learn-and-train/training-providers/45485"
                                    target="_blank">YourCareer (MySkills)</a></li>
                            <li><a href="useful-links.php">Useful Links</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="foottab">
                        <h4>pdf downloads</h4>
                        <ul>
                            <li>
                                <a href="PDF/AIIT_45485_Student_Handbook_RT.pdf" target="_blank">Student Handbook</a>
                            </li>
                            <li>
                                <a href="PDF/forms/AIIT_45485_FORM_Admissions_Application_RT.pdf"
                                    target="_blank">Student Application Form</a>
                            </li>
                            <li>
                                <a href="PDF/forms/AIIT_45485_FORM_Short_Course_Admissions_Application.pdf"
                                    target="_blank">Application Form - Short Courses</a>
                            </li>
                            <li>
                                <a href="PDF/forms/AIIT_45485_FORM_Agent_Application_RT.pdf" target="_blank">Agent
                                    Application Form</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="foottab text-center">
                        <h4>business hours</h4>
                        <span class="">
                            <p>Monday to Friday <br>9:00am to 5:00pm</p>

                        </span>
                        <hr>
                        <h6>AQF CERTIFICATE VERIFICATION</h6>
                        <a href="https://learner.wisenet.co/AII/CertificateValidation" target="_blank" class="btn btn-sm btn-outline-light">Click here</a>
                    </div>
                </div>
            </div>
            <div class="obriginal">
                <div>
                    <img src="img/flag.png" width="150px" class="mb-2 img-fluid" alt="">

                    <img src="img/flag_pride_inclusion.jpg" width="60px" class="img-fluid" alt="">
                </div>
                <p>Australian International Institute of Technology acknowledges Aboriginal and Torres Strait Islander
                    people as the Traditional Custodians of the land and acknowledges and pays respect to their Elders,
                    past and present.
                    <br>
                    <br>
                    Australian International Institute of Technology respect and welcome people of all backgrounds,
                    genders, sexualities, abilities and cultures.</p>
            </div>

        </div>
    </footer>
    <div class="footbar">
        <div class="container">
            <p> &copy; 2024 Australian International Institute of Technology Pty Ltd ATF AIIT Unit Trust T/A
                Australian
                International Institute of Technology.
                (Established 2017)</p>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/navigation.js"></script>

    <script>
        //nav droop down
        //nav droop down
       const studentinformation=document.querySelector('.studentinformation');
        function showdrop(btn) {
        btn.childNodes[1].style.color="#f7a30a";
 
            if(studentinformation.style.height=="auto"){
                studentinformation.style.height="0px";
                studentinformation.style.padding="0px";
                studentinformation.style.overflow="hidden";
              
            //studentinformation.style.opacity="0";
            btn.childNodes[1].style.color="#333"
            }else{
                studentinformation.style.opacity="1";
                studentinformation.style.padding="30px 0";

              studentinformation.style.height="auto";

            }
            
        }
        $('#banner').owlCarousel({
            loop: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 2500,

            animateOut: 'fadeOut',
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 1
                }
            }
        })
        $('#testimonials').owlCarousel({
            loop: true,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 3500,
            autoplayHoverPause:true,
            dots:true,
            animateOut: "animate__animated animate__slideOutDown",
            // animateIn: "animate__animated animate__flipInX",
            items: 1,
            
        })
        
        var courseOwl=  $('#courses').owlCarousel({
            loop: true,
            margin:20,
            stagePadding: 50,
            autoplay: true,
            autoplayTimeout: 1500,
            autoplayHoverPause:true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
       

      var owl=  $('.ourpartners').owlCarousel({
            loop: true,
            margin:20,
            stagePadding: 50,
            autoplay: true,
            autoplayTimeout: 1500,
            dots:false,
          
    
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });
        owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});

    </script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6799afd53a84273260769046/1iio5dmmu';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>