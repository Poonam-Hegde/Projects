
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PG Management | Rooms</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" type="image/png" href="./assets/pg-logo.png" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="//cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.css" />

</head>

<body style="background-color: #f3f3f3;" class="team-body">
<?php
    include('header.php');
      ?>
        <br/><br/><br/>
        <center>
            <h1 class="text-primary mt-3">Add Guest</h1>
        </center>
        <div class="container edit-form-div">
            
             <form action='addDetails.php' method='get'>
                        <div class="form-group">
                            <label for="room_no">Room No</label>
                            <input type="text" name='room_no' class="form-control" id="room_no" value=<?php echo $_GET['room_no'];?> readonly>
                        </div>
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" name='firstName' class="form-control" id="firstName" >
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" name='lastName' class="form-control" id="lastName" >
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name='email' class="form-control" id="email  " >
                        </div>
                          <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name='phone' class="form-control" id="phone" >
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" id='add-btn'>Add Detail</button>
                        </div>
                    </form>
        </div>
       
    
    

<?php
    include('footer.html');
      ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ad3bc45f55.js" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
    


</body>

</html>