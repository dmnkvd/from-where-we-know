<?php
/**
 * Templates render the content of your pages. 
 * They contain the markup together with some control structures like loops or if-statements.
 * The `$page` variable always refers to the currently active page. 
 * To fetch the content from each field we call the field name as a method on the `$page` object, e.g. `$page->title()`.
 * This example templates only echos the field values from the content file and doesn't need any special logic from a controller.
 * Snippets like the header, footer and intro contain markup used in multiple templates. They also help to keep templates clean.
 * More about templates: https://getkirby.com/docs/guide/templates/basics
 */
?>

<?php snippet('header-about') ?>

<article class="about-us">
      <p>Dear Reader, </br></br>

          We hope you are well.</br></br>

          We are <a href="<?= $pages->find('artist')->url() ?>">37 students</a> from the department of Graphic Design (BA) and <a href="<?= $pages->find('artist')->url() ?>">14 students</a> from the department Non Linear Narrative (MA) at the Royal Academy of Art, The Hague (KABK). We know you are curious about what we have been up to, maybe you're even wondering where we have been all this time.</br></br>

          As emergent conditions have shaped us, we, like you, have been settling in our new geography, and asking ourselves which spaces we inhabit, and how do we travel across them. How do we create a sense of place now anyway, and how can we share it?</br></br>

          Our paths have led us to new places, inventing methods and encountering sites of research. The changing circumstances have fostered the urge to situate our knowledge within an expansive field of inter-networked conditions.</br></br>

          Navigating across the physical and the digital, the past and the present, the near and the distant, drawing insight from within and without, we are tracing the latticework through which our experiences are woven. In doing so, we strive to acknowledge 

          <div class="popup" onclick="myFunction()"><u>where it is that we know from. (1)</u>
            <span class="popuptext" id="myPopup"><p>(1) The title of our exhibition draws from the essay <a href="https://zoestodd.com/2021/01/19/weaponized-fossil-kin-and-the-alberta-economy/#_ftn4">Weaponized Fossil Kin and the Alberta economy</a> by Dr. Zoe Todd, in which she recounts an instructive teaching of geographer Katherine McKittrick, which is to ask: &ldquo;Where do you know from?"</p>
            </span>
          </div> Through this exhibition you can encounter our works in a new constellation of geographies, organised around sites of research and 
          <div class="popup-1" onclick="myFunction1()"><u>taxonomies that connect us. (2)</u>
            <span class="popuptext-1" id="myPopup-1"><p>(2) The taxonomy of keywords used in our exhibition and online platform was developed by Dr. Adeola Enigbokan, who was the external examiner of the Graphic Design (BA) graduation in 2020-21. The framing emerged based on our exchanges with Dr. Enigbokan, and captures an overview of the concerns and interests we share as a class. Dr. Enigbokan made this framing after having read our theses, and we extended the keywords to the Non Linear Narrative (MA) department.</span>
          </div>
          These whereabouts and stances we want to share at our upcoming graduation show, From Where We Know, which will take place during the Graduation Festival 2021 at The Royal Academy of Art, The Hague (July 8th - 11th).</br></br>

          On this page are gathered the emerging taxonomies, collections, and overviews of our landscape of processes, we invite you to keep an eye on it in the upcoming weeks as it grows!

          You are also kindly invited to donate to our fundraising campaign at <a href="https://www.voordekunst.nl/projecten/12295-from-where-we-know-1">Voordekunst</a>  – your contribution is immensely appreciated.</br></br>

          We hope to meet you there, and in the meantime, please do stay in touch.</br></br>

          With Love,</br></br>

          Students of <a href="https://www.kabk.nl/en/programmes/bachelor/graphic-design?mark=graphic%20design">Graphic Design (BA)</a> and <a href="https://www.kabk.nl/en/programmes/master/non-linear-narrative?mark=non%20linear">Non Linear Narrative (MA),</a></br>
          Royal Academy of Art, The Hague (KABK)</p>
          
    </article>

    <script>
      // When the user clicks on div, open the popup
      function myFunction() {
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
      }

      // When the user clicks on div, open the popup
      function myFunction1() {
              var popup = document.getElementById("myPopup-1");
              popup.classList.toggle("show-1");
            }
      </script>

<?php snippet('footer') ?>


