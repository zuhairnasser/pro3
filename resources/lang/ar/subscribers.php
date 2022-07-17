<?php
return [
    'breadcrumbs' => [
    ],
    'index' => [
        'content-title' => 'المشتركين في الوثيقة',
        'empty-message' => 'لا يوجد مشتركين',
        'no-notes' => 'لا توجد ملاحظات',
        'no-diagnosis' => 'لا يوجد تشخيص',
        'links' => [
            'create' => 'إضافة مشترك',
            'create-from-old' => 'إضافة من السجلات السابقة',
            'import-from-excel' => 'إستيراد من ملف إكسيل (Excel)'
        ],
        'buttons' => [
            'approvals' => 'الموافقات'
        ],
        'tables' => [
            'classes' => [
                'class' => 'الفئة',
                'limit' => 'السقف'
            ],
            'subscribers' => [
                'date' => 'تاريخ الإشتراك',
                'name' => 'الإسم',
                'card-no' => 'رقم البطاقة',
                'amount' => 'متبقي المبلغ من السقف',
                'class' => 'الفئة',
                'months' => 'الشهور',
                'phone' => 'رقم الهاتف',
                'diagnosis' => 'التشخيص',
                'notes' => 'ملاحظات',
                'controls' => 'تحكم',
                'number-of-months' => 'عدد شهور الإشتراك:',
                'remaining-months' => 'الشهور المتبقية:'
            ]
        ]
    ],
    'create' => [
        'content-title' => 'إضافة مشترك',
    ],
    'create-from-old' => [
        'content-title' => 'جلب من سجلات سابقة',
        'table-title' => 'الرجاء إختيار المشتركين الذين تريد جلبهم من الوثيقة المختارة أعلاة.',
        'tables' => [
            'subscribers' => [
                'name' => 'إسم المشترك',
                'controls' => 'تحكم',
                'empty-table' => 'لا يوجد مشتركين في هذة الوثيقة.'
            ]
        ]
    ],
    'create-from-excel' => [
        'content-title' => 'إستيراد من  ملف إكسيل',

    ],
    'edit' => [
        'content-title' => 'تعديل'
    ],
    'forms' => [
        'name' => 'الإسم',
        'date' => 'تاريخ الإشتراك',
        'card-no' => 'رقم البطاقة',
        'months' => 'الشهور',
        'class' => 'الفئة',
        'amount' => 'المبلغ',
        'phone' => 'رقم الهاتف',
        'diagnosis' => 'التشخيص',
        'notes' => 'الملاحظات',
        'amount-note' => 'يتم حسابه بناءً على سقف الفئة المحددة مسبقاً.',
        'choose-class' => 'إختار الفئة لهذا المشترك',
        'choose-document' => 'إختار الوقيقة'
    ],
    'filters' => [
        'search-type' => 'إختار نوع البحث',
        'search' => 'بحث...',
        'types' => [
            'by-name' => 'بحث بالإسم',
            'by-phone' => 'بحث بالهاتف',
            'by-date' => 'بحث بالتاريخ',
            'by-card-no' => 'بحث برقم البطاقة',
            'by-amount' => 'بحث بالقيمة',
            'by-class' => 'بحث بالفئة',
            'by-diagnosis' => 'بحث بالتشخيص'
        ]
    ],
    'loading-messages' => [
        'calculating-months' => 'جاري حساب متبقي الشهور. الرجاء الإنتظار...'
    ]
];
