@extends('layouts.app', ['title' => 'لوحة التحكم | مكتب شوربة للمحاماة'])

@section('content')
    <main class="min-h-screen bg-[var(--dashboard-bg)] px-6 py-8 lg:px-10">
        <div class="mx-auto max-w-7xl">
            <header class="mb-8 flex flex-col gap-4 rounded-[2rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-panel)] p-6 shadow-[0_25px_70px_rgba(19,27,42,0.12)] lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <p class="text-sm font-bold uppercase tracking-[0.2em] text-[var(--dashboard-accent)]">Dashboard</p>
                    <h1 class="mt-3 font-[var(--font-display)] text-4xl font-extrabold text-[var(--dashboard-ink)]">إدارة محتوى الموقع</h1>
                    <p class="mt-3 max-w-2xl leading-8 text-[var(--dashboard-muted)]">
                        من هنا تقدر تعدل محتوى الصفحة الرئيسية بدون لمس الكود.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="/" class="rounded-full border border-[var(--dashboard-line-strong)] px-5 py-3 text-sm font-bold text-[var(--dashboard-ink)] transition hover:border-[var(--dashboard-accent)] hover:text-[var(--dashboard-accent)]">
                        عرض الموقع
                    </a>
                </div>
            </header>

            @if (session('status'))
                <div class="mb-6 rounded-[1.5rem] border border-[rgba(69,133,109,0.2)] bg-[rgba(69,133,109,0.08)] px-5 py-4 text-sm font-bold text-[rgb(41,92,75)]">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-6 rounded-[1.5rem] border border-[rgba(178,58,58,0.2)] bg-[rgba(178,58,58,0.08)] px-5 py-4 text-sm text-[rgb(126,45,45)]">
                    {{ $errors->first() }}
                </div>
            @endif

            <section class="grid gap-6 lg:grid-cols-[1.35fr_0.65fr]">
                <form method="POST" action="{{ route('dashboard.update') }}" class="rounded-[2rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-panel)] p-6 shadow-[0_25px_70px_rgba(19,27,42,0.12)]">
                    @csrf
                    @method('PUT')

                    <div class="mb-6 flex items-center justify-between">
                        <div>
                            <h2 class="text-2xl font-extrabold text-[var(--dashboard-ink)]">تعديل الصفحة الرئيسية</h2>
                            <p class="mt-2 text-sm text-[var(--dashboard-muted)]">اضغط حفظ لتحديث النصوص مباشرة.</p>
                        </div>
                        <button type="submit" class="rounded-full bg-[var(--dashboard-accent)] px-5 py-3 text-sm font-bold text-white shadow-[0_20px_35px_rgba(13,106,135,0.24)]">
                            حفظ التعديلات
                        </button>
                    </div>

                    <div class="grid gap-6">
                        <section class="grid gap-4 rounded-[1.6rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-tile)] p-5 md:grid-cols-2">
                            <div>
                                <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">اسم المكتب</label>
                                <input name="brand_name" value="{{ old('brand_name', $content['brand_name']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">الوصف المختصر</label>
                                <input name="brand_tagline" value="{{ old('brand_tagline', $content['brand_tagline']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                            </div>
                            <div class="md:col-span-2">
                                <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">الشريط العلوي</label>
                                <input name="hero_badge" value="{{ old('hero_badge', $content['hero_badge']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                            </div>
                            <div class="md:col-span-2">
                                <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">العنوان الرئيسي</label>
                                <input name="hero_title" value="{{ old('hero_title', $content['hero_title']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                            </div>
                            <div class="md:col-span-2">
                                <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">الوصف الرئيسي</label>
                                <textarea name="hero_description" rows="4" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]">{{ old('hero_description', $content['hero_description']) }}</textarea>
                            </div>
                        </section>

                        <section class="grid gap-4 rounded-[1.6rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-tile)] p-5 md:grid-cols-2">
                            <div>
                                <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">اسم رابط الخدمات</label>
                                <input name="nav_services_label" value="{{ old('nav_services_label', $content['nav_services_label']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">اسم رابط عن المكتب</label>
                                <input name="nav_about_label" value="{{ old('nav_about_label', $content['nav_about_label']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">اسم رابط التواصل</label>
                                <input name="nav_contact_label" value="{{ old('nav_contact_label', $content['nav_contact_label']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">اسم زر لوحة التحكم</label>
                                <input name="dashboard_link_label" value="{{ old('dashboard_link_label', $content['dashboard_link_label']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                            </div>
                        </section>

                        <section class="grid gap-4 rounded-[1.6rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-tile)] p-5 md:grid-cols-2">
                            <div>
                                <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">زر رئيسي</label>
                                <input name="primary_cta_label" value="{{ old('primary_cta_label', $content['primary_cta_label']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">رابط الزر الرئيسي</label>
                                <input name="primary_cta_link" value="{{ old('primary_cta_link', $content['primary_cta_link']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">زر ثانوي</label>
                                <input name="secondary_cta_label" value="{{ old('secondary_cta_label', $content['secondary_cta_label']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">رابط الزر الثانوي</label>
                                <input name="secondary_cta_link" value="{{ old('secondary_cta_link', $content['secondary_cta_link']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                            </div>
                        </section>

                        <section class="grid gap-4 rounded-[1.6rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-tile)] p-5 md:grid-cols-3">
                            @foreach ([1, 2, 3] as $stat)
                                <div>
                                    <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">عنوان رقم {{ $stat }}</label>
                                    <input name="stat_{{ $stat }}_label" value="{{ old('stat_' . $stat . '_label', $content['stat_' . $stat . '_label']) }}" class="mb-3 w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                                    <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">قيمة رقم {{ $stat }}</label>
                                    <input name="stat_{{ $stat }}_value" value="{{ old('stat_' . $stat . '_value', $content['stat_' . $stat . '_value']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                                </div>
                            @endforeach
                        </section>

                        <section class="grid gap-4 rounded-[1.6rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-tile)] p-5">
                            <div class="grid gap-4 md:grid-cols-3">
                                <div>
                                    <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">عنوان شريط الجانب</label>
                                    <input name="workflow_eyebrow" value="{{ old('workflow_eyebrow', $content['workflow_eyebrow']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                                </div>
                                <div class="md:col-span-2">
                                    <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">عنوان خطة العمل</label>
                                    <input name="workflow_title" value="{{ old('workflow_title', $content['workflow_title']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                                </div>
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">شارة خطة العمل</label>
                                <input name="workflow_badge" value="{{ old('workflow_badge', $content['workflow_badge']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                            </div>
                            @foreach ([1, 2, 3] as $step)
                                <div class="grid gap-4 md:grid-cols-2">
                                    <div>
                                        <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">عنوان خطوة {{ $step }}</label>
                                        <input name="workflow_step_{{ $step }}_title" value="{{ old('workflow_step_' . $step . '_title', $content['workflow_step_' . $step . '_title']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                                    </div>
                                    <div>
                                        <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">وصف خطوة {{ $step }}</label>
                                        <textarea name="workflow_step_{{ $step }}_text" rows="3" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]">{{ old('workflow_step_' . $step . '_text', $content['workflow_step_' . $step . '_text']) }}</textarea>
                                    </div>
                                </div>
                            @endforeach
                        </section>

                        <section class="grid gap-4 rounded-[1.6rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-tile)] p-5">
                            <div>
                                <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">العلامة الصغيرة لقسم الخدمات</label>
                                <input name="services_label" value="{{ old('services_label', $content['services_label']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">عنوان قسم الخدمات</label>
                                <input name="services_heading" value="{{ old('services_heading', $content['services_heading']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">وصف قسم الخدمات</label>
                                <textarea name="services_description" rows="3" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]">{{ old('services_description', $content['services_description']) }}</textarea>
                            </div>
                            @foreach ([1, 2, 3] as $service)
                                <div class="grid gap-4 md:grid-cols-2">
                                    <div>
                                        <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">عنوان خدمة {{ $service }}</label>
                                        <input name="service_{{ $service }}_title" value="{{ old('service_' . $service . '_title', $content['service_' . $service . '_title']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                                    </div>
                                    <div>
                                        <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">وصف خدمة {{ $service }}</label>
                                        <textarea name="service_{{ $service }}_text" rows="3" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]">{{ old('service_' . $service . '_text', $content['service_' . $service . '_text']) }}</textarea>
                                    </div>
                                </div>
                            @endforeach
                        </section>

                        <section class="grid gap-4 rounded-[1.6rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-tile)] p-5">
                            <div>
                                <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">العلامة الصغيرة لقسم عن المكتب</label>
                                <input name="about_label" value="{{ old('about_label', $content['about_label']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">عنوان قسم عن المكتب</label>
                                <input name="about_heading" value="{{ old('about_heading', $content['about_heading']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                            </div>
                            @foreach ([1, 2, 3, 4] as $card)
                                <div class="grid gap-4 md:grid-cols-2">
                                    <div>
                                        <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">عنوان بطاقة {{ $card }}</label>
                                        <input name="about_card_{{ $card }}_title" value="{{ old('about_card_' . $card . '_title', $content['about_card_' . $card . '_title']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                                    </div>
                                    <div>
                                        <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">وصف بطاقة {{ $card }}</label>
                                        <textarea name="about_card_{{ $card }}_text" rows="3" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]">{{ old('about_card_' . $card . '_text', $content['about_card_' . $card . '_text']) }}</textarea>
                                    </div>
                                </div>
                            @endforeach
                        </section>

                        <section class="grid gap-4 rounded-[1.6rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-tile)] p-5 md:grid-cols-2">
                            <div>
                                <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">العلامة الصغيرة لقسم التواصل</label>
                                <input name="contact_label" value="{{ old('contact_label', $content['contact_label']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">اسم زر لوحة التحكم في التواصل</label>
                                <input name="contact_dashboard_button" value="{{ old('contact_dashboard_button', $content['contact_dashboard_button']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                            </div>
                            <div class="md:col-span-2">
                                <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">عنوان قسم التواصل</label>
                                <input name="contact_heading" value="{{ old('contact_heading', $content['contact_heading']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                            </div>
                            <div class="md:col-span-2">
                                <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">نص قسم التواصل</label>
                                <textarea name="contact_text" rows="3" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]">{{ old('contact_text', $content['contact_text']) }}</textarea>
                            </div>
                            <div class="md:col-span-2">
                                <label class="mb-2 block text-sm font-bold text-[var(--dashboard-ink)]">إيميل التواصل</label>
                                <input type="email" name="contact_email" value="{{ old('contact_email', $content['contact_email']) }}" class="w-full rounded-2xl border border-[var(--dashboard-line)] bg-white px-4 py-3 text-sm outline-none transition focus:border-[var(--dashboard-accent)]" />
                            </div>
                        </section>
                    </div>
                </form>

                <div class="space-y-6">
                    <section class="rounded-[2rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-panel)] p-6">
                        <h2 class="text-2xl font-extrabold text-[var(--dashboard-ink)]">ملخص المحتوى الحالي</h2>
                        <div class="mt-5 space-y-4 text-sm leading-7 text-[var(--dashboard-muted)]">
                            <div class="rounded-[1.25rem] bg-[var(--dashboard-tile)] p-4">
                                <p class="font-bold text-[var(--dashboard-ink)]">العنوان الرئيسي</p>
                                <p class="mt-2">{{ $content['hero_title'] }}</p>
                            </div>
                            <div class="rounded-[1.25rem] bg-[var(--dashboard-tile)] p-4">
                                <p class="font-bold text-[var(--dashboard-ink)]">قسم الخدمات</p>
                                <p class="mt-2">{{ $content['services_heading'] }}</p>
                            </div>
                            <div class="rounded-[1.25rem] bg-[var(--dashboard-tile)] p-4">
                                <p class="font-bold text-[var(--dashboard-ink)]">إيميل التواصل</p>
                                <p class="mt-2">{{ $content['contact_email'] }}</p>
                            </div>
                        </div>
                    </section>

                    <section class="rounded-[2rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-panel)] p-6">
                        <h2 class="text-2xl font-extrabold text-[var(--dashboard-ink)]">المتاح تعديله الآن</h2>
                        <div class="mt-5 space-y-3 text-sm leading-7 text-[var(--dashboard-muted)]">
                            <div class="rounded-[1.2rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-tile)] px-4 py-3">الهيدر والعنوان الرئيسي والأزرار.</div>
                            <div class="rounded-[1.2rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-tile)] px-4 py-3">الأرقام التعريفية في البانر الأول.</div>
                            <div class="rounded-[1.2rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-tile)] px-4 py-3">قسم الخدمات بالكامل.</div>
                            <div class="rounded-[1.2rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-tile)] px-4 py-3">قسم عن المكتب وبطاقاته.</div>
                            <div class="rounded-[1.2rem] border border-[var(--dashboard-line)] bg-[var(--dashboard-tile)] px-4 py-3">قسم التواصل والإيميل الظاهر في الصفحة.</div>
                        </div>
                    </section>
                </div>
            </section>
        </div>
    </main>
@endsection
