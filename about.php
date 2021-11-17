<h2>About</h2>
<a href='index.php?about' class="">Sejarah</a> | <a href='index.php?about&visimisi' class="">Visi Misi</a>
<?php
				if(isset($_GET['visimisi'])){
					include "visimisi.php";
				}
				else
				{
				?>
				<p style='font-size:10pt;'>
				There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
				<br><br>
				All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>

				<?php

				}

				?>