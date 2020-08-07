<?php
/* Smarty version 3.1.30, created on 2020-08-07 14:04:50
  from "/opt/lampp/htdocs/bpsamanemvc/src/view/compte/ajout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2d4362300121_93230971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ac82d63165d53d2937f4a3ba2c2d23d6e715cd1' => 
    array (
      0 => '/opt/lampp/htdocs/bpsamanemvc/src/view/compte/ajout.html',
      1 => 1596801871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2d4362300121_93230971 (Smarty_Internal_Template $_smarty_tpl) {
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
							<h3 class="panel-title" style="text-transform: uppercase;"><i class="fa fa-money"></i>  Formulaire de creation de Compte</h3>
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
Compte/add" id="formCompte">
								
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<select class="custom-select form-control input-sm" name="typeCompte" id="typeCompte">
												<option value="0" selected>Choisir le type de Compte</option>
												<option value="1">Compte Courant</option>
												<option value="2">Compte Epargne et Xewel</option>
												<option value="3">Compte Bloque</option>
											  </select>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control input-sm" name="numeroCompte" id="numeroCompte" placeholder="Numero de Compte"/>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="number" class="form-control input-sm" name="fraisOuverture" id="fraisOuverture" placeholder="Frais d'Ouverture"/>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="number" name="depotInitial" id="depotInitial" class="form-control input-sm" placeholder="Depot initial"/>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="number" name="remuneration" id="remuneration" class="form-control input-sm" placeholder="Remuneration Annuelle"/>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="number" name="agios" id="agios" class="form-control input-sm" placeholder="Agios"/>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<label for="cni">Date d'Ouverture</label>
											<input type="date" name="dateOuverture" id="dateOuverture" class="form-control input-sm" placeholder="date d'Ouverture"/>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<label for="cni">Date de Deblocage</label>
											<input type="date" name="dateDeblocage" id="dateDeblocage" class="form-control input-sm" placeholder="date de Deblocage"/>
										</div>
									</div>
								</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<label for="cni">client associé</label><br>
											<button class="btn" id="entreprisebtn"><i class="fa fa-building"></i> Entreprise</button>
											<button class="btn" id="physiquebtn"><i class="fa fa-user-circle"></i> Particulier</button>
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">										
											
										<input type="text" class="form-control input-sm" name="searchEntreprise" id="searchEntreprise"  onkeyup="searchValidEntreprise()" placeholder="saisir le numero de ninea"/>
										
                                    	<input type="text" class="form-control input-sm" name="searchPhysique" id="searchPhysique"  onkeyup="searchValidPhysique()" placeholder="saisir le numero de cin"/>
									</div>
									<div id="result">
            
                                    </div>
                                </div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
									<?php if (isset($_smarty_tpl->tpl_vars['Mresults']->value)) {?>
										<?php if ($_smarty_tpl->tpl_vars['Mresults']->value != null) {?>
											<table class="table table-bordered table-stripped">
												<tr>
													<th>Identifiant</th>
													<th>Nom</th>
													<th>Adresse</th>
													<th>Telephone</th>
													<th>Email</th>
													<th>Ninea</th>
													<th>Registre de Commerce</th>
												</tr>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Mresults']->value, 'Mresult');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Mresult']->value) {
?>
													<tr>
														<td><?php echo $_smarty_tpl->tpl_vars['result']->value->getId();?>
</td>
														<td><?php echo $_smarty_tpl->tpl_vars['result']->value->getNom();?>
</td>
														<td><?php echo $_smarty_tpl->tpl_vars['result']->value->getAdresse();?>
</td>
														<td><?php echo $_smarty_tpl->tpl_vars['result']->value->getTelephone();?>
</td>
														<td><?php echo $_smarty_tpl->tpl_vars['result']->value->getEmail();?>
</td>
														<td><?php echo $_smarty_tpl->tpl_vars['result']->value->getNinea();?>
</td>
														<td><?php echo $_smarty_tpl->tpl_vars['result']->value->getRegiscom();?>
</td>                                       
													</tr>
												<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

											</table>
										<?php } else { ?>
											<?php echo $_smarty_tpl->tpl_vars['Mmessage']->value;?>
	
										<?php }?>
									<?php }?>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
									<?php if (isset($_smarty_tpl->tpl_vars['Presults']->value)) {?>
									<?php if ($_smarty_tpl->tpl_vars['Presults']->value != null) {?>
										<table class="table table-bordered table-stripped">
											<tr>
												<th>Identifiant</th>
												<th>Nom</th>
												<th>Prenom</th>
												<th>Adresse</th>
												<th>Telephone</th>
												<th>Email</th>
												<th>Numero de CNI</th>
											</tr>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Presults']->value, 'Presult');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Presult']->value) {
?>
												<tr>
													<td><?php echo $_smarty_tpl->tpl_vars['Presult']->value->getId();?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['Presult']->value->getNom();?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['Presult']->value->getPrenom();?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['Presult']->value->getAdresse();?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['Presult']->value->getTelephone();?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['Presult']->value->getEmail();?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['Presult']->value->getIdentifiant();?>
</td>                                        
												</tr>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

										</table>
									<?php } else { ?>
										<?php echo $_smarty_tpl->tpl_vars['Pmessage']->value;?>

									<?php }?>
								<?php }?>
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
    </div>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/scriptCompte.js"><?php echo '</script'; ?>
>
		
	</body>
</html><?php }
}
