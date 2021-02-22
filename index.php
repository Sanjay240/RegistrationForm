<!doctype html>
<html>

<head>
    <!-- Sanjay Kumar, 000811237 -->
    <title>Registration</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="function.js"></script>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
    <h1>Employee Registry</h1>
    <div class="container-fluid">
    <form method="POST">
        <div class="form-row">
            <label for="employee_name" class="label col-md-3 control-label">Name</label>
            <div class="col-md-9 mb-3">
                <input type="text" class="form-control" onkeyup="changed('employee_name')" id="employee_name" name="employee_name" value="" placeholder="Jane Doe">
                <div class="invalid-feedback"></div>
            </div>
            <label for="employee_id" class="label col-md-3 control-label">Employee ID</label>
            <div class="col-md-9 mb-3">
                <input type="text" class="form-control" onkeyup="changed('employee_id')" id="employee_id" name="employee_id" value="" placeholder="123456789">
                <div class="invalid-feedback"></div>
            </div>

            <label for="employee_department" class="label col-md-3 control-label">Department</label>
            <div class="col-md-9 mb-3">
                <input type="text" class="form-control" onkeyup="changed('employee_department')" id="employee_department" name="employee_department" value="" placeholder="Sales">
                <div class="invalid-feedback"></div>
            </div>
            <label for="employee_bonus" class="label col-md-3 control-label">Bonus</label>
            <div class="col-md-9 mb-3">
                <input type="text" class="form-control" onkeyup="changed('employee_bonus')" id="employee_bonus" name="employee_bonus" value="" placeholder="250000" disabled>
                <div class="invalid-feedback"></div>
            </div>
            <button type="button" class="btn btn-primary submitButton" onclick="submitResult()">Submit</button>
        </div>
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Employee ID</th>
                <th scope="col">Department</th>
                <th scope="col">Bonus</th>
            </tr>
        </thead>
        <tbody class="output">

        </tbody>
    </table>
    </div>
    
</body>

</html>