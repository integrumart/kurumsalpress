# Kurumsal Press - Özellikler ve Görsel Rehber

Bu dosya, Kurumsal Press temasının görsel özelliklerini ve tasarım unsurlarını açıklar.

## 🎨 Görsel Tasarım Özellikleri

### Renk Paleti

Tema, modern ve profesyonel bir renk paleti kullanır:

```
Primary (Ana Renk):     #2c3e50 (Koyu lacivert)
Secondary (İkincil):    #3498db (Parlak mavi)
Accent (Vurgu):         #e74c3c (Kırmızı)
Success (Başarı):       #27ae60 (Yeşil)
Light Background:       #f8f9fa (Açık gri)
Text Color:            #333333 (Koyu gri)
White:                 #ffffff
```

### Tipografi

**Font Ailesi:** 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif

**Başlık Boyutları:**
- H1: 2.5rem (40px)
- H2: 2rem (32px)
- H3: 1.75rem (28px)
- H4: 1.5rem (24px)
- H5: 1.25rem (20px)
- H6: 1rem (16px)

**Gövde Metni:** 16px
**Satır Yüksekliği:** 1.6

### Layout (Yerleşim)

**Container Genişliği:** 1200px maksimum
**Responsive Breakpoints:**
- Desktop: > 992px
- Tablet: 768px - 992px
- Mobil: < 768px

## 📐 Bölümler

### 1. Header (Üst Kısım)

**Yapı:**
- Üst bilgi çubuğu (iletişim bilgileri, sosyal medya)
- Ana header (logo, site başlığı)
- Navigasyon menüsü
- Sticky header (sabit üst menü)

**Özellikler:**
- Gradient arka plan
- Saydam üst çubuk
- Hover efektleri
- Mobil hamburger menü

### 2. Hero Bölümü

**Görsel Özellikler:**
- Tam genişlik gradient arka plan
- Nokta pattern arka plan efekti
- Ortalanmış içerik
- Büyük başlık (3.5rem)
- Alt başlık metni
- 2 adet CTA (Call-to-Action) butonu
- Gölge efektleri

**Animasyonlar:**
- Fade-in animasyonu (1 saniye)
- Yumuşak geçişler

### 3. Services (Hizmetler) Bölümü

**Layout:**
- Grid sistemi (3 sütun - desktop)
- Responsive (2 sütun tablet, 1 sütun mobil)
- 30px boşluk kartlar arası

**Kart Tasarımı:**
- Beyaz arka plan
- 10px border-radius (yuvarlatılmış köşeler)
- Gölge efekti: 0 5px 20px rgba(0,0,0,0.08)
- Hover efekti: Yukarı hareket + gölge artışı
- Üst kenar gradient çizgi (hover'da görünür)

**Her Kart İçeriği:**
- İkon (3rem, mavi renk)
- Başlık (H3)
- Açıklama metni
- Padding: 40px 30px

**Animasyonlar:**
- Fade-in animasyonu (kademeli)
- 0.1s - 0.6s arası gecikmeli başlama
- Hover'da transform ve gölge değişimi

### 4. Content Area (İçerik Alanı)

**Layout:**
- 2 sütunlu grid
- Ana içerik: geniş
- Sidebar: 350px

**Post/Page Kartları:**
- Beyaz arka plan
- 40px padding
- 10px border-radius
- Gölge efekti
- 30px margin-bottom

**Öne Çıkan Görsel:**
- Yuvarlatılmış köşeler
- Hover'da zoom efekti (scale 1.05)
- Overflow hidden

### 5. Sidebar (Yan Çubuk)

**Widget Kutuları:**
- Beyaz arka plan
- 30px padding
- 10px border-radius
- Gölge efekti
- 30px margin-bottom

**Widget Başlığı:**
- 1.5rem font boyutu
- Alt çizgi: 3px mavi
- 1rem padding-bottom

### 6. Footer (Alt Kısım)

**Yapı:**
- Footer widget alanı (4 sütun grid)
- Site bilgisi (ortalanmış)
- Koyu lacivert arka plan (#2c3e50)
- Beyaz metin

**Widget Alanları:**
- 4 eşit sütun (desktop)
- Responsive (2 sütun tablet, 1 sütun mobil)
- 40px gap

**Footer Info:**
- Üst çizgi (saydam beyaz)
- 30px padding-top
- 0.8 opacity
- Copyright metni

## 🎭 Animasyonlar ve Efektler

### CSS Animasyonlar

**fadeInUp:**
```
- Başlangıç: opacity 0, translateY(30px)
- Bitiş: opacity 1, translateY(0)
- Süre: 0.6s ease-out
```

**fadeIn:**
```
- Başlangıç: opacity 0
- Bitiş: opacity 1
- Süre: 1s ease-out
```

**Hover Efektleri:**
- Butonlar: Renk değişimi + yukarı hareket (2px) + gölge artışı
- Service kartları: Yukarı hareket (10px) + mavi gölge
- Görseller: Scale 1.05 transform
- Linkler: Renk değişimi + padding-left (sidebar)

### JavaScript Animasyonlar

**Scroll Animasyonları:**
- Intersection Observer API kullanımı
- 0.1 threshold
- fade-in class ekleme

**Back to Top Butonu:**
- 300px scroll sonrası görünür
- Sağ alt köşe
- Gradient arka plan
- Hover efekti: Yukarı hareket + renk değişimi

**Smooth Scrolling:**
- Anchor linkler için
- 80px header offset
- Smooth behavior

## 📱 Responsive Tasarım

### Desktop (> 992px)
- Tam özellikli header
- 3 sütun hizmet kartları
- 2 sütun içerik (main + sidebar)
- 4 sütun footer

### Tablet (768px - 992px)
- Daraltılmış header
- 2 sütun hizmet kartları
- 1 sütun içerik (full-width)
- 2 sütun footer

### Mobil (< 768px)
- Hamburger menü
- Dikey menü
- 1 sütun hizmet kartları
- 1 sütun içerik
- 1 sütun footer
- Küçük butonlar
- Azaltılmış padding

## 🎯 UX (Kullanıcı Deneyimi) Özellikleri

### Etkileşim
- Tüm butonlar ve linkler hover efektli
- Tıklanabilir alanlar büyük ve belirgin
- Yumuşak geçişler (0.3s)
- Loading state gösterimi

### Navigasyon
- Sticky header (her zaman erişilebilir)
- Breadcrumb potansiyeli
- Açık menü yapısı
- Mobil menü kolayca açılır/kapanır

### Okunabilirlik
- Yüksek kontrast oranı
- Uygun satır yüksekliği (1.6)
- Yeterli boşluk (whitespace)
- Temiz tipografi

### Performans
- Optimized CSS
- Minimal JavaScript
- Temiz kod yapısı
- Hızlı yüklenme

## 🎨 Özelleştirme Noktaları

### Kolay Değiştirilebilir:
1. Renk değişkenleri (CSS variables)
2. Font aileleri
3. Boşluk ve padding değerleri
4. Border radius değerleri
5. Gölge efektleri

### Customizer ile Yapılabilir:
1. Logo
2. Site başlığı ve açıklaması
3. Renkler (background)
4. Header image
5. Menüler
6. Widget'lar

## 🔍 SEO Özellikleri

- Semantic HTML5
- Düzgün başlık hiyerarşisi
- Alt textler
- Meta tag desteği
- Temiz URL yapısı
- Hızlı yüklenme
- Mobil uyumlu
- Schema.org markup hazır

## ♿ Erişilebilirlik

- ARIA labels
- Klavye navigasyonu
- Ekran okuyucu uyumlu
- Yüksek kontrast
- Focus göstergeleri
- Semantic markup

---

**Not:** Theme'in görsel bir screenshot'ı için WordPress yönetim panelinde "Görünüm > Temalar" bölümünden theme'i önizleyebilirsiniz.
