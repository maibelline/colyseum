<?php
//views html <section> avec inclus du php ds les balises 
?>

<section>
<div class="id-card-tag"></div>
	<div class="id-card-tag-strip"></div>
	<div class="id-card-hook"></div>
	<div class="id-card-holder">
		<div class="id-card">
			<div class="header">
				<img src="/public/assets/img/billet2.png">
			</div>
			<div class="foreach">
                <ul>
                    <p class="request"> CLIENTS AVEC UNE CARTE DE FIDELITE! </p>
                    <?php foreach($customers as $customer): ?>
                    <li><?= $customer->lastName . ' ' . $customer-> firstName . '<br> - date de naissance:  ' . $customer-> birthDate .
                    '<br> - carte fidélité numéro: '. $customer-> cardNumber.'<br>'?></li>
                    <?php endforeach ?>

                </ul>
			</div>
			<hr class="hr">
            <div class="qr-code">
				<img src="/public/assets/img/qr-code.png">
	            <h3>www.colyseum.info</h3>
            </div>
		</div>
	</div>
</section>
