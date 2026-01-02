# Kurumsal Press - Kurulum Rehberi

Bu rehber, Kurumsal Press WordPress temasını kurmanız ve yapılandırmanız için adım adım yönergeler içerir.

## Gereksinimler

- WordPress 5.0 veya üzeri
- PHP 7.0 veya üzeri
- MySQL 5.6 veya üzeri / MariaDB 10.1 veya üzeri

## Kurulum Adımları

### Adım 1: Tema Dosyalarını İndirin
1. GitHub'dan tema dosyalarını indirin veya klonlayın
2. ZIP dosyası olarak indirdiyseniz, arşivi çıkarın

### Adım 2: WordPress'e Yükleme

#### Yöntem A: WordPress Yönetici Paneli Üzerinden
1. WordPress yönetim panelinize giriş yapın
2. **Görünüm > Temalar > Yeni Ekle** menüsüne gidin
3. **Tema Yükle** butonuna tıklayın
4. **Dosya Seç** butonuna tıklayarak tema ZIP dosyasını seçin
5. **Şimdi Yükle** butonuna tıklayın
6. Yükleme tamamlandıktan sonra **Etkinleştir** butonuna tıklayın

#### Yöntem B: FTP/SFTP İle Manuel Yükleme
1. FTP/SFTP istemcinizi kullanarak WordPress kurulumunuza bağlanın
2. Tema klasörünü `/wp-content/themes/` dizinine yükleyin
3. WordPress yönetim panelinde **Görünüm > Temalar** menüsüne gidin
4. "Kurumsal Press" temasını bulun ve **Etkinleştir** butonuna tıklayın

### Adım 3: Menü Oluşturma

1. **Görünüm > Menüler** menüsüne gidin
2. **Yeni bir menü oluştur** linkine tıklayın
3. Menüye bir isim verin (örn: "Ana Menü")
4. **Menü Oluştur** butonuna tıklayın
5. Sol taraftaki listeden sayfalarınızı menüye ekleyin
6. **Menü Konumları** bölümünden "Primary Menu" seçeneğini işaretleyin
7. **Menüyü Kaydet** butonuna tıklayın

### Adım 4: Widget Ekleme

#### Sidebar (Yan Çubuk)
1. **Görünüm > Widget'lar** menüsüne gidin
2. "Sidebar" widget alanını bulun
3. İstediğiniz widget'ları sürükleyip bu alana bırakın
4. Önerilen widget'lar:
   - Son Yazılar
   - Kategoriler
   - Arama
   - Etiket Bulutu

#### Footer Widget'ları
1. Footer 1-4 alanlarını yapılandırın
2. Her alan için öneriler:
   - **Footer 1**: Hakkımızda metni
   - **Footer 2**: Hızlı linkler (Özel Menü Widget)
   - **Footer 3**: İletişim bilgileri (Metin Widget)
   - **Footer 4**: Sosyal medya linkleri

### Adım 5: Tema Özelleştirme

1. **Görünüm > Özelleştir** menüsüne gidin
2. Aşağıdaki ayarları yapılandırın:

#### Site Kimliği
- Site başlığı ve açıklaması
- Logo yükleme (önerilen: 400x100px)
- Site ikonu (favicon)

#### Ana Sayfa Ayarları
- Ana sayfayı statik sayfa olarak ayarlayın (isteğe bağlı)

#### Renkler
- Arka plan rengi özelleştirmesi

#### Ek CSS
Özel stil eklemeleri için bu bölümü kullanabilirsiniz

### Adım 6: Hero Bölümü Ayarları

Hero bölümü ana sayfada büyük karşılama bölümüdür. Özelleştirmek için:

1. `functions.php` dosyasına ekleyebileceğiniz customizer ayarları için README-THEME.md dosyasına bakın
2. Ya da doğrudan `header.php` dosyasındaki varsayılan metinleri düzenleyin

### Adım 7: Hizmetler Bölümü

Hizmetler bölümünde varsayılan olarak 6 hizmet kartı gösterilir:
- Web Tasarım
- Dijital Pazarlama
- Kurumsal Danışmanlık
- Mobil Uygulama
- Güvenlik
- Performans

Bu kartları özelleştirmek için `header.php` dosyasındaki ilgili bölümü düzenleyebilirsiniz.

## İlk İçeriğinizi Oluşturma

### Sayfa Oluşturma
1. **Sayfalar > Yeni Ekle** menüsüne gidin
2. Sayfa başlığı ve içeriğini girin
3. Öne çıkan görsel ekleyin (önerilen: 1200x600px)
4. **Yayımla** butonuna tıklayın

### Yazı Oluşturma
1. **Yazılar > Yeni Ekle** menüsüne gidin
2. Yazı başlığı ve içeriğini girin
3. Kategori ve etiket ekleyin
4. Öne çıkan görsel ekleyin
5. **Yayımla** butonuna tıklayın

## Önerilen Eklentiler

Tema ile birlikte kullanabileceğiniz bazı önerilen eklentiler:

### SEO
- **Yoast SEO** veya **All in One SEO Pack**
- Arama motoru optimizasyonu için

### Performans
- **WP Super Cache** veya **W3 Total Cache**
- Hız optimizasyonu için

### Güvenlik
- **Wordfence Security**
- Site güvenliği için

### İletişim Formu
- **Contact Form 7** veya **WPForms**
- İletişim sayfası için

### Galeri
- **NextGEN Gallery**
- Fotoğraf galerileri için

## Özelleştirme İpuçları

### Renkleri Değiştirme
`style.css` dosyasının başındaki CSS değişkenlerini düzenleyin:

```css
:root {
    --primary-color: #2c3e50;      /* Ana renk */
    --secondary-color: #3498db;    /* İkincil renk */
    --accent-color: #e74c3c;       /* Vurgu rengi */
}
```

### Logo Boyutu Ayarlama
`functions.php` dosyasında logo boyut ayarlarını bulun ve düzenleyin:

```php
add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
) );
```

### Yazı Özeti Uzunluğu
`functions.php` dosyasında excerpt length fonksiyonunu düzenleyin:

```php
function kurumsalpress_excerpt_length( $length ) {
    return 40; // Kelime sayısını değiştirin
}
```

## Child Theme Oluşturma

Tema güncellemelerinde değişikliklerinizi kaybetmemek için child theme kullanın:

1. `/wp-content/themes/` dizininde yeni bir klasör oluşturun: `kurumsalpress-child`
2. Bu klasörde `style.css` dosyası oluşturun:

```css
/*
Theme Name: Kurumsal Press Child
Template: kurumsalpress
*/
```

3. `functions.php` dosyası oluşturun:

```php
<?php
function kurumsalpress_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'kurumsalpress_child_enqueue_styles' );
```

4. Child temayı etkinleştirin

## Sorun Giderme

### Tema Görünmüyor
- Tema klasörünün doğru dizinde olduğundan emin olun
- Dosya izinlerini kontrol edin (755 veya 775)
- WordPress önbelleğini temizleyin

### Menü Görünmüyor
- Bir menü oluşturduğunuzdan emin olun
- Menüyü "Primary Menu" konumuna atadığınızı kontrol edin
- Sayfa önbelleğini temizleyin

### Widget'lar Çalışmıyor
- Widget alanlarının doğru tanımlandığından emin olun
- Tema'nın tam yüklendiğinden emin olun
- WordPress'i güncelleyin

### Stil Değişiklikleri Görünmüyor
- Tarayıcı önbelleğini temizleyin (Ctrl+F5)
- WordPress önbellek eklentilerini temizleyin
- CSS dosyasının doğru yüklendiğini kontrol edin

## Destek

Sorunlarla karşılaşırsanız:
1. README-THEME.md dosyasını inceleyin
2. WordPress.org forumlarını kontrol edin
3. GitHub repository'de issue açın: https://github.com/integrumart/kurumsalpress

## İleri Seviye Özelleştirme

### Özel Post Types Ekleme
`functions.php` dosyasına özel post type kodları ekleyebilirsiniz.

### Özel Sayfa Şablonları
`template-parts` klasöründe yeni şablonlar oluşturabilirsiniz.

### Customizer Ayarları Ekleme
`functions.php` dosyasına WordPress Customizer API kullanarak özel ayarlar ekleyebilirsiniz.

## Güncelleme

Tema güncellendiğinde:
1. Önce child theme kullandığınızdan emin olun
2. Tema dosyalarını yedekleyin
3. Yeni versiyonu yükleyin
4. Test edin ve gerekli ayarlamaları yapın

---

**Kurulum hakkında sorularınız mı var?**
GitHub repository'sinde issue açın veya documentation'ı inceleyin.
