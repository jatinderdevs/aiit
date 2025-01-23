<?php include_once('./includes/header.php') ?>
    <section class="headersection">
        <div class="headerlayer">
            <div class="container">
                <h1 class="pageHeading">our  courses </h1>

            </div>
        </div>
    </section>
<section>
    <div class="container">
        <div class="text-center py-4">
            <button type="button"  onclick="showAllCourses()" class="btnCstm " id="allcourses">All Courses</button>
            <button type="button" onclick="filterCourse('cooking')" class="btnCstm blue ml-3 text-light" id="cooking"> Hospitality</button>
            <button type="button" onclick="filterCourse('leadership')" class="btnCstm green  mx-3 " id="leadership">Leadership</button>
            <button type="button" onclick="filterCourse('shortCourse')" class="btnCstm black text-light">Short Courses</button>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3 col-6 cooking">
                <a href="Coursepage.php">
                    <div class="courseCard ">
                        <div class="cardBody">
                            <img src="img/about/students.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="cardText">
                            <small class="badge badge-primary">SIT30821</small>
                            <h4> Certificate III in Commercial Cookery</h4>
                        </div>
                    </div>
                </a>
           
            </div>
            <div class="col-md-3 col-6 cooking">
                <a href="courses/commercialCookery/certificateIvKitchenManagement.php">
                    <div class="courseCard ">
                        <div class="cardBody">
                            <img src="img/about/students.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="cardText">
                            <small class="badge badge-primary">SIT40521</small>
        
                            <h4>Certificate IV in Kitchen Management
                                
                            <p class="text-danger">    (Packaged Pathway)</p></h4>
                        </div>
                    </div>
                </a>
             
            </div>
            <div class="col-md-3 col-6 cooking">
                <div class="courseCard ">
                    <div class="cardBody">
                        <img src="img/about/students.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="cardText">
                        <small class="badge badge-primary">SIT50422</small>
    
                        <h4> Diploma of Hospitality Management
                            <p class="text-danger">    (Packaged Pathway)</p></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 cooking">
                <div class="courseCard ">
                    <div class="cardBody">
                        <img src="img/about/students.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="cardText">
                        <small class="badge badge-primary">SIT50422</small>
    
                        <h4> Diploma of Hospitality Management
                            <p class="text-danger">  (Direct Entry) </p> </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 cooking">
                <div class="courseCard ">
                    <div class="cardBody">
                        <img src="img/about/students.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="cardText">
                        <small class="badge badge-primary">SIT60322</small>
    
                        <h4> Advanced Diploma of Hospitality Management
                            <p class="text-danger">    (Packaged Pathway)</p></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 leadership">
                <div class="courseCard">
                    <div class="cardBody">
                        <img src="img/about/students.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="cardText">
                        <small class="badge badge-success">BSB40520</small>
    
                        <h4> Certificate IV in Leadership and Management</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 leadership">
                <div class="courseCard">
                    <div class="cardBody">
                        <img src="img/about/students.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="cardText">
                        <small class="badge badge-success">BSB50420</small>
    
                        <h4>Diploma of LEADERSHIP AND MANAGEMENT</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 leadership">
                <div class="courseCard">
                    <div class="cardBody">
                        <img src="img/about/students.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="cardText">
                        <small class="badge badge-success">BSB60420</small>
    
                        <h4> Advanced Diploma of LEADERSHIP AND MANAGEMENT</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 leadership">
                <div class="courseCard">
                    <div class="cardBody">
                        <img src="img/about/students.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="cardText">
                        <small class="badge badge-success">BSB80320</small>
    
                        <h4> Graduate Diploma of Strategic Leadership</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 shortCourse">
                <div class="courseCard">
                    <div class="cardBody">
                        <img src="img/about/students.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="cardText">
                        <small class="badge badge-dark">SITSS00071</small>
    
                        <h4> Responsible Service of Alcohol</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 shortCourse">
                <div class="courseCard">
                    <div class="cardBody">
                        <img src="img/about/students.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="cardText">
                        <small class="badge badge-dark">SITSS00069</small>
    
                        <h4>  Food Safety Supervision Skill Set</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 shortCourse">
                <div class="courseCard">
                    <div class="cardBody">
                        <img src="img/about/students.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="cardText">
                        <small class="badge badge-dark">SITSS00068</small>
    
                        <h4>Food Handling Skill Set</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 shortCourse">
                <div class="courseCard">
                    <div class="cardBody">
                        <img src="img/about/students.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="cardText py-3">
                      
    
                        <h4>General English Course
                            <p> (Beginner to Advanced)</p></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 shortCourse">
                <div class="courseCard">
                    <div class="cardBody">
                        <img src="img/about/students.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="cardText py-3">
                      
    
                        <h4>Responsible Service of Alcohol Accredited Course
                            </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</section>
<?php include_once('./includes/footer.php') ?>
    <script>
        
        const courseCards =document.querySelectorAll('.col-6');
       
        //show all courses default
        function showAllCourses(){
            courseCards.forEach(card => {
            card.style.display="block";
        });
        }
        //course classname represent  coursename to filter and it should be same class name and coursename to filter
        function filterCourse(courseName){
            const filterCourses =document.querySelectorAll(`.${courseName}`);    
            courseCards.forEach(card => {
            card.style.display="none";
        });

        filterCourses.forEach(element => {
            const isCourseExist=element.classList.value.includes(courseName);
            if(isCourseExist){
                 element.style.display="block";
            }
        });

        }
     


     
    </script>
    <!-- cooking course filter -->
    <!-- <script>
               function fadeOut(el) {
            var opacity = 0; // Initial opacity
            var interval = setInterval(function() {
               if (opacity < 1) {
                  opacity += 0.1;
                  el.style.opacity = opacity;
               } else {
                  clearInterval(interval); // Stop the interval when opacity reaches 0
                  el.style.display = 'block'; // Hide the element
               }
            }, 100);
         }
        document.querySelector("#cooking").addEventListener('click',()=>{
            
            const cooking=document.querySelectorAll('.cooking');

            cooking.forEach(x=>{
                    fadeOut(x);
                    x.style.display = 'block';
             });
            })
             //leadership course effect btn click
             document.querySelector("#leadership").addEventListener('click',()=>{
            
            const cooking=document.querySelectorAll('.leadership');

            cooking.forEach(x=>{
                    fadeOut(x);
                    x.style.display = 'block';
             });
          
        })

    </script> -->
</body>

</html>