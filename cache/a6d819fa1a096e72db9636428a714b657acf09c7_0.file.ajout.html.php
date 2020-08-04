<?php
/* Smarty version 3.1.30, created on 2020-08-04 14:58:56
  from "/opt/lampp/htdocs/bpsamanemvc/src/view/clientPhysique/ajout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f295b9053d788_02635408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6d819fa1a096e72db9636428a714b657acf09c7' => 
    array (
      0 => '/opt/lampp/htdocs/bpsamanemvc/src/view/clientPhysique/ajout.html',
      1 => 1596544247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f295b9053d788_02635408 (Smarty_Internal_Template $_smarty_tpl) {
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
        

		<div class="content">
            
            <h6>Votre situation professionnelle</h6>
            <input type="radio" name="sitPro" id="clientSalarie"/>
            <label for="">Salarié</label>
            <span>/</span>
            <input type="radio" name="sitPro" id="clientNonSalarie"/>
            <label for="">Non Salarié</label><br>
       
        <form action="clientPhysiqueController" class="myFormPhysique" method="POST" id="clientPhysique">
            <div class="flexform">
                <div id="form1">
                    <label for="nom" id="labelNom">Nom: </label><br>
                        <input type="text" id="nom_client_physique" name="nomPhysique" placeholder="Nom du client"/><br>
                        <span id="name_error"></span><br>
                    <label for="prenom" id="labelPrenom">Prenom: </label><br>
                        <input type="text" id="prenom_client_physique" name="prenomPhysique" placeholder="Prenom du client"/><br>
                        <span id="firstname_error"></span><br>
                    <label for="adresse" id="labelAdresse">Adresse: </label><br>
                        <input type="text" id="adresse_client_physique"  name="adressePhysique" placeholder="Adresse du client"/><br>
                        <span id="adress_error"></span><br>
                    <label for="telephone" id="labelTelephone">Telephone: </label><br>
                        <input type="text" id="tel_client_physique" name="telPhysique" placeholder="Telephone du client"/><br>
                        <span id="tel_error"></span><br>
                    <label for="email" id="labelEmail"></label>Email: </label><br>
                        <input type="text" id="email_client_physique" name="emailPhysique" placeholder="email du client"/><br>
                        <span id="email.error"></span><br>
        
                </div>
        
                <div id="form2">
                    <label for="identification" id="labelID">identification: </label><br>
                        <input type="text" id="id_client_physique" name="cni" placeholder="CNI/Passport"/><br>
                        <span id="id_error"></span><br>
                    <label for="profession" id="labelProfession">profession: </label><br>
                        <input type="text" id="profession" name="profession" placeholder="profession"/><br>
                        <span id="profession_error"></span><br>
        
                    <label for="salaire" id="labelSalaire">Salaire actuel: </label><br>
                        <input type="text" id="salaire"  name="salaire" placeholder="salaire du client"/><br>
                        <span id="salary_error"></span><br>
                        
                    <label for="info_employeur" id="labelEmployeur">Informations de l'employeur: </label><br>
                        <textarea id="infos_emp" name="infos_emp" placeholder="infos employeur"></textarea><br>
                        <span id="infos_emp_error"></span>
                                
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
</html><?php }
}
