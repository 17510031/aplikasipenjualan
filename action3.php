 <?php
include ( 'koneksi.php' );
if (isset( $ _POST [ 'tambah' ])) {
   $ kode          = $ _POST [ 'id_operator' ];
        $ nama         = $ _POST [ 'nama' ];
        $ alamat     = $ _POST [ 'alamat' ];
        $ tlp     = $ _POST [ 'tlp' ];

     $ querytambah = mysqli_query( $ conn ," INSERT INTO tb_operator VALUES(' $ kode ', ' $ nama ', ' $ alamat ', ' $ tlp ') ") ;
  if ( $ querytambah ) {
    header( 'lokasi: v_operator.php' );
   } lain {
    echo " Upss Ada yang salah.. ";
   }

}
?>