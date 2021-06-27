<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
        <title>interface control</title>

</head>
<body>
    <div class="text-block">
        <h1>interface control of robotic base</h1>
      </div>

      <form action="connected.php" method="post">

    <div class="container">
    <input type="hidden" name="Left_value" id="Left_value" value="Left"  size="1">
    <button type="submit" class="btn one" name="left" value="left" >Left</button>

    <input type="hidden" name="Right_value" id="Right_value" value="Right"  size="1">
    <button type="submit" class="btn two" name="right" value="right" >Right</button>

    <input type="hidden" name="Stop_value" id="Stop_value" value="Stop"  size="1">
    <button type="submit"  class="btn st" name="stop" value="stop" >Stop</button>

    <input type="hidden" name="Backward_value" id="Backward_value" value="Backward"  size="1">
    <button type="submit"  class="btn three" name="backward" value="backward" >Backward</button>

    <input type="hidden" name="Forward_value" id="Forward_value" value="Forward"  size="1">
    <button type="submit"  class="btn for" name="forward" value="Forward" >Forward</button>
  
    <a href="./show.php" class="btn clc">show data</a>
     


    </div>
</form>

  <footer>
    <br><p>Copyright @2021 | Designed With by: Shahad Alsady<br>
    <a href="mailto:shahad680.s6@gmail.com">shahad680.s6@gmail.com</a></p>
  </footer>
</body>
</html>