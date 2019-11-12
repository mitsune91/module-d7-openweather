<div>
  <p> You are in <?php print $data['name'] ?></p>
  <p>
    <img src="http://openweathermap.org/img/wn/<?php print $data['weather'][0]['icon']; ?>@2x.png"
         alt=""><?php ?></p>
  <p> <?php print $data['weather'][0]['description'] ?></p>
</div>

