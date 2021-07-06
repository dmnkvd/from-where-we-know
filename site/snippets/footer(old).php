<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * in loops or simply to keep your templates clean.
 * This footer snippet is reused in all templates. In fetches information from the `site.txt` content file
 * and from the `about` page.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

  <footer class="footer">
        <!-- Begin Mailchimp Signup Form -->
        <!-- <link
          href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css"
          rel="stylesheet"
          type="text/css"
        /> -->

        <p class="footnote">* A network is growing... Stay connected...</p>

        <form
          action="https://gmail.us1.list-manage.com/subscribe/post?u=49bd0f8efde12f0e168b18dd8&amp;id=d7ea85654e"
          method="post"
          id="mc-embedded-subscribe-form"
          name="mc-embedded-subscribe-form"
          class="validate"
          target="_blank"
          novalidate
        >
          <div id="mce-responses" class="clear">
            <div
              class="response"
              id="mce-error-response"
              style="display: none"
            ></div>
            <div
              class="response"
              id="mce-success-response"
              style="display: none"
            ></div>
          </div>
          <div id="mc_embed_signup">
            <div class="mc-field-group">
              <label for="mce-EMAIL">Email Address </label>
              <input
                type="email"
                value=""
                name="EMAIL"
                class="required email"
                id="mce-EMAIL"
              />
              <!-- <div
                  style="
                    position: absolute;
                    display: inline-block;
                    left: -2000px;
                    margin: 0;
                  "
                  aria-hidden="true"
                >
                  <input
                    type="text"
                    name="b_49bd0f8efde12f0e168b18dd8_d7ea85654e"
                    tabindex="-1"
                    value=""
                  />
                </div> -->
              <input
                type="submit"
                value="Subscribe"
                name="subscribe"
                id="mc-embedded-subscribe"
                class="button"
                id="btn2"
              />
            </div>
          </div>
          <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        </form>

        <script
          type="text/javascript"
          src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"
        ></script>
        <script type="text/javascript">
          (function ($) {
            window.fnames = new Array();
            window.ftypes = new Array();
            fnames[0] = "EMAIL";
            ftypes[0] = "email";
            fnames[1] = "FNAME";
            ftypes[1] = "text";
            fnames[2] = "LNAME";
            ftypes[2] = "text";
            fnames[3] = "ADDRESS";
            ftypes[3] = "address";
            fnames[4] = "PHONE";
            ftypes[4] = "phone";
            fnames[5] = "BIRTHDAY";
            ftypes[5] = "birthday";
          })(jQuery);
          var $mcj = jQuery.noConflict(true);
        </script>
        <!--End signup-->
      </footer>

</body>
</html>
