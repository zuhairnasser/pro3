<?php
return [
    'exports' => [
        'subscriber-sample-excel-file' => [
            'class-subscribers' => 'مشتركي الفئة:',
            'class-limit' => 'سقف الفئة:',
            'general-note' => ' يجب أن لا يتم تعديل البيانات الوارد في هذا الملف غير إضافة البيانات المطلوبة فقط!',
            'required-data' => 'البيانات المطلوبة: التاريخ، الإسم، رقم البطاقة',
            'optional-data' => 'البيانات الإختيارية: المبلغ، التلفون، التشخيص، الملاحظات',
            'note-1' => 'ملحوظة(1): سوف يتم حساب متبقي الشهور بحساب فرق الشهور بين التاريخ المدخل و تاريخ نهاية الوثيقة.',
            'note-2' => 'ملحوظة(2): في حال عدم إدخال المبلغ سوف يتم إعتماد قيمة السقف لهذة الفئة و هي (:limit)'
        ]
    ],
    'imports' => [

    ],
    'commons' => [

    ]
];
