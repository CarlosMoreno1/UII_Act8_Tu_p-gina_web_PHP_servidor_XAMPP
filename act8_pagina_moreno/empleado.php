<?php include('header.php'); ?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Empleado</h1>
			</div><br></br>
   
			<div class="articulo">
				<article>
				<table>
            <tr>
               <br></br><td>Nombre:</td> 
               <td><input type = "text" name = "name"></td>
            </tr>
            
            <tr>
               <td>E-mail:</td>
               <td><input type = "text" name = "email"></td>
            </tr>
            
            <tr>
               <td>Ocupación:</td>
               <td><input type = "text" name = "website"></td>
            </tr>
            
            <tr>
               <td>Horario de trabajo:</td>
               <td><textarea name = "comment"></textarea></td>
            </tr>
            
            <tr>
               <td>Género:</td>
               <td>
                  <input type = "radio" name = "gender" value = "hombre">Hombre
                  <input type = "radio" name = "gender" value = "mujer">Mujer
               </td>
            </tr>
            
            <tr>
               <td>
                  <input type = "submit" name = "submit" value = "Submit"> 
               </td>
            </tr>
			
         </table><br></br><br></br>
				</article>
			</div>

			<?php include('sidebar.php'); ?>
		</div>
	</section>
	<?php include('footer.php'); ?>
</body>
</html>