# KurumsalPress Tema Özellikleri

## 🎨 Tasarım Özellikleri

### Gösterişli ve Modern Görünüm
- **Gradient Renkler**: Tema, modern gradient renk geçişleri kullanır
  - Primary gradient: Mavi (#2563eb) → Mor (#7c3aed)
  - Secondary gradient: Turuncu (#f59e0b) → Kırmızı (#ef4444)
- **Yumuşak Animasyonlar**: Tüm etkileşimler cubic-bezier geçişleriyle optimize edilmiştir
- **Gölge Efektleri**: 4 farklı gölge seviyesi (sm, md, lg, xl)

### Hero Bölümü
Ana sayfada gösterişli hero bölümü:
- Tam ekran veya özelleştirilebilir yükseklik
- Animasyonlu arka plan deseni
- Gradient arka plan
- 2 eylem butonu (Primary ve Secondary)
- Customizer'dan tamamen özelleştirilebilir

### Hover Efektleri
- Kartlar hover'da yukarı kalkar (translateY)
- Gradient çizgi animasyonu
- Görsel zoom efekti
- Buton gölge artışı

## 💼 İçerik Tipleri

### Hizmetler (Services)
```php
Post Type: service
Slug: /services/
Supports: title, editor, thumbnail, excerpt
Archive: Evet
Show in REST: Evet
```

### Takım (Team)
```php
Post Type: team
Slug: /team/
Supports: title, editor, thumbnail
Archive: Evet
Show in REST: Evet
```

## 🎯 Widget Alanları

### Sidebar
- Ana içerik alanının yanında
- Tüm sayfa ve yazılarda kullanılabilir

### Footer Widget'ları
- 3 adet eşit genişlikte kolon
- Responsive: Mobilde dikey sıralanır
- Otomatik varsayılan içerik

## 📱 Responsive Breakpoint'ler

```css
Mobile: < 768px
Tablet: 768px - 1024px
Desktop: > 1024px
```

### Mobile Değişiklikler
- Hamburger menü
- Tek kolonlu grid'ler
- Küçültülmüş başlıklar
- Optimize edilmiş padding'ler

## 🎨 Customizer Seçenekleri

### Hero Bölümü (kurumsalpress_hero)
1. `hero_title` - Başlık
   - Varsayılan: "Modern Kurumsal Çözümler"
   - Tip: text

2. `hero_description` - Açıklama
   - Varsayılan: "İşletmenizi dijital dünyada öne çıkaracak profesyonel çözümler sunuyoruz."
   - Tip: textarea

3. `hero_button_text` - Buton Metni
   - Varsayılan: "Hemen Başlayın"
   - Tip: text

4. `hero_button_url` - Buton Linki
   - Varsayılan: "#"
   - Tip: url

### İletişim Bilgileri (kurumsalpress_contact)
1. `contact_phone` - Telefon
2. `contact_email` - E-posta
3. `contact_address` - Adres

## 🎭 Animasyonlar

### CSS Animasyonları
1. `slideDown` - Header için
2. `float` - Hero arka plan için
3. `fadeInUp` - Hero içerik için
4. `fadeIn` - Genel fade in
5. `slideInLeft` - Soldan kayma
6. `pulse` - Nabız efekti

### JavaScript Animasyonları
- Scroll'da fade in (Intersection Observer)
- Smooth scroll
- Header gölge değişimi
- Back to top butonu

## 🔧 JavaScript Özellikleri

### Mobil Menü
```javascript
- Toggle açma/kapama
- Dışarı tıklamada kapatma
- Resize'da otomatik kapatma
- ARIA attributes
```

### Smooth Scroll
- Tüm anchor link'ler için
- Native smooth behavior
- Fallback desteği

### Back to Top
- 300px scroll'dan sonra görünür
- Smooth scroll to top
- Pulse animasyonu
- Fixed position

### Scroll Observer
- Intersection Observer API
- Kartlar için fade-in
- Otomatik unobserve
- Performance optimized

## 📋 Menü Özellikleri

### Primary Menu
- Responsive
- Hover animasyonları
- Current page indicator
- Alt menü desteği (WordPress varsayılan)

### Footer Menu
- Liste formatında
- Hover efektleri
- Responsive

## 🎨 CSS Değişkenleri

Tema CSS custom properties kullanır:

```css
--primary-color: #2563eb
--secondary-color: #7c3aed
--accent-color: #f59e0b
--dark-color: #1e293b
--light-color: #f8fafc
--text-color: #334155
--border-color: #e2e8f0
--success-color: #10b981

--gradient-1: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%)
--gradient-2: linear-gradient(135deg, #f59e0b 0%, #ef4444 100%)

--shadow-sm: 0 1px 2px rgba(0, 0, 0, 0.05)
--shadow-md: 0 4px 6px rgba(0, 0, 0, 0.1)
--shadow-lg: 0 10px 15px rgba(0, 0, 0, 0.1)
--shadow-xl: 0 20px 25px rgba(0, 0, 0, 0.15)

--transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1)
```

## 🖼️ Görsel Boyutları

```php
'kurumsalpress-featured' => 1200x600 (crop)
'kurumsalpress-thumb' => 400x300 (crop)
```

## 📝 Template Hiyerarşisi

Tema WordPress template hiyerarşisini takip eder:

1. `index.php` - Ana template, fallback
2. `single.php` - Tekil yazılar
3. `page.php` - Sayfalar
4. `archive.php` - Arşivler (kategori, etiket, vb.)
5. `search.php` - Arama sonuçları
6. `404.php` - Bulunamadı sayfası

## ♿ Erişilebilirlik

- ARIA labels ve attributes
- Screen reader text
- Keyboard navigation
- Skip to content link
- Alt text'ler
- Semantic HTML5

## 🌐 Çeviri Desteği

Text Domain: `kurumsalpress`

Tüm metinler çevrilebilir:
```php
esc_html__( 'Text', 'kurumsalpress' )
esc_html_e( 'Text', 'kurumsalpress' )
```

## 🔌 WordPress Hook'ları

Tema standart WordPress action ve filter hook'larını kullanır:

### Actions
- `after_setup_theme`
- `widgets_init`
- `wp_enqueue_scripts`
- `customize_register`
- `init`

### Filters
- `excerpt_length`
- `excerpt_more`
- `body_class`

## 💡 Best Practices

1. **Güvenlik**: Tüm output'lar escape edilmiştir
2. **Performance**: Optimize edilmiş CSS ve JS
3. **SEO**: Semantic HTML ve proper headings
4. **Accessibility**: WCAG 2.0 standartlarına uyumlu
5. **Code Quality**: WordPress Coding Standards
6. **Documentation**: İyi dokümante edilmiş kod

## 🚀 Performans

- Minimal HTTP requests
- CSS Grid ve Flexbox (modern browsers)
- Optimize edilmiş animasyonlar
- Lazy loading için hazır (WordPress 5.5+)
- No jQuery dependency
- Vanilla JavaScript kullanımı

## 🔄 Güncellemeler

Tema düzenli olarak güncellenir:
- WordPress yeni sürüm uyumluluğu
- Güvenlik güncellemeleri
- Yeni özellikler
- Bug fix'ler

## 📞 Destek

Herhangi bir sorun için:
- GitHub Issues
- Tema dokümantasyonu
- WordPress.org forumları
