<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php require 'header.php' ?>
  <?php
    $quer='SELECT * FROM bloglist';
    $querr= mysqli_query($con, $quer);
    
  ?>
        <div class="container my-5">
          <div class="row">
            <?php while($gnum=mysqli_fetch_array($querr))
           { ?>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                 <img src="<?=$gnum[4]?>" alt="" class="img-fluid">
                 <h3 class="text-center text-decoration-none"><a href="blogpost.php?id=<?=$gnum[0]?>" class="stretched-link "><?=$gnum[1]?></a></h3>
               </div>
               <div class="card-footer text-truncate"><?=$gnum[2]?></div>
              </div>
            </div>
            <?php }?>
          </div>
          
          </div>

  <?php require 'footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html> 