<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
</head>
<body>
    <table>
      <?php foreach($users as $user):?>
          <tr>
            <td><?php echo $user->display_name;?></td>
            <td><?php echo $user->level;?></td>
            <td><?php echo $user->job_id;?></td>
          </tr>
      <?php endforeach?>
    </table>
</body>
</html>