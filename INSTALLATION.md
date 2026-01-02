# KurumsalPress Kurulum ve Kullanım Rehberi

## 🚀 Hızlı Başlangıç

### Gereksinimler
- WordPress 5.0 veya üzeri
- PHP 7.4 veya üzeri
- Modern bir web tarayıcı

### Kurulum Adımları

#### Yöntem 1: WordPress Admin Panelinden

1. WordPress admin paneline giriş yapın
2. **Görünüm → Temalar** menüsüne gidin
3. **Yeni Ekle** butonuna tıklayın
4. **Tema Yükle** butonuna tıklayın
5. Tema ZIP dosyasını seçin ve yükleyin
6. **Etkinleştir** butonuna tıklayın

#### Yöntem 2: FTP ile Manuel Kurulum

1. Tema dosyalarını indirin
2. FTP ile sunucunuza bağlanın
3. `/wp-content/themes/` klasörüne gidin
4. `kurumsalpress` klasörünü bu dizine yükleyin
5. WordPress admin panelinden temayı etkinleştirin

#### Yöntem 3: GitHub'dan Kurulum

```bash
cd wp-content/themes/
git clone https://github.com/integrumart/kurumsalpress.git
```

## ⚙️ İlk Kurulum Ayarları

### 1. Permalinks Ayarı

Özel içerik tiplerinin düzgün çalışması için:

1. **Ayarlar → Kalıcı Bağlantılar** gidin
2. **Yazı adı** veya **Özel Yapı** seçin
3. **Değişiklikleri Kaydet** butonuna tıklayın

### 2. Ana Sayfa Ayarı

Statik ana sayfa oluşturmak için:

1. **Sayfalar → Yeni Ekle** ile yeni sayfa oluşturun
2. Sayfa başlığı: "Ana Sayfa"
3. İçerik ekleyin (opsiyonel)
4. **Yayınla** butonuna tıklayın
5. **Ayarlar → Okuma** gidin
6. "Ana sayfa görünümü" kısmından **Statik bir sayfa** seçin
7. Ana sayfa olarak oluşturduğunuz sayfayı seçin
8. **Değişiklikleri Kaydet**

### 3. Menü Oluşturma

#### Primary Menu (Ana Menü)

1. **Görünüm → Menüler** gidin
2. **Yeni menü oluştur** tıklayın
3. Menü adı: "Ana Menü"
4. Sol taraftan sayfa/kategori ekleyin
5. "Primary Menu" konumunu işaretleyin
6. **Menüyü Kaydet**

#### Footer Menu (Alt Menü)

1. Yeni bir menü daha oluşturun
2. Menü adı: "Footer Menü"
3. İlgili linkleri ekleyin
4. "Footer Menu" konumunu işaretleyin
5. **Menüyü Kaydet**

### 4. Widget Ayarları

Widget eklemek için **Görünüm → Widget'lar** gidin:

#### Sidebar Widget'ı
Öneriler:
- Arama
- Son Yazılar
- Kategoriler
- Etiket Bulutu

#### Footer Widget'ları (3 adet)

**Footer 1:**
- Metin widget'ı (Hakkımızda)

**Footer 2:**
- Özel Menü (Hızlı Linkler)

**Footer 3:**
- Metin widget'ı (İletişim Bilgileri)

## 🎨 Customizer Ayarları

### Hero Bölümü Özelleştirme

1. **Görünüm → Özelleştir** gidin
2. **Hero Section** tıklayın
3. Aşağıdaki alanları doldurun:

```
Hero Title: Modern Kurumsal Çözümler
Hero Description: İşletmenizi dijital dünyada öne çıkaracak 
                  profesyonel çözümler sunuyoruz.
Hero Button Text: Hemen Başlayın
Hero Button URL: /iletisim/ (veya istediğiniz sayfa)
```

### İletişim Bilgileri

1. **Görünüm → Özelleştir** gidin
2. **Contact Information** tıklayın
3. Bilgilerinizi girin:

```
Phone: +90 XXX XXX XX XX
Email: info@example.com
Address: İstanbul, Türkiye
```

### Logo ve Site Kimliği

1. **Görünüm → Özelleştir** gidin
2. **Site Kimliği** tıklayın
3. **Logo seç** ile logo yükleyin
4. Site başlığı ve açıklamayı düzenleyin
5. Site ikonu (favicon) yükleyin

### Renkler

1. **Görünüm → Özelleştir** gidin
2. **Renkler** tıklayın
3. Arkaplan rengini özelleştirin

## 📝 İçerik Oluşturma

### Blog Yazısı Ekleme

1. **Yazılar → Yeni Ekle** gidin
2. Başlık yazın
3. İçerik ekleyin
4. **Öne çıkan görsel** ekleyin (önerilen: 1200x600px)
5. Kategori ve etiket ekleyin
6. **Yayınla**

### Sayfa Ekleme

1. **Sayfalar → Yeni Ekle** gidin
2. Başlık yazın
3. İçerik ekleyin
4. Öne çıkan görsel ekleyin (opsiyonel)
5. **Yayınla**

### Hizmet Ekleme

1. **Hizmetler → Yeni Ekle** gidin
2. Hizmet başlığı yazın
3. Hizmet detaylarını ekleyin
4. Öne çıkan görsel ekleyin (önerilen: 400x300px)
5. Kısa özet yazın
6. **Yayınla**

### Takım Üyesi Ekleme

1. **Takım → Yeni Ekle** gidin
2. İsim yazın
3. Biyografi ekleyin
4. Profil fotoğrafı ekleyin (önerilen: 400x400px)
5. **Yayınla**

## 🎯 Örnek Sayfa Yapıları

### Ana Sayfa İçeriği

```
Kurulum sonrası ana sayfanız otomatik olarak:
- Hero bölümü (Customizer'dan düzenlenebilir)
- Hizmetler bölümü (ilk 6 hizmet)
- Blog bölümü (son 3 yazı)
gösterecektir.
```

### Hakkımızda Sayfası

```
1. Sayfa oluşturun: "Hakkımızda"
2. Şirket hikayenizi anlatın
3. Takım bölümü için shortcode ekleyin (opsiyonel)
4. Öne çıkan görsel ekleyin
```

### İletişim Sayfası

```
1. Sayfa oluşturun: "İletişim"
2. İletişim bilgilerinizi yazın
3. İletişim formu eklentisi kullanın (Contact Form 7 önerilir)
4. Harita embed'i ekleyin (opsiyonel)
```

## 🔌 Önerilen Eklentiler

### Zorunlu Değil, Ama Tavsiye Edilir:

1. **Contact Form 7**
   - İletişim formu oluşturma
   - Kurulum: Eklentiler → Yeni Ekle → "Contact Form 7" ara

2. **Yoast SEO**
   - SEO optimizasyonu
   - Meta açıklamaları
   - XML sitemap

3. **WP Super Cache**
   - Site hızlandırma
   - Cache yönetimi

4. **Jetpack**
   - İstatistikler
   - Güvenlik
   - Performans

5. **Akismet**
   - Spam koruması
   - Yorum moderasyonu

## 🛠️ Özelleştirme İpuçları

### Renk Değiştirme

Child theme oluşturup CSS değişkenlerini override edin:

```css
:root {
    --primary-color: #YOUR-COLOR;
    --secondary-color: #YOUR-COLOR;
}
```

### Font Değiştirme

```css
body {
    font-family: 'Your Font', sans-serif;
}
```

### Logo Boyutu Ayarlama

```css
.site-logo {
    font-size: 2rem; /* İstediğiniz boyut */
}

.custom-logo {
    max-width: 200px; /* Logo genişliği */
}
```

## 📱 Mobil Uyumluluk Testi

Tema mobil uyumlu olup olmadığını test etmek için:

1. Chrome DevTools açın (F12)
2. Device Toolbar'ı aktif edin (Ctrl+Shift+M)
3. Farklı cihazları test edin:
   - iPhone
   - iPad
   - Android
   - Responsive

## 🔍 SEO Ayarları

### Temel SEO Kontrol Listesi:

- ✅ Permalinks ayarlandı mı?
- ✅ Site başlığı ve açıklaması girildi mi?
- ✅ Her yazıda öne çıkan görsel var mı?
- ✅ Alt metinler (alt text) eklendi mi?
- ✅ Kategoriler ve etiketler kullanıldı mı?
- ✅ Site haritası (sitemap) oluşturuldu mu?

## ⚡ Performans Optimizasyonu

### Hız İyileştirme İpuçları:

1. **Görselleri Optimize Edin**
   - WebP formatı kullanın
   - Boyutları uygun tutun
   - Lazy loading aktif

2. **Cache Kullanın**
   - WP Super Cache eklentisi
   - Browser cache etkinleştirin

3. **CDN Kullanın**
   - Cloudflare
   - StackPath

4. **Gereksiz Eklentilerden Kurtulun**
   - Sadece gerekli eklentiler
   - Düzenli temizlik

## 🆘 Sık Sorulan Sorular

### Q: Tema demo içeriği içeriyor mu?
**A:** Hayır, tema boş kurulur. İçeriği kendiniz oluşturmalısınız.

### Q: Child theme nasıl oluşturulur?
**A:** Yeni bir klasör oluşturun ve style.css ile functions.php ekleyin.

### Q: Tema Gutenberg ile uyumlu mu?
**A:** Evet, tam uyumludur.

### Q: Çoklu dil desteği var mı?
**A:** Tema çeviri hazırdır. WPML veya Polylang kullanabilirsiniz.

### Q: E-ticaret ekleyebilir miyim?
**A:** Evet, WooCommerce ile uyumludur.

### Q: Ücretsiz mi?
**A:** Evet, GPL lisanslıdır.

## 📞 Destek

Sorun yaşıyorsanız:

1. **GitHub Issues**: Hata bildirin
2. **Dokümantasyon**: Tüm dosyaları okuyun
3. **WordPress Forum**: Topluluk desteği

## 🎓 Eğitim Kaynakları

- [WordPress Codex](https://codex.wordpress.org/)
- [WordPress Theme Handbook](https://developer.wordpress.org/themes/)
- [CSS Tricks](https://css-tricks.com/)

## ✅ Kurulum Kontrol Listesi

- [ ] Tema kuruldu ve aktif edildi
- [ ] Permalinks ayarlandı
- [ ] Ana sayfa oluşturuldu ve ayarlandı
- [ ] Menüler oluşturuldu
- [ ] Widget'lar eklendi
- [ ] Hero bölümü özelleştirildi
- [ ] İletişim bilgileri girildi
- [ ] Logo yüklendi
- [ ] İlk içerikler oluşturuldu
- [ ] Mobil görünüm test edildi
- [ ] SEO ayarları yapıldı

## 🎉 Tamamdır!

Artık KurumsalPress teması kullanıma hazır. Başarılar! 🚀
