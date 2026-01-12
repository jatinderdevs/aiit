                <div class="addon_info">
                        <h5 class="text-dark ">Available intake</h5>
                        <br>
                        <!-- <hr> -->
                        <ul id="intakeDates">
                            <li><i class="fa fa-clock-o" aria-hidden="true"></i>  15th March 2025</li>
                            <li><i class="fa fa-clock-o" aria-hidden="true"></i>  15th january 2025</li>
                            <li><i class="fa fa-clock-o" aria-hidden="true"></i>  15th december 2025</li>
                        </ul>
                </div>
                <div class="querybox text-center">
                            <h5>want to know more</h5>
                            <br>
                                <a href="../../contactus.php" class="btnCstm">Contact now</a>
                            <br>
                            <br>
                        <small>Intake details, enrollment Process, entry requirements</a></small>
                </div>
                <br>
                <div class="text-center NRT">
                        <img src="../../img/courses/ntr.png"  class="img-fluid w-50" alt="">
                </div>


                <script>
                    const ul= document.getElementById("intakeDates");
                    let html='';
 const now = new Date(); // Hardcoded for example; use new Date() for real-time

// Function to find the second Monday of a given month/year (month is 0-11)
function secondMonday(year, month) {
    const firstDay = new Date(year, month, 1);
    const dayOfWeek = firstDay.getDay(); // 0=Sun, 1=Mon, ..., 6=Sat
    const targetWeekday = 1; // Monday
    const daysToFirstMonday = (targetWeekday - dayOfWeek + 7) % 7;
    const firstMonday = new Date(year, month, 1 + daysToFirstMonday);
    const secondMondayDate = new Date(year, month, 1 + daysToFirstMonday + 7);
    return secondMondayDate;
}

// Function to format date as "Day MonthName Year"
function formatDate(date) {
    const day = date.getDate();
    const monthNames = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ];
    const monthName = monthNames[date.getMonth()];
    const year = date.getFullYear();
    return `${day} ${monthName} ${year}`;
}

// Start from current month/year
let currentYear = now.getFullYear();
let currentMonth = now.getMonth(); // 0-11
const secondMondays = [];

let i = 0;
while (secondMondays.length < 3) {
    let targetMonth = currentMonth + i;
    let targetYear = currentYear;
    if (targetMonth > 11) {
        targetMonth -= 12;
        targetYear += 1;
    }
    const candidate = secondMonday(targetYear, targetMonth);
    if (candidate >= now) {
        secondMondays.push(formatDate(candidate));
    }
    i += 1;
}


secondMondays.forEach(date =>{ 
    html+=` <li><i class="fa fa-clock-o" aria-hidden="true"></i>  ${date}</li>`;
});
ul.innerHTML=html;

</script>

