from telebot import types

def markup_change_Language():
  markup = types.InlineKeyboardMarkup(row_width=2)
  items1 = types.InlineKeyboardButton(text='Indonesia',callback_data='language_id')
  items2 = types.InlineKeyboardButton(text='Inggris', callback_data='language_uk')
  markup.add(items1, items2)
  return markup

def markup_menu(default_languange):
  markup = types.InlineKeyboardMarkup(row_width=2)
  items1 = types.InlineKeyboardButton(text='Menu 1',callback_data='menu1')
  items2 = types.InlineKeyboardButton(text='Menu 2', callback_data='menu2')
  items3 = types.InlineKeyboardButton(text=str(default_languange.loc[200]['text']).replace("\\n", "\n"), callback_data='change_language')
  markup.add(items1, items2, items3)
  return markup

def markup_reply():
  markup = types.ForceReply(selective=False)
  return markup