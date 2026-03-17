<?php
// ══════════════════════════════════════════════════════════
//  КОНФИГ — меняй только здесь
// ══════════════════════════════════════════════════════════
$name_first = "Yevhen";
$name_last  = "Bredis";
$bio        = "I design products that feel inevitable — clear, considered, and rooted in how people actually think and move through the world.";
$location   = "Ukraine";
$year       = date("Y");
$email      = "yevhen.bredis@gmail.com";
$behance    = "behance.net/yourhandle";
$linkedin   = "linkedin.com/in/yourhandle";
$available  = true;

$tools = [
  "Figma" => true, "Adobe XD" => false, "Illustrator" => false,
  "Photoshop" => false, "InDesign" => false, "Framer" => false,
  "Principle" => false, "Notion" => false, "Miro" => false,
];

$skills = [
  ["abbr"=>"Ux","name"=>"UX Research","items"=>["User interviews","Usability testing","Journey mapping","Wireframing"]],
  ["abbr"=>"Ui","name"=>"UI Design","items"=>["Design systems","Components","Prototyping","Motion design"]],
  ["abbr"=>"Pr","name"=>"Product","items"=>["Roadmapping","OKR framing","A/B testing","Metrics"]],
  ["abbr"=>"Gr","name"=>"Graphic","items"=>["Brand identity","Typography","Editorial layout","Print"]],
];

// images[] — пути к скриншотам в папке /images/
// Если файл не найден — автоматически показывается placeholder
$cases = [
  [
    "num"=>"01","type"=>"Management Platform","year"=>"2025",
    "title"=>"Gym Assistant",
    "desc"=>"A web-based management platform designed to help fitness coaches streamline client management, track progress, and centralize communication in one system. The product solves the problem of scattered data and manual tracking by providing structured client profiles, training plans, and performance insights. Built for personal trainers and small studios aiming to scale their operations efficiently.",
    "role"=>"Product (UX/UI) Designer","duration"=>"6 months","platform"=>"Web",
    "images"=>["images/case1-1.jpg","images/case1-2.jpg"],
    // Ссылки — убери если не нужны, оставь пустую строку "" чтобы скрыть кнопку
    "links"=>[
      ["label"=>"Visit Website", "url"=>"https://gym-bot.site", "icon"=>"web"],
    ],
  ],
[
  "num"=>"02","type"=>"Mobile App","year"=>"2025",
  "title"=>"Gym Assistant",
  "desc"=>"A mobile companion app designed for fitness coaches and their clients to manage training workflows on the go. The app enables real-time access to workout plans, progress tracking, and direct communication, reducing friction between sessions. Key UX decisions focused on simplifying daily interactions, quick data input, and clear visualization of client performance. Built to increase client retention and improve coaching efficiency through a seamless mobile experience.",
  "role"=>"Product (UX/UI) Designer","duration"=>"6 months","platform"=>"iOS / Android",
  "images"=>[
    "images/case2-1.jpg",
    "images/case2-2.jpg",
    "images/case2-3.jpg",
    "images/case2-4.jpg",
    "images/case2-5.jpg",
    "images/case2-6.jpg",
    "images/case2-7.jpg",
    "images/case2-8.jpg",
    "images/case2-9.jpg",
    "images/case2-10.jpg"
  ],
  "links"=>[
    ["label"=>"App Store",     "url"=>"https://gym-bot.site/download/download.php",          "icon"=>"apple"],
    ["label"=>"Google Play",   "url"=>"https://gym-bot.site/download/download.php",  "icon"=>"android"],
  ],
],
];
// ══════════════════════════════════════════════════════════
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?=htmlspecialchars($name_first.' '.$name_last)?> — UX/UI Product & Graphic Designer">
  <title><?=htmlspecialchars($name_first.' '.$name_last)?> · Designer</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Space+Mono:wght@400;700&family=Unbounded:wght@900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link type="image/png" rel="icon" href="paint-palette.png">
</head>
<body>

<!-- NAV -->
<nav>
  <div class="nav-logo">
    <?=htmlspecialchars($name_first)?> <span><?=htmlspecialchars($name_last)?></span>
  </div>
  <ul class="nav-links">
    <li><a href="#skills">Skills</a></li>
    <li><a href="#work">Work</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</nav>

<!-- HERO -->
<section class="hero">
  <canvas id="hero-canvas"></canvas>
  <p class="hero-eyebrow">UX · UI · Product · Graphic — <?=$year?></p>
  <h1 class="hero-title">
    <?=htmlspecialchars($name_first)?><br>
    <span class="italic"><?=htmlspecialchars($name_last)?></span><br>
    <span class="outline">Designer</span>
  </h1>
  <div class="hero-bottom">
    <p class="hero-bio"><?=htmlspecialchars($bio)?></p>
    <div class="hero-meta">
      <p class="hero-meta-item"><?=htmlspecialchars($location)?></p>
      <?php if($available): ?>
      <p class="avail"><span class="avail-dot"></span>Open to work</p>
      <?php endif; ?>
    </div>
  </div>
  <div class="scroll-hint">
    <div class="scroll-arrow"></div>
    Scroll
  </div>
</section>

<!-- SKILLS -->
<section class="section" id="skills">
  <div class="section-label reveal">
    <span class="section-num">01</span>
    <h2 class="section-name">Skills</h2>
  </div>

  <div class="skills-grid">
    <?php foreach($skills as $i=>$s): ?>
    <div class="skill-cell reveal reveal-delay-<?=$i+1?>">
      <span class="skill-icon"><?=$s['abbr']?></span>
      <div class="skill-name"><?=htmlspecialchars($s['name'])?></div>
      <div class="skill-list"><?=implode('<br>',array_map('htmlspecialchars',$s['items']))?></div>
    </div>
    <?php endforeach; ?>
  </div>

  <!-- <div class="tools-row reveal">
    <?php foreach($tools as $tool=>$accent): ?>
    <span class="tool-pill<?=$accent?' tool-pill-accent':''?>"><?=htmlspecialchars($tool)?></span>
    <?php endforeach; ?>
  </div> -->
</section>

<!-- CASES -->
<section class="cases-section" id="work">
  <div class="cases-header">
    <div class="cases-big reveal">
      Case<br><span class="outline">Work</span>
    </div>
  </div>

  <?php foreach($cases as $i=>$case):
    $even = ($i % 2 !== 0);
    $has_img = !empty($case['images']) && file_exists($case['images'][0]);
  ?>
  <div class="case-card<?=$even?' case-card-even':''?> reveal">

    <div class="case-info">
      <div>
        <div class="case-num"><?=$case['num']?></div>
        <div class="case-type-badge">
          <span class="badge badge-red"><?=htmlspecialchars($case['type'])?></span>
          <span class="badge"><?=htmlspecialchars($case['year'])?></span>
        </div>
        <h3 class="case-title"><?=$case['title']?></h3>
        <p class="case-desc"><?=htmlspecialchars($case['desc'])?></p>
      </div>
      <?php if(!empty($case['links'])): ?>
      <div class="case-links">
        <?php foreach($case['links'] as $link): if(empty($link['url'])) continue; ?>
        <a href="<?=htmlspecialchars($link['url'])?>" target="_blank" rel="noopener" class="case-link-btn case-link-<?=htmlspecialchars($link['icon'])?>">
          <?php if($link['icon']==='apple'): ?>
          <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
          <?php elseif($link['icon']==='android'): ?>
          <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M17.523 15.341a.625.625 0 1 1 0-1.25.625.625 0 0 1 0 1.25m-11.046 0a.625.625 0 1 1 0-1.25.625.625 0 0 1 0 1.25M17.69 9.611l1.81-3.136a.376.376 0 1 0-.652-.376l-1.833 3.175A11.27 11.27 0 0 0 12 8.298c-1.74 0-3.383.417-4.814 1.151L5.152 6.099a.376.376 0 0 0-.652.376l1.81 3.136C3.674 11.16 1.98 13.78 1.98 16.8h20.04c0-3.02-1.693-5.64-4.33-7.189"/></svg>
          <?php else: ?>
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
          <?php endif; ?>
          <?=htmlspecialchars($link['label'])?>
          <svg class="arrow-out" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M7 17L17 7M7 7h10v10"/></svg>
        </a>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
      <div class="case-meta-row">
        <div class="case-meta-item"><strong>Role</strong><?=htmlspecialchars($case['role'])?></div>
        <div class="case-meta-item"><strong>Duration</strong><?=htmlspecialchars($case['duration'])?></div>
        <div class="case-meta-item"><strong>Platform</strong><?=htmlspecialchars($case['platform'])?></div>
      </div>
    </div>

    <div class="case-visual">
      <?php if($has_img): ?>
        <?php
          $valid_imgs = array_filter($case['images'], 'file_exists');
          $valid_imgs = array_values($valid_imgs);
          $case_id = 'case-' . $i;
        ?>
        <div class="gallery-wrap">
          <!-- Grid preview -->
          <div class="gallery-grid" data-case="<?=$case_id?>">
            <?php foreach($valid_imgs as $idx=>$img): ?>
            <div class="gallery-thumb" data-index="<?=$idx?>" data-case="<?=$case_id?>">
              <img src="<?=htmlspecialchars($img)?>" alt="<?=htmlspecialchars(strip_tags($case['title']))?> <?=($idx+1)?>" loading="lazy">
              <?php if($idx===2 && count($valid_imgs)>3): ?>
              <div class="gallery-more">+<?=(count($valid_imgs)-3)?></div>
              <?php endif; ?>
            </div>
            <?php endforeach; ?>
          </div>
          <!-- Hidden data for lightbox -->
          <div class="gallery-data" id="<?=$case_id?>" style="display:none">
            <?php foreach($valid_imgs as $img): ?>
            <span><?=htmlspecialchars($img)?></span>
            <?php endforeach; ?>
          </div>
        </div>
      <?php else: ?>
        <div class="placeholder-content">
          <span class="placeholder-icon"><?=$case['type']==='Website'?'Www':'App'?></span>
          <div class="placeholder-label"><?=htmlspecialchars($case['type'])?> Screenshots</div>
          <div class="placeholder-sub">Add to /images/ folder</div>
        </div>
      <?php endif; ?>
    </div>

  </div>
  <?php endforeach; ?>
</section>

<!-- CONTACT -->
<section class="contact-section" id="contact">
  <div class="contact-big reveal">
    Let's<br><span class="accent-word">work</span><br>together
  </div>
  <div class="contact-grid">
    <div class="contact-cell reveal reveal-delay-1">
      <div class="contact-label">Availability</div>
      <div class="contact-value">
        <?php if($available): ?><span class="avail-dot"></span>Open to work<?php else: ?>Not available<?php endif; ?>
      </div>
    </div>
    <div class="contact-cell reveal reveal-delay-2">
      <div class="contact-label">Email</div>
      <div class="contact-value"><a href="mailto:<?=htmlspecialchars($email)?>"><?=htmlspecialchars($email)?></a></div>
    </div>
    <!-- <div class="contact-cell reveal reveal-delay-3">
      <div class="contact-label">Behance / LinkedIn</div>
      <div class="contact-value"><a href="https://<?=htmlspecialchars($behance)?>" target="_blank" rel="noopener"><?=htmlspecialchars($behance)?></a></div>
    </div> -->
  </div>
</section>

<!-- FOOTER -->
<footer>
  <span class="footer-text">© <?=$year?> <?=htmlspecialchars($name_first.' '.$name_last)?></span>
  <span class="footer-mark">Design is a form of thinking.</span>
  <span class="footer-text">UX · UI · Product · Graphic</span>
</footer>

<script>
// Reveal on scroll
const observer = new IntersectionObserver((entries) => {
  entries.forEach(el => {
    if (el.isIntersecting) {
      el.target.classList.add('visible');
      observer.unobserve(el.target);
    }
  });
}, { threshold: 0.12 });

document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
</script>

<script>
// ── Hero Canvas Animation ──────────────────────────────────
const canvas = document.getElementById('hero-canvas');
const ctx = canvas.getContext('2d');

function resize() {
  canvas.width  = canvas.offsetWidth;
  canvas.height = canvas.offsetHeight;
}
resize();
window.addEventListener('resize', resize);

// Color palette — vivid retro
const COLORS = [
  [212, 64,  26],   // accent red
  [15,  14,  13],   // ink black
  [30,  100, 180],  // blue
  [180, 140,  20],  // gold
  [40,  150,  90],  // green
  [160,  40, 140],  // purple
];

const types = ['circle', 'rect', 'cross', 'triangle', 'ring', 'line'];
const shapes = [];

for (let i = 0; i < 32; i++) {
  const col = COLORS[Math.floor(Math.random() * COLORS.length)];
  const big = Math.random() < 0.25; // 25% chance of large shape
  shapes.push({
    type:     types[Math.floor(Math.random() * types.length)],
    x:        Math.random(),
    y:        Math.random(),
    size:     big ? 120 + Math.random() * 140 : 30 + Math.random() * 90,
    vy:       0.0003 + Math.random() * 0.0005,
    vx:       (Math.random() - 0.5) * 0.00025,
    rot:      Math.random() * Math.PI * 2,
    rotSpeed: (Math.random() - 0.5) * 0.008,
    opacity:  big ? 0.07 + Math.random() * 0.1 : 0.15 + Math.random() * 0.35,
    color:    col,
    lw:       big ? 1.5 : 1 + Math.random() * 1.5,
    filled:   Math.random() < 0.12, // some filled shapes
  });
}

function drawShape(s, w, h) {
  const x = s.x * w;
  const y = s.y * h;
  const [r,g,b] = s.color;
  ctx.save();
  ctx.translate(x, y);
  ctx.rotate(s.rot);
  ctx.lineWidth = s.lw;

  const stroke = `rgba(${r},${g},${b},${s.opacity})`;
  const fill   = `rgba(${r},${g},${b},${s.opacity * 0.25})`;
  ctx.strokeStyle = stroke;
  ctx.fillStyle   = fill;

  const half = s.size / 2;

  if (s.type === 'circle') {
    ctx.beginPath();
    ctx.arc(0, 0, half, 0, Math.PI * 2);
    if (s.filled) ctx.fill();
    ctx.stroke();

  } else if (s.type === 'ring') {
    // double concentric ring
    ctx.beginPath();
    ctx.arc(0, 0, half, 0, Math.PI * 2);
    ctx.stroke();
    ctx.beginPath();
    ctx.arc(0, 0, half * 0.6, 0, Math.PI * 2);
    ctx.globalAlpha = 0.5;
    ctx.stroke();
    ctx.globalAlpha = 1;

  } else if (s.type === 'rect') {
    if (s.filled) ctx.fillRect(-half, -half, s.size, s.size);
    ctx.strokeRect(-half, -half, s.size, s.size);

  } else if (s.type === 'cross') {
    ctx.beginPath();
    ctx.moveTo(-half, 0); ctx.lineTo(half, 0);
    ctx.moveTo(0, -half); ctx.lineTo(0, half);
    ctx.stroke();
    // small square at center
    ctx.strokeRect(-half * 0.15, -half * 0.15, half * 0.3, half * 0.3);

  } else if (s.type === 'triangle') {
    ctx.beginPath();
    ctx.moveTo(0, -half);
    ctx.lineTo(half * 0.87, half * 0.5);
    ctx.lineTo(-half * 0.87, half * 0.5);
    ctx.closePath();
    if (s.filled) ctx.fill();
    ctx.stroke();

  } else {
    // diagonal line with tick marks
    ctx.beginPath();
    ctx.moveTo(-half, 0); ctx.lineTo(half, 0);
    ctx.stroke();
    ctx.beginPath();
    ctx.moveTo(-half, -8); ctx.lineTo(-half, 8);
    ctx.moveTo(half,  -8); ctx.lineTo(half,  8);
    ctx.stroke();
  }

  ctx.restore();
}

// Mouse parallax
let mouseX = 0.5, mouseY = 0.5;
document.addEventListener('mousemove', e => {
  mouseX = e.clientX / window.innerWidth;
  mouseY = e.clientY / window.innerHeight;
});

function tick() {
  const w = canvas.width, h = canvas.height;
  ctx.clearRect(0, 0, w, h);

  shapes.forEach((s, idx) => {
    // parallax: bigger shapes move more with mouse
    const parallax = (s.size / 200) * 0.012;
    const px = (mouseX - 0.5) * parallax;
    const py = (mouseY - 0.5) * parallax;

    s.y -= s.vy;
    s.x += s.vx + px * 0.01;
    s.rot += s.rotSpeed;

    if (s.y < -0.15) { s.y = 1.15; s.x = Math.random(); }
    if (s.x < -0.15) s.x = 1.15;
    if (s.x >  1.15) s.x = -0.15;

    // draw with parallax offset applied
    const savedX = s.x, savedY = s.y;
    s.x += px; s.y += py;
    drawShape(s, w, h);
    s.x = savedX; s.y = savedY;
  });

  requestAnimationFrame(tick);
}
tick();
</script>

<!-- LIGHTBOX -->
<div id="lightbox" aria-modal="true" role="dialog">
  <div id="lb-overlay"></div>
  <button id="lb-close" aria-label="Close">&times;</button>
  <button id="lb-prev" aria-label="Previous">&#8592;</button>
  <button id="lb-next" aria-label="Next">&#8594;</button>
  <div id="lb-img-wrap">
    <img id="lb-img" src="" alt="">
  </div>
  <div id="lb-counter"></div>
</div>

<script>
// ── Gallery + Lightbox ────────────────────────────────────
const lb        = document.getElementById('lightbox');
const lbImg     = document.getElementById('lb-img');
const lbCounter = document.getElementById('lb-counter');
let   lbImages  = [];
let   lbIndex   = 0;

function openLightbox(caseId, startIndex) {
  const data = document.getElementById(caseId);
  lbImages   = Array.from(data.querySelectorAll('span')).map(s => s.textContent.trim());
  lbIndex    = startIndex;
  showSlide(lbIndex);
  lb.classList.add('active');
  document.body.style.overflow = 'hidden';
}

function closeLightbox() {
  lb.classList.remove('active');
  document.body.style.overflow = '';
}

function showSlide(i) {
  lbIndex = (i + lbImages.length) % lbImages.length;
  lbImg.style.opacity = '0';
  setTimeout(() => {
    lbImg.src = lbImages[lbIndex];
    lbImg.onload = () => { lbImg.style.opacity = '1'; };
    lbCounter.textContent = (lbIndex + 1) + ' / ' + lbImages.length;
  }, 150);
}

document.getElementById('lb-close').addEventListener('click', closeLightbox);
document.getElementById('lb-overlay').addEventListener('click', closeLightbox);
document.getElementById('lb-prev').addEventListener('click', () => showSlide(lbIndex - 1));
document.getElementById('lb-next').addEventListener('click', () => showSlide(lbIndex + 1));

document.addEventListener('keydown', e => {
  if (!lb.classList.contains('active')) return;
  if (e.key === 'Escape')     closeLightbox();
  if (e.key === 'ArrowLeft')  showSlide(lbIndex - 1);
  if (e.key === 'ArrowRight') showSlide(lbIndex + 1);
});

// Touch swipe
let touchStartX = 0;
lb.addEventListener('touchstart', e => { touchStartX = e.touches[0].clientX; });
lb.addEventListener('touchend',   e => {
  const dx = e.changedTouches[0].clientX - touchStartX;
  if (Math.abs(dx) > 50) showSlide(lbIndex + (dx < 0 ? 1 : -1));
});

// Attach clicks to thumbs
document.querySelectorAll('.gallery-thumb').forEach(thumb => {
  thumb.addEventListener('click', () => {
    openLightbox(thumb.dataset.case, parseInt(thumb.dataset.index));
  });
});
</script>
</body>
</html>
