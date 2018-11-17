

 //GET:
$("#get").click(function() {

    $(".result").html("Result: ");
    console.log("In GET Func");
    $.get("http://shenkar.html5-book.co.il/2018-2019/dcs/dev_38/service_calculator/dcs_6.php?func=sum&num1=9&num2=9&num3=10",
    function(data) {
        $(".result").append(data.retVal);
    });
});



// POST:
$("#post").click(function () {

    $(".result").html("Result: ");
    console.log("In POST Func");
    $.post("http://shenkar.html5-book.co.il/2018-2019/dcs/dev_38/service_calculator/dcs_6.php",
        {func: "avg", 'num1': 9, 'num2': 9, 'num3': 10},
        function(data) {
            $(".result").append(data.retVal);
        }
    );
});


//PUT:
$("#put").click(function() {

    $(".result").html("Result: ");
    console.log("In PUT Func");
    var dataObj = {'func': 'mult', 'num1': 9, 'num2': 9, 'num3': 10};
    $.ajax({
        url: "http://shenkar.html5-book.co.il/2018-2019/dcs/dev_38/service_calculator/dcs_6.php",
        data: dataObj,
        type: 'PUT',
        success: function(data) {
            $(".result").append(data.retVal);
        }
    });
});