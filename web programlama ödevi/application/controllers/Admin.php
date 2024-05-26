<?php


class Admin extends CI_Controller{


  public function index()
  {

    $this->load->view('admin/yapilacaklar');
  }


public function yapilacaklar()
{
 $data['head']="Görev Listesi";
 $this->load->view('admin/yapilacaklar/yapilacaklar',$data);
}


public function gorevsil($id)
{
  yapilacaklar::delete($id);
  back();
}


public function gorevekle()
{
  $data=['tarih'=>postvalue('tarih'),
  'bitistarih'=>postvalue('bitistarih'),
  'icerik'=>postvalue('icerik'),
  'adi'=>postvalue('adi')];
  
  yapilacaklar::insert($data);
  back();

}


public function gorev_duzenle($id)
{ 

 if(ispost())
 {  

  $data=['durum'=>postvalue('durum'),
  'tarih'=>postvalue('tarih'),
  'oncelikdurum'=>postvalue('oncelikdurum'),
  'bitistarih'=>postvalue('bitistarih'),
  'icerik'=>postvalue('icerik'),
  'adi'=>postvalue('adi')];


  yapilacaklar::update($id,$data);
  redirect('admin/yapilacaklar');
}  
$data['head']="Görev Düzenle";
$this->load->view('admin/yapilacaklar/gorev_duzenle',$data);
}


public function gorevaktif($id)
{
  $yapilacaklar=yapilacaklar::find($id);

  if ($yapilacaklar->durum==1) {
    $data=['durum'=>0];
    yapilacaklar::update($id,$data); 
  }
  else
  {
    $data=['durum'=>1];
    yapilacaklar::update($id,$data);

  }
  back(); 
}


public function oncelikdurumu($id)
{
  $yapilacaklar=yapilacaklar::find($id);

  if ($yapilacaklar->oncelikdurum==1) {
    $data=['oncelikdurum'=>0];
    yapilacaklar::update($id,$data); 
  }
  else
  {
    $data=['oncelikdurum'=>1];
    yapilacaklar::update($id,$data);

  }
  back(); 
}





public function cikis()
{
  $this->session->sess_destroy();
  redirect('admin');
}

}