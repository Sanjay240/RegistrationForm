<!-- 
    Responsive Images Done Right: A Guide To <picture> And srcset
    https://www.smashingmagazine.com/2014/05/responsive-images-done-right-guide-picture-srcset/
-->

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Example: Use of @media to create responsive websites</title>

        <style>
            h1 {
                font-size: 40px;
                color: red;
            }

            p {
                font-size: 16px;
                color: darkgray;
            }

            @media only screen and (max-width: 320px) {
                h1 {
                    font-size: 60px;
                    color: red;
                }

                p {
                    font-size: 22px;
                    color: black;
                }
            }

            @media only screen and (max-width: 768px) {
                h1 {
                    font-size: 60px;
                    color: red;
                }

                p {
                    font-size: 22px;
                    color: black;
                }
            }
        </style>
    </head>

    <body>
        <div class="container-fluid">
            <h1>This is my title</h1>
            <img class="img-fluid" src="https://images.unsplash.com/photo-1555443712-22cd30585e5c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Some book or we" />
            <p>Aliquam erat volutpat. Vestibulum scelerisque gravida massa ac fermentum. Aenean turpis tellus, volutpat sit amet est in, rutrum pharetra purus. Fusce auctor consectetur quam. Praesent a risus ornare, semper nisl ac, commodo quam. Aenean efficitur iaculis aliquam. Vivamus a odio odio. Nam euismod magna et neque euismod rutrum. Nunc pellentesque ligula vel turpis vehicula varius. Nullam cursus erat in massa sagittis placerat. Fusce condimentum ullamcorper imperdiet.</p>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Sex</th>
                        <th>Example</th>
                        <th>Example</th>
                        <th>Example</th>
                        <th>Example</th>
                        <th>Example</th>
                        <th>Example</th>
                        <th>Example</th>
                        <th>Example</th>
                        <th>Example</th>
                        <th>Example</th>
                        <th>Example</th>
                        <th>Example</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>1</td>
                        <td>Anna</td>
                        <td>Pitt</td>
                        <td>35</td>
                        <td>New York</td>
                        <td>USA</td>
                        <td>Female</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p>Maecenas faucibus mi et turpis porttitor varius. Ut at luctus leo. Nulla eu aliquam mauris. Morbi in porta mi. Vestibulum eget hendrerit tellus. Integer in sapien non ex lacinia interdum egestas id nibh. Morbi volutpat sit amet mauris vel pretium. Sed risus elit, vestibulum ut nulla id, gravida tempor sapien. Nam in dui lacus. Aliquam egestas odio eget faucibus malesuada. Aliquam interdum non ligula ut pharetra. In et est eu mauris aliquam suscipit. Proin non ante at nisl mollis rhoncus sit amet non tortor. Vestibulum tincidunt lacinia nisl nec eleifend. Donec interdum risus sed felis pellentesque accumsan.</p>
        </div>
    </body>
</html>