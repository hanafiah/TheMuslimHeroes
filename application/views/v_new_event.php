<?php
/**
 * @author Mohammad Khalid Hussain <mohammad.khalid.hussain@gmail.com>
 * @since 12/08/2015
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <title>The Muslim Heroes</title>
    </head>
    <body>
        <div class="container">
            <h1>Add New Event</h1>
            <form method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="name" value="">
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input name="date" type="text" class="form-control" id="date" placeholder="YYYY-MM-DD" value="">
                </div>
                <div class="form-group">
                    <label for="time">Time</label>
                    <input name="time" type="text" class="form-control" id="time" placeholder="HH:MM" value="">
                </div>
				<div class="form-group">
                    <label for="location">Location</label>
                    <input name="location" type="text" class="form-control" id="location" placeholder="location" value="">
                </div>
                <button name="btnAdd" type="submit" class="btn btn-default">Submit</button>
                <a href="<?php echo site_url('events');?>" class="btn btn-link">Back</a>
            </form>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>