<?php
/* Smarty version 3.1.30, created on 2020-08-04 14:25:53
  from "/opt/lampp/htdocs/bpsamanemvc/src/view/clientMoral/ajout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2953d1df58f2_38190924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee9b4e6d169eb9bf645dd06ba920faae7d2334a6' => 
    array (
      0 => '/opt/lampp/htdocs/bpsamanemvc/src/view/clientMoral/ajout.html',
      1 => 1596543947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2953d1df58f2_38190924 (Smarty_Internal_Template $_smarty_tpl) {
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
ClientPhysique/ajout">Client Physique</a>
								  <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ClientMoral/ajout">Client Moral</a>
								</div>
							</li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/ajout">Ajouter compte</a></li>
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
virement">Virement</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
assistance">Assistance</a></li>
						</ul>
				   </nav>
			<!--end of nav--> 
        </header>
        
        <div class="content">
            <form action="clientMoralController" class="myFormEntreprise" method="POST" id="clientEntreprise">

                <div class="flexform">
            
                    <div id="form1">
            
                        <label for="nom" id="labelNomEntreprise">Nom de l'entreprise: </label><br>
                            <input type="text" id="nom_client_entreprise" name="nomEntreprise" placeholder="Nom"/><br>
                            <span id="name_error"></span><br>
            
                        <label for="adresse" id="labelAdresseEntreprise">Adresse: </label><br>
                            <input type="text" id="adresse_client_entreprise" name="adresseEntreprise" placeholder="Adresse"/><br>
                            <span id="adress_error"></span><br>
            
                        <label for="telephone" id="labelTelephone">Telephone: </label><br>
                            <input type="text" id="tel_client_entreprise" name="telEntreprise" placeholder="Telephone"/><br>
                            <span id="tel_error"></span><br>
            
                        <label for="email" id="labelEmail"></label>Email: </label><br>
                            <input type="text" id="email_client_entreprise" name="emailEntreprise" placeholder="email"/><br>
                            <span id="email.error"></span><br>
            
                    </div>
            
                    <div id="form2">
            
                        <label for="ninea" id="labelNinea">Ninea: </label><br>
                            <input type="text" id="ninea" name="ninea" placeholder="ninea"/><br>
                            <span id="ninea_error"></span><br>
            
                        <label for="regiscommerce" id="labelRegisCommerce">Registre de commerce: </label><br>
                            <input type="text" id="regiscommerce" name="regiscommerce" placeholder="registre de commerce"/><br>
                            <span id="regiscom_error"></span><br>
                            
                    </div>
            
                </div>
            
                    <div class="btns" id="boutons_formClient">
                        <input type="submit" id="submitClient" value="Enregistrer"/>
                        <input type="reset" id="reset" value="Annuler"/>
                    </div>
            
            </form>
        </div>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/scriptCompte.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/ajax.js"><?php echo '</script'; ?>
>
    </body>
</html>
    <?php }
}
