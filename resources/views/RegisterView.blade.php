<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>



<form action ="/register" method='POST'>
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Register data diri</label>
        <input type="text" class="form-control" aria-describedby="nama" placeholder="nama" name="name">
    </div>
    <div class="form-group">
        <input type="email" class="form-control" aria-describedby="email" placeholder="email" name="email">
    </div>
    <div class= "form-group">
        <input type="password" class="form-control" aria-describedby="password" placeholder="password" name="password">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  
  <!--Menjalankan function-->

</form>