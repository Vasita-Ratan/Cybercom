challanges :-3

var cal = [124, 48, 268];
var arry = [];

function calculateTip() {
    for (i = 0; i < 3; i++) {
        if (cal[i] <= 50) {
            arry[i] = (cal[i] * 20) / 100;
        }
        else if (cal[i] >= 50 && cal[i] <= 200) {
            arry[i] = (cal[i] * 15) / 100;
        }
        else {
            arry[i] = (cal[i] * 10) / 100;
        }
    }
    console.log("Total amount of restaurent is :"+cal);
    console.log("Total amount of tip is :"+arry);
 };
calculateTip();
