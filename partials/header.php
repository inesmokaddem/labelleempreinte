<nav id="header">
	<div class="d-flex">
		<a class="d-md-none align-self-center" href="<?php echo getenv('INDEX_URL') ?>">
            <img src="img/labelleempreinte-green.png" alt="La belle empreinte" class="logo">
        </a>
	    <h1 class="text-center flex-grow-1 align-self-center">
	        <div class="green">LA BELLE EMPREINTE,</div>
	        <div class="red">LE GUIDE VERS LES OBJETS RESPONSABLES</div>
	    </h1>
	    <a class="d-md-none align-self-center ml-2" data-toggle="modal" data-target="#menuModal" href="#">
	    	<span class="three-dots">
	    		<span class="dot bg-green"></span>
	    		<span class="dot bg-red"></span>
	    		<span class="dot bg-orange"></span>
	    	</span>
	    </a>
	</div>
</nav>

<div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="menuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
            	<div class="text-center">
	            	<a class="align-self-center" href="<?php echo getenv('INDEX_URL') ?>">
	            		<img src="img/labelleempreinte-green.png" alt="La belle empreinte" class="logo">
	        		</a>
	        	</div>
                <?php include './partials/sidebar.php'; ?>
            </div>
        </div>
    </div>
</div>