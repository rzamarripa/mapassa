<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MENUUSUARIOS */
/* @var $form yii\widgets\ActiveForm */
?>

<div ng-controller="Toptenproductos" class="jarviswidget jarviswidget-sortable" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="">
	<!-- widget options:
	usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

	data-widget-colorbutton="false"
	data-widget-editbutton="false"
	data-widget-togglebutton="false"
	data-widget-deletebutton="false"
	data-widget-fullscreenbutton="false"
	data-widget-custombutton="false"
	data-widget-collapsed="true"
	data-widget-sortable="false"

	-->
	<header role="heading"><div class="jarviswidget-ctrls" role="menu">   </div>
		<span class="widget-icon"> <i class="fa fa-edit"></i> </span>
		<h2>Top Ten Productos </h2>

	<span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header>

	<!-- widget div-->
	<div role="content">

		<!-- widget edit box -->
		<div class="jarviswidget-editbox">
			<!-- This area used as dropdown edit box -->

		</div>
		<!-- end widget edit box -->

		<!-- widget content -->
		<div class="widget-body no-padding">

			<?php $form = ActiveForm::begin(['id' => 'my-form', 'action'=>['inteligencia/toptenproductos'], 'options'=>['class'=>'smart-form']]); ?>
				<header>
					Escriba la siguiente información para ver el Reporte
				</header>

				<fieldset>
					<div class="col-sm-12 col-md-6 col-lg-3 ">
						<section>
							<label class="label">Cliente</label>
							<label class="input">
								<select name="califica[cod_cte]" style="width:100%" class="select2min4">
									<option></option>
									<?php foreach($clientes as $cliente){ ?>
										<option value="<?php echo $cliente["COD_CTE"]; ?>"><?php echo $cliente["NOM_CTE"]; ?></option>
									<?php } ?>
								</select>
							</label>						
						</section>
						<section>
							<label class="label">Agricolas</label>
							<label class="input">
								<select name="califica[cod_agricola]" style="width:100%" class="select2">
									<option></option>			
									<?php foreach($agricolas as $agricola){ ?>
										<option value="<?php echo $agricola["COD_AGRICOLA"]; ?>"><?php echo $agricola["NOM_AGRICOLA"]; ?></option>
									<?php } ?>						
								</select>
							</label>						
						</section>
						<section>
							<label class="label">Zona</label>
							<label class="input">
								<select name="califica[cod_zona]" style="width:100%" class="select2min1">
									<option></option>
									<?php foreach($zonas as $zona){ ?>
										<option value="<?php echo $zona["CODIGO"]; ?>"><?php echo $zona["NOM_ZONA"]; ?></option>
									<?php } ?>
								</select>
							</label>						
						</section>
						<section>
							<label class="label">Grupo</label>
							<label class="input">
								<select name="califica[cod_grupo]" style="width:100%" class="select2">
									<option></option>
									<?php foreach($grupos as $grupo){ ?>
										<option value="<?php echo $grupo["COD_GRUPO"]; ?>"><?php echo $grupo["NOM_GRUPO"]; ?></option>
									<?php } ?>
								</select>
							</label>
						</section>
						<section>
							<label class="label">Grupo Prod</label>
							<label class="input">
								<select name="califica[cod_grupo_prod_interes]" style="width:100%" class="select2">
									<option></option>
									<?php foreach($gruposInteres as $grupoInteres){ ?>
										<option value="<?php echo $grupoInteres["COD_GRUPO_PROD_INTERES"]; ?>"><?php echo $grupoInteres["NOM_GRUPO_PROD_INTERES"]; ?></option>
									<?php } ?>
								</select>
							</label>						
						</section>
						<section>
							<label class="label">Producto(s)</label>
							<label class="input">
								<select name="califica[descri]" style="width:100%" class="select2">
									<option></option>
									<?php
										
										 foreach($productos as $producto){ ?>
										<option value="<?php echo $producto["CODIGO"]; ?>"><?php echo $producto["DESCRIPCION"]; ?></option>
									<?php } ?>
								</select>
							</label>						
						</section>						
					</div>
					<div class="col-sm-12 col-md-3 col-lg-3">
						<section>
							<label class="label">Desde</label>
							<label class="input">
								<input type="date" name="califica[fecha1]" value="<?php echo date("Y") . "-01-01";?>">
							</label>						
						</section>
						<section>
							<label class="label">Hasta</label>
							<label class="input">
								<input type="date" name="califica[fecha2]" value="<?php echo date("Y-m-d"); ?>">
							</label>						
						</section>
						<section>
								<label class="">
									<input type="checkbox" name="califica[filtrarporporcentajeutlidad]" ng-model="util">
									<i data-swchon-text="Si" data-swchoff-text="No"></i>Filtrar por % de Util
								</label>
						</section>
						<section>
								<div class="col-lg-4">
									<label>
										<input type="radio" name="califica[min]" checked="checked" value="SI" ng-disabled="!util">
										<i data-swchon-text="Si" data-swchoff-text="No"></i>Máximo
									</label>
								</div>
								<div class="col-lg-4">
									<label>
										<input type="radio" name="califica[min]" value="NO" ng-disabled="!util">
										<i data-swchon-text="Si" data-swchoff-text="No"></i>Mínimo
									</label>
								</div>
								<div class="col-lg-4">
									<label >
										<input type="radio" name="califica[min]" value="E" ng-disabled="!util">
										<i data-swchon-text="Si" data-swchoff-text="No"></i>Exacto
									</label>
								</div>
								<div class="col-lg-4">
									<label class=" ">
										<input type="radio" checked="checked" name="califica[categoria]"  ng-disabled="!util">
										<i data-swchon-text="Si" data-swchoff-text="No"></i>Categoría
									</label>
								</div>
								<div class="col-lg-4">									
									<select name="califica[categoria]" style="width:100%" class="select2" ng-disabled="!util">
										<option></option>
										<option value="AAAA">AAAA</option>
										<option value="AAA">AAA</option>
										<option value="AA">AA</option>
										<option value="A">A</option>
										<option value="B">B</option>
										<option value="C">C</option>
										<option value="D">D</option>
										<option value="S">S</option>
									</select>
								</div>
								<div class="col-lg-4">									
									<label>
										<input type="radio" name="califica[categoria]" ng-disabled="!util" class="col-lg-2">
										<span  class="col-lg-1">%</span>
										<input type="text" name="califica[porcentaje]" ng-disabled="!util" class="col-lg-6">													
									</label>									
								</div>
						</section>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-3">
						<section>
							<label class="label">Utilidad de la empresa hasta</label>
							<label class="input">
								<input type="text" name="califica[utilidad_maxima]" maxlength="3" style="width:80%">%
							</label>
						</section>
						<section>
							<label class="label">Documento</label>
							<label class="input">							
								<select name="califica[cod_doc]" style="width:100%" class="select2">
									<option value="T">T</option>
									<option value="F">F</option>
									<option value="R">R</option>
								</select>
							</label>						
						</section>
						<section>
							<label class="label">Filtrar Productos</label>
							<label class="input">
								<select name="califica[clasificacion]" style="width:100%" class="select2">
									<option value="T">T</option>
									<option value="P">P</option>
								</select>
							</label>
							<label class="label">Tipo de Cliente</label>
							<label class="input">
								<select name="califica[tipo_cliente]" style="width:100%" class="select2">
									<option></option>
									<option value="AGRICULTOR">AGRICULTOR</option>
									<option value="COMERCIALIZADOR">COMERCIALIZADOR</option>
									<option value="NO IDENTIFICADO">NO IDENTIFICADO</option>
									<option value="OTRO">OTRO</option>
								</select>
							</label>						
						</section>												
					</div>
					<div class="col-sm-12 col-md-6 col-lg-3">
						<label class="label">Elija La Configuración de fecha</label>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<section>
								<button type="button" class="btn btn-primary btn-block btn-sm">Temporada Anterior</button>
								<button type="button" class="btn btn-primary btn-block btn-sm">Temporada Actual</button>
								<button type="button" class="btn btn-primary btn-block btn-sm">Año Anterior</button>
								<button type="button" class="btn btn-primary btn-block btn-sm">Año Actual</button>
							</section>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<section>
								<button type="button" class="btn btn-primary btn-block btn-sm">Mes Año Anterior</button>
								<button type="button" class="btn btn-primary btn-block btn-sm">Mes Año Actual</button>
								<button type="button" class="btn btn-primary btn-block btn-sm">Día Anterior</button>
								<button type="button" class="btn btn-primary btn-block btn-sm">Día Actual</button>
							</section>
						</div>
						
					</div>
				</fieldset>
			

				<footer>
					<button type="submit" class="btn btn-primary">
						Ver Reporte
					</button>
					<button type="button" class="btn btn-default" onclick="window.history.back();">
						Atrás
					</button>
				</footer>
			<?php ActiveForm::end(); ?>

		</div>
		
		<!-- end widget content -->

	</div>
	<!-- end widget div -->

</div>
