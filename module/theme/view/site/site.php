<h3><?php echo helper::translate('Options du site'); ?></h3>
<form method="post">
	<div class="row">
		<div class="col12">
			<div class="block">
				<h4><?php echo helper::translate('Couleurs'); ?></h4>
				<div class="row">
					<div class="col4">
						<?php echo template::text('themeTitleTextColor', [
							'class' => 'colorPicker',
							'label' => 'Couleur des titres',
							'value' => $this->getData(['theme', 'title', 'textColor'])
						]); ?>
					</div>
					<div class="col4">
						<?php echo template::text('themeButtonBackgroundColor', [
							'class' => 'colorPicker',
							'label' => 'Couleur des boutons',
							'value' => $this->getData(['theme', 'button', 'backgroundColor'])
						]); ?>
					</div>
					<div class="col4">
						<?php echo template::text('themeLinkTextColor', [
							'class' => 'colorPicker',
							'label' => 'Couleur des liens',
							'value' => $this->getData(['theme', 'link', 'textColor'])
						]); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col6">
			<div class="block">
				<h4><?php echo helper::translate('Polices'); ?></h4>
				<div class="row">
					<div class="col6">
						<?php echo template::select('themeTitleFont', $module::$fonts, [
							'label' => 'Police des titres',
							'selected' => $this->getData(['theme', 'title', 'font'])
						]); ?>
					</div>
					<div class="col6">
						<?php echo template::select('themeTextFont', $module::$fonts, [
							'label' => 'Police du texte',
							'selected' => $this->getData(['theme', 'text', 'font'])
						]); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col6">
			<div class="block">
				<h4><?php echo helper::translate('Mise en forme'); ?></h4>
				<div class="row">
					<div class="col6">
						<?php echo template::select('themeTitleTextTransform', $module::$textTransforms, [
							'label' => 'Capitalisation des titres',
							'selected' => $this->getData(['theme', 'title', 'textTransform'])
						]); ?>
					</div>
					<div class="col6">
						<?php echo template::select('themeTitleFontWeight', $module::$fontWeights, [
							'label' => 'Épaisseur des titres',
							'selected' => $this->getData(['theme', 'title', 'fontWeight'])
						]); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col12">
			<div class="block">
				<h4><?php echo helper::translate('Mise en page'); ?></h4>
				<div class="row">
					<div class="col4">
						<?php echo template::select('themeSiteWidth', $module::$widths, [
							'label' => 'Largeur du site',
							'selected' => $this->getData(['theme', 'site', 'width'])
						]); ?>
					</div>
					<div class="col4">
						<?php echo template::select('themeSiteRadius', $module::$radius, [
							'label' => 'Arrondi sur les coins du site',
							'selected' => $this->getData(['theme', 'site', 'radius'])
						]); ?>
					</div>
					<div class="col4">
						<?php echo template::select('themeSiteShadow', $module::$shadows, [
							'label' => 'Ombre sur les bords du site',
							'selected' => $this->getData(['theme', 'site', 'shadow'])
						]); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col2 offset8">
			<?php echo template::button('themeSiteBack', [
				'value' => 'Annuler',
				'href' => helper::baseUrl() . 'theme'
			]); ?>
		</div>
		<div class="col2">
			<?php echo template::submit('themeSiteSave'); ?>
		</div>
	</div>
</form>