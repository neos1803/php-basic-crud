<!DOCTYPE html>
<html>
    <head>
        <title>Simple CRUD</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="menu" style="margin-left: 250px; margin-right: 200px; margin-top: 100px; padding: 0; background-color: white">
            <center><img src="#"></center>
            <br>
            <br>
            <form action="../controller/login.php" method="post">
                <div class="form-group">
                    <center><label for="Username">Username: </label></center>
                    <center><input type="text" class="form-control" name="username" style="width: 25%;" required/></center>
                </div>
                <div class="form-group">
                    <center><label for="Password">Password: </label></center>
                    <center><input type="password" class="form-control" name="password" style="width: 25%;" required/></center>
                </div>
                <center><button class="btn btn-success btn-block" name="masuk" style="width: 25%;" type="submit">Masuk</button></center>
                <br>
            </form>
            <center><button class="btn btn-success btn-block" data-toggle="modal" data-target="#modal-register" style="width: 25%;">Register Here!</button></center>
        </div>
        <div class="modal fade" id="modal-register" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Register New User</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="../controller/register.php" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Username: </label>
                                <input type="text" class="form-control" name="username" placeholder="Contoh: neos18" required>
                            </div>
                            <div class="form-group">
                                <label>Password: </label>
                                <input type="password" class="form-control"name="password" placeholder="123456x" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="register">Daftar</button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>