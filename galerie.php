<?php //include('session.php'); ?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <title>Galerie</title>
    <?php include('includes.php'); ?>
</head>

<body id="up">

<?php include('navbar.php'); ?>

<div class="container">

	<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
	<div id="blueimp-gallery" class="blueimp-gallery">
	    <!-- The container for the modal slides -->
	    <div class="slides"></div>
	    <!-- Controls for the borderless lightbox -->
	    <h3 class="title"></h3>
	    <a class="prev">‹</a>
	    <a class="next">›</a>
	    <a class="close">×</a>
	    <a class="play-pause"></a>
	    <ol class="indicator"></ol>
	    <!-- The modal dialog, which will be used to wrap the lightbox content -->
	    <div class="modal fade">
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <button type="button" class="close" aria-hidden="true">&times;</button>
	                    <h4 class="modal-title"></h4>
	                </div>
	                <div class="modal-body next"></div>
	                <div class="modal-footer">
	                    <button type="button" class="btn btn-default pull-left prev">
	                        <i class="glyphicon glyphicon-chevron-left"></i>
	                        Previous
	                    </button>
	                    <button type="button" class="btn btn-primary next">
	                        Next
	                        <i class="glyphicon glyphicon-chevron-right"></i>
	                    </button>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	<h1 class="h1-primary m-t-100 text-center">Galerie lucrari cursanti</h1>

	<div id="links" class="m-t-50 m-b-50 center-block text-center">
		<div>
		    <a class="thumb" href="Images/maci.jpg" title="Maci" data-gallery>
		        <img src="Images/thumbnails/thumb-maci.jpg" alt="Maci">
		    </a>
		    <a class="thumb" href="Images/abstract.jpg" title="Abstract" data-gallery>
		        <img src="Images/thumbnails/thumb-abstract.jpg" alt="Maci">
		    </a>
		    <a class="thumb" href="Images/caine.jpg" title="Caine" data-gallery>
		        <img src="Images/thumbnails/thumb-caine.jpg" alt="Caine">
		    </a>
		    <a class="thumb" href="Images/cerb.jpg" title="Cerb" data-gallery>
		        <img src="Images/thumbnails/thumb-cerb.jpg" alt="Cerb">
		    </a>
		    <a class="thumb" href="Images/flori-albastre.jpg" title="Flori albastre" data-gallery>
		        <img src="Images/thumbnails/thumb-flori-albastre.jpg" alt="Flori albastre">
		    </a>
		    <a class="thumb" href="Images/leu-abstract.jpg" title="Leu" data-gallery>
		        <img src="Images/thumbnails/thumb-leu-abstract.jpg" alt="Maci">
		    </a>
		    <a class="thumb" href="Images/fluture.jpg" title="Fluture" data-gallery>
		        <img src="Images/thumbnails/thumb-fluture.jpg" alt="Caine">
		    </a>
		    <!-- se repeta img - de test -->
		    <a class="thumb" href="Images/maci.jpg" title="Maci" data-gallery>
		        <img src="Images/thumbnails/thumb-maci.jpg" alt="Maci">
		    </a>
		    <a class="thumb" href="Images/abstract.jpg" title="Abstract" data-gallery>
		        <img src="Images/thumbnails/thumb-abstract.jpg" alt="Maci">
		    </a>
		    <a class="thumb" href="Images/caine.jpg" title="Caine" data-gallery>
		        <img src="Images/thumbnails/thumb-caine.jpg" alt="Caine">
		    </a>
		    <a class="thumb" href="Images/cerb.jpg" title="Cerb" data-gallery>
		        <img src="Images/thumbnails/thumb-cerb.jpg" alt="Cerb">
		    </a>
		    <a class="thumb" href="Images/flori-albastre.jpg" title="Flori albastre" data-gallery>
		        <img src="Images/thumbnails/thumb-flori-albastre.jpg" alt="Flori albastre">
		    </a>
		    <a class="thumb" href="Images/leu-abstract.jpg" title="Leu" data-gallery>
		        <img src="Images/thumbnails/thumb-leu-abstract.jpg" alt="Maci">
		    </a>
		    <a class="thumb" href="Images/fluture.jpg" title="Fluture" data-gallery>
		        <img src="Images/thumbnails/thumb-fluture.jpg" alt="Caine">
		    </a>
		    <a class="thumb" href="Images/maci.jpg" title="Maci" data-gallery>
		        <img src="Images/thumbnails/thumb-maci.jpg" alt="Maci">
		    </a>
		    <a class="thumb" href="Images/abstract.jpg" title="Abstract" data-gallery>
		        <img src="Images/thumbnails/thumb-abstract.jpg" alt="Maci">
		    </a>
		    <a class="thumb" href="Images/caine.jpg" title="Caine" data-gallery>
		        <img src="Images/thumbnails/thumb-caine.jpg" alt="Caine">
		    </a>
		    <a class="thumb" href="Images/cerb.jpg" title="Cerb" data-gallery>
		        <img src="Images/thumbnails/thumb-cerb.jpg" alt="Cerb">
		    </a>
		    <a class="thumb" href="Images/flori-albastre.jpg" title="Flori albastre" data-gallery>
		        <img src="Images/thumbnails/thumb-flori-albastre.jpg" alt="Flori albastre">
		    </a>
		    <a class="thumb" href="Images/leu-abstract.jpg" title="Leu" data-gallery>
		        <img src="Images/thumbnails/thumb-leu-abstract.jpg" alt="Maci">
		    </a>
		    <a class="thumb" href="Images/fluture.jpg" title="Fluture" data-gallery>
		        <img src="Images/thumbnails/thumb-fluture.jpg" alt="Caine">
		    </a>
		     <a class="thumb" href="Images/maci.jpg" title="Maci" data-gallery>
		        <img src="Images/thumbnails/thumb-maci.jpg" alt="Maci">
		    </a>
		    <a class="thumb" href="Images/abstract.jpg" title="Abstract" data-gallery>
		        <img src="Images/thumbnails/thumb-abstract.jpg" alt="Maci">
		    </a>
		    <a class="thumb" href="Images/caine.jpg" title="Caine" data-gallery>
		        <img src="Images/thumbnails/thumb-caine.jpg" alt="Caine">
		    </a>
		    <a class="thumb" href="Images/cerb.jpg" title="Cerb" data-gallery>
		        <img src="Images/thumbnails/thumb-cerb.jpg" alt="Cerb">
		    </a>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>

</body>
</html>