   <?php
include ( 'koneksi.php' );
if (isset( $ _POST [ 'tambah' ])) {
   $ kode          = $ _POST [ 'kode_plg' ];
        $ nama         = $ _POST [ 'nama' ];
        $ alamat     = $ _POST [ 'alamat' ];
        $ email       =   $ _POST [ 'email' ];
        $ tlp     = $ _POST [ 'tlp' ];

     $ querytambah = mysqli_query( $ conn ," INSERT INTO tb_pelanggan VALUES(' $ kode ', ' $ nama ', ' $ alamat ', ' $ email ', ' $ tlp ') ") ;
  if ( $ querytambah ) {
    header( 'lokasi: tambahpelangan.php' );
   } lain {
    echo " Upss Ada yang salah.. ";
   }

}
?>
