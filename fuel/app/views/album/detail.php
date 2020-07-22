<?php

use Fuel\Core\Html;

echo Html::doctype('html5');?>
<html>
  <head>
      <?php echo Html::meta('charset', 'utf-8');?>
  </head>
  <body>
      <div>
          <div style="text-align: center;"><p>キャラクター詳細</p></div>
          <div style="text-align: center;">
              <div>
                  <div>
                      カメドット
                  </div>
                  <div>
                      <div style="float: left;">
                        <?php echo Asset::img('character_1.png');?>
                      </div>
                      <div style="float: right; width:400px; border: solid 2px #000000;">
                         <div>種族    カメ</div>
                         <div>攻撃力  2500</div>
                         <div>防御力  3500</div>
                        </div>
                  </div>
              </div>
          </div>
      </div>
  </body>
</html>