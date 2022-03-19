<?php 
include __DIR__ .'../header.php'; 
?> 
<form action="teststock.php?action=save"method="POST">
	<input value="<? =$stock->get('id');?>"type="hidden"name="id"/> 
		<div class="field"> 
			<label class="label">productnb</label> 
			<div class="control"> 
				<input class="input" value="<? =$stock->get('productnb'); ?>" type="number" name="productnb"/> 
			</div> 
		</div> 
			<div class="field"> 
				<label class="label">categorie</label> 
				<div class="control"> 
					<input class="input" value="<? =$stock->get('categorie'); ?>" type="text" name="categorie"/> 
				</div> 
			</div> 
			<div class="field"> 
				<label class="label">price</label> 
				<div class="control">
					<input class="input" value="<? =$stock->get('price'); ?>" type="number"name="price"/> 
				</div> 
			</div> 
			<div class="field"> 
				<div class="control"> 
					<a href="teststock.php?action=save&id=<?phpecho$stock->get(%27id%27);?>->get('id');?>">send</a>
				</div> 
			</div> 
	</form> 
<?php 
include __DIR__ .'../footer.php';
?>