<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Triangle.php";

    $app = new Silex\Application();

    $app->get("/", function()
    {
        return
        "
        <!DOCTYPE html>
        <html>
        <head>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
            <title>Type my Triangle</title>
        </head>
        <body>
            <div class='container'>
                <h1>Is what I have here a triangle?</h1>
                <p>Complete all fields in the form below to determine if you have the measurements for a triangle.</p>
                <form action='tri_type'>
                    <div class='form-group'>
                        <label for='first_side'>Side 1 (height):</label>
                        <input id='first_side' name='first_side' class='form-control' type='number'>
                    </div>
                    <div class='form-group'>
                        <label for='second_side'>Side 2 (length):</label>
                        <input id='second_side' name='second_side' class='form-control' type='number'>
                    </div>
                    <div class='form-group'>
                        <label for='third_side'>Side 3 (width):</label>
                        <input id='third_side' name='third_side' class='form-control' type='number'>
                    </div>
                    <button type='submit' class='btn-success'>Triangle, here?</button>
                </form>
            </div>
        </body>
        </html>
        ";
    });
//format tri_type page with bootstrap. idk rn how to use it and get the html and needed functions to display and what not. aye!
    $app->get("/tri_type", function()
    {
        $my_triangle = new Triangle($_GET['first_side'], $_GET['second_side'], $_GET['third_side']);
        $area = $my_triangle->area();

        // <head>
        //     <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
        //     <title>Type my Triangle</title>
        // </head>
        // <body>
            // <div class='container'>
                if ($area <= 0)
                {
                    return '<h3>Error: All fields must be set to integers greater than zero.</h3>';
                }
                else
                {
                    return $my_triangle->type();
                }
        //     </div>
        // </body>
        // </html>
        // ";
    });

    return $app;
 ?>
