<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Former-student.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1 id="fading-text">We are starting your registration</h1>
      <div class="container">
        <div class="sql-form">
          <div class="label">
            <div class="student name" id="first__slide">
              <div class="txt">Name of student <div class="small-txt">(As on Birth Certificate)</div></div>
              <div class="placeholder">
                
                  <div ><input type="text" placeholder="Full Name" required></div>
                  <div class="next__button1"><input type="submit" value="Next"></div>
                
              </div>
            </div>

            <div class="student birth" id="second__slide">
              <div class="txt">Date and Place of Birth <div class="small-txt">(As on Birth Certificate)</div></div>
              <div class="placeholder">
                  <div > 
                    <input type="date" placeholder="Date of Birth" required>
                    <input type="text" placeholder="Place of Birth">
                  </div>
                  <div class="next__button2"> <input type="submit" value="Next" required></div>
                </form>
              </div>
            </div>

            <div class="student lastclass" id="third__slide">
              <div class="txt">Last class attended<div class="small-txt">(Precise the letter of the class <span id="example"> EX: Form 3E</span>)</div></div>
              <div class="placeholder">
                <form action="Former-student SQLcompleted.html" method="post">
                  <div ><input type="text" placeholder="Class" required></div>
                  <div class="next__button"><input type="submit" value="Submit" required></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>