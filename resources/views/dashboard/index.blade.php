@extends('layouts.app', ['title' => 'لوحة التحكم | مكتب شوربة للمحاماة'])

@section('content')
    <main class="min-h-screen bg-[var(--dashboard-bg)] px-6 py-8 lg:px-10">
        <div class="mx-auto max-w-7xl">
            <header class="mb-8 flex flex-col gap-4 rounded-[2rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-panel)] p-6 shadow-[0_25px_70px_rgba(19,27,42,0.12)] lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <p class="text-sm font-bold uppercase tracking-[0.2em] text-[var(--dashboard-accent)]">Dashboard</p>
                    <h1 class="mt-3 font-[var(--font-display)] text-4xl font-extrabold text-[var(--dashboard-ink)]">لوحة إدارة أولية للمكتب</h1>
                    <p class="mt-3 max-w-2xl leading-8 text-[var(--dashboard-muted)]">
                        هذه نسخة تأسيسية لتنظيم المتابعة الداخلية. الخطوة التالية ستكون ربطها ببيانات حقيقية للعملاء والقضايا والمهام.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="/" class="rounded-full border border-[var(--dashboard-line-strong)] px-5 py-3 text-sm font-bold text-[var(--dashboard-ink)] transition hover:border-[var(--dashboard-accent)] hover:text-[var(--dashboard-accent)]">
                        العودة للموقع
                    </a>
                    <button type="button" class="rounded-full bg-[var(--dashboard-accent)] px-5 py-3 text-sm font-bold text-white shadow-[0_20px_35px_rgba(13,106,135,0.24)]">
                        إضافة مهمة
                    </button>
                </div>
            </header>

            <section class="mb-8 grid gap-5 lg:grid-cols-4">
                <article class="rounded-[1.6rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-panel)] p-5">
                    <p class="text-sm text-[var(--dashboard-muted)]">العملاء النشطون</p>
                    <p class="mt-3 font-[var(--font-display)] text-4xl font-extrabold text-[var(--dashboard-ink)]">28</p>
                </article>
                <article class="rounded-[1.6rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-panel)] p-5">
                    <p class="text-sm text-[var(--dashboard-muted)]">القضايا المفتوحة</p>
                    <p class="mt-3 font-[var(--font-display)] text-4xl font-extrabold text-[var(--dashboard-ink)]">14</p>
                </article>
                <article class="rounded-[1.6rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-panel)] p-5">
                    <p class="text-sm text-[var(--dashboard-muted)]">جلسات هذا الأسبوع</p>
                    <p class="mt-3 font-[var(--font-display)] text-4xl font-extrabold text-[var(--dashboard-ink)]">9</p>
                </article>
                <article class="rounded-[1.6rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-panel)] p-5">
                    <p class="text-sm text-[var(--dashboard-muted)]">مهام عاجلة</p>
                    <p class="mt-3 font-[var(--font-display)] text-4xl font-extrabold text-[var(--dashboard-accent)]">5</p>
                </article>
            </section>

            <section class="grid gap-6 lg:grid-cols-[1.2fr_0.8fr]">
                <div class="rounded-[2rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-panel)] p-6">
                    <div class="mb-6 flex items-center justify-between">
                        <div>
                            <h2 class="text-2xl font-extrabold text-[var(--dashboard-ink)]">المهام الحالية</h2>
                            <p class="mt-2 text-sm text-[var(--dashboard-muted)]">عرض سريع لما يحتاج متابعة اليوم.</p>
                        </div>
                        <span class="rounded-full bg-[var(--dashboard-accent-soft)] px-3 py-2 text-xs font-bold text-[var(--dashboard-accent)]">Today</span>
                    </div>
                    <div class="space-y-4">
                        <article class="rounded-[1.4rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-tile)] p-4">
                            <div class="flex items-center justify-between gap-3">
                                <div>
                                    <h3 class="text-lg font-bold text-[var(--dashboard-ink)]">مراجعة مذكرة رد</h3>
                                    <p class="mt-1 text-sm text-[var(--dashboard-muted)]">ملف شركة الواجهة المتحدة</p>
                                </div>
                                <span class="rounded-full bg-[rgba(178,58,58,0.12)] px-3 py-1 text-xs font-bold text-[rgb(178,58,58)]">عاجل</span>
                            </div>
                        </article>
                        <article class="rounded-[1.4rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-tile)] p-4">
                            <div class="flex items-center justify-between gap-3">
                                <div>
                                    <h3 class="text-lg font-bold text-[var(--dashboard-ink)]">تحديث حالة جلسة</h3>
                                    <p class="mt-1 text-sm text-[var(--dashboard-muted)]">قضية تعويض مدني - عميل فردي</p>
                                </div>
                                <span class="rounded-full bg-[rgba(13,106,135,0.12)] px-3 py-1 text-xs font-bold text-[var(--dashboard-accent)]">متابعة</span>
                            </div>
                        </article>
                        <article class="rounded-[1.4rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-tile)] p-4">
                            <div class="flex items-center justify-between gap-3">
                                <div>
                                    <h3 class="text-lg font-bold text-[var(--dashboard-ink)]">إرسال مسودة عقد</h3>
                                    <p class="mt-1 text-sm text-[var(--dashboard-muted)]">عميل تأسيس شركة جديدة</p>
                                </div>
                                <span class="rounded-full bg-[rgba(113,78,32,0.12)] px-3 py-1 text-xs font-bold text-[rgb(113,78,32)]">بانتظار</span>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="space-y-6">
                    <section class="rounded-[2rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-panel)] p-6">
                        <h2 class="text-2xl font-extrabold text-[var(--dashboard-ink)]">مؤشرات المكتب</h2>
                        <div class="mt-5 space-y-4">
                            <div>
                                <div class="mb-2 flex items-center justify-between text-sm">
                                    <span class="text-[var(--dashboard-muted)]">الالتزام بالمواعيد</span>
                                    <span class="font-bold text-[var(--dashboard-ink)]">92%</span>
                                </div>
                                <div class="h-3 rounded-full bg-[var(--dashboard-line)]">
                                    <div class="h-3 w-[92%] rounded-full bg-[var(--dashboard-accent)]"></div>
                                </div>
                            </div>
                            <div>
                                <div class="mb-2 flex items-center justify-between text-sm">
                                    <span class="text-[var(--dashboard-muted)]">إغلاق المهام</span>
                                    <span class="font-bold text-[var(--dashboard-ink)]">74%</span>
                                </div>
                                <div class="h-3 rounded-full bg-[var(--dashboard-line)]">
                                    <div class="h-3 w-[74%] rounded-full bg-[rgb(69,133,109)]"></div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="rounded-[2rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-panel)] p-6">
                        <h2 class="text-2xl font-extrabold text-[var(--dashboard-ink)]">اختصارات سريعة</h2>
                        <div class="mt-5 grid gap-3">
                            <button type="button" class="rounded-[1.2rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-tile)] px-4 py-3 text-right font-bold text-[var(--dashboard-ink)]">إضافة عميل جديد</button>
                            <button type="button" class="rounded-[1.2rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-tile)] px-4 py-3 text-right font-bold text-[var(--dashboard-ink)]">فتح قضية جديدة</button>
                            <button type="button" class="rounded-[1.2rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-tile)] px-4 py-3 text-right font-bold text-[var(--dashboard-ink)]">تسجيل جلسة</button>
                        </div>
                    </section>
                </div>
            </section>
        </div>
    </main>
@endsection
