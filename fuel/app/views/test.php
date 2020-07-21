<html>
<head>
<title><?php echo $title;?></title>
</head>
<body>
    <div class="header" style="min-height: 80px;">
      <p>player lv. <?php echo $player_lv;?></p>
      <p><label for="stamina">Stamina:</label></p>
      <progress id="stamina" max="<?php echo $max_stamina;?>" value="<?php echo $stamina;?>"> <?php echo ($stamina/$max_stamina) * 100; ?> % </progress>
    </div>
    <div>
      <p style="text-align: center;">Welcome, <?php echo $username?></p>
    </div>
    <div>
      <div style="min-height:70px;background-color: #DDDDDD;">
      Character
      <div class="header" style="min-height: 150px;">
        <table>
            <tbody>
                <tr>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
    <p></p>
    <div class="footer" style="min-height:70px;background-color: #DDDDDD;">
    </div>


</body>
</html>