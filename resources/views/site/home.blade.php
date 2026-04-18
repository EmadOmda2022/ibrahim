@extends('layouts.app', ['title' => 'مكتب شوربة للمحاماة'])

@section('content')
    <main class="relative overflow-hidden">
        <div class="absolute inset-x-0 top-0 -z-10 h-[32rem] bg-[radial-gradient(circle_at_top,_rgba(184,113,58,0.22),_transparent_58%)]"></div>
        <div class="absolute left-[-8rem] top-24 -z-10 h-72 w-72 rounded-full bg-[rgba(104,38,17,0.11)] blur-3xl"></div>
        <div class="absolute right-[-6rem] top-56 -z-10 h-80 w-80 rounded-full bg-[rgba(212,171,118,0.18)] blur-3xl"></div>

        <section class="mx-auto flex min-h-screen max-w-7xl flex-col px-6 pb-12 pt-8 lg:px-10">
            <header class="mb-10 flex items-center justify-between rounded-full border border-[var(--line)] bg-white/70 px-5 py-3 shadow-[0_18px_60px_rgba(68,31,12,0.08)] backdrop-blur">
                <div>
                    <p class="font-[var(--font-display)] text-xl font-extrabold tracking-[0.08em] text-[var(--accent-strong)]">
                        شوربة
                    </p>
                    <p class="text-sm text-[var(--muted)]">للمحاماة والاستشارات القانونية</p>
                </div>
                <nav class="hidden items-center gap-6 text-sm font-semibold text-[var(--muted)] lg:flex">
                    <a href="#services" class="transition hover:text-[var(--ink)]">الخدمات</a>
                    <a href="#about" class="transition hover:text-[var(--ink)]">عن المكتب</a>
                    <a href="#contact" class="transition hover:text-[var(--ink)]">التواصل</a>
                    <a href="/dashboard" class="rounded-full border border-[var(--accent)] px-4 py-2 text-[var(--accent-strong)] transition hover:bg-[var(--accent)]/10">لوحة التحكم</a>
                </nav>
            </header>

            <div class="grid flex-1 items-center gap-10 lg:grid-cols-[1.15fr_0.85fr]">
                <section class="space-y-8">
                    <span class="inline-flex rounded-full border border-[var(--line)] bg-white px-4 py-2 text-sm font-semibold text-[var(--accent-strong)] shadow-sm">
                        حضور قانوني واضح. تنفيذ منضبط. تواصل مباشر.
                    </span>
                    <div class="space-y-5">
                        <h1 class="max-w-4xl font-[var(--font-display)] text-5xl font-extrabold leading-[1.05] text-[var(--ink)] lg:text-7xl">
                            مكتب قانوني حديث .
                        </h1>
                        <p class="max-w-2xl text-lg leading-8 text-[var(--muted)]">
                            نساعد الأفراد والشركات على إدارة النزاعات، صياغة العقود، وحماية القرار القانوني بخبرة عملية
                            وعرض واضح وسريع.
                        </p>
                    </div>
                    <div class="flex flex-col gap-4 sm:flex-row">
                        <a href="#contact" class="inline-flex items-center justify-center rounded-full bg-[var(--accent-strong)] px-6 py-3 text-base font-bold text-white shadow-[0_20px_35px_rgba(92,42,18,0.25)] transition hover:-translate-y-0.5">
                            احجز استشارة أولية
                        </a>
                        <a href="#services" class="inline-flex items-center justify-center rounded-full border border-[var(--line-strong)] bg-white px-6 py-3 text-base font-bold text-[var(--ink)] transition hover:border-[var(--accent)] hover:text-[var(--accent-strong)]">
                            استعرض مجالات العمل
                        </a>
                    </div>
                    <div class="grid gap-4 pt-4 sm:grid-cols-3">
                        <article class="rounded-[1.7rem] border border-[var(--line)] bg-white/80 p-5 shadow-[0_12px_40px_rgba(64,29,12,0.06)]">
                            <p class="text-sm text-[var(--muted)]">قضايا منجزة</p>
                            <p class="mt-2 font-[var(--font-display)] text-4xl font-extrabold text-[var(--accent-strong)]">+420</p>
                        </article>
                        <article class="rounded-[1.7rem] border border-[var(--line)] bg-white/80 p-5 shadow-[0_12px_40px_rgba(64,29,12,0.06)]">
                            <p class="text-sm text-[var(--muted)]">عملاء شركات</p>
                            <p class="mt-2 font-[var(--font-display)] text-4xl font-extrabold text-[var(--accent-strong)]">38</p>
                        </article>
                        <article class="rounded-[1.7rem] border border-[var(--line)] bg-white/80 p-5 shadow-[0_12px_40px_rgba(64,29,12,0.06)]">
                            <p class="text-sm text-[var(--muted)]">متوسط الرد</p>
                            <p class="mt-2 font-[var(--font-display)] text-4xl font-extrabold text-[var(--accent-strong)]">24h</p>
                        </article>
                    </div>
                </section>

                <aside class="relative">
                    <div class="absolute inset-0 rounded-[2rem] bg-[linear-gradient(145deg,_rgba(93,44,22,0.88),_rgba(23,13,10,0.98))] shadow-[0_40px_80px_rgba(43,18,7,0.28)]"></div>
                    <div class="relative overflow-hidden rounded-[2rem] border border-[rgba(255,255,255,0.12)] p-6 text-white">
                        <div class="mb-8 flex items-center justify-between">
                            <div>
                                <p class="text-sm text-white/65">خريطة العمل</p>
                                <p class="font-[var(--font-display)] text-2xl font-extrabold">من أول اتصال إلى إغلاق الملف</p>
                            </div>
                            <span class="rounded-full border border-white/15 bg-white/10 px-3 py-1 text-xs font-semibold">RTL Ready</span>
                        </div>
                        <div class="space-y-4">
                            <div class="rounded-[1.5rem] bg-white/8 p-5 backdrop-blur">
                                <p class="text-sm text-white/55">01</p>
                                <h2 class="mt-2 text-xl font-bold">تشخيص قانوني سريع</h2>
                                <p class="mt-2 text-sm leading-7 text-white/70">مراجعة الوقائع وتحديد المخاطر والأولوية وخط سير المعالجة.</p>
                            </div>
                            <div class="rounded-[1.5rem] bg-[rgba(224,164,93,0.13)] p-5 backdrop-blur">
                                <p class="text-sm text-white/55">02</p>
                                <h2 class="mt-2 text-xl font-bold">خطة تنفيذ واضحة</h2>
                                <p class="mt-2 text-sm leading-7 text-white/70">مهام محددة، توقيت معلوم، وتحديثات يفهمها العميل دون تعقيد.</p>
                            </div>
                            <div class="rounded-[1.5rem] border border-dashed border-white/15 p-5">
                                <p class="text-sm text-white/55">03</p>
                                <h2 class="mt-2 text-xl font-bold">تقارير ومتابعة مستمرة</h2>
                                <p class="mt-2 text-sm leading-7 text-white/70">لوحة متابعة داخلية تساعد المكتب على تنظيم الجلسات، المهام، والعملاء.</p>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </section>

        <section id="services" class="border-y border-[var(--line)] bg-white/65 py-20 backdrop-blur">
            <div class="mx-auto max-w-7xl px-6 lg:px-10">
                <div class="mb-10 flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
                    <div>
                        <p class="text-sm font-bold uppercase tracking-[0.2em] text-[var(--accent-strong)]">Services</p>
                        <h2 class="mt-3 font-[var(--font-display)] text-4xl font-extrabold text-[var(--ink)]">خدمات مصممة لوتيرة القضايا الحقيقية</h2>
                    </div>
                    <p class="max-w-2xl text-base leading-8 text-[var(--muted)]">
                        تم تنظيم العرض ليخدم قرار العميل التجاري أو الشخصي بسرعة، وليس ليبقى مجرد وصف قانوني عام.
                    </p>
                </div>
                <div class="grid gap-5 lg:grid-cols-3">
                    <article class="rounded-[1.75rem] border border-[var(--line)] bg-[var(--card)] p-6 shadow-[0_18px_45px_rgba(68,31,12,0.07)]">
                        <p class="text-sm font-bold text-[var(--accent-strong)]">القضايا والنزاعات</p>
                        <h3 class="mt-3 text-2xl font-extrabold text-[var(--ink)]">إدارة الدعوى من الملف إلى الحكم</h3>
                        <p class="mt-4 leading-8 text-[var(--muted)]">تجهيز ملف الدعوى، المذكرات، المتابعة الإجرائية، وتقييم فرص المسار الأنسب.</p>
                    </article>
                    <article class="rounded-[1.75rem] border border-[var(--line)] bg-[var(--card)] p-6 shadow-[0_18px_45px_rgba(68,31,12,0.07)]">
                        <p class="text-sm font-bold text-[var(--accent-strong)]">العقود والشركات</p>
                        <h3 class="mt-3 text-2xl font-extrabold text-[var(--ink)]">صياغة توازن بين الحماية والمرونة</h3>
                        <p class="mt-4 leading-8 text-[var(--muted)]">مراجعة العقود، تأسيس السياسات الداخلية، وضبط البنود التي تقلل النزاع قبل وقوعه.</p>
                    </article>
                    <article class="rounded-[1.75rem] border border-[var(--line)] bg-[var(--card)] p-6 shadow-[0_18px_45px_rgba(68,31,12,0.07)]">
                        <p class="text-sm font-bold text-[var(--accent-strong)]">الاستشارات والتنظيم</p>
                        <h3 class="mt-3 text-2xl font-extrabold text-[var(--ink)]">قرار قانوني أسرع داخل المكتب</h3>
                        <p class="mt-4 leading-8 text-[var(--muted)]">رؤية تنفيذية للموقف القانوني، مع توصيات قابلة للتطبيق الفوري في العمل اليومي.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="about" class="mx-auto max-w-7xl px-6 py-20 lg:px-10">
            <div class="grid gap-6 lg:grid-cols-[0.9fr_1.1fr]">
                <div class="rounded-[2rem] bg-[linear-gradient(180deg,_rgba(255,255,255,0.85),_rgba(245,233,221,0.9))] p-7 shadow-[0_18px_60px_rgba(68,31,12,0.08)]">
                    <p class="text-sm font-bold uppercase tracking-[0.18em] text-[var(--accent-strong)]">About</p>
                    <h2 class="mt-4 font-[var(--font-display)] text-4xl font-extrabold leading-tight text-[var(--ink)]">
                        نبرة مهنية هادئة، وهوية بصرية جادة، وتجربة واضحة للعميل.
                    </h2>
                </div>
                <div class="grid gap-5 sm:grid-cols-2">
                    <article class="rounded-[1.75rem] border border-[var(--line)] bg-white p-6">
                        <h3 class="text-xl font-extrabold text-[var(--ink)]">لغة مفهومة</h3>
                        <p class="mt-3 leading-8 text-[var(--muted)]">نحوّل المصطلحات المعقدة إلى قرارات واضحة يفهمها العميل ويتحرك على أساسها.</p>
                    </article>
                    <article class="rounded-[1.75rem] border border-[var(--line)] bg-white p-6">
                        <h3 class="text-xl font-extrabold text-[var(--ink)]">متابعة منظمة</h3>
                        <p class="mt-3 leading-8 text-[var(--muted)]">الملفات والجلسات والمهام مصممة لتظهر لاحقًا داخل لوحة تحكم عملية للمكتب.</p>
                    </article>
                    <article class="rounded-[1.75rem] border border-[var(--line)] bg-white p-6">
                        <h3 class="text-xl font-extrabold text-[var(--ink)]">هوية قابلة للتوسع</h3>
                        <p class="mt-3 leading-8 text-[var(--muted)]">الصفحة الرئيسية مبنية لتستوعب الخدمات والمحتوى القانوني لاحقًا بدون إعادة بناء كاملة.</p>
                    </article>
                    <article class="rounded-[1.75rem] border border-[var(--line)] bg-white p-6">
                        <h3 class="text-xl font-extrabold text-[var(--ink)]">تجهيز للنشر</h3>
                        <p class="mt-3 leading-8 text-[var(--muted)]">الهيكل الحالي متوافق مع Laravel وVite وGitHub Actions الموجودين بالفعل في المشروع.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="contact" class="mx-auto max-w-7xl px-6 pb-20 lg:px-10">
            <div class="rounded-[2.25rem] bg-[linear-gradient(130deg,_rgba(88,36,14,0.98),_rgba(23,14,12,1))] px-8 py-10 text-white shadow-[0_35px_90px_rgba(43,18,7,0.25)] lg:flex lg:items-center lg:justify-between">
                <div class="max-w-2xl">
                    <p class="text-sm font-bold uppercase tracking-[0.2em] text-[rgba(242,211,178,0.8)]">Contact</p>
                    <h2 class="mt-4 font-[var(--font-display)] text-4xl font-extrabold leading-tight">جاهز نبدأ نسخة المكتب الفعلية من هنا.</h2>
                    <p class="mt-4 leading-8 text-[rgba(255,255,255,0.72)]">هذه بداية واجهة قابلة للتوسع. الخطوة التالية الطبيعية هي ربطها بخدمات حقيقية وصفحات إدارة داخلية.</p>
                </div>
                <div class="mt-8 flex flex-col gap-3 lg:mt-0 lg:min-w-72">
                    <a href="/dashboard" class="inline-flex items-center justify-center rounded-full bg-white px-6 py-3 text-base font-extrabold text-[var(--accent-strong)] transition hover:bg-[var(--sand)]">
                        فتح لوحة التحكم
                    </a>
                    <a href="mailto:contact@shorabalawfirm.com" class="inline-flex items-center justify-center rounded-full border border-white/20 px-6 py-3 text-base font-bold text-white transition hover:bg-white/8">
                        contact@shorabalawfirm.com
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection
