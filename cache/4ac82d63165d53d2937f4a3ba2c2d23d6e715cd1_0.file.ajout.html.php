<?php
/* Smarty version 3.1.30, created on 2020-08-04 15:39:11
  from "/opt/lampp/htdocs/bpsamanemvc/src/view/compte/ajout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2964ff409705_69900334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ac82d63165d53d2937f4a3ba2c2d23d6e715cd1' => 
    array (
      0 => '/opt/lampp/htdocs/bpsamanemvc/src/view/compte/ajout.html',
      1 => 1596544205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2964ff409705_69900334 (Smarty_Internal_Template $_smarty_tpl) {
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

            <form action="compteController" method="POST" class="myFormCompte" id="formCompte">
                        
                <fieldset>
            
                    <legend>Informations du Compte </legend>
            
                            <label for="typeCompte" id="TypeCompte" name="typeCompte" >Type de compte: </label><br>
                                <select name="Compte" id="type">
                                    <option  value="courant">Compte Courant</option>
                                    <option  value="epargne">Compte Epargne</option>
                                    <option value="bloque">Compte Bloque</option>
                               </select>    
            
                            <label for="numeroCompte" id="numeroCompte">Numero de compte: </label>
                                <input type="text" id="numeroCompte" name="noCompte" placeholder="numero de compte"/><br>
                                <span id="numCompte_error"></span><br>
            
                            <label for="fraisOuv" id="labelFraisOuv">Frais d'Ouverture:</label>
                                <input type="text" id="fraisOuv" name="fraisOuv" placeholder="frais d'ouverture"/><br>
                                <span id="fraisOuv_error"></span><br>
                                                                 
                            <label for="remunAnnuelle" id="labelRemunAnnuelle">Montant Remuneration Annuelle:</label>
                                <input type="text" id="remunAnnuelle" name="remu" placeholder="remuneration annuelle"/><br>
                                <span id="remun_error"></span><br>
            
                            <label for="depotInitial" id="labelDepotInitialCC">Montant du dépot initial:</label>
                                <input type="text" id="depotInitialCC" name="depotCC" placeholder="depot initial à la creation"/><br>
                                <span id="depotInit_error"></span><br>
            
                            <label for="dateDeblocage" id="labelDateDeblocage">Date de RéOuverture:</label>
                                <input type="date" id="dateDeblocage" name="dateDeblocage" placeholder="date de reouverture"/><br>
                                <span id="date_error"></span><br>
            
                        <!-- <div class="form">
                            
                            <h2>Associer le client</h2>
                                <div class="group flex-row-between">
                                    <label for="">CNI &MediumSpace;&MediumSpace; </label>
                                    <input list="trouve" type="text" name="search" id="search"  onkeyup="searchValid()" class="input"/>
                                    <datalist id="trouve">
            
                                    </datalist>
                                </div>
                                <div class="field" id="info">
                                    <img src="ok.png" alt="ok">
            
                        </div>                       -->
                          
                </fieldset>
            
                    <div class="btns" id="boutons_formCompte">
                        <input type="submit" id="submitCompte" value="Enregistrer"/>
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
