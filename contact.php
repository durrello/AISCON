   <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>To make requests for further information, contact us via our social channels.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>PressBook Building, Half-Mile, Limbe – CMR</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:(+237)233330005">(+237) 2333 30005</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@zuoix.com">info@aiscon.is</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="includes/contact.inc.php"  method="POST" class="contact-form">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Name"
                  data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                  <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="email" id="email" placeholder="Email"
                  data-rule="email" data-msg="Please enter a valid email" required/>
                  <div class="validation"></div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="country" class="form-control" id="country" placeholder="Country"
                  data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                  <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
              <input type="text" class="form-control" name="city" id="city" placeholder="City"
                  data-rule="city" data-msg="Please enter a valid email" required/>
                  <div class="validation"></div>
              </div>
              <!-- <div class="form-group col-md-6">
                  <input type="number" class="form-control" name="phone" id="phone" placeholder="Number"
                  data-msg="Please enter a valid phone number" required/>
                  <div class="validation"></div>
              </div> -->
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
                <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit" name="submit" value="submit" id="submit_form">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>