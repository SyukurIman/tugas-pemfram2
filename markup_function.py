from telebot import types

def markup_change_Language():
  markup = types.InlineKeyboardMarkup(row_width=2)
  items1 = types.InlineKeyboardButton(text='Indonesia',callback_data='language_id')
  items2 = types.InlineKeyboardButton(text='Inggris', callback_data='language_uk')
  markup.add(items1, items2)
  return markup

def markup_reply():
  markup = types.ForceReply(selective=False)
  return markup