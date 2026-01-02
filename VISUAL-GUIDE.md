# KurumsalPress Görsel Rehber

## 🎨 Tema Önizlemesi

### Ana Sayfa Yapısı

```
┌────────────────────────────────────────────────────────┐
│  HEADER (Sticky)                                       │
│  ┌──────────┐              [Ana Sayfa] [Hakkımızda]  │
│  │  LOGO    │              [Hizmetler] [İletişim]     │
│  └──────────┘              [Blog]                      │
└────────────────────────────────────────────────────────┘

┌────────────────────────────────────────────────────────┐
│  HERO SECTION (Gradient Background)                    │
│                                                         │
│         Modern Kurumsal Çözümler                       │
│                                                         │
│    İşletmenizi dijital dünyada öne çıkaracak          │
│        profesyonel çözümler sunuyoruz                  │
│                                                         │
│    [Hemen Başlayın]  [Daha Fazla]                     │
│                                                         │
└────────────────────────────────────────────────────────┘

┌────────────────────────────────────────────────────────┐
│              HİZMETLERİMİZ                             │
│                                                         │
│  ┌───────┐   ┌───────┐   ┌───────┐                   │
│  │  ⚡   │   │  ⚡   │   │  ⚡   │                   │
│  │ Hizmet│   │ Hizmet│   │ Hizmet│                   │
│  │   1   │   │   2   │   │   3   │                   │
│  └───────┘   └───────┘   └───────┘                   │
│                                                         │
│  ┌───────┐   ┌───────┐   ┌───────┐                   │
│  │  ⚡   │   │  ⚡   │   │  ⚡   │                   │
│  │ Hizmet│   │ Hizmet│   │ Hizmet│                   │
│  │   4   │   │   5   │   │   6   │                   │
│  └───────┘   └───────┘   └───────┘                   │
└────────────────────────────────────────────────────────┘

┌────────────────────────────────────────────────────────┐
│              SON HABERLER                               │
│                                                         │
│  ┌─────────┐   ┌─────────┐   ┌─────────┐             │
│  │ [IMAGE] │   │ [IMAGE] │   │ [IMAGE] │             │
│  ├─────────┤   ├─────────┤   ├─────────┤             │
│  │ Başlık  │   │ Başlık  │   │ Başlık  │             │
│  │         │   │         │   │         │             │
│  │ Özet... │   │ Özet... │   │ Özet... │             │
│  │         │   │         │   │         │             │
│  │ [Oku →] │   │ [Oku →] │   │ [Oku →] │             │
│  └─────────┘   └─────────┘   └─────────┘             │
└────────────────────────────────────────────────────────┘

┌────────────────────────────────────────────────────────┐
│  FOOTER                                                 │
│                                                         │
│  ┌──────────┐   ┌──────────┐   ┌──────────┐          │
│  │ Widget 1 │   │ Widget 2 │   │ Widget 3 │          │
│  │          │   │          │   │          │          │
│  │  Hakkımızda  │  Linkler │   │  İletişim│          │
│  └──────────┘   └──────────┘   └──────────┘          │
│                                                         │
│  © 2026 KurumsalPress. Tüm hakları saklıdır.         │
└────────────────────────────────────────────────────────┘
```

## 🎯 Renk Paleti

### Primary Gradient
```
┌────────────────────────────────────────┐
│  #2563eb ──────────────────► #7c3aed  │
│  (Mavi)                        (Mor)  │
└────────────────────────────────────────┘
```

### Secondary Gradient
```
┌────────────────────────────────────────┐
│  #f59e0b ──────────────────► #ef4444  │
│  (Turuncu)                  (Kırmızı) │
└────────────────────────────────────────┘
```

### Temel Renkler
- 🔵 Primary: #2563eb (Mavi)
- 🟣 Secondary: #7c3aed (Mor)
- 🟠 Accent: #f59e0b (Turuncu)
- ⚫ Dark: #1e293b (Koyu Gri)
- ⚪ Light: #f8fafc (Açık Gri)
- 📝 Text: #334155 (Metin Rengi)

## 📐 Layout Yapısı

### Desktop (> 1024px)
```
┌─────────────────────────────────────────────┐
│  [LOGO]              [Navigation Menu]      │
├─────────────────────────────────────────────┤
│                                             │
│              [Hero Section]                 │
│                                             │
├─────────────────────────────────────────────┤
│  [Card]    [Card]    [Card]                │
│  [Card]    [Card]    [Card]                │
└─────────────────────────────────────────────┘
```

### Mobile (< 768px)
```
┌───────────────────────┐
│ [LOGO]      [☰]      │
├───────────────────────┤
│                       │
│   [Hero Section]      │
│                       │
├───────────────────────┤
│      [Card]           │
│      [Card]           │
│      [Card]           │
└───────────────────────┘
```

## ✨ Animasyon Efektleri

### 1. Header Animasyonu
```
Sayfa yüklendiğinde:
↓ slideDown (yukarıdan aşağı kayma)
```

### 2. Hero Content
```
Sayfa yüklendiğinde:
↑ fadeInUp (alttan yukarı fade)
Opacity: 0 → 1
Transform: translateY(30px) → 0
```

### 3. Kartlar
```
Hover durumunda:
↑ translateY(-10px)
Shadow: md → xl

Scroll'da:
→ fadeIn (Intersection Observer)
```

### 4. Butonlar
```
Hover durumunda:
↑ translateY(-3px)
Shadow artışı
```

### 5. Menü Linkleri
```
Hover durumunda:
───────
Alt çizgi animasyonu (genişlik: 0 → 100%)
```

## 🎨 Tipografi

### Başlıklar
```
H1: 3rem (48px)    - Gradient text
H2: 2.5rem (40px)  - Section başlıkları
H3: 2rem (32px)    - Card başlıkları
H4: 1.5rem (24px)  - Alt başlıklar
```

### Body Text
```
Font Family: System Font Stack
- macOS/iOS: -apple-system, BlinkMacSystemFont
- Windows: Segoe UI
- Android/Linux: Roboto
- Fallback: Helvetica Neue, Arial, sans-serif

Font Size: 16px (1rem)
Line Height: 1.6
```

## 📱 Responsive Grid

### Desktop (3 Kolon)
```
┌──────┐ ┌──────┐ ┌──────┐
│ Card │ │ Card │ │ Card │
└──────┘ └──────┘ └──────┘
```

### Tablet (2 Kolon)
```
┌──────┐ ┌──────┐
│ Card │ │ Card │
└──────┘ └──────┘
┌──────┐
│ Card │
└──────┘
```

### Mobile (1 Kolon)
```
┌──────┐
│ Card │
└──────┘
┌──────┐
│ Card │
└──────┘
┌──────┐
│ Card │
└──────┘
```

## 🎯 Kullanıcı Etkileşimleri

### 1. Mobil Menü
```
[☰] Tıklandığında
│
├─► Menü sağdan kayarak açılır
├─► Overlay ekranı kaplar
└─► Dışarı tıklamada kapanır
```

### 2. Smooth Scroll
```
[Buton] veya [Link] Tıklandığında
│
└─► Yumuşak kaydırma animasyonu
```

### 3. Back to Top
```
300px+ Scroll
│
├─► Buton belirir (fade in)
├─► Tıklamada sayfa başına kayar
└─► Hover'da yukarı kalkar
```

### 4. Scroll Animations
```
Element viewport'a girdiğinde
│
└─► fadeIn animasyonu
```

## 🔧 Customizer Önizlemesi

### Hero Bölümü Ayarları
```
┌─────────────────────────────────────┐
│ Hero Başlık:                        │
│ [Modern Kurumsal Çözümler____]      │
│                                     │
│ Hero Açıklama:                      │
│ [İşletmenizi dijital dünyada___]    │
│ [öne çıkaracak profesyonel___]      │
│                                     │
│ Buton Metni:                        │
│ [Hemen Başlayın____________]        │
│                                     │
│ Buton URL:                          │
│ [https://example.com/_______]       │
└─────────────────────────────────────┘
```

### İletişim Bilgileri
```
┌─────────────────────────────────────┐
│ Telefon:                            │
│ [+90 XXX XXX XX XX_________]        │
│                                     │
│ E-posta:                            │
│ [info@example.com__________]        │
│                                     │
│ Adres:                              │
│ [Örnek Mahallesi, No: 123__]        │
│ [İstanbul, Türkiye_________]        │
└─────────────────────────────────────┘
```

## 📊 Özellik Karşılaştırması

| Özellik | Durum |
|---------|-------|
| ✅ Responsive | Tam Destek |
| ✅ Animasyonlar | Zengin |
| ✅ SEO | Optimize |
| ✅ Erişilebilirlik | WCAG 2.0 |
| ✅ Performans | Optimize |
| ✅ Özel İçerik Tipleri | 2 Adet |
| ✅ Widget Alanları | 4 Adet |
| ✅ Menü Konumları | 2 Adet |
| ✅ Customizer | Entegre |
| ✅ Gutenberg | Uyumlu |

## 🎁 Bonus Özellikler

1. **Back to Top Butonu**
   - Otomatik görünür/gizlenir
   - Smooth scroll
   - Modern tasarım

2. **Gradient Efektler**
   - Hero arka plan
   - Başlık metinleri
   - Card hover efektleri

3. **Intersection Observer**
   - Performans optimizasyonu
   - Modern API kullanımı
   - Scroll animasyonları

4. **CSS Custom Properties**
   - Kolay özelleştirme
   - Tutarlı tasarım
   - Bakım kolaylığı

## 📸 Ekran Görüntüleri

### Desktop Görünüm
- Geniş hero bölümü
- 3 kolonlu grid
- Tam genişlik footer

### Tablet Görünüm
- 2 kolonlu grid
- Optimize spacing
- Touch-friendly buttons

### Mobile Görünüm
- Hamburger menü
- Tek kolon layout
- Optimize font boyutları

## 🎨 İkon Seti

Tema varsayılan olarak Unicode karakterleri kullanır:
- ⚡ Hizmet ikonu
- ☰ Menü ikonu
- ↑ Back to top ikonu
- → Devam ok ikonu

## 🌟 Öne Çıkan Özellikler

1. **Zero jQuery** - Vanilla JavaScript
2. **Modern CSS** - Grid, Flexbox, Custom Properties
3. **Performance First** - Optimize kod
4. **Mobile First** - Responsive tasarım
5. **SEO Ready** - Semantic HTML
6. **Accessibility** - ARIA attributes
7. **i18n Ready** - Çeviri hazır
8. **Customizer** - Kolay özelleştirme
