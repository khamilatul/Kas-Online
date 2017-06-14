<?php


use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
       public function run()
    {
        // truncate record
        DB::table('users')->truncate();

        $user = [
            ['id' => 1, 'name' => 'ahmad syafiq', 'class' => '10 RPL 1', 'level' => '1', 'phone' => '087759716911', 'password' => bcrypt('qwerty'), 'min_transaksi' => '10000', 'email' => 'syafiq@gmail.com', 'nis' => '1697/603.070', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'name' => 'ahmad khoiri', 'class' => '10 RPL 2', 'level' => '1', 'phone' => '087759716912', 'password' => bcrypt('qwerty'), 'min_transaksi' => '20000', 'email' => 'khoiri@gmail.com', 'nis' => '1697/603.071', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'name' => 'akhdan kautsar', 'class' => '10 RPL 3', 'level' => '1', 'phone' => '087759716913', 'password' => bcrypt('qwerty'), 'min_transaksi' => '15000', 'email' => 'akhdan@gmail.com', 'nis' => '1697/603.072','created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'name' => 'barid ahmad', 'class' => '10 TKJ 1', 'level' => '1', 'phone' => '087759716914', 'password' => bcrypt('qwerty'), 'min_transaksi' => '10000','email' => 'barid@gmail.com', 'nis' => '1697/603.073','created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'name' => 'rizka dwi febriyanti', 'class' => '10 TKJ 2', 'level' => '1', 'phone' => '087759716916', 'password' => bcrypt('qwerty'), 'min_transaksi' => '20000', 'email' => 'rizka@gmail.com', 'nis' => '1697/603.074','created_at' => \Carbon\Carbon::now()],
            ['id' => 6, 'name' => 'afandi febriyansyah', 'class' => '10 TKR 1', 'level' => '1', 'phone' => '087759716917', 'password' => bcrypt('qwerty'), 'min_transaksi' => '10000','email' => 'afandi@gmail.com', 'nis' => '1697/603.075','created_at' => \Carbon\Carbon::now()],
            ['id' => 7, 'name' => 'ahmad wildan suhala', 'class' => '10 TKR 2', 'level' => '1', 'phone' => '087759716918', 'password' => bcrypt('qwerty'), 'min_transaksi' => '15000','email' => 'wildan@gmail.com', 'nis' => '1697/603.076','created_at' => \Carbon\Carbon::now()],
            ['id' => 8, 'name' => 'haidar ali', 'class' => '10 TKR 3', 'level' => '1', 'phone' => '087759716919', 'password' => bcrypt('qwerty'), 'min_transaksi' => '10000', 'email' => 'haidar@gmail.com', 'nis' => '1697/603.077','created_at'  => \Carbon\Carbon::now()],
            ['id' => 9, 'name' => 'budi hariyanto', 'class' => '10 TSM 1', 'level' => '1', 'phone' => '087759716920', 'password' => bcrypt('qwerty'),'min_transaksi' => '20000', 'email' => 'budi@gmail.com', 'nis' => '1697/603.078','created_at' => \Carbon\Carbon::now()],
            ['id' => 10, 'name' => 'daffa zakindra', 'class' => '10 TSM 2', 'level' => '1', 'phone' => '087759716921', 'password' => bcrypt('qwerty'), 'min_transaksi' => '15000', 'email' => 'daffa@gmail.com', 'nis' => '1697/603.079','created_at' => \Carbon\Carbon::now()],
            ['id' => 11, 'name' => 'dita puji lestri', 'class' => '10 TEI 1', 'level' => '1', 'phone' => '087759716922', 'password' => bcrypt('qwerty'), 'min_transaksi' => '20000','email' => 'dita@gmail.com', 'nis' => '1697/603.080','created_at' => \Carbon\Carbon::now()],
            ['id' => 12, 'name' => 'hawwina sabila', 'class' => '10 TEI 2', 'level' => '1', 'phone' => '087759716923', 'password' => bcrypt('qwerty'), 'min_transaksi' => '15000','email' => 'hawwina@gmail.com', 'nis' => '1697/603.081','created_at' => \Carbon\Carbon::now()],
            ['id' => 13, 'name' => 'muhammad farihin', 'class' => '10 TEI 3', 'level' => '1', 'phone' => '087759716924', 'password' => bcrypt('qwerty'),'min_transaksi' => '10000', 'email' => 'farihin@gmail.com', 'nis' => '1697/603.082','created_at' => \Carbon\Carbon::now()],
            ['id' => 14, 'name' => 'muhammad alfian', 'class' => '11 RPL 1', 'level' => '1', 'phone' => '087759716925', 'password' => bcrypt('qwerty'), 'min_transaksi' => '20000', 'email' => 'alfian@gmail.com', 'nis' => '1697/603.083','created_at' => \Carbon\Carbon::now()],
            ['id' => 15, 'name' => 'dimas pangestu', 'class' => '11 RPL 2', 'level' => '1', 'phone' => '087759716926', 'password' => bcrypt('qwerty'),  'min_transaksi' => '15000','email' => 'pangestu@gmail.com', 'nis' => '1697/603.084', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 16, 'name' => 'dwi ardi wijaya', 'class' => '11 RPL 3', 'level' => '1', 'phone' => '087759716927', 'password' => bcrypt('qwerty'), 'min_transaksi' => '20000', 'email' => 'dwi@gmail.com', 'nis' => '1697/603.085','created_at' => \Carbon\Carbon::now()],
            ['id' => 17, 'name' => 'dewi lailatul', 'class' => '11 TKJ 1', 'level' => '1', 'phone' => '087759716928', 'password' => bcrypt('qwerty'),  'min_transaksi' => '15000', 'email' => 'dewi@gmail.com', 'nis' => '1697/603.086','created_at' => \Carbon\Carbon::now()],
            ['id' => 18, 'name' => 'furoda taksilah', 'class' => '11 TKJ 2', 'level' => '1', 'phone' => '087759716929', 'password' => bcrypt('qwerty'), 'min_transaksi' => '10000','email' => 'furoda@gmail.com', 'nis' => '1697/603.087', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 19, 'name' => 'feri septiawan', 'class' => '11 TKR 1', 'level' => '1', 'phone' => '087759716930', 'password' => bcrypt('qwerty'), 'min_transaksi' => '20000', 'email' => 'feri@gmail.com', 'nis' => '1697/603.088','created_at' => \Carbon\Carbon::now()],
            ['id' => 20, 'name' => 'muhammad fahrul', 'class' => '11 TKR 2', 'level' => '1', 'phone' => '087759716931', 'password' => bcrypt('qwerty'), 'min_transaksi' => '10000','email' => 'fahrul@gmail.com','nis' => '1697/603.089', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 21, 'name' => 'naufal nur', 'class' => '11 TKR 3', 'level' => '1', 'phone' => '087759716932', 'password' => bcrypt('qwerty'), 'min_transaksi' => '25000','email' => 'naufal@gmail.com', 'nis' => '1697/603.090','created_at' => \Carbon\Carbon::now()],
            ['id' => 22, 'name' => 'muhammad syafiudin', 'class' => '11 TSM 1', 'level' => '1', 'phone' => '087759716933', 'password' => bcrypt('qwerty'), 'min_transaksi' => '20000','email' => 'syafiudin@gmail.com', 'nis' => '1697/603.091','created_at' => \Carbon\Carbon::now()],
            ['id' => 23, 'name' => 'laylia anandita', 'class' => '11 TEI 1', 'level' => '1', 'phone' => '087759716934', 'password' => bcrypt('qwerty'), 'min_transaksi' => '15000', 'email' => 'laylia@gmail.com', 'nis' => '1697/603.092','created_at' => \Carbon\Carbon::now()],
            ['id' => 24, 'name' => 'lesly chika', 'class' => '11 TEI 2', 'level' => '1', 'phone' => '087759716935', 'password' => bcrypt('qwerty'), 'min_transaksi' => '25000','email' => 'lesly@gmail.com', 'nis' => '1697/603.093','created_at' => \Carbon\Carbon::now()],
            ['id' => 25, 'name' => 'mubainatul ulum', 'class' => '11 TEI 3', 'level' => '1', 'phone' => '087759716936', 'password' => bcrypt('qwerty'), 'min_transaksi' => '10000', 'email' => 'mubainatul@gmail.com', 'nis' => '1697/603.094','created_at' => \Carbon\Carbon::now()],
            ['id' => 26, 'name' => 'nur azizatul', 'class' => '12 RPL 1', 'level' => '1', 'phone' => '087759716937', 'password' => bcrypt('qwerty'), 'min_transaksi' => '15000', 'email' => 'nur@gmail.com', 'nis' => '1697/603.095','created_at' => \Carbon\Carbon::now()],
            ['id' => 27, 'name' => 'nurul hidayati', 'class' => '12 RPL 2', 'level' => '1', 'phone' => '087759716938', 'password' => bcrypt('qwerty'), 'min_transaksi' => '10000','email' => 'nurul@gmail.com','nis' => '1697/603.096','created_at' => \Carbon\Carbon::now()],
            ['id' => 28, 'name' => 'shofiana', 'class' => '12 RPL 3', 'level' => '1', 'phone' => '087759716939', 'password' => bcrypt('qwerty'), 'min_transaksi' => '15000','email' => 'shofiana@gmail.com', 'nis' => '1697/603.097','created_at' => \Carbon\Carbon::now()],
            ['id' => 29, 'name' => 'siti nur', 'class' => '12 TKJ 1', 'level' => '1', 'phone' => '087759716940', 'password' => bcrypt('qwerty'), 'min_transaksi' => '25000', 'email' => 'siti@gmail.com', 'nis' => '1697/603.098','created_at' => \Carbon\Carbon::now()],
            ['id' => 30, 'name' => 'muhammad raffi', 'class' => '12 TKR 1', 'level' => '1', 'phone' => '087759716941', 'password' => bcrypt('qwerty'), 'min_transaksi' => '10000', 'email' => 'raffi@gmail.com', 'nis' => '1697/603.098','created_at' => \Carbon\Carbon::now()],
            ['id' => 31, 'name' => 'muhammad farhan', 'class' => '12 TKR 2', 'level' => '1', 'phone' => '087759716942', 'password' => bcrypt('qwerty'), 'min_transaksi' => '25000', 'email' => 'farhan@gmail.com','nis' => '1697/603.099', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 32, 'name' => 'bagus sujiwo', 'class' => '12 TKR 3', 'level' => '1', 'phone' => '087759716943', 'password' => bcrypt('qwerty'), 'min_transaksi' => '20000','email' => 'bagus@gmail.com','nis' => '1697/603.100', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 33, 'name' => 'yovan franda', 'class' => '12 TSM 1', 'level' => '1', 'phone' => '087759716944', 'password' => bcrypt('qwerty'), 'min_transaksi' => '25000','email' => 'yovan@gmail.com', 'nis' => '1697/603.101','created_at' => \Carbon\Carbon::now()],
            ['id' => 34, 'name' => 'anisa rahma', 'class' => '12 TEI 1', 'level' => '1', 'phone' => '087759716945', 'password' => bcrypt('qwerty'), 'min_transaksi' => '10000','email' => 'anisa@gmail.com', 'nis' => '1697/603.102','created_at' => \Carbon\Carbon::now()],
            ['id' => 35, 'name' => 'sapna intan', 'class' => '12 TEI 2', 'level' => '1', 'phone' => '087759716946', 'password' => bcrypt('qwerty'), 'min_transaksi' => '10000','email' => 'sapna@gmail.com', 'nis' => '1697/603.103','created_at' => \Carbon\Carbon::now()],
            ['id' => 36, 'name' => 'elfa nadia', 'class' => '12 TEI 3', 'level' => '1', 'phone' => '087759716947', 'password' => bcrypt('qwerty'), 'min_transaksi' => '25000','email' => 'elfa@gmail.com', 'nis' => '1697/603.104','created_at' => \Carbon\Carbon::now()],
            ['id' => 37, 'name' => 'ahmadbima', 'class' => '10 RPL 1', 'level' => '0', 'phone' => '087759716948', 'password' => bcrypt('qwerty'), 'min_transaksi' => '20000','email' => 'ahmadbima@gmail.com', 'nis' => '1697/603.105','created_at' => \Carbon\Carbon::now()],
            ['id' => 38, 'name' => 'adrian', 'class' => '10 RPL 2', 'level' => '0', 'phone' => '08775971694', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'adrian@gmail.com','nis' => '1697/603.106', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 39, 'name' => 'afilia', 'class' => '10 RPL 3', 'level' => '0', 'phone' => '087759716950', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'afilia@gmail.com', 'nis' => '1697/603.107','created_at' => \Carbon\Carbon::now()],
            ['id' => 41, 'name' => 'akhabrul', 'class' => '10 TKJ 1', 'level' => '0', 'phone' => '087759716951', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'akhbarul@gmail.com', 'nis' => '1697/603.108','created_at' => \Carbon\Carbon::now()],
            ['id' => 42, 'name' => 'alfin', 'class' => '10 TKJ 2', 'level' => '0', 'phone' => '087759716952', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'alfin@gmail.com', 'nis' => '1697/603.109','created_at' => \Carbon\Carbon::now()],
            ['id' => 44, 'name' => 'alfira', 'class' => '10 TKR 1', 'level' => '0', 'phone' => '087759716953', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'alfira@gmail.com', 'nis' => '1697/603.200','created_at' => \Carbon\Carbon::now()],
            ['id' => 45, 'name' => 'arifasiwi', 'class' => '10 TKR 2', 'level' => '0', 'phone' => '087759716954', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'arifasiwi@gmail.com','nis' => '1697/603.201', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 46, 'name' => 'ayuazmi', 'class' => '10 TKR 3', 'level' => '0', 'phone' => '087759716955', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'ayuazmi@gmail.com', 'nis' => '1697/603.202','created_at' => \Carbon\Carbon::now()],
            ['id' => 47, 'name' => 'badhar', 'class' => '10 TSM 1', 'level' => '0', 'phone' => '087759716956', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'badhar@gmail.com','nis' => '1697/603.203', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 48, 'name' => 'chayang', 'class' => '10 TSM 2', 'level' => '0', 'phone' => '087759716957', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'chayang@gmail.com','nis' => '1697/603.204', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 49, 'name' => 'dea', 'class' => '10 TEI 1', 'level' => '0', 'phone' => '087759716958', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'dea@gmail.com','nis' => '1697/603.205', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 50, 'name' => 'desi', 'class' => '10 TEI 2', 'level' => '0', 'phone' => '087759716959', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'desi@gmail.com','nis' => '1697/603.206','created_at' => \Carbon\Carbon::now()],
            ['id' => 51, 'name' => 'didaputra', 'class' => '10 TEI 3', 'level' => '0', 'phone' => '087759716960', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'didaputra@gmail.com','nis' => '1697/603.207','created_at' => \Carbon\Carbon::now()],
            ['id' => 52, 'name' => 'dimasaditya', 'class' => '11 RPL 1', 'level' => '0', 'phone' => '087759716961', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'dimasaditya@gmail.com','nis' => '1697/603.208', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 53, 'name' => 'dimassatrio', 'class' => '11 RPL 2', 'level' => '0', 'phone' => '087759716962', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'dimassatrio@gmail.com', 'nis' => '1697/603.209','created_at' => \Carbon\Carbon::now()],
            ['id' => 54, 'name' => 'emeraldine', 'class' => '11 RPL 3', 'level' => '0', 'phone' => '087759716963', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'emeraldine@gmail.com','nis' => '1697/603.300', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 55, 'name' => 'fany', 'class' => '11 TKJ 1', 'level' => '0', 'phone' => '087759716964', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'fany@gmail.com', 'nis' => '1697/603.301','created_at' => \Carbon\Carbon::now()],
            ['id' => 56, 'name' => 'hanum', 'class' => '11 TKJ 2', 'level' => '0', 'phone' => '087759716965', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'hanum@gmail.com', 'nis' => '1697/603.302','created_at' => \Carbon\Carbon::now()],
            ['id' => 57, 'name' => 'hasan', 'class' => '11 TKR 1', 'level' => '0', 'phone' => '087759716966', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'hasan@gmail.com', 'nis' => '1697/603.303','created_at' => \Carbon\Carbon::now()],
            ['id' => 58, 'name' => 'ido', 'class' => '11 TKR 2', 'level' => '0', 'phone' => '087759716967', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'ido@gmail.com', 'nis' => '1697/603.304','created_at' => \Carbon\Carbon::now()],
            ['id' => 59, 'name' => 'khamilatul', 'class' => '11 TKR 3', 'level' => '0', 'phone' => '087759716968', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'khamilatul@gmail.com', 'nis' => '1697/603.305','created_at' => \Carbon\Carbon::now()],
            ['id' => 60, 'name' => 'khoirun', 'class' => '11 TSM 1', 'level' => '0', 'phone' => '087759716969', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0', 'email' => 'khoirun@gmail.com', 'nis' => '1697/603.306','created_at' => \Carbon\Carbon::now()],
            ['id' => 61, 'name' => 'krisna', 'class' => '11 TEI 1', 'level' => '0', 'phone' => '087759716970', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'krisna@gmail.com','nis' => '1697/603.307', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 62, 'name' => 'lailatul', 'class' => '11 TEI 2', 'level' => '0', 'phone' => '087759716971', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'lailatul@gmail.com', 'nis' => '1697/603.308','created_at' => \Carbon\Carbon::now()],
            ['id' => 63, 'name' => 'laurient', 'class' => '11 TEI 3', 'level' => '0', 'phone' => '087759716972', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'laurient@gmail.com', 'nis' => '1697/603.309','created_at' => \Carbon\Carbon::now()],
            ['id' => 64, 'name' => 'lena', 'class' => '12 RPL 1', 'level' => '0', 'phone' => '087759716973', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'lena@gmail.com', 'nis' => '1697/603.400','created_at' => \Carbon\Carbon::now()],
            ['id' => 65, 'name' => 'myusuf', 'class' => '12 RPL 2', 'level' => '0', 'phone' => '087759716974', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'myusuf@gmail.com', 'nis' => '1697/603.401','created_at' => \Carbon\Carbon::now()],
            ['id' => 66, 'name' => 'mainul', 'class' => '12 RPL 3', 'level' => '0', 'phone' => '087759716975', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'mainul@gmail.com', 'nis' => '1697/603.402','created_at' => \Carbon\Carbon::now()],
            ['id' => 67, 'name' => 'mustofa', 'class' => '12 TKJ 1', 'level' => '0', 'phone' => '087759716976', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'mustofa@gmail.com', 'nis' => '1697/603.403','created_at' => \Carbon\Carbon::now()],
            ['id' => 68, 'name' => 'nuzud', 'class' => '12 TKR 1', 'level' => '0', 'phone' => '087759716977', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'nuzud@gmail.com', 'nis' => '1697/603.404','created_at' => \Carbon\Carbon::now()],
            ['id' => 69, 'name' => 'rosita', 'class' => '12 TKR 2', 'level' => '10', 'phone' => '087759716978', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'rosita@gmail.com', 'nis' => '1697/603.405','created_at' => \Carbon\Carbon::now()],
            ['id' => 70, 'name' => 'syahrul', 'class' => '12 TKR 3', 'level' => '0', 'phone' => '087759716979', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'syahrul@gmail.com', 'nis' => '1697/603.406','created_at' => \Carbon\Carbon::now()],
            ['id' => 71, 'name' => 'widya', 'class' => '12 TSM 1', 'level' => '0', 'phone' => '087759716980', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'widya@gmail.com','nis' => '1697/603.407', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 72, 'name' => 'amel', 'class' => '12 TEI 1', 'level' => '0', 'phone' => '087759716981', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'amel@gmail.com','nis' => '1697/603.408', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 73, 'name' => 'novia', 'class' => '12 TEI 2', 'level' => '0', 'phone' => '087759716982', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'novia@gmail.com', 'nis' => '1697/603.409','created_at' => \Carbon\Carbon::now()],
            ['id' => 74, 'name' => 'dewi', 'class' => '12 TEI 3', 'level' => '0', 'phone' => '087759716983', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'dewi@gmail.com', 'nis' => '1697/603.500','created_at' => \Carbon\Carbon::now()],
            ['id' => 75, 'name' => 'engineering', 'class' => '11', 'level' => '2', 'phone' => '087759716984', 'password' => bcrypt('qwerty'), 'min_transaksi' => '0','email' => 'engineering@gmail.com', 'nis' => '1697/603.501','created_at' => \Carbon\Carbon::now()],
            
            ];   
             // insert batch
        DB::table('users')->insert($user);
    }
}
