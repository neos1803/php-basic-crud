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
        <div class="dashboard" style="margin-left: 250px; margin-right: 200px; margin-top: 100px; padding: 0; background-color: white">
            
            <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-insert">
            Insert New Data !
            </button></center>
            <br>
            <table class="table table-bordered">
                <thead>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Action</th>
                </thead>
                <tbody>
                    <?php
                    include'../controller/connect.php';
                    $sql = mysqli_query($con, "SELECT * FROM siswa");
                    while($query = mysqli_fetch_array($sql)){
                        $id = $query['id_siswa'];
                        $nama = $query['nama'];
                        $kelas = $query['kelas'];

                        echo "<tr scope='row'>";
                        echo "<td>$id</td>";
                        echo "<td>$nama</td>";
                        echo "<td>$kelas</td>";
                        echo "<td>
                        <form action='action.php' method='post'>
                            <input type='hidden' name='id_user' value='$id'>
                            <button type='button' name='delete' class='btn btn-primary'>Delete</button>
                            <button type='button' name='edit' class='btn btn-primary'>Edit Data</button>
                        </form>
                        </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <div class="modal fade" id="modal-insert" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">New Data</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="nama">Nama :</label>
                                    <input name="nama" type="text" class="form-control" placeholder="Contoh: John john" required/>
                                </div>
                                <div class="form-group">
                                    <label for="kelas">Kelas</label>
                                    <input name="kelas" type="text" class="form-control" placeholder="Contoh: X-10" required/>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-primary">Reset</button>
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
                include'../controller/connect.php';
                if(isset($_POST['submit'])) {
                    $nama = $_POST['nama'];
                    $kelas = $_POST['kelas'];
                    $sql = mysqli_query($con, "INSERT into siswa(nama, kelas) VALUES ('$nama', '$kelas')");
                    echo "<script>alert('Data berhasil ditambahkan')</script>";
                    echo "<meta http-equiv='refresh' content='0 url=../view/home.php'>";
                }
            ?>
        </div>
    </body>
</html>