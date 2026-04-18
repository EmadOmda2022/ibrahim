<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteContent extends Model
{
    protected $fillable = [
        'key',
        'content',
    ];

    protected function casts(): array
    {
        return [
            'content' => 'array',
        ];
    }

    public static function homepage(): self
    {
        return static::query()->firstOrCreate(
            ['key' => 'homepage'],
            ['content' => static::defaults()]
        );
    }

    public static function defaults(): array
    {
        return [
            'brand_name' => 'شوربة',
            'brand_tagline' => 'للمحاماة والاستشارات القانونية',
            'nav_services_label' => 'الخدمات',
            'nav_about_label' => 'عن المكتب',
            'nav_contact_label' => 'التواصل',
            'dashboard_link_label' => 'لوحة التحكم',
            'hero_badge' => 'حضور قانوني واضح. تنفيذ منضبط. تواصل مباشر.',
            'hero_title' => 'مكتب قانوني حديث .',
            'hero_description' => 'نساعد الأفراد والشركات على إدارة النزاعات، صياغة العقود، وحماية القرار القانوني بخبرة عملية وعرض واضح وسريع.',
            'primary_cta_label' => 'احجز استشارة أولية',
            'primary_cta_link' => '#contact',
            'secondary_cta_label' => 'استعرض مجالات العمل',
            'secondary_cta_link' => '#services',
            'stat_1_label' => 'قضايا منجزة',
            'stat_1_value' => '+420',
            'stat_2_label' => 'عملاء شركات',
            'stat_2_value' => '38',
            'stat_3_label' => 'متوسط الرد',
            'stat_3_value' => '24h',
            'workflow_eyebrow' => 'خريطة العمل',
            'workflow_title' => 'من أول اتصال إلى إغلاق الملف',
            'workflow_badge' => 'RTL Ready',
            'workflow_step_1_title' => 'تشخيص قانوني سريع',
            'workflow_step_1_text' => 'مراجعة الوقائع وتحديد المخاطر والأولوية وخط سير المعالجة.',
            'workflow_step_2_title' => 'خطة تنفيذ واضحة',
            'workflow_step_2_text' => 'مهام محددة، توقيت معلوم، وتحديثات يفهمها العميل دون تعقيد.',
            'workflow_step_3_title' => 'تقارير ومتابعة مستمرة',
            'workflow_step_3_text' => 'لوحة متابعة داخلية تساعد المكتب على تنظيم الجلسات، المهام، والعملاء.',
            'services_label' => 'Services',
            'services_heading' => 'خدمات مصممة لوتيرة القضايا الحقيقية',
            'services_description' => 'تم تنظيم العرض ليخدم قرار العميل التجاري أو الشخصي بسرعة، وليس ليبقى مجرد وصف قانوني عام.',
            'service_1_title' => 'إدارة الدعوى من الملف إلى الحكم',
            'service_1_text' => 'تجهيز ملف الدعوى، المذكرات، المتابعة الإجرائية، وتقييم فرص المسار الأنسب.',
            'service_2_title' => 'صياغة توازن بين الحماية والمرونة',
            'service_2_text' => 'مراجعة العقود، تأسيس السياسات الداخلية، وضبط البنود التي تقلل النزاع قبل وقوعه.',
            'service_3_title' => 'قرار قانوني أسرع داخل المكتب',
            'service_3_text' => 'رؤية تنفيذية للموقف القانوني، مع توصيات قابلة للتطبيق الفوري في العمل اليومي.',
            'about_label' => 'About',
            'about_heading' => 'نبرة مهنية هادئة، وهوية بصرية جادة، وتجربة واضحة للعميل.',
            'about_card_1_title' => 'لغة مفهومة',
            'about_card_1_text' => 'نحوّل المصطلحات المعقدة إلى قرارات واضحة يفهمها العميل ويتحرك على أساسها.',
            'about_card_2_title' => 'متابعة منظمة',
            'about_card_2_text' => 'الملفات والجلسات والمهام مصممة لتظهر لاحقًا داخل لوحة تحكم عملية للمكتب.',
            'about_card_3_title' => 'هوية قابلة للتوسع',
            'about_card_3_text' => 'الصفحة الرئيسية مبنية لتستوعب الخدمات والمحتوى القانوني لاحقًا بدون إعادة بناء كاملة.',
            'about_card_4_title' => 'تجهيز للنشر',
            'about_card_4_text' => 'الهيكل الحالي متوافق مع Laravel وVite وGitHub Actions الموجودين بالفعل في المشروع.',
            'contact_label' => 'Contact',
            'contact_heading' => 'جاهز نبدأ نسخة المكتب الفعلية من هنا.',
            'contact_text' => 'هذه بداية واجهة قابلة للتوسع. الخطوة التالية الطبيعية هي ربطها بخدمات حقيقية وصفحات إدارة داخلية.',
            'contact_email' => 'contact@shorabalawfirm.com',
            'contact_dashboard_button' => 'فتح لوحة التحكم',
        ];
    }

    public function mergedContent(): array
    {
        return array_merge(static::defaults(), $this->content ?? []);
    }
}
