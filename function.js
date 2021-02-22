//Sanjay Kumar, 000811237
function changed(fieldName) {
    var fieldValue = $(`#${fieldName}`).val();

    var data = {
        field: fieldName,
        value: fieldValue
    };
    if (data.field === "employee_department") {
        if ((data.value).toLowerCase() === "sales") {
            $('#employee_bonus').prop("disabled", false);
        }
    }
    $.post('validate.php', data)
        .then(function (res) {
            if (res.error === false) {
                $(`#${res.field}`).removeClass('is-invalid');
                $(`#${res.field}`).addClass('is-valid');
                $(`#${res.field}`).parent().find('.invalid-feedback').text('');
            } else {
                $(`#${res.field}`).addClass('is-invalid');
                $(`#${res.field}`).removeClass('is-valid');
                console.log("in");
                switch (res.error) {

                    case "ERROR_NON_ALPHA":
                        $(`#${res.field}`).parent().find('.invalid-feedback').text(`must not have the numbers`);
                        break;

                    case "ERROR_LENGTH":
                        $(`#${res.field}`).parent().find('.invalid-feedback').text(`must be a certain length`);
                        break;
                    case "ERROR_ADVERTISING":
                        $(`#${res.field}`).parent().find('.invalid-feedback').text(`advertising is not a valid department`);
                        break;
                    default:
                        $(`#${res.field}`).parent().find('.invalid-feedback').text(`some other error.`);
                        break;
                }
            }
        });
}

function submitResult() {
    let employeeName = $('#employee_name').val();
    let employeeID = $('#employee_id').val();
    let employeeDepartment = $('#employee_department').val();
    let employeeBonus = $('#employee_bonus').val();
    let divElements = "output";
    let tableColor = "";
    console.log(employeeName);
    if (employeeName !== "" && employeeID !== "" && employeeDepartment !== "") {
        if (($('#employee_name').hasClass("is-valid")) && ($('#employee_id').hasClass("is-valid")) &&
            ($('#employee_department').hasClass("is-valid"))) {
            if((employeeDepartment.toLowerCase() === "sales") && ($('#employee_bonus').hasClass("is-valid"))) {
                tableColor = "table-primary"
           
            } else if(employeeDepartment.toLowerCase() === "hr") {
                tableColor = "table-warning";
                employeeBonus = "N/A";
   
            }else{
                employeeBonus = "N/A";
            }
            divElements = "<tr class =" + tableColor+">"
            divElements += "<td>"
            divElements += employeeName
            divElements += "</td>"
            divElements += "<td>"
            divElements += employeeID
            divElements += "</td>"
            divElements += "<td>"
            divElements += employeeDepartment
            divElements += "<td>"
            divElements += employeeBonus
            divElements += "</td>"
          
            $('.output').append(divElements);
            $('#employee_name').val('').removeClass('is-valid');
            $('#employee_id').val('').removeClass('is-valid');
            $('#employee_department').val('').removeClass('is-valid');
            $('#employee_bonus').val('').removeClass('is-valid');
            $('#employee_bonus').prop("disabled", true);
        }
    }


};