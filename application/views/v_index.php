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
            <h1>My Users <a class="btn btn-primary" href="<?php echo site_url('events/new_event');?>" role="button">New Event</a></h1>
            <table class="table table-condensed">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Location</th>
					<th>Action</th>
                </tr>
                <?php
                foreach ($events as $event) {
                    ?>
                    <tr>
                        <td><?php echo $event->id; ?></td>
                        <td><?php echo $event->name; ?></td>
                        <td><?php echo $event->date; ?></td>
                        <td><?php echo $event->time; ?></td>
						<td><?php echo $event->location; ?></td>						
                        <td>
                            <div class="btn-group" role="group" aria-label="...">
                                <a href="<?php echo site_url('events/edit/' . $event->id); ?>" class="btn btn-default btn-sm">Edit</a>
                                <a href="<?php echo site_url('events/delete/' . $event->id); ?>" class="btn btn-default btn-sm">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <?php
                }
                if (count($users) == 0) {
                    ?>
                    <tr><td colspan="3">Sorry, we have no data</td></tr>
                    <?php
                }
                ?>
            </table>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>