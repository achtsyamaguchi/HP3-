<?php get_header(); ?>

<div class="wrapper">
<section class="contact">
    <div class="contact_wrapper">
    <h1 class="section_title contact_title">Contact</h1>

    <table>
      <tr>
        <th><label for="name">Name</label></th>
        <td><input type="text" id="name" name="name"></td>
      </tr>

      <tr>
        <th><label for="email">E-mail</label></th>
        <td><input type="email" id="email" name="email"></td>
      </tr>

      <tr>
        <th><label for="tel">Tel</label></th>
        <td><input type="tel" id="tel" name="tel"></td>
      </tr>

      <tr>
        <th><label for="email">Mesage</label></th>
        <td><textarea id="mesage" name="mesage" value="お問い合わせ"></textarea></td>
      </tr>
    </table>
    
      <a href="#" class="send_btn">send</a>
    
    </div>
</section>




<?php get_footer("1"); ?>