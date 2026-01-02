# KurumsalPress - Modern Kurumsal WordPress Teması

Gösterişli, modern ve profesyonel kurumsal WordPress teması. İşletmenizi dijital dünyada öne çıkaracak zengin özelliklere sahiptir.

## 🌟 Özellikler

### Tasarım
- ✨ Modern ve gösterişli tasarım
- 🎨 Gradient renkler ve animasyonlar
- 📱 Tam responsive (mobil uyumlu)
- 🎭 Yumuşak geçişler ve hover efektleri
- 💫 Scroll animasyonları
- 🎪 Sticky (yapışkan) başlık
- 🔝 "Yukarı Çık" butonu

### Özellikler
- 🏠 Özelleştirilebilir Hero bölümü
- 📰 Modern blog görünümü
- 💼 Hizmetler özel içerik tipi
- 👥 Takım üyeleri özel içerik tipi
- 🎯 Widget alanları (Sidebar, 3 Footer widget)
- 🎨 WordPress Customizer entegrasyonu
- 📝 SEO dostu yapı
- ♿ Erişilebilirlik standartları
- 🌐 Çeviri hazır (Turkish & English)
- 📸 Özel görsel boyutları
- 💬 Yorum sistemi desteği

### Teknik Özellikler
- ✅ WordPress 5.0+ uyumlu
- ✅ Gutenberg editör desteği
- ✅ HTML5 & CSS3
- ✅ Temiz ve optimize kod
- ✅ Özel logo desteği
- ✅ Özel menü konumları
- ✅ Post thumbnail desteği

## 📦 Kurulum

1. WordPress admin paneline giriş yapın
2. **Görünüm > Temalar > Yeni Ekle** menüsüne gidin
3. **Tema Yükle** butonuna tıklayın
4. Tema zip dosyasını yükleyin
5. **Etkinleştir** butonuna tıklayın

### Manuel Kurulum

1. Tema dosyalarını `/wp-content/themes/kurumsalpress/` klasörüne yükleyin
2. WordPress admin panelinden temayı etkinleştirin

## 🎨 Özelleştirme

### Customizer Ayarları

**Görünüm > Özelleştir** menüsünden aşağıdaki ayarları yapabilirsiniz:

#### Hero Bölümü
- Hero başlık
- Hero açıklama
- Buton metni
- Buton linki

#### İletişim Bilgileri
- Telefon numarası
- E-posta adresi
- Adres

#### Site Kimliği
- Site logosu
- Site ikonu (favicon)
- Site başlığı ve sloganı

#### Renkler
- Arkaplan rengi

## 📋 Menüler

Tema 2 menü konumunu destekler:

1. **Ana Menü (Primary Menu)**: Başlıkta görünür
2. **Alt Menü (Footer Menu)**: Footer'da görünür

Menüleri **Görünüm > Menüler** bölümünden oluşturabilirsiniz.

## 🔧 Widget Alanları

Tema 4 widget alanı sunar:

1. **Sidebar**: Yan sütun widget alanı
2. **Footer 1**: İlk footer widget alanı
3. **Footer 2**: İkinci footer widget alanı
4. **Footer 3**: Üçüncü footer widget alanı

Widget'ları **Görünüm > Widget'lar** bölümünden ekleyebilirsiniz.

## 💼 Özel İçerik Tipleri

### Hizmetler (Services)
İşletmenizin sunduğu hizmetleri sergilemek için kullanılır.

- Başlık
- İçerik
- Öne çıkan görsel
- Özet

### Takım (Team)
Ekip üyelerinizi tanıtmak için kullanılır.

- İsim
- Görev/Pozisyon
- Biyografi
- Profil fotoğrafı

## 📱 Responsive Tasarım

Tema tüm cihazlarda mükemmel görünür:

- 📱 Mobil telefonlar
- 📱 Tabletler
- 💻 Dizüstü bilgisayarlar
- 🖥️ Masaüstü bilgisayarlar

## 🎯 Ana Sayfa Kullanımı

Ana sayfanızı özelleştirmek için:

1. **Sayfalar > Yeni Ekle** ile yeni bir sayfa oluşturun
2. Sayfa içeriğinizi ekleyin
3. **Ayarlar > Okuma** menüsüne gidin
4. "Ana sayfa görünümü" kısmından "Statik bir sayfa" seçin
5. Oluşturduğunuz sayfayı "Ana sayfa" olarak seçin

## 🎨 Renk Paleti

Tema aşağıdaki renk paletini kullanır:

- **Primary**: #2563eb (Mavi)
- **Secondary**: #7c3aed (Mor)
- **Accent**: #f59e0b (Turuncu)
- **Dark**: #1e293b (Koyu)
- **Light**: #f8fafc (Açık)

CSS değişkenleri ile renkleri özelleştirebilirsiniz.

## 🔌 Önerilen Eklentiler

Tema aşağıdaki eklentilerle daha da güçlenir:

- **Contact Form 7**: İletişim formu oluşturmak için
- **Yoast SEO**: SEO optimizasyonu için
- **WP Super Cache**: Hızlandırma için
- **Jetpack**: Ek özellikler için
- **WooCommerce**: E-ticaret eklemek için

## 💻 Geliştirici Bilgileri

### Dosya Yapısı

```
kurumsalpress/
├── style.css              # Ana stil dosyası
├── functions.php          # Tema fonksiyonları
├── index.php              # Ana şablon
├── header.php             # Başlık şablonu
├── footer.php             # Footer şablonu
├── single.php             # Tekil yazı şablonu
├── page.php               # Sayfa şablonu
├── archive.php            # Arşiv şablonu
├── search.php             # Arama şablonu
├── 404.php                # 404 hata şablonu
├── comments.php           # Yorumlar şablonu
├── searchform.php         # Arama formu
├── js/
│   └── main.js            # JavaScript dosyası
└── README.md              # Bu dosya
```

### Hooks ve Filters

Tema standart WordPress hook'larını kullanır ve özelleştirilebilir.

### Child Theme Oluşturma

Özelleştirmelerinizi korumak için child theme oluşturabilirsiniz:

```css
/*
Theme Name: KurumsalPress Child
Template: kurumsalpress
*/

@import url("../kurumsalpress/style.css");

/* Özel stilleriniz buraya */
```

## 📄 Lisans

Bu tema GNU General Public License v2 veya üzeri ile lisanslanmıştır.

## 👨‍💻 Geliştirici

**IntegrumArt**
- GitHub: https://github.com/integrumart

## 🆘 Destek

Sorun bildirmek veya öneride bulunmak için GitHub Issues sayfasını kullanabilirsiniz:
https://github.com/integrumart/kurumsalpress/issues

## 📝 Değişiklik Günlüğü

### Versiyon 1.0.0
- İlk sürüm
- Temel tema yapısı
- Hero bölümü
- Hizmetler ve Takım özel içerik tipleri
- Responsive tasarım
- Animasyonlar ve efektler
- Customizer entegrasyonu

## 🙏 Teşekkürler

KurumsalPress temasını kullandığınız için teşekkür ederiz! 🎉
