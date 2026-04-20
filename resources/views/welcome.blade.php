<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roel Dolendo Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            {!! file_get_contents(resource_path('css/app.css')) !!}
        </style>
    @endif
</head>
<body>
    <header class="site-header">
        <a href="#home" class="brand font-heading" aria-label="Roel Dolendo home">
            <span class="brand-mark">RD</span>
            <span>Roel Dolendo</span>
        </a>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home" class="hero section-shell scroll-fade">
            <div class="hero-copy">
                <p class="eyebrow live-badge"><span></span> IT / Web Developer</p>
                <h1 class="font-heading">Building secure systems for <span>digital value.</span></h1>
                <p class="hero-text">
                    I am Roel Ibo Dolendo, an Information Technology experience in building modern web technologies. Experienced in creating systems that manage data, support user accounts, and improve online workflows
                </p>
                <div class="hero-actions">
                    <a href="#projects" class="button primary-button">View Projects</a>
                    <a href="#about" class="button ghost-button">About Me</a>
                </div>
            </div>

            <div class="profile-panel" aria-label="Profile overview">
                <div class="hero-grid"></div>
                <div class="orbit orbit-one"></div>
                <div class="orbit orbit-two"></div>
                <div class="profile-avatar">
                    <span class="font-heading">RD</span>
                </div>
                <div class="profile-card profile-card-main">
                    <span class="card-label font-mono">Current path</span>
                    <strong>Backend Developer</strong>
                    <p>Laravel, JavaScript, Node.js, MySQL, and UI prototypes.</p>
                </div>
                <div class="floating-chip chip-top font-mono">BLOCK 01</div>
                <div class="floating-chip chip-right font-mono">99.9% focus</div>
                <div class="floating-chip chip-left font-mono">live build</div>
                <div class="social-icons" aria-label="Social links">
                    <a href="https://github.com/DolendoRoel" target="_blank" rel="noreferrer" class="icon" aria-label="GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.figma.com/team_invite/redeem/OrZ5kuxNKd16ed2fLPqDxz" target="_blank" rel="noreferrer" class="icon" aria-label="Figma">
                        <i class="fab fa-figma"></i>
                    </a>
                    <a href="https://t.me/mr_ruuu" target="_blank" rel="noreferrer" class="icon" aria-label="Telegram">
                        <i class="fab fa-telegram"></i>
                    </a>
                </div>
            </div>
        </section>

        <section id="about" class="about section-shell scroll-fade">
            <div class="section-heading">
                <p class="eyebrow">About</p>
                <h2 class="font-heading">Practical systems, simple interfaces, steady growth.</h2>
            </div>
            <div class="about-grid">
                <p>
                    Hi! I'm a IT / Web Developer with a passion for solving problems and creating efficient digital solutions. Currently pursuing a Bachelor of Science in Information Technology, I specialize in backend development and enjoy designing user experiences using Figma for prototyping.
                </p>
                <p>
                    I enjoy building systems that are both functional and user-friendly, combining strong technical logic with intuitive design workflows. My ultimate goal is to become a skilled backend developer and contribute to impactful, innovative tech projects.
                </p>
                <p>
                    Outside my studies, I explore new tech trends, collaborate on creative projects, and continuously strive to improve my skills as a developer and designer.
                </p>
            </div>
        </section>

        <section id="skills" class="skills section-shell scroll-fade">
            <div class="section-heading centered">
                <p class="eyebrow">Skills</p>
                <h2 class="font-heading">Technical Skills</h2>
            </div>
            <div class="skill-chain" aria-label="Technical skills timeline">
                <article class="skill-node skill-node-left">
                    <span class="corner corner-start"></span>
                    <span class="corner corner-end"></span>
                    <h3 class="font-heading">Frontend Development</h3>
                    <p>HTML, CSS, and Bootstrap for responsive interface foundations.</p>
                </article>
                <span class="chain-dot font-mono">1</span>

                <article class="skill-node skill-node-right">
                    <span class="corner corner-start"></span>
                    <span class="corner corner-end"></span>
                    <h3 class="font-heading">Backend Development</h3>
                    <p>JavaScript, Node.js, and Express.js for application behavior.</p>
                </article>
                <span class="chain-dot font-mono">2</span>

                <article class="skill-node skill-node-left">
                    <span class="corner corner-start"></span>
                    <span class="corner corner-end"></span>
                    <h3 class="font-heading">Database Management</h3>
                    <p>MySQL and MongoDB for storing, shaping, and managing data.</p>
                </article>
                <span class="chain-dot font-mono">3</span>

                <article class="skill-node skill-node-right">
                    <span class="corner corner-start"></span>
                    <span class="corner corner-end"></span>
                    <h3 class="font-heading">UI/UX Design</h3>
                    <p>Figma prototypes for planning clearer and easier user journeys.</p>
                </article>
                <span class="chain-dot font-mono">4</span>
            </div>
        </section>

        <section id="projects" class="projects section-shell scroll-fade">
            <div class="section-heading">
                <p class="eyebrow">Selected work</p>
                <h2 class="font-heading">Project Blocks</h2>
            </div>
            <div class="project-grid">
                <article class="project-card large-card">
                    <a
                        href="https://ojtwebdev.vercel.app/"
                        target="_blank"
                        rel="noreferrer"
                        class="project-preview"
                        aria-label="Open OJT Web Dev website preview"
                    >
                        <span class="preview-browser">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class="preview-content">
                            <span class="preview-kicker font-mono">Live Preview</span>
                            <strong class="font-heading">OJT Web Dev</strong>
                            <span>Laravel project website</span>
                        </span>
                    </a>
                    <div class="project-card-row">
                        <div>
                            <h3 class="font-heading">OJT Web Dev</h3>
                            <p>Laravel, Blade, PHP, CSS, JavaScript, MySQL</p>
                        </div>
                        <a
                            href="https://ojtwebdev.vercel.app/"
                            target="_blank"
                            rel="noreferrer"
                            class="project-link font-mono"
                        >
                            Open Website
                        </a>
                    </div>
                </article>
                <article class="project-card">
                    <div class="project-visual font-mono">02</div>
                    <h3 class="font-heading">Interactive Page</h3>
                    <p>HTML, CSS, JavaScript</p>
                </article>
                <article class="project-card">
                    <div class="project-visual font-mono">03</div>
                    <h3 class="font-heading">JavaScript Build</h3>
                    <p>HTML, CSS, JavaScript</p>
                </article>
                <article class="project-card">
                    <div class="project-visual font-mono">04</div>
                    <h3 class="font-heading">Database System</h3>
                    <p>HTML, CSS, JavaScript, MySQL</p>
                </article>
                <article class="project-card">
                    <div class="project-visual font-mono">05</div>
                    <h3 class="font-heading">Node Application</h3>
                    <p>HTML, CSS, JavaScript, Express.js, Node.js</p>
                </article>
                <article class="project-card">
                    <div class="project-visual font-mono">06</div>
                    <h3 class="font-heading">MySQL Project</h3>
                    <p>HTML, CSS, JavaScript, MySQL</p>
                </article>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <p>&copy; 2024 Roel Dolendo from BSIT - 3A.</p>
    </footer>

    @unless (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        <script>
            {!! file_get_contents(resource_path('js/app.js')) !!}
        </script>
    @endunless
</body>
</html>
