<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use app\models\MENUUSUARIOS;
use app\models\CATCTES;
use yii\filters\VerbFilter;

/**
 * USUARIOSController implements the CRUD actions for USUARIOS model.
 */
class inteligenciaController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all USUARIOS models.
     * @return mixed
     */
    public function actionIndex()
    {
      return $this->render('index');
    }
    
    public function actionSubmenu($id)
    {
      return $this->render('submenu',["id"=>$id]);
    }
    
    public function actionVerformulario()
    {
	    //TOP TEN PRODUCTOS
	    if($_GET["id"] == "R14"){
		    	if(isset($_POST["califica"])){
			    	echo '<pre>';print_r($_SERVER); echo "</pre>";
						echo '<pre>';print_r($_POST); echo "</pre>";
						exit;
			    	$datos = $_POST["toptenproductos"];

						$formato = (isset($datos["formatocorto"])) ? "1":"0";
						$sql = "exec dbo.mp_rpt_q_califica_cliente '" . 
							$datos["codigoCliente"] . "','" . 
							date("Y-d-m", strtotime($datos["fecha1"])) . "','" . 
							date("Y-d-m", strtotime($datos["fecha2"])) . "','1','" . 
							date("Y-d-m", strtotime($datos["fecha2"])) . "','" . $formato . "'";
						$rs = Yii::$app->db->createCommand($sql)->queryAll();
						//echo $sql;
						return $this->render("reportetoptenproductos",array("rs"=>$rs, "nombreReporte"=>"Califica Cliente"));
		    	}else{
			    	$clientes = Yii::$app->db->createCommand("SELECT COD_CTE,NOM_CTE FROM CATCTES ORDER BY NOM_CTE")->queryAll();
						$grupos = Yii::$app->db->createCommand("SELECT COD_GRUPO,NOM_GRUPO,COD_ZONA FROM CATGRUPOS ORDER BY NOM_GRUPO")->queryAll();
						$zonas = Yii::$app->db->createCommand("SELECT COD_ZONA AS CODIGO,NOM_ZONA FROM CATZONAS ORDER BY NOM_ZONA")->queryAll();
						$productos = Yii::$app->db->createCommand("SELECT CATARTI.COD_ART AS CODIGO ,DESCRI AS DESCRIPCION  FROM CATARTI WHERE STATUS='A' ORDER BY DESCRI")->queryAll();
						$gruposInteres = Yii::$app->db->createCommand("SELECT COD_GRUPO_PROD_INTERES,NOM_GRUPO_PROD_INTERES FROM CATGRUPOS_PROD_INTERES ORDER BY NOM_GRUPO_PROD_INTERES")->queryAll();
						$agricolas = Yii::$app->db->createCommand("SELECT CA.COD_AGRICOLA,CA.NOM_AGRICOLA,CTE.NOM_CTE FROM CATAGRICOLAS CA INNER JOIN CATCTES CTE ON(CA.COD_CTE=CTE.COD_CTE) ORDER BY NOM_AGRICOLA")->queryAll();
/*
						echo '<pre>';print_r($clientes); echo "</pre>";
						exit;
*/
			    	return $this->render('formTopTenProductos',array(
				    	"clientes"=>$clientes,
				    	"grupos"=>$grupos,
				    	"zonas"=>$zonas,
				    	"productos"=>$productos,
				    	"gruposInteres"=>$gruposInteres,
				    	'agricolas'=>$agricolas
			    	));
		    	}
			}	    
			if(isset($_POST["califica"])){
				if($_GET["id"] == "R1"){
					$datos = $_POST["califica"];

					$formato = (isset($datos["formatocorto"])) ? "1":"0";
					$sql = "exec dbo.mp_rpt_q_califica_cliente '" . 
						$datos["codigoCliente"] . "','" . 
						date("Y-d-m", strtotime($datos["fecha1"])) . "','" . 
						date("Y-d-m", strtotime($datos["fecha2"])) . "','1','" . 
						date("Y-d-m", strtotime($datos["fecha2"])) . "','" . $formato . "'";
					$rs = Yii::$app->db->createCommand($sql)->queryAll();
					//echo $sql;
					return $this->render("reportecalifica",array("rs"=>$rs,"nombreReporte"=>"Califica Cliente"));
				}
				
			}else{
				return $this->render('califica');
			}
      
    }
    
    public function actionToptenproductos(){	    
			if(isset($_POST["califica"])){
				echo '<pre>';print_r(date("Y-m-d")); echo "</pre>";
				echo '<pre>';print_r($_REQUEST); echo "</pre>";
				echo '<pre>';print_r($_POST); echo "</pre>";
				exit;
				$datos = $_POST["califica"];
				$sql = "exec dbo.MP_RPT_Q_VENTAS_TOP_PRODUCTOS '" . 
					$datos["cod_cte"] . "','" . 
					$datos["cod_doc"] . "','" . 
					date("Y-d-m", strtotime($datos["fecha1"])) . "','" . 
					date("Y-d-m", strtotime($datos["fecha2"])) . "','1','" . 
					$datos["cod_grupo"] . "','" . 
					$datos["cod_zona"] . "','" . 
					$datos["porcentaje"] . "','" . 
					$datos["descri"] . "','" . 
					$datos["min"] . "','" . 
					'' . "','" . 
					$datos["porcentaje"] . "','" . 
					$datos["porcentaje"] . "','" . 
					$datos["porcentaje"] . "','" . 
					
					date("Y-d-m", strtotime($datos["fecha2"])) . "','" . $formato . "'";
				$rs = Yii::$app->db->createCommand($sql)->queryAll();
				//echo $sql;
				return $this->render("reportetoptenproductos",array("nombreReporte"=>"Califica Cliente"));
			}
    }
}
?>