<center>  <h2>Nossos serviços</h2> </center>
		   
		   <?php
		   
		   include_once 'conexao.php';
		   $sql ="select * from artigo";
		   $resultado = mysqli_query($con,$sql);
           while($row = mysqli_fetch_array($resultado)){
		   
		   ?>
		   
		   <!--colocar html-->
		   
		   <div class="artigo">
		   <h4><?php echo $row["titulo"]; ?></h4>
		   <img src="upload/<?php echo $row["foto"]; ?>"
		   <class="imagemartigo">
		   <?php echo substr($row["artigo"],0,680)."..."; ?>
		  
		   
		   </div>
		   <?php
		   
		   }
		   
		   mysqli_close($con);
		   
		   ?>
		
		
		</div><!--fecha divisão conteudo do artigo-->
		
		