<?php include_once('./includes/header.php') ?>
    <section class="headersection">
        <div class="container">
            <h1 class="pageHeading">agent zone</h1>
        </div>
    </section>
<section>
    <div class="container">

        <a href="https://www.aiit.vic.edu.au/PDF/forms/AIIT_45485_FORM_Agent_Application_RT.pdf"  download class="btn btn-warning">Download Agent Application Form </a>
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
const data=fetch('./data/AgentData.csv') .then(response => {
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
    
let content="";
agentData.forEach(agent => {
    content+=`
      <div class="agentbox">
                <div class="cardAgent">
                    <div class="agentlogo">
                        <img src="https://dummyimage.com/100X100/b5b5b5/000000&text=Agency+Image" class="img-fluid" alt="">
                    </div>
                    <div class="agenttxt">
                        <h6>${agent['Agent Name']}</h6>
                        <p> 1602/150 Epping Road Lane Cove West, New South Wales 2066</p>
                    </div>
                    <div>
                        <p><i class="fa fa-phone-square" aria-hidden="true"></i> ${agent['Agent Business Phone']}</p>
                        <a class="btn-link" href="${agent['Agent Email']}"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</a>
                        <p><i class="fa fa-globe" aria-hidden="true"></i> ${agent['website']}</p>
                      
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