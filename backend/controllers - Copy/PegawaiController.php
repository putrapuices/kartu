<?php

namespace backend\controllers;

use Yii;
use backend\models\Pegawai;
use backend\models\PegawaiSearch;
use backend\models\PendidikanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Pendidikan;
use backend\models\Jurusan;
use backend\models\UserForm;
use backend\models\Akun;

/**
 * PegawaiController implements the CRUD actions for Pegawai model.
 */
class PegawaiController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }


     public function actionPrintipktigadua()
    {   
    

        // $searchModel = new Search();
        // // $searchModel->id_sekolah = 1; 
        // // $idku = Yii::$app->user->identity->id$date ;

              // var_dump($tamatsdl);die();
         


// $query = \backend\models\Admins::find()
//     ->select('pendidikan.*,keterangan.*')  // make sure same column name not there in both table
//     ->leftJoin('pendidikan', 'pendidikan.id_daftar = keterangan.id_daftar')
//     ->where(['keterangan.id_daftar' => 33])
//     ->with('pendidikan')
//     ->asArray()
//     ->all();
        $pendidikan = Pendidikan::findOne(['id_sekolah'=>1000]);
        $date = $pendidikan->pendidikan_date;
        $tahun = Yii::$app->formatter->asDate($date , 'yyyy');
        $bulan = Yii::$app->formatter->asDate($date , 'MM');
        $hari = Yii::$app->formatter->asDate($date , 'dd');
        $today = date('Y-m-d');
        $todayTgl = date('d');
        $todayMonth = date('Y-m');
        $todayMonthh =date('m');
        // $bulankemarin = date('m'("-1 month", strtotime(date($todayMonthh))));
         $sekarang = Yii::$app->formatter->asDate('now', 'php:Y-m-d');
         $sekarangbln = Yii::$app->formatter->asDate('now', 'php:m');
         // var_dump($sekarangbln);die;
         $bulanlalu = date('m', strtotime('-1 month', strtotime($sekarang)));
         
         $blnsekarang = Yii::$app->formatter->asDate('now', 'php:m');

        




         $caripendidikanbulan = (new \yii\db\Query())
                    ->select('id_sekolah, pendidikan_date')
                    ->from('pendidikan')
                    ->where(['id_sekolah' => 1000, 'MONTH(pendidikan_date)' => $bulanlalu])
                    ->all();


                    // -----------------------
         // $tidaktamatsdl = Pendidikan::find()
         // ->where(['id_sekolah' => 1000,'id_jurusan'=>1101, 'MONTH(pendidikan_date)' => $bulanlalu])
         // ->count();
                    // SD ==========================================
                    // bulanlalu============================
          $blnlalutidaktamatsdl = Pendidikan::find()
          ->where(['id_sekolah' => 1000,
          'id_jurusan'=>1101,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();

          $blnlalutidaktamatsdp = Pendidikan::find()
          ->where(['id_sekolah' => 1000,
          'id_jurusan'=>1101,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini============================

         $blninitidaktamatsdl = Pendidikan::find()
          ->where(['id_sekolah' => 1000,
          'id_jurusan'=>1101,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

          $blninitidaktamatsdp = Pendidikan::find()
          ->where(['id_sekolah' => 1000,
          'id_jurusan'=>1101,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

                  // penempatanbulanini============================

         $penempatanblninitidaktamatsdl = Pendidikan::find()
          ->where(['id_sekolah' => 1000,
          'id_jurusan'=>1101,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

          $penempatanblninitidaktamatsdp = Pendidikan::find()
          ->where(['id_sekolah' => 1000,
          'id_jurusan'=>1101,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

                 // dihapuskanbulanini============================

         $dihapusblninitidaktamatsdl = Pendidikan::find()
          ->where(['id_sekolah' => 1000,
          'id_jurusan'=>1101,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();

          $dihapusblninitidaktamatsdp = Pendidikan::find()
          ->where(['id_sekolah' => 1000,
          'id_jurusan'=>1101,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();

          // ============================================================================

           // SD TIDAK TAMAT SD==========================================
                    // bulanlalu============================
          $blnlalutamatsdl = Pendidikan::find()
          ->where(['id_sekolah' => 1000,
          'id_jurusan'=>1102,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();

          $blnlalutamatsdp = Pendidikan::find()
          ->where(['id_sekolah' => 1000,
          'id_jurusan'=>1102,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini============================

         $blninitamatsdl = Pendidikan::find()
          ->where(['id_sekolah' => 1000,
          'id_jurusan'=>1102,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

          $blninitamatsdp = Pendidikan::find()
          ->where(['id_sekolah' => 1000,
          'id_jurusan'=>1102,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

                  // penempatanbulanini============================

         $penempatanblninitamatsdl = Pendidikan::find()
          ->where(['id_sekolah' => 1000,
          'id_jurusan'=>1102,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

          $penempatanblninitamatsdp = Pendidikan::find()
          ->where(['id_sekolah' => 1000,
          'id_jurusan'=>1102,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

                 // dihapuskanbulanini============================

         $dihapusblninitamatsdl = Pendidikan::find()
          ->where(['id_sekolah' => 1000,
          'id_jurusan'=>1102,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();

          $dihapusblninitamatsdp = Pendidikan::find()
          ->where(['id_sekolah' => 1000,
          'id_jurusan'=>1102,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();

// ================================================================================


 // SD setingkat sd=========================================
                    // bulanlalu============================
          $blnlalusetingkatsdl = Pendidikan::find()
          ->where(['id_sekolah' => 1000,
          'id_jurusan'=>1103,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();

          $blnlalusetingkatsdp = Pendidikan::find()
          ->where(['id_sekolah' => 1000,
          'id_jurusan'=>1103,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini============================

         $blninisetingkatsdl = Pendidikan::find()
          ->where(['id_sekolah' => 1000,
          'id_jurusan'=>1103,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

          $blninisetingkatsdp = Pendidikan::find()
          ->where(['id_sekolah' => 1000,
          'id_jurusan'=>1103,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

                  // penempatanbulanini============================

         $penempatanblninisetingkatsdl = Pendidikan::find()
          ->where(['id_sekolah' => 1000,
          'id_jurusan'=>1103,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

          $penempatanblninisetingkatsdp = Pendidikan::find()
          ->where(['id_sekolah' => 1000,
          'id_jurusan'=>1103,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

                 // dihapuskanbulanini============================

         $dihapusblninisetingkatsdl = Pendidikan::find()
          ->where(['id_sekolah' => 1000,
          'id_jurusan'=>1103,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();

          $dihapusblninisetingkatsdp = Pendidikan::find()
          ->where(['id_sekolah' => 1000,
          'id_jurusan'=>1103,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();

// ==============================BATAS SD==================================================

         // =================PENDIDIKAN MENENGAH PERTAMA ========================

    //=======================SEKOLAH MENENGAH PERTAMA=========================================
                    // bulanlalu============================
          $blnlalusmpl = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2101,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();

          $blnlalusmpp = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2101,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini============================

         $blninismpl = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2101,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

          $blninismpp = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2101,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

                  // penempatanbulanini============================

         $penempatanblninismpl = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2101,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

          $penempatanblninismpp = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2101,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

                 // dihapuskanbulanini============================

         $dihapusblninismpl = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2101,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();

          $dihapusblninismpp = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2101,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();


          //=======================MADRASAH DINIYAH SANAWIYAH=======================================
                    // bulanlalu============================
          $blnlalumdsl = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2102,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();

          $blnlalumdsp = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2102,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini============================

         $blninimdsl = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2102,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

          $blninimdsp = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2102,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

                  // penempatanbulanini============================

         $penempatanblninimdsl = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2102,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

          $penempatanblninimdsp = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2102,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

                 // dihapuskanbulanini============================

         $dihapusblninimdsl = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2102,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();

          $dihapusblninimdsp = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2102,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();



          //=======================SLTP KEJURUAN=======================================
                    // bulanlalu============================
          $blnlalusltpkejuruanl = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2104,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();

          $blnlalusltpkejuruanp = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2104,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini============================

         $blninisltpkejuruanl = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2104,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

          $blninisltpkejuruanp = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2104,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

                  // penempatanbulanini============================

         $penempatanblninisltpkejuruanl = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2104,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

          $penempatanblninisltpkejuruanp = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2104,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

                 // dihapuskanbulanini============================

         $dihapusblninisltpkejuruanl = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2104,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();

          $dihapusblninisltpkejuruanp = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2104,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();



// ======================================================================================================



//=======================SLTP lainnya=======================================
                    // bulanlalu============================
          $blnlalusltplainnyal = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2103,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();

          $blnlalusltplainnyap = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2103,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini============================

         $blninisltplainnyal = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2103,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

          $blninisltplainnyap = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2103,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

                  // penempatanbulanini============================

         $penempatanblninisltplainnyal = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2103,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

          $penempatanblninisltplainnyap = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2103,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

                 // dihapuskanbulanini============================

         $dihapusblninisltplainnyal = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2103,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();

          $dihapusblninisltplainnyap = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2103,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();



// ======================================================================================================

          //=======================SLTP tak terdefenisi=======================================
                    // bulanlalu============================
          $blnlalusltptakterdefenisil = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2199,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();

          $blnlalusltptakterdefenisip = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2199,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini============================

         $blninisltptakterdefenisil = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2199,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

          $blninisltptakterdefenisip = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2199,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

                  // penempatanbulanini============================

         $penempatanblninisltptakterdefenisil = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2199,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

          $penempatanblninisltptakterdefenisip = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2199,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

                 // dihapuskanbulanini============================

         $dihapusblninisltptakterdefenisil = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2199,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();

          $dihapusblninisltptakterdefenisip = Pendidikan::find()
          ->where(['id_sekolah' => 2000,
          'id_jurusan'=>2199,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();



// ======================================================================================================
             //======================= pendidikan menengah atas=======================================

                 //======================= SMU=======================================
                    // bulanlalu============================
          $blnlalusmul = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3801,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();

          $blnlalusmup = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3801,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini============================

         $blninismul = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3801,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

          $blninismup = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3801,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

                  // penempatanbulanini============================

         $penempatanblninismul = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3801,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

          $penempatanblninismup = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3801,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

                 // dihapuskanbulanini============================

         $dihapusblninismul = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3801,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();

          $dihapusblninismup = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3801,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();



// ======================================================================================================


             //======================= pendidikan menengah atas=======================================
             //======================= mda=======================================
                    // bulanlalu============================
          $blnlalumdal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3802,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();

          $blnlalumdap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3802,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini============================

         $blninimdal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3802,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

          $blninimdap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3802,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

                  // penempatanbulanini============================

         $penempatanblninimdal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3802,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

          $penempatanblninimdap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3802,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

                 // dihapuskanbulanini============================

         $dihapusblninimdal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3802,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();

          $dihapusblninimdap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3802,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();



// ======================================================================================================
        

            //======================= pendidikan menengah atas=======================================
             //======================= teknik bangunan=======================================
                    // bulanlalu============================
          $blnlaluteknikbangunanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3101,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();

          $blnlaluteknikbangunanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3101,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini============================

         $blniniteknikbangunanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3101,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

          $blniniteknikbangunanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3101,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

                  // penempatanbulanini============================

         $penempatanblniniteknikbangunanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3101,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

          $penempatanblniniteknikbangunanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3101,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

                 // dihapuskanbulanini============================

         $dihapusblniniteknikbangunanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3101,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();

          $dihapusblniniteknikbangunanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3101,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();



// ======================================================================================================

            //======================= pendidikan menengah atas=======================================
             //======================= teknik plumbingdansanitasi=======================================
                    // bulanlalu============================
          $blnlaluteknikplumbingdansanitasil = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3102,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();

          $blnlaluteknikplumbingdansanitasip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3102,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini============================

         $blniniteknikplumbingdansanitasil = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3102,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

          $blniniteknikplumbingdansanitasip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3102,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

                  // penempatanbulanini============================

         $penempatanblniniteknikplumbingdansanitasil = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3102,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

          $penempatanblniniteknikplumbingdansanitasip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3102,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

                 // dihapuskanbulanini============================

         $dihapusblniniteknikplumbingdansanitasil = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3102,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();

          $dihapusblniniteknikplumbingdansanitasip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3102,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();



// ======================================================================================================
               //======================= pendidikan menengah atas=======================================
             //======================= teknik surveidanpemetaan=======================================
                    // bulanlalu============================
          $blnlalutekniksurveidanpemetaanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3103,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();

          $blnlalutekniksurveidanpemetaanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3103,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini============================

         $blninitekniksurveidanpemetaanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3103,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

          $blninitekniksurveidanpemetaanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3103,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

                  // penempatanbulanini============================

         $penempatanblninitekniksurveidanpemetaanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3103,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

          $penempatanblninitekniksurveidanpemetaanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3103,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

                 // dihapuskanbulanini============================

         $dihapusblninitekniksurveidanpemetaanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3103,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();

          $dihapusblninitekniksurveidanpemetaanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3103,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();



// ======================================================================================================

                         //======================= pendidikan menengah atas=======================================
             //======================= teknik ketenagalistrikan=======================================
                    // bulanlalu============================
          $blnlaluteknikketenagalistrikanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3104,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();

          $blnlaluteknikketenagalistrikanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3104,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini============================

         $blniniteknikketenagalistrikanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3104,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

          $blniniteknikketenagalistrikanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3104,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

                  // penempatanbulanini============================

         $penempatanblniniteknikketenagalistrikanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3104,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

          $penempatanblniniteknikketenagalistrikanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3104,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

                 // dihapuskanbulanini============================

         $dihapusblniniteknikketenagalistrikanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3104,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();

          $dihapusblniniteknikketenagalistrikanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3104,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();



// ======================================================================================================

                             //======================= pendidikan menengah atas=======================================
             //======================= teknik pendinginandantataudara=======================================
                    // bulanlalu============================
          $blnlaluteknikpendinginandantataudaral = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3105,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();

          $blnlaluteknikpendinginandantataudarap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3105,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini============================

         $blniniteknikpendinginandantataudaral = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3105,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

          $blniniteknikpendinginandantataudarap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3105,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

                  // penempatanbulanini============================

         $penempatanblniniteknikpendinginandantataudaral = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3105,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

          $penempatanblniniteknikpendinginandantataudarap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3105,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

                 // dihapuskanbulanini============================

         $dihapusblniniteknikpendinginandantataudaral = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3105,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();

          $dihapusblniniteknikpendinginandantataudarap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3105,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();


// ======================================================================================================
                              //======================= pendidikan menengah atas=======================================
             //======================= teknik mesin=======================================
                    // bulanlalu============================
          $blnlaluteknikmesinl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3106,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();

          $blnlaluteknikmesinp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3106,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini============================

         $blniniteknikmesinl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3106,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

          $blniniteknikmesinp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3106,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();

                  // penempatanbulanini============================

         $penempatanblniniteknikmesinl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3106,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

          $penempatanblniniteknikmesinp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3106,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();

                 // dihapuskanbulanini============================

         $dihapusblniniteknikmesinl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3106,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();

          $dihapusblniniteknikmesinp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3106,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();



// ======================================================================================================
              //======================= pendidikan menengah atas=======================================
             //======================= teknik otomotif=======================================
                    // bulanlalu==========================================================
          $blnlaluteknikotomotifl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3107,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluteknikotomotifp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3107,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniteknikotomotifl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3107,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniteknikotomotifp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3107,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniteknikotomotifl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3107,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniteknikotomotifp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3107,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniteknikotomotifl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3107,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniteknikotomotifp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3107,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();

// ======================================================================================================
           //======================= pendidikan menengah atas=======================================
             //======================= teknologipesawatudara=======================================
                    // bulanlalu==========================================================
          $blnlaluteknologipesawatudaral = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3108,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluteknologipesawatudarap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3108,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniteknologipesawatudaral = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3108,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniteknologipesawatudarap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3108,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniteknologipesawatudaral = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3108,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniteknologipesawatudarap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3108,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniteknologipesawatudaral = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3108,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniteknologipesawatudarap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3108,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
// ======================================================================================================
           //======================= pendidikan menengah atas=======================================
             //======================= teknikperkapalan=======================================
                    // bulanlalu==========================================================
          $blnlaluteknikperkapalanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3109,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluteknikperkapalanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3109,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniteknikperkapalanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3109,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniteknikperkapalanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3109,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniteknikperkapalanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3109,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniteknikperkapalanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3109,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniteknikperkapalanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3109,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniteknikperkapalanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3109,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
// ======================================================================================================
          //======================= pendidikan menengah atas=======================================
             //======================= teknologitekstil=======================================
                    // bulanlalu==========================================================
          $blnlaluteknologitekstill = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3110,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluteknologitekstilp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3110,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniteknologitekstill = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3110,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniteknologitekstilp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3110,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniteknologitekstill = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3110,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniteknologitekstilp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3110,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniteknologitekstill = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3110,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniteknologitekstilp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3110,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
// ======================================================================================================
            //======================= pendidikan menengah atas=======================================
             //======================= teknikgrafika=======================================
                    // bulanlalu==========================================================
          $blnlaluteknikgrafikal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3111,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluteknikgrafikap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3111,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniteknikgrafikal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3111,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniteknikgrafikap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3111,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniteknikgrafikal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3111,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniteknikgrafikap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3111,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniteknikgrafikal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3111,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniteknikgrafikap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3111,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
// ======================================================================================================
              //======================= pendidikan menengah atas=======================================
             //======================= geologipertambangan=======================================
                    // bulanlalu==========================================================
          $blnlalugeologipertambanganl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3112,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalugeologipertambanganp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3112,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninigeologipertambanganl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3112,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninigeologipertambanganp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3112,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninigeologipertambanganl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3112,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninigeologipertambanganp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3112,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninigeologipertambanganl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3112,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninigeologipertambanganp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3112,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
// ======================================================================================================
             //======================= pendidikan menengah atas=======================================
             //======================= instrumentasiindustri=======================================
                    // bulanlalu==========================================================
          $blnlaluinstrumentasiindustril = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3113,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluinstrumentasiindustrip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3113,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniinstrumentasiindustril = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3113,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniinstrumentasiindustrip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3113,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniinstrumentasiindustril = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3113,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniinstrumentasiindustrip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3113,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniinstrumentasiindustril = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3113,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniinstrumentasiindustrip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3113,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
// ======================================================================================================
          //======================= pendidikan menengah atas=======================================
             //======================= teknikkimia=======================================
                    // bulanlalu==========================================================
          $blnlaluteknikkimial = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3114,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluteknikkimiap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3114,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniteknikkimial = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3114,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniteknikkimiap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3114,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniteknikkimial = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3114,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniteknikkimiap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3114,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniteknikkimial = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3114,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniteknikkimiap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3114,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
// ======================================================================================================
           //======================= pendidikan menengah atas=======================================
             //======================= pelayaran=======================================
                    // bulanlalu==========================================================
          $blnlalupelayaranl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3115,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalupelayaranp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3115,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninipelayaranl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3115,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninipelayaranp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3115,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninipelayaranl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3115,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninipelayaranp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3115,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninipelayaranl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3115,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninipelayaranp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3115,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
// ======================================================================================================
              //======================= pendidikan menengah atas=======================================
             //======================= teknikindustri=======================================
                    // bulanlalu==========================================================
          $blnlaluteknikindustril = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3116,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluteknikindustrip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3116,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniteknikindustril = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3116,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniteknikindustrip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3116,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniteknikindustril = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3116,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniteknikindustrip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3116,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniteknikindustril = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3116,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniteknikindustrip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3116,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
// ======================================================================================================
                 //======================= pendidikan menengah atas=======================================
             //======================= teknikperminyakan=======================================
                    // bulanlalu==========================================================
          $blnlaluteknikperminyakanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3117,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluteknikperminyakanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3117,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniteknikperminyakanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3117,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniteknikperminyakanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3117,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniteknikperminyakanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3117,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniteknikperminyakanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3117,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniteknikperminyakanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3117,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniteknikperminyakanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3117,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
// ======================================================================================================
             //======================= pendidikan menengah atas=======================================
             //======================= teknikelektronika=======================================
                    // bulanlalu==========================================================
          $blnlaluteknikelektronikal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3118,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluteknikelektronikap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3118,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniteknikelektronikal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3118,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniteknikelektronikap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3118,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniteknikelektronikal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3118,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniteknikelektronikap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3118,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniteknikelektronikal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3118,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniteknikelektronikap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3118,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
// ======================================================================================================

               //======================= pendidikan menengah atas=======================================
             //======================= tekniktelekomunikasi=======================================
                    // bulanlalu==========================================================
          $blnlalutekniktelekomunikasil = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3201,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalutekniktelekomunikasip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3201,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninitekniktelekomunikasil = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3201,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninitekniktelekomunikasip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3201,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninitekniktelekomunikasil = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3201,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninitekniktelekomunikasip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3201,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninitekniktelekomunikasil = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3201,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninitekniktelekomunikasip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3201,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
// ======================================================================================================
                 //======================= pendidikan menengah atas=======================================
             //======================= teknikkomputerdaninformatika=======================================
                    // bulanlalu==========================================================
          $blnlaluteknikkomputerdaninformatikal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3202,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluteknikkomputerdaninformatikap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3202,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniteknikkomputerdaninformatikal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3202,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniteknikkomputerdaninformatikap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3202,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniteknikkomputerdaninformatikal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3202,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniteknikkomputerdaninformatikap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3202,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniteknikkomputerdaninformatikal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3202,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniteknikkomputerdaninformatikap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3202,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
// ======================================================================================================
          //======================= pendidikan menengah atas=======================================
             //======================= teknibroadcasting=======================================
                    // bulanlalu==========================================================
          $blnlaluteknibroadcastingl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3203,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluteknibroadcastingp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3203,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniteknibroadcastingl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3203,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniteknibroadcastingp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3203,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniteknibroadcastingl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3203,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniteknibroadcastingp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3203,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniteknibroadcastingl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3203,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniteknibroadcastingp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3203,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
// ======================================================================================================
           //======================= pendidikan menengah atas=======================================
             //======================= kesehatan=======================================
                    // bulanlalu==========================================================
          $blnlalukesehatanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3301,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalukesehatanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3301,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninikesehatanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3301,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninikesehatanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3301,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninikesehatanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3301,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninikesehatanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3301,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninikesehatanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3301,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninikesehatanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3301,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
// ======================================================================================================
          //======================= pendidikan menengah atas=======================================
             //======================= perawatansosial=======================================
                    // bulanlalu==========================================================
          $blnlaluperawatansosiall = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3302,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluperawatansosialp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3302,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniperawatansosiall = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3302,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniperawatansosialp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3302,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniperawatansosiall = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3302,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniperawatansosialp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3302,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniperawatansosiall = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3302,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniperawatansosialp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3302,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

            //======================= pendidikan menengah atas=======================================
             //======================= senirupa=======================================
                    // bulanlalu==========================================================
          $blnlalusenirupal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3401,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalusenirupap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3401,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninisenirupal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3401,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninisenirupap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3401,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninisenirupal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3401,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninisenirupap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3401,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninisenirupal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3401,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninisenirupap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3401,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------
        
             //======================= pendidikan menengah atas=======================================
             //======================= desaindanproduksikria=======================================
                    // bulanlalu==========================================================
          $blnlaludesaindanproduksikrial = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3402,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaludesaindanproduksikriap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3402,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninidesaindanproduksikrial = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3402,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninidesaindanproduksikriap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3402,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninidesaindanproduksikrial = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3402,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninidesaindanproduksikriap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3402,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninidesaindanproduksikrial = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3402,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninidesaindanproduksikriap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3402,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


          //======================= pendidikan menengah atas=======================================
             //======================= senipertunjukan=======================================
                    // bulanlalu==========================================================
          $blnlalusenipertunjukanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3403,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalusenipertunjukanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3403,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninisenipertunjukanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3403,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninisenipertunjukanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3403,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninisenipertunjukanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3403,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninisenipertunjukanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3403,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninisenipertunjukanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3403,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninisenipertunjukanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3403,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //======================= pendidikan menengah atas=======================================
             //======================= pariwisata=======================================
                    // bulanlalu==========================================================
          $blnlalupariwisatal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3404,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalupariwisatap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3404,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninipariwisatal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3404,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninipariwisatap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3404,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninipariwisatal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3404,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninipariwisatap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3404,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninipariwisatal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3404,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninipariwisatap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3404,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //======================= pendidikan menengah atas=======================================
             //======================= tataboga=======================================
                    // bulanlalu==========================================================
          $blnlalutatabogal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3405,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalutatabogap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3405,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninitatabogal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3405,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninitatabogap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3405,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninitatabogal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3405,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninitatabogap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3405,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninitatabogal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3405,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninitatabogap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3405,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

              //======================= pendidikan menengah atas=======================================
             //======================= tatakecantikan=======================================
                    // bulanlalu==========================================================
          $blnlalutatakecantikanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3406,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalutatakecantikanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3406,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninitatakecantikanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3406,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninitatakecantikanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3406,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninitatakecantikanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3406,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninitatakecantikanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3406,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninitatakecantikanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3406,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninitatakecantikanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3406,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

                 //======================= pendidikan menengah atas=======================================
             //======================= tatabusana=======================================
                    // bulanlalu==========================================================
          $blnlalutatabusanal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3407,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalutatabusanap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3407,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninitatabusanal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3407,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninitatabusanap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3407,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninitatabusanal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3407,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninitatabusanap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3407,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninitatabusanal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3407,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninitatabusanap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3407,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

            //======================= pendidikan menengah atas=======================================
             //======================= agribisnisproduksitanaman=======================================
                    // bulanlalu==========================================================
          $blnlaluagribisnisproduksitanamanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3501,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluagribisnisproduksitanamanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3501,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniagribisnisproduksitanamanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3501,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniagribisnisproduksitanamanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3501,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniagribisnisproduksitanamanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3501,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniagribisnisproduksitanamanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3501,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniagribisnisproduksitanamanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3501,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniagribisnisproduksitanamanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3501,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

     //======================= pendidikan menengah atas=======================================
             //======================= agribisnisproduksiternak=======================================
                    // bulanlalu==========================================================
          $blnlaluagribisnisproduksiternakl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3502,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluagribisnisproduksiternakp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3502,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniagribisnisproduksiternakl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3502,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniagribisnisproduksiternakp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3502,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniagribisnisproduksiternakl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3502,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniagribisnisproduksiternakp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3502,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniagribisnisproduksiternakl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3502,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniagribisnisproduksiternakp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3502,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


     //======================= pendidikan menengah atas=======================================
             //======================= agribisnisproduksisumberdayaperairan=======================================
                    // bulanlalu==========================================================
          $blnlaluagribisnisproduksisumberdayaperairanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3503,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluagribisnisproduksisumberdayaperairanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3503,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniagribisnisproduksisumberdayaperairanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3503,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniagribisnisproduksisumberdayaperairanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3503,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniagribisnisproduksisumberdayaperairanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3503,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniagribisnisproduksisumberdayaperairanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3503,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniagribisnisproduksisumberdayaperairanl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3503,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniagribisnisproduksisumberdayaperairanp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3503,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

          //======================= pendidikan menengah atas=======================================
             //======================= mekanisasipertanian=======================================
                    // bulanlalu==========================================================
          $blnlalumekanisasipertanianl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3504,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalumekanisasipertanianp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3504,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninimekanisasipertanianl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3504,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninimekanisasipertanianp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3504,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninimekanisasipertanianl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3504,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninimekanisasipertanianp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3504,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninimekanisasipertanianl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3504,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninimekanisasipertanianp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3504,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

          //======================= pendidikan menengah atas=======================================
             //======================= agribisnishasilpertanian=======================================
                    // bulanlalu==========================================================
          $blnlaluagribisnishasilpertanianl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3505,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluagribisnishasilpertanianp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3505,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniagribisnishasilpertanianl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3505,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniagribisnishasilpertanianp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3505,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniagribisnishasilpertanianl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3505,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniagribisnishasilpertanianp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3505,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniagribisnishasilpertanianl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3505,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniagribisnishasilpertanianp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3505,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //======================= pendidikan menengah atas=======================================
             //======================= penyuluhanpertanian=======================================
                    // bulanlalu==========================================================
          $blnlalupenyuluhanpertanianl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3506,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalupenyuluhanpertanianp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3506,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninipenyuluhanpertanianl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3506,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninipenyuluhanpertanianp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3506,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninipenyuluhanpertanianl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3506,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninipenyuluhanpertanianp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3506,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninipenyuluhanpertanianl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3506,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninipenyuluhanpertanianp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3506,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //======================= pendidikan menengah atas=======================================
             //======================= kehutanan=======================================
                    // bulanlalu==========================================================
          $blnlalukehutananl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3507,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalukehutananp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3507,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninikehutananl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3507,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninikehutananp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3507,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninikehutananl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3507,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninikehutananp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3507,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninikehutananl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3507,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninikehutananp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3507,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

            //======================= pendidikan menengah atas=======================================
             //======================= administrasi=======================================
                    // bulanlalu==========================================================
          $blnlaluadministrasil = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3601,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluadministrasip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3601,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniadministrasil = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3601,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniadministrasip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3601,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniadministrasil = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3601,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniadministrasip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3601,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniadministrasil = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3601,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniadministrasip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3601,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
 // ----------------------------------------------------------
            //======================= pendidikan menengah atas=======================================
             //======================= keuangan=======================================
                    // bulanlalu==========================================================
          $blnlalukeuanganl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3602,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalukeuanganp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3602,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninikeuanganl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3602,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninikeuanganp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3602,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninikeuanganl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3602,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninikeuanganp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3602,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninikeuanganl = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3602,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninikeuanganp = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3602,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //======================= pendidikan menengah atas=======================================
             //======================= tataniaga=======================================
                    // bulanlalu==========================================================
          $blnlalutataniagal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3603,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalutataniagap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3603,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninitataniagal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3603,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninitataniagap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3603,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninitataniagal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3603,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninitataniagap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3603,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninitataniagal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3603,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninitataniagap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3603,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //======================= pendidikan menengah atas=======================================
             //======================= sltalainnya=======================================
                    // bulanlalu==========================================================
          $blnlalusltalainnyal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3701,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalusltalainnyap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3701,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninisltalainnyal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3701,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninisltalainnyap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3701,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninisltalainnyal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3701,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninisltalainnyap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3701,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninisltalainnyal = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3701,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninisltalainnyap = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3701,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

            //======================= pendidikan menengah atas=======================================
             //======================= sltatakterdefinisi=======================================
                    // bulanlalu==========================================================
          $blnlalusltatakterdefinisil = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3702,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalusltatakterdefinisip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3702,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninisltatakterdefinisil = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3702,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninisltatakterdefinisip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3702,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninisltatakterdefinisil = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3702,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninisltatakterdefinisip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3702,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninisltatakterdefinisil = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3702,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninisltatakterdefinisip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3702,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // --------------AKhir pendidikan menengah atas--------------------------------------------

            //======================= pendidikan menengah atas=======================================
             //======================= sltatakterdefinisi=======================================
                    // bulanlalu==========================================================
          $blnlalusltatakterdefinisil = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3702,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalusltatakterdefinisip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3702,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninisltatakterdefinisil = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3702,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninisltatakterdefinisip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3702,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninisltatakterdefinisil = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3702,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninisltatakterdefinisip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3702,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninisltatakterdefinisil = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3702,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninisltatakterdefinisip = Pendidikan::find()
          ->where(['id_sekolah' => 3000,
          'id_jurusan'=>3702,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //======================= diploma i / akta i/diploma ii/akta ii=======================================
             //======================= pendidikan=======================================
                    // bulanlalu==========================================================
          $blnlalupendidikanl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4101,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalupendidikanp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4101,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninipendidikanl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4101,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninipendidikanp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4101,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninipendidikanl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4101,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninipendidikanp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4101,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninipendidikanl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4101,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninipendidikanp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4101,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

         //======================= diploma i / akta i/diploma ii/akta ii=======================================
             //======================= pendidikanluarsekolah=======================================
                    // bulanlalu==========================================================
          $blnlalupendidikanluarsekolahl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4102,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalupendidikanluarsekolahp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4102,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninipendidikanluarsekolahl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4102,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninipendidikanluarsekolahp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4102,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninipendidikanluarsekolahl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4102,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninipendidikanluarsekolahp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4102,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninipendidikanluarsekolahl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4102,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninipendidikanluarsekolahp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4102,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

             //======================= diploma i / akta i/diploma ii/akta ii=======================================
             //======================= psikologi=======================================
                    // bulanlalu==========================================================
          $blnlalupsikologil = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4104,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalupsikologip = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4104,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninipsikologil = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4104,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninipsikologip = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4104,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninipsikologil = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4104,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninipsikologip = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4104,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninipsikologil = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4104,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninipsikologip = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4104,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


             //======================= diploma i / akta i/diploma ii/akta ii=======================================
             //======================= ilmupengetahuansosial=======================================
                    // bulanlalu==========================================================
          $blnlaluilmupengetahuansosiall = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4105,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluilmupengetahuansosialp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4105,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniilmupengetahuansosiall = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4105,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniilmupengetahuansosialp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4105,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniilmupengetahuansosiall = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4105,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniilmupengetahuansosialp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4105,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniilmupengetahuansosiall = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4105,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniilmupengetahuansosialp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4105,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------
            //======================= diploma i / akta i/diploma ii/akta ii=======================================
             //======================= pendidikanmoralpancasila=======================================
                    // bulanlalu==========================================================
          $blnlalupendidikanmoralpancasilal = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4106,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalupendidikanmoralpancasilap = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4106,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninipendidikanmoralpancasilal = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4106,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninipendidikanmoralpancasilap = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4106,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninipendidikanmoralpancasilal = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4106,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninipendidikanmoralpancasilap = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4106,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninipendidikanmoralpancasilal = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4106,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninipendidikanmoralpancasilap = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4106,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

                //======================= diploma i / akta i/diploma ii/akta ii=======================================
             //======================= administrasikeuangan=======================================
                    // bulanlalu==========================================================
          $blnlaluadministrasikeuanganl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4107,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluadministrasikeuanganp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4107,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniadministrasikeuanganl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4107,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniadministrasikeuanganp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4107,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniadministrasikeuanganl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4107,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniadministrasikeuanganp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4107,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniadministrasikeuanganl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4107,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniadministrasikeuanganp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4107,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

              //======================= diploma i / akta i/diploma ii/akta ii=======================================
             //======================= sejarah=======================================
                    // bulanlalu==========================================================
          $blnlalusejarahl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4109,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalusejarahp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4109,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninisejarahl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4109,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninisejarahp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4109,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninisejarahl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4109,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninisejarahp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4109,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninisejarahl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4109,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninisejarahp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4109,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------
           //======================= diploma i / akta i/diploma ii/akta ii=======================================
             //======================= hukum=======================================
                    // bulanlalu==========================================================
          $blnlaluhukuml = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4110,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluhukump = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4110,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninihukuml = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4110,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninihukump = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4110,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninihukuml = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4110,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninihukump = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4110,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninihukuml = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4110,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninihukump = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4110,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

             //======================= diploma i / akta i/diploma ii/akta ii=======================================
             //======================= kesekretariatan=======================================
                    // bulanlalu==========================================================
          $blnlalukesekretariatanl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4111,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalukesekretariatanp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4111,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninikesekretariatanl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4111,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninikesekretariatanp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4111,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninikesekretariatanl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4111,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninikesekretariatanp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4111,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninikesekretariatanl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4111,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninikesekretariatanp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4111,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

          //======================= diploma i / akta i/diploma ii/akta ii=======================================
             //======================= olahragakesehatan=======================================
                    // bulanlalu==========================================================
          $blnlaluolahragakesehatanl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4112,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluolahragakesehatanp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4112,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniolahragakesehatanl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4112,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniolahragakesehatanp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4112,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniolahragakesehatanl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4112,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniolahragakesehatanp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4112,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniolahragakesehatanl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4112,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniolahragakesehatanp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4112,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

            //======================= diploma i / akta i/diploma ii/akta ii=======================================
             //======================= kesenian=======================================
                    // bulanlalu==========================================================
          $blnlalukesenianl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4113,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalukesenianp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4113,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninikesenianl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4113,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninikesenianp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4113,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninikesenianl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4113,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninikesenianp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4113,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninikesenianl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4113,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninikesenianp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4113,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


            //======================= diploma i / akta i/diploma ii/akta ii=======================================
             //======================= bahasaindonesia=======================================
                    // bulanlalu==========================================================
          $blnlalubahasaindonesial = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4114,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalubahasaindonesiap = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4114,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninibahasaindonesial = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4114,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninibahasaindonesiap = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4114,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninibahasaindonesial = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4114,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninibahasaindonesiap = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4114,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninibahasaindonesial = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4114,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninibahasaindonesiap = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4114,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


            //======================= diploma i / akta i/diploma ii/akta ii=======================================
             //======================= bahasainggris=======================================
                    // bulanlalu==========================================================
          $blnlalubahasainggrisl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4115,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalubahasainggrisp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4115,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninibahasainggrisl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4115,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninibahasainggrisp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4115,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninibahasainggrisl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4115,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninibahasainggrisp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4115,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninibahasainggrisl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4115,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninibahasainggrisp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4115,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

                 //======================= diploma i / akta i/diploma ii/akta ii=======================================
             //======================= bahasaarab=======================================
                    // bulanlalu==========================================================
          $blnlalubahasaarabl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4116,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalubahasaarabp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4116,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninibahasaarabl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4116,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninibahasaarabp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4116,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninibahasaarabl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4116,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninibahasaarabp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4116,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninibahasaarabl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4116,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninibahasaarabp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4116,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

                //======================= diploma i / akta i/diploma ii/akta ii=======================================
             //======================= ekonomi=======================================
                    // bulanlalu==========================================================
          $blnlaluekonomil = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4118,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluekonomip = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4118,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniekonomil = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4118,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniekonomip = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4118,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniekonomil = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4118,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniekonomip = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4118,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniekonomil = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4118,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniekonomip = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4118,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


                //======================= diploma i / akta i/diploma ii/akta ii=======================================
             //======================= ilmupengetahuanalamfisika=======================================
                    // bulanlalu==========================================================
          $blnlaluilmupengetahuanalamfisikal = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4119,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluilmupengetahuanalamfisikap = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4119,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniilmupengetahuanalamfisikal = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4119,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniilmupengetahuanalamfisikap = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4119,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniilmupengetahuanalamfisikal = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4119,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniilmupengetahuanalamfisikap = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4119,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniilmupengetahuanalamfisikal = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4119,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniilmupengetahuanalamfisikap = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4119,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

               //======================= diploma i / akta i/diploma ii/akta ii=======================================
             //======================= matematika=======================================
                    // bulanlalu==========================================================
          $blnlalumatematikal = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4120,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalumatematikap = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4120,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninimatematikal = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4120,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninimatematikap = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4120,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninimatematikal = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4120,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninimatematikap = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4120,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninimatematikal = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4120,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninimatematikap = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4120,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

              //======================= diploma i / akta i/diploma ii/akta ii=======================================
             //======================= programkomputer=======================================
                    // bulanlalu==========================================================
          $blnlaluprogramkomputerl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4121,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluprogramkomputerp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4121,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniprogramkomputerl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4121,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniprogramkomputerp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4121,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniprogramkomputerl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4121,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniprogramkomputerp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4121,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniprogramkomputerl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4121,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniprogramkomputerp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4121,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------
             //======================= diploma i / akta i/diploma ii/akta ii=======================================
             //======================= biologi=======================================
                    // bulanlalu==========================================================
          $blnlalubiologil = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4122,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalubiologip = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4122,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninibiologil = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4122,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninibiologip = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4122,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninibiologil = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4122,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninibiologip = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4122,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninibiologil = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4122,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninibiologip = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4122,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------
            //======================= diploma i / akta i/diploma ii/akta ii=======================================
             //======================= ilmukimia=======================================
                    // bulanlalu==========================================================
          $blnlaluilmukimial = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4123,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluilmukimiap = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4123,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniilmukimial = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4123,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniilmukimiap = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4123,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniilmukimial = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4123,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniilmukimiap = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4123,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniilmukimial = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4123,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniilmukimiap = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4123,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

          //======================= diploma i / akta i/diploma ii/akta ii=======================================
             //======================= teknikmesin=======================================
                    // bulanlalu==========================================================
          $blnlaluteknikmesinl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4125,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluteknikmesinp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4125,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniteknikmesinl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4125,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniteknikmesinp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4125,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniteknikmesinl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4125,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniteknikmesinp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4125,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniteknikmesinl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4125,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniteknikmesinp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4125,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

          //======================= diploma i / akta i/diploma ii/akta ii=======================================
             //======================= tekniksipil=======================================
                    // bulanlalu==========================================================
          $blnlalutekniksipill = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4126,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalutekniksipilp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4126,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninitekniksipill = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4126,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninitekniksipilp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4126,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninitekniksipill = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4126,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninitekniksipilp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4126,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninitekniksipill = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4126,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninitekniksipilp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4126,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

                //======================= diploma i / akta i/diploma ii/akta ii=======================================
             //======================= tekniklistrik=======================================
                    // bulanlalu==========================================================
          $blnlalutekniklistrikl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4127,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalutekniklistrikp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4127,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninitekniklistrikl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4127,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninitekniklistrikp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4127,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninitekniklistrikl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4127,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninitekniklistrikp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4127,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninitekniklistrikl = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4127,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninitekniklistrikp = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4127,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

             //======================= diploma i / akta i/diploma ii/akta ii=======================================
             //======================= diplomaiaktailainnya=======================================
                    // bulanlalu==========================================================
          $blnlaludiplomaiaktailainnyal = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4129,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaludiplomaiaktailainnyap = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4129,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninidiplomaiaktailainnyal = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4129,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninidiplomaiaktailainnyap = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4129,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninidiplomaiaktailainnyal = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4129,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninidiplomaiaktailainnyap = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4129,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninidiplomaiaktailainnyal = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4129,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninidiplomaiaktailainnyap = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4129,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

              //======================= diploma i / akta i/diploma ii/akta ii=======================================
             //======================= diplomaitakterdefenisi=======================================
                    // bulanlalu==========================================================
          $blnlaludiplomaitakterdefenisil = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4199,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaludiplomaitakterdefenisip = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4199,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninidiplomaitakterdefenisil = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4199,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninidiplomaitakterdefenisip = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4199,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninidiplomaitakterdefenisil = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4199,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninidiplomaitakterdefenisip = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4199,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninidiplomaitakterdefenisil = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4199,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninidiplomaitakterdefenisip = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4199,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

              //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= pendidikan2=======================================
                    // bulanlalu==========================================================
          $blnlalupendidikan2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4201,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalupendidikan2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4201,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninipendidikan2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4201,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninipendidikan2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4201,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninipendidikan2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4201,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninipendidikan2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4201,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninipendidikan2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4201,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninipendidikan2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4201,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

            //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= pendidikansosial2=======================================
                    // bulanlalu==========================================================
          $blnlalupendidikansosial2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4202,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalupendidikansosial2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4202,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninipendidikansosial2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4202,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninipendidikansosial2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4202,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninipendidikansosial2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4202,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninipendidikansosial2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4202,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninipendidikansosial2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4202,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninipendidikansosial2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4202,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


           //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= pendidikanluarsekolah2=======================================
                    // bulanlalu==========================================================
          $blnlalupendidikanluarsekolah2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4203,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalupendidikanluarsekolah2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4203,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninipendidikanluarsekolah2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4203,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninipendidikanluarsekolah2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4203,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninipendidikanluarsekolah2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4203,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninipendidikanluarsekolah2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4203,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninipendidikanluarsekolah2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4203,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninipendidikanluarsekolah2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4203,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

             //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= psikologi2=======================================
                    // bulanlalu==========================================================
          $blnlalupsikologi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4204,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalupsikologi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4204,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninipsikologi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4204,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninipsikologi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4204,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninipsikologi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4204,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninipsikologi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4204,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninipsikologi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4204,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninipsikologi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4204,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

             //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= pendidikanmoralpancasila2=======================================
                    // bulanlalu==========================================================
          $blnlalupendidikanmoralpancasila2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4205,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalupendidikanmoralpancasila2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4205,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninipendidikanmoralpancasila2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4205,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninipendidikanmoralpancasila2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4205,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninipendidikanmoralpancasila2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4205,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninipendidikanmoralpancasila2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4205,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninipendidikanmoralpancasila2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4205,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninipendidikanmoralpancasila2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4205,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------



             //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= antropologi2=======================================
                    // bulanlalu==========================================================
          $blnlaluantropologi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4206,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluantropologi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4206,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniantropologi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4206,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniantropologi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4206,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniantropologi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4206,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniantropologi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4206,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniantropologi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4206,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniantropologi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4206,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------



             //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= hukum2=======================================
                    // bulanlalu==========================================================
          $blnlaluhukum2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4208,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluhukum2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4208,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninihukum2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4208,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninihukum2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4208,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninihukum2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4208,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninihukum2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4208,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninihukum2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4208,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninihukum2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4208,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

            //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= pendidikankesejahteraankeluarga2=======================================
                    // bulanlalu==========================================================
          $blnlalupendidikankesejahteraankeluarga2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4209,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalupendidikankesejahteraankeluarga2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4209,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninipendidikankesejahteraankeluarga2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4209,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninipendidikankesejahteraankeluarga2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4209,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninipendidikankesejahteraankeluarga2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4209,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninipendidikankesejahteraankeluarga2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4209,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninipendidikankesejahteraankeluarga2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4209,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninipendidikankesejahteraankeluarga2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4209,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= ekonomi2=======================================
                    // bulanlalu==========================================================
          $blnlaluekonomi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4210,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluekonomi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4210,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniekonomi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4210,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniekonomi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4210,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniekonomi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4210,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniekonomi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4210,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniekonomi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4210,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniekonomi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4210,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


           //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= kesenian2=======================================
                    // bulanlalu==========================================================
          $blnlalukesenian2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4211,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalukesenian2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4211,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninikesenian2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4211,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninikesenian2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4211,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninikesenian2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4211,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninikesenian2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4211,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninikesenian2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4211,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninikesenian2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4211,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

             //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= kesekretariatan2=======================================
                    // bulanlalu==========================================================
          $blnlalukesekretariatan2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4212,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalukesekretariatan2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4212,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninikesekretariatan2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4212,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninikesekretariatan2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4212,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninikesekretariatan2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4212,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninikesekretariatan2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4212,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninikesekretariatan2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4212,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninikesekretariatan2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4212,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

             //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= administrasi2=======================================
                    // bulanlalu==========================================================
          $blnlaluadministrasi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4213,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluadministrasi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4213,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniadministrasi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4213,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniadministrasi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4213,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniadministrasi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4213,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniadministrasi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4213,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniadministrasi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4213,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniadministrasi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4213,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


           //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= marketing2=======================================
                    // bulanlalu==========================================================
          $blnlalumarketing2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4214,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalumarketing2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4214,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninimarketing2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4214,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninimarketing2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4214,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninimarketing2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4214,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninimarketing2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4214,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninimarketing2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4214,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninimarketing2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4214,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= akutansi2=======================================
                    // bulanlalu==========================================================
          $blnlaluakutansi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4215,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluakutansi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4215,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniakutansi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4215,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniakutansi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4215,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniakutansi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4215,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniakutansi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4215,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniakutansi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4215,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniakutansi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4215,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------



           //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= olahraga2=======================================
                    // bulanlalu==========================================================
          $blnlaluolahraga2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4216,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluolahraga2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4216,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniolahraga2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4216,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniolahraga2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4216,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniolahraga2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4216,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniolahraga2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4216,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniolahraga2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4216,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniolahraga2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4216,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

               //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= bahasaindonesia2=======================================
                    // bulanlalu==========================================================
          $blnlalubahasaindonesia2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4217,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalubahasaindonesia2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4217,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninibahasaindonesia2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4217,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninibahasaindonesia2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4217,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninibahasaindonesia2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4217,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninibahasaindonesia2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4217,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninibahasaindonesia2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4217,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninibahasaindonesia2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4217,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


                 //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= bahasainggris2=======================================
                    // bulanlalu==========================================================
          $blnlalubahasainggris2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4218,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalubahasainggris2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4218,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninibahasainggris2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4218,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninibahasainggris2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4218,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninibahasainggris2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4218,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninibahasainggris2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4218,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninibahasainggris2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4218,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninibahasainggris2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4218,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


                 //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= bahasaarab2=======================================
                    // bulanlalu==========================================================
          $blnlalubahasaarab2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4219,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalubahasaarab2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4219,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninibahasaarab2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4219,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninibahasaarab2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4219,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninibahasaarab2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4219,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninibahasaarab2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4219,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninibahasaarab2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4219,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninibahasaarab2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4219,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

                    //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= ilmupengetahuanalam2=======================================
                    // bulanlalu==========================================================
          $blnlaluilmupengetahuanalam2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4220,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluilmupengetahuanalam2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4220,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniilmupengetahuanalam2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4220,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniilmupengetahuanalam2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4220,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniilmupengetahuanalam2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4220,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniilmupengetahuanalam2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4220,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniilmupengetahuanalam2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4220,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniilmupengetahuanalam2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4220,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

                //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= geografi2=======================================
                    // bulanlalu==========================================================
          $blnlalugeografi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4221,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalugeografi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4221,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninigeografi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4221,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninigeografi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4221,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninigeografi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4221,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninigeografi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4221,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninigeografi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4221,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninigeografi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4221,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= matematika2=======================================
                    // bulanlalu==========================================================
          $blnlalumatematika2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4222,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalumatematika2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4222,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninimatematika2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4222,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninimatematika2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4222,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninimatematika2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4222,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninimatematika2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4222,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninimatematika2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4222,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninimatematika2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4222,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


           //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= biologi2=======================================
                    // bulanlalu==========================================================
          $blnlalubiologi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4223,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalubiologi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4223,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninibiologi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4223,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninibiologi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4223,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninibiologi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4223,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninibiologi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4223,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninibiologi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4223,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninibiologi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4223,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


           //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= keterampilan2=======================================
                    // bulanlalu==========================================================
          $blnlaluketerampilan2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4224,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluketerampilan2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4224,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniketerampilan2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4224,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniketerampilan2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4224,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniketerampilan2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4224,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniketerampilan2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4224,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniketerampilan2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4224,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniketerampilan2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4224,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

          //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= tekniksipil2=======================================
                    // bulanlalu==========================================================
          $blnlalutekniksipil2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4226,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalutekniksipil2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4226,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninitekniksipil2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4226,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninitekniksipil2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4226,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninitekniksipil2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4226,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninitekniksipil2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4226,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninitekniksipil2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4226,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninitekniksipil2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4226,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


          //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= teknikmesin2=======================================
                    // bulanlalu==========================================================
          $blnlaluteknikmesin2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4227,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluteknikmesin2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4227,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniteknikmesin2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4227,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniteknikmesin2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4227,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniteknikmesin2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4227,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniteknikmesin2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4227,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniteknikmesin2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4227,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniteknikmesin2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4227,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


          //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= tekniklistrik2=======================================
                    // bulanlalu==========================================================
          $blnlalutekniklistrik2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4228,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalutekniklistrik2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4228,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninitekniklistrik2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4228,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninitekniklistrik2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4228,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninitekniklistrik2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4228,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninitekniklistrik2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4228,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninitekniklistrik2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4228,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninitekniklistrik2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4228,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= kimia2=======================================
                    // bulanlalu==========================================================
          $blnlalukimia2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4229,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalukimia2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4229,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninikimia2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4229,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninikimia2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4229,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninikimia2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4229,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninikimia2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4229,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninikimia2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4229,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninikimia2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4229,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


           //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= diplomaiiaktaiilainnya2=======================================
                    // bulanlalu==========================================================
          $blnlaludiplomaiiaktaiilainnya2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4230,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaludiplomaiiaktaiilainnya2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4230,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninidiplomaiiaktaiilainnya2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4230,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninidiplomaiiaktaiilainnya2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4230,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninidiplomaiiaktaiilainnya2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4230,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninidiplomaiiaktaiilainnya2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4230,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninidiplomaiiaktaiilainnya2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4230,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninidiplomaiiaktaiilainnya2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4230,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

             //======================= diploma i / akta i/diploma ii/akta ii=======================================
              //=======================diploma ii/akta ii=======================================
             //======================= diplomaiitakterdefinisi2=======================================
                    // bulanlalu==========================================================
          $blnlaludiplomaiitakterdefinisi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4299,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaludiplomaiitakterdefinisi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4299,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninidiplomaiitakterdefinisi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4299,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninidiplomaiitakterdefinisi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4299,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninidiplomaiitakterdefinisi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4299,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninidiplomaiitakterdefinisi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4299,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninidiplomaiitakterdefinisi2l = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4299,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninidiplomaiitakterdefinisi2p = Pendidikan::find()
          ->where(['id_sekolah' => 4000,
          'id_jurusan'=>4299,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PASTI ALAM==============================
             //======================= fisika3=======================================
                    // bulanlalu==========================================================
          $blnlalufisika3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5101,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalufisika3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5101,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninifisika3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5101,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninifisika3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5101,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninifisika3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5101,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninifisika3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5101,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninifisika3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5101,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninifisika3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5101,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

             //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PASTI ALAM==============================
             //======================= astronomi3=======================================
                    // bulanlalu==========================================================
          $blnlaluastronomi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5102,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluastronomi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5102,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniastronomi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5102,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniastronomi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5102,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniastronomi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5102,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniastronomi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5102,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniastronomi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5102,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniastronomi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5102,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

          //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PASTI ALAM==============================
             //======================= biologi3=======================================
                    // bulanlalu==========================================================
          $blnlalubiologi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5103,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalubiologi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5103,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninibiologi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5103,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninibiologi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5103,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninibiologi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5103,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninibiologi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5103,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninibiologi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5103,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninibiologi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5103,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

          //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PASTI ALAM==============================
             //======================= geologidanpertambangan3=======================================
                    // bulanlalu==========================================================
          $blnlalugeologidanpertambangan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5104,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalugeologidanpertambangan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5104,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninigeologidanpertambangan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5104,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninigeologidanpertambangan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5104,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninigeologidanpertambangan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5104,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninigeologidanpertambangan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5104,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninigeologidanpertambangan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5104,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninigeologidanpertambangan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5104,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PASTI ALAM==============================
             //======================= georafi3=======================================
                    // bulanlalu==========================================================
          $blnlalugeorafi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5106,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalugeorafi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5106,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninigeorafi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5106,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninigeorafi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5106,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninigeorafi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5106,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninigeorafi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5106,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninigeorafi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5106,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninigeorafi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5106,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PASTI ALAM==============================
             //======================= matematika3=======================================
                    // bulanlalu==========================================================
          $blnlalumatematika3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5107,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalumatematika3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5107,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninimatematika3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5107,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninimatematika3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5107,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninimatematika3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5107,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninimatematika3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5107,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninimatematika3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5107,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninimatematika3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5107,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

            //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PASTI ALAM==============================
             //======================= ilmustatistik3=======================================
                    // bulanlalu==========================================================
          $blnlaluilmustatistik3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5108,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluilmustatistik3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5108,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniilmustatistik3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5108,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniilmustatistik3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5108,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniilmustatistik3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5108,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniilmustatistik3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5108,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniilmustatistik3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5108,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniilmustatistik3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5108,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

          //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PASTI ALAM==============================
             //======================= ilmukomputer3=======================================
                    // bulanlalu==========================================================
          $blnlaluilmukomputer3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5109,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluilmukomputer3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5109,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniilmukomputer3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5109,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniilmukomputer3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5109,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniilmukomputer3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5109,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniilmukomputer3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5109,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniilmukomputer3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5109,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniilmukomputer3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5109,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

              //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PASTI ALAM==============================
             //======================= kimia3=======================================
                    // bulanlalu==========================================================
          $blnlalukimia3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5110,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalukimia3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5110,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninikimia3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5110,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninikimia3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5110,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninikimia3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5110,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninikimia3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5110,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninikimia3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5110,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninikimia3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5110,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

                     //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PASTI ALAM==============================
             //======================= ilmupastialamlainnya3=======================================
                    // bulanlalu==========================================================
          $blnlaluilmupastialamlainnya3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5111,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluilmupastialamlainnya3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5111,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniilmupastialamlainnya3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5111,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniilmupastialamlainnya3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5111,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniilmupastialamlainnya3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5111,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniilmupastialamlainnya3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5111,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniilmupastialamlainnya3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5111,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniilmupastialamlainnya3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5111,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

              //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PASTI ALAM==============================
             //======================= ilmupastitakterdefinisi3=======================================
                    // bulanlalu==========================================================
          $blnlaluilmupastitakterdefinisi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5199,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluilmupastitakterdefinisi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5199,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniilmupastitakterdefinisi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5199,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniilmupastitakterdefinisi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5199,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniilmupastitakterdefinisi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5199,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniilmupastitakterdefinisi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5199,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniilmupastitakterdefinisi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5199,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniilmupastitakterdefinisi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5199,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - TEKNOLOGI==============================
             //======================= teknikgeodesigeologi=======================================
                    // bulanlalu==========================================================
          $blnlaluteknikgeodesigeologil = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5201,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluteknikgeodesigeologip = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5201,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniteknikgeodesigeologil = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5201,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniteknikgeodesigeologip = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5201,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniteknikgeodesigeologil = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5201,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniteknikgeodesigeologip = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5201,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniteknikgeodesigeologil = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5201,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniteknikgeodesigeologip = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5201,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

            //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - TEKNOLOGI==============================
             //======================= teknikkimia=======================================
                    // bulanlalu==========================================================
          $blnlaluteknikkimial = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5202,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluteknikkimiap = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5202,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniteknikkimial = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5202,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniteknikkimiap = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5202,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniteknikkimial = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5202,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniteknikkimiap = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5202,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniteknikkimial = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5202,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniteknikkimiap = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5202,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


   //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - TEKNOLOGI==============================
             //======================= tekniksipil=======================================
                    // bulanlalu==========================================================
          $blnlalutekniksipill = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5203,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalutekniksipilp = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5203,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninitekniksipill = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5203,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninitekniksipilp = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5203,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninitekniksipill = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5203,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninitekniksipilp = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5203,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninitekniksipill = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5203,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninitekniksipilp = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5203,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - TEKNOLOGI==============================
             //======================= arsitektur=======================================
                    // bulanlalu==========================================================
          $blnlaluarsitekturl = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5204,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluarsitekturp = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5204,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniarsitekturl = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5204,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniarsitekturp = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5204,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniarsitekturl = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5204,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniarsitekturp = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5204,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniarsitekturl = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5204,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniarsitekturp = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5204,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - TEKNOLOGI==============================
             //======================= tekniklistrik=======================================
                    // bulanlalu==========================================================
          $blnlalutekniklistrikl = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5205,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalutekniklistrikp = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5205,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninitekniklistrikl = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5205,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninitekniklistrikp = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5205,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninitekniklistrikl = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5205,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninitekniklistrikp = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5205,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninitekniklistrikl = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5205,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninitekniklistrikp = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5205,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - TEKNOLOGI==============================
             //======================= teknikmesin=======================================
                    // bulanlalu==========================================================
          $blnlaluteknikmesinl = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5206,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluteknikmesinp = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5206,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniteknikmesinl = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5206,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniteknikmesinp = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5206,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniteknikmesinl = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5206,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniteknikmesinp = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5206,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniteknikmesinl = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5206,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniteknikmesinp = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5206,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - TEKNOLOGI==============================
             //======================= teknikindustri=======================================
                    // bulanlalu==========================================================
          $blnlaluteknikindustril = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5207,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluteknikindustrip = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5207,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniteknikindustril = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5207,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniteknikindustrip = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5207,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniteknikindustril = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5207,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniteknikindustrip = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5207,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniteknikindustril = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5207,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniteknikindustrip = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5207,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - TEKNOLOGI==============================
             //======================= tekniklogam=======================================
                    // bulanlalu==========================================================
          $blnlalutekniklogaml = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5208,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalutekniklogamp = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5208,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninitekniklogaml = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5208,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninitekniklogamp = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5208,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninitekniklogaml = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5208,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninitekniklogamp = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5208,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninitekniklogaml = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5208,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninitekniklogamp = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5208,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - TEKNOLOGI==============================
             //======================= teknikpertambangandanminyak3=======================================
                    // bulanlalu==========================================================
          $blnlaluteknikpertambangandanminyak3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5209,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluteknikpertambangandanminyak3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5209,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniteknikpertambangandanminyak3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5209,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniteknikpertambangandanminyak3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5209,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniteknikpertambangandanminyak3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5209,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniteknikpertambangandanminyak3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5209,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniteknikpertambangandanminyak3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5209,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniteknikpertambangandanminyak3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5209,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


            //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - TEKNOLOGI==============================
             //======================= fisikateknik3=======================================
                    // bulanlalu==========================================================
          $blnlalufisikateknik3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5210,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalufisikateknik3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5210,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninifisikateknik3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5210,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninifisikateknik3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5210,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninifisikateknik3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5210,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninifisikateknik3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5210,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninifisikateknik3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5210,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninifisikateknik3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5210,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


          //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - TEKNOLOGI==============================
             //======================= tekniknuklir3=======================================
                    // bulanlalu==========================================================
          $blnlalutekniknuklir3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5211,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalutekniknuklir3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5211,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninitekniknuklir3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5211,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninitekniknuklir3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5211,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninitekniknuklir3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5211,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninitekniknuklir3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5211,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninitekniknuklir3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5211,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninitekniknuklir3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5211,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------



          //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - TEKNOLOGI==============================
             //======================= teknologitekstil3=======================================
                    // bulanlalu==========================================================
          $blnlaluteknologitekstil3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5214,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluteknologitekstil3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5214,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniteknologitekstil3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5214,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniteknologitekstil3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5214,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniteknologitekstil3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5214,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniteknologitekstil3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5214,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniteknologitekstil3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5214,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniteknologitekstil3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5214,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


 //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - TEKNOLOGI==============================
             //======================= teknologigrafika3=======================================
                    // bulanlalu==========================================================
          $blnlaluteknologigrafika3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5215,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluteknologigrafika3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5215,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniteknologigrafika3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5215,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniteknologigrafika3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5215,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniteknologigrafika3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5215,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniteknologigrafika3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5215,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniteknologigrafika3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5215,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniteknologigrafika3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5215,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------



 //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - TEKNOLOGI==============================
             //======================= teknologigasdanminyakbumi3=======================================
                    // bulanlalu==========================================================
          $blnlaluteknologigasdanminyakbumi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5216,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluteknologigasdanminyakbumi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5216,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniteknologigasdanminyakbumi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5216,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniteknologigasdanminyakbumi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5216,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniteknologigasdanminyakbumi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5216,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniteknologigasdanminyakbumi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5216,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniteknologigasdanminyakbumi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5216,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniteknologigasdanminyakbumi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5216,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - TEKNOLOGI==============================
             //======================= teknologilainnya3=======================================
                    // bulanlalu==========================================================
          $blnlaluteknologilainnya3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5217,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluteknologilainnya3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5217,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniteknologilainnya3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5217,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniteknologilainnya3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5217,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniteknologilainnya3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5217,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniteknologilainnya3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5217,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniteknologilainnya3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5217,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniteknologilainnya3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5217,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

          //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - TEKNOLOGI==============================
             //======================= teknologitakterdefinisi3=======================================
                    // bulanlalu==========================================================
          $blnlaluteknologitakterdefinisi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5299,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluteknologitakterdefinisi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5299,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniteknologitakterdefinisi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5299,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniteknologitakterdefinisi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5299,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniteknologitakterdefinisi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5299,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniteknologitakterdefinisi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5299,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniteknologitakterdefinisi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5299,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniteknologitakterdefinisi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5299,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - pertanian==============================
             //======================= pertanianumum3=======================================
                    // bulanlalu==========================================================
          $blnlalupertanianumum3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5301,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalupertanianumum3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5301,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninipertanianumum3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5301,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninipertanianumum3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5301,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninipertanianumum3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5301,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninipertanianumum3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5301,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninipertanianumum3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5301,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninipertanianumum3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5301,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - pertanian==============================
             //======================= hortikultura3=======================================
                    // bulanlalu==========================================================
          $blnlaluhortikultura3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5302,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluhortikultura3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5302,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninihortikultura3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5302,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninihortikultura3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5302,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninihortikultura3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5302,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninihortikultura3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5302,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninihortikultura3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5302,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninihortikultura3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5302,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - pertanian==============================
             //======================= hasilpertanian3=======================================
                    // bulanlalu==========================================================
          $blnlaluhasilpertanian3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5303,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluhasilpertanian3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5303,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninihasilpertanian3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5303,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninihasilpertanian3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5303,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninihasilpertanian3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5303,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninihasilpertanian3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5303,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninihasilpertanian3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5303,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninihasilpertanian3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5303,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------



 //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - pertanian==============================
             //======================= ekonomipertanian3=======================================
                    // bulanlalu==========================================================
          $blnlaluekonomipertanian3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5304,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluekonomipertanian3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5304,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniekonomipertanian3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5304,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniekonomipertanian3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5304,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniekonomipertanian3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5304,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniekonomipertanian3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5304,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniekonomipertanian3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5304,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniekonomipertanian3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5304,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------



 //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - pertanian==============================
             //======================= teknologidanilmumakanan3=======================================
                    // bulanlalu==========================================================
          $blnlaluteknologidanilmumakanan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5305,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluteknologidanilmumakanan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5305,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniteknologidanilmumakanan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5305,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniteknologidanilmumakanan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5305,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniteknologidanilmumakanan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5305,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniteknologidanilmumakanan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5305,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniteknologidanilmumakanan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5305,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniteknologidanilmumakanan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5305,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - pertanian==============================
             //======================= kedokteranhewan3=======================================
                    // bulanlalu==========================================================
          $blnlalukedokteranhewan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5307,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalukedokteranhewan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5307,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninikedokteranhewan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5307,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninikedokteranhewan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5307,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninikedokteranhewan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5307,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninikedokteranhewan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5307,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninikedokteranhewan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5307,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninikedokteranhewan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5307,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

          //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - pertanian==============================
             //======================= peternakan3=======================================
                    // bulanlalu==========================================================
          $blnlalupeternakan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5308,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalupeternakan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5308,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninipeternakan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5308,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninipeternakan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5308,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninipeternakan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5308,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninipeternakan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5308,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninipeternakan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5308,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninipeternakan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5308,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

                 //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - pertanian==============================
             //======================= perikanan3=======================================
                    // bulanlalu==========================================================
          $blnlaluperikanan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5309,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluperikanan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5309,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniperikanan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5309,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniperikanan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5309,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniperikanan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5309,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniperikanan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5309,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniperikanan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5309,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniperikanan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5309,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


                 //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - pertanian==============================
             //======================= kehutanan3=======================================
                    // bulanlalu==========================================================
          $blnlalukehutanan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5310,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalukehutanan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5310,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninikehutanan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5310,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninikehutanan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5310,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninikehutanan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5310,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninikehutanan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5310,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninikehutanan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5310,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninikehutanan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5310,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


                 //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - pertanian==============================
             //======================= pertanianlainnya3=======================================
                    // bulanlalu==========================================================
          $blnlalupertanianlainnya3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5311,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalupertanianlainnya3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5311,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninipertanianlainnya3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5311,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninipertanianlainnya3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5311,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninipertanianlainnya3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5311,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninipertanianlainnya3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5311,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninipertanianlainnya3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5311,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninipertanianlainnya3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5311,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

                    //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - pertanian==============================
             //======================= pertaniantakterdefinisi3=======================================
                    // bulanlalu==========================================================
          $blnlalupertaniantakterdefinisi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5399,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalupertaniantakterdefinisi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5399,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninipertaniantakterdefinisi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5399,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninipertaniantakterdefinisi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5399,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninipertaniantakterdefinisi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5399,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninipertaniantakterdefinisi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5399,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninipertaniantakterdefinisi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5399,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninipertaniantakterdefinisi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5399,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------




                    //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - kesehatan==============================
             //======================= kedokteranumum3=======================================
                    // bulanlalu==========================================================
          $blnlalukedokteranumum3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5401,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalukedokteranumum3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5401,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninikedokteranumum3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5401,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninikedokteranumum3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5401,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninikedokteranumum3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5401,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninikedokteranumum3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5401,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninikedokteranumum3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5401,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninikedokteranumum3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5401,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count(); 
         // ----------------------------------------------------------

           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - kesehatan==============================
             //======================= kedokterangigi3=======================================
                    // bulanlalu==========================================================
          $blnlalukedokterangigi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5402,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalukedokterangigi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5402,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninikedokterangigi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5402,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninikedokterangigi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5402,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninikedokterangigi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5402,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninikedokterangigi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5402,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninikedokterangigi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5402,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninikedokterangigi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5402,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - kesehatan==============================
             //======================= farmasi3=======================================
                    // bulanlalu==========================================================
          $blnlalufarmasi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5403,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalufarmasi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5403,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninifarmasi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5403,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninifarmasi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5403,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninifarmasi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5403,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninifarmasi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5403,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninifarmasi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5403,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninifarmasi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5403,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------
               //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - kesehatan==============================
             //======================= penilikkesehatanhyginegizi3=======================================
                    // bulanlalu==========================================================
          $blnlalupenilikkesehatanhyginegizi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5404,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalupenilikkesehatanhyginegizi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5404,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninipenilikkesehatanhyginegizi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5404,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninipenilikkesehatanhyginegizi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5404,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninipenilikkesehatanhyginegizi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5404,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninipenilikkesehatanhyginegizi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5404,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninipenilikkesehatanhyginegizi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5404,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninipenilikkesehatanhyginegizi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5404,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

            //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - kesehatan==============================
             //======================= anastesi3=======================================
                    // bulanlalu==========================================================
          $blnlaluanastesi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5405,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluanastesi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5405,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninianastesi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5405,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninianastesi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5405,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninianastesi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5405,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninianastesi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5405,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninianastesi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5405,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninianastesi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5405,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

          //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - kesehatan==============================
             //======================= fisioterapi3=======================================
                    // bulanlalu==========================================================
          $blnlalufisioterapi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5406,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalufisioterapi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5406,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninifisioterapi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5406,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninifisioterapi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5406,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninifisioterapi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5406,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninifisioterapi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5406,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninifisioterapi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5406,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninifisioterapi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5406,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


          //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - kesehatan==============================
             //======================= perawat3=======================================
                    // bulanlalu==========================================================
          $blnlaluperawat3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5407,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluperawat3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5407,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniperawat3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5407,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniperawat3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5407,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniperawat3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5407,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniperawat3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5407,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniperawat3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5407,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniperawat3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5407,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


          //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - kesehatan==============================
             //======================= penatarontgen3=======================================
                    // bulanlalu==========================================================
          $blnlalupenatarontgen3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5408,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalupenatarontgen3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5408,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninipenatarontgen3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5408,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninipenatarontgen3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5408,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninipenatarontgen3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5408,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninipenatarontgen3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5408,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninipenatarontgen3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5408,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninipenatarontgen3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5408,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

            //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - kesehatan==============================
             //======================= kesehatanlainnya3=======================================
                    // bulanlalu==========================================================
          $blnlalukesehatanlainnya3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5409,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalukesehatanlainnya3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5409,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninikesehatanlainnya3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5409,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninikesehatanlainnya3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5409,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninikesehatanlainnya3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5409,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninikesehatanlainnya3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5409,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninikesehatanlainnya3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5409,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninikesehatanlainnya3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5409,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


            //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - kesehatan==============================
             //======================= kesehatantakterdefinisi3=======================================
                    // bulanlalu==========================================================
          $blnlalukesehatantakterdefinisi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5499,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalukesehatantakterdefinisi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5499,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninikesehatantakterdefinisi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5499,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninikesehatantakterdefinisi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5499,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninikesehatantakterdefinisi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5499,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninikesehatantakterdefinisi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5499,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninikesehatantakterdefinisi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5499,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninikesehatantakterdefinisi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5499,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

             //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - kesehatan==============================
             //======================= kesehatantakterdefinisi3=======================================
                    // bulanlalu==========================================================
          $blnlalukesehatantakterdefinisi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5499,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalukesehatantakterdefinisi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5499,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninikesehatantakterdefinisi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5499,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninikesehatantakterdefinisi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5499,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninikesehatantakterdefinisi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5499,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninikesehatantakterdefinisi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5499,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninikesehatantakterdefinisi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5499,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninikesehatantakterdefinisi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5499,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


          //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= ekonomi3=======================================
                    // bulanlalu==========================================================
          $blnlaluekonomi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5501,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluekonomi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5501,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniekonomi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5501,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniekonomi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5501,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniekonomi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5501,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniekonomi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5501,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniekonomi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5501,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniekonomi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5501,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

          //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= akuntansi3=======================================
                    // bulanlalu==========================================================
          $blnlaluakuntansi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5502,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluakuntansi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5502,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniakuntansi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5502,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniakuntansi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5502,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniakuntansi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5502,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniakuntansi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5502,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniakuntansi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5502,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniakuntansi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5502,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

            //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= keuangandanpajak3=======================================
                    // bulanlalu==========================================================
          $blnlalukeuangandanpajak3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5503,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalukeuangandanpajak3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5503,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninikeuangandanpajak3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5503,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninikeuangandanpajak3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5503,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninikeuangandanpajak3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5503,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninikeuangandanpajak3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5503,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninikeuangandanpajak3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5503,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninikeuangandanpajak3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5503,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

                //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= hukum3=======================================
                    // bulanlalu==========================================================
          $blnlaluhukum3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5504,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluhukum3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5504,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninihukum3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5504,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninihukum3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5504,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninihukum3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5504,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninihukum3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5504,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninihukum3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5504,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninihukum3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5504,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


                //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= ilmupolitik3=======================================
                    // bulanlalu==========================================================
          $blnlaluilmupolitik3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5505,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluilmupolitik3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5505,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniilmupolitik3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5505,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniilmupolitik3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5505,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniilmupolitik3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5505,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniilmupolitik3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5505,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniilmupolitik3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5505,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniilmupolitik3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5505,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

                //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= sosiologi3=======================================
                    // bulanlalu==========================================================
          $blnlalusosiologi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5506,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalusosiologi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5506,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninisosiologi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5506,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninisosiologi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5506,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninisosiologi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5506,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninisosiologi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5506,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninisosiologi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5506,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninisosiologi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5506,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

              //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= antropologi3=======================================

                    // bulanlalu==========================================================
          $blnlaluantropologi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5507,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluantropologi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5507,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniantropologi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5507,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniantropologi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5507,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniantropologi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5507,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniantropologi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5507,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniantropologi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5507,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniantropologi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5507,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


             //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= geografi3=======================================
                    // bulanlalu==========================================================
          $blnlalugeografi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5508,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalugeografi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5508,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninigeografi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5508,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninigeografi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5508,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninigeografi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5508,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninigeografi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5508,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninigeografi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5508,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninigeografi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5508,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= administrasi3=======================================
                    // bulanlalu==========================================================
          $blnlaluadministrasi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5509,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluadministrasi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5509,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniadministrasi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5509,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniadministrasi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5509,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniadministrasi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5509,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniadministrasi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5509,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniadministrasi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5509,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniadministrasi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5509,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

          //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= sekretaris3=======================================
                    // bulanlalu==========================================================
          $blnlalusekretaris3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5510,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalusekretaris3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5510,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninisekretaris3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5510,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninisekretaris3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5510,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninisekretaris3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5510,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninisekretaris3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5510,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninisekretaris3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5510,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninisekretaris3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5510,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

          //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= manajement3=======================================
                    // bulanlalu==========================================================
          $blnlalumanajement3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5511,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalumanajement3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5511,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninimanajement3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5511,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninimanajement3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5511,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninimanajement3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5511,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninimanajement3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5511,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninimanajement3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5511,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninimanajement3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5511,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

             //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= psikologi3=======================================
                    // bulanlalu==========================================================
          $blnlalupsikologi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5512,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalupsikologi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5512,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninipsikologi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5512,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninipsikologi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5512,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninipsikologi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5512,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninipsikologi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5512,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninipsikologi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5512,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninipsikologi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5512,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

            //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= sejarah3=======================================
                    // bulanlalu==========================================================
          $blnlalusejarah3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5513,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalusejarah3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5513,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninisejarah3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5513,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninisejarah3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5513,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninisejarah3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5513,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninisejarah3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5513,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninisejarah3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5513,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninisejarah3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5513,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= bahasaindonesia3=======================================
                    // bulanlalu==========================================================
          $blnlalubahasaindonesia3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5516,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalubahasaindonesia3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5516,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninibahasaindonesia3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5516,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninibahasaindonesia3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5516,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninibahasaindonesia3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5516,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninibahasaindonesia3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5516,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninibahasaindonesia3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5516,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninibahasaindonesia3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5516,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

            //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= bahasadaerah3=======================================
                    // bulanlalu==========================================================
          $blnlalubahasadaerah3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5517,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalubahasadaerah3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5517,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninibahasadaerah3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5517,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninibahasadaerah3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5517,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninibahasadaerah3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5517,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninibahasadaerah3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5517,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninibahasadaerah3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5517,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninibahasadaerah3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5517,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= bahasainggris3=======================================
                    // bulanlalu==========================================================
          $blnlalubahasainggris3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5518,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalubahasainggris3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5518,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninibahasainggris3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5518,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninibahasainggris3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5518,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninibahasainggris3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5518,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninibahasainggris3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5518,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninibahasainggris3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5518,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninibahasainggris3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5518,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= bahasaarab3=======================================
                    // bulanlalu==========================================================
          $blnlalubahasaarab3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5522,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalubahasaarab3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5522,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninibahasaarab3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5522,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninibahasaarab3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5522,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninibahasaarab3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5522,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninibahasaarab3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5522,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninibahasaarab3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5522,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninibahasaarab3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5522,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= bahasacina3=======================================
                    // bulanlalu==========================================================
          $blnlalubahasacina3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5524,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalubahasacina3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5524,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninibahasacina3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5524,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninibahasacina3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5524,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninibahasacina3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5524,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninibahasacina3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5524,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninibahasacina3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5524,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninibahasacina3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5524,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

              //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= bahasajepang3=======================================
                    // bulanlalu==========================================================
          $blnlalubahasajepang3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5525,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalubahasajepang3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5525,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninibahasajepang3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5525,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninibahasajepang3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5525,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninibahasajepang3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5525,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninibahasajepang3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5525,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninibahasajepang3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5525,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninibahasajepang3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5525,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

          //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= keagamaandanilmuketuhananiain3=======================================
                    // bulanlalu==========================================================
          $blnlalukeagamaandanilmuketuhananiain3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5526,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalukeagamaandanilmuketuhananiain3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5526,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninikeagamaandanilmuketuhananiain3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5526,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninikeagamaandanilmuketuhananiain3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5526,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninikeagamaandanilmuketuhananiain3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5526,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninikeagamaandanilmuketuhananiain3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5526,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninikeagamaandanilmuketuhananiain3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5526,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninikeagamaandanilmuketuhananiain3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5526,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= kesejahteraankeluarga3=======================================
                    // bulanlalu==========================================================
          $blnlalukesejahteraankeluarga3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5527,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalukesejahteraankeluarga3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5527,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninikesejahteraankeluarga3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5527,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninikesejahteraankeluarga3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5527,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninikesejahteraankeluarga3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5527,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninikesejahteraankeluarga3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5527,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninikesejahteraankeluarga3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5527,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninikesejahteraankeluarga3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5527,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= seni3=======================================
                    // bulanlalu==========================================================
          $blnlaluseni3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5528,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluseni3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5528,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniseni3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5528,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniseni3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5528,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniseni3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5528,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniseni3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5528,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniseni3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5528,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniseni3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5528,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------


          //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= publistikpenerangan3=======================================
                    // bulanlalu==========================================================
          $blnlalupublistikpenerangan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5529,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlalupublistikpenerangan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5529,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninipublistikpenerangan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5529,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninipublistikpenerangan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5529,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninipublistikpenerangan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5529,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninipublistikpenerangan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5529,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninipublistikpenerangan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5529,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninipublistikpenerangan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5529,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

            //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= ilmukomunikasimassa3=======================================
                    // bulanlalu==========================================================
          $blnlaluilmukomunikasimassa3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5530,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluilmukomunikasimassa3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5530,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniilmukomunikasimassa3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5530,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniilmukomunikasimassa3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5530,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniilmukomunikasimassa3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5530,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniilmukomunikasimassa3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5530,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniilmukomunikasimassa3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5530,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniilmukomunikasimassa3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5530,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= perpustakaan3=======================================
                    // bulanlalu==========================================================
          $blnlaluperpustakaan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5531,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluperpustakaan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5531,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniperpustakaan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5531,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniperpustakaan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5531,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniperpustakaan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5531,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniperpustakaan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5531,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniperpustakaan3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5531,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniperpustakaan3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5531,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= anakbuahkapaldanteknisipelayaran3=======================================
                    // bulanlalu==========================================================
          $blnlaluanakbuahkapaldanteknisipelayaran3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5532,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluanakbuahkapaldanteknisipelayaran3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5532,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninianakbuahkapaldanteknisipelayaran3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5532,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninianakbuahkapaldanteknisipelayaran3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5532,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninianakbuahkapaldanteknisipelayaran3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5532,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninianakbuahkapaldanteknisipelayaran3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5532,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninianakbuahkapaldanteknisipelayaran3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5532,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninianakbuahkapaldanteknisipelayaran3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5532,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= posdantelekomunikasi3=======================================
                    // bulanlalu==========================================================
          $blnlaluposdantelekomunikasi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5533,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluposdantelekomunikasi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5533,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniposdantelekomunikasi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5533,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniposdantelekomunikasi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5533,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniposdantelekomunikasi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5533,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniposdantelekomunikasi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5533,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniposdantelekomunikasi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5533,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniposdantelekomunikasi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5533,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

             //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= hotelrestorandanparawisata3=======================================
                    // bulanlalu==========================================================
          $blnlaluhotelrestorandanparawisata3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5534,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluhotelrestorandanparawisata3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5534,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blninihotelrestorandanparawisata3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5534,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blninihotelrestorandanparawisata3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5534,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblninihotelrestorandanparawisata3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5534,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblninihotelrestorandanparawisata3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5534,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblninihotelrestorandanparawisata3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5534,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblninihotelrestorandanparawisata3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5534,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

           //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= ilmupengetahuansosialbudayalainnya3=======================================
                    // bulanlalu==========================================================
          $blnlaluilmupengetahuansosialbudayalainnya3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5535,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluilmupengetahuansosialbudayalainnya3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5535,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniilmupengetahuansosialbudayalainnya3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5535,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniilmupengetahuansosialbudayalainnya3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5535,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniilmupengetahuansosialbudayalainnya3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5535,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniilmupengetahuansosialbudayalainnya3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5535,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniilmupengetahuansosialbudayalainnya3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5535,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniilmupengetahuansosialbudayalainnya3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5535,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------

          //=====================diploma iii/akta iii/akademis/s.muda=====================================
              //===================== Diii - ILMU PENGETAHUAN SOSIAL/BUDAYA==============================
             //======================= ilmupengsosialbudayatakterdefinisi3=======================================
                    // bulanlalu==========================================================
          $blnlaluilmupengsosialbudayatakterdefinisi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5599,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
          $blnlaluilmupengsosialbudayatakterdefinisi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5599,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) > :userid', [':userid' => $blnsekarang])
          ->count();
                    // bulanini==========================================================
         $blniniilmupengsosialbudayatakterdefinisi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5599,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
          $blniniilmupengsosialbudayatakterdefinisi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5599,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_date) = :userid', [':userid' => $blnsekarang])
          ->count();
                  // penempatanbulanini================================================
         $penempatanblniniilmupengsosialbudayatakterdefinisi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5599,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
          $penempatanblniniilmupengsosialbudayatakterdefinisi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5599,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datepenempatan) = :userid', [':userid' => $blnsekarang])
          ->count();
                 // dihapuskanbulanini================================================
         $dihapusblniniilmupengsosialbudayatakterdefinisi3l = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5599,'pendidikan_jkl'=>1])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
          $dihapusblniniilmupengsosialbudayatakterdefinisi3p = Pendidikan::find()
          ->where(['id_sekolah' => 5000,
          'id_jurusan'=>5599,'pendidikan_jkl'=>2])
          ->andWhere('MONTH(pendidikan_datehapus) = :userid', [':userid' => $blnsekarang])
          ->count();
         // ----------------------------------------------------------
        return $this->renderAjax('excel', [
            // ===============SD Tidak tamat====================
            'blnlalutidaktamatsdl' => $blnlalutidaktamatsdl,
            'blnlalutidaktamatsdp' => $blnlalutidaktamatsdp,
            'blninitidaktamatsdl' => $blninitidaktamatsdl,
            'blninitidaktamatsdp' => $blninitidaktamatsdp,
            'penempatanblninitidaktamatsdl' => $penempatanblninitidaktamatsdl,
            'penempatanblninitidaktamatsdp' => $penempatanblninitidaktamatsdp,
            'dihapusblninitidaktamatsdl' => $dihapusblninitidaktamatsdl,
            'dihapusblninitidaktamatsdp' => $dihapusblninitidaktamatsdp,
// ==============================tamat sd================

            'blnlalutamatsdl' => $blnlalutamatsdl,
            'blnlalutamatsdp' => $blnlalutamatsdp,
            'blninitamatsdl' => $blninitamatsdl,
            'blninitamatsdp' => $blninitamatsdp,
            'penempatanblninitamatsdl' => $penempatanblninitamatsdl,
            'penempatanblninitamatsdp' => $penempatanblninitamatsdp,
            'dihapusblninitamatsdl' => $dihapusblninitamatsdl,
            'dihapusblninitamatsdp' => $dihapusblninitamatsdp,

// =============================setingkat SD========================

            'blnlalusetingkatsdl' => $blnlalusetingkatsdl,
            'blnlalusetingkatsdp' => $blnlalusetingkatsdp,
            'blninisetingkatsdl' => $blninisetingkatsdl,
            'blninisetingkatsdp' => $blninisetingkatsdp,
            'penempatanblninisetingkatsdl' => $penempatanblninisetingkatsdl,
            'penempatanblninisetingkatsdp' => $penempatanblninisetingkatsdp,
            'dihapusblninisetingkatsdl' => $dihapusblninisetingkatsdl,
            'dihapusblninisetingkatsdp' => $dihapusblninisetingkatsdp,


            // =================SMP============================
             // ================SMP====================
            'blnlalusmpl' => $blnlalusmpl,
            'blnlalusmpp' => $blnlalusmpp,
            'blninismpl' => $blninismpl,
            'blninismpp' => $blninismpp,
            'penempatanblninismpl' => $penempatanblninismpl,
            'penempatanblninismpp' => $penempatanblninismpp,
            'dihapusblninismpl' => $dihapusblninismpl,
            'dihapusblninismpp' => $dihapusblninismpp,

           // ================MADRASAH DINIYAH SANAWIYAH====================
            'blnlalumdsl' => $blnlalumdsl,
            'blnlalumdsp' => $blnlalumdsp,
            'blninimdsl' => $blninimdsl,
            'blninimdsp' => $blninimdsp,
            'penempatanblninimdsl' => $penempatanblninimdsl,
            'penempatanblninimdsp' => $penempatanblninimdsp,
            'dihapusblninimdsl' => $dihapusblninimdsl,
            'dihapusblninimdsp' => $dihapusblninimdsp,
            // ==================================================

// ================sltp kejuruan====================
            'blnlalusltpkejuruanl' => $blnlalusltpkejuruanl,
            'blnlalusltpkejuruanp' => $blnlalusltpkejuruanp,
            'blninisltpkejuruanl' => $blninisltpkejuruanl,
            'blninisltpkejuruanp' => $blninisltpkejuruanp,
            'penempatanblninisltpkejuruanl' => $penempatanblninisltpkejuruanl,
            'penempatanblninisltpkejuruanp' => $penempatanblninisltpkejuruanp,
            'dihapusblninisltpkejuruanl' => $dihapusblninisltpkejuruanl,
            'dihapusblninisltpkejuruanp' => $dihapusblninisltpkejuruanp,
            // ==================================================

// ================sltp lainnya====================
            'blnlalusltplainnyal' => $blnlalusltplainnyal,
            'blnlalusltplainnyap' => $blnlalusltplainnyap,
            'blninisltplainnyal' => $blninisltplainnyal,
            'blninisltplainnyap' => $blninisltplainnyap,
            'penempatanblninisltplainnyal' => $penempatanblninisltplainnyal,
            'penempatanblninisltplainnyap' => $penempatanblninisltplainnyap,
            'dihapusblninisltplainnyal' => $dihapusblninisltplainnyal,
            'dihapusblninisltplainnyap' => $dihapusblninisltplainnyap,
            // ==================================================

// ================sltp tak terdefenisi====================
            'blnlalusltptakterdefenisil' => $blnlalusltptakterdefenisil,
            'blnlalusltptakterdefenisip' => $blnlalusltptakterdefenisip,
            'blninisltptakterdefenisil' => $blninisltptakterdefenisil,
            'blninisltptakterdefenisip' => $blninisltptakterdefenisip,
            'penempatanblninisltptakterdefenisil' => $penempatanblninisltptakterdefenisil,
            'penempatanblninisltptakterdefenisip' => $penempatanblninisltptakterdefenisip,
            'dihapusblninisltptakterdefenisil' => $dihapusblninisltptakterdefenisil,
            'dihapusblninisltptakterdefenisip' => $dihapusblninisltptakterdefenisip,
            // ==================================================

             //======================= pendidikan menengah atas=======================================
           // ================SMU======================================================
            'blnlalusmul' => $blnlalusmul,
            'blnlalusmup' => $blnlalusmup,
            'blninismul' => $blninismul,
            'blninismup' => $blninismup,
            'penempatanblninismul' => $penempatanblninismul,
            'penempatanblninismup' => $penempatanblninismup,
            'dihapusblninismul' => $dihapusblninismul,
            'dihapusblninismup' => $dihapusblninismup,
            // ======================================================================\
             //======================= pendidikan menengah atas=======================================             
             // ================MDA======================================================
            'blnlalumdal' => $blnlalumdal,
            'blnlalumdap' => $blnlalumdap,
            'blninimdal' => $blninimdal,
            'blninimdap' => $blninimdap,
            'penempatanblninimdal' => $penempatanblninimdal,
            'penempatanblninimdap' => $penempatanblninimdap,
            'dihapusblninimdal' => $dihapusblninimdal,
            'dihapusblninimdap' => $dihapusblninimdap,
            // ======================================================================
             //======================= pendidikan menengah atas=======================================             
             // ================teknikbangunan======================================================
            'blnlaluteknikbangunanl' => $blnlaluteknikbangunanl,
            'blnlaluteknikbangunanp' => $blnlaluteknikbangunanp,
            'blniniteknikbangunanl' => $blniniteknikbangunanl,
            'blniniteknikbangunanp' => $blniniteknikbangunanp,
            'penempatanblniniteknikbangunanl' => $penempatanblniniteknikbangunanl,
            'penempatanblniniteknikbangunanp' => $penempatanblniniteknikbangunanp,
            'dihapusblniniteknikbangunanl' => $dihapusblniniteknikbangunanl,
            'dihapusblniniteknikbangunanp' => $dihapusblniniteknikbangunanp,
            // ======================================================================

            //======================= pendidikan menengah atas=======================================             
             // ================teknikplumbingdansanitasi======================================================
            'blnlaluteknikplumbingdansanitasil' => $blnlaluteknikplumbingdansanitasil,
            'blnlaluteknikplumbingdansanitasip' => $blnlaluteknikplumbingdansanitasip,
            'blniniteknikplumbingdansanitasil' => $blniniteknikplumbingdansanitasil,
            'blniniteknikplumbingdansanitasip' => $blniniteknikplumbingdansanitasip,
            'penempatanblniniteknikplumbingdansanitasil' => $penempatanblniniteknikplumbingdansanitasil,
            'penempatanblniniteknikplumbingdansanitasip' => $penempatanblniniteknikplumbingdansanitasip,
            'dihapusblniniteknikplumbingdansanitasil' => $dihapusblniniteknikplumbingdansanitasil,
            'dihapusblniniteknikplumbingdansanitasip' => $dihapusblniniteknikplumbingdansanitasip,
            // ======================================================================

               //======================= pendidikan menengah atas=======================================             
             // ================tekniksurveidanpemetaan======================================================
            'blnlalutekniksurveidanpemetaanl' => $blnlalutekniksurveidanpemetaanl,
            'blnlalutekniksurveidanpemetaanp' => $blnlalutekniksurveidanpemetaanp,
            'blninitekniksurveidanpemetaanl' => $blninitekniksurveidanpemetaanl,
            'blninitekniksurveidanpemetaanp' => $blninitekniksurveidanpemetaanp,
            'penempatanblninitekniksurveidanpemetaanl' => $penempatanblninitekniksurveidanpemetaanl,
            'penempatanblninitekniksurveidanpemetaanp' => $penempatanblninitekniksurveidanpemetaanp,
            'dihapusblninitekniksurveidanpemetaanl' => $dihapusblninitekniksurveidanpemetaanl,
            'dihapusblninitekniksurveidanpemetaanp' => $dihapusblninitekniksurveidanpemetaanp,
            // ======================================================================


               //======================= pendidikan menengah atas=======================================             
             // ================teknikketenagalistrikan======================================================
            'blnlaluteknikketenagalistrikanl' => $blnlaluteknikketenagalistrikanl,
            'blnlaluteknikketenagalistrikanp' => $blnlaluteknikketenagalistrikanp,
            'blniniteknikketenagalistrikanl' => $blniniteknikketenagalistrikanl,
            'blniniteknikketenagalistrikanp' => $blniniteknikketenagalistrikanp,
            'penempatanblniniteknikketenagalistrikanl' => $penempatanblniniteknikketenagalistrikanl,
            'penempatanblniniteknikketenagalistrikanp' => $penempatanblniniteknikketenagalistrikanp,
            'dihapusblniniteknikketenagalistrikanl' => $dihapusblniniteknikketenagalistrikanl,
            'dihapusblniniteknikketenagalistrikanp' => $dihapusblniniteknikketenagalistrikanp,
            // ======================================================================


  //======================= pendidikan menengah atas=======================================             
             // ================teknikpendinginandantataudara======================================================
            'blnlaluteknikpendinginandantataudaral' => $blnlaluteknikpendinginandantataudaral,
            'blnlaluteknikpendinginandantataudarap' => $blnlaluteknikpendinginandantataudarap,
            'blniniteknikpendinginandantataudaral' => $blniniteknikpendinginandantataudaral,
            'blniniteknikpendinginandantataudarap' => $blniniteknikpendinginandantataudarap,
            'penempatanblniniteknikpendinginandantataudaral' => $penempatanblniniteknikpendinginandantataudaral,
            'penempatanblniniteknikpendinginandantataudarap' => $penempatanblniniteknikpendinginandantataudarap,
            'dihapusblniniteknikpendinginandantataudaral' => $dihapusblniniteknikpendinginandantataudaral,
            'dihapusblniniteknikpendinginandantataudarap' => $dihapusblniniteknikpendinginandantataudarap,
            // ======================================================================
//======================= pendidikan menengah atas=======================================             
             // ================teknikmesin======================================================
            'blnlaluteknikmesinl' => $blnlaluteknikmesinl,
            'blnlaluteknikmesinp' => $blnlaluteknikmesinp,
            'blniniteknikmesinl' => $blniniteknikmesinl,
            'blniniteknikmesinp' => $blniniteknikmesinp,
            'penempatanblniniteknikmesinl' => $penempatanblniniteknikmesinl,
            'penempatanblniniteknikmesinp' => $penempatanblniniteknikmesinp,
            'dihapusblniniteknikmesinl' => $dihapusblniniteknikmesinl,
            'dihapusblniniteknikmesinp' => $dihapusblniniteknikmesinp,
            // ======================================================================
//======================= pendidikan menengah atas=======================================             
             // ================teknikotomotif======================================================
            'blnlaluteknikotomotifl' => $blnlaluteknikotomotifl,
            'blnlaluteknikotomotifp' => $blnlaluteknikotomotifp,
            'blniniteknikotomotifl' => $blniniteknikotomotifl,
            'blniniteknikotomotifp' => $blniniteknikotomotifp,
            'penempatanblniniteknikotomotifl' => $penempatanblniniteknikotomotifl,
            'penempatanblniniteknikotomotifp' => $penempatanblniniteknikotomotifp,
            'dihapusblniniteknikotomotifl' => $dihapusblniniteknikotomotifl,
            'dihapusblniniteknikotomotifp' => $dihapusblniniteknikotomotifp,
            // ======================================================================
            //======================= pendidikan menengah atas=======================================             
             // ================teknologipesawatudara======================================================
            'blnlaluteknologipesawatudaral' => $blnlaluteknologipesawatudaral,
            'blnlaluteknologipesawatudarap' => $blnlaluteknologipesawatudarap,
            'blniniteknologipesawatudaral' => $blniniteknologipesawatudaral,
            'blniniteknologipesawatudarap' => $blniniteknologipesawatudarap,
            'penempatanblniniteknologipesawatudaral' => $penempatanblniniteknologipesawatudaral,
            'penempatanblniniteknologipesawatudarap' => $penempatanblniniteknologipesawatudarap,
            'dihapusblniniteknologipesawatudaral' => $dihapusblniniteknologipesawatudaral,
            'dihapusblniniteknologipesawatudarap' => $dihapusblniniteknologipesawatudarap,
            // ======================================================================
            //======================= pendidikan menengah atas=======================================             
             // ================teknikperkapalan======================================================
            'blnlaluteknikperkapalanl' => $blnlaluteknikperkapalanl,
            'blnlaluteknikperkapalanp' => $blnlaluteknikperkapalanp,
            'blniniteknikperkapalanl' => $blniniteknikperkapalanl,
            'blniniteknikperkapalanp' => $blniniteknikperkapalanp,
            'penempatanblniniteknikperkapalanl' => $penempatanblniniteknikperkapalanl,
            'penempatanblniniteknikperkapalanp' => $penempatanblniniteknikperkapalanp,
            'dihapusblniniteknikperkapalanl' => $dihapusblniniteknikperkapalanl,
            'dihapusblniniteknikperkapalanp' => $dihapusblniniteknikperkapalanp,
            // ======================================================================
                      //======================= pendidikan menengah atas=======================================             
             // ================teknologitekstil======================================================
            'blnlaluteknologitekstill' => $blnlaluteknologitekstill,
            'blnlaluteknologitekstilp' => $blnlaluteknologitekstilp,
            'blniniteknologitekstill' => $blniniteknologitekstill,
            'blniniteknologitekstilp' => $blniniteknologitekstilp,
            'penempatanblniniteknologitekstill' => $penempatanblniniteknologitekstill,
            'penempatanblniniteknologitekstilp' => $penempatanblniniteknologitekstilp,
            'dihapusblniniteknologitekstill' => $dihapusblniniteknologitekstill,
            'dihapusblniniteknologitekstilp' => $dihapusblniniteknologitekstilp,
            // ======================================================================
               //======================= pendidikan menengah atas=======================================             
             // ================teknikgrafika======================================================
            'blnlaluteknikgrafikal' => $blnlaluteknikgrafikal,
            'blnlaluteknikgrafikap' => $blnlaluteknikgrafikap,
            'blniniteknikgrafikal' => $blniniteknikgrafikal,
            'blniniteknikgrafikap' => $blniniteknikgrafikap,
            'penempatanblniniteknikgrafikal' => $penempatanblniniteknikgrafikal,
            'penempatanblniniteknikgrafikap' => $penempatanblniniteknikgrafikap,
            'dihapusblniniteknikgrafikal' => $dihapusblniniteknikgrafikal,
            'dihapusblniniteknikgrafikap' => $dihapusblniniteknikgrafikap,
            // ======================================================================

             //======================= pendidikan menengah atas=======================================             
             // ================geologipertambangan======================================================
            'blnlalugeologipertambanganl' => $blnlalugeologipertambanganl,
            'blnlalugeologipertambanganp' => $blnlalugeologipertambanganp,
            'blninigeologipertambanganl' => $blninigeologipertambanganl,
            'blninigeologipertambanganp' => $blninigeologipertambanganp,
            'penempatanblninigeologipertambanganl' => $penempatanblninigeologipertambanganl,
            'penempatanblninigeologipertambanganp' => $penempatanblninigeologipertambanganp,
            'dihapusblninigeologipertambanganl' => $dihapusblninigeologipertambanganl,
            'dihapusblninigeologipertambanganp' => $dihapusblninigeologipertambanganp,
            // ======================================================================

             //======================= pendidikan menengah atas=======================================             
             // ================instrumentasiindustri======================================================
            'blnlaluinstrumentasiindustril' => $blnlaluinstrumentasiindustril,
            'blnlaluinstrumentasiindustrip' => $blnlaluinstrumentasiindustrip,
            'blniniinstrumentasiindustril' => $blniniinstrumentasiindustril,
            'blniniinstrumentasiindustrip' => $blniniinstrumentasiindustrip,
            'penempatanblniniinstrumentasiindustril' => $penempatanblniniinstrumentasiindustril,
            'penempatanblniniinstrumentasiindustrip' => $penempatanblniniinstrumentasiindustrip,
            'dihapusblniniinstrumentasiindustril' => $dihapusblniniinstrumentasiindustril,
            'dihapusblniniinstrumentasiindustrip' => $dihapusblniniinstrumentasiindustrip,
            // ======================================================================

             //======================= pendidikan menengah atas=======================================             
             // ================teknikkimia======================================================
            'blnlaluteknikkimial' => $blnlaluteknikkimial,
            'blnlaluteknikkimiap' => $blnlaluteknikkimiap,
            'blniniteknikkimial' => $blniniteknikkimial,
            'blniniteknikkimiap' => $blniniteknikkimiap,
            'penempatanblniniteknikkimial' => $penempatanblniniteknikkimial,
            'penempatanblniniteknikkimiap' => $penempatanblniniteknikkimiap,
            'dihapusblniniteknikkimial' => $dihapusblniniteknikkimial,
            'dihapusblniniteknikkimiap' => $dihapusblniniteknikkimiap,
            // ======================================================================
             //======================= pendidikan menengah atas=======================================             
             // ================pelayaran======================================================
            'blnlalupelayaranl' => $blnlalupelayaranl,
            'blnlalupelayaranp' => $blnlalupelayaranp,
            'blninipelayaranl' => $blninipelayaranl,
            'blninipelayaranp' => $blninipelayaranp,
            'penempatanblninipelayaranl' => $penempatanblninipelayaranl,
            'penempatanblninipelayaranp' => $penempatanblninipelayaranp,
            'dihapusblninipelayaranl' => $dihapusblninipelayaranl,
            'dihapusblninipelayaranp' => $dihapusblninipelayaranp,
            // ======================================================================
            //======================= pendidikan menengah atas=======================================             
             // ================teknikindustri======================================================
            'blnlaluteknikindustril' => $blnlaluteknikindustril,
            'blnlaluteknikindustrip' => $blnlaluteknikindustrip,
            'blniniteknikindustril' => $blniniteknikindustril,
            'blniniteknikindustrip' => $blniniteknikindustrip,
            'penempatanblniniteknikindustril' => $penempatanblniniteknikindustril,
            'penempatanblniniteknikindustrip' => $penempatanblniniteknikindustrip,
            'dihapusblniniteknikindustril' => $dihapusblniniteknikindustril,
            'dihapusblniniteknikindustrip' => $dihapusblniniteknikindustrip,
            // ======================================================================
             //======================= pendidikan menengah atas=======================================             
             // ================teknikperminyakan======================================================
            'blnlaluteknikperminyakanl' => $blnlaluteknikperminyakanl,
            'blnlaluteknikperminyakanp' => $blnlaluteknikperminyakanp,
            'blniniteknikperminyakanl' => $blniniteknikperminyakanl,
            'blniniteknikperminyakanp' => $blniniteknikperminyakanp,
            'penempatanblniniteknikperminyakanl' => $penempatanblniniteknikperminyakanl,
            'penempatanblniniteknikperminyakanp' => $penempatanblniniteknikperminyakanp,
            'dihapusblniniteknikperminyakanl' => $dihapusblniniteknikperminyakanl,
            'dihapusblniniteknikperminyakanp' => $dihapusblniniteknikperminyakanp,
            // ======================================================================
            //======================= pendidikan menengah atas=======================================             
             // ================teknikelektronika======================================================
            'blnlaluteknikelektronikal' => $blnlaluteknikelektronikal,
            'blnlaluteknikelektronikap' => $blnlaluteknikelektronikap,
            'blniniteknikelektronikal' => $blniniteknikelektronikal,
            'blniniteknikelektronikap' => $blniniteknikelektronikap,
            'penempatanblniniteknikelektronikal' => $penempatanblniniteknikelektronikal,
            'penempatanblniniteknikelektronikap' => $penempatanblniniteknikelektronikap,
            'dihapusblniniteknikelektronikal' => $dihapusblniniteknikelektronikal,
            'dihapusblniniteknikelektronikap' => $dihapusblniniteknikelektronikap,
            // ======================================================================
            //======================= pendidikan menengah atas=======================================             
             // ================tekniktelekomunikasi======================================================
            'blnlalutekniktelekomunikasil' => $blnlalutekniktelekomunikasil,
            'blnlalutekniktelekomunikasip' => $blnlalutekniktelekomunikasip,
            'blninitekniktelekomunikasil' => $blninitekniktelekomunikasil,
            'blninitekniktelekomunikasip' => $blninitekniktelekomunikasip,
            'penempatanblninitekniktelekomunikasil' => $penempatanblninitekniktelekomunikasil,
            'penempatanblninitekniktelekomunikasip' => $penempatanblninitekniktelekomunikasip,
            'dihapusblninitekniktelekomunikasil' => $dihapusblninitekniktelekomunikasil,
            'dihapusblninitekniktelekomunikasip' => $dihapusblninitekniktelekomunikasip,
            // ======================================================================
            //======================= pendidikan menengah atas=======================================             
             // ================teknikkomputerdaninformatika======================================================
            'blnlaluteknikkomputerdaninformatikal' => $blnlaluteknikkomputerdaninformatikal,
            'blnlaluteknikkomputerdaninformatikap' => $blnlaluteknikkomputerdaninformatikap,
            'blniniteknikkomputerdaninformatikal' => $blniniteknikkomputerdaninformatikal,
            'blniniteknikkomputerdaninformatikap' => $blniniteknikkomputerdaninformatikap,
            'penempatanblniniteknikkomputerdaninformatikal' => $penempatanblniniteknikkomputerdaninformatikal,
            'penempatanblniniteknikkomputerdaninformatikap' => $penempatanblniniteknikkomputerdaninformatikap,
            'dihapusblniniteknikkomputerdaninformatikal' => $dihapusblniniteknikkomputerdaninformatikal,
            'dihapusblniniteknikkomputerdaninformatikap' => $dihapusblniniteknikkomputerdaninformatikap,
            // ======================================================================

            //======================= pendidikan menengah atas=======================================             
             // ================teknibroadcasting======================================================
            'blnlaluteknibroadcastingl' => $blnlaluteknibroadcastingl,
            'blnlaluteknibroadcastingp' => $blnlaluteknibroadcastingp,
            'blniniteknibroadcastingl' => $blniniteknibroadcastingl,
            'blniniteknibroadcastingp' => $blniniteknibroadcastingp,
            'penempatanblniniteknibroadcastingl' => $penempatanblniniteknibroadcastingl,
            'penempatanblniniteknibroadcastingp' => $penempatanblniniteknibroadcastingp,
            'dihapusblniniteknibroadcastingl' => $dihapusblniniteknibroadcastingl,
            'dihapusblniniteknibroadcastingp' => $dihapusblniniteknibroadcastingp,
            // ======================================================================

            //======================= pendidikan menengah atas=======================================             
             // ================kesehatan======================================================
            'blnlalukesehatanl' => $blnlalukesehatanl,
            'blnlalukesehatanp' => $blnlalukesehatanp,
            'blninikesehatanl' => $blninikesehatanl,
            'blninikesehatanp' => $blninikesehatanp,
            'penempatanblninikesehatanl' => $penempatanblninikesehatanl,
            'penempatanblninikesehatanp' => $penempatanblninikesehatanp,
            'dihapusblninikesehatanl' => $dihapusblninikesehatanl,
            'dihapusblninikesehatanp' => $dihapusblninikesehatanp,
            // ======================================================================
            //======================= pendidikan menengah atas=======================================             
             // ================perawatansosial======================================================
            'blnlaluperawatansosiall' => $blnlaluperawatansosiall,
            'blnlaluperawatansosialp' => $blnlaluperawatansosialp,
            'blniniperawatansosiall' => $blniniperawatansosiall,
            'blniniperawatansosialp' => $blniniperawatansosialp,
            'penempatanblniniperawatansosiall' => $penempatanblniniperawatansosiall,
            'penempatanblniniperawatansosialp' => $penempatanblniniperawatansosialp,
            'dihapusblniniperawatansosiall' => $dihapusblniniperawatansosiall,
            'dihapusblniniperawatansosialp' => $dihapusblniniperawatansosialp,
            // ======================================================================

              //======================= pendidikan menengah atas=======================================             
             // ================senirupa======================================================
            'blnlalusenirupal' => $blnlalusenirupal,
            'blnlalusenirupap' => $blnlalusenirupap,
            'blninisenirupal' => $blninisenirupal,
            'blninisenirupap' => $blninisenirupap,
            'penempatanblninisenirupal' => $penempatanblninisenirupal,
            'penempatanblninisenirupap' => $penempatanblninisenirupap,
            'dihapusblninisenirupal' => $dihapusblninisenirupal,
            'dihapusblninisenirupap' => $dihapusblninisenirupap,
            // ======================================================================

             //======================= pendidikan menengah atas=======================================             
             // ================desaindanproduksikria======================================================
            'blnlaludesaindanproduksikrial' => $blnlaludesaindanproduksikrial,
            'blnlaludesaindanproduksikriap' => $blnlaludesaindanproduksikriap,
            'blninidesaindanproduksikrial' => $blninidesaindanproduksikrial,
            'blninidesaindanproduksikriap' => $blninidesaindanproduksikriap,
            'penempatanblninidesaindanproduksikrial' => $penempatanblninidesaindanproduksikrial,
            'penempatanblninidesaindanproduksikriap' => $penempatanblninidesaindanproduksikriap,
            'dihapusblninidesaindanproduksikrial' => $dihapusblninidesaindanproduksikrial,
            'dihapusblninidesaindanproduksikriap' => $dihapusblninidesaindanproduksikriap,
            // ======================================================================

            //======================= pendidikan menengah atas=======================================             
             // ================senipertunjukan======================================================
            'blnlalusenipertunjukanl' => $blnlalusenipertunjukanl,
            'blnlalusenipertunjukanp' => $blnlalusenipertunjukanp,
            'blninisenipertunjukanl' => $blninisenipertunjukanl,
            'blninisenipertunjukanp' => $blninisenipertunjukanp,
            'penempatanblninisenipertunjukanl' => $penempatanblninisenipertunjukanl,
            'penempatanblninisenipertunjukanp' => $penempatanblninisenipertunjukanp,
            'dihapusblninisenipertunjukanl' => $dihapusblninisenipertunjukanl,
            'dihapusblninisenipertunjukanp' => $dihapusblninisenipertunjukanp,
            // ======================================================================

              //======================= pendidikan menengah atas=======================================             
             // ================pariwisata======================================================
            'blnlalupariwisatal' => $blnlalupariwisatal,
            'blnlalupariwisatap' => $blnlalupariwisatap,
            'blninipariwisatal' => $blninipariwisatal,
            'blninipariwisatap' => $blninipariwisatap,
            'penempatanblninipariwisatal' => $penempatanblninipariwisatal,
            'penempatanblninipariwisatap' => $penempatanblninipariwisatap,
            'dihapusblninipariwisatal' => $dihapusblninipariwisatal,
            'dihapusblninipariwisatap' => $dihapusblninipariwisatap,
            // ======================================================================

            //======================= pendidikan menengah atas=======================================             
             // ================tataboga======================================================
            'blnlalutatabogal' => $blnlalutatabogal,
            'blnlalutatabogap' => $blnlalutatabogap,
            'blninitatabogal' => $blninitatabogal,
            'blninitatabogap' => $blninitatabogap,
            'penempatanblninitatabogal' => $penempatanblninitatabogal,
            'penempatanblninitatabogap' => $penempatanblninitatabogap,
            'dihapusblninitatabogal' => $dihapusblninitatabogal,
            'dihapusblninitatabogap' => $dihapusblninitatabogap,
            // ======================================================================


            //======================= pendidikan menengah atas=======================================             
             // ================tatakecantikan======================================================
            'blnlalutatakecantikanl' => $blnlalutatakecantikanl,
            'blnlalutatakecantikanp' => $blnlalutatakecantikanp,
            'blninitatakecantikanl' => $blninitatakecantikanl,
            'blninitatakecantikanp' => $blninitatakecantikanp,
            'penempatanblninitatakecantikanl' => $penempatanblninitatakecantikanl,
            'penempatanblninitatakecantikanp' => $penempatanblninitatakecantikanp,
            'dihapusblninitatakecantikanl' => $dihapusblninitatakecantikanl,
            'dihapusblninitatakecantikanp' => $dihapusblninitatakecantikanp,
            // ======================================================================

            //======================= pendidikan menengah atas=======================================             
             // ================tatabusana======================================================
            'blnlalutatabusanal' => $blnlalutatabusanal,
            'blnlalutatabusanap' => $blnlalutatabusanap,
            'blninitatabusanal' => $blninitatabusanal,
            'blninitatabusanap' => $blninitatabusanap,
            'penempatanblninitatabusanal' => $penempatanblninitatabusanal,
            'penempatanblninitatabusanap' => $penempatanblninitatabusanap,
            'dihapusblninitatabusanal' => $dihapusblninitatabusanal,
            'dihapusblninitatabusanap' => $dihapusblninitatabusanap,
            // ======================================================================
          
           //======================= pendidikan menengah atas=======================================             
             // ================agribisnisproduksitanaman======================================================
            'blnlaluagribisnisproduksitanamanl' => $blnlaluagribisnisproduksitanamanl,
            'blnlaluagribisnisproduksitanamanp' => $blnlaluagribisnisproduksitanamanp,
            'blniniagribisnisproduksitanamanl' => $blniniagribisnisproduksitanamanl,
            'blniniagribisnisproduksitanamanp' => $blniniagribisnisproduksitanamanp,
            'penempatanblniniagribisnisproduksitanamanl' => $penempatanblniniagribisnisproduksitanamanl,
            'penempatanblniniagribisnisproduksitanamanp' => $penempatanblniniagribisnisproduksitanamanp,
            'dihapusblniniagribisnisproduksitanamanl' => $dihapusblniniagribisnisproduksitanamanl,
            'dihapusblniniagribisnisproduksitanamanp' => $dihapusblniniagribisnisproduksitanamanp,
            // ======================================================================

            //======================= pendidikan menengah atas=======================================             
             // ================agribisnisproduksiternak======================================================
            'blnlaluagribisnisproduksiternakl' => $blnlaluagribisnisproduksiternakl,
            'blnlaluagribisnisproduksiternakp' => $blnlaluagribisnisproduksiternakp,
            'blniniagribisnisproduksiternakl' => $blniniagribisnisproduksiternakl,
            'blniniagribisnisproduksiternakp' => $blniniagribisnisproduksiternakp,
            'penempatanblniniagribisnisproduksiternakl' => $penempatanblniniagribisnisproduksiternakl,
            'penempatanblniniagribisnisproduksiternakp' => $penempatanblniniagribisnisproduksiternakp,
            'dihapusblniniagribisnisproduksiternakl' => $dihapusblniniagribisnisproduksiternakl,
            'dihapusblniniagribisnisproduksiternakp' => $dihapusblniniagribisnisproduksiternakp,
            // ======================================================================

            //======================= pendidikan menengah atas=======================================             
             // ================agribisnisproduksisumberdayaperairan======================================================
            'blnlaluagribisnisproduksisumberdayaperairanl' => $blnlaluagribisnisproduksisumberdayaperairanl,
            'blnlaluagribisnisproduksisumberdayaperairanp' => $blnlaluagribisnisproduksisumberdayaperairanp,
            'blniniagribisnisproduksisumberdayaperairanl' => $blniniagribisnisproduksisumberdayaperairanl,
            'blniniagribisnisproduksisumberdayaperairanp' => $blniniagribisnisproduksisumberdayaperairanp,
            'penempatanblniniagribisnisproduksisumberdayaperairanl' => $penempatanblniniagribisnisproduksisumberdayaperairanl,
            'penempatanblniniagribisnisproduksisumberdayaperairanp' => $penempatanblniniagribisnisproduksisumberdayaperairanp,
            'dihapusblniniagribisnisproduksisumberdayaperairanl' => $dihapusblniniagribisnisproduksisumberdayaperairanl,
            'dihapusblniniagribisnisproduksisumberdayaperairanp' => $dihapusblniniagribisnisproduksisumberdayaperairanp,
            // ======================================================================

            //======================= pendidikan menengah atas=======================================             
             // ================mekanisasipertanian======================================================
            'blnlalumekanisasipertanianl' => $blnlalumekanisasipertanianl,
            'blnlalumekanisasipertanianp' => $blnlalumekanisasipertanianp,
            'blninimekanisasipertanianl' => $blninimekanisasipertanianl,
            'blninimekanisasipertanianp' => $blninimekanisasipertanianp,
            'penempatanblninimekanisasipertanianl' => $penempatanblninimekanisasipertanianl,
            'penempatanblninimekanisasipertanianp' => $penempatanblninimekanisasipertanianp,
            'dihapusblninimekanisasipertanianl' => $dihapusblninimekanisasipertanianl,
            'dihapusblninimekanisasipertanianp' => $dihapusblninimekanisasipertanianp,
            // ======================================================================


            //======================= pendidikan menengah atas=======================================             
             // ================agribisnishasilpertanian======================================================
            'blnlaluagribisnishasilpertanianl' => $blnlaluagribisnishasilpertanianl,
            'blnlaluagribisnishasilpertanianp' => $blnlaluagribisnishasilpertanianp,
            'blniniagribisnishasilpertanianl' => $blniniagribisnishasilpertanianl,
            'blniniagribisnishasilpertanianp' => $blniniagribisnishasilpertanianp,
            'penempatanblniniagribisnishasilpertanianl' => $penempatanblniniagribisnishasilpertanianl,
            'penempatanblniniagribisnishasilpertanianp' => $penempatanblniniagribisnishasilpertanianp,
            'dihapusblniniagribisnishasilpertanianl' => $dihapusblniniagribisnishasilpertanianl,
            'dihapusblniniagribisnishasilpertanianp' => $dihapusblniniagribisnishasilpertanianp,
            // ======================================================================

                  //======================= pendidikan menengah atas=======================================             
             // ================penyuluhanpertanian======================================================
            'blnlalupenyuluhanpertanianl' => $blnlalupenyuluhanpertanianl,
            'blnlalupenyuluhanpertanianp' => $blnlalupenyuluhanpertanianp,
            'blninipenyuluhanpertanianl' => $blninipenyuluhanpertanianl,
            'blninipenyuluhanpertanianp' => $blninipenyuluhanpertanianp,
            'penempatanblninipenyuluhanpertanianl' => $penempatanblninipenyuluhanpertanianl,
            'penempatanblninipenyuluhanpertanianp' => $penempatanblninipenyuluhanpertanianp,
            'dihapusblninipenyuluhanpertanianl' => $dihapusblninipenyuluhanpertanianl,
            'dihapusblninipenyuluhanpertanianp' => $dihapusblninipenyuluhanpertanianp,
            // ======================================================================


                  //======================= pendidikan menengah atas====================================           
             // ================kehutanan======================================================
            'blnlalukehutananl' => $blnlalukehutananl,
            'blnlalukehutananp' => $blnlalukehutananp,
            'blninikehutananl' => $blninikehutananl,
            'blninikehutananp' => $blninikehutananp,
            'penempatanblninikehutananl' => $penempatanblninikehutananl,
            'penempatanblninikehutananp' => $penempatanblninikehutananp,
            'dihapusblninikehutananl' => $dihapusblninikehutananl,
            'dihapusblninikehutananp' => $dihapusblninikehutananp,
            // ======================================================================

              //======================= pendidikan menengah atas====================================           
             // ================administrasi======================================================
            'blnlaluadministrasil' => $blnlaluadministrasil,
            'blnlaluadministrasip' => $blnlaluadministrasip,
            'blniniadministrasil' => $blniniadministrasil,
            'blniniadministrasip' => $blniniadministrasip,
            'penempatanblniniadministrasil' => $penempatanblniniadministrasil,
            'penempatanblniniadministrasip' => $penempatanblniniadministrasip,
            'dihapusblniniadministrasil' => $dihapusblniniadministrasil,
            'dihapusblniniadministrasip' => $dihapusblniniadministrasip,
            // ======================================================================
            //======================= pendidikan menengah atas====================================           
             // ================keuangan======================================================
            'blnlalukeuanganl' => $blnlalukeuanganl,
            'blnlalukeuanganp' => $blnlalukeuanganp,
            'blninikeuanganl' => $blninikeuanganl,
            'blninikeuanganp' => $blninikeuanganp,
            'penempatanblninikeuanganl' => $penempatanblninikeuanganl,
            'penempatanblninikeuanganp' => $penempatanblninikeuanganp,
            'dihapusblninikeuanganl' => $dihapusblninikeuanganl,
            'dihapusblninikeuanganp' => $dihapusblninikeuanganp,
            // ======================================================================

            //======================= pendidikan menengah atas====================================           
             // ================tataniaga======================================================
            'blnlalutataniagal' => $blnlalutataniagal,
            'blnlalutataniagap' => $blnlalutataniagap,
            'blninitataniagal' => $blninitataniagal,
            'blninitataniagap' => $blninitataniagap,
            'penempatanblninitataniagal' => $penempatanblninitataniagal,
            'penempatanblninitataniagap' => $penempatanblninitataniagap,
            'dihapusblninitataniagal' => $dihapusblninitataniagal,
            'dihapusblninitataniagap' => $dihapusblninitataniagap,
            // ======================================================================

            //======================= pendidikan menengah atas====================================           
             // ================sltalainnya======================================================
            'blnlalusltalainnyal' => $blnlalusltalainnyal,
            'blnlalusltalainnyap' => $blnlalusltalainnyap,
            'blninisltalainnyal' => $blninisltalainnyal,
            'blninisltalainnyap' => $blninisltalainnyap,
            'penempatanblninisltalainnyal' => $penempatanblninisltalainnyal,
            'penempatanblninisltalainnyap' => $penempatanblninisltalainnyap,
            'dihapusblninisltalainnyal' => $dihapusblninisltalainnyal,
            'dihapusblninisltalainnyap' => $dihapusblninisltalainnyap,
            // ======================================================================

            //======================= pendidikan menengah atas====================================           
             // ================sltatakterdefinisi======================================================
            'blnlalusltatakterdefinisil' => $blnlalusltatakterdefinisil,
            'blnlalusltatakterdefinisip' => $blnlalusltatakterdefinisip,
            'blninisltatakterdefinisil' => $blninisltatakterdefinisil,
            'blninisltatakterdefinisip' => $blninisltatakterdefinisip,
            'penempatanblninisltatakterdefinisil' => $penempatanblninisltatakterdefinisil,
            'penempatanblninisltatakterdefinisip' => $penempatanblninisltatakterdefinisip,
            'dihapusblninisltatakterdefinisil' => $dihapusblninisltatakterdefinisil,
            'dihapusblninisltatakterdefinisip' => $dihapusblninisltatakterdefinisip,
            // ======================================================================

               //======================= DIPLOMAI/AKTAI/DIPLOMAII/AKTAII====================================           
             // ================pendidikan======================================================
            'blnlalupendidikanl' => $blnlalupendidikanl,
            'blnlalupendidikanp' => $blnlalupendidikanp,
            'blninipendidikanl' => $blninipendidikanl,
            'blninipendidikanp' => $blninipendidikanp,
            'penempatanblninipendidikanl' => $penempatanblninipendidikanl,
            'penempatanblninipendidikanp' => $penempatanblninipendidikanp,
            'dihapusblninipendidikanl' => $dihapusblninipendidikanl,
            'dihapusblninipendidikanp' => $dihapusblninipendidikanp,
            // ======================================================================

             //======================= DIPLOMAI/AKTAI/DIPLOMAII/AKTAII====================================           
             // ================pendidikanluarsekolah======================================================
            'blnlalupendidikanluarsekolahl' => $blnlalupendidikanluarsekolahl,
            'blnlalupendidikanluarsekolahp' => $blnlalupendidikanluarsekolahp,
            'blninipendidikanluarsekolahl' => $blninipendidikanluarsekolahl,
            'blninipendidikanluarsekolahp' => $blninipendidikanluarsekolahp,
            'penempatanblninipendidikanluarsekolahl' => $penempatanblninipendidikanluarsekolahl,
            'penempatanblninipendidikanluarsekolahp' => $penempatanblninipendidikanluarsekolahp,
            'dihapusblninipendidikanluarsekolahl' => $dihapusblninipendidikanluarsekolahl,
            'dihapusblninipendidikanluarsekolahp' => $dihapusblninipendidikanluarsekolahp,
            // ======================================================================

             //======================= DIPLOMAI/AKTAI/DIPLOMAII/AKTAII====================================           
             // ================psikologi======================================================
            'blnlalupsikologil' => $blnlalupsikologil,
            'blnlalupsikologip' => $blnlalupsikologip,
            'blninipsikologil' => $blninipsikologil,
            'blninipsikologip' => $blninipsikologip,
            'penempatanblninipsikologil' => $penempatanblninipsikologil,
            'penempatanblninipsikologip' => $penempatanblninipsikologip,
            'dihapusblninipsikologil' => $dihapusblninipsikologil,
            'dihapusblninipsikologip' => $dihapusblninipsikologip,
            // ======================================================================

            //======================= DIPLOMAI/AKTAI/DIPLOMAII/AKTAII====================================           
             // ================ilmupengetahuansosial======================================================
            'blnlaluilmupengetahuansosiall' => $blnlaluilmupengetahuansosiall,
            'blnlaluilmupengetahuansosialp' => $blnlaluilmupengetahuansosialp,
            'blniniilmupengetahuansosiall' => $blniniilmupengetahuansosiall,
            'blniniilmupengetahuansosialp' => $blniniilmupengetahuansosialp,
            'penempatanblniniilmupengetahuansosiall' => $penempatanblniniilmupengetahuansosiall,
            'penempatanblniniilmupengetahuansosialp' => $penempatanblniniilmupengetahuansosialp,
            'dihapusblniniilmupengetahuansosiall' => $dihapusblniniilmupengetahuansosiall,
            'dihapusblniniilmupengetahuansosialp' => $dihapusblniniilmupengetahuansosialp,
            // ======================================================================

            //======================= DIPLOMAI/AKTAI/DIPLOMAII/AKTAII====================================           
             // ================pendidikanmoralpancasila======================================================
            'blnlalupendidikanmoralpancasilal' => $blnlalupendidikanmoralpancasilal,
            'blnlalupendidikanmoralpancasilap' => $blnlalupendidikanmoralpancasilap,
            'blninipendidikanmoralpancasilal' => $blninipendidikanmoralpancasilal,
            'blninipendidikanmoralpancasilap' => $blninipendidikanmoralpancasilap,
            'penempatanblninipendidikanmoralpancasilal' => $penempatanblninipendidikanmoralpancasilal,
            'penempatanblninipendidikanmoralpancasilap' => $penempatanblninipendidikanmoralpancasilap,
            'dihapusblninipendidikanmoralpancasilal' => $dihapusblninipendidikanmoralpancasilal,
            'dihapusblninipendidikanmoralpancasilap' => $dihapusblninipendidikanmoralpancasilap,
            // ======================================================================

            //======================= DIPLOMAI/AKTAI/DIPLOMAII/AKTAII====================================           
             // ================administrasikeuangan======================================================
            'blnlaluadministrasikeuanganl' => $blnlaluadministrasikeuanganl,
            'blnlaluadministrasikeuanganp' => $blnlaluadministrasikeuanganp,
            'blniniadministrasikeuanganl' => $blniniadministrasikeuanganl,
            'blniniadministrasikeuanganp' => $blniniadministrasikeuanganp,
            'penempatanblniniadministrasikeuanganl' => $penempatanblniniadministrasikeuanganl,
            'penempatanblniniadministrasikeuanganp' => $penempatanblniniadministrasikeuanganp,
            'dihapusblniniadministrasikeuanganl' => $dihapusblniniadministrasikeuanganl,
            'dihapusblniniadministrasikeuanganp' => $dihapusblniniadministrasikeuanganp,
            // ======================================================================

            //======================= DIPLOMAI/AKTAI/DIPLOMAII/AKTAII====================================           
             // ================sejarah======================================================
            'blnlalusejarahl' => $blnlalusejarahl,
            'blnlalusejarahp' => $blnlalusejarahp,
            'blninisejarahl' => $blninisejarahl,
            'blninisejarahp' => $blninisejarahp,
            'penempatanblninisejarahl' => $penempatanblninisejarahl,
            'penempatanblninisejarahp' => $penempatanblninisejarahp,
            'dihapusblninisejarahl' => $dihapusblninisejarahl,
            'dihapusblninisejarahp' => $dihapusblninisejarahp,
            // ======================================================================

            //======================= DIPLOMAI/AKTAI/DIPLOMAII/AKTAII====================================           
             // ================hukum======================================================
            'blnlaluhukuml' => $blnlaluhukuml,
            'blnlaluhukump' => $blnlaluhukump,
            'blninihukuml' => $blninihukuml,
            'blninihukump' => $blninihukump,
            'penempatanblninihukuml' => $penempatanblninihukuml,
            'penempatanblninihukump' => $penempatanblninihukump,
            'dihapusblninihukuml' => $dihapusblninihukuml,
            'dihapusblninihukump' => $dihapusblninihukump,
            // ======================================================================

                     //======================= DIPLOMAI/AKTAI/DIPLOMAII/AKTAII====================================           
             // ================kesekretariatan======================================================
            'blnlalukesekretariatanl' => $blnlalukesekretariatanl,
            'blnlalukesekretariatanp' => $blnlalukesekretariatanp,
            'blninikesekretariatanl' => $blninikesekretariatanl,
            'blninikesekretariatanp' => $blninikesekretariatanp,
            'penempatanblninikesekretariatanl' => $penempatanblninikesekretariatanl,
            'penempatanblninikesekretariatanp' => $penempatanblninikesekretariatanp,
            'dihapusblninikesekretariatanl' => $dihapusblninikesekretariatanl,
            'dihapusblninikesekretariatanp' => $dihapusblninikesekretariatanp,
            // ======================================================================

             //======================= DIPLOMAI/AKTAI/DIPLOMAII/AKTAII====================================           
             // ================olahragakesehatan======================================================
            'blnlaluolahragakesehatanl' => $blnlaluolahragakesehatanl,
            'blnlaluolahragakesehatanp' => $blnlaluolahragakesehatanp,
            'blniniolahragakesehatanl' => $blniniolahragakesehatanl,
            'blniniolahragakesehatanp' => $blniniolahragakesehatanp,
            'penempatanblniniolahragakesehatanl' => $penempatanblniniolahragakesehatanl,
            'penempatanblniniolahragakesehatanp' => $penempatanblniniolahragakesehatanp,
            'dihapusblniniolahragakesehatanl' => $dihapusblniniolahragakesehatanl,
            'dihapusblniniolahragakesehatanp' => $dihapusblniniolahragakesehatanp,
            // ======================================================================

            //======================= DIPLOMAI/AKTAI/DIPLOMAII/AKTAII====================================           
             // ================kesenian======================================================
            'blnlalukesenianl' => $blnlalukesenianl,
            'blnlalukesenianp' => $blnlalukesenianp,
            'blninikesenianl' => $blninikesenianl,
            'blninikesenianp' => $blninikesenianp,
            'penempatanblninikesenianl' => $penempatanblninikesenianl,
            'penempatanblninikesenianp' => $penempatanblninikesenianp,
            'dihapusblninikesenianl' => $dihapusblninikesenianl,
            'dihapusblninikesenianp' => $dihapusblninikesenianp,
            // ======================================================================

            //======================= DIPLOMAI/AKTAI/DIPLOMAII/AKTAII====================================           
             // ================bahasaindonesia======================================================
            'blnlalubahasaindonesial' => $blnlalubahasaindonesial,
            'blnlalubahasaindonesiap' => $blnlalubahasaindonesiap,
            'blninibahasaindonesial' => $blninibahasaindonesial,
            'blninibahasaindonesiap' => $blninibahasaindonesiap,
            'penempatanblninibahasaindonesial' => $penempatanblninibahasaindonesial,
            'penempatanblninibahasaindonesiap' => $penempatanblninibahasaindonesiap,
            'dihapusblninibahasaindonesial' => $dihapusblninibahasaindonesial,
            'dihapusblninibahasaindonesiap' => $dihapusblninibahasaindonesiap,
            // ======================================================================

                 //======================= DIPLOMAI/AKTAI/DIPLOMAII/AKTAII====================================           
             // ================bahasainggris======================================================
            'blnlalubahasainggrisl' => $blnlalubahasainggrisl,
            'blnlalubahasainggrisp' => $blnlalubahasainggrisp,
            'blninibahasainggrisl' => $blninibahasainggrisl,
            'blninibahasainggrisp' => $blninibahasainggrisp,
            'penempatanblninibahasainggrisl' => $penempatanblninibahasainggrisl,
            'penempatanblninibahasainggrisp' => $penempatanblninibahasainggrisp,
            'dihapusblninibahasainggrisl' => $dihapusblninibahasainggrisl,
            'dihapusblninibahasainggrisp' => $dihapusblninibahasainggrisp,
            // ======================================================================

             //======================= DIPLOMAI/AKTAI/DIPLOMAII/AKTAII====================================           
             // ================bahasaarab======================================================
            'blnlalubahasaarabl' => $blnlalubahasaarabl,
            'blnlalubahasaarabp' => $blnlalubahasaarabp,
            'blninibahasaarabl' => $blninibahasaarabl,
            'blninibahasaarabp' => $blninibahasaarabp,
            'penempatanblninibahasaarabl' => $penempatanblninibahasaarabl,
            'penempatanblninibahasaarabp' => $penempatanblninibahasaarabp,
            'dihapusblninibahasaarabl' => $dihapusblninibahasaarabl,
            'dihapusblninibahasaarabp' => $dihapusblninibahasaarabp,
            // ======================================================================

               //======================= DIPLOMAI/AKTAI/DIPLOMAII/AKTAII====================================           
             // ================ekonomi======================================================
            'blnlaluekonomil' => $blnlaluekonomil,
            'blnlaluekonomip' => $blnlaluekonomip,
            'blniniekonomil' => $blniniekonomil,
            'blniniekonomip' => $blniniekonomip,
            'penempatanblniniekonomil' => $penempatanblniniekonomil,
            'penempatanblniniekonomip' => $penempatanblniniekonomip,
            'dihapusblniniekonomil' => $dihapusblniniekonomil,
            'dihapusblniniekonomip' => $dihapusblniniekonomip,
            // ======================================================================

            //======================= DIPLOMAI/AKTAI/DIPLOMAII/AKTAII====================================           
             // ================ilmupengetahuanalamfisika======================================================
            'blnlaluilmupengetahuanalamfisikal' => $blnlaluilmupengetahuanalamfisikal,
            'blnlaluilmupengetahuanalamfisikap' => $blnlaluilmupengetahuanalamfisikap,
            'blniniilmupengetahuanalamfisikal' => $blniniilmupengetahuanalamfisikal,
            'blniniilmupengetahuanalamfisikap' => $blniniilmupengetahuanalamfisikap,
            'penempatanblniniilmupengetahuanalamfisikal' => $penempatanblniniilmupengetahuanalamfisikal,
            'penempatanblniniilmupengetahuanalamfisikap' => $penempatanblniniilmupengetahuanalamfisikap,
            'dihapusblniniilmupengetahuanalamfisikal' => $dihapusblniniilmupengetahuanalamfisikal,
            'dihapusblniniilmupengetahuanalamfisikap' => $dihapusblniniilmupengetahuanalamfisikap,
            // ======================================================================


             //======================= DIPLOMAI/AKTAI/DIPLOMAII/AKTAII====================================           
             // ================matematika======================================================
            'blnlalumatematikal' => $blnlalumatematikal,
            'blnlalumatematikap' => $blnlalumatematikap,
            'blninimatematikal' => $blninimatematikal,
            'blninimatematikap' => $blninimatematikap,
            'penempatanblninimatematikal' => $penempatanblninimatematikal,
            'penempatanblninimatematikap' => $penempatanblninimatematikap,
            'dihapusblninimatematikal' => $dihapusblninimatematikal,
            'dihapusblninimatematikap' => $dihapusblninimatematikap,
            // ======================================================================

            //======================= DIPLOMAI/AKTAI/DIPLOMAII/AKTAII====================================           
             // ================programkomputer======================================================
            'blnlaluprogramkomputerl' => $blnlaluprogramkomputerl,
            'blnlaluprogramkomputerp' => $blnlaluprogramkomputerp,
            'blniniprogramkomputerl' => $blniniprogramkomputerl,
            'blniniprogramkomputerp' => $blniniprogramkomputerp,
            'penempatanblniniprogramkomputerl' => $penempatanblniniprogramkomputerl,
            'penempatanblniniprogramkomputerp' => $penempatanblniniprogramkomputerp,
            'dihapusblniniprogramkomputerl' => $dihapusblniniprogramkomputerl,
            'dihapusblniniprogramkomputerp' => $dihapusblniniprogramkomputerp,
            // ======================================================================


            //======================= DIPLOMAI/AKTAI/DIPLOMAII/AKTAII====================================           
             // ================biologi======================================================
            'blnlalubiologil' => $blnlalubiologil,
            'blnlalubiologip' => $blnlalubiologip,
            'blninibiologil' => $blninibiologil,
            'blninibiologip' => $blninibiologip,
            'penempatanblninibiologil' => $penempatanblninibiologil,
            'penempatanblninibiologip' => $penempatanblninibiologip,
            'dihapusblninibiologil' => $dihapusblninibiologil,
            'dihapusblninibiologip' => $dihapusblninibiologip,
            // ======================================================================

              //======================= DIPLOMAI/AKTAI/DIPLOMAII/AKTAII====================================           
             // ================ilmukimia======================================================
            'blnlaluilmukimial' => $blnlaluilmukimial,
            'blnlaluilmukimiap' => $blnlaluilmukimiap,
            'blniniilmukimial' => $blniniilmukimial,
            'blniniilmukimiap' => $blniniilmukimiap,
            'penempatanblniniilmukimial' => $penempatanblniniilmukimial,
            'penempatanblniniilmukimiap' => $penempatanblniniilmukimiap,
            'dihapusblniniilmukimial' => $dihapusblniniilmukimial,
            'dihapusblniniilmukimiap' => $dihapusblniniilmukimiap,
            // ======================================================================

                   //======================= DIPLOMAI/AKTAI/DIPLOMAII/AKTAII====================================           
             // ================teknikmesin======================================================
            'blnlaluteknikmesinl' => $blnlaluteknikmesinl,
            'blnlaluteknikmesinp' => $blnlaluteknikmesinp,
            'blniniteknikmesinl' => $blniniteknikmesinl,
            'blniniteknikmesinp' => $blniniteknikmesinp,
            'penempatanblniniteknikmesinl' => $penempatanblniniteknikmesinl,
            'penempatanblniniteknikmesinp' => $penempatanblniniteknikmesinp,
            'dihapusblniniteknikmesinl' => $dihapusblniniteknikmesinl,
            'dihapusblniniteknikmesinp' => $dihapusblniniteknikmesinp,
            // ======================================================================

                //======================= DIPLOMAI/AKTAI/DIPLOMAII/AKTAII====================================           
             // ================tekniksipil======================================================
            'blnlalutekniksipill' => $blnlalutekniksipill,
            'blnlalutekniksipilp' => $blnlalutekniksipilp,
            'blninitekniksipill' => $blninitekniksipill,
            'blninitekniksipilp' => $blninitekniksipilp,
            'penempatanblninitekniksipill' => $penempatanblninitekniksipill,
            'penempatanblninitekniksipilp' => $penempatanblninitekniksipilp,
            'dihapusblninitekniksipill' => $dihapusblninitekniksipill,
            'dihapusblninitekniksipilp' => $dihapusblninitekniksipilp,
            // ======================================================================

              //======================= DIPLOMAI/AKTAI/DIPLOMAII/AKTAII====================================           
             // ================tekniklistrik======================================================
            'blnlalutekniklistrikl' => $blnlalutekniklistrikl,
            'blnlalutekniklistrikp' => $blnlalutekniklistrikp,
            'blninitekniklistrikl' => $blninitekniklistrikl,
            'blninitekniklistrikp' => $blninitekniklistrikp,
            'penempatanblninitekniklistrikl' => $penempatanblninitekniklistrikl,
            'penempatanblninitekniklistrikp' => $penempatanblninitekniklistrikp,
            'dihapusblninitekniklistrikl' => $dihapusblninitekniklistrikl,
            'dihapusblninitekniklistrikp' => $dihapusblninitekniklistrikp,
            // ======================================================================
            //======================= DIPLOMAI/AKTAI/DIPLOMAII/AKTAII====================================           
             // ================diplomaiaktailainnya======================================================
            'blnlaludiplomaiaktailainnyal' => $blnlaludiplomaiaktailainnyal,
            'blnlaludiplomaiaktailainnyap' => $blnlaludiplomaiaktailainnyap,
            'blninidiplomaiaktailainnyal' => $blninidiplomaiaktailainnyal,
            'blninidiplomaiaktailainnyap' => $blninidiplomaiaktailainnyap,
            'penempatanblninidiplomaiaktailainnyal' => $penempatanblninidiplomaiaktailainnyal,
            'penempatanblninidiplomaiaktailainnyap' => $penempatanblninidiplomaiaktailainnyap,
            'dihapusblninidiplomaiaktailainnyal' => $dihapusblninidiplomaiaktailainnyal,
            'dihapusblninidiplomaiaktailainnyap' => $dihapusblninidiplomaiaktailainnyap,
            // ======================================================================
              //======================= DIPLOMAI/AKTAI/DIPLOMAII/AKTAII====================================           
             // ================diplomaitakterdefenisi======================================================
            'blnlaludiplomaitakterdefenisil' => $blnlaludiplomaitakterdefenisil,
            'blnlaludiplomaitakterdefenisip' => $blnlaludiplomaitakterdefenisip,
            'blninidiplomaitakterdefenisil' => $blninidiplomaitakterdefenisil,
            'blninidiplomaitakterdefenisip' => $blninidiplomaitakterdefenisip,
            'penempatanblninidiplomaitakterdefenisil' => $penempatanblninidiplomaitakterdefenisil,
            'penempatanblninidiplomaitakterdefenisip' => $penempatanblninidiplomaitakterdefenisip,
            'dihapusblninidiplomaitakterdefenisil' => $dihapusblninidiplomaitakterdefenisil,
            'dihapusblninidiplomaitakterdefenisip' => $dihapusblninidiplomaitakterdefenisip,
            // ======================================================================

              //======================= DIPLOMAII/AKTAII/===============================           
             // ================pendidikan2======================================================
            'blnlalupendidikan2l' => $blnlalupendidikan2l,
            'blnlalupendidikan2p' => $blnlalupendidikan2p,
            'blninipendidikan2l' => $blninipendidikan2l,
            'blninipendidikan2p' => $blninipendidikan2p,
            'penempatanblninipendidikan2l' => $penempatanblninipendidikan2l,
            'penempatanblninipendidikan2p' => $penempatanblninipendidikan2p,
            'dihapusblninipendidikan2l' => $dihapusblninipendidikan2l,
            'dihapusblninipendidikan2p' => $dihapusblninipendidikan2p,
            // ======================================================================

             //======================= DIPLOMAII/AKTAII/===============================           
             // ================pendidikansosial2======================================================
            'blnlalupendidikansosial2l' => $blnlalupendidikansosial2l,
            'blnlalupendidikansosial2p' => $blnlalupendidikansosial2p,
            'blninipendidikansosial2l' => $blninipendidikansosial2l,
            'blninipendidikansosial2p' => $blninipendidikansosial2p,
            'penempatanblninipendidikansosial2l' => $penempatanblninipendidikansosial2l,
            'penempatanblninipendidikansosial2p' => $penempatanblninipendidikansosial2p,
            'dihapusblninipendidikansosial2l' => $dihapusblninipendidikansosial2l,
            'dihapusblninipendidikansosial2p' => $dihapusblninipendidikansosial2p,
            // ======================================================================
              //======================= DIPLOMAII/AKTAII/===============================           
             // ================pendidikanluarsekolah2======================================================
            'blnlalupendidikanluarsekolah2l' => $blnlalupendidikanluarsekolah2l,
            'blnlalupendidikanluarsekolah2p' => $blnlalupendidikanluarsekolah2p,
            'blninipendidikanluarsekolah2l' => $blninipendidikanluarsekolah2l,
            'blninipendidikanluarsekolah2p' => $blninipendidikanluarsekolah2p,
            'penempatanblninipendidikanluarsekolah2l' => $penempatanblninipendidikanluarsekolah2l,
            'penempatanblninipendidikanluarsekolah2p' => $penempatanblninipendidikanluarsekolah2p,
            'dihapusblninipendidikanluarsekolah2l' => $dihapusblninipendidikanluarsekolah2l,
            'dihapusblninipendidikanluarsekolah2p' => $dihapusblninipendidikanluarsekolah2p,
            // ======================================================================

              //======================= DIPLOMAII/AKTAII/===============================           
             // ================psikologi2======================================================
            'blnlalupsikologi2l' => $blnlalupsikologi2l,
            'blnlalupsikologi2p' => $blnlalupsikologi2p,
            'blninipsikologi2l' => $blninipsikologi2l,
            'blninipsikologi2p' => $blninipsikologi2p,
            'penempatanblninipsikologi2l' => $penempatanblninipsikologi2l,
            'penempatanblninipsikologi2p' => $penempatanblninipsikologi2p,
            'dihapusblninipsikologi2l' => $dihapusblninipsikologi2l,
            'dihapusblninipsikologi2p' => $dihapusblninipsikologi2p,
            // ======================================================================

                //======================= DIPLOMAII/AKTAII/===============================           
             // ================pendidikanmoralpancasila2======================================================
            'blnlalupendidikanmoralpancasila2l' => $blnlalupendidikanmoralpancasila2l,
            'blnlalupendidikanmoralpancasila2p' => $blnlalupendidikanmoralpancasila2p,
            'blninipendidikanmoralpancasila2l' => $blninipendidikanmoralpancasila2l,
            'blninipendidikanmoralpancasila2p' => $blninipendidikanmoralpancasila2p,
            'penempatanblninipendidikanmoralpancasila2l' => $penempatanblninipendidikanmoralpancasila2l,
            'penempatanblninipendidikanmoralpancasila2p' => $penempatanblninipendidikanmoralpancasila2p,
            'dihapusblninipendidikanmoralpancasila2l' => $dihapusblninipendidikanmoralpancasila2l,
            'dihapusblninipendidikanmoralpancasila2p' => $dihapusblninipendidikanmoralpancasila2p,
            // ======================================================================


                //======================= DIPLOMAII/AKTAII/===============================           
             // ================antropologi2======================================================
            'blnlaluantropologi2l' => $blnlaluantropologi2l,
            'blnlaluantropologi2p' => $blnlaluantropologi2p,
            'blniniantropologi2l' => $blniniantropologi2l,
            'blniniantropologi2p' => $blniniantropologi2p,
            'penempatanblniniantropologi2l' => $penempatanblniniantropologi2l,
            'penempatanblniniantropologi2p' => $penempatanblniniantropologi2p,
            'dihapusblniniantropologi2l' => $dihapusblniniantropologi2l,
            'dihapusblniniantropologi2p' => $dihapusblniniantropologi2p,
            // ======================================================================

            //======================= DIPLOMAII/AKTAII/===============================           
             // ================hukum2======================================================
            'blnlaluhukum2l' => $blnlaluhukum2l,
            'blnlaluhukum2p' => $blnlaluhukum2p,
            'blninihukum2l' => $blninihukum2l,
            'blninihukum2p' => $blninihukum2p,
            'penempatanblninihukum2l' => $penempatanblninihukum2l,
            'penempatanblninihukum2p' => $penempatanblninihukum2p,
            'dihapusblninihukum2l' => $dihapusblninihukum2l,
            'dihapusblninihukum2p' => $dihapusblninihukum2p,
            // ======================================================================
               //======================= DIPLOMAII/AKTAII/===============================           
             // ================pendidikankesejahteraankeluarga2======================================================
            'blnlalupendidikankesejahteraankeluarga2l' => $blnlalupendidikankesejahteraankeluarga2l,
            'blnlalupendidikankesejahteraankeluarga2p' => $blnlalupendidikankesejahteraankeluarga2p,
            'blninipendidikankesejahteraankeluarga2l' => $blninipendidikankesejahteraankeluarga2l,
            'blninipendidikankesejahteraankeluarga2p' => $blninipendidikankesejahteraankeluarga2p,
            'penempatanblninipendidikankesejahteraankeluarga2l' => $penempatanblninipendidikankesejahteraankeluarga2l,
            'penempatanblninipendidikankesejahteraankeluarga2p' => $penempatanblninipendidikankesejahteraankeluarga2p,
            'dihapusblninipendidikankesejahteraankeluarga2l' => $dihapusblninipendidikankesejahteraankeluarga2l,
            'dihapusblninipendidikankesejahteraankeluarga2p' => $dihapusblninipendidikankesejahteraankeluarga2p,
            // ======================================================================

             //======================= DIPLOMAII/AKTAII/===============================           
             // ================ekonomi2======================================================
            'blnlaluekonomi2l' => $blnlaluekonomi2l,
            'blnlaluekonomi2p' => $blnlaluekonomi2p,
            'blniniekonomi2l' => $blniniekonomi2l,
            'blniniekonomi2p' => $blniniekonomi2p,
            'penempatanblniniekonomi2l' => $penempatanblniniekonomi2l,
            'penempatanblniniekonomi2p' => $penempatanblniniekonomi2p,
            'dihapusblniniekonomi2l' => $dihapusblniniekonomi2l,
            'dihapusblniniekonomi2p' => $dihapusblniniekonomi2p,
            // ======================================================================

               //======================= DIPLOMAII/AKTAII/===============================           
             // ================kesenian2======================================================
            'blnlalukesenian2l' => $blnlalukesenian2l,
            'blnlalukesenian2p' => $blnlalukesenian2p,
            'blninikesenian2l' => $blninikesenian2l,
            'blninikesenian2p' => $blninikesenian2p,
            'penempatanblninikesenian2l' => $penempatanblninikesenian2l,
            'penempatanblninikesenian2p' => $penempatanblninikesenian2p,
            'dihapusblninikesenian2l' => $dihapusblninikesenian2l,
            'dihapusblninikesenian2p' => $dihapusblninikesenian2p,
            // ======================================================================

                //======================= DIPLOMAII/AKTAII/===============================           
             // ================kesekretariatan2======================================================
            'blnlalukesekretariatan2l' => $blnlalukesekretariatan2l,
            'blnlalukesekretariatan2p' => $blnlalukesekretariatan2p,
            'blninikesekretariatan2l' => $blninikesekretariatan2l,
            'blninikesekretariatan2p' => $blninikesekretariatan2p,
            'penempatanblninikesekretariatan2l' => $penempatanblninikesekretariatan2l,
            'penempatanblninikesekretariatan2p' => $penempatanblninikesekretariatan2p,
            'dihapusblninikesekretariatan2l' => $dihapusblninikesekretariatan2l,
            'dihapusblninikesekretariatan2p' => $dihapusblninikesekretariatan2p,
            // ======================================================================

               //======================= DIPLOMAII/AKTAII/===============================           
             // ================administrasi2======================================================
            'blnlaluadministrasi2l' => $blnlaluadministrasi2l,
            'blnlaluadministrasi2p' => $blnlaluadministrasi2p,
            'blniniadministrasi2l' => $blniniadministrasi2l,
            'blniniadministrasi2p' => $blniniadministrasi2p,
            'penempatanblniniadministrasi2l' => $penempatanblniniadministrasi2l,
            'penempatanblniniadministrasi2p' => $penempatanblniniadministrasi2p,
            'dihapusblniniadministrasi2l' => $dihapusblniniadministrasi2l,
            'dihapusblniniadministrasi2p' => $dihapusblniniadministrasi2p,
            // ======================================================================

                //======================= DIPLOMAII/AKTAII/===============================           
             // ================marketing2======================================================
            'blnlalumarketing2l' => $blnlalumarketing2l,
            'blnlalumarketing2p' => $blnlalumarketing2p,
            'blninimarketing2l' => $blninimarketing2l,
            'blninimarketing2p' => $blninimarketing2p,
            'penempatanblninimarketing2l' => $penempatanblninimarketing2l,
            'penempatanblninimarketing2p' => $penempatanblninimarketing2p,
            'dihapusblninimarketing2l' => $dihapusblninimarketing2l,
            'dihapusblninimarketing2p' => $dihapusblninimarketing2p,
            // ======================================================================

            //======================= DIPLOMAII/AKTAII/===============================           
             // ================akutansi2======================================================
            'blnlaluakutansi2l' => $blnlaluakutansi2l,
            'blnlaluakutansi2p' => $blnlaluakutansi2p,
            'blniniakutansi2l' => $blniniakutansi2l,
            'blniniakutansi2p' => $blniniakutansi2p,
            'penempatanblniniakutansi2l' => $penempatanblniniakutansi2l,
            'penempatanblniniakutansi2p' => $penempatanblniniakutansi2p,
            'dihapusblniniakutansi2l' => $dihapusblniniakutansi2l,
            'dihapusblniniakutansi2p' => $dihapusblniniakutansi2p,
            // ======================================================================

             //======================= DIPLOMAII/AKTAII/===============================           
             // ================olahraga2======================================================
            'blnlaluolahraga2l' => $blnlaluolahraga2l,
            'blnlaluolahraga2p' => $blnlaluolahraga2p,
            'blniniolahraga2l' => $blniniolahraga2l,
            'blniniolahraga2p' => $blniniolahraga2p,
            'penempatanblniniolahraga2l' => $penempatanblniniolahraga2l,
            'penempatanblniniolahraga2p' => $penempatanblniniolahraga2p,
            'dihapusblniniolahraga2l' => $dihapusblniniolahraga2l,
            'dihapusblniniolahraga2p' => $dihapusblniniolahraga2p,
            // ======================================================================

                //======================= DIPLOMAII/AKTAII/===============================           
             // ================olahraga2======================================================
            'blnlaluolahraga2l' => $blnlaluolahraga2l,
            'blnlaluolahraga2p' => $blnlaluolahraga2p,
            'blniniolahraga2l' => $blniniolahraga2l,
            'blniniolahraga2p' => $blniniolahraga2p,
            'penempatanblniniolahraga2l' => $penempatanblniniolahraga2l,
            'penempatanblniniolahraga2p' => $penempatanblniniolahraga2p,
            'dihapusblniniolahraga2l' => $dihapusblniniolahraga2l,
            'dihapusblniniolahraga2p' => $dihapusblniniolahraga2p,
            // ======================================================================

             //======================= DIPLOMAII/AKTAII/===============================             
             // ================bahasaindonesia2======================================================
            'blnlalubahasaindonesia2l' => $blnlalubahasaindonesia2l,
            'blnlalubahasaindonesia2p' => $blnlalubahasaindonesia2p,
            'blninibahasaindonesia2l' => $blninibahasaindonesia2l,
            'blninibahasaindonesia2p' => $blninibahasaindonesia2p,
            'penempatanblninibahasaindonesia2l' => $penempatanblninibahasaindonesia2l,
            'penempatanblninibahasaindonesia2p' => $penempatanblninibahasaindonesia2p,
            'dihapusblninibahasaindonesia2l' => $dihapusblninibahasaindonesia2l,
            'dihapusblninibahasaindonesia2p' => $dihapusblninibahasaindonesia2p,
            // ======================================================================

                 //======================= DIPLOMAII/AKTAII/===============================             
             // ================bahasainggris2======================================================
            'blnlalubahasainggris2l' => $blnlalubahasainggris2l,
            'blnlalubahasainggris2p' => $blnlalubahasainggris2p,
            'blninibahasainggris2l' => $blninibahasainggris2l,
            'blninibahasainggris2p' => $blninibahasainggris2p,
            'penempatanblninibahasainggris2l' => $penempatanblninibahasainggris2l,
            'penempatanblninibahasainggris2p' => $penempatanblninibahasainggris2p,
            'dihapusblninibahasainggris2l' => $dihapusblninibahasainggris2l,
            'dihapusblninibahasainggris2p' => $dihapusblninibahasainggris2p,
            // ======================================================================

             //======================= DIPLOMAII/AKTAII/===============================             
             // ================bahasaarab2======================================================
            'blnlalubahasaarab2l' => $blnlalubahasaarab2l,
            'blnlalubahasaarab2p' => $blnlalubahasaarab2p,
            'blninibahasaarab2l' => $blninibahasaarab2l,
            'blninibahasaarab2p' => $blninibahasaarab2p,
            'penempatanblninibahasaarab2l' => $penempatanblninibahasaarab2l,
            'penempatanblninibahasaarab2p' => $penempatanblninibahasaarab2p,
            'dihapusblninibahasaarab2l' => $dihapusblninibahasaarab2l,
            'dihapusblninibahasaarab2p' => $dihapusblninibahasaarab2p,
            // ======================================================================


             //======================= DIPLOMAII/AKTAII/===============================             
             // ================ilmupengetahuanalam2======================================================
            'blnlaluilmupengetahuanalam2l' => $blnlaluilmupengetahuanalam2l,
            'blnlaluilmupengetahuanalam2p' => $blnlaluilmupengetahuanalam2p,
            'blniniilmupengetahuanalam2l' => $blniniilmupengetahuanalam2l,
            'blniniilmupengetahuanalam2p' => $blniniilmupengetahuanalam2p,
            'penempatanblniniilmupengetahuanalam2l' => $penempatanblniniilmupengetahuanalam2l,
            'penempatanblniniilmupengetahuanalam2p' => $penempatanblniniilmupengetahuanalam2p,
            'dihapusblniniilmupengetahuanalam2l' => $dihapusblniniilmupengetahuanalam2l,
            'dihapusblniniilmupengetahuanalam2p' => $dihapusblniniilmupengetahuanalam2p,
            // ======================================================================


             //======================= DIPLOMAII/AKTAII/===============================             
             // ================geografi2======================================================
            'blnlalugeografi2l' => $blnlalugeografi2l,
            'blnlalugeografi2p' => $blnlalugeografi2p,
            'blninigeografi2l' => $blninigeografi2l,
            'blninigeografi2p' => $blninigeografi2p,
            'penempatanblninigeografi2l' => $penempatanblninigeografi2l,
            'penempatanblninigeografi2p' => $penempatanblninigeografi2p,
            'dihapusblninigeografi2l' => $dihapusblninigeografi2l,
            'dihapusblninigeografi2p' => $dihapusblninigeografi2p,
            // ======================================================================
             //======================= DIPLOMAII/AKTAII/===============================           
             // ================matematika2======================================================
            'blnlalumatematika2l' => $blnlalumatematika2l,
            'blnlalumatematika2p' => $blnlalumatematika2p,
            'blninimatematika2l' => $blninimatematika2l,
            'blninimatematika2p' => $blninimatematika2p,
            'penempatanblninimatematika2l' => $penempatanblninimatematika2l,
            'penempatanblninimatematika2p' => $penempatanblninimatematika2p,
            'dihapusblninimatematika2l' => $dihapusblninimatematika2l,
            'dihapusblninimatematika2p' => $dihapusblninimatematika2p,
            // ======================================================================
            //======================= DIPLOMAII/AKTAII/===============================           
             // ================biologi2======================================================
            'blnlalubiologi2l' => $blnlalubiologi2l,
            'blnlalubiologi2p' => $blnlalubiologi2p,
            'blninibiologi2l' => $blninibiologi2l,
            'blninibiologi2p' => $blninibiologi2p,
            'penempatanblninibiologi2l' => $penempatanblninibiologi2l,
            'penempatanblninibiologi2p' => $penempatanblninibiologi2p,
            'dihapusblninibiologi2l' => $dihapusblninibiologi2l,
            'dihapusblninibiologi2p' => $dihapusblninibiologi2p,
            // ======================================================================
            //======================= DIPLOMAII/AKTAII/===============================           
             // ================keterampilan2======================================================
            'blnlaluketerampilan2l' => $blnlaluketerampilan2l,
            'blnlaluketerampilan2p' => $blnlaluketerampilan2p,
            'blniniketerampilan2l' => $blniniketerampilan2l,
            'blniniketerampilan2p' => $blniniketerampilan2p,
            'penempatanblniniketerampilan2l' => $penempatanblniniketerampilan2l,
            'penempatanblniniketerampilan2p' => $penempatanblniniketerampilan2p,
            'dihapusblniniketerampilan2l' => $dihapusblniniketerampilan2l,
            'dihapusblniniketerampilan2p' => $dihapusblniniketerampilan2p,
            // ======================================================================
                //======================= DIPLOMAII/AKTAII/===============================           
             // ================tekniksipil2======================================================
            'blnlalutekniksipil2l' => $blnlalutekniksipil2l,
            'blnlalutekniksipil2p' => $blnlalutekniksipil2p,
            'blninitekniksipil2l' => $blninitekniksipil2l,
            'blninitekniksipil2p' => $blninitekniksipil2p,
            'penempatanblninitekniksipil2l' => $penempatanblninitekniksipil2l,
            'penempatanblninitekniksipil2p' => $penempatanblninitekniksipil2p,
            'dihapusblninitekniksipil2l' => $dihapusblninitekniksipil2l,
            'dihapusblninitekniksipil2p' => $dihapusblninitekniksipil2p,
            // ======================================================================
             //======================= DIPLOMAII/AKTAII/===============================           
             // ================teknikmesin2======================================================
            'blnlaluteknikmesin2l' => $blnlaluteknikmesin2l,
            'blnlaluteknikmesin2p' => $blnlaluteknikmesin2p,
            'blniniteknikmesin2l' => $blniniteknikmesin2l,
            'blniniteknikmesin2p' => $blniniteknikmesin2p,
            'penempatanblniniteknikmesin2l' => $penempatanblniniteknikmesin2l,
            'penempatanblniniteknikmesin2p' => $penempatanblniniteknikmesin2p,
            'dihapusblniniteknikmesin2l' => $dihapusblniniteknikmesin2l,
            'dihapusblniniteknikmesin2p' => $dihapusblniniteknikmesin2p,
            // ======================================================================
              //======================= DIPLOMAII/AKTAII/===============================           
             // ================tekniklistrik2======================================================
            'blnlalutekniklistrik2l' => $blnlalutekniklistrik2l,
            'blnlalutekniklistrik2p' => $blnlalutekniklistrik2p,
            'blninitekniklistrik2l' => $blninitekniklistrik2l,
            'blninitekniklistrik2p' => $blninitekniklistrik2p,
            'penempatanblninitekniklistrik2l' => $penempatanblninitekniklistrik2l,
            'penempatanblninitekniklistrik2p' => $penempatanblninitekniklistrik2p,
            'dihapusblninitekniklistrik2l' => $dihapusblninitekniklistrik2l,
            'dihapusblninitekniklistrik2p' => $dihapusblninitekniklistrik2p,
            // ======================================================================
              //======================= DIPLOMAII/AKTAII/===============================           
             // ================kimia2======================================================
            'blnlalukimia2l' => $blnlalukimia2l,
            'blnlalukimia2p' => $blnlalukimia2p,
            'blninikimia2l' => $blninikimia2l,
            'blninikimia2p' => $blninikimia2p,
            'penempatanblninikimia2l' => $penempatanblninikimia2l,
            'penempatanblninikimia2p' => $penempatanblninikimia2p,
            'dihapusblninikimia2l' => $dihapusblninikimia2l,
            'dihapusblninikimia2p' => $dihapusblninikimia2p,
            // ======================================================================    


            //======================= DIPLOMAII/AKTAII/===============================           
             // ================diplomaiiaktaiilainnya======================================================
            'blnlaludiplomaiiaktaiilainnya2l' => $blnlaludiplomaiiaktaiilainnya2l,
            'blnlaludiplomaiiaktaiilainnya2p' => $blnlaludiplomaiiaktaiilainnya2p,
            'blninidiplomaiiaktaiilainnya2l' => $blninidiplomaiiaktaiilainnya2l,
            'blninidiplomaiiaktaiilainnya2p' => $blninidiplomaiiaktaiilainnya2p,
            'penempatanblninidiplomaiiaktaiilainnya2l' => $penempatanblninidiplomaiiaktaiilainnya2l,
            'penempatanblninidiplomaiiaktaiilainnya2p' => $penempatanblninidiplomaiiaktaiilainnya2p,
            'dihapusblninidiplomaiiaktaiilainnya2l' => $dihapusblninidiplomaiiaktaiilainnya2l,
            'dihapusblninidiplomaiiaktaiilainnya2p' => $dihapusblninidiplomaiiaktaiilainnya2p,
            // ======================================================================
              //======================= DIPLOMAII/AKTAII/===============================           
             // ================diplomaiitakterdefinisi2======================================================
            'blnlaludiplomaiitakterdefinisi2l' => $blnlaludiplomaiitakterdefinisi2l,
            'blnlaludiplomaiitakterdefinisi2p' => $blnlaludiplomaiitakterdefinisi2p,
            'blninidiplomaiitakterdefinisi2l' => $blninidiplomaiitakterdefinisi2l,
            'blninidiplomaiitakterdefinisi2p' => $blninidiplomaiitakterdefinisi2p,
            'penempatanblninidiplomaiitakterdefinisi2l' => $penempatanblninidiplomaiitakterdefinisi2l,
            'penempatanblninidiplomaiitakterdefinisi2p' => $penempatanblninidiplomaiitakterdefinisi2p,
            'dihapusblninidiplomaiitakterdefinisi2l' => $dihapusblninidiplomaiitakterdefinisi2l,
            'dihapusblninidiplomaiitakterdefinisi2p' => $dihapusblninidiplomaiitakterdefinisi2p,
            // ======================================================================


             //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================fisika3======================================================
            'blnlalufisika3l' => $blnlalufisika3l,
            'blnlalufisika3p' => $blnlalufisika3p,
            'blninifisika3l' => $blninifisika3l,
            'blninifisika3p' => $blninifisika3p,
            'penempatanblninifisika3l' => $penempatanblninifisika3l,
            'penempatanblninifisika3p' => $penempatanblninifisika3p,
            'dihapusblninifisika3l' => $dihapusblninifisika3l,
            'dihapusblninifisika3p' => $dihapusblninifisika3p,
            // ======================================================================


             //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================astronomi3======================================================
            'blnlaluastronomi3l' => $blnlaluastronomi3l,
            'blnlaluastronomi3p' => $blnlaluastronomi3p,
            'blniniastronomi3l' => $blniniastronomi3l,
            'blniniastronomi3p' => $blniniastronomi3p,
            'penempatanblniniastronomi3l' => $penempatanblniniastronomi3l,
            'penempatanblniniastronomi3p' => $penempatanblniniastronomi3p,
            'dihapusblniniastronomi3l' => $dihapusblniniastronomi3l,
            'dihapusblniniastronomi3p' => $dihapusblniniastronomi3p,
            // ======================================================================


             //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================biologi3======================================================
            'blnlalubiologi3l' => $blnlalubiologi3l,
            'blnlalubiologi3p' => $blnlalubiologi3p,
            'blninibiologi3l' => $blninibiologi3l,
            'blninibiologi3p' => $blninibiologi3p,
            'penempatanblninibiologi3l' => $penempatanblninibiologi3l,
            'penempatanblninibiologi3p' => $penempatanblninibiologi3p,
            'dihapusblninibiologi3l' => $dihapusblninibiologi3l,
            'dihapusblninibiologi3p' => $dihapusblninibiologi3p,
            // ======================================================================

                 //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================geologidanpertambangan3======================================================
            'blnlalugeologidanpertambangan3l' => $blnlalugeologidanpertambangan3l,
            'blnlalugeologidanpertambangan3p' => $blnlalugeologidanpertambangan3p,
            'blninigeologidanpertambangan3l' => $blninigeologidanpertambangan3l,
            'blninigeologidanpertambangan3p' => $blninigeologidanpertambangan3p,
            'penempatanblninigeologidanpertambangan3l' => $penempatanblninigeologidanpertambangan3l,
            'penempatanblninigeologidanpertambangan3p' => $penempatanblninigeologidanpertambangan3p,
            'dihapusblninigeologidanpertambangan3l' => $dihapusblninigeologidanpertambangan3l,
            'dihapusblninigeologidanpertambangan3p' => $dihapusblninigeologidanpertambangan3p,
            // ======================================================================

                //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================georafi3======================================================
            'blnlalugeorafi3l' => $blnlalugeorafi3l,
            'blnlalugeorafi3p' => $blnlalugeorafi3p,
            'blninigeorafi3l' => $blninigeorafi3l,
            'blninigeorafi3p' => $blninigeorafi3p,
            'penempatanblninigeorafi3l' => $penempatanblninigeorafi3l,
            'penempatanblninigeorafi3p' => $penempatanblninigeorafi3p,
            'dihapusblninigeorafi3l' => $dihapusblninigeorafi3l,
            'dihapusblninigeorafi3p' => $dihapusblninigeorafi3p,
            // ======================================================================

            //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================matematika3======================================================
            'blnlalumatematika3l' => $blnlalumatematika3l,
            'blnlalumatematika3p' => $blnlalumatematika3p,
            'blninimatematika3l' => $blninimatematika3l,
            'blninimatematika3p' => $blninimatematika3p,
            'penempatanblninimatematika3l' => $penempatanblninimatematika3l,
            'penempatanblninimatematika3p' => $penempatanblninimatematika3p,
            'dihapusblninimatematika3l' => $dihapusblninimatematika3l,
            'dihapusblninimatematika3p' => $dihapusblninimatematika3p,
            // ======================================================================

              //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================ilmustatistik3======================================================
            'blnlaluilmustatistik3l' => $blnlaluilmustatistik3l,
            'blnlaluilmustatistik3p' => $blnlaluilmustatistik3p,
            'blniniilmustatistik3l' => $blniniilmustatistik3l,
            'blniniilmustatistik3p' => $blniniilmustatistik3p,
            'penempatanblniniilmustatistik3l' => $penempatanblniniilmustatistik3l,
            'penempatanblniniilmustatistik3p' => $penempatanblniniilmustatistik3p,
            'dihapusblniniilmustatistik3l' => $dihapusblniniilmustatistik3l,
            'dihapusblniniilmustatistik3p' => $dihapusblniniilmustatistik3p,
            // ======================================================================

                //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================ilmukomputer3======================================================
            'blnlaluilmukomputer3l' => $blnlaluilmukomputer3l,
            'blnlaluilmukomputer3p' => $blnlaluilmukomputer3p,
            'blniniilmukomputer3l' => $blniniilmukomputer3l,
            'blniniilmukomputer3p' => $blniniilmukomputer3p,
            'penempatanblniniilmukomputer3l' => $penempatanblniniilmukomputer3l,
            'penempatanblniniilmukomputer3p' => $penempatanblniniilmukomputer3p,
            'dihapusblniniilmukomputer3l' => $dihapusblniniilmukomputer3l,
            'dihapusblniniilmukomputer3p' => $dihapusblniniilmukomputer3p,
            // ======================================================================
                 //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================kimia3======================================================
            'blnlalukimia3l' => $blnlalukimia3l,
            'blnlalukimia3p' => $blnlalukimia3p,
            'blninikimia3l' => $blninikimia3l,
            'blninikimia3p' => $blninikimia3p,
            'penempatanblninikimia3l' => $penempatanblninikimia3l,
            'penempatanblninikimia3p' => $penempatanblninikimia3p,
            'dihapusblninikimia3l' => $dihapusblninikimia3l,
            'dihapusblninikimia3p' => $dihapusblninikimia3p,
            // ======================================================================

               //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================ilmupastialamlainnya3======================================================
            'blnlaluilmupastialamlainnya3l' => $blnlaluilmupastialamlainnya3l,
            'blnlaluilmupastialamlainnya3p' => $blnlaluilmupastialamlainnya3p,
            'blniniilmupastialamlainnya3l' => $blniniilmupastialamlainnya3l,
            'blniniilmupastialamlainnya3p' => $blniniilmupastialamlainnya3p,
            'penempatanblniniilmupastialamlainnya3l' => $penempatanblniniilmupastialamlainnya3l,
            'penempatanblniniilmupastialamlainnya3p' => $penempatanblniniilmupastialamlainnya3p,
            'dihapusblniniilmupastialamlainnya3l' => $dihapusblniniilmupastialamlainnya3l,
            'dihapusblniniilmupastialamlainnya3p' => $dihapusblniniilmupastialamlainnya3p,
            // ======================================================================

                      //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================ilmupastitakterdefinisi3======================================================
            'blnlaluilmupastitakterdefinisi3l' => $blnlaluilmupastitakterdefinisi3l,
            'blnlaluilmupastitakterdefinisi3p' => $blnlaluilmupastitakterdefinisi3p,
            'blniniilmupastitakterdefinisi3l' => $blniniilmupastitakterdefinisi3l,
            'blniniilmupastitakterdefinisi3p' => $blniniilmupastitakterdefinisi3p,
            'penempatanblniniilmupastitakterdefinisi3l' => $penempatanblniniilmupastitakterdefinisi3l,
            'penempatanblniniilmupastitakterdefinisi3p' => $penempatanblniniilmupastitakterdefinisi3p,
            'dihapusblniniilmupastitakterdefinisi3l' => $dihapusblniniilmupastitakterdefinisi3l,
            'dihapusblniniilmupastitakterdefinisi3p' => $dihapusblniniilmupastitakterdefinisi3p,
            // ======================================================================

             //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================fisika3======================================================
            'blnlalufisika3l' => $blnlalufisika3l,
            'blnlalufisika3p' => $blnlalufisika3p,
            'blninifisika3l' => $blninifisika3l,
            'blninifisika3p' => $blninifisika3p,
            'penempatanblninifisika3l' => $penempatanblninifisika3l,
            'penempatanblninifisika3p' => $penempatanblninifisika3p,
            'dihapusblninifisika3l' => $dihapusblninifisika3l,
            'dihapusblninifisika3p' => $dihapusblninifisika3p,
            // ======================================================================

              //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================teknikgeodesigeologi======================================================
            'blnlaluteknikgeodesigeologil' => $blnlaluteknikgeodesigeologil,
            'blnlaluteknikgeodesigeologip' => $blnlaluteknikgeodesigeologip,
            'blniniteknikgeodesigeologil' => $blniniteknikgeodesigeologil,
            'blniniteknikgeodesigeologip' => $blniniteknikgeodesigeologip,
            'penempatanblniniteknikgeodesigeologil' => $penempatanblniniteknikgeodesigeologil,
            'penempatanblniniteknikgeodesigeologip' => $penempatanblniniteknikgeodesigeologip,
            'dihapusblniniteknikgeodesigeologil' => $dihapusblniniteknikgeodesigeologil,
            'dihapusblniniteknikgeodesigeologip' => $dihapusblniniteknikgeodesigeologip,
            // ======================================================================

               //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================teknikkimia======================================================
            'blnlaluteknikkimial' => $blnlaluteknikkimial,
            'blnlaluteknikkimiap' => $blnlaluteknikkimiap,
            'blniniteknikkimial' => $blniniteknikkimial,
            'blniniteknikkimiap' => $blniniteknikkimiap,
            'penempatanblniniteknikkimial' => $penempatanblniniteknikkimial,
            'penempatanblniniteknikkimiap' => $penempatanblniniteknikkimiap,
            'dihapusblniniteknikkimial' => $dihapusblniniteknikkimial,
            'dihapusblniniteknikkimiap' => $dihapusblniniteknikkimiap,
            // ======================================================================

            //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================tekniksipil======================================================
            'blnlalutekniksipill' => $blnlalutekniksipill,
            'blnlalutekniksipilp' => $blnlalutekniksipilp,
            'blninitekniksipill' => $blninitekniksipill,
            'blninitekniksipilp' => $blninitekniksipilp,
            'penempatanblninitekniksipill' => $penempatanblninitekniksipill,
            'penempatanblninitekniksipilp' => $penempatanblninitekniksipilp,
            'dihapusblninitekniksipill' => $dihapusblninitekniksipill,
            'dihapusblninitekniksipilp' => $dihapusblninitekniksipilp,
            // ======================================================================

             //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================arsitektur======================================================
            'blnlaluarsitekturl' => $blnlaluarsitekturl,
            'blnlaluarsitekturp' => $blnlaluarsitekturp,
            'blniniarsitekturl' => $blniniarsitekturl,
            'blniniarsitekturp' => $blniniarsitekturp,
            'penempatanblniniarsitekturl' => $penempatanblniniarsitekturl,
            'penempatanblniniarsitekturp' => $penempatanblniniarsitekturp,
            'dihapusblniniarsitekturl' => $dihapusblniniarsitekturl,
            'dihapusblniniarsitekturp' => $dihapusblniniarsitekturp,
            // ======================================================================

                //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================tekniklistrik======================================================
            'blnlalutekniklistrikl' => $blnlalutekniklistrikl,
            'blnlalutekniklistrikp' => $blnlalutekniklistrikp,
            'blninitekniklistrikl' => $blninitekniklistrikl,
            'blninitekniklistrikp' => $blninitekniklistrikp,
            'penempatanblninitekniklistrikl' => $penempatanblninitekniklistrikl,
            'penempatanblninitekniklistrikp' => $penempatanblninitekniklistrikp,
            'dihapusblninitekniklistrikl' => $dihapusblninitekniklistrikl,
            'dihapusblninitekniklistrikp' => $dihapusblninitekniklistrikp,
            // ======================================================================

            //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================teknikmesin======================================================
            'blnlaluteknikmesinl' => $blnlaluteknikmesinl,
            'blnlaluteknikmesinp' => $blnlaluteknikmesinp,
            'blniniteknikmesinl' => $blniniteknikmesinl,
            'blniniteknikmesinp' => $blniniteknikmesinp,
            'penempatanblniniteknikmesinl' => $penempatanblniniteknikmesinl,
            'penempatanblniniteknikmesinp' => $penempatanblniniteknikmesinp,
            'dihapusblniniteknikmesinl' => $dihapusblniniteknikmesinl,
            'dihapusblniniteknikmesinp' => $dihapusblniniteknikmesinp,
            // ======================================================================


            //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================teknikindustri======================================================
            'blnlaluteknikindustril' => $blnlaluteknikindustril,
            'blnlaluteknikindustrip' => $blnlaluteknikindustrip,
            'blniniteknikindustril' => $blniniteknikindustril,
            'blniniteknikindustrip' => $blniniteknikindustrip,
            'penempatanblniniteknikindustril' => $penempatanblniniteknikindustril,
            'penempatanblniniteknikindustrip' => $penempatanblniniteknikindustrip,
            'dihapusblniniteknikindustril' => $dihapusblniniteknikindustril,
            'dihapusblniniteknikindustrip' => $dihapusblniniteknikindustrip,
            // ======================================================================

                //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================tekniklogam======================================================
            'blnlalutekniklogaml' => $blnlalutekniklogaml,
            'blnlalutekniklogamp' => $blnlalutekniklogamp,
            'blninitekniklogaml' => $blninitekniklogaml,
            'blninitekniklogamp' => $blninitekniklogamp,
            'penempatanblninitekniklogaml' => $penempatanblninitekniklogaml,
            'penempatanblninitekniklogamp' => $penempatanblninitekniklogamp,
            'dihapusblninitekniklogaml' => $dihapusblninitekniklogaml,
            'dihapusblninitekniklogamp' => $dihapusblninitekniklogamp,
            // ======================================================================

               //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================teknikpertambangandanminyak3======================================================
            'blnlaluteknikpertambangandanminyak3l' => $blnlaluteknikpertambangandanminyak3l,
            'blnlaluteknikpertambangandanminyak3p' => $blnlaluteknikpertambangandanminyak3p,
            'blniniteknikpertambangandanminyak3l' => $blniniteknikpertambangandanminyak3l,
            'blniniteknikpertambangandanminyak3p' => $blniniteknikpertambangandanminyak3p,
            'penempatanblniniteknikpertambangandanminyak3l' => $penempatanblniniteknikpertambangandanminyak3l,
            'penempatanblniniteknikpertambangandanminyak3p' => $penempatanblniniteknikpertambangandanminyak3p,
            'dihapusblniniteknikpertambangandanminyak3l' => $dihapusblniniteknikpertambangandanminyak3l,
            'dihapusblniniteknikpertambangandanminyak3p' => $dihapusblniniteknikpertambangandanminyak3p,
            // ======================================================================

            //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================fisikateknik3======================================================
            'blnlalufisikateknik3l' => $blnlalufisikateknik3l,
            'blnlalufisikateknik3p' => $blnlalufisikateknik3p,
            'blninifisikateknik3l' => $blninifisikateknik3l,
            'blninifisikateknik3p' => $blninifisikateknik3p,
            'penempatanblninifisikateknik3l' => $penempatanblninifisikateknik3l,
            'penempatanblninifisikateknik3p' => $penempatanblninifisikateknik3p,
            'dihapusblninifisikateknik3l' => $dihapusblninifisikateknik3l,
            'dihapusblninifisikateknik3p' => $dihapusblninifisikateknik3p,
            // ======================================================================

               //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================tekniknuklir3======================================================
            'blnlalutekniknuklir3l' => $blnlalutekniknuklir3l,
            'blnlalutekniknuklir3p' => $blnlalutekniknuklir3p,
            'blninitekniknuklir3l' => $blninitekniknuklir3l,
            'blninitekniknuklir3p' => $blninitekniknuklir3p,
            'penempatanblninitekniknuklir3l' => $penempatanblninitekniknuklir3l,
            'penempatanblninitekniknuklir3p' => $penempatanblninitekniknuklir3p,
            'dihapusblninitekniknuklir3l' => $dihapusblninitekniknuklir3l,
            'dihapusblninitekniknuklir3p' => $dihapusblninitekniknuklir3p,
            // ======================================================================
             //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================teknologitekstil3======================================================
            'blnlaluteknologitekstil3l' => $blnlaluteknologitekstil3l,
            'blnlaluteknologitekstil3p' => $blnlaluteknologitekstil3p,
            'blniniteknologitekstil3l' => $blniniteknologitekstil3l,
            'blniniteknologitekstil3p' => $blniniteknologitekstil3p,
            'penempatanblniniteknologitekstil3l' => $penempatanblniniteknologitekstil3l,
            'penempatanblniniteknologitekstil3p' => $penempatanblniniteknologitekstil3p,
            'dihapusblniniteknologitekstil3l' => $dihapusblniniteknologitekstil3l,
            'dihapusblniniteknologitekstil3p' => $dihapusblniniteknologitekstil3p,
            // ======================================================================

               //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================teknologigrafika3======================================================
            'blnlaluteknologigrafika3l' => $blnlaluteknologigrafika3l,
            'blnlaluteknologigrafika3p' => $blnlaluteknologigrafika3p,
            'blniniteknologigrafika3l' => $blniniteknologigrafika3l,
            'blniniteknologigrafika3p' => $blniniteknologigrafika3p,
            'penempatanblniniteknologigrafika3l' => $penempatanblniniteknologigrafika3l,
            'penempatanblniniteknologigrafika3p' => $penempatanblniniteknologigrafika3p,
            'dihapusblniniteknologigrafika3l' => $dihapusblniniteknologigrafika3l,
            'dihapusblniniteknologigrafika3p' => $dihapusblniniteknologigrafika3p,
            // ======================================================================

                           //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================teknologigasdanminyakbumi3======================================================
            'blnlaluteknologigasdanminyakbumi3l' => $blnlaluteknologigasdanminyakbumi3l,
            'blnlaluteknologigasdanminyakbumi3p' => $blnlaluteknologigasdanminyakbumi3p,
            'blniniteknologigasdanminyakbumi3l' => $blniniteknologigasdanminyakbumi3l,
            'blniniteknologigasdanminyakbumi3p' => $blniniteknologigasdanminyakbumi3p,
            'penempatanblniniteknologigasdanminyakbumi3l' => $penempatanblniniteknologigasdanminyakbumi3l,
            'penempatanblniniteknologigasdanminyakbumi3p' => $penempatanblniniteknologigasdanminyakbumi3p,
            'dihapusblniniteknologigasdanminyakbumi3l' => $dihapusblniniteknologigasdanminyakbumi3l,
            'dihapusblniniteknologigasdanminyakbumi3p' => $dihapusblniniteknologigasdanminyakbumi3p,
            // ======================================================================

                       //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================teknologilainnya3======================================================
            'blnlaluteknologilainnya3l' => $blnlaluteknologilainnya3l,
            'blnlaluteknologilainnya3p' => $blnlaluteknologilainnya3p,
            'blniniteknologilainnya3l' => $blniniteknologilainnya3l,
            'blniniteknologilainnya3p' => $blniniteknologilainnya3p,
            'penempatanblniniteknologilainnya3l' => $penempatanblniniteknologilainnya3l,
            'penempatanblniniteknologilainnya3p' => $penempatanblniniteknologilainnya3p,
            'dihapusblniniteknologilainnya3l' => $dihapusblniniteknologilainnya3l,
            'dihapusblniniteknologilainnya3p' => $dihapusblniniteknologilainnya3p,
            // ======================================================================

             //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================teknologitakterdefinisi3======================================================
            'blnlaluteknologitakterdefinisi3l' => $blnlaluteknologitakterdefinisi3l,
            'blnlaluteknologitakterdefinisi3p' => $blnlaluteknologitakterdefinisi3p,
            'blniniteknologitakterdefinisi3l' => $blniniteknologitakterdefinisi3l,
            'blniniteknologitakterdefinisi3p' => $blniniteknologitakterdefinisi3p,
            'penempatanblniniteknologitakterdefinisi3l' => $penempatanblniniteknologitakterdefinisi3l,
            'penempatanblniniteknologitakterdefinisi3p' => $penempatanblniniteknologitakterdefinisi3p,
            'dihapusblniniteknologitakterdefinisi3l' => $dihapusblniniteknologitakterdefinisi3l,
            'dihapusblniniteknologitakterdefinisi3p' => $dihapusblniniteknologitakterdefinisi3p,
            // ======================================================================

             //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================pertanianumum3======================================================
            'blnlalupertanianumum3l' => $blnlalupertanianumum3l,
            'blnlalupertanianumum3p' => $blnlalupertanianumum3p,
            'blninipertanianumum3l' => $blninipertanianumum3l,
            'blninipertanianumum3p' => $blninipertanianumum3p,
            'penempatanblninipertanianumum3l' => $penempatanblninipertanianumum3l,
            'penempatanblninipertanianumum3p' => $penempatanblninipertanianumum3p,
            'dihapusblninipertanianumum3l' => $dihapusblninipertanianumum3l,
            'dihapusblninipertanianumum3p' => $dihapusblninipertanianumum3p,
            // ======================================================================

             //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================hortikultura3======================================================
            'blnlaluhortikultura3l' => $blnlaluhortikultura3l,
            'blnlaluhortikultura3p' => $blnlaluhortikultura3p,
            'blninihortikultura3l' => $blninihortikultura3l,
            'blninihortikultura3p' => $blninihortikultura3p,
            'penempatanblninihortikultura3l' => $penempatanblninihortikultura3l,
            'penempatanblninihortikultura3p' => $penempatanblninihortikultura3p,
            'dihapusblninihortikultura3l' => $dihapusblninihortikultura3l,
            'dihapusblninihortikultura3p' => $dihapusblninihortikultura3p,
            // ======================================================================

             //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================hasilpertanian3======================================================
            'blnlaluhasilpertanian3l' => $blnlaluhasilpertanian3l,
            'blnlaluhasilpertanian3p' => $blnlaluhasilpertanian3p,
            'blninihasilpertanian3l' => $blninihasilpertanian3l,
            'blninihasilpertanian3p' => $blninihasilpertanian3p,
            'penempatanblninihasilpertanian3l' => $penempatanblninihasilpertanian3l,
            'penempatanblninihasilpertanian3p' => $penempatanblninihasilpertanian3p,
            'dihapusblninihasilpertanian3l' => $dihapusblninihasilpertanian3l,
            'dihapusblninihasilpertanian3p' => $dihapusblninihasilpertanian3p,
            // ======================================================================

                 //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================ekonomipertanian3======================================================
            'blnlaluekonomipertanian3l' => $blnlaluekonomipertanian3l,
            'blnlaluekonomipertanian3p' => $blnlaluekonomipertanian3p,
            'blniniekonomipertanian3l' => $blniniekonomipertanian3l,
            'blniniekonomipertanian3p' => $blniniekonomipertanian3p,
            'penempatanblniniekonomipertanian3l' => $penempatanblniniekonomipertanian3l,
            'penempatanblniniekonomipertanian3p' => $penempatanblniniekonomipertanian3p,
            'dihapusblniniekonomipertanian3l' => $dihapusblniniekonomipertanian3l,
            'dihapusblniniekonomipertanian3p' => $dihapusblniniekonomipertanian3p,
            // ======================================================================

              //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================teknologidanilmumakanan3======================================================
            'blnlaluteknologidanilmumakanan3l' => $blnlaluteknologidanilmumakanan3l,
            'blnlaluteknologidanilmumakanan3p' => $blnlaluteknologidanilmumakanan3p,
            'blniniteknologidanilmumakanan3l' => $blniniteknologidanilmumakanan3l,
            'blniniteknologidanilmumakanan3p' => $blniniteknologidanilmumakanan3p,
            'penempatanblniniteknologidanilmumakanan3l' => $penempatanblniniteknologidanilmumakanan3l,
            'penempatanblniniteknologidanilmumakanan3p' => $penempatanblniniteknologidanilmumakanan3p,
            'dihapusblniniteknologidanilmumakanan3l' => $dihapusblniniteknologidanilmumakanan3l,
            'dihapusblniniteknologidanilmumakanan3p' => $dihapusblniniteknologidanilmumakanan3p,
            // ======================================================================

               //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================kedokteranhewan3======================================================
            'blnlalukedokteranhewan3l' => $blnlalukedokteranhewan3l,
            'blnlalukedokteranhewan3p' => $blnlalukedokteranhewan3p,
            'blninikedokteranhewan3l' => $blninikedokteranhewan3l,
            'blninikedokteranhewan3p' => $blninikedokteranhewan3p,
            'penempatanblninikedokteranhewan3l' => $penempatanblninikedokteranhewan3l,
            'penempatanblninikedokteranhewan3p' => $penempatanblninikedokteranhewan3p,
            'dihapusblninikedokteranhewan3l' => $dihapusblninikedokteranhewan3l,
            'dihapusblninikedokteranhewan3p' => $dihapusblninikedokteranhewan3p,
            // ======================================================================


             //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================peternakan3======================================================
            'blnlalupeternakan3l' => $blnlalupeternakan3l,
            'blnlalupeternakan3p' => $blnlalupeternakan3p,
            'blninipeternakan3l' => $blninipeternakan3l,
            'blninipeternakan3p' => $blninipeternakan3p,
            'penempatanblninipeternakan3l' => $penempatanblninipeternakan3l,
            'penempatanblninipeternakan3p' => $penempatanblninipeternakan3p,
            'dihapusblninipeternakan3l' => $dihapusblninipeternakan3l,
            'dihapusblninipeternakan3p' => $dihapusblninipeternakan3p,
            // ======================================================================


             //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================perikanan3======================================================
            'blnlaluperikanan3l' => $blnlaluperikanan3l,
            'blnlaluperikanan3p' => $blnlaluperikanan3p,
            'blniniperikanan3l' => $blniniperikanan3l,
            'blniniperikanan3p' => $blniniperikanan3p,
            'penempatanblniniperikanan3l' => $penempatanblniniperikanan3l,
            'penempatanblniniperikanan3p' => $penempatanblniniperikanan3p,
            'dihapusblniniperikanan3l' => $dihapusblniniperikanan3l,
            'dihapusblniniperikanan3p' => $dihapusblniniperikanan3p,
            // ======================================================================

             //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================kehutanan3======================================================
            'blnlalukehutanan3l' => $blnlalukehutanan3l,
            'blnlalukehutanan3p' => $blnlalukehutanan3p,
            'blninikehutanan3l' => $blninikehutanan3l,
            'blninikehutanan3p' => $blninikehutanan3p,
            'penempatanblninikehutanan3l' => $penempatanblninikehutanan3l,
            'penempatanblninikehutanan3p' => $penempatanblninikehutanan3p,
            'dihapusblninikehutanan3l' => $dihapusblninikehutanan3l,
            'dihapusblninikehutanan3p' => $dihapusblninikehutanan3p,
            // ======================================================================

              //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================pertanianlainnya3======================================================
            'blnlalupertanianlainnya3l' => $blnlalupertanianlainnya3l,
            'blnlalupertanianlainnya3p' => $blnlalupertanianlainnya3p,
            'blninipertanianlainnya3l' => $blninipertanianlainnya3l,
            'blninipertanianlainnya3p' => $blninipertanianlainnya3p,
            'penempatanblninipertanianlainnya3l' => $penempatanblninipertanianlainnya3l,
            'penempatanblninipertanianlainnya3p' => $penempatanblninipertanianlainnya3p,
            'dihapusblninipertanianlainnya3l' => $dihapusblninipertanianlainnya3l,
            'dihapusblninipertanianlainnya3p' => $dihapusblninipertanianlainnya3p,
            // ======================================================================

            //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================pertaniantakterdefinisi3======================================================
            'blnlalupertaniantakterdefinisi3l' => $blnlalupertaniantakterdefinisi3l,
            'blnlalupertaniantakterdefinisi3p' => $blnlalupertaniantakterdefinisi3p,
            'blninipertaniantakterdefinisi3l' => $blninipertaniantakterdefinisi3l,
            'blninipertaniantakterdefinisi3p' => $blninipertaniantakterdefinisi3p,
            'penempatanblninipertaniantakterdefinisi3l' => $penempatanblninipertaniantakterdefinisi3l,
            'penempatanblninipertaniantakterdefinisi3p' => $penempatanblninipertaniantakterdefinisi3p,
            'dihapusblninipertaniantakterdefinisi3l' => $dihapusblninipertaniantakterdefinisi3l,
            'dihapusblninipertaniantakterdefinisi3p' => $dihapusblninipertaniantakterdefinisi3p,
            // ======================================================================

                //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - KESEHATAN======================================================
             // ================kedokteranumum3======================================================
            'blnlalukedokteranumum3l' => $blnlalukedokteranumum3l,
            'blnlalukedokteranumum3p' => $blnlalukedokteranumum3p,
            'blninikedokteranumum3l' => $blninikedokteranumum3l,
            'blninikedokteranumum3p' => $blninikedokteranumum3p,
            'penempatanblninikedokteranumum3l' => $penempatanblninikedokteranumum3l,
            'penempatanblninikedokteranumum3p' => $penempatanblninikedokteranumum3p,
            'dihapusblninikedokteranumum3l' => $dihapusblninikedokteranumum3l,
            'dihapusblninikedokteranumum3p' => $dihapusblninikedokteranumum3p,
            // ======================================================================

                   //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - KESEHATAN======================================================
             // ================kedokterangigi3======================================================
            'blnlalukedokterangigi3l' => $blnlalukedokterangigi3l,
            'blnlalukedokterangigi3p' => $blnlalukedokterangigi3p,
            'blninikedokterangigi3l' => $blninikedokterangigi3l,
            'blninikedokterangigi3p' => $blninikedokterangigi3p,
            'penempatanblninikedokterangigi3l' => $penempatanblninikedokterangigi3l,
            'penempatanblninikedokterangigi3p' => $penempatanblninikedokterangigi3p,
            'dihapusblninikedokterangigi3l' => $dihapusblninikedokterangigi3l,
            'dihapusblninikedokterangigi3p' => $dihapusblninikedokterangigi3p,
            // ======================================================================


                   //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - KESEHATAN======================================================
             // ================farmasi3======================================================
            'blnlalufarmasi3l' => $blnlalufarmasi3l,
            'blnlalufarmasi3p' => $blnlalufarmasi3p,
            'blninifarmasi3l' => $blninifarmasi3l,
            'blninifarmasi3p' => $blninifarmasi3p,
            'penempatanblninifarmasi3l' => $penempatanblninifarmasi3l,
            'penempatanblninifarmasi3p' => $penempatanblninifarmasi3p,
            'dihapusblninifarmasi3l' => $dihapusblninifarmasi3l,
            'dihapusblninifarmasi3p' => $dihapusblninifarmasi3p,
            // ======================================================================


             //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - KESEHATAN======================================================
             // ================penilikkesehatanhyginegizi3======================================================
            'blnlalupenilikkesehatanhyginegizi3l' => $blnlalupenilikkesehatanhyginegizi3l,
            'blnlalupenilikkesehatanhyginegizi3p' => $blnlalupenilikkesehatanhyginegizi3p,
            'blninipenilikkesehatanhyginegizi3l' => $blninipenilikkesehatanhyginegizi3l,
            'blninipenilikkesehatanhyginegizi3p' => $blninipenilikkesehatanhyginegizi3p,
            'penempatanblninipenilikkesehatanhyginegizi3l' => $penempatanblninipenilikkesehatanhyginegizi3l,
            'penempatanblninipenilikkesehatanhyginegizi3p' => $penempatanblninipenilikkesehatanhyginegizi3p,
            'dihapusblninipenilikkesehatanhyginegizi3l' => $dihapusblninipenilikkesehatanhyginegizi3l,
            'dihapusblninipenilikkesehatanhyginegizi3p' => $dihapusblninipenilikkesehatanhyginegizi3p,
            // ======================================================================

                 //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - KESEHATAN======================================================
             // ================anastesi3======================================================
            'blnlaluanastesi3l' => $blnlaluanastesi3l,
            'blnlaluanastesi3p' => $blnlaluanastesi3p,
            'blninianastesi3l' => $blninianastesi3l,
            'blninianastesi3p' => $blninianastesi3p,
            'penempatanblninianastesi3l' => $penempatanblninianastesi3l,
            'penempatanblninianastesi3p' => $penempatanblninianastesi3p,
            'dihapusblninianastesi3l' => $dihapusblninianastesi3l,
            'dihapusblninianastesi3p' => $dihapusblninianastesi3p,
            // ======================================================================

             //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - KESEHATAN======================================================
             // ================fisioterapi3======================================================
            'blnlalufisioterapi3l' => $blnlalufisioterapi3l,
            'blnlalufisioterapi3p' => $blnlalufisioterapi3p,
            'blninifisioterapi3l' => $blninifisioterapi3l,
            'blninifisioterapi3p' => $blninifisioterapi3p,
            'penempatanblninifisioterapi3l' => $penempatanblninifisioterapi3l,
            'penempatanblninifisioterapi3p' => $penempatanblninifisioterapi3p,
            'dihapusblninifisioterapi3l' => $dihapusblninifisioterapi3l,
            'dihapusblninifisioterapi3p' => $dihapusblninifisioterapi3p,
            // ======================================================================

                //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - KESEHATAN======================================================
             // ================perawat3======================================================
            'blnlaluperawat3l' => $blnlaluperawat3l,
            'blnlaluperawat3p' => $blnlaluperawat3p,
            'blniniperawat3l' => $blniniperawat3l,
            'blniniperawat3p' => $blniniperawat3p,
            'penempatanblniniperawat3l' => $penempatanblniniperawat3l,
            'penempatanblniniperawat3p' => $penempatanblniniperawat3p,
            'dihapusblniniperawat3l' => $dihapusblniniperawat3l,
            'dihapusblniniperawat3p' => $dihapusblniniperawat3p,
            // ======================================================================

               //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - KESEHATAN======================================================
             // ================penatarontgen3======================================================
            'blnlalupenatarontgen3l' => $blnlalupenatarontgen3l,
            'blnlalupenatarontgen3p' => $blnlalupenatarontgen3p,
            'blninipenatarontgen3l' => $blninipenatarontgen3l,
            'blninipenatarontgen3p' => $blninipenatarontgen3p,
            'penempatanblninipenatarontgen3l' => $penempatanblninipenatarontgen3l,
            'penempatanblninipenatarontgen3p' => $penempatanblninipenatarontgen3p,
            'dihapusblninipenatarontgen3l' => $dihapusblninipenatarontgen3l,
            'dihapusblninipenatarontgen3p' => $dihapusblninipenatarontgen3p,
            // ======================================================================

              //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - KESEHATAN======================================================
             // ================kesehatanlainnya3======================================================
            'blnlalukesehatanlainnya3l' => $blnlalukesehatanlainnya3l,
            'blnlalukesehatanlainnya3p' => $blnlalukesehatanlainnya3p,
            'blninikesehatanlainnya3l' => $blninikesehatanlainnya3l,
            'blninikesehatanlainnya3p' => $blninikesehatanlainnya3p,
            'penempatanblninikesehatanlainnya3l' => $penempatanblninikesehatanlainnya3l,
            'penempatanblninikesehatanlainnya3p' => $penempatanblninikesehatanlainnya3p,
            'dihapusblninikesehatanlainnya3l' => $dihapusblninikesehatanlainnya3l,
            'dihapusblninikesehatanlainnya3p' => $dihapusblninikesehatanlainnya3p,
            // ======================================================================
              //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - KESEHATAN======================================================
             // ================kesehatantakterdefinisi3======================================================
            'blnlalukesehatantakterdefinisi3l' => $blnlalukesehatantakterdefinisi3l,
            'blnlalukesehatantakterdefinisi3p' => $blnlalukesehatantakterdefinisi3p,
            'blninikesehatantakterdefinisi3l' => $blninikesehatantakterdefinisi3l,
            'blninikesehatantakterdefinisi3p' => $blninikesehatantakterdefinisi3p,
            'penempatanblninikesehatantakterdefinisi3l' => $penempatanblninikesehatantakterdefinisi3l,
            'penempatanblninikesehatantakterdefinisi3p' => $penempatanblninikesehatantakterdefinisi3p,
            'dihapusblninikesehatantakterdefinisi3l' => $dihapusblninikesehatantakterdefinisi3l,
            'dihapusblninikesehatantakterdefinisi3p' => $dihapusblninikesehatantakterdefinisi3p,
            // ======================================================================


              //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
             // ================ekonomi3======================================================
            'blnlaluekonomi3l' => $blnlaluekonomi3l,
            'blnlaluekonomi3p' => $blnlaluekonomi3p,
            'blniniekonomi3l' => $blniniekonomi3l,
            'blniniekonomi3p' => $blniniekonomi3p,
            'penempatanblniniekonomi3l' => $penempatanblniniekonomi3l,
            'penempatanblniniekonomi3p' => $penempatanblniniekonomi3p,
            'dihapusblniniekonomi3l' => $dihapusblniniekonomi3l,
            'dihapusblniniekonomi3p' => $dihapusblniniekonomi3p,
            // ======================================================================

               //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
             // ================akuntansi3======================================================
            'blnlaluakuntansi3l' => $blnlaluakuntansi3l,
            'blnlaluakuntansi3p' => $blnlaluakuntansi3p,
            'blniniakuntansi3l' => $blniniakuntansi3l,
            'blniniakuntansi3p' => $blniniakuntansi3p,
            'penempatanblniniakuntansi3l' => $penempatanblniniakuntansi3l,
            'penempatanblniniakuntansi3p' => $penempatanblniniakuntansi3p,
            'dihapusblniniakuntansi3l' => $dihapusblniniakuntansi3l,
            'dihapusblniniakuntansi3p' => $dihapusblniniakuntansi3p,
            // ======================================================================


               //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
             // ================keuangandanpajak3======================================================
            'blnlalukeuangandanpajak3l' => $blnlalukeuangandanpajak3l,
            'blnlalukeuangandanpajak3p' => $blnlalukeuangandanpajak3p,
            'blninikeuangandanpajak3l' => $blninikeuangandanpajak3l,
            'blninikeuangandanpajak3p' => $blninikeuangandanpajak3p,
            'penempatanblninikeuangandanpajak3l' => $penempatanblninikeuangandanpajak3l,
            'penempatanblninikeuangandanpajak3p' => $penempatanblninikeuangandanpajak3p,
            'dihapusblninikeuangandanpajak3l' => $dihapusblninikeuangandanpajak3l,
            'dihapusblninikeuangandanpajak3p' => $dihapusblninikeuangandanpajak3p,
            // ======================================================================

              //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
             // ================hukum3======================================================
            'blnlaluhukum3l' => $blnlaluhukum3l,
            'blnlaluhukum3p' => $blnlaluhukum3p,
            'blninihukum3l' => $blninihukum3l,
            'blninihukum3p' => $blninihukum3p,
            'penempatanblninihukum3l' => $penempatanblninihukum3l,
            'penempatanblninihukum3p' => $penempatanblninihukum3p,
            'dihapusblninihukum3l' => $dihapusblninihukum3l,
            'dihapusblninihukum3p' => $dihapusblninihukum3p,
            // ======================================================================

             //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
             // ================ilmupolitik3======================================================
            'blnlaluilmupolitik3l' => $blnlaluilmupolitik3l,
            'blnlaluilmupolitik3p' => $blnlaluilmupolitik3p,
            'blniniilmupolitik3l' => $blniniilmupolitik3l,
            'blniniilmupolitik3p' => $blniniilmupolitik3p,
            'penempatanblniniilmupolitik3l' => $penempatanblniniilmupolitik3l,
            'penempatanblniniilmupolitik3p' => $penempatanblniniilmupolitik3p,
            'dihapusblniniilmupolitik3l' => $dihapusblniniilmupolitik3l,
            'dihapusblniniilmupolitik3p' => $dihapusblniniilmupolitik3p,
            // ======================================================================

            //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
             // ================sosiologi3======================================================
            'blnlalusosiologi3l' => $blnlalusosiologi3l,
            'blnlalusosiologi3p' => $blnlalusosiologi3p,
            'blninisosiologi3l' => $blninisosiologi3l,
            'blninisosiologi3p' => $blninisosiologi3p,
            'penempatanblninisosiologi3l' => $penempatanblninisosiologi3l,
            'penempatanblninisosiologi3p' => $penempatanblninisosiologi3p,
            'dihapusblninisosiologi3l' => $dihapusblninisosiologi3l,
            'dihapusblninisosiologi3p' => $dihapusblninisosiologi3p,
            // ======================================================================

            //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
             // ================antropologi3======================================================
            'blnlaluantropologi3l' => $blnlaluantropologi3l,
            'blnlaluantropologi3p' => $blnlaluantropologi3p,
            'blniniantropologi3l' => $blniniantropologi3l,
            'blniniantropologi3p' => $blniniantropologi3p,
            'penempatanblniniantropologi3l' => $penempatanblniniantropologi3l,
            'penempatanblniniantropologi3p' => $penempatanblniniantropologi3p,
            'dihapusblniniantropologi3l' => $dihapusblniniantropologi3l,
            'dihapusblniniantropologi3p' => $dihapusblniniantropologi3p,
            // ======================================================================


             //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
             // ================geografi3======================================================
            'blnlalugeografi3l' => $blnlalugeografi3l,
            'blnlalugeografi3p' => $blnlalugeografi3p,
            'blninigeografi3l' => $blninigeografi3l,
            'blninigeografi3p' => $blninigeografi3p,
            'penempatanblninigeografi3l' => $penempatanblninigeografi3l,
            'penempatanblninigeografi3p' => $penempatanblninigeografi3p,
            'dihapusblninigeografi3l' => $dihapusblninigeografi3l,
            'dihapusblninigeografi3p' => $dihapusblninigeografi3p,
            // ======================================================================

                 //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
             // ================administrasi3======================================================
            'blnlaluadministrasi3l' => $blnlaluadministrasi3l,
            'blnlaluadministrasi3p' => $blnlaluadministrasi3p,
            'blniniadministrasi3l' => $blniniadministrasi3l,
            'blniniadministrasi3p' => $blniniadministrasi3p,
            'penempatanblniniadministrasi3l' => $penempatanblniniadministrasi3l,
            'penempatanblniniadministrasi3p' => $penempatanblniniadministrasi3p,
            'dihapusblniniadministrasi3l' => $dihapusblniniadministrasi3l,
            'dihapusblniniadministrasi3p' => $dihapusblniniadministrasi3p,
            // ======================================================================

                //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
             // ================sekretaris3======================================================
            'blnlalusekretaris3l' => $blnlalusekretaris3l,
            'blnlalusekretaris3p' => $blnlalusekretaris3p,
            'blninisekretaris3l' => $blninisekretaris3l,
            'blninisekretaris3p' => $blninisekretaris3p,
            'penempatanblninisekretaris3l' => $penempatanblninisekretaris3l,
            'penempatanblninisekretaris3p' => $penempatanblninisekretaris3p,
            'dihapusblninisekretaris3l' => $dihapusblninisekretaris3l,
            'dihapusblninisekretaris3p' => $dihapusblninisekretaris3p,
            // ======================================================================


                //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
             // ================manajement3======================================================
            'blnlalumanajement3l' => $blnlalumanajement3l,
            'blnlalumanajement3p' => $blnlalumanajement3p,
            'blninimanajement3l' => $blninimanajement3l,
            'blninimanajement3p' => $blninimanajement3p,
            'penempatanblninimanajement3l' => $penempatanblninimanajement3l,
            'penempatanblninimanajement3p' => $penempatanblninimanajement3p,
            'dihapusblninimanajement3l' => $dihapusblninimanajement3l,
            'dihapusblninimanajement3p' => $dihapusblninimanajement3p,
            // ======================================================================

                //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
             // ================psikologi3======================================================
            'blnlalupsikologi3l' => $blnlalupsikologi3l,
            'blnlalupsikologi3p' => $blnlalupsikologi3p,
            'blninipsikologi3l' => $blninipsikologi3l,
            'blninipsikologi3p' => $blninipsikologi3p,
            'penempatanblninipsikologi3l' => $penempatanblninipsikologi3l,
            'penempatanblninipsikologi3p' => $penempatanblninipsikologi3p,
            'dihapusblninipsikologi3l' => $dihapusblninipsikologi3l,
            'dihapusblninipsikologi3p' => $dihapusblninipsikologi3p,
            // ======================================================================


                //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
             // ================sejarah3======================================================
            'blnlalusejarah3l' => $blnlalusejarah3l,
            'blnlalusejarah3p' => $blnlalusejarah3p,
            'blninisejarah3l' => $blninisejarah3l,
            'blninisejarah3p' => $blninisejarah3p,
            'penempatanblninisejarah3l' => $penempatanblninisejarah3l,
            'penempatanblninisejarah3p' => $penempatanblninisejarah3p,
            'dihapusblninisejarah3l' => $dihapusblninisejarah3l,
            'dihapusblninisejarah3p' => $dihapusblninisejarah3p,
            // ======================================================================


              //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
             // ================bahasaindonesia3======================================================
            'blnlalubahasaindonesia3l' => $blnlalubahasaindonesia3l,
            'blnlalubahasaindonesia3p' => $blnlalubahasaindonesia3p,
            'blninibahasaindonesia3l' => $blninibahasaindonesia3l,
            'blninibahasaindonesia3p' => $blninibahasaindonesia3p,
            'penempatanblninibahasaindonesia3l' => $penempatanblninibahasaindonesia3l,
            'penempatanblninibahasaindonesia3p' => $penempatanblninibahasaindonesia3p,
            'dihapusblninibahasaindonesia3l' => $dihapusblninibahasaindonesia3l,
            'dihapusblninibahasaindonesia3p' => $dihapusblninibahasaindonesia3p,
            // ======================================================================

              //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
             // ================bahasadaerah3======================================================
            'blnlalubahasadaerah3l' => $blnlalubahasadaerah3l,
            'blnlalubahasadaerah3p' => $blnlalubahasadaerah3p,
            'blninibahasadaerah3l' => $blninibahasadaerah3l,
            'blninibahasadaerah3p' => $blninibahasadaerah3p,
            'penempatanblninibahasadaerah3l' => $penempatanblninibahasadaerah3l,
            'penempatanblninibahasadaerah3p' => $penempatanblninibahasadaerah3p,
            'dihapusblninibahasadaerah3l' => $dihapusblninibahasadaerah3l,
            'dihapusblninibahasadaerah3p' => $dihapusblninibahasadaerah3p,
            // ======================================================================

               //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
             // ================bahasainggris3======================================================
            'blnlalubahasainggris3l' => $blnlalubahasainggris3l,
            'blnlalubahasainggris3p' => $blnlalubahasainggris3p,
            'blninibahasainggris3l' => $blninibahasainggris3l,
            'blninibahasainggris3p' => $blninibahasainggris3p,
            'penempatanblninibahasainggris3l' => $penempatanblninibahasainggris3l,
            'penempatanblninibahasainggris3p' => $penempatanblninibahasainggris3p,
            'dihapusblninibahasainggris3l' => $dihapusblninibahasainggris3l,
            'dihapusblninibahasainggris3p' => $dihapusblninibahasainggris3p,
            // ======================================================================


               //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
             // ================bahasaarab3======================================================
            'blnlalubahasaarab3l' => $blnlalubahasaarab3l,
            'blnlalubahasaarab3p' => $blnlalubahasaarab3p,
            'blninibahasaarab3l' => $blninibahasaarab3l,
            'blninibahasaarab3p' => $blninibahasaarab3p,
            'penempatanblninibahasaarab3l' => $penempatanblninibahasaarab3l,
            'penempatanblninibahasaarab3p' => $penempatanblninibahasaarab3p,
            'dihapusblninibahasaarab3l' => $dihapusblninibahasaarab3l,
            'dihapusblninibahasaarab3p' => $dihapusblninibahasaarab3p,
            // ======================================================================

                 //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
             // ================bahasacina3======================================================
            'blnlalubahasacina3l' => $blnlalubahasacina3l,
            'blnlalubahasacina3p' => $blnlalubahasacina3p,
            'blninibahasacina3l' => $blninibahasacina3l,
            'blninibahasacina3p' => $blninibahasacina3p,
            'penempatanblninibahasacina3l' => $penempatanblninibahasacina3l,
            'penempatanblninibahasacina3p' => $penempatanblninibahasacina3p,
            'dihapusblninibahasacina3l' => $dihapusblninibahasacina3l,
            'dihapusblninibahasacina3p' => $dihapusblninibahasacina3p,
            // ======================================================================

              //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
             // ================bahasajepang3======================================================
            'blnlalubahasajepang3l' => $blnlalubahasajepang3l,
            'blnlalubahasajepang3p' => $blnlalubahasajepang3p,
            'blninibahasajepang3l' => $blninibahasajepang3l,
            'blninibahasajepang3p' => $blninibahasajepang3p,
            'penempatanblninibahasajepang3l' => $penempatanblninibahasajepang3l,
            'penempatanblninibahasajepang3p' => $penempatanblninibahasajepang3p,
            'dihapusblninibahasajepang3l' => $dihapusblninibahasajepang3l,
            'dihapusblninibahasajepang3p' => $dihapusblninibahasajepang3p,
            // ======================================================================

                 //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
             // ================keagamaandanilmuketuhananiain3======================================================
            'blnlalukeagamaandanilmuketuhananiain3l' => $blnlalukeagamaandanilmuketuhananiain3l,
            'blnlalukeagamaandanilmuketuhananiain3p' => $blnlalukeagamaandanilmuketuhananiain3p,
            'blninikeagamaandanilmuketuhananiain3l' => $blninikeagamaandanilmuketuhananiain3l,
            'blninikeagamaandanilmuketuhananiain3p' => $blninikeagamaandanilmuketuhananiain3p,
            'penempatanblninikeagamaandanilmuketuhananiain3l' => $penempatanblninikeagamaandanilmuketuhananiain3l,
            'penempatanblninikeagamaandanilmuketuhananiain3p' => $penempatanblninikeagamaandanilmuketuhananiain3p,
            'dihapusblninikeagamaandanilmuketuhananiain3l' => $dihapusblninikeagamaandanilmuketuhananiain3l,
            'dihapusblninikeagamaandanilmuketuhananiain3p' => $dihapusblninikeagamaandanilmuketuhananiain3p,
            // ======================================================================

                         //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
             // ================kesejahteraankeluarga3======================================================
            'blnlalukesejahteraankeluarga3l' => $blnlalukesejahteraankeluarga3l,
            'blnlalukesejahteraankeluarga3p' => $blnlalukesejahteraankeluarga3p,
            'blninikesejahteraankeluarga3l' => $blninikesejahteraankeluarga3l,
            'blninikesejahteraankeluarga3p' => $blninikesejahteraankeluarga3p,
            'penempatanblninikesejahteraankeluarga3l' => $penempatanblninikesejahteraankeluarga3l,
            'penempatanblninikesejahteraankeluarga3p' => $penempatanblninikesejahteraankeluarga3p,
            'dihapusblninikesejahteraankeluarga3l' => $dihapusblninikesejahteraankeluarga3l,
            'dihapusblninikesejahteraankeluarga3p' => $dihapusblninikesejahteraankeluarga3p,
            // ======================================================================

              //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
            // ================seni3======================================================
            'blnlaluseni3l' => $blnlaluseni3l,
            'blnlaluseni3p' => $blnlaluseni3p,
            'blniniseni3l' => $blniniseni3l,
            'blniniseni3p' => $blniniseni3p,
            'penempatanblniniseni3l' => $penempatanblniniseni3l,
            'penempatanblniniseni3p' => $penempatanblniniseni3p,
            'dihapusblniniseni3l' => $dihapusblniniseni3l,
            'dihapusblniniseni3p' => $dihapusblniniseni3p,
            // ======================================================================


            //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
            // ================publistikpenerangan3======================================================
            'blnlalupublistikpenerangan3l' => $blnlalupublistikpenerangan3l,
            'blnlalupublistikpenerangan3p' => $blnlalupublistikpenerangan3p,
            'blninipublistikpenerangan3l' => $blninipublistikpenerangan3l,
            'blninipublistikpenerangan3p' => $blninipublistikpenerangan3p,
            'penempatanblninipublistikpenerangan3l' => $penempatanblninipublistikpenerangan3l,
            'penempatanblninipublistikpenerangan3p' => $penempatanblninipublistikpenerangan3p,
            'dihapusblninipublistikpenerangan3l' => $dihapusblninipublistikpenerangan3l,
            'dihapusblninipublistikpenerangan3p' => $dihapusblninipublistikpenerangan3p,
            // =============================================================================================================



            //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
            // ================ilmukomunikasimassa3======================================================
            'blnlaluilmukomunikasimassa3l' => $blnlaluilmukomunikasimassa3l,
            'blnlaluilmukomunikasimassa3p' => $blnlaluilmukomunikasimassa3p,
            'blniniilmukomunikasimassa3l' => $blniniilmukomunikasimassa3l,
            'blniniilmukomunikasimassa3p' => $blniniilmukomunikasimassa3p,
            'penempatanblniniilmukomunikasimassa3l' => $penempatanblniniilmukomunikasimassa3l,
            'penempatanblniniilmukomunikasimassa3p' => $penempatanblniniilmukomunikasimassa3p,
            'dihapusblniniilmukomunikasimassa3l' => $dihapusblniniilmukomunikasimassa3l,
            'dihapusblniniilmukomunikasimassa3p' => $dihapusblniniilmukomunikasimassa3p,
            // =============================================================================================================
             //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
            // ================perpustakaan3======================================================
            'blnlaluperpustakaan3l' => $blnlaluperpustakaan3l,
            'blnlaluperpustakaan3p' => $blnlaluperpustakaan3p,
            'blniniperpustakaan3l' => $blniniperpustakaan3l,
            'blniniperpustakaan3p' => $blniniperpustakaan3p,
            'penempatanblniniperpustakaan3l' => $penempatanblniniperpustakaan3l,
            'penempatanblniniperpustakaan3p' => $penempatanblniniperpustakaan3p,
            'dihapusblniniperpustakaan3l' => $dihapusblniniperpustakaan3l,
            'dihapusblniniperpustakaan3p' => $dihapusblniniperpustakaan3p,
            // =============================================================================================================

               //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
            // ================anakbuahkapaldanteknisipelayaran3======================================================
            'blnlaluanakbuahkapaldanteknisipelayaran3l' => $blnlaluanakbuahkapaldanteknisipelayaran3l,
            'blnlaluanakbuahkapaldanteknisipelayaran3p' => $blnlaluanakbuahkapaldanteknisipelayaran3p,
            'blninianakbuahkapaldanteknisipelayaran3l' => $blninianakbuahkapaldanteknisipelayaran3l,
            'blninianakbuahkapaldanteknisipelayaran3p' => $blninianakbuahkapaldanteknisipelayaran3p,
            'penempatanblninianakbuahkapaldanteknisipelayaran3l' => $penempatanblninianakbuahkapaldanteknisipelayaran3l,
            'penempatanblninianakbuahkapaldanteknisipelayaran3p' => $penempatanblninianakbuahkapaldanteknisipelayaran3p,
            'dihapusblninianakbuahkapaldanteknisipelayaran3l' => $dihapusblninianakbuahkapaldanteknisipelayaran3l,
            'dihapusblninianakbuahkapaldanteknisipelayaran3p' => $dihapusblninianakbuahkapaldanteknisipelayaran3p,
            // =============================================================================================================

             //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
            // ================posdantelekomunikasi3======================================================
            'blnlaluposdantelekomunikasi3l' => $blnlaluposdantelekomunikasi3l,
            'blnlaluposdantelekomunikasi3p' => $blnlaluposdantelekomunikasi3p,
            'blniniposdantelekomunikasi3l' => $blniniposdantelekomunikasi3l,
            'blniniposdantelekomunikasi3p' => $blniniposdantelekomunikasi3p,
            'penempatanblniniposdantelekomunikasi3l' => $penempatanblniniposdantelekomunikasi3l,
            'penempatanblniniposdantelekomunikasi3p' => $penempatanblniniposdantelekomunikasi3p,
            'dihapusblniniposdantelekomunikasi3l' => $dihapusblniniposdantelekomunikasi3l,
            'dihapusblniniposdantelekomunikasi3p' => $dihapusblniniposdantelekomunikasi3p,
            // =============================================================================================================

               //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
            // ================hotelrestorandanparawisata3======================================================
            'blnlaluhotelrestorandanparawisata3l' => $blnlaluhotelrestorandanparawisata3l,
            'blnlaluhotelrestorandanparawisata3p' => $blnlaluhotelrestorandanparawisata3p,
            'blninihotelrestorandanparawisata3l' => $blninihotelrestorandanparawisata3l,
            'blninihotelrestorandanparawisata3p' => $blninihotelrestorandanparawisata3p,
            'penempatanblninihotelrestorandanparawisata3l' => $penempatanblninihotelrestorandanparawisata3l,
            'penempatanblninihotelrestorandanparawisata3p' => $penempatanblninihotelrestorandanparawisata3p,
            'dihapusblninihotelrestorandanparawisata3l' => $dihapusblninihotelrestorandanparawisata3l,
            'dihapusblninihotelrestorandanparawisata3p' => $dihapusblninihotelrestorandanparawisata3p,
            // =============================================================================================================


            //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
            // ================ilmupengetahuansosialbudayalainnya3======================================================
            'blnlaluilmupengetahuansosialbudayalainnya3l' => $blnlaluilmupengetahuansosialbudayalainnya3l,
            'blnlaluilmupengetahuansosialbudayalainnya3p' => $blnlaluilmupengetahuansosialbudayalainnya3p,
            'blniniilmupengetahuansosialbudayalainnya3l' => $blniniilmupengetahuansosialbudayalainnya3l,
            'blniniilmupengetahuansosialbudayalainnya3p' => $blniniilmupengetahuansosialbudayalainnya3p,
            'penempatanblniniilmupengetahuansosialbudayalainnya3l' => $penempatanblniniilmupengetahuansosialbudayalainnya3l,
            'penempatanblniniilmupengetahuansosialbudayalainnya3p' => $penempatanblniniilmupengetahuansosialbudayalainnya3p,
            'dihapusblniniilmupengetahuansosialbudayalainnya3l' => $dihapusblniniilmupengetahuansosialbudayalainnya3l,
            'dihapusblniniilmupengetahuansosialbudayalainnya3p' => $dihapusblniniilmupengetahuansosialbudayalainnya3p,
            // =============================================================================================================

             //======================= DIPLOMAIII/AKTAIII/AKADEMIS/S.MUDA===============================           
             // ================DIII - ilmu pengetahuan sosial/budaya======================================================
            // ================ilmupengsosialbudayatakterdefinisi3======================================================
            'blnlaluilmupengsosialbudayatakterdefinisi3l' => $blnlaluilmupengsosialbudayatakterdefinisi3l,
            'blnlaluilmupengsosialbudayatakterdefinisi3p' => $blnlaluilmupengsosialbudayatakterdefinisi3p,
            'blniniilmupengsosialbudayatakterdefinisi3l' => $blniniilmupengsosialbudayatakterdefinisi3l,
            'blniniilmupengsosialbudayatakterdefinisi3p' => $blniniilmupengsosialbudayatakterdefinisi3p,
            'penempatanblniniilmupengsosialbudayatakterdefinisi3l' => $penempatanblniniilmupengsosialbudayatakterdefinisi3l,
            'penempatanblniniilmupengsosialbudayatakterdefinisi3p' => $penempatanblniniilmupengsosialbudayatakterdefinisi3p,
            'dihapusblniniilmupengsosialbudayatakterdefinisi3l' => $dihapusblniniilmupengsosialbudayatakterdefinisi3l,
            'dihapusblniniilmupengsosialbudayatakterdefinisi3p' => $dihapusblniniilmupengsosialbudayatakterdefinisi3p,
            // =============================================================================================================
        ]);
    }




public function actionCoba(){
$model = Pendidikan::find(); 
// var_dump($model);die();
$searchModel = new PendidikanSearch();
$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

// $filename  = 'kartu.xls';

$filename = 'Data-'.Date('YmdGis').'-Mahasiswa.xls';

// header(&quot;Content-type: application/vnd-ms-excel&quot;);
// header(&quot;Content-Disposition: attachment; filename=&quot;.$filename);


header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=".$filename);


// $pdf_name = "test.pdf";
// $pdf_file = "/absolute/path/to/my/pdfs/on/my/server/{$pdf_name}";
// // header('Content-type: application/pdf',true,200);
// // header("Content-Disposition: attachment; filename={$pdf_name}");
// header('Cache-Control: public');
// readfile($pdf_file);

$model = $this->renderPartial('cetak', ['model' => $model,  'dataProvider' => $dataProvider, ]);

echo $model;
}


   public function actionExcel()
    {   

        // $searchModel = new Search();
        // // $searchModel->id_sekolah = 1; 
        // // $idku = Yii::$app->user->identity->id$date ;

              // var_dump($tamatsdl);die();
         


// $query = \backend\models\Admins::find()
//     ->select('pendidikan.*,keterangan.*')  // make sure same column name not there in both table
//     ->leftJoin('pendidikan', 'pendidikan.id_daftar = keterangan.id_daftar')
//     ->where(['keterangan.id_daftar' => 33])
//     ->with('pendidikan')
//     ->asArray()
//     ->all();
       

        $pendidikan = Pendidikan::findOne(['id_sekolah'=>1000]);
        $date = $pendidikan->pendidikan_date;
        $tahun = Yii::$app->formatter->asDate($date , 'yyyy');
        $bulan = Yii::$app->formatter->asDate($date , 'MM');
        $hari = Yii::$app->formatter->asDate($date , 'dd');
        $today = date('Y-m-d');
        $todayTgl = date('d');
        $todayMonth = date('Y-m');
        $todayMonthh =date('m');
        // $bulankemarin = date('m'("-1 month", strtotime(date($todayMonthh))));
         $sekarang = Yii::$app->formatter->asDate('now', 'php:Y-m-d');
         $bulanlalu = date('m', strtotime('-1 month', strtotime($sekarang)));
         $blnsekarang = Yii::$app->formatter->asDate('now', 'php:m');

         $tidaktamatsdl = Pendidikan::find()
         // ->where(['id_sekolah' => 1000,'id_jurusan'=>1101, 'MONTH(pendidikan_date)' => $bulanlalu])
         ->where(['id_sekolah' => 1000,
          'id_jurusan'=>1100])
          // 'MONTH(pendidikan_date) >= :userid', [':userid' => $blnsekarang]])
         ->all();

         // var_dump($tidaktamatsdl);die;
          

         $caripendidikanbulan = (new \yii\db\Query())
                    ->select('id_sekolah, pendidikan_date')
                    ->from('pendidikan')
                    ->where(['id_sekolah' => 1000, 'MONTH(pendidikan_date)' => $bulanlalu])
                    ->all();

                    // -----------------------Tidak tamat SD-------------------------
         $tidaktamatsdl = Pendidikan::find()
         ->where(['id_sekolah' => 1000,'id_jurusan'=>1101, 'MONTH(pendidikan_date)' => $bulanlalu])
         ->count();

          $tidaktamatsdp = Pendidikan::find()
         ->where(['id_sekolah' => 1000,'id_jurusan'=>1101, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])
         ->count();






         // 

         $tamatsdl = Pendidikan::find()->where(['id_sekolah' => 1000,'id_jurusan'=>1102, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
         $tamatsdp = Pendidikan::find()->where(['id_sekolah' => 1000,'id_jurusan'=>1102, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();

         $setingkatsdl = Pendidikan::find()->where(['id_sekolah' => 1000,'id_jurusan'=>1103, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])
         ->count();
          $setingkatsdp = Pendidikan::find()->where(['id_sekolah' => 1000,'id_jurusan'=>1103, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])
         ->count();

   
          $smpl = Pendidikan::find()->where(['id_sekolah' => 2000,'id_jurusan'=>2101, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])
         ->count();          
          $smpp = Pendidikan::find()->where(['id_sekolah' => 2000,'id_jurusan'=>2101, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])
         ->count();

          $mdsl = Pendidikan::find()->where(['id_sekolah' => 2000,'id_jurusan'=>2102, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])
         ->count();          
          $mdsp = Pendidikan::find()->where(['id_sekolah' => 2000,'id_jurusan'=>2102, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])
         ->count();


         $sltpkejuruanl = Pendidikan::find()->where(['id_sekolah' => 2000,'id_jurusan'=>2104, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])
         ->count();          
          $sltpkejuruanp = Pendidikan::find()->where(['id_sekolah' => 2000,'id_jurusan'=>2104, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])
         ->count();


          $sltplainnyal = Pendidikan::find()->where(['id_sekolah' => 2000,'id_jurusan'=>2103, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
          $sltplainnyap = Pendidikan::find()->where(['id_sekolah' => 2000,'id_jurusan'=>2103, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();
          $sltptakterdefenisil = Pendidikan::find()->where(['id_sekolah' => 2000,'id_jurusan'=>2199, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
          $sltptakterdefenisip = Pendidikan::find()->where(['id_sekolah' => 2000,'id_jurusan'=>2199, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();
// ------------------------batas sltp-----------------------------------

 $smul = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3801, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
 $smup = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3801, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();
$mdal = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3802, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
 $mdap = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3802, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();

//-------------batas SMU---------------------------------------------------


  $tbangunanl = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3101, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
  $tbangunanp = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3101, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();
   $tplumbingl = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3102, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
   $tplumbingp = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3102, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();
    $tsurveil = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3103, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
   $tsurveip = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3103, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();
    $tketenagal = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3104, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();

   $tketenagap = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3104, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();
     $tpendinginl = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3105, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
   $tpendinginp = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3105, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();
    $tmesinl = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3106, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
   $tmesinp = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3106, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();
   $totomotifl = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3107, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
   $totomotifp = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3107, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();
   $tpesawatl = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3108, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
   $tpesawatp = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3108, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();
   $tkapall = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3109, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>1])->count();
   $tkapalp = Pendidikan::find()->where(['id_sekolah' => 3000,'id_jurusan'=>3109, 'MONTH(pendidikan_date)' => $bulanlalu,'pendidikan_jkl'=>2])->count();
         // ----------------------------------------------------------
        
        
        return $this->renderAjax('excel', [
            // 'searchModel' => $searchModel,
            // // 'dataProvider' => $dataProvider,
            'tidaktamatsdl' => $tidaktamatsdl,
            'tidaktamatsdp' => $tidaktamatsdp,
            'tamatsdl' => $tamatsdl,
            'tamatsdp' => $tamatsdp,
            'setingkatsdl' => $setingkatsdl,
            'setingkatsdp' => $setingkatsdp,

            'smpl' => $smpl,
            'smpp' => $smpp,
            'mdsl' => $mdsl,
            'mdsp' => $mdsp,
            'sltpkejuruanl' => $sltpkejuruanl,
            'sltpkejuruanp' => $sltpkejuruanp,
            'sltplainnyal' => $sltplainnyal,
            'sltplainnyap' => $sltplainnyap,
            'sltptakterdefenisil' => $sltptakterdefenisil,
            'sltptakterdefenisip' => $sltptakterdefenisip,
// ---------------sltp-----------------batas-----------

            'smul' => $smul,
            'smup' => $smup,
            'mdal' => $mdal,
            'mdap' => $mdap,
// ----------------------smu----mda---------------------

            'tbangunanl' => $tbangunanl,
            'tbangunanp' => $tbangunanp,
            'tplumbingl' => $tplumbingl,
            'tplumbingp' => $tplumbingp,
            'tsurveil' => $tsurveil,
            'tsurveip' => $tsurveip,
            'tketenagal' => $tketenagal,
            'tketenagap' => $tketenagap,
            'tpendinginl' => $tpendinginl,
            'tpendinginp' => $tpendinginp,
            'tmesinl' => $tmesinl,
            'tmesinp' => $tmesinp,
            'totomotifl' => $totomotifl,
            'totomotifp' => $totomotifp,
            'tpesawatl' => $tpesawatl,
            'tpesawatp' => $tpesawatp,
            'tkapall' => $tkapall,
            'tkapalp' => $tkapalp,

        ]);
    }

    /**
     * Lists all Pegawai models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PegawaiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

function actionDownload($name){
  $filecontent=file_get_contents('path_to_file'.$name);
  header("Content-Type: text/plain");
  header("Content-disposition: attachment; filename=$name");
  header("Pragma: no-cache");
  echo $filecontent;
  exit;
}
public function actionHalaman()
    {
        // $searchModel = new PegawaiSearch();
        // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('halamanprint'
        //     , [
        //     'searchModel' => $searchModel,
        //     'dataProvider' => $dataProvider,
        // ]
    );
    }
    /**
     * Displays a single Pegawai model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Pegawai model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */

    public function actionApproval($id)
    {

        $searchModel = new PegawaiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $model = new Pegawai();

        $cariaktif = Pegawai::findOne(['pegawai_aktif'=>1]);
        $cariaktif->pegawai_aktif =2 ;
        $cariaktif->save();


        $modelaktif = Pegawai::findOne($id);
        // $model
        $modelaktif->pegawai_aktif = 1;
        $modelaktif->save();

Yii::$app->session->setFlash('success', '<b>Pegawai Telah AKtif</b>');

  return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }


    public function actionCreate()
    {
        $model = new Pegawai();

        if ($model->load(Yii::$app->request->post())/* && $model->save()*/) {
            $model->pegawai_aktif = 2;
            $model->save();
            return $this->redirect(['view', 'id' => $model->pegawai_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pegawai model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index'
                // , 'id' => $model->pegawai_id
            ]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pegawai model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pegawai model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pegawai the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pegawai::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
