<?php include'includes/header.php'; ?>

<?php include'includes/navbar.php'; ?>




<section  class=" slide1 text-center text-success  " >
    <div class="container ">
        <div class="row ">
            <div style="padding-top: 240px; color: #75ebe5;" class="contact-center col align-self-center">
                <h1>Contact Us</h1>
            </div>
        </div>
</section>


<section style="padding: 60px 60px; " class="bg-light">
    <div class="container">
        <div class="row">
            <div class="m-auto">
                <form action="proccess.php" method="POST">
                    <div class="row">
                      <div class="col ">
                        <input style="border-radius: 25px;border:1px solid #20B2AA;" type="email" class="form-control"  placeholder="Email " name="email">
                      </div>
                      <div class="col">
                        <input style="border-radius: 25px;border:1px solid #20B2AA;" type="name" class="form-control" placeholder="Name" name="name">
                      </div>
                    </div>
               
                  
               
                 
                    <label  for="pwd"></label>
                    <input style="border-radius: 25px;border:1px solid #20B2AA;" type="text" class="form-control" placeholder="Subject" name="subject">
                  <div class="form-group">
                    <label for="message"></label>
                    <textarea style="border-radius: 25px;border:1px solid #20B2AA;" class="form-control" rows="5" name="message"  placeholder="Message"></textarea>
                  </div>
                  <button style="border-radius: 25px;border:1px solid #20B2AA; float: right; background-color: #20B2AA;" name="send" class="btn text-light ">Send</button>
                  </form>

                  
            </div>
        </div>
    </div>
</section>










<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div  class="col-md-3 col-sm-6 col-xs-12 segment-one text-left">
                    <h3>Title Here</h3>
                    <p  style="font-family: Cooper Black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Minima maxime quam architecto quo inventore harum ex magni, bdicta impedit.</p>
                </div>
                <div  class="col-md 3 col-sm-6 col-xs-12 segment-two">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">History</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Brand Guidelines</a></li>
                        <li><a href="#">Terms&Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md 3 col-sm-6 col-xs-12 segment-three">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Howto Order</a></li>
                        <li><a href="#">Our Product</a></li>
                        <li><a href="#">Order Status</a></li>
                        <li><a href="#">Promo</a></li>
                        <li><a href="#">Payment Method</a></li>
                    </ul>
                </div>
                <div class="col-md 3 col-sm-6 col-xs-12 segment-four">
                    <h3>Follow</h3>
                   <a href="#"><i class="fa fa-facebook"></i>Facebook</a><br>
                   <a href="#"><i class="fa fa-twitter"></i>Twitter</a><br>
                   <a href="#"><i class="fa fa-instagram"></i>Instagram</a><br>
                   <a href="#"><i class="fa fa-whatsapp"></i>WhatsApp</a><br>
                </div>
            </div>
        </div>

    </div>
</footer>
</body>
</html>