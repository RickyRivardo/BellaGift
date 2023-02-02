
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="google-signin-client_id"
      content="488662112083-kduspb43j4cod90idgbq82gjh0tkfd6n.apps.googleusercontent.com"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
  <script src="https://apis.google.com/js/api:client.js"></script>
  <script>
  var googleUser = {};
  var startApp = function() {
    gapi.load('auth2', function(){
      // Retrieve the singleton for the GoogleAuth library and set up the client.
      auth2 = gapi.auth2.init({
        client_id: '488662112083-kduspb43j4cod90idgbq82gjh0tkfd6n.apps.googleusercontent.com',
        cookiepolicy: 'single_host_origin',
        // Request scopes in addition to 'profile' and 'email'
        //scope: 'additional_scope'
      });
      attachSignin(document.getElementById('customBtn'));
    });
  };

  function attachSignin(element) {
    console.log(element.id);
    auth2.attachClickHandler(element, {},
        function(googleUser) {
          document.getElementById('name').innerText = "Signed in: " +
              googleUser.getBasicProfile().getName();
        }, function(error) {
          alert(JSON.stringify(error, undefined, 2));
        });
  }
  </script>

    <link rel="stylesheet" href="/css/style.css" />
    

    <title>Bella Gift - Landing page</title>
  </head>

  <body>
    <script src="index.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>

    <div class="container">
      
      <div class="forms-container">
        <div class="signin-signup">
          
     
          <form action="{{ route('accounts.store') }}" method="POST" enctype="multipart/form-data">
@csrf
            
            <h2 class="title">Join us</h2>
            <div class="join">
              <div class="input-field">
                <i class="fas fa-user"></i>
            <input type="text" name="name" class="form-control" placeholder="username">

              </div>
                  <div class="input-field">
                 <i class="fa fa-key" aria-hidden="true"></i>
              <input type="password" name="password" class="form-control" placeholder="password">
</div>
         <div id="gSignInWrapper">
    <span class="label"></span>
    <div id="customBtn" class="customGPlusSignIn">
      <div class="sign">
     <i class='fa fa-google'></i>
     <h6 class="googleid">Sign in with Google</h6>
     </div>
    </div>
  </div>
  <div id="name"></div>
  <script>startApp();</script>
              <button type="submit" class="btn btn-solid">Join</button>

         
       
                </div>
              </div>
            </div>
          </form>

          <form action="#" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Sign up" />

            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <!-- <button class="btn transparent" id="sign-up-btn">Sign up</button> -->
          </div>
          <img src="images/Bella Gift.png"  class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <button class="btn transparent" id="sign-in-btn">Sign in</button>
          </div>
          <img src="image/Bella Gift.png" class="image" alt="" />
        </div>
      </div>
    </div>
    <p class="note">
      Gift giving is an act of self-gratification. It is a good way of
      strengthening relationships. If you are in a friendship or a relationship,
      you should always <br> show the other person how much you 
      care for him or her. You don’t need to wait for an occasion in order to
      give a gift. Give one to show how much you love someone.
    </p>

    <script src="app.js"></script>
  </body>
</html>
