<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
</head>
<body>
    <h1><?php echo $title;?></h1>
    <table>
      <?php foreach($users as $user):?>
          <tr>
            <td><?php echo $user->display_name;?></td>
            <td><?php echo $user->level;?></td>
            <td><?php echo  sprintf("%s(%d)", $user->job_string, $user->job_id) ;?></td>
          </tr>
      <?php endforeach?>
    </table>
</body>
</html>