
$(document).ready(function () {
    $(".score_inp").change(function () {
        var classInp = $(this).attr('class').split(' ')[1];
        var sum = 0;
        $("." + classInp).each(function () {
            try {
                var tempVal = $(this).val();
                if (tempVal.length > 0) {
                    sum += parseInt(tempVal);
                    // alert(sum);
                }
            } catch (err) {
                document.getElementById("demo").innerHTML = err.message;
            }
        });
        var rowId = classInp.split('_')[1];
        $(".final_" + rowId).val(sum + "");
        setSumFinals();
        findTotal();

    });

    function setSumFinals() {
        var sum = 0;
        $(".final_score_quantity").each(function () {
            try {
                var tempVal = $(this).val();
                if (tempVal.length > 0) {
                    sum += parseInt(tempVal);
                    // alert(sum);
                }
            } catch (err) {
                document.getElementById("demo").innerHTML = err.message;
            }
        });
        $(".showSumOfFinals").html(sum + "");
        $(".ShowTotalPublic").val(sum + "");
    }
});

//custom js  table2
$(document).ready(function () {
    $(".score_inp_tb2").change(function () {
        var classInpt_tb2 = $(this).attr('class').split(' ')[1];
        var sum = 0;
        $("." + classInpt_tb2).each(function () {
            try {
                var tempVal = $(this).val();
                if (tempVal.length > 0) {
                    sum += parseInt(tempVal);
                    // alert(sum);
                }
            } catch (err) {
                document.getElementById("demo").innerHTML = err.message;
            }
        });
        var rowId = classInpt_tb2.split('_')[2];
        $(".final_tb2_" + rowId).val(sum + "");
        setSumFinalsTb2();
        findTotal();
        // alert(sum);
    });

    function setSumFinalsTb2() {
        var sum = 0;
        $(".final_score_quantity_tb2").each(function () {
            try {
                var tempVal = $(this).val();
                if (tempVal.length > 0) {
                    sum += parseInt(tempVal);
                    // alert(sum);
                }
            } catch (err) {
                document.getElementById("demo").innerHTML = err.message;
            }
        });

        $(".showSumOfFinalsTbl2").html(sum + "");
        $(".ShowTotalPrivate").val(sum + "");
    }
});

function findTotal() {
    var sum = 0;
    $(".SumLike").each(function () {
        try {
            var tempVal = $(this).val();
            if (tempVal.length > 0) {
                sum += parseInt(tempVal);
                // alert(sum);
            }
        } catch (err) {
            document.getElementById("demo").innerHTML = err.message;
        }
    });
    $(".ShowTotalFinalPubAndPri").val(sum + "");
}

