<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue Booking List</title>
</head>
<body>
    <style>
        body{
            background: #80808045;
        }

        input[type=checkbox]
        {
            /* Double-sized Checkboxes */
            -ms-transform: scale(1.5); /* IE */
            -moz-transform: scale(1.5); /* FF */
            -webkit-transform: scale(1.5); /* Safari and Chrome */
            -o-transform: scale(1.5); /* Opera */
            transform: scale(1.5);
            padding: 10px;
        }

        td{
            vertical-align: middle !important;
        }

        td p{
            margin: unset
        }

        img{
            max-width:100px;
            max-height: 150px;
        }
    </style>

        <?php 
            $page = isset($_GET['page']) ?$_GET['page'] : "sidetopbar";
            include $page.'.php';
        ?>  

        <main id="view-panel" >
            <div class="col-lg-12">
                <div class="row mb-4 mt-4">
                    <div class="col-md-12"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <b>Venue Booking List</b>
                                <span class="">
                                    <button class="btn btn-primary btn-block btn-sm col-sm-2 float-right" type="button" id="new_book">
                                    <i class="fa fa-plus"></i> New</button>
                                </span>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="">Booking Information</th>
                                            <th class="">Customer Information</th>
                                            <th class="">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($venueBooking as $abook): ?>
                                        <tr>
                                            <td><?= $abook['id'] ?></td>
                                            <td class="">
                                                <p>Venue: <?= $abook['venue'] ?><b></b></p>
                                                <p><small>Duration: <?= $abook['datetime'] ?></small></p>
                                                <p><small>Schedule: <?= $abook['duration'] ?> <b></b></small></p>
                                            </td>
                                            <td class="">
                                            <p>Booked by: <?= $abook['fullname'] ?></b></p>
                                            <p><small>Email: <?= $abook['email'] ?></b></small></p>
                                            <p><small>Contact: <?= $abook['contact'] ?></b></small></p>
                                            <p><small>Address: <?= $abook['address'] ?></b></small></p>
                                            </td>
                                            
                                            <td class="text-center">
                                                    <span class="badge badge-secondary">For Verification</span>
                                                    <span class="badge badge-primary">Confirmed</span>
                                                    <span class="badge badge-danger">Cancelled</span>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-sm btn-outline-primary edit_book" type="button">Edit</button>
                                                <button class="btn btn-sm btn-outline-danger delete_book" type="button">Delete</button>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </main>
</body>
</html>