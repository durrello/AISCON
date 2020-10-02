<!--==========================
      Buy Ticket Section
    ============================-->
<section id="buy-tickets" class="section-with-bg wow fadeInUp">
  <div class="container" >

    <div class="section-header">
      <h2>Buy Tickets</h2>
      <p>Secure your spot now!</p>
    </div>

    <div class="row" style="display: flex; justify-content: center;">
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
                <form action="" method="post" data-monetbil="form">
                  <button  type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="vip-access">Buy Now</button>
                </form>              

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

<!-- To auto open widget, add JS files -->

