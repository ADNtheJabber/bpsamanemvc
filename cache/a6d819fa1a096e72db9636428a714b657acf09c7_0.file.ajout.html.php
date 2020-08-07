<?php
/* Smarty version 3.1.30, created on 2020-08-07 12:48:09
  from "/opt/lampp/htdocs/bpsamanemvc/src/view/clientPhysique/ajout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2d3169b35646_84434996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6d819fa1a096e72db9636428a714b657acf09c7' => 
    array (
      0 => '/opt/lampp/htdocs/bpsamanemvc/src/view/clientPhysique/ajout.html',
      1 => 1596796888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2d3169b35646_84434996 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="ADN"/>
    	<meta name="description" content="Projet BP: version samanemvc"/>
		<title>Banque du Peuple</title>

		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/style.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<!-- integration de javascript dans le moteur de rendu de vue Smarty -->
		
			<?php echo '<script'; ?>
 language=javascript>
			function load_design() {
			   document.getElementById("design_js").style.color = "#40007d";
			}

			<?php echo '</script'; ?>
>
		
	</head>
	<body onload="load_design()">
		<header>
			<!--logo et nom banque-->
					<div class="logo">
						<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/bplogo.png" alt="logo BP"/>
						<h2>Banque du Peuple</h2>
					</div>
			<!--end of logo et nom banque-->
			
			<!--nav-->               
				   <nav>
						<ul>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Accueil</a></li>
							<li class="dropdown">
								<a href="javascript:void(0)" class="dropbtn">Ajouter un client</a>
								<div class="dropdown-content">
								  <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ClientPhysique/index">Client Physique</a>
								  <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ClientMoral/index">Client Moral</a>
								</div>
							</li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/index">Ajouter compte</a></li>
							<li class="dropdown">
								<a href="javascript:void(0)" class="dropbtn">Listes</a>
								<div class="dropdown-content">
								  <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ClientPhysique/liste">-Particuliers</a>
								  <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ClientMoral/liste">-Entreprises</a>
								  <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/liste">-Comptes</a>
								</div>
							</li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
virement/index">Virement</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
assistance/index">Assistance</a></li>
						</ul>
				   </nav>
			<!--end of nav--> 
		</header>
        
		<div class="container justify-content-center">
			<div class="row centered-form">
			<div class="col-xs-12 col-sm-8 col-md-10">
				<div class="panel panel-default">
					<div class="panel-heading">
							<h3 class="panel-title" style="text-transform: uppercase;"><i class="fa fa-user-circle"></i>  Formulaire de creation de Client Physique</i></h3>
							</div>
							<div class="panel-body">
								<?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
									<?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
										<div class="alert alert-success">Données ajoutées!</div>
									<?php } else { ?>
										<div class="alert alert-danger">Erreur!</div>
									<?php }?>
								<?php }?>
							<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ClientPhysique/add" id="formClientPhysique">

								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12">
										<div class="form-group">
											<label for="SituationProfessionnelle">Situation professionnelle:</label>
												<button class="btn" id="salariebtn"><i class="fa fa-briefcase" aria-hidden="true"></i> Salarié</button>
												<button class="btn" id="nonsalariebtn"><i class="fa fa-money"></i> Non Salarié</button>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control input-sm" name="nom" id="nom" placeholder="Nom" required/>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control input-sm" name="prenom" id="prenom" placeholder="Prenom" required/>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control input-sm" name="email" id="email" placeholder="Email" required/>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="number" class="form-control input-sm" name="tel" id="tel" placeholder="Telephone" required/>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" name="adresse" id="adresse" class="form-control input-sm" placeholder="Adresse" required/>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="number" name="identifiant" id="identifiant" class="form-control input-sm" placeholder="Numero de la Carte Nationale d'Identité" required/>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" name="profession" id="profession" class="form-control input-sm flexinput" placeholder="Profession" required/>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="number" name="salaire" id="salaire" class="form-control input-sm flexinput" placeholder="Salaire actuel" required/>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<textarea name="info_employeur" id="info_employeur" cols="30" rows="3" class="form-control input-sm flexinput" placeholder="Informations de l'employeur" required></textarea>										</div>
									</div>
								</div>

							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="submit" id="valider" name="valider" value="Valider" class="btn btn-success btn-block">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="reset" value="Annuler" class="btn btn-danger btn-block">
									</div>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/scriptClient.js"><?php echo '</script'; ?>
>
	</body>
</html><?php }
}
