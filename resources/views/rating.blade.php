<!DOCTYPE html>
<html lang="en">
<head>
  <title>AtNR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->
  <style>
    body{
      background-color: #855E5E
    }
    .txt-center {
      text-align: center;
    }
    .hide {
      display: none;
    }

    .clear {
      float: none;
      clear: both;
    }

    .rating {
        width: 840px;
        unicode-bidi: bidi-override;
        direction: rtl;
        position: relative;
        padding: 55px 0;
        padding-left: 450px;
    }

    .rating > label {
        float: right;
        display: inline;
        padding: 0;
        margin: 0;
        position: relative;
        width: 1.1em;
        cursor: pointer;
        color: #000;
        font-size: 70px;
    }

    .rating > label:hover,
    .rating > label:hover ~ label,
    .rating > input.radio-btn:checked ~ label {
        color: transparent;
    }

    .rating > label:hover:before,
    .rating > label:hover ~ label:before,
    .rating > input.radio-btn:checked ~ label:before,
    .rating > input.radio-btn:checked ~ label:before {
        content: "\2605";
        position: absolute;
        left: 0;
        color: #FFD700;
    }
    </style>
</head>
<body>
  <div class="container mt-3" style="position: relative;">
    <br>
      <div class = "text-center">
      <h1><b>RATING</b></h1>
        <form action="/rating/store" method ="get">
          {{csrf_field()}}
              <div class="rating">
                  <input id="star5" name="rating_web" type="radio" value="5" class="radio-btn hide" />
                  <label for="star5">☆</label>
                  <input id="star4" name="rating_web" type="radio" value="4" class="radio-btn hide" />
                  <label for="star4" >☆</label>
                  <input id="star3" name="rating_web" type="radio" value="3" class="radio-btn hide" />
                  <label for="star3" >☆</label>
                  <input id="star2" name="rating_web" type="radio" value="2" class="radio-btn hide" />
                  <label for="star2" >☆</label>
                  <input id="star1" name="rating_web" type="radio" value="1" class="radio-btn hide" />
                  <label for="star1" >☆</label>
                  <div class="clear"></div>
              </div>
      <h1><b>RATING TEMPAT WISATA</b></h1>
      <br><br>
      <input type="text" id="ratingwisata" name="nama_tempat"style="width: 30%"><br>
              <div class="rating">
                  <input id="star6" name="rating_tempat" type="radio" value="5" class="radio-btn hide" />
                  <label for="star6" >☆</label>
                  <input id="star7" name="rating_tempat" type="radio" value="4" class="radio-btn hide" />
                  <label for="star7" >☆</label>
                  <input id="star8" name="rating_tempat" type="radio" value="3" class="radio-btn hide" />
                  <label for="star8" >☆</label>
                  <input id="star9" name="rating_tempat" type="radio" value="2" class="radio-btn hide" />
                  <label for="star9" >☆</label>
                  <input id="star10" name="rating_tempat" type="radio" value="1" class="radio-btn hide" />
                  <label for="star10" >☆</label>
                  <div class="clear"></div>
              </div>
              <br>
              <input type="submit" value="done" style="position: absolute;  width:100px; height:45px; bottom: 70px; right: 200px; background-color: #C4C4C4; font-family: Times New Roman, Times, serif;"> 
            </form>
      </div>
      <a href="/" class="btn"><img src="img/back.png" alt="" style="width: 80px;"></a>
      </div>
</body>