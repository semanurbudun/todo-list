<?php 
class Cookie extends CI_Controller { 

   public function index() { 


     $data =  array(
        'id'      => 1,
        'qty'     => 1,
        'price'   => '100',
        'name'    => 'aasd',
     );


     $this->session->set_userdata($data);
     var_dump($this->session->all_userdata());
     $this->load->view('sepett');
  } 

  public function ekle($id)
  {

    $adet=postvalue('adet');
    $size=postvalue('size');
    $yazi=postvalue('yazi');
    $price=urunler::find($id);

    if($price->discount==0)

    {
      $da=$price->price;
   }else{
      $da=$price->discount;
   }


   $data = array(
    array(
     'id'      => $id,
     'qty'     => 1,
     'price'   => $da,
     'name'    => $price->title,
     'options' => array('ozellik' => $size, 'yazi' => $yazi, 'resim' => $resim, )

  ));

   $this->cart->insert($data);
   flash('success','check','Ürününüz Sepetinize Eklendi! <a href="'.base_url('kategori/sepetim').'" align="right" class="btn btn-success">Sepete Git</a>');
   var_dump(session_id());
   back();


}




public function sile($id)
{


   $size=postvalue('option');
   $yazi=postvalue('option');
   $resim=postvalue('option');

   $price=urunler::find($id);

   if($price->discount==0)

   {
      $da=$price->price;
   }else{
      $da=$price->discount;
   }

   $data = array(
    array(
     'id'      => $id,
     'qty'     => -1,
     'price'   => $da,
     'name'    => $price->title,
     'options' => array('ozellik' => $size, 'yazi' => $yazi, 'resim' => $resim, )

  ));

   $this->cart->insert($data);

   back();

}

public function teksil($id)
{

  $data = array(
    array(
     'rowid'      => $id,
     'qty'     => 0,


  ));
  $this->cart->update($data);
  back();
}



public function sil()
{
   session_destroy();
   redirect();
}





public function sss($id)
{

  if(ispost())
  {
     $cup=postvalue('size');

     if($cup=='a') { 
      flash('danger','check','Lütfen Seçim Yapınız');

      back();

   }
   elseif($cup!='a') { 

     $adet=postvalue('adet');
     $size=postvalue('size');
     $yazi=postvalue('yazi');
     $data['foto']=imageupload('foto','siparis','jpg|png');
     isletfoto::insert($data);

     $price=urunler::find($id);

     if($price->discount==0)

     {
      $da=$price->price;
   }else{
      $da=$price->discount;
   }


   $data = array(
     array(
        'id'      => $id,
        'qty'     => $adet,
        'price'   => $da,
        'name'    => $price->title,
        'ozellik'=>$size,
        'yazi'=>$yazi,
        'foto'=> $data['foto']

     ));

   $this->cart->insert($data);
   flash('success','check','Ürününüz Sepetinize Eklendi! <a href="'.base_url('kategori/sepetim').'" align="right" class="btn btn-success">Sepete Git</a>');
   back();


}
}  
}





public function sepetekle()
{
   $tur=postvalue('tur');
   $tarih=postvalue('tarih');
   $qty=postvalue('kisi');
   $fiyat=postvalue('fiyat');
   $pb=postvalue('pbirim');

   $turad=turlar::find($tur)->titleen;

   $data = array(
     array(
        'id'      => $tur,
        'qty'     => $qty,
        'price'   => $fiyat,
        'name'    => $turad,
        'ozellik'=>$pb,
        'tarih'=>$tarih

     ));

   $this->cart->insert($data);

   back();
}



} 
?>