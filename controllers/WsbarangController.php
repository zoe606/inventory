<?php
namespace app\controllers;

use Yii;
use yii\rest\ActiveController;
use app\models\Barang;
use app\models\Barangkeluar;

class WsbarangController extends ActiveController
{
    public $modelClass = 'app\models\Barang';

	public function actionBarang(){
		$brg=Barang::find()->where('stok>0')->all();
		$data=array();
		$i=0;
		foreach ($brg as $item){
			$data[$i]['id']=(string)$item->id;
			$data[$i]['harga']=$item->harga_jual;
      $data[$i]['type_barang']=$item->type_barang;
			$data[$i]['namaharga']=$item->type_barang.' | '.$item->nama.' | '.$item->harga_jual;
			$i++;
		}
		#\Yii::$app->response->format = Response::FORMAT_JSON;
		#echo json_encode($data,JSON_PRETTY_PRINT);
		return $data;
	}

	public function actionHarga($id){
		$brg=Barang::findOne($id);
		$data=array();
		$brg->stok--;
		$brg->save();
    $data['type']=$brg->type_barang;
		$data['nama']=$brg->nama;
		$data['harga']=$brg->harga_jual;

		$out=new Barangkeluar();
		$out->id_barang=$brg->id;
		$out->jumlah=1;
		$out->harga_barang=$brg->harga_jual;
		$out->total_harga=$brg->harga_jual;
		$out->tanggal_keluar=Date('y-m-d H:i:s');
		$out->save();

		return $data;
	}

  public function actionLihat($id){
		$brg=Barang::findOne($id);
		$data=array();
    $brg->save();
    $data['type']=$brg->type_barang;
		$data['nama']=$brg->nama;
		$data['harga']=$brg->harga_jual;

    return $data;
  }
}
