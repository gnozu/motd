<!-- InstanceBegin template="/Templates/daedalus_v1.dwt" codeOutsideHTMLIsLocked="false" -->
<!-- TEMPLATE_VERSION="Daedalus v1.0" -->
<kentWrapper type="simple">

	<kentMeta>
		<!-- InstanceBeginEditable name="metadata" -->
		<?php if(isset($meta) && isset($meta['title'])): ?>
		<title><?php echo $meta['title']; ?></title>
		<?php endif; ?>
		
		<?php if(isset($meta) && isset($meta['description'])): ?>
		<meta name="description" content="<?php echo $meta['description']; ?>" /> 
		<?php endif; ?>

		<?php if(isset($meta) && isset($meta['canonical'])): ?>
		<link rel="canonical" href="<?php echo $meta['canonical']; ?>" />
		<?php endif; ?>

		<link type="text/css" href="/motd-frontend/public/css/style.css" rel="stylesheet" title="default" media="all" />
		
		<!-- InstanceEndEditable -->
	</kentMeta>
	<kentContent>
		<!-- InstanceBeginEditable name="content" -->

              <?php echo $content; ?>

		<!-- InstanceEndEditable -->
	</kentContent>	
	<kentScripts>
		
	</kentScripts>
</kentWrapper>	
<!-- InstanceEnd -->