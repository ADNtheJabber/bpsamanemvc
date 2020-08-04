<?php
/* Smarty version 3.1.30, created on 2020-08-04 14:34:14
  from "/opt/lampp/htdocs/bpsamanemvc/src/view/welcome/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2955c6091fd7_72445254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c864e17ba6af05cd8d1f1a7ca69002a6a955a82' => 
    array (
      0 => '/opt/lampp/htdocs/bpsamanemvc/src/view/welcome/index.html',
      1 => 1596544154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2955c6091fd7_72445254 (Smarty_Internal_Template $_smarty_tpl) {
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
public/css/styleIndex.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
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
ClientPhysique/liste">-Clients Particuliers</a>
								  <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ClientMoral/liste">-Clients Entreprises</a>
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

		<div class="indexContent">

			<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top: 40px;">
				<div class="panel panel-info">
					<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
					<div class="panel-body">
						<div class="alert alert-success" style="font-size:18px; text-align:justify;">
								Merci, l'équipe samanemvc vous remercie :) : 
								je vous ai préparé un CRUD qui marche. Lisez la documentation.
								<br/>Et surtout noubliez pas de configurer votre base de données : ou? Dans le dossier config
								puis éditez le fichier database.php. Mettez à on l'etat de la base! Bon code!!!!  :)
						</div>
						<div id="design_js">MODELE DEVELOPPE PAR Ngor SECK ! <h1>Version 1.9.3 Doctrine ORM</h1></div>
					</div>
				</div>
			</div>

		</div>
		
	</body>
</html>
<?php }
}