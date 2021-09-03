<?php
     $title = "Welcome";

     //Retrieve user ip
     function getUserIpAddr(){
          if(!empty($_SERVER['HTTP_CLIENT_IP'])){
             //ip from share internet
             $ip = $_SERVER['HTTP_CLIENT_IP'];
          }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
             //ip pass from proxy
             $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
          }else{
             $ip = $_SERVER['REMOTE_ADDR'];
          }
          return $ip;
     }

     include ("./header.php");

?>
<div class="div-content">
     <h1>
          Hey, how ya doin'.
     </h1>
     <p>
          My name is Nicholas Rinella.
     </p>
     <p>
          You're name is <?php echo(getUserIpAddr()); ?>.
     </p>
     <p>
          It's a pleasure to make your acquaintance.
     </p>
</div>
<?php
     include ("./footer.php");
?>
