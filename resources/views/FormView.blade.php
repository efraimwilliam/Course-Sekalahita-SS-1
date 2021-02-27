<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<form action ="/resource" method='POST'>
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Data diri anda</label>
        <input type="text" class="form-control" aria-describedby="nama" placeholder="Nama" name="nama">
    </div>
    <div class= "form-group">
        <input type="text" class="form-control" aria-describedby="nama" placeholder="Alamat" name="alamat">
    </div>
    <div class= "form-group">
        <input type="text" class="form-control" aria-describedby="nama" placeholder="Nim" name="nim">
    </div>

  </div>
  <small id="emailHelp" class="form-text text-muted">Ini adalah data anda</small>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>