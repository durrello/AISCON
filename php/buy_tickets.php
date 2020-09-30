<?php
require_once './monetbil/monetbil.php';

// Setup Monetbil arguments
Monetbil::setAmount(25000);
Monetbil::setCurrency('XAF');
Monetbil::setLocale('en'); // Display language fr or en
Monetbil::setPhone('');
Monetbil::setCountry('');
Monetbil::setItem_ref('2536');
Monetbil::setPayment_ref(md5(uniqid()));
Monetbil::setUser(12);
Monetbil::setFirst_name('');
Monetbil::setLast_name('');
Monetbil::setEmail('');
Monetbil::setReturn_url('your_redirect_url_after_payment');
Monetbil::setNotify_url('your_notification_url_to_receive_payment_data');
Monetbil::setLogo('');

// This example show payment button
$payment_url = Monetbil::url();
?>


<!--==========================
      Buy Ticket Section
    ============================-->
<section id="buy-tickets" class="section-with-bg wow fadeInUp">
  <div class="container">

    <div class="section-header">
      <h2>Buy Tickets</h2>
      <p>Secure your spot now!</p>
    </div>

    <div class="row">
      <!-- standard access -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Standard Access</h5>
            <h6 class="card-price text-center">XAF 0</h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
              <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>T-Shirt</li>
              <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Membership 1 year</li>
              <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Material and Resources
              </li>
              <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Intermittent meals/coffee
              </li>
              <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Access to AISCON
                Resources(sample programs)</li>
              <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
            </ul>
            <hr>
            <div class="text-center">
            <?php ?>
                <h5 type="submit" id="monetbil-payment-widget" class="card-title text-muted text-uppercase text-center">Standard Access</h5>
              
              <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>
            </div>
          </div>
        </div>
      </div>

      <!-- vip access-->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">VIP Access</h5>
            <h6 class="card-price text-center">XAF 15,000</h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fa fa-check"></i></span>VIP Seating</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>T-Shirt</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>VIP Membership 1 year</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Material and Resources</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Intermittent meals/coffee</li>
              <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Access to AISCON
                Resources(sample programs)</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>After Party</li>
            </ul>
            <hr>
            <div class="text-center">
              <?php ?>
                <h5 type="submit" id="monetbil-payment-widget" class="card-title text-muted text-uppercase text-center">VIP Access</h5>
              <?php if (Monetbil::MONETBIL_WIDGET_VERSION_V2 == Monetbil::getWidgetVersion()) : ?>
                <form action="<?php echo $payment_url; ?>" method="post" data-monetbil="form">
                  <button type="submit" class="btn" id="monetbil-payment-widget">Buy Now</button>
                </form>              
                <?php endif; ?>


              <!-- <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal-vip" data-ticket-type="pro-access">Buy Now</button> -->



            </div>
          </div>
        </div>
      </div>
      <!-- Premium access -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Premium Access</h5>
            <h6 class="card-price text-center">XAF 25,000</h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Premium Seating</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>T-Shirt</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Premium Membership 1 year</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Material and Resources</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Intermittent meals/coffee</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Access to AISCON Resources(sample programs)
              </li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>After Party</li>
            </ul>
            <hr>
            <div class="text-center">
            <?php ?>
                <h5 type="submit" id="monetbil-payment-widget" class="card-title text-muted text-uppercase text-center">Premium Access</h5>
              <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="premium-access">Buy Now</button>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Order Form -->
  <div id="buy-ticket-modal-vip" class="modal fade">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Buy Tickets</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="#">
            <div class="form-group">
              <input type="text" class="form-control" name="your-name" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="your-email" placeholder="Your Email">
            </div>
            <div class="form-group">
              <select id="ticket-type" name="ticket-type" class="form-control">
                <option value="">-- Select Your Ticket Type --</option>
                <option value="standard-access">Standard Access</option>
                <option value="pro-access">Pro Access</option>
                <option value="premium-access">Premium Access</option>
              </select>
            </div>
            <div class="text-center">
              <form action="" method="get" data-monetbil="form"><button type="submit" class="btn" data-toggle="modal">Buy Now</button></form>
            </div>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

</section>


<!-- To open widget, add JS files -->
<?php echo Monetbil::js(); ?>

<!-- To auto open widget, add JS files -->
<?php echo Monetbil::js(true); ?>




<!--
    <div id="buy-ticket-modal" class="modal fade">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Buy Tickets</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="#">
                <div class="form-group">
                  <input type="text" class="form-control" name="your-name" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="your-email" placeholder="Your Email">
                </div>
                <div class="form-group">
                  <select id="ticket-type" name="ticket-type" class="form-control">
                    <option value="">-- Select Your Ticket Type --</option>
                    <option value="standard-access">Standard Access</option>
                    <option value="pro-access">Pro Access</option>
                    <option value="premium-access">Premium Access</option>
                  </select>
                </div>
                <div class="text-center">
                <form action="" method="get" data-monetbil="form"><button class="btn" type="submit">ok</button></form>
                </div>
              </form>
            </div>
          </div>  
        </div> 
      </div>  
-->