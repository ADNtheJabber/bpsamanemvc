<?php
/* Smarty version 3.1.30, created on 2020-08-06 18:58:25
  from "/opt/lampp/htdocs/bpsamanemvc/src/view/compte/details.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2c36b1415a50_18483375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4520efe594d21f03e5c8e7d0188a298e4233e871' => 
    array (
      0 => '/opt/lampp/htdocs/bpsamanemvc/src/view/compte/details.html',
      1 => 1596732858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2c36b1415a50_18483375 (Smarty_Internal_Template $_smarty_tpl) {
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
        
        <div class="container">

            <div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:40px; width: 1000px; margin-left: 30px;">
                <div class="panel panel-info">
                    <div class="panel-heading">Banque du Peuple</div>
                    <div class="panel-body">
                        <div class="alert alert-success" style="font-size:18px; text-align:justify;">
                            Liste des Comptes
                        </div>
                        <?php if (isset($_smarty_tpl->tpl_vars['comptes']->value)) {?>
                            <?php if ($_smarty_tpl->tpl_vars['comptes']->value != null) {?>
                                <table class="table table-bordered table-stripped">
                                    <tr>
										<th>id</th>
                                        <th>Numero</th>
                                        <th>Type</th>
                                        <th>Solde</th>
                                        <th>Remuneration</th>
                                        <th>Frais d'Ouverture</th>
                                        <th>Agios</th>
                                        <th>Date d'Ouverture</th>
                                    </tr>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comptes']->value, 'compte');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['compte']->value) {
?>
                                        <tr>
											<td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getId();?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getNumCompte();?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getTypeCompte();?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getSolde();?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getRemuneration();?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getFraisOuv();?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getAgios();?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getDateOuverture();?>
</td>
                                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ClientPhysique/findById">Voir le proprietaire</a> </td>                                        
                                        </tr>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </table>
                            <?php } else { ?>
                                Liste vide
                            <?php }?>
                        <?php }?>
                    </div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Welcome/index">Accueil</a>
                </div>
            </div>
            
        </div>
            
        </body>
    </html><?php }
}
