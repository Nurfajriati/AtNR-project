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
        width: 850px;
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
  <div class="container mt-5" style="position: relative;">
    <br>
      <div class = "text-center">
      <h1><b>RATING</b></h1>
        <form>
              <div class="rating">
                  <input id="star5" name="star" type="radio" value="5" class="radio-btn hide" />
                  <label for="star5">☆</label>
                  <input id="star4" name="star" type="radio" value="4" class="radio-btn hide" />
                  <label for="star4" >☆</label>
                  <input id="star3" name="star" type="radio" value="3" class="radio-btn hide" />
                  <label for="star3" >☆</label>
                  <input id="star2" name="star" type="radio" value="2" class="radio-btn hide" />
                  <label for="star2" >☆</label>
                  <input id="star1" name="star" type="radio" value="1" class="radio-btn hide" />
                  <label for="star1" >☆</label>
                  <div class="clear"></div>
              </div>
          </form>
          <div class = "text-center">
      <h1><b>RATING TEMPAT WISATA</b></h1>
          <form>
            
              <div class="rating">
                  <input id="star5" name="star" type="radio" value="5" class="radio-btn hide" />
                  <label for="star5" >☆</label>
                  <input id="star4" name="star" type="radio" value="4" class="radio-btn hide" />
                  <label for="star4" >☆</label>
                  <input id="star3" name="star" type="radio" value="3" class="radio-btn hide" />
                  <label for="star3" >☆</label>
                  <input id="star2" name="star" type="radio" value="2" class="radio-btn hide" />
                  <label for="star2" >☆</label>
                  <input id="star1" name="star" type="radio" value="1" class="radio-btn hide" />
                  <label for="star1" >☆</label>
                  <div class="clear"></div>
              </div>
          </form>
      </div>
      </div>
</body>