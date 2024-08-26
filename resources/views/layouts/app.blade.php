<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One African Technologies</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="style.css">
</head>


<nav class="navbar">
  <div class="navbar-brand">One African Technologies</div>
  <div class="navbar-collapse">
      <ul class="navbar-nav">
         <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('services.index') }}">Services</a></li>
        <li><a href="{{ route('projects.index') }}">Projects</a></li>
        <li><a href="{{ route('contacts.index') }}">Contact</a></li>
      </ul>
      <div class="hamburger" onclick="toggleMenu()">
          <span></span>
          <span></span>
          <span></span>
      </div>
  </div>
</nav>

    
        <section class="home">
          <div class="description">
            <h1 class="title">
              <span class="gradient-text">Make your apps </span> with One Afrik Technologies
            </h1>
            <p class="paragraph">
              In a world filled with opportunities, having a website is essential to grow your businees 
            </p>
            <form id="form" autocomplete="off">
              <input
                type="email"
                id="email-id"
                name="email_address"
                aria-label="email adress"
                placeholder=""
                required
                oninput="checkEmpty()" />
              <button type="submit" class="btn" aria-label="submit">
                <span>Contact Us</span>
                <ion-icon name="arrow-forward-outline"></ion-icon>
              </button>
            </form>
          </div>
    
          <div class="users-color-container">
            <span class="item" style="--i: 1"></span>
            <img
              class="item"
              src="./images/man.png"
              style="--i: 2"
              alt="" />
            <span class="item" style="--i: 3"></span>
            <img
              class="item"
              src="./images/man.png"
              style="--i: 4"
              alt="" />
    
            <img
              class="item"
              src="./images/man.png"
              style="--i: 10"
              alt="" />
            <span class="item" style="--i: 11"></span>
            <img class="item" src="./images/man.png" style="--i: 12" alt="" />
            <span class="item" style="--i: 5"></span>
    
            <span class="item" style="--i: 9"></span>
            <img class="item" src="./images/man.png" style="--i: 8" alt="" />
            <span class="item" style="--i: 7"></span>
            <img class="item" src="./images/man.png" style="--i: 6" alt="" />
          </div>
        </section>
    
        <section class="card-container" id="card-container">
          <div class="slider">
            <div class="card" data-tilt>
              <div class="content">
                <img src="./images/man.png" alt="" />
                <h1>Personalized Guidance</h1>
                <p>
                  Whether you are a startup or a multinational business we have a solution for you.
                </p>
                <button class="btn btn-grad">
                  <span>Learn More</span>
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </button>
              </div>
            </div>
    
            <div class="card" data-tilt>
              <div class="content">
                <img src="./images/man.png" alt="" />
                <h1>Accelerated Growth</h1>
                <p>
                  with our team of experienced software designers
                </p>
                <button class="btn btn-grad">
                  <span>Learn More</span>
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </button>
              </div>
            </div>
    
            <div class="card" data-tilt>
              <div class="content">
                <img src="./images/man.png"alt="" />
                <h1>Inspiration & Motivation</h1>
                <p>
                  Motivate your customers with you sleek apps
                </p>
                <button class="btn btn-grad">
                  <span>Learn More</span>
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </button>
              </div>
            </div>
    
            <div class="card" data-tilt>
              <div class="content">
                <img src="./images/man.png" alt="" />
                <h1>Networking & Connections</h1>
                <p>
                  connnect with your client 
                </p>
                <button class="btn btn-grad">
                  <span>Learn More</span>
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </button>
              </div>
            </div>
    
            <div class="card" data-tilt>
              <div class="content">
                <img src="./images/man.png" alt="" />
                <h1>Expert Insights</h1>
                <p>
                get expert advise from our pool of experienced software engineers
                </p>
                <button class="btn btn-grad">
                  <span>Learn More</span>
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </button>
              </div>
            </div>
          </div> 
          <ul class="control" id="custom-control">
            <li>
              <ion-icon name="caret-back-outline"></ion-icon>
            </li>
            <li>
              <ion-icon name="caret-forward-outline"></ion-icon>
            </li>
          </ul>
        </section>
<footer>
    </div>
<div class="footer">


     
    <div class="socials">
            
        <div>
            <p>Follow us on</p>
            <ul class="media">

            <li>
            <a href="#"><i class="ri-facebook-circle-fill"></i></a>
            </li>
            <li>
                <a href="#"><i class="ri-twitter-fill"></i></a>
            </li>
            <li>
                <a href="#"><i class="ri-youtube-fill"></i></a>
            </li>
            </ul>
        </div>
   
        <div class="socials2">
            <div class="resources3">
                <ul>
                    <li><a href="#">Services</a></li>
                <li><a href="#">resources</a></li>
                </ul>
            
            </div>
            <div class="resource2">
                <ul>
                    
                    <li><a href="#">privacy and policy</a></li>
                    <li><a href="#">faqs</a></li>
                    <li><a href="#">affliates</a></li>
                </ul>
            </div>
    
            <div class="resource1">
                 <ul>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">contact us</a></li>
                    <li><a href="#">support</a></li>
                    
                </ul>
            </div>
        </div>
    
        
    </div>


    <div class="header__bar">
        Copyright &copy; <?php echo date('Y'); ?>  One Afrik Technologies 
    </div>
</div>
</div>
</footer>

   @vite('resources/js/app.js')
    
</body>
</html>