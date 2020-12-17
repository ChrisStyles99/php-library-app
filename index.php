<?php

include('./includes/header.php');

?>

<div class="container">
  <div class="index-page">
    <div class="index-text">
      <h1>Welcome to <span>Library</span><?php if (isset($_SESSION['name'])) : ?>, <?php echo $_SESSION['name'] ?>
      <?php endif; ?></h1>
      <p>The best option for lending books and get your read done!</p>
      <?php if (!isset($_SESSION['name'])) : ?>
        <button>Start now!</button>
      <?php endif; ?>
    </div>
    <div class="index-img">
      <img src="https://images.pexels.com/photos/1319854/pexels-photo-1319854.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Library">
    </div>
  </div>
  <div class="index-about">
    <h1>About us</h1>
    <p>We are an option to lend the books that you want. It is pretty simple and quick.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque facilis nisi repellat sint facere animi ratione adipisci hic veniam blanditiis?</p>
    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
      <path fill="#41D8BF" d="M59,-22.9C65.9,2.1,53.7,29.5,32.2,45.4C10.7,61.3,-20,65.5,-37.2,52.6C-54.4,39.8,-58.1,9.9,-49.6,-17.3C-41.2,-44.4,-20.6,-68.7,2.7,-69.6C26,-70.5,52.1,-47.9,59,-22.9Z" transform="translate(100 100)" />
    </svg>
  </div>
  <div class="index-offer">
    <h1>What we offer</h1>
    <div class="offer-cards">
      <div class="offer-card">
        <div class="offer-img">
          <img src="https://images.pexels.com/photos/2128249/pexels-photo-2128249.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Books">
        </div>
        <div class="offer-title">
          <h3>Numerous books</h3>
        </div>
      </div>
      <div class="offer-card">
        <div class="offer-img">
          <img src="https://images.pexels.com/photos/1565245/pexels-photo-1565245.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Books">
        </div>
        <div class="offer-title">
          <h3>Quick lends</h3>
        </div>
      </div>
      <div class="offer-card">
        <div class="offer-img">
          <img src="https://images.pexels.com/photos/2898170/pexels-photo-2898170.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Books">
        </div>
        <div class="offer-title">
          <h3>Easy to understand</h3>
        </div>
      </div>
    </div>
  </div>
  <?php if (!isset($_SESSION['name'])) : ?>
    <div class="index-start-now">
      <h1>Do you like it? Start now!</h1>
      <a href="register.php">Create an account</a>
    </div>
  <?php endif; ?>
</div>

<svg class="index-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#225763" fill-opacity="1" d="M0,224L80,224C160,224,320,224,480,218.7C640,213,800,203,960,186.7C1120,171,1280,149,1360,138.7L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
</svg>

<?php

include('./includes/footer.php');

?>