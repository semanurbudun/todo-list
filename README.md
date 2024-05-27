ToDo List Uygulaması Geliştirme Süreci: 

1. Hazırlık: 

Framework Seçimi: Proje için PHP'nin CodeIgniter framework'ü tercih edildi. 

Tema Seçimi: Görselliği kolaylaştırmak için hazır bir tema kullanıldı. 

2. Veritabanı İşlemleri: 

Veritabanı Oluşturma: "todo_list" adında veritabanı açıldı. 

Tablo Oluşturma: "yapilacaklar" adında bir tablo oluşturuldu. 

Veri Ekleme: Uygulamada kullanılacak görevler tabloya eklendi. 

3. İşlem Tanımlama: 

Admin.php Controller Oluşturma: İşlemleri yönetmek için bir controller oluşturuldu. 

Fonksiyon Tanımlama: Ekleme, silme, güncelleme ve listeleme gibi işlemler için fonksiyonlar tanımlandı. 

4. Veri İşleme: 

Veritabanı Bağlantısı: Her sayfada veritabanına bağlantı kuruldu. 

Veri Çekme: Listeleme işlemleri için gerekli bilgiler veritabanından çekildi. 

Veri Yazdırma: Çekilen veriler ekrana yazdırıldı. 

5. İşlevsellik Ekleme: 

Listeleme: Yapılacaklar listesi dinamik olarak listelendi. 

Ekleme: Yeni görevler kolayca eklendi. 

Silme: İstenmeyen görevler silindi. 

Güncelleme: Görevlerin içeriği ve durumu güncellendi. 

6. Proje Tamamlama: 

Tüm İşlevler Test Edildi: Uygulamanın tüm fonksiyonları hatasız çalışır hale getirildi. 

 ---------------------------------------------------------------------------------------------------

“yapilacaklar.php” Sayfası Analizi: 

1. Kod Yapısı: 

Controller: 

Admin.php dosyası, uygulama işlevlerini yöneten controller'ı temsil eder. 

index() fonksiyonu, varsayılan controller fonksiyonudur ve uygulama arayüzünü (listeleme, ekleme) görüntüler. 

gorevekle(), gorevaktif(), oncelikdurumu(), gorev_duzenle(), gorevsil() fonksiyonları, ekleme, durum ve öncelik değiştirme, düzenleme ve silme gibi işlemleri gerçekleştirir. 

Görünüm: 

index.php dosyası, uygulama arayüzünü oluşturan HTML kodunu içerir. 

header.php ve leftmenu.php dosyaları, index.php tarafından dahil edilen ve ortak öğeler barındıran (header, menü) dosyalardır. 

Kodda, CodeIgniter'ın view() fonksiyonu ve base_url() yardımcı fonksiyonu gibi framework'e özgü öğeler kullanılmaktadır. 

2. İşlevler: 

Listeleme: 

$yapilacaklar=yapilacaklar::select(); satırı, yapilacaklar model sınıfından (varsayıldığı gibi) tüm aktif görevleri $yapilacaklar değişkenine aktarır. 

foreach ($yapilacaklar as $key) { ... } döngüsü, her bir görevi listede görüntüler. 

Görev adı, tamamlanma ve öncelik durumu, başlangıç ve bitiş tarihleri, düzenleme ve silme düğmeleri ile tablo halinde listelenir. 

Görev Ekleme: 

Görev Ekle butonuna tıklama, basicModal modal penceresini açar. 

Modal penceresinde, adi, tarih, bitistarih, icerik form alanları ile yeni görev bilgileri girilir. 

Kaydet butonuna tıklama, gorevekle() fonksiyonunu tetikler. 

Tamamlanma ve Öncelik Durumu Değiştirme: 

Listedeki her görev için, tamamlanma ve öncelik durumunu değiştirmek için bağlantı (URL) kullanılır. 

base_url('admin/gorevaktif/$key->id') ve base_url('admin/oncelikdurumu/$key->id') gibi URL'ler, gorevaktif() ve oncelikdurumu() fonksiyonlarını tetikler. 

Görev Düzenleme: 

Listedeki her görev için Düzenle düğmesine tıklama, gorev_duzenle() fonksiyonunu tetikler. 

Bu fonksiyon, seçilen görevin bilgilerini düzenleme sayfasına aktarır. 

 

Görev Silme: 

Listedeki her görev için Sil düğmesine tıklama, onay penceresi açar. 

Onay verilirse, gorevsil() fonksiyonu tetiklenir ve seçilen görev silinir. 

 

“gorev_duzenle.php” Sayfası Analizi: 

Kod Yapısı: 

Kod, index.php dosyasına benzer şekilde, muhtemelen bir görünüm dosyasına aittir. 

yapilacaklar::find($this->uri->segment(3)); satırı, URL'den (3. segment) görevin id'sini alarak, yapilacaklar model sınıfından (varsayıldığı gibi) ilgili görevi $yapilacaklar değişkenine atar. 

Kodun geri kalanı, bir form içerir. Form alanları görevin adı, başlangıç tarihi, bitiş tarihi ve detay (textarea) bilgilerini düzenlemeye olanak sağlar. 

Düzenleme İşlevi: 

Form, POST methodu ile admin/gorev_duzenle/görev id'si` adresine gönderilir. 

Form alanları (adi, tarih, bitistarih, icerik) görevin ilgili bilgilerini taşırır. 

Form enctype="multipart/form-data" özelliği ile muhtemelen dosya yüklemeye de izin verir (kodda dosya yükleme görülmemektedir). 

Güncelle butonuna tıklama form submit işlemini tetikler ve bilgiler gorev_duzenle() fonksiyonuna gönderilir. 

 
