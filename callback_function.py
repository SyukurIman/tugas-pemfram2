# -*- coding: utf-8 -*-
def check_callback_message(call):
    if call.data == 'language_id':
        return '✅ Benar!'
    if call.data == 'language_uk':
        return '✅ Correct!'