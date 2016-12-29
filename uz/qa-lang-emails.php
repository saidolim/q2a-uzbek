<?php
return array(
	'a_commented_body' => "^site_title saytida Sizning javobingizga  ^c_handle tomonidan yangi izoh qoldirildi:\n\n^open^c_content^close\n\nSizning javobingiz quyidagicha edi:\n\n^open^c_context^close\n\nSiz izoh qoldirib javob berishingiz mumkin:\n\n^url\n\nRahmat, \n\n^site_title",
	'a_commented_subject' => '^site_title saytida Sizning javobingizga izoh qoldirildi',
	
	'a_followed_body' => "^site_title saytida Sizning javobingizga ^q_handle tomonidan bog‘langan savol berildi:\n\n^open^q_title^close\n\nSizning javobingiz quyidagicha edi:\n\n^open^a_content^close\n\nBu savolga javob berish uchun quyidagini bosing:\n\n^url\n\nRahmat, \n\n^site_title",
	'a_followed_subject' => '^site_title saytida Sizning savolingizga bog‘langan savol qo‘shildi',
	
	'a_selected_body' => "Tabriklaymiz! ^site_title saytidagi Sizning javobingiz 'Eng Zo‘r' deb belgilandi. Foydalanuvchi: ^s_handle:\n\n^open^a_content^close\n\nSavol:\n\n^open^q_title^close\n\nJavobni ko‘rish uchun quyidagini bosing:\n\n^url\n\nRahmat, \n\n^site_title",
	'a_selected_subject' => "^site_title saytida 'Eng Zo‘r' javob belgilandi!",
	
	'c_commented_body' => "^site_title saytida Sizning izohingizdan so‘ng ^c_handle tomonidan izoh qoldirildi:\n\n^open^c_content^close\n\nMuhokamani davom ettirish:\n\n^open^c_context^close\n\nSiz boshqa izoh qoldira olasiz:\n\n^url\n\nRahmat, \n\n^site_title",
	'c_commented_subject' => '^site_title saytida izoh qoldirildi',
	
	'confirm_body' => "^site_title saytida elektron manzilingizni tasdiqlash uchun quyidagi havolaga bosing.\n\n^url\n\nRahmat, \n^site_title",
	'confirm_subject' => '^site_title - Elektron manzilni tasdiqlash',
	
	'feedback_body' => "Izoh:\n^message\n\nIsm:\n^name\n\nElektron manzil:\n^email\n\nUshbu sahifadan:\n^previous\n\nFoydalanuvchi:\n^url\n\nIP:\n^ip\n\nBrauzer:\n^browser",
	'feedback_subject' => '^ - Fikr',
	
	'flagged_body' => "^p_handle xabar ^flags belgilangan:\n\n^open^p_context^close\n\nXabarni ko‘rish uchun quyidagini bosing:\n\n^url\n\n\nHamma belgilanganlarni ko‘rish uchun quyidagini bosing:\n\n^a_url\n\n\nRahmat, \n\n^site_title",
	'flagged_subject' => '^site_title - Belgilangan xabar',
	
	'moderate_body' => "^p_handle xabari Sizning tasdiqlashingizni kutmoqda:\n\n^open^p_context^close\n\nTasdiqlash yoki bekor qilish uchun quyidagini bosing:\n\n^url\n\n\nTasdiqlashni kutayotgan barcha xabarlarni ko'rish uchun quyidagini bosing:\n\n^a_url\n\n\nRahmat, \n\n^site_title",
	'moderate_subject' => '^site_title - Moderatsiya',
	
	'new_password_body' => "^site_title saytida Sizning yangi parolingiz.\n\nParol: ^password\n\nSaytga kirganingizdan keyin darhol parolingizni o‘zgartirishni maslahat beramiz.\n\nRahmat, \n^site_title\n^url",
	'new_password_subject' => '^site_title - Sizning yangi parolingiz',
	
	'private_message_body' => "^f_handle Sizga ^site_title saytida shaxsiy xabar yubordi:\n\n^open^message^close\n\n^more Rahmat, \n\n^site_title\n\n\nShaxsiy xabarlarni taqiqlash uchun quyidagi havoli orqali saytdagi profilingizga kiring:\n^a_url",
	'private_message_info' => "Bu haqida to‘liqroq ^f_handle:\n\n^url\n\n",
	'private_message_reply' => "^f_handle ga shaxsiy xabariga javob berish uchun quyidagiga bosing:\n\n^url\n\n",
	'private_message_subject' => '^f_handle dan ^site_title saytida yangi xabar',

	'remoderate_body' => "Tahrirlangan ^p_handle xabar Sizning qaytada tasdiqlashingizni kutmoqda:\n\n^open^p_context^close\n\nTahrirlangan xabarnni tasdiqlash yoki yashirish uchun quyidagini bosing:\n\n^url\n\n\nXabarlar ketma-ketligini ko‘rish uchun quyidagini bosing:\n\n^a_url\n\n\nRahmat,\n\n^site_title",
	'remoderate_subject' => "^site_title - Qaytdamoderatsiya",
	
	'q_answered_body' => "^site_title saytida Sizning savolingizga ^a_handle tomonidan javob berildi:\n\n^open^a_content^close\n\nSizning savolingiz:\n\n^open^q_title^close\n\nAgar javob Sizga yoqgan bo‘lsa, uni 'Eng Zo‘r' deb belgilang:\n\n^url\n\nRahmat, \n\n^site_title",
	'q_answered_subject' => '^site_title saytida Sizning savolingizga javob berishdi',
	
	'q_commented_body' => "^site_title saytidagi Sizning savolingizga ^c_handle tomonidan izoh qoldirildi:\n\n^open^c_content^close\n\nSizning savolingiz:\n\n^open^c_context^close\n\nSiz izoh qoldirib, javob berishingiz mumkin:\n\n^url\n\nRahmat, \n\n^site_title",
	'q_commented_subject' => '^site_title saytidagi Sizning savolingizga izoh qoldirildi',
	
	'q_posted_body' => "^q_handle yangi savol berdi:\n\n^open^q_title\n\n^q_content^close\n\nSavolni ko‘rish uchun quyidagini bosing:\n\n^url\n\nRahmat, \n\n^site_title",
	'q_posted_subject' => '^site_title saytida yangi savol qo‘shildi',
	
	'reset_body' => "^site_title saytida parolni o‘zgartirish uchun quyidagiga bosing.\n\n^url\n\nYoki ushbu kodni mos qatorga kiriting.\n\nKod: ^code\n\nAgar Siz parolni o‘zgartirishni so‘ramagan bo‘lsangiz bu xabarga javob bermang.\n\nRahmat, \n^site_title",
	'reset_subject' => '^site_title - Esdan chiqgan parolni tiklash',
	
	'to_handle_prefix' => "^, \n\n",

	'u_approved_body' => "Yangi profilingizni quyidagida ko‘rishingiz mumkin:\n\n^url\n\nRahmat,\n\n^site_title",
	'u_approved_subject' => "Foydalanuvchi ^site_title saytida tasdiqlandi",
	'u_registered_body' => "Yangi foydalanuvchi ^u_handle ro‘yxatdan o‘tdi.\n\nFoydalanuvchi profilini ko‘rish uchun quyidagini bosing:\n\n^url\n\nRahmat,\n\n^site_title",
	'u_registered_subject' => "^site_title - Yangi foydalanuvchi ro‘yxatdan o‘tdi",
	'u_to_approve_body' => "Yangi foydalanuvchi ^u_handle ro‘yxatdan o‘tdi.\n\nFoydalanuvchini ro‘yxatdan o‘tganini tasdiqlash uchun quyidagini bosing:\n\n^url\n\nTasdiqlanishini kutayotgan foydalanuvchilarni ko‘rish uchun quyidagini bosing:\n\n^a_url\n\nRahmat,\n\n^site_title",
	
	'wall_post_subject' => "^site_title - Sizning xabarlar devoringizda yangi xabar",
	'wall_post_body' => "^site_title sayti foydalanuvchisi ^f_handle Sizning xabarlar devoringizda xabar qoldirdi:\n\n^open^post^close\n\nJavob berish uchun quyidagini bosing:\n\n^url\n\nRahmat,\n\n^site_title",

	'welcome_body' => "^site_title saytida ro‘yxatdan o‘tganingiz uchun Sizdan minnatdormiz.\n\n^custom^confirmSizning ma‘lumotlaringiz:\n\nIsm: ^handle\nElektron manzil: ^email\nParol: ^password\n\nBu ma‘lumotlarni yodda eslab qoling\n\nRahmat, \n\n^site_title\n^url",
	'welcome_confirm' => "Iltimos, elektron manzilni tasdiqlash uchun quyidagi havolaga bosing.\n\n^url\n\n",
	'welcome_subject' => '^site_title saytiga xush kelibsiz!',
);