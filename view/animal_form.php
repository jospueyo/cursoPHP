<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="index.php?controller=animal&action=save" method="post">
      <table>
        <input type="number" name="id" value="<?php echo $animal->id; ?>"/>
        <tr>
          <td>Nom</td>
          <td>
            <input type="text" name="name" value="<?php echo $animal->name; ?>"/>
          </td>
        </tr>
        <tr>
          <td>Espècie</td>
          <td>
            <input type="text" name="specie" value="<?php echo $animal->specie; ?>"/>
          </td>
        </tr>
        <tr>
          <td>Raça</td>
          <td>
            <input type="text" name="breed" value="<?php echo $animal->breed; ?>"/>
          </td>
        </tr>
        <tr>
          <td>
            Sexe
          </td>
          <td>
            <select type="select" name='gender'>
              <option <?php echo $animal->gender== 'male'?'Selected':'';?> value="male">Mascle</option>
              <option <?php echo $animal->gender== 'female'?'Selected':'';?> value="female">Femella</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Color</td>
          <td>
            <input type="text" name="color" value="<?php echo $animal->color; ?>"/>
          </td>
        </tr>
        <tr>
          <td>Edat</td>
          <td>
            <input type="text" name="age" value="<?php echo $animal->age; ?>"/>
          </td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="send" value="Guardar"/>
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
