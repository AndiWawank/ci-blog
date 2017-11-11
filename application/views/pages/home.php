<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Superman</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="assets/img/icon.png">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 profil text-center">
          <div class="image">
            <a href="#" type="button" data-container="body" data-toggle="popover" data-placement="right" title="Hallooooooo" data-content=":)"><img src="assets/img/gambar.png" alt="" id="img" data-toggle="tooltip" data-placement="bottom" title="Orang Ganteng"></a>
          </div>
          <h1>A.Firwansyah</h1>
          <h4>"The less obvious man"</h4>
          <a href="https://www.facebook.com/andiwawank.69" data-toggle="tooltip" data-placement="left" title="Facebook"><i class="fa fa-facebook-official"></i></a>
          <a href="https://github.com/AndiWawanK" data-toggle="tooltip" data-placement="bottom" title="GitHub"><i class="fa fa-github-alt"></i></a>
          <a href="https://twitter.com/andiwawank69" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
          <a href="https://www.linkedin.com/in/andi-wawank-a15026131/" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="https://www.instagram.com/andiwawank69/" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
          <a href="#" data-toggle="tooltip" data-placement="right" title="Mail"><i class="fa fa-envelope"></i></a>

          <ul class="menu">
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <li><a href="<?php echo base_url(); ?>posts">Blog</a></li>
            <li><a href="">Project</a></li>
            <li><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">About</a></li>
          </ul>

            <div class="panel panel-default">
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body"><hr>
                  <div class="box">
                    <p>Hello, My name is Andi WawanK. I am the last of three children. I was born in Bulukumba south sulawesi, 13 November 1998.
                      Currently, I live in Jalan Jembatan Merah number 99, Yogyakarta City.
                      I am studying at the University of Mercu Buana Yogyakarta majoring in informatics engineering
                      I like to learn programming languages, especially PHP and C</p>
                  </div>
                </div>
              </div>
            </div>

            <hr class="hr">
            <small style="color:#888;">Andi WawanK &copy; 2017 <i class="fa fa-rss"></i></small>

        </div> <!--Profil-->
        <div class="col-md-3"></div>

      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" charset="utf-8"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- <script src="assets/js/jquery.min.js"></script> -->
    <script>
    $(window).on('load',function(){
      $('.image').addClass('muncul')
    });
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    });
    $(function () {
      $('[data-toggle="popover"]').popover()
    });
    </script>
  </body>
</html>
