# Kurumsal Press - Modern WordPress Kurumsal Teması

Modern, şık ve profesyonel bir WordPress kurumsal teması. İşletmeniz için güçlü ve özelleştirilebilir bir çözüm.

## Özellikler

### 🎨 Modern ve Şık Tasarım
- Profesyonel gradient renk şeması
- Temiz ve minimal arayüz
- Göz alıcı animasyonlar ve geçişler
- Modern tipografi

### 📱 Responsive (Duyarlı) Tasarım
- Tüm cihazlarda mükemmel görünüm
- Mobil, tablet ve masaüstü uyumlu
- Mobil menü desteği
- Esnek grid sistemi

### 🚀 Performans ve Hız
- Optimize edilmiş kod yapısı
- Hızlı yükleme süreleri
- SEO dostu yapı
- Temiz HTML5 kodu

### 🎯 Kurumsal Özellikler
- Hero bölümü ile etkileyici karşılama
- Hizmetler showcase bölümü
- Özelleştirilebilir widget alanları
- Footer widget alanları (4 adet)
- Sidebar desteği

### 🛠️ WordPress Özellikleri
- Özel menü desteği (Ana menü ve Footer menü)
- Widget alanları
- Öne çıkan görsel desteği
- Özel logo desteği
- Özel header desteği
- Özel background desteği
- Yorum sistemi
- Sayfalama
- Arama fonksiyonu

## Kurulum

1. WordPress admin paneline giriş yapın
2. Görünüm > Temalar > Yeni Ekle
3. "Tema Yükle" butonuna tıklayın
4. Tema dosyasını yükleyin veya tema klasörünü `/wp-content/themes/` dizinine yükleyin
5. Temayı etkinleştirin

## Özelleştirme

### Menü Ayarları
1. Görünüm > Menüler
2. Yeni bir menü oluşturun
3. Menüyü "Primary Menu" konumuna atayın

### Widget Ayarları
1. Görünüm > Widget'lar
2. Widget'ları sürükleyip bırakarak istediğiniz alana ekleyin
3. Mevcut widget alanları:
   - Sidebar (Yan çubuk)
   - Footer 1-4 (Alt kısım 4 kolon)

### Hero Bölümü Özelleştirme
Tema özelleştirici üzerinden (Görünüm > Özelleştir):
- Ana başlık
- Alt başlık
- Buton metinleri ve linkleri
- Renk şeması

### Hizmetler Bölümü
- 6 adet hizmet kartı
- Her kart için: İkon, başlık ve açıklama
- Tema özelleştirici üzerinden düzenlenebilir

## Sayfa Şablonları

Tema aşağıdaki şablonları içerir:
- `index.php` - Ana sayfa
- `single.php` - Tekil yazı sayfası
- `page.php` - Sayfa şablonu
- `archive.php` - Arşiv sayfası
- `search.php` - Arama sonuçları
- `404.php` - Sayfa bulunamadı
- `comments.php` - Yorum şablonu

## Teknik Detaylar

### Gereksinimler
- WordPress 5.0 veya üzeri
- PHP 7.0 veya üzeri
- Modern web tarayıcı

### Desteklenen Özellikler
- HTML5
- CSS3 (Grid, Flexbox, Animations)
- JavaScript (ES5+)
- WordPress REST API
- Custom Post Types uyumlu
- WooCommerce uyumlu (opsiyonel)

### Dosya Yapısı
```
kurumsalpress/
├── style.css              # Ana stil dosyası
├── functions.php          # Tema fonksiyonları
├── index.php             # Ana şablon
├── header.php            # Header şablonu
├── footer.php            # Footer şablonu
├── sidebar.php           # Sidebar şablonu
├── single.php            # Tekil yazı şablonu
├── page.php              # Sayfa şablonu
├── archive.php           # Arşiv şablonu
├── search.php            # Arama şablonu
├── 404.php               # 404 şablonu
├── comments.php          # Yorum şablonu
├── js/
│   └── scripts.js        # JavaScript dosyası
└── template-parts/
    ├── content.php       # Yazı içeriği
    ├── content-page.php  # Sayfa içeriği
    └── content-none.php  # İçerik yok
```

## Renk Şeması

Tema şu renk paletini kullanır:
- **Primary Color**: #2c3e50 (Koyu mavi)
- **Secondary Color**: #3498db (Mavi)
- **Accent Color**: #e74c3c (Kırmızı)
- **Success Color**: #27ae60 (Yeşil)
- **Light Gray**: #f8f9fa
- **Text Color**: #333333

## Özelleştirme İpuçları

### CSS Özelleştirme
`style.css` dosyasında CSS değişkenleri kullanılmıştır:
```css
:root {
    --primary-color: #2c3e50;
    --secondary-color: #3498db;
    --accent-color: #e74c3c;
}
```

Bu değişkenleri değiştirerek tema renklerini kolayca özelleştirebilirsiniz.

### Child Theme Oluşturma
Değişikliklerinizi korumak için child theme kullanmanız önerilir.

## Destek ve Geliştirme

- **Repository**: https://github.com/integrumart/kurumsalpress
- **Versiyon**: 1.0.0
- **Lisans**: GNU General Public License v2 or later

## Yazar

**Integrum Art**
- GitHub: https://github.com/integrumart

## Değişiklik Günlüğü

### Versiyon 1.0.0
- İlk yayın
- Modern ve şık tasarım
- Responsive layout
- Hero bölümü
- Hizmetler showcase
- Widget desteği
- Menü sistemi
- SEO optimizasyonu

## Lisans

Bu tema GNU General Public License v2 veya üzeri altında lisanslanmıştır.
