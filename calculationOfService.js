
function Calculation() { 
    let car_cubic = document.getElementById("kuvika").value;
    let age =document.getElementById("hlikia").value;
    let days =document.getElementById("hmeres").value;
    let insurance_cost = 0;
    let cost_of_rent = 0;  

    if (car_cubic > 0 && car_cubic <1600) {
        if (days > 0 && days < 6) {
            cost_of_rent = days * 15.42;
        } 
        else if (days >=6  && days <=10) {
            cost_of_rent = days * 14.62;
        }
        else {
            cost_of_rent = days * 13.15;
        }
    }else if (car_cubic >1601 && car_cubic < 2000) {
        if (days > 0 && days < 6) {
            cost_of_rent = days * 16.82 ;
        } 
        else if (days >=6  && days <=10) {
            cost_of_rent = days * 15.76 ;
        }
        else {
            cost_of_rent = days *  14.80;
        }
    } else {
        if (days > 0 && days < 6) {
            cost_of_rent = days *  18.22;
        }
        else if (days >=6  && days <=10) {
            cost_of_rent = days *  17.10;
        }
        else {
            cost_of_rent = days *  16.20;
        }
    }

    if(age>=18 && age<=22) {
        insurance_cost = 0.00042;
    }
    else if (age <=30) {
        insurance_cost = 0.00036;
    }else {
        insurance_cost = 0.00036;
    }

    insurance_cost = Math.round(age * insurance_cost * car_cubic) ;
    console.log(insurance_cost);
    let final_renting_amount = Math.round(insurance_cost  + cost_of_rent);
    console.log(final_renting_amount);
    console.log(cost_of_rent);
    document.getElementById("output").innerHTML = "Tο αποτέλεσμα είναι:" + final_renting_amount;

    
    // const myDiv = document.getElementById("output");
    // const myNewDiv = document.createElement("div");
    // myNewDiv.style.border = "solid 1px";
    // myNewDiv.appendChild(myDiv);
    // myDiv.insertBefore(myNewDiv, myDiv);
   

    
}