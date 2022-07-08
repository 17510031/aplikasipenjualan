<?php
include ( 'koneksi.php' );
if (isset( $ _POST [ 'tambah' ])) {
        $ kode          = $ _POST [ 'kode_barang' ];
        $ nama         = $ _POST [ 'nama' ];
        $ satuan     = $ _POST [ 'satuan' ];
        $ qty       =   $ _POST [ 'qty' ];
        $ beli    = $ _POST [ 'beli' ];
        $ jual     = $ _POST [ 'jual' ];


     $ querytambah = mysqli_query( $ conn ," INSERT INTO tb_barang VALUES(' $ kode ', ' $ nama ', ' $ satuan ', ' $ qty ', ' $ beli ', ' $ jual ') ") ;
  if ( $ querytambah ) {
    header( 'lokasi: v_product.php' );
   } lain {
    echo " Upss Ada yang salah.. ";
   }

}
?>
