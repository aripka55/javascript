// hide the total dollar amount until calculated
document.getElementById("totalTip").style.display = "none";

// Build the onclick event for the calculate button
document.getElementById("calculate").onclick = function() { calculateTip(); };

// Create the calculateTip function
function calculateTip(){
    let billAmt = document.getElementById("billamt").value;
    let serviceQual = document.getElementById("serviceQual").value;
    let peopleAmt = document.getElementById("peopleamt").value;

    // Check for zero or null values
    if (peopleAmt <= 0 || isNaN(peopleAmt)){
        alert("You must enter a number of people, \nMust be greater than 0.");
        return;
    }

    if (billAmt < 0 || isNaN(billAmt)){
        confirm("You must enter a bill amount, \nMust be greater than 0.");
        return;
    }

    // Calculate total
    let total = (billAmt * serviceQual) / peopleAmt;
    //total = Math.round(total); // Rounds the number

    document.getElementById("totalTip").style.display = "block";
    document.getElementById("tip").innerHTML = total.toFixed(2); // Rounds the decimals to two digits
}