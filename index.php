<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Order Jasa Sekarang</title>

        <!-- Bootstrap Core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
        <link href="css/agency.css" rel="stylesheet">
        <link href="css/sweetalert.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
        <![endif]-->

    </head>

    <body id="page-top" class="index">
        <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">JasaService.id</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Order Jasa</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Order Jasa</h2>
                        <h3 class="section-subheading text-muted">
                            Isi form berikut ini
                        </h3>
                    </div>
                </div>
                <form name="sentMessage" method="post" action="simpan.php" id="searchInit" class="validate">                           
                    <div class="row">       
                        <div class="col-md-6 col-xs-12">
                            <div class="ibox">
                                <div class="ibox-title">
                                    <h5>Bagaimana kami akan menghubungi Anda</h5>                                
                                </div>
                                <div class="ibox-content m-b-sm border-bottom">
                                    <div class="form-group">
                                        <label class="hidden-xs">Nama <span style="color:red">*</span></label>
                                        <input id="name" name="user_name" required="required" class="saveme form-control" placeholder="Masukkan nama anda" type="text" value="" aria-required="true">
                                    </div>                                                                    
                                    <div class="form-group">
                                        <label class="hidden-xs">
                                            Telp <span style="color:red">*</span>
                                        </label>
                                        <input id="phone" name="user_phone" required="required" class="saveme form-control" placeholder="Contoh: 081811110012" type="text" value="" aria-required="true">
                                    </div>
                                    <div class="form-group">
                                        <label class="hidden-xs">
                                            Email
                                        </label>
                                        <input id="email" name="user_email" class="saveme form-control" placeholder="nama_anda@domain.com" type="text" value="" aria-required="true">
                                    </div>
                                    <div class="form-group">
                                        <label class="hidden-xs">Jenis Kelamin <span style="color:red">*</span></label>
                                        <div class="row">
                                            <div class="col-md-6 col-xs-12">
                                                <input type="radio" name="user_gender" value="0" checked=""> Laki-laki
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="radio" name="user_gender" value="1" data-smartlook_2fecb6293ed16="false">  Perempuan
                                            </div>
                                        </div>
                                    </div>                                     
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="ibox">
                                <div class="ibox-title">
                                    <h5>Informasi jasa yang anda butuhkan</h5>                                
                                </div>
                                <div class="ibox-content">
                                    <label class="hidden-xs">Jasa</label>
                                    <select name="service_id" id="service_id" class="form-control required" required="" aria-required="true">
                                        <option value="">Pilih Jasa</option>
                                        <option value="33">Service  AC</option>
                                        <option value="367">Tukang Kunci</option>
                                        <option value="543">Service Kulkas</option>
                                        <option value="544">Service Mesin Cuci</option>
                                        <option value="548">Service Water Heater</option>
                                        <option value="631">Service Kompor Gas</option>
                                        <option value="656">Service Pompa Air</option>
                                        <option value="657">Service Kompor Listrik</option>
                                    </select>
                                </div>
                                <div class="ibox-content m-b-sm border-bottom"> 
                                    <div class="form-group">
                                        <label class="hidden-xs">
                                            Tanggal Anda Membutuhkan Jasa
                                        </label>
                                        <input class="form-control dtpckr" autocomplete="off" type="text" name="date" value="<?php echo date('Y-m-d') ?>">

                                    </div> 
                                    <div class="form-group">
                                        <label class="hidden-xs">Detail Pekerjaaan</label>
                                        <textarea required="required" id="request-description" class="saveme form-control" rows="3" name="description" style="text-align: left;" aria-required="true" placeholder="jelaskan sedikit tentang masalah yang anda hadapi sehingga kami dapat membantu"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="hidden-xs">Berapa Unit?</label>
                                        <input name="unit_amount" required="required" class="saveme form-control" aria-required="true" placeholder="Masukkan jumlah unit"/>
                                    </div>                                    
                                    <div class="form-group">
                                        <h5>Alamat/Lokasi Order/Pekerjaan</h5>
                                    </div>  
                                    <div class="form-group">
                                        <label class="hidden-xs">
                                            Kota
                                        </label>
                                        <div class="row">
                                            <div class="col-md-12 col-xs-12">
                                                <select id="area-kabupaten" aria-required="true" name="alamat_kota" class="form-control select2">
                                                    <option value="1101">Simeulue</option>
                                                    <option value="1102">Aceh Singkil</option>
                                                    <option value="1103">Aceh Selatan</option>
                                                    <option value="1104">Aceh Tenggara</option>
                                                    <option value="1105">Aceh Timur</option>
                                                    <option value="1106">Aceh Tengah</option>
                                                    <option value="1107">Aceh Barat</option>
                                                    <option value="1108">Aceh Besar</option>
                                                    <option value="1109">Pidie</option>
                                                    <option value="1110">Bireuen</option>
                                                    <option value="1111">Aceh Utara</option>
                                                    <option value="1112">Aceh Barat Daya</option>
                                                    <option value="1113">Gayo Lues</option>
                                                    <option value="1114">Aceh Tamiang</option>
                                                    <option value="1115">Nagan Raya</option>
                                                    <option value="1116">Aceh Jaya</option>
                                                    <option value="1117">Bener Meriah</option>
                                                    <option value="1118">Pidie Jaya</option>
                                                    <option value="1171">Banda Aceh</option>
                                                    <option value="1172">Sabang</option>
                                                    <option value="1173">Langsa</option>
                                                    <option value="1174">Lhokseumawe</option>
                                                    <option value="1175">Subulussalam</option>
                                                    <option value="1201">Nias</option>
                                                    <option value="1202">Mandailing Natal</option>
                                                    <option value="1203">Tapanuli Selatan</option>
                                                    <option value="1204">Tapanuli Tengah</option>
                                                    <option value="1205">Tapanuli Utara</option>
                                                    <option value="1206">Toba Samosir</option>
                                                    <option value="1207">Labuhan Batu</option>
                                                    <option value="1208">Asahan</option>
                                                    <option value="1209">Simalungun</option>
                                                    <option value="1210">Dairi</option>
                                                    <option value="1211">Karo</option>
                                                    <option value="1212">Deli Serdang</option>
                                                    <option value="1213">Langkat</option>
                                                    <option value="1214">Nias Selatan</option>
                                                    <option value="1215">Humbang Hasundutan</option>
                                                    <option value="1216">Pakpak Bharat</option>
                                                    <option value="1217">Samosir</option>
                                                    <option value="1218">Serdang Bedagai</option>
                                                    <option value="1219">Batu Bara</option>
                                                    <option value="1220">Padang Lawas Utara</option>
                                                    <option value="1221">Padang Lawas</option>
                                                    <option value="1222">Labuhan Batu Selatan</option>
                                                    <option value="1223">Labuhan Batu Utara</option>
                                                    <option value="1224">Nias Utara</option>
                                                    <option value="1225">Nias Barat</option>
                                                    <option value="1271">Sibolga</option>
                                                    <option value="1272">Tanjung Balai</option>
                                                    <option value="1273">Pematang Siantar</option>
                                                    <option value="1274">Tebing Tinggi</option>
                                                    <option value="1275">Medan</option>
                                                    <option value="1276">Binjai</option>
                                                    <option value="1277">Padangsidimpuan</option>
                                                    <option value="1278">Gunungsitoli</option>
                                                    <option value="1301">Kepulauan Mentawai</option>
                                                    <option value="1302">Pesisir Selatan</option>
                                                    <option value="1304">Sijunjung</option>
                                                    <option value="1305">Tanah Datar</option>
                                                    <option value="1306">Padang Pariaman</option>
                                                    <option value="1307">Agam</option>
                                                    <option value="1308">Lima Puluh Kota</option>
                                                    <option value="1309">Pasaman</option>
                                                    <option value="1310">Solok Selatan</option>
                                                    <option value="1311">Dharmasraya</option>
                                                    <option value="1312">Pasaman Barat</option>
                                                    <option value="1371">Padang</option>
                                                    <option value="1372">Solok</option>
                                                    <option value="1373">Sawah Lunto</option>
                                                    <option value="1374">Padang Panjang</option>
                                                    <option value="1375">Bukittinggi</option>
                                                    <option value="1376">Payakumbuh</option>
                                                    <option value="1377">Pariaman</option>
                                                    <option value="1401">Kuantan Singingi</option>
                                                    <option value="1402">Indragiri Hulu</option>
                                                    <option value="1403">Indragiri Hilir</option>
                                                    <option value="1404">Pelalawan</option>
                                                    <option value="1405">Siak</option>
                                                    <option value="1406">Kampar</option>
                                                    <option value="1407">Rokan Hulu</option>
                                                    <option value="1408">Bengkalis</option>
                                                    <option value="1409">Rokan Hilir</option>
                                                    <option value="1410">Kepulauan Meranti</option>
                                                    <option value="1471">Pekanbaru</option>
                                                    <option value="1473">Dumai</option>
                                                    <option value="1501">Kerinci</option>
                                                    <option value="1502">Merangin</option>
                                                    <option value="1503">Sarolangun</option>
                                                    <option value="1504">Batang Hari</option>
                                                    <option value="1505">Muaro Jambi</option>
                                                    <option value="1506">Tanjung Jabung Timur</option>
                                                    <option value="1507">Tanjung Jabung Barat</option>
                                                    <option value="1508">Tebo</option>
                                                    <option value="1509">Bungo</option>
                                                    <option value="1571">Jambi</option>
                                                    <option value="1572">Sungai Penuh</option>
                                                    <option value="1601">Ogan Komering Ulu</option>
                                                    <option value="1602">Ogan Komering Ilir</option>
                                                    <option value="1603">Muara Enim</option>
                                                    <option value="1604">Lahat</option>
                                                    <option value="1605">Musi Rawas</option>
                                                    <option value="1606">Musi Banyuasin</option>
                                                    <option value="1607">Banyu Asin</option>
                                                    <option value="1608">Ogan Komering Ulu Selatan</option>
                                                    <option value="1609">Ogan Komering Ulu Timur</option>
                                                    <option value="1610">Ogan Ilir</option>
                                                    <option value="1611">Empat Lawang</option>
                                                    <option value="1671">Palembang</option>
                                                    <option value="1672">Prabumulih</option>
                                                    <option value="1673">Pagar Alam</option>
                                                    <option value="1674">Lubuklinggau</option>
                                                    <option value="1701">Bengkulu Selatan</option>
                                                    <option value="1702">Rejang Lebong</option>
                                                    <option value="1703">Bengkulu Utara</option>
                                                    <option value="1704">Kaur</option>
                                                    <option value="1705">Seluma</option>
                                                    <option value="1706">Mukomuko</option>
                                                    <option value="1707">Lebong</option>
                                                    <option value="1708">Kepahiang</option>
                                                    <option value="1709">Bengkulu Tengah</option>
                                                    <option value="1771">Bengkulu</option>
                                                    <option value="1801">Lampung Barat</option>
                                                    <option value="1802">Tanggamus</option>
                                                    <option value="1803">Lampung Selatan</option>
                                                    <option value="1804">Lampung Timur</option>
                                                    <option value="1805">Lampung Tengah</option>
                                                    <option value="1806">Lampung Utara</option>
                                                    <option value="1807">Way Kanan</option>
                                                    <option value="1808">Tulangbawang</option>
                                                    <option value="1809">Pesawaran</option>
                                                    <option value="1810">Pringsewu</option>
                                                    <option value="1811">Mesuji</option>
                                                    <option value="1812">Tulang Bawang Barat</option>
                                                    <option value="1813">Pesisir Barat</option>
                                                    <option value="1871">Bandar Lampung</option>
                                                    <option value="1872">Metro</option>
                                                    <option value="1901">Bangka</option>
                                                    <option value="1902">Belitung</option>
                                                    <option value="1903">Bangka Barat</option>
                                                    <option value="1904">Bangka Tengah</option>
                                                    <option value="1905">Bangka Selatan</option>
                                                    <option value="1906">Belitung Timur</option>
                                                    <option value="1971">Pangkal Pinang</option>
                                                    <option value="2101">Karimun</option>
                                                    <option value="2102">Bintan</option>
                                                    <option value="2103">Natuna</option>
                                                    <option value="2104">Lingga</option>
                                                    <option value="2105">Kepulauan Anambas</option>
                                                    <option value="2171">Batam</option>
                                                    <option value="2172">Tanjung Pinang</option>
                                                    <option value="5201">Lombok Barat</option>
                                                    <option value="5202">Lombok Tengah</option>
                                                    <option value="5203">Lombok Timur</option>
                                                    <option value="5204">Sumbawa</option>
                                                    <option value="5205">Dompu</option>
                                                    <option value="5207">Sumbawa Barat</option>
                                                    <option value="5208">Lombok Utara</option>
                                                    <option value="5271">Mataram</option>
                                                    <option value="5272">Bima</option>
                                                    <option value="5301">Sumba Barat</option>
                                                    <option value="5302">Sumba Timur</option>
                                                    <option value="5304">Timor Tengah Selatan</option>
                                                    <option value="5305">Timor Tengah Utara</option>
                                                    <option value="5306">Belu</option>
                                                    <option value="5307">Alor</option>
                                                    <option value="5308">Lembata</option>
                                                    <option value="5309">Flores Timur</option>
                                                    <option value="5310">Sikka</option>
                                                    <option value="5311">Ende</option>
                                                    <option value="5312">Ngada</option>
                                                    <option value="5313">Manggarai</option>
                                                    <option value="5314">Rote Ndao</option>
                                                    <option value="5315">Manggarai Barat</option>
                                                    <option value="5316">Sumba Tengah</option>
                                                    <option value="5317">Sumba Barat Daya</option>
                                                    <option value="5318">Nagekeo</option>
                                                    <option value="5319">Manggarai Timur</option>
                                                    <option value="5320">Sabu Raijua</option>
                                                    <option value="5371">Kupang</option>
                                                    <option value="6101">Sambas</option>
                                                    <option value="6102">Bengkayang</option>
                                                    <option value="6103">Landak</option>
                                                    <option value="6105">Sanggau</option>
                                                    <option value="6106">Ketapang</option>
                                                    <option value="6107">Sintang</option>
                                                    <option value="6108">Kapuas Hulu</option>
                                                    <option value="6109">Sekadau</option>
                                                    <option value="6110">Melawi</option>
                                                    <option value="6111">Kayong Utara</option>
                                                    <option value="6112">Kubu Raya</option>
                                                    <option value="6171">Pontianak</option>
                                                    <option value="6172">Singkawang</option>
                                                    <option value="6201">Kotawaringin Barat</option>
                                                    <option value="6202">Kotawaringin Timur</option>
                                                    <option value="6203">Kapuas</option>
                                                    <option value="6204">Barito Selatan</option>
                                                    <option value="6205">Barito Utara</option>
                                                    <option value="6206">Sukamara</option>
                                                    <option value="6207">Lamandau</option>
                                                    <option value="6208">Seruyan</option>
                                                    <option value="6209">Katingan</option>
                                                    <option value="6210">Pulang Pisau</option>
                                                    <option value="6211">Gunung Mas</option>
                                                    <option value="6212">Barito Timur</option>
                                                    <option value="6213">Murung Raya</option>
                                                    <option value="6271">Palangka Raya</option>
                                                    <option value="6301">Tanah Laut</option>
                                                    <option value="6302">Baru</option>
                                                    <option value="6303">Banjar</option>
                                                    <option value="6304">Barito Kuala</option>
                                                    <option value="6305">Tapin</option>
                                                    <option value="6306">Hulu Sungai Selatan</option>
                                                    <option value="6307">Hulu Sungai Tengah</option>
                                                    <option value="6308">Hulu Sungai Utara</option>
                                                    <option value="6309">Tabalong</option>
                                                    <option value="6310">Tanah Bumbu</option>
                                                    <option value="6311">Balangan</option>
                                                    <option value="6371">Banjarmasin</option>
                                                    <option value="6372">Banjar Baru</option>
                                                    <option value="6401">Paser</option>
                                                    <option value="6402">Kutai Barat</option>
                                                    <option value="6403">Kutai Kartanegara</option>
                                                    <option value="6404">Kutai Timur</option>
                                                    <option value="6405">Berau</option>
                                                    <option value="6409">Penajam Paser Utara</option>
                                                    <option value="6471">Balikpapan</option>
                                                    <option value="6472">Samarinda</option>
                                                    <option value="6474">Bontang</option>
                                                    <option value="6501">Malinau</option>
                                                    <option value="6502">Bulungan</option>
                                                    <option value="6503">Tana Tidung</option>
                                                    <option value="6504">Nunukan</option>
                                                    <option value="6571">Tarakan</option>
                                                    <option value="7101">Bolaang Mongondow</option>
                                                    <option value="7102">Minahasa</option>
                                                    <option value="7103">Kepulauan Sangihe</option>
                                                    <option value="7104">Kepulauan Talaud</option>
                                                    <option value="7105">Minahasa Selatan</option>
                                                    <option value="7106">Minahasa Utara</option>
                                                    <option value="7107">Bolaang Mongondow Utara</option>
                                                    <option value="7108">Siau Tagulandang Biaro</option>
                                                    <option value="7109">Minahasa Tenggara</option>
                                                    <option value="7110">Bolaang Mongondow Selatan</option>
                                                    <option value="7111">Bolaang Mongondow Timur</option>
                                                    <option value="7171">Manado</option>
                                                    <option value="7172">Bitung</option>
                                                    <option value="7173">Tomohon</option>
                                                    <option value="7174">Kotamobagu</option>
                                                    <option value="7201">Banggai Kepulauan</option>
                                                    <option value="7202">Banggai</option>
                                                    <option value="7203">Morowali</option>
                                                    <option value="7204">Poso</option>
                                                    <option value="7205">Donggala</option>
                                                    <option value="7206">Toli-toli</option>
                                                    <option value="7207">Buol</option>
                                                    <option value="7208">Parigi Moutong</option>
                                                    <option value="7209">Tojo Una-una</option>
                                                    <option value="7210">Sigi</option>
                                                    <option value="7271">Palu</option>
                                                    <option value="7301">Kepulauan Selayar</option>
                                                    <option value="7302">Bulukumba</option>
                                                    <option value="7303">Bantaeng</option>
                                                    <option value="7304">Jeneponto</option>
                                                    <option value="7305">Takalar</option>
                                                    <option value="7306">Gowa</option>
                                                    <option value="7307">Sinjai</option>
                                                    <option value="7308">Maros</option>
                                                    <option value="7309">Pangkajene Dan Kepulauan</option>
                                                    <option value="7310">Barru</option>
                                                    <option value="7311">Bone</option>
                                                    <option value="7312">Soppeng</option>
                                                    <option value="7313">Wajo</option>
                                                    <option value="7314">Sidenreng Rappang</option>
                                                    <option value="7315">Pinrang</option>
                                                    <option value="7316">Enrekang</option>
                                                    <option value="7317">Luwu</option>
                                                    <option value="7318">Tana Toraja</option>
                                                    <option value="7322">Luwu Utara</option>
                                                    <option value="7325">Luwu Timur</option>
                                                    <option value="7326">Toraja Utara</option>
                                                    <option value="7371">Makassar</option>
                                                    <option value="7372">Parepare</option>
                                                    <option value="7373">Palopo</option>
                                                    <option value="7401">Buton</option>
                                                    <option value="7402">Muna</option>
                                                    <option value="7403">Konawe</option>
                                                    <option value="7404">Kolaka</option>
                                                    <option value="7405">Konawe Selatan</option>
                                                    <option value="7406">Bombana</option>
                                                    <option value="7407">Wakatobi</option>
                                                    <option value="7408">Kolaka Utara</option>
                                                    <option value="7409">Buton Utara</option>
                                                    <option value="7410">Konawe Utara</option>
                                                    <option value="7471">Kendari</option>
                                                    <option value="7472">Baubau</option>
                                                    <option value="7501">Boalemo</option>
                                                    <option value="7503">Pohuwato</option>
                                                    <option value="7504">Bone Bolango</option>
                                                    <option value="7505">Gorontalo Utara</option>
                                                    <option value="7571">Gorontalo</option>
                                                    <option value="7601">Majene</option>
                                                    <option value="7602">Polewali Mandar</option>
                                                    <option value="7603">Mamasa</option>
                                                    <option value="7604">Mamuju</option>
                                                    <option value="7605">Mamuju Utara</option>
                                                    <option value="8101">Maluku Tenggara Barat</option>
                                                    <option value="8102">Maluku Tenggara</option>
                                                    <option value="8103">Maluku Tengah</option>
                                                    <option value="8104">Buru</option>
                                                    <option value="8105">Kepulauan Aru</option>
                                                    <option value="8106">Seram Bagian Barat</option>
                                                    <option value="8107">Seram Bagian Timur</option>
                                                    <option value="8108">Maluku Barat Daya</option>
                                                    <option value="8109">Buru Selatan</option>
                                                    <option value="8171">Ambon</option>
                                                    <option value="8172">Tual</option>
                                                    <option value="8201">Halmahera Barat</option>
                                                    <option value="8202">Halmahera Tengah</option>
                                                    <option value="8203">Kepulauan Sula</option>
                                                    <option value="8204">Halmahera Selatan</option>
                                                    <option value="8205">Halmahera Utara</option>
                                                    <option value="8206">Halmahera Timur</option>
                                                    <option value="8207">Pulau Morotai</option>
                                                    <option value="8271">Ternate</option>
                                                    <option value="8272">Tidore Kepulauan</option>
                                                    <option value="9101">Fakfak</option>
                                                    <option value="9102">Kaimana</option>
                                                    <option value="9103">Teluk Wondama</option>
                                                    <option value="9104">Teluk Bintuni</option>
                                                    <option value="9105">Manokwari</option>
                                                    <option value="9106">Sorong Selatan</option>
                                                    <option value="9108">Raja Ampat</option>
                                                    <option value="9109">Tambrauw</option>
                                                    <option value="9110">Maybrat</option>
                                                    <option value="9171">Sorong</option>
                                                    <option value="9401">Merauke</option>
                                                    <option value="9402">Jayawijaya</option>
                                                    <option value="9404">Nabire</option>
                                                    <option value="9408">Kepulauan Yapen</option>
                                                    <option value="9409">Biak Numfor</option>
                                                    <option value="9410">Paniai</option>
                                                    <option value="9411">Puncak Jaya</option>
                                                    <option value="9412">Mimika</option>
                                                    <option value="9413">Boven Digoel</option>
                                                    <option value="9414">Mappi</option>
                                                    <option value="9415">Asmat</option>
                                                    <option value="9416">Yahukimo</option>
                                                    <option value="9417">Pegunungan Bintang</option>
                                                    <option value="9418">Tolikara</option>
                                                    <option value="9419">Sarmi</option>
                                                    <option value="9420">Keerom</option>
                                                    <option value="9426">Waropen</option>
                                                    <option value="9427">Supiori</option>
                                                    <option value="9428">Mamberamo Raya</option>
                                                    <option value="9429">Nduga</option>
                                                    <option value="9430">Lanny Jaya</option>
                                                    <option value="9431">Mamberamo Tengah</option>
                                                    <option value="9432">Yalimo</option>
                                                    <option value="9433">Puncak</option>
                                                    <option value="9434">Dogiyai</option>
                                                    <option value="9435">Intan Jaya</option>
                                                    <option value="9436">Deiyai</option>
                                                    <option value="9471">Jayapura</option>
                                                    <option value="3101">Kepulauan Seribu</option>
                                                    <option value="3501">Pacitan</option>
                                                    <option value="3502">Ponorogo</option>
                                                    <option value="3503">Trenggalek</option>
                                                    <option value="3504">Tulungagung</option>
                                                    <option value="3508">Lumajang</option>
                                                    <option value="3509">Jember</option>
                                                    <option value="3510">Banyuwangi</option>
                                                    <option value="3511">Bondowoso</option>
                                                    <option value="3512">Situbondo</option>
                                                    <option value="3515">Sidoarjo</option>
                                                    <option value="3517">Jombang</option>
                                                    <option value="3518">Nganjuk</option>
                                                    <option value="3520">Magetan</option>
                                                    <option value="3521">Ngawi</option>
                                                    <option value="3522">Bojonegoro</option>
                                                    <option value="3523">Tuban</option>
                                                    <option value="3524">Lamongan</option>
                                                    <option value="3525">Gresik</option>
                                                    <option value="3526">Bangkalan</option>
                                                    <option value="3527">Sampang</option>
                                                    <option value="3528">Pamekasan</option>
                                                    <option value="3529">Sumenep</option>
                                                    <option value="3571">Kediri</option>
                                                    <option value="3572">Blitar</option>
                                                    <option value="3573">Malang</option>
                                                    <option value="3574">Probolinggo</option>
                                                    <option value="3575">Pasuruan</option>
                                                    <option value="3576">Mojokerto</option>
                                                    <option value="3577">Madiun</option>
                                                    <option value="3578">Surabaya</option>
                                                    <option value="3579">Batu</option>
                                                    <option value="3401">Kulon Progo</option>
                                                    <option value="3402">Bantul</option>
                                                    <option value="3403">Gunung Kidul</option>
                                                    <option value="3404">Sleman</option>
                                                    <option value="3471">Yogyakarta</option>
                                                    <option value="3301">Cilacap</option>
                                                    <option value="3302">Banyumas</option>
                                                    <option value="3303">Purbalingga</option>
                                                    <option value="3304">Banjarnegara</option>
                                                    <option value="3305">Kebumen</option>
                                                    <option value="3306">Purworejo</option>
                                                    <option value="3307">Wonosobo</option>
                                                    <option value="3309">Boyolali</option>
                                                    <option value="3310">Klaten</option>
                                                    <option value="3311">Sukoharjo</option>
                                                    <option value="3312">Wonogiri</option>
                                                    <option value="3313">Karanganyar</option>
                                                    <option value="3314">Sragen</option>
                                                    <option value="3315">Grobogan</option>
                                                    <option value="3316">Blora</option>
                                                    <option value="3317">Rembang</option>
                                                    <option value="3318">Pati</option>
                                                    <option value="3319">Kudus</option>
                                                    <option value="3320">Jepara</option>
                                                    <option value="3321">Demak</option>
                                                    <option value="3323">Temanggung</option>
                                                    <option value="3324">Kendal</option>
                                                    <option value="3325">Batang</option>
                                                    <option value="3327">Pemalang</option>
                                                    <option value="3329">Brebes</option>
                                                    <option value="3371">Magelang</option>
                                                    <option value="3372">Surakarta</option>
                                                    <option value="3373">Salatiga</option>
                                                    <option value="3374">Semarang</option>
                                                    <option value="3375">Pekalongan</option>
                                                    <option value="3376">Tegal</option>
                                                    <option value="5101">Jembrana</option>
                                                    <option value="5102">Tabanan</option>
                                                    <option value="5103">Badung</option>
                                                    <option value="5104">Gianyar</option>
                                                    <option value="5105">Klungkung</option>
                                                    <option value="5106">Bangli</option>
                                                    <option value="5107">Karang Asem</option>
                                                    <option value="5108">Buleleng</option>
                                                    <option value="5171">Denpasar</option>
                                                    <option value="3203">Cianjur</option>
                                                    <option value="3205">Garut</option>
                                                    <option value="3207">Ciamis</option>
                                                    <option value="3208">Kuningan</option>
                                                    <option value="3210">Majalengka</option>
                                                    <option value="3211">Sumedang</option>
                                                    <option value="3212">Indramayu</option>
                                                    <option value="3213">Subang</option>
                                                    <option value="3214">Purwakarta</option>
                                                    <option value="3215">Karawang</option>
                                                    <option value="3217">Bandung Barat</option>
                                                    <option value="3218">Pangandaran</option>
                                                    <option value="3271">Bogor</option>
                                                    <option value="3272">Sukabumi</option>
                                                    <option value="3273">Bandung</option>
                                                    <option value="3274">Cirebon</option>
                                                    <option value="3275">Bekasi</option>
                                                    <option value="3276">Depok</option>
                                                    <option value="3277">Cimahi</option>
                                                    <option value="3278">Tasikmalaya</option>
                                                    <option value="3279">Cikarang</option>
                                                    <option value="3601">Pandeglang</option>
                                                    <option value="3602">Lebak</option>
                                                    <option value="3671">Tangerang</option>
                                                    <option value="3672">Cilegon</option>
                                                    <option value="3673">Serang</option>
                                                    <option value="3674">Tangerang Selatan</option>
                                                    <option value="3171">Jakarta Selatan</option>
                                                    <option value="3172">Jakarta Timur</option>
                                                    <option value="3173">Jakarta Pusat</option>
                                                    <option value="3174">Jakarta Barat</option>
                                                    <option value="3175">Jakarta Utara</option>
                                                </select>
                                            </div>                                        
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="hidden-xs">
                                            Lokasi
                                        </label>
                                        <input id="pac-input" class="form-control required saveme" name="location" type="text" placeholder="Masukkan lokasi pekerjaan" onclick="this.value = ''" required="1" style="display:block !important;">
                                        <div id="type-selector" class="controls" style="display:none !important;">
                                            <input type="radio" name="type" id="changetype-all" checked="checked">
                                            <label for="changetype-all">All</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div id="map"></div>
                                        <input name="latitude" type="hidden" id="hidLat" value="" size="32" />
                                        <input name="longitude" type="hidden" id="hidLong" value="" size="32" />
                                    </div>  
                                    <div class="clearfix"></div>
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        
        <!-- developer Section -->
        <!--
        <section id="developer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Developer API Request</h2>
                        <h3 class="section-subheading text-muted">
                            Isi form berikut ini
                        </h3>
                    </div>
                </div>
                <form name="sentMessage" method="post" action="simpanuser.php" id="searchInit" class="validate">                           
                    <div class="row">                    
                        <div class="col-xs-12 col-md-6">
                            <div class="ibox">
                                <div class="ibox-title">
                                    <h5>Isi dengan benar</h5>                                
                                </div>
                                <div class="form-group">
                                <div class="ibox-content">
                                    <label class="hidden-xs">Nama </label>
                               
                                        <input id="name" name="name" required="required" class="saveme form-control" placeholder="Masukkan nama anda" type="text" value="" aria-required="true">
    
                                </div></div>
                                <div class="form-group">
                                <div class="ibox-content">
                                    <label class="hidden-xs">Email </label>
                               
                                        <input id="name" name="email" required="required" class="saveme form-control" placeholder="Masukkan email anda" type="text" value="" aria-required="true">
    
                                </div></div>
                                
                                <div class="form-group">
                                <div class="ibox-content">
                                    <label class="hidden-xs">Company </label>
                               
                                        <input id="name" name="company" required="required" class="saveme form-control" placeholder="Masukkan nama company anda" type="text" value="" aria-required="true">
    
                                </div></div>
                                <div class="form-group">
                                <div class="ibox-content">
                                    <label class="hidden-xs">Website </label>
                               
                                        <input id="name" name="website" required="required" class="saveme form-control" placeholder="Masukkan nama website anda" type="text" value="" aria-required="true">
    
                                </div></div>
                       
                                    <div class="clearfix"></div>
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl">Kirim</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </section>
        -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <span class="copyright">Copyright &copy; JasaServiceId <?php echo date('Y'); ?></span>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline quicklinks">
                            <li><a href="#">Privacy Policy</a>
                            </li>
                            <li><a href="#">Terms of Use</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <!-- jQuery -->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyCMwkBkNVn-u1xcbbz43WGlVCAhD6329lM&amp;libraries=places"></script>

        <!-- Contact Form JavaScript -->
        <script src="js/jquery.validate.js"></script>
        <script src="js/sweetalert.min.js"></script>
        <!-- Theme JavaScript -->
        <script src="js/agency.js"></script>
        <script src="js/init.js"></script>

    </body>

</html>
