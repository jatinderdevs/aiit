<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Agents | AIIT Melbourne</title>
  <meta name="description" content="Study Commercial cookery & leadership Courses at AIIT Melbourne. Hands-on courses for career success. Enroll today!">
  <meta name="keywords" content="AIIT, AIIT Melbourne, Our College Migration Partners & Agreement, Approved Agent for AIIT College">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://www.aiit.edu.au/agents.php">
    <?php include_once('./includes/links.php') ?>
</head>

<body>
    
<?php include_once('./includes/header.php') ?>
    
    <section class="headersection">
        <div class="container">
            <h1 class="pageHeading">Education agent zone</h1>
        </div>
    </section>
<section>
    <div class="container">
        <a href="assets/forms-and-policies/forms/AIIT_45485_FORM_Agent_Application_RT.pdf"   class="btnCstm blue mt-4  text-light"> <i class="fa fa-download" aria-hidden="true"></i> Agent Application Form </a>
        <br>
        <hr>
        <div class="agents">
            <div class="agentbox">
                <div class="cardAgent">
                    <div class="agentlogo">
                        <img src="https://www.aiit.vic.edu.au/extra-images/agents/4u.webp" class="img-fluid" alt="">
                    </div>
                    <div class="agenttxt">
                        <h6>4U EDUCATION AGENCY</h6>
                        <p> 1602/150 Epping Road Lane Cove West, New South Wales 2066</p>
                    </div>
                    <div>
                        contact@4uaustralia.com

                        www.4ueducationagency
                    </div>
                </div>
            </div>
    
    </div>
    

</section>

<?php include_once('./includes/footer.php') ?>

<script>
    getAgentData();
async function getAgentData() {
const agents = document.querySelector('.agents');
const data=fetch('<?php echo BASE_PATH; ?>data/AgentData.csv') .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.text();
    })
    .then(csvText => {
        const rows = csvText.split('\n');
        const headers = rows[0].split(',');

        const data = rows.slice(1).map(row => {
            const values = row.split(',');
            return headers.reduce((acc, header, index) => {
                acc[header.trim()] = values[index]?.trim();
                return acc;
            }, {});
        });

         return data;
    })
    .catch(error => {
        console.error('Error fetching the CSV file:', error);
    });
const agentData=await data;
    agentData.pop();   // to re,ove the last line of unwanted data
let content="";
agentData.forEach(agent => {

    content+=`
      <div class="agentbox">
                <div class="cardAgent">
                    <div class="agentlogo">
                        <img src="${agent['logo']}" class="img-fluid" alt="">
                    </div>
                    <div class="agenttxt">
                        <h5>${agent['Agent Name']}</h5>
                      
                    </div>
                    <div>
                   <p> <i class="fa fa-phone" aria-hidden="true"></i> ${agent['Agent Business Phone']}</p>
                        <p> <i class="fa fa-envelope-o" aria-hidden="true"></i> ${agent['Agent Email']}</p>
                        <p> <a class="text-lowercase" href="http://${agent['website']}" target="_blank"> <i class="fa fa-globe" aria-hidden="true"></i> ${agent['website']}</a></p>
                       
                      
                    </div>
                </div>
            </div>
    
    `

});
agents.innerHTML=content;
}
</script>
</body>

</html>
<!-- <p><i class="fa fa-phone-square" aria-hidden="true"></i> ${agent['Agent Business Phone']}</p>
                        <a class="btn-link" href="${agent['Agent Email']}"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</a>
                        <p><i class="fa fa-globe" aria-hidden="true"></i> ${agent['website']}</p> -->