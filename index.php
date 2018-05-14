<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Calculator</title>
    </head>
    <body>
 <form method="post">
          Enter First Number   <input type="number" name="numb1"><br>
			
         Enter Second Number   <input type="number" name="numb2"><br>
      Selection Operation  <select name="operator" id="">
              
               <option>Add</option>
               <option>Subtract</option>
               <option>Multiply</option>
               <option>Divide</option>
              
            </select>
            <button type="submit" name="submit" value="submit">Calculate</button>
         </form>



        <?php 

            if (isset($_POST['submit'])) {
                $res1 = $_POST['numb1'];
                $res2 = $_POST['numb2'];
                $operator = $_POST['operator'];
                switch ($operator) {
                  
                    case 'Add':
                        echo "Sum: ",$res1 + $res2;
                        break;
                    case 'Subtract':
                        echo $res1 - $res2;
                        break;
                    case 'Multiply':
                        echo $res1 * $res2;
                        break;
                    case 'Divide':
                        echo $res1 / $res2;
                        break;
                   
                }
            }


         ?>
  

    </body>
    </html>
